<?php

/* @PrestaShop/Admin/Common/Grid/Actions/Row/link.html.twig */
class __TwigTemplate_8c7ec51fb0ddfe39d5ff53d5f95122564ac572ac79f0876cb2bc48bbdbd17234 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Common/Grid/Actions/Row/link.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Common/Grid/Actions/Row/link.html.twig"));

        // line 25
        echo "
";
        // line 26
        $context["class"] = "btn tooltip-link js-link-row-action";
        // line 27
        echo "
";
        // line 28
        if ($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "class", array(), "any", true, true)) {
            // line 29
            echo "  ";
            $context["class"] = (((isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")) . " ") . $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : $this->getContext($context, "attributes")), "class", array()));
        }
        // line 31
        echo "
<a class=\"";
        // line 32
        echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "html", null, true);
        echo "\"
   href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute($this->getAttribute((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "options", array()), "route", array()), array($this->getAttribute($this->getAttribute((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "options", array()), "route_param_name", array()) => $this->getAttribute((isset($context["record"]) ? $context["record"] : $this->getContext($context, "record")), $this->getAttribute($this->getAttribute((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "options", array()), "route_param_field", array()), array(), "array"))), "html", null, true);
        echo "\"
   data-confirm-message=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "options", array()), "confirm_message", array()), "html", null, true);
        echo "\"
>
  ";
        // line 36
        if ( !twig_test_empty($this->getAttribute((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "icon", array()))) {
            // line 37
            echo "    <i class=\"material-icons\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "icon", array()), "html", null, true);
            echo "</i>
  ";
        }
        // line 39
        echo "  ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "name", array()), "html", null, true);
        echo "
</a>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Common/Grid/Actions/Row/link.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 39,  57 => 37,  55 => 36,  50 => 34,  46 => 33,  42 => 32,  39 => 31,  35 => 29,  33 => 28,  30 => 27,  28 => 26,  25 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#**
 * 2007-2018 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2018 PrestaShop SA
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *#}

{% set class = 'btn tooltip-link js-link-row-action' %}

{% if attributes.class is defined %}
  {% set class = class ~ ' ' ~ attributes.class %}
{% endif %}

<a class=\"{{ class }}\"
   href=\"{{ path(action.options.route, { (action.options.route_param_name) : record[action.options.route_param_field]}) }}\"
   data-confirm-message=\"{{ action.options.confirm_message }}\"
>
  {% if action.icon is not empty %}
    <i class=\"material-icons\">{{ action.icon }}</i>
  {% endif %}
  {{ action.name }}
</a>
", "@PrestaShop/Admin/Common/Grid/Actions/Row/link.html.twig", "/home/padilo00/padilo.pro/presta/src/PrestaShopBundle/Resources/views/Admin/Common/Grid/Actions/Row/link.html.twig");
    }
}
