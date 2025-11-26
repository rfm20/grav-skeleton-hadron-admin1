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

/* @Page:C:/xampp/htdocs/grav/grav-skeleton-hadron+admin1/user/pages/06.docs/02.skeleton/03.setup */
class __TwigTemplate_aca781c6d8e68c843ee093f398a275d4d6f6294da230a254bf5a9bdb4a006e11 extends \Twig\Template
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
<p>Diese Anleitung leitet dich durch das Setup des Hadron Skeletons. Darin wird erklärt, welche Änderungen nach der Installation vorgenommen werden sollten, um eine optimierte Website zu erstellen. </p>
</div>
<p>===</p>
<div class=\"notices yellow\">
<p>Um mit dem Setup zu beginnen, musst du das Skeleton zuerst installieren. Siehe dazu die <a href=\"/grav/grav-skeleton-hadron+admin1/hadron/skeleton/installation\">Installationsanleitung zum Hadron Skeleton</a>.</p>
</div>
<h2>1. Formale Änderungen</h2>
<p>Die formalen Änderungen beinhalten kleine, formale Anpassungen die nichts mit der Website zu tun haben, jedoch praktisch sind. Dies betrifft hier folgendes:</p>
<ol>
<li>Readme: Anpassen der Readme Datei, um die wichtigsten Informationen zur Website zu speichern</li>
<li>Lizenz: Korrekte Lizenzdatei hinzufügen</li>
<li>ChangeLog: Anpassen des ChangeLogs, um die Änderungen der Website zu dokumentieren</li>
</ol>
<p><em>Die formalen Anpassungen können einfachheitshalber direkt versioniert werden und gegebenenfalls sogar über GitHub stattfinden.</em></p>
<h2>2. Grundkonfiguration</h2>
<p>Mit der Grav Grundkonfiguration können bekannte Änderungen noch vor der Installation gemacht werden, um nach der Installation bereits mit detail Anpassungen loslegen zu können.</p>
<ol>
<li>Falls bereits Benutzeraccounts vorhanden sind, können diese erstellt werden</li>
<li>Wenn bereits bekannt ist, welche Plugins und Themes verwendet werden sollen, können diese direkt in der <code>.dependencies</code> Datei hinzugefügt oder entfernt werden.</li>
<li>Anschliessend können bereits Einstellungen am System und an der Seite angepasst werden.</li>
<li>Zuletzt können ebenfalls einzelne Änderungen an Plugins und Theme konfigurationen gemacht werden.</li>
</ol>
<p><em>Ab diesen Änderungen lohnt es sich, einen neuen Git Branch zu erstellen und je Konfiguration/ Kapitel mindestens einen Commit zu machen.</em></p>
<h3>2.1 Accounts</h3>
<p>Falls bereits Benutzeraccounts vorhanden sind, können diese erstellt werden. Dafür muss pro Account eine Datei in accounts/ erstellt werden. Die Datei muss folgende Struktur haben:</p>
<p><code>accounts/username.yaml</code>:</p>
<pre><code class=\"language-yaml\">state: enabled
email: email@example.com
fullname: Name des Benutzers
title: Titel des Benutzers
hashed_password: HASHED_PASSWORD
language: de
content_editor: default
access:
    # ... individuelle Zugriffsberechtigungen
groups: # Liste von Gruppen
    - website     # kann sich an der Website anmelden
    - admin       # kann sich am Admin Panel anmelden
    - statistics  # kann Statistiken der Seite einsehen
    - editor      # kann bestehende Seiten bearbeiten
    - pages       # kann Seiten verwalten
    - maintainer  # kann die Seite warten
    - manager     # kann Seiten- &amp; Systemeinstellungen verwalten
    - themes      # kann Themes verwalten
    - plugins     # kann Plugins verwalten
    - accounts    # kann Benutzerkonten verwalten</code></pre>
