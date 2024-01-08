<?php

/* __string_template__bc4ab9ed1d033aefde2fed805d2c919f9e76aa496d59c1d87992486bcdc31624 */
class __TwigTemplate_903e9887c30c6b362c6d6d00c89a98e94be63b559964ebad9361533a38f42769 extends Twig_Template
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
        echo $this->env->getExtension('tygh.core')->snippetFunction($this->env, $context, "header", array("title" => $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "low_stock_subj", array("[product]" => (((isset($context["product"]) ? $context["product"] : null) . " #") . (isset($context["product_id"]) ? $context["product_id"] : null))))));
        echo "

    <table class=\"info\">
      <tr>
        <td>";
        // line 5
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "product");
        echo ":</td>
        <td>";
        // line 6
        echo (isset($context["product"]) ? $context["product"] : null);
        echo "</td>
      </tr>
      <tr>
        <td>";
        // line 9
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "id");
        echo ":</td>
        <td>";
        // line 10
        echo (isset($context["product_id"]) ? $context["product_id"] : null);
        echo "</td>
      </tr>
      <tr>
        <td>";
        // line 13
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "sku");
        echo ":</td>
        <td>";
        // line 14
        echo (isset($context["product_code"]) ? $context["product_code"] : null);
        echo "</td>
      </tr>
      <tr>
        <td>";
        // line 17
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "qty");
        echo ":</td>
        <td><b>";
        // line 18
        echo (isset($context["new_qty"]) ? $context["new_qty"] : null);
        echo "</b></td>
      </tr>";
        // line 20
        if ((isset($context["product_options"]) ? $context["product_options"] : null)) {
            // line 21
            echo "      <tr>
        <td colspan=\"2\">";
            // line 22
            echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "product_options");
            echo ":
          <br>
          <hr>
        </td>
      </tr>";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["product_options"]) ? $context["product_options"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 28
                echo "      <tr>
        <td>";
                // line 29
                echo $this->getAttribute($context["option"], "option_name", array());
                echo ":</td>
        <td>";
                // line 30
                echo $this->getAttribute($context["option"], "variant_name", array());
                echo "</td>
      </tr>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 33
        echo "    </table>";
        // line 35
        echo $this->env->getExtension('tygh.core')->snippetFunction($this->env, $context, "footer");
    }

    public function getTemplateName()
    {
        return "__string_template__bc4ab9ed1d033aefde2fed805d2c919f9e76aa496d59c1d87992486bcdc31624";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 35,  96 => 33,  87 => 30,  83 => 29,  80 => 28,  76 => 27,  69 => 22,  66 => 21,  64 => 20,  60 => 18,  56 => 17,  50 => 14,  46 => 13,  40 => 10,  36 => 9,  30 => 6,  26 => 5,  19 => 1,);
    }
}
/* {{ snippet("header", {"title":__("low_stock_subj", {"[product]": "#{product} ##{product_id}"}) } ) }}*/
/* */
/*     <table class="info">*/
/*       <tr>*/
/*         <td>{{ __("product") }}:</td>*/
/*         <td>{{ product }}</td>*/
/*       </tr>*/
/*       <tr>*/
/*         <td>{{ __("id") }}:</td>*/
/*         <td>{{ product_id }}</td>*/
/*       </tr>*/
/*       <tr>*/
/*         <td>{{ __("sku") }}:</td>*/
/*         <td>{{ product_code }}</td>*/
/*       </tr>*/
/*       <tr>*/
/*         <td>{{ __("qty") }}:</td>*/
/*         <td><b>{{ new_qty }}</b></td>*/
/*       </tr>*/
/*       {% if product_options %}*/
/*       <tr>*/
/*         <td colspan="2">{{ __("product_options") }}:*/
/*           <br>*/
/*           <hr>*/
/*         </td>*/
/*       </tr>*/
/*       {% for option in product_options %}*/
/*       <tr>*/
/*         <td>{{ option.option_name }}:</td>*/
/*         <td>{{ option.variant_name }}</td>*/
/*       </tr>*/
/*       {% endfor %} {% endif %}*/
/*     </table>*/
/* */
/* {{ snippet("footer") }}*/
