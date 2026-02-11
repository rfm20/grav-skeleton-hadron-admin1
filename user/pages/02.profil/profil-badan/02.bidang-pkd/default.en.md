---
title: 'Bidang PKD'
date: '15-12-2025 13:28'
---

<style>
/* ===== GLOBAL VARIABLES (KONSISTEN) ===== */
/* ===== GLOBAL VARIABLES (KONSISTEN) ===== */
:root {
  --primary-color: #0d6e4f;
  --primary-light: #e6f5f0;
  --text-dark: #1f2937;
  --text-muted: #4b5563;
  --radius-card: 16px;
  --shadow-sm: 0 4px 14px rgba(13,110,79,0.08);
  --shadow-hover: 0 10px 26px rgba(13,110,79,0.18);
}

/* ===== RESET & BASE ===== */
* {
  box-sizing: border-box;
}

body {
  font-family: 'Inter', system-ui, -apple-system, sans-serif;
  background-color: #f9fafb;
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
  letter-spacing: 1px;
}

/* ===== CARD ===== */
.section-card {
  background: #ffffff;
  padding: clamp(20px, 4vw, 40px);
  margin-bottom: 40px;
  border-radius: var(--radius-card);
  border: 1px solid rgba(13,110,79,0.12);
  box-shadow: var(--shadow-sm);
  transition: transform .35s ease, box-shadow .35s ease;
}

.section-card:hover {
  transform: translateY(-6px);
  box-shadow: var(--shadow-hover);
}

/* ===== CARD TITLE (CENTER & SERAGAM) ===== */
.section-card h2,
.section-card h3 {
  text-align: center;
  color: var(--primary-color);
  font-size: clamp(1.25rem, 3vw, 1.75rem);
  font-weight: 700;
  margin: 0 auto 28px;
  border-bottom: 2px solid var(--primary-light);
  padding-bottom: 10px;
  display: block;
  width: fit-content;
  max-width: 100%;
  line-height: 1.3;
}

/* ===== PARAGRAPH ===== */
.section-card p {
  font-size: clamp(0.9rem, 2vw, 1.05rem);
  color: var(--text-dark);
  line-height: 1.8;
  text-align: justify;
  margin-bottom: 18px;
  word-wrap: break-word;
  overflow-wrap: break-word;
  hyphens: auto;
}

/* ===== REGULASI BOX ===== */
.regulasi-box {
  background-color: var(--primary-light);
  padding: 16px 20px;
  border-left: 4px solid var(--primary-color);
  border-radius: 0 8px 8px 0;
  margin-bottom: 28px;
}

.regulasi-box p {
  margin: 0;
  font-size: clamp(0.85rem, 2vw, 1rem);
  color: var(--text-dark);
  line-height: 1.6;
}

.regulasi-box strong {
  color: var(--primary-color);
  font-weight: 700;
}

/* ===== LIST STYLE (KONSISTEN) ===== */
ul.custom-list {
  list-style: none;
  padding: 0;
  margin: 0;
}

ul.custom-list li {
  position: relative;
  padding-left: 32px;
  margin-bottom: 12px;
  font-size: clamp(0.9rem, 2vw, 1.05rem);
  line-height: 1.8;
  color: var(--text-dark);
  text-align: justify;
  word-wrap: break-word;
  overflow-wrap: break-word;
}

