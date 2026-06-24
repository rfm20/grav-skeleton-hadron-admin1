---
title: Sekretariat
date: '15-12-2025 13:31'
media_order: 'RENSTRA-2022.pdf,Neraca.pdf,Daftar-Aset.pdf,SPJ-Fungsional-Per-24-Agustus-2023.pdf,LRA-2022 (1).pdf,RENJA TH 2022 (1).pdf,Laporan Daftar Barang (Audited) 2020 (1).pdf,Laporan Pengadaan DPMD (1).pdf,LRA-2022.pdf,LAKIP-2022.pdf,DPA-BELANJA-2.13.0.00.0.00.01.0000-DINAS-PEMBERDAYAAN-MASYARAKAT-DAN-DESA-Penatausahaan-2023.pdf'
---

<style>
/* ===== GLOBAL VARIABLES ===== */
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
  transition: transform 0.35s ease, box-shadow 0.35s ease;
}

.section-card:hover {
  transform: translateY(-6px);
  box-shadow: var(--shadow-hover);
}

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
  text-align: justify;
  margin-bottom: 18px;
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

/* ===== LINK LIST ===== */
.link-list {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
  gap: 20px;
}

.link-btn {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 14px 20px;
  border-radius: 12px;
  background: #fff;
  border: 1px solid #e5e7eb;
  text-decoration: none !important;
  transition: transform .2s ease, box-shadow .2s ease, border-color .2s ease;
}

