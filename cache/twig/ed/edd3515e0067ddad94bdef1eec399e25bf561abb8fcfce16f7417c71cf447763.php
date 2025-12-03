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

/* partials/langauge-switcher.html.twig */
class __TwigTemplate_d7cd9180d71c501d5489df09e844c4d15532ce354a2e3db8ce23cd9bd8e44487 extends \Twig\Template
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
        $context["enabled"] = (($context["enabled"]) ?? ($this->getAttribute(($context["config"] ?? null), "get", [0 => "theme.langswitcher.enable", 1 => false], "method")));
        // line 2
        $context["display"] = (($context["display"]) ?? ($this->getAttribute(($context["config"] ?? null), "get", [0 => "theme.langswitcher.display", 1 => "dropdown"], "method")));
        // line 3
        $context["format"] = (($context["format"]) ?? ($this->getAttribute(($context["config"] ?? null), "get", [0 => "theme.langswitcher.format", 1 => "combined"], "method")));
        // line 4
        echo "
";
        // line 8
        echo "
";
        // line 12
        echo "
";
        // line 43
        echo "
";
        // line 44
        if ((($context["enabled"] ?? null) &&  !($context["mobile"] ?? null))) {
            // line 45
            echo "\t<ul>
\t\t";
            // line 46
            $context["macros"] = $this;
            // line 47
            echo "\t\t";
            echo $context["macros"]->getlang_switcher(($context["page"] ?? null), ($context["display"] ?? null), ($context["format"] ?? null));
            echo "
\t</ul>
";
        }
        // line 50
        echo "
";
        // line 51
        if ((($context["enabled"] ?? null) && ($context["mobile"] ?? null))) {
            // line 52
            echo "\t<ul ";
            echo ((($context["tree"] ?? null)) ? ("class=\"tree\"") : (""));
            echo ">
\t\t";
            // line 53
            $context["macros"] = $this;
            // line 54
            echo "\t\t";
            echo $context["macros"]->getlang_switcher(($context["page"] ?? null), "mobile", ($context["format"] ?? null));
            echo "
\t</ul>
";
        }
    }

    // line 5
    public function getlang_name($__language__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "language" => $__language__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 6
            echo "\t";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translateLanguage("LANGUAGE.NAME", [0 => ($context["language"] ?? null)]), "html", null, true);
            echo "
";
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 9
    public function getlang_icon($__language__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "language" => $__language__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 10
            echo "\t";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translateLanguage("LANGUAGE.ICON", [0 => ($context["language"] ?? null)]), "html", null, true);
            echo "
";
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 13
    public function getlang_switcher($__page__ = null, $__display__ = null, $__format__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "page" => $__page__,
            "display" => $__display__,
            "format" => $__format__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 14
            echo "\t";
            $context["macros"] = $this;
            // line 15
            echo "
\t";
            // line 16
            if ((($context["display"] ?? null) == "dropdown")) {
                // line 17
                echo "\t\t<li><a href=\"#\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translateLanguage("LANGUAGE.LANGUAGE"), "html", null, true);
                echo "</a><ul>
\t";
            }
            // line 19
            echo "
\t";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "languages", []));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 21
                echo "\t\t";
                $context["page_url"] = (((($context["base_url"] ?? null) . "/") . $context["language"]) . twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "route", [])));
                // line 22
                echo "\t\t";
                $context["active_page"] = ((($this->getAttribute(($context["page"] ?? null), "language", []) == $context["language"])) ? ("active") : (""));
                // line 23
                echo "
\t\t<li>
\t\t\t<a href=\"";
                // line 25
                echo twig_escape_filter($this->env, ((($context["page_url"] ?? null) . $this->getAttribute(($context["uri"] ?? null), "params", [])) . (((twig_length_filter($this->env, $this->getAttribute(($context["uri"] ?? null), "query", [])) > 1)) ? (("?" . $this->getAttribute(($context["uri"] ?? null), "query", []))) : (""))), "html", null, true);
                echo "\" class=\"";
                echo twig_escape_filter($this->env, ($context["active_page"] ?? null), "html", null, true);
                echo "\">
\t\t\t\t";
                // line 26
                if ((($context["format"] ?? null) == "long")) {
                    // line 27
                    echo "\t\t\t\t\t";
                    echo $context["macros"]->getlang_name($context["language"]);
                    echo "
\t\t\t\t";
                } elseif ((                // line 28
($context["format"] ?? null) == "short")) {
                    // line 29
                    echo "\t\t\t\t\t";
                    echo twig_escape_filter($this->env, twig_upper_filter($this->env, $context["language"]), "html", null, true);
                    echo "
\t\t\t\t";
                } elseif ((                // line 30
($context["format"] ?? null) == "icon")) {
                    // line 31
                    echo "\t\t\t\t\t";
                    echo $context["macros"]->getlang_icon($context["language"]);
                    echo "
\t\t\t\t";
                } elseif ((                // line 32
($context["format"] ?? null) == "combined")) {
                    // line 33
                    echo "\t\t\t\t\t";
                    echo $context["macros"]->getlang_icon($context["language"]);
                    echo " ";
                    echo $context["macros"]->getlang_name($context["language"]);
                    echo "
\t\t\t\t";
                }
                // line 35
                echo "\t\t\t</a>
\t\t</li>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "
\t";
            // line 39
            if ((($context["display"] ?? null) == "dropdown")) {
                // line 40
                echo "\t\t</ul></li>
\t";
            }
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "partials/langauge-switcher.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  238 => 40,  236 => 39,  233 => 38,  225 => 35,  217 => 33,  215 => 32,  210 => 31,  208 => 30,  203 => 29,  201 => 28,  196 => 27,  194 => 26,  188 => 25,  184 => 23,  181 => 22,  178 => 21,  174 => 20,  171 => 19,  165 => 17,  163 => 16,  160 => 15,  157 => 14,  143 => 13,  125 => 10,  113 => 9,  95 => 6,  83 => 5,  74 => 54,  72 => 53,  67 => 52,  65 => 51,  62 => 50,  55 => 47,  53 => 46,  50 => 45,  48 => 44,  45 => 43,  42 => 12,  39 => 8,  36 => 4,  34 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "partials/langauge-switcher.html.twig", "C:\\xampp\\htdocs\\grav\\grav-skeleton-hadron+admin1\\user\\themes\\hadron\\templates\\partials\\langauge-switcher.html.twig");
    }
}
