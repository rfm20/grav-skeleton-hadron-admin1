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

/* @Page:C:/xampp/htdocs/grav/grav-skeleton-hadron+admin1/user/pages/06.docs/01.theme/03.optionen */
class __TwigTemplate_05edc5a8cbaed9195fd3c31101da2da7b2aa262d527511998e9dcb71a3edd7e1 extends \Twig\Template
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
<p>Diese Anleitung zeigt, wie das Hadron Theme beliebig konfiguriert werden kann. Die Konfiguration kann entweder über die Datei oder das Admin Panel erfolgen.</p>
</div>
<p>===</p>
<h2>Theme Optionen</h2>
<p>Das Hadron Theme bietet eine Vielzahl von Optionen, um das Theme beliebig anzupassen. Die Optionen enthalten die Standard Quark Einstellungen + einige zusätzliche Optionen von Hadron.</p>
<h2>Admin Panel</h2>
<p>Um das Theme zu konfigurieren, navigiere im Admin Panel zu <code>Themes</code> und wähle das <code>Hadron</code> Theme aus.
<img src=\"/grav/grav-skeleton-hadron admin1/docs/theme/optionen/admin.webp?lightbox=1\" alt=\"Hadron im Admin Panel\" />
Dort findest du die Theme Optionen, gruppiert nach Hadron &amp; Quark Einstellungen.</p>
<h3>Hadron Einstellungen</h3>
<p>Die Hadron Einstellungen enthalten die folgenden Optionen:
<img src=\"/grav/grav-skeleton-hadron admin1/docs/theme/optionen/hadron-settings.webp?lightbox=1\" alt=\"Hadron Einstellungen\" /></p>
<ul>
<li>
<p><strong>H5P Source URL</strong>: The URL to the H5P library. This is required to use H5P content.</p>
</li>
<li>
<p><strong>Show dropdown menu</strong>: Show a dropdown menu in the header navigation with subpages.</p>
</li>
<li>
<p><strong>H5P Quelle URL</strong>: Die URL zur H5P Bibliothek. Dies ist erforderlich, um H5P-Inhalte zu verwenden.</p>
</li>
<li>
<p><strong>Zeige Dropdowns im Menü</strong>: Zeige ein Dropdown-Menü in der Header-Navigation mit Unterseiten.</p>
</li>
</ul>
<h3>Quark Einstellungen</h3>
<p>Die Quark Einstellungen enthalten die folgenden Optionen:
<img src=\"/grav/grav-skeleton-hadron admin1/docs/theme/optionen/quark-settings.webp?lightbox=1\" alt=\"Quark Einstellungen\" /></p>
<ul>
<li><strong>Produktionsmodus</strong>: Aktivieren oder deaktivieren des Produktionsmodus. Wenn aktiviert, werden minimierte CSS-Dateien verwendet.</li>
<li><strong>Grid Grösse</strong>: Die Breite des Themes. Eine grössere Grid Grösse führt zu breiteren Layouts.</li>
<li><em>Header Standards</em>
<ul>
<li><strong>Benutzerdefiniertes Favicon</strong>: Lade ein benutzerdefiniertes Favicon für die Website hoch</li>
<li><strong>Benutzerdefiniertes Logo</strong>: Lade ein benutzerdefiniertes Logo für die Header-Navigation hoch</li>
<li><strong>Benutzerdefiniertes mobiles Logo</strong>: Lade ein benutzerdefiniertes Logo für die mobile Navigation hoch</li>
<li><strong>Fixierter Header</strong>: Aktivieren oder deaktivieren eines fixierten (sticky) Headers</li>
<li><strong>Header animieren</strong>: Aktivieren oder deaktivieren eines animierten Headers beim Scrollen</li>
<li><strong>Dunkler Header</strong>: Aktivieren oder deaktivieren eines dunklen Headers</li>
<li><strong>Transparenter Header</strong>: Aktivieren oder deaktivieren eines transparenten Headers</li>
</ul></li>
<li><em>Footer Standards</em>
<ul>
<li><strong>Fixierter Footer</strong>: Aktivieren oder deaktivieren eines fixierten Footers (Footer immer zuunterst)</li>
</ul></li>
<li><em>Blog Standards</em>
<ul>
<li><strong>Blog URL</strong>: Die URL zur Blog-Seite</li>
<li><strong>Hero Klassen</strong>: Die Standard Hero-Klassen für das Hero-Element auf der Blog-Seite</li>
</ul></li>
<li><em>Spectre.css Optionen</em>
<ul>
<li><strong>Experimentelles CSS</strong>: Aktivieren oder deaktivieren von experimentellen CSS-Funktionen</li>
<li><strong>Icons CSS</strong>: Aktivieren oder deaktivieren des Icons CSS</li>
</ul></li>
</ul>
<h2>Configuration File</h2>
<p>Alle oben genannten Einstellungen können auch über die Datei konfiguriert werden. Die Konfigurationsdatei befindet sich in <code>user/config/themes/hadron.yaml</code>. Die Datei enthält standardmässig die folgenden Einstellungen:</p>
<pre><code class=\"language-yaml\">grid-size: grid-lg        # Grid Grösse des Themes: grid-lg, grid-md, grid-sm
blog-page: /blog          # URL zur Blog-Seite
dropdown:
  enabled: true           # Zeige Dropdown-Menü in der Header-Navigation
header-fixed: true        # Aktiviere fixierten (sticky) Header
header-animated: true     # Aktiviere animierten Header beim Scrollen
header-dark: false        # Aktiviere dunklen Header
header-transparent: false # Aktiviere transparenten Header
sticky-footer: true       # Aktiviere fixierten Footer (Footer immer zuunterst)
spectre:
  exp: false              # Aktiviere experimentelle CSS-Funktionen
  icons: false            # Aktiviere Icons CSS
production-mode: true     # Aktiviere Produktionsmodus (verwende minimierte CSS-Dateien)

# URL zur H5P Bibliothek
h5pembedrootpath: 'https://h5p.org/h5p/embed/'

# Standard Hero-Klassen für das Hero-Element auf der Blog-Seite
blog_page_hero_classes: 'text-light title-h1h2 overlay-dark-gradient hero-large parallax'

# Benutzerdefiniertes Favicon
favicon:
  # Pfad zum Favicon
  user/themes/hadron/images/favicon.svg:
    name: favicon.svg       # Name der Datei
    full_path: favicon.svg  # Pfad zur Datei
    type: image/svg+xml     # Dateityp
    size: 4868              # Dateigrösse
    path: user/themes/hadron/images/favicon.svg

# Benutzerdefiniertes Logo für die Header-Navigation
custom_logo:
  user/themes/hadron/images/logo/logo.svg:
    name: logo.svg
    full_path: logo.svg
    type: image/svg+xml
    size: 4868
    path: user/themes/hadron/images/logo/logo.svg

# Benutzerdefiniertes Logo für die mobile Navigation
custom_logo_mobile:
  user/themes/hadron/images/logo/logo.svg:
    name: logo.svg
    full_path: logo.svg
    type: image/svg+xml
    size: 4868
    path: user/themes/hadron/images/logo/logo.svg</code></pre>";
    }

    public function getTemplateName()
    {
        return "@Page:C:/xampp/htdocs/grav/grav-skeleton-hadron+admin1/user/pages/06.docs/01.theme/03.optionen";
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
        return new Source("", "@Page:C:/xampp/htdocs/grav/grav-skeleton-hadron+admin1/user/pages/06.docs/01.theme/03.optionen", "");
    }
}
