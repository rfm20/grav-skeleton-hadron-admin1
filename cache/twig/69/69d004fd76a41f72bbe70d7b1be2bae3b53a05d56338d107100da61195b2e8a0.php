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
class __TwigTemplate_25f33adb8d4c6f148cac513433725e1f4f06c6f3cfdc398dca6d63005906c124 extends \Twig\Template
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
        echo "<div class=\"notices blue\">
<p>This page contains an introduction to the Hadron Skeleton and shows the possibilities and features.</p>
</div>
<p>===</p>
<h2>Introduction</h2>
<p>The Hadron Skeleton is a ready-to-use template for a website that can be edited and published directly. It contains all necessary pages, configurations, plugins and themes to create a website with Grav. The Hadron Skeleton is based on the Hadron Theme and offers advanced features and configurations, which aren't available in the theme.</p>
<h2>Hadron</h2>
<p>Hadron comes in 2 variants: as a theme and as a skeleton. The skeleton includes the theme, as well as additional features and configurations. Learn more about the <a href=\"/grav/grav-skeleton-hadron+admin1/en/hadron/theme/introduction\">Hadron Theme</a>.</p>
<h2>Features</h2>
<p>The Hadron Skeleton includes the following features:</p>
<h3>ready-to-use template</h3>
<p>The Hadron Skeleton is a ready-to-use template for a website that can be edited and published directly. This allows you to quickly and easily create a website with Grav without having to start from scratch.</p>
<h3>Default groups for optimal user permissions</h3>
<p>The Hadron Skeleton includes default groups for optimal user permissions. This allows users with different permissions to be created to ensure the security of the website.</p>
<h3>Default pages</h3>
<p>The template includes various example pages that serve as a starting point for creating a website. These include normal pages, modular, blogs, contact page and more.</p>
<h3>Pre-installed plugins</h3>
<p>The Hadron Skeleton includes a selection of pre-installed plugins that extend the functionality of the website. These include plugins for SEO, shortcode, media and other components &amp; functions.</p>
<h3>Default configuration for SendGrid Email</h3>
<p>In addition to the email configuration, there is also a default configuration for SendGrid Email. This allows emails to be sent via SendGrid. This function supports the Doppler Secrets Manager.</p>
<h3>Default configuration for Doppler Secrets Manager</h3>
<p>An additional feature of this skeleton is the default configuration for the Doppler Secrets Manager. This allows secret information such as API keys, passwords and other sensitive data to be securely stored and retrieved.<br />
For this feature, our <a href=\"https://github.com/Crabston/grav\">modified Grav Core</a> is required, so that these can be automatically fetched by Doppler.</p>
<h2>Next steps</h2>
<p>To install the Hadron Skeleton, follow the instructions <a href=\"/grav/grav-skeleton-hadron+admin1/en/hadron/skeleton/installation\">Hadron Skeleton Installation</a>.</p>";
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