.link-btn:hover {
  border-color: var(--primary-color);
  box-shadow: var(--shadow-hover);
  transform: translateY(-2px);
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
  background: var(--primary-light);
  border-radius: 8px;
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

  .link-list {
    grid-template-columns: 1fr;
    gap: 15px;
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

  .link-list {
    gap: 12px;
  }

  .link-btn {
    padding: 12px 16px;
    gap: 8px;
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
    margin-left: 6px;
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

  .link-list {
    gap: 10px;
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

  .btn-arrow {
    font-size: 1rem;
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

  <!-- HEADER -->
  <div class="header-container">
    <div class="section-title">Sekretariat</div>
    <span class="section-subtitle">Dinas Pemberdayaan Masyarakat & Desa</span>
  </div>

  <!-- TUPoksi -->
  <div class="section-card">
    <h2>Tupoksi Sekretariat</h2>

    <p>Sekretariat mempunyai tugas menyiapkan bahan perumusan kebijakan di bidang rencana kerja, pengelolaan keuangan dan aset, monitoring dan evaluasi, umum dan administrasi kepegawaian serta bertanggungjawab memimpin pelaksanaan seluruh kegiatan pelayanan dan administrasi di lingkungan Dinas.</p>

    <p>Untuk melaksanakan tugas tersebut, Sekretariat mempunyai fungsi:</p>

    <ul class="custom-list grid-list">
      <li>Penyusunan program kerja di bidang kesekretariatan.</li>
      <li>Penyiapan bahan dan perumusan kebijakan di bidang rencana kerja, keuangan dan aset, monitoring dan evaluasi, serta umum dan aparatur.</li>
      <li>Penyelenggaraan urusan pelayanan administrasi sesuai ketentuan.</li>
      <li>Koordinasi dan fasilitasi bidang rencana kerja, keuangan dan aset, serta umum dan aparatur.</li>
      <li>Dukungan pelayanan administrasi di lingkungan Dinas.</li>
      <li>Penyelarasan penyusunan rencana kerja Dinas.</li>
      <li>Pelaporan reformasi birokrasi, SAKIP, dan pelayanan publik.</li>
      <li>Pengawasan terhadap pelaksanaan tugas sekretariat.</li>
      <li>Pemberian saran dan pertimbangan kepada Kepala Dinas.</li>
      <li>Monitoring, evaluasi dan pelaporan pelaksanaan tugas.</li>
      <li>Pelaksanaan fungsi lain sesuai ketentuan.</li>
    </ul>
  </div>

  <!-- BAGIAN 1 -->
  <div class="section-card">
    <h2>Bagian Rencana Kerja, Keuangan dan Aset</h2>

    <p>Mempunyai tugas mengumpulkan dan mengolah bahan kebijakan di bidang penyusunan rencana kerja, keuangan dan aset, monitoring dan evaluasi.</p>

    <p>Untuk melaksanakan tugas tersebut, Sub Bagian ini mempunyai fungsi:</p>

    <ul class="custom-list grid-list">
      <li>Penyusunan rencana kerja Sub Bagian.</li>
      <li>Pengumpulan bahan kebijakan rencana kerja, keuangan dan aset.</li>
      <li>Pelaksanaan urusan administrasi sesuai ketentuan.</li>
      <li>Pemberian dukungan pelaksanaan tugas sekretariat.</li>
      <li>Koordinasi dan fasilitasi kegiatan.</li>
      <li>Pengendalian dan pengawasan pelaksanaan tugas.</li>
      <li>Pemberian saran kepada Sekretaris.</li>
      <li>Monitoring, evaluasi dan penyusunan laporan.</li>
      <li>Pelaksanaan fungsi lain sesuai ketentuan.</li>
    </ul>
  </div>

  <!-- BAGIAN 2 -->
  <div class="section-card">
    <h2>Bagian Umum dan Aparatur</h2>

    <p>Mempunyai tugas mengumpulkan dan mengolah bahan kebijakan di bidang umum dan aparatur serta mengendalikan pelaksanaan kegiatan sesuai fungsinya.</p>

    <p>Fungsi Sub Bagian:</p>

    <ul class="custom-list grid-list">
      <li>Penyusunan rencana kerja Sub Bagian.</li>
      <li>Pengumpulan bahan kebijakan di bidang umum dan aparatur.</li>
      <li>Dukungan pelaksanaan tugas sekretariat.</li>
      <li>Koordinasi dan fasilitasi bidang umum dan aparatur.</li>
      <li>Pelaksanaan urusan umum sesuai ketentuan.</li>
      <li>Pengendalian dan pengawasan pelaksanaan tugas.</li>
      <li>Pemberian saran kepada Sekretaris.</li>
      <li>Monitoring, evaluasi dan laporan.</li>
      <li>Pelaksanaan fungsi lain sesuai ketentuan.</li>
    </ul>
  </div>

  <!-- RENJA & DOKUMEN -->
  <div class="section-card">
    <h2>Renja Keuangan & Aset</h2>

    <div class="link-list">
      <a class="link-btn" href="https://dpmdkalbar.online/user/pages/02.profil/profil-badan/04.sekretariat/RENSTRA-2022.pdf" target="_blank">
          <div class="btn-content"><div class="icon-box">📄</div>
              <span class="btn-text">Renstra DPMD 2018-2023</span>
          </div>
          <div class="btn-arrow">➜</div>
      </a>
      <a class="link-btn" href="https://dpmdkalbar.online/user/pages/02.profil/profil-badan/04.sekretariat/DPA-BELANJA-2.13.0.00.0.00.01.0000-DINAS-PEMBERDAYAAN-MASYARAKAT-DAN-DESA-Penatausahaan-2023.pdf" target="_blank">
          <div class="btn-content">
              <div class="icon-box">📄</div>
              <span class="btn-text">DPA 2023</span></div>
          <div class="btn-arrow">➜</div>
      </a>
      <a class="link-btn" href="#">
          <div class="btn-content">
              <div class="icon-box">📄</div>
              <span class="btn-text">DPA 2022 (No Data)</span>
          </div><div class="btn-arrow">➜</div>
      </a>
      <a class="link-btn" href="https://dpmdkalbar.online/user/pages/02.profil/profil-badan/04.sekretariat/LAKIP-2022.pdf" target="_blank">
          <div class="btn-content">
              <div class="icon-box">📄</div>
              <span class="btn-text">Laporan Kinerja 2022</span>
          </div>
          <div class="btn-arrow">➜</div>
      </a>
      <a class="link-btn" href="https://dpmdkalbar.online/user/pages/02.profil/profil-badan/04.sekretariat/LRA-2022.pdf" target="_blank">
          <div class="btn-content">
              <div class="icon-box">📄</div>
              <span class="btn-text">Laporan Keuangan 2022</span>
          </div>
          <div class="btn-arrow">➜</div>
      </a>
      <a class="link-btn" href="https://drive.google.com/file/d/19i8Mwag6efjI5iKkHd0DJ6NGWC7lpnj5/view" target="_blank">
          <div class="btn-content">
              <div class="icon-box">📄</div>
              <span class="btn-text">Laporan Pengadaan Barang Jasa 2020</span></div>
          <div class="btn-arrow">➜</div>
      </a>
      <a class="link-btn" href="https://drive.google.com/file/d/10TyYq_lIiuKFdnIK82Z7ZUBOWseJbfR9/view" target="_blank">
          <div class="btn-content">
              <div class="icon-box">📄</div>
              <span class="btn-text">Laporan Daftar Barang 2020</span>
          </div>
          <div class="btn-arrow">➜</div>
      </a>
      <a class="link-btn" href="https://drive.google.com/file/d/10nK5PgZWc5dCTcuoevDxZkiOL82Jb3-O/view" target="_blank">
          <div class="btn-content">
              <div class="icon-box">📄</div>
              <span class="btn-text">Rencana Kerja 2023</span>
          </div>
          <div class="btn-arrow">➜</div>
      </a>
      <a class="link-btn" href="https://dpmdkalbar.online/user/pages/02.profil/profil-badan/04.sekretariat/LRA-2022.pdf" target="_blank">
          <div class="btn-content">
              <div class="icon-box">📄</div>
              <span class="btn-text">CALK</span>
          </div>
          <div class="btn-arrow">➜</div>
      </a>
      <a class="link-btn" href="https://dpmdkalbar.online/user/pages/02.profil/profil-badan/04.sekretariat/SPJ-Fungsional-Per-24-Agustus-2023.pdf" target="_blank">
          <div class="btn-content">
              <div class="icon-box">📄</div>
              <span class="btn-text">LRA 2023</span>
          </div>
          <div class="btn-arrow">➜</div>
      </a>
      <a class="link-btn" href="https://dpmdkalbar.online/user/pages/02.profil/profil-badan/04.sekretariat/Daftar-Aset.pdf" target="_blank">
          <div class="btn-content">
              <div class="icon-box">📄</div>
              <span class="btn-text">Daftar Aset</span>
          </div>
          <div class="btn-arrow">➜</div>
      </a>
      <a class="link-btn" href="https://dpmdkalbar.online/user/pages/02.profil/profil-badan/04.sekretariat/Neraca.pdf" target="_blank">
          <div class="btn-content">
              <div class="icon-box">📄</div>
              <span class="btn-text">Neraca</span>
          </div>
          <div class="btn-arrow">➜</div>
      </a>
    </div>
      
      
  </div>

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
