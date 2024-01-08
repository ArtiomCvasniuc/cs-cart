<?php

/* __string_template__3b09bc0bdcddca245100ad172f8e45da58882951e36689a7cead5b5cd4e09519 */
class __TwigTemplate_db7c19d3ca82f2ee94011f7ba7d8bc77bb2b62558bf11c2ed214a3fe4083edd7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<table width=\"600\" style=\" font-family: Helvetica, Arial, sans-serif; border-collapse: separate;\" rel=\"min-width: 800px; font-family: Helvetica, Arial, sans-serif; border-collapse: separate;\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\">
<tbody>
<tr style=\"vertical-align: top;\">
    <td>
        <table width=\"100%;\" cellspacing=\"0\" border=\"0\" style=\"border-collapse: separate; font-family: Helvetica, Arial, sans-serif;\">
        <tbody>
        <tr>
            <td width=\"50%\" style=\"padding: 0px; padding-bottom: 10px; padding-right: 40px; vertical-align: top; font-family: Helvetica, Arial, sans-serif;\">";
        // line 9
        if ($this->getAttribute((isset($context["pickup_point"]) ? $context["pickup_point"] : null), "is_selected", array())) {
            // line 10
            echo $this->env->getExtension('tygh.core')->snippetFunction($this->env, $context, "pickup_point");
        } else {
            // line 12
            echo $this->env->getExtension('tygh.core')->snippetFunction($this->env, $context, "ship_to");
        }
        // line 14
        echo "            </td>
            <td width=\"50%\" style=\"padding: 0px; padding-bottom: 10px; padding-left: 40px; -webkit-print-color-adjust: exact; vertical-align: top; font-family: Helvetica, Arial, sans-serif;\">
                <p style=\"color: #787878; font-size: 14px; font-family: Helvetica, Arial, sans-serif; padding-bottom: 5px; margin: 0px;\">
                    <span style=\"color: #444444; font-weight: 600; font-family: Helvetica, Arial, sans-serif; text-transform: uppercase;\">";
        // line 17
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "order_date");
        echo "</span>";
        echo $this->getAttribute((isset($context["o"]) ? $context["o"] : null), "timestamp", array());
        echo "
                </p>
                <p style=\"color: #787878; font-size: 14px; font-family: Helvetica, Arial, sans-serif; padding-bottom: 5px; margin: 0px;\">
                    <span style=\"color: #444444; font-weight: 600; font-family: Helvetica, Arial, sans-serif; text-transform: uppercase;\">";
        // line 20
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "payment");
        echo "</span>";
        echo $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "payment", array());
        echo "
                </p>
                <p style=\"color: #787878; font-size: 14px; font-family: Helvetica, Arial, sans-serif; padding-bottom: 5px; margin: 0px;\">
                    <span style=\"color: #444444; font-weight: 600; font-family: Helvetica, Arial, sans-serif; text-transform: uppercase;\">";
        // line 23
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "shipping");
        echo "</span>";
        echo $this->getAttribute((isset($context["o"]) ? $context["o"] : null), "shippings_method", array());
        echo "
                </p>";
        // line 25
        if ($this->getAttribute((isset($context["o"]) ? $context["o"] : null), "tracking_number", array())) {
            // line 26
            echo "                <p style=\"color: #787878; font-size: 14px; font-family: Helvetica, Arial, sans-serif; padding-bottom: 5px; margin: 0px;\">
                    <span style=\"color: #444444; font-weight: 600; font-family: Helvetica, Arial, sans-serif; text-transform: uppercase;\">";
            // line 27
            echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "tracking_number");
            echo "</span>";
            echo $this->getAttribute((isset($context["o"]) ? $context["o"] : null), "tracking_number", array());
            echo "
                </p>";
        }
        // line 30
        echo "            </td>
        </tr>
        </tbody>
        </table>
    </td>
</tr>
<tr>
    <td style=\"padding: 0px;\">";
        // line 38
        echo $this->env->getExtension('tygh.core')->snippetFunction($this->env, $context, "products_table");
        echo "
    </td>
