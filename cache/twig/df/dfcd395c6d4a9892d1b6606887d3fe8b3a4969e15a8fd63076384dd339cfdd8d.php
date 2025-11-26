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

/* @Page:C:/xampp/htdocs/grav/grav-skeleton-hadron+admin1/user/pages/03.examples/05.shop/02.geek-toys/ia449-brick-mug */
class __TwigTemplate_f7098a4a78bd71762edc35a03f6afdf47de1fd8cf447afb6b78f040ac34d8fe1 extends \Twig\Template
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
        echo "<h4>Aliquam lectus ipsum, condimentum vitae erat eleifend</h4>
<p>Aliquam lectus ipsum, condimentum vitae erat eleifend, lobortis pretium ante. Duis tristique, dolor sed rutrum consectetur, lorem metus vulputate sapien, ornare tincidunt urna dolor eget eros. Morbi malesuada, neque eu pellentesque vehicula, sapien mi egestas ipsum, ut malesuada massa lorem a magna. Proin pharetra vehicula ante a tristique. Suspendisse molestie ligula et libero consectetur, nec vulputate purus pellentesque.</p>
<p>Quisque molestie id eros et semper. Fusce vel dapibus nisl. Nunc in eros tincidunt, vehicula libero sed, imperdiet tellus. Suspendisse eget ornare mauris, eu venenatis est. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Suspendisse semper, mi ut pulvinar aliquam, nisi sapien hendrerit ipsum, vitae ullamcorper orci leo sit amet enim. Donec ipsum turpis, porttitor in orci in, aliquam mollis tortor. Sed ac sem in leo ultricies commodo.</p>";
    }

    public function getTemplateName()
    {
        return "@Page:C:/xampp/htdocs/grav/grav-skeleton-hadron+admin1/user/pages/03.examples/05.shop/02.geek-toys/ia449-brick-mug";
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
        return new Source("", "@Page:C:/xampp/htdocs/grav/grav-skeleton-hadron+admin1/user/pages/03.examples/05.shop/02.geek-toys/ia449-brick-mug", "");
    }
}
