<?php

/* @PrestaShop/Admin/Common/Grid/Blocks/table.html.twig */
class __TwigTemplate_66036c108819a461fd5514a9bd1511cfc80e46c404c81b3b2c1e069fbafc3f29 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'grid_table_head' => array($this, 'block_grid_table_head'),
            'grid_table_body' => array($this, 'block_grid_table_body'),
            'grid_table_footer' => array($this, 'block_grid_table_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Common/Grid/Blocks/table.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Common/Grid/Blocks/table.html.twig"));

        // line 25
        echo "
";
        // line 26
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock($this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "filter_form", array()), 'form_start', array("attr" => array("id" => ($this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "id", array()) . "_filter_form"))));
        echo "
<table class=\"js-grid-table table ";
        // line 27
        if ($this->env->getExtension('PrestaShopBundle\Twig\Extension\GridExtension')->isOrderingColumn((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")))) {
            echo "grid-ordering-column";
        }
        echo "\"
       id=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "id", array()), "html", null, true);
        echo "_grid_table\"
       data-query=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "data", array()), "query", array()), "html", null, true);
        echo "\"
>
  <thead class=\"thead-default\">
  ";
        // line 32
        $this->displayBlock('grid_table_head', $context, $blocks);
        // line 36
        echo "  </thead>
  <tbody>
  ";
        // line 38
        $this->displayBlock('grid_table_body', $context, $blocks);
        // line 53
        echo "  </tbody>
  ";
        // line 54
        $this->displayBlock('grid_table_footer', $context, $blocks);
        // line 55
        echo "</table>
";
        // line 56
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock($this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "filter_form", array()), 'form_end');
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 32
    public function block_grid_table_head($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "grid_table_head"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "grid_table_head"));

        // line 33
        echo "    ";
        echo twig_include($this->env, $context, "@PrestaShop/Admin/Common/Grid/Blocks/Table/headers_row.html.twig", array("grid" => (isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid"))));
        echo "
    ";
        // line 34
        echo twig_include($this->env, $context, "@PrestaShop/Admin/Common/Grid/Blocks/Table/filters_row.html.twig", array("grid" => (isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid"))));
        echo "
  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 38
    public function block_grid_table_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "grid_table_body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "grid_table_body"));

        // line 39
        echo "    ";
        if ( !twig_test_empty($this->getAttribute($this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "data", array()), "records", array()))) {
            // line 40
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "data", array()), "records", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
                // line 41
                echo "        <tr>
          ";
                // line 42
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "columns", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
                    // line 43
                    echo "            <td>
              ";
                    // line 44
                    echo $this->env->getExtension('PrestaShopBundle\Twig\Extension\GridExtension')->renderColumnContent($context["record"], $context["column"], (isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")));
                    echo "
            </td>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 47
                echo "        </tr>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo "    ";
        } else {
            // line 50
            echo "      ";
            echo twig_include($this->env, $context, "@PrestaShop/Admin/Common/Grid/Blocks/Table/empty_row.html.twig", array("grid" => (isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid"))));
            echo "
    ";
        }
        // line 52
        echo "  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 54
    public function block_grid_table_footer($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "grid_table_footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "grid_table_footer"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Common/Grid/Blocks/table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 54,  157 => 52,  151 => 50,  148 => 49,  141 => 47,  132 => 44,  129 => 43,  125 => 42,  122 => 41,  117 => 40,  114 => 39,  105 => 38,  93 => 34,  88 => 33,  79 => 32,  67 => 56,  64 => 55,  62 => 54,  59 => 53,  57 => 38,  53 => 36,  51 => 32,  45 => 29,  41 => 28,  35 => 27,  31 => 26,  28 => 25,);
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

{{ form_start(grid.filter_form, {'attr': {'id': grid.id ~ '_filter_form'}}) }}
<table class=\"js-grid-table table {% if is_ordering_column(grid) %}grid-ordering-column{% endif %}\"
       id=\"{{ grid.id }}_grid_table\"
       data-query=\"{{ grid.data.query }}\"
>
  <thead class=\"thead-default\">
  {% block grid_table_head %}
    {{ include('@PrestaShop/Admin/Common/Grid/Blocks/Table/headers_row.html.twig', {'grid': grid}) }}
    {{ include('@PrestaShop/Admin/Common/Grid/Blocks/Table/filters_row.html.twig', {'grid': grid}) }}
  {% endblock %}
  </thead>
  <tbody>
  {% block grid_table_body %}
    {% if grid.data.records is not empty %}
      {% for record in grid.data.records %}
        <tr>
          {% for column in grid.columns %}
            <td>
              {{ column_content(record, column, grid) }}
            </td>
          {% endfor %}
        </tr>
      {% endfor %}
    {% else %}
      {{ include('@PrestaShop/Admin/Common/Grid/Blocks/Table/empty_row.html.twig', {'grid': grid}) }}
    {% endif %}
  {% endblock %}
  </tbody>
  {% block grid_table_footer %}{% endblock %}
</table>
{{ form_end(grid.filter_form) }}
", "@PrestaShop/Admin/Common/Grid/Blocks/table.html.twig", "/home/padilo00/padilo.pro/presta/src/PrestaShopBundle/Resources/views/Admin/Common/Grid/Blocks/table.html.twig");
    }
}
