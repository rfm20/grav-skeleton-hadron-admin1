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

/* @Page:C:/xampp/htdocs/grav/grav-skeleton-hadron+admin1/user/pages/06.docs/02.skeleton/02.installation */
class __TwigTemplate_709d2b9affbabe884f00ced38896f091befebb2282ed97edff31d04df5283bb9 extends \Twig\Template
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
<p>This tutorial describes the different ways to install the Hadron Skeleton and guides you through the installation of the Skeleton for a new Grav site.</p>
</div>
<p>===</p>
<h2 id=\"installation\"><a href=\"#installation\" class=\"toc-anchor before\" data-anchor-icon=\"#\" aria-label=\"Anchor\"></a>Installation</h2>
<p>The Hadron Skeleton can be installed in different ways.</p>
<h2 id=\"methods\"><a href=\"#methods\" class=\"toc-anchor before\" data-anchor-icon=\"#\" aria-label=\"Anchor\"></a>Methods</h2>
<p>There are basically two methods to install the Skeleton: via Git or as a ZIP file. Both methods have their advantages and disadvantages, depending on how you want to use the Skeleton. There are also different variants of how you can install the Skeleton, depending on whether you want to edit the Skeleton or just use it.</p>
<h2 id=\"1-installation-git\"><a href=\"#1-installation-git\" class=\"toc-anchor before\" data-anchor-icon=\"#\" aria-label=\"Anchor\"></a>1. Installation (Git)</h2>
<p>If you want to edit the Skeleton with Git, the easiest way is to clone the repository. This way you can easily pull updates and changes from the original repository. There are different variants depending on what you want to do with the Skeleton:</p>
<h3 id=\"1-1-copy-repository-recom\"><a href=\"#1-1-copy-repository-recom\" class=\"toc-anchor before\" data-anchor-icon=\"#\" aria-label=\"Anchor\"></a>1.1 Copy repository (recommended)</h3>
<p>If you want to create a new repository based on this Skeleton, you can use the <code>Use this template</code> button on the GitHub repository page. This creates a new repository in your account based on the Skeleton. However, you will not be able to pull updates from the original repository.<br>
<em>This is the recommended way if you want to develop a new site based on this Skeleton and do not plan to contribute to the original Skeleton or pull updates from it.</em></p>
<p>To create a new repository based on this Skeleton, click the <code>Use this template</code> button on the GitHub repository page. You will be prompted to enter a repository name and description. After that, you have a current copy of the Skeleton in your account. You can now clone the repository to your computer and start developing your site.</p>
<div class=\"notices blue\">
<p>See point 1.3 on how to clone the repository to your computer (with Grav)</p>
</div>
<h3 id=\"1-2-fork-repository\"><a href=\"#1-2-fork-repository\" class=\"toc-anchor before\" data-anchor-icon=\"#\" aria-label=\"Anchor\"></a>1.2 Fork repository</h3>
<p>By forking this repository, you create a linked copy of the original repository in your own GitHub account. This way you can make changes to the Skeleton and push them to your own repository. You can then create a new site by using your fork as a Skeleton.<br>
<em>This is the recommended way if you want to contribute to the original Skeleton or pull updates from it.</em></p>
<p>To fork the repository, click the <code>Fork</code> button on the GitHub repository page. You now have a copy of the Skeleton in your account. You can clone the repository to your computer and start developing your site.</p>
<div class=\"notices blue\">
<p>See point 1.3 on how to clone the repository to your computer (with Grav)</p>
</div>
<h3 id=\"1-3-clone-repository-dire\"><a href=\"#1-3-clone-repository-dire\" class=\"toc-anchor before\" data-anchor-icon=\"#\" aria-label=\"Anchor\"></a>1.3 Clone repository directly (not recommended)</h3>
<p>Cloning the repository directly creates a local copy of the Skeleton on your computer.<br>
<em>This is only recommended if you want to try out the Skeleton or make changes to it without contributing to the original repository or pulling updates from it. If you prefer to create a new site based on the Skeleton, use one of the methods mentioned above.</em></p>
<p>To clone the repository directly, use the following commands:</p>
<pre><code class=\"language-bash\">cd /your/site/
git clone https://github.com/getgrav/grav.git .
rm user/ -rf
git clone https://github.com/Crabston/grav-skeleton-hadron.git user
bin/grav install</code></pre>
<p>You can also use our <a href=\"https://github.com/Crabston/grav\" target=\"_blank\" rel=\"nofollow noopener noreferrer\" class=\"external-link no-image\">modified Grav Core</a> with additional features:</p>
<pre><code class=\"language-bash\">cd /your/site/
git clone https://github.com/Crabston/grav.git .
git clone https://github.com/Crabston/grav-skeleton-hadron.git user
bin/grav install</code></pre>
<h2 id=\"2-installation-zip\"><a href=\"#2-installation-zip\" class=\"toc-anchor before\" data-anchor-icon=\"#\" aria-label=\"Anchor\"></a>2. Installation (ZIP)</h2>
<p>If you don't want to use Git, you can download the Skeleton as a ZIP file and install it manually. There are two different versions of the Skeleton:</p>
<h3 id=\"2-1-with-dependencies\"><a href=\"#2-1-with-dependencies\" class=\"toc-anchor before\" data-anchor-icon=\"#\" aria-label=\"Anchor\"></a>2.1 with dependencies</h3>
<p>If you download the Skeleton with dependencies, you will receive a ZIP file containing the Grav Core, plugins, and themes required to run the Skeleton. This is the easiest way to get started with the Skeleton, as you have everything you need to run it.</p>
<p>To download the Skeleton with dependencies, go to the <a href=\"https://github.com/Crabston/grav-demo/releases\" target=\"_blank\" rel=\"nofollow noopener noreferrer\" class=\"external-link no-image\">Releases page</a> and download the latest version. You can then extract the file into the root directory of your server.</p>
<h3 id=\"2-2-manually-not-recommen\"><a href=\"#2-2-manually-not-recommen\" class=\"toc-anchor before\" data-anchor-icon=\"#\" aria-label=\"Anchor\"></a>2.2 manually (not recommended)</h3>
<p>To install this package manually, you basically replace the standard <code>user</code> folder with the Skeleton. To do this, download the ZIP version of this repository and extract it to <code>/your/site/grav/</code>. Then rename the folder to <code>user</code>.</p>
<p>If there is already a <code>user</code> folder, back it up to a safe location, delete it (if there are no custom contents you want to keep), or replace its contents with the files in the extracted folder.</p>
<p>You should now have all Skeleton files under <code>/your/site/grav/user/</code>.</p>
<div class=\"notices blue\">
<p>This Skeleton is a modular component for Grav that requires <a href=\"http://github.com/getgrav/grav\" target=\"_blank\" rel=\"nofollow noopener noreferrer\" class=\"external-link no-image\">Grav</a>, multiple plugins, and themes to function. If you download this Skeleton as part of a pre-packaged bundle from <a href=\"http://getgrav.org/downloads/skeletons#extras\" target=\"_blank\" rel=\"nofollow noopener noreferrer\" class=\"external-link no-image\">GetGrav.org</a> or <a href=\"https://github.com/Crabston/grav-demo/releases\" target=\"_blank\" rel=\"nofollow noopener noreferrer\" class=\"external-link no-image\">GitHub Releases</a>, you should have everything you need to get started.</p>
</div>
<h2 id=\"next-steps\"><a href=\"#next-steps\" class=\"toc-anchor before\" data-anchor-icon=\"#\" aria-label=\"Anchor\"></a>Next steps</h2>
<p>After installing the Skeleton, you can start developing/ editing your site.</p></body>";
    }

    public function getTemplateName()
    {
        return "@Page:C:/xampp/htdocs/grav/grav-skeleton-hadron+admin1/user/pages/06.docs/02.skeleton/02.installation";
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
        return new Source("", "@Page:C:/xampp/htdocs/grav/grav-skeleton-hadron+admin1/user/pages/06.docs/02.skeleton/02.installation", "");
    }
}
