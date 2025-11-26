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

/* modular/sbs-list.html.twig */
class __TwigTemplate_ad1af457ecd8a122fc67e5a3b9d4f0e1eb5e7948bc307a4ec4884ea77a4be4de extends \Twig\Template
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
        $context["template_name"] = "modular-sbs sbs";
        // line 1
        $this->parent = $this->loadTemplate("layouts/modular.html.twig", "modular/sbs-list.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_modular_content($context, array $blocks = [])
    {
        // line 5
        echo "\t";
        echo ($context["content"] ?? null);
        echo "
\t<div class=\"sbs-list\">
\t\t";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "sbs", []));
        foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
            // line 8
            echo "\t\t\t<div class=\"sbs layout-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["element"], "layout", []), "html", null, true);
            echo "\">
\t\t\t\t<div class=\"sbs-image\">
\t\t\t\t\t<img src=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["element"], "image", []), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["element"], "title", []), "html", null, true);
            echo "\">
\t\t\t\t</div>

\t\t\t\t<div class=\"sbs-content ";
            // line 13
            ((($this->getAttribute($context["element"], "alignment", [], "any", true, true) &&  !(null === $this->getAttribute($context["element"], "alignment", [])))) ? (print (twig_escape_filter($this->env, $this->getAttribute($context["element"], "alignment", []), "html", null, true))) : (print ("")));
            echo "\">
\t\t\t\t\t<h4>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["element"], "title", []), "html", null, true);
            echo "</h4>
\t\t\t\t\t<p>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["element"], "text", []), "html", null, true);
            echo "</p>
\t\t\t\t\t<a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["element"], "page", []), "html", null, true);
            echo "\" class=\"btn\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["element"], "link_text", []), "html", null, true);
            echo "</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "\t</div>
";
    }

    public function getTemplateName()
    {
        return "modular/sbs-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 20,  81 => 16,  77 => 15,  73 => 14,  69 => 13,  61 => 10,  55 => 8,  51 => 7,  45 => 5,  42 => 4,  37 => 1,  35 => 2,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "modular/sbs-list.html.twig", "C:\\xampp\\htdocs\\grav\\grav-skeleton-hadron+admin1\\user\\themes\\hadron\\templates\\modular\\sbs-list.html.twig");
    }
}
