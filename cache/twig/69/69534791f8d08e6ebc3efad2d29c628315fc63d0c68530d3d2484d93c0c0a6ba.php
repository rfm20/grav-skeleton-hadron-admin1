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

/* @Page:C:/xampp/htdocs/grav/grav-skeleton-hadron+admin1/user/pages/02.profil/profil-2 */
class __TwigTemplate_df281ecc4f266374f262e1a0ecfda6ffea56d26d9a59953e8886a21a47b8f636 extends \Twig\Template
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
/* ================================ */
.page-wrapper {
  max-width: 900px;
  margin: 0 auto;
  padding: 20px;
}

/* ================================ */
.section-title {
  text-align: center;
  margin: 0 0 40px 0;
  padding-bottom: 15px;
  border-bottom: 3px solid #0d6e4f;
  font-size: 2.2rem;
  font-weight: 800;
  color: #0d6e4f;
}

/* ================================ */
.section-card {
  background: #ffffff;
  padding: 30px 35px;
  margin-bottom: 35px;
  border-radius: 18px;
  box-shadow: 0 4px 15px rgba(0,0,0,0.08);
}

/* ================================ */
.section-card h2 {
  color: #0d6e4f;
  font-weight: 700;
  margin-top: 0;
  margin-bottom: 18px;
  font-size: 1.65rem;
}

/* ================================ */
.image-wrapper {
  text-align: center;
}

.image-wrapper img {
  max-width: 100%;
  border-radius: 14px;
  box-shadow: 0 4px 12px rgba(0,0,0,0.08);
}

/* ================================ */
.lhkpn-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
  gap: 20px;
  margin-top: 15px;
}

.lhkpn-card {
  background: #f0fdf4;
  border-left: 6px solid #0d6e4f;
  padding: 18px;
  border-radius: 12px;
  text-align: center;
  box-shadow: 0 2px 8px rgba(0,0,0,0.05);
}

.lhkpn-card img {
  max-width: 100%;
  margin-top: 10px;
  border-radius: 10px;
}

/* ================================ */
.link-list {
  display: flex;
  flex-direction: column;
  gap: 12px;
  margin-top: 15px;
}

.link-btn {
  background: #0d6e4f;
  color: #ffffff !important;
  padding: 12px 18px;
  border-radius: 10px;
  text-align: center;
  font-weight: 600;
  transition: 0.25s ease;
  display: block;
}

.link-btn:hover {
  background: #0b5d42;
  transform: translateY(-2px);
}
</style>
<div class=\"page-wrapper\">

<div class=\"section-title\">Profil Pejabat</div>

<!-- ====================== -->
<!--       PROFIL FOTO      -->
<!-- ====================== -->
<div class=\"section-card\">
  <div class=\"image-wrapper\">
    ";
        // line 105
        ob_start();
        // line 106
        echo "![Profil-Pimpinan-Dinas-PMD-Kalbar-2023-3-pdf](Profil-Pimpinan-Dinas-PMD-Kalbar-2023-3-pdf.jpg \"Profil-Pimpinan\")
    ";
        $content = ob_get_clean();
        preg_match("/^\s*/", $content, $matches);
        $lines = explode("\n", $content);
        $content = preg_replace('/^' . $matches[0]. '/', "", $lines);
        $content = join("\n", $content);
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->markdownFunction($context, $content);
        // line 108
        echo "  </div>
</div>

