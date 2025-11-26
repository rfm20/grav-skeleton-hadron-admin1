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

/* @Page:C:/xampp/htdocs/grav/grav-skeleton-hadron+admin1/user/pages/02.components */
class __TwigTemplate_df1de131b79fd9b2c4684f6f8921e15162396e926faf5b0cceeb679ab6bf7460 extends \Twig\Template
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
        echo "<div  class=\"columns\">
<div  class=\"column col-9 col-md-12 extra-spacing\">
<h1>Komponenten</h1>
<p>Auf dieser Seite sind alle Standardkomponenten von Hadron aufgelistet, die verwendet werden können. Diese Komponenten können in der Regel unabhängig des Seitentyps verwendet werden. </p>
<p>Diese Seite enthält zu den Komponenten Beschreibungen, Syntax und Beispiele, um die Verwendung zu erleichtern. Manche Komponenten benötigen zusätzliche Plugins, die jedoch im Hadron Skeleton bereits enthalten sind.</p>
<p>===</p>
<h2>Kommentar</h2>
<div class=\"notices blue\">
<p><strong>Standardkomponente</strong><br />
Kommentare können im Markdown eingefügt werden, um Text zu verstecken, der nicht auf der Seite angezeigt werden soll, jedoch für andere Autoren sichtbar sein soll.<br />
Der Kommentar wird jedoch immer noch im Quelltext der Seite angezeigt, weswegen er nicht für vertrauliche Informationen verwendet werden sollte.</p>
</div>
<!--
Dieser Kommentar wird auf der Seite nicht angezeigt.
-->
<pre><code class=\"language-md\">&lt;!--
Dieser Kommentar wird auf der Seite nicht angezeigt.
--&gt;</code></pre>
<h2>Überschriften</h2>
<div class=\"notices blue\">
<p><strong>Standardkomponente</strong><br />
Überschriften dienen dazu, den Text zu strukturieren und zu gliedern. Überschriften können Levels von H1 bis H6 haben, wobei H1 die höchste Ebene ist und H6 die niedrigste.</p>
</div>
<h1>H1 Überschrift</h1>
<h2>H2 Überschrift</h2>
<h3>H3 Überschrift</h3>
<h4>H4 Überschrift</h4>
<h5>H5 Überschrift</h5>
<h6>H6 Überschrift</h6>
<pre><code class=\"language-md\"># H1 Überschrift

## H2 Überschrift

### H3 Überschrift

#### H4 Überschrift

##### H5 Überschrift

