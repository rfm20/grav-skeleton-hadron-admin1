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

/* @Page:C:/xampp/htdocs/grav/grav-skeleton-hadron+admin1/user/pages/06.docs/01.theme */
class __TwigTemplate_1e51e8194213b7a1ceabfd2f6603133f010b9050945bea91d1b9df4f107d3b96 extends \Twig\Template
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
        echo "<p>Hadron ist ein modernes Grav Theme, welches auf Quark basiert. Als Child-Theme von Quark enthält es erweiterte Funktionen als das ursprüngliche Quark Theme. Zudem bietet es erweiterte Gestaltungsoptionen.</p>
<p>===</p>
<h1>Hadron Tutorial - Theme</h1>
<h2>Alles über das Hadron Theme für Grav</h2>
<p>Hadron ist ein modernes Grav Theme, welches auf Quark basiert. Als Child-Theme von Quark enthält es erweiterte Funktionen als das ursprüngliche Quark Theme. Zudem bietet es erweiterte Gestaltungsoptionen.</p>";
    }

    public function getTemplateName()
    {
        return "@Page:C:/xampp/htdocs/grav/grav-skeleton-hadron+admin1/user/pages/06.docs/01.theme";
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
        return new Source("", "@Page:C:/xampp/htdocs/grav/grav-skeleton-hadron+admin1/user/pages/06.docs/01.theme", "");
    }
}
