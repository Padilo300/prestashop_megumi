<?php

/* @PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/shop_urls_configuration.html.twig */
class __TwigTemplate_0d31428702b832966e8ec7728d6d49488336436c63d05d45e1906ed01f9014a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'shop_urls_configuration' => array($this, 'block_shop_urls_configuration'),
            'meta_form_rest' => array($this, 'block_meta_form_rest'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/shop_urls_configuration.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/shop_urls_configuration.html.twig"));

        // line 25
        echo "
";
        // line 27
        echo "
";
        // line 28
        $context["shopUrlForm"] = $this->getAttribute((isset($context["metaForm"]) ? $context["metaForm"] : $this->getContext($context, "metaForm")), "shop_urls", array());
        // line 29
        echo "
";
        // line 30
        $this->displayBlock('shop_urls_configuration', $context, $blocks);
        // line 115
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 30
    public function block_shop_urls_configuration($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "shop_urls_configuration"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "shop_urls_configuration"));

        // line 31
        echo "
  ";
        // line 32
        $context["cardHeaderLabel"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Set shop URL", array(), "Admin.Shopparameters.Feature");
        // line 33
        echo "  ";
        if (((isset($context["isShopFeatureActive"]) ? $context["isShopFeatureActive"] : $this->getContext($context, "isShopFeatureActive")) &&  !(isset($context["isHostMode"]) ? $context["isHostMode"] : $this->getContext($context, "isHostMode")))) {
            // line 34
            echo "    <div class=\"card\">
      <div class=\"card-header\">
        <i class=\"material-icons\">settings</i> ";
            // line 36
            echo twig_escape_filter($this->env, (isset($context["cardHeaderLabel"]) ? $context["cardHeaderLabel"] : $this->getContext($context, "cardHeaderLabel")), "html", null, true);
            echo "
      </div>
      <div class=\"card-block row\">
        <div class=\"card-text\">
          <div class=\"row\">
            <div class=\"col-sm\">
              <div class=\"alert alert-info\" role=\"alert\">
                <div class=\"alert-text\">
                  ";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("The multistore option is enabled. If you want to change the URL of your shop, you must go to the \"Multistore\" page under the \"Advanced Parameters\" menu.", array(), "Admin.Shopparameters.Notification"), "html", null, true);
            echo "
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  ";
        }
        // line 53
        echo "
  ";
        // line 54
        if ( !twig_test_empty($this->getAttribute((isset($context["shopUrlForm"]) ? $context["shopUrlForm"] : $this->getContext($context, "shopUrlForm")), "children", array()))) {
            // line 55
            echo "    <div class=\"card\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">settings</i> ";
            // line 57
            echo twig_escape_filter($this->env, (isset($context["cardHeaderLabel"]) ? $context["cardHeaderLabel"] : $this->getContext($context, "cardHeaderLabel")), "html", null, true);
            echo "
      </h3>
      <div class=\"card-block row\">
        <div class=\"card-text\">
            <div class=\"row\">
              <div class=\"col-sm\">
                <div class=\"alert alert-info\" role=\"alert\">
                  <div class=\"alert-text\">
                    ";
            // line 65
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Here you can set the URL for your shop. If you migrate your shop to a new URL, remember to change the values below.", array(), "Admin.Shopparameters.Notification"), "html", null, true);
            echo "
                  </div>
                </div>
              </div>
            </div>

            <div class=\"form-group row\">
              <label class=\"form-control-label\">
                ";
            // line 73
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Shop domain", array(), "Admin.Shopparameters.Feature"), "html", null, true);
            echo "
              </label>
              <div class=\"col-sm\">
                ";
            // line 76
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["shopUrlForm"]) ? $context["shopUrlForm"] : $this->getContext($context, "shopUrlForm")), "domain", array()), 'errors');
            echo "
                ";
            // line 77
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["shopUrlForm"]) ? $context["shopUrlForm"] : $this->getContext($context, "shopUrlForm")), "domain", array()), 'widget');
            echo "
              </div>
            </div>

            <div class=\"form-group row\">
              <label class=\"form-control-label\">
                ";
            // line 83
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("SSL domain", array(), "Admin.Shopparameters.Feature"), "html", null, true);
            echo "
              </label>
              <div class=\"col-sm\">
                ";
            // line 86
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["shopUrlForm"]) ? $context["shopUrlForm"] : $this->getContext($context, "shopUrlForm")), "domain_ssl", array()), 'errors');
            echo "
                ";
            // line 87
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["shopUrlForm"]) ? $context["shopUrlForm"] : $this->getContext($context, "shopUrlForm")), "domain_ssl", array()), 'widget');
            echo "
              </div>
            </div>

            <div class=\"form-group row\">
              <label class=\"form-control-label\">
                ";
            // line 93
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Base URI", array(), "Admin.Shopparameters.Feature"), "html", null, true);
            echo "
              </label>
              <div class=\"col-sm\">
                ";
            // line 96
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["shopUrlForm"]) ? $context["shopUrlForm"] : $this->getContext($context, "shopUrlForm")), "physical_uri", array()), 'errors');
            echo "
                ";
            // line 97
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["shopUrlForm"]) ? $context["shopUrlForm"] : $this->getContext($context, "shopUrlForm")), "physical_uri", array()), 'widget', array("required" => false));
            echo "
              </div>
            </div>

            ";
            // line 101
            $this->displayBlock('meta_form_rest', $context, $blocks);
            // line 104
            echo "        </div>
      </div>

      <div class=\"card-footer\">
        <div class=\"d-flex justify-content-end\">
          <button class=\"btn btn-primary\">";
            // line 109
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", array(), "Admin.Actions"), "html", null, true);
            echo "</button>
        </div>
      </div>
    </div>
  ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 101
    public function block_meta_form_rest($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta_form_rest"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta_form_rest"));

        // line 102
        echo "              ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["shopUrlForm"]) ? $context["shopUrlForm"] : $this->getContext($context, "shopUrlForm")), 'rest');
        echo "
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/shop_urls_configuration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  215 => 102,  206 => 101,  190 => 109,  183 => 104,  181 => 101,  174 => 97,  170 => 96,  164 => 93,  155 => 87,  151 => 86,  145 => 83,  136 => 77,  132 => 76,  126 => 73,  115 => 65,  104 => 57,  100 => 55,  98 => 54,  95 => 53,  83 => 44,  72 => 36,  68 => 34,  65 => 33,  63 => 32,  60 => 31,  51 => 30,  40 => 115,  38 => 30,  35 => 29,  33 => 28,  30 => 27,  27 => 25,);
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

