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

/* @Page:C:/xampp/htdocs/grav/grav-skeleton-hadron+admin1/user/pages/06.docs/02.skeleton */
class __TwigTemplate_f7b073107fc75bfa0a1c2ac925dc769719d18c2c1459e276b1a134368d9e2029 extends \Twig\Template
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
        echo "<body><p>The Hadron Skeleton can be used as a template for websites. It uses the Hadron theme and comes with pre-installed plugins and corresponding configurations. The demo content is also included.</p>
<p>===</p>
<h1>Hadron Tutorial - Skeleton</h1>
<h2 id=\"everything-about-the-hadr\"><a href=\"#everything-about-the-hadr\" class=\"toc-anchor before\" data-anchor-icon=\"#\" aria-label=\"Anchor\"></a>Everything about the Hadron Skeleton for Grav</h2>
<p>The Hadron Skeleton can be used as a template for websites. It uses the Hadron theme and comes with pre-installed plugins and corresponding configurations. The demo content is also included.</p></body>";
    }

    public function getTemplateName()
    {
        return "@Page:C:/xampp/htdocs/grav/grav-skeleton-hadron+admin1/user/pages/06.docs/02.skeleton";
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
        return new Source("", "@Page:C:/xampp/htdocs/grav/grav-skeleton-hadron+admin1/user/pages/06.docs/02.skeleton", "");
    }
}
