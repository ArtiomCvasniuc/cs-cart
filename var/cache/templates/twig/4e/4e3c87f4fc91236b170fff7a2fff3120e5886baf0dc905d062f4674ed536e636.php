<?php

/* __string_template__dbd3d8e4367c2c9540c80c385f993205292b3c0f98c4b4924c367620441a44c9 */
class __TwigTemplate_1ebb3aae910396ff4bff9e3b87923a57d0a2a36d1b0bc0be09f9a37791855a65 extends Twig_Template
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
        echo $this->env->getExtension('tygh.core')->snippetFunction($this->env, $context, "header", array("title" => $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "profile_deactivated")));
        // line 2
        if ($this->getAttribute((isset($context["user_data"]) ? $context["user_data"] : null), "firstname", array())) {
            echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "hello_name", array("[name]" => $this->getAttribute((isset($context["user_data"]) ? $context["user_data"] : null), "firstname", array())));
        } else {
            echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "hello");
            echo ",";
        }
        // line 3
        echo "    <br />";
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "text_profile_deactivated");
        // line 4
        echo $this->env->getExtension('tygh.core')->snippetFunction($this->env, $context, "footer");
    }

    public function getTemplateName()
    {
        return "__string_template__dbd3d8e4367c2c9540c80c385f993205292b3c0f98c4b4924c367620441a44c9";
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
/* {{ snippet("header", {"title": __("profile_deactivated")} ) }}*/
/*     {% if user_data.firstname %} {{__("hello_name", {"[name]" : user_data.firstname})}} {% else %} {{ __("hello") }}, {% endif %}*/
/*     <br /> {{ __("text_profile_deactivated") }}*/
/*   {{ snippet("footer") }}*/
