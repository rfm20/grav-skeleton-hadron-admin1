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

/* partials/plugins-details.html.twig */
class __TwigTemplate_96ad53e0e7059296536483a998f25e7ac44d07b1fdc12388e5556d2b2bdc88cb extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $context["gpm"] = $this->getAttribute(($context["admin"] ?? null), "gpm", [], "method");
        // line 2
        $context["installed"] = $this->getAttribute(($context["gpm"] ?? null), "isPluginInstalled", [0 => $this->getAttribute(($context["admin"] ?? null), "route", [])], "method");
        // line 3
        $context["isTestingRelease"] = $this->getAttribute(($context["gpm"] ?? null), "isTestingRelease", [0 => $this->getAttribute(($context["plugin"] ?? null), "slug", [])], "method");
        // line 4
        $context["gumroad_loaded"] = false;
        // line 5
        echo "
<div class=\"grav-update plugin\" data-gpm-plugin=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? null), "route", []), "html", null, true);
        echo "\">
</div>

<h1>
    ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["plugin"] ?? null), "name", []), "html", null, true);
        echo "
    ";
        // line 11
        if ($this->getAttribute(($context["admin"] ?? null), "isTeamGrav", [0 => ($context["plugin"] ?? null)], "method")) {
            // line 12
            echo "        <small><span class=\"info-reverse\"><i class=\"fa fa-check-circle\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_ADMIN.GRAV_OFFICIAL_PLUGIN"), "html", null, true);
            echo "\"></i></span></small>
    ";
        }
        // line 14
        echo "    ";
        if ($this->getAttribute(($context["admin"] ?? null), "isPremiumProduct", [0 => ($context["plugin"] ?? null)], "method")) {
            // line 15
            echo "        <small><span class=\"badge warning premium\"><i class=\"fa fa-star-o\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_ADMIN.PREMIUM_PRODUCT"), "html", null, true);
            echo "</span></small>
    ";
        }
        // line 17
        echo "    ";
        if ($this->getAttribute(($context["plugin"] ?? null), "symlink", [])) {
            // line 18
            echo "    <small class=\"hint--bottom\" data-hint=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_ADMIN.PLUGIN_SYMBOLICALLY_LINKED"), "html", null, true);
            echo "\">
        <i class=\"fa fa-fw fa-link\"></i>
    </small>
    ";
        }
        // line 22
        echo "    <small>";
        (($this->getAttribute(($context["plugin"] ?? null), "version", [])) ? (print (twig_escape_filter($this->env, ("v" . $this->getAttribute(($context["plugin"] ?? null), "version", [])), "html", null, true))) : (print ("")));
        echo "</small>
    ";
        // line 23
        if (($context["isTestingRelease"] ?? null)) {
            echo "<span class=\"gpm-testing\">test release</span>";
        }
        // line 24
        echo "</h1>
<div class=\"gpm-item-info\">
    <i class=\"gpm-item-icon fa fa-fw fa-";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["plugin"] ?? null), "icon", []), "html", null, true);
        echo "\"></i>
    ";
        // line 27
        $this->loadTemplate("partials/plugin-data.html.twig", "partials/plugins-details.html.twig", 27)->display(twig_array_merge($context, ["plugin" => ($context["plugin"] ?? null)]));
        // line 28
        echo "</div>

