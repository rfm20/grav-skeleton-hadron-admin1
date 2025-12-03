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

/* partials/sidebar.html.twig */
class __TwigTemplate_1aa01b98fc9645b12c33a2b5b75ab290722264e1899278997c3baf51e33133b8 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'tntsearch' => [$this, 'block_tntsearch'],
            'sidebar_md_top' => [$this, 'block_sidebar_md_top'],
            'relatedpages' => [$this, 'block_relatedpages'],
            'random' => [$this, 'block_random'],
            'taxonomylist' => [$this, 'block_taxonomylist'],
            'archives' => [$this, 'block_archives'],
            'sidebar_md_bottom' => [$this, 'block_sidebar_md_bottom'],
            'feed' => [$this, 'block_feed'],
            'toc' => [$this, 'block_toc'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $context["feed_url"] = (((($this->getAttribute(($context["blog"] ?? null), "url", []) == "/") || ($this->getAttribute(($context["blog"] ?? null), "url", []) == ($context["base_url_relative"] ?? null)))) ? (((($context["base_url_relative"] ?? null) . "/") . $this->getAttribute(($context["blog"] ?? null), "slug", []))) : (("/" . $this->getAttribute(($context["blog"] ?? null), "slug", []))));
        // line 2
        $context["new_base_url"] = ((($this->getAttribute(($context["blog"] ?? null), "url", []) == "/")) ? ("") : ($this->getAttribute(($context["blog"] ?? null), "url", [])));
        // line 3
        echo "
";
        // line 4
        $context["sidebar_page"] = $this->getAttribute(($context["pages"] ?? null), "find", [0 => "/sidebar"], "method");
        // line 5
        $context["sidebar_page_content"] = $this->getAttribute(($context["sidebar_page"] ?? null), "content", []);
        // line 6
        echo "
";
        // line 7
        $this->displayBlock('tntsearch', $context, $blocks);
        // line 14
        echo "
";
        // line 16
        $this->displayBlock('sidebar_md_top', $context, $blocks);
        // line 25
        echo "
";
        // line 26
        $this->displayBlock('relatedpages', $context, $blocks);
        // line 34
        echo "
";
        // line 35
        $this->displayBlock('random', $context, $blocks);
        // line 44
        echo "
";
        // line 45
        $this->displayBlock('taxonomylist', $context, $blocks);
        // line 54
        echo "
";
        // line 55
        $this->displayBlock('archives', $context, $blocks);
        // line 63
        echo "
";
        // line 65
        $this->displayBlock('sidebar_md_bottom', $context, $blocks);
        // line 74
        echo "
";
        // line 75
        $this->displayBlock('feed', $context, $blocks);
        // line 85
        echo "
";
        // line 86
        $this->displayBlock('toc', $context, $blocks);
    }

    // line 7
    public function block_tntsearch($context, array $blocks = [])
    {
        // line 8
        echo "\t";
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "tntsearch", []), "enabled", []) && $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "sidebar", []), "show_tntsearch", []))) {
            // line 9
            echo "\t\t<div class=\"sidebar-content\">
\t\t\t";
            // line 10
            $this->loadTemplate("partials/sidebar.html.twig", "partials/sidebar.html.twig", 10, "997578713")->display(twig_array_merge($context, ["limit" => 10, "snippet" => 150, "min" => 3, "search_type" => "auto", "dropdown" => true]));
            // line 11
            echo "\t\t</div>
\t";
        }
    }

    // line 16
    public function block_sidebar_md_top($context, array $blocks = [])
    {
        // line 17
        echo "\t";
        if ((($this->getAttribute($this->getAttribute(($context["sidebar_page"] ?? null), "header", []), "position", []) == "top") || twig_test_empty($this->getAttribute($this->getAttribute(($context["sidebar_page"] ?? null), "header", []), "position", [])))) {
            // line 18
            echo "\t\t";
            if ( !twig_test_empty(($context["sidebar_page_content"] ?? null))) {
                // line 19
                echo "\t\t\t<div class=\"sidebar-content\">
\t\t\t\t";
                // line 20
                echo ($context["sidebar_page_content"] ?? null);
                echo "
\t\t\t</div>
\t\t";
            }
            // line 23
            echo "\t";
        }
    }

    // line 26
    public function block_relatedpages($context, array $blocks = [])
    {
        // line 27
        echo "\t";
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "relatedpages", []), "enabled", []) && (twig_length_filter($this->env, ($context["related_pages"] ?? null)) > 0))) {
            // line 28
            echo "\t\t<div class=\"sidebar-content\">
\t\t\t<h4>";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "THEME_QUARK.SIDEBAR.RELATED_POSTS.HEADLINE"), "html", null, true);
            echo "</h4>
\t\t\t";
            // line 30
            $this->loadTemplate("partials/relatedpages.html.twig", "partials/sidebar.html.twig", 30)->display($context);
            // line 31
            echo "\t\t</div>
\t";
        }
    }

    // line 35
    public function block_random($context, array $blocks = [])
    {
        // line 36
        echo "\t";
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "random", []), "enabled", [])) {
            // line 37
            echo "\t\t<div class=\"sidebar-content\">
\t\t\t<h4>";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "THEME_QUARK.SIDEBAR.RANDOM_ARTICLE.HEADLINE"), "html", null, true);
            echo "</h4>
\t\t\t<a class=\"button\" href=\"";
            // line 39
            echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
            echo "/random\"><i class=\"fa fa-retweet\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "THEME_QUARK.SIDEBAR.RANDOM_ARTICLE.FEELING_LUCKY"), "html", null, true);
            echo "
\t\t\t</a>
\t\t</div>
\t";
        }
    }

    // line 45
    public function block_taxonomylist($context, array $blocks = [])
    {
        // line 46
        echo "\t";
        // line 47
        echo "\t";
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "taxonomylist", []), "enabled", []) && $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "sidebar", []), "show_popular_tags", []))) {
            // line 48
            echo "\t\t<div class=\"sidebar-content\">
\t\t\t<h4>";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "THEME_QUARK.SIDEBAR.POPULAR_TAGS.HEADLINE"), "html", null, true);
            echo "</h4>
\t\t\t";
            // line 50
            $this->loadTemplate("partials/taxonomylist.html.twig", "partials/sidebar.html.twig", 50)->display(twig_array_merge($context, ["base_url" => ($context["new_base_url"] ?? null), "taxonomy" => "tag", "children_only" => true]));
            // line 51
            echo "\t\t</div>
\t";
        }
    }

    // line 55
    public function block_archives($context, array $blocks = [])
    {
        // line 56
        echo "\t";
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "archives", []), "enabled", [])) {
            // line 57
            echo "\t\t<div class=\"sidebar-content\">
\t\t\t<h4>";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "THEME_QUARK.SIDEBAR.ARCHIVES.HEADLINE"), "html", null, true);
            echo "</h4>
\t\t\t";
            // line 59
            $this->loadTemplate("partials/archives.html.twig", "partials/sidebar.html.twig", 59)->display(twig_array_merge($context, ["base_url" => ($context["new_base_url"] ?? null)]));
            // line 60
            echo "\t\t</div>
\t";
        }
    }

    // line 65
    public function block_sidebar_md_bottom($context, array $blocks = [])
    {
        // line 66
        echo "\t";
        if (($this->getAttribute($this->getAttribute(($context["sidebar_page"] ?? null), "header", []), "position", []) == "bottom")) {
            // line 67
            echo "\t\t";
            if ( !twig_test_empty(($context["sidebar_page_content"] ?? null))) {
                // line 68
                echo "\t\t\t<div class=\"sidebar-content\">
\t\t\t\t";
                // line 69
                echo ($context["sidebar_page_content"] ?? null);
                echo "
\t\t\t</div>
\t\t";
            }
            // line 72
            echo "\t";
        }
    }

    // line 75
    public function block_feed($context, array $blocks = [])
    {
        // line 76
        echo "\t";
        // line 77
        echo "\t";
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "feed", []), "enabled", []) && $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "sidebar", []), "show_feed", []))) {
            // line 78
            echo "\t\t<div class=\"sidebar-content syndicate\">
\t\t\t<h4>";
            // line 79
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "THEME_QUARK.SIDEBAR.SYNDICATE.HEADLINE"), "html", null, true);
            echo "</h4>
