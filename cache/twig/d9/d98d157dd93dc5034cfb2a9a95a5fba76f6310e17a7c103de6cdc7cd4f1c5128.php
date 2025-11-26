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

/* partials/taxonomylist.html.twig */
class __TwigTemplate_eb1cf5dbd0f2d2d82e046e1d6613039a13a1f84b2e4d5726f14155c6fb96e9ad extends \Twig\Template
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
        $context["taxlist"] = ((array_key_exists("children_only", $context)) ? ($this->getAttribute(($context["taxonomylist"] ?? null), "getChildPagesTags", [], "method")) : ($this->getAttribute(($context["taxonomylist"] ?? null), "get", [], "method")));
        // line 2
        echo "
";
        // line 3
        if (($context["taxlist"] ?? null)) {
            // line 4
            echo "<span class=\"tags\">
    ";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["taxlist"] ?? null), ($context["taxonomy"] ?? null), [], "array"));
            foreach ($context['_seq'] as $context["tax"] => $context["value"]) {
                // line 6
                echo "        ";
                $context["label_class"] = ((($this->getAttribute(($context["uri"] ?? null), "param", [0 => ($context["taxonomy"] ?? null)], "method") == $context["tax"])) ? ("label-primary") : ("label-secondary"));
                // line 7
                echo "        <a class=\"label label-rounded ";
                echo twig_escape_filter($this->env, ($context["label_class"] ?? null), "html", null, true);
                echo "\" href=\"";
                echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, ($context["taxonomy"] ?? null), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "param_sep", []), "html", null, true);
                echo twig_escape_filter($this->env, $context["tax"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["tax"], "html", null, true);
                echo ": ";
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "</a>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['tax'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 9
            echo "</span>
";
        }
    }

    public function getTemplateName()
    {
        return "partials/taxonomylist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 9,  47 => 7,  44 => 6,  40 => 5,  37 => 4,  35 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "partials/taxonomylist.html.twig", "C:\\xampp\\htdocs\\grav\\grav-skeleton-hadron+admin1\\user\\themes\\hadron\\templates\\partials\\taxonomylist.html.twig");
    }
}
