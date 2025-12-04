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

/* partials/owl-carousel.html.twig */
class __TwigTemplate_a5dd7b868d98553596a2eddd6d9336e66a038d64931ba89a73e2a365d8df7cc4 extends \Twig\Template
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
        echo "<div class=\"owl-carousel owl-theme\" id=\"";
        echo twig_escape_filter($this->env, ($context["owl_id"] ?? null), "html", null, true);
        echo "\">
    ";
        // line 2
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->regexReplace(($context["owl_items"] ?? null), "(^
?<p>|</p>\$)", "");
        echo "
</div>

";
    }

    public function getTemplateName()
    {
        return "partials/owl-carousel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "partials/owl-carousel.html.twig", "C:\\xampp\\htdocs\\grav\\grav-skeleton-hadron+admin1\\user\\plugins\\shortcode-owl-carousel\\templates\\partials\\owl-carousel.html.twig");
    }
}
