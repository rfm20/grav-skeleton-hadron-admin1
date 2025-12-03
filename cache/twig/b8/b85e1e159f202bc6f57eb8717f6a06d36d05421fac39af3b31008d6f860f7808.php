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

/* blog.html.twig */
class __TwigTemplate_8bcfb21119fe0e1ec4933176a05834249564e1489c17911cda6c678550433341 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $context["blog_image"] = (($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", []), $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "hero_image", []), [], "array")) ? ($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", []), $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "hero_image", []), [], "array")) : (twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", []))));
        // line 3
        $context["collection"] = $this->getAttribute(($context["page"] ?? null), "collection", [], "method");
        // line 5
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", [], "any", false, true), "show_breadcrumbs", [], "any", true, true)) {
            // line 6
            $context["show_breadcrumbs"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "show_breadcrumbs", []);
        } else {
            // line 8
            $context["show_breadcrumbs"] = true;
        }
        // line 10
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", [], "any", false, true), "show_sidebar", [], "any", true, true)) {
            // line 11
            $context["show_sidebar"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "show_sidebar", []);
        } else {
            // line 13
            $context["show_sidebar"] = true;
        }
        // line 15
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", [], "any", false, true), "show_pagination", [], "any", true, true)) {
            // line 16
            $context["show_pagination"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "show_pagination", []);
        } else {
            // line 18
            $context["show_pagination"] = true;
        }
        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "blog.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 21
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 22
        echo "\t";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/bricklayer.css"], "method");
        // line 23
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
    }

    // line 26
    public function block_javascripts($context, array $blocks = [])
    {
        // line 27
        echo "\t";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
\t";
        // line 28
        $this->getAttribute(($context["assets"] ?? null), "add", [0 => "theme://js/bricklayer.min.js"], "method");
        // line 29
        echo "\t";
        $this->getAttribute(($context["assets"] ?? null), "add", [0 => "theme://js/scopedQuerySelectorShim.min.js"], "method");
    }

    // line 33
    public function block_hero($context, array $blocks = [])
    {
        // line 34
        echo "\t";
        $this->loadTemplate("partials/hero.html.twig", "blog.html.twig", 34)->display(twig_array_merge($context, ["id" => "blog-hero", "content" => $this->getAttribute(($context["page"] ?? null), "content", []), "hero_image" => ($context["blog_image"] ?? null)]));
    }

    // line 37
    public function block_body($context, array $blocks = [])
    {
        // line 38
        echo "\t<section id=\"body-wrapper\" class=\"section blog-listing\">
\t\t<section class=\"container ";
        // line 39
        echo twig_escape_filter($this->env, ($context["grid_size"] ?? null), "html", null, true);
        echo "\">

\t\t\t";
        // line 41
        if ((($context["show_breadcrumbs"] ?? null) && $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "breadcrumbs", []), "enabled", []))) {
            // line 42
            echo "\t\t\t\t";
            $this->loadTemplate("partials/breadcrumbs.html.twig", "blog.html.twig", 42)->display($context);
            // line 43
            echo "\t\t\t";
        }
        // line 44
        echo "
\t\t\t";
        // line 45
        $this->loadTemplate("blog.html.twig", "blog.html.twig", 45, "1932820846")->display(twig_array_merge($context, ["blog" => ($context["page"] ?? null)]));
        // line 95
        echo "\t\t</section>
\t</section>
\t<script>
\t\t//Bricklayer
\t\t";
        // line 99
        if (( !$this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", [], "any", false, true), "bricklayer_layout", [], "any", true, true) || $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "bricklayer_layout", []))) {
            // line 100
            echo "\t\tvar bricklayer = new Bricklayer(document.querySelector('.bricklayer'))
\t\t";
        }
        // line 102
        echo "\t</script>
";
    }

    public function getTemplateName()
    {
        return "blog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 102,  139 => 100,  137 => 99,  131 => 95,  129 => 45,  126 => 44,  123 => 43,  120 => 42,  118 => 41,  113 => 39,  110 => 38,  107 => 37,  102 => 34,  99 => 33,  94 => 29,  92 => 28,  87 => 27,  84 => 26,  77 => 23,  74 => 22,  71 => 21,  66 => 1,  63 => 18,  60 => 16,  58 => 15,  55 => 13,  52 => 11,  50 => 10,  47 => 8,  44 => 6,  42 => 5,  40 => 3,  38 => 2,  32 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "blog.html.twig", "C:\\xampp\\htdocs\\grav\\grav-skeleton-hadron+admin1\\user\\themes\\hadron\\templates\\blog.html.twig");
    }
}


