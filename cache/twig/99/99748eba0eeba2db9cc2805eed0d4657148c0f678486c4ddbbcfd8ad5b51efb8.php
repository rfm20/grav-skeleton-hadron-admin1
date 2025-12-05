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

/* partials/layout.html.twig */
class __TwigTemplate_a97aa78d7c0f573fa9dc81f35ea35cd745ca527bc2e181401c0e0c5643100a5a extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'item' => [$this, 'block_item'],
            'sidebar' => [$this, 'block_sidebar'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 2
        $context["show_sidebar"] = $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->definedDefaultFilter($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->pageHeaderVarFunc($context, "sidebar.display", [0 => ($context["page"] ?? null), 1 => ($context["blog"] ?? null)]), true);
        // line 3
        echo "
";
        // line 4
        $context["item_col"] = ((($context["show_sidebar"] ?? null)) ? ("col-9 col-md-12") : ("col-12"));
        // line 5
        $context["sidebar_col"] = ((($context["show_sidebar"] ?? null)) ? ("col-3 col-md-12") : ("col-12"));
        // line 6
        echo "
";
        // line 8
        if (((($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", []), "param", [0 => "chromeless"], "method") || $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", []), "param", [0 => "embedded"], "method")) || $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", []), "param", [0 => "standalone"], "method")) || $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "chromeless.enabled"))) {
            // line 9
            echo "    ";
            $context["item_col"] = "col-12";
            // line 10
            echo "    ";
            $context["sidebar_col"] = "col-12";
        }
        // line 12
        echo "
<div class=\"columns\">
    <div id=\"item\" class=\"column ";
        // line 14
        echo twig_escape_filter($this->env, ($context["item_col"] ?? null), "html", null, true);
        echo " extra-spacing\">
        ";
        // line 15
        $this->displayBlock('item', $context, $blocks);
        // line 16
        echo "    </div>
    ";
        // line 18
        echo "    ";
        if (( !(($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", []), "param", [0 => "chromeless"], "method") || $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", []), "param", [0 => "embedded"], "method")) || $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", []), "param", [0 => "standalone"], "method")) &&  !$this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "chromeless.enabled"))) {
            // line 19
            echo "        ";
            if (($context["show_sidebar"] ?? null)) {
                // line 20
                echo "            <div id=\"sidebar\" class=\"column ";
                echo twig_escape_filter($this->env, ($context["sidebar_col"] ?? null), "html", null, true);
                echo "\">
                ";
                // line 21
                $this->displayBlock('sidebar', $context, $blocks);
                // line 23
                echo "            </div>
        ";
            }
            // line 25
            echo "    ";
        }
        // line 26
        echo "</div>
";
    }

    // line 15
    public function block_item($context, array $blocks = [])
    {
    }

    // line 21
    public function block_sidebar($context, array $blocks = [])
    {
        // line 22
        echo "                ";
    }

    public function getTemplateName()
    {
        return "partials/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 22,  96 => 21,  91 => 15,  86 => 26,  83 => 25,  79 => 23,  77 => 21,  72 => 20,  69 => 19,  66 => 18,  63 => 16,  61 => 15,  57 => 14,  53 => 12,  49 => 10,  46 => 9,  44 => 8,  41 => 6,  39 => 5,  37 => 4,  34 => 3,  32 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "partials/layout.html.twig", "C:\\xampp\\htdocs\\grav\\grav-skeleton-hadron+admin1\\user\\themes\\hadron\\templates\\partials\\layout.html.twig");
    }
}
