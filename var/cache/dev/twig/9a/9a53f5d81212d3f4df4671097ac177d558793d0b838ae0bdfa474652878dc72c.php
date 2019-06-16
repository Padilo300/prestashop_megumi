<?php

/* @PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/url_schema_configuration.html.twig */
class __TwigTemplate_dd799a618f5494dee5709ead49a16f9c29b4ecf2abebeea7d234f9e98dca251b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'url_schema_configuration' => array($this, 'block_url_schema_configuration'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/url_schema_configuration.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/url_schema_configuration.html.twig"));

        // line 25
        echo "
";
        // line 27
        echo "
";
        // line 28
        $context["urlSchemaForm"] = $this->getAttribute((isset($context["metaForm"]) ? $context["metaForm"] : $this->getContext($context, "metaForm")), "url_schema", array());
        // line 29
        echo "
";
        // line 30
        $this->displayBlock('url_schema_configuration', $context, $blocks);
        // line 164
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 30
    public function block_url_schema_configuration($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "url_schema_configuration"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "url_schema_configuration"));

        // line 31
        echo "  ";
        if ( !twig_test_empty($this->getAttribute((isset($context["urlSchemaForm"]) ? $context["urlSchemaForm"] : $this->getContext($context, "urlSchemaForm")), "children", array()))) {
            // line 32
            echo "    <div class=\"card\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">settings</i> ";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Schema of URLs", array(), "Admin.Shopparameters.Feature"), "html", null, true);
            echo "
      </h3>
      <div class=\"card-block row\">
        <div class=\"card-text\">
          <div class=\"row\">
            <div class=\"col-sm\">
              <div class=\"alert alert-info\" role=\"alert\">
                <div class=\"alert-text\">
                  ";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("This section enables you to change the default pattern of your links. In order to use this functionality, PrestaShop's \"Friendly URL\" option must be enabled, and Apache's URL rewriting module (mod_rewrite) must be activated on your web server.", array(), "Admin.Shopparameters.Notification"), "html", null, true);
            echo "<br>
                  ";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("There are several available keywords for each route listed below; note that keywords with * are required!", array(), "Admin.Shopparameters.Notification"), "html", null, true);
            echo " <br>
                  ";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("To add a keyword in your URL, use the {keyword} syntax. If the keyword is not empty, you can add text before or after the keyword with syntax {prepend:keyword:append}. For example {-hey-:meta_title} will add \"-hey-my-title\" in the URL if the meta title is set.", array(), "Admin.Shopparameters.Notification"), "html", null, true);
            echo "
                </div>
              </div>
            </div>
          </div>

          <div class=\"form-group row\">
            <label class=\"form-control-label\">
              ";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Route to products", array(), "Admin.Shopparameters.Feature"), "html", null, true);
            echo "
            </label>
            <div class=\"col-sm\">
              ";
            // line 55
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["urlSchemaForm"]) ? $context["urlSchemaForm"] : $this->getContext($context, "urlSchemaForm")), "product_rule", array()), 'errors');
            echo "
              ";
            // line 56
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["urlSchemaForm"]) ? $context["urlSchemaForm"] : $this->getContext($context, "urlSchemaForm")), "product_rule", array()), 'widget');
            echo "
              <small class=\"form-text\">
                ";
            // line 58
            echo twig_include($this->env, $context, "@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/keyword.html.twig", array("idRoute" => "product_rule"));
            echo "
              </small>
            </div>
          </div>

          <div class=\"form-group row\">
            <label class=\"form-control-label\">
              ";
            // line 65
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Route to category", array(), "Admin.Shopparameters.Feature"), "html", null, true);
            echo "
            </label>
            <div class=\"col-sm\">
              ";
            // line 68
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["urlSchemaForm"]) ? $context["urlSchemaForm"] : $this->getContext($context, "urlSchemaForm")), "category_rule", array()), 'errors');
            echo "
              ";
            // line 69
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["urlSchemaForm"]) ? $context["urlSchemaForm"] : $this->getContext($context, "urlSchemaForm")), "category_rule", array()), 'widget');
            echo "
              <small class=\"form-text\">
                ";
            // line 71
            echo twig_include($this->env, $context, "@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/keyword.html.twig", array("idRoute" => "category_rule"));
            echo "
              </small>
            </div>
          </div>

          <div class=\"form-group row\">
            <label class=\"form-control-label\">
              ";
            // line 78
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Route to category which has the \"selected_filter\" attribute for the \"Layered Navigation\" (blocklayered) module", array(), "Admin.Shopparameters.Feature"), "html", null, true);
            echo "
            </label>
            <div class=\"col-sm\">
              ";
            // line 81
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["urlSchemaForm"]) ? $context["urlSchemaForm"] : $this->getContext($context, "urlSchemaForm")), "layered_rule", array()), 'errors');
            echo "
              ";
            // line 82
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["urlSchemaForm"]) ? $context["urlSchemaForm"] : $this->getContext($context, "urlSchemaForm")), "layered_rule", array()), 'widget');
            echo "
              <small class=\"form-text\">
                ";
            // line 84
            echo twig_include($this->env, $context, "@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/keyword.html.twig", array("idRoute" => "layered_rule"));
            echo "
              </small>
            </div>
          </div>

          <div class=\"form-group row\">
            <label class=\"form-control-label\">
              ";
            // line 91
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Route to supplier", array(), "Admin.Shopparameters.Feature"), "html", null, true);
            echo "
            </label>
            <div class=\"col-sm\">
              ";
            // line 94
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["urlSchemaForm"]) ? $context["urlSchemaForm"] : $this->getContext($context, "urlSchemaForm")), "supplier_rule", array()), 'errors');
            echo "
              ";
            // line 95
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["urlSchemaForm"]) ? $context["urlSchemaForm"] : $this->getContext($context, "urlSchemaForm")), "supplier_rule", array()), 'widget');
            echo "
              <small class=\"form-text\">
                ";
            // line 97
            echo twig_include($this->env, $context, "@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/keyword.html.twig", array("idRoute" => "supplier_rule"));
            echo "
              </small>
            </div>
          </div>

          <div class=\"form-group row\">
            <label class=\"form-control-label\">
              ";
            // line 104
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Route to brand", array(), "Admin.Shopparameters.Feature"), "html", null, true);
            echo "
            </label>
            <div class=\"col-sm\">
              ";
            // line 107
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["urlSchemaForm"]) ? $context["urlSchemaForm"] : $this->getContext($context, "urlSchemaForm")), "manufacturer_rule", array()), 'errors');
            echo "
              ";
            // line 108
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["urlSchemaForm"]) ? $context["urlSchemaForm"] : $this->getContext($context, "urlSchemaForm")), "manufacturer_rule", array()), 'widget');
            echo "
              <small class=\"form-text\">
                ";
            // line 110
            echo twig_include($this->env, $context, "@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/keyword.html.twig", array("idRoute" => "manufacturer_rule"));
            echo "
              </small>
            </div>
          </div>

          <div class=\"form-group row\">
            <label class=\"form-control-label\">
              ";
            // line 117
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Route to page", array(), "Admin.Shopparameters.Feature"), "html", null, true);
            echo "
            </label>
            <div class=\"col-sm\">
              ";
            // line 120
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["urlSchemaForm"]) ? $context["urlSchemaForm"] : $this->getContext($context, "urlSchemaForm")), "cms_rule", array()), 'errors');
            echo "
              ";
            // line 121
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["urlSchemaForm"]) ? $context["urlSchemaForm"] : $this->getContext($context, "urlSchemaForm")), "cms_rule", array()), 'widget');
            echo "
              <small class=\"form-text\">
                ";
            // line 123
            echo twig_include($this->env, $context, "@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/keyword.html.twig", array("idRoute" => "cms_rule"));
            echo "
              </small>
            </div>
          </div>

          <div class=\"form-group row\">
            <label class=\"form-control-label\">
              ";
            // line 130
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Route to page category", array(), "Admin.Shopparameters.Feature"), "html", null, true);
            echo "
            </label>
            <div class=\"col-sm\">
              ";
            // line 133
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["urlSchemaForm"]) ? $context["urlSchemaForm"] : $this->getContext($context, "urlSchemaForm")), "cms_category_rule", array()), 'errors');
            echo "
              ";
            // line 134
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["urlSchemaForm"]) ? $context["urlSchemaForm"] : $this->getContext($context, "urlSchemaForm")), "cms_category_rule", array()), 'widget');
            echo "
              <small class=\"form-text\">
                ";
            // line 136
            echo twig_include($this->env, $context, "@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/keyword.html.twig", array("idRoute" => "cms_category_rule"));
            echo "
              </small>
            </div>
          </div>

          <div class=\"form-group row\">
            <label class=\"form-control-label\">
              ";
            // line 143
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Route to modules", array(), "Admin.Shopparameters.Feature"), "html", null, true);
            echo "
            </label>
            <div class=\"col-sm\">
              ";
            // line 146
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["urlSchemaForm"]) ? $context["urlSchemaForm"] : $this->getContext($context, "urlSchemaForm")), "module", array()), 'errors');
            echo "
              ";
            // line 147
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["urlSchemaForm"]) ? $context["urlSchemaForm"] : $this->getContext($context, "urlSchemaForm")), "module", array()), 'widget');
            echo "
              <small class=\"form-text\">
                ";
            // line 149
            echo twig_include($this->env, $context, "@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/keyword.html.twig", array("idRoute" => "module"));
            echo "
              </small>
            </div>
          </div>

        </div>
      </div>
      <div class=\"card-footer\">
        <div class=\"d-flex justify-content-end\">
          <button class=\"btn btn-primary\">";
            // line 158
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

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/url_schema_configuration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  298 => 158,  286 => 149,  281 => 147,  277 => 146,  271 => 143,  261 => 136,  256 => 134,  252 => 133,  246 => 130,  236 => 123,  231 => 121,  227 => 120,  221 => 117,  211 => 110,  206 => 108,  202 => 107,  196 => 104,  186 => 97,  181 => 95,  177 => 94,  171 => 91,  161 => 84,  156 => 82,  152 => 81,  146 => 78,  136 => 71,  131 => 69,  127 => 68,  121 => 65,  111 => 58,  106 => 56,  102 => 55,  96 => 52,  85 => 44,  81 => 43,  77 => 42,  66 => 34,  62 => 32,  59 => 31,  50 => 30,  39 => 164,  37 => 30,  34 => 29,  32 => 28,  29 => 27,  26 => 25,);
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

