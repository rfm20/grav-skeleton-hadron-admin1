---
title: 'Survey Kepuasan Masyarakat'
date: '26-11-2025 06:26'
visible: true
process:
    markdown: true
    twig: true
media_order: 'NILAI IKM 2024_page-0001.jpg,2.-LAPORAN-SKM-TW-II-TH-2022_026-768x1085.jpg,1.-LAPORAN-SKM-TW-I-TH-2022_026-768x1085.jpg'
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

/* ===== RESET ===== */
*,
*::before,
*::after {
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
  border-radius: 999px;
  font-size: clamp(0.75rem, 2vw, 0.9rem);
  font-weight: 600;
  text-transform: uppercase;
  letter-spacing: 0.8px;
}

/* ===== CARD ===== */
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
  font-size: clamp(1.25rem, 3.5vw, 1.75rem);
  font-weight: 700;
  margin: 0 auto 24px;
  border-bottom: 2px solid var(--primary-light);
  padding-bottom: 10px;
  width: fit-content;
  max-width: 100%;
}

/* ===== PARAGRAPH ===== */
.section-card p {
  font-size: clamp(0.95rem, 2.5vw, 1.05rem);
  color: var(--text-dark);
  line-height: 1.7;
  text-align: justify;
}

/* ===== LINK LIST (DOWNLOAD / DRIVE) ===== */
.link-list {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
  gap: 16px;
}

.link-btn {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 14px 18px;
  border-radius: 12px;
  background: #ffffff;
  border: 1px solid #e5e7eb;
  text-decoration: none !important;
  transition: 0.3s ease;
}

.link-btn:hover {
  border-color: var(--primary-color);
  box-shadow: var(--shadow-hover);
  transform: translateY(-3px);
}

.btn-content {
  display: flex;
  align-items: center;
  gap: 12px;
}

.icon-box {
  width: 40px;
  height: 40px;
  background: var(--primary-light);
  border-radius: 8px;
  display: flex;
  justify-content: center;
  align-items: center;
  font-size: 20px;
  color: var(--primary-color);
  flex-shrink: 0;
}

.btn-text {
  font-weight: 600;
  color: var(--text-dark);
  font-size: clamp(0.9rem, 2.5vw, 1rem);
}

.btn-arrow {
  color: var(--text-muted);
  transition: 0.2s ease;
}

.link-btn:hover .btn-arrow {
  color: var(--primary-color);
  transform: translateX(4px);
}

/* ===== IMAGE GRID ===== */
.image-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
  gap: 20px;
  margin-top: 20px;
}

/* ===== IMAGE CARD ===== */
.image-card {
  background: #ffffff;
  border-radius: 14px;
  border: 1px solid #e5e7eb;
  box-shadow: var(--shadow-sm);
  overflow: hidden;
  transition: 0.3s ease;
}

.image-card:hover {
  transform: translateY(-4px);
  box-shadow: var(--shadow-hover);
}

.image-card img {
  display: block;
  width: 100%;
  height: auto;
  border-radius: 0;
}

/* ===== TABLET ===== */
@media (max-width: 768px) {
  .section-card:hover {
    transform: none;
  }
}

/* ===== MOBILE ===== */
@media (max-width: 480px) {
  .section-subtitle {
    padding: 5px 12px;
  }

  .link-btn {
    padding: 12px 14px;
  }

  .icon-box {
    width: 36px;
    height: 36px;
    font-size: 18px;
  }
}

/* ===== TOUCH DEVICE ===== */
@media (hover: none) and (pointer: coarse) {
  .section-card:hover,
  .link-btn:hover,
  .image-card:hover {
    transform: none;
    box-shadow: var(--shadow-sm);
  }
}

/* ===== PRINT ===== */
@media print {
  body {
    background: #ffffff;
  }

  .section-card {
    box-shadow: none;
    border: 1px solid #ccc;
    page-break-inside: avoid;
  }
}
</style>

