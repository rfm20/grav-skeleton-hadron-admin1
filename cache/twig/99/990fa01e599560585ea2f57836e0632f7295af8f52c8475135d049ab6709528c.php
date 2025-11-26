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

/* partials/snipcart_product_item.html.twig */
class __TwigTemplate_117799f584b9131fe81c1c55a55ac8763b59504ac96444cc38459dc2c1009a71 extends \Twig\Template
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
        $context["__internal_efd5121a0a817d63d244c65fa3ed5d127af6d1f2a78aa73dad895be83542cec3"] = $this->loadTemplate("partials/snipcart_macros.html.twig", "partials/snipcart_product_item.html.twig", 1)->unwrap();
        // line 2
        $context["snipcart_image"] = twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", []));
        // line 3
        echo "
<div class=\"snipcart-item block\" >

    <h3><a href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "url", []), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "title", []), "html", null, true);
        echo "</a></h3>
    <div class=\"snipcart-thumb\">
        ";
        // line 8
        if (($context["snipcart_image"] ?? null)) {
            // line 9
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "url", []), "html", null, true);
            echo "\">";
            echo $this->getAttribute($this->getAttribute(($context["snipcart_image"] ?? null), "cropResize", [0 => 200, 1 => 200], "method"), "html", [0 => "page.header.title", 1 => "snipcart-thumb-image"], "method");
            echo "</a>
        ";
        }
        // line 11
        echo "        <span class=\"snipcart-price\">
        \$";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "snipcart", []), "price", []), "html", null, true);
        echo "
        </span>
    </div>
    <div class=\"snipcart-details\">
    <p>
        <a href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "url", []), "html", null, true);
        echo "\"
            class=\"button button-small\">
            <i class=\"fa fa-info-circle\"></i> ";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_SNIPCART.TEMPLATES.DETAILS"));
        echo "
        </a>
        ";
        // line 21
        echo $context["__internal_efd5121a0a817d63d244c65fa3ed5d127af6d1f2a78aa73dad895be83542cec3"]->getadd_to_cart($this->getAttribute($this->getAttribute(        // line 22
($context["page"] ?? null), "header", []), "title", []), $this->getAttribute(        // line 23
($context["page"] ?? null), "url", []),         // line 24
($context["snipcart_image"] ?? null), $this->getAttribute($this->getAttribute(        // line 25
($context["page"] ?? null), "header", []), "snipcart", []), "button button-small", twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_SNIPCART.TEMPLATES.ADD")));
        // line 28
        echo "
    </p>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "partials/snipcart_product_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 28,  81 => 25,  80 => 24,  79 => 23,  78 => 22,  77 => 21,  72 => 19,  67 => 17,  59 => 12,  56 => 11,  48 => 9,  46 => 8,  39 => 6,  34 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "partials/snipcart_product_item.html.twig", "C:\\xampp\\htdocs\\grav\\grav-skeleton-hadron+admin1\\user\\plugins\\snipcart\\templates\\partials\\snipcart_product_item.html.twig");
    }
}
