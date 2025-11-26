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

/* forms/fields/section/section.html.twig */
class __TwigTemplate_3bbb57fad4f9d33bbe2433f85955563c100b3bd974396c80e28dce825586cc9e extends \Twig\Template
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
        // line 2
        $context["title_level"] = (($this->getAttribute(($context["grav"] ?? null), "admin", [], "array", true, true)) ? ("h1") : ((($this->getAttribute(($context["field"] ?? null), "title_level", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["field"] ?? null), "title_level", []), "h3")) : ("h3"))));
        // line 1
        $this->parent = $this->loadTemplate("forms/field.html.twig", "forms/fields/section/section.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_field($context, array $blocks = [])
    {
        // line 5
        if ((twig_test_empty($this->getAttribute(($context["field"] ?? null), "security", [])) || $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->authorize($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->arrayFilter($this->getAttribute(($context["field"] ?? null), "security", []))))) {
            // line 6
            echo "<div class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "classes", []), "html", null, true);
            echo "\">
    ";
            // line 7
            if (($this->getAttribute(($context["field"] ?? null), "title", []) || $this->getAttribute(($context["field"] ?? null), "underline", []))) {
                // line 8
                echo "    <";
                echo twig_escape_filter($this->env, ($context["title_level"] ?? null), "html", null, true);
                echo " class=\"";
                if ( !$this->getAttribute(($context["field"] ?? null), "underline", [])) {
                    echo "no_underline";
                }
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, $this->getAttribute(($context["field"] ?? null), "title", [])), "html", null, true);
                echo "</";
                echo twig_escape_filter($this->env, ($context["title_level"] ?? null), "html", null, true);
                echo ">
    ";
            }
            // line 10
            echo "
    ";
            // line 11
            if ($this->getAttribute(($context["field"] ?? null), "text", [])) {
                // line 12
                echo "    <p>";
                echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, $this->getAttribute(($context["field"] ?? null), "text", []));
                echo "</p>
    ";
            }
            // line 14
            echo "
  ";
            // line 15
            $this->loadTemplate("forms/fields/section/section.html.twig", "forms/fields/section/section.html.twig", 15, "28754606")->display(twig_array_merge($context, ["name" => $this->getAttribute(($context["field"] ?? null), "name", []), "fields" => $this->getAttribute(($context["field"] ?? null), "fields", [])]));
            // line 19
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "forms/fields/section/section.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 19,  82 => 15,  79 => 14,  73 => 12,  71 => 11,  68 => 10,  54 => 8,  52 => 7,  47 => 6,  45 => 5,  42 => 4,  37 => 1,  35 => 2,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "forms/fields/section/section.html.twig", "C:\\xampp\\htdocs\\grav\\grav-skeleton-hadron+admin1\\user\\plugins\\form\\templates\\forms\\fields\\section\\section.html.twig");
    }
}


/* forms/fields/section/section.html.twig */
class __TwigTemplate_3bbb57fad4f9d33bbe2433f85955563c100b3bd974396c80e28dce825586cc9e___28754606 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'outer_markup_field_open' => [$this, 'block_outer_markup_field_open'],
            'outer_markup_field_close' => [$this, 'block_outer_markup_field_close'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 15
        return "forms/default/fields.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("forms/default/fields.html.twig", "forms/fields/section/section.html.twig", 15);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 16
    public function block_outer_markup_field_open($context, array $blocks = [])
    {
        echo "<div class=\"form-section\">";
    }

    // line 17
    public function block_outer_markup_field_close($context, array $blocks = [])
    {
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "forms/fields/section/section.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 17,  145 => 16,  135 => 15,  84 => 19,  82 => 15,  79 => 14,  73 => 12,  71 => 11,  68 => 10,  54 => 8,  52 => 7,  47 => 6,  45 => 5,  42 => 4,  37 => 1,  35 => 2,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "forms/fields/section/section.html.twig", "C:\\xampp\\htdocs\\grav\\grav-skeleton-hadron+admin1\\user\\plugins\\form\\templates\\forms\\fields\\section\\section.html.twig");
    }
}
