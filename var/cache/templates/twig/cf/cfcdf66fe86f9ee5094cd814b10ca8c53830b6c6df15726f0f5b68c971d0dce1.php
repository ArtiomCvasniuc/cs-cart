<?php

/* __string_template__0c892e2aca3d97411722eb95eaf92c46053478ce6f103211550442a674591301 */
class __TwigTemplate_00468f4e45d6446c6a6c55427a3cccd3776cbc84ebcfa639ae3fe1cde9954180 extends Twig_Template
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
<tbody>
<tr>
    <td rowspan=\"2\" style=\"padding-right: 20px; font-family: Helvetica, Arial, sans-serif;\">";
        // line 4
        echo $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "image", array());
        echo "
    </td>
    <td style=\"vertical-align: middle; text-align: left;\"><span style=\"font-family: Helvetica, Arial, sans-serif; text-transfrom: uppercase; \"><strong style=\"font-weight: 600;\"><a href=\"";
        // line 6
        echo $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "product_url", array());
        echo "\">";
        echo $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "name", array());
        echo "</a></strong></span>
    </td>
</tr>
<tr>
    <td style=\"vertical-align: top; text-align: left; font-family: Helvetica, Arial, sans-serif;\"><span style=\"font-size: 11px; font-weight: 400; font-family: Helvetica, Arial, sans-serif; color: #a8a8a8; \">";
        // line 10
        if ($this->getAttribute((isset($context["p"]) ? $context["p"] : null), "product_code", array())) {
            echo $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "product_code", array());
            echo "<br>";
        }
        if ($this->getAttribute((isset($context["p"]) ? $context["p"] : null), "options", array())) {
            echo $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "options", array());
        }
        echo "</span>
    </td>
</tr>
</tbody>
</table>";
    }

    public function getTemplateName()
    {
        return "__string_template__0c892e2aca3d97411722eb95eaf92c46053478ce6f103211550442a674591301";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 10,  29 => 6,  24 => 4,  19 => 1,);
    }
}
/* <table>*/
/* <tbody>*/
/* <tr>*/
/*     <td rowspan="2" style="padding-right: 20px; font-family: Helvetica, Arial, sans-serif;">{{ p.image }}*/
/*     </td>*/
/*     <td style="vertical-align: middle; text-align: left;"><span style="font-family: Helvetica, Arial, sans-serif; text-transfrom: uppercase; "><strong style="font-weight: 600;"><a href="{{ p.product_url }}">{{ p.name }}</a></strong></span>*/
/*     </td>*/
/* </tr>*/
/* <tr>*/
/*     <td style="vertical-align: top; text-align: left; font-family: Helvetica, Arial, sans-serif;"><span style="font-size: 11px; font-weight: 400; font-family: Helvetica, Arial, sans-serif; color: #a8a8a8; ">{% if p.product_code %}{{ p.product_code }}<br> {% endif %}{% if p.options %}{{ p.options }}{%  endif %}</span>*/
/*     </td>*/
/* </tr>*/
/* </tbody>*/
/* </table>*/
