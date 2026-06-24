---
title: 'Profil Pejabat'
date: '26-11-2025 06:26'
visible: true
media_order: '2023-LHKPN-KADIS-2022_images-extracted-1-768x1081.jpg,2024-LHKPN-HENDRA-BACHTIAR.jpeg,2025-LHKPN-Hendra-Bachtiar.jpg,3Gub-RiaNorsan-PDUB.png,4WagubKalbar-KrisantusKurniawan-PDUB.png,2025-LHKPN Hendra Bachtiar.pdf,Foto pak gub 2.png,Profil Kadis DPMD.png,Profil-Pimpinan-Dinas-PMD-Kalbar-2023-3-pdf.jpg,4 x 6.jpg,Profil Kadis DPMD (1).png,Erni Muchsin.png,Nailul Q.png,FENNY RAKHMAWATI.png,EVA YULIANTIKA SANDOHILPA.png'
process:
    markdown: true
    twig: true
page-toc:
    anchors:
        link: false
---

<style>
/* ===== GLOBAL VARIABLES ===== */
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

* {
  box-sizing: border-box;
}

body {
  font-family: 'Inter', system-ui, -apple-system, sans-serif;
  background: #f9fafb;
  color: var(--text-dark);
  margin: 0;
  padding: 0;
}

/* ===== PAGE ===== */
.page-wrapper {
  max-width: 960px;
  margin: auto;
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

/* ===== UNIVERSAL CARD ===== */
.section-card {
  background: #ffffff;
  padding: clamp(20px, 4vw, 40px);
  margin-bottom: 40px;
  border-radius: var(--radius-card);
  border: 1px solid rgba(13,110,79,0.12);
  box-shadow: var(--shadow-sm);
  transition: transform .35s ease, box-shadow .35s ease;
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

/* ===== CARD CONTENT TEXT (RAPI & RESPONSIVE) ===== */
.section-card p, 
.wiki-text p, 
.wiki-text ul li,
.official-info p,
.detail-value {
  font-size: clamp(0.85rem, 2vw, 0.95rem);
  line-height: 1.8;
  color: var(--text-dark);
  text-align: justify;
  margin-bottom: 1em;
  word-wrap: break-word;
  overflow-wrap: break-word;
  hyphens: auto;
}

.wiki-text ul, .detail-value ul {
  padding-left: 20px;
  margin: 0.5em 0;
  list-style-type: disc;
}

.wiki-text ul li, .detail-value ul li {
  margin-bottom: 0.75em;
  line-height: 1.7;
  text-align: left;
}

.wiki-text ul li strong,
.detail-value ul li strong {
  color: var(--primary-color);
  font-weight: 600;
}

/* ===== WIKIPEDIA STYLE LAYOUT (KADIS) ===== */
.wiki-content {
  display: grid;
  grid-template-columns: 300px 1fr;
  gap: 30px;
  align-items: start;
}

.wiki-infobox {
  background: #f9fafb;
  border: 1px solid #e5e7eb;
  border-radius: 12px;
  overflow: hidden;
}

.infobox-img-wrapper {
  overflow: hidden;
}

.infobox-img-wrapper img {
  width: 100%;
  height: auto;
  display: block;
}

.infobox-content {
  padding: 16px;
}

.info-row {
  display: flex;
  justify-content: space-between;
  gap: 10px;
  padding: 10px 0;
  border-bottom: 1px solid #e5e7eb;
  font-size: clamp(0.75rem, 2vw, 0.85rem);
}

.info-row:last-child { 
  border-bottom: none; 
}

.info-label { 
  font-weight: 600; 
  color: var(--text-muted); 
  white-space: nowrap;
  flex-shrink: 0;
}

.info-value {
  text-align: right;
  word-wrap: break-word;
  overflow-wrap: break-word;
  line-height: 1.5;
}

.wiki-text h3 {
  color: var(--primary-color);
  font-size: clamp(1.1rem, 2.5vw, 1.4rem);
  margin: 24px 0 12px 0;
  padding-bottom: 8px;
  border-bottom: 2px solid var(--primary-light);
  line-height: 1.3;
}

/* ===== OFFICIAL LAYOUT (SEKDIS DAN BIDANG) ===== */
.official-layout {
  display: flex;
  gap: 30px;
  align-items: start;
  background: #f9fafb;
  padding: 25px;
  border-radius: 12px;
}

.official-photo {
  width: 200px;
  height: 260px;
  background: #e5e7eb;
  border-radius: 12px;
  overflow: hidden;
  flex-shrink: 0;
}

.official-photo img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  object-position: center top;
  display: block;
}

.official-info {
  flex: 1;
  min-width: 0;
}

.official-info h3 {
  color: var(--primary-color);
  font-size: clamp(1.1rem, 3vw, 1.5rem);
  margin-top: 0;
  margin-bottom: 15px;
  word-wrap: break-word;
  overflow-wrap: break-word;
  line-height: 1.3;
}

.detail-item {
  display: flex;
  gap: 10px;
  margin-bottom: 12px;
  align-items: flex-start;
}

.detail-label { 
  font-weight: 700; /* BOLD - INI YANG BARU */
  min-width: 130px; 
  color: var(--text-muted);
  flex-shrink: 0;
  font-size: clamp(0.85rem, 2vw, 0.95rem);
}

.detail-value {
  flex: 1;
  word-wrap: break-word;
  overflow-wrap: break-word;
  text-align: left;
  line-height: 1.7;
}

/* KHUSUS RIWAYAT JABATAN - LANGSUNG KE BAWAH (INI YANG BARU) */
.detail-item:has(.detail-value ul) {
  flex-direction: column;
  gap: 8px;
}

.detail-item:has(.detail-value ul) .detail-label {
  min-width: unset;
}

.detail-item:has(.detail-value ul) .detail-value {
  padding-left: 0;
}

/* ===== GUBERNUR GRID ===== */
.officials-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
  gap: 30px;
}

