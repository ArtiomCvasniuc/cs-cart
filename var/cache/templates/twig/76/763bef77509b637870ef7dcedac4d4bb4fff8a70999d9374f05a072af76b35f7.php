<?php

/* __string_template__e6309f78ffe59ff1110dee9f159b843487069f2a6025700a79914dc26a309e08 */
class __TwigTemplate_360c0ef296cc3b1bee820f66fb7438fba25f508257a37a0957b7ff41a4f7cca7 extends Twig_Template
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
        echo $this->env->getExtension('tygh.core')->snippetFunction($this->env, $context, "header", array("title" => $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "profile_activated")));
        // line 2
        if ($this->getAttribute((isset($context["user_data"]) ? $context["user_data"] : null), "firstname", array())) {
            echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "hello_name", array("[name]" => $this->getAttribute((isset($context["user_data"]) ? $context["user_data"] : null), "firstname", array())));
        } else {
            echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "hello");
            echo ",";
        }
        // line 3
        echo "    <br />";
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "text_profile_activated");
        // line 4
        echo $this->env->getExtension('tygh.core')->snippetFunction($this->env, $context, "footer");
    }

    public function getTemplateName()
    {
        return "__string_template__e6309f78ffe59ff1110dee9f159b843487069f2a6025700a79914dc26a309e08";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,  21 => 2,  19 => 1,);
    }
}
/* {{ snippet("header", {"title": __("profile_activated")} ) }}*/
/*     {% if user_data.firstname %} {{__("hello_name", {"[name]" : user_data.firstname})}} {% else %} {{ __("hello") }}, {% endif %}*/
/*     <br /> {{ __("text_profile_activated") }}*/
/*   {{ snippet("footer") }}*/