<!-- ====================== -->
<!--   LHKPN PIMPINAN       -->
<!-- ====================== -->
<div class=\"section-card\">
  <h2 id=\"lhkpn-pimpinan\"><a href=\"#lhkpn-pimpinan\" class=\"toc-anchor before\" data-anchor-icon=\"#\" aria-label=\"Anchor\"></a>LHKPN Pimpinan</h2>

  <div class=\"lhkpn-grid\">

    <div class=\"lhkpn-card\">
      <strong>LHKPN Tahun 2023</strong>
      <br>
      ";
        // line 122
        ob_start();
        // line 123
        echo "![2023-LHKPN-KADIS-2022](2023-LHKPN-KADIS-2022_images-extracted-1-768x1081.jpg \"LHKPN 2023\")
      ";
        $content = ob_get_clean();
        preg_match("/^\s*/", $content, $matches);
        $lines = explode("\n", $content);
        $content = preg_replace('/^' . $matches[0]. '/', "", $lines);
        $content = join("\n", $content);
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->markdownFunction($context, $content);
        // line 125
        echo "    </div>

    <div class=\"lhkpn-card\">
      <strong>LHKPN Tahun 2024</strong>
      <br>
      ";
        // line 130
        ob_start();
        // line 131
        echo "![2024-LHKPN-HENDRA-BACHTIAR](2024-LHKPN-HENDRA-BACHTIAR.jpeg \"LHKPN 2024\")
      ";
        $content = ob_get_clean();
        preg_match("/^\s*/", $content, $matches);
        $lines = explode("\n", $content);
        $content = preg_replace('/^' . $matches[0]. '/', "", $lines);
        $content = join("\n", $content);
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->markdownFunction($context, $content);
        // line 133
        echo "    </div>

    <div class=\"lhkpn-card\">
      <strong>LHKPN Tahun 2025</strong>
      <br>
      ";
        // line 138
        ob_start();
        // line 139
        echo "![2025-LHKPN-Hendra-Bachtiar](2025-LHKPN-Hendra-Bachtiar.jpg \"LHKPN 2025\")
      ";
        $content = ob_get_clean();
        preg_match("/^\s*/", $content, $matches);
        $lines = explode("\n", $content);
        $content = preg_replace('/^' . $matches[0]. '/', "", $lines);
        $content = join("\n", $content);
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->markdownFunction($context, $content);
        // line 141
        echo "    </div>

  </div>
</div>

<!-- ====================== -->
<!--   LINK LIST LHKPN      -->
<!-- ====================== -->
<div class=\"section-card\">
  <h2 id=\"lhkpn-dan-lhkasn\"><a href=\"#lhkpn-dan-lhkasn\" class=\"toc-anchor before\" data-anchor-icon=\"#\" aria-label=\"Anchor\"></a>LHKPN dan LHKASN</h2>

  <div class=\"link-list\">

    <a class=\"link-btn\" href=\"https://datacloud.kalbarprov.go.id/index.php/s/yqgbGJNmrGLcxKC\" target=\"_blank\">
      LHKPN dan LHKASN
    </a>

    <a class=\"link-btn\" href=\"https://drive.google.com/drive/folders/1utSegR0Jrw7gvP0Eviffh4i1ewdPFTf8\" target=\"_blank\">
      LHKPN Tahun 2024
    </a>

    <a class=\"link-btn\" href=\"https://drive.google.com/file/d/1_CkrYjwVpA4uEBYM29Hnabp5CFKNLCCA/view\" target=\"_blank\">
      Rekap LHKPN
    </a>

    <a class=\"link-btn\" href=\"https://drive.google.com/file/d/1Jn7AhOsOJvPK6GpJAdDLQQKmRtieBvbF/view\" target=\"_blank\">
      LHKPN &amp; LHKASN Tahun 2025
    </a>

    <a class=\"link-btn\" href=\"https://drive.google.com/file/d/1t6cmlA11QeXTdGTuoCs2lFMvqwZiJGub/view\" target=\"_blank\">
      Rekap LHKPN Tahun 2025
    </a>

  </div>
</div>

</div>";
    }

    public function getTemplateName()
    {
        return "@Page:C:/xampp/htdocs/grav/grav-skeleton-hadron+admin1/user/pages/02.profil/profil-2";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 141,  201 => 139,  199 => 138,  192 => 133,  183 => 131,  181 => 130,  174 => 125,  165 => 123,  163 => 122,  147 => 108,  138 => 106,  136 => 105,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@Page:C:/xampp/htdocs/grav/grav-skeleton-hadron+admin1/user/pages/02.profil/profil-2", "");
    }
}
