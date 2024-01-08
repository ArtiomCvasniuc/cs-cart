<?php

/* __string_template__3efe0e7c30415bc981abb2b84316aba6b42564ba5bc9093a4a031955b26ae045 */
class __TwigTemplate_82598d5e4e96b499b1029a6c9d38818b47abc2d3de3fdeefe84cdbe3e8e5d751 extends Twig_Template
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
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "profile_deactivated");
    }

    public function getTemplateName()
    {
        return "__string_template__3efe0e7c30415bc981abb2b84316aba6b42564ba5bc9093a4a031955b26ae045";
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
/* {{ company_name }}: {{ __("profile_deactivated") }}*/
