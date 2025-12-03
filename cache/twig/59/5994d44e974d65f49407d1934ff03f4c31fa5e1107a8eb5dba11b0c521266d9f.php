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

/* partials/base-root.html.twig */
class __TwigTemplate_3d6b42d2b6ff1a24435119dbfe371920eb4c2f8c6389af266834e14b76c63d2c extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'assets' => [$this, 'block_assets'],
            'body' => [$this, 'block_body'],
            'page' => [$this, 'block_page'],
            'navigation' => [$this, 'block_navigation'],
            'titlebar' => [$this, 'block_titlebar'],
            'content_wrapper' => [$this, 'block_content_wrapper'],
            'messages' => [$this, 'block_messages'],
            'widgets' => [$this, 'block_widgets'],
            'content_top' => [$this, 'block_content_top'],
            'content' => [$this, 'block_content'],
            'content_bottom' => [$this, 'block_content_bottom'],
            'footer' => [$this, 'block_footer'],
            'modals' => [$this, 'block_modals'],
            'bottom' => [$this, 'block_bottom'],
        ];
        $this->deferred = $this->env->getExtension('Twig\DeferredExtension\DeferredExtension');
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        if (($this->getAttribute(($context["uri"] ?? null), "extension", [], "method") == "json")) {
            $this->loadTemplate("default.json.twig", "partials/base-root.html.twig", 1)->display($context);
        } else {
            // line 2
            echo "<!DOCTYPE html>
<html lang=\"";
            // line 3
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["user"] ?? null), "language", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["user"] ?? null), "language", []), "en")) : ("en")), "html", null, true);
            echo "\">
<head>
";
            // line 5
            $this->displayBlock('head', $context, $blocks);
            // line 36
            echo "
";
            // line 37
            $this->displayBlock('assets', $context, $blocks);
            // line 41
            echo "
<noscript>
    <style>
        .simplebar-content-wrapper {
            overflow: auto;
        }
    </style>
</noscript>

</head>

";
            // line 52
            $this->displayBlock('body', $context, $blocks);
            // line 186
            echo "</html>
";
        }
        $this->deferred->resolve($this, $context, $blocks);
    }

    // line 5
    public function block_head($context, array $blocks = [])
    {
        // line 6
        echo "    <meta charset=\"utf-8\" />
    <title>";
        // line 7
        if (($context["title"] ?? null)) {
            echo strip_tags(($context["title"] ?? null));
            echo " | ";
        } else {
            if ($this->getAttribute(($context["header"] ?? null), "title", [])) {
                echo twig_escape_filter($this->env, $this->getAttribute(($context["header"] ?? null), "title", []), "html", null, true);
                echo " | ";
            }
        }
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", []), "html", null, true);
        echo "</title>

    ";
        // line 9
        if ($this->getAttribute(($context["header"] ?? null), "description", [])) {
            // line 10
            echo "        <meta name=\"description\" content=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["header"] ?? null), "description", []), "html", null, true);
            echo "\">
    ";
        } else {
            // line 12
            echo "        <meta name=\"description\" content=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "description", []), "html", null, true);
            echo "\">
    ";
        }
        // line 14
        echo "
    ";
        // line 15
        if ($this->getAttribute(($context["header"] ?? null), "robots", [])) {
            // line 16
            echo "        <meta name=\"robots\" content=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["header"] ?? null), "robots", []), "html", null, true);
            echo "\">
    ";
        } else {
            // line 18
            echo "        <meta name=\"robots\" content=\"noindex, nofollow\">
    ";
        }
        // line 20
        echo "
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, ($context["base_url_simple"] ?? null), "html", null, true);
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/images/favicon.png\">

    ";
        // line 25
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/custom.css"], "method");
        // line 26
        echo "
    ";
        // line 27
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 30
        echo "
    ";
        // line 31
        $this->loadTemplate("partials/javascript-config.html.twig", "partials/base-root.html.twig", 31)->display($context);
        // line 32
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
    }

    // line 27
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 28
        echo "        ";
        $this->loadTemplate("partials/stylesheets.html.twig", "partials/base-root.html.twig", 28)->display($context);
        // line 29
        echo "    ";
    }

    // line 32
    public function block_javascripts($context, array $blocks = [])
    {
        // line 33
        echo "        ";
        $this->loadTemplate("partials/javascripts.html.twig", "partials/base-root.html.twig", 33)->display($context);
        // line 34
        echo "    ";
    }

    public function block_assets($context, array $blocks = [])
    {
        $this->deferred->defer($this, 'assets');
    }

    // line 37
    public function block_assets_deferred($context, array $blocks = [])
    {
        // line 38
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", [], "method");
        echo "
    ";
        // line 39
        echo $this->getAttribute(($context["assets"] ?? null), "js", [], "method");
        echo "
";
        $this->deferred->resolve($this, $context, $blocks);
    }

    // line 52
    public function block_body($context, array $blocks = [])
    {
        // line 53
        $context["sidebarStatus"] = $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->getCookie("grav-admin-sidebar");
        // line 54
        $context["sidebarStatus"] = (((( !(null === ($context["sidebarStatus"] ?? null)) && (($context["sidebarStatus"] ?? null) == "false")) || ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "admin", []), "sidebar", []), "size", []) == "small"))) ? ("sidebar-closed") : (""));
        // line 55
        echo "
