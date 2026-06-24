---
title: 'Koperasi Desa Merah Putih'
date: '26-11-2025 06:26'
visible: true
process:
    markdown: true
    twig: true
published: true
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
  font-size: clamp(1.5rem, 4vw, 2.5rem);
  font-weight: 800;
  color: var(--primary-color);
  margin: 0;
  line-height: 1.2;
  letter-spacing: -0.5px;
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
}

/* ===== LINK LIST ===== */
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
    margin-bottom: 32px;
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
    max-width: 95%;
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
  
  .section-title {
    letter-spacing: -0.3px;
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
    max-width: 100%;
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
    margin-bottom: 30px;
  }
  
  .section-card h2 {
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

  <!-- ===== HEADER ===== -->
  <div class="header-container">
    <div class="section-title">Koperasi Desa Merah Putih</div>
    <span class="section-subtitle">Dinas Pemberdayaan Masyarakat & Desa</span>
  </div>
    	
<!-- ===== Aturan Aset Desa ===== -->
  <!-- ===== CARD ===== -->
  <div class="section-card">
    <h2>Aturan Aset Desa</h2>

    <div class="link-list">

      <!-- ===============================
           TEMPLATE 1 — LINK EKSTERNAL
           (Google Drive / Website)
      ================================ -->
      <a class="link-btn"
         href="https://drive.google.com/file/d/1R6XRTigGxptC7VH23qSYsQVTZs0k6C4R/view"
         target="_blank">
        <div class="btn-content">
          <div class="icon-box">📄</div>
          <span class="btn-text">
            01 Permendagri No 1 Tahun 2016 Pengelolaan Aset Desa
          </span>
        </div>
        <div class="btn-arrow">➜</div>
      </a>
      
      <a class="link-btn"
         href="https://drive.google.com/file/d/1ZzXHAdsIUSd8kIhkGdMAlVIrQOZoYPfQ/view"
         target="_blank">
        <div class="btn-content">
          <div class="icon-box">📄</div>
          <span class="btn-text">
            02 Permendagri No 3 Tahun 2024 Perub Pmdn 1 2016 ttg Pengelola Aset Desa
          </span>
        </div>
        <div class="btn-arrow">➜</div>
      </a>
      

    </div>
  </div>
    
  <!-- ===== Aturan Batas Desa ===== -->
    <div class="section-card">
    <h2>Aturan Batas Desa</h2>

    <div class="link-list">

      <a class="link-btn"
         href="https://drive.google.com/file/d/1vg68gPpheCY4NqgU8Y3QATVvELNV5ai1/view"
         target="_blank">
        <div class="btn-content">
          <div class="icon-box">📄</div>
          <span class="btn-text">
            01 UU 4 Tahun 2011 Informasi Geospasial
          </span>
        </div>
        <div class="btn-arrow">➜</div>
      </a>
        
      <a class="link-btn"
         href="https://drive.google.com/file/d/1PPHuzMRZXla2CaQpLmd_D5AVH86d5l-i/view"
         target="_blank">
        <div class="btn-content">
          <div class="icon-box">📄</div>
          <span class="btn-text">
            02 Permendagri No 45 2016 Pedoman Penetapan Penegasan Batas Desa
          </span>
        </div>
        <div class="btn-arrow">➜</div>
      </a>
        
      <a class="link-btn"
         href="https://drive.google.com/file/d/170gW3k3hJw_PW9yeSHrEJ2_maPxleEUy/view"
         target="_blank">
        <div class="btn-content">
          <div class="icon-box">📄</div>
          <span class="btn-text">
            03 Peraturan BIG No 15 2019 Metode Kartometrik Pada Penetapan dan Pengasan Batas Desa Kelurahan
          </span>
        </div>
        <div class="btn-arrow">➜</div>
      </a>
        
      <a class="link-btn"
         href="https://drive.google.com/file/d/1-BrO9YqnsbDmNVILfDKEGrz09E5Kk-Pz/view"
         target="_blank">
        <div class="btn-content">
          <div class="icon-box">📄</div>
          <span class="btn-text">
            04a Perpres Nomor 23 Tahun 2021 Perubahan Perpres 9 2016 Kebijakan Satu Peta
          </span>
        </div>
        <div class="btn-arrow">➜</div>
      </a>
        
      <a class="link-btn"
         href="https://drive.google.com/file/d/1pSmwQHDfFtzrW7RxyMyl5vLHJw5ElppX/view"
         target="_blank">
        <div class="btn-content">
          <div class="icon-box">📄</div>
          <span class="btn-text">
            04b Perpres Nomor 23 Tahun 2021 - Lampiran
          </span>
        </div>
        <div class="btn-arrow">➜</div>
      </a>

    </div>
  </div>
    
  <!-- ===== Aturan BUMDES ===== -->
    <div class="section-card">
    <h2>Aturan BUMDES</h2>

    <div class="link-list">

      <a class="link-btn"
         href="https://drive.google.com/file/d/1FByja_twW0N3HUXL1shSVFwv_xv8Wm6m/view"
         target="_blank">
        <div class="btn-content">
          <div class="icon-box">📄</div>
          <span class="btn-text">
            01 UU Nomor 06 Tahun 2014 UU Desa
          </span>
        </div>
        <div class="btn-arrow">➜</div>
      </a>
        
      <a class="link-btn"
         href="https://drive.google.com/file/d/1UZ-2w9tNplrf28TgioZUXbz-HjjqFtw4/view"
         target="_blank">
        <div class="btn-content">
          <div class="icon-box">📄</div>
          <span class="btn-text">
            02 PP Nomor 11 Tahun 2021 BUM Desa
          </span>
        </div>
        <div class="btn-arrow">➜</div>
      </a>
        
      <a class="link-btn"
         href="https://drive.google.com/file/d/1w2aUcUf9RZbvnyWhOwhEnBJ87ZhrLf8g/view"
         target="_blank">
        <div class="btn-content">
          <div class="icon-box">📄</div>
          <span class="btn-text">
            03 Permendes PDTT No 4 Tahun 2015 Pendirian Pengurusan Pembubaran Bumdes
          </span>
        </div>
        <div class="btn-arrow">➜</div>
      </a>
        
      <a class="link-btn"
         href="https://drive.google.com/file/d/1ZvGJqw2QGauJctYCShb0EBC3GcP6Z5ps/view"
         target="_blank">
        <div class="btn-content">
          <div class="icon-box">📄</div>
          <span class="btn-text">
            04 Permendes PDTT No 3 Tahun 2021 Pendaftaran Pemeringkatan PBJ BUMDES DESMA
          </span>
        </div>
        <div class="btn-arrow">➜</div>
      </a>

    </div>
  </div>
    
    
  <!-- ===== Aturan Indeks Desa ===== -->
    <div class="section-card">
    <h2>Aturan Indeks Desa</h2>

    <div class="link-list">

      <a class="link-btn"
         href="https://drive.google.com/file/d/1EWA3AJ8ki4gEHWGMACdEvD07Fr2m1GK8/view"
         target="_blank">
        <div class="btn-content">
          <div class="icon-box">📄</div>
          <span class="btn-text">
            01 Permendesa Nomor 2 Tahun 2016 indeks desa membangun
          </span>
        </div>
        <div class="btn-arrow">➜</div>
      </a>
        
      <a class="link-btn"
         href="https://drive.google.com/file/d/1o2TAz4N82WUrZCDJj3btOy3jXMCoQbj6/view"
         target="_blank">
        <div class="btn-content">
          <div class="icon-box">📄</div>
          <span class="btn-text">
            02 BUKU PERMENDES 9 TAHUN 2024 ttg Indeks Desa
          </span>
        </div>
        <div class="btn-arrow">➜</div>
      </a>
        
      <a class="link-btn"
         href="https://drive.google.com/file/d/1G7xTID03kcm0bz1bnPRKDz8oA3cdMxwd/view"
         target="_blank">
        <div class="btn-content">
          <div class="icon-box">📄</div>
          <span class="btn-text">
            03 SK Gubernur tentang Pembentukan Tim Verifikasi dan Validasi Pendataan Indeks Desa 2025
          </span>
        </div>
        <div class="btn-arrow">➜</div>
      </a>
        
      <a class="link-btn"
         href="https://drive.google.com/file/d/1taoLT15FKGSlnpAdk7ziQk7cSXTWsl6R/view"
         target="_blank">
        <div class="btn-content">
          <div class="icon-box">📄</div>
          <span class="btn-text">
            04 KepmenDesPDT 343 Tahun 2025 ttg Status Kemajuan dan Kemandirian Desa 2025
          </span>
        </div>
        <div class="btn-arrow">➜</div>
      </a>
        
      <a class="link-btn"
         href="https://drive.google.com/file/d/1PGLG--MB5rV6JcRkCxqM24P4riXM2jUY/view"
         target="_blank">
        <div class="btn-content">
          <div class="icon-box">📄</div>
          <span class="btn-text">
            05 Status Indeks Desa 2025 Kalbar
          </span>
        </div>
        <div class="btn-arrow">➜</div>
      </a>

    </div>
  </div>
    
  <!-- ===== Aturan Penggunaan Dana Desa ===== -->
    <div class="section-card">
    <h2>Aturan Penggunaan Dana Desa</h2>

    <div class="link-list">

      <a class="link-btn"
         href="https://drive.google.com/file/d/1jW9rzXgWGARx8Xe73Yme0sTz804eXKH-/view"
         target="_blank">
        <div class="btn-content">
          <div class="icon-box">📄</div>
          <span class="btn-text">
            01 Peraturan Menteri Desa, PDT, dan Transmigrasi Nomor 7 Tahunn 2023 tentang Rincian Prioritas Penggunaan DD
          </span>
        </div>
        <div class="btn-arrow">➜</div>
      </a>
        
      <a class="link-btn"
         href="https://drive.google.com/file/d/1DVINm9FYZ3G-yRjyycKb8RgyM_VTMpMD/view"
         target="_blank">
        <div class="btn-content">
          <div class="icon-box">📄</div>
          <span class="btn-text">
            02 Permendesa PDT No 2 2024 - Juknal Fokus Penggunaan Dana Desa Tahun 02 2025
          </span>
        </div>
        <div class="btn-arrow">➜</div>
      </a>
        
      <a class="link-btn"
         href="https://drive.google.com/file/d/1ZAVSA6XMPkixNkBt0m2NuwjujgoqeB0a/view"
         target="_blank">
        <div class="btn-content">
          <div class="icon-box">📄</div>
          <span class="btn-text">
            03 Kepmendes PDT No 3 2025 - Panduan DD _Ketahanan Pangan
          </span>
        </div>
        <div class="btn-arrow">➜</div>
      </a>

    </div>
  </div>
    
  <!-- ===== Aturan Ketahanan Pangan Desa ===== -->
    <div class="section-card">
    <h2>Aturan Ketahanan Pangan Desa</h2>

    <div class="link-list">
        
      <a class="link-btn"
         href="https://drive.google.com/file/d/17EU2Ti985jouukcju47s5tAjHclPKMKM/view"
         target="_blank">
        <div class="btn-content">
          <div class="icon-box">📄</div>
          <span class="btn-text">
            003 Kepmendes PDT No 3 2025 - Panduan DD _Ketahanan Pangan
          </span>
        </div>
        <div class="btn-arrow">➜</div>
      </a>
        
      <a class="link-btn"
         href="https://drive.google.com/file/d/1STmsy2DfTC0Dsx2dpLBh-DbgWH7_vLuD/view"
         target="_blank">
        <div class="btn-content">
          <div class="icon-box">📄</div>
          <span class="btn-text">
            71 Surat Edara Gub Pangan Lokal 2025 OPD_PHRI
          </span>
        </div>
        <div class="btn-arrow">➜</div>
      </a>
        
      <a class="link-btn"
         href="https://drive.google.com/file/d/19Zi3AWrkXKXJE-aeYki_dJU8HGtGcpL3/view"
         target="_blank">
        <div class="btn-content">
          <div class="icon-box">📄</div>
          <span class="btn-text">
            Bagaimana sebenarnya aturan pelaksanaan penggunaan Dana Desa untuk ketahanan pangan
          </span>
        </div>
        <div class="btn-arrow">➜</div>
      </a>

    </div>
  </div>

  <!-- ===== Aturan KDKMP ===== -->
    <div class="section-card">
    <h2>Aturan KDKMP</h2>

    <div class="link-list">

      <a class="link-btn"
         href="https://drive.google.com/file/d/1FgZIgqfmxYQvuQus5yIn5zWE4zX9epW5/view"
         target="_blank">
        <div class="btn-content">
          <div class="icon-box">📄</div>
          <span class="btn-text">
            1.1 INPRES Nomor 9 Tahun 2025 Percepatan Pembentukan Kopdeskel 27 Maret
          </span>
        </div>
        <div class="btn-arrow">➜</div>
      </a>
        
      <a class="link-btn"
         href="https://drive.google.com/file/d/1wcvsqFU9kf3_dieiHrUOrY8QMWbYjXU9/view"
         target="_blank">
        <div class="btn-content">
          <div class="icon-box">📄</div>
          <span class="btn-text">
            1.2 SE MKop No 1 Tata Cara Pembentukan Kopdes Merah Putih 18 Maret
          </span>
        </div>
        <div class="btn-arrow">➜</div>
      </a>
        
      <a class="link-btn"
         href="https://drive.google.com/file/d/1skwV3YonM3uGCJBlteIP5U_tJtTOcx1u/view"
         target="_blank">
        <div class="btn-content">
          <div class="icon-box">📄</div>
          <span class="btn-text">
            1.3 SE Mendes PDT No 6 2025 ttg Juknis Percepatan Pelaksanaan Pembentukan Kopdes Merah Putih 11 April
          </span>
        </div>
        <div class="btn-arrow">➜</div>
      </a>
        
      <a class="link-btn"
         href="https://drive.google.com/file/d/1HBYvRUBHkEiqjAtNHCkJOX-HujNhcHuA/view"
         target="_blank">
        <div class="btn-content">
          <div class="icon-box">📄</div>
          <span class="btn-text">
            1.4 Juklak Kopdeskel Merah Putih Menkop No 1 2025 12 April
          </span>
        </div>
        <div class="btn-arrow">➜</div>
      </a>
        
      <a class="link-btn"
         href="https://drive.google.com/file/d/1aYmpqnYBQVSKc9OjFt5B1ckfwj5SwDnR/view"
         target="_blank">
        <div class="btn-content">
          <div class="icon-box">📄</div>
          <span class="btn-text">
            1.5 SE Mendagri 500.3 2438 Percepatan KOPDESKEL MP 7 Mei
          </span>
        </div>
        <div class="btn-arrow">➜</div>
      </a>
        
      <a class="link-btn"
         href="https://drive.google.com/file/d/1SbORb46Nz8o3p_-MXkdlIZuXldjWNE3h/view"
         target="_blank">
        <div class="btn-content">
          <div class="icon-box">📄</div>
          <span class="btn-text">
            1.6 Surat Dirjen Perimbangan Keu Penyaluran DD Tahap II TA 2025_14 Mei
          </span>
        </div>
        <div class="btn-arrow">➜</div>
      </a>
        
      <a class="link-btn"
         href="https://drive.google.com/file/d/1NjC-qheH2dMUNIVqyORXzL2TDnsMRiOy/view"
         target="_blank">
        <div class="btn-content">
          <div class="icon-box">📄</div>
          <span class="btn-text">
            1.7 B-235_Surat Menko pangan Percepatan Pelaksanaan Mudessus dan Pendirian Kopdeskel MP 14 Mei
          </span>
        </div>
        <div class="btn-arrow">➜</div>
      </a>
        
      <a class="link-btn"
         href="https://drive.google.com/file/d/1lfaXbe7Yffai6PAAGTiXAi_QjEXlr92n/view"
         target="_blank">
        <div class="btn-content">
          <div class="icon-box">📄</div>
          <span class="btn-text">
            1.8 SURAT Gub Kalbar PERCEPATAN Bentuk KOPDESKEL 16 Mei
          </span>
        </div>
        <div class="btn-arrow">➜</div>
      </a>
        
      <a class="link-btn"
         href="https://drive.google.com/file/d/1wzZZuY3iwDACvdEkpecAnkAh0fx5rjRB/view"
         target="_blank">
        <div class="btn-content">
          <div class="icon-box">📄</div>
          <span class="btn-text">
            1.9 SE No. 23 Tahun 2025, Percepatan Pembentukan Koperasi Desa-Kel Merah Putih 150525
          </span>
        </div>
        <div class="btn-arrow">➜</div>
      </a>
        
      <a class="link-btn"
         href="https://drive.google.com/file/d/1wxsUaRiA_BT9ypfyDwprf_5rVt3Catwu/view"
         target="_blank">
        <div class="btn-content">
          <div class="icon-box">📄</div>
          <span class="btn-text">
            1.9a Keputusan Presiden Republik Indonesia Nomor 9 Tahun 2025 Tentang Satuan Tugas Percepatan Pembentukan Koperasi Desa_Kelurahan Merah Putih
          </span>
        </div>
        <div class="btn-arrow">➜</div>
      </a>
        
      <a class="link-btn"
         href="https://drive.google.com/file/d/1tFZW4ZldRWjEHtiIddsmQQgWLplYL-zS/view"
         target="_blank">
        <div class="btn-content">
          <div class="icon-box">📄</div>
          <span class="btn-text">
            1.9b Surat Kodefikasi KDMP 27 Mei
          </span>
        </div>
        <div class="btn-arrow">➜</div>
      </a>
        
      <a class="link-btn"
         href="https://drive.google.com/file/d/1AFqhgoxT9QjnaW_MLAjXttn7Im29Upy7/view"
         target="_blank">
        <div class="btn-content">
          <div class="icon-box">📄</div>
          <span class="btn-text">
            1.9c Percepatan Proses Legislasi Badan Hukum Koperasi Desa Kelurahan Merah Putih di Tingkat Kecamatan
          </span>
        </div>
        <div class="btn-arrow">➜</div>
      </a>
        
      <a class="link-btn"
         href="https://drive.google.com/file/d/1fa8oym4fL-aT5cdeEXTAgg8GnzwWCfCK/view"
         target="_blank">
        <div class="btn-content">
          <div class="icon-box">📄</div>
          <span class="btn-text">
            1.10 SK Gubernur Kalbar Satgas KDMP 2025
          </span>
        </div>
        <div class="btn-arrow">➜</div>
      </a>
        
      <a class="link-btn"
         href="https://drive.google.com/file/d/1SSnFE0g2652x1HdgH7RcayJkl1ykVsE7/view"
         target="_blank">
        <div class="btn-content">
          <div class="icon-box">📄</div>
          <span class="btn-text">
            1.11 SURAT GUBERNUR MONITORING TIM SATGAS KDMP 2025
          </span>
        </div>
        <div class="btn-arrow">➜</div>
      </a>
        
      <a class="link-btn"
         href="https://drive.google.com/file/d/1s6-7YvWmw4pxLS-urE6B40BT-l4NjVHN/view"
         target="_blank">
        <div class="btn-content">
          <div class="icon-box">📄</div>
          <span class="btn-text">
            1.12 Salinan Kepmen 249 Th 2025 ttg Pendistribusian LPG Tertentu oleh Koperasi Merah Putih
          </span>
        </div>
        <div class="btn-arrow">➜</div>
      </a>
        
      <a class="link-btn"
         href="https://drive.google.com/file/d/17lcMbinjjIKNv-3txUrzbRh8kuRCkRPV/view"
         target="_blank">
        <div class="btn-content">
          <div class="icon-box">📄</div>
          <span class="btn-text">
            1.13 PMK 49 2025 Tata Cara Pinjaman Pendanaan KDMP
          </span>
        </div>
        <div class="btn-arrow">➜</div>
      </a>
        
      <a class="link-btn"
         href="https://drive.google.com/file/d/1GIfueb5ZSmnYQ7rbX1may6ScreJqA51q/view"
         target="_blank">
        <div class="btn-content">
          <div class="icon-box">📄</div>
          <span class="btn-text">
            08 SE Pemanfaatan BMD dan Aset Desa untuk Mendukung Pengembangan Rencana Bisnis Kegiatan KDKMP !
          </span>
        </div>
        <div class="btn-arrow">➜</div>
      </a>
        
      <a class="link-btn"
         href="https://drive.google.com/file/d/19GPVf9taY8g0VqIgI2HF0DEO9MMGj7fy/view"
         target="_blank">
        <div class="btn-content">
          <div class="icon-box">📄</div>
          <span class="btn-text">
            08a Inpres No 17 TAHUN 2025 TENTANG PERCEPATAN PEM…LENGKAPAN KOPERASI DESA, KELURAHAN MERAH PUTIH
          </span>
        </div>
        <div class="btn-arrow">➜</div>
      </a>
        
      <a class="link-btn"
         href="https://drive.google.com/file/d/16k1HsYbSxsj7em5kjkTHhgvLVFyZwq2K/view"
         target="_blank">
        <div class="btn-content">
          <div class="icon-box">📄</div>
          <span class="btn-text">
            11a ISI_BUKU SAKU BISNIS KEMITRAAN BUMN
          </span>
        </div>
        <div class="btn-arrow">➜</div>
      </a>
        
      <a class="link-btn"
         href="https://drive.google.com/file/d/1d5LUUzmUYHUS4LBbVRlOyoeKYAgmOFBU/view"
         target="_blank">
        <div class="btn-content">
          <div class="icon-box">📄</div>
          <span class="btn-text">
            11b ISI_BUKU SAKU PEMBIAYAAN
          </span>
        </div>
        <div class="btn-arrow">➜</div>
      </a>
        
      <a class="link-btn"
         href="https://drive.google.com/file/d/1iS0jdYPd64J3aCVfwuT_3rHBxUp9mBzJ/view"
         target="_blank">
        <div class="btn-content">
          <div class="icon-box">📄</div>
          <span class="btn-text">
            12 SE MENDES Percepatan Musyawarah Desa Khusus KopDes MP
          </span>
        </div>
        <div class="btn-arrow">➜</div>
      </a>
        
      <a class="link-btn"
         href="https://drive.google.com/file/d/1aOqMU885IgZ4UeRVu-_jwsw2cCL0X2J6/view"
         target="_blank">
        <div class="btn-content">
          <div class="icon-box">📄</div>
          <span class="btn-text">
            Narahubung Sistem Informasi Manajemen Koperasi DesaKelurahan Merah Putih (SIMKOPDES)
          </span>
        </div>
        <div class="btn-arrow">➜</div>
      </a>

    </div>
  </div>
    
    
</div>
