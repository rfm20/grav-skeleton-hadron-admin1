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

/* @Page:C:/xampp/htdocs/grav/grav-skeleton-hadron+admin1/user/pages/06.docs/01.theme/01.einleitung */
class __TwigTemplate_57ad1fa7b454a70a2f1948ed5f28769cc9417018763ae4494c9da3bb25cd0c85 extends \Twig\Template
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
        echo "<div class=\"notices blue\">
<p>Diese Seite beinhaltet eine Einführung in das Hadron Theme und beschreibt die wichtigsten Funktionen und Möglichkeiten.</p>
</div>
<p>===</p>
<h2>Einleitung</h2>
<p>Das Hadron Theme ist ein modernes <a href=\"https://getgrav.org\">Grav</a> Theme, welches auf <a href=\"https://github.com/getgrav/grav-theme-quark\">Quark</a> basiert. Als Child-Theme von Quark enthält es erweiterte Funktionen als das ursprüngliche Quark Theme. Zudem bietet es erweiterte Gestaltungsoptionen.</p>
<h2>Hadron</h2>
<p>Hadron gibt es in 2 Varianten: als Theme und als Skeleton. Hierbei beinhaltet das Skeleton das Theme, sowie weitere Funktionen und Konfigurationen. Lerne mehr über das <a href=\"/grav/grav-skeleton-hadron+admin1/hadron/skeleton/einleitung\">Hadron Skeleton</a>.</p>
<h2>Funktionen</h2>
<p>Das Hadron Theme bietet folgende Funktionen:</p>
<h3>deutsches Sprachpaket</h3>
<p>Das Hadron Theme beinhaltet ein deutsches Sprachpaket, welches die Benutzeroberfläche und die Konfigurationen ins Deutsche übersetzt. Die Englische Sprache ist jedoch weiterhin verfügbar.</p>
<h3>responsive Tabellen</h3>
<p>Tabellen können automatisch für mobile Geräte optimiert werden. Dies bedeutet, dass Tabellen auf mobilen Geräten anders dargestellt werden, um die Lesbarkeit zu verbessern. Lerne mehr über mobilfreundliche Tabellen auf <a href=\"https://grav.demo.crabston.dev/komponenten#mobilfreundliche-tabellen\">grav.demo.crabston.dev/komponenten</a>.</p>
<h3>Navigation mit Drop-down Menu</h3>
<p>Die Navigation kann mit einem Drop-down Menu erweitert werden. Dies erlaubt, dass nicht nur die Hauptseiten, sondern auch die Unterseiten in der Navigation angezeigt werden:
<img src=\"/grav/grav-skeleton-hadron admin1/docs/theme/einleitung/dropdown-navigation.webp\" alt=\"Drop-down Menu\" /></p>
<h3>angepinnte Beiträge in Blogs</h3>
<p>Beiträge können angepinnt werden, um sie hervorzuheben. Dies ist besonders nützlich, um wichtige Beiträge oder Ankündigungen zu markieren.</p>
<h3>eingebauter Support für Embed.ly</h3>
<p>Embed.ly ist ein Dienst, der es ermöglicht, Inhalte von anderen Websites einzubetten. Das Hadron Theme unterstützt Embed.ly, um Inhalte von anderen Websites einzubetten.</p>
<h3>eingebauter Support für H5P</h3>
<p>H5P ist ein Framework, um interaktive Inhalte zu erstellen. Das Hadron Theme unterstützt H5P, um interaktive Inhalte in Grav einzubetten.</p>
<h3>erweiterte Theme Optionen</h3>
<p>Das Hadron Theme bietet erweiterte Theme Optionen, um das Aussehen und Verhalten der Seite zu konfigurieren.</p>
<h3>weitere Verbesserungen</h3>
<p>Das Hadron Theme enthält weitere Verbesserungen, um die Benutzererfahrung zu verbessern und das Theme an die Bedürfnisse der Benutzer anzupassen.</p>
<h2>weitere Schritte</h2>
<p>Um das Hadron Theme zu installieren, folge der Anleitung <a href=\"/grav/grav-skeleton-hadron+admin1/hadron/theme/installation\">Hadron Theme Installation</a>.</p>";
    }

    public function getTemplateName()
    {
        return "@Page:C:/xampp/htdocs/grav/grav-skeleton-hadron+admin1/user/pages/06.docs/01.theme/01.einleitung";
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
        return new Source("", "@Page:C:/xampp/htdocs/grav/grav-skeleton-hadron+admin1/user/pages/06.docs/01.theme/01.einleitung", "");
    }
}
