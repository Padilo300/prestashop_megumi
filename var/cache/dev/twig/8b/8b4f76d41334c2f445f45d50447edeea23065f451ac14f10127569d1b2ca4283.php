<?php

/* @PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/set_up_urls_configuration.html.twig */
class __TwigTemplate_c1432c6301033532103a8307fbb927019ca4faed62c886d174ff81b6c29e9070 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'set_up_urls_configuration' => array($this, 'block_set_up_urls_configuration'),
            'meta_form_rest' => array($this, 'block_meta_form_rest'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/set_up_urls_configuration.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/set_up_urls_configuration.html.twig"));

        // line 25
        echo "
";
        // line 27
        echo "
";
        // line 28
        $this->displayBlock('set_up_urls_configuration', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_set_up_urls_configuration($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "set_up_urls_configuration"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "set_up_urls_configuration"));

        // line 29
        echo "  <div class=\"card\">
    <h3 class=\"card-header\">
      <i class=\"material-icons\">settings</i> ";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Set up URLs", array(), "Admin.Shopparameters.Feature"), "html", null, true);
        echo "
    </h3>
    <div class=\"card-block row\">
      <div class=\"card-text\">

        ";
        // line 36
        if ( !(isset($context["isHtaccessFileValid"]) ? $context["isHtaccessFileValid"] : $this->getContext($context, "isHtaccessFileValid"))) {
            // line 37
            echo "          <div class=\"row\">
            <div class=\"col-sm\">
              <div class=\"alert alert-info\" role=\"alert\">
                <div class=\"alert-text\">
                  ";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Before you can use this tool, you need to:", array(), "Admin.Shopparameters.Notification"), "html", null, true);
            echo "
                  <br>
                  ";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("1) Create a blank .htaccess file in your root directory.", array(), "Admin.Shopparameters.Notification"), "html", null, true);
            echo "
                  <br>
                  ";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("2) Give it write permissions (CHMOD 666 on Unix system).", array(), "Admin.Shopparameters.Notification"), "html", null, true);
            echo "
                </div>
              </div>
            </div>
          </div>
        ";
        }
        // line 51
        echo "
        <div class=\"form-group row\">
          ";
        // line 53
        if ((isset($context["isModRewriteActive"]) ? $context["isModRewriteActive"] : $this->getContext($context, "isModRewriteActive"))) {
            // line 54
            echo "            ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ps"]) ? $context["ps"] : $this->getContext($context, "ps")), "label_with_help", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Friendly URL", array(), "Admin.Global"), 1 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Enable this option only if your server allows URL rewriting (recommended).", array(), "Admin.Shopparameters.Help")), "method"), "html", null, true);
            echo "
          ";
        }
        // line 56
        echo "          <div class=\"col-sm\">
            ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["metaForm"]) ? $context["metaForm"] : $this->getContext($context, "metaForm")), "set_up_urls", array()), "friendly_url", array()), 'errors');
        echo "
            ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["metaForm"]) ? $context["metaForm"] : $this->getContext($context, "metaForm")), "set_up_urls", array()), "friendly_url", array()), 'widget');
        echo "

            ";
        // line 60
        if ( !(isset($context["isModRewriteActive"]) ? $context["isModRewriteActive"] : $this->getContext($context, "isModRewriteActive"))) {
            // line 61
            echo "              <small class=\"form-text\">
                ";
            // line 62
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("URL rewriting (mod_rewrite) is not active on your server, or it is not possible to check your server configuration. If you want to use Friendly URLs, you must activate this mod.", array(), "Admin.Shopparameters.Help"), "html", null, true);
            echo "
              </small>
            ";
        }
        // line 65
        echo "          </div>
        </div>

        <div class=\"form-group row\">
          ";
        // line 69
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ps"]) ? $context["ps"] : $this->getContext($context, "ps")), "label_with_help", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Accented URL", array(), "Admin.Shopparameters.Feature"), 1 => (($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Enable this option if you want to allow accented characters in your friendly URLs.", array(), "Admin.Shopparameters.Help") . " ") . $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("You should only activate this option if you are using non-latin characters ; for all the latin charsets, your SEO will be better without this option.", array(), "Admin.Shopparameters.Help"))), "method"), "html", null, true);
        echo "
          <div class=\"col-sm\">
            ";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["metaForm"]) ? $context["metaForm"] : $this->getContext($context, "metaForm")), "set_up_urls", array()), "accented_url", array()), 'errors');
        echo "
            ";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["metaForm"]) ? $context["metaForm"] : $this->getContext($context, "metaForm")), "set_up_urls", array()), "accented_url", array()), 'widget');
        echo "
          </div>
        </div>

        <div class=\"form-group row\">
          <label class=\"form-control-label\">";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Redirect to the canonical URL", array(), "Admin.Shopparameters.Feature"), "html", null, true);
        echo "</label>
          <div class=\"col-sm\">
            ";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["metaForm"]) ? $context["metaForm"] : $this->getContext($context, "metaForm")), "set_up_urls", array()), "canonical_url_redirection", array()), 'errors');
        echo "
            ";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["metaForm"]) ? $context["metaForm"] : $this->getContext($context, "metaForm")), "set_up_urls", array()), "canonical_url_redirection", array()), 'widget');
        echo "
          </div>
        </div>

        ";
        // line 84
        if ($this->getAttribute($this->getAttribute((isset($context["metaForm"]) ? $context["metaForm"] : null), "set_up_urls", array(), "any", false, true), "disable_apache_multiview", array(), "any", true, true)) {
            // line 85
            echo "          <div class=\"form-group row\">
            ";
            // line 86
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ps"]) ? $context["ps"] : $this->getContext($context, "ps")), "label_with_help", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Disable Apache's MultiViews option", array(), "Admin.Shopparameters.Feature"), 1 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Enable this option only if you have problems with URL rewriting.", array(), "Admin.Shopparameters.Help")), "method"), "html", null, true);
            echo "
            <div class=\"col-sm\">
              ";
            // line 88
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["metaForm"]) ? $context["metaForm"] : $this->getContext($context, "metaForm")), "set_up_urls", array()), "disable_apache_multiview", array()), 'errors');
            echo "
              ";
            // line 89
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["metaForm"]) ? $context["metaForm"] : $this->getContext($context, "metaForm")), "set_up_urls", array()), "disable_apache_multiview", array()), 'widget');
            echo "
            </div>
          </div>
        ";
        }
        // line 93
        echo "
        ";
        // line 94
        if ($this->getAttribute($this->getAttribute((isset($context["metaForm"]) ? $context["metaForm"] : null), "set_up_urls", array(), "any", false, true), "disable_apache_mod_security", array(), "any", true, true)) {
            // line 95
            echo "          <div class=\"form-group row\">
            ";
            // line 96
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ps"]) ? $context["ps"] : $this->getContext($context, "ps")), "label_with_help", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Disable Apache's mod_security module", array(), "Admin.Shopparameters.Feature"), 1 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Some of PrestaShop's features might not work correctly with a specific configuration of Apache's mod_security module. We recommend to turn it off.", array(), "Admin.Shopparameters.Help")), "method"), "html", null, true);
            echo "
            <div class=\"col-sm\">
              ";
            // line 98
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["metaForm"]) ? $context["metaForm"] : $this->getContext($context, "metaForm")), "set_up_urls", array()), "disable_apache_mod_security", array()), 'errors');
            echo "
              ";
            // line 99
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["metaForm"]) ? $context["metaForm"] : $this->getContext($context, "metaForm")), "set_up_urls", array()), "disable_apache_mod_security", array()), 'widget');
            echo "
            </div>
          </div>
        ";
        }
        // line 103
        echo "
        ";
        // line 104
        $this->displayBlock('meta_form_rest', $context, $blocks);
        // line 107
        echo "      </div>
    </div>
    <div class=\"card-footer\">
      <div class=\"d-flex justify-content-end\">
        <button class=\"btn btn-primary\">";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", array(), "Admin.Actions"), "html", null, true);
        echo "</button>
      </div>
    </div>
  </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 104
    public function block_meta_form_rest($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta_form_rest"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta_form_rest"));

        // line 105
        echo "          ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["metaForm"]) ? $context["metaForm"] : $this->getContext($context, "metaForm")), "set_up_urls", array()), 'rest');
        echo "
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/set_up_urls_configuration.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  244 => 105,  235 => 104,  220 => 111,  214 => 107,  212 => 104,  209 => 103,  202 => 99,  198 => 98,  193 => 96,  190 => 95,  188 => 94,  185 => 93,  178 => 89,  174 => 88,  169 => 86,  166 => 85,  164 => 84,  157 => 80,  153 => 79,  148 => 77,  140 => 72,  136 => 71,  131 => 69,  125 => 65,  119 => 62,  116 => 61,  114 => 60,  109 => 58,  105 => 57,  102 => 56,  96 => 54,  94 => 53,  90 => 51,  81 => 45,  76 => 43,  71 => 41,  65 => 37,  63 => 36,  55 => 31,  51 => 29,  33 => 28,  30 => 27,  27 => 25,);
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