{% set urlSchemaForm = metaForm.url_schema %}

{% block url_schema_configuration %}
  {% if urlSchemaForm.children is not empty %}
    <div class=\"card\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">settings</i> {{ 'Schema of URLs'|trans }}
      </h3>
      <div class=\"card-block row\">
        <div class=\"card-text\">
          <div class=\"row\">
            <div class=\"col-sm\">
              <div class=\"alert alert-info\" role=\"alert\">
                <div class=\"alert-text\">
                  {{ 'This section enables you to change the default pattern of your links. In order to use this functionality, PrestaShop\\'s \"Friendly URL\" option must be enabled, and Apache\\'s URL rewriting module (mod_rewrite) must be activated on your web server.'|trans({}, 'Admin.Shopparameters.Notification') }}<br>
                  {{ 'There are several available keywords for each route listed below; note that keywords with * are required!'|trans({}, 'Admin.Shopparameters.Notification') }} <br>
                  {{ 'To add a keyword in your URL, use the {keyword} syntax. If the keyword is not empty, you can add text before or after the keyword with syntax {prepend:keyword:append}. For example {-hey-:meta_title} will add \"-hey-my-title\" in the URL if the meta title is set.'|trans({}, 'Admin.Shopparameters.Notification') }}
                </div>
              </div>
            </div>
          </div>

          <div class=\"form-group row\">
            <label class=\"form-control-label\">
              {{ 'Route to products'|trans }}
            </label>
            <div class=\"col-sm\">
              {{ form_errors(urlSchemaForm.product_rule) }}
              {{ form_widget(urlSchemaForm.product_rule) }}
              <small class=\"form-text\">
                {{ include('@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/keyword.html.twig', {'idRoute': 'product_rule'}) }}
              </small>
            </div>
          </div>

          <div class=\"form-group row\">
            <label class=\"form-control-label\">
              {{ 'Route to category'|trans }}
            </label>
            <div class=\"col-sm\">
              {{ form_errors(urlSchemaForm.category_rule) }}
              {{ form_widget(urlSchemaForm.category_rule) }}
              <small class=\"form-text\">
                {{ include('@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/keyword.html.twig', {'idRoute': 'category_rule'}) }}
              </small>
            </div>
          </div>

          <div class=\"form-group row\">
            <label class=\"form-control-label\">
              {{ 'Route to category which has the \"selected_filter\" attribute for the \"Layered Navigation\" (blocklayered) module'|trans }}
            </label>
            <div class=\"col-sm\">
              {{ form_errors(urlSchemaForm.layered_rule) }}
              {{ form_widget(urlSchemaForm.layered_rule) }}
              <small class=\"form-text\">
                {{ include('@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/keyword.html.twig', {'idRoute': 'layered_rule'}) }}
              </small>
            </div>
          </div>

          <div class=\"form-group row\">
            <label class=\"form-control-label\">
              {{ 'Route to supplier'|trans }}
            </label>
            <div class=\"col-sm\">
              {{ form_errors(urlSchemaForm.supplier_rule) }}
              {{ form_widget(urlSchemaForm.supplier_rule) }}
              <small class=\"form-text\">
                {{ include('@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/keyword.html.twig', {'idRoute': 'supplier_rule'}) }}
              </small>
            </div>
          </div>

          <div class=\"form-group row\">
            <label class=\"form-control-label\">
              {{ 'Route to brand'|trans }}
            </label>
            <div class=\"col-sm\">
              {{ form_errors(urlSchemaForm.manufacturer_rule) }}
              {{ form_widget(urlSchemaForm.manufacturer_rule) }}
              <small class=\"form-text\">
                {{ include('@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/keyword.html.twig', {'idRoute': 'manufacturer_rule'}) }}
              </small>
            </div>
          </div>

          <div class=\"form-group row\">
            <label class=\"form-control-label\">
              {{ 'Route to page'|trans }}
            </label>
            <div class=\"col-sm\">
              {{ form_errors(urlSchemaForm.cms_rule) }}
              {{ form_widget(urlSchemaForm.cms_rule) }}
              <small class=\"form-text\">
                {{ include('@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/keyword.html.twig', {'idRoute': 'cms_rule'}) }}
              </small>
            </div>
          </div>

          <div class=\"form-group row\">
            <label class=\"form-control-label\">
              {{ 'Route to page category'|trans }}
            </label>
            <div class=\"col-sm\">
              {{ form_errors(urlSchemaForm.cms_category_rule) }}
              {{ form_widget(urlSchemaForm.cms_category_rule) }}
              <small class=\"form-text\">
                {{ include('@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/keyword.html.twig', {'idRoute': 'cms_category_rule'}) }}
              </small>
            </div>
          </div>

          <div class=\"form-group row\">
            <label class=\"form-control-label\">
              {{ 'Route to modules'|trans }}
            </label>
            <div class=\"col-sm\">
              {{ form_errors(urlSchemaForm.module) }}
              {{ form_widget(urlSchemaForm.module) }}
              <small class=\"form-text\">
                {{ include('@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/keyword.html.twig', {'idRoute': 'module'}) }}
              </small>
            </div>
          </div>

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

", "@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/url_schema_configuration.html.twig", "/home/padilo00/padilo.pro/presta/src/PrestaShopBundle/Resources/views/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/url_schema_configuration.html.twig");
    }
}