{% trans_default_domain \"Admin.Shopparameters.Feature\" %}

{% set shopUrlForm = metaForm.shop_urls %}

{% block shop_urls_configuration %}

  {% set cardHeaderLabel = 'Set shop URL'|trans %}
  {% if isShopFeatureActive and not isHostMode %}
    <div class=\"card\">
      <div class=\"card-header\">
        <i class=\"material-icons\">settings</i> {{ cardHeaderLabel }}
      </div>
      <div class=\"card-block row\">
        <div class=\"card-text\">
          <div class=\"row\">
            <div class=\"col-sm\">
              <div class=\"alert alert-info\" role=\"alert\">
                <div class=\"alert-text\">
                  {{ 'The multistore option is enabled. If you want to change the URL of your shop, you must go to the \"Multistore\" page under the \"Advanced Parameters\" menu.'|trans({}, 'Admin.Shopparameters.Notification') }}
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  {% endif %}

  {% if shopUrlForm.children is not empty %}
    <div class=\"card\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">settings</i> {{ cardHeaderLabel }}
      </h3>
      <div class=\"card-block row\">
        <div class=\"card-text\">
            <div class=\"row\">
              <div class=\"col-sm\">
                <div class=\"alert alert-info\" role=\"alert\">
                  <div class=\"alert-text\">
                    {{ 'Here you can set the URL for your shop. If you migrate your shop to a new URL, remember to change the values below.'|trans({}, 'Admin.Shopparameters.Notification') }}
                  </div>
                </div>
              </div>
            </div>

            <div class=\"form-group row\">
              <label class=\"form-control-label\">
                {{ 'Shop domain'|trans }}
              </label>
              <div class=\"col-sm\">
                {{ form_errors(shopUrlForm.domain) }}
                {{ form_widget(shopUrlForm.domain) }}
              </div>
            </div>

            <div class=\"form-group row\">
              <label class=\"form-control-label\">
                {{ 'SSL domain'|trans }}
              </label>
              <div class=\"col-sm\">
                {{ form_errors(shopUrlForm.domain_ssl) }}
                {{ form_widget(shopUrlForm.domain_ssl) }}
              </div>
            </div>

            <div class=\"form-group row\">
              <label class=\"form-control-label\">
                {{ 'Base URI'|trans }}
              </label>
              <div class=\"col-sm\">
                {{ form_errors(shopUrlForm.physical_uri) }}
                {{ form_widget(shopUrlForm.physical_uri, {'required': false}) }}
              </div>
            </div>

            {% block meta_form_rest %}
              {{ form_rest(shopUrlForm) }}
            {% endblock %}
        </div>
      </div>

      <div class=\"card-footer\">
        <div class=\"d-flex justify-content-end\">
          <button class=\"btn btn-primary\">{{ 'Save'|trans({}, 'Admin.Actions') }}</button>
        </div>
      </div>
    </div>
  {% endif %}
{% endblock %}

", "@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/shop_urls_configuration.html.twig", "/home/padilo00/padilo.pro/presta/src/PrestaShopBundle/Resources/views/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/shop_urls_configuration.html.twig");
    }
}
