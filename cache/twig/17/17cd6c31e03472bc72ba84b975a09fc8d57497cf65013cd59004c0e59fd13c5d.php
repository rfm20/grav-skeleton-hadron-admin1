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

/* modular.html.twig */
class __TwigTemplate_05aa82b1da479cdbf61e8d60affaecd576463e6098d2af486a4d17c07aa91c25 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'javascripts' => [$this, 'block_javascripts'],
            'bottom' => [$this, 'block_bottom'],
            'header_navigation' => [$this, 'block_header_navigation'],
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
        // line 3
        $context["show_onpage_menu"] = (($this->getAttribute(($context["header"] ?? null), "onpage_menu", []) == true) || (null === $this->getAttribute(($context["header"] ?? null), "onpage_menu", [])));
        // line 6
        $context["macro"] = $this;
        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "modular.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_javascripts($context, array $blocks = [])
    {
        // line 9
        echo "\t";
        if (($context["show_onpage_menu"] ?? null)) {
            // line 10
            echo "\t\t";
            $this->getAttribute(($context["assets"] ?? null), "add", [0 => "theme://js/singlepagenav.min.js"], "method");
            // line 11
            echo "\t";
        }
        // line 12
        echo "\t";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
    }

    // line 15
    public function block_bottom($context, array $blocks = [])
    {
        // line 16
        echo "\t";
        $this->displayParentBlock("bottom", $context, $blocks);
        echo "
\t";
        // line 17
        if (($context["show_onpage_menu"] ?? null)) {
            // line 18
            echo "\t\t<script>
\t\t\t// singlePageNav initialization & configuration
\t\t\t\$('ul.navigation').singlePageNav({
\t\t\t\toffset: \$('#header').outerHeight(),
\t\t\t\tfilter: ':not(.external)',
\t\t\t\tupdateHash: true,
\t\t\t\tcurrentClass: 'active'
\t\t\t});
\t\t</script>
\t";
        }
    }

    // line 30
    public function block_header_navigation($context, array $blocks = [])
    {
        // line 31
        echo "\t";
        if (($context["show_onpage_menu"] ?? null)) {
            // line 32
            echo "\t\t<ul class=\"navigation\">
\t\t\t";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["page"] ?? null), "collection", [], "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                // line 34
                echo "\t\t\t\t";
                $context["current_module"] = ((($this->getAttribute($context["module"], "active", []) || $this->getAttribute($context["module"], "activeChild", []))) ? ("active") : (""));
                // line 35
                echo "\t\t\t\t<li>
\t\t\t\t\t<a class=\"";
                // line 36
                echo twig_escape_filter($this->env, ($context["current_module"] ?? null), "html", null, true);
                echo "\" href=\"#";
                echo $context["macro"]->getpageLinkName($this->getAttribute($context["module"], "menu", []));
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["module"], "menu", []), "html", null, true);
                echo "</a>
\t\t\t\t</li>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["site"] ?? null), "menu", []));
            foreach ($context['_seq'] as $context["_key"] => $context["mitem"]) {
                // line 40
                echo "\t\t\t\t<li>
\t\t\t\t\t<a ";
                // line 41
                if ($this->getAttribute($context["mitem"], "class", [])) {
                    echo "class=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["mitem"], "class", []), "html", null, true);
                    echo "\"";
                }
                echo " href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["mitem"], "url", []), "html", null, true);
                echo "\">
\t\t\t\t\t\t";
                // line 42
                if ($this->getAttribute($context["mitem"], "icon", [])) {
                    // line 43
                    echo "\t\t\t\t\t\t\t<i class=\"fa fa-";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["mitem"], "icon", []), "html", null, true);
                    echo "\"></i>
\t\t\t\t\t\t";
                }
                // line 45
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
            // line 49
            echo "\t\t</ul>
\t";
        } else {
            // line 51
            echo "\t\t";
            $this->displayParentBlock("header_navigation", $context, $blocks);
            echo "
\t";
        }
    }

    // line 55
    public function block_hero($context, array $blocks = [])
    {
        // line 56
        echo "\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["page"] ?? null), "collection", [], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            if (($this->getAttribute($context["module"], "template", []) == "modular/hero")) {
                // line 57
                echo "\t\t<div id=\"";
                echo $context["macro"]->getpageLinkName($this->getAttribute($context["module"], "menu", []));
                echo "\"></div>
\t\t";
                // line 58
                echo $this->getAttribute($context["module"], "content", []);
                echo "
\t";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 62
    public function block_body($context, array $blocks = [])
    {
        // line 63
        echo "\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["page"] ?? null), "collection", [], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            if (($this->getAttribute($context["module"], "template", []) != "modular/hero")) {
                // line 64
                echo "\t\t<div id=\"";
                echo $context["macro"]->getpageLinkName($this->getAttribute($context["module"], "menu", []));
                echo "\"></div>
\t\t";
                // line 65
                echo $this->getAttribute($context["module"], "content", []);
                echo "
\t";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 4
    public function getpageLinkName($__text__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "text" => $__text__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            echo twig_escape_filter($this->env, twig_replace_filter(twig_lower_filter($this->env, ($context["text"] ?? null)), [" " => "_"]), "html", null, true);
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
        return "modular.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 4,  211 => 65,  206 => 64,  200 => 63,  197 => 62,  186 => 58,  181 => 57,  175 => 56,  172 => 55,  164 => 51,  160 => 49,  149 => 45,  143 => 43,  141 => 42,  131 => 41,  128 => 40,  123 => 39,  110 => 36,  107 => 35,  104 => 34,  100 => 33,  97 => 32,  94 => 31,  91 => 30,  77 => 18,  75 => 17,  70 => 16,  67 => 15,  60 => 12,  57 => 11,  54 => 10,  51 => 9,  48 => 8,  43 => 1,  41 => 6,  39 => 3,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "modular.html.twig", "C:\\xampp\\htdocs\\grav\\grav-skeleton-hadron+admin1\\user\\themes\\hadron\\templates\\modular.html.twig");
    }
}
