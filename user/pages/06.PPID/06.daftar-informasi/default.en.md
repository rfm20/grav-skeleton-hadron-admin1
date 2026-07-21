---
title: 'Daftar Informasi'
date: '26-11-2025 06:26'
visible: true
process:
    markdown: true
    twig: true
media_order: 'pelanggaran-ppid_001-scaled-2048x1334.jpg,13.-informasi-barjas-a.jpeg,13.-informasi-barjas-b.jpeg,Daftar-Informasi-Publik-PMD-2023.pdf'
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

/* ===== HEADER ===== */
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

/* ===== CARD TITLE ===== */
.section-card h2 {
  text-align: center;
  color: var(--primary-color);
  font-size: 1.75rem;
  font-weight: 700;
  margin-top: 0;
  margin-bottom: 28px;
  border-bottom: 2px solid var(--primary-light);
  padding-bottom: 10px;
  display: inline-block;
  position: relative;
  left: 50%;
  transform: translateX(-50%);
}

/* ===== IMAGE CARD ===== */
.image-card {
  background:#fff;
  border-radius:12px;
  overflow:hidden;
  border:1px solid #e5e7eb;
  box-shadow:var(--shadow-sm);
  transition: transform 0.35s ease, box-shadow 0.35s ease;
  margin-bottom:20px;
}

.image-card:hover {
  transform: translateY(-5px);
  box-shadow: var(--shadow-hover);
}

.image-card img {
  width:100%;
  height:auto;
  object-fit:cover;
}

/* ===== LINK BUTTON GRID ===== */
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
  transition: transform 0.3s ease, box-shadow 0.3s ease, border-color 0.3s ease;
}

.link-btn:hover {
  border-color: var(--primary-color);
  box-shadow: var(--shadow-hover);
  transform: translateY(-4px);
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
  color:var(--primary-color);
  font-size:20px;
}

.btn-text {
  font-weight:600;
  color:var(--text-dark);
}

.btn-arrow {
  color:var(--text-muted);
  transition:.3s;
}

.link-btn:hover .btn-arrow {
  color:var(--primary-color);
  transform:translateX(4px);
}
</style>

<div class="page-wrapper">

  <!-- HEADER -->
  <div class="header-container">
    <div class="section-title">Daftar Informasi</div>
    <span class="section-subtitle">Dinas Pemberdayaan Masyarakat & Desa</span>
  </div>

  <!-- PELANGGARAN PPID -->
  <div class="section-card">
    <h2>Pelanggaran Pelaksanaan PPID Tahun 2021</h2>
    <div class="image-card">
      {% markdown %}
![pelanggaran](pelanggaran-ppid_001-scaled-2048x1334.jpg)
      {% endmarkdown %}
    </div>
  </div>

  <!-- INFORMASI PENGADAAN BARANG JASA -->
  <div class="section-card">
    <h2>Informasi Pengadaan Barang Jasa</h2>
    <div class="image-card">
      {% markdown %}
![13.-informasi-barjas-a](13.-informasi-barjas-a.jpeg)
      {% endmarkdown %}
    </div>
    <div class="image-card">
      {% markdown %}
