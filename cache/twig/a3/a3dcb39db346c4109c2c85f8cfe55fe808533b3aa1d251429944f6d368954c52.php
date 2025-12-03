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

/* partials/base.html.twig */
class __TwigTemplate_daf6b718677d00b2b73830138298a39bf6d2c7c1a739dda62d42f8242defa7ef extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'header' => [$this, 'block_header'],
            'header_navigation' => [$this, 'block_header_navigation'],
            'language_switcher' => [$this, 'block_language_switcher'],
            'footer' => [$this, 'block_footer'],
            'mobile' => [$this, 'block_mobile'],
        ];
        $this->deferred = $this->env->getExtension('Twig\DeferredExtension\DeferredExtension');
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@quark/partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("@quark/partials/base.html.twig", "partials/base.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        $this->deferred->resolve($this, $context, $blocks);
    }

    public function block_head($context, array $blocks = [])
    {
        $this->deferred->defer($this, 'head');
    }

    // line 3
    public function block_head_deferred($context, array $blocks = [])
    {
        // line 4
        echo "\t<meta charset=\"utf-8\" />
\t<title>";
        // line 5
        if ($this->getAttribute(($context["page"] ?? null), "title", [])) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "title", []), "html");
            echo " | ";
        }
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", []), "html");
        echo "</title>

\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t";
        // line 9
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 9)->display($context);
        // line 10
        echo "
\t";
        // line 12
        echo "\t";
        $context["favicon"] = $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "favicon");
        // line 13
        echo "\t";
        if (($context["favicon"] ?? null)) {
            // line 14
            echo "\t\t";
            $context["favicon_file"] = $this->getAttribute(twig_first($this->env, ($context["favicon"] ?? null)), "name", []);
            // line 15
            echo "\t\t";
            $context["file_type"] = twig_last($this->env, twig_split_filter($this->env, ($context["favicon_file"] ?? null), "."));
            // line 16
            echo "\t\t<link rel=\"icon\" type=\"image/";
            echo twig_escape_filter($this->env, ($context["file_type"] ?? null), "html", null, true);
            echo "\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc(("theme://images/" . ($context["favicon_file"] ?? null))), "html", null, true);
            echo "\" />
\t";
        } else {
            // line 18
            echo "\t\t<link rel=\"icon\" type=\"image/png\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://images/favicon.png"), "html", null, true);
            echo "\" />
\t";
        }
        // line 20
        echo "
\t<link rel=\"canonical\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "url", [0 => true, 1 => true], "method"), "html", null, true);
        echo "\" />
";
        $this->deferred->resolve($this, $context, $blocks);
    }

    // line 24
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 25
        echo "\t";
        $context["enable_fa_solid"] = $this->getAttribute($this->getAttribute(($context["theme"] ?? null), "fontawesome", []), "solid", []);
        // line 26
        echo "\t";
        $context["enable_fa_regular"] = $this->getAttribute($this->getAttribute(($context["theme"] ?? null), "fontawesome", []), "regular", []);
        // line 27
        echo "\t";
        $context["enable_fa_brand"] = $this->getAttribute($this->getAttribute(($context["theme"] ?? null), "fontawesome", []), "brand", []);
        // line 28
        echo "\t";
        if (((($context["enable_fa_solid"] ?? null) || ($context["enable_fa_regular"] ?? null)) || ($context["enable_fa_brand"] ?? null))) {
            // line 29
            echo "\t\t";
            $context["enable_fa"] = true;
            // line 30
            echo "\t";
        } else {
            // line 31
            echo "\t\t";
            $context["enable_fa"] = false;
            // line 32
            echo "\t";
        }
        // line 33
        echo "
