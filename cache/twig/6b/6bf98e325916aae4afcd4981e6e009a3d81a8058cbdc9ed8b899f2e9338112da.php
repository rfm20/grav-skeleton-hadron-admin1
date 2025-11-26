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

/* @Page:C:/xampp/htdocs/grav/grav-skeleton-hadron+admin1/user/pages/03.examples/08.sections/03.section-three/01.subsection-one */
class __TwigTemplate_50d02fa20ada37c8df95bceb366eff624ee41b29cf66dba27795b0553fef555f extends \Twig\Template
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
        echo "<p>Aenean maximus placerat mi. Proin a porttitor leo, quis commodo ex. Praesent sit amet neque turpis. Sed fermentum, massa et iaculis vehicula, ligula ipsum tempus diam, ut placerat ligula nisi sed arcu. Nulla dictum sagittis enim sed hendrerit. Nunc eget vestibulum nisl. Integer at ex quis nulla lacinia vulputate a vel neque. Nam elementum id justo vel scelerisque. Fusce finibus erat at purus tincidunt aliquet. Mauris molestie maximus pellentesque. Sed finibus mattis turpis, quis fringilla mi varius vel. Morbi dictum, magna et sollicitudin dignissim, enim libero varius sapien, sit amet sagittis mi quam nec ligula. Proin consectetur nec sapien ac tincidunt. Aliquam faucibus leo a diam ultricies, eu luctus felis consectetur. Ut malesuada turpis id purus viverra, faucibus tempus augue placerat.</p>";
    }

    public function getTemplateName()
    {
        return "@Page:C:/xampp/htdocs/grav/grav-skeleton-hadron+admin1/user/pages/03.examples/08.sections/03.section-three/01.subsection-one";
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
        return new Source("", "@Page:C:/xampp/htdocs/grav/grav-skeleton-hadron+admin1/user/pages/03.examples/08.sections/03.section-three/01.subsection-one", "");
    }
}
