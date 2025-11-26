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

/* @Page:C:/xampp/htdocs/grav/grav-skeleton-hadron+admin1/user/pages/06.docs/02.skeleton/02.installation */
class __TwigTemplate_a010a10a7609ca1cc9b4407412f9a0c8ee2fa7fa3c48c88a1b57ae9a506f4fdf extends \Twig\Template
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
<p>Diese Anleitung beschreibt die verschiedenen Möglichkeiten, das Hadron Skeleton zu installieren und leitet dich durch die Installation des Skeletons für eine neue Grav Seite.</p>
</div>
<p>===</p>
<h2>Installation</h2>
<p>Das Hadron Skeleton kann auf verschiedene Arten installiert werden.</p>
<h2>Methoden</h2>
<p>Es gibt grundlegend zwei Methoden, das Skeleton zu installieren: via Git oder als ZIP-Datei. Beide Methoden haben ihre Vor- und Nachteile, je nachdem, wie du das Skeleton verwenden möchtest. Zudem gibt es verschiedene Varianten, wie du das Skeleton installieren kannst, je nachdem, ob du das Skeleton bearbeiten oder nur verwenden möchtest.</p>
<h2>1. Installation (Git)</h2>
<p>Wenn du das Skeleton mit Git bearbeiten möchtest, ist das einfachste, das Repository zu klonen. So kannst du einfach Updates und Änderungen aus dem Original-Repository ziehen. Es gibt verschiedene Varianten, je nachdem, was du mit dem Skeleton machen möchtest:</p>
<h3>1.1 Repository kopieren (empfohlen)</h3>
<p>Wenn du ein neues Repository basierend auf diesem Skeleton erstellen möchtest, kannst du den <code>Nutze diese Vorlage</code> Knopf auf der GitHub Repository Seite verwenden. Dies erstellt ein neues Repository in deinem Account basierend auf dem Skeleton. Du wirst jedoch keine Updates aus dem Original-Repository ziehen können.
<em>Dies ist der empfohlene Weg, wenn du eine neue Seite basierend auf diesem Skeleton entwickeln möchtest und nicht planst, zum ursprünglichen Skeleton beizutragen oder Updates daraus zu ziehen.</em></p>
<p>Um ein neues Repository basierend auf diesem Skeleton zu erstellen, klicke auf den <code>Nutze diese Vorlage</code> Knopf auf der GitHub Repository Seite. Du wirst aufgefordert, einen Repository-Namen und eine Beschreibung einzugeben. Danach hast du eine aktuelle Kopie des Skeletons in deinem Account. Du kannst nun das Repository auf deinen Computer klonen und mit der Entwicklung deiner Seite beginnen.</p>
<div class=\"notices blue\">
<p>Siehe Punkt 1.3, wie du das Repository auf deinen Computer klonen kannst (mit Grav)</p>
</div>
<h3>1.2 Repository forken</h3>
<p>Durch das forken dieses Repositorys erstellst du eine verknüpfte Kopie des ursprünglichen Repositorys in deinem eigenen GitHub Account. Auf diese Weise kannst du Änderungen am Skeleton vornehmen und sie in dein eigenes Repository pushen. Du kannst dann eine neue Seite erstellen, indem du dein Fork als Skeleton verwendest.
<em>Dies ist der empfohlene Weg, wenn du zum ursprünglichen Skeleton beitragen oder Updates daraus ziehen möchtest.</em></p>
<p>Um das Repository zu forken, klicke auf den <code>Fork</code> Knopf auf der GitHub Repository Seite. Du hast nun eine Kopie des Skeletons in deinem Account. Du kannst das Repository auf deinen Computer klonen und mit der Entwicklung deiner Seite beginnen.</p>
<div class=\"notices blue\">
<p>Siehe Punkt 1.3, wie du das Repository auf deinen Computer klonen kannst (mit Grav)</p>
</div>
<h3>1.3 Repository direkt klonen (nicht empfohlen)</h3>
<p>Das direkte Klonen des Repositorys erstellt eine lokale Kopie des Skeletons auf deinem Computer.
<em>Dies ist nur empfohlen, wenn du das Skeleton ausprobieren oder Änderungen daran vornehmen möchtest, ohne zum ursprünglichen Repository beizutragen oder Updates daraus zu ziehen. Wenn du lieber eine neue Seite basierend auf dem Skeleton erstellen möchtest, verwende eine der oben genannten Methoden.</em></p>
<p>Um das Repository direkt zu klonen, verwende die folgenden Befehle:</p>
<pre><code class=\"language-bash\">cd /deine/seite/
git clone https://github.com/getgrav/grav.git .
rm user/ -rf
git clone https://github.com/Crabston/grav-skeleton-hadron.git user
bin/grav install</code></pre>
<p>Du kannst auch unseren <a href=\"https://github.com/Crabston/grav\">modifizierten Grav Core</a> mit zusätzlichen Funktionen verwenden:</p>
<pre><code class=\"language-bash\">cd /deine/seite/
git clone https://github.com/Crabston/grav.git .
git clone https://github.com/Crabston/grav-skeleton-hadron.git user
bin/grav install</code></pre>
<h2>2. Installation (ZIP)</h2>
<p>Wenn du Git nicht verwenden möchtest, kannst du das Skeleton als ZIP-Datei herunterladen und manuell installieren. Es gibt zwei verschiedene Versionen des Skeletons:</p>
<h3>2.1 mit Abhängigkeiten</h3>
<p>Wenn du das Skeleton mit Abhängigkeiten herunterlädst, erhältst du eine ZIP-Datei, die den Grav Core, Plugins und Themes enthält, die zum Ausführen des Skeletons erforderlich sind. Dies ist der einfachste Weg, um mit dem Skeleton zu beginnen, da du alles hast, was du zum Ausführen benötigst.</p>
<p>Um das Skeleton mit Abhängigkeiten herunterzuladen, gehe zur <a href=\"https://github.com/Crabston/grav-demo/releases\">Releases Seite</a> und lade die neueste Version herunter. Du kannst dann die Datei in das Root-Verzeichnis deines Servers entpacken.</p>
<h3>2.2 manuell (nicht empfohlen)</h3>
<p>Um dieses Paket manuell zu installieren, ersetzt du im Grunde den Standard <code>user</code> Ordner durch das Skeleton. Lade dazu die ZIP-Version dieses Repositorys herunter und entpacke sie unter <code>/deine/seite/grav/</code>. Benenne dann den Ordner in <code>user</code> um.</p>
<p>Wenn bereits ein <code>user</code> Ordner vorhanden ist, sichere ihn an einem sicheren Ort, lösche ihn (wenn sich keine benutzerdefinierten Inhalte darin befinden, die du behalten möchtest) oder ersetze seinen Inhalt durch die Dateien im entpackten Ordner.</p>
<p>Du solltest nun alle Skeleton-Dateien unter <code>/deine/seite/grav/user/</code> haben.</p>
<div class=\"notices blue\">
<p>Dieses Skeleton ist ein modulares Komponente für Grav, die <a href=\"http://github.com/getgrav/grav\">Grav</a>, mehrere Plugins und Themes erfordert, um zu funktionieren. Wenn du dieses Skeleton als Teil eines vorgefertigten Pakets von <a href=\"http://getgrav.org/downloads/skeletons#extras\">GetGrav.org</a> oder <a href=\"https://github.com/Crabston/grav-demo/releases\">GitHub Releases</a> herunterlädst, solltest du alles haben, was du zum Starten benötigst.</p>
</div>
<h2>weitere Schritte</h2>
<p>Nach der Installation des Skeletons kannst du mit der Entwicklung/ Bearbeitung deiner Seite beginnen.</p>";
    }

    public function getTemplateName()
    {
        return "@Page:C:/xampp/htdocs/grav/grav-skeleton-hadron+admin1/user/pages/06.docs/02.skeleton/02.installation";
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
        return new Source("", "@Page:C:/xampp/htdocs/grav/grav-skeleton-hadron+admin1/user/pages/06.docs/02.skeleton/02.installation", "");
    }
}
