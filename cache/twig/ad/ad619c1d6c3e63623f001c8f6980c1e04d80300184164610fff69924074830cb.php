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

/* partials/sbs-content.html.twig */
class __TwigTemplate_deeba621299dd6ce5cdaf3c9f6966e92855777cbf52a8f9f6187e19c6594c54e extends \Twig\Template
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
        echo "<div class=\"sbs layout-";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["sbs"] ?? null), "layout", []), "html", null, true);
        echo "\">
\t<div class=\"sbs-image\">
\t\t<img src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute(($context["sbs"] ?? null), "image", []), "html", null, true);
        echo "\" alt=\"";
        ((($this->getAttribute(($context["sbs"] ?? null), "image_alt", [], "any", true, true) &&  !(null === $this->getAttribute(($context["sbs"] ?? null), "image_alt", [])))) ? (print (twig_escape_filter($this->env, $this->getAttribute(($context["sbs"] ?? null), "image_alt", []), "html", null, true))) : (print ("")));
        echo "\">
\t</div>

\t<div class=\"sbs-content ";
        // line 6
        ((($this->getAttribute(($context["sbs"] ?? null), "alignment", [], "any", true, true) &&  !(null === $this->getAttribute(($context["sbs"] ?? null), "alignment", [])))) ? (print (twig_escape_filter($this->env, $this->getAttribute(($context["sbs"] ?? null), "alignment", []), "html", null, true))) : (print ("")));
        echo "\">
\t\t";
        // line 7
        echo ($context["content"] ?? null);
        echo "
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "partials/sbs-content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 7,  44 => 6,  36 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "partials/sbs-content.html.twig", "C:\\xampp\\htdocs\\grav\\grav-skeleton-hadron+admin1\\user\\themes\\hadron\\templates\\partials\\sbs-content.html.twig");
    }
}
