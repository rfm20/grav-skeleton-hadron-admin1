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

/* components/page-toc.html.twig */
class __TwigTemplate_c6859d64ddac922430502feb993b7ce8134abb089336c95960decc588d58200d extends \Twig\Template
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
        echo "
";
        // line 16
        echo "
";
        // line 17
        if ((($context["active"] ?? null) || call_user_func_array($this->env->getFunction('toc_config_var')->getCallable(), ["active"]))) {
            // line 18
            echo "<div class=\"page-toc\">
    ";
            // line 19
            $context["table_of_contents"] = call_user_func_array($this->env->getFunction('toc_items')->getCallable(), [$this->getAttribute(($context["page"] ?? null), "content", [])]);
            // line 20
            echo "    ";
            if ( !twig_test_empty(($context["table_of_contents"] ?? null))) {
                // line 21
                echo "        <h4>";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_PAGE_TOC.TABLE_OF_CONTENTS"), "html", null, true);
                echo "</h4>
        <ul>
            ";
                // line 23
                echo $this->getAttribute($this, "toc_loop", [0 => $this->getAttribute(($context["table_of_contents"] ?? null), "children", [])], "method");
                echo "
        </ul>
    ";
            }
            // line 26
            echo "</div>
";
        }
    }

    // line 2
    public function gettoc_loop($__items__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "items" => $__items__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 3
            echo "
    ";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 5
                echo "        ";
                $context["class"] = (($this->getAttribute($context["loop"], "first", [])) ? ("first") : ((($this->getAttribute($context["loop"], "last", [])) ? ("last") : (null))));
                // line 6
                echo "        <li ";
                if (($context["class"] ?? null)) {
                    echo "class=\"";
                    echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
                    echo "\"";
                }
                echo ">
            <a href=\"";
                // line 7
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "uri", []), "html", null, true);
                echo "\">";
                echo $this->getAttribute($context["item"], "label", []);
                echo "</a>
            ";
                // line 8
                if ((twig_length_filter($this->env, $this->getAttribute($context["item"], "children", [])) > 0)) {
                    // line 9
                    echo "                <ul>
                    ";
                    // line 10
                    echo $this->getAttribute($this, "toc_loop", [0 => $this->getAttribute($context["item"], "children", [])], "method");
                    echo "
                </ul>
            ";
                }
                // line 13
                echo "        </li>
    ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
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
        return "components/page-toc.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 13,  119 => 10,  116 => 9,  114 => 8,  108 => 7,  99 => 6,  96 => 5,  79 => 4,  76 => 3,  64 => 2,  58 => 26,  52 => 23,  46 => 21,  43 => 20,  41 => 19,  38 => 18,  36 => 17,  33 => 16,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "components/page-toc.html.twig", "C:\\xampp\\htdocs\\grav\\grav-skeleton-hadron+admin1\\user\\plugins\\page-toc\\templates\\components\\page-toc.html.twig");
    }
}
