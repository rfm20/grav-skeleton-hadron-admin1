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

/* @Page:C:/xampp/htdocs/grav/grav-skeleton-hadron+admin1/user/pages/05.PPID/ppid-1 */
class __TwigTemplate_5b4f271526299255fe96fefa055139c3b2b01ad166acebe72394c9fd03da65ad extends \Twig\Template
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
        echo "<h1>Tata Cara Permohonan Informasi</h1>
<p><img src=\"/grav/grav-skeleton-hadron%20admin1/ppid/ppid-1/3.-TATA-CARA-PERMOHONAN-INFORMASI-2048x1148.jpg\" alt=\"3.-TATA-CARA-PERMOHONAN-INFORMASI-2048x1148\" title=\"3.-TATA-CARA-PERMOHONAN-INFORMASI-2048x1148\"></p>
<p>Tata cara memperoleh informasi publik
<img src=\"/grav/grav-skeleton-hadron%20admin1/ppid/ppid-1/TATA%20CARA%20MEMPEROLEH%20INFORMASI%20PUBLIK_page-0001.jpg\" alt=\"TATA%20CARA%20MEMPEROLEH%20INFORMASI%20PUBLIK_page-0001\" title=\"TATA%20CARA%20MEMPEROLEH%20INFORMASI%20PUBLIK_page-0001\"></p>";
    }

    public function getTemplateName()
    {
        return "@Page:C:/xampp/htdocs/grav/grav-skeleton-hadron+admin1/user/pages/05.PPID/ppid-1";
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
        return new Source("", "@Page:C:/xampp/htdocs/grav/grav-skeleton-hadron+admin1/user/pages/05.PPID/ppid-1", "");
    }
}
