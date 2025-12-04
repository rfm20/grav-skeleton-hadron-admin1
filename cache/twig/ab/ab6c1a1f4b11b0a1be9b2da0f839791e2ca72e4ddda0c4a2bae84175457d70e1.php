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

/* item.html.twig */
class __TwigTemplate_15e08f4eb930a5ccb69f818ff1ce34782f25e6fee32eb0f44353e04d026d1d19 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'hero' => [$this, 'block_hero'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 2
        $context["blog"] = $this->getAttribute(($context["page"] ?? null), "find", [0 => $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->definedDefaultFilter($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->pageHeaderVarFunc($context, "blog_url"), $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "blog-page"))], "method");
        // line 3
        $context["show_breadcrumbs"] = $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->definedDefaultFilter($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->pageHeaderVarFunc($context, "show_breadcrumbs", [0 => ($context["page"] ?? null), 1 => ($context["blog"] ?? null)]), true);
        // line 4
        $context["show_sidebar"] = $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->definedDefaultFilter($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->pageHeaderVarFunc($context, "show_sidebar", [0 => ($context["page"] ?? null), 1 => ($context["blog"] ?? null)]), true);
        // line 5
        $context["show_pagination"] = $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->definedDefaultFilter($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->pageHeaderVarFunc($context, "show_pagination", [0 => ($context["page"] ?? null), 1 => ($context["blog"] ?? null)]), true);
        // line 6
        $context["hero_image_name"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "hero_image", []);
        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "item.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_hero($context, array $blocks = [])
    {
        // line 9
        echo "\t";
        if (($context["hero_image_name"] ?? null)) {
            // line 10
            echo "\t\t";
            $context["hero_image"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), ($context["hero_image_name"] ?? null), [], "array");
            // line 11
            echo "\t\t";
            ob_start(function () { return ''; });
            // line 12
            echo "\t\t\t<h1>";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "title", []), "html", null, true);
            echo "</h1>
\t\t\t<h2>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "subtitle", []), "html", null, true);
            echo "</h2>
\t\t\t<p>
\t\t\t\t";
            // line 15
            $this->loadTemplate("partials/blog/date.html.twig", "item.html.twig", 15)->display($context);
            // line 16
            echo "\t\t\t\t";
            if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "readingtime", []), "enabled", [])) {
                // line 17
                echo "\t\t\t\t\t<span class=\"blogitem__readingtime\">";
                $this->loadTemplate("partials/blog/readingtime.html.twig", "item.html.twig", 17)->display($context);
                echo "</span>
\t\t\t\t";
            }
            // line 19
            echo "\t\t\t</p>
\t\t\t";
            // line 20
            $this->loadTemplate("partials/blog/taxonomy.html.twig", "item.html.twig", 20)->display($context);
            // line 21
            echo "\t\t";
            $context["content"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 22
            echo "\t\t";
            $this->loadTemplate("partials/hero.html.twig", "item.html.twig", 22)->display(twig_array_merge($context, ["id" => "blog-hero"]));
            // line 23
            echo "\t";
        }
    }

    // line 26
    public function block_body($context, array $blocks = [])
    {
        // line 27
        echo "\t<section id=\"body-wrapper\" class=\"section blog-listing\">
\t\t<section class=\"container ";
        // line 28
        echo twig_escape_filter($this->env, ($context["grid_size"] ?? null), "html", null, true);
        echo "\">

\t\t\t";
        // line 30
        if ((($context["show_breadcrumbs"] ?? null) && $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "breadcrumbs", []), "enabled", []))) {
            // line 31
            echo "\t\t\t\t";
            $this->loadTemplate("partials/breadcrumbs.html.twig", "item.html.twig", 31)->display($context);
            // line 32
            echo "\t\t\t";
        }
        // line 33
        echo "
\t\t\t";
        // line 34
        $this->loadTemplate("item.html.twig", "item.html.twig", 34, "1058860276")->display($context);
        // line 42
        echo "
\t\t</section>
\t</section>
";
    }

    public function getTemplateName()
    {
        return "item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 42,  122 => 34,  119 => 33,  116 => 32,  113 => 31,  111 => 30,  106 => 28,  103 => 27,  100 => 26,  95 => 23,  92 => 22,  89 => 21,  87 => 20,  84 => 19,  78 => 17,  75 => 16,  73 => 15,  68 => 13,  63 => 12,  60 => 11,  57 => 10,  54 => 9,  51 => 8,  46 => 1,  44 => 6,  42 => 5,  40 => 4,  38 => 3,  36 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "item.html.twig", "C:\\xampp\\htdocs\\grav\\grav-skeleton-hadron+admin1\\user\\themes\\hadron\\templates\\item.html.twig");
    }
}


/* item.html.twig */
class __TwigTemplate_15e08f4eb930a5ccb69f818ff1ce34782f25e6fee32eb0f44353e04d026d1d19___1058860276 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'item' => [$this, 'block_item'],
            'sidebar' => [$this, 'block_sidebar'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 34
        return "partials/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("partials/layout.html.twig", "item.html.twig", 34);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 35
    public function block_item($context, array $blocks = [])
    {
        // line 36
        echo "\t\t\t\t\t";
        $this->loadTemplate("partials/blog-item.html.twig", "item.html.twig", 36)->display($context);
        // line 37
        echo "\t\t\t\t";
    }

    // line 38
    public function block_sidebar($context, array $blocks = [])
    {
        // line 39
        echo "\t\t\t\t\t";
        $this->loadTemplate("partials/sidebar.html.twig", "item.html.twig", 39)->display($context);
        // line 40
        echo "\t\t\t\t";
    }

    public function getTemplateName()
    {
        return "item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 40,  199 => 39,  196 => 38,  192 => 37,  189 => 36,  186 => 35,  176 => 34,  124 => 42,  122 => 34,  119 => 33,  116 => 32,  113 => 31,  111 => 30,  106 => 28,  103 => 27,  100 => 26,  95 => 23,  92 => 22,  89 => 21,  87 => 20,  84 => 19,  78 => 17,  75 => 16,  73 => 15,  68 => 13,  63 => 12,  60 => 11,  57 => 10,  54 => 9,  51 => 8,  46 => 1,  44 => 6,  42 => 5,  40 => 4,  38 => 3,  36 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "item.html.twig", "C:\\xampp\\htdocs\\grav\\grav-skeleton-hadron+admin1\\user\\themes\\hadron\\templates\\item.html.twig");
    }
}
