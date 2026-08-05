---
title: Contact
process:
    markdown: true
    twig: true
media_order: 'jdih.jpg,jdih.png,lapor.png,logo-dpmd.png,ppid.png,sikedip.png,SEKAMPADI.png,SANDI.jpeg'
---

<style>
/* SECTION TITLE */
.partner-section {
  text-align: center;
  padding: 40px 0 20px;
  margin-top: 40px;
}

.partner-section h3 {
  font-size: 28px;
  color: #14532d;
  font-weight: 800;
  margin-bottom: 8px;
}

.partner-section p {
  font-size: 14px;
  color: #15803d;
  margin-bottom: 35px;
}

/* WRAPPER PUTIH */
.carousel-bg-partner {
  width: 100%;
  background: #ffffff !important;
  padding: 30px 0;
  border-radius: 22px;
}

/* HILANGKAN BACKGROUND CARD */
.owl-carousel-partner,
.owl-carousel-partner .owl-stage-outer,
.owl-carousel-partner .owl-stage,
.owl-carousel-partner .owl-item {
  background: #ffffff !important;
}

/* LOGO TANPA CARD */
.partner-logo {
  display: flex !important;
  justify-content: center;
  align-items: center;
  height: 110px; 
  margin: 5px;
  transition: 0.3s ease;
}

.partner-logo:hover {
  transform: translateY(-4px) scale(1.06);
}

/* GAMBAR LOGO */
.partner-logo img {
  width: 100%;
  height: 100%;
  object-fit: contain;
  transition: 0.3s ease;
}

.partner-logo:hover img {
  transform: scale(1.08);
}

/* ARROWS */
.owl-carousel-partner .owl-nav button.owl-prev,
.owl-carousel-partner .owl-nav button.owl-next {
  background: white !important;
  border-radius: 50%;
  width: 45px;
  height: 45px;
  border: 2px solid #14532d !important;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 26px !important;
  color: #14532d !important;
  box-shadow: 0 4px 10px rgba(0,0,0,0.12);
  position: absolute;
  top: 38%;
  transition: 0.3s ease;
}

.owl-carousel-partner .owl-nav button:hover {
  background: #d1fae5 !important;
  transform: scale(1.08);
}

.owl-carousel-partner .owl-nav button.owl-prev { left: -15px; }
.owl-carousel-partner .owl-nav button.owl-next { right: -15px; }

.owl-carousel-partner .owl-dots { display: none !important; }

/* RESPONSIVE */
@media (max-width: 768px) {
  .partner-logo { height: 95px; }
  .owl-carousel-partner .owl-nav button.owl-prev { left: -8px; }
  .owl-carousel-partner .owl-nav button.owl-next { right: -8px; }
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
      
      <a href="https://pkdkalbarprov-source.github.io/sandidesa/" target="_blank" class="partner-logo">
      {% markdown %}
![SANDI](SANDI.jpeg)
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