<h3>2.2 Dependencies</h3>
<p>Mit der <code>.dependencies</code> Datei können alle nötigen Plugins und Themes einfach über eine eingebaute Funktion installiert werden.</p>
<h3>2.3 Einstellungen</h3>
<p>Bei den Einstellungen gibt es zwei wichtige Konfigurationsdateien, die angepasst werden sollten. Die lohnenswerten Anpassungen sind folgende:</p>
<p><code>config/site.yaml</code>:</p>
<pre><code class=\"language-yaml\">title: 'Name der Website'
default_lang: de
author:
    name: 'Standardautor/ Organisationsname'
    email: contact@example.com
metadata:
    description: 'Standard Website Beschreibung'
blog:
    route: '/blog'</code></pre>
<p><code>config/system.yaml</code>:</p>
<pre><code class=\"language-yaml\">timezone: Europe/Zurich
languages:
    supported:
        - de
home:
    alias: /startseite</code></pre>
<h3>2.4 Theme &amp; Plugins</h3>
<p>Anschliessend können bereits auch schon folgende Änderungen am Themes &amp; an den Plugins gemacht werden:</p>
<p><code>config/themes/local.yaml</code>:</p>
<pre><code class=\"language-yaml\">header-fixed: true          # fixierter Header
header-animated: true       # animierter Header beim scrollen
header-dark: false          # dunkler Header
header-transparent: false   # transparenter Header
sticky-footer: true         # Footer immer zuunterst, auch wenn Website kleiner
blog-page: /blog            # Seite zum Blog
dropdown:
  enabled: false            # In der navigation Unterseiten anzeigen

# Breite der Website, entweder grid-lg für normal breite und grid-xl für extra breite Layouts
grid-size: grid-lg

# Standardklassen für alle Hero Elemente
blog_page_hero_classes: 'text-light title-h1h2 overlay-dark-gradient hero-large parallax'</code></pre>
<p><code>config/plugins/email.yaml</code>:</p>
<pre><code class=\"language-yaml\">from: noreply@services.crabston.dev  # woher die Mails standardmässig kommen (SendGrid standard)
to: contact@example.com              # wohin die Mails standardmässig gehen</code></pre>
<p><code>config/plugins/feed.yaml</code>:</p>
<pre><code class=\"language-yaml\">title: 'Name des Feeds'
description: 'Beschreibung des Feeds'</code></pre>
<p><code>config/plugins/sitemap.yaml</code>:</p>
<pre><code class=\"language-yaml\">news_enabled_paths:
    - /blog</code></pre>
<p><code>config/plugins/taxonomylist.yaml</code>:</p>
<pre><code class=\"language-yaml\">route: /blog</code></pre>
<p><code>config/plugins/umami-analytics.yaml</code>:</p>
<pre><code class=\"language-yaml\">script_src: 'https://umami.crabston.dev'  # Umami Host URL
website_id: 'UMAMI_WEBSITE_ID'            # Website ID falls nicht via Doppler
domains: 'example.com'                    # Domain die Daten senden sollen, getrennt mit ','</code></pre>
<h2>3. Installation</h2>
<p>Sobald die Grundkonfiguration gemacht wurde, kann Grav installiert und gegebenenfalls der Server gestartet werden.</p>
<pre><code class=\"language-sh\">bin/grav install
bin/plugin tntsearch index
bin/grav server</code></pre>
<p>Nun kann die Seite lokal geöffnet werden über http://127.0.0.1:8000. Falls noch keine Accounts erstellt wurden, muss jetzt der Admin Account erstellt werden. Anschliessend kann die Seite mit den Standardseiten des Skeletons geöffnet werden oder es können Anpassungen via Admin Panel gemacht werden.</p>
<h2>4. weitere Anpassungen</h2>
<p>Nun können weitere Einstellungen angepasst, das lokale Theme kann erweitert und neue Seiten erstellt und bearbeitet werden.</p>
<p><code>config/theme/local.yaml</code>:</p>
<pre><code class=\"language-yaml\"># Logo Konfiguration
custom_logo:
  user/themes/local/images/logo/logo.png:
    name: logo.png
    full_path: logo.png
    type: image/png
    size: 77545
    path: user/themes/local/images/logo/logo.png
