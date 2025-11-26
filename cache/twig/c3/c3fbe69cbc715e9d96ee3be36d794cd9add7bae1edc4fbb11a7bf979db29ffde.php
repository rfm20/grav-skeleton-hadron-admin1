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

/* @Page:C:/xampp/htdocs/grav/grav-skeleton-hadron+admin1/user/pages/01.home/01._hero */
class __TwigTemplate_54fb7bd1dc92b4c235b4322a702cd091865898dcf2a036e07754faeed2869e18 extends \Twig\Template
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
<section id=\"\" class=\"section modular-hero hero parallax text-light \" style=\"background-image: url('/grav/grav-skeleton-hadron+admin1/images/h/e/a/d/e/header-3189bd88.webp');\">
\t<div class=\"image-overlay\"></div>
\t<section class=\"container grid-lg\" style=\"text-align: center\">
\t\t\t\t
\t\t<body><h1>learn about <span class=\"hadron-font\"><strong>Hadron</strong></span></h1>
<h2 id=\"website-webshop-modern-fa\">Website &amp; Webshop: modern, fast, for beginners and professionals</h2>
<p>Hadron is more than just a modern and customizable <a href=\"https://getgrav.org\" target=\"_blank\" rel=\"nofollow noopener noreferrer\" class=\"external-link no-image\">Grav</a> theme and skeleton. It is optimized for beginners to quickly create a simple website, while also being suitable for professionals who want to use Hadron as a foundation for a complex website with custom-developed features.</p>
<p>Hadron is licences under the  <a href=\"https://github.com/Crabston/grav-skeleton-hadron?tab=MIT-1-ov-file#readme\" target=\"_blank\" rel=\"nofollow noopener noreferrer\" class=\"external-link no-image\">MIT licence</a> and can be used freely for personal and commercial purposes.</p></body>
\t</section>
\t<i id=\"to-start\" class=\"pulse fa fa-angle-down\"></i>
</section>
";
    }

    public function getTemplateName()
    {
        return "@Page:C:/xampp/htdocs/grav/grav-skeleton-hadron+admin1/user/pages/01.home/01._hero";
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
        return new Source("", "@Page:C:/xampp/htdocs/grav/grav-skeleton-hadron+admin1/user/pages/01.home/01._hero", "");
    }
}
