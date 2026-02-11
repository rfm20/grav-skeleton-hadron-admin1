---
title: 'Produk Hukum'
date: '26-11-2025 06:26'
visible: true
process:
    markdown: true
    twig: true
published: true
page-toc:
    anchors:
        link: false
media_order: SK-Desa-Sasaran-Percepatan-Peningkatan-Status-Kemajuan-dan-Kemandirian-Desa-Provinsi-Kalimantan-Barat-Tahun-2023.pdf
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
  margin: 0 auto;
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

.section-card h2,
.section-card h3 {
  text-align: center;
  color: var(--primary-color);
  font-weight: 700;
  font-size: clamp(1.25rem, 3.5vw, 1.75rem);
  margin-top: 0;
  margin-bottom: 28px;
  border-bottom: 2px solid var(--primary-light);
  padding-bottom: 10px;
  display: inline-block;
  position: relative;
  left: 50%;
  transform: translateX(-50%);
  line-height: 1.3;
}

/* ===== PARAGRAPH ===== */
.section-card p {
  font-size: clamp(0.95rem, 2vw, 1.05rem);
  color: var(--text-dark);
  line-height: 1.7;
  text-align: justify;
  margin-bottom: 18px;
}

/* ===== LINK LIST BUTTON ===== */
.link-list {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
  gap: 16px;
}

.link-btn {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 14px 16px;
  border-radius: 12px;
  background: #fff;
  border: 1px solid #e5e7eb;
  text-decoration: none !important;
  transition: all 0.25s ease;
  cursor: pointer;
}

.link-btn:hover {
  border-color: var(--primary-color);
  box-shadow: var(--shadow-hover);
  transform: translateY(-2px);
}

.link-btn:active {
  transform: translateY(0);
}

.btn-content {
  display: flex;
  align-items: center;
  gap: 12px;
  flex: 1;
  min-width: 0;
}

.icon-box {
  width: 40px;
  height: 40px;
  min-width: 40px;
  background: var(--primary-light);
  border-radius: 8px;
  display: flex;
  justify-content: center;
  align-items: center;
  font-size: 20px;
  color: var(--primary-color);
}

.btn-text {
  font-weight: 600;
  color: var(--text-dark);
  font-size: clamp(0.875rem, 2vw, 1rem);
  line-height: 1.4;
  overflow: hidden;
  text-overflow: ellipsis;
  word-wrap: break-word;
}

.btn-arrow {
  color: var(--text-muted);
  transition: all 0.2s;
  font-size: 1.25rem;
  min-width: 20px;
  text-align: right;
}

