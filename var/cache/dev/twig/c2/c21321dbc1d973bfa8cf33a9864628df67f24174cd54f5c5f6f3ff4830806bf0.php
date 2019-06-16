<?php

/* @PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/meta_showcase_card.html.twig */
class __TwigTemplate_d87b8aff25c3ba581907bf64a80582cd4c132b1c3d0acd7da26edac261970c09 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'meta_showcase_card' => array($this, 'block_meta_showcase_card'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/meta_showcase_card.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/meta_showcase_card.html.twig"));

        // line 25
        echo "
";
        // line 27
        echo "
";
        // line 28
        $this->displayBlock('meta_showcase_card', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_meta_showcase_card($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta_showcase_card"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta_showcase_card"));

        // line 29
        echo "  ";
        if ( !(isset($context["showcaseCardIsClosed"]) ? $context["showcaseCardIsClosed"] : $this->getContext($context, "showcaseCardIsClosed"))) {
            // line 30
            echo "  <div id=\"seo-urls-showcase-card\" class=\"showcase-card card\">
    <div class=\"showcase-card__left shape-one helper-card__meta-background\">
      <img src=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/new-theme/scss/img/helper-card/seo@3x.png"), "html", null, true);
            echo "\" class=\"img-fluid\">
    </div>
    <div class=\"showcase-card__right\">
      <h2>";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Improve your SEO", array(), "Admin.Shopparameters.Feature"), "html", null, true);
            echo "</h2>
      <p>";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Edit information about your pages to gain visibility and therefore reach more visitors. We advise you to start with the index page, it stands for your homepage.", array(), "Admin.Shopparameters.Feature"), "html", null, true);
            echo "</p>
      <a class=\"btn btn-outline-secondary\" href=\"";
            // line 37
            echo twig_escape_filter($this->env, (isset($context["helperDocLink"]) ? $context["helperDocLink"] : $this->getContext($context, "helperDocLink")), "html", null, true);
            echo "\" target=\"_blank\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Learn more", array(), "Admin.Actions"), "html", null, true);
            echo "</a>
      ";
            // line 38
            if (((isset($context["indexPageId"]) ? $context["indexPageId"] : $this->getContext($context, "indexPageId")) && (isset($context["isGridDisplayed"]) ? $context["isGridDisplayed"] : $this->getContext($context, "isGridDisplayed")))) {
                // line 39
                echo "        <a class=\"btn btn-primary\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_metas_edit", array("metaId" => (isset($context["indexPageId"]) ? $context["indexPageId"] : $this->getContext($context, "indexPageId")))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Configure index page", array(), "Admin.Shopparameters.Feature"), "html", null, true);
                echo "</a>
      ";
            }
            // line 41
            echo "    </div>
    <i class=\"showcase-card__close material-icons js-remove-helper-block\" data-card-name=\"";
            // line 42
            echo twig_escape_filter($this->env, (isset($context["metaShowcaseCardName"]) ? $context["metaShowcaseCardName"] : $this->getContext($context, "metaShowcaseCardName")), "html", null, true);
            echo "\" data-close-url=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_close_showcase_card");
            echo "\">close</i>
  </div>
  ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/meta_showcase_card.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  90 => 42,  87 => 41,  79 => 39,  77 => 38,  71 => 37,  67 => 36,  63 => 35,  57 => 32,  53 => 30,  50 => 29,  32 => 28,  29 => 27,  26 => 25,);
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

{% block meta_showcase_card %}
  {% if not showcaseCardIsClosed %}
  <div id=\"seo-urls-showcase-card\" class=\"showcase-card card\">
    <div class=\"showcase-card__left shape-one helper-card__meta-background\">
      <img src=\"{{ asset('themes/new-theme/scss/img/helper-card/seo@3x.png') }}\" class=\"img-fluid\">
    </div>
    <div class=\"showcase-card__right\">
      <h2>{{ 'Improve your SEO'|trans }}</h2>
      <p>{{ 'Edit information about your pages to gain visibility and therefore reach more visitors. We advise you to start with the index page, it stands for your homepage.'|trans }}</p>
      <a class=\"btn btn-outline-secondary\" href=\"{{ helperDocLink }}\" target=\"_blank\">{{ 'Learn more'|trans({}, 'Admin.Actions') }}</a>
      {% if indexPageId and isGridDisplayed %}
        <a class=\"btn btn-primary\" href=\"{{ path('admin_metas_edit', {'metaId': indexPageId}) }}\">{{ 'Configure index page'|trans }}</a>
      {% endif %}
    </div>
    <i class=\"showcase-card__close material-icons js-remove-helper-block\" data-card-name=\"{{ metaShowcaseCardName }}\" data-close-url=\"{{ path('admin_close_showcase_card') }}\">close</i>
  </div>
  {% endif %}
{% endblock %}
", "@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/meta_showcase_card.html.twig", "/home/padilo00/padilo.pro/presta/src/PrestaShopBundle/Resources/views/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/meta_showcase_card.html.twig");
    }
}
