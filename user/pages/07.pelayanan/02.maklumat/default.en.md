---
title: 'Maklumat Pelayanan'
date: '13-12-2025 10:43'
visible: true
process:
    markdown: true
    twig: true
media_order: 'VISI, MISI, DAN MOTTO PELAYANAN PUBLIK_page-0001.jpg,Maklumat Pelayanan Publik_page-0001.jpg'
---

<style>
/* ===== GLOBAL VARIABLES & RESET ===== */
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
  letter-spacing: -0.5px;
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
  letter-spacing: 0.8px;
}

/* ===== CARD STYLE ===== */
.section-card {
  background: #ffffff;
  padding: clamp(20px, 5vw, 40px);
  margin-bottom: clamp(24px, 5vw, 40px);
  border-radius: var(--radius-card);
  border: 1px solid rgba(13,110,79,0.12);
  box-shadow: var(--shadow-sm);
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.section-card:hover {
  transform: translateY(-4px);
  box-shadow: var(--shadow-hover);
}

/* ===== CARD TITLE ===== */
.section-card h2 {
  text-align: center;
  color: var(--primary-color);
  font-size: clamp(1.2rem, 3.5vw, 1.75rem);
  font-weight: 700;
  margin: 0 auto 24px;
  border-bottom: 2px solid var(--primary-light);
  padding-bottom: 10px;
  width: fit-content;
  max-width: 100%;
}

/* ===== IMAGE WRAPPER ===== */
.section-image {
  width: 100%;
}

/* ===== IMAGE RESPONSIVE (AMAN UNTUK A4 POTRET) ===== */
.section-image img {
  display: block;
  width: 100%;
  max-width: 100%;
  height: auto;
  margin: 0 auto;
  border-radius: 12px;
  border: 1px solid #e5e7eb;
  box-shadow: 0 4px 15px rgba(0,0,0,0.08);
}

/* ===== TABLET ===== */
@media (max-width: 768px) {
  .section-card {
    border-radius: 14px;
  }

  .section-card:hover {
    transform: none;
  }
}

/* ===== MOBILE ===== */
@media (max-width: 480px) {
  .section-subtitle {
    padding: 5px 12px;
    letter-spacing: 0.4px;
  }

  .section-card {
    border-radius: 12px;
  }

  .section-image img {
    border-radius: 10px;
  }
}

/* ===== EXTRA SMALL DEVICE ===== */
@media (max-width: 360px) {
  .section-title {
    font-size: 1.6rem;
  }

  .section-card h2 {
    font-size: 1.1rem;
  }
}

/* ===== TOUCH DEVICE OPTIMIZATION ===== */
@media (hover: none) and (pointer: coarse) {
  .section-card:hover {
    box-shadow: var(--shadow-sm);
  }
}

/* ===== PRINT MODE ===== */
@media print {
  body {
    background: #ffffff;
  }

  .section-card {
    box-shadow: none;
    border: 1px solid #ccc;
    page-break-inside: avoid;
  }

  .section-card:hover {
    transform: none;
  }
}
</style>

<div class="page-wrapper">

  <!-- HEADER -->
  <div class="header-container">
    <div class="section-title">Maklumat</div>
    <span class="section-subtitle">Dinas Pemberdayaan Masyarakat & Desa</span>
  </div>

  <!-- CARD 1 -->
  <div class="section-card">
    <h2>Maklumat Pelayanan</h2>
    <div class="section-image">
      {% markdown %}
![Maklumat Pelayanan](Maklumat%20Pelayanan%20Publik_page-0001.jpg)
      {% endmarkdown %}
    </div>
  </div>

  <!-- CARD 2 -->
  <div class="section-card">
    <h2>Visi, Misi, dan Motto</h2>
    <div class="section-image">
      {% markdown %}
![Visi Misi](VISI,%20MISI,%20DAN%20MOTTO%20PELAYANAN%20PUBLIK_page-0001.jpg)
      {% endmarkdown %}
    </div>
  </div>
</div>
