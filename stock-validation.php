<?php 
use Tygh\Bootstrap;
use Tygh\Debugger;
use Tygh\Helpdesk;
use Tygh\Registry;

// Register autoloader
$this_dir = dirname(__FILE__);
$classLoader = require($this_dir . '/app/lib/vendor/autoload.php');
$classLoader->add('Tygh', $this_dir . '/app');
class_alias('\Tygh\Tygh', 'Tygh');

// Prepare environment and process request vars
list($_REQUEST, $_SERVER, $_GET, $_POST) = Bootstrap::initEnv($_GET, $_POST, $_SERVER, $this_dir);

// Get config data
$config = require(DIR_ROOT . '/config.php');
?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<?php
$conn = new mysqli($config['db_host'], $config['db_user'], $config['db_password'], $config['db_name']);

$id = $_GET['id'];

// Get user's email
$query = "SELECT email FROM cscart_users WHERE company_id = '".$id."'";
$result = $conn->query($query);
$row = $result->fetch_assoc();
$userEmail = $row['email'];

$token = $_GET['token'];

$curl = curl_init();
if($_SERVER['HTTP_HOST'] != 'localhost') {
    curl_setopt($curl, CURLOPT_URL, "https://qa.test.ro/api/vendors/$id/products?items_per_page=1000");
}
else {
    curl_setopt($curl, CURLOPT_URL, "http://localhost/test-ro/api/vendors/$id/products?items_per_page=1000");
}
curl_setopt($curl, CURLOPT_USERPWD, "$userEmail:$token");
curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
$data = curl_exec($curl);
$product_data = json_decode($data, true);

