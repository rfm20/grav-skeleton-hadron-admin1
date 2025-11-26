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

/* partials/logo.html.twig */
class __TwigTemplate_094aa9ff82b5aa0c2897189575d9593d5aae291c9ffc3dd3e117b053d86abfec extends \Twig\Template
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
        $context["logo"] = $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, ((($context["mobile"] ?? null)) ? ("custom_logo_mobile") : ("custom_logo")));
        // line 2
        $context["title"] = (($this->getAttribute($this->getAttribute(($context["config"] ?? null), "site", []), "slug", [])) ? ($this->getAttribute($this->getAttribute(($context["config"] ?? null), "site", []), "slug", [])) : ($this->getAttribute($this->getAttribute(($context["config"] ?? null), "site", []), "title", [])));
        // line 3
        $context["invert"] = (($this->getAttribute($this->getAttribute(($context["config"] ?? null), "theme", []), "invert_logo", [])) ? ("inverted") : (""));
        // line 4
        echo "
<a href=\"";
        // line 5
        echo twig_escape_filter($this->env, ($context["home_url"] ?? null), "html", null, true);
        echo "\" class=\"f a navbar-brand mr-10 ";
        echo twig_escape_filter($this->env, ($context["invert"] ?? null), "html", null, true);
        echo "\">
\t";
        // line 6
        if (($context["logo"] ?? null)) {
            // line 7
            echo "\t\t";
            $context["logo_file"] = $this->getAttribute(twig_first($this->env, ($context["logo"] ?? null)), "name", []);
            // line 8
            echo "\t\t<img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc(("theme://images/logo/" . ($context["logo_file"] ?? null))), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", []), "html", null, true);
            echo "\" />
\t\t";
            // line 9
            if ( !$this->getAttribute($this->getAttribute(($context["config"] ?? null), "theme", []), "hide_title", [])) {
                // line 10
                echo "\t\t\t<span class=\"title\">";
                echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
                echo "</span>
\t\t";
            }
            // line 12
            echo "\t";
        } else {
            // line 13
            echo "\t\t";
            $this->loadTemplate("@images/grav-logo.svg", "partials/logo.html.twig", 13)->display($context);
            // line 14
            echo "\t";
        }
        // line 15
        echo "</a>
";
    }

    public function getTemplateName()
    {
        return "partials/logo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 15,  71 => 14,  68 => 13,  65 => 12,  59 => 10,  57 => 9,  50 => 8,  47 => 7,  45 => 6,  39 => 5,  36 => 4,  34 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "partials/logo.html.twig", "C:\\xampp\\htdocs\\grav\\grav-skeleton-hadron+admin1\\user\\themes\\hadron\\templates\\partials\\logo.html.twig");
    }
}