.official-card-small {
  text-align: center;
}

.photo-frame-styled {
  width: 100%;
  max-width: 260px;
  height: 420px;
  margin: 0 auto 25px;
  background: #ffffff;
  overflow: hidden;
  border-radius: 8px;
  box-shadow: 0 2px 8px rgba(0,0,0,0.08);
}

.photo-frame-styled img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  object-position: top center;
  display: block;
}

.info-content h4 {
  margin: 0;
  color: var(--primary-color);
  font-size: clamp(1rem, 2.5vw, 1.25rem);
  font-weight: 800;
  text-align: center;
  word-wrap: break-word;
  overflow-wrap: break-word;
  padding: 0 10px;
  line-height: 1.4;
}

.info-content p {
  margin: 10px 0;
  font-weight: 700;
  font-size: clamp(0.95rem, 2.5vw, 1.1rem);
  text-align: center;
  line-height: 1.4;
}

/* ===== LHKPN GRID ===== */
.lhkpn-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
  gap: 25px;
}

.lhkpn-card {
  background: #ffffff;
  border-radius: 14px;
  overflow: hidden;
  border: 1px solid rgba(13,110,79,0.12);
  box-shadow: var(--shadow-sm);
  transition: transform .35s ease, box-shadow .35s ease;
  text-align: center;
}

.lhkpn-card:hover {
  transform: translateY(-4px);
  box-shadow: var(--shadow-hover);
}

.lhkpn-img-container {
  width: 100%;
  background: #f9fafb;
  padding: 16px;
  min-height: 200px;
  display: flex;
  align-items: center;
  justify-content: center;
}

.lhkpn-img-container img {
  width: 100%;
  height: auto;
  object-fit: contain;
  max-height: 300px;
}

.lhkpn-footer {
  padding: 16px;
  border-top: 1px solid #eee;
}

.lhkpn-badge {
  padding: 6px 18px;
  background: var(--primary-light);
  color: var(--primary-color);
  border-radius: 50px;
  font-weight: 700;
  font-size: clamp(0.8rem, 2vw, 0.9rem);
}

/* ===== LINK BUTTON (DOKUMEN) ===== */
.link-list {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
  gap: 20px;
}

.link-btn {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 16px 20px;
  border-radius: 14px;
  background: #ffffff;
  border: 1px solid rgba(13,110,79,0.12);
  text-decoration: none !important;
  box-shadow: var(--shadow-sm);
  transition: transform .25s ease, box-shadow .25s ease, border-color .25s;
}

.link-btn:hover {
  transform: translateY(-3px);
  box-shadow: var(--shadow-hover);
  border-color: var(--primary-color);
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
  border-radius: 10px;
  display: flex;
  align-items: center;
  justify-content: center;
  color: var(--primary-color);
  flex-shrink: 0;
  font-size: 1.2rem;
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
  flex-shrink: 0;
  margin-left: 10px;
}

/* ===== DETAIL INFO (RAPI & KONSISTEN) ===== */
.detail-list {
  margin-top: 12px;
}

