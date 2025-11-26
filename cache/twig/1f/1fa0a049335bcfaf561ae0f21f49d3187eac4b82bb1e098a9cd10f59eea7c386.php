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

/* partials/navigation.html.twig */
class __TwigTemplate_95af5395b2235552e0cf23d326ef498bdfe40660c01fe3195cc0ac8916061635 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'menu_items' => [$this, 'block_menu_items'],
            'snipcart_cart' => [$this, 'block_snipcart_cart'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 29
        echo "
<ul ";
        // line 30
        echo ((($context["tree"] ?? null)) ? ("class=\"tree\"") : (""));
        echo ">
\t";
        // line 31
        $context["macros"] = $this;
        // line 32
        echo "\t";
        echo $context["macros"]->getnav_loop(($context["pages"] ?? null), ($context["hide_home_menu_link"] ?? null), ($context["home_alias"] ?? null));
        echo "

    ";
        // line 34
        $this->displayBlock('menu_items', $context, $blocks);
        // line 48
        echo "
    ";
        // line 49
        $this->displayBlock('snipcart_cart', $context, $blocks);
        // line 52
        echo "</ul>
";
    }

    // line 34
    public function block_menu_items($context, array $blocks = [])
    {
        // line 35
        echo "\t\t";
        if ($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "custommenus.enabled")) {
            // line 36
            echo "\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "menu"));
            foreach ($context['_seq'] as $context["_key"] => $context["mitem"]) {
                // line 37
                echo "\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
                // line 38
                echo twig_escape_filter($this->env, $this->getAttribute($context["mitem"], "url", []), "html", null, true);
                echo "\" target=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["mitem"], "target", []), "html", null, true);
                echo "\">
\t\t\t\t\t\t";
                // line 39
                if ($this->getAttribute($context["mitem"], "icon", [])) {
                    // line 40
                    echo "\t\t\t\t\t\t\t<i class=\"fa fa-";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["mitem"], "icon", []), "html", null, true);
                    echo "\"></i>
\t\t\t\t\t\t";
                }
                // line 42
                echo "\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, $this->getAttribute($context["mitem"], "text", []), "html", null, true);
                echo "
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mitem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "\t\t";
        }
        // line 47
        echo "    ";
    }

    // line 49
    public function block_snipcart_cart($context, array $blocks = [])
    {
        // line 50
        echo "\t\t";
        $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = null;
        try {
            $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 =             $this->loadTemplate("partials/snipcart_navigation.html.twig", "partials/navigation.html.twig", 50);
        } catch (LoaderError $e) {
            // ignore missing template
        }
        if ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) {
            $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4->display($context);
        }
        // line 51
        echo "    ";
    }

    // line 1
    public function getnav_loop($__page__ = null, $__hide_home_menu_link__ = null, $__home_alias__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "page" => $__page__,
            "hide_home_menu_link" => $__hide_home_menu_link__,
            "home_alias" => $__home_alias__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 2
            echo "\t";
            $context["macros"] = $this;
            // line 3
            echo "\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "children", []), "visible", []));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 4
                echo "\t\t";
                $context["active_page"] = ((($this->getAttribute($context["p"], "active", []) || $this->getAttribute($context["p"], "activeChild", []))) ? ("active") : (""));
                // line 5
                echo "\t\t";
                if (($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "dropdown.enabled") && ($this->getAttribute($this->getAttribute($this->getAttribute($context["p"], "children", []), "visible", []), "count", []) > 0))) {
                    // line 6
                    echo "\t\t\t<li>
\t\t\t\t<a href=\"";
                    // line 7
                    echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "url", []), "html", null, true);
                    echo "\" class=\"";
                    echo twig_escape_filter($this->env, ($context["active_page"] ?? null), "html", null, true);
                    echo "\">
\t\t\t\t\t";
                    // line 8
                    if ($this->getAttribute($this->getAttribute($context["p"], "header", []), "icon", [])) {
                        // line 9
                        echo "\t\t\t\t\t\t<i class=\"fa fa-";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["p"], "header", []), "icon", []), "html", null, true);
                        echo "\"></i>
\t\t\t\t\t";
                    }
                    // line 11
                    echo "\t\t\t\t\t";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "menu", []), "html", null, true);
                    echo "
\t\t\t\t</a>
\t\t\t\t<ul>
\t\t\t\t\t";
                    // line 14
                    echo $context["macros"]->getnav_loop($context["p"]);
                    echo "
\t\t\t\t</ul>
\t\t\t</li>
\t\t";
                } else {
                    // line 18
                    echo "\t\t\t<li>
\t\t\t\t<a href=\"";
                    // line 19
                    echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "url", []), "html", null, true);
                    echo "\" class=\"";
                    echo twig_escape_filter($this->env, ($context["active_page"] ?? null), "html", null, true);
                    echo "\">
\t\t\t\t\t";
                    // line 20
                    if ($this->getAttribute($this->getAttribute($context["p"], "header", []), "icon", [])) {
                        // line 21
                        echo "\t\t\t\t\t\t<i class=\"fa fa-";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["p"], "header", []), "icon", []), "html", null, true);
                        echo "\"></i>
\t\t\t\t\t";
                    }
                    // line 23
                    echo "\t\t\t\t\t";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "menu", []), "html", null, true);
                    echo "
\t\t\t\t</a>
\t\t\t</li>
\t\t";
                }
                // line 27
                echo "\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
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
        return "partials/navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 27,  199 => 23,  193 => 21,  191 => 20,  185 => 19,  182 => 18,  175 => 14,  168 => 11,  162 => 9,  160 => 8,  154 => 7,  151 => 6,  148 => 5,  145 => 4,  140 => 3,  137 => 2,  123 => 1,  119 => 51,  108 => 50,  105 => 49,  101 => 47,  98 => 46,  87 => 42,  81 => 40,  79 => 39,  73 => 38,  70 => 37,  65 => 36,  62 => 35,  59 => 34,  54 => 52,  52 => 49,  49 => 48,  47 => 34,  41 => 32,  39 => 31,  35 => 30,  32 => 29,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "partials/navigation.html.twig", "C:\\xampp\\htdocs\\grav\\grav-skeleton-hadron+admin1\\user\\themes\\hadron\\templates\\partials\\navigation.html.twig");
    }
}
