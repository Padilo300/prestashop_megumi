<?php

/* @PrestaShop/Admin/Common/Grid/Blocks/grid_actions.html.twig */
class __TwigTemplate_5aa9256482097ed331bcadc67ab93866032a6333246d35486f94d980893a82a5 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Common/Grid/Blocks/grid_actions.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Common/Grid/Blocks/grid_actions.html.twig"));

        // line 25
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "actions", array()), "grid", array())) > 0)) {
            // line 26
            echo "  ";
            $context["gridActionsButtonId"] = ($this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "id", array()) . "-grid-actions-button");
            // line 27
            echo "
  <div class=\"dropdown text-right\">
    <button class=\"btn btn-text dropdown-toggle tool-button\"
            id=\"";
            // line 30
            echo twig_escape_filter($this->env, (isset($context["gridActionsButtonId"]) ? $context["gridActionsButtonId"] : $this->getContext($context, "gridActionsButtonId")), "html", null, true);
            echo "\"
            data-toggle=\"dropdown\"
            aria-haspopup=\"true\"
            aria-expanded=\"false\"
            title=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Settings", array(), "Admin.Global"), "html", null, true);
            echo "\"
    >
      <span class=\"sr-only\">";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Settings", array(), "Admin.Global"), "html", null, true);
            echo "</span>
    </button>

    <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"";
            // line 39
            echo twig_escape_filter($this->env, (isset($context["gridActionsButtonId"]) ? $context["gridActionsButtonId"] : $this->getContext($context, "gridActionsButtonId")), "html", null, true);
            echo "\">
      ";
            // line 40
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "actions", array()), "grid", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                // line 41
                echo "        ";
                echo twig_include($this->env, $context, (("@PrestaShop/Admin/Common/Grid/Actions/Grid/" . $this->getAttribute($context["action"], "type", array())) . ".html.twig"), array("action" => $context["action"], "grid" => (isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid"))));
                echo "
      ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "    </div>

    ";
            // line 45
            $this->loadTemplate("@PrestaShop/Admin/Common/Grid/Blocks/grid_actions.html.twig", "@PrestaShop/Admin/Common/Grid/Blocks/grid_actions.html.twig", 45, "294067067")->display(array_merge($context, array("id" => ($this->getAttribute(            // line 46
(isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "id", array()) . "_grid_common_show_query_modal"), "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("SQL query", array(), "Admin.Global"), "closable" => true, "actions" => array(0 => array("type" => "button", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Export to SQL Manager", array(), "Admin.Actions"), "value" => "sql_manager", "class" => "btn btn-primary btn-lg btn-sql-submit")))));
            // line 70
            echo "  </div>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Common/Grid/Blocks/grid_actions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 70,  96 => 46,  95 => 45,  91 => 43,  74 => 41,  57 => 40,  53 => 39,  47 => 36,  42 => 34,  35 => 30,  30 => 27,  27 => 26,  25 => 25,);
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
{% if grid.actions.grid|length > 0 %}
  {% set gridActionsButtonId = grid.id ~ '-grid-actions-button' %}

  <div class=\"dropdown text-right\">
    <button class=\"btn btn-text dropdown-toggle tool-button\"
            id=\"{{ gridActionsButtonId }}\"
            data-toggle=\"dropdown\"
            aria-haspopup=\"true\"
            aria-expanded=\"false\"
            title=\"{{ 'Settings'|trans({}, 'Admin.Global') }}\"
    >
      <span class=\"sr-only\">{{ 'Settings'|trans({}, 'Admin.Global') }}</span>
    </button>

    <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"{{ gridActionsButtonId }}\">
      {% for action in grid.actions.grid %}
        {{ include('@PrestaShop/Admin/Common/Grid/Actions/Grid/'~action.type~'.html.twig', {'action': action, 'grid': grid}) }}
      {% endfor %}
    </div>

    {% embed '@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig' with {
      'id': grid.id ~ '_grid_common_show_query_modal',
      'title': \"SQL query\"|trans({}, 'Admin.Global'),
      'closable': true,
      'actions': [{
        'type': 'button',
        'label': \"Export to SQL Manager\"|trans({}, 'Admin.Actions'),
        'value': 'sql_manager',
        'class': 'btn btn-primary btn-lg btn-sql-submit',
      }],
    } %}
      {% block content %}
          <div class=\"modal-body\">
            <form method=\"post\"
                  action=\"{{ path('admin_sql_request_create') }}\"
                  id=\"{{ grid.id ~ '_common_show_query_modal_form' }}\"
            >
              <div class=\"form-group\">
                <textarea name=\"sql\" rows=\"10\" cols=\"65\" title=\"\" class=\"form-control\"></textarea>
                <input type=\"hidden\" name=\"name\" value=\"\" />
              </div>
            </form>
          </div>
      {% endblock %}
    {% endembed %}
  </div>
{% endif %}
", "@PrestaShop/Admin/Common/Grid/Blocks/grid_actions.html.twig", "/home/padilo00/padilo.pro/presta/src/PrestaShopBundle/Resources/views/Admin/Common/Grid/Blocks/grid_actions.html.twig");
    }
}