\t\t\t<a class=\"btn\" href=\"";
            // line 80
            echo twig_escape_filter($this->env, ($context["feed_url"] ?? null), "html", null, true);
            echo ".atom\"> <i class=\"fa fa-rss-square\"></i> Atom 1.0 </a>
\t\t\t<a class=\"btn\" href=\"";
            // line 81
            echo twig_escape_filter($this->env, ($context["feed_url"] ?? null), "html", null, true);
            echo ".rss\"> <i class=\"fa fa-rss-square\"></i> RSS </a>
\t\t</div>
\t";
        }
    }

    // line 86
    public function block_toc($context, array $blocks = [])
    {
        // line 87
        echo "\t";
        // line 88
        echo "\t";
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "page-toc", [], "array"), "enabled", []) && ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", [], "any", false, true), "sidebar", [], "any", false, true), "show_toc", [], "any", true, true) &&  !(null === $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", [], "any", false, true), "sidebar", [], "any", false, true), "show_toc", [])))) ? ($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", [], "any", false, true), "sidebar", [], "any", false, true), "show_toc", [])) : (true)))) {
            // line 89
            echo "\t\t<div id=\"toc\" class=\"column ";
            echo twig_escape_filter($this->env, ($context["toc_col"] ?? null), "html", null, true);
            echo "\" style=\"position: sticky; top: 4rem;\">
\t\t\t";
            // line 90
            $this->loadTemplate("components/page-toc.html.twig", "partials/sidebar.html.twig", 90)->display($context);
            // line 91
            echo "\t\t</div>
\t";
        }
    }

    public function getTemplateName()
    {
        return "partials/sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  291 => 91,  289 => 90,  284 => 89,  281 => 88,  279 => 87,  276 => 86,  268 => 81,  264 => 80,  260 => 79,  257 => 78,  254 => 77,  252 => 76,  249 => 75,  244 => 72,  238 => 69,  235 => 68,  232 => 67,  229 => 66,  226 => 65,  220 => 60,  218 => 59,  214 => 58,  211 => 57,  208 => 56,  205 => 55,  199 => 51,  197 => 50,  193 => 49,  190 => 48,  187 => 47,  185 => 46,  182 => 45,  171 => 39,  167 => 38,  164 => 37,  161 => 36,  158 => 35,  152 => 31,  150 => 30,  146 => 29,  143 => 28,  140 => 27,  137 => 26,  132 => 23,  126 => 20,  123 => 19,  120 => 18,  117 => 17,  114 => 16,  108 => 11,  106 => 10,  103 => 9,  100 => 8,  97 => 7,  93 => 86,  90 => 85,  88 => 75,  85 => 74,  83 => 65,  80 => 63,  78 => 55,  75 => 54,  73 => 45,  70 => 44,  68 => 35,  65 => 34,  63 => 26,  60 => 25,  58 => 16,  55 => 14,  53 => 7,  50 => 6,  48 => 5,  46 => 4,  43 => 3,  41 => 2,  39 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "partials/sidebar.html.twig", "C:\\xampp\\htdocs\\grav\\grav-skeleton-hadron+admin1\\user\\themes\\hadron\\templates\\partials\\sidebar.html.twig");
    }
}


