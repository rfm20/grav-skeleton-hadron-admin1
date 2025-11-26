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

/* @Page:C:/xampp/htdocs/grav/grav-skeleton-hadron+admin1/user/pages/06.docs/01.theme/04.customization */
class __TwigTemplate_fe3963321ab529dee18c4e26bf413eff215665d04fe247f4978643c1506f7a46 extends \Twig\Template
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
<p>Diese Anleitung beschreibt, wie du das Hadron Theme anpassen kannst. Durch die Anpassung des Themes änderst du mehr als nur einige Optionen: Du veränderst das Aussehen deiner Website, indem du den Quellcode des Themes (CSS/ SCSS, JavaScript, Twig) bearbeitest.</p>
</div>
<p>===</p>
<div class=\"notices yellow\">
<p>Da du CSS/ SCSS, JavaScript und Twig Dateien bearbeitest, wird empfohlen, dass du über Kenntnisse in diesen Sprachen verfügst. Wenn du nicht vertraut mit ihnen bist, kannst du das Theme trotzdem anpassen, indem du die Theme-Optionen im Admin-Panel änderst. Siehe die <a href=\"/grav/grav-skeleton-hadron+admin1/hadron/theme/optionen\">Hadron Theme-Optionen</a> für weitere Informationen.</p>
</div>
<h2>Varianten zur Anpassung des Themes</h2>
<p>In Grav gibt es mehrere Möglichkeiten, ein Theme anzupassen (siehe <a href=\"https://learn.getgrav.org/17/themes/customization\">Grav Docs</a> für weitere Informationen). Grundsätzlich gibt es zwei Möglichkeiten, das Hadron Theme anzupassen:</p>
<ol>
<li>Bearbeiten des Quellcodes des Themes direkt <em>(nicht empfohlen)</em>: Du kannst den gesamten Quellcode eines Themes direkt bearbeiten. Obwohl dies der einfachste Weg ist, ein Theme anzupassen, wird dies nicht empfohlen, da du deine Änderungen verlierst, wenn du das Theme aktualisierst.</li>
<li>Verwendung eines Child-/ inherited Themes <em>(empfohlen)</em>: Du kannst ein Child Theme erstellen, das vom Hadron Theme erbt. Auf diese Weise kannst du das Theme anpassen, ohne deine Änderungen zu verlieren, wenn du Hadron aktualisierst. (Hadron selbst ist ein Child-Theme von Quark.)</li>
</ol>
<h2>Hadron Skeleton</h2>
<p>Der einfachste Weg, das Hadron Theme anzupassen, ist die Verwendung des <a href=\"https://github.com/Crabston/grav-skeleton-hadron\">Hadron Skeletons</a>. Der Hadron Skeleton ist ein vorinstalliertes Grav-Paket, das das Hadron Theme und einige Demo-Inhalte enthält.</p>
<p>Das Hadron Skeleton enthält auch ein drittes Theme namens «Local», das im Grunde das ist, was es klingt: ein lokales Theme, direkt im Skeleton, bereit zur Anpassung. Auf diese Weise kannst du das Theme anpassen, ohne deine Änderungen zu verlieren, wenn du das Theme aktualisierst.</p>
<h2>Andere Möglichkeiten</h2>
<p>Wenn du das Hadron Skeleton lieber nicht verwenden möchtest, kannst du auch manuell ein Child Theme erstellen. Weitere Informationen findest du in den <a href=\"https://learn.getgrav.org/17/themes/customization#theme-inheritance\">Grav Docs</a>. Dies ist nützlich, wenn du bereits eine Grav-Installation hast und das Hadron Theme hinzufügen möchtest. Wenn du jedoch eine neue Website mit Grav + Hadron erstellen möchtest, ist das Skeleton möglicherweise die bessere Wahl.</p>
<p>Dennoch kann es nützlich sein, einiges vom Local Theme zu übernehmen, um die Anpassungen zu erleichtern. Den Code dazu findest du im <a href=\"https://github.com/Crabston/grav-skeleton-hadron/tree/main/themes/local\">Hadron Skeleton auf GitHub unter <code>themes/local</code></a>.</p>";
    }

    public function getTemplateName()
    {
        return "@Page:C:/xampp/htdocs/grav/grav-skeleton-hadron+admin1/user/pages/06.docs/01.theme/04.customization";
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
        return new Source("", "@Page:C:/xampp/htdocs/grav/grav-skeleton-hadron+admin1/user/pages/06.docs/01.theme/04.customization", "");
    }
}
