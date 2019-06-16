<?php

/* @PrestaShop/Admin/Common/Grid/Blocks/pagination.html.twig */
class __TwigTemplate_caf0022b0414d7ea3940942988421318ca3e23a1bd276a323a388b80afa5d2c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'grid_pagination' => array($this, 'block_grid_pagination'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Common/Grid/Blocks/pagination.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Common/Grid/Blocks/pagination.html.twig"));

        // line 25
        echo "
";
        // line 26
        $this->displayBlock('grid_pagination', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_grid_pagination($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "grid_pagination"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "grid_pagination"));

        // line 27
        echo "  ";
        if ((($this->getAttribute($this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "data", array()), "records_total", array()) > 10) || $this->getAttribute($this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "pagination", array()), "offset", array()))) {
            // line 28
            echo "    <div class=\"row\">
      <div class=\"col-md-12\">
        ";
            // line 30
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("PrestaShopBundle:Admin\\Common:pagination", array("limit" => $this->getAttribute($this->getAttribute(            // line 31
(isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "pagination", array()), "limit", array()), "offset" => $this->getAttribute($this->getAttribute(            // line 32
(isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "pagination", array()), "offset", array()), "total" => $this->getAttribute($this->getAttribute(            // line 33
(isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "data", array()), "records_total", array()), "caller_route" => $this->getAttribute($this->getAttribute($this->getAttribute(            // line 34
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"))));
            // line 35
            echo "
      </div>
    </div>
  ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Common/Grid/Blocks/pagination.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  60 => 35,  58 => 34,  57 => 33,  56 => 32,  55 => 31,  54 => 30,  50 => 28,  47 => 27,  29 => 26,  26 => 25,);
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

{% block grid_pagination %}
  {% if grid.data.records_total > 10 or grid.pagination.offset %}
    <div class=\"row\">
      <div class=\"col-md-12\">
        {{ render(controller('PrestaShopBundle:Admin\\\\Common:pagination', {
          'limit': grid.pagination.limit,
          'offset': grid.pagination.offset,
          'total': grid.data.records_total,
          'caller_route': app.request.attributes.get('_route')
        })) }}
      </div>
    </div>
  {% endif %}
{% endblock %}
", "@PrestaShop/Admin/Common/Grid/Blocks/pagination.html.twig", "/home/padilo00/padilo.pro/presta/src/PrestaShopBundle/Resources/views/Admin/Common/Grid/Blocks/pagination.html.twig");
    }
}
