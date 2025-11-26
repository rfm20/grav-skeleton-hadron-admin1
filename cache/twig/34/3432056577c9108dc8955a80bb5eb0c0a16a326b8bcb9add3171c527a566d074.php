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

/* partials/snipcart_macros.html.twig */
class __TwigTemplate_182d9feee48c855611b2b812030f81988847d38854a85b73c6c435c5d0853b42 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
    }

    // line 1
    public function getadd_to_cart($__name__ = null, $__url__ = null, $__image__ = null, $__attributes__ = null, $__classes__ = null, $__text__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "url" => $__url__,
            "image" => $__image__,
            "attributes" => $__attributes__,
            "classes" => $__classes__,
            "text" => $__text__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 2
            echo "    <a href=\"#\"
        class=\"";
            // line 3
            echo twig_escape_filter($this->env, ($context["classes"] ?? null), "html", null, true);
            echo " snipcart-add-item\"
        data-item-id=\"";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute(($context["attributes"] ?? null), "product_id", []), "html", null, true);
            echo "\"
        data-item-name=\"";
            // line 5
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\"
        data-item-url=\"";
            // line 6
            echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
            echo "\"
        data-item-price=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute(($context["attributes"] ?? null), "price", []), "html", null, true);
            echo "\"
        ";
            // line 8
            ob_start(function () { return ''; });
            // line 9
            echo "        ";
            if (($context["image"] ?? null)) {
                // line 10
                echo "            data-item-image=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["image"] ?? null), "cropResize", [0 => 50, 1 => 50], "method"), "url", []), "html", null, true);
                echo "\"
        ";
            }
            // line 12
            echo "        ";
            if ($this->getAttribute(($context["attributes"] ?? null), "description", [], "any", true, true)) {
                // line 13
                echo "            data-item-description=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["attributes"] ?? null), "description", []), "html", null, true);
                echo "\"
        ";
            }
            // line 15
            echo "        ";
            if ($this->getAttribute(($context["attributes"] ?? null), "categories", [], "any", true, true)) {
                // line 16
                echo "            data-item-categories=\"";
                echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute(($context["attributes"] ?? null), "categories", []), "|"), "html", null, true);
                echo "\"
        ";
            }
            // line 18
            echo "        ";
            if ($this->getAttribute(($context["attributes"] ?? null), "file_guid", [], "any", true, true)) {
                // line 19
                echo "            data-item-file-guid=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["attributes"] ?? null), "file_guid", []), "html", null, true);
                echo "\"
        ";
            }
            // line 21
            echo "        ";
            if ($this->getAttribute(($context["attributes"] ?? null), "stackable", [], "any", true, true)) {
                // line 22
                echo "            data-item-stackable=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["attributes"] ?? null), "stackable", []), "html", null, true);
                echo "\"
        ";
            }
            // line 24
            echo "        ";
            if ($this->getAttribute(($context["attributes"] ?? null), "shipable", [], "any", true, true)) {
                // line 25
                echo "            data-item-shipable=\"";
                echo (($this->getAttribute(($context["attributes"] ?? null), "shipable", [])) ? ("true") : ("false"));
                echo "\"
        ";
            }
            // line 27
            echo "        ";
            if ($this->getAttribute(($context["attributes"] ?? null), "taxable", [], "any", true, true)) {
                // line 28
                echo "            data-item-taxable=\"";
                echo (($this->getAttribute(($context["attributes"] ?? null), "taxable", [])) ? ("true") : ("false"));
                echo "\"
        ";
            }
            // line 30
            echo "        ";
            if ($this->getAttribute(($context["attributes"] ?? null), "metadata", [])) {
                // line 31
                echo "            data-item-metadata=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["attributes"] ?? null), "metadata", []), "html", null, true);
                echo "\"
        ";
            }
            // line 33
            echo "
        ";
            // line 35
            echo "        ";
            if ($this->getAttribute($this->getAttribute(($context["attributes"] ?? null), "dimensions", [], "any", false, true), "weight", [], "any", true, true)) {
                // line 36
                echo "            data-item-weight=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["attributes"] ?? null), "dimensions", []), "weight", []), "html", null, true);
                echo "\"
        ";
            }
            // line 38
            echo "        ";
            if ($this->getAttribute($this->getAttribute(($context["attributes"] ?? null), "dimensions", [], "any", false, true), "width", [], "any", true, true)) {
                // line 39
                echo "            data-item-width=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["attributes"] ?? null), "dimensions", []), "width", []), "html", null, true);
                echo "\"
        ";
            }
            // line 41
            echo "        ";
            if ($this->getAttribute($this->getAttribute(($context["attributes"] ?? null), "dimensions", [], "any", false, true), "length", [], "any", true, true)) {
                // line 42
                echo "            data-item-length=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["attributes"] ?? null), "dimensions", []), "length", []), "html", null, true);
                echo "\"
        ";
            }
            // line 44
            echo "        ";
            if ($this->getAttribute($this->getAttribute(($context["attributes"] ?? null), "dimensions", [], "any", false, true), "height", [], "any", true, true)) {
                // line 45
                echo "            data-item-height=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["attributes"] ?? null), "dimensions", []), "height", []), "html", null, true);
                echo "\"
        ";
            }
            // line 47
            echo "
        ";
            // line 49
            echo "        ";
            if ($this->getAttribute($this->getAttribute(($context["attributes"] ?? null), "quantity", [], "any", false, true), "quantity", [], "any", true, true)) {
                // line 50
                echo "            data-item-quantity=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["attributes"] ?? null), "quantity", []), "quantity", []), "html", null, true);
                echo "\"
        ";
            }
            // line 52
            echo "        ";
            if ($this->getAttribute($this->getAttribute(($context["attributes"] ?? null), "quantity", [], "any", false, true), "min_quantity", [], "any", true, true)) {
                // line 53
                echo "            data-item-min-quantity=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["attributes"] ?? null), "quantity", []), "min_quantity", []), "html", null, true);
                echo "\"
        ";
            }
            // line 55
            echo "        ";
            if ($this->getAttribute($this->getAttribute(($context["attributes"] ?? null), "quantity", [], "any", false, true), "max_quantity", [], "any", true, true)) {
                // line 56
                echo "            data-item-max-quantity=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["attributes"] ?? null), "quantity", []), "max_quantity", []), "html", null, true);
                echo "\"
        ";
            }
            // line 58
            echo "        ";
            if ($this->getAttribute($this->getAttribute(($context["attributes"] ?? null), "quantity", [], "any", false, true), "quantity_step", [], "any", true, true)) {
                // line 59
                echo "            data-item-quantity-step=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["attributes"] ?? null), "quantity", []), "quantity_step", []), "html", null, true);
                echo "\"
        ";
            }
            // line 61
            echo "
        ";
            // line 63
            echo "        ";
            if ($this->getAttribute($this->getAttribute(($context["attributes"] ?? null), "taxes", [], "any", false, true), "taxes", [], "any", true, true)) {
                // line 64
                echo "            data-item-taxes=\"";
                echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute($this->getAttribute(($context["attributes"] ?? null), "taxes", []), "taxes", []), "|"), "html", null, true);
                echo "\"
        ";
            }
            // line 66
            echo "        ";
            if ($this->getAttribute($this->getAttribute(($context["attributes"] ?? null), "taxes", [], "any", false, true), "has_included", [], "any", true, true)) {
                // line 67
                echo "            data-item-has-included=\"";
                echo (($this->getAttribute($this->getAttribute(($context["attributes"] ?? null), "taxes", []), "has_included", [])) ? ("true") : ("false"));
                echo "\"
        ";
            }
            // line 69
            echo "
        ";
            // line 71
            echo "        ";
            if ($this->getAttribute($this->getAttribute(($context["attributes"] ?? null), "payment", [], "any", false, true), "interval", [], "any", true, true)) {
                // line 72
                echo "            data-item-payment-interval=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["attributes"] ?? null), "payment", []), "interval", []), "html", null, true);
                echo "\"
        ";
            }
            // line 74
            echo "        ";
            if ($this->getAttribute($this->getAttribute(($context["attributes"] ?? null), "payment", [], "any", false, true), "interval_count", [], "any", true, true)) {
                // line 75
                echo "            data-item-payment-interval-count=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["attributes"] ?? null), "payment", []), "interval_count", []), "html", null, true);
                echo "\"
        ";
            }
            // line 77
            echo "        ";
            if ($this->getAttribute($this->getAttribute(($context["attributes"] ?? null), "payment", [], "any", false, true), "trial", [], "any", true, true)) {
                // line 78
                echo "            data-item-payment-trial=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["attributes"] ?? null), "payment", []), "trial", []), "html", null, true);
                echo "\"
        ";
            }
            // line 80
            echo "
        ";
            // line 82
            echo "        ";
            if ($this->getAttribute($this->getAttribute(($context["attributes"] ?? null), "subscription", [], "any", false, true), "recurring_shipping", [], "any", true, true)) {
                // line 83
                echo "            data-item-recurring-shipping=\"";
                echo (($this->getAttribute($this->getAttribute(($context["attributes"] ?? null), "subscription", []), "recurring_shipping", [])) ? ("true") : ("false"));
                echo "\"
        ";
            }
            // line 85
            echo "        ";
            if ($this->getAttribute($this->getAttribute(($context["attributes"] ?? null), "subscription", [], "any", false, true), "cancellation_action", [], "any", true, true)) {
                // line 86
                echo "            data-item-cancellation-action=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["attributes"] ?? null), "subscription", []), "cancellation_action", []), "html", null, true);
                echo "\"
        ";
            }
            // line 88
            echo "        ";
            if ($this->getAttribute($this->getAttribute(($context["attributes"] ?? null), "subscription", [], "any", false, true), "pausing_action", [], "any", true, true)) {
                // line 89
                echo "            data-item-pausing-action=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["attributes"] ?? null), "subscription", []), "pausing_action", []), "html", null, true);
                echo "\"
        ";
            }
            // line 91
            echo "
        ";
            // line 93
            echo "        ";
            if ($this->getAttribute(($context["attributes"] ?? null), "custom", [], "any", true, true)) {
                // line 94
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["attributes"] ?? null), "custom", []));
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
                foreach ($context['_seq'] as $context["_key"] => $context["customField"]) {
                    // line 95
                    echo "                data-item-custom";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", []), "html", null, true);
                    echo "-name=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["customField"], "name", []), "html", null, true);
                    echo "\"
                data-item-custom";
                    // line 96
                    echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", []), "html", null, true);
                    echo "-required=\"";
                    echo (($this->getAttribute($context["customField"], "required", [])) ? ("true") : ("false"));
                    echo "\"

                ";
                    // line 98
                    if (($this->getAttribute($context["customField"], "type", []) != "auto")) {
                        // line 99
                        echo "                    data-item-custom";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", []), "html", null, true);
                        echo "-type=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["customField"], "type", []), "html", null, true);
                        echo "\"
                ";
                    }
                    // line 101
                    echo "                ";
                    if ($this->getAttribute($context["customField"], "options", [])) {
                        // line 102
                        echo "                    data-item-custom";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", []), "html", null, true);
                        echo "-options=\"";
                        echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute($context["customField"], "options", []), "|"), "html", null, true);
                        echo "\"
                ";
                    }
                    // line 104
                    echo "                ";
                    if ($this->getAttribute($context["customField"], "value", [])) {
                        // line 105
                        echo "                    data-item-custom";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", []), "html", null, true);
                        echo "-value=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["customField"], "value", []), "html", null, true);
                        echo "\"
                ";
                    }
                    // line 107
                    echo "                ";
                    if ($this->getAttribute($context["customField"], "placeholder", [])) {
                        // line 108
                        echo "                    data-item-custom";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", []), "html", null, true);
                        echo "-placeholder=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["customField"], "placeholder", []), "html", null, true);
                        echo "\"
                ";
                    }
                    // line 110
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customField'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 111
                echo "        ";
            }
            // line 112
            echo "        ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 113
            echo "    > <i class=\"fa fa-shopping-cart\"></i> ";
            echo twig_escape_filter($this->env, ($context["text"] ?? null), "html", null, true);
            echo "
    </a>