/* @PrestaShop/Admin/Common/Grid/Blocks/grid_actions.html.twig */
class __TwigTemplate_5aa9256482097ed331bcadc67ab93866032a6333246d35486f94d980893a82a5_294067067 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 45
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig", "@PrestaShop/Admin/Common/Grid/Blocks/grid_actions.html.twig", 45);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Common/Grid/Blocks/grid_actions.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Common/Grid/Blocks/grid_actions.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 56
    public function block_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 57
        echo "          <div class=\"modal-body\">
            <form method=\"post\"
                  action=\"";
        // line 59
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_sql_request_create");
        echo "\"
                  id=\"";
        // line 60
        echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "id", array()) . "_common_show_query_modal_form"), "html", null, true);
        echo "\"
            >
              <div class=\"form-group\">
                <textarea name=\"sql\" rows=\"10\" cols=\"65\" title=\"\" class=\"form-control\"></textarea>
                <input type=\"hidden\" name=\"name\" value=\"\" />
              </div>
            </form>
          </div>
      ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Common/Grid/Blocks/grid_actions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  264 => 60,  260 => 59,  256 => 57,  247 => 56,  218 => 45,  98 => 70,  96 => 46,  95 => 45,  91 => 43,  74 => 41,  57 => 40,  53 => 39,  47 => 36,  42 => 34,  35 => 30,  30 => 27,  27 => 26,  25 => 25,);
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
{% if grid.actions.grid|length > 0 %}
  {% set gridActionsButtonId = grid.id ~ '-grid-actions-button' %}

  <div class=\"dropdown text-right\">
    <button class=\"btn btn-text dropdown-toggle tool-button\"
            id=\"{{ gridActionsButtonId }}\"
            data-toggle=\"dropdown\"
            aria-haspopup=\"true\"
            aria-expanded=\"false\"
            title=\"{{ 'Settings'|trans({}, 'Admin.Global') }}\"
    >
      <span class=\"sr-only\">{{ 'Settings'|trans({}, 'Admin.Global') }}</span>
    </button>

    <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"{{ gridActionsButtonId }}\">
      {% for action in grid.actions.grid %}
        {{ include('@PrestaShop/Admin/Common/Grid/Actions/Grid/'~action.type~'.html.twig', {'action': action, 'grid': grid}) }}
      {% endfor %}
    </div>

    {% embed '@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig' with {
      'id': grid.id ~ '_grid_common_show_query_modal',
      'title': \"SQL query\"|trans({}, 'Admin.Global'),
      'closable': true,
      'actions': [{
        'type': 'button',
        'label': \"Export to SQL Manager\"|trans({}, 'Admin.Actions'),
        'value': 'sql_manager',
        'class': 'btn btn-primary btn-lg btn-sql-submit',
      }],
    } %}
      {% block content %}
          <div class=\"modal-body\">
            <form method=\"post\"
                  action=\"{{ path('admin_sql_request_create') }}\"
                  id=\"{{ grid.id ~ '_common_show_query_modal_form' }}\"
            >
              <div class=\"form-group\">
                <textarea name=\"sql\" rows=\"10\" cols=\"65\" title=\"\" class=\"form-control\"></textarea>
                <input type=\"hidden\" name=\"name\" value=\"\" />
              </div>
            </form>
          </div>
      {% endblock %}
    {% endembed %}
  </div>
{% endif %}
", "@PrestaShop/Admin/Common/Grid/Blocks/grid_actions.html.twig", "/home/padilo00/padilo.pro/presta/src/PrestaShopBundle/Resources/views/Admin/Common/Grid/Blocks/grid_actions.html.twig");
    }
}