";
        // line 30
        if (($context["installed"] ?? null)) {
            // line 31
            echo "    ";
            $context["data"] = $this->getAttribute(($context["admin"] ?? null), "data", [0 => ("plugins/" . $this->getAttribute(($context["admin"] ?? null), "route", []))], "method");
            // line 32
            echo "    ";
            if ($this->getAttribute(($context["data"] ?? null), "get", [0 => "enabled"], "method")) {
                // line 33
                echo "      ";
                $this->loadTemplate("partials/blueprints.html.twig", "partials/plugins-details.html.twig", 33)->display(twig_array_merge($context, ["data" => ($context["data"] ?? null), "blueprints" => $this->getAttribute(($context["data"] ?? null), "blueprints", [])]));
                // line 34
                echo "    ";
            } else {
                // line 35
                echo "      <form>
        <div class=\"form-field grid\">
          <div class=\"form-label block size-1-3\">
            <label>";
                // line 38
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_ADMIN.PLUGINS_MUST_BE_ENABLED"), "html", null, true);
                echo "</label>
          </div>
          <div class=\"form-data block size-2-3\">
            <a class=\"button\" href=\"";
                // line 41
                echo twig_escape_filter($this->env, ($this->getAttribute(($context["uri"] ?? null), "addNonce", [0 => (((((($context["base_url_relative"] ?? null) . "/plugins/") . $this->getAttribute(($context["plugin"] ?? null), "slug", [])) . "/task") . $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "param_sep", [])) . "enable"), 1 => "admin-form", 2 => "admin-nonce"], "method") . "/redirect:true"), "html", null, true);
                echo "\">
              <i class=\"fa fa-power-off\" aria-hidden=\"true\"></i> ";
                // line 42
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_ADMIN.ENABLE"), "html", null, true);
                echo " <strong>";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["plugin"] ?? null), "name", []), "html", null, true);
                echo "</strong>
            </a>
          </div>
        </div>
      </form>
    ";
            }
            // line 48
            echo "    ";
            if ((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["plugin"] ?? null), "form", []), "fields", []), "enabled", []), "type", []) != "hidden") && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["plugin"] ?? null), "form", []), "fields", []), "tabs", []), "fields", []), "login", []), "fields", []), "enabled", []), "type", []) != "hidden"))) {
                // line 49
                echo "        <div class=\"button-bar danger\">
            <span class=\"danger-zone\"></span>
            ";
                // line 51
                if ( !$this->getAttribute(($context["plugin"] ?? null), "symlink", [])) {
                    // line 52
                    echo "                <a class=\"button button-reinstall-package hidden\" href=\"#\" data-remodal-target=\"reinstall-package\"><i class=\"fa fa-fw fa-repeat\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_ADMIN.REINSTALL_PLUGIN"), "html", null, true);
                    echo "</a>
            ";
                }
                // line 54
                echo "            <a class=\"button\" href=\"#\" data-remodal-target=\"remove-package\"><i class=\"fa fa-fw fa-warning\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_ADMIN.REMOVE_PLUGIN"), "html", null, true);
                echo "</a>
        </div>
    ";
            }
        } else {
            // line 58
            echo "    <div class=\"button-bar success\">
        ";
            // line 59
            if (($this->getAttribute(($context["plugin"] ?? null), "premium", []) &&  !$this->getAttribute(($context["admin"] ?? null), "license", [0 => $this->getAttribute(($context["plugin"] ?? null), "slug", [])], "method"))) {
                // line 60
                echo "            ";
                if ( !($context["gumroad_loaded"] ?? null)) {
                    // line 61
                    echo "                ";
                    $context["gumroad_loaded"] = true;
                    // line 62
                    echo "                <script src=\"//gumroad.com/js/gumroad.js\"></script>
            ";
                }
                // line 64
                echo "            <a class=\"gumroad-button button\" href=\"https://gum.co/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["plugin"] ?? null), "premium", []), "permalink", []), "html", null, true);
                echo "\" target=\"_blank\" data-gumroad-single-product=\"true\"><i class=\"fa fa-shopping-cart\"></i> ";
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["plugin"] ?? null), "premium", [], "any", false, true), "button", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["plugin"] ?? null), "premium", [], "any", false, true), "button", []), "Purchase")) : ("Purchase")), "html", null, true);
                echo "</a>
        ";
            } else {
                // line 66
                echo "            <a class=\"button\" href=\"#\" data-remodal-target=\"add-package\" data-packages-slugs=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["plugin"] ?? null), "slug", []), "html", null, true);
                echo "\" data-plugin-action=\"start-package-installation\"><i class=\"fa fa-plus\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_ADMIN.INSTALL_PLUGIN"), "html", null, true);
                echo "</a>
        ";
            }
            // line 68
            echo "    </div>
";
        }
        // line 70
        echo "
";
        // line 71
        $this->loadTemplate("partials/modal-changes-detected.html.twig", "partials/plugins-details.html.twig", 71)->display($context);
        // line 72
        $this->loadTemplate("partials/modal-add-package.html.twig", "partials/plugins-details.html.twig", 72)->display(twig_array_merge($context, ["type" => "plugin"]));
        // line 73
        $this->loadTemplate("partials/modal-update-packages.html.twig", "partials/plugins-details.html.twig", 73)->display(twig_array_merge($context, ["type" => "plugin"]));
        // line 74
        $this->loadTemplate("partials/modal-remove-package.html.twig", "partials/plugins-details.html.twig", 74)->display(twig_array_merge($context, ["type" => "plugin", "package" => ($context["plugin"] ?? null)]));
        // line 75
        $this->loadTemplate("partials/modal-reinstall-package.html.twig", "partials/plugins-details.html.twig", 75)->display(twig_array_merge($context, ["type" => "plugin", "package" => ($context["plugin"] ?? null)]));
        // line 76
        $this->loadTemplate("partials/modal-changelog.html.twig", "partials/plugins-details.html.twig", 76)->display(twig_array_merge($context, ["package" => ($context["plugin"] ?? null)]));
    }

    public function getTemplateName()
    {
        return "partials/plugins-details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  214 => 76,  212 => 75,  210 => 74,  208 => 73,  206 => 72,  204 => 71,  201 => 70,  197 => 68,  189 => 66,  181 => 64,  177 => 62,  174 => 61,  171 => 60,  169 => 59,  166 => 58,  158 => 54,  152 => 52,  150 => 51,  146 => 49,  143 => 48,  132 => 42,  128 => 41,  122 => 38,  117 => 35,  114 => 34,  111 => 33,  108 => 32,  105 => 31,  103 => 30,  99 => 28,  97 => 27,  93 => 26,  89 => 24,  85 => 23,  80 => 22,  72 => 18,  69 => 17,  63 => 15,  60 => 14,  54 => 12,  52 => 11,  48 => 10,  41 => 6,  38 => 5,  36 => 4,  34 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "partials/plugins-details.html.twig", "C:\\xampp\\htdocs\\grav\\grav-skeleton-hadron+admin1\\user\\plugins\\admin\\themes\\grav\\templates\\partials\\plugins-details.html.twig");
    }
}
