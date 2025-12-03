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

/* @Page:C:/xampp/htdocs/grav/grav-skeleton-hadron+admin1/user/pages/03.kegiatan/kegiatan-5 */
class __TwigTemplate_ce7732a5119f1897e630614f91233d202cc141710cb99d361dd622db06e16efa extends \Twig\Template
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
/* ================================
   WRAPPER HALAMAN
================================ */
.page-wrapper {
  max-width: 900px;
  margin: 0 auto;
  padding: 20px 15px 60px;
}

/* ================================
   TITLE STYLE
================================ */
.section-title {
  text-align: center;
  font-size: 2.4rem;
  font-weight: 800;
  color: #0d6e4f;
  margin-bottom: 35px;
  padding-bottom: 12px;
  border-bottom: 3px solid #0d6e4f;
}

/* ================================
   CARD BOX
================================ */
.card {
  background: #ffffff;
  padding: 28px 32px;
  border-radius: 18px;
  box-shadow: 0 4px 18px rgba(0,0,0,0.08);
  margin-bottom: 35px;
}

/* ================================
   SUBTITLE / HEADING
================================ */
.card h2 {
  margin-top: 0;
  color: #0d6e4f;
  font-weight: 700;
  font-size: 1.7rem;
  margin-bottom: 20px;
}

/* ================================
   LIST STYLE
================================ */
.link-list {
  display: flex;
  flex-direction: column;
  gap: 12px;
  margin-top: 10px;
}

.link-item {
  background: #0d6e4f !important;
  color: #ffffff !important;
  padding: 14px 18px;
  border-radius: 12px;
  text-align: center;
  font-weight: 600;
  transition: 0.25s ease;
  display: block;
  width: 100%;
}

.link-item:hover {
  background: #0b5d42;
  transform: translateY(-2px);
}
</style>
<div class=\"page-wrapper\">

<div class=\"section-title\">Data SAKIP</div>

<div class=\"card\">
<h2 id=\"dokumen-sakip\"><a href=\"#dokumen-sakip\" class=\"toc-anchor before\" data-anchor-icon=\"#\" aria-label=\"Anchor\"></a>Dokumen SAKIP</h2>

<div class=\"link-list\">

<a class=\"link-item\">📄 Pedoman Teknis AKIP Internal DPMD</a>
<a class=\"link-item\">📄 Pedoman Teknis Perencanaan Kinerja dan Anggaran DPMD</a>
<a class=\"link-item\">📄 LAKIP DPMD Tahun 2024</a>
<a class=\"link-item\">📄 Laporan Monev Renaksi Triwulan 1 DPMD 2025 (e-SAKIP)</a>
<a class=\"link-item\">📄 LKPJ DPMD Tahun 2024</a>
<a class=\"link-item\">📄 LPPD DPMD Tahun 2024</a>
<a class=\"link-item\">📄 Rencana Aksi DPMD Tahun 2025</a>
<a class=\"link-item\">📄 Rencana Kerja DPMD Tahun 2025</a>
<a class=\"link-item\">📄 Renstra DPMD 2024–2026</a>
<a class=\"link-item\">📄 Perjankin 2025</a>
<a class=\"link-item\">📄 Laporan Realisasi Anggaran 2024</a>
<a class=\"link-item\">📄 CALK 2024</a>
<a class=\"link-item\">📄 Daftar Aset Badan Publik Tahun 2025</a>
<a class=\"link-item\">📄 Neraca Tahun 2024</a>
<a class=\"link-item\">📄 DPA Tahun 2025</a>
<a class=\"link-item\">📄 RKA Tahun 2025</a>
<a class=\"link-item\">📄 Realisasi Anggaran Triwulan 1 Tahun 2025</a>
<a class=\"link-item\">📄 Renstra DPMD 2018–2023</a>
<a class=\"link-item\">📄 SK IKU DPMD 2021</a>
<a class=\"link-item\">📄 LAKIP DPMD 2020</a>
<a class=\"link-item\">📄 Perjankin DPMD 2021</a>
<a class=\"link-item\">📄 Laporan Realisasi Anggaran 2023</a>
<a class=\"link-item\">📄 Catatan atas Laporan Keuangan 2023</a>
<a class=\"link-item\">📄 Neraca 2023</a>
<a class=\"link-item\">📄 DPA 2024</a>
<a class=\"link-item\">📄 Program Kegiatan Tahun 2023</a>

<a class=\"link-item\" href=\"https://drive.google.com/file/d/1EaoLJ92BbvoHH2KCosQkuRy0fBW95OEV/view\" target=\"_blank\">
📄 Program Kegiatan TW 1 Tahun 2024
</a>

<a class=\"link-item\" href=\"https://drive.google.com/file/d/1HOhr7CoU_82GFWbDQXq8mnyRnP9Sdh-m/view\" target=\"_blank\">
📄 Daftar Aset Badan Publik
</a>

</div>
</div>

</div>";
    }

    public function getTemplateName()
    {
        return "@Page:C:/xampp/htdocs/grav/grav-skeleton-hadron+admin1/user/pages/03.kegiatan/kegiatan-5";
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
        return new Source("", "@Page:C:/xampp/htdocs/grav/grav-skeleton-hadron+admin1/user/pages/03.kegiatan/kegiatan-5", "");
    }
}