<div class="page-wrapper">

  <!-- HEADER -->
  <div class="header-container">
    <div class="section-title">Survey Kepuasan Masyarakat</div>
    <span class="section-subtitle">Dinas Pemberdayaan Masyarakat & Desa</span>
  </div>

  <!-- LAPORAN SKM -->
  <div class="section-card">
    <h2>Laporan SKM</h2>

    <div class="link-list">

      <a class="link-btn" href="https://drive.google.com/file/d/1F6TpjGDN8sl7dAt6C3QlQQgXZNavG2gQ/view" target="_blank">
        <div class="btn-content">
          <div class="icon-box">📄</div>
          <span class="btn-text">Laporan SKM TW I • 2022</span>
        </div>
        <div class="btn-arrow">➜</div>
      </a>

      <a class="link-btn" href="https://drive.google.com/file/d/161_FDkapGb4O0rb5gGYIjI1u_otoIKKc/view" target="_blank">
        <div class="btn-content">
          <div class="icon-box">📄</div>
          <span class="btn-text">Laporan SKM TW II • 2022</span>
        </div>
        <div class="btn-arrow">➜</div>
      </a>

      <a class="link-btn" href="https://drive.google.com/file/d/1X1s5IcLPNwpDlZSfOU1WMDFs3x8dRb1z/view" target="_blank">
        <div class="btn-content">
          <div class="icon-box">📄</div>
          <span class="btn-text">Laporan SKM TW III • 2021</span>
        </div>
        <div class="btn-arrow">➜</div>
      </a>

      <a class="link-btn" href="https://drive.google.com/file/d/1VJRtsP2MuvDZRvy3i7LOgo8nwfzN5FMq/view" target="_blank">
        <div class="btn-content">
          <div class="icon-box">📄</div>
          <span class="btn-text">Laporan SKM TW IV • 2021</span>
        </div>
        <div class="btn-arrow">➜</div>
      </a>

      <a class="link-btn" href="https://drive.google.com/file/d/1sx0CyCkRHCRFv_f7SazH9bYSGShJWGPQ/view" target="_blank">
        <div class="btn-content">
          <div class="icon-box">📄</div>
          <span class="btn-text">Laporan SKM • 2024</span>
        </div>
        <div class="btn-arrow">➜</div>
      </a>

    </div>

  </div>

  <!-- PUBLIKASI SKM -->
  <div class="section-card">
    <h2>Publikasi SKM</h2>

    <div class="image-grid">

      <div class="image-card">
        {% markdown %}
![1.-LAPORAN-SKM-TW-I-TH-2022_026-768x1085](1.-LAPORAN-SKM-TW-I-TH-2022_026-768x1085.jpg)
        {% endmarkdown %}
      </div>

      <div class="image-card">
        {% markdown %}
![2.-LAPORAN-SKM-TW-II-TH-2022_026-768x1085](2.-LAPORAN-SKM-TW-II-TH-2022_026-768x1085.jpg)
        {% endmarkdown %}
      </div>

      <div class="image-card">
        {% markdown %}
![NILAI IKM 2024_page-0001](NILAI%20IKM%202024_page-0001.jpg)
        {% endmarkdown %}
      </div>

    </div>

  </div>

  <!-- RENCANA TINDAK LANJUT -->
  <div class="section-card">
    <h2>Rencana Tindak Lanjut</h2>

    <div class="link-list">

      <a class="link-btn" href="#" target="">
        <div class="btn-content">
          <div class="icon-box">📄</div>
          <span class="btn-text">Test</span>
        </div>
        <div class="btn-arrow">➜</div>
      </a>

      <a class="link-btn" href="#" target="">
        <div class="btn-content">
          <div class="icon-box">📄</div>
          <span class="btn-text">Test</span>
        </div>
        <div class="btn-arrow">➜</div>
      </a>

    </div>

  </div>

</div>
