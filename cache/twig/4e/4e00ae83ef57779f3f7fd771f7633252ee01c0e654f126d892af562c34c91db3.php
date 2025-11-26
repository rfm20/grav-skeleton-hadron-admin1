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

/* flex-objects/types/default/buttons/save.html.twig */
class __TwigTemplate_bcf9ff709b3855548a3b660ed5fbcf5b52114e9b4f03b69e514c31febeb29d25 extends \Twig\Template
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
        $context["task"] = (($context["task"]) ?? ("save"));
        // line 2
        echo "<button id=\"titlebar-button-save\" class=\"button\" type=\"submit\" name=\"task\" value=\"";
        echo twig_escape_filter($this->env, ($context["task"] ?? null), "html", null, true);
        echo "\" form=\"blueprints\" data-flex-safe-action>
    <i class=\"fa fa-check\"></i> ";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.SAVE"), "html", null, true);
        echo "
</button>
";
    }

    public function getTemplateName()
    {
        return "flex-objects/types/default/buttons/save.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "flex-objects/types/default/buttons/save.html.twig", "C:\\xampp\\htdocs\\grav\\grav-skeleton-hadron+admin1\\user\\plugins\\flex-objects\\admin\\templates\\flex-objects\\types\\default\\buttons\\save.html.twig");
    }
}
