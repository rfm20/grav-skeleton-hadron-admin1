---
title: 'Umum Aparatur'
date: '15-12-2025 13:32'
---

<style>
/* ===== GLOBAL VARIABLES (KONSISTEN TEMPLATE UTAMA) ===== */
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
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: 'Inter', system-ui, -apple-system, sans-serif;
  background-color: #f9fafb;
  line-height: 1.6;
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
  padding: 30px 20px;
  margin-bottom: 30px;
  border-radius: var(--radius-card);
  border: 1px solid rgba(13,110,79,0.12);
  box-shadow: var(--shadow-sm);
  transition: transform 0.35s ease, box-shadow 0.35s ease;
}

.section-card:hover {
  transform: translateY(-6px);
  box-shadow: var(--shadow-hover);
}

/* ===== CARD TITLE ===== */
.section-card h2 {
  text-align: center;
  color: var(--primary-color);
  font-size: clamp(1.25rem, 3.5vw, 1.75rem);
  font-weight: 700;
  margin-top: 0;
  margin-bottom: 24px;
  border-bottom: 2px solid var(--primary-light);
  padding-bottom: 10px;
  line-height: 1.3;
}

/* ===== LINK LIST ===== */
.link-list {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
  gap: 16px;
}

/* ===== LINK BUTTON ===== */
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

/* ===== BUTTON CONTENT ===== */
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

