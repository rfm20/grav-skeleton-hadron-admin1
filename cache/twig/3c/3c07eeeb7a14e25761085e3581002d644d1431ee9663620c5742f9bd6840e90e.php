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

/* forms/fields/columns/columns.html.twig */
class __TwigTemplate_e65ed76fc855b401937e90e6bbb544c6a86886a8ec8f855da114ce0dda42bd6c extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'field' => [$this, 'block_field'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "forms/field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("forms/field.html.twig", "forms/fields/columns/columns.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_field($context, array $blocks = [])
    {
        // line 4
        echo "<div class=\"form-columns ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "classes", []), "html", null, true);
        echo "\">
    ";
        // line 5
        $this->loadTemplate("forms/default/fields.html.twig", "forms/fields/columns/columns.html.twig", 5)->display(twig_array_merge($context, ["name" => $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->fieldParentFilter($this->getAttribute(($context["field"] ?? null), "name", [])), "fields" => $this->getAttribute(($context["field"] ?? null), "fields", [])]));
        // line 6
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "forms/fields/columns/columns.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  47 => 5,  42 => 4,  39 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "forms/fields/columns/columns.html.twig", "C:\\xampp\\htdocs\\grav\\grav-skeleton-hadron+admin1\\user\\plugins\\form\\templates\\forms\\fields\\columns\\columns.html.twig");
    }
}