<body class=\"ga-theme-17x ";
        // line 56
        echo twig_escape_filter($this->env, ($context["sidebarStatus"] ?? null), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "admin", []), "body_classes", []), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["body_classes"] ?? null), "html", null, true);
        echo "\">

";
        // line 58
        if ( !$this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->authorize([0 => "admin.login"])) {
            // line 59
            echo "    ";
            $this->loadTemplate("partials/messages.html.twig", "partials/base-root.html.twig", 59)->display($context);
        } else {
            // line 61
            echo "
";
            // line 62
            $this->displayBlock('page', $context, $blocks);
        }
        // line 180
        echo "
";
        // line 181
        $this->displayBlock('bottom', $context, $blocks);
        // line 184
        echo "</body>
";
    }

    // line 62
    public function block_page($context, array $blocks = [])
    {
        // line 63
        echo "<div class=\"remodal-bg\">

    ";
        // line 65
        $this->displayBlock('navigation', $context, $blocks);
        // line 68
        echo "
    <main id=\"admin-main\">
        ";
        // line 70
        $this->loadTemplate("partials/nav-toggle.html.twig", "partials/base-root.html.twig", 70)->display($context);
        // line 71
        echo "
        <div id=\"titlebar\" class=\"titlebar\">
            ";
        // line 73
        $this->displayBlock('titlebar', $context, $blocks);
        // line 74
        echo "        </div>

        ";
        // line 76
        $this->displayBlock('content_wrapper', $context, $blocks);
        // line 112
        echo "
        ";
        // line 113
        $this->displayBlock('modals', $context, $blocks);
        // line 173
        echo "
    </main>

    <div id='overlay'></div>
</div>
";
    }

    // line 65
    public function block_navigation($context, array $blocks = [])
    {
        // line 66
        echo "        ";
        $this->loadTemplate("partials/nav.html.twig", "partials/base-root.html.twig", 66)->display($context);
        // line 67
        echo "    ";
    }

    // line 73
    public function block_titlebar($context, array $blocks = [])
    {
    }

    // line 76
    public function block_content_wrapper($context, array $blocks = [])
    {
        // line 77
        echo "        <div data-simplebar class=\"content-wrapper\">
            <div class=\"";
        // line 78
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "admin", []), "content_padding", [])) {
            echo "content-padding";
        }
        echo "\">
                ";
        // line 79
        $this->displayBlock('messages', $context, $blocks);
        // line 82
        echo "
                ";
        // line 83
        $this->displayBlock('widgets', $context, $blocks);
        // line 84
        echo "
                <div class=\"default-box-shadow\">
                    ";
        // line 86
        $this->displayBlock('content_top', $context, $blocks);
        // line 87
        echo "
                    <div class=\"admin-block\">";
        // line 89
        $this->displayBlock('content', $context, $blocks);
        // line 90
        echo "</div>

                    ";
        // line 92
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "admin", []), "show_github_msg", [])) {
            // line 93
            echo "                    <div class=\"notice alert\">
                        <i class=\"fa fa-github\"></i>
                        <a href=\"https://github.com/getgrav/grav-plugin-admin/issues\" target=\"_blank\" rel=\"noopener noreferrer\">
                            ";
            // line 96
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_ADMIN.ADMIN_REPORT_ISSUE"), "html", null, true);
            echo "
                        </a>
                    </div>
                    ";
        }
        // line 100
        echo "
                    ";
        // line 101
        $this->displayBlock('content_bottom', $context, $blocks);
        // line 102
        echo "                </div>

                ";
        // line 104
        $this->displayBlock('footer', $context, $blocks);
        // line 109
        echo "            </div>
        </div>
        ";
    }

    // line 79
    public function block_messages($context, array $blocks = [])
    {
        // line 80
        echo "                    ";
        $this->loadTemplate("partials/messages.html.twig", "partials/base-root.html.twig", 80)->display($context);
        // line 81
        echo "                ";
    }

    // line 83
    public function block_widgets($context, array $blocks = [])
    {
    }

    // line 86
    public function block_content_top($context, array $blocks = [])
    {
    }

    // line 89
    public function block_content($context, array $blocks = [])
    {
    }

    // line 101
    public function block_content_bottom($context, array $blocks = [])
    {
    }

    // line 104
    public function block_footer($context, array $blocks = [])
    {
        // line 105
        echo "                <footer id=\"footer\">
                    ";
        // line 106
        $this->loadTemplate("partials/footer.html.twig", "partials/base-root.html.twig", 106)->display($context);
        // line 107
        echo "                </footer>
                ";
    }

    // line 113
    public function block_modals($context, array $blocks = [])
    {
        // line 114
        echo "        <div class=\"remodal\" data-remodal-id=\"generic\" data-remodal-options=\"hashTracking: false\">
            <form>
                <h1>";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_ADMIN.ERROR"), "html", null, true);
        echo "</h1>
                <div class=\"error-content\"></div>
                <div class=\"button-bar\">
                    <a class=\"button remodal-cancel\" data-remodal-action=\"cancel\" href=\"#\">";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_ADMIN.CLOSE"), "html", null, true);
        echo "</a>
                </div>
            </form>
        </div>

        <div class=\"remodal\" data-remodal-id=\"metadata\" data-remodal-options=\"hashTracking: false\">
            <form>
                <h1><span>";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_ADMIN.METADATA"), "html", null, true);
        echo " for</span> <strong></strong></h1>
                <div class=\"metadata-preview\">
                    <div class=\"meta-preview\"></div>
                    <div class=\"meta-content\"></div>
                </div>
                <div class=\"button-bar\">
                    <a class=\"button remodal-cancel\" data-remodal-action=\"cancel\" href=\"#\">";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_ADMIN.CLOSE"), "html", null, true);
        echo "</a>
                </div>
            </form>
        </div>

        <div class=\"remodal\" data-remodal-id=\"delete-media\" data-remodal-options=\"hashTracking: false\">
            <form>
                <h1>";
        // line 139
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_ADMIN.MODAL_DELETE_FILE_CONFIRMATION_REQUIRED_TITLE"), "html", null, true);
        echo "</h1>
                <p class=\"bigger\">
                    ";
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_ADMIN.MODAL_DELETE_FILE_CONFIRMATION_REQUIRED_DESC"), "html", null, true);
        echo "
                </p>
                <br>
                <div class=\"button-bar\">
                    <button data-remodal-action=\"cancel\" class=\"button secondary remodal-cancel\">
                        <i class=\"fa fa-fw fa-close\"></i> ";
        // line 146
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_ADMIN.CANCEL"), "html", null, true);
        echo "
                    </button>
                    <button data-remodal-action=\"confirm\" class=\"button remodal-confirm disable-after-click\">
                        <i class=\"fa fa-fw fa-check\"></i> ";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_ADMIN.CONTINUE"), "html", null, true);
        echo "
                    </button>
                </div>
            </form>
        </div>

        <div class=\"remodal\" data-remodal-id=\"update-grav\" data-remodal-options=\"hashTracking: false\">
            <form>
                <h1>";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_ADMIN.MODAL_DELETE_FILE_CONFIRMATION_REQUIRED_TITLE"), "html", null, true);
        echo "</h1>
                <p class=\"bigger\">
                    ";
        // line 159
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_ADMIN.MODAL_UPDATE_GRAV_CONFIRMATION_REQUIRED_DESC"), "html", null, true);
        echo "
                </p>
                <br>
                <div class=\"button-bar\">
                    <button data-remodal-action=\"cancel\" class=\"button secondary remodal-cancel\">
                        <i class=\"fa fa-fw fa-close\"></i> ";
        // line 164
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_ADMIN.CANCEL"), "html", null, true);
        echo "
                    </button>
                    <button data-remodal-action=\"confirm\" class=\"button remodal-confirm disable-after-click\">
                        <i class=\"fa fa-fw fa-check\"></i> ";
        // line 167
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_ADMIN.CONTINUE"), "html", null, true);
        echo "
                    </button>
                </div>
            </form>
        </div>
        ";
    }

    // line 181
    public function block_bottom($context, array $blocks = [])
    {
        // line 182
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", [0 => "bottom"], "method");
        echo "
";
    }

    public function getTemplateName()
    {
        return "partials/base-root.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  515 => 182,  512 => 181,  502 => 167,  496 => 164,  488 => 159,  483 => 157,  472 => 149,  466 => 146,  458 => 141,  453 => 139,  443 => 132,  434 => 126,  424 => 119,  418 => 116,  414 => 114,  411 => 113,  406 => 107,  404 => 106,  401 => 105,  398 => 104,  393 => 101,  388 => 89,  383 => 86,  378 => 83,  374 => 81,  371 => 80,  368 => 79,  362 => 109,  360 => 104,  356 => 102,  354 => 101,  351 => 100,  344 => 96,  339 => 93,  337 => 92,  333 => 90,  331 => 89,  328 => 87,  326 => 86,  322 => 84,  320 => 83,  317 => 82,  315 => 79,  309 => 78,  306 => 77,  303 => 76,  298 => 73,  294 => 67,  291 => 66,  288 => 65,  279 => 173,  277 => 113,  274 => 112,  272 => 76,  268 => 74,  266 => 73,  262 => 71,  260 => 70,  256 => 68,  254 => 65,  250 => 63,  247 => 62,  242 => 184,  240 => 181,  237 => 180,  234 => 62,  231 => 61,  227 => 59,  225 => 58,  216 => 56,  213 => 55,  211 => 54,  209 => 53,  206 => 52,  199 => 39,  194 => 38,  191 => 37,  182 => 34,  179 => 33,  176 => 32,  172 => 29,  169 => 28,  166 => 27,  161 => 32,  159 => 31,  156 => 30,  154 => 27,  151 => 26,  148 => 25,  142 => 22,  138 => 20,  134 => 18,  128 => 16,  126 => 15,  123 => 14,  117 => 12,  111 => 10,  109 => 9,  95 => 7,  92 => 6,  89 => 5,  82 => 186,  80 => 52,  67 => 41,  65 => 37,  62 => 36,  60 => 5,  55 => 3,  52 => 2,  48 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "partials/base-root.html.twig", "C:\\xampp\\htdocs\\grav\\grav-skeleton-hadron+admin1\\user\\plugins\\admin\\themes\\grav\\templates\\partials\\base-root.html.twig");
    }
    private $deferred;
}