";
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "partials/snipcart_macros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  406 => 113,  403 => 112,  400 => 111,  386 => 110,  378 => 108,  375 => 107,  367 => 105,  364 => 104,  356 => 102,  353 => 101,  345 => 99,  343 => 98,  336 => 96,  329 => 95,  311 => 94,  308 => 93,  305 => 91,  299 => 89,  296 => 88,  290 => 86,  287 => 85,  281 => 83,  278 => 82,  275 => 80,  269 => 78,  266 => 77,  260 => 75,  257 => 74,  251 => 72,  248 => 71,  245 => 69,  239 => 67,  236 => 66,  230 => 64,  227 => 63,  224 => 61,  218 => 59,  215 => 58,  209 => 56,  206 => 55,  200 => 53,  197 => 52,  191 => 50,  188 => 49,  185 => 47,  179 => 45,  176 => 44,  170 => 42,  167 => 41,  161 => 39,  158 => 38,  152 => 36,  149 => 35,  146 => 33,  140 => 31,  137 => 30,  131 => 28,  128 => 27,  122 => 25,  119 => 24,  113 => 22,  110 => 21,  104 => 19,  101 => 18,  95 => 16,  92 => 15,  86 => 13,  83 => 12,  77 => 10,  74 => 9,  72 => 8,  68 => 7,  64 => 6,  60 => 5,  56 => 4,  52 => 3,  49 => 2,  32 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "partials/snipcart_macros.html.twig", "C:\\xampp\\htdocs\\grav\\grav-skeleton-hadron+admin1\\user\\plugins\\snipcart\\templates\\partials\\snipcart_macros.html.twig");
    }
}
