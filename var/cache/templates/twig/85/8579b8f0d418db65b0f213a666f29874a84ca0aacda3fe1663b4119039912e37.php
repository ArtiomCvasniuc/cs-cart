<?php

/* __string_template__babeec29189cec5b74fd275d21866df00d3d662c6a8dc01498b0339fe4b8f795 */
class __TwigTemplate_02d52a582d3e53ad835ce144102beb73a577351873b60670cfc68ff3fe154fe7 extends Twig_Template
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
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "profile_activated");
    }

    public function getTemplateName()
    {
        return "__string_template__babeec29189cec5b74fd275d21866df00d3d662c6a8dc01498b0339fe4b8f795";
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
/* {{ company_name }}: {{ __("profile_activated") }}*/