custom_logo_mobile:
  user/themes/local/images/logo/logo.png:
    name: logo.png
    full_path: logo.png
    type: image/png
    size: 77545
    path: user/themes/local/images/logo/logo.png</code></pre>
<h2>5. Optimierungen</h2>
<p>Folgende Optimierungen können noch gemacht werden:</p>
<ul>
<li>SendGrid API Key: für das Versenden von E-Mails</li>
<li>Umami Website Id: für erweiterte Statistiken</li>
<li>Doppler Konfiguration: als Secrets Manager über den die nötigen API Keys verwaltet werden</li>
</ul>
<h3>5.1 SendGrid API Key</h3>
<p><a href=\"https://sendgrid.com\">SendGrid</a> ist ein E-Mail Service Provider, der es ermöglicht, E-Mails zu versenden. Dafür muss ein Account bei SendGrid vorhanden sein.</p>
<p>Wenn eine Grundkonfiguration besteht, kann einfach über <a href=\"https://app.sendgrid.com/settings/api_keys\">app.sendgrid.com/settings/api_keys</a> ein neuer API Key mit der Berechtigung «Mail Send &gt; Mail Send: Yes» erstellt werden und in der Konfiguration eingetragen werden oder via Doppler verwaltet werden.</p>
<h3>5.2 Umami Website Id</h3>
<p><a href=\"https://github.com/Crabston/grav-plugin-umami-analytics\">Umami</a> ist ein Open Source Analytics Tool, das es ermöglicht, detaillierte Statistiken über die Website zu sammeln. Dafür muss ein Account bei <a href=\"https://umami.is/\">Umami</a> vorhanden sein.</p>
<p>In Umami muss ein neues Projekt erstellt werden und die Website ID kopiert werden. Anschliessend kann die Website ID in der Umami Konfiguration eingetragen werden oder via Doppler verwaltet werden.</p>
<h3>5.3 Doppler Konfiguration</h3>
<p><a href=\"https://www.doppler.com\">Doppler</a> ist ein Secrets Manager, der es ermöglicht, API Keys und andere sensible Daten sicher zu speichern und zu verwalten. Dafür muss ein Account bei Doppler vorhanden sein.</p>
<p>Als Nächstes muss ein neues Projekt in Doppler erstellt werden. Anschliessend können folgende Secrets hinzugefügt werden:</p>
<ul>
<li><code>SENDGRID_API_KEY</code>: API_KEY_VALUE: <code>plugins.email_DASH_sendgrid.api_key</code></li>
<li><code>UMAMI_WEBSITE_ID</code>: WEBSITE_ID_VALUE: <code>plugins.umami_DASH_analytics.website_id</code></li>
</ul>
<p>Die obere Liste ist im Format <code>SECRET_NAME: SECRET_VALUE: SECRET_PATH</code> geschrieben. Dabei ist <code>SECRET_NAME</code> der Name des Secrets, <code>SECRET_VALUE</code> der Wert des Secrets und <code>SECRET_PATH</code> der Pfad, wo das Secret verwendet wird. <code>SECRET_PATH</code> wird in Doppler als Notiz hinzugefügt.</p>
<p>Nachdem die Secrets hinzugefügt wurden, muss noch die Doppler Konfigurationsdatei <code>doppler.yaml</code> angepasst werden:</p>
<pre><code class=\"language-yaml\">setup:
    project: PROJECT_NAME
    config: prd</code></pre>";
    }

    public function getTemplateName()
    {
        return "@Page:C:/xampp/htdocs/grav/grav-skeleton-hadron+admin1/user/pages/06.docs/02.skeleton/03.setup";
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
        return new Source("", "@Page:C:/xampp/htdocs/grav/grav-skeleton-hadron+admin1/user/pages/06.docs/02.skeleton/03.setup", "");
    }
}
