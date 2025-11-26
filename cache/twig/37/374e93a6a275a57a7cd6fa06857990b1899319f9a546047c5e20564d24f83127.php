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

/* @Page:C:/xampp/htdocs/grav/grav-skeleton-hadron+admin1/user/pages/05.examples/03.modular_grav/03._callout */
class __TwigTemplate_2b1b344a6ed85725490f3423b39e18c5534b0461218f9f1506b86b1c647aad78 extends \Twig\Template
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
<section class=\"section modular-text \">
    <section class=\"container grid-lg\">
            <body><h2 id=\"your-content-unchained\"><a href=\"#your-content-unchained\" class=\"toc-anchor before\" data-anchor-icon=\"#\" aria-label=\"Anchor\"></a><strong>Your Content</strong> Unchained!</h2>
<p>No longer are you a <em>help captive by your CMS</em>. Grav <strong>empowers</strong> you to create anything from a <a href=\"https://demo.getgrav.org/onepage-skeleton\" target=\"_blank\" rel=\"nofollow noopener noreferrer\" class=\"external-link no-image\">simple one-page site</a>, to a <a href=\"https://demo.getgrav.org/blog-skeleton\" target=\"_blank\" rel=\"nofollow noopener noreferrer\" class=\"external-link no-image\">beautiful blog</a>, to a powerful and feature-rich <a href=\"https://demo.getgrav.org/shop-skeleton\" target=\"_blank\" rel=\"nofollow noopener noreferrer\" class=\"external-link no-image\">shop site</a>, to pretty much anything you can dream up!</p>
<p><a href=\"https://getgrav.org\" class=\"btn btn-secondary btn-lg external-link no-image\" target=\"_blank\" rel=\"nofollow noopener noreferrer\">Find out more...</a></p></body>
    </section>
</section>
";
    }

    public function getTemplateName()
    {
        return "@Page:C:/xampp/htdocs/grav/grav-skeleton-hadron+admin1/user/pages/05.examples/03.modular_grav/03._callout";
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
        return new Source("", "@Page:C:/xampp/htdocs/grav/grav-skeleton-hadron+admin1/user/pages/05.examples/03.modular_grav/03._callout", "");
    }
}
