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

/* @Page:C:/xampp/htdocs/grav/grav-skeleton-hadron+admin1/user/pages/04.blog/03.test02 */
class __TwigTemplate_4d00d939c4b046cb34252f399a8f66590b735d0c4db1a7f667eede419894fe8a extends \Twig\Template
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
        echo "<body><p>Pada tanggal 13–15 November 2024, bertempat di Hotel Transera Pontianak, telah dilaksanakan Bimbingan Teknis Pengelolaan BUMDesa bagi perwakilan desa-desa di Kalimantan Barat. Kegiatan ini bertujuan untuk meningkatkan kompetensi dalam pengelolaan Badan Usaha Milik Desa (BUMDesa).</p>
<p>Diharapkan melalui kegiatan ini, BUMDesa dapat menjadi motor penggerak pembangunan desa yang mandiri dan berdaya saing.</p>
<p>===</p>
<p>Your page content goes here.</p></body>";
    }

    public function getTemplateName()
    {
        return "@Page:C:/xampp/htdocs/grav/grav-skeleton-hadron+admin1/user/pages/04.blog/03.test02";
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
        return new Source("", "@Page:C:/xampp/htdocs/grav/grav-skeleton-hadron+admin1/user/pages/04.blog/03.test02", "");
    }
}
