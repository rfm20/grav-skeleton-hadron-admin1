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
class __TwigTemplate_d0aea3319fde4a2ccfa53ea12c48c95cd89057b80fac15ba6896c6a8a2a88887 extends \Twig\Template
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
        echo "<p>Das Hadron Skeleton kann als Vorlage für Websites genutzt werden. Es nutzt das Hadron Theme und kommt mit vorinstallierten Plugins und entsprechenden Konfigurationen. Auch die Demo-Inhalte sind bereits enthalten.</p>
<p>===</p>
<h1>Hadron Tutorial - Skeleton</h1>
<h2>Alles über das Hadron Skeleton für Grav</h2>
<p>Das Hadron Skeleton kann als Vorlage für Websites genutzt werden. Es nutzt das Hadron Theme und kommt mit vorinstallierten Plugins und entsprechenden Konfigurationen. Auch die Demo-Inhalte sind bereits enthalten.</p>";
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
