---
title: 'SK & SOP'
date: '26-11-2025 06:26'
visible: true
process:
    markdown: true
    twig: true
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
  font-family: 'Inter', system-ui, sans-serif;
  background-color: #f9fafb;
  margin: 0;
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
}

/* ===== CARD ===== */
.section-card {
  background: #ffffff;
  padding: clamp(20px, 5vw, 40px);
  margin-bottom: clamp(24px, 5vw, 40px);
  border-radius: var(--radius-card);
  border: 1px solid rgba(13,110,79,0.12);
  box-shadow: var(--shadow-sm);
  transition: .3s ease;
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
  margin: 0 auto 28px;
  border-bottom: 2px solid var(--primary-light);
  padding-bottom: 10px;
  width: fit-content;
}

/* ===== LINK GRID ===== */
.link-list {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
  gap: 16px;
}

/* ===== LINK BUTTON ===== */
.link-btn {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 14px 18px;
  border-radius: 12px;
  background: #ffffff;
  border: 1px solid #e5e7eb;
  text-decoration: none !important;
  transition: .3s ease;
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
  width: 38px;
  height: 38px;
  background: var(--primary-light);
  border-radius: 8px;
  display: flex;
  justify-content: center;
  align-items: center;
  color: var(--primary-color);
  font-size: 18px;
}

.btn-text {
  font-weight: 600;
  color: var(--text-dark);
  font-size: clamp(0.9rem, 2.5vw, 1.05rem);
}

.btn-arrow {
  color: var(--text-muted);
  transition: .3s;
}

.link-btn:hover .btn-arrow {
  color: var(--primary-color);
  transform: translateX(4px);
}

/* ===== TOUCH DEVICE ===== */
@media (hover: none) {
  .link-btn:hover {
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
    page-break-inside: avoid;
  }
}
</style>

<div class="page-wrapper">

  <!-- HEADER -->
  <div class="header-container">
    <div class="section-title">SK dan SOP Pelayanan Publik</div>
    <span class="section-subtitle">Dinas Pemberdayaan Masyarakat & Desa</span>
  </div>

  <!-- CARD SK -->
  <div class="section-card">
    <h2>Daftar SK Pelayanan Publik</h2>

    <div class="link-list">

      <a class="link-btn" href="https://drive.google.com/file/d/1GKpjxnAx_b8h_OZQ67_rYdGlgq_TaJXS/view" target="_blank">
        <div class="btn-content">
          <div class="icon-box">📄</div>
          <span class="btn-text">SK Tentang Standar Pelayanan Publik</span>
        </div>
        <div class="btn-arrow">➜</div>
      </a>

      <a class="link-btn" href="https://drive.google.com/file/d/1-v5_pdH8bk6wLPSfgdWJLob1KcumwCRp/view" target="_blank">
        <div class="btn-content">
          <div class="icon-box">📄</div>
          <span class="btn-text">SK Pengelolaan Pengaduan</span>
        </div>
        <div class="btn-arrow">➜</div>
      </a>

      <a class="link-btn" href="https://drive.google.com/file/d/1a3rWjRqcbt_vs9f86V9XZA2qggtxlN7d/view" target="_blank">
        <div class="btn-content">
          <div class="icon-box">📄</div>
          <span class="btn-text">SK Tim Pelayanan Publik, Visi, Misi, Motto dan Maklumat</span>
        </div>
        <div class="btn-arrow">➜</div>
      </a>

    </div>
  </div>

  <!-- CARD SOP -->
  <div class="section-card">
    <h2>Daftar SOP Pelayanan Publik</h2>

    <div class="link-list">

      <a class="link-btn" href="#" target="">
        <div class="btn-content">
          <div class="icon-box">📄</div>
          <span class="btn-text">SOP Pelayanan Konsultasi</span>
        </div>
        <div class="btn-arrow">➜</div>
      </a>

      <a class="link-btn" href="#" target="">
        <div class="btn-content">
          <div class="icon-box">📄</div>
          <span class="btn-text">SOP Pelayanan Data</span>
        </div>
        <div class="btn-arrow">➜</div>
      </a>

      <a class="link-btn" href="#" target="">
        <div class="btn-content">
          <div class="icon-box">📄</div>
          <span class="btn-text">SOP Fasilitas Rapat</span>
        </div>
        <div class="btn-arrow">➜</div>
      </a>

      <a class="link-btn" href="#" target="">
        <div class="btn-content">
          <div class="icon-box">📄</div>
          <span class="btn-text">SOP Pelayanan Penyediaan Narasumber</span>
        </div>
        <div class="btn-arrow">➜</div>
      </a>

    </div>
  </div>

</div>