\t";
        // line 34
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => ("theme://css-compiled/spectre" . ($context["compress"] ?? null)), 1 => 100], "method");
        // line 35
        echo "\t";
        if ($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "spectre.exp")) {
            $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => ("theme://css-compiled/spectre-exp" . ($context["compress"] ?? null)), 1 => 100], "method");
        }
        // line 36
        echo "\t";
        if ($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "spectre.icons")) {
            $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => ("theme://css-compiled/spectre-icons" . ($context["compress"] ?? null)), 1 => 100], "method");
        }
        // line 37
        echo "
\t";
        // line 38
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/quark.css", 1 => 100], "method");
        // line 39
        echo "\t";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/hadron.css", 1 => 10], "method");
        // line 40
        echo "\t";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/custom.css", 1 => 0], "method");
        // line 41
        echo "
\t";
        // line 42
        if ( !($context["enable_fa"] ?? null)) {
            // line 43
            echo "\t\t";
            $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/line-awesome.min.css"], "method");
            // line 44
            echo "\t";
        } else {
            // line 45
            echo "\t\t";
            $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/fontawesome.min.css"], "method");
            // line 46
            echo "\t";
        }
        // line 47
        echo "\t";
        if (($context["enable_fa_solid"] ?? null)) {
            echo "    ";
            $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/fontawesome-solid.min.css"], "method");
            echo "     ";
        }
        // line 48
        echo "\t";
        if (($context["enable_fa_regular"] ?? null)) {
            echo "  ";
            $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/fontawesome-regular.min.css"], "method");
            echo "   ";
        }
        // line 49
        echo "\t";
        if (($context["enable_fa_brand"] ?? null)) {
            echo "    ";
            $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/fontawesome-brands.min.css"], "method");
            echo "    ";
        }
    }

    // line 52
    public function block_javascripts($context, array $blocks = [])
    {
        // line 53
        echo "\t";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "jquery", 1 => 101], "method");
        // line 54
        echo "\t";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/jquery.treemenu.js", 1 => ["group" => "bottom"]], "method");
        // line 55
        echo "\t";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/hadron.js", 1 => ["group" => "bottom"]], "method");
    }

    // line 58
    public function block_header($context, array $blocks = [])
    {
        // line 59
        echo "    <section id=\"header\" class=\"section\">
\t    <section class=\"container ";
        // line 60
        echo twig_escape_filter($this->env, ($context["grid_size"] ?? null), "html", null, true);
        echo "\">
\t\t    <nav class=\"navbar\">
\t\t\t    <section class=\"navbar-section logo\">
\t\t\t\t    ";
        // line 63
        $this->loadTemplate("partials/logo.html.twig", "partials/base.html.twig", 63)->display($context);
        // line 64
        echo "\t\t\t    </section>
\t\t\t    <section class=\"navbar-section desktop-menu\">

\t\t\t\t    <nav class=\"dropmenu animated\">
\t\t\t\t\t    ";
        // line 68
        $this->displayBlock('header_navigation', $context, $blocks);
        // line 71
        echo "\t\t\t\t    </nav>

\t\t\t\t    <nav class=\"dropmenu language-switcher\">
\t\t\t\t\t    ";
        // line 74
        $this->displayBlock('language_switcher', $context, $blocks);
        // line 77
        echo "\t\t\t\t    </nav>

\t\t\t\t    ";
        // line 79
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "login", []), "enabled", []) && $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", []), "username", []))) {
            // line 80
            echo "\t\t\t\t\t    <span class=\"login-status-wrapper\"><i class=\"fa fa-user\"></i> ";
            $this->loadTemplate("partials/login-status.html.twig", "partials/base.html.twig", 80)->display($context);
            echo "</span>
\t\t\t\t    ";
        }
        // line 82
        echo "
\t\t\t    </section>
\t\t    </nav>
\t    </section>
    </section>
    <div class=\"mobile-menu\">
\t    <div class=\"button_container\" id=\"toggle\">
\t\t    <span class=\"top\"></span>
\t\t    <span class=\"middle\"></span>
\t\t    <span class=\"bottom\"></span>
\t    </div>
    </div>
