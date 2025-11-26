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

/* @Page:C:/xampp/htdocs/grav/grav-skeleton-hadron+admin1/user/pages/03.examples/05.shop/02.geek-toys/pt221-stuffy-turret */
class __TwigTemplate_3d2c1ca18140e937a528e58f1e5c253c8c239f6f4e2a42404ed262b1c42374d0 extends \Twig\Template
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
        echo "<h4>Duis aliquam, diam ac mollis semper, tortor mauris tincidunt orci</h4>
<p>Non commodo ligula libero vitae magna. Duis sed nunc nunc. Praesent pretium nec lectus sit amet elementum. Aenean rhoncus at libero eu elementum. Integer libero enim, cursus ac enim non, tincidunt ornare diam. Quisque orci purus, porta pellentesque porta quis, eleifend ullamcorper massa. Mauris gravida orci ante, sit amet malesuada felis placerat eget.</p>
<p>Nulla non pretium metus. Etiam eget scelerisque massa. Praesent at lacinia eros, nec tincidunt eros. Proin at urna condimentum, elementum odio eu, feugiat risus. Mauris quis hendrerit nunc. Quisque at metus vel mauris dignissim pellentesque. Aenean tempor lectus odio. Morbi iaculis mi eu ante accumsan pellentesque. Nunc tempor a massa nec feugiat. Vestibulum quis sem adipiscing, rutrum odio id, mollis leo. Morbi in justo lobortis, vehicula risus id, vulputate tortor.</p>";
    }

    public function getTemplateName()
    {
        return "@Page:C:/xampp/htdocs/grav/grav-skeleton-hadron+admin1/user/pages/03.examples/05.shop/02.geek-toys/pt221-stuffy-turret";
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
        return new Source("", "@Page:C:/xampp/htdocs/grav/grav-skeleton-hadron+admin1/user/pages/03.examples/05.shop/02.geek-toys/pt221-stuffy-turret", "");
    }
}
