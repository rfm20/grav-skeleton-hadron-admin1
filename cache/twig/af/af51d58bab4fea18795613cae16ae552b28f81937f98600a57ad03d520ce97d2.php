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

/* @Page:C:/xampp/htdocs/grav/grav-skeleton-hadron+admin1/user/pages/03.examples/02.modular/08._sbs-list */
class __TwigTemplate_b342a39b7c3d9b688a304ed93b26de8067e60a6174e6e81b81679fc87468770c extends \Twig\Template
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
        echo "
<section class=\"section modular-sbs sbs \">
    <section class=\"container grid-lg\">
        \t<body><h2 id=\"sbs-list-alternating-side\"><a href=\"#sbs-list-alternating-side\" class=\"toc-anchor before\" data-anchor-icon=\"#\" aria-label=\"Anchor\"></a>SbS List (Alternating Sides)</h2>
<p>The SbS list is a collection of SbS items that are positioned alternately on the left and right sides. Each item can contain an image, a title, text, and a link. The text alignment can be set to 9 different positions.</p></body>
\t<div class=\"sbs-list\">
\t\t\t\t\t<div class=\"sbs layout-left\">
\t\t\t\t<div class=\"sbs-image\">
\t\t\t\t\t<img src=\"/examples/modular/image.webp\" alt=\"Card 1\">
\t\t\t\t</div>

\t\t\t\t<div class=\"sbs-content top-left\">
\t\t\t\t\t<h4>Card 1</h4>
\t\t\t\t\t<p>This card is positioned at the top left with the image on the left side. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
\t\t\t\t\t<a href=\"#1\" class=\"btn\">Click here</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t\t\t<div class=\"sbs layout-right\">
\t\t\t\t<div class=\"sbs-image\">
\t\t\t\t\t<img src=\"/examples/modular/image.webp\" alt=\"Card 2\">
\t\t\t\t</div>

\t\t\t\t<div class=\"sbs-content center-center\">
\t\t\t\t\t<h4>Card 2</h4>
\t\t\t\t\t<p>This card is centered with the image on the right side. Vitae elit laoreet pulvinar consequat gravida nostra phasellus torquent inceptos suspendisse. Vitae elit laoreet pulvinar consequat gravida nostra phasellus torquent inceptos suspendisse.</p>
\t\t\t\t\t<a href=\"#2\" class=\"btn\">Link</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t\t\t<div class=\"sbs layout-left\">
\t\t\t\t<div class=\"sbs-image\">
\t\t\t\t\t<img src=\"/examples/modular/image.webp\" alt=\"Card 3\">
\t\t\t\t</div>

\t\t\t\t<div class=\"sbs-content bottom-right\">
\t\t\t\t\t<h4>Card 3</h4>
\t\t\t\t\t<p>This card is positioned at the bottom right with the image on the left side. Pellentesque viverra parturient dignissim quam morbi scelerisque lobortis ullamcorper praesent elementum.</p>
\t\t\t\t\t<a href=\"#3\" class=\"btn\">even more</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t</div>
    </section>
</section>
";
    }

    public function getTemplateName()
    {
        return "@Page:C:/xampp/htdocs/grav/grav-skeleton-hadron+admin1/user/pages/03.examples/02.modular/08._sbs-list";
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
        return new Source("", "@Page:C:/xampp/htdocs/grav/grav-skeleton-hadron+admin1/user/pages/03.examples/02.modular/08._sbs-list", "");
    }
}
