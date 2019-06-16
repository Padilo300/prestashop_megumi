<?php

/* @PrestaShop/Admin/Common/Grid/Actions/Row/submit.html.twig */
class __TwigTemplate_5b32cb20364ac2d5a6e63635bd521dfcd5453954de4ced621b2bf1521674529d extends Twig_Template
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
";
        // line 26
        $context["class"] = "btn tooltip-link js-submit-row-action";
        // line 27
        echo "
";
        // line 28
        if ($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "class", array(), "any", true, true)) {
            // line 29
            echo "  ";
            $context["class"] = (((isset($context["class"]) ? $context["class"] : null) . " ") . $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "class", array()));
        }
        // line 31
        echo "
<a class=\"";
        // line 32
        echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : null), "html", null, true);
        echo "\"
   href=\"#\"
   data-url=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute($this->getAttribute((isset($context["action"]) ? $context["action"] : null), "options", array()), "route", array()), array($this->getAttribute($this->getAttribute((isset($context["action"]) ? $context["action"] : null), "options", array()), "route_param_name", array()) => $this->getAttribute((isset($context["record"]) ? $context["record"] : null), $this->getAttribute($this->getAttribute((isset($context["action"]) ? $context["action"] : null), "options", array()), "route_param_field", array()), array(), "array"))), "html", null, true);
        echo "\"
   data-confirm-message=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["action"]) ? $context["action"] : null), "options", array()), "confirm_message", array()), "html", null, true);
        echo "\"
   data-method=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["action"]) ? $context["action"] : null), "options", array()), "method", array()), "html", null, true);
        echo "\"
>
    ";
        // line 38
        if ( !twig_test_empty($this->getAttribute((isset($context["action"]) ? $context["action"] : null), "icon", array()))) {
            // line 39
            echo "        <i class=\"material-icons\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["action"]) ? $context["action"] : null), "icon", array()), "html", null, true);
            echo "</i>
    ";
        }
        // line 41
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["action"]) ? $context["action"] : null), "name", array()), "html", null, true);
        echo "
</a>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Common/Grid/Actions/Row/submit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 41,  56 => 39,  54 => 38,  49 => 36,  45 => 35,  41 => 34,  36 => 32,  33 => 31,  29 => 29,  27 => 28,  24 => 27,  22 => 26,  19 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@PrestaShop/Admin/Common/Grid/Actions/Row/submit.html.twig", "/home/padilo00/padilo.pro/presta/src/PrestaShopBundle/Resources/views/Admin/Common/Grid/Actions/Row/submit.html.twig");
    }
}
