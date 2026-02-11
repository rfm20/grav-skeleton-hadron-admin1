---
title: 'Profil Dinas'
date: '26-11-2025 06:26'
visible: true
sidebar:
    display: false
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

* {
  box-sizing: border-box;
}

body {
  font-family: 'Inter', system-ui, -apple-system, sans-serif;
  background: #f9fafb;
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
.profile-card,
.section-card {
  background: #ffffff;
  padding: clamp(20px, 4vw, 40px);
  margin-bottom: 40px;
  border-radius: var(--radius-card);
  border: 1px solid rgba(13,110,79,0.12);
  box-shadow: var(--shadow-sm);
  transition: transform .35s ease, box-shadow .35s ease;
}

.profile-card:hover,
.section-card:hover {
  transform: translateY(-6px);
  box-shadow: var(--shadow-hover);
}

/* ===== CARD TITLE (CENTER & RESPONSIVE) ===== */
.profile-card h2,
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

/* ===== CARD CONTENT TEXT ===== */
.profile-card p,
.section-card p,
ul.custom-list li {
  font-size: clamp(0.9rem, 2vw, 1.05rem);
  line-height: 1.8;
  color: var(--text-dark);
  text-align: justify;
  word-wrap: break-word;
  overflow-wrap: break-word;
  hyphens: auto;
  margin-bottom: 1em;
}

/* ===== VISI BOX ===== */
.visi-box {
  background: linear-gradient(135deg, var(--primary-color), #095039);
  color: white;
  padding: clamp(25px, 5vw, 40px);
  border-radius: var(--radius-card);
  text-align: center;
  box-shadow: var(--shadow-hover);
  margin-bottom: 40px;
}

.visi-label {
  font-size: clamp(0.9rem, 2vw, 1rem);
  letter-spacing: 2px;
  font-weight: 700;
  margin-bottom: 15px;
  display: block;
  text-transform: uppercase;
}

.visi-text {
  font-size: clamp(1.1rem, 3vw, 1.4rem);
  font-style: italic;
  font-weight: 600;
  line-height: 1.6;
  margin: 0;
  padding: 0 10px;
}

/* ===== CUSTOM LIST ===== */
ul.custom-list {
  list-style: none;
  padding: 0;
  margin: 0;
}

ul.custom-list li {
  position: relative;
  padding-left: 32px;
  margin-bottom: 12px;
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
  flex-shrink: 0;
}

/* ===== GRID LIST ===== */
.grid-list {
  display: grid;
  grid-template-columns: 1fr;
  gap: 10px;
}

/* ===== REGULASI BOX ===== */
.regulasi-box {
  background: var(--primary-light);
  padding: 16px 20px;
  border-left: 4px solid var(--primary-color);
  border-radius: 0 8px 8px 0;
  margin-bottom: 28px;
}

.regulasi-box p {
  margin: 0;
  font-size: clamp(0.85rem, 2vw, 0.95rem);
  line-height: 1.6;
}

.regulasi-box strong {
  color: var(--primary-color);
  font-weight: 700;
}

/* ===== STRUKTUR ORGANISASI IMAGE ===== */
.profile-card img,
.section-card img {
  max-width: 100%;
  height: auto;
  display: block;
  margin: 0 auto;
  border-radius: 8px;
  box-shadow: 0 4px 12px rgba(0,0,0,0.1);
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

  .profile-card,
  .section-card {
    margin-bottom: 30px;
    padding: 25px 20px;
  }

  .profile-card h2,
  .section-card h2 {
    margin-bottom: 20px;
    padding: 0 10px 10px;
  }

  .visi-box {
    margin-bottom: 30px;
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

  .regulasi-box {
    padding: 14px 18px;
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
  }

  .section-subtitle {
    font-size: 0.75rem;
    padding: 5px 12px;
    letter-spacing: 0.5px;
  }

  .profile-card,
  .section-card {
    padding: 20px 15px;
    margin-bottom: 25px;
  }

  .profile-card h2,
  .section-card h2 {
    font-size: 1.15rem;
    margin-bottom: 18px;
    padding-bottom: 8px;
  }

  .profile-card p,
  .section-card p,
  ul.custom-list li {
    font-size: 0.9rem;
    line-height: 1.7;
  }

  .visi-box {
    padding: 20px 15px;
    margin-bottom: 25px;
  }

  .visi-label {
    font-size: 0.85rem;
    letter-spacing: 1.5px;
    margin-bottom: 12px;
  }

  .visi-text {
    font-size: 1.05rem;
    line-height: 1.5;
  }

  ul.custom-list li {
    padding-left: 24px;
    margin-bottom: 10px;
  }

  ul.custom-list li::before {
    width: 8px;
    height: 8px;
    top: 6px;
  }

  .regulasi-box {
    padding: 12px 15px;
    margin-bottom: 20px;
  }

  .regulasi-box p {
    font-size: 0.85rem;
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

  .profile-card,
  .section-card {
    padding: 15px 12px;
    margin-bottom: 20px;
  }

  .profile-card h2,
  .section-card h2 {
    font-size: 1.05rem;
    margin-bottom: 15px;
  }

  .profile-card p,
  .section-card p,
  ul.custom-list li {
    font-size: 0.85rem;
  }

  .visi-box {
    padding: 18px 12px;
  }

  .visi-label {
    font-size: 0.8rem;
    margin-bottom: 10px;
  }

  .visi-text {
    font-size: 1rem;
  }

  ul.custom-list li {
    padding-left: 22px;
    margin-bottom: 8px;
  }

  .regulasi-box {
    padding: 10px 12px;
  }
}

/* Print styling */
@media print {
  .profile-card,
  .section-card {
    box-shadow: none;
    border: 1px solid #ddd;
    page-break-inside: avoid;
  }

  .profile-card:hover,
  .section-card:hover {
    transform: none;
  }
}
</style>

<div class="page-wrapper">

  <div class="header-container">
    <div class="section-title">Profil Dinas</div>
    <span class="section-subtitle">Dinas Pemberdayaan Masyarakat & Desa</span>
  </div>

  <div class="profile-card">
    <h2>Sejarah</h2>
    <p>Januari 2013, resmi terbentuk Badan Pemberdayaan Masyarakat dan Pemerintahan Daerah (BPMPD) Provinsi Kalimantan Barat dan Drs.Y.Alexander,M.Si di percaya untuk memimpin lembaga baru di pemerintahan Provinsi Kalimantan Barat ini. Dari aspek historis, yakni konferensi besar Gubernur seluruh Indonesia yang dipimpin oleh Presiden Soekarno tahun 1954 membentuk Kementrian Pembangunan Masyarakat Desa, Kementrian Pembangunan Masyarakat tahun 1950, Badan Koordinasi Pembangunan MasyarakatDesa dan Deputi Transkopemda tahun 1960, Biro Departemen Pembangunan Masyarakat tahun 1963, Direktorat Pembangunan Masyarakat Desa tahun 1964, Deputi Pembangunan Masyarakat Desa tahun 1966, Deputi Pembangunan Masyarakat Desa dan Pengairan Rakyat/Deputi Kementrian Pembangunan Masyarakat Desa tahun 1966, Direktorat Jendral Pembangunan Masyarakat Desa tahun 1967, Ditjen Bangdes tahun 1978, Direktorat Pembangunan Masyarakat Desa tahun 1992, Ditjen Pemberdayaan Masyarakat Desa Tahun 1999, Ditjen Bina Pemberdayaan Masyarakat Desa tahun 2001, Direktorat Jendral Pemberdayaan Masyarakat dan desa tahun 2003 sampai saat ini.</p>
    <p>Dari Aspek Fungsi, meliputi dua fungsi, pertama fungsi asli Pemberdayaan Masyarakat Desa, yakni partisipasi masyarakat, kelembagaan masyarakat, perencanaan dari bawah, profil desa, pelantikan tokoh masyarakat, pemberdayaan adat, usaha ekonomi desa, pelayanan administrasi pemerintahan, ketentraman dan ketertiban. Kedua, fungsi koordinasi, mengkoordinasi program/kegiatan dari berbagai sektor pendidikan, kesehatan, pertanian pangan, perkebunan, perikanan, pertanian, kebutuhan, industri, perdagangan dan infastruktur.</p>
    <p>Selanjutnya Aspek Pelaksanaan Kebijakan dan Program Pembangunan Nasional yakni Peningkatan. Partisipasi Masyarakat, Penanggulangan Kemiskinan (PNPM-MPd), Bulan Bhakti Gotong Royong Masyarakat, Pelaksanaan Lomba Desa dan Kelurahan, Gelas TTG, Desa Mandiri Energi (Energi Alternatif), TMMD (TNI Menuggal Masuk Desa), Pembangunan Lembaga Keuangan Mikro Perdesaan (UED, SP, BUMDes), Pemantapan Pos layanan Terpadu (Posyandu), Peningkatan Kapasitas Penyelenggaraan Pemeritahan Desa.</p>
    <p>Berdasarkan pertimbangan aspek historis, aspek fungsi dan aspek penanganan program pembangunan nasional serta dampak maka bentuk kelembagaan pemberdayaan masyarakat dan pemerintahan desa adalah Badan Pemberdayaan Masyarakat dan Pemerintahan Desa. Diharapkan kabupaten/kota bisa menyesuaikan kembali organisasinya sesuai dengan keadaan daerah masing-masing guna memudahkan sinkronisasi an kordinasi.</p>
    <p>Karena ada di beberapa daerah masih menggembangkan beberapa organisasi padahal kita mau fokuskan pemberdayaan masyarakat, sebagai upaya pemerintahan provinsi memajukan seluruh desa di Provinsi Kalimantan Barat. Semenjak menyelesaikan tugasnya sebagai wakil bupati Kabupaten Kapuas Hulu Periode 2005-2010, pada Januari 2011, Bapak Alexander dipercaya menempati jabatan sebagai Kepala Badan Penanaman Modal Daerah (BPMD) Pemerintahan Provinsi Kalimantan Barat, selama satu tahun tiga bulan di BPMD, Bapak Alexander berprestasi menghantarkan Gubernur Kalimantan Barat pada akhir 2011 menerima Penghargaan Regional Champion yang diserahkan langsung oleh Menteri Kordinator Perekonomian RI, Hayta Rajasa, karena berprestasi dibidang investasi di Kalimantan Barat.</p>
    <p>Kemudian Mei 2012, Bapak Alexander dipercaya menjabat Kepala Badan Pemberdayaan Perempuan, Anak Masyarakat dan KB. Prestasi gemilang dicapai dimana pada peringatan Hari Ibu tanggal 22 Desember 2012, Gubernur Kalimantan Barat mendapat Anugrah Prahita Eka Praya dari Presiden RI, keberhasilan di bidang gender yakni Pengarustamaan Gender.</p>
    <p>Kini dipercaya menjabat Kepala Badan Pemberdayaa Masyarakat dan Pemerinahan Desa Provinsi Kalimantan Barat, Alexander bertekat membuat desa di seluruh Kalbar menjadi mandiri, dengan tolak ukur yakni bisa membawa Kalbar memasuki peringkat 10 besar pada lomba desa tingkat nasional tahun 2013.</p>
    <p>Hingga kemudian pada tahun 2016 terbit Peraturan Daerah Provinsi Kalimantan Barat Nomor 8 Tahun 2016 tentang Pembentukan dan Susunan Perangkat Daerah Provinsi Kalimantan Barat dan Peraturan Gubernur Kalimantan Barat Nomor 107 Tahun 2016 tentang Kedudukan, Struktur Organisasi, Tugas dan Fungsi, Serta Tata Kerja Dinas Pemberdayaan Masyarakat dan Desa sehingga nama Badan Pemberdayaan Masyarakat dan Pemerintahan Desa (BPMPD) berganti nama menjadi Dinas Pemberdayaan Masyarakat dan Desa (Dinas PMD) pada Januari 2017.</p>
  </div>

  <div class="visi-box">
    <span class="visi-label">VISI</span>
    <p class="visi-text">“Terwujudnya Kesejahteraan Masyarakat Kalimantan Barat melalui Percepatan Pembangunan Infrastruktur dan Perbaikan Tata Kelola Pemerintahan”</p>
  </div>

  <div class="section-card">
    <h2>Misi</h2>
    <ul class="custom-list">
      <li>Mewujudkan percepatan pembangunan infrastruktur.</li>
      <li>Mewujudkan tata kelola pemerintahan berkualitas dengan prinsip Good Governance.</li>
      <li>Mewujudkan kualitas hidup masyarakat.</li>
      <li>Mewujudkan masyarakat sejahtera.</li>
      <li>Mewujudkan masyarakat yang tertib.</li>
      <li>Mewujudkan pembangunan berwawasan lingkungan.</li>
    </ul>
  </div>

  <div class="section-card">
    <h2>Tugas Pokok & Fungsi</h2>

    <div class="regulasi-box">
      <p><strong>Dasar Hukum:</strong> Peraturan Gubernur Kalimantan Barat Nomor 122 Tahun 2021</p>
    </div>

    <p>Dinas Pemberdayaan Masyarakat dan Desa Provinsi Kalimantan Barat mempunyai tugas membantu Gubernur.</p>

    <ul class="custom-list grid-list">
      <li>Perumusan program kerja bidang pemberdayaan masyarakat & desa.</li>
      <li>Perumusan kebijakan pemerintahan desa & kerjasama desa.</li>
      <li>Pelaksanaan kebijakan pemerintahan & pemberdayaan desa.</li>
      <li>Penyelenggaraan urusan pemerintahan bidang desa.</li>
      <li>Koordinasi dan pembinaan teknis pemerintahan desa.</li>
      <li>Pelaksanaan evaluasi dan pelaporan bidang desa.</li>
      <li>Pelaksanaan reformasi birokrasi dan pelayanan publik.</li>
      <li>Pelaksanaan administrasi di lingkungan Dinas.</li>
      <li>Pelaksanaan tugas lain dari Gubernur.</li>
    </ul>
  </div>

  <div class="profile-card">
    <h2>Struktur Organisasi</h2>
    <div style="text-align:center;margin-top:25px;">
      {% markdown %}
![688093ffadf80-2025-07-23](688093ffadf80-2025-07-23.jpg)
      {% endmarkdown %}
    </div>
  </div>

</div>