</tr>
<tr>
    <td style=\"padding: 0px; border-top: 2px solid #f5f5f5; padding-top: 10px; font-family: Helvetica, Arial, sans-serif;\">
        <table width=\"100%\" style=\"border-collapse: separate; font-family: Helvetica, Arial, sans-serif;\">
        <tbody>
        <tr>
            <td width=\"66%\" style=\"font-size: 14px; font-family: Helvetica, Arial, sans-serif; line-height: 21px; color: #444444; padding-right: 30px; vertical-align:top;\">";
        // line 47
        if ($this->getAttribute((isset($context["o"]) ? $context["o"] : null), "notes", array())) {
            // line 48
            echo "                <h2 style=\"margin: 0px; font-size: 22px; font-family: Helvetica, Arial, sans-serif; color: #444444; text-transform: uppercase; padding-bottom: 20px; border-bottom: 3px solid #e8e8e8; margin-bottom: 10px;\">";
            echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "customer_notes");
            echo "</h2>";
            // line 49
            echo $this->getAttribute((isset($context["o"]) ? $context["o"] : null), "notes", array());
        }
        // line 51
        echo "            </td>
            <td width=\"34%\" style=\"vertical-align: top; font-family: Helvetica, Arial, sans-serif;\">
                <table width=\"100%;\" style=\"font-size: 14px; font-family: Helvetica, Arial, sans-serif; color: #444;\">
                <tbody>
                    <tr style=\" vertical-align: top; font-family: Helvetica, Arial, sans-serif;\">
                        <td align=\"left\" style=\"padding-bottom: 20px; font-family: Helvetica, Arial, sans-serif;\">";
        // line 56
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "subtotal");
        echo "
                        </td>
                        <td align=\"right\" style=\"font-family: Helvetica, Arial, sans-serif;\">";
        // line 58
        echo $this->getAttribute((isset($context["o"]) ? $context["o"] : null), "display_subtotal", array());
        echo "
                        </td>
                    </tr>
                    <tr style=\" vertical-align: top;\">
                        <td align=\"left\" style=\"padding-bottom: 20px; text-transform: uppercase; font-family: Helvetica, Arial, sans-serif;\">";
        // line 62
        echo $this->getAttribute((isset($context["o"]) ? $context["o"] : null), "tax_name", array());
        echo "
                        </td>
                        <td align=\"right\" style=\"font-family: Helvetica, Arial, sans-serif;\">";
        // line 64
        echo $this->getAttribute((isset($context["o"]) ? $context["o"] : null), "tax_total", array());
        echo "
                        </td>
                    </tr>
                    <tr style=\" vertical-align: top;\">
                        <td align=\"left\" style=\"padding-bottom: 20px; font-family: Helvetica, Arial, sans-serif;\">";
        // line 68
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "shipping");
        echo "
                        </td>
                        <td align=\"right\" style=\"font-family: Helvetica, Arial, sans-serif;\">";
        // line 70
        echo $this->getAttribute((isset($context["o"]) ? $context["o"] : null), "display_shipping_cost", array());
        echo "
                        </td>
                    </tr>
                    <tr style=\" vertical-align: top;\">
                        <td style=\"padding-bottom: 20px; font-family: Helvetica, Arial, sans-serif;\" align=\"left\">";
        // line 74
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "payment_surcharge");
        echo "
                        </td>
                        <td style=\"font-family: Helvetica, Arial, sans-serif;\" align=\"right\">";
        // line 76
        echo $this->getAttribute((isset($context["o"]) ? $context["o"] : null), "payment_surcharge", array());
        echo "
                        </td>
                    </tr>
                    <tr style=\" vertical-align: top; font-family: Helvetica, Arial, sans-serif;\">
                        <td align=\"left\" style=\"font-family: Helvetica, Arial, sans-serif;\">";
        // line 80
        if ($this->getAttribute((isset($context["o"]) ? $context["o"] : null), "coupon_code", array())) {
            echo " <div style=\"padding-bottom: 20px; font-family: Helvetica, Arial, sans-serif;\">";
            echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "coupon");
            echo " </div>";
        }
        // line 81
        echo "                        </td>
                        <td align=\"right\" style=\"font-family: Helvetica, Arial, sans-serif;\">";
        // line 82
        if ($this->getAttribute((isset($context["o"]) ? $context["o"] : null), "coupon_code", array())) {
            echo $this->getAttribute((isset($context["o"]) ? $context["o"] : null), "coupon_code", array());
        }
        // line 83
        echo "                        </td>
                    </tr>
                    <tr style=\" vertical-align: top; font-family: Helvetica, Arial, sans-serif;\">
                        <td align=\"left\" style=\"font-family: Helvetica, Arial, sans-serif;\">";
        // line 86
        if ($this->getAttribute($this->getAttribute((isset($context["o"]) ? $context["o"] : null), "raw", array()), "discount", array())) {
            echo " <div style=\"padding-bottom: 20px; font-family: Helvetica, Arial, sans-serif;\">";
            echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "including_discount");
            echo " </div>";
        }
        // line 87
        echo "                        </td>
                        <td align=\"right\" style=\"font-family: Helvetica, Arial, sans-serif;\">";
        // line 88
        if ($this->getAttribute($this->getAttribute((isset($context["o"]) ? $context["o"] : null), "raw", array()), "discount", array())) {
            echo $this->getAttribute((isset($context["o"]) ? $context["o"] : null), "discount", array());
        }
        // line 89
        echo "                        </td>
                    </tr>
                    <tr style=\" vertical-align: top; font-family: Helvetica, Arial, sans-serif;\">
                        <td align=\"left\" style=\"font-family: Helvetica, Arial, sans-serif;\">";
        // line 92
        if ($this->getAttribute($this->getAttribute((isset($context["o"]) ? $context["o"] : null), "raw", array()), "subtotal_discount", array())) {
            echo " <div style=\"padding-bottom: 20px; font-family: Helvetica, Arial, sans-serif;\">";
            echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "order_discount");
            echo " </div>";
        }
        // line 93
        echo "                        </td>
                        <td align=\"right\" style=\"font-family: Helvetica, Arial, sans-serif;\">";
        // line 94
        if ($this->getAttribute($this->getAttribute((isset($context["o"]) ? $context["o"] : null), "raw", array()), "subtotal_discount", array())) {
            echo $this->getAttribute((isset($context["o"]) ? $context["o"] : null), "subtotal_discount", array());
        }
        // line 95
        echo "                        </td>
                    </tr>
                    <tr style=\" vertical-align: top; font-size: 22px; font-weight: 600; font-family: Helvetica, Arial, sans-serif;\">
                        <td align=\"left\" style=\"padding-top: 20px; border-top: 1px solid #e8e8e8; font-size: 22px; font-family: Helvetica, Arial, sans-serif;\">";
        // line 98
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "total");
        echo "
                        </td>
                        <td align=\"right\" style=\"padding-top: 20px; border-top: 1px solid #e8e8e8; font-size: 22px; font-family: Helvetica, Arial, sans-serif;\">";
        // line 100
        echo $this->getAttribute((isset($context["o"]) ? $context["o"] : null), "total", array());
        echo "
                        </td>
                    </tr>
                </tbody>
                </table>
            </td>
        </tr>
        </tbody>
        </table>
    </td>