.detail-list h4 {
  margin: 16px 0 8px;
  font-size: clamp(0.95rem, 2vw, 1rem);
  font-weight: 700;
  color: var(--primary-color);
  line-height: 1.4;
}

.detail-list ul {
  padding-left: 20px;
  margin: 0;
}

.detail-list li {
  margin-bottom: 8px;
  font-size: clamp(0.85rem, 2vw, 0.9rem);
  line-height: 1.6;
}

.detail-grid {
  display: grid;
  grid-template-columns: 140px 1fr;
  row-gap: 10px;
  column-gap: 15px;
}

.detail-grid .label {
  font-weight: 600;
  color: var(--text-muted);
  font-size: clamp(0.85rem, 2vw, 0.9rem);
}

.detail-grid .value {
  color: var(--text-dark);
  word-wrap: break-word;
  overflow-wrap: break-word;
  font-size: clamp(0.85rem, 2vw, 0.9rem);
}

/* ===== RESPONSIVE BREAKPOINTS ===== */

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

  /* Wiki content menjadi stacked */
  .wiki-content {
    grid-template-columns: 1fr;
    gap: 25px;
  }

  .wiki-infobox {
    max-width: 350px;
    margin: 0 auto;
  }

  /* Official layout menjadi vertikal */
  .official-layout {
    flex-direction: column;
    align-items: center;
    text-align: center;
    padding: 20px;
    gap: 20px;
  }

  .official-photo {
    width: 200px;
    height: 260px;
    margin-bottom: 0;
  }

  .official-info {
    width: 100%;
  }

  .detail-item {
    flex-direction: column;
    align-items: center;
    gap: 5px;
    text-align: center;
    margin-bottom: 15px;
  }

  .detail-label {
    min-width: unset;
    width: 100%;
  }

  .detail-value {
    text-align: center;
    width: 100%;
  }

  .detail-value ul {
    text-align: left;
    display: inline-block;
    max-width: 100%;
  }

  /* Gubernur grid */
  .officials-grid {
    grid-template-columns: 1fr;
    gap: 25px;
  }

  .photo-frame-styled {
    height: 380px;
  }

  /* LHKPN grid */
  .lhkpn-grid {
    grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
    gap: 20px;
  }

  /* Link buttons */
  .link-list {
    grid-template-columns: 1fr;
  }

  .detail-grid {
    grid-template-columns: 1fr;
    row-gap: 5px;
  }

  .detail-grid .label {
    font-weight: 700;
  }
}

/* Mobile (480px and below) */
@media (max-width: 480px) {
  .page-wrapper {
    padding: 20px 12px;
  }

  .section-card {
    padding: 20px 15px;
    margin-bottom: 25px;
  }

  .section-card h2 {
    margin-bottom: 18px;
    padding-bottom: 8px;
    font-size: 1.15rem;
  }

  .official-layout {
    padding: 15px;
  }

  .official-photo {
    width: 180px;
    height: 240px;
  }

  .photo-frame-styled {
    height: 340px;
    max-width: 220px;
  }

  .officials-grid {
    gap: 20px;
  }

  .lhkpn-grid {
    grid-template-columns: 1fr;
    gap: 15px;
  }

  .link-btn {
    padding: 14px 16px;
    gap: 10px;
  }

  .icon-box {
    width: 36px;
    height: 36px;
    font-size: 1.1rem;
  }

  .detail-label {
    font-size: 0.85rem;
  }

  .info-row {
    flex-direction: column;
    gap: 5px;
    padding: 8px 0;
  }

  .info-value {
    text-align: left;
  }

  .wiki-text ul, .detail-value ul {
    padding-left: 18px;
  }
}

/* Extra small devices (360px and below) */
@media (max-width: 360px) {
  .page-wrapper {
    padding: 15px 10px;
  }

  .section-card {
    padding: 15px 12px;
  }

  .section-card h2 {
    font-size: 1.05rem;
  }

  .official-layout {
    padding: 12px;
  }

  .official-photo {
    width: 160px;
    height: 220px;
  }

  .photo-frame-styled {
    height: 300px;
    max-width: 200px;
  }

  .link-btn {
    padding: 12px 14px;
  }

  .btn-text {
    font-size: 0.8rem;
  }

  .icon-box {
    width: 32px;
    height: 32px;
    font-size: 1rem;
  }
}
</style>

