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

/* @Page:C:/xampp/htdocs/grav/grav-skeleton-hadron+admin1/user/pages/03.kegiatan */
class __TwigTemplate_35e292336efb7e83b199d1a51aec90b97198adac9c3183e6ed3b2b43616a5d20 extends \Twig\Template
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
        echo "<div class=\"columns\"></div>
<div class=\"column col-9 col-md-12 extra-spacing\"></div>
<p><img src=\"/grav/grav-skeleton-hadron%20admin1/kegiatan/688093ffadf80-2025-07-23.jpg\" alt=\"688093ffadf80-2025-07-23\" title=\"688093ffadf80-2025-07-23\"></p>
<h1>Kalender Kegiatan</h1>
<p><a href=\"/grav/grav-skeleton-hadron+admin1/en/kegiatan/a1%20program%20kegiatan.pdf\">a1 program kegiatan.pdf</a></p>";
    }

    public function getTemplateName()
    {
        return "@Page:C:/xampp/htdocs/grav/grav-skeleton-hadron+admin1/user/pages/03.kegiatan";
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
        return new Source("", "@Page:C:/xampp/htdocs/grav/grav-skeleton-hadron+admin1/user/pages/03.kegiatan", "");
    }
}
