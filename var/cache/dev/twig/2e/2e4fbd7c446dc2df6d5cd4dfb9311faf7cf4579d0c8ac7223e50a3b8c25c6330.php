<?php

/* @PrestaShop/Admin/Common/Grid/Columns/Header/Content/default.html.twig */
class __TwigTemplate_952cca447b59a3665211f3b0b4c531230e580b551aedccb900bc49cb58443bf7 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Common/Grid/Columns/Header/Content/default.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Common/Grid/Columns/Header/Content/default.html.twig"));

        // line 25
        echo "
";
        // line 26
        $context["ps"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "@PrestaShop/Admin/Common/Grid/Columns/Header/Content/default.html.twig", 26);
        // line 27
        echo "
";
        // line 28
        list($context["orderBy"], $context["orderWay"]) =         array($this->getAttribute($this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "sorting", array()), "order_by", array()), $this->getAttribute($this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "sorting", array()), "order_way", array()));
        // line 29
        echo "
";
        // line 30
        if ((($this->getAttribute($this->getAttribute((isset($context["column"]) ? $context["column"] : null), "options", array(), "any", false, true), "sortable", array(), "any", true, true) && $this->getAttribute($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "options", array()), "sortable", array())) && ($this->getAttribute($this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "data", array()), "records_total", array()) > 0))) {
            // line 31
            echo "  ";
            echo $context["ps"]->getsortable_column_header($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "name", array()), $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "id", array()), (isset($context["orderBy"]) ? $context["orderBy"] : $this->getContext($context, "orderBy")), (isset($context["orderWay"]) ? $context["orderWay"] : $this->getContext($context, "orderWay")));
            echo "
";
        } else {
            // line 33
            echo "  ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "name", array()), "html", null, true);
            echo "
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Common/Grid/Columns/Header/Content/default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 33,  40 => 31,  38 => 30,  35 => 29,  33 => 28,  30 => 27,  28 => 26,  25 => 25,);
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

{% import '@PrestaShop/Admin/macros.html.twig' as ps %}

{% set orderBy, orderWay = grid.sorting.order_by, grid.sorting.order_way %}

{% if column.options.sortable is defined and column.options.sortable and grid.data.records_total > 0 %}
  {{ ps.sortable_column_header(column.name, column.id, orderBy, orderWay) }}
{% else %}
  {{ column.name }}
{% endif %}
", "@PrestaShop/Admin/Common/Grid/Columns/Header/Content/default.html.twig", "/home/padilo00/padilo.pro/presta/src/PrestaShopBundle/Resources/views/Admin/Common/Grid/Columns/Header/Content/default.html.twig");
    }
}
