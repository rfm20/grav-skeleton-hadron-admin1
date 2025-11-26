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

/* partials/gallery-plusplus.html.twig */
class __TwigTemplate_6308650e718db01a626caf6eaa18995517f74817ae9a39a5d8d0abd3def87d64 extends \Twig\Template
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
        // line 2
        echo "<p id=\"";
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\">
";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 4
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "src", [], "array"), "html", null, true);
            echo "\" class=\"glightbox-";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\"";
            // line 6
            if ((($context["descEnabled"] ?? null) == "true")) {
                // line 7
                echo "";
                echo " data-description=\"";
                echo $this->getAttribute($context["image"], "desc", [], "array");
                echo "\"";
            }
            // line 9
            echo ">
";
            // line 12
            $context["original_image"] = $this->getAttribute($context["image"], "src", [], "array");
            // line 14
            if (($context["base_url"] ?? null)) {
                // line 15
                $context["original_image"] = twig_replace_filter(($context["original_image"] ?? null), [($context["base_url"] ?? null) => ""]);
            }
            // line 19
            $context["original_image"] = twig_split_filter($this->env, ($context["original_image"] ?? null), "/user/", 2);
            // line 21
            $context["original_image"] = ("user://" . $this->getAttribute(($context["original_image"] ?? null), 1, [], "array"));
            // line 23
            $context["original_image"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), ($context["original_image"] ?? null), [], "array");
            // line 25
            if (($context["original_image"] ?? null)) {
                // line 26
                $context["estimated_thumb_width"] = twig_round((($this->getAttribute(($context["original_image"] ?? null), "width", []) * ($context["rowHeight"] ?? null)) / $this->getAttribute(($context["original_image"] ?? null), "height", [])));
                // line 30
                echo "        ";
                echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["original_image"] ?? null), "derivatives", [0 => [0 => twig_round((                // line 31
($context["estimated_thumb_width"] ?? null) * ($context["resizeFactor"] ?? null)))]], "method"), "sizes", [0 => "1px"], "method"), "width", [0 =>                 // line 33
($context["estimated_thumb_width"] ?? null)], "method"), "height", [0 =>                 // line 34
($context["rowHeight"] ?? null)], "method"), "loading", []), "html", [0 => $this->getAttribute(                // line 35
$context["image"], "title", []), 1 => $this->getAttribute($context["image"], "alt", [])], "method");
                echo "
";
            } else {
                // line 38
                echo "        ";
                echo $this->getAttribute($context["image"], "image", [], "array");
                // line 39
                echo "
";
            }
            // line 41
            echo "    </a>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "</p>
";
    }

    public function getTemplateName()
    {
        return "partials/gallery-plusplus.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 43,  90 => 41,  86 => 39,  83 => 38,  78 => 35,  77 => 34,  76 => 33,  75 => 31,  73 => 30,  71 => 26,  69 => 25,  67 => 23,  65 => 21,  63 => 19,  60 => 15,  58 => 14,  56 => 12,  53 => 9,  47 => 7,  45 => 6,  39 => 4,  35 => 3,  30 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "partials/gallery-plusplus.html.twig", "C:\\xampp\\htdocs\\grav\\grav-skeleton-hadron+admin1\\user\\plugins\\shortcode-gallery-plusplus\\templates\\partials\\gallery-plusplus.html.twig");
    }
}