{% block set_up_urls_configuration %}
  <div class=\"card\">
    <h3 class=\"card-header\">
      <i class=\"material-icons\">settings</i> {{ 'Set up URLs'|trans }}
    </h3>
    <div class=\"card-block row\">
      <div class=\"card-text\">

        {% if not isHtaccessFileValid %}
          <div class=\"row\">
            <div class=\"col-sm\">
              <div class=\"alert alert-info\" role=\"alert\">
                <div class=\"alert-text\">
                  {{ 'Before you can use this tool, you need to:'|trans({}, 'Admin.Shopparameters.Notification') }}
                  <br>
                  {{ '1) Create a blank .htaccess file in your root directory.'|trans({}, 'Admin.Shopparameters.Notification') }}
                  <br>
                  {{ '2) Give it write permissions (CHMOD 666 on Unix system).'|trans({}, 'Admin.Shopparameters.Notification') }}
                </div>
              </div>
            </div>
          </div>
        {% endif %}

        <div class=\"form-group row\">
          {% if isModRewriteActive %}
            {{ ps.label_with_help('Friendly URL'|trans({}, 'Admin.Global'), ('Enable this option only if your server allows URL rewriting (recommended).'|trans({}, 'Admin.Shopparameters.Help'))) }}
          {% endif %}
          <div class=\"col-sm\">
            {{ form_errors(metaForm.set_up_urls.friendly_url) }}
            {{ form_widget(metaForm.set_up_urls.friendly_url) }}

            {% if not isModRewriteActive %}
              <small class=\"form-text\">
                {{ 'URL rewriting (mod_rewrite) is not active on your server, or it is not possible to check your server configuration. If you want to use Friendly URLs, you must activate this mod.'|trans({}, 'Admin.Shopparameters.Help') }}
              </small>
            {% endif %}
          </div>
        </div>

        <div class=\"form-group row\">
          {{ ps.label_with_help(('Accented URL'|trans), ('Enable this option if you want to allow accented characters in your friendly URLs.'|trans({}, 'Admin.Shopparameters.Help') ~ ' ' ~ 'You should only activate this option if you are using non-latin characters ; for all the latin charsets, your SEO will be better without this option.'|trans({}, 'Admin.Shopparameters.Help'))) }}
          <div class=\"col-sm\">
            {{ form_errors(metaForm.set_up_urls.accented_url) }}
            {{ form_widget(metaForm.set_up_urls.accented_url) }}
          </div>
        </div>

        <div class=\"form-group row\">
          <label class=\"form-control-label\">{{ 'Redirect to the canonical URL'|trans }}</label>
          <div class=\"col-sm\">
            {{ form_errors(metaForm.set_up_urls.canonical_url_redirection) }}
            {{ form_widget(metaForm.set_up_urls.canonical_url_redirection) }}
          </div>
        </div>

        {% if metaForm.set_up_urls.disable_apache_multiview is defined %}
          <div class=\"form-group row\">
            {{ ps.label_with_help((\"Disable Apache's MultiViews option\"|trans), ('Enable this option only if you have problems with URL rewriting.'|trans({}, 'Admin.Shopparameters.Help'))) }}
            <div class=\"col-sm\">
              {{ form_errors(metaForm.set_up_urls.disable_apache_multiview) }}
              {{ form_widget(metaForm.set_up_urls.disable_apache_multiview) }}
            </div>
          </div>
        {% endif %}

        {% if metaForm.set_up_urls.disable_apache_mod_security is defined %}
          <div class=\"form-group row\">
            {{ ps.label_with_help((\"Disable Apache's mod_security module\"|trans), (\"Some of PrestaShop's features might not work correctly with a specific configuration of Apache's mod_security module. We recommend to turn it off.\"|trans({}, 'Admin.Shopparameters.Help'))) }}
            <div class=\"col-sm\">
              {{ form_errors(metaForm.set_up_urls.disable_apache_mod_security) }}
              {{ form_widget(metaForm.set_up_urls.disable_apache_mod_security) }}
            </div>
          </div>
        {% endif %}

        {% block meta_form_rest %}
          {{ form_rest(metaForm.set_up_urls) }}
        {% endblock %}
      </div>
    </div>
    <div class=\"card-footer\">
      <div class=\"d-flex justify-content-end\">
        <button class=\"btn btn-primary\">{{ 'Save'|trans({}, 'Admin.Actions') }}</button>
      </div>
    </div>
  </div>
{% endblock %}
", "@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/set_up_urls_configuration.html.twig", "/home/padilo00/padilo.pro/presta/src/PrestaShopBundle/Resources/views/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/set_up_urls_configuration.html.twig");
    }
}
