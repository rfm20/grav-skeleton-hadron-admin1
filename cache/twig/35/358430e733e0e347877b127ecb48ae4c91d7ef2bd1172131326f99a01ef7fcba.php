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

/* partials/ui-accordion.html.twig */
class __TwigTemplate_f069fe1c91b934348f483c30c1ed0b8704210ebc65e1071fcbea45b3c39bb962 extends \Twig\Template
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
        echo "<div class=\"accordion-wrapper\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["accordion_items"] ?? null));
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
        foreach ($context['_seq'] as $context["key"] => $context["item"]) {
            // line 3
            echo "        ";
            $context["checked"] = (((($context["open"] ?? null) != "none") && ($this->getAttribute($context["loop"], "index0", []) == ($context["open"] ?? null))) || ((($context["type"] ?? null) == "checkbox") && (($context["open"] ?? null) == "all")));
            // line 4
            echo "        <div>
            <input id=\"";
            // line 5
            echo twig_escape_filter($this->env, (($context["hash"] ?? null) . $context["key"]), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, ($context["hash"] ?? null), "html", null, true);
            echo "\" type=\"";
            echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
            echo "\" ";
            echo ((($context["checked"] ?? null)) ? ("checked=\"checked\"") : (""));
            echo " />
            <label for=\"";
            // line 6
            echo twig_escape_filter($this->env, (($context["hash"] ?? null) . $context["key"]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "getParameter", [0 => "title"], "method"), "html", null, true);
            echo "</label>
            <article>";
            // line 7
            echo $this->getAttribute($context["item"], "getContent", [], "method");
            echo "</article>
        </div>
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
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "partials/ui-accordion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 10,  72 => 7,  66 => 6,  56 => 5,  53 => 4,  50 => 3,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "partials/ui-accordion.html.twig", "C:\\xampp\\htdocs\\grav\\grav-skeleton-hadron+admin1\\user\\plugins\\shortcode-ui\\templates\\partials\\ui-accordion.html.twig");
    }
}