###### H6 Überschrift</code></pre>
<h2>Paragraphen</h2>
<div class=\"notices blue\">
<p><strong>Standardkomponente</strong><br />
Paragraphen sind Abschnitte von Text, die durch eine Leerzeile getrennt sind. Zeilenumbrüche innerhalb eines Paragraphen werden ignoriert, es sei denn, sie sind durch zwei Leerzeichen am Ende der Zeile markiert.</p>
</div>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent risus leo, dictum in vehicula sit amet, feugiat tempus tellus. Duis quis sodales risus.<br />
Etiam euismod ornare consequat.</p>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent risus leo, dictum in vehicula sit amet, feugiat tempus tellus. Duis quis sodales risus. Etiam euismod ornare consequat.</p>
<pre><code class=\"language-md\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent risus leo, dictum in vehicula sit amet, feugiat tempus tellus. Duis quis sodales risus.  
Etiam euismod ornare consequat.

Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent risus leo, dictum in vehicula sit amet, feugiat tempus tellus. Duis quis sodales risus. Etiam euismod ornare consequat.</code></pre>
<h2>Markdown Elemente</h2>
<div class=\"notices blue\">
<p><strong>Standardkomponente</strong><br />
Markdown Elemente sind spezielle Textformatierungen, die in Markdown verwendet werden können. Diese können auch in anderen Markdown Editoren verwendet werden.</p>
</div>
<p><strong>Fett</strong> <code>**Fett**</code></p>
<p><em>Kursiv</em> <code>_Kursiv_</code></p>
<p><del>Durchstrichen</del> <code>~~Durchstrichen~~</code></p>
<p><code>Inline Code</code> <code>`Inline Code`</code></p>
<blockquote>
<p>Blockquote <code>&gt; Blockquote</code></p>
</blockquote>
<p><a href=\"https://example.com\">Link</a> <code>[Link](https://example.com)</code></p>
<p><a href=\"https://example.com\" title=\"Titel des Links\">Link mit Titel</a> <code>[Link mit Titel](https://example.com \"Titel des Links\")</code></p>
<hr />
<p>Horizontale Linie: <code>---</code></p>
<h2>HTML Text Elemente</h2>
<div class=\"notices blue\">
<p><strong>Standardkomponente</strong><br />
HTML Elemente können in Markdown verwendet werden, um spezielle Textformatierungen hinzuzufügen, die in Markdown nicht unterstützt, jedoch generell auf Websites verwendet werden können.</p>
</div>
<!-- TODO: update -->
<p><abbr>I18N</abbr> <code>&lt;abbr&gt;</code></p>
<p><cite>Blockquote</cite> <code>&lt;cite&gt;</code></p>
<p><kbd>Ctrl + S</kbd> <code>&lt;kbd&gt;</code></p>
<p>Text<sup>Superscripted</sup> <code>&lt;sup&gt;</code></p>
<p>Text<sub>Subscripted</sub> <code>&lt;sub&gt;</code></p>
<p><var>x = y + 2</var> <code>&lt;var&gt;</code></p>
<h2>Medien</h2>
<div class=\"notices blue\">
<p><strong>Standardkomponente</strong><br />
Medien werden in Markdown ähnlich wie Links eingefügt, jedoch mit einem Ausrufezeichen (<code>!</code>) vor dem Link.<br />
Zu den unterstützten Medien gehören Bilder, Videos und Audiodateien.</p>
</div>
<div class=\"notices blue\">
<p>Weitere Informationen zu Medien findest du in der <a href=\"https://learn.getgrav.org/17/content/media\">offiziellen Grav Dokumentation</a></p>
</div>
<h3>Bilder</h3>
<div class=\"notices blue\">
<p>Syntax: <code>![Bild](Bildpfad)</code></p>
</div>
<p><img src=\"/grav/grav-skeleton-hadron admin1/komponenten/grav-logo.png\" alt=\"Bild\" /></p>
<pre><code class=\"language-md\">![Bild](grav-logo.png)</code></pre>
<h4>Bild mit Link</h4>
<div class=\"notices blue\">
<p>Ein Bild, welches zusätzlich als Link funktioniert.<br />
Syntax: <code>[![Bild](Bildpfad)](Link)</code></p>
</div>
<p><a href=\"https://example.com\"><img src=\"/grav/grav-skeleton-hadron admin1/komponenten/grav-logo.png\" alt=\"Bild\" /></a></p>
<pre><code class=\"language-md\">[![Bild](grav-logo.png)](https://example.com)</code></pre>
<h4>Bild mit Optionen</h4>
<div class=\"notices blue\">
<p>Syntax: <code>![Bild](Bildpfad?Option1&amp;Option2&amp;Option3)</code></p>
<ul>
<li><code>lightbox</code> - öffnet das Bild in einem Lightbox-Modus</li>
<li><code>resize=200</code> - ändert die Größe des Bildes auf 200px</li>
</ul>
</div>
<p><img src=\"/grav/grav-skeleton-hadron admin1/komponenten/grav-logo.png?lightbox=1&amp;resize=200\" alt=\"Bild\" /></p>
<pre><code class=\"language-md\">![Bild](grav-logo.png?lightbox&amp;resize=200)</code></pre>
<h3>Videos</h3>
<div class=\"notices blue\">
<p>Syntax: <code>![Video](Videopfad?Optionen)</code></p>
<ul>
<li><code>autoplay[=1|0]</code> - 1: startet das Video automatisch (Standard: 0)</li>
<li><code>loop[=1|0]</code> - 1: wiederholt das Video (Standard: 0)</li>
<li><code>controls[=1|0]</code> - 1: zeigt die Steuerungselemente (Standard: 1)</li>
<li><code>muted[=1|0]</code> - 1: schaltet den Ton stumm (Standard: 0)</li>
</ul>
</div>
<p><img src=\"/grav/grav-skeleton-hadron admin1/komponenten/beispiel-video.mp4?autoplay=1&amp;loop=1&amp;muted=1&amp;resize=600\" alt=\"Beispiel Video\" /></p>
<pre><code class=\"language-md\">![Beispiel Video](beispiel-video.mp4?autoplay&amp;loop&amp;muted&amp;resize=600)</code></pre>
<h3>Audio</h3>
<div class=\"notices blue\">
<p>Syntax: <code>![Audio](Audiopfad?Optionen)</code></p>
<ul>
<li><code>autoplay[=1|0]</code> - 1: startet das Audio automatisch (Standard: 0)</li>
<li><code>loop[=1|0]</code> - 1: wiederholt das Audio (Standard: 0)</li>
<li><code>controls[=1|0]</code> - 1: zeigt die Steuerungselemente (Standard: 1)</li>
<li><code>muted[=1|0]</code> - 1: schaltet den Ton stumm (Standard: 0)</li>
</ul>
</div>
<p><img src=\"/grav/grav-skeleton-hadron admin1/komponenten/beispiel-audio.mp3\" alt=\"Beispiel Audio\" /></p>
<pre><code class=\"language-md\">![Beispiel Audio](beispiel-audio.mp3)</code></pre>
<h3>YouTube (Variante 1)</h3>
<div class=\"notices blue\">
<p><strong>benötigt <a href=\"https://github.com/getgrav/grav-plugin-youtube\">YouTube Plugin</a></strong><br />
Syntax: <code>[plugin:youtube](Videopfad)</code></p>
</div>
<p><a href=\"https://www.youtube.com/watch?v=K4TOrB7at0Y\">plugin:youtube</a></p>
<pre><code class=\"language-md\">[\\plugin:youtube](https://www.youtube.com/watch?v=K4TOrB7at0Y)</code></pre>
<h3>YouTube (Variante 2)</h3>
<div class=\"notices blue\">
<p><strong>benötigt <a href=\"https://github.com/getgrav/grav-plugin-youtube\">YouTube Plugin</a></strong><br />
Syntax: <code>[\\youtube OPTIONEN] https://www.youtube.com/watch?v=VIDEOPFAD [/youtube]</code></p>
<ul>
<li><code>autoplay[=1|0]</code> - 1: startet das Video automatisch (Standard: 0)</li>
<li><code>controls[=1|0]</code> - 1: zeigt die Steuerungselemente (Standard: 1)</li>
<li><code>loop[=1|0]</code> - 1: wiederholt das Video (Standard: 0)</li>
</ul>
</div>
<p>[youtube autoplay=1 controls=0 loop=1]
https://www.youtube.com/watch?v=K4TOrB7at0Y
[/youtube]</p>
<pre><code class=\"language-md\">[youtube autoplay=1 controls=0 loop=1]
https://www.youtube.com/watch?v=K4TOrB7at0Y
[/youtube]</code></pre>
<h3>PDF</h3>
<!-- TODO: add example and link to tutorial for more options -->
<p>_siehe <a href=\"https://tutorials.crabston.ch/grav/plugins/shortcode-media#pdf?utm_source=usehadron.dev&amp;utm_medium=hadron-docs\">Tutorial &gt; Plugins &gt; Shortcode Media</a>_</p>
<h3>Dokumente</h3>
<!-- TODO: add example and link to tutorial for more options -->
<p>_siehe <a href=\"https://tutorials.crabston.ch/grav/plugins/shortcode-media#docviewwer?utm_source=usehadron.dev&amp;utm_medium=hadron-docs\">Tutorial &gt; Plugins &gt; Shortcode Media</a>_</p>
<h2>Code</h2>
<div class=\"notices blue\">
<p><strong>Standardkomponente</strong><br />
Codeblöcke können in Markdown eingefügt werden, um Code oder Skripte anzuzeigen. Diese können zudem mit Syntax-Highlighting versehen werden, indem man die Sprache des Codes angibt.</p>
</div>
<pre><code class=\"language-js\">// Code
const foo = 'bar';
function bar() {
    return foo;
}
console.log(bar());</code></pre>
<pre><code class=\"language-md\">\\```js
// Code
const foo = 'bar';
function bar() {
    return foo;
}
console.log(bar());
\\```</code></pre>
<h2>Blockquote</h2>
<div class=\"notices blue\">
<p><strong>Standardkomponente</strong><br />
Blockquotes sind Elemente, die in Markdown verwendet werden können, um Texte hervorzuheben. Sie können auch mit anderen Elementen kombiniert werden.</p>
</div>
<blockquote>
<p>The advance of technology is based on making it fit in so that you don't really even notice it,
so it's part of everyday life.</p>
<p><cite>- Bill Gates</cite></p>
</blockquote>
<pre><code class=\"language-md\">&gt; The advance of technology is based on making it fit in so that you don't really even notice it,
&gt; so it's part of everyday life.
&gt;
&gt; &lt;cite&gt;- Bill Gates&lt;/cite&gt;</code></pre>
<h2>Listen</h2>
<div class=\"notices blue\">
<p><strong>Standardkomponente</strong><br />
Mit Listen können Elemente in einer geordneten oder ungeordneten Reihenfolge angezeigt werden. Zudem können Listen verschachtelt werden.</p>
</div>
<h3>ungeordnete Listen</h3>
<ul>
<li>List Item 1</li>
<li>List Item 2
<ul>
<li>List Item 2.1</li>
<li>List Item 2.2
<ul>
<li>List Item 2.2.1</li>
</ul></li>
</ul></li>
<li>List Item 3</li>
</ul>
<pre><code class=\"language-md\">- List Item 1
- List Item 2
  - List Item 2.1
  - List Item 2.2
    - List Item 2.2.1
- List Item 3</code></pre>
<h3>geordnete Listen</h3>
<ol>
<li>List Item 1</li>
<li>List Item 2
<ol>
<li>List Item 2.1</li>
<li>List Item 2.2
<ol>
<li>List Item 2.2.1</li>
</ol></li>
</ol></li>
<li>List Item 3</li>
</ol>
<pre><code class=\"language-md\">1. List Item 1
2. List Item 2
   1. List Item 2.1
   2. List Item 2.2
      1. List Item 2.2.1
3. List Item 3</code></pre>
<h2>Tabellen</h2>
<div class=\"notices blue\">
<p><strong>Standardkomponente</strong><br />
Tabellen können in Markdown erstellt werden, um Daten in einer tabellarischen Form anzuzeigen.<br />
Dazu gibt es zu beachten, dass in der zweiten Zeile die Ausrichtung der Spalten definiert wird:</p>
<ul>
<li><code>:---</code>: linksbündig</li>
<li><code>:---:</code>: zentriert</li>
<li><code>---:</code>: rechtsbündig</li>
</ul>
<p>Eine weitere Funktion von Tabellen ist, dass sie auch richtig angezeigt werden, wenn die Formatierung mit den Leerzeichen nicht korrekt ist.</p>
</div>
<table>
<thead>
<tr>
<th style=\"text-align: left;\">Name</th>
<th style=\"text-align: center;\">Genre</th>
<th style=\"text-align: right;\">Veröffentlichung</th>
</tr>
</thead>
<tbody>
<tr>
<td style=\"text-align: left;\">The Shawshank Redemption</td>
<td style=\"text-align: center;\">Crime, Drama</td>
<td style=\"text-align: right;\">14. Oktober 1994</td>
</tr>
<tr>
<td style=\"text-align: left;\">The Godfather</td>
<td style=\"text-align: center;\">Crime, Drama</td>
<td style=\"text-align: right;\">24. März 1972</td>
</tr>
<tr>
<td style=\"text-align: left;\">Schindler's List</td>
<td style=\"text-align: center;\">Biography, Drama, History</td>
<td style=\"text-align: right;\">4. Februar 1994</td>
</tr>
<tr>
<td style=\"text-align: left;\">No Genre</td>
<td style=\"text-align: center;\"></td>
<td style=\"text-align: right;\">7. Mai 1990</td>
</tr>
<tr>
<td style=\"text-align: left;\">Se7en</td>
<td style=\"text-align: center;\">Crime, Drama, Mystery</td>
<td style=\"text-align: right;\">22. September 1995</td>
</tr>
</tbody>
</table>
<pre><code class=\"language-md\">| Name                     |           Genre           |   Veröffentlichung |
|:-------------------------|:-------------------------:|-------------------:|
| The Shawshank Redemption |       Crime, Drama        |   14. Oktober 1994 |
| The Godfather            |       Crime, Drama        |      24. März 1972 |
| Schindler's List         | Biography, Drama, History |    4. Februar 1994 |
| No Genre                 |                           |        7. Mai 1990 |
| Se7en                    |   Crime, Drama, Mystery   | 22. September 1995 |</code></pre>
<h3>mobilfreundliche Tabellen</h3>
<div class=\"notices blue\">
<p><strong>benötigt <a href=\"https://github.com/Crabston/grav-theme-hadron\">Hadron Theme</a></strong><br />
Mit einer manuellen Funktion des Hadron Themes werden Tabellen auch auf mobilen Geräten gut dargestellt (hauptsächlich bei breiten Tabellen nötig). Die Tabelle wird dann wie folgt dargestellt:<br />
<img src=\"/grav/grav-skeleton-hadron admin1/komponenten/responsive-tabelle.webp?lightbox=1\" alt=\"Darstellung Tabelle auf Mobilgeräten\" /></p>
</div>
<pre><code class=\"language-md\">[div class=\"table-responsive\"]

| Name                     |           Genre           |   Veröffentlichung |
|:-------------------------|:-------------------------:|-------------------:|
| The Shawshank Redemption |       Crime, Drama        |   14. Oktober 1994 |
| The Godfather            |       Crime, Drama        |      24. März 1972 |
| Schindler's List         | Biography, Drama, History |    4. Februar 1994 |
| No Genre                 |                           |        7. Mai 1990 |
| Se7en                    |   Crime, Drama, Mystery   | 22. September 1995 |
[/div]</code></pre>
<h2>Shortcode Elemente</h2>
<div class=\"notices blue\">
<p><strong>benötigt <a href=\"https://github.com/getgrav/grav-plugin-shortcode-core\">Shortcode Core Plugin</a></strong><br />
Shortcodes sind spezielle Tags, die in Markdown verwendet werden können, um spezielle Funktionen oder Komponenten hinzuzufügen. Diese werden in eckigen Klammern <code>[]</code> geschrieben und benötigen das Shortcode Plugin.</p>
</div>
<p>Dies ist ein beispielhafter Text <mark class=\"mark-class-default\" >mit diesem <strong>hervorgehobenen</strong> Teil und <em>Markdown</em> Syntax</mark> und der Rest ist normal.</p>
<p>Dies ist ein <span style=\"text-decoration: underline;\">unterstrichener Text</span>.</p>
<pre><code class=\"language-md\">Dies ist ein beispielhafter Text [mark]mit diesem **hervorgehobenen** Teil und _Markdown_ Syntax[/mark] und der Rest ist normal.

Dies ist ein [u]unterstrichener Text[/u].</code></pre>
<h2>Ausrichtung</h2>
<div class=\"notices blue\">
<p><strong>benötigt <a href=\"https://github.com/getgrav/grav-plugin-shortcode-core\">Shortcode Core Plugin</a></strong><br />
Mit der Ausrichtung können Texte links, zentriert oder rechts ausgerichtet werden.</p>
</div>
<div style=\"text-align: left;\">
<p>Dieser Text ist links ausgerichtet.</p>
</div>
<div style=\"text-align: center;\">
<p>Dieser Text ist zentriert.</p>
</div>
<div style=\"text-align: right;\">
<p>Dieser Text ist rechts ausgerichtet.</p>
</div>
<pre><code class=\"language-md\">[left]
Dieser Text ist links ausgerichtet.
[/left]

[center]
Dieser Text ist zentriert.
[/center]

[right]
Dieser Text ist rechts ausgerichtet.
[/right]</code></pre>
<h2>Kolonnen</h2>
<div class=\"notices blue\">
<p><strong>benötigt <a href=\"https://github.com/getgrav/grav-plugin-shortcode-core\">Shortcode Core Plugin</a></strong><br />
Kolonnen dienen dazu, Texte in mehrere Spalten aufzuteilen.</p>
</div>
<div class=\"notices blue\">
<p><a href=\"https://github.com/getgrav/grav-plugin-shortcode-core#columns\">Dokumentation: Shortcode Core Plugin</a></p>
</div>
<div class=\"sc-columns\" style=\"columns:2 auto;-moz-columns:2 auto;column-gap:normal;-moz-column-gap:normal;\">
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat.</p>
<p>Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
</div>
<pre><code class=\"language-md\">[columns count=2]
Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat.

Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
[/columns]</code></pre>
<h2>Details</h2>
<div class=\"notices blue\">
<p><strong>benötigt <a href=\"https://github.com/getgrav/grav-plugin-shortcode-core\">Shortcode Core Plugin</a></strong><br />
Details sind eine gute Möglichkeit, Inhalte zu verbergen, die nicht wichtig für den Hauptfluss des Dokuments sind. Diese können durch Klicken auf die Schaltfläche angezeigt werden.</p>
</div>
<div class=\"notices blue\">
<p><a href=\"https://github.com/getgrav/grav-plugin-shortcode-core#detailssummary\">Dokumentation: Shortcode Core Plugin</a></p>
</div>
<details ><summary>Klicken Sie hier, um weitere Informationen anzuzeigen</summary>
<p>Hier ist zusätzliche Informationen, die Sie durch Klicken auf die Schaltfläche aufdecken können.</p>
</details>
<pre><code class=\"language-md\">[details=\"Klicken Sie hier, um weitere Informationen anzuzeigen\"]
Hier ist zusätzliche Informationen, die Sie durch Klicken auf die Schaltfläche aufdecken können.
[/details]</code></pre>
<h2>Anmerkungen</h2>
<div class=\"notices blue\">
<p><strong>benötigt <a href=\"https://github.com/getgrav/grav-plugin-markdown-notices\">Markdown Notices Plugin</a></strong><br />
Anmerkungen können verwendet werden, um wichtige Informationen hervorzuheben.</p>
</div>
<div class=\"notices yellow\">
<p>Warnung</p>
</div>
<div class=\"notices red\">
<p>Fehler</p>
</div>
<div class=\"notices blue\">
<p>Info</p>
</div>
<div class=\"notices green\">
<p>Erfolg</p>
</div>
<pre><code class=\"language-md\">! Warnung

!! Fehler

!!! Info

!!!! Erfolg</code></pre>
<h2>Akkordeon</h2>
<div class=\"notices blue\">
<p><strong>benötigt <a href=\"https://github.com/getgrav/grav-plugin-shortcode-ui\">Shortcode UI Plugin</a></strong><br />
Akkordeons können verwendet werden, um Inhalte in Abschnitte zu unterteilen, die bei Bedarf geöffnet oder geschlossen werden können.</p>
</div>
<div class=\"notices blue\">
<p><a href=\"https://github.com/getgrav/grav-plugin-shortcode-ui#accordion\">Dokumentation: Shortcode UI Plugin</a></p>
</div>
<div class=\"accordion-wrapper\">
                    <div>
            <input id=\"b6d14a57a40\" name=\"b6d14a57a4\" type=\"radio\"  />
            <label for=\"b6d14a57a40\">Sektion 1</label>
            <article>
<p>Bacon ipsum dolor amet beef burgdoggen shoulder, meatball prosciutto kevin brisket chicken turkey. Kevin rump pancetta short loin capicola brisket landjaeger fatback picanha pork belly ribeye. Strip steak chuck turducken kevin t-bone ribeye cupim capicola alcatra rump. Venison pork chop biltong cupim pig rump meatloaf sausage pork. Strip steak kevin tongue brisket ball tip, venison turducken flank frankfurter corned beef pancetta fatback drumstick ham. Drumstick pastrami leberkas meatball flank tongue turkey ground round pork belly doner frankfurter porchetta jowl.</p>
</article>
        </div>
                    <div>
            <input id=\"b6d14a57a41\" name=\"b6d14a57a4\" type=\"radio\" checked=\"checked\" />
            <label for=\"b6d14a57a41\">Sektion 2</label>
            <article>
<p>Short loin swine shankle flank picanha andouille burgdoggen landjaeger hamburger drumstick. Beef ham tail, tri-tip flank ham hock meatball picanha corned beef t-bone shank turkey ball tip shoulder. Flank corned beef chicken, meatloaf venison ball tip ham hock tail salami jowl short ribs pork belly drumstick. Meatball chicken hamburger beef filet mignon doner pork picanha pork chop fatback rump ham tri-tip ball tip landjaeger. Sausage leberkas shoulder tongue short loin shankle. Prosciutto tri-tip frankfurter shoulder drumstick capicola. Pork loin shank strip steak pork belly tongue cow.</p>
</article>
        </div>
                    <div>
            <input id=\"b6d14a57a42\" name=\"b6d14a57a4\" type=\"radio\"  />
            <label for=\"b6d14a57a42\">Sektion 3</label>
            <article>
<p>Bacon ipsum dolor amet beef burgdoggen shoulder, meatball prosciutto kevin brisket chicken turkey. Kevin rump pancetta short loin capicola brisket landjaeger fatback picanha pork belly ribeye. Strip steak chuck turducken kevin t-bone ribeye cupim capicola alcatra rump. Venison pork chop biltong cupim pig rump meatloaf sausage pork. Strip steak kevin tongue brisket ball tip, venison turducken flank frankfurter corned beef pancetta fatback drumstick ham. Drumstick pastrami leberkas meatball flank tongue turkey ground round pork belly doner frankfurter porchetta jowl.</p>
</article>
        </div>
    </div>
<pre><code class=\"language-md\">[ui-accordion independent=false open=1]
[ui-accordion-item title=\"Sektion 1\"]
Bacon ipsum dolor amet beef burgdoggen shoulder, meatball prosciutto kevin brisket chicken turkey. Kevin rump pancetta short loin capicola brisket landjaeger fatback picanha pork belly ribeye. Strip steak chuck turducken kevin t-bone ribeye cupim capicola alcatra rump. Venison pork chop biltong cupim pig rump meatloaf sausage pork. Strip steak kevin tongue brisket ball tip, venison turducken flank frankfurter corned beef pancetta fatback drumstick ham. Drumstick pastrami leberkas meatball flank tongue turkey ground round pork belly doner frankfurter porchetta jowl.
[/ui-accordion-item]
[ui-accordion-item title=\"Sektion 2\"]
Short loin swine shankle flank picanha andouille burgdoggen landjaeger hamburger drumstick. Beef ham tail, tri-tip flank ham hock meatball picanha corned beef t-bone shank turkey ball tip shoulder. Flank corned beef chicken, meatloaf venison ball tip ham hock tail salami jowl short ribs pork belly drumstick. Meatball chicken hamburger beef filet mignon doner pork picanha pork chop fatback rump ham tri-tip ball tip landjaeger. Sausage leberkas shoulder tongue short loin shankle. Prosciutto tri-tip frankfurter shoulder drumstick capicola. Pork loin shank strip steak pork belly tongue cow.
[/ui-accordion-item]
[ui-accordion-item title=\"Sektion 3\"]
Bacon ipsum dolor amet beef burgdoggen shoulder, meatball prosciutto kevin brisket chicken turkey. Kevin rump pancetta short loin capicola brisket landjaeger fatback picanha pork belly ribeye. Strip steak chuck turducken kevin t-bone ribeye cupim capicola alcatra rump. Venison pork chop biltong cupim pig rump meatloaf sausage pork. Strip steak kevin tongue brisket ball tip, venison turducken flank frankfurter corned beef pancetta fatback drumstick ham. Drumstick pastrami leberkas meatball flank tongue turkey ground round pork belly doner frankfurter porchetta jowl.
[/ui-accordion-item]
[/ui-accordion]</code></pre>
<h2>Tabs</h2>
<div class=\"notices blue\">
<p><strong>benötigt <a href=\"https://github.com/getgrav/grav-plugin-shortcode-ui\">Shortcode UI Plugin</a></strong><br />
Tabs können verwendet werden, um Inhalte in verschiedenen Reitern anzuzeigen.</p>
</div>
<div class=\"notices blue\">
<p><a href=\"https://github.com/getgrav/grav-plugin-shortcode-ui#tabs\">Dokumentation: Shortcode UI Plugin</a></p>
</div>
<div class=\"tabs-wrapper ui-theme-lite top-left\">
    <ul class=\"tabs-nav\">
                    <li class=\"current\"><a href=\"#75cc3977610\" id=\"Tab0\" rel=\"tab\">Erster Tab</a></li>
                    <li><a href=\"#75cc3977611\" id=\"Tab1\" rel=\"tab\">Zweiter Tab</a></li>
        </ul>
    <div class=\"tabs\">
            <div class=\"tab\" id=\"75cc3977610\" style=\"display: block\">
<p>In tempor sed sapien eu porttitor. Aliquam cursus facilisis ante. Etiam neque nunc, blandit vel lacus et, faucibus accumsan lacus. Proin posuere varius purus quis faucibus. Quisque et enim vitae orci <a href=\"#\">placerat tincidunt</a> id ac eros. Fusce et gravida libero.</p>
<p>Phasellus cursus odio ex, in <strong>mattis lorem tincidunt</strong> vel. Donec nibh odio, dapibus non ligula a, semper ornare massa. Nulla consectetur eu nunc sed ultrices. Integer at turpis dolor.</p>
</div>
            <div class=\"tab\" id=\"75cc3977611\" style=\"display: none\">
<p>In tempor sed sapien <strong>eu porttitor</strong>. Aliquam cursus facilisis ante. Etiam neque nunc, blandit vel lacus et, faucibus accumsan lacus. Proin posuere varius purus quis faucibus. <a href=\"#\">Quisque et enim</a> vitae orci placerat tincidunt id ac eros. Fusce et gravida libero.</p>
<p>Phasellus cursus odio ex, in mattis lorem tincidunt vel. <a href=\"#\">Donec nibh odio</a>, dapibus non ligula a, semper ornare massa. Nulla consectetur eu nunc sed ultrices. Integer at turpis dolor.</p>
</div>
        </div>
</div>

<pre><code class=\"language-md\">[ui-tabs position=top-left active=0 theme=lite]
[ui-tab title=\"Erster Tab\"]
In tempor sed sapien eu porttitor. Aliquam cursus facilisis ante. Etiam neque nunc, blandit vel lacus et, faucibus accumsan lacus. Proin posuere varius purus quis faucibus. Quisque et enim vitae orci [placerat tincidunt](#) id ac eros. Fusce et gravida libero.

Phasellus cursus odio ex, in **mattis lorem tincidunt** vel. Donec nibh odio, dapibus non ligula a, semper ornare massa. Nulla consectetur eu nunc sed ultrices. Integer at turpis dolor.
[/ui-tab]
[ui-tab title=\"Zweiter Tab\"]
In tempor sed sapien **eu porttitor**. Aliquam cursus facilisis ante. Etiam neque nunc, blandit vel lacus et, faucibus accumsan lacus. Proin posuere varius purus quis faucibus. [Quisque et enim](#) vitae orci placerat tincidunt id ac eros. Fusce et gravida libero.

Phasellus cursus odio ex, in mattis lorem tincidunt vel. [Donec nibh odio](#), dapibus non ligula a, semper ornare massa. Nulla consectetur eu nunc sed ultrices. Integer at turpis dolor.
[/ui-tab]
[/ui-tabs]</code></pre>
<h2>Galerie</h2>
<div class=\"notices blue\">
<p><strong>benötigt <a href=\"https://github.com/sal0max/grav-plugin-shortcode-gallery-plusplus\">Shortcode Gallery Plugin</a></strong><br />
Galerien können verwendet werden, um mehrere Bilder in einer Galerie anzuzeigen.<br />
Optionen:</p>
<ul>
<li><code>lastRow=justify</code> - Letzte Reihe ausrichten</li>
<li><code>captions=false</code> - Bildunterschriften ausblenden</li>
</ul>
</div>
<div class=\"notices blue\">
<p><a href=\"https://github.com/sal0max/grav-plugin-shortcode-gallery-plusplus#gallery-settings\">Dokumentation: Shortcode Gallery++ Plugin</a></p>
</div>
<p id=\"1270344706\">
    <a href=\"/grav/grav-skeleton-hadron admin1/komponenten/images/jeremy-bishop-EwKXn5CapA4-unsplash.webp\" class=\"glightbox-1270344706\" data-description=\"\">
        <img src=\"/grav/grav-skeleton-hadron admin1/komponenten/images/jeremy-bishop-EwKXn5CapA4-unsplash.webp\" alt=\"unsplash/jeremy-bishop\" />
    </a>
    <a href=\"/grav/grav-skeleton-hadron admin1/komponenten/images/piotr-chrobot-6oUsyeYXgTg-unsplash.webp\" class=\"glightbox-1270344706\" data-description=\"\">
        <img src=\"/grav/grav-skeleton-hadron admin1/komponenten/images/piotr-chrobot-6oUsyeYXgTg-unsplash.webp\" alt=\"unsplash/piotr-chrobot\" />
    </a>
    <a href=\"/grav/grav-skeleton-hadron admin1/komponenten/images/ben-o-bro-wpU4veNGnHg-unsplash.webp\" class=\"glightbox-1270344706\" data-description=\"\">
        <img src=\"/grav/grav-skeleton-hadron admin1/komponenten/images/ben-o-bro-wpU4veNGnHg-unsplash.webp\" alt=\"unsplash/ben-o-bro\" />
    </a>
    <a href=\"/grav/grav-skeleton-hadron admin1/komponenten/images/aaron-burden-dXYE1d08BiY-unsplash.webp\" class=\"glightbox-1270344706\" data-description=\"\">
        <img src=\"/grav/grav-skeleton-hadron admin1/komponenten/images/aaron-burden-dXYE1d08BiY-unsplash.webp\" alt=\"unsplash/aaron-burden\" />
    </a>
    <a href=\"/grav/grav-skeleton-hadron admin1/komponenten/images/qingbao-meng-01_igFr7hd4-unsplash.webp\" class=\"glightbox-1270344706\" data-description=\"\">
        <img src=\"/grav/grav-skeleton-hadron admin1/komponenten/images/qingbao-meng-01_igFr7hd4-unsplash.webp\" alt=\"unsplash/qingbao-meng\" />
    </a>
    <a href=\"/grav/grav-skeleton-hadron admin1/komponenten/images/blake-verdoorn-cssvEZacHvQ-unsplash.webp\" class=\"glightbox-1270344706\" data-description=\"\">
        <img src=\"/grav/grav-skeleton-hadron admin1/komponenten/images/blake-verdoorn-cssvEZacHvQ-unsplash.webp\" alt=\"unsplash/blake-verdoorn\" />
    </a>
    <a href=\"/grav/grav-skeleton-hadron admin1/komponenten/images/robert-lukeman-_RBcxo9AU-U-unsplash.webp\" class=\"glightbox-1270344706\" data-description=\"\">
        <img src=\"/grav/grav-skeleton-hadron admin1/komponenten/images/robert-lukeman-_RBcxo9AU-U-unsplash.webp\" alt=\"unsplash/robert-lukeman\" />
    </a>
    <a href=\"/grav/grav-skeleton-hadron admin1/komponenten/images/max-bender-VmX3vmBecFE-unsplash.webp\" class=\"glightbox-1270344706\" data-description=\"\">
        <img src=\"/grav/grav-skeleton-hadron admin1/komponenten/images/max-bender-VmX3vmBecFE-unsplash.webp\" alt=\"unsplash/max-bender\" />
    </a>
    <a href=\"/grav/grav-skeleton-hadron admin1/komponenten/images/pedro-lastra-Nyvq2juw4_o-unsplash.webp\" class=\"glightbox-1270344706\" data-description=\"\">
        <img src=\"/grav/grav-skeleton-hadron admin1/komponenten/images/pedro-lastra-Nyvq2juw4_o-unsplash.webp\" alt=\"unsplash/pedro-lastra\" />
    </a>
    <a href=\"/grav/grav-skeleton-hadron admin1/komponenten/images/abhi-verma-WH3gEB21roA-unsplash.webp\" class=\"glightbox-1270344706\" data-description=\"\">
        <img src=\"/grav/grav-skeleton-hadron admin1/komponenten/images/abhi-verma-WH3gEB21roA-unsplash.webp\" alt=\"unsplash/abhi-verma\" />
    </a>
</p>

<pre><code class=\"language-md\">[gallery lastRow=justify]
![unsplash/jeremy-bishop](images/jeremy-bishop-EwKXn5CapA4-unsplash.webp)
![unsplash/piotr-chrobot](images/piotr-chrobot-6oUsyeYXgTg-unsplash.webp)
![unsplash/ben-o-bro](images/ben-o-bro-wpU4veNGnHg-unsplash.webp)
![unsplash/aaron-burden](images/aaron-burden-dXYE1d08BiY-unsplash.webp)
![unsplash/qingbao-meng](images/qingbao-meng-01_igFr7hd4-unsplash.webp)
![unsplash/blake-verdoorn](images/blake-verdoorn-cssvEZacHvQ-unsplash.webp)
![unsplash/robert-lukeman](images/robert-lukeman-_RBcxo9AU-U-unsplash.webp)
![unsplash/max-bender](images/max-bender-VmX3vmBecFE-unsplash.webp)
![unsplash/pedro-lastra](images/pedro-lastra-Nyvq2juw4_o-unsplash.webp)
![unsplash/abhi-verma](images/abhi-verma-WH3gEB21roA-unsplash.webp)
[/gallery]</code></pre>
<h2>Owl Carousel</h2>
<div class=\"notices blue\">
<p><strong>benötigt <a href=\"https://github.com/getgrav/grav-plugin-shortcode-owl-carousel\">Shortcode Owl Carousel Plugin</a></strong><br />
Owl Carousel ist ein Plugin, das verwendet wird, um Bilder in einem Karussell anzuzeigen.<br />
Optionen:</p>
<ul>
<li><code>items=1</code> - Anzahl der Elemente die angezeigt werden</li>
<li><code>margin=10</code> - Abstand zwischen den Elementen</li>
<li><code>loop=true</code> - Endlosschleife</li>
<li><code>nav=true</code> - Navigation anzeigen</li>
<li><code>stagePadding=200</code> - Abstand zum Rand</li>
</ul>
</div>
<div class=\"notices blue\">
<p><a href=\"https://github.com/getgrav/grav-plugin-shortcode-owl-carousel\">Dokumentation: Shortcode Owl Carousel Plugin</a></p>
</div>
<div class=\"owl-carousel owl-theme\" id=\"owl-afaf6ee217\">
    <img src=\"/grav/grav-skeleton-hadron admin1/komponenten/images/aaron-burden-dXYE1d08BiY-unsplash.webp\" alt=\"unsplash/aaron-burden\" />
<img src=\"/grav/grav-skeleton-hadron admin1/komponenten/images/abhi-verma-WH3gEB21roA-unsplash.webp\" alt=\"unsplash/abhi-verma\" />
<img src=\"/grav/grav-skeleton-hadron admin1/komponenten/images/ben-o-bro-wpU4veNGnHg-unsplash.webp\" alt=\"unsplash/ben-o-bro\" />
<img src=\"/grav/grav-skeleton-hadron admin1/komponenten/images/pedro-lastra-Nyvq2juw4_o-unsplash.webp\" alt=\"unsplash/pedro-lastra\" />
<img src=\"/grav/grav-skeleton-hadron admin1/komponenten/images/piotr-chrobot-6oUsyeYXgTg-unsplash.webp\" alt=\"unsplash/piotr-chrobot\" />
<img src=\"/grav/grav-skeleton-hadron admin1/komponenten/images/qingbao-meng-01_igFr7hd4-unsplash.webp\" alt=\"unsplash/qingbao-meng\" />
<img src=\"/grav/grav-skeleton-hadron admin1/komponenten/images/robert-lukeman-_RBcxo9AU-U-unsplash.webp\" alt=\"unsplash/robert-lukeman\" />

</div>


<pre><code class=\"language-md\">[owl-carousel items=1 margin=10 loop=true nav=true stagePadding=200]
![unsplash/aaron-burden](images/aaron-burden-dXYE1d08BiY-unsplash.webp)
![unsplash/abhi-verma](images/abhi-verma-WH3gEB21roA-unsplash.webp)
![unsplash/ben-o-bro](images/ben-o-bro-wpU4veNGnHg-unsplash.webp)
![unsplash/pedro-lastra](images/pedro-lastra-Nyvq2juw4_o-unsplash.webp)
![unsplash/piotr-chrobot](images/piotr-chrobot-6oUsyeYXgTg-unsplash.webp)
![unsplash/qingbao-meng](images/qingbao-meng-01_igFr7hd4-unsplash.webp)
![unsplash/robert-lukeman](images/robert-lukeman-_RBcxo9AU-U-unsplash.webp)
[/owl-carousel]</code></pre>
</div>
<div  class=\"column col-3 col-md-12\">
<p><div  style=\"position: sticky; top: 4rem;\">[TOC]</div></p>
</div>
</div>";
    }

    public function getTemplateName()
    {
        return "@Page:C:/xampp/htdocs/grav/grav-skeleton-hadron+admin1/user/pages/02.components";
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
        return new Source("", "@Page:C:/xampp/htdocs/grav/grav-skeleton-hadron+admin1/user/pages/02.components", "");
    }
}