.link-btn:hover .btn-arrow {
  color: var(--primary-color);
  transform: translateX(4px);
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
  
  .link-list {
    grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
    gap: 14px;
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
  
  .section-card h2,
  .section-card h3 {
    margin-bottom: 24px;
    padding-bottom: 8px;
    max-width: 95%;
  }
  
  .section-card p {
    text-align: left;
    margin-bottom: 16px;
  }
  
  .link-list {
    grid-template-columns: 1fr;
    gap: 12px;
  }
  
  .link-btn {
    padding: 12px 14px;
  }
  
  .icon-box {
    width: 36px;
    height: 36px;
    min-width: 36px;
    font-size: 18px;
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
  
  .section-card h2,
  .section-card h3 {
    margin-bottom: 20px;
    max-width: 100%;
  }
  
  .section-card p {
    margin-bottom: 14px;
  }
  
  .link-btn {
    padding: 11px 12px;
    border-radius: 10px;
  }
  
  .btn-content {
    gap: 10px;
  }
  
  .icon-box {
    width: 34px;
    height: 34px;
    min-width: 34px;
    font-size: 17px;
    border-radius: 7px;
  }
  
  .btn-text {
    line-height: 1.3;
  }
  
  .btn-arrow {
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
  
  .link-btn {
    padding: 10px 11px;
  }
  
  .btn-content {
    gap: 8px;
  }
  
  .icon-box {
    width: 32px;
    height: 32px;
    min-width: 32px;
    font-size: 16px;
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
  
  .section-card h2,
  .section-card h3 {
    margin-bottom: 20px;
  }
  
  .section-card p {
    margin-bottom: 12px;
  }
}

/* Touch device optimization */
@media (hover: none) and (pointer: coarse) {
  .link-btn {
    padding: 14px 16px;
    min-height: 52px;
  }
  
  .link-btn:active {
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
  
  .section-card h2,
  .section-card h3 {
    page-break-after: avoid;
  }
  
  .link-btn {
    border: 1px solid #ddd;
    page-break-inside: avoid;
  }
  
  .btn-arrow {
    display: none;
  }
}
</style>

<div class="page-wrapper">

  <div class="header-container">
    <div class="section-title">Produk Hukum</div>
    <span class="section-subtitle">Dinas Pemberdayaan Masyarakat & Desa</span>
  </div>

  <div class="section-card">
    <h2>Peraturan Perundang-Undangan</h2>

    <div class="link-list">
      <a class="link-btn" href="https://drive.google.com/file/d/1asCekBWEqzt477U8JUU4rqFj7wbRB7HM/view" target="_blank">
        <div class="btn-content">
          <div class="icon-box">📄</div>
          <span class="btn-text">PERKIP 1 TAHUN 2021 TENTANG STANDAR LAYANAN INFORMASI PUBLIK</span>
        </div>
        <div class="btn-arrow">➜</div>
      </a>

      <a class="link-btn" href="https://drive.google.com/file/d/1gIQJ7LAuZuPLmDN5D4gSXpy7c5ku9vOc/view" target="_blank">
        <div class="btn-content">
          <div class="icon-box">📄</div>
          <span class="btn-text">SK Kepala Dinas PMD Tentang Tim Pelayanan Publik</span>
        </div>
        <div class="btn-arrow">➜</div>
      </a>

      <a class="link-btn" href="https://dpmdkalbar.online/user/pages/03.laporan/produk-hukum/SK-Desa-Sasaran-Percepatan-Peningkatan-Status-Kemajuan-dan-Kemandirian-Desa-Provinsi-Kalimantan-Barat-Tahun-2023.pdf" target="_blank">
        <div class="btn-content">
          <div class="icon-box">📄</div>
          <span class="btn-text">SK Desa Sasaran Percepatan Peningkatan Status dan Kemajuan Desa di Prov. Kalbar</span>
        </div>
        <div class="btn-arrow">➜</div>
      </a>

      <a class="link-btn" href="https://drive.google.com/file/d/187hoOT3GE5GP7nzESQj1ys3FcqWpCZq6/view" target="_blank">
        <div class="btn-content">
          <div class="icon-box">📄</div>
          <span class="btn-text">Peraturan Komisi Informasi Republik Indonesia Nomor 1 Tahun 2021 Tentang Standar Layanan Informasi Publik</span>
        </div>
        <div class="btn-arrow">➜</div>
      </a>

      <a class="link-btn" href="https://drive.google.com/file/d/1Q0lbwkjR9WhuK9wjpthqDU-QCmhHGA9l/view" target="_blank">
        <div class="btn-content">
          <div class="icon-box">📄</div>
          <span class="btn-text">PERGUB KALBAR Nomor 122 Tahun 2021 Tentang Kedudukan, Susunan Organisasi, Tugas dan Fungsi serta Tata Kerja Dinas Pemberdayaan Masyarakat dan Desa Provinsi Kalimantan Barat</span>
        </div>
        <div class="btn-arrow">➜</div>
      </a>

      <a class="link-btn" href="https://drive.google.com/file/d/1mSVfkEhGNC7fFstI7ozZnZ5s0QSYQdgP/view" target="_blank">
        <div class="btn-content">
          <div class="icon-box">📄</div>
          <span class="btn-text">Undang-Undang Nomor 5 Tahun 2009 Tentang Pelayanan Publik</span>
        </div>
        <div class="btn-arrow">➜</div>
      </a>

    </div>
  </div>

</div>