if(isset($_POST['save'])) {
    $data = $_POST['product_data'];

    foreach($data as $product) {
        $product_id = $product['product_id'];
        $product_amount = $product['amount'];

        $query = "UPDATE cscart_products ";
        $query .= "SET amount = '".$product_amount."'";
        if(isset($product['stock_availability_date'])) {
            $product_stock_availability_date = $product['stock_availability_date'];
            if($product_stock_availability_date != '') {
                $query .= ", stock_availability_date = '".$product_stock_availability_date."' ";
            }
        }
        $query .= " WHERE product_id = '".$product_id."'";        
        $result = $conn->query($query);
    }
    ?>
    <div id="success-msg" class="row success-msg">
        <div class="col-12">
            <span class="alert alert-success">
                Stocurile au fost actualizate
            </span>
        </div>
    </div>
    <script>
        setTimeout(function() {
            document.getElementById("success-msg").style.display = "none";
        }, 3000);

        setTimeout('reload()', 1000)();
        
        function reload() {
            if (window.location.href.substr(-2) !== "") {
                window.location = window.location.href + "";
            }
        }
    </script>
    <?php
}
$count = count($product_data['products']);
if($count > 0) {
// Get langvars
$array_keys = array();
$array_values = array();

$conn->query("SET NAMES utf8");

$query = "SELECT name, value FROM cscart_language_values ";
$query .= "WHERE name LIKE '%stock_val%' ";
$query .= "AND lang_code = 'ro'";
$result = $conn->query($query);
while($row = $result->fetch_assoc()) {
    array_push($array_keys, $row['name']);
    array_push($array_values, $row['value']);
    $array = array_combine($array_keys, $array_values);
}
?>
    <div class="container main">
        <div class="row">
            <div class="col-4">
                <img src="images/logos/2/logo.jpg" class="logo" height="90" alt="test Marketplace" title="test Marketplace">
            </div>
            <div class="col-8">
                <div class="stock_validation">
                    <?php echo $array['stock_validation']; ?>
                </div>
            </div>
        </div>
        <br>
        <form method="post" action="">
            <div class="row">
                <div class="col-12 d-flex">
                    <div class="col-3">
                        <input type="text" class="form-control" id="searched-text">
                    </div>
                    <div class="col-1">
                        <button type="button" class="btn btn-info" id="search-btn" onclick="search();">
                            <?php echo $array['stock_validation_search']; ?>
                        </button>
                    </div>
                    <div class="col-1">
                        <button style="display:none;" type="button" class="btn btn-danger clear-search" id="clear-search" onclick="clear_search();">
                            <?php echo $array['stock_validation_clear_search']; ?>
                        </button>
                    </div>
                    <div style="display:none;" id="not-completed" class="col-4 alert alert-danger text-center">
                        <b><?php echo $array['stock_validation_error']; ?></b><br>
                        <?php echo $array['stock_validation_please_check_info']; ?>
                    </div>
                    <div id="save-btn-block" class="col-1 float-right">
                        <button type="submit" class="btn btn-primary" name="save" onclick="save_data();">
                            <?php echo $array['stock_validation_save']; ?>
                        </button>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <table class="table" id="products">
                    <thead class="thead-dark">
                        <tr>
                            <th style="width:10%;"><?php echo $array['stock_validation_image']; ?></th>
                            <th style="width:40%;"><?php echo $array['stock_validation_product_name']; ?></th>
                            <th style="width:20%;"><?php echo $array['stock_validation_product_code']; ?></th>
                            <th style="width:10%;"><?php echo $array['stock_validation_current_stock']; ?></th>
                            <th style="width:10%;"><?php echo $array['stock_validation_action']; ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $i = 1;
                        foreach($product_data['products'] as $product) {
                            $product_id = $product['product_id'];
                            $company_id = $product['company_id'];
                            $product_name = $product['product'];
                            $product_code = $product['product_code'];
                            $product_amount = $product['amount'];
                            $product_stock_availability_date = $product['stock_availability_date'];
                            $product_image = $product['main_pair']['detailed']['image_path'];
                            ?>
                            <input type="hidden" name="product_data[<?php echo $product['product_id']; ?>][product_id]" value="<?php echo $product_id; ?>" />
                            <tr id="row-<?php echo $i; ?>" <?php if($product_amount == 0) echo 'class="low_stock"'; ?>>
                                <td>
                                    <img class="vendor-image" src="<?php echo $product_image; ?>" alt="<?php echo $product_name; ?>">
                                </td>
                                <td>
                                    <?php echo $product_name;  ?>
                                    <input type="hidden" id="product-name-<?php echo $i; ?>" value="<?php echo $product_name; ?>" />
                                </td>
                                <td>
                                    <?php echo $product_code; ?>
                                    <input type="hidden" id="product-code-<?php echo $i; ?>" value="<?php echo $product_code; ?>" />
                                </td>
                                <td>
                                    <?php echo $product_amount; ?>
                                    <?php 
                                    if($product_stock_availability_date != '') {
                                    ?>
                                        <button type="button" class="btn btn-lg btn-warning" data-toggle="popover" data-content="<?php echo $array['stock_validation_available_date'] . ' ' . $product_stock_availability_date; ?>">
                                            <i class="fa fa-info"></i>
                                        </button>
                                    <?php
                                    }
                                    ?>
                                </td>
                                <td>
                                    <form method="post" action="">
                                        <button type="button" class="btn btn-info" onclick="show_edit_block(<?php echo $i; ?>);">
                                            <?php echo $array['stock_validation_edit']; ?>
                                        </button>
                                    </form>
                                    <?php 
                                    if($product['parent_product_id'] != 0) { ?>
                                        <span class="badge badge-secondary">
                                            <?php echo $array['stock_validation_variation']; ?>
                                        </button>
                                    <?php
                                    }
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td style="display:none;" id="edit-block-<?php echo $i; ?>" colspan="8">                              
                                    <div class="row">
                                        <div class="col-2">
                                            <label class="control-label">
                                                <?php echo $array['stock_validation_product_code']; ?>
                                            </label>
                                            <br>
                                            <span><?php echo $product_code; ?></span>
                                        </div>
                                        <div class="col-2">
                                            <label class="control-label">
                                                <?php echo $array['stock_validation_current_stock']; ?>
                                            </label>
                                            <input type="number" min="0" oninput="validity.valid||(value='');" id="current-amount-<?php echo $i; ?>" class="form-control rounded shadow-none" name="product_data[<?php echo $product['product_id']; ?>][amount]" value="<?php echo $product_amount; ?>" onchange="get_amount(<?php echo $i; ?>);">
                                        </div>
                                        <div <?php if($product_amount > 0) echo 'style="display:none;"'; ?> class="col-3" id="availability-<?php echo $i; ?>">
                                            <label class="control-label" data-toggle="popover" data-content="<?php echo $array['stock_validation_later_availability_tooltip']; ?>">
                                                <?php echo $array['stock_validation_later_availability']; ?>
                                                <i class="fa fa-info-circle"></i>
                                            </label>
                                            <input type="checkbox" class="form-control" name="checkbox" id="checkbox-<?php echo $i ;?>" onchange="check_producing(<?php echo $i; ?>);">
                                        </div>
                                        <div style="display:none" class="col-4" id="date-<?php echo $i; ?>">
                                            <label class="control-label">
                                                <?php echo $array['stock_validation_estimated_date']; ?>
                                            </label>
                                            <input type="date" min="<?php echo date("Y-m-d"); ?>" class="form-control" name="product_data[<?php echo $product['product_id']; ?>][stock_availability_date]" id="stock-availability-date-<?php echo $i; ?>" onchange="get_selected_date(<?php echo $i; ?>);">
                                        </div>
                                        <?php if($product_stock_availability_date != '') { ?>
                                            <div class="col-3">
                                                <label class="control-label">
                                                    <?php echo $array['stock_validation_availability_date']; ?>
                                                </label>
                                                <input type="date" class="form-control rounded shadow-none" name="product_data[<?php echo $product['product_id']; ?>][stock_availability_date]" value="<?php echo $product_stock_availability_date; ?>">
                                            </div>
                                        <?php 
                                        }
                                        ?>
                                        <div class="col-1">
                                            <button type="button" class="btn btn-default" onclick="close_edit_block(<?php echo $i; ?>);">
                                                <i class="fa fa-times"></i>
                                            </button>
                                        </div>                                    
                                    </div>
                                </td>
                            </tr>
                            <?php
                            $i++;
                        }
                        ?>
                    </tbody>
                </table>
                <div class="alert alert-warning" id="no-products" style="display:none;">
                    <?php echo $array['stock_validation_no_products']; ?>
                </div>    
            </div>
        </form>
    </div>
    <div style="padding:0px;" class="container main">
        <div class="footer">
            <div class="copyright">
                <?php echo $array['stock_validation_copyright']; ?>
            </div>
        </div>
    </div>
    <style>
    @media (min-width: 992px) {
        .stock_validation {
            text-align: center;
            font-size: 35px;
            font-weight: 600;
            margin-top: 15px;
        }
        tr.low_stock {
            background-color: #efd2d2;
        }
        img.vendor-image {
            max-width: 100%;
            height: 100px;
            object-fit: contain;
            object-position: center;
            vertical-align: top;
        }
        .form-control:focus {
            box-shadow: none !important;
        }
        .footer {
            background: #343a40;
            color: white;
            text-align: center;
            margin-top: 30px;
        }
        .copyright {
            padding-top: 20px;
            padding-bottom: 20px;
        }
        input.form-control.error {
            border: 2px solid red;
        }
        .col-1.float-right {
            margin-left: 500px;
        }
    }
    @media (max-width: 991px) {
        .stock_validation {
            text-align: center;
            font-size: 35px;
            font-weight: 600;
            margin-top: 20px;
            margin-left: 140px;
        }
        tr.low_stock {
            background-color: #efd2d2;
        }
        img.vendor-image {
            max-width: 100%;
            height: 100px;
            object-fit: contain;
            object-position: center;
            vertical-align: top;
        }
        .form-control:focus {
            box-shadow: none !important;
        }
        .footer {
            background: #343a40;
            color: white;
            text-align: center;
            margin-top: 30px;
        }
        .copyright {
            padding-top: 20px;
            padding-bottom: 20px;
        }
        input.form-control.error {
            border: 2px solid red;
        }
        .col-1.float-right {
            margin-left: 240px;
        }
        button.btn.btn-danger.clear-search {
            margin-left: 20px;
        }
        .container.main {
            max-width: 100%;
            padding-right: 30px;
            padding-left: 30px;
            margin-right: auto;
            margin-left: auto;
        }
    }
    .row.success-msg {
        text-align: center;
        margin-top: 10px;
        margin-bottom: 20px;
    }
    .form-control:disabled, .form-control[readonly] {
        background-color: white;
    }
    .btn.focus, .btn:focus {
        box-shadow: none;
    }
    </style>
    <script>
    $("[data-toggle=popover]").popover();

    function show_edit_block(k) {
        document.getElementById("edit-block-"+k).style.display = "table-cell";
    }

    function close_edit_block(k) {
        document.getElementById("edit-block-"+k).style.display = "none";
    }

    function get_amount(k) {
        var amount = document.getElementById("current-amount-"+k).value;
        if(amount == 0) {
            document.getElementById("availability-"+k).style.display = "block";
        }
    }

    function check_producing(k) {
        if(document.getElementById("checkbox-"+k).checked) {
            document.getElementById("date-"+k).style.display = "block";
            document.getElementById("stock-availability-date-"+k).setAttribute("required", "");
            document.getElementById("stock-availability-date-"+k).classList.add("error");
        }
        else {
            document.getElementById("date-"+k).style.display = "none";
            document.getElementById("stock-availability-date-"+k).removeAttribute("required");
            document.getElementById("stock-availability-date-"+k).classList.remove("error");
        }
    }

    function get_selected_date(k) {
        document.getElementById("stock-availability-date-"+k).classList.remove("error");
        save_data();
    }

    function search() {
        var table = document.getElementById("products");
        var count_rows = table.rows.length;
        var searched = document.getElementById("searched-text").value;

        if(searched == '') {
            document.getElementById("searched-text").classList.add("error");
        }
        else {
            document.getElementById("searched-text").classList.remove("error");
            document.getElementById("clear-search").style.display = "block";
        }

        for(var i=0; i<count_rows; i++) {
            if(document.getElementById("product-name-"+i)) {
                var j = 0;
                var product_name = document.getElementById("product-name-"+i).value;
                var product_name_formatted = product_name.toLowerCase();
                var product_code = document.getElementById("product-code-"+i).value;
                if((product_name_formatted.includes(searched)) || (product_code.includes(searched))) {
                    document.getElementById("row-"+i).style.display = "table-row";
                    document.getElementById("row-"+i).classList.add("table-row-active");
                    document.getElementById("no-products").style.display = "none";
                }
                else {                
                    document.getElementById("row-"+i).style.display = "none";                
                    document.getElementById("row-"+i).classList.remove("table-row-active");
                }
            }
        }

        var count_active_rows = table.getElementsByClassName("table-row-active").length;
        var count_active_rows_with_low_stock = table.getElementsByClassName("low_stock table-row-active").length;
        if((count_active_rows == 0) && (count_active_rows_with_low_stock == 0)) {
            document.getElementById("no-products").style.display = "block";
        }
    }

    function clear_search() {
        var table = document.getElementById("products");
        var count_rows = table.rows.length;

        for(var i=0; i<count_rows; i++) {
            if(document.getElementById("product-name-"+i)) {
                document.getElementById("row-"+i).style.display = "table-row";
            }
        }

        document.getElementById("clear-search").style.display = "none";
        document.getElementById("searched-text").value = "";
        document.getElementById("no-products").style.display = "none";
    }

    function save_data() {
        var table = document.getElementById("products");
        var count_rows = table.rows.length;
        var k = 0;
        for(var i=0; i<count_rows; i++) {
            if(document.getElementById("stock-availability-date-"+i)) {
                if(document.getElementById("stock-availability-date-"+i).value == '' && document.getElementById("stock-availability-date-"+i).hasAttribute("required")) {
                    k++;
                }
            }
        }
        if(k > 0) {
            document.getElementById("not-completed").style.display = "block";
            document.getElementById("save-btn-block").classList.remove("float-right");
            document.getElementById("save-btn-block").style.left = "125px";
        }
        else {
            document.getElementById("not-completed").style.display = "none";
            document.getElementById("save-btn-block").classList.add("float-right");
            document.getElementById("save-btn-block").style.left = "0px";
            document.getElementById("products-form").removeAttribute("onsubmit");
        }
    }
    </script>
<?php 
}
else {
    die('Access denied');
}