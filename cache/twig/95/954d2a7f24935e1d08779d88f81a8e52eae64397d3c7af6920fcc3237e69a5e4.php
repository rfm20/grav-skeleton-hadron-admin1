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

/* @Page:C:/xampp/htdocs/grav/grav-skeleton-hadron+admin1/user/pages/06.docs/_notice */
class __TwigTemplate_235786078dc3e0e08187ec2b07072dcd47eccc6a6fd45c82a4221ef31d1998b8 extends \Twig\Template
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
    <div class=\"notices blue list-blog-header\">
        <div class=\"list-blog-padding\">
            <div class=\"listbullet\">
                <body><p><strong>Welcome to the Hadron Documentation!</strong></p>
<p>These are technical guides for Hadron, created for system administrators &amp; developers who want to use Hadron as a theme and skeleton for a website with Grav CMS.</p>
<p>The links to the repositories are as follows:</p>
<ul>
<li><a href=\"https://github.com/Crabston/grav-theme-hadron\" target=\"_blank\" rel=\"nofollow noopener noreferrer\" class=\"external-link no-image\">Hadron Theme</a></li>
<li><a href=\"https://github.com/Crabston/grav-skeleton-hadron\" target=\"_blank\" rel=\"nofollow noopener noreferrer\" class=\"external-link no-image\">Hadron Skeleton</a></li>
</ul></body>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "@Page:C:/xampp/htdocs/grav/grav-skeleton-hadron+admin1/user/pages/06.docs/_notice";
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
        return new Source("", "@Page:C:/xampp/htdocs/grav/grav-skeleton-hadron+admin1/user/pages/06.docs/_notice", "");
    }
}