<div class="page-wrapper">

  <div class="header-container">
    <div class="section-title">Profil Pejabat</div>
    <span class="section-subtitle">Dinas Pemberdayaan Masyarakat & Desa</span>
  </div>

  <!-- GUBERNUR DAN WAKIL GUBERNUR -->
  <div class="section-card">
    <h2>Gubernur dan Wakil Gubernur</h2>
    <div class="officials-grid">
      <div class="official-card-small">
        <div class="photo-frame-styled">
          {% markdown %}![Gubernur](3Gub-RiaNorsan-PDUB.png){% endmarkdown %}
        </div>
        <div class="info-content">
          <h4>Drs. H. Ria Norsan, M.M., M.H.</h4>
          <p>Gubernur Kalbar</p>
        </div>
      </div>

      <div class="official-card-small">
        <div class="photo-frame-styled">
          {% markdown %}![Wakil Gubernur](4WagubKalbar-KrisantusKurniawan-PDUB.png){% endmarkdown %}
        </div>
        <div class="info-content">
          <h4>Krisantus Kurniawan, SIP., M. Si.</h4>
          <p>Wakil Gubernur Kalbar</p>
        </div>
      </div>
    </div>
  </div>

  <!-- KEPALA DINAS -->
  <div class="section-card">
    <h2>Kepala Dinas</h2>
    <div class="wiki-content">
      <div class="wiki-infobox">
        <div class="infobox-img-wrapper">
          {% markdown %}![Profil%20Kadis%20DPMD%20%281%29](Profil%20Kadis%20DPMD%20%281%29.png "Profil%20Kadis%20DPMD%20%281%29"){% endmarkdown %}
        </div>
        <div class="infobox-content">
          <div class="info-row"><span class="info-label">Nama</span><span class="info-value">Ir. Hendra Bachtiar, ST., MT.</span></div>
          <div class="info-row"><span class="info-label">Jabatan</span><span class="info-value">Kepala Dinas</span></div>
          <div class="info-row"><span class="info-label">Lahir</span><span class="info-value">13 Des 1969</span></div>
          <div class="info-row"><span class="info-label">Masa Jabatan</span><span class="info-value">2023 - Sekarang</span></div>
        </div>
      </div>

      <div class="wiki-text">
        <p><strong>Ir. Hendra Bachtiar, ST., MT.</strong> merupakan sosok pimpinan di Dinas Pemberdayaan Masyarakat dan Desa Provinsi Kalimantan Barat. Beliau resmi menjabat sejak 3 Agustus 2023 dengan fokus utama pada percepatan pembangunan kemandirian desa di seluruh wilayah Kalimantan Barat.</p>
        
        <h3>Pendidikan</h3>
        <ul>
          <li><strong>S-1:</strong> Universitas Tanjungpura, Fakultas Teknik (Lulus 1993)</li>
          <li><strong>S-2:</strong> Institut Teknologi Bandung, Magister PWK (Lulus 2002)</li>
          <li><strong>Profesi:</strong> Program Profesi Insinyur UNTAN (Lulus 2025)</li>
        </ul>

        <h3>Riwayat Jabatan</h3>
        <ul>
          <li><strong>Juni 2022 - Agustus 2023 :</strong> Staf Ahli Gubernur Bidang Sosial dan SDM</li>
          <li><strong>September 2020 - Juni 2022 :</strong> Kepala Dinas Perumahan Rakyat dan Kawasan Permukiman</li>
        </ul>
      </div>
    </div>
  </div>

  <!-- SEKRETARIS -->
  <div class="section-card">
    <h2>Sekretaris Dinas</h2>
    <div class="official-layout">
      <div class="official-photo">
        {% markdown %}![4%20x%206](4%20x%206.jpg "4%20x%206"){% endmarkdown %}
      </div>
      <div class="official-info">
        <h3>Vivi Nurvijah, S.Pd., M.Pd.</h3>
        <div class="detail-item">
          <span class="detail-label">Jabatan</span>
          <span class="detail-value">Sekretaris Dinas</span>
        </div>
        <div class="detail-item">
          <span class="detail-label">Golongan</span>
          <span class="detail-value">Pembina TK.I (IV/b)</span>
        </div>
        <div class="detail-item">
          <span class="detail-label">NIP</span>
          <span class="detail-value">196911271997022006</span>
        </div>
      </div>
    </div>
  </div>
    
    <!-- Kepala Bidang Pembangunan dan Pemberdayaan Masyarakat Desa -->
  <div class="section-card">
    <h2>Kepala Bidang Pembangunan dan Pemberdayaan Masyarakat Desa</h2>
    <div class="official-layout">
      <div class="official-photo">
        {% markdown %}![Erni%20Muchsin](Erni%20Muchsin.png "Erni%20Muchsin"){% endmarkdown %}
      </div>
      <div class="official-info">
        <h3>Erni Muchsin, SSTP, M.Si.</h3>
        <div class="detail-item">
          <span class="detail-label">Jabatan</span>
          <span class="detail-value">Kepala Bidang Pembangunan dan Pemberdayaan Masyarakat Desa</span>
        </div>
        <div class="detail-item">
          <span class="detail-label">Menjabat</span>
          <span class="detail-value">8 Agustus 2023 – sekarang</span>
        </div>
        <div class="detail-item">
          <span class="detail-label">Riwayat Jabatan</span>
          <span class="detail-value">
        	<ul>
          		<li><strong>28 Juni 2021 – 31 Desember 2021 :</strong> Kepala Seksi Pemberdayaan Masyarakat Dan Lembaga Desa Bidang Pembangunan Dan Pemberdayaan Masyarakat Desa Pada Dinas Pemberdayaan Masyarakat Dan Desa Provinsi Kalimantan Barat</li>
          		<li><strong>31 Desember 2021 – 8 Agustus 2023 :</strong> Penggerak Swadaya Masyarakat Ahli Muda Bidang Pembangunan Dan Pemberdayaan Masyarakat Desa Pada Dinas Pemberdayaan Masyarakat Dan Desa</li>
        	</ul>
          </span>
        </div>
      </div>
    </div>
  </div>
    
    <!-- Kepala Bidang Penataan dan Kerjasama Desa Dinas Pemberdayaan Masyarakat dan Desa -->
  <div class="section-card">
    <h2>Kepala Bidang Penataan dan Kerjasama Desa Dinas Pemberdayaan Masyarakat dan Desa</h2>
    <div class="official-layout">
      <div class="official-photo">
        {% markdown %}![EVA%20YULIANTIKA%20SANDOHILPA](EVA%20YULIANTIKA%20SANDOHILPA.png "EVA%20YULIANTIKA%20SANDOHILPA"){% endmarkdown %}
      </div>
      <div class="official-info">
        <h3>Eva Yuliantika Sandohilpa, S.STP., MPA.</h3>
        <div class="detail-item">
          <span class="detail-label">Jabatan</span>
          <span class="detail-value">Kepala Bidang Penataan dan Kerjasama Desa Dinas Pemberdayaan Masyarakat dan Desa</span>
        </div>
        <div class="detail-item">
          <span class="detail-label">Menjabat</span>
          <span class="detail-value">30 Oktober 2025 – Sekarang</span>
        </div>
        <div class="detail-item">
          <span class="detail-label">Riwayat Jabatan</span>
          <span class="detail-value">
          	<ul>
                <li><strong>16 Januari 2017 - 31 Desember 2021 :</strong> Kasubbid Pengelolaan Kelembagaan dan Tenaga Pengembang Kompetensi pada BPSDM</li>
          		<li><strong>7 Desember 2022 – 29 Oktober 2025 :</strong> Analis Pengembangan Kompetensi Ahli Muda pada BPSDM</li>
          	</ul>
          </span>
        </div>
      </div>
    </div>
  </div>
    
    <!-- Kepala Bidang Pemerintahan Desa Dinas Pemberdayaan Masyarakat dan Desa -->
  <div class="section-card">
    <h2>Kepala Bidang Pemerintahan Desa Dinas Pemberdayaan Masyarakat dan Desa</h2>
    <div class="official-layout">
      <div class="official-photo">
        {% markdown %}![FENNY%20RAKHMAWATI](FENNY%20RAKHMAWATI.png "FENNY%20RAKHMAWATI"){% endmarkdown %}
      </div>
      <div class="official-info">
        <h3>Fenny Rakhmawati, S.Sos., M.Si.</h3>
        <div class="detail-item">
          <span class="detail-label">Jabatan</span>
          <span class="detail-value">Kepala Bidang Pemerintahan Desa Dinas Pemberdayaan Masyarakat dan Desa</span>
        </div>
        <div class="detail-item">
          <span class="detail-label">Menjabat</span>
          <span class="detail-value">13 Juni 2022 – sekarang</span>
        </div>
        <div class="detail-item">
          <span class="detail-label">Riwayat Jabatan</span>
          <span class="detail-value">
          	<ul>
                <li><strong>22 Agustus 2019 – 12 Oktober 2020 :</strong> Kasi Pembinaan dan Pengembangan Tenaga Perpustakaan Dinas Perpustakaan dan Kearsipan Provinsi Kalimantan Barat</li>
          		<li><strong>12	Oktober 2020 – 13 Juni 2022 :</strong> Kepala Bidang Pembinaan, Pengawasan dan Sistem Informasi Kearsipan Dinas Perpustakaan dan Kearsipan Provinsi Kalimantan Barat</li>
          	</ul>
          </span>
        </div>
      </div>
    </div>
  </div>
    
    <!-- Kepala Sub Bagian Umum dan Aparatur -->
  <div class="section-card">
    <h2>Kepala Sub Bagian Umum dan Aparatur</h2>
    <div class="official-layout">
      <div class="official-photo">
        {% markdown %}![Nailul%20Q](Nailul%20Q.png "Nailul%20Q"){% endmarkdown %}
      </div>
      <div class="official-info">
        <h3>Nailul Qomariah, SE.</h3>
        <div class="detail-item">
          <span class="detail-label">Jabatan</span>
          <span class="detail-value">Kepala Sub Bagian Umum dan Aparatur</span>
        </div>
        <div class="detail-item">
          <span class="detail-label">Menjabat</span>
          <span class="detail-value">Tahun 2017 sampai Sekarang</span>
        </div>
        <div class="detail-item">
          <span class="detail-label">Riwayat Jabatan</span>
          <span class="detail-value">
          	<ul>
          		<li><strong>Juli 2014 – Januari 2017 :</strong> Kepala Sub Bagian Umum dan Aparatur pada Badan Pemberdayaan Masyarakat dan Pemerintahan Desa</li>
          		<li><strong>Januari 2017 - sekarang :</strong> Kepala Sub Bagian Umum dan Aparatur pada Dinas Pemberdayaan Masyarakat dan Desa</li>
          	</ul>
          </span>
        </div>
      </div>
    </div>
  </div>

  <div class="section-card">
    <h2>LHKPN Pimpinan</h2>
    <div class="lhkpn-grid">
      <div class="lhkpn-card">
        <div class="lhkpn-img-container">
          {% markdown %}![2023](2023-LHKPN-KADIS-2022_images-extracted-1-768x1081.jpg){% endmarkdown %}
        </div>
        <div class="lhkpn-footer">
          <span class="lhkpn-badge">Tahun 2023</span>
        </div>
      </div>
      <div class="lhkpn-card">
        <div class="lhkpn-img-container">
          {% markdown %}![2024](2024-LHKPN-HENDRA-BACHTIAR.jpeg){% endmarkdown %}
        </div>
        <div class="lhkpn-footer">
          <span class="lhkpn-badge">Tahun 2024</span>
        </div>
      </div>
      <div class="lhkpn-card">
        <div class="lhkpn-img-container">
          {% markdown %}![2025](2025-LHKPN-Hendra-Bachtiar.jpg){% endmarkdown %}
        </div>
        <div class="lhkpn-footer">
          <span class="lhkpn-badge">Tahun 2025</span>
        </div>
      </div>
    </div>
  </div>

  <div class="section-card">
    <h2>Dokumen LHKPN & LHKASN</h2>
    <div class="link-list">
      <a class="link-btn" href="https://datacloud.kalbarprov.go.id/index.php/s/yqgbGJNmrGLcxKC" target="_blank">
        <div class="btn-content">
          <div class="icon-box">📄</div>
          <span class="btn-text">LHKPN dan LHKASN</span>
        </div>
        <div class="btn-arrow">➜</div>
      </a>
      <a class="link-btn" href="https://drive.google.com/drive/folders/1utSegR0Jrw7gvP0Eviffh4i1ewdPFTf8" target="_blank">
        <div class="btn-content">
          <div class="icon-box">📄</div>
          <span class="btn-text">LHKPN Tahun 2024</span>
        </div>
        <div class="btn-arrow">➜</div>
      </a>
      <a class="link-btn" href="https://drive.google.com/file/d/1Jn7AhOsOJvPK6GpJAdDLQQKmRtieBvbF/view" target="_blank">
        <div class="btn-content">
          <div class="icon-box">📄</div>
          <span class="btn-text">LHKPN & LHKASN 2025</span>
        </div>
        <div class="btn-arrow">➜</div>
      </a>
    </div>
  </div>

</div>