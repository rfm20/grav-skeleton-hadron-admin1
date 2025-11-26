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

/* modular/default.html.twig */
class __TwigTemplate_dca93ffdb8871fb5cc71b51385b99125a3149ec6c84b699a52c30fbce8e3d8be extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'modular_content' => [$this, 'block_modular_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "layouts/modular.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 2
        $context["template_name"] = "modular-default";
        // line 4
        $context["image"] = twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", []));
        // line 1
        $this->parent = $this->loadTemplate("layouts/modular.html.twig", "modular/default.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_modular_content($context, array $blocks = [])
    {
        // line 7
        echo "    <div class=\"columns\">
        <div class=\"column col-12 col-md-12\">
            ";
        // line 9
        echo ($context["content"] ?? null);
        echo "
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "modular/default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 9,  47 => 7,  44 => 6,  39 => 1,  37 => 4,  35 => 2,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "modular/default.html.twig", "C:\\xampp\\htdocs\\grav\\grav-skeleton-hadron+admin1\\user\\themes\\hadron\\templates\\modular\\default.html.twig");
    }
}
