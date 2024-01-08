<?php

/* __string_template__999a6852d14afa4aeb10bad00ff074602f7207fcccd952e593ed846ce8fd9e4f */
class __TwigTemplate_3b4ca534db80498c911345cf285c4a81ea2f19370a34406faddef5a425642f23 extends Twig_Template
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
        echo (isset($context["company_name"]) ? $context["company_name"] : null);
        echo ":";
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "low_stock_subj", array("[product]" => (((isset($context["product"]) ? $context["product"] : null) . " #") . (isset($context["product_id"]) ? $context["product_id"] : null))));
    }

    public function getTemplateName()
    {
        return "__string_template__999a6852d14afa4aeb10bad00ff074602f7207fcccd952e593ed846ce8fd9e4f";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* {{ company_name }}: {{ __("low_stock_subj", {"[product]": "#{product} ##{product_id}"}) }}*/