/* blog.html.twig */
class __TwigTemplate_8bcfb21119fe0e1ec4933176a05834249564e1489c17911cda6c678550433341___1932820846 extends \Twig\Template
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
        // line 45
        return "partials/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("partials/layout.html.twig", "blog.html.twig", 45);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 46
    public function block_item($context, array $blocks = [])
    {
        // line 47
        echo "
\t\t\t";
        // line 49
        echo "\t\t\t";
        if (( !$this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", [], "any", false, true), "bricklayer_layout", [], "any", true, true) || $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "bricklayer_layout", []))) {
            // line 50
            echo "\t\t\t<div class=\"bricklayermodulars\">
\t\t\t\t";
        } else {
            // line 52
            echo "\t\t\t\t<div>
\t\t\t\t\t";
        }
        // line 54
        echo "\t\t\t\t\t";
        if ( !twig_test_empty($this->getAttribute(($context["page"] ?? null), "collection", [0 => "modular_content"], "method"))) {
            // line 55
            echo "\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["page"] ?? null), "collection", [0 => "modular_content"], "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                // line 56
                echo "\t\t\t\t\t\t\t";
                if (twig_trim_filter(strip_tags($this->getAttribute($context["module"], "content", [])))) {
                    // line 57
                    echo "\t\t\t\t\t\t\t\t<p>";
                    echo $this->getAttribute($context["module"], "content", []);
                    echo "</p>
\t\t\t\t\t\t\t";
                }
                // line 59
                echo "\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            echo "\t\t\t\t\t";
        }
        // line 61
        echo "\t\t\t\t</div>

\t\t\t\t";
        // line 63
        if (( !$this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", [], "any", false, true), "bricklayer_layout", [], "any", true, true) || $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "bricklayer_layout", []))) {
            // line 64
            echo "\t\t\t\t<div class=\"bricklayer\">
\t\t\t\t\t";
        } else {
            // line 66
            echo "\t\t\t\t\t<div>
\t\t\t\t\t\t";
        }
        // line 68
        echo "
\t\t\t\t\t\t";
        // line 70
        echo "\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["taxonomy"] ?? null), "findTaxonomy", [0 => ["tag" => "featured"]], "method"));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 71
            echo "\t\t\t\t\t\t\t";
            $this->loadTemplate("partials/blog-list-item.html.twig", "blog.html.twig", 71)->display(twig_array_merge($context, ["blog" => ($context["page"] ?? null), "page" => $context["child"]]));
            // line 72
            echo "\t\t\t\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "
\t\t\t\t\t\t";
        // line 75
        echo "\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["collection"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 76
            echo "\t\t\t\t\t\t\t";
            if (!twig_in_filter("featured", $this->getAttribute($this->getAttribute($context["child"], "taxonomy", []), "tag", [], "array"))) {
                // line 77
                echo "\t\t\t\t\t\t\t\t";
                $this->loadTemplate("partials/blog-list-item.html.twig", "blog.html.twig", 77)->display(twig_array_merge($context, ["blog" => ($context["page"] ?? null), "page" => $context["child"]]));
                // line 78
                echo "\t\t\t\t\t\t\t";
            }
            // line 79
            echo "\t\t\t\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "
\t\t\t\t\t</div>

\t\t\t\t\t";
        // line 83
        if (((($context["show_pagination"] ?? null) && $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "pagination", []), "enabled", [])) && $this->getAttribute($this->getAttribute(($context["collection"] ?? null), "params", []), "pagination", []))) {
            // line 84
            echo "\t\t\t\t\t\t<div id=\"listing-footer\">
\t\t\t\t\t\t\t";
            // line 85
            $this->loadTemplate("partials/pagination.html.twig", "blog.html.twig", 85)->display(twig_array_merge($context, ["base_url" => $this->getAttribute(($context["page"] ?? null), "url", []), "pagination" => $this->getAttribute($this->getAttribute(($context["collection"] ?? null), "params", []), "pagination", [])]));
            // line 86
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 88
        echo "
\t\t\t\t\t";
    }

    // line 91
    public function block_sidebar($context, array $blocks = [])
    {
        // line 92
        echo "\t\t\t\t\t\t";
        $this->loadTemplate("partials/sidebar.html.twig", "blog.html.twig", 92)->display($context);
        // line 93
        echo "\t\t\t\t\t";
    }

    public function getTemplateName()
    {
        return "blog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  369 => 93,  366 => 92,  363 => 91,  358 => 88,  354 => 86,  352 => 85,  349 => 84,  347 => 83,  342 => 80,  328 => 79,  325 => 78,  322 => 77,  319 => 76,  301 => 75,  298 => 73,  284 => 72,  281 => 71,  263 => 70,  260 => 68,  256 => 66,  252 => 64,  250 => 63,  246 => 61,  243 => 60,  237 => 59,  231 => 57,  228 => 56,  223 => 55,  220 => 54,  216 => 52,  212 => 50,  209 => 49,  206 => 47,  203 => 46,  193 => 45,  143 => 102,  139 => 100,  137 => 99,  131 => 95,  129 => 45,  126 => 44,  123 => 43,  120 => 42,  118 => 41,  113 => 39,  110 => 38,  107 => 37,  102 => 34,  99 => 33,  94 => 29,  92 => 28,  87 => 27,  84 => 26,  77 => 23,  74 => 22,  71 => 21,  66 => 1,  63 => 18,  60 => 16,  58 => 15,  55 => 13,  52 => 11,  50 => 10,  47 => 8,  44 => 6,  42 => 5,  40 => 3,  38 => 2,  32 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "blog.html.twig", "C:\\xampp\\htdocs\\grav\\grav-skeleton-hadron+admin1\\user\\themes\\hadron\\templates\\blog.html.twig");
    }
}
