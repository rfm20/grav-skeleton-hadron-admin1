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

/* partials/snipcart_navigation.html.twig */
class __TwigTemplate_6c7cd015e7314fabcefbb2fbb5fd04e23071ebc3459088d8d6d118fce2d4c2ab extends \Twig\Template
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
        echo "<li>
    ";
        // line 2
        $this->loadTemplate("partials/snipcart_cart.html.twig", "partials/snipcart_navigation.html.twig", 2)->display($context);
        // line 3
        echo "    <ul>
        <li><a href=\"#\" class=\"snipcart-customer-signin\">Account</a></li>
    </ul>
</li>
";
    }

    public function getTemplateName()
    {
        return "partials/snipcart_navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 3,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "partials/snipcart_navigation.html.twig", "C:\\xampp\\htdocs\\grav\\grav-skeleton-hadron+admin1\\user\\plugins\\snipcart\\templates\\partials\\snipcart_navigation.html.twig");
    }
}
