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

body {
  font-family: 'Inter', system-ui, -apple-system, sans-serif;
  background-color: #f9fafb;
}

/* ===== PAGE WRAPPER ===== */
.page-wrapper {
  max-width: 960px;
  margin: 0 auto;
  padding: 40px 20px;
}

/* ===== HEADER (DIUBAH) ===== */
.header-container {
  text-align: center;
  margin-bottom: 50px;
}

.section-title {
  font-size: 2.5rem;
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
  font-size: 0.9rem;
  font-weight: 600;
  text-transform: uppercase;
  letter-spacing: 1px;
}

/* ===== CARD ===== */
.sub-card {
  background: #ffffff;
  padding: 40px;
  margin-bottom: 40px;
  border-radius: var(--radius-card);
  border: 1px solid rgba(13,110,79,0.12);
  box-shadow: var(--shadow-sm);
  transition: .35s ease;
}

.sub-card:hover {
  transform: translateY(-6px);
  box-shadow: var(--shadow-hover);
}

.sub-card h2 {
  text-align: center;
  color: var(--primary-color);
  font-size: 1.75rem;
  font-weight: 700;
  margin-top: 0;
  margin-bottom: 32px;
  border-bottom: 2px solid var(--primary-light);
  padding-bottom: 10px;
  display: inline-block;
  position: relative;
  left: 50%;
  transform: translateX(-50%);
}

.sub-card p {
  font-size: 1.05rem;
  line-height: 1.7;
  color: var(--text-dark);
  text-align: justify;
}

.sub-card img {
  width: 100%;
  border-radius: 12px;
  box-shadow: 0 4px 15px rgba(0,0,0,0.08);
  margin-top: 15px;
}

/* ===== LINK BUTTON (DIUBAH) ===== */
.link-list {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(300px,1fr));
  gap: 20px;
}

.link-btn {
  display:flex;
  justify-content:space-between;
  align-items:center;
  padding:14px 20px;
  border-radius:12px;
  background:#fff;
  border:1px solid #e5e7eb;
  text-decoration:none !important;
  transition:.25s ease;
}

.link-btn:hover {
  border-color: var(--primary-color);
  box-shadow: var(--shadow-hover);
  transform: translateY(-2px);
}

.btn-content {
  display:flex;
  align-items:center;
  gap:12px;
}

.icon-box {
  width:40px;
  height:40px;
  background:var(--primary-light);
  border-radius:8px;
  display:flex;
  justify-content:center;
  align-items:center;
  font-size:20px;
}

.btn-text {
  font-weight:600;
  color:var(--text-dark);
}

.btn-arrow {
  color:var(--text-muted);
  transition:.2s;
}

.link-btn:hover .btn-arrow {
  color:var(--primary-color);
  transform:translateX(4px);
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
          <span class="btn-text">Struktur Organisasi PPID Tahun 2024</span>
        </div>
        <div class="btn-arrow">➜</div>
      </a>
        
        <a class="link-btn" href="https://drive.google.com/file/d/1-4rluU5UoMIrJC_HMhDAJhcxo8iO_CR_/view?usp=sharing" target="_blank">
        <div class="btn-content">
          <div class="icon-box">📄</div>
          <span class="btn-text">Struktur PPID Tahun 2026</span>
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
        
        <a class="link-btn" href="https://drive.google.com/file/d/1pX4VSHwleXsIDG0jUVjwG-BOGC3FUP6X/view?usp=sharing" target="_blank">
        <div class="btn-content"><div class="icon-box">📄</div><span class="btn-text">Laporan PPID Tahun 2025</span></div><div class="btn-arrow">➜</div>
      </a>

    </div>
  </div>

</div>
