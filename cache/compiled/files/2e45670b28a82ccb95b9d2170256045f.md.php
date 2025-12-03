<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => 'C:/xampp/htdocs/grav/grav-skeleton-hadron+admin1/user/pages/02.profil/default.en.md',
    'modified' => 1764639790,
    'size' => 3269,
    'data' => [
        'header' => [
            'title' => 'Profil',
            'slug' => 'components',
            'sitemap' => [
                'changefreq' => 'monthly',
                'priority' => 0.8,
                'lastmod' => '02-08-2025'
            ],
            'date' => '02-08-2025 00:00',
            'page-toc' => [
                'depth' => 3
            ],
            'media_order' => '688093ffadf80-2025-07-23.jpg',
            'sidebar' => [
                'display' => false,
                'show_toc' => false
            ]
        ],
        'frontmatter' => 'title: Profil
slug: components
sitemap:
    changefreq: monthly
    priority: 0.8
    lastmod: 02-08-2025
date: \'02-08-2025 00:00\'
page-toc:
    depth: 3
media_order: 688093ffadf80-2025-07-23.jpg
sidebar:
    display: false
    show_toc: false',
        'markdown' => '<style>
/* ===== GLOBAL CARD STYLE ===== */
.profile-card {
  background: #ffffff;
  padding: 30px;
  margin-bottom: 40px;
  border-radius: 16px;
  box-shadow: 0 4px 15px rgba(0,0,0,0.08);
}

/* TITLE STYLE */
.profile-card h2 {
  text-align:center;
  margin-top:0;
  color:#064e3b;
  font-weight:700;
}

/* TEXT */
.profile-card p {
  color:#444;
  line-height:1.65;
  margin-bottom:14px;
}

/* HERO */
.profile-hero {
  text-align:center;
  padding: 55px 20px;
  margin-bottom:40px;
  background: linear-gradient(135deg, #064e3b, #15803d);
  color: white;
  border-radius: 18px;
  box-shadow: 0 4px 20px rgba(0,0,0,0.20);
}

.profile-hero h1 {
  margin:0;
  font-size:2.4rem;
  font-weight:700;
  color:#ffff;
}

.profile-hero p {
  margin-top:10px;
  font-size:1.15rem;
  opacity:0.95;
}
</style>


[div class="columns"]
[div class="column col-12"]

<!-- ===== HERO SECTION ===== -->
<div class="profile-hero">
  <h1>Profil Dinas PMD</h1>
  <p>
    Dinas Pemberdayaan Masyarakat dan Desa <br>
    Provinsi Kalimantan Barat
  </p>
</div>


<!-- ===== STRUKTUR ORGANISASI ===== -->
<div class="profile-card">
  <h2>Struktur Organisasi</h2>
  <p style="text-align:center; color:#555;">
    Berikut adalah struktur organisasi Dinas PMD Provinsi Kalimantan Barat:
  </p>

  <div style="text-align:center; margin-top:25px;">
  {% markdown %}
![688093ffadf80-2025-07-23](688093ffadf80-2025-07-23.jpg "688093ffadf80-2025-07-23")
  {% endmarkdown %}
  </div>
</div>


<!-- ===== SEJARAH ===== -->
<div class="profile-card">
  <h2>Sejarah</h2>

  <p>
    Pada Januari 2013, resmi terbentuk Badan Pemberdayaan Masyarakat dan Pemerintahan Daerah (BPMPD) Provinsi Kalimantan Barat. Drs. Y. Alexander, M.Si kemudian diamanahkan untuk memimpin lembaga baru ini.
  </p>

  <p>
    Perjalanan kelembagaan ini memiliki akar sejarah panjang sejak Konferensi Gubernur tahun 1954, mulai dari Kementerian Pembangunan Masyarakat Desa, Ditjen Bangdes, hingga Ditjen Pemberdayaan Masyarakat dan Desa. Perubahan-perubahan ini dilakukan untuk memperkuat peran pemerintah dalam meningkatkan kualitas pembangunan dan pemberdayaan desa.
  </p>

  <p>
    Fungsi lembaga mencakup dua aspek utama: pemberdayaan masyarakat desa—meliputi partisipasi, kelembagaan, perencanaan, administrasi, dan ketertiban—serta fungsi koordinatif lintas sektor seperti pendidikan, kesehatan, pertanian, dan infrastruktur desa.
  </p>

  <p>
    Lembaga ini juga memegang peran penting dalam pelaksanaan berbagai program nasional seperti PNPM-MPd, Lomba Desa, Bulan Bhakti Gotong Royong, TMMD, UED-SP, BUMDes, Posyandu, dan kegiatan strategis lainnya.
  </p>

  <p>
    Pada tahun 2016, berdasarkan Peraturan Daerah Provinsi Kalimantan Barat Nomor 8 Tahun 2016 dan Peraturan Gubernur Nomor 107 Tahun 2016, BPMPD resmi berubah menjadi 
    <strong>Dinas Pemberdayaan Masyarakat dan Desa (Dinas PMD)</strong>.
  </p>
</div]

[/div]
[/div]
'
    ]
];