/* partials/sidebar.html.twig */
class __TwigTemplate_1aa01b98fc9645b12c33a2b5b75ab290722264e1899278997c3baf51e33133b8___997578713 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 10
        return "partials/tntsearch.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("partials/tntsearch.html.twig", "partials/sidebar.html.twig", 10);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "partials/sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  340 => 10,  291 => 91,  289 => 90,  284 => 89,  281 => 88,  279 => 87,  276 => 86,  268 => 81,  264 => 80,  260 => 79,  257 => 78,  254 => 77,  252 => 76,  249 => 75,  244 => 72,  238 => 69,  235 => 68,  232 => 67,  229 => 66,  226 => 65,  220 => 60,  218 => 59,  214 => 58,  211 => 57,  208 => 56,  205 => 55,  199 => 51,  197 => 50,  193 => 49,  190 => 48,  187 => 47,  185 => 46,  182 => 45,  171 => 39,  167 => 38,  164 => 37,  161 => 36,  158 => 35,  152 => 31,  150 => 30,  146 => 29,  143 => 28,  140 => 27,  137 => 26,  132 => 23,  126 => 20,  123 => 19,  120 => 18,  117 => 17,  114 => 16,  108 => 11,  106 => 10,  103 => 9,  100 => 8,  97 => 7,  93 => 86,  90 => 85,  88 => 75,  85 => 74,  83 => 65,  80 => 63,  78 => 55,  75 => 54,  73 => 45,  70 => 44,  68 => 35,  65 => 34,  63 => 26,  60 => 25,  58 => 16,  55 => 14,  53 => 7,  50 => 6,  48 => 5,  46 => 4,  43 => 3,  41 => 2,  39 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "partials/sidebar.html.twig", "C:\\xampp\\htdocs\\grav\\grav-skeleton-hadron+admin1\\user\\themes\\hadron\\templates\\partials\\sidebar.html.twig");
    }
}
