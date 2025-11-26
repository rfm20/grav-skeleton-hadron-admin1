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

/* @Page:C:/xampp/htdocs/grav/grav-skeleton-hadron+admin1/user/pages/03.examples/02.modular/07._sbs-item */
class __TwigTemplate_282237f32d0292d37752e5cf06222b0e36baf07ece97a981b5d7ffb7c6a83d16 extends \Twig\Template
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
<section class=\"section modular-sbs-list sbs sbs-list \">
    <section class=\"container grid-lg\">
        \t<div class=\"sbs layout-left\">
\t<div class=\"sbs-image\">
\t\t<img src=\"/examples/modular/image.webp\" alt=\"The image description\">
\t</div>

\t<div class=\"sbs-content center-left\">
\t\t<body><h2 id=\"sbs-item\"><a href=\"#sbs-item\" class=\"toc-anchor before\" data-anchor-icon=\"#\" aria-label=\"Anchor\"></a>SbS Item</h2>
<p>The SbS item is a single block of an SbS layout. It can be positioned left or right and can contain an image and text. The text can be aligned to 9 positions.</p></body>
\t</div>
</div>
    </section>
</section>
";
    }

    public function getTemplateName()
    {
        return "@Page:C:/xampp/htdocs/grav/grav-skeleton-hadron+admin1/user/pages/03.examples/02.modular/07._sbs-item";
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
        return new Source("", "@Page:C:/xampp/htdocs/grav/grav-skeleton-hadron+admin1/user/pages/03.examples/02.modular/07._sbs-item", "");
    }
}
