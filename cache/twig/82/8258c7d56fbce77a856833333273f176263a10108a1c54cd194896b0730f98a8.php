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

/* forms/fields/radio/radio.html.twig */
class __TwigTemplate_a2d7ce08fe9ba300af8e3297d423fad22827d217c66fd1dc96e5ce81c81533df extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'input' => [$this, 'block_input'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "forms/field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 3
        $context["originalValue"] = ($context["value"] ?? null);
        // line 4
        $context["value"] = (((null === ($context["value"] ?? null))) ? ($this->getAttribute(($context["field"] ?? null), "default", [])) : (($context["value"] ?? null)));
        // line 1
        $this->parent = $this->loadTemplate("forms/field.html.twig", "forms/fields/radio/radio.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_input($context, array $blocks = [])
    {
        // line 7
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["field"] ?? null), "options", []));
        foreach ($context['_seq'] as $context["key"] => $context["text"]) {
            // line 8
            echo "        ";
            $context["id"] = (((($this->getAttribute(($context["field"] ?? null), "id", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["field"] ?? null), "id", []), $this->getAttribute(($context["field"] ?? null), "name", []))) : ($this->getAttribute(($context["field"] ?? null), "name", []))) . "-") . $context["key"]);
            // line 9
            echo "
        <div class=\"radio ";
            // line 10
            echo twig_escape_filter($this->env, ($context["form_field_wrapper_classes"] ?? null), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "wrapper_classes", []), "html", null, true);
            echo "\">
            <label class=\"";
            // line 11
            echo twig_escape_filter($this->env, ($context["form_field_radio_classes"] ?? null), "html", null, true);
            echo "\" for=\"";
            echo twig_escape_filter($this->env, ($context["id"] ?? null));
            echo "\">
            <input type=\"radio\"
                   value=\"";
            // line 13
            echo twig_escape_filter($this->env, $context["key"]);
            echo "\"
                   id=\"";
            // line 14
            echo twig_escape_filter($this->env, ($context["id"] ?? null));
            echo "\"
                   name=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->fieldNameFilter((($context["scope"] ?? null) . $this->getAttribute(($context["field"] ?? null), "name", []))), "html", null, true);
            echo "\"
                   ";
            // line 16
            if ($this->getAttribute(($context["field"] ?? null), "classes", [], "any", true, true)) {
                echo "class=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "classes", []), "html", null, true);
                echo "\" ";
            }
            // line 17
            echo "                   ";
            if (($context["key"] == ($context["value"] ?? null))) {
                echo "checked=\"checked\" ";
            }
            // line 18
            echo "                   ";
            if (($this->getAttribute(($context["field"] ?? null), "disabled", []) || ($context["isDisabledToggleable"] ?? null))) {
                echo "disabled=\"disabled\"";
            }
            // line 19
            echo "                   ";
            if (($context["required"] ?? null)) {
                echo "required=\"required\"";
            }
            // line 20
            echo "            />
            <i class=\"form-icon\"></i>
            ";
            // line 22
            echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, $context["text"]);
            echo "
            </label>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['text'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "forms/fields/radio/radio.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 22,  104 => 20,  99 => 19,  94 => 18,  89 => 17,  83 => 16,  79 => 15,  75 => 14,  71 => 13,  64 => 11,  58 => 10,  55 => 9,  52 => 8,  47 => 7,  44 => 6,  39 => 1,  37 => 4,  35 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "forms/fields/radio/radio.html.twig", "C:\\xampp\\htdocs\\grav\\grav-skeleton-hadron+admin1\\user\\themes\\quark\\templates\\forms\\fields\\radio\\radio.html.twig");
    }
}
