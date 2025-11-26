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

/* @Page:C:/xampp/htdocs/grav/grav-skeleton-hadron+admin1/user/pages/04.blog/02.test01 */
class __TwigTemplate_1e805bcad5dc5c7c9a9e12b75718537da286fa3294c40d168aed8d36515eb3a9 extends \Twig\Template
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
        echo "<body><div class=\"notices blue\">
<p>This example post shows how a blog can look in Grav.</p>
</div>
<p>===</p>
<h1>Example Post</h1>
<p>This post is an example of a blog post in Grav. It demonstrates how a blog can look in Grav and what features it offers.</p>
<h2 id=\"heading-2\"><a href=\"#heading-2\" class=\"toc-anchor before\" data-anchor-icon=\"#\" aria-label=\"Anchor\"></a>Heading 2</h2>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cum arcu vulputate rutrum tincidunt amet adipiscing taciti bibendum. Habitant proin faucibus potenti massa orci ullamcorper velit diam. Nisi vehicula mi massa tempor mattis commodo orci venenatis. Felis rhoncus iaculis mollis dictum in velit cras sociosqu.</p>
<p>Elementum fusce metus pellentesque semper nisl turpis est semper. Inceptos vivamus nisi in sollicitudin sagittis felis ipsum massa. Placerat cubilia adipiscing tempor euismod suscipit conubia egestas praesent. Nam fermentum tortor id velit lobortis quis tincidunt lacinia. Tellus cum class vivamus habitasse etiam senectus tempus quam.</p>
<p>Hac facilisi vivamus mus condimentum erat posuere sed rutrum. Diam porta semper scelerisque dolor ultrices mus ac inceptos. Proin imperdiet convallis hac arcu leo sem accumsan mattis. Sapien sit eget id nullam felis auctor fringilla fringilla. Nostra gravida mattis suscipit magna magna eget tellus urna.</p>
<h3 id=\"heading-3\"><a href=\"#heading-3\" class=\"toc-anchor before\" data-anchor-icon=\"#\" aria-label=\"Anchor\"></a>Heading 3</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cum arcu vulputate rutrum tincidunt amet adipiscing taciti bibendum. Habitant proin faucibus potenti massa orci ullamcorper velit diam. Nisi vehicula mi massa tempor mattis commodo orci venenatis. Felis rhoncus iaculis mollis dictum in velit cras sociosqu.</p></body>";
    }

    public function getTemplateName()
    {
        return "@Page:C:/xampp/htdocs/grav/grav-skeleton-hadron+admin1/user/pages/04.blog/02.test01";
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
        return new Source("", "@Page:C:/xampp/htdocs/grav/grav-skeleton-hadron+admin1/user/pages/04.blog/02.test01", "");
    }
}
