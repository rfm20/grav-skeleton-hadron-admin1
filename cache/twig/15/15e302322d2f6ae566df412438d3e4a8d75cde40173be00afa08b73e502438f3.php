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

/* partials/ui-tabs.html.twig */
class __TwigTemplate_bc8b3d98433bf0623885c25e849e86db0058520186c0108f0ba1ba7a08a5a094 extends \Twig\Template
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
        echo "<div class=\"tabs-wrapper ui-theme-";
        echo twig_escape_filter($this->env, ($context["theme"] ?? null), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["position"] ?? null), "html", null, true);
        echo "\">
    <ul class=\"tabs-nav\">
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["child_tabs"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["tab"]) {
            // line 4
            echo "        ";
            $context["class"] = ((($context["key"] == ($context["active"] ?? null))) ? (" class=\"current\"") : (""));
            // line 5
            echo "        <li";
            echo ($context["class"] ?? null);
            echo "><a href=\"#";
            echo twig_escape_filter($this->env, (($context["hash"] ?? null) . $context["key"]), "html", null, true);
            echo "\" id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tab"], "getParameter", [0 => "id", 1 => ("Tab" . $context["key"])], "method"), "html", null, true);
            echo "\" rel=\"tab\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tab"], "getParameter", [0 => "title", 1 => ("Tab " . $context["key"])], "method"), "html", null, true);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['tab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "    </ul>
    <div class=\"tabs\">
    ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["child_tabs"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["tab"]) {
            // line 10
            echo "        <div class=\"tab\" id=\"";
            echo twig_escape_filter($this->env, (($context["hash"] ?? null) . $context["key"]), "html", null, true);
            echo "\" style=\"display: ";
            echo ((($context["key"] == ($context["active"] ?? null))) ? ("block") : ("none"));
            echo "\">";
            echo $this->getAttribute($context["tab"], "getContent", [], "method");
            echo "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['tab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "partials/ui-tabs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 12,  68 => 10,  64 => 9,  60 => 7,  45 => 5,  42 => 4,  38 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "partials/ui-tabs.html.twig", "C:\\xampp\\htdocs\\grav\\grav-skeleton-hadron+admin1\\user\\plugins\\shortcode-ui\\templates\\partials\\ui-tabs.html.twig");
    }
}
