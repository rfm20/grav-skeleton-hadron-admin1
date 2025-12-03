<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => 'C:/xampp/htdocs/grav/grav-skeleton-hadron+admin1/user/pages/02.profil/profil-2/default.en.md',
    'modified' => 1764639790,
    'size' => 4429,
    'data' => [
        'header' => [
            'title' => 'Profil Pejabat',
            'date' => '26-11-2025 06:26',
            'visible' => true,
            'media_order' => 'Profil-Pimpinan-Dinas-PMD-Kalbar-2023-3-pdf.jpg,2025-LHKPN-Hendra-Bachtiar.jpg,2024-LHKPN-HENDRA-BACHTIAR.jpeg,2023-LHKPN-KADIS-2022_images-extracted-1-768x1081.jpg',
            'process' => [
                'twig' => true,
                'markdown' => true
            ]
        ],
        'frontmatter' => 'title: \'Profil Pejabat\'
date: \'26-11-2025 06:26\'
visible: true
media_order: \'Profil-Pimpinan-Dinas-PMD-Kalbar-2023-3-pdf.jpg,2025-LHKPN-Hendra-Bachtiar.jpg,2024-LHKPN-HENDRA-BACHTIAR.jpeg,2023-LHKPN-KADIS-2022_images-extracted-1-768x1081.jpg\'
process:
  twig: true
  markdown: true',
        'markdown' => '<style>
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


<div class="page-wrapper">

<div class="section-title">Profil Pejabat</div>

<!-- ====================== -->
<!--       PROFIL FOTO      -->
<!-- ====================== -->
<div class="section-card">
  <div class="image-wrapper">
    {% markdown %}
![Profil-Pimpinan-Dinas-PMD-Kalbar-2023-3-pdf](Profil-Pimpinan-Dinas-PMD-Kalbar-2023-3-pdf.jpg "Profil-Pimpinan")
    {% endmarkdown %}
  </div>
</div>

<!-- ====================== -->
<!--   LHKPN PIMPINAN       -->
<!-- ====================== -->
<div class="section-card">
  <h2>LHKPN Pimpinan</h2>

  <div class="lhkpn-grid">

    <div class="lhkpn-card">
      <strong>LHKPN Tahun 2023</strong>
      <br>
      {% markdown %}
![2023-LHKPN-KADIS-2022](2023-LHKPN-KADIS-2022_images-extracted-1-768x1081.jpg "LHKPN 2023")
      {% endmarkdown %}
    </div>

    <div class="lhkpn-card">
      <strong>LHKPN Tahun 2024</strong>
      <br>
      {% markdown %}
![2024-LHKPN-HENDRA-BACHTIAR](2024-LHKPN-HENDRA-BACHTIAR.jpeg "LHKPN 2024")
      {% endmarkdown %}
    </div>

    <div class="lhkpn-card">
      <strong>LHKPN Tahun 2025</strong>
      <br>
      {% markdown %}
![2025-LHKPN-Hendra-Bachtiar](2025-LHKPN-Hendra-Bachtiar.jpg "LHKPN 2025")
      {% endmarkdown %}
    </div>

  </div>
</div>

<!-- ====================== -->
<!--   LINK LIST LHKPN      -->
<!-- ====================== -->
<div class="section-card">
  <h2>LHKPN dan LHKASN</h2>

  <div class="link-list">

    <a class="link-btn" href="https://datacloud.kalbarprov.go.id/index.php/s/yqgbGJNmrGLcxKC" target="_blank">
      LHKPN dan LHKASN
    </a>

    <a class="link-btn" href="https://drive.google.com/drive/folders/1utSegR0Jrw7gvP0Eviffh4i1ewdPFTf8" target="_blank">
      LHKPN Tahun 2024
    </a>

    <a class="link-btn" href="https://drive.google.com/file/d/1_CkrYjwVpA4uEBYM29Hnabp5CFKNLCCA/view" target="_blank">
      Rekap LHKPN
    </a>

    <a class="link-btn" href="https://drive.google.com/file/d/1Jn7AhOsOJvPK6GpJAdDLQQKmRtieBvbF/view" target="_blank">
      LHKPN & LHKASN Tahun 2025
    </a>

    <a class="link-btn" href="https://drive.google.com/file/d/1t6cmlA11QeXTdGTuoCs2lFMvqwZiJGub/view" target="_blank">
      Rekap LHKPN Tahun 2025
    </a>

  </div>
</div>

</div>
'
    ]
];
