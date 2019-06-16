<?php

/* @PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/robots_file_generation.html.twig */
class __TwigTemplate_2dcb475d86b135a9bdfc53ff0573f66b41f53acf04f0bddfcbc5524f9e937a25 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'keyword' => array($this, 'block_keyword'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/robots_file_generation.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/robots_file_generation.html.twig"));

        // line 25
        echo "
";
        // line 27
        echo "
";
        // line 28
        $this->displayBlock('keyword', $context, $blocks);
        // line 65
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 28
    public function block_keyword($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "keyword"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "keyword"));

        // line 29
        echo "  <div class=\"card\">
    <h3 class=\"card-header\">
      <i class=\"material-icons\">settings</i> ";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Robots file generation", array(), "Admin.Shopparameters.Feature"), "html", null, true);
        echo "
    </h3>

    <div class=\"card-block row\">
      <div class=\"card-text\">
        <div class=\"row\">
          <div class=\"col-sm\">
            <div class=\"alert alert-info\" role=\"alert\">
              <div class=\"alert-text\">
                ";
        // line 40
        $context["defaultDescription"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Your robots.txt file MUST be in your website's root directory and nowhere else (e.g. http://www.example.com/robots.txt).", array(), "Admin.Shopparameters.Notification");
        // line 41
        echo "                ";
        if ((isset($context["isRobotsTextFileValid"]) ? $context["isRobotsTextFileValid"] : $this->getContext($context, "isRobotsTextFileValid"))) {
            // line 42
            echo "                    ";
            echo twig_escape_filter($this->env, (isset($context["defaultDescription"]) ? $context["defaultDescription"] : $this->getContext($context, "defaultDescription")), "html", null, true);
            echo " <br>
                    ";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Generate your \"robots.txt\" file by clicking on the following button (this will erase the old robots.txt file)", array(), "Admin.Shopparameters.Notification"), "html", null, true);
            echo "
                  ";
        } else {
            // line 45
            echo "                    ";
            echo twig_escape_filter($this->env, (isset($context["defaultDescription"]) ? $context["defaultDescription"] : $this->getContext($context, "defaultDescription")), "html", null, true);
            echo " <br>
                    ";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Before you can use this tool, you need to:", array(), "Admin.Shopparameters.Notification"), "html", null, true);
            echo " <br>
                    ";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("1) Create a blank robots.txt file in your root directory.", array(), "Admin.Shopparameters.Notification"), "html", null, true);
            echo " <br>
                    ";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("2) Give it write permissions (CHMOD 666 on Unix system).", array(), "Admin.Shopparameters.Notification"), "html", null, true);
            echo "
                ";
        }
        // line 50
        echo "              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class=\"card-footer\">
      <div class=\"d-flex justify-content-end\">
        ";
        // line 58
        if ((isset($context["isRobotsTextFileValid"]) ? $context["isRobotsTextFileValid"] : $this->getContext($context, "isRobotsTextFileValid"))) {
            // line 59
            echo "          <button class=\"btn btn-primary\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Generate robots.txt file", array(), "Admin.Shopparameters.Feature"), "html", null, true);
            echo "</button>
        ";
        }
        // line 61
        echo "      </div>
    </div>
  </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/robots_file_generation.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  121 => 61,  115 => 59,  113 => 58,  103 => 50,  98 => 48,  94 => 47,  90 => 46,  85 => 45,  80 => 43,  75 => 42,  72 => 41,  70 => 40,  58 => 31,  54 => 29,  45 => 28,  34 => 65,  32 => 28,  29 => 27,  26 => 25,);
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

{% block keyword %}
  <div class=\"card\">
    <h3 class=\"card-header\">
      <i class=\"material-icons\">settings</i> {{ 'Robots file generation'|trans }}
    </h3>

    <div class=\"card-block row\">
      <div class=\"card-text\">
        <div class=\"row\">
          <div class=\"col-sm\">
            <div class=\"alert alert-info\" role=\"alert\">
              <div class=\"alert-text\">
                {% set defaultDescription = 'Your robots.txt file MUST be in your website\\'s root directory and nowhere else (e.g. http://www.example.com/robots.txt).'|trans({}, 'Admin.Shopparameters.Notification') %}
                {% if isRobotsTextFileValid %}
                    {{ defaultDescription }} <br>
                    {{ 'Generate your \"robots.txt\" file by clicking on the following button (this will erase the old robots.txt file)'|trans({}, 'Admin.Shopparameters.Notification') }}
                  {% else %}
                    {{ defaultDescription }} <br>
                    {{ 'Before you can use this tool, you need to:'|trans({}, 'Admin.Shopparameters.Notification') }} <br>
                    {{ '1) Create a blank robots.txt file in your root directory.'|trans({}, 'Admin.Shopparameters.Notification') }} <br>
                    {{ '2) Give it write permissions (CHMOD 666 on Unix system).'|trans({}, 'Admin.Shopparameters.Notification') }}
                {% endif %}
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class=\"card-footer\">
      <div class=\"d-flex justify-content-end\">
        {% if isRobotsTextFileValid %}
          <button class=\"btn btn-primary\">{{ 'Generate robots.txt file'|trans }}</button>
        {% endif %}
      </div>
    </div>
  </div>
{% endblock %}

", "@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/robots_file_generation.html.twig", "/home/padilo00/padilo.pro/presta/src/PrestaShopBundle/Resources/views/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/robots_file_generation.html.twig");
    }
}
