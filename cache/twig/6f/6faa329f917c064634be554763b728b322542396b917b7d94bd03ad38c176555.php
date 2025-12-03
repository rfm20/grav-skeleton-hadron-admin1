<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @Page:C:/xampp/htdocs/grav/grav-skeleton-hadron+admin1/user/pages/01.home/03._contact */
class __TwigTemplate_3b1705cb0a194489725002d8cf02b303a950f6f99856a2fc68c47adf45371ac0 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "
<section class=\"section modular-text \">
    <section class=\"container grid-lg\">
            <head><link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css\">
<style>
.dpmd-footer {
  background: linear-gradient(160deg, #064e3b, #14532d);
  padding: 60px 40px;
  margin-top: 40px;
  border-top: 4px solid #facc15;
  font-family: Arial, sans-serif;
  color: #ecfdf5;
}

.dpmd-grid {
  display: grid;
  grid-template-columns: 1.5fr 1fr 1fr;
  gap: 40px;
  align-items:start;
}

.dpmd-logo img {
  width: 200px;
  margin-bottom: 10px;
}

.dpmd-desc {
  font-size: 14px;
  line-height: 1.7;
  color: #d1fae5;
}

.dpmd-footer h3 {
  margin-bottom: 15px;
  color: #facc15;
  font-size: 17px;
}

.dpmd-footer p {
  font-size: 14px;
  color: #ecfdf5;
  margin: 8px 0;
}

/* LINK */
.dpmd-footer a {
  text-decoration: none;
  color: #ffffff;
  font-weight: 500;
}

/* HILANGKAN PANAH */
.dpmd-footer a::after,
.dpmd-footer a[target=\"_blank\"]::after {
  display: none !important;
  content: none !important;
}

.dpmd-footer a:hover {
  text-decoration: underline;
}

/* SOCIAL MEDIA */
.social-icons {
  display: flex;
  gap: 15px;
  margin-top: 15px;
}

.social-icons a {
  width: 38px;
  height: 38px;
  background: #064e3b; /* HIJAU TUA */
  color: #ffffff;
  display: flex;
  align-items: center;
  justify-content: center;
  border-radius: 50%;
  font-size: 18px;
  transition: 0.3s;
  border:1px solid rgba(255,255,255,0.15);
}

.social-icons a:hover {
  background: #16a34a;  /* HIJAU MUDA */
  color: #ffffff;
  transform: translateY(-3px) scale(1.07);
}

/* MAP */
.map-frame {
  width: 100%;
  height: 200px;
  border: 0;
  border-radius: 12px;
  filter: saturate(1.1) contrast(1.05);
  box-shadow:0 8px 20px rgba(0,0,0,0.25);
}

/* Responsive */
@media (max-width: 900px) {
  .dpmd-grid {
    grid-template-columns: 1fr;
    text-align:center;
  }

  .social-icons {
    justify-content: center;
  }

  .dpmd-logo img {
    width: 150px;
  }
}
</style>
</head><body><div class=\"dpmd-footer\">
  <div class=\"dpmd-grid\">

    <!-- KOLOM 1 -->
    <div class=\"dpmd-logo\">
      ";
        // line 121
        ob_start();
        // line 122
        echo "![Logo DPMD](logo-dpmd.png)
      ";
        $content = ob_get_clean();
        preg_match("/^\s*/", $content, $matches);
        $lines = explode("\n", $content);
        $content = preg_replace('/^' . $matches[0]. '/', "", $lines);
        $content = join("\n", $content);
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->markdownFunction($context, $content);
        // line 124
        echo "
      <p class=\"dpmd-desc\">
        Dinas Pemberdayaan Masyarakat dan Desa Provinsi Kalimantan Barat mempunyai tugas membantu Gubernur melaksanakan urusan pemerintahan yang menjadi kewenangan daerah dan tugas pembantuan di bidang pemberdayaan masyarakat dan desa sesuai ketentuan peraturan perundang-undangan.
      </p>
    </div>

    <!-- KOLOM 2 -->
    <div>
      <h3 id=\"hubungi-kami\">Hubungi Kami</h3>

      <p>
        <i class=\"fas fa-location-dot\"></i>
        Jl. M. Hambal No. 5, Kel. Akcaya, Kec. Pontianak Selatan 78121 – Kalbar
      </p>

      <p>
        <i class=\"fab fa-whatsapp\"></i>
        <a href=\"https://wa.me/6282354859805\" target=\"_blank\" rel=\"nofollow noopener noreferrer\" class=\"external-link no-image\">0823 5485 9805</a>
      </p>

      <p>
        <i class=\"fas fa-phone\"></i>
        <a href=\"tel:+625618174267\" target=\"_blank\" rel=\"nofollow noopener noreferrer\" class=\"external-link no-image\">(0561) 817 4267</a>
      </p>

      <div class=\"social-icons\">
        <a href=\"#\">
  <i class=\"fab fa-facebook-f\"></i>
</a>
        <a href=\"#\">
  <i class=\"fab fa-instagram\"></i>
</a>
        <a href=\"#\">
  <i class=\"fab fa-youtube\"></i>
</a>
        <a href=\"#\">
  <i class=\"fab fa-twitter\"></i>
</a>
      </div>
    </div>

    <!-- KOLOM 3 -->
    <div>
      <h3 id=\"lokasi-kami\">Lokasi Kami</h3>

      <iframe class=\"map-frame\" src=\"https://www.google.com/maps?q=Jl.+M.+Hambal+Pontianak&amp;output=embed\">
      </iframe>
    </div>

  </div>
</div></body>
    </section>
</section>
";
    }

    public function getTemplateName()
    {
        return "@Page:C:/xampp/htdocs/grav/grav-skeleton-hadron+admin1/user/pages/01.home/03._contact";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 124,  154 => 122,  152 => 121,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@Page:C:/xampp/htdocs/grav/grav-skeleton-hadron+admin1/user/pages/01.home/03._contact", "");
    }
}
