---
title: 'Permohonan Informasi'
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
  transition:.2s ease;
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

  <!-- HEADER -->
  <div class="header-container">
    <div class="section-title">Permohonan Informasi</div>
    <span class="section-subtitle">Dinas Pemberdayaan Masyarakat & Desa</span>
  </div>

  <!-- PERMOHONAN INFORMASI ONLINE -->
  <div class="section-card">
    <h2>Permohonan Informasi Online</h2>
    <div class="link-list">
      <a class="link-btn" href="https://layanan-diskominfo.kalbarprov.go.id/PPIDKALBAR-PERMOHONAN/register" target="_blank">
        <div class="btn-content">
          <div class="icon-box">🌐</div>
          <span class="btn-text">Form Permohonan Informasi Online</span>
        </div>
        <div class="btn-arrow">➜</div>
      </a>
    </div>
  </div>

  <!-- FORMULIR -->
  <div class="section-card">
    <h2>Formulir Permohonan Informasi</h2>
    <div class="link-list">
      <a class="link-btn" href="https://drive.google.com/file/d/1Lwy9qLqBiAUSY-wnAaC9eC1IO2BlKvFR/view" target="_blank">
        <div class="btn-content">
          <div class="icon-box">📄</div>
          <span class="btn-text">Formulir Permohonan Informasi</span>
        </div>
        <div class="btn-arrow">➜</div>
      </a>

      <a class="link-btn" href="https://drive.google.com/file/d/1MfXyQVyfuVNfBHgR0Qkp2ioOvEms-WGL/view" target="_blank">
        <div class="btn-content">
          <div class="icon-box">📄</div>
          <span class="btn-text">Tanda Terima Informasi</span>
        </div>
        <div class="btn-arrow">➜</div>
      </a>

      <a class="link-btn" href="https://drive.google.com/file/d/1D97u1AIXjSP74a2oqmEllbxBqP_A07S3/view" target="_blank">
        <div class="btn-content">
          <div class="icon-box">📄</div>
          <span class="btn-text">Formulir Pengajuan Keberatan</span>
        </div>
        <div class="btn-arrow">➜</div>
      </a>

      <a class="link-btn" href="https://drive.google.com/file/d/1VtThGns6HbWShmo6fS8iEeYJpljJI26J/view" target="_blank">
        <div class="btn-content">
          <div class="icon-box">📄</div>
          <span class="btn-text">Tanda Terima Pengajuan Keberatan</span>
        </div>
        <div class="btn-arrow">➜</div>
      </a>
    </div>
  </div>

  <!-- REGISTER -->
  <div class="section-card">
    <h2>Register Permohonan Informasi</h2>
    <div class="link-list">
      <a class="link-btn" href="https://drive.google.com/file/d/1bOqFsuSyEiI-gg1B4kkUxklkYJ8KnYL1/view" target="_blank">
        <div class="btn-content">
          <div class="icon-box">📑</div>
          <span class="btn-text">Register Permohonan Informasi</span>
        </div>
        <div class="btn-arrow">➜</div>
      </a>
    </div>
  </div>

</div>
