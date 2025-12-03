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

/* partials/hero.html.twig */
class __TwigTemplate_cad4614952aff63ff7f3298cacc4795f03d18d7ec5e67353bd3710cd5f132d81 extends \Twig\Template
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
        // line 1
        echo "<section id=\"";
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\" class=\"section modular-hero hero ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "hero_classes", []), "html", null, true);
        echo " ";
        echo (($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "background", []), "parallax", [])) ? ("parallax") : (""));
        echo "\" ";
        if (($context["hero_image"] ?? null)) {
            echo "style=\"background-image: url('";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["hero_image"] ?? null), "url", []), "html", null, true);
            echo "');\"";
        }
        echo ">
\t<div class=\"image-overlay\"></div>
\t<section class=\"container ";
        // line 3
        echo twig_escape_filter($this->env, ($context["grid_size"] ?? null), "html", null, true);
        echo "\" style=\"text-align: ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", [], "any", false, true), "hero_align", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", [], "any", false, true), "hero_align", []), "center")) : ("center")), "html", null, true);
        echo "\">
\t\t";
        // line 5
        echo "\t\t";
        if (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "hide_summary", []) == true)) {
            // line 6
            echo "\t\t\t";
            $context["content"] = twig_slice($this->env, $this->getAttribute(($context["page"] ?? null), "content", []), twig_length_filter($this->env, $this->getAttribute(($context["page"] ?? null), "summary", [])));
            // line 7
            echo "\t\t";
        }
        // line 8
        echo "
\t\t";
        // line 9
        echo ($context["content"] ?? null);
        echo "
\t</section>
\t<i id=\"to-start\" class=\"pulse fa fa-angle-down\"></i>
</section>
";
    }

    public function getTemplateName()
    {
        return "partials/hero.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 9,  61 => 8,  58 => 7,  55 => 6,  52 => 5,  46 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "partials/hero.html.twig", "C:\\xampp\\htdocs\\grav\\grav-skeleton-hadron+admin1\\user\\themes\\hadron\\templates\\partials\\hero.html.twig");
    }
}
