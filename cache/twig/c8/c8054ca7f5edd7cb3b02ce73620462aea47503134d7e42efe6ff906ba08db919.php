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

/* @Page:C:/xampp/htdocs/grav/grav-skeleton-hadron+admin1/user/pages/03.examples/02.modular/06._cards */
class __TwigTemplate_4250e1f24980696e918855bf91745efbff42be6888a1b103a6c7e9334e3e3686 extends \Twig\Template
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
<section class=\"section modular-cards cards \">
    <section class=\"container grid-lg\">
        \t<body><h2 id=\"cards\"><a href=\"#cards\" class=\"toc-anchor before\" data-anchor-icon=\"#\" aria-label=\"Anchor\"></a>Cards</h2>
<p>This module is an example of using cards. It can be used to present various information or features in a compact format. Each card can include an image, a title, text, and a link that leads to another page.</p></body>
\t<div class=\"cards-list\">
\t\t\t\t\t<div class=\"card\">
\t<div class=\"card-image\">
\t\t<img src=\"/examples/modular/image.webp\" alt=\"Title of the Card\" class=\"img-responsive\">
\t</div>

\t<div class=\"card-header\">
\t\t<div class=\"card-title\">
\t\t\t<h4>Title of the Card</h4>
\t\t</div>
\t</div>

\t<div class=\"card-body\">
\t\t            <p>This is an example text for the card. Here you can add a brief description or information.</p>
\t\t
\t\t<a href=\"/home\" class=\"btn\">This is a link</a>
\t</div>
</div>
\t\t\t\t\t<div class=\"card\">
\t<div class=\"card-image\">
\t\t<img src=\"/examples/modular/image.webp\" alt=\"Another Card\" class=\"img-responsive\">
\t</div>

\t<div class=\"card-header\">
\t\t<div class=\"card-title\">
\t\t\t<h4>Another Card</h4>
\t\t</div>
\t</div>

\t<div class=\"card-body\">
\t\t            <p>This is also an example text for another card. Here you can provide additional information.</p>
\t\t
\t\t<a href=\"/home\" class=\"btn\">another link</a>
\t</div>
</div>
\t\t\t</div>
    </section>
</section>
";
    }

    public function getTemplateName()
    {
        return "@Page:C:/xampp/htdocs/grav/grav-skeleton-hadron+admin1/user/pages/03.examples/02.modular/06._cards";
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
        return new Source("", "@Page:C:/xampp/htdocs/grav/grav-skeleton-hadron+admin1/user/pages/03.examples/02.modular/06._cards", "");
    }
}
