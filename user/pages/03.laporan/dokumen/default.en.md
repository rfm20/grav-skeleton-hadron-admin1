---
title: Dokumen
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
/* ===== GLOBAL VARIABLES (KONSISTEN) ===== */
:root {
  --primary-color: #0d6e4f;
  --primary-light: #e6f5f0;
  --text-dark: #1f2937;
  --text-muted: #4b5563;
  --radius-card: 16px;
  --shadow-sm: 0 4px 15px rgba(0,0,0,0.08);
  --shadow-hover: 0 8px 22px rgba(13,110,79,0.15);
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
  letter-spacing: -0.5px;
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

/* ===== PARAGRAPH ===== */
.section-card p {
  font-size: 1.05rem;
  color: var(--text-dark);
  line-height: 1.7;
  text-align: justify;
  margin-bottom: 18px;
}

/* ===== REGULASI / INFO BOX ===== */
.regulasi-box {
  background-color: var(--primary-light);
  padding: 15px 20px;
  border-left: 4px solid var(--primary-color);
  border-radius: 0 8px 8px 0;
  margin-bottom: 25px;
}

.regulasi-box p {
  margin: 0;
  font-size: 0.97rem;
  color: var(--text-dark);
}

.regulasi-box strong {
  color: var(--primary-color);
}

/* ===== LIST STYLE ===== */
ul.custom-list {
  list-style: disc;
  margin-left: 22px;
  padding-left: 10px;
}

ul.custom-list li {
  margin-bottom: 12px;
  font-size: 1.05rem;
  line-height: 1.7;
  color: var(--text-dark);
}

/* ===== GRID LIST ===== */
.grid-list {
  display: grid;
  grid-template-columns: 1fr;
  gap: 10px;
}

@media (min-width: 768px) {
  .grid-list {
    grid-template-columns: 1fr 1fr;
    column-gap: 40px;
  }
}

/* ===== LINK BUTTON ===== */
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
  transition: transform 0.25s ease, box-shadow 0.25s ease, border-color 0.25s ease;
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
  color:var(--primary-color);
  font-size: 20px;
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

  <div class="header-container">
    <div class="section-title">Dokumen</div>
    <span class="section-subtitle">Dinas Pemberdayaan Masyarakat & Desa</span>
  </div>

  <!-- DOKUMEN CARD -->
  <div class="section-card">
    <h2>Dokumen</h2>

    <div class="link-list">

      <a class="link-btn" href="https://drive.google.com/file/d/1AlOUuSWUf2azzib_wTqrvAaJKAE45hTG/view?usp=sharing" target="_blank">
        <div class="btn-content">
          <div class="icon-box">📄</div>
          <span class="btn-text">PROGRAM/KEGIATAN TAHUN 2026</span>
        </div>
        <div class="btn-arrow">➜</div>
      </a>

      <a class="link-btn" href="https://drive.google.com/drive/folders/1APNVCIBeVNCubI8RF2LU9n-w3nKOtRw8?usp=sharing" target="_blank">
        <div class="btn-content">
          <div class="icon-box">📄</div>
          <span class="btn-text">DOKUMEN PENGADAAN BARANG/JASA TAHUN 2026</span>
        </div>
        <div class="btn-arrow">➜</div>
      </a>

    </div>
  </div>
    
    <!-- DOKUMEN UNDANG2 -->
  <div class="section-card">
    <h2>Dokumen Peraturan Perundang Undangan</h2>

    <div class="link-list">

      <a class="link-btn" href="https://drive.google.com/file/d/16URNCo6soixQW6hCPG-pllxucKQzpyYW/view?usp=sharing" target="_blank">
        <div class="btn-content">
          <div class="icon-box">📄</div>
          <span class="btn-text">PERATURAN DAERAH PROVINSI KALIMANTAN BARAT NOMOR 4 TAHUN 2005</span>
        </div>
        <div class="btn-arrow">➜</div>
      </a>

      <a class="link-btn" href="https://drive.google.com/file/d/10eVsfemQW8H4l7lyuTsvSr58eDLp-HCK/view?usp=sharing" target="_blank">
        <div class="btn-content">
          <div class="icon-box">📄</div>
          <span class="btn-text">PERGUB KALBAR NOMOR 22 TAHUN 2016 TENTANG PEDOMAN PPID</span>
        </div>
        <div class="btn-arrow">➜</div>
      </a>
        
         <a class="link-btn" href="https://drive.google.com/file/d/10eVsfemQW8H4l7lyuTsvSr58eDLp-HCK/view?usp=sharing" target="_blank">
        <div class="btn-content">
          <div class="icon-box">📄</div>
          <span class="btn-text">PERGUB KALBAR NOMOR 22 TAHUN 2016 TENTANG PEDOMAN PPID</span>
        </div>
        <div class="btn-arrow">➜</div>
      </a>

      <a class="link-btn" href="https://drive.google.com/file/d/1gstwEd44rVUB0x0257TbaagmqNNS5zc5/view?usp=sharing" target="_blank">
        <div class="btn-content">
          <div class="icon-box">📄</div>
          <span class="btn-text">PERKI NOMOR 1 TAHUN 2018 TENTANG STANDAR LAYANAN INFORMASI PUBLIK DESA</span>
        </div>
        <div class="btn-arrow">➜</div>
      </a>
        
         <a class="link-btn" href="https://drive.google.com/file/d/1mJVok2N2VciywgeAgH0fzMVvzRvSK4g-/view?usp=sharing" target="_blank">
        <div class="btn-content">
          <div class="icon-box">📄</div>
          <span class="btn-text">PERKI NOMOR 1 TAHUN 2022</span>
        </div>
        <div class="btn-arrow">➜</div>
      </a>

      <a class="link-btn" href="https://drive.google.com/file/d/1PfOufjfbqOzcMWh86zWMb66-0qppNY9b/view?usp=sharing" target="_blank">
        <div class="btn-content">
          <div class="icon-box">📄</div>
          <span class="btn-text">UU NOMOR 14 TAHUN 2008 TENTANG KETERBUKAAN INFORMASI PUBLIK</span>
        </div>
        <div class="btn-arrow">➜</div>
      </a>
        
        <a class="link-btn" href="https://drive.google.com/file/d/1dO6pbBlVS11s0xGMg8MYYfhdXh1etW2H/view?usp=sharing" target="_blank">
        <div class="btn-content">
          <div class="icon-box">📄</div>
          <span class="btn-text">SK GUBERNUR KALBAR TENTANG  DAFTAR INFORMASI DIKECUALIKAN</span>
        </div>
        <div class="btn-arrow">➜</div>
      </a>

    </div>
  </div>

</div>
