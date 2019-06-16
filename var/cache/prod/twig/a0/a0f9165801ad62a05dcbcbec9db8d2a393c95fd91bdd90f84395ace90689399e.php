<?php

/* @PrestaShop/Admin/Common/Grid/Columns/Content/action.html.twig */
class __TwigTemplate_54112c50b33be867736b4bd4ebcc9393e446ad872eee8fd48ae4fdbde798e97b extends Twig_Template
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
        // line 25
        echo "
";
        // line 26
        $context["actions"] = $this->getAttribute($this->getAttribute((isset($context["column"]) ? $context["column"] : null), "options", array()), "actions", array());
        // line 27
        echo "
";
        // line 28
        if ( !twig_test_empty((isset($context["actions"]) ? $context["actions"] : null))) {
            // line 29
            echo "  <div class=\"btn-group-action text-right\">
    <div class=\"btn-group\">
      ";
            // line 31
            echo twig_include($this->env, $context, (("@PrestaShop/Admin/Common/Grid/Actions/Row/" . $this->getAttribute(twig_first($this->env, (isset($context["actions"]) ? $context["actions"] : null)), "type", array())) . ".html.twig"), array("grid" =>             // line 32
(isset($context["grid"]) ? $context["grid"] : null), "column" =>             // line 33
(isset($context["column"]) ? $context["column"] : null), "record" =>             // line 34
(isset($context["record"]) ? $context["record"] : null), "action" => twig_first($this->env,             // line 35
(isset($context["actions"]) ? $context["actions"] : null))));
            // line 36
            echo "

      ";
            // line 38
            if ((twig_length_filter($this->env, (isset($context["actions"]) ? $context["actions"] : null)) > 1)) {
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
                $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["actions"]) ? $context["actions"] : null), 1));
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
(isset($context["grid"]) ? $context["grid"] : null), "column" =>                     // line 50
(isset($context["column"]) ? $context["column"] : null), "attributes" => array("class" => "dropdown-item"), "record" =>                     // line 52
(isset($context["record"]) ? $context["record"] : null), "action" =>                     // line 53
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
        return array (  98 => 58,  94 => 56,  79 => 54,  77 => 53,  76 => 52,  75 => 50,  74 => 49,  72 => 48,  55 => 47,  45 => 39,  43 => 38,  39 => 36,  37 => 35,  36 => 34,  35 => 33,  34 => 32,  33 => 31,  29 => 29,  27 => 28,  24 => 27,  22 => 26,  19 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@PrestaShop/Admin/Common/Grid/Columns/Content/action.html.twig", "/home/padilo00/padilo.pro/presta/src/PrestaShopBundle/Resources/views/Admin/Common/Grid/Columns/Content/action.html.twig");
    }
}
