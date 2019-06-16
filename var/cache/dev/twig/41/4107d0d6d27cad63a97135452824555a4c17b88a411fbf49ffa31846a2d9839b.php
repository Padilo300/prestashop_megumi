<?php

/* @PrestaShop/Admin/Common/Grid/grid.html.twig */
class __TwigTemplate_0ce7a245422a671cec16a04f74ea520e7621482bc920f6c53e64c1f8e688aa7e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'grid_header_row' => array($this, 'block_grid_header_row'),
            'grid_bulk_actions_block' => array($this, 'block_grid_bulk_actions_block'),
            'grid_actions_block' => array($this, 'block_grid_actions_block'),
            'grid_table_row' => array($this, 'block_grid_table_row'),
            'grid_footer_row' => array($this, 'block_grid_footer_row'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Common/Grid/grid.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Common/Grid/grid.html.twig"));

        // line 25
        echo "
<div class=\"row js-grid\" id=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "id", array()), "html", null, true);
        echo "_grid\" data-grid-id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "id", array()), "html", null, true);
        echo "\">
  <div class=\"col\">
    ";
        // line 28
        $this->displayBlock('grid_header_row', $context, $blocks);
        // line 52
        echo "
    ";
        // line 53
        $this->displayBlock('grid_table_row', $context, $blocks);
        // line 60
        echo "
    ";
        // line 61
        $this->displayBlock('grid_footer_row', $context, $blocks);
        // line 68
        echo "  </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 28
    public function block_grid_header_row($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "grid_header_row"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "grid_header_row"));

        // line 29
        echo "      <div class=\"row\">
        ";
        // line 30
        $this->displayBlock('grid_bulk_actions_block', $context, $blocks);
        // line 44
        echo "
        ";
        // line 45
        $this->displayBlock('grid_actions_block', $context, $blocks);
        // line 50
        echo "      </div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 30
    public function block_grid_bulk_actions_block($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "grid_bulk_actions_block"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "grid_bulk_actions_block"));

        // line 31
        echo "          <div class=\"col\">
            <div class=\"row\">
              <div class=\"col\">
                ";
        // line 34
        echo twig_include($this->env, $context, "@PrestaShop/Admin/Common/Grid/Blocks/bulk_actions.html.twig", array("grid" => (isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid"))));
        echo "
              </div>
            </div>
            <div class=\"row\">
              <div class=\"col\">
                ";
        // line 39
        echo twig_include($this->env, $context, "@PrestaShop/Admin/Common/Grid/Blocks/bulk_actions_select_all.html.twig", array("grid" => (isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid"))));
        echo "
              </div>
            </div>
          </div>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 45
    public function block_grid_actions_block($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "grid_actions_block"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "grid_actions_block"));

        // line 46
        echo "          <div class=\"col-2\">
            ";
        // line 47
        echo twig_include($this->env, $context, "@PrestaShop/Admin/Common/Grid/Blocks/grid_actions.html.twig", array("grid" => (isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid"))));
        echo "
          </div>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 53
    public function block_grid_table_row($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "grid_table_row"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "grid_table_row"));

        // line 54
        echo "      <div class=\"row\">
        <div class=\"col\">
          ";
        // line 56
        echo twig_include($this->env, $context, "@PrestaShop/Admin/Common/Grid/Blocks/table.html.twig", array("grid" => (isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid"))));
        echo "
        </div>
      </div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 61
    public function block_grid_footer_row($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "grid_footer_row"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "grid_footer_row"));

        // line 62
        echo "      <div class=\"row\">
        <div class=\"col\">
          ";
        // line 64
        echo twig_include($this->env, $context, "@PrestaShop/Admin/Common/Grid/Blocks/pagination.html.twig", array("grid" => (isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid"))));
        echo "
        </div>
      </div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Common/Grid/grid.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 64,  192 => 62,  183 => 61,  169 => 56,  165 => 54,  156 => 53,  143 => 47,  140 => 46,  131 => 45,  116 => 39,  108 => 34,  103 => 31,  94 => 30,  83 => 50,  81 => 45,  78 => 44,  76 => 30,  73 => 29,  64 => 28,  52 => 68,  50 => 61,  47 => 60,  45 => 53,  42 => 52,  40 => 28,  33 => 26,  30 => 25,);
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

<div class=\"row js-grid\" id=\"{{ grid.id }}_grid\" data-grid-id=\"{{ grid.id }}\">
  <div class=\"col\">
    {% block grid_header_row %}
      <div class=\"row\">
        {% block grid_bulk_actions_block %}
          <div class=\"col\">
            <div class=\"row\">
              <div class=\"col\">
                {{ include('@PrestaShop/Admin/Common/Grid/Blocks/bulk_actions.html.twig', {'grid': grid}) }}
              </div>
            </div>
            <div class=\"row\">
              <div class=\"col\">
                {{ include('@PrestaShop/Admin/Common/Grid/Blocks/bulk_actions_select_all.html.twig', {'grid': grid}) }}
              </div>
            </div>
          </div>
        {% endblock %}

        {% block grid_actions_block %}
          <div class=\"col-2\">
            {{ include('@PrestaShop/Admin/Common/Grid/Blocks/grid_actions.html.twig', {'grid': grid}) }}
          </div>
        {% endblock %}
      </div>
    {% endblock %}

    {% block grid_table_row %}
      <div class=\"row\">
        <div class=\"col\">
          {{ include('@PrestaShop/Admin/Common/Grid/Blocks/table.html.twig', {'grid': grid}) }}
        </div>
      </div>
    {% endblock %}

    {% block grid_footer_row %}
      <div class=\"row\">
        <div class=\"col\">
          {{ include('@PrestaShop/Admin/Common/Grid/Blocks/pagination.html.twig', {'grid': grid}) }}
        </div>
      </div>
    {% endblock %}
  </div>
</div>
", "@PrestaShop/Admin/Common/Grid/grid.html.twig", "/home/padilo00/padilo.pro/presta/src/PrestaShopBundle/Resources/views/Admin/Common/Grid/grid.html.twig");
    }
}
