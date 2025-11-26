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

/* @Page:C:/xampp/htdocs/grav/grav-skeleton-hadron+admin1/user/pages/05.examples/08.sections */
class __TwigTemplate_a2525630eb0953fce53bcaddc4280d26130a9dcdd208098e518aa33a28837a57 extends \Twig\Template
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
        echo "<div class=\"sections-page-title\">
<h3 id=\"sections\"><a href=\"#sections\" class=\"toc-anchor before\" data-anchor-icon=\"#\" aria-label=\"Anchor\"></a>Sections</h3>
</div>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce molestie iaculis nisl sed interdum. Praesent mi nisl, efficitur in felis vel, molestie sollicitudin eros. Mauris urna quam, euismod nec lacinia non, dignissim eu odio. Donec nisl nibh, facilisis at nisl vitae, porttitor hendrerit libero. Integer vel neque in ante condimentum malesuada. Mauris dictum nunc enim, non tincidunt arcu tincidunt vel. Aliquam gravida, massa id semper tincidunt, tellus sapien accumsan tortor, in placerat arcu justo ac urna. Vestibulum blandit ultrices neque, eget congue tortor vehicula id.</p>";
    }

    public function getTemplateName()
    {
        return "@Page:C:/xampp/htdocs/grav/grav-skeleton-hadron+admin1/user/pages/05.examples/08.sections";
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
        return new Source("", "@Page:C:/xampp/htdocs/grav/grav-skeleton-hadron+admin1/user/pages/05.examples/08.sections", "");
    }
}
