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

/* @Page:C:/xampp/htdocs/grav/grav-skeleton-hadron+admin1/user/pages/03.examples/09.h5p */
class __TwigTemplate_070589c33816f3f8b6c385ec1da9ca35fd4cf1dc282f74246a853fe2c4a99254 extends \Twig\Template
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
        echo "<h2 id=\"h5p-interactive\"><a href=\"#h5p-interactive\" class=\"toc-anchor before\" data-anchor-icon=\"#\" aria-label=\"Anchor\"></a>H5P (Interactive)</h2>
<p><a href=\"https://h5p.org\" target=\"_blank\" rel=\"nofollow noopener noreferrer\" class=\"external-link no-image\">H5P</a> is an open-source platform that allows you to create interactive content such as quizzes, presentations, and games. This page contains an example of H5P content embedded in a page.</p>";
    }

    public function getTemplateName()
    {
        return "@Page:C:/xampp/htdocs/grav/grav-skeleton-hadron+admin1/user/pages/03.examples/09.h5p";
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
        return new Source("", "@Page:C:/xampp/htdocs/grav/grav-skeleton-hadron+admin1/user/pages/03.examples/09.h5p", "");
    }
}
