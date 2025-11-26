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

/* @Page:C:/xampp/htdocs/grav/grav-skeleton-hadron+admin1/user/pages/03.examples/08.sections/03.section-three/02.subsection-two */
class __TwigTemplate_486369e0e3454c04170df4995b6d56f786e09228c7691935d2a8f9da89f9506b extends \Twig\Template
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
        echo "<p>Vivamus malesuada lacinia ante vitae tincidunt. Etiam hendrerit cursus tortor quis placerat. Suspendisse tincidunt mi tellus, a eleifend turpis egestas quis. Nunc vulputate enim a maximus iaculis. Cras at nisi nec dolor ullamcorper dapibus. Etiam in leo non tellus pretium ultricies. Duis non quam imperdiet, sodales est in, volutpat risus.</p>
<p>Nunc eget odio luctus, vestibulum ligula non, interdum massa. Ut scelerisque tincidunt justo feugiat sagittis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Fusce vulputate elementum eros vitae efficitur. Sed volutpat in diam nec ornare. Sed consequat, arcu lacinia vehicula sodales, velit erat condimentum ante, vel vestibulum libero quam ac orci. Sed placerat, nunc vitae euismod convallis, orci justo accumsan odio, non vehicula neque eros id libero. Donec in sagittis risus.</p>";
    }

    public function getTemplateName()
    {
        return "@Page:C:/xampp/htdocs/grav/grav-skeleton-hadron+admin1/user/pages/03.examples/08.sections/03.section-three/02.subsection-two";
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
        return new Source("", "@Page:C:/xampp/htdocs/grav/grav-skeleton-hadron+admin1/user/pages/03.examples/08.sections/03.section-three/02.subsection-two", "");
    }
}
