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

/* @Page:C:/xampp/htdocs/grav/grav-skeleton-hadron+admin1/user/pages/03.examples/08.sections/01.section-one */
class __TwigTemplate_a07b4c1bcf82b96c42bc4a6a92bbe2973500d915c2281b6fcdbb4c4e8ea79298 extends \Twig\Template
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
        echo "<p>Aliquam nulla felis, fringilla nec lobortis a, faucibus a magna. Nulla faucibus ullamcorper risus, eget molestie ante consequat tristique. Vestibulum eget felis eu leo aliquet cursus. Nunc lobortis purus rhoncus libero tempor, in finibus dui dictum. Cras eu fermentum velit. Mauris in urna vitae eros faucibus commodo. Curabitur in massa sagittis, faucibus ante nec, feugiat tortor. Phasellus et posuere nulla, finibus interdum enim. Praesent commodo convallis orci nec lacinia. Nunc ultricies non ante id efficitur. Quisque dui sapien, sollicitudin sagittis interdum quis, pharetra id felis. Donec nec metus rhoncus, commodo magna ac, auctor turpis. Cras at lobortis mi, et facilisis mi. Proin consequat pharetra nunc, sit amet iaculis sem pulvinar ornare. Maecenas semper euismod ipsum, eget tincidunt libero malesuada at. In hac habitasse platea dictumst.</p>";
    }

    public function getTemplateName()
    {
        return "@Page:C:/xampp/htdocs/grav/grav-skeleton-hadron+admin1/user/pages/03.examples/08.sections/01.section-one";
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
        return new Source("", "@Page:C:/xampp/htdocs/grav/grav-skeleton-hadron+admin1/user/pages/03.examples/08.sections/01.section-one", "");
    }
}
