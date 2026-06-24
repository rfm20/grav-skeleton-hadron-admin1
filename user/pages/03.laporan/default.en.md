---
title: Laporan
sitemap:
    changefreq: monthly
    priority: 0.8
    lastmod: 02-08-2025
date: '02-08-2025 00:00'
sidebar:
    display: false
media_order: a1-program-kegiatan.pdf
---

<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;800&display=swap');

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

/* ===== BASE ===== */
* {
  box-sizing: border-box;
}

body {
  font-family: 'Inter', system-ui, -apple-system, sans-serif;
  background-color: #f9fafb;
  line-height: 1.6;
  margin: 0;
  padding: 0;
}

/* ===== PAGE WRAPPER ===== */
.page-wrapper {
  max-width: 960px;
  margin: auto;
  padding: 40px 20px;
}

/* ===== HEADER ===== */
.header-container {
  text-align: center;
  margin-bottom: 50px;
}

.section-title {
  font-size: clamp(1.75rem, 5vw, 2.5rem);
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
  letter-spacing: 0.5px;
  text-align: center;
}

/* ===== CARD ===== */
.section-card {
  background: #ffffff;
  padding: 40px;
  margin-bottom: 40px;
  border-radius: var(--radius-card);
  border: 1px solid rgba(13,110,79,0.12);
  box-shadow: var(--shadow-sm);
  transition: transform 0.35s ease, box-shadow 0.35s ease;
}

.section-card:hover {
  transform: translateY(-6px);
  box-shadow: var(--shadow-hover);
}

.section-card h2 {
  text-align: center;
  color: var(--primary-color);
  font-size: clamp(1.25rem, 3.5vw, 1.75rem);
  font-weight: 700;
  margin-top: 0;
  margin-bottom: 32px;
  border-bottom: 2px solid var(--primary-light);
  padding-bottom: 10px;
  display: inline-block;
  position: relative;
  left: 50%;
  transform: translateX(-50%);
  line-height: 1.3;
  max-width: 90%;
}

.section-card p {
  font-size: clamp(0.95rem, 2vw, 1.05rem);
  line-height: 1.7;
  color: var(--text-dark);
  text-align: center;
  margin: 0 0 24px 0;
}

/* ===== PDF BUTTON (CSS ICON – NO ENTITY) ===== */
.pdf-link {
  display: flex;
  align-items: center;
  gap: 14px;
  padding: 14px 20px;
  border-radius: 12px;
  background: #fff;
  border: 1px solid #e5e7eb;
  text-decoration: none !important;
  color: var(--text-dark) !important;
  font-weight: 600;
  max-width: 520px;
  width: 100%;
  margin: auto;
  transition: all 0.25s ease;
  font-size: clamp(0.9rem, 2vw, 1rem);
}

/* ICON kiri */
.pdf-link::before {
  content: "\1F4C4"; /* 📄 */
  width: 40px;
  height: 40px;
  min-width: 40px;
  background: var(--primary-light);
  border-radius: 8px;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 20px;
}

/* ARROW kanan */
.pdf-link::after {
  content: "\279C"; /* ➜ */
  margin-left: auto;
  color: var(--text-muted);
  transition: all 0.2s ease;
  font-size: 1.25rem;
  min-width: 20px;
}

.pdf-link:hover {
  border-color: var(--primary-color);
  box-shadow: var(--shadow-hover);
  transform: translateY(-2px);
}

.pdf-link:hover::after {
  color: var(--primary-color);
  transform: translateX(4px);
}

.pdf-link:active {
  transform: translateY(0);
}

/* ===== RESPONSIVE BREAKPOINTS ===== */

/* Tablet - Large (iPad Pro, etc) */
@media (max-width: 1024px) {
  .page-wrapper {
    padding: 32px 16px;
  }
  
  .header-container {
    margin-bottom: 40px;
  }
  
  .section-card {
    padding: 32px 24px;
  }
}

/* Tablet - Medium */
@media (max-width: 768px) {
  .page-wrapper {
    padding: 28px 16px;
  }
  
  .header-container {
    margin-bottom: 32px;
  }
  
  .section-card {
    padding: 28px 20px;
    margin-bottom: 28px;
  }
  
  .section-card h2 {
    margin-bottom: 24px;
    padding-bottom: 8px;
  }
  
  .section-card p {
    margin-bottom: 20px;
  }
  
  .pdf-link {
    max-width: 100%;
    padding: 13px 18px;
  }
}

/* Mobile - Large */
@media (max-width: 480px) {
  .page-wrapper {
    padding: 20px 12px;
  }
  
  .header-container {
    margin-bottom: 28px;
  }
  
  .section-subtitle {
    padding: 5px 12px;
    letter-spacing: 0.3px;
  }
  
  .section-card {
    padding: 24px 16px;
    margin-bottom: 24px;
    border-radius: 12px;
  }
  
  .section-card h2 {
    margin-bottom: 20px;
  }
  
  .section-card p {
    margin-bottom: 18px;
    text-align: left;
  }
  
  .pdf-link {
    padding: 12px 16px;
    gap: 12px;
    border-radius: 10px;
  }
  
  .pdf-link::before {
    width: 36px;
    height: 36px;
    min-width: 36px;
    font-size: 18px;
    border-radius: 7px;
  }
  
  .pdf-link::after {
    font-size: 1.1rem;
  }
}

/* Mobile - Small */
@media (max-width: 360px) {
  .page-wrapper {
    padding: 16px 10px;
  }
  
  .section-card {
    padding: 20px 14px;
  }
  
  .pdf-link {
    padding: 11px 14px;
    gap: 10px;
  }
  
  .pdf-link::before {
    width: 34px;
    height: 34px;
    min-width: 34px;
    font-size: 17px;
  }
}

/* Landscape mode optimization */
@media (max-height: 500px) and (orientation: landscape) {
  .page-wrapper {
    padding: 20px 16px;
  }
  
  .header-container {
    margin-bottom: 24px;
  }
  
  .section-card {
    margin-bottom: 20px;
    padding: 24px 20px;
  }
  
  .section-card h2 {
    margin-bottom: 16px;
  }
  
  .section-card p {
    margin-bottom: 16px;
  }
}

/* Touch device optimization */
@media (hover: none) and (pointer: coarse) {
  .pdf-link {
    padding: 14px 18px;
    min-height: 52px;
  }
  
  .pdf-link:active {
    background-color: var(--primary-light);
  }
}

/* Print styles */
@media print {
  body {
    background: white;
  }
  
  .section-card {
    box-shadow: none;
    border: 1px solid #ddd;
    page-break-inside: avoid;
  }
  
  .pdf-link::after {
    display: none;
  }
  
  .pdf-link {
    border: 1px solid #ddd;
  }
}
</style>

<div class="page-wrapper">

  <div class="header-container">
    <div class="section-title">Laporan</div>
    <span class="section-subtitle">Dinas Pemberdayaan Masyarakat & Desa</span>
  </div>

  <div class="section-card">
    <h2>Kalender Kegiatan</h2>
    <p>Berikut adalah dokumen program kegiatan yang dapat diunduh.</p>

    {% markdown %}
[Program Kegiatan](a1-program-kegiatan.pdf){.pdf-link}
    {% endmarkdown %}

  </div>

</div>
