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

/* @Page:C:/xampp/htdocs/grav/grav-skeleton-hadron+admin1/user/pages/06.docs/01.theme/02.installation */
class __TwigTemplate_5580aaa189fa0601cba54a57642f4ac6360d02bb30178987bdb15546979953c3 extends \Twig\Template
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
<p>This tutorial shows the different ways to install the Hadron theme and guides you through the installation of the Hadron theme on an existing Grav site.</p>
</div>
<p>===</p>
<h2 id=\"installation\"><a href=\"#installation\" class=\"toc-anchor before\" data-anchor-icon=\"#\" aria-label=\"Anchor\"></a>Installation</h2>
<p>The Hadron theme can be installed in different ways. The installation via the GPM (Grav Package Manager) allows for a quick and easy installation of the theme with a simple terminal command, while the manual method allows for installation via a zip file. There is also a way to install the theme via Git or through the Admin Plugin.</p>
<p>The theme itself is useful, however, it may be easier to create a website with the Hadron Skeleton. The Hadron theme is included in the <a href=\"https://github.com/Crabston/grav-skeleton-hadron\" target=\"_blank\" rel=\"nofollow noopener noreferrer\" class=\"external-link no-image\">Hadron Skeleton</a>, which includes a complete website. This includes: examples of content, configurations, themes, and plugins.</p>
<h3 id=\"1-gpm-installation-recomm\"><a href=\"#1-gpm-installation-recomm\" class=\"toc-anchor before\" data-anchor-icon=\"#\" aria-label=\"Anchor\"></a>1. GPM Installation (recommended)</h3>
<p><em>This method is currently not supported as the theme is not yet available in the GPM. Please use another method.</em></p>
<p>The easiest way to install this theme is through the <a href=\"http://learn.getgrav.org/advanced/grav-gpm\" target=\"_blank\" rel=\"nofollow noopener noreferrer\" class=\"external-link no-image\">Grav Package Manager (GPM)</a> in your system terminal (also called command line). To do this, type the following command in the root directory of your Grav installation:</p>
<pre><code class=\"language-shell\">bin/gpm install hadron</code></pre>
<p>This command installs the Hadron theme in your <code>/user/themes</code> directory within Grav. The theme files can be found under <code>/your/site/grav/user/themes/hadron</code>.</p>
<p>The advantage of this method is that you can update the theme with a simple command:</p>
<pre><code class=\"language-shell\">bin/gpm update hadron</code></pre>
<h3 id=\"2-git-installation\"><a href=\"#2-git-installation\" class=\"toc-anchor before\" data-anchor-icon=\"#\" aria-label=\"Anchor\"></a>2. Git Installation</h3>
<p>As an alternative, you can also install the theme via Git. Go to your <code>/user/themes</code> directory and run the following command:</p>
<pre><code class=\"language-shell\">git clone https://github.com/Crabston/grav-theme-hadron.git hadron</code></pre>
<p>The theme should now be found in the directory <code>/your/site/grav/user/themes/hadron</code>.</p>
<p>To update the theme, you can simply change to the theme directory and run <code>git pull</code>:</p>
<pre><code class=\"language-shell\">cd /your/site/grav/user/themes/hadron
git pull</code></pre>
<h3 id=\"3-admin-plugin-installati\"><a href=\"#3-admin-plugin-installati\" class=\"toc-anchor before\" data-anchor-icon=\"#\" aria-label=\"Anchor\"></a>3. Admin Plugin Installation</h3>
<p><em>This method is currently not supported as the theme is not yet available in the GPM. Please use another method.</em></p>
<p>If you are using the <a href=\"https://github.com/getgrav/grav-plugin-admin\" target=\"_blank\" rel=\"nofollow noopener noreferrer\" class=\"external-link no-image\">Admin Plugin</a>, you can install the theme directly through the Admin Plugin. Go to the <code>Themes</code> section and click on <code>Add</code> and search for <code>hadron</code>. Select the theme and click on <code>Install</code>.</p>
<p>The theme will now be installed in your <code>/user/themes</code> directory. It can also be updated via the Admin Plugin when a new version is available.</p>
<h3 id=\"4-manual-installation-not\"><a href=\"#4-manual-installation-not\" class=\"toc-anchor before\" data-anchor-icon=\"#\" aria-label=\"Anchor\"></a>4. Manual Installation (not recommended)</h3>
<p>To manually install the theme, simply download the zip version of this repository and unpack it under <code>/your/site/grav/user/themes</code>. Then rename the folder to <code>hadron</code>. The theme files can be found on <a href=\"https://github.com/Crabston/grav-theme-hadron\" target=\"_blank\" rel=\"nofollow noopener noreferrer\" class=\"external-link no-image\">GitHub</a> or on <a href=\"http://getgrav.org/downloads/themes\" target=\"_blank\" rel=\"nofollow noopener noreferrer\" class=\"external-link no-image\">GetGrav.org</a>.</p>
<p>You should now have all theme files under <code>/your/site/grav/user/themes/hadron</code>.</p>
<h2 id=\"next-steps\"><a href=\"#next-steps\" class=\"toc-anchor before\" data-anchor-icon=\"#\" aria-label=\"Anchor\"></a>Next steps</h2>
<p>After installing the theme, you can activate the theme in the <code>Grav Admin</code> interface. To do this, go to the <code>Themes</code> section and select <code>Hadron</code>. Click on <code>Activate</code> to activate the theme.</p>
<p>The theme is now activated and should be visible on your site. You can now customize the theme settings and design the page to your liking. Learn more about the <a href=\"/grav/grav-skeleton-hadron+admin1/en/hadron/theme/options\">Theme Options</a>.</p></body>";
    }

    public function getTemplateName()
    {
        return "@Page:C:/xampp/htdocs/grav/grav-skeleton-hadron+admin1/user/pages/06.docs/01.theme/02.installation";
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
        return new Source("", "@Page:C:/xampp/htdocs/grav/grav-skeleton-hadron+admin1/user/pages/06.docs/01.theme/02.installation", "");
    }
}
