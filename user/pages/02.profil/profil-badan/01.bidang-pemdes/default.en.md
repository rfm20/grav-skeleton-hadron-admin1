---
title: 'Bidang Pemdes'
date: '15-12-2025 13:26'
visible: true
---

<style>
/* ===== GLOBAL VARIABLES (KONSISTEN DENGAN HALAMAN SEBELUMNYA) ===== */
/* ===== GLOBAL VARIABLES (KONSISTEN DENGAN HALAMAN SEBELUMNYA) ===== */
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

/* ===== CARD (SAMA DENGAN STYLE SEBELUMNYA) ===== */
.section-card {
  background: #ffffff;
  padding: clamp(20px, 4vw, 40px);
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
  margin-bottom: 18px;
  text-align: justify;
  word-wrap: break-word;
  overflow-wrap: break-word;
  hyphens: auto;
}

/* ===== LIST STYLE ===== */
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

/* ===== GRID LIST ===== */
.grid-list {
  display: grid;
  grid-template-columns: 1fr;
  gap: 10px;
}

/* ===== RESPONSIVE BREAKPOINTS ===== */

/* Tablet (768px and above) */
@media (min-width: 768px) {
  .grid-list {
    grid-template-columns: 1fr 1fr;
    column-gap: 40px;
  }
}

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

  .section-card h2 {
    margin-bottom: 20px;
    padding: 0 10px 10px;
  }

  .section-card p {
    margin-bottom: 16px;
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

  .section-card h2 {
    font-size: 1.15rem;
    margin-bottom: 18px;
    padding-bottom: 8px;
  }

  .section-card p {
    font-size: 0.9rem;
    line-height: 1.7;
    margin-bottom: 14px;
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

  .grid-list {
    gap: 8px;
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

  .section-card h2 {
    font-size: 1.05rem;
    margin-bottom: 15px;
  }

  .section-card p {
    font-size: 0.85rem;
    margin-bottom: 12px;
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

  ul.custom-list li::before {
    box-shadow: none;
  }
}
</style>

<div class="page-wrapper">

  <div class="header-container">
    <div class="section-title">Bidang Pemerintahan Desa</div>
    <span class="section-subtitle">Dinas Pemberdayaan Masyarakat & Desa</span>
  </div>

  <div class="section-card">

    <h2>Tugas Pokok & Fungsi (Tupoksi)</h2>

    <p>
      Bidang Pemerintahan Desa mempunyai tugas menyiapkan bahan dan merumuskan kebijakan teknis di bidang perencanaan dan evaluasi perkembangan desa dan kelurahan, aparatur pemerintahan desa, keuangan dan aset desa, serta melaksanakan seluruh kegiatan pelayanan dan administrasi terkait pemerintahan desa.
    </p>

    <p>
      Untuk melaksanakan tugas tersebut, Bidang Pemerintahan Desa menyelenggarakan fungsi sebagai berikut:
    </p>

    <ul class="custom-list grid-list">
      <li>Penyusunan program kerja bidang Pemerintahan Desa.</li>
      <li>Penyiapan bahan dan perumusan kebijakan teknis di bidang perencanaan dan evaluasi perkembangan desa dan kelurahan, aparatur pemerintahan desa, serta keuangan dan aset desa.</li>
      <li>Penyelenggaraan urusan pemerintahan di bidang perencanaan dan evaluasi perkembangan desa dan kelurahan, aparatur pemerintahan desa, serta keuangan dan aset desa.</li>
      <li>Pemberian dukungan terhadap penyelenggaraan pemerintahan desa terkait perencanaan dan evaluasi perkembangan desa/kelurahan, aparatur pemerintahan desa, serta keuangan dan aset desa.</li>
      <li>Pengordinasian pelaksanaan tugas dan fungsi perencanaan dan evaluasi perkembangan desa dan kelurahan, aparatur pemerintahan desa, serta keuangan dan aset desa.</li>
      <li>Pembinaan dan pengawasan terhadap pelaksanaan tugas dan fungsi di bidang pemerintahan desa sesuai ketentuan peraturan perundang-undangan.</li>
      <li>Pelaksanaan monitoring, evaluasi, dan pelaporan terhadap penyelenggaraan tugas dan fungsi bidang pemerintahan desa.</li>
      <li>Pemberian saran dan pertimbangan kepada Kepala Dinas mengenai pelaksanaan tugas dan fungsi di bidang pemerintahan desa.</li>
      <li>Pelaksanaan tugas lain yang diberikan oleh Kepala Dinas sesuai ketentuan peraturan perundang-undangan.</li>
    </ul>

  </div>

</div>