";
    }

    // line 68
    public function block_header_navigation($context, array $blocks = [])
    {
        // line 69
        echo "\t\t\t\t\t\t    ";
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 69)->display($context);
        // line 70
        echo "\t\t\t\t\t    ";
    }

    // line 74
    public function block_language_switcher($context, array $blocks = [])
    {
        // line 75
        echo "\t\t\t\t\t\t    ";
        $this->loadTemplate("partials/langauge-switcher.html.twig", "partials/base.html.twig", 75)->display($context);
        // line 76
        echo "\t\t\t\t\t    ";
    }

    // line 96
    public function block_footer($context, array $blocks = [])
    {
        // line 97
        echo "\t<section id=\"footer\" class=\"section bg-gray\">
\t\t<section class=\"container ";
        // line 98
        echo twig_escape_filter($this->env, ($context["grid_size"] ?? null), "html", null, true);
        echo "\">
\t\t\t";
        // line 100
        echo "\t\t\t";
        $context["content"] = $this->getAttribute($this->getAttribute(($context["pages"] ?? null), "find", [0 => "/footer"], "method"), "content", []);
        // line 101
        echo "\t\t\t";
        if (($context["content"] ?? null)) {
            // line 102
            echo "\t\t\t\t";
            echo ($context["content"] ?? null);
            echo "
\t\t\t";
        }
        // line 104
        echo "\t\t</section>
\t</section>
";
    }

    // line 108
    public function block_mobile($context, array $blocks = [])
    {
        // line 109
        echo "    <div class=\"mobile-container\">
\t    <div class=\"overlay\" id=\"overlay\">
\t\t    <div class=\"mobile-logo\">
\t\t\t    ";
        // line 112
        $this->loadTemplate("partials/logo.html.twig", "partials/base.html.twig", 112)->display(twig_array_merge($context, ["mobile" => true]));
        // line 113
        echo "\t\t    </div>
\t\t    <nav class=\"language-switcher\">
\t\t\t    ";
        // line 115
        $this->loadTemplate("partials/langauge-switcher.html.twig", "partials/base.html.twig", 115)->display(twig_array_merge($context, ["mobile" => true]));
        // line 116
        echo "\t\t    </nav>
\t\t    <nav class=\"overlay-menu\">
\t\t\t    ";
        // line 118
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 118)->display(twig_array_merge($context, ["tree" => true]));
        // line 119
        echo "\t\t    </nav>
\t    </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  345 => 119,  343 => 118,  339 => 116,  337 => 115,  333 => 113,  331 => 112,  326 => 109,  323 => 108,  317 => 104,  311 => 102,  308 => 101,  305 => 100,  301 => 98,  298 => 97,  295 => 96,  291 => 76,  288 => 75,  285 => 74,  281 => 70,  278 => 69,  275 => 68,  259 => 82,  253 => 80,  251 => 79,  247 => 77,  245 => 74,  240 => 71,  238 => 68,  232 => 64,  230 => 63,  224 => 60,  221 => 59,  218 => 58,  213 => 55,  210 => 54,  207 => 53,  204 => 52,  195 => 49,  188 => 48,  181 => 47,  178 => 46,  175 => 45,  172 => 44,  169 => 43,  167 => 42,  164 => 41,  161 => 40,  158 => 39,  156 => 38,  153 => 37,  148 => 36,  143 => 35,  141 => 34,  138 => 33,  135 => 32,  132 => 31,  129 => 30,  126 => 29,  123 => 28,  120 => 27,  117 => 26,  114 => 25,  111 => 24,  104 => 21,  101 => 20,  95 => 18,  87 => 16,  84 => 15,  81 => 14,  78 => 13,  75 => 12,  72 => 10,  70 => 9,  59 => 5,  56 => 4,  53 => 3,  37 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "partials/base.html.twig", "C:\\xampp\\htdocs\\grav\\grav-skeleton-hadron+admin1\\user\\themes\\hadron\\templates\\partials\\base.html.twig");
    }
    private $deferred;
}
