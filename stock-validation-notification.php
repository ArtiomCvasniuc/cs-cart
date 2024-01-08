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
$conn = new mysqli($config['db_host'], $config['db_user'], $config['db_password'], $config['db_name']);

$url = $_SERVER['HTTP_HOST'];

// Get all vendors
$query = "SELECT user_id, company_id, email, api_key ";
$query .= "FROM cscart_users ";
$query .= "WHERE user_type = 'V' ";
$query .= "ORDER BY user_id ASC";
$result = $conn->query($query);
while($row = $result->fetch_assoc()) {
    $id = $row['user_id'];
    $company_id = $row['company_id'];
    $email = $row['email'];
    $api_key = $row['api_key'];
    $link = "https://qa.test.ro/stock-validation.php?id=$company_id&token=$api_key";

    $query_count = "SELECT COUNT(product_id) as count ";
    $query_count .= "FROM cscart_products ";
    $query_count .= "WHERE company_id = '".$company_id."'";
    $result_count = $conn->query($query_count);
    $row_count = $result_count->fetch_assoc();
    $count = $row_count['count'];

    if($count > 0) {
        $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
        $headers .= "From: test.ro";
        $subject = "test - Validare Stocuri";
        $body = "Buna ziua, <br>";
        $body .= "<br>Vă rugăm să actualizați stocurile Dvs. utilizând acest link: ";
        $body .= "<a href='$link'>Accesați</a>";
        $body .= "<br><br>Cu respect, test Marketplace";   

        mail($email, $subject, $body, $headers);
    }
}
?>