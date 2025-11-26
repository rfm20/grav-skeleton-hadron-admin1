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

/* modular/sbs.html.twig */
class __TwigTemplate_98758cd817deda089326996838481c94c97e5275d3cd2ccc78d996d606fbcd09 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'modular_content' => [$this, 'block_modular_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "layouts/modular.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 2
        $context["template_name"] = "modular-sbs-list sbs sbs-list";
        // line 1
        $this->parent = $this->loadTemplate("layouts/modular.html.twig", "modular/sbs.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_modular_content($context, array $blocks = [])
    {
        // line 5
        echo "\t";
        $this->loadTemplate("partials/sbs-content.html.twig", "modular/sbs.html.twig", 5)->display(twig_array_merge($context, ["sbs" => $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "sbs", [])]));
    }

    public function getTemplateName()
    {
        return "modular/sbs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 5,  42 => 4,  37 => 1,  35 => 2,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "modular/sbs.html.twig", "C:\\xampp\\htdocs\\grav\\grav-skeleton-hadron+admin1\\user\\themes\\hadron\\templates\\modular\\sbs.html.twig");
    }
}
