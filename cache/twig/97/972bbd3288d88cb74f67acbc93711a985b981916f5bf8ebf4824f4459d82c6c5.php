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

/* @Page:C:/xampp/htdocs/grav/grav-skeleton-hadron+admin1/user/pages/05.examples/02.modular/01._hero */
class __TwigTemplate_2a35bc502d5db8241ed16086118ae4594493ba073b15b2895e4d9e6706c5b555 extends \Twig\Template
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
<section id=\"\" class=\"section modular-hero hero parallax text-light \" style=\"background-image: url('/grav/grav-skeleton-hadron+admin1/images/h/e/r/o/-/hero-8dc50749.jpg');\">
\t<div class=\"image-overlay\"></div>
\t<section class=\"container grid-lg\" style=\"text-align: center\">
\t\t\t\t
\t\t<body><h1>Modular Page</h1>
<h2 id=\"page-with-independent-mod\"><a href=\"#page-with-independent-mod\" class=\"toc-anchor before\" data-anchor-icon=\"#\" aria-label=\"Anchor\"></a>Page with independent modules</h2>
<p>This modular page consists of several independent modules that can be combined and arranged in any way. Each module can be configured individually and contains its own content.</p>
<p>This is the Hero module with a background image, a title, and a subtitle. It can optionally be styled with a parallax effect or other styles.</p></body>
\t</section>
\t<i id=\"to-start\" class=\"pulse fa fa-angle-down\"></i>
</section>
";
    }

    public function getTemplateName()
    {
        return "@Page:C:/xampp/htdocs/grav/grav-skeleton-hadron+admin1/user/pages/05.examples/02.modular/01._hero";
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
        return new Source("", "@Page:C:/xampp/htdocs/grav/grav-skeleton-hadron+admin1/user/pages/05.examples/02.modular/01._hero", "");
    }
}
