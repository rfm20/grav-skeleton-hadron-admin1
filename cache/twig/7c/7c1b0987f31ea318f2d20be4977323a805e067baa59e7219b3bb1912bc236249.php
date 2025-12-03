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

/* @Page:C:/xampp/htdocs/grav/grav-skeleton-hadron+admin1/user/pages/03.kegiatan */
class __TwigTemplate_bce9d06face6bf39c61bbae57abd2cfce2f30274e2829823ff84a054db8e2ec4 extends \Twig\Template
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
        echo "<style>
/* HERO SECTION */
.profile-hero {
  text-align:center;
  padding: 60px 20px;
  margin-bottom:40px;
  background: linear-gradient(135deg, #064e3b, #15803d);
  color: white;
  border-radius: 18px;
  box-shadow: 0 4px 20px rgba(0,0,0,0.2);
}

.profile-hero h1 {
  margin:0;
  font-size:2.6rem;
  font-weight:700;
  color:#fff;
}

.profile-hero p {
  margin-top:10px;
  font-size:1.2rem;
  opacity:0.95;
  line-height:1.5;
}

/* CARD SECTION */
.profile-card {
  background: #ffffff;
  padding: 40px 30px;
  margin: 0 auto 40px auto;
  border-radius: 16px;
  box-shadow: 0 4px 20px rgba(0,0,0,0.08);
  max-width: 800px;
  text-align:center;
}

.profile-card h2 {
  margin-top:0;
  color:#064e3b;
  font-weight:700;
}

.profile-card p {
  color:#444;
  line-height:1.65;
  margin-bottom:20px;
}

/* PDF BUTTON */
.pdf-link {
  display: inline-block;
  padding: 12px 22px;
  background-color: #15803d;
  color: #fff !important;          
  font-weight:600;
  border-radius: 10px;
  text-decoration: none;
  transition: background 0.3s ease;
}

.pdf-link:hover {
  background-color: #064e3b;
}
</style>
<!-- HERO SECTION -->
<div class=\"profile-hero\">
  <h1>Kegiatan &amp; Laporan</h1>
  <p>
    Dokumen dan kalender kegiatan Dinas Pemberdayaan Masyarakat dan Desa <br>
    Provinsi Kalimantan Barat
  </p>
</div>
<!-- KALENDER KEGIATAN -->
<div class=\"profile-card\">
  <h2 id=\"kalender-kegiatan\"><a href=\"#kalender-kegiatan\" class=\"toc-anchor before\" data-anchor-icon=\"#\" aria-label=\"Anchor\"></a>Kalender Kegiatan</h2>
  <p>
    Berikut adalah dokumen program kegiatan yang dapat diunduh:
  </p>

  <!-- HARUS PAKAI MARKDOWN TAG supaya Grav render link PDF -->
  ";
        // line 82
        ob_start();
        // line 83
        echo "[Program Kegiatan](a1-program-kegiatan.pdf){.pdf-link}
  ";
        $content = ob_get_clean();
        preg_match("/^\s*/", $content, $matches);
        $lines = explode("\n", $content);
        $content = preg_replace('/^' . $matches[0]. '/', "", $lines);
        $content = join("\n", $content);
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->markdownFunction($context, $content);
        // line 85
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "@Page:C:/xampp/htdocs/grav/grav-skeleton-hadron+admin1/user/pages/03.kegiatan";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 85,  115 => 83,  113 => 82,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@Page:C:/xampp/htdocs/grav/grav-skeleton-hadron+admin1/user/pages/03.kegiatan", "");
    }
}
