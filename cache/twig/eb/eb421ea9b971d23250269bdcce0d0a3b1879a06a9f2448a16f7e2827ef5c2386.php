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

/* @Page:C:/xampp/htdocs/grav/grav-skeleton-hadron+admin1/user/pages/06.docs/01.theme/01.einleitung */
class __TwigTemplate_2fda68e6b5c16bbc156d50a9370e42b8645f3ceed792ce1a4937d3f4692786ec extends \Twig\Template
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
<p>This page contains an introduction to the Hadron Theme and describes the main features and options.</p>
</div>
<p>===</p>
<h2>Introduction</h2>
<p>The Hadron Theme is a modern <a href=\"https://getgrav.org\">Grav</a> theme based on <a href=\"https://github.com/getgrav/grav-theme-quark\">Quark</a>. As a child theme of Quark, it includes advanced features compared to the original Quark theme. It also offers advanced styling options.</p>
<h2>Hadron</h2>
<p>Hadron comes in 2 variants: as a theme and as a skeleton. The skeleton includes the theme, as well as additional features and configurations. Learn more about the <a href=\"/grav/grav-skeleton-hadron+admin1/en/hadron/skeleton/introduction\">Hadron Skeleton</a>.</p>
<h2>Features</h2>
<p>The Hadron Theme offers the following features:</p>
<h3>German language pack</h3>
<p>The Hadron Theme includes a German language pack that translates the user interface and configurations into German. However, the English language is still available.</p>
<h3>Responsive tables</h3>
<p>Tables can be automatically optimized for mobile devices. This means that tables are displayed differently on mobile devices to improve readability. Learn more about mobile-friendly tables at <a href=\"https://grav.demo.crabston.dev/komponenten#mobilfreundliche-tabellen\">grav.demo.crabston.dev/components</a>.</p>
<h3>Navigation with drop-down menu</h3>
<p>Navigation can be enhanced with a drop-down menu. This allows not only the main pages but also the subpages to be displayed in the navigation:
<img src=\"/grav/grav-skeleton-hadron admin1/docs/theme/introduction/dropdown-navigation.webp\" alt=\"Drop-down Menu\" /></p>
<h3>Featured posts in blogs</h3>
<p>Posts can be pinned to feature them. This is particularly useful for marking important posts or announcements.</p>
<h3>Built-in support for Embed.ly</h3>
<p>Embed.ly is a service that allows embedding content from other websites. The Hadron Theme supports Embed.ly to embed content from other websites.</p>
<h3>Built-in support for H5P</h3>
<p>H5P is a framework for creating interactive content. The Hadron Theme supports H5P to embed interactive content in Grav.</p>
<h3>Advanced theme options</h3>
<p>The Hadron Theme offers advanced theme options to configure the appearance and behavior of the site.</p>
<h3>Other enhancements</h3>
<p>The Hadron Theme includes other enhancements to improve the user experience and customize the theme to the users' needs.</p>
<h2>Next steps</h2>
<p>To install the Hadron Theme, follow the guide <a href=\"/grav/grav-skeleton-hadron+admin1/en/hadron/theme/installation\">Hadron Theme Installation</a>.</p>";
    }

    public function getTemplateName()
    {
        return "@Page:C:/xampp/htdocs/grav/grav-skeleton-hadron+admin1/user/pages/06.docs/01.theme/01.einleitung";
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
        return new Source("", "@Page:C:/xampp/htdocs/grav/grav-skeleton-hadron+admin1/user/pages/06.docs/01.theme/01.einleitung", "");
    }
}