/* ===== ARROW ===== */
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
    padding: 28px 18px;
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
    padding: 24px 16px;
    margin-bottom: 24px;
  }
  
  .section-card h2 {
    margin-bottom: 20px;
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
    padding: 20px 14px;
    margin-bottom: 20px;
    border-radius: 12px;
  }
  
  .section-card h2 {
    margin-bottom: 18px;
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
    padding: 18px 12px;
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

  <!-- ===== HEADER ===== -->
  <div class="header-container">
    <div class="section-title">Umum Aparatur</div>
    <span class="section-subtitle">Dinas Pemberdayaan Masyarakat & Desa</span>
  </div>

  <!-- ===== SOP PENGELOLAAN ORGANISASI ===== -->
  <div class="section-card">
    <h2>SOP Pedoman Pengelolaan Organisasi</h2>

    <div class="link-list">
      <a class="link-btn" href="https://drive.google.com/file/d/1-Ue3HuVHSE2b0Q4Cq4gBauweoF0g4dm5/view" target="_blank">
        <div class="btn-content"><div class="icon-box">📄</div><span class="btn-text">SOP Penyusunan Rencana Strategis DPMD</span></div><div class="btn-arrow">➜</div>
      </a>

      <a class="link-btn" href="https://drive.google.com/file/d/1Wgnr3BZwLtsi52BX3L0xRQ_1tFXP81GN/view" target="_blank">
        <div class="btn-content"><div class="icon-box">📄</div><span class="btn-text">SOP Penyusunan Rencana Kerja Tahunan DPMD</span></div><div class="btn-arrow">➜</div>
      </a>

      <a class="link-btn" href="https://drive.google.com/file/d/1L5FPdXhHPexGM9Tu8C3IUR6fH6rJnJdx/view" target="_blank">
        <div class="btn-content"><div class="icon-box">📄</div><span class="btn-text">SOP Penyusunan Indikator Kinerja Utama DPMD</span></div><div class="btn-arrow">➜</div>
      </a>

      <a class="link-btn" href="https://drive.google.com/file/d/1W2TxmFY0alKq88RKPj4TqX_IHyKNMu_a/view" target="_blank">
        <div class="btn-content"><div class="icon-box">📄</div><span class="btn-text">SOP Penyusunan Penetapan Kinerja DPMD</span></div><div class="btn-arrow">➜</div>
      </a>

      <a class="link-btn" href="https://drive.google.com/file/d/1x1FQakTXfy7EYUzKRFe_uueZncLDtsF_/view" target="_blank">
        <div class="btn-content"><div class="icon-box">📄</div><span class="btn-text">SOP LAKIP DPMD</span></div><div class="btn-arrow">➜</div>
      </a>

      <a class="link-btn" href="https://drive.google.com/file/d/1dOw4wL1WOcJ6G1V6ZvXD5q1gW3PngZbh/view" target="_blank">
        <div class="btn-content"><div class="icon-box">📄</div><span class="btn-text">SOP LPPD & LKPJ DPMD</span></div><div class="btn-arrow">➜</div>
      </a>
    </div>
  </div>

  <!-- ===== SOP ADMINISTRASI ===== -->
  <div class="section-card">
    <h2>SOP Pedoman Pengelolaan Administrasi</h2>

    <div class="link-list">
      <a class="link-btn" href="https://drive.google.com/file/d/1toX_Pzr2xQDNX-0e3RKdXc5gYTILqjqt/view" target="_blank">
        <div class="btn-content"><div class="icon-box">📄</div><span class="btn-text">SOP Administrasi Surat Masuk</span></div><div class="btn-arrow">➜</div>
      </a>

      <a class="link-btn" href="https://drive.google.com/file/d/1_C9b6QZo4xWfJTRb7NZfgtEXSGxYyoJ5/view" target="_blank">
        <div class="btn-content"><div class="icon-box">📄</div><span class="btn-text">SOP Administrasi Surat Keluar</span></div><div class="btn-arrow">➜</div>
      </a>

      <a class="link-btn" href="https://drive.google.com/file/d/1VgA2Me8uJIayL2l_CNzgrij70PoKWLPc/view" target="_blank">
        <div class="btn-content"><div class="icon-box">📄</div><span class="btn-text">SOP Prosedur Penyusunan SOP</span></div><div class="btn-arrow">➜</div>
      </a>

      <a class="link-btn" href="https://drive.google.com/file/d/16-VjZG_jGri6todsBy2LbBPtEACm1bUU/view" target="_blank">
        <div class="btn-content"><div class="icon-box">📄</div><span class="btn-text">SOP Penyusunan DUK</span></div><div class="btn-arrow">➜</div>
      </a>
    </div>
  </div>

  <!-- ===== SOP KEPEGAWAIAN ===== -->
  <div class="section-card">
    <h2>SOP Pedoman Kepegawaian</h2>

    <div class="link-list">
      <a class="link-btn" href="https://drive.google.com/file/d/1cfhaWAxJE7ixWXqNqD_guqLG1-9svwDk/view" target="_blank">
        <div class="btn-content"><div class="icon-box">📄</div><span class="btn-text">SOP Usulan Formasi PNS</span></div><div class="btn-arrow">➜</div>
      </a>

      <a class="link-btn" href="https://drive.google.com/file/u/1/d/1qY5lAZ9jhg9TD6iHBUI-L1ZLrPsIheDd/view" target="_blank">
        <div class="btn-content"><div class="icon-box">📄</div><span class="btn-text">SOP Izin Cuti ASN</span></div><div class="btn-arrow">➜</div>
      </a>

      <a class="link-btn" href="https://drive.google.com/file/d/1PSAQtcPn_meTQYyigQWIKrh2eic0wTuJ/view" target="_blank">
        <div class="btn-content"><div class="icon-box">📄</div><span class="btn-text">SOP Usulan Kenaikan Pangkat</span></div><div class="btn-arrow">➜</div>
      </a>

      <a class="link-btn" href="https://drive.google.com/file/d/1D0bjJCptuc5nGROWH5B5scw9wvx4JPSL/view" target="_blank">
        <div class="btn-content"><div class="icon-box">📄</div><span class="btn-text">SOP Kenaikan Gaji Berkala</span></div><div class="btn-arrow">➜</div>
      </a>

      <a class="link-btn" href="https://drive.google.com/file/d/1FaSbzHtCeUni4GUfSooKOmsJfqYu6DzL/view" target="_blank">
        <div class="btn-content"><div class="icon-box">📄</div><span class="btn-text">SOP Diklat, Beasiswa, & Tugas Belajar</span></div><div class="btn-arrow">➜</div>
      </a>
    </div>
  </div>

  <!-- ===== SOP KEUANGAN ===== -->
  <div class="section-card">
    <h2>SOP Pedoman Pengelolaan Keuangan</h2>

    <div class="link-list">
      <a class="link-btn" href="https://drive.google.com/file/d/1vDKDiBLu6cZFqicI0-wptJBMnoxjzr4B/view" target="_blank">
        <div class="btn-content"><div class="icon-box">📄</div><span class="btn-text">SOP Belanja GU</span></div><div class="btn-arrow">➜</div>
      </a>

      <a class="link-btn" href="https://drive.google.com/file/d/1f7uc7UO21JJcMhkKodoU7o1ZHL_oOUWs/view" target="_blank">
        <div class="btn-content"><div class="icon-box">📄</div><span class="btn-text">SOP Belanja TU</span></div><div class="btn-arrow">➜</div>
      </a>

      <a class="link-btn" href="https://drive.google.com/file/d/1Hd38dmJVmcjPSNF8LR3dVgzdIKmt5vGK/view" target="_blank">
        <div class="btn-content"><div class="icon-box">📄</div><span class="btn-text">SOP Belanja LS</span></div><div class="btn-arrow">➜</div>
      </a>

      <a class="link-btn" href="https://drive.google.com/file/d/1QdG1LbIRvL6FVW0iawAy2wfLbRHLh9rb/view" target="_blank">
        <div class="btn-content"><div class="icon-box">📄</div><span class="btn-text">SOP Belanja UP</span></div><div class="btn-arrow">➜</div>
      </a>

      <a class="link-btn" href="https://drive.google.com/file/d/1_gjSPAyTvONBFITt4l5bsdNsBCUKbQDN/view" target="_blank">
        <div class="btn-content"><div class="icon-box">📄</div><span class="btn-text">SOP Belanja Tidak Langsung Gaji, Tunjangan, & TPP</span></div><div class="btn-arrow">➜</div>
      </a>
    </div>
  </div>

</div>
