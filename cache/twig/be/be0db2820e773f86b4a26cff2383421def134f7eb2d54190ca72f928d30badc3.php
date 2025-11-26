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

/* @Page:C:/xampp/htdocs/grav/grav-skeleton-hadron+admin1/user/pages/06.docs/00.intro */
class __TwigTemplate_87dbbd4ca2c609e2e8b1198dac55faf2426840452cbf2e1a3e73ea73159fdf5a extends \Twig\Template
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
<p>Diese Seite beinhaltet eine technische Einführung zu Hadron und beschreibt die wichtigsten Funktionen und Möglichkeiten aus technischer Sicht.</p>
</div>
<p>===</p>
<h2>Was ist Hadron?</h2>
<p>Hadron ist ein modernes <a href=\"https://getgrav.org\">Grav</a> Theme, welches auf <a href=\"https://github.com/getgrav/grav-theme-quark\">Quark</a> basiert. Als Child-Theme von Quark enthält es erweiterte Funktionen als das ursprüngliche Quark Theme. Zudem bietet es weitere Gestaltungsoptionen und andere Verbesserungen.</p>
<h2>Was ist der Unterschied zwischen dem Hadron Skeleton &amp; Theme?</h2>
<p>Hadron gibt es in 2 Varianten: als Theme und als Skeleton. Hierbei beinhaltet das Skeleton das Theme.</p>
<p>Das Theme ist ein modularer bestandteil von Grav. Ähnlich wie bei Plugins können Themes nach Belieben installiert werden. Je nach Theme gibt es neben dem Aussehen verschiedene Typen von Seiten, die genutzt werden können, sowie andere Optionen um das Verhalten der Seite zu bearbeiten.</p>
<p>Das Skeleton ist ein grösserer Bestandteil von Grav. Genau gesagt enthält ein Skeleton den gesamten <code>/user</code> Ordner. Dies sind unter anderem Seiten, Konfigurationen, Plugins, Themes und ggf. auch Accounts und weitere Daten.</p>
<p>Somit kann das Skeleton als fertige Vorlage für eine Website genutzt werden, welches direkt bearbeitet und veröffentlicht werden kann. Das Theme benötigt jedoch eine vorhandene Seite und eigene Konfigurationen, um genutzt zu werden.</p>
<h2>Soll ich das Skeleton oder das Theme nutzen?</h2>
<p>Je nach Use-Case ist es besser, das Skeleton oder das Theme zu nutzen.</p>
<h3>Warum das Skeleton?</h3>
<p>Das Hadron Skeleton solltest du in folgenden Fällen nutzen:</p>
<ul>
<li>du möchtest eine fertige Seite, die du bearbeiten kannst, inkl. Seiten, Konfiguration &amp; Themes/ Plugins</li>
<li>du willst eine neue Seite mit Grav erstellen</li>
<li>du suchst eine einfache Möglichkeit, mit Grav starten zu können</li>
<li>du möchtest Hadron live ausprobieren (Demo)</li>
</ul>
<h3>Warum das Theme?</h3>
<p>In folgenden Fällen gibt es mehr Sinn, anstelle des Skeletons das Theme zu nutzen:</p>
<ul>
<li>du hast bereits eine Seite mit Grav erstellt und suchst ein (anderes) Theme</li>
<li>du nutzt das Quark Theme, möchtest jedoch weitere Funktionen, die in Hadron vorhanden sind</li>
<li>du möchtest keine Standardvorlage nutzten, sondern alles von Grund auf selbst aufbauen</li>
</ul>
<h2>Funktionen von Hadron</h2>
<p>Das Hadron Theme bietet folgende Funktionen:</p>
<ul>
<li>deutsche Übersetzungen</li>
<li>responsive Tabellen</li>
<li>Navigation mit Drop-down Menu</li>
<li>angepinnte Beiträge in Blogs</li>
<li>eingebauter Support für Embed.ly</li>
<li>eingebauter Support für H5P</li>
<li>erweiterte Theme Optionen</li>
<li>weitere Verbesserungen</li>
</ul>
<h3>von Quark übernommene Funktionen</h3>
<p>Folgende Funktion wurden von Quark Theme übernommen:</p>
<ul>
<li>leicht &amp; minimal für optimale Performance</li>
<li>Spectre.css Framework</li>
<li>voll responsive inkl. Navigation</li>
<li>SCSS basiertes CSS für einfache Bearbeitung</li>
<li>eingebaute Funktion für Navigation auf der Seite</li>
<li>diverse Seiten Typen</li>
<li>Fontawesome Icons</li>
</ul>
<h3>Skeleton Funktionen:</h3>
<p>Diese Funktionen sind nur über das Skeleton vorhanden:</p>
<ul>
<li>Fertig nutzbare Vorlage für neue Grav Seiten</li>
<li>Standardgruppen für optimale Benutzer Berechtigungen</li>
<li>Standardseiten für normale Seiten, Modulare, Blogs, Kontaktseite, und mehr</li>
<li>Vorinstallierte Plugins inklusive Konfiguration</li>
<li>Standardkonfiguration für SendGrid Email</li>
<li>Standardkonfiguration für Doppler Secrets Manager (benötigt unseren <a href=\"https://github.com/Crabston/grav\">modifizierten Grav core</a>)</li>
</ul>
<h3>zukünftige Hadron Funktionen</h3>
<p>In Zukunft soll Hadron zusätzliche Funktionen haben:</p>
<ul>
<li>eingebaute Funktion für Multi-Sprache Seiten (nur Theme)</li>
<li>diverse Optimierungen</li>
<li>Verfügbarkeit in weiteren Sprachen (nur Theme)</li>
<li>weitere Übersetzungen von anderen Erweiterungen (nur Skeleton)</li>
<li>weitere Verbesserungen</li>
<li>Ablösung von Quark, vollständig eigenständiges Theme mit Spectre</li>
</ul>
<h2>Wie installiere ich Hadron?</h2>
<p>Um Hadron zu installieren, besuche die entsprechenden Anleitungen:</p>
<ul>
<li><a href=\"/grav/grav-skeleton-hadron+admin1/hadron/theme/installation\">Hadron Theme Installieren</a></li>
<li><a href=\"/grav/grav-skeleton-hadron+admin1/hadron/skeleton/installation\">Hadron Skeleton Installieren</a></li>
</ul>";
    }

    public function getTemplateName()
    {
        return "@Page:C:/xampp/htdocs/grav/grav-skeleton-hadron+admin1/user/pages/06.docs/00.intro";
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
        return new Source("", "@Page:C:/xampp/htdocs/grav/grav-skeleton-hadron+admin1/user/pages/06.docs/00.intro", "");
    }
}
