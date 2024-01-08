<?php

/* __string_template__ea87e8e1e12f1c4008c43ded34423ebfaceeb9539ff05f0e3cb4daca5857772b */
class __TwigTemplate_ca4de93fcd11b22d50cc6a5ba04ad0150c300162a73c138bbbb6fd23ffe25f86 extends Twig_Template
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
        echo $this->env->getExtension('tygh.core')->snippetFunction($this->env, $context, "header", array("title" => $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "update_profile_notification_header")));
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
    </table>
    <br>
    <table class=\"info\" width=\"269\" align=\"left\">
      <tr>
        <td>
          <h4 class=\"with-subline\">";
        // line 26
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "billing_address");
        echo "</h4>
          <strong>";
        // line 27
        echo $this->getAttribute((isset($context["user_data"]) ? $context["user_data"] : null), "b_firstname", array());
        echo $this->getAttribute((isset($context["user_data"]) ? $context["user_data"] : null), "b_lastname", array());
        echo "</strong><br>";
        // line 28
        echo $this->getAttribute((isset($context["user_data"]) ? $context["user_data"] : null), "b_address_2", array());
        echo $this->getAttribute((isset($context["user_data"]) ? $context["user_data"] : null), "b_address", array());
        echo "<br>";
        // line 29
        echo $this->getAttribute((isset($context["user_data"]) ? $context["user_data"] : null), "b_city", array());
        echo $this->getAttribute((isset($context["user_data"]) ? $context["user_data"] : null), "b_country", array());
        echo " <br>";
        // line 30
        echo $this->getAttribute((isset($context["user_data"]) ? $context["user_data"] : null), "b_phone", array());
        echo " <br>
        </td>
      </tr>
    </table>

    <table class=\"info\" width=\"269\" align=\"left\">
      <tr>
        <td>
          <h4 class=\"with-subline\">";
        // line 38
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "shipping");
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "address");
        echo "</h4>
          <strong>";
        // line 39
        echo $this->getAttribute((isset($context["user_data"]) ? $context["user_data"] : null), "s_firstname", array());
        echo $this->getAttribute((isset($context["user_data"]) ? $context["user_data"] : null), "s_lastname", array());
        echo "</strong><br>";
        // line 40
        echo $this->getAttribute((isset($context["user_data"]) ? $context["user_data"] : null), "s_address_2", array());
        echo $this->getAttribute((isset($context["user_data"]) ? $context["user_data"] : null), "s_address", array());
        echo "<br>";
        // line 41
        echo $this->getAttribute((isset($context["user_data"]) ? $context["user_data"] : null), "s_city", array());
        echo $this->getAttribute((isset($context["user_data"]) ? $context["user_data"] : null), "s_country", array());
        echo " <br>";
        // line 42
        echo $this->getAttribute((isset($context["user_data"]) ? $context["user_data"] : null), "s_phone", array());
        echo " <br>
        </td>
      </tr>
    </table>";
        // line 47
        echo $this->env->getExtension('tygh.core')->snippetFunction($this->env, $context, "footer");
    }

    public function getTemplateName()
    {
        return "__string_template__ea87e8e1e12f1c4008c43ded34423ebfaceeb9539ff05f0e3cb4daca5857772b";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 47,  124 => 42,  120 => 41,  116 => 40,  112 => 39,  107 => 38,  96 => 30,  92 => 29,  88 => 28,  84 => 27,  80 => 26,  68 => 19,  64 => 18,  58 => 15,  54 => 14,  46 => 11,  42 => 10,  36 => 7,  30 => 4,  28 => 3,  21 => 2,  19 => 1,);
    }
}
/* {{ snippet("header", {"title": __("update_profile_notification_header")} ) }}*/
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
/*     <br>*/
/*     <table class="info" width="269" align="left">*/
/*       <tr>*/
/*         <td>*/
/*           <h4 class="with-subline">{{ __("billing_address") }}</h4>*/
/*           <strong>{{ user_data.b_firstname }} {{ user_data.b_lastname }}</strong><br>*/
/*           {{ user_data.b_address_2 }} {{ user_data.b_address }}<br>*/
/*           {{ user_data.b_city }} {{ user_data.b_country }} <br>*/
/*           {{ user_data.b_phone }} <br>*/
/*         </td>*/
/*       </tr>*/
/*     </table>*/
/* */
/*     <table class="info" width="269" align="left">*/
/*       <tr>*/
/*         <td>*/
/*           <h4 class="with-subline">{{ __("shipping") }} {{ __("address") }}</h4>*/
/*           <strong>{{ user_data.s_firstname }} {{ user_data.s_lastname }}</strong><br>*/
/*           {{ user_data.s_address_2 }} {{ user_data.s_address }}<br>*/
/*           {{ user_data.s_city }} {{ user_data.s_country }} <br>*/
/*           {{ user_data.s_phone }} <br>*/
/*         </td>*/
/*       </tr>*/
/*     </table>*/
/* */
/*   {{ snippet("footer") }}*/
