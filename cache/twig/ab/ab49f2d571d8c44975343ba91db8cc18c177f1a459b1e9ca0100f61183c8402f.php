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

/* @Page:C:/xampp/htdocs/grav/grav-skeleton-hadron+admin1/user/pages/01.home/03._contact */
class __TwigTemplate_88a1df62553b8889c7d38e2c6cfbd1ef9e2169edbf4279e8c320ef67b79012b1 extends \Twig\Template
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
            <body><h2 id=\"contact\">Contact</h2>
<p>Do you have a question about Hadron? Write us an e-mail to <a href=\"mailto:hadron@crabston.dev\" class=\"mailto\">hadron@crabston.dev</a>.</p>
<p>Are you searching for a web developer or web designer, who builds your new website with Hadron? You can find more information on the website of <a href=\"https://crabston.ch/?utm_source=usehadron.dev&amp;utm_medium=contact\" target=\"_blank\" rel=\"nofollow noopener noreferrer\" class=\"external-link no-image\">Crabston GmbH</a>, the developer of hadron.</p>
<p><a href=\"https://crabston.ch/%C3%BCber/kontakt?utm_source=usehadron.dev&amp;utm_medium=contact\" class=\"btn btn-secondary btn-lg external-link no-image\" target=\"_blank\" rel=\"nofollow noopener noreferrer\">Contact form</a></p></body>
    </section>
</section>
";
    }

    public function getTemplateName()
    {
        return "@Page:C:/xampp/htdocs/grav/grav-skeleton-hadron+admin1/user/pages/01.home/03._contact";
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
        return new Source("", "@Page:C:/xampp/htdocs/grav/grav-skeleton-hadron+admin1/user/pages/01.home/03._contact", "");
    }
}
