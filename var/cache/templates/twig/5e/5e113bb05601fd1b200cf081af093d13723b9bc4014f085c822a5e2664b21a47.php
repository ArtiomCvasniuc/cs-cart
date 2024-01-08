<?php

/* __string_template__4ab43c8a1ede9551735a0aa5bd855766a26ba365963623208085953aadad0931 */
class __TwigTemplate_c74459ad10b097e41cbc15b16ccdff5b59600568e75903f8d9485744824f196c extends Twig_Template
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
        echo $this->env->getExtension('tygh.core')->snippetFunction($this->env, $context, "header", array("title" => $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "change_order_status_o_subj", array("[order]" => $this->getAttribute((isset($context["order_info"]) ? $context["order_info"] : null), "order_id", array())))));
        // line 2
        if ($this->getAttribute((isset($context["order_info"]) ? $context["order_info"] : null), "firstname", array())) {
            echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "hello_name", array("[name]" => $this->getAttribute((isset($context["order_info"]) ? $context["order_info"] : null), "firstname", array())));
        } else {
            echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "hello");
            echo ",";
            echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "customer");
        }
        // line 3
        echo "    <br />";
        // line 4
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "change_order_status_default_text", array("[status]" => $this->getAttribute((isset($context["order_status"]) ? $context["order_status"] : null), "description", array())));
        echo "
    <br />
    <br />";
        // line 6
        echo $this->env->getExtension('tygh.core')->includeDocFunction($this->env, $context, "order.summary", $this->getAttribute((isset($context["order_info"]) ? $context["order_info"] : null), "order_id", array()));
        // line 7
        echo $this->env->getExtension('tygh.core')->snippetFunction($this->env, $context, "footer");
    }

    public function getTemplateName()
    {
        return "__string_template__4ab43c8a1ede9551735a0aa5bd855766a26ba365963623208085953aadad0931";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 7,  36 => 6,  31 => 4,  29 => 3,  21 => 2,  19 => 1,);
    }
}
/* {{ snippet("header", {"title": __("change_order_status_o_subj", {"[order]": order_info.order_id}) } ) }}*/
/*     {% if order_info.firstname %}{{__("hello_name", {"[name]" : order_info.firstname})}} {% else %} {{ __("hello") }},  {{ __("customer") }} {% endif %}*/
/*     <br />*/
/*     {{ __("change_order_status_default_text", {"[status]": order_status.description}) }}*/
/*     <br />*/
/*     <br /> {{ include_doc("order.summary", order_info.order_id) }}*/
/*   {{ snippet("footer") }}*/
