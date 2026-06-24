---
title: 'Data SAKIP'
date: '26-11-2025 06:26'
visible: true
process:
    markdown: true
    twig: true
page-toc:
    anchors:
        link: false
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

.section-card h2 {
  text-align: center;
  color: var(--primary-color);
  font-size: clamp(1.25rem, 3.5vw, 1.75rem);
  font-weight: 700;
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

/* ===== LINK LIST BUTTONS ===== */
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
  transition: all 0.2s ease;
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
  color: var(--primary-color);
  font-size: 20px;
}

.btn-text {
  font-weight: 600;
  color: var(--text-dark);
  font-size: clamp(0.875rem, 2vw, 1rem);
  line-height: 1.4;
  overflow: hidden;
  text-overflow: ellipsis;
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
  
  .section-card h2 {
    margin-bottom: 24px;
    padding-bottom: 8px;
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
  
  .section-card h2 {
    margin-bottom: 20px;
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
  
  .section-card h2 {
    margin-bottom: 20px;
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
  
  .link-btn {
    border: 1px solid #ddd;
  }
  
  .btn-arrow {
    display: none;
  }
}
</style>

<div class="page-wrapper">

  <div class="header-container">
    <div class="section-title">Data SAKIP</div>
    <span class="section-subtitle">Dinas Pemberdayaan Masyarakat & Desa</span>
  </div>

  <div class="section-card">
    <h2>Dokumen SAKIP</h2>

    <div class="link-list">
      <a class="link-btn" href="https://drive.google.com/file/d/1MCkxut_Z_s70QXhUt_TdCSz9k0lMS9xa/view" target="_blank">
        <div class="btn-content"><div class="icon-box">📄</div><span class="btn-text">Pedoman Teknis AKIP Internal DPMD</span></div>
        <div class="btn-arrow">➜</div>
      </a>

      <a class="link-btn" href="https://drive.google.com/file/d/1bmljN0ivmYc3kom6ymUCQzuGUUBewOff/view" target="_blank">
        <div class="btn-content"><div class="icon-box">📄</div><span class="btn-text">Pedoman Teknis Perencanaan Kinerja & Anggaran</span></div>
        <div class="btn-arrow">➜</div>
      </a>

      <a class="link-btn" href="https://drive.google.com/file/d/1ai7cCrh8nMZvHYC1RdR2NQFEyXssEUmE/view" target="_blank">
        <div class="btn-content"><div class="icon-box">📄</div><span class="btn-text">LAKIP DPMD Tahun 2024</span></div><div class="btn-arrow">➜</div>
      </a>

      <a class="link-btn" href="https://drive.google.com/file/d/1U9bWEWOYb2ruj30jxGcvZR2dusWxfOcT/view" target="_blank"><div class="btn-content"><div class="icon-box">📄</div><span class="btn-text">Laporan Monev Renaksi TW 1 (e-SAKIP)</span></div><div class="btn-arrow">➜</div>
      </a>

      <a class="link-btn" href="https://drive.google.com/file/d/1fz71IOgmlKhUgocEqwNZrSvGRGFBalUy/view" target="_blank"><div class="btn-content"><div class="icon-box">📄</div><span class="btn-text">LKPJ DPMD Tahun 2024</span></div><div class="btn-arrow">➜</div>
      </a>

      <a class="link-btn" href="https://drive.google.com/file/d/1icxhPObWyt5hvNdB8-0oCw-4Y9Mumkjd/view" target="_blank">
        <div class="btn-content"><div class="icon-box">📄</div><span class="btn-text">LPPD DPMD Tahun 2024</span></div><div class="btn-arrow">➜</div>
      </a>

      <a class="link-btn" href="https://drive.google.com/file/d/1P8cDO_MWoLk5OAePkRQMgyizRdtr087z/view" target="_blank">
        <div class="btn-content"><div class="icon-box">📄</div><span class="btn-text">Rencana Aksi DPMD 2025</span></div><div class="btn-arrow">➜</div>
      </a>

      <a class="link-btn" href="https://drive.google.com/file/d/1qmkUgS0pdMr4P6UM-VXYeRKkK_3MpCzL/view" target="_blank">
        <div class="btn-content"><div class="icon-box">📄</div><span class="btn-text">Rencana Kerja 2025</span></div><div class="btn-arrow">➜</div>
      </a>

      <a class="link-btn" href="https://drive.google.com/file/d/1hIr5Fg0Ai5A2N9-8DA5e1BIZseyJTv0A/view" target="_blank">
        <div class="btn-content"><div class="icon-box">📄</div><span class="btn-text">Renstra 2024–2026</span></div><div class="btn-arrow">➜</div>
      </a>

      <a class="link-btn" href="https://drive.google.com/drive/folders/1YcxI0-VqE24tePMUXpEt2H6qN-AhNzqh" target="_blank">
        <div class="btn-content"><div class="icon-box">📄</div><span class="btn-text">Perjankin 2025</span></div><div class="btn-arrow">➜</div>
      </a>

      <a class="link-btn" href="https://drive.google.com/file/d/1rI-SL88Q1LB3Im9Arr0pm4J-qTXwmAhn/view" target="_blank">
        <div class="btn-content"><div class="icon-box">📄</div><span class="btn-text">Laporan Realisasi Anggaran 2024</span></div><div class="btn-arrow">➜</div>
      </a>

      <a class="link-btn" href="https://drive.google.com/file/d/1ouE8ufGa85k8yvTtPrEC6bk8GWQq1KN4/view" target="_blank">
        <div class="btn-content"><div class="icon-box">📄</div><span class="btn-text">CALK 2024</span></div><div class="btn-arrow">➜</div>
      </a>

      <a class="link-btn" href="https://drive.google.com/file/d/1Y1jdAQnQQkEWJNQxxY6vqLcIpYC-uNoa/view" target="_blank">
        <div class="btn-content"><div class="icon-box">📄</div><span class="btn-text">Daftar Aset Publik 2025</span></div><div class="btn-arrow">➜</div>
      </a>

      <a class="link-btn" href="https://drive.google.com/file/d/1B6pMvP_g1g2asT-s9IC5a19r9DYI8ATN/view" target="_blank">
        <div class="btn-content"><div class="icon-box">📄</div><span class="btn-text">Neraca 2024</span></div><div class="btn-arrow">➜</div>
      </a>

      <a class="link-btn" href="https://drive.google.com/file/d/1-K_QTI5G_5H-vA3oKP-n7YSI_b7znboT/view" target="_blank">
        <div class="btn-content"><div class="icon-box">📄</div><span class="btn-text">DPA Tahun 2025</span></div><div class="btn-arrow">➜</div>
      </a>

      <a class="link-btn" href="https://drive.google.com/file/d/1vowkg8zmzVwNKqI2RVl3I5ZnHfFcr3AQ/view" target="_blank">
        <div class="btn-content"><div class="icon-box">📄</div><span class="btn-text">RKA Tahun 2025</span></div><div class="btn-arrow">➜</div>
      </a>

      <a class="link-btn" href="https://drive.google.com/file/d/113uVYvOzx06i-Sp5Z8g8M_l4j9uClNCi/view" target="_blank">
        <div class="btn-content"><div class="icon-box">📄</div><span class="btn-text">Realisasi Anggaran TW1 2025</span></div><div class="btn-arrow">➜</div>
      </a>

      <a class="link-btn" href="https://drive.google.com/file/d/15nbi_ptqnZlfnEqXAGO4x1VnOLshTcao/view" target="_blank">
        <div class="btn-content"><div class="icon-box">📄</div><span class="btn-text">Renstra 2018–2023</span></div><div class="btn-arrow">➜</div>
      </a>

      <a class="link-btn" href="https://drive.google.com/file/d/1N0kVVi0uVR5CqJRYA0jbpgTxJqBHJl4u/view" target="_blank">
        <div class="btn-content"><div class="icon-box">📄</div><span class="btn-text">SK IKU 2021</span></div><div class="btn-arrow">➜</div>
      </a>

      <a class="link-btn" href="https://drive.google.com/file/d/1zI8KgEZ2TJP6ygKR9Td4Jw53sIekpR9G/view" target="_blank">
        <div class="btn-content"><div class="icon-box">📄</div><span class="btn-text">LAKIP 2020</span></div><div class="btn-arrow">➜</div>
      </a>

      <a class="link-btn" href="https://drive.google.com/file/d/1GemDIFdP_f-IE7qe_x1IR8LN4ufmVmdl/view" target="_blank">
        <div class="btn-content"><div class="icon-box">📄</div><span class="btn-text">Perjankin 2021</span></div><div class="btn-arrow">➜</div>
      </a>

      <a class="link-btn" href="https://drive.google.com/file/d/1WAoFLgTjXPKLMWnK3MHcL8OAthEwsPcm/view" target="_blank">
      <div class="btn-content"><div class="icon-box">📄</div><span class="btn-text">Realisasi Anggaran 2023</span></div><div class="btn-arrow">➜</div>
      </a>

      <a class="link-btn" href="https://drive.google.com/file/d/1mxs3LGecDy24QUkI3uCJx4EYOP84oskB/view" target="_blank">
      <div class="btn-content"><div class="icon-box">📄</div><span class="btn-text">CALK 2023</span></div><div class="btn-arrow">➜</div>
      </a>

      <a class="link-btn" href="https://drive.google.com/file/u/1/d/1FR_AxIIhLIZ0OZ0_Um_W2MP5zvTWR2wf/view?usp=sharing" target="_blank">
      <div class="btn-content"><div class="icon-box">📄</div><span class="btn-text">Neraca 2023</span></div><div class="btn-arrow">➜</div>
      </a>

      <a class="link-btn" href="https://drive.google.com/file/d/1Rtj_rNhYM6qL7wLXrEdNAo-W0Nl-EWhk/view" target="_blank">
      <div class="btn-content"><div class="icon-box">📄</div><span class="btn-text">DPA 2024</span></div><div class="btn-arrow">➜</div>
      </a>

      <a class="link-btn" href="https://drive.google.com/file/d/1r6I0aRsmOJms1lNPUTu-HamokjgQ9Y8x/view" target="_blank">
      <div class="btn-content"><div class="icon-box">📄</div><span class="btn-text">Program Kegiatan 2023</span></div><div class="btn-arrow">➜</div>
      </a>

      <a class="link-btn" href="https://drive.google.com/file/d/1EaoLJ92BbvoHH2KCosQkuRy0fBW95OEV/view" target="_blank">
      <div class="btn-content"><div class="icon-box">📄</div><span class="btn-text">Program Kegiatan TW1 2024</span></div><div class="btn-arrow">➜</div>
      </a>

      <a class="link-btn" href="https://drive.google.com/file/d/1HOhr7CoU_82GFWbDQXq8mnyRnP9Sdh-m/view" target="_blank">
      <div class="btn-content"><div class="icon-box">📄</div><span class="btn-text">Daftar Aset Badan Publik</span></div><div class="btn-arrow">➜</div>
      </a>

    </div>
  </div>

</div>
