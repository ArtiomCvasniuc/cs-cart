<?php

/* __string_template__19b9abd9320fc4ffb508cfe96f8a24100eaf72027ea8925a41bd0b1a1725a0d3 */
class __TwigTemplate_e07039a791406f6813cb5c3a77dc98410155f9cc735f1669ace685fffdab4239 extends Twig_Template
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
        echo $this->env->getExtension('tygh.core')->snippetFunction($this->env, $context, "header", array("title" => $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "new_profile_notification")));
        // line 2
        if ($this->getAttribute((isset($context["user_data"]) ? $context["user_data"] : null), "firstname", array())) {
            echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "hello_name", array("[name]" => $this->getAttribute((isset($context["user_data"]) ? $context["user_data"] : null), "firstname", array())));
        } else {
            echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "hello");
            echo ",";
        }
        // line 3
        echo "    <br>";
        // line 4
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "update_profile_notification_header");
        echo "
    <br>
    <br>
    <h4 class=\"with-subline\">";
        // line 7
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "user_account_information");
        echo "</h4>
    <table border=\"0\" width=\"100%\" class=\"info\">
      <tr>
        <td><b>";
        // line 10
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "login_url");
        echo ":</b></td>
        <td><a href=\"";
        // line 11
        echo (isset($context["login_url"]) ? $context["login_url"] : null);
        echo "\">";
        echo $this->env->getExtension('tygh.core')->punyDecodeFilter((isset($context["login_url"]) ? $context["login_url"] : null));
        echo "</a></td>
      </tr>
      <tr>
        <td><b>";
        // line 14
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "email");
        echo ":</b></td>
        <td><a>";
        // line 15
        echo $this->getAttribute((isset($context["user_data"]) ? $context["user_data"] : null), "email", array());
        echo "</a></td>
      </tr>
      <tr>
        <td><b>";
        // line 18
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "password");
        echo ":</b></td>
        <td> *********** (<a href=\"";
        // line 19
        echo (isset($context["forgot_pass_url"]) ? $context["forgot_pass_url"] : null);
        echo "\">";
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "forgot_password_question");
        echo "</a>)</td>
      </tr>
    </table>";
        // line 24
        echo $this->env->getExtension('tygh.core')->snippetFunction($this->env, $context, "footer");
    }

    public function getTemplateName()
    {
        return "__string_template__19b9abd9320fc4ffb508cfe96f8a24100eaf72027ea8925a41bd0b1a1725a0d3";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 24,  68 => 19,  64 => 18,  58 => 15,  54 => 14,  46 => 11,  42 => 10,  36 => 7,  30 => 4,  28 => 3,  21 => 2,  19 => 1,);
    }
}
/* {{ snippet("header", {"title": __("new_profile_notification")} ) }}*/
/*     {% if user_data.firstname %} {{__("hello_name", {"[name]" : user_data.firstname})}} {% else %} {{ __("hello") }}, {% endif %}*/
/*     <br>*/
/*     {{ __("update_profile_notification_header") }}*/
/*     <br>*/
/*     <br>*/
/*     <h4 class="with-subline">{{ __("user_account_information") }}</h4>*/
/*     <table border="0" width="100%" class="info">*/
/*       <tr>*/
/*         <td><b>{{ __("login_url") }}:</b></td>*/
/*         <td><a href="{{ login_url }}">{{ login_url|puny_decode }}</a></td>*/
/*       </tr>*/
/*       <tr>*/
/*         <td><b>{{ __("email") }}:</b></td>*/
/*         <td><a>{{ user_data.email }}</a></td>*/
/*       </tr>*/
/*       <tr>*/
/*         <td><b>{{ __("password") }}:</b></td>*/
/*         <td> *********** (<a href="{{ forgot_pass_url }}">{{ __("forgot_password_question") }}</a>)</td>*/
/*       </tr>*/
/*     </table>*/
/* */
/* */
/*   {{ snippet("footer") }}*/
