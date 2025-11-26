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

/* @Page:C:/xampp/htdocs/grav/grav-skeleton-hadron+admin1/user/pages/03.examples/05.shop/01.t-shirts/ts982-reynholm-industries */
class __TwigTemplate_8952acbd264ff8fae92046844d14921b433a7fb76c9055cb8149ad8addb546ed extends \Twig\Template
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
        echo "<h2>Nullam tristique, arcu non iaculis condimentum, nulla dui luctus elit</h2>
<p>Morbi rutrum nunc urna, eu pharetra risus mollis id. Proin blandit feugiat porttitor. Duis tincidunt imperdiet justo, nec gravida enim tempus ut.</p>
<p>===</p>
<p>Sed vehicula tortor leo eget arcu. Nunc viverra mattis erat, non fringilla arcu elementum et. Vestibulum sit amet pulvinar justo. Ut at vulputate ipsum.</p>
<p>Nunc magna massa, ultricies quis diam consectetur, pretium ultricies diam. Cras non sagittis turpis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla at felis ultricies, commodo elit in, pulvinar felis. Aenean luctus faucibus mauris, quis pharetra dui cursus ut. Suspendisse tristique iaculis interdum. Aliquam dictum tempus nunc, ut semper lacus condimentum dignissim. Suspendisse quis justo ornare, pretium lectus eget, bibendum lacus. Pellentesque in mollis turpis.</p>";
    }

    public function getTemplateName()
    {
        return "@Page:C:/xampp/htdocs/grav/grav-skeleton-hadron+admin1/user/pages/03.examples/05.shop/01.t-shirts/ts982-reynholm-industries";
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
        return new Source("", "@Page:C:/xampp/htdocs/grav/grav-skeleton-hadron+admin1/user/pages/03.examples/05.shop/01.t-shirts/ts982-reynholm-industries", "");
    }
}
