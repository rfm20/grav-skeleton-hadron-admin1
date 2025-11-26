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

/* @Page:C:/xampp/htdocs/grav/grav-skeleton-hadron+admin1/user/pages/06.docs/01.theme/04.customization */
class __TwigTemplate_e6d1f242719459597effe4e3f178a86a246e8222c8dad5b47c274f49bd23103d extends \Twig\Template
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
<p>This tutorial shows you how to customize the Hadron theme. By customizing the theme, you do more than just changing some options: You change the look and feel of your website by editing the theme's source code (CSS/ SCSS, JavaScript, Twig).</p>
</div>
<p>===</p>
<div class=\"notices yellow\">
<p>Since you may edit CSS/ SCSS, JavaScript, and Twig files, it is recommended to have some knowledge of these languages. If you are not familiar with them, you can still customize the theme by changing the theme options in the Admin Panel. See the <a href=\"/grav/grav-skeleton-hadron+admin1/en/hadron/theme/options\">Hadron Theme Options</a> for more information.</p>
</div>
<h2 id=\"variants-to-customize-the\"><a href=\"#variants-to-customize-the\" class=\"toc-anchor before\" data-anchor-icon=\"#\" aria-label=\"Anchor\"></a>Variants to customize the theme</h2>
<p>In Grav, there are multiple ways to customize a theme (see <a href=\"https://learn.getgrav.org/17/themes/customization\" target=\"_blank\" rel=\"nofollow noopener noreferrer\" class=\"external-link no-image\">Grav Docs</a> for further info). Basically, there are two ways to customize the Hadron theme:</p>
<ol>
<li>Directly edit the theme's source code <em>(not recommended)</em>: You can edit the full source code of a theme directly. Although this is the easiest way to customize a theme, it is not recommended because you will lose your changes when you update the theme.</li>
<li>Use a child/ inherited theme <em>(recommended)</em>: You can create a child theme that inherits from the Hadron theme. This way, you can customize the theme without losing your changes when you update the theme. (Hadron itself is a child theme of Quark.)</li>
</ol>
<h2 id=\"hadron-skeleton\"><a href=\"#hadron-skeleton\" class=\"toc-anchor before\" data-anchor-icon=\"#\" aria-label=\"Anchor\"></a>Hadron Skeleton</h2>
<p>The easiest way to customize the Hadron theme is to use the <a href=\"https://github.com/Crabston/grav-skeleton-hadron\" target=\"_blank\" rel=\"nofollow noopener noreferrer\" class=\"external-link no-image\">Hadron Skeleton</a>. The Hadron Skeleton is a pre-configured Grav package that includes the Hadron theme and some demo content.</p>
<p>The Hadron Skeleton also includes a 3rd theme called «Local», which basically is what it sounds like: a local theme, directly in the skeleton, ready to be customized. This way, you can customize the theme without losing your changes when you update the theme.</p>
<h2 id=\"other-ways\"><a href=\"#other-ways\" class=\"toc-anchor before\" data-anchor-icon=\"#\" aria-label=\"Anchor\"></a>other ways</h2>
<p>If you rather not use the Hadron Skeleton, you can also create a child theme manually. For more information, see the <a href=\"https://learn.getgrav.org/17/themes/customization#theme-inheritance\" target=\"_blank\" rel=\"nofollow noopener noreferrer\" class=\"external-link no-image\">Grav Docs</a>. This is useful if you already habe a Grav installation and want to add the Hadron theme to it. But if you want to create a new website with Grav + Hadron, the skeleton might be the better choice.</p>
<p>Nevertheless, it can be useful to take over some of the Local Theme to facilitate the customizations. You can find the code in the <a href=\"https://github.com/Crabston/grav-skeleton-hadron/tree/main/themes/local\" target=\"_blank\" rel=\"nofollow noopener noreferrer\" class=\"external-link no-image\">Hadron Skeleton on GitHub under <code>themes/local</code></a>.</p>";
    }

    public function getTemplateName()
    {
        return "@Page:C:/xampp/htdocs/grav/grav-skeleton-hadron+admin1/user/pages/06.docs/01.theme/04.customization";
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
        return new Source("", "@Page:C:/xampp/htdocs/grav/grav-skeleton-hadron+admin1/user/pages/06.docs/01.theme/04.customization", "");
    }
}
