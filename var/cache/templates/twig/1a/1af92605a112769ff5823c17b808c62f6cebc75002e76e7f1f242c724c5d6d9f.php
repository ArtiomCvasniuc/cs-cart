<?php

/* __string_template__89baacba3240fa55b78107896b46d31a583a14b425a729d2cafe48081dc26f05 */
class __TwigTemplate_7409baa698131754417ac6cab0183b04283cd96af0cd253f9db4f90087f3ab42 extends Twig_Template
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
        echo "<table>
    <tr>
        <td>";
        // line 3
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "vendor_plans.plan");
        echo ":</td>
        <td>";
        // line 4
        echo $this->getAttribute((isset($context["plan"]) ? $context["plan"] : null), "plan", array());
        echo "</td>
    </tr>
    <tr>
        <td>";
        // line 7
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "price");
        echo ":</td>
        <td>";
        // line 8
        echo $this->env->getExtension('tygh.core')->priceFilter($this->getAttribute((isset($context["plan"]) ? $context["plan"] : null), "price", array()));
        echo "&nbsp;(";
        echo twig_lower_filter($this->env, $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, ("vendor_plans.periodicity_" . $this->getAttribute((isset($context["plan"]) ? $context["plan"] : null), "periodicity", array()))));
        echo ")</td>
    </tr>
    <tr>
        <td>";
        // line 11
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "vendor_plans.products_limit");
        echo ":</td>
        <td>";
        // line 12
        if ($this->getAttribute((isset($context["plan"]) ? $context["plan"] : null), "products_limit", array())) {
            echo $this->getAttribute((isset($context["plan"]) ? $context["plan"] : null), "products_limit", array());
        } else {
            echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "vendor_plans.unlimited");
        }
        echo "</td>
    </tr>
    <tr>
        <td>";
        // line 15
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "vendor_plans.revenue_up_to");
        echo ":</td>
        <td>";
        // line 16
        if ($this->getAttribute((isset($context["plan"]) ? $context["plan"] : null), "revenue_limit", array())) {
            echo $this->env->getExtension('tygh.core')->priceFilter($this->getAttribute((isset($context["plan"]) ? $context["plan"] : null), "revenue_limit", array()));
        } else {
            echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "vendor_plans.unlimited");
        }
        echo "</td>
    </tr>
    <tr>
        <td>";
        // line 19
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "vendor_plans.transaction_fee");
        echo ":</td>
        <td>";
        // line 20
        echo $this->getAttribute((isset($context["plan"]) ? $context["plan"] : null), "commission", array());
        echo "(%)</td>
    </tr>
    <tr>
        <td>";
        // line 23
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "vendor_plans.vendor_store");
        echo ":</td>
        <td>";
        // line 24
        if ($this->getAttribute((isset($context["plan"]) ? $context["plan"] : null), "vendor_store", array())) {
            echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "yes");
        } else {
            echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "no");
        }
        echo "</td>
    </tr>";
        // line 26
        if ($this->getAttribute((isset($context["plan"]) ? $context["plan"] : null), "description", array())) {
            // line 27
            echo "    <tr>
        <td>";
            // line 28
            echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "description");
            echo ":</td>
        <td>";
            // line 29
            echo $this->getAttribute((isset($context["plan"]) ? $context["plan"] : null), "description", array());
            echo "</td>
    </tr>";
        }
        // line 32
        echo "</table>";
    }

    public function getTemplateName()
    {
        return "__string_template__89baacba3240fa55b78107896b46d31a583a14b425a729d2cafe48081dc26f05";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 32,  104 => 29,  100 => 28,  97 => 27,  95 => 26,  87 => 24,  83 => 23,  77 => 20,  73 => 19,  63 => 16,  59 => 15,  49 => 12,  45 => 11,  37 => 8,  33 => 7,  27 => 4,  23 => 3,  19 => 1,);
    }
}
/* <table>*/
/*     <tr>*/
/*         <td>{{ __("vendor_plans.plan") }}:</td>*/
/*         <td>{{ plan.plan }}</td>*/
/*     </tr>*/
/*     <tr>*/
/*         <td>{{ __("price") }}:</td>*/
/*         <td>{{ plan.price|price }}&nbsp;({{ __("vendor_plans.periodicity_" ~ plan.periodicity)|lower }})</td>*/
/*     </tr>*/
/*     <tr>*/
/*         <td>{{ __("vendor_plans.products_limit") }}:</td>*/
/*         <td>{% if plan.products_limit %} {{ plan.products_limit }} {% else %} {{ __("vendor_plans.unlimited") }} {% endif %}</td>*/
/*     </tr>*/
/*     <tr>*/
/*         <td>{{ __("vendor_plans.revenue_up_to") }}:</td>*/
/*         <td>{% if plan.revenue_limit %} {{ plan.revenue_limit|price }} {% else %} {{ __("vendor_plans.unlimited") }} {% endif %}</td>*/
/*     </tr>*/
/*     <tr>*/
/*         <td>{{ __("vendor_plans.transaction_fee") }}:</td>*/
/*         <td>{{ plan.commission }}(%)</td>*/
/*     </tr>*/
/*     <tr>*/
/*         <td>{{ __("vendor_plans.vendor_store") }}:</td>*/
/*         <td>{% if plan.vendor_store %} {{ __("yes") }} {% else %} {{ __("no") }} {% endif %}</td>*/
/*     </tr>*/
/*     {% if plan.description %}*/
/*     <tr>*/
/*         <td>{{ __("description") }}:</td>*/
/*         <td>{{ plan.description }}</td>*/
/*     </tr>*/
/*     {% endif %}*/
/* </table>*/
