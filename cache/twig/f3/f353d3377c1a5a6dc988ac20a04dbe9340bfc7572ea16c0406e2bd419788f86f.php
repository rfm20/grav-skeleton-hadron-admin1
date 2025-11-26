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

/* custompagetypes.html.twig */
class __TwigTemplate_b45192e858400d93a4b7677b3b36dde3922e9e06913a348011f92f2d536a2fe8 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("partials/base.html.twig", "custompagetypes.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        // line 4
        echo "
\t<div class=\"columns\">

\t\t<div id=\"section\" class=\"column col-12\">

\t\t\t";
        // line 9
        if (( !$this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "hide_page_title", []) &&  !$this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", []), "param", [0 => "hidepagetitle"], "method"))) {
            // line 10
            echo "\t\t\t\t<h3>";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "title", []), "html", null, true);
            echo "</h3>
\t\t\t";
        }
        // line 12
        echo "
\t\t\t";
        // line 13
        echo $this->getAttribute(($context["page"] ?? null), "content", []);
        echo "

\t\t\t";
        // line 15
        $context["collection"] = $this->getAttribute(($context["page"] ?? null), "collection", [], "method");
        // line 16
        echo "\t\t\t";
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "display_template", [])) {
            // line 17
            echo "\t\t\t\t";
            $context["templatename"] = ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "display_template", []) . ".html.twig");
            // line 18
            echo "\t\t\t";
        }
        // line 19
        echo "\t\t\t";
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
            // line 20
            echo "\t\t\t\t";
            if ( !($context["templatename"] ?? null)) {
                // line 21
                echo "\t\t\t\t\t";
                $context["templatename"] = ($this->getAttribute($context["child"], "template", []) . ".html.twig");
                // line 22
                echo "\t\t\t\t";
            }
            // line 23
            echo "\t\t\t\t<p>
\t\t\t\t\t";
            // line 24
            $this->loadTemplate(($context["templatename"] ?? null), "custompagetypes.html.twig", 24)->display(twig_array_merge($context, ["page" =>             // line 25
$context["child"], "displaypagetitle" => $this->getAttribute($this->getAttribute(            // line 26
($context["page"] ?? null), "header", []), "display_child_page_titles", []), "displaycontenttitle" => $this->getAttribute($this->getAttribute(            // line 27
($context["page"] ?? null), "header", []), "display_content_titles", []), "displaycontentlinks" => $this->getAttribute($this->getAttribute(            // line 28
($context["page"] ?? null), "header", []), "display_content_links", [])]));
            // line 30
            echo "\t\t\t\t</p>
\t\t\t";
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
        // line 32
        echo "
\t\t</div>

\t</div>

";
    }

    public function getTemplateName()
    {
        return "custompagetypes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 32,  112 => 30,  110 => 28,  109 => 27,  108 => 26,  107 => 25,  106 => 24,  103 => 23,  100 => 22,  97 => 21,  94 => 20,  76 => 19,  73 => 18,  70 => 17,  67 => 16,  65 => 15,  60 => 13,  57 => 12,  51 => 10,  49 => 9,  42 => 4,  39 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "custompagetypes.html.twig", "C:\\xampp\\htdocs\\grav\\grav-skeleton-hadron+admin1\\user\\themes\\hadron\\templates\\custompagetypes.html.twig");
    }
}
