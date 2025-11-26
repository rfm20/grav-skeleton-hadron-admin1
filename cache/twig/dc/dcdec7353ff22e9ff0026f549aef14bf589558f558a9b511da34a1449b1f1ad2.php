<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* snipcart_category.html.twig */
class __TwigTemplate_c2cad1c70d0c8f36f177f293b8d82a2b4c380c81015dad86566b22e3d72d389e extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "partials/snipcart_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("partials/snipcart_base.html.twig", "snipcart_category.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        // line 4
        echo "
    ";
        // line 5
        $this->displayParentBlock("content", $context, $blocks);
        echo "

    <div class=\"content-wrapper\">
        ";
        // line 8
        echo $this->getAttribute(($context["page"] ?? null), "content", []);
        echo "

        <div class=\"snipcart-products block-group\">
            ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["page"] ?? null), "collection", [], "method"));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 12
            echo "                ";
            if (( !$this->getAttribute($this->getAttribute($context["child"], "header", [], "any", false, true), "unpublished", [], "any", true, true) || ($this->getAttribute($this->getAttribute($context["child"], "header", []), "unpublished", []) == false))) {
                // line 13
                echo "                    ";
                if ( !$this->getAttribute($this->getAttribute($context["child"], "header", [], "any", false, true), "interval", [], "any", true, true)) {
                    // line 14
                    echo "                        ";
                    $this->loadTemplate("partials/snipcart_product_item.html.twig", "snipcart_category.html.twig", 14)->display(twig_array_merge($context, ["page" => $context["child"], "parent" => ($context["page"] ?? null)]));
                    // line 15
                    echo "                    ";
                } else {
                    // line 16
                    echo "                        ";
                    $this->loadTemplate("partials/snipcart_subscription_item_small.html.twig", "snipcart_category.html.twig", 16)->display(twig_array_merge($context, ["page" => $context["child"], "parent" => ($context["page"] ?? null)]));
                    // line 17
                    echo "                    ";
                }
                // line 18
                echo "                ";
            }
            // line 19
            echo "            ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "snipcart_category.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 20,  95 => 19,  92 => 18,  89 => 17,  86 => 16,  83 => 15,  80 => 14,  77 => 13,  74 => 12,  57 => 11,  51 => 8,  45 => 5,  42 => 4,  39 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "snipcart_category.html.twig", "C:\\xampp\\htdocs\\grav\\grav-skeleton-hadron+admin1\\user\\plugins\\snipcart\\templates\\snipcart_category.html.twig");
    }
}
