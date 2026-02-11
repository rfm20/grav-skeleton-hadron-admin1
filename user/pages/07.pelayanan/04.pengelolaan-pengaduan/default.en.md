---
title: 'Pengelolaan Pengaduan'
date: '26-11-2025 06:26'
visible: true
process:
    markdown: true
    twig: true
media_order: 4.-PENGADUAN-png-A4-768x1043.png
published: false
---

<style>
/* ===== GLOBAL VARIABLES ===== */
:root {
  --primary-color: #0d6e4f;
  --primary-light: #e6f5f0;
  --text-dark: #1f2937;
  --text-muted: #4b5563;
  --radius-card: 16px;
  --shadow-sm: 0 4px 14px rgba(13,110,79,0.08);
  --shadow-hover: 0 10px 26px rgba(13,110,79,0.18);
}

* {
  box-sizing: border-box;
}

body {
  font-family: 'Inter', system-ui, -apple-system, sans-serif;
  background-color: #f9fafb;
  margin: 0;
  padding: 0;
  line-height: 1.6;
}

/* ===== PAGE WRAPPER ===== */
.page-wrapper {
  max-width: 960px;
  margin: 0 auto;
  padding: clamp(20px, 5vw, 40px) clamp(14px, 4vw, 20px);
}

/* ===== HEADER ===== */
.header-container {
  text-align: center;
  margin-bottom: clamp(30px, 6vw, 50px);
}

.section-title {
  font-size: clamp(1.8rem, 5vw, 2.5rem);
  font-weight: 800;
  color: var(--primary-color);
  margin: 0;
  line-height: 1.2;
}

.section-subtitle {
  display: inline-block;
  margin-top: 10px;
  padding: 6px 16px;
  background: var(--primary-light);
  color: var(--primary-color);
  border-radius: 50px;
  font-size: clamp(0.75rem, 2vw, 0.9rem);
  font-weight: 600;
  text-transform: uppercase;
  letter-spacing: 0.6px;
}

/* ===== CONTENT CARD ===== */
.section-card {
  background: #ffffff;
  padding: clamp(20px, 5vw, 40px);
  margin-bottom: clamp(24px, 5vw, 40px);
  border-radius: var(--radius-card);
  box-shadow: var(--shadow-sm);
  border: 1px solid rgba(13,110,79,0.1);
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.section-card:hover {
  transform: translateY(-4px);
  box-shadow: var(--shadow-hover);
}

/* ===== CARD TITLE ===== */
.section-card h2 {
  color: var(--primary-color);
  font-weight: 700;
  margin: 0 0 20px;
  font-size: clamp(1.2rem, 3.5vw, 1.75rem);
  border-bottom: 2px solid var(--primary-light);
  padding-bottom: 10px;
}

/* ===== REGULASI BOX ===== */
.regulasi-box {
  background-color: var(--primary-light);
  padding: 16px 20px;
  border-left: 4px solid var(--primary-color);
  border-radius: 0 10px 10px 0;
  margin-bottom: 25px;
}

.regulasi-box p {
  margin: 0;
  font-size: clamp(0.85rem, 2.5vw, 0.95rem);
  color: var(--text-dark);
}

.regulasi-box strong {
  color: var(--primary-color);
}

/* ===== PARAGRAPH ===== */
.section-card p {
  font-size: clamp(0.9rem, 2.5vw, 1rem);
  line-height: 1.7;
  color: var(--text-muted);
  text-align: justify;
}

/* ===== IMAGE CARD ===== */
.image-card {
  background: #ffffff;
  border-radius: 14px;
  overflow: hidden;
  border: 1px solid #e5e7eb;
  box-shadow: var(--shadow-sm);
  transition: transform 0.3s ease, box-shadow 0.3s ease;
  width: 100%;
  margin-top: 25px;
}

.image-card:hover {
  transform: translateY(-4px);
  box-shadow: var(--shadow-hover);
}

.image-card img {
  display: block;
  width: 100%;
  max-width: 100%;
  height: auto;
  object-fit: contain;
}

/* ===== TABLET ===== */
@media (max-width: 768px) {
  .section-card {
    border-radius: 14px;
  }

  .section-card:hover,
  .image-card:hover {
    transform: none;
  }
}

/* ===== MOBILE ===== */
@media (max-width: 480px) {
  .section-subtitle {
    padding: 5px 12px;
    letter-spacing: 0.4px;
  }

  .image-card {
    border-radius: 10px;
  }
}

/* ===== EXTRA SMALL ===== */
@media (max-width: 360px) {
  .section-title {
    font-size: 1.6rem;
  }

  .section-card h2 {
    font-size: 1.1rem;
  }
}

/* ===== TOUCH DEVICE ===== */
@media (hover: none) and (pointer: coarse) {
  .section-card:hover,
  .image-card:hover {
    box-shadow: var(--shadow-sm);
  }
}

/* ===== PRINT MODE ===== */
@media print {
  body {
    background: #ffffff;
  }

  .section-card,
  .image-card {
    box-shadow: none;
    border: 1px solid #ccc;
    page-break-inside: avoid;
  }
}
</style>


<div class="page-wrapper">

  <!-- HEADER -->
  <div class="header-container">
    <div class="section-title">Pengelolaan Pengaduan</div>
    <span class="section-subtitle">Dinas Pemberdayaan Masyarakat & Desa</span>
  </div>

  <!-- CONTENT CARD -->
  <div class="section-card">
    <h2>Dasar Hukum & Deskripsi</h2>

    <div class="regulasi-box">
        <p style="margin:0; font-size:0.95rem;">
        Sebagaimana Keputusan Kepala Dinas Pemberdayaan Masyarakat Dan Desa Provinsi Kalimantan Barat Nomor: 
        <strong> 007 / DPMD / 2021</strong> tentang Pengelolaan Pengaduan Pelayanan Publik Pada 
        Dinas Pemberdayaan Masyarakat Dan Desa Provinsi Kalimantan Barat.
        </p>
    </div>

    <p style="line-height:1.7; color:#4b5563; text-align:justify;">
      Berikut Pengelolaan Pengaduan Pelayanan Publik di Dinas Pemberdayaan Masyarakat Dan Desa Provinsi Kalbar:
    </p>

    <!-- IMAGE -->
    <div class="image-card" style="margin-top:25px;">
      {% markdown %}
![4.-PENGADUAN-png-A4-768x1043](4.-PENGADUAN-png-A4-768x1043.png)
      {% endmarkdown %}
    </div>

  </div>

</div>
