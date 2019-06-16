<?php

/* @PrestaShop/Admin/Common/Grid/Actions/Grid/simple.html.twig */
class __TwigTemplate_f6167bb9bf635b4a72a6f9f6836e2c494322fca63c62b9100a4f57f0a603fb37 extends Twig_Template
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
        // line 25
        echo "
<button type=\"button\"
        id=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : null), "id", array()), "html", null, true);
        echo "_grid_action_";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["action"]) ? $context["action"] : null), "id", array()), "html", null, true);
        echo "\"
        class=\"dropdown-item js-";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["action"]) ? $context["action"] : null), "id", array()), "html", null, true);
        echo "-grid-action\"
>
  ";
        // line 30
        if ( !twig_test_empty($this->getAttribute((isset($context["action"]) ? $context["action"] : null), "icon", array()))) {
            // line 31
            echo "    <i class=\"material-icons\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["action"]) ? $context["action"] : null), "icon", array()), "html", null, true);
            echo "</i>
  ";
        }
        // line 33
        echo "  ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["action"]) ? $context["action"] : null), "name", array()), "html", null, true);
        echo "
</button>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Common/Grid/Actions/Grid/simple.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 33,  36 => 31,  34 => 30,  29 => 28,  23 => 27,  19 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@PrestaShop/Admin/Common/Grid/Actions/Grid/simple.html.twig", "/home/padilo00/padilo.pro/presta/src/PrestaShopBundle/Resources/views/Admin/Common/Grid/Actions/Grid/simple.html.twig");
    }
}
