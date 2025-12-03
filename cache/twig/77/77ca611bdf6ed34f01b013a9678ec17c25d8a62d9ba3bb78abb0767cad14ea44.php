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

/* modular/alert.html.twig */
class __TwigTemplate_2c733cd498e7f1e40f31e319049e2abc8375f61ff7bc87e59f18b0db27d2c2b2 extends \Twig\Template
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
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "published", [])) {
            // line 2
            echo "    ";
            if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", [], "any", false, true), "alert_color", [], "any", true, true)) {
                // line 3
                echo "        ";
                $context["alert_color"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "alert_color", []);
                // line 4
                echo "    ";
            } else {
                // line 5
                echo "        ";
                $context["alert_color"] = "blue";
                // line 6
                echo "    ";
            }
            // line 7
            echo "
    <div class=\"notices ";
            // line 8
            echo twig_escape_filter($this->env, ($context["alert_color"] ?? null), "html", null, true);
            echo " list-blog-header\">
        <div class=\"list-blog-padding\">
            <div class=\"listbullet\">
                ";
            // line 11
            echo $this->getAttribute(($context["page"] ?? null), "content", []);
            echo "
            </div>
        </div>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "modular/alert.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 11,  50 => 8,  47 => 7,  44 => 6,  41 => 5,  38 => 4,  35 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "modular/alert.html.twig", "C:\\xampp\\htdocs\\grav\\grav-skeleton-hadron+admin1\\user\\themes\\hadron\\templates\\modular\\alert.html.twig");
    }
}
