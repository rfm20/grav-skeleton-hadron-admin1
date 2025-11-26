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

/* forms/fields/filepicker/filepicker.html.twig */
class __TwigTemplate_36b4c4729069b22035e1343303bcbf2392a739a28bd7e388e1f2992dda600038 extends \Twig\Template
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
        $this->loadTemplate("forms/fields/filepicker/filepicker.html.twig", "forms/fields/filepicker/filepicker.html.twig", 1, "1230199269")->display($context);
    }

    public function getTemplateName()
    {
        return "forms/fields/filepicker/filepicker.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "forms/fields/filepicker/filepicker.html.twig", "C:\\xampp\\htdocs\\grav\\grav-skeleton-hadron+admin1\\user\\plugins\\admin\\themes\\grav\\templates\\forms\\fields\\filepicker\\filepicker.html.twig");
    }
}


/* forms/fields/filepicker/filepicker.html.twig */
class __TwigTemplate_36b4c4729069b22035e1343303bcbf2392a739a28bd7e388e1f2992dda600038___1230199269 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'input' => [$this, 'block_input'],
            'global_attributes' => [$this, 'block_global_attributes'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "forms/fields/select/select.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("forms/fields/select/select.html.twig", "forms/fields/filepicker/filepicker.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_input($context, array $blocks = [])
    {
        // line 4
        echo "        ";
        $context["input_value"] = ((twig_test_iterable(($context["value"] ?? null))) ? (twig_join_filter(($context["value"] ?? null), ",")) : ($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->stringFilter(($context["value"] ?? null))));
        // line 5
        echo "        ";
        if (( !$this->getAttribute(($context["field"] ?? null), "options", []) && ($context["value"] ?? null))) {
            // line 6
            echo "            ";
            if (twig_test_iterable(($context["value"] ?? null))) {
                // line 7
                echo "                ";
                $context["options"] = [];
                // line 8
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["value"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
                    // line 9
                    echo "                    ";
                    $context["options"] = twig_array_merge(($context["options"] ?? null), [$context["val"] => $context["val"]]);
                    // line 10
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['val'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 11
                echo "            ";
            } else {
                // line 12
                echo "                ";
                $context["options"] = [($context["value"] ?? null) => ($context["value"] ?? null)];
                // line 13
                echo "            ";
            }
            // line 14
            echo "            ";
            $context["field"] = twig_array_merge(($context["field"] ?? null), ["options" => ($context["options"] ?? null)]);
            // line 15
            echo "        ";
        }
        // line 16
        echo "        ";
        $this->displayParentBlock("input", $context, $blocks);
        echo "
    ";
    }

    // line 19
    public function block_global_attributes($context, array $blocks = [])
    {
        // line 20
        echo "        data-grav-filepicker
        data-name=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "name", []), "html", null, true);
        echo "\"
        ";
        // line 22
        if ($this->getAttribute(($context["field"] ?? null), "preview_images", [])) {
            echo "data-preview-images";
        }
        // line 23
        echo "        ";
        if ($this->getAttribute(($context["field"] ?? null), "on_demand", [])) {
            echo "data-ondemand";
        }
        // line 24
        echo "        data-value=\"";
        echo twig_escape_filter($this->env, ($context["input_value"] ?? null), "html", null, true);
        echo "\"
        ";
        // line 25
        $this->displayParentBlock("global_attributes", $context, $blocks);
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "forms/fields/filepicker/filepicker.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 25,  153 => 24,  148 => 23,  144 => 22,  140 => 21,  137 => 20,  134 => 19,  127 => 16,  124 => 15,  121 => 14,  118 => 13,  115 => 12,  112 => 11,  106 => 10,  103 => 9,  98 => 8,  95 => 7,  92 => 6,  89 => 5,  86 => 4,  83 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "forms/fields/filepicker/filepicker.html.twig", "C:\\xampp\\htdocs\\grav\\grav-skeleton-hadron+admin1\\user\\plugins\\admin\\themes\\grav\\templates\\forms\\fields\\filepicker\\filepicker.html.twig");
    }
}