</tr>
</tbody>
</table>";
    }

    public function getTemplateName()
    {
        return "__string_template__3b09bc0bdcddca245100ad172f8e45da58882951e36689a7cead5b5cd4e09519";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 100,  213 => 98,  208 => 95,  204 => 94,  201 => 93,  195 => 92,  190 => 89,  186 => 88,  183 => 87,  177 => 86,  172 => 83,  168 => 82,  165 => 81,  159 => 80,  152 => 76,  147 => 74,  140 => 70,  135 => 68,  128 => 64,  123 => 62,  116 => 58,  111 => 56,  104 => 51,  101 => 49,  97 => 48,  95 => 47,  84 => 38,  75 => 30,  68 => 27,  65 => 26,  63 => 25,  57 => 23,  49 => 20,  41 => 17,  36 => 14,  33 => 12,  30 => 10,  28 => 9,  19 => 1,);
    }
}
/* <table width="600" style=" font-family: Helvetica, Arial, sans-serif; border-collapse: separate;" rel="min-width: 800px; font-family: Helvetica, Arial, sans-serif; border-collapse: separate;" cellspacing="0" cellpadding="0" border="0">*/
/* <tbody>*/
/* <tr style="vertical-align: top;">*/
/*     <td>*/
/*         <table width="100%;" cellspacing="0" border="0" style="border-collapse: separate; font-family: Helvetica, Arial, sans-serif;">*/
/*         <tbody>*/
/*         <tr>*/
/*             <td width="50%" style="padding: 0px; padding-bottom: 10px; padding-right: 40px; vertical-align: top; font-family: Helvetica, Arial, sans-serif;">*/
/*                 {% if pickup_point.is_selected %}*/
/*                 {{ snippet("pickup_point") }}*/
/*                 {% else %}*/
/*                 {{ snippet("ship_to") }}*/
/*                 {% endif %}*/
/*             </td>*/
/*             <td width="50%" style="padding: 0px; padding-bottom: 10px; padding-left: 40px; -webkit-print-color-adjust: exact; vertical-align: top; font-family: Helvetica, Arial, sans-serif;">*/
/*                 <p style="color: #787878; font-size: 14px; font-family: Helvetica, Arial, sans-serif; padding-bottom: 5px; margin: 0px;">*/
/*                     <span style="color: #444444; font-weight: 600; font-family: Helvetica, Arial, sans-serif; text-transform: uppercase;">{{__("order_date")}}</span>  {{o.timestamp}}*/
/*                 </p>*/
/*                 <p style="color: #787878; font-size: 14px; font-family: Helvetica, Arial, sans-serif; padding-bottom: 5px; margin: 0px;">*/
/*                     <span style="color: #444444; font-weight: 600; font-family: Helvetica, Arial, sans-serif; text-transform: uppercase;">{{__("payment")}}</span>  {{p.payment}}*/
/*                 </p>*/
/*                 <p style="color: #787878; font-size: 14px; font-family: Helvetica, Arial, sans-serif; padding-bottom: 5px; margin: 0px;">*/
/*                     <span style="color: #444444; font-weight: 600; font-family: Helvetica, Arial, sans-serif; text-transform: uppercase;">{{__("shipping")}}</span>  {{o.shippings_method}}*/
/*                 </p>*/
/*                 {% if o.tracking_number %}*/
/*                 <p style="color: #787878; font-size: 14px; font-family: Helvetica, Arial, sans-serif; padding-bottom: 5px; margin: 0px;">*/
/*                     <span style="color: #444444; font-weight: 600; font-family: Helvetica, Arial, sans-serif; text-transform: uppercase;">{{__("tracking_number")}}</span>  {{o.tracking_number}}*/
/*                 </p>*/
/*                 {% endif %}*/
/*             </td>*/
/*         </tr>*/
/*         </tbody>*/
/*         </table>*/
/*     </td>*/
/* </tr>*/
/* <tr>*/
/*     <td style="padding: 0px;">*/
/*         {{ snippet("products_table") }}*/
/*     </td>*/
/* </tr>*/
/* <tr>*/
/*     <td style="padding: 0px; border-top: 2px solid #f5f5f5; padding-top: 10px; font-family: Helvetica, Arial, sans-serif;">*/
/*         <table width="100%" style="border-collapse: separate; font-family: Helvetica, Arial, sans-serif;">*/
/*         <tbody>*/
/*         <tr>*/
/*             <td width="66%" style="font-size: 14px; font-family: Helvetica, Arial, sans-serif; line-height: 21px; color: #444444; padding-right: 30px; vertical-align:top;">*/
/*                 {% if o.notes %}*/
/*                 <h2 style="margin: 0px; font-size: 22px; font-family: Helvetica, Arial, sans-serif; color: #444444; text-transform: uppercase; padding-bottom: 20px; border-bottom: 3px solid #e8e8e8; margin-bottom: 10px;">{{ __("customer_notes") }}</h2>*/
/*                 {{ o.notes }}*/
/*                                 {% endif %}*/
/*             </td>*/
/*             <td width="34%" style="vertical-align: top; font-family: Helvetica, Arial, sans-serif;">*/
/*                 <table width="100%;" style="font-size: 14px; font-family: Helvetica, Arial, sans-serif; color: #444;">*/
/*                 <tbody>*/
/*                     <tr style=" vertical-align: top; font-family: Helvetica, Arial, sans-serif;">*/
/*                         <td align="left" style="padding-bottom: 20px; font-family: Helvetica, Arial, sans-serif;">{{ __("subtotal") }}*/
/*                         </td>*/
/*                         <td align="right" style="font-family: Helvetica, Arial, sans-serif;">{{o.display_subtotal}}*/
/*                         </td>*/
/*                     </tr>*/
/*                     <tr style=" vertical-align: top;">*/
/*                         <td align="left" style="padding-bottom: 20px; text-transform: uppercase; font-family: Helvetica, Arial, sans-serif;">{{o.tax_name}}*/
/*                         </td>*/
/*                         <td align="right" style="font-family: Helvetica, Arial, sans-serif;">{{o.tax_total}}*/
/*                         </td>*/
/*                     </tr>*/
/*                     <tr style=" vertical-align: top;">*/
/*                         <td align="left" style="padding-bottom: 20px; font-family: Helvetica, Arial, sans-serif;">{{ __("shipping") }}*/
/*                         </td>*/
/*                         <td align="right" style="font-family: Helvetica, Arial, sans-serif;">{{ o.display_shipping_cost }}*/
/*                         </td>*/
/*                     </tr>*/
/*                     <tr style=" vertical-align: top;">*/
/*                         <td style="padding-bottom: 20px; font-family: Helvetica, Arial, sans-serif;" align="left">{{ __("payment_surcharge") }}*/
/*                         </td>*/
/*                         <td style="font-family: Helvetica, Arial, sans-serif;" align="right">{{ o.payment_surcharge }}*/
/*                         </td>*/
/*                     </tr>*/
/*                     <tr style=" vertical-align: top; font-family: Helvetica, Arial, sans-serif;">*/
/*                         <td align="left" style="font-family: Helvetica, Arial, sans-serif;">{% if o.coupon_code %} <div style="padding-bottom: 20px; font-family: Helvetica, Arial, sans-serif;"> {{ __("coupon") }} </div> {% endif %}*/
/*                         </td>*/
/*                         <td align="right" style="font-family: Helvetica, Arial, sans-serif;">{% if o.coupon_code %} {{o.coupon_code}} {% endif %}*/
/*                         </td>*/
/*                     </tr>*/
/*                     <tr style=" vertical-align: top; font-family: Helvetica, Arial, sans-serif;">*/
/*                         <td align="left" style="font-family: Helvetica, Arial, sans-serif;">{% if o.raw.discount %} <div style="padding-bottom: 20px; font-family: Helvetica, Arial, sans-serif;"> {{ __("including_discount") }} </div> {% endif %}*/
/*                         </td>*/
/*                         <td align="right" style="font-family: Helvetica, Arial, sans-serif;">{% if o.raw.discount %} {{o.discount}} {% endif %}*/
/*                         </td>*/
/*                     </tr>*/
/*                     <tr style=" vertical-align: top; font-family: Helvetica, Arial, sans-serif;">*/
/*                         <td align="left" style="font-family: Helvetica, Arial, sans-serif;">{% if o.raw.subtotal_discount %} <div style="padding-bottom: 20px; font-family: Helvetica, Arial, sans-serif;"> {{ __("order_discount") }} </div> {% endif %}*/
/*                         </td>*/
/*                         <td align="right" style="font-family: Helvetica, Arial, sans-serif;">{% if o.raw.subtotal_discount %} {{o.subtotal_discount}} {% endif %}*/
/*                         </td>*/
/*                     </tr>*/
/*                     <tr style=" vertical-align: top; font-size: 22px; font-weight: 600; font-family: Helvetica, Arial, sans-serif;">*/
/*                         <td align="left" style="padding-top: 20px; border-top: 1px solid #e8e8e8; font-size: 22px; font-family: Helvetica, Arial, sans-serif;">{{ __("total") }}*/
/*                         </td>*/
/*                         <td align="right" style="padding-top: 20px; border-top: 1px solid #e8e8e8; font-size: 22px; font-family: Helvetica, Arial, sans-serif;">{{o.total}}*/
/*                         </td>*/
/*                     </tr>*/
/*                 </tbody>*/
/*                 </table>*/
/*             </td>*/
/*         </tr>*/
/*         </tbody>*/
/*         </table>*/
/*     </td>*/
/* </tr>*/
/* </tbody>*/
/* </table>*/
