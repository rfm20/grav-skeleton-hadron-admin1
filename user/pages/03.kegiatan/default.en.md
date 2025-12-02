---
title: 'Kegiatan & Laporan'
sitemap:
    changefreq: monthly
    priority: 0.8
    lastmod: 02-08-2025
date: '02-08-2025 00:00'
page-toc:
    depth: 3
sidebar:
    display: false
    show_toc: false
media_order: 'a1-program-kegiatan.pdf'
---

<style>
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
<div class="profile-hero">
  <h1>Kegiatan & Laporan</h1>
  <p>
    Dokumen dan kalender kegiatan Dinas Pemberdayaan Masyarakat dan Desa <br>
    Provinsi Kalimantan Barat
  </p>
</div>

<!-- KALENDER KEGIATAN -->
<div class="profile-card">
  <h2>Kalender Kegiatan</h2>
  <p>
    Berikut adalah dokumen program kegiatan yang dapat diunduh:
  </p>

  <!-- HARUS PAKAI MARKDOWN TAG supaya Grav render link PDF -->
  {% markdown %}
[Program Kegiatan](a1-program-kegiatan.pdf){.pdf-link}
  {% endmarkdown %}

</div>
