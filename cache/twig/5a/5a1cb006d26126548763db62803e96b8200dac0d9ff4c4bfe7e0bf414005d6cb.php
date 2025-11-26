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

/* @Page:C:/xampp/htdocs/grav/grav-skeleton-hadron+admin1/user/pages/06.docs/02.skeleton/01.einleitung */
class __TwigTemplate_caaa92331f3a7751e43a68e8a01daba0cadf95fa9cedf49ee1da9684a33863b1 extends \Twig\Template
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
<p>Diese Seite enthält eine Einführung in das Hadron Skeleton und zeigt die Möglichkeiten und Funktionen auf.</p>
</div>
<p>===</p>
<h2>Einleitung</h2>
<p>Das Hadron Skeleton ist eine fertige Vorlage für eine Website, die direkt bearbeitet und veröffentlicht werden kann. Es enthält alle notwendigen Seiten, Konfigurationen, Plugins und Themes, um eine Website mit Grav zu erstellen. Das Hadron Skeleton basiert auf dem Hadron Theme und bietet erweiterte Funktionen und Konfigurationen.</p>
<h2>Hadron</h2>
<p>Hadron gibt es in 2 Varianten: als Theme und als Skeleton. Hierbei beinhaltet das Skeleton das Theme, sowie weitere Funktionen und Konfigurationen. Lerne mehr über das <a href=\"/grav/grav-skeleton-hadron+admin1/hadron/theme/einleitung\">Hadron Theme</a>.</p>
<h2>Funktionen</h2>
<p>Das Hadron Skeleton enthält folgende Funktionen:</p>
<h3>fertig nutzbare Vorlage</h3>
<p>Das Hadron Skeleton ist eine fertige Vorlage für eine Website, die direkt bearbeitet und veröffentlicht werden kann. Dies ermöglicht es, schnell und einfach eine Website mit Grav zu erstellen, ohne von Grund auf neu beginnen zu müssen.</p>
<h3>Standardgruppen für optimale Benutzer Berechtigungen</h3>
<p>Das Hadron Skeleton enthält Standardgruppen für optimale Benutzer Berechtigungen. Damit können Benutzer mit unterschiedlichen Berechtigungen erstellt werden, um die Sicherheit der Website zu gewährleisten.</p>
<h3>Standardseiten</h3>
<p>In der Vorlage sind verschiedene Beispiel-Seiten enthalten, die als Ausgangspunkt für die Erstellung einer Website dienen. Dazu gehören normale Seiten, Modulare, Blogs, Kontaktseite und mehr.<br />
Diese können als Vorlage für eigene Seiten genutzt werden oder als Inspiration/ Anhaltspunkt dienen.</p>
<h3>Vorinstallierte Plugins</h3>
<p>Das Hadron Skeleton enthält eine Auswahl an vorinstallierten Plugins, die die Funktionalität der Website erweitern. Dazu gehören Plugins für SEO, Shortcode, Medien und weitere Komponenten &amp; Funktionen.</p>
<h3>Standardkonfiguration für SendGrid Email</h3>
<p>Nebst der E-Mail Konfiguration gibt es auch eine Standardkonfiguration für SendGrid E-Mail. Damit können E-Mails über SendGrid versendet werden. Diese Funktion unterstützt den Doppler Secrets Manager.</p>
<h3>Standardkonfiguration für Doppler Secrets Manager</h3>
<p>Eine zusätzliche Funktion dieses Skeletons ist die Standardkonfiguration für den Doppler Secrets Manager. Damit können geheime Informationen wie API-Keys, Passwörter und andere sensible Daten sicher gespeichert und abgerufen werden.<br />
Für diese Funktion ist unser <a href=\"https://github.com/Crabston/grav\">modifizierter Grav Core</a> erforderlich, damit diese von Doppler automatisch geholt werden.</p>
<h2>weitere Schritte</h2>
<p>Um das Hadron Skeleton zu installieren, folge der Anleitung <a href=\"/grav/grav-skeleton-hadron+admin1/hadron/skeleton/installation\">Hadron Skeleton Installation</a>.</p>";
    }

    public function getTemplateName()
    {
        return "@Page:C:/xampp/htdocs/grav/grav-skeleton-hadron+admin1/user/pages/06.docs/02.skeleton/01.einleitung";
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
        return new Source("", "@Page:C:/xampp/htdocs/grav/grav-skeleton-hadron+admin1/user/pages/06.docs/02.skeleton/01.einleitung", "");
    }
}
