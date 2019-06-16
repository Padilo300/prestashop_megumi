<?php

/* @PrestaShop/Admin/Common/Grid/Columns/Content/action.html.twig */
class __TwigTemplate_8656a1eef249eaa3426c63e986b5bd80c29e20ad5d53f2b26593d0f2388084c1 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Common/Grid/Columns/Content/action.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Common/Grid/Columns/Content/action.html.twig"));

        // line 25
        echo "
";
        // line 26
        $context["actions"] = $this->getAttribute($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "options", array()), "actions", array());
        // line 27
        echo "
";
        // line 28
        if ( !twig_test_empty((isset($context["actions"]) ? $context["actions"] : $this->getContext($context, "actions")))) {
            // line 29
            echo "  <div class=\"btn-group-action text-right\">
    <div class=\"btn-group\">
      ";
            // line 31
            echo twig_include($this->env, $context, (("@PrestaShop/Admin/Common/Grid/Actions/Row/" . $this->getAttribute(twig_first($this->env, (isset($context["actions"]) ? $context["actions"] : $this->getContext($context, "actions"))), "type", array())) . ".html.twig"), array("grid" =>             // line 32
(isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "column" =>             // line 33
(isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "record" =>             // line 34
(isset($context["record"]) ? $context["record"] : $this->getContext($context, "record")), "action" => twig_first($this->env,             // line 35
(isset($context["actions"]) ? $context["actions"] : $this->getContext($context, "actions")))));
            // line 36
            echo "

      ";
            // line 38
            if ((twig_length_filter($this->env, (isset($context["actions"]) ? $context["actions"] : $this->getContext($context, "actions"))) > 1)) {
                // line 39
                echo "        <a class=\"btn btn-link dropdown-toggle dropdown-toggle-split\"
           data-toggle=\"dropdown\"
           aria-haspopup=\"true\"
           aria-expanded=\"false\"
        >
        </a>

        <div class=\"dropdown-menu dropdown-menu-right\">
          ";
                // line 47
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["actions"]) ? $context["actions"] : $this->getContext($context, "actions")), 1));
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
                    // line 48
                    echo "              ";
                    echo twig_include($this->env, $context, (("@PrestaShop/Admin/Common/Grid/Actions/Row/" . $this->getAttribute($context["action"], "type", array())) . ".html.twig"), array("grid" =>                     // line 49
(isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "column" =>                     // line 50
(isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "attributes" => array("class" => "dropdown-item"), "record" =>                     // line 52
(isset($context["record"]) ? $context["record"] : $this->getContext($context, "record")), "action" =>                     // line 53
$context["action"]));
                    // line 54
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
                // line 56
                echo "        </div>
      ";
            }
            // line 58
            echo "    </div>
  </div>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Common/Grid/Columns/Content/action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 58,  100 => 56,  85 => 54,  83 => 53,  82 => 52,  81 => 50,  80 => 49,  78 => 48,  61 => 47,  51 => 39,  49 => 38,  45 => 36,  43 => 35,  42 => 34,  41 => 33,  40 => 32,  39 => 31,  35 => 29,  33 => 28,  30 => 27,  28 => 26,  25 => 25,);
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

{% set actions = column.options.actions %}

{% if actions is not empty %}
  <div class=\"btn-group-action text-right\">
    <div class=\"btn-group\">
      {{ include('@PrestaShop/Admin/Common/Grid/Actions/Row/'~actions|first.type~'.html.twig', {
        'grid': grid,
        'column': column,
        'record': record,
        'action': actions|first
      }) }}

      {% if actions|length > 1 %}
        <a class=\"btn btn-link dropdown-toggle dropdown-toggle-split\"
           data-toggle=\"dropdown\"
           aria-haspopup=\"true\"
           aria-expanded=\"false\"
        >
        </a>

        <div class=\"dropdown-menu dropdown-menu-right\">
          {% for action in actions|slice(1) %}
              {{ include('@PrestaShop/Admin/Common/Grid/Actions/Row/'~action.type~'.html.twig', {
                'grid': grid,
                'column': column,
                'attributes': {'class': 'dropdown-item'},
                'record': record,
                'action': action
              }) }}
          {% endfor %}
        </div>
      {% endif %}
    </div>
  </div>
{% endif %}
", "@PrestaShop/Admin/Common/Grid/Columns/Content/action.html.twig", "/home/padilo00/padilo.pro/presta/src/PrestaShopBundle/Resources/views/Admin/Common/Grid/Columns/Content/action.html.twig");
    }
}
