---
title: Contact
process:
    markdown: true
    twig: true
media_order: 'jdih.jpg,jdih.png,lapor.png,logo-dpmd.png,ppid.png,sikedip.png,SEKAMPADI.png'
---

<style>
/* ===== ROOT VARIABLES ===== */
:root {
  --primary-dark: #14532d;
  --primary: #15803d;
  --primary-light: #d1fae5;
  --bg-white: #ffffff;
  --shadow-soft: 0 4px 14px rgba(0,0,0,0.12);
}

/* ===== RESET ===== */
*,
*::before,
*::after {
  box-sizing: border-box;
}

body {
  margin: 0;
  padding: 0;
}

/* ===== SECTION TITLE (JIKA DIPAKAI) ===== */
.partner-section {
  text-align: center;
  padding: clamp(24px, 5vw, 40px) 0 20px;
  margin-top: 40px;
}

.partner-section h3 {
  font-size: clamp(1.4rem, 4vw, 1.75rem);
  color: var(--primary-dark);
  font-weight: 800;
  margin-bottom: 8px;
}

.partner-section p {
  font-size: clamp(0.85rem, 2.5vw, 0.9rem);
  color: var(--primary);
  margin-bottom: 30px;
}

/* ===== WRAPPER PUTIH ===== */
.carousel-bg-partner {
  width: 100%;
  background: var(--bg-white) !important;
  padding: clamp(20px, 5vw, 30px) 0;
  border-radius: clamp(14px, 4vw, 22px);
  position: relative;
}

/* ===== HILANGKAN BACKGROUND CARD OWL ===== */
.owl-carousel-partner,
.owl-carousel-partner .owl-stage-outer,
.owl-carousel-partner .owl-stage,
.owl-carousel-partner .owl-item {
  background: var(--bg-white) !important;
}

/* ===== LOGO ===== */
.partner-logo {
  display: flex !important;
  justify-content: center;
  align-items: center;
  height: clamp(80px, 18vw, 110px);
  padding: 8px;
  margin: 5px;
  transition: transform 0.3s ease;
}

.partner-logo:hover {
  transform: translateY(-4px) scale(1.05);
}

/* ===== IMAGE LOGO ===== */
.partner-logo img {
  width: 100%;
  height: 100%;
  max-width: 160px;
  object-fit: contain;
  transition: transform 0.3s ease;
}

.partner-logo:hover img {
  transform: scale(1.08);
}

/* ===== NAVIGATION ARROWS ===== */
.owl-carousel-partner .owl-nav button.owl-prev,
.owl-carousel-partner .owl-nav button.owl-next {
  background: var(--bg-white) !important;
  border-radius: 50%;
  width: clamp(38px, 8vw, 45px);
  height: clamp(38px, 8vw, 45px);
  border: 2px solid var(--primary-dark) !important;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: clamp(20px, 4vw, 26px) !important;
  color: var(--primary-dark) !important;
  box-shadow: var(--shadow-soft);
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  transition: 0.3s ease;
  z-index: 10;
}

.owl-carousel-partner .owl-nav button:hover {
  background: var(--primary-light) !important;
  transform: translateY(-50%) scale(1.08);
}

/* POSISI ARROW */
.owl-carousel-partner .owl-nav button.owl-prev {
  left: clamp(-12px, -2vw, -15px);
}

.owl-carousel-partner .owl-nav button.owl-next {
  right: clamp(-12px, -2vw, -15px);
}

/* ===== DOTS ===== */
.owl-carousel-partner .owl-dots {
  display: none !important;
}

/* ===== TABLET ===== */
@media (max-width: 768px) {
  .partner-logo {
    height: 95px;
  }

  .partner-logo img {
    max-width: 140px;
  }
}

/* ===== MOBILE ===== */
@media (max-width: 480px) {
  .partner-logo {
    height: 80px;
  }

  .partner-logo img {
    max-width: 120px;
  }
}

/* ===== TOUCH DEVICE ===== */
@media (hover: none) and (pointer: coarse) {
  .partner-logo:hover,
  .partner-logo:hover img {
    transform: none;
  }

  .owl-carousel-partner .owl-nav button:hover {
    transform: translateY(-50%);
  }
}

/* ===== PRINT ===== */
@media print {
  .owl-carousel-partner .owl-nav {
    display: none !important;
  }
}

</style>

<div class="carousel-bg-partner">
  <div class="owl-carousel-partner owl-carousel owl-theme">

    <a href="https://lapor.go.id/" target="_blank" class="partner-logo">
      {% markdown %}
![LAPOR](lapor.png)
      {% endmarkdown %}
    </a>

    <a href="https://ppid.kalbarprov.go.id/" target="_blank" class="partner-logo">
      {% markdown %}
![PPID](ppid.png)
      {% endmarkdown %}
    </a>

    <a href="https://jdih.kalbarprov.go.id/" target="_blank" class="partner-logo">
      {% markdown %}
![JDIH](jdih.png)
      {% endmarkdown %}
    </a>

    <a href="https://sikedip.kalbarprov.go.id/" target="_blank" class="partner-logo">
      {% markdown %}
![SIKEDIP](sikedip.png)
      {% endmarkdown %}
    </a>
      
    <a href="https://sekampadi.kalbarprov.go.id/" target="_blank" class="partner-logo">
      {% markdown %}
![SEKAMPADI](SEKAMPADI.png)
      {% endmarkdown %}
    </a>

  </div>
</div>

<script>
$(document).ready(function(){
  $('.owl-carousel-partner').owlCarousel({
    loop:true,
    margin:15,
    nav:true,
    dots:false,
    autoplay:true,
    autoplayTimeout:3500,
    smartSpeed:650,
    responsive:{
      0:{items:1},
      600:{items:2},
      1000:{items:3}
    }
  });
});
</script>
