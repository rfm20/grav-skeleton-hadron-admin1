---
title: 'Profil PPID'
date: '13-12-2025 10:54'
media_order: 'STRUKTUR-PPID-2024.pdf,III 3 MAKLUMAT PELAYANAN INFORMASI PUBLIK_page-0002.jpg,III 3 MAKLUMAT PELAYANAN INFORMASI PUBLIK_page-0001.jpg,I4 VISI DAN MISI PPID_page-0001.jpg,I2 Tugas dan Wewenang PPID Pemdes_page-0001.jpg'
---

<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;800&display=swap');

/* ===== VARIABLES ===== */
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
.sub-card {
  background: #ffffff;
  padding: 40px;
  margin-bottom: 40px;
  border-radius: var(--radius-card);
  border: 1px solid rgba(13,110,79,0.12);
  box-shadow: var(--shadow-sm);
  transition: transform 0.35s ease, box-shadow 0.35s ease;
}

.sub-card:hover {
  transform: translateY(-6px);
  box-shadow: var(--shadow-hover);
}

.sub-card h2 {
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

.sub-card p {
  font-size: clamp(0.95rem, 2vw, 1.05rem);
  line-height: 1.7;
  color: var(--text-dark);
  text-align: justify;
  margin-bottom: 1rem;
}

.sub-card img {
  width: 100%;
  height: auto;
  border-radius: 12px;
  box-shadow: 0 4px 15px rgba(0,0,0,0.08);
  margin-top: 15px;
  display: block;
}

/* ===== LINK BUTTON ===== */
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
  
  .sub-card {
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
  
  .sub-card {
    padding: 28px 20px;
    margin-bottom: 28px;
  }
  
  .sub-card h2 {
    margin-bottom: 24px;
    padding-bottom: 8px;
    max-width: 95%;
  }
  
  .sub-card p {
    text-align: left;
  }
  
  .sub-card img {
    margin-top: 12px;
    border-radius: 10px;
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
  
  .sub-card {
    padding: 24px 16px;
    margin-bottom: 24px;
    border-radius: 12px;
  }
  
  .sub-card h2 {
    margin-bottom: 20px;
    max-width: 100%;
  }
  
  .sub-card img {
    margin-top: 10px;
    border-radius: 8px;
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
  
  .sub-card {
    padding: 20px 14px;
  }
  
  .sub-card img {
    margin-top: 8px;
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
  
  .sub-card {
    margin-bottom: 20px;
    padding: 24px 20px;
  }
  
  .sub-card h2 {
    margin-bottom: 20px;
  }
  
  .sub-card img {
    margin-top: 10px;
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
  
  .sub-card {
    box-shadow: none;
    border: 1px solid #ddd;
    page-break-inside: avoid;
  }
  
  .sub-card h2 {
    page-break-after: avoid;
  }
  
  .sub-card img {
    page-break-inside: avoid;
    box-shadow: none;
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
    <div class="section-title">Profil PPID</div>
    <span class="section-subtitle">Dinas Pemberdayaan Masyarakat & Desa</span>
  </div>

  <!-- ===== STRUKTUR PPID (PDF BUTTON) ===== -->
  <div class="sub-card">
    <h2>Struktur PPID</h2>
    <div class="link-list">
      <a class="link-btn" href="STRUKTUR-PPID-2024.pdf" target="_blank">
        <div class="btn-content">
          <div class="icon-box">📄</div>
          <span class="btn-text">Struktur Organisasi PPID 2024</span>
        </div>
        <div class="btn-arrow">➜</div>
      </a>
    </div>
  </div>

  <!-- ===== TUGAS & FUNGSI ===== -->
  <div class="sub-card">
    {% markdown %}
    ## Tugas dan Fungsi PPID
    ![I2 Tugas dan Wewenang PPID Pemdes](I2%20Tugas%20dan%20Wewenang%20PPID%20Pemdes_page-0001.jpg)
    {% endmarkdown %}
  </div>

  <!-- ===== VISI MISI ===== -->
  <div class="sub-card">
    {% markdown %}
    ## Visi dan Misi PPID
    ![I4 VISI DAN MISI PPID](I4%20VISI%20DAN%20MISI%20PPID_page-0001.jpg)
    {% endmarkdown %}
  </div>

          <!-- ===== JADWAL PETUGAS LAYANAN ===== -->
  <div class="sub-card">
    <h2>Jadwal Petugas Layanan</h2>
    <div class="link-list">
      <a class="link-btn" href="https://drive.google.com/drive/folders/1wZVR7aVDIRQSoioWVIoHrlqI_yM3-HG8?usp=sharing" target="_blank">
        <div class="btn-content">
          <div class="icon-box">📄</div>
          <span class="btn-text">Jadwal Petugas Layanan</span>
        </div>
        <div class="btn-arrow">➜</div>
      </a>
    </div>
  </div>
    
  <!-- ===== MAKLUMAT ===== -->
  <div class="sub-card">
    {% markdown %}
    ## Maklumat Pelayanan Informasi Publik
    ![Maklumat 1](III%203%20MAKLUMAT%20PELAYANAN%20INFORMASI%20PUBLIK_page-0001.jpg)
    ![Maklumat 2](III%203%20MAKLUMAT%20PELAYANAN%20INFORMASI%20PUBLIK_page-0002.jpg)
    {% endmarkdown %}
  </div>

  <!-- ===== LAPORAN PPID (LINK BUTTON) ===== -->
  <div class="sub-card">
    <h2>Laporan PPID</h2>
    <div class="link-list">

      <a class="link-btn" href="https://drive.google.com/file/d/1KmjsSGVtklMYnzpySFzzHISKkcd9EGpJ/view" target="_blank">
        <div class="btn-content"><div class="icon-box">📄</div><span class="btn-text">Laporan PPID Tahun 2021</span></div><div class="btn-arrow">➜</div>
      </a>

      <a class="link-btn" href="https://dpmd.kalbarprov.go.id/assets/img/dpmd-content/0.-LAPORAN-PPID-2022.pdf" target="_blank">
        <div class="btn-content"><div class="icon-box">📄</div><span class="btn-text">Laporan PPID Tahun 2022</span></div><div class="btn-arrow">➜</div>
      </a>

      <a class="link-btn" href="https://drive.google.com/file/d/14ZvrWI8ookxCIB0zLfBBBiuXKbfpdGVg/view" target="_blank">
        <div class="btn-content"><div class="icon-box">📄</div><span class="btn-text">Laporan PPID Tahun 2023</span></div><div class="btn-arrow">➜</div>
      </a>

      <a class="link-btn" href="https://drive.google.com/file/d/19y6gyk8tbmbLWXaOzkzNn-qXa2fm7RL0/view" target="_blank">
        <div class="btn-content"><div class="icon-box">📄</div><span class="btn-text">Laporan PPID Tahun 2024</span></div><div class="btn-arrow">➜</div>
      </a>

    </div>
  </div>

</div>
