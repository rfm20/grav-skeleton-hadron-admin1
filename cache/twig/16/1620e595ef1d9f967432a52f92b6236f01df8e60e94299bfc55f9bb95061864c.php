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

/* partials/card-content.html.twig */
class __TwigTemplate_20131f2a9f6229d88721fbc6d407bfecc4061e4eb410b0d6c162094d5f4258b8 extends \Twig\Template
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
        echo "<div class=\"card\">
\t<div class=\"card-image\">
\t\t<img src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute(($context["card"] ?? null), "image", []), "html", null, true);
        echo "\" alt=\"";
        ((($this->getAttribute(($context["card"] ?? null), "title", [], "any", true, true) &&  !(null === $this->getAttribute(($context["card"] ?? null), "title", [])))) ? (print (twig_escape_filter($this->env, $this->getAttribute(($context["card"] ?? null), "title", []), "html", null, true))) : (print ("")));
        echo "\" class=\"img-responsive\">
\t</div>

\t<div class=\"card-header\">
\t\t<div class=\"card-title\">
\t\t\t<h4>";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute(($context["card"] ?? null), "title", []), "html", null, true);
        echo "</h4>
\t\t</div>
\t</div>

\t<div class=\"card-body\">
\t\t";
        // line 13
        if ($this->getAttribute(($context["card"] ?? null), "text", [])) {
            // line 14
            echo "            <p>";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["card"] ?? null), "text", []), "html", null, true);
            echo "</p>
\t\t";
        }
        // line 16
        echo "
\t\t<a href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute(($context["card"] ?? null), "page", []), "html", null, true);
        echo "\" class=\"btn\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["card"] ?? null), "link_text", []), "html", null, true);
        echo "</a>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "partials/card-content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 17,  60 => 16,  54 => 14,  52 => 13,  44 => 8,  34 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "partials/card-content.html.twig", "C:\\xampp\\htdocs\\grav\\grav-skeleton-hadron+admin1\\user\\themes\\hadron\\templates\\partials\\card-content.html.twig");
    }
}
