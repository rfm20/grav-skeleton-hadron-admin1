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

/* @Page:C:/xampp/htdocs/grav/grav-skeleton-hadron+admin1/user/pages/06.docs/02.skeleton/01.einleitung */
class __TwigTemplate_b1f453d23f9be888c88391751aec71b848ee7bd77a60f25140b2a0ef2329f56f extends \Twig\Template
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
        echo "<body><div class=\"notices blue\">
<p>This page contains an introduction to the Hadron Skeleton and shows the possibilities and features.</p>
</div>
<p>===</p>
<h2 id=\"introduction\"><a href=\"#introduction\" class=\"toc-anchor before\" data-anchor-icon=\"#\" aria-label=\"Anchor\"></a>Introduction</h2>
<p>The Hadron Skeleton is a ready-to-use template for a website that can be edited and published directly. It contains all necessary pages, configurations, plugins and themes to create a website with Grav. The Hadron Skeleton is based on the Hadron Theme and offers advanced features and configurations, which aren't available in the theme.</p>
<h2 id=\"hadron\"><a href=\"#hadron\" class=\"toc-anchor before\" data-anchor-icon=\"#\" aria-label=\"Anchor\"></a>Hadron</h2>
<p>Hadron comes in 2 variants: as a theme and as a skeleton. The skeleton includes the theme, as well as additional features and configurations. Learn more about the <a href=\"/grav/grav-skeleton-hadron+admin1/en/hadron/theme/introduction\">Hadron Theme</a>.</p>
<h2 id=\"features\"><a href=\"#features\" class=\"toc-anchor before\" data-anchor-icon=\"#\" aria-label=\"Anchor\"></a>Features</h2>
<p>The Hadron Skeleton includes the following features:</p>
<h3 id=\"ready-to-use-template\"><a href=\"#ready-to-use-template\" class=\"toc-anchor before\" data-anchor-icon=\"#\" aria-label=\"Anchor\"></a>ready-to-use template</h3>
<p>The Hadron Skeleton is a ready-to-use template for a website that can be edited and published directly. This allows you to quickly and easily create a website with Grav without having to start from scratch.</p>
<h3 id=\"default-groups-for-optima\"><a href=\"#default-groups-for-optima\" class=\"toc-anchor before\" data-anchor-icon=\"#\" aria-label=\"Anchor\"></a>Default groups for optimal user permissions</h3>
<p>The Hadron Skeleton includes default groups for optimal user permissions. This allows users with different permissions to be created to ensure the security of the website.</p>
<h3 id=\"default-pages\"><a href=\"#default-pages\" class=\"toc-anchor before\" data-anchor-icon=\"#\" aria-label=\"Anchor\"></a>Default pages</h3>
<p>The template includes various example pages that serve as a starting point for creating a website. These include normal pages, modular, blogs, contact page and more.</p>
<h3 id=\"pre-installed-plugins\"><a href=\"#pre-installed-plugins\" class=\"toc-anchor before\" data-anchor-icon=\"#\" aria-label=\"Anchor\"></a>Pre-installed plugins</h3>
<p>The Hadron Skeleton includes a selection of pre-installed plugins that extend the functionality of the website. These include plugins for SEO, shortcode, media and other components &amp; functions.</p>
<h3 id=\"default-configuration-for\"><a href=\"#default-configuration-for\" class=\"toc-anchor before\" data-anchor-icon=\"#\" aria-label=\"Anchor\"></a>Default configuration for SendGrid Email</h3>
<p>In addition to the email configuration, there is also a default configuration for SendGrid Email. This allows emails to be sent via SendGrid. This function supports the Doppler Secrets Manager.</p>
<h3 id=\"default-configuration-for-1\"><a href=\"#default-configuration-for-1\" class=\"toc-anchor before\" data-anchor-icon=\"#\" aria-label=\"Anchor\"></a>Default configuration for Doppler Secrets Manager</h3>
<p>An additional feature of this skeleton is the default configuration for the Doppler Secrets Manager. This allows secret information such as API keys, passwords and other sensitive data to be securely stored and retrieved.<br>
For this feature, our <a href=\"https://github.com/Crabston/grav\" target=\"_blank\" rel=\"nofollow noopener noreferrer\" class=\"external-link no-image\">modified Grav Core</a> is required, so that these can be automatically fetched by Doppler.</p>
<h2 id=\"next-steps\"><a href=\"#next-steps\" class=\"toc-anchor before\" data-anchor-icon=\"#\" aria-label=\"Anchor\"></a>Next steps</h2>
<p>To install the Hadron Skeleton, follow the instructions <a href=\"/grav/grav-skeleton-hadron+admin1/en/hadron/skeleton/installation\">Hadron Skeleton Installation</a>.</p></body>";
    }

    public function getTemplateName()
    {
        return "@Page:C:/xampp/htdocs/grav/grav-skeleton-hadron+admin1/user/pages/06.docs/02.skeleton/01.einleitung";
    }

    public function getDebugInfo()
    {
        return array (  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@Page:C:/xampp/htdocs/grav/grav-skeleton-hadron+admin1/user/pages/06.docs/02.skeleton/01.einleitung", "");
    }
}
