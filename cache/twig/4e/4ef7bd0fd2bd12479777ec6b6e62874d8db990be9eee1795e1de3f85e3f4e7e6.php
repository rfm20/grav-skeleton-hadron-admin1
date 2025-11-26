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

/* @Page:C:/xampp/htdocs/grav/grav-skeleton-hadron+admin1/user/pages/03.examples/04.blog/_message */
class __TwigTemplate_21251894bcc617cf1f73ddd9f02a32f0ecd0ba5c7803665fb2d49455becda0c5 extends \Twig\Template
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
                <body><p><strong>This is a message</strong></p>
<p>This is a message that is displayed on the blog page. It can be used to make important information or announcements. The message can be displayed in different colors to highlight it.</p>
<p>This element can have various formatting options, such as <strong>bold</strong>, <em>italic</em>, <a href=\"#\">links</a>, images, quotes, and much more.</p></body>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "@Page:C:/xampp/htdocs/grav/grav-skeleton-hadron+admin1/user/pages/03.examples/04.blog/_message";
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
        return new Source("", "@Page:C:/xampp/htdocs/grav/grav-skeleton-hadron+admin1/user/pages/03.examples/04.blog/_message", "");
    }
}
