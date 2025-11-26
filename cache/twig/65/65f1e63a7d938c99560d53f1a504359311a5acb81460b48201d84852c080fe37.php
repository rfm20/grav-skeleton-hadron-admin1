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

/* @Page:C:/xampp/htdocs/grav/grav-skeleton-hadron+admin1/user/pages/03.examples/05.shop/01.t-shirts */
class __TwigTemplate_45abba3a69736c71314945724e9e0b0b7514e968f3985d531e010e1152f337b5 extends \Twig\Template
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
        echo "<h1>T-Shirts</h1>
<div class=\"notices blue\">
<p><strong>Das ist eine Demoseite für einen Shop mit Snipcart in Grav mit Hadron. Dies ist kein echter Shop.</strong><br />
Zu Demonstrationszwecken sind die Produkte nicht echt und die Preise nicht gültig. Produkte können zum Warenkorb hinzugefügt werden und den Checkout-Prozess durchlaufen, aber es wird keine echte Zahlung verarbeitet.</p>
</div>
<h2>Wir haben sowohl <strong>coole</strong> als auch <strong>witzige</strong> T-Shirts</h2>";
    }

    public function getTemplateName()
    {
        return "@Page:C:/xampp/htdocs/grav/grav-skeleton-hadron+admin1/user/pages/03.examples/05.shop/01.t-shirts";
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
        return new Source("", "@Page:C:/xampp/htdocs/grav/grav-skeleton-hadron+admin1/user/pages/03.examples/05.shop/01.t-shirts", "");
    }
}
