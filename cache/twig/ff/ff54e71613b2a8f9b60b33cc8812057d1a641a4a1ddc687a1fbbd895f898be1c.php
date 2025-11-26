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

/* @Page:C:/xampp/htdocs/grav/grav-skeleton-hadron+admin1/user/pages/03.examples */
class __TwigTemplate_a1bfff1a0c54a59809816e0170618a82832262049e1d5f02ae705a9c981192d7 extends \Twig\Template
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
<h1>Beispiele</h1>
<p>Auf dieser Seite gibt es eine Auswahl von Beispielen, die die Möglichkeiten von Hadron und Grav zeigen.</p>
<h2>0. Suche</h2>
<p><a href=\"/grav/grav-skeleton-hadron+admin1/beispiele/search\"><img src=\"/grav/grav-skeleton-hadron admin1/beispiele/00-search.webp?resize=500\" alt=\"Suche\" /></a></p>
<h2>1. Standard Seite</h2>
<p><a href=\"/grav/grav-skeleton-hadron+admin1/beispiele/default\"><img src=\"/grav/grav-skeleton-hadron admin1/beispiele/01-default.webp?resize=500\" alt=\"Standard Seite\" /></a></p>
<h2>2. Modulare Seite</h2>
<p><a href=\"/grav/grav-skeleton-hadron+admin1/beispiele/modular\"><img src=\"/grav/grav-skeleton-hadron admin1/beispiele/02-modular.webp?resize=500\" alt=\"Modulare Seite\" /></a></p>
<h2>3. Modulare Seite (Grav)</h2>
<p><a href=\"/grav/grav-skeleton-hadron+admin1/beispiele/modular_grav\"><img src=\"/grav/grav-skeleton-hadron admin1/beispiele/03-modular_grav.webp?resize=500\" alt=\"Modulare Seite (Grav)\" /></a></p>
<h2>4. Blog</h2>
<p><a href=\"/grav/grav-skeleton-hadron+admin1/beispiele/blog\"><img src=\"/grav/grav-skeleton-hadron admin1/beispiele/04-blog.webp?resize=500\" alt=\"Blog\" /></a></p>
<h2>5. Shop</h2>
<p><a href=\"/grav/grav-skeleton-hadron+admin1/beispiele/shop\"><img src=\"/grav/grav-skeleton-hadron admin1/beispiele/05-shop.webp?resize=500\" alt=\"Shop\" /></a></p>
<h2>6. Private Seite</h2>
<p><em>(Benutzer: <code>demo</code>; Passwort: <code>Demo1234</code>)</em>
<a href=\"/grav/grav-skeleton-hadron+admin1/beispiele/private\"><img src=\"/grav/grav-skeleton-hadron admin1/beispiele/06-private.webp?resize=500\" alt=\"Private Seite\" /></a></p>
<h2>7. Formular</h2>
<p><a href=\"/grav/grav-skeleton-hadron+admin1/beispiele/form\"><img src=\"/grav/grav-skeleton-hadron admin1/beispiele/07-form.webp?resize=500\" alt=\"Formular\" /></a></p>
<h2>8. Multi-Sektion Seite</h2>
<p><a href=\"/grav/grav-skeleton-hadron+admin1/beispiele/sections\"><img src=\"/grav/grav-skeleton-hadron admin1/beispiele/08-sections.webp?resize=500\" alt=\"Multi-Sektion Seite\" /></a></p>
<h2>9. H5P (Interaktive Inhalte)</h2>
<p><a href=\"/grav/grav-skeleton-hadron+admin1/beispiele/h5p\"><img src=\"/grav/grav-skeleton-hadron admin1/beispiele/09-h5p.webp?resize=500\" alt=\"H5P\" /></a></p>
<h2>10. Eingebettete Seiten</h2>
<p><a href=\"/grav/grav-skeleton-hadron+admin1/beispiele/embedlycard\"><img src=\"/grav/grav-skeleton-hadron admin1/beispiele/10-embedlycard.webp?resize=500\" alt=\"Eingebettete Seite\" /></a></p>
</div>
<div  class=\"column col-3 col-md-12\">
<p><div  style=\"position: sticky; top: 4rem;\">[TOC]</div></p>
</div>
</div>";
    }

    public function getTemplateName()
    {
        return "@Page:C:/xampp/htdocs/grav/grav-skeleton-hadron+admin1/user/pages/03.examples";
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
        return new Source("", "@Page:C:/xampp/htdocs/grav/grav-skeleton-hadron+admin1/user/pages/03.examples", "");
    }
}