ul.custom-list li::before {
  content: "";
  position: absolute;
  left: 0;
  top: 8px;
  width: 12px;
  height: 12px;
  border-radius: 50%;
  background: linear-gradient(135deg, #88c6b8, #4f7f72);
  box-shadow: 0 0 4px rgba(79,127,114,0.4);
  flex-shrink: 0;
}

/* ===== LINK BUTTON ===== */
.link-list {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
  gap: 20px;
}

.link-btn {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 16px 20px;
  border-radius: 14px;
  background: #fff;
  border: 1px solid #e5e7eb;
  text-decoration: none !important;
  transition: transform .25s ease, border-color .25s ease, box-shadow .25s ease;
}

.link-btn:hover {
  transform: translateY(-4px);
  border-color: var(--primary-color);
  box-shadow: var(--shadow-hover);
}

.btn-content {
  display: flex;
  align-items: center;
  gap: 12px;
  flex: 1;
  min-width: 0;
}

.icon-box {
  width: 42px;
  height: 42px;
  background: var(--primary-light);
  border-radius: 10px;
  display: flex;
  justify-content: center;
  align-items: center;
  color: var(--primary-color);
  font-size: 20px;
  flex-shrink: 0;
}

.btn-text {
  font-weight: 600;
  color: var(--text-dark);
  font-size: clamp(0.85rem, 2vw, 0.95rem);
  word-wrap: break-word;
  overflow-wrap: break-word;
  line-height: 1.4;
}

.btn-arrow {
  color: var(--text-muted);
  font-size: 1.2rem;
  transition: .2s ease;
  flex-shrink: 0;
  margin-left: 10px;
}

.link-btn:hover .btn-arrow {
  color: var(--primary-color);
  transform: translateX(4px);
}

/* ===== RESPONSIVE BREAKPOINTS ===== */

/* Tablet (768px and below) */
@media (max-width: 768px) {
  .page-wrapper {
    padding: 30px 15px;
  }

  .header-container {
    margin-bottom: 35px;
  }

  .section-card {
    margin-bottom: 30px;
    padding: 25px 20px;
  }

  .section-card h2,
  .section-card h3 {
    margin-bottom: 20px;
    padding: 0 10px 10px;
  }

  .section-card p {
    margin-bottom: 16px;
  }

  .regulasi-box {
    padding: 14px 18px;
    margin-bottom: 24px;
  }

  ul.custom-list li {
    padding-left: 28px;
    margin-bottom: 10px;
  }

  ul.custom-list li::before {
    width: 10px;
    height: 10px;
    top: 7px;
  }

  .link-list {
    grid-template-columns: 1fr;
  }

  .link-btn {
    padding: 14px 18px;
  }

  .icon-box {
    width: 38px;
    height: 38px;
    font-size: 18px;
  }
}

/* Mobile (480px and below) */
@media (max-width: 480px) {
  .page-wrapper {
    padding: 20px 12px;
  }

  .header-container {
    margin-bottom: 30px;
  }

  .section-title {
    font-size: 1.6rem;
    letter-spacing: -0.3px;
  }

  .section-subtitle {
    font-size: 0.75rem;
    padding: 5px 12px;
    letter-spacing: 0.5px;
  }

  .section-card {
    padding: 20px 15px;
    margin-bottom: 25px;
  }

  .section-card h2,
  .section-card h3 {
    font-size: 1.15rem;
    margin-bottom: 18px;
    padding-bottom: 8px;
  }

  .section-card p {
    font-size: 0.9rem;
    line-height: 1.7;
    margin-bottom: 14px;
  }

  .regulasi-box {
    padding: 12px 15px;
    margin-bottom: 20px;
  }

  .regulasi-box p {
    font-size: 0.85rem;
  }

  ul.custom-list li {
    padding-left: 24px;
    margin-bottom: 10px;
    font-size: 0.9rem;
    line-height: 1.7;
  }

  ul.custom-list li::before {
    width: 8px;
    height: 8px;
    top: 6px;
  }

  .link-list {
    gap: 15px;
  }

  .link-btn {
    padding: 14px 16px;
    gap: 10px;
  }

  .btn-content {
    gap: 10px;
  }

  .icon-box {
    width: 36px;
    height: 36px;
    font-size: 16px;
  }

  .btn-text {
    font-size: 0.85rem;
  }

  .btn-arrow {
    font-size: 1.1rem;
  }
}

/* Extra small devices (360px and below) */
@media (max-width: 360px) {
  .page-wrapper {
    padding: 15px 10px;
  }

  .header-container {
    margin-bottom: 25px;
  }

  .section-title {
    font-size: 1.4rem;
  }

  .section-subtitle {
    font-size: 0.7rem;
    padding: 4px 10px;
  }

  .section-card {
    padding: 15px 12px;
    margin-bottom: 20px;
  }

  .section-card h2,
  .section-card h3 {
    font-size: 1.05rem;
    margin-bottom: 15px;
  }

  .section-card p {
    font-size: 0.85rem;
    margin-bottom: 12px;
  }

  .regulasi-box {
    padding: 10px 12px;
  }

  .regulasi-box p {
    font-size: 0.8rem;
  }

  ul.custom-list li {
    padding-left: 22px;
    margin-bottom: 8px;
    font-size: 0.85rem;
  }

  ul.custom-list li::before {
    width: 7px;
    height: 7px;
    top: 5px;
  }

  .link-btn {
    padding: 12px 14px;
  }

  .icon-box {
    width: 32px;
    height: 32px;
    font-size: 14px;
  }

  .btn-text {
    font-size: 0.8rem;
  }
}

/* Print styling */
@media print {
  .section-card {
    box-shadow: none;
    border: 1px solid #ddd;
    page-break-inside: avoid;
  }

  .section-card:hover {
    transform: none;
  }

  .link-btn {
    border: 1px solid #ddd;
  }

  .link-btn:hover {
    transform: none;
  }

  ul.custom-list li::before {
    box-shadow: none;
  }
}
</style>

<div class="page-wrapper">

  <div class="header-container">
    <div class="section-title">Bidang Penataan & Kerjasama Desa</div>
    <span class="section-subtitle">Dinas Pemberdayaan Masyarakat & Desa</span>
  </div>

  <div class="section-card">
    <h2>Bidang Penataan dan Kerjasama Desa</h2>
    <p>
      Bidang Penataan dan Kerjasama Desa mempunyai tugas menyiapkan bahan dan merumuskan kebijakan teknis di bidang penataan desa, kerjasama desa dan kawasan perdesaan, kelembagaan, sarana dan prasarana pelayanan pemerintahan, serta bertanggungjawab memimpin seluruh kegiatan pelayanan dan administrasi di bidang penataan dan kerjasama desa.
    </p>
  </div>

  <div class="section-card">
    <h2>Publikasi PKD</h2>

    <div class="link-list">
      <a class="link-btn" href="https://docs.google.com/spreadsheets/d/1SEQYqoTcddxn5kHEaNRxlYAhlTqaGD1P/edit?gid=129243836#gid=129243836" target="_blank">
        <div class="btn-content">
          <div class="icon-box">📄</div>
          <span class="btn-text">Data BUMDESMA 2020</span>
        </div>
        <div class="btn-arrow">➜</div>
      </a>

      <a class="link-btn" href="https://docs.google.com/spreadsheets/d/13HrJ6N5X0dt1jTI6WkjiC4e29wY1cBJR/edit?rtpof=true&sd=true" target="_blank">
        <div class="btn-content">
          <div class="icon-box">📄</div>
          <span class="btn-text">Data Kawasan 2019</span>
        </div>
        <div class="btn-arrow">➜</div>
      </a>
    </div>
  </div>

</div>
