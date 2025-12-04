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

/* @Page:C:/xampp/htdocs/grav/grav-skeleton-hadron+admin1/user/pages/07.examples/03.modular_grav/01._hero */
class __TwigTemplate_0c6f51aa3dea32ddae7b834e03fd6315d44186a61344170d5bbaf98422ffa1f4 extends \Twig\Template
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
<section id=\"\" class=\"section modular-hero hero parallax text-light \" style=\"background-image: url('/grav/grav-skeleton-hadron+admin1/images/h/e/a/d/e/header-daf644fb.jpg');\">
\t<div class=\"image-overlay\"></div>
\t<section class=\"container grid-lg\" style=\"text-align: center\">
\t\t\t\t
\t\t<body><h1>Say Hello to Grav</h1>
<h2 id=\"fast-simple-powerful\"><a href=\"#fast-simple-powerful\" class=\"toc-anchor before\" data-anchor-icon=\"#\" aria-label=\"Anchor\"></a>Fast, Simple, Powerful...</h2>
<p>Grav is a modern flat-file CMS system that focuses on making web development fun again.</p>
<p><a href=\"https://learn.getgrav.org\" class=\"btn btn-primary btn-lg external-link no-image\" target=\"_blank\" rel=\"nofollow noopener noreferrer\">Read the documentation</a></p></body>
\t</section>
\t<i id=\"to-start\" class=\"pulse fa fa-angle-down\"></i>
</section>
";
    }

    public function getTemplateName()
    {
        return "@Page:C:/xampp/htdocs/grav/grav-skeleton-hadron+admin1/user/pages/07.examples/03.modular_grav/01._hero";
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
        return new Source("", "@Page:C:/xampp/htdocs/grav/grav-skeleton-hadron+admin1/user/pages/07.examples/03.modular_grav/01._hero", "");
    }
}
