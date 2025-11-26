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

/* @Page:C:/xampp/htdocs/grav/grav-skeleton-hadron+admin1/user/pages/06.docs/01.theme/02.installation */
class __TwigTemplate_4b86e30165766c11af31e4bdff63df79ae85d35081499b78a9ee215f3fae37b3 extends \Twig\Template
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
<p>Diese Anleitung zeigt die verschiedenen Möglichkeiten, um das Hadron Theme zu installieren und leitet dich durch die Installation des Hadron Themes auf einer bestehenden Grav Seite.</p>
</div>
<p>===</p>
<h2>Installation</h2>
<p>Das Hadron Theme kann auf verschiedene Arten installiert werden. Die Installation via den GPM (Grav Package Manager) ermöglicht eine schnelle und einfache Installation des Themes mit einem einfachen Terminalbefehl, während die manuelle Methode die Installation über eine Zip-Datei ermöglicht. Es gibt auch eine Möglichkeit, das Theme via Git oder über das Admin Plugin zu installieren.</p>
<p>Das Theme selber ist nützlich, jedoch kann es einfacher sein, eine Website mit dem Hadron Skeleton zu erstellen. Das Hadron Theme ist im <a href=\"https://github.com/Crabston/grav-skeleton-hadron\">Hadron Skeleton</a> enthalten, welches eine vollständige Website beinhaltet. Dieses beinhaltet: Beispiele für Inhalte, Konfigurationen, Themes und Plugins.</p>
<h3>1. GPM Installation (empfohlen)</h3>
<p><em>Diese Methode wird aktuell noch nicht unterstützt, da das Theme noch nicht im GPM verfügbar ist. Bitte nutze eine andere Methode.</em></p>
<p>Der einfachste Weg, dieses Theme zu installieren, ist über den <a href=\"http://learn.getgrav.org/advanced/grav-gpm\">Grav Package Manager (GPM)</a> in deinem System-Terminal (auch Kommandozeile genannt). Tippe dazu im Root-Verzeichnis deiner Grav Installation folgenden Befehl:</p>
<pre><code class=\"language-shell\">bin/gpm install hadron</code></pre>
<p>Dieser Befehl installiert das Hadron Theme in deinem <code>/user/themes</code> Verzeichnis innerhalb von Grav. Die Dateien des Themes können unter <code>/deine/seite/grav/user/themes/hadron</code> gefunden werden.</p>
<p>Der Vorzug dieser Methode ist, dass du das Theme mit einem einfachen Befehl aktualisieren kannst:</p>
<pre><code class=\"language-shell\">bin/gpm update hadron</code></pre>
<h3>2. Git Installation</h3>
<p>Als Alternative kannst du das Theme auch über Git installieren. Gehe dazu in dein <code>/user/themes</code> Verzeichnis und führe folgenden Befehl aus:</p>
<pre><code class=\"language-shell\">git clone https://github.com/Crabston/grav-theme-hadron.git hadron</code></pre>
<p>Das Theme sollte nun im Verzeichnis <code>/deine/seite/grav/user/themes/hadron</code> zu finden sein.</p>
<p>Um das Theme zu aktualisieren, kannst du einfach in das Theme-Verzeichnis wechseln und <code>git pull</code> ausführen:</p>
<pre><code class=\"language-shell\">cd /deine/seite/grav/user/themes/hadron
git pull</code></pre>
<h3>3. Admin Plugin Installation</h3>
<p><em>Diese Methode wird aktuell noch nicht unterstützt, da das Theme noch nicht im GPM verfügbar ist. Bitte nutze eine andere Methode.</em></p>
<p>Wenn du das <a href=\"https://github.com/getgrav/grav-plugin-admin\">Admin Plugin</a> nutzt, kannst du das Theme direkt über das Admin Plugin installieren. Gehe dazu in den Bereich <code>Themes</code> und klicke auf <code>Add</code> und suche nach <code>hadron</code>. Wähle das Theme aus und klicke auf <code>Install</code>.</p>
<p>Das Theme wird nun in deinem <code>/user/themes</code> Verzeichnis installiert. Zudem kann es über das Admin Plugin aktualisiert werden, wenn eine neue Version verfügbar ist.</p>
<h3>4. manuelle Installation (nicht empfohlen)</h3>
<p>Um das Theme manuell zu installieren, lade einfach die Zip-Version dieses Repositories herunter und entpacke sie unter <code>/deine/seite/grav/user/themes</code>. Benenne den Ordner dann in <code>hadron</code> um. Die Dateien des Themes können entweder auf <a href=\"https://github.com/Crabston/grav-theme-hadron\">GitHub</a> oder über <a href=\"http://getgrav.org/downloads/themes\">GetGrav.org</a> gefunden werden.</p>
<p>Du solltest nun alle Theme-Dateien unter <code>/deine/seite/grav/user/themes/hadron</code> haben.</p>
<h2>weitere Schritte</h2>
<p>Nach der Installation des Themes, kannst du das Theme in der <code>Grav Admin</code> Oberfläche aktivieren. Gehe dazu in den Bereich <code>Themes</code> und wähle <code>Hadron</code> aus. Klicke auf <code>Activate</code> um das Theme zu aktivieren.</p>
<p>Das Theme ist nun aktiviert und sollte auf deiner Seite sichtbar sein. Du kannst nun die Theme-Einstellungen anpassen und die Seite nach deinen Wünschen gestalten. Lerne mehr über die <a href=\"/grav/grav-skeleton-hadron+admin1/hadron/theme/optionen\">Theme Optionen</a>.</p>";
    }

    public function getTemplateName()
    {
        return "@Page:C:/xampp/htdocs/grav/grav-skeleton-hadron+admin1/user/pages/06.docs/01.theme/02.installation";
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
        return new Source("", "@Page:C:/xampp/htdocs/grav/grav-skeleton-hadron+admin1/user/pages/06.docs/01.theme/02.installation", "");
    }
}
