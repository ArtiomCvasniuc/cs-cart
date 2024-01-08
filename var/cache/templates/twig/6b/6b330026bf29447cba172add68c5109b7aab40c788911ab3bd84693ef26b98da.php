<?php

/* __string_template__80d06f631812a98683323e736f805a9994e3fc3f7735dfc78fb94c7d4d40c2be */
class __TwigTemplate_911f3fb67b2458995755b6a4508b9689e18cf081c3e246f86d891c4a17007063 extends Twig_Template
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
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "vendor_plans.plan_payment");
    }

    public function getTemplateName()
    {
        return "__string_template__80d06f631812a98683323e736f805a9994e3fc3f7735dfc78fb94c7d4d40c2be";
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
/* {{ __("vendor_plans.plan_payment") }}*/