![13.-informasi-barjas-b](13.-informasi-barjas-b.jpeg)
      {% endmarkdown %}
    </div>
  </div>

  <!-- DAFTAR INFORMASI PUBLIK -->
  <div class="section-card">
    <h2>Daftar Informasi Publik</h2>
    <div class="link-list">

      <a class="link-btn" href="https://drive.google.com/file/d/1IiFobB0G_VH3T2vuIl5WMvnUfXBDBUF9/view" target="_blank">
        <div class="btn-content">
          <div class="icon-box">📄</div>
          <span class="btn-text">Daftar Informasi Publik Tahun 2021</span>
        </div>
        <div class="btn-arrow">➜</div>
      </a>

      <a class="link-btn" href="https://dpmdkalbar.online/user/pages/06.PPID/06.daftar-informasi/Daftar-Informasi-Publik-PMD-2023.pdf" target="_blank">
        <div class="btn-content">
          <div class="icon-box">📄</div>
          <span class="btn-text">Daftar Informasi Publik Tahun 2022</span>
        </div>
        <div class="btn-arrow">➜</div>
      </a>

      <a class="link-btn" href="https://dpmdkalbar.online/user/pages/06.PPID/06.daftar-informasi/Daftar-Informasi-Publik-PMD-2023.pdf" target="_blank">
        <div class="btn-content">
          <div class="icon-box">📄</div>
          <span class="btn-text">Daftar Informasi Publik Tahun 2023</span>
        </div>
        <div class="btn-arrow">➜</div>
      </a>

      <a class="link-btn" href="https://drive.google.com/file/d/1PWKs9DBMWv86Qt25FO3zKOuOwrirfz41/view" target="_blank">
        <div class="btn-content">
          <div class="icon-box">📄</div>
          <span class="btn-text">Daftar Informasi Publik Tahun 2024</span>
        </div>
        <div class="btn-arrow">➜</div>
      </a>

      <a class="link-btn" href="https://drive.google.com/file/d/1bjzkxJqBKleXaGzCOTUSIwxGEmwD3fhf/view" target="_blank">
        <div class="btn-content">
          <div class="icon-box">📄</div>
          <span class="btn-text">SK Daftar Informasi Publik Tahun 2024</span>
        </div>
        <div class="btn-arrow">➜</div>
      </a>

      <a class="link-btn" href="https://drive.google.com/file/d/1KcyyzXesMH9jDKcTu6GloUh900rtifB_/view" target="_blank">
        <div class="btn-content">
          <div class="icon-box">📄</div>
          <span class="btn-text">Permintaan Informasi Publik yang Ditolak</span>
        </div>
        <div class="btn-arrow">➜</div>
      </a>

      <a class="link-btn" href="https://drive.google.com/file/d/1xvNm9DAbd6RtDej3h2Hk7nRndYISt5eN/view" target="_blank">
        <div class="btn-content">
          <div class="icon-box">📄</div>
          <span class="btn-text">SK Pembinaan & Monitoring Kebijakan Informasi Publik</span>
        </div>
        <div class="btn-arrow">➜</div>
      </a>

      <a class="link-btn" href="https://drive.google.com/file/d/1LmaA6BlPTJyiynllQ0d0gzSjItz91rpZ/view" target="_blank">
        <div class="btn-content">
          <div class="icon-box">📄</div>
          <span class="btn-text">SK Informasi Dikecualikan</span>
        </div>
        <div class="btn-arrow">➜</div>
      </a>

      <a class="link-btn" href="https://drive.google.com/file/d/1Jfbu4p1bUOSwHNAj05yX0S9smHmGQsTe/view" target="_blank">
        <div class="btn-content">
          <div class="icon-box">📄</div>
          <span class="btn-text">SK Daftar Informasi Publik Tahun 2025</span>
        </div>
        <div class="btn-arrow">➜</div>
      </a>

      <a class="link-btn" href="https://drive.google.com/file/d/1-WQmm9lQP00PK9YxZU2GNPT0aCP3j82z/view" target="_blank">
        <div class="btn-content">
          <div class="icon-box">📄</div>
          <span class="btn-text">Lampiran SK Daftar Informasi Publik 2025</span>
        </div>
        <div class="btn-arrow">➜</div>
      </a>
        
        <a class="link-btn" href="https://drive.google.com/file/d/18UET9oPg_qr8PXVdWORVNgqCcHW_fpqR/view?usp=sharing" target="_blank">
        <div class="btn-content">
          <div class="icon-box">📄</div>
          <span class="btn-text">SK DAFTAR INFORMASI PUBLIK TAHUN 2026</span>
        </div>
        <div class="btn-arrow">➜</div>
      </a>

    </div>
  </div>

</div>
