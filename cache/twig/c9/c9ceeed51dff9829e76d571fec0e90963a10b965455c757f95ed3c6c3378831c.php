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

/* @Page:C:/xampp/htdocs/grav/grav-skeleton-hadron+admin1/user/pages/03.examples/02.modular/05._features */
class __TwigTemplate_68b037c13a791f369eeb0198573f4717cea61f4e4a98a7ddf7647d86d32d62dd extends \Twig\Template
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
        echo "<section class=\"section modular-features standard\">
        <section class=\"container grid-lg\">
            <div class=\"frame-box\">

                <body><h2 id=\"features\"><a href=\"#features\" class=\"toc-anchor before\" data-anchor-icon=\"#\" aria-label=\"Anchor\"></a>Features</h2>
<p>This module is an example of using features. It can be used to showcase various functionalities or characteristics of an application or system.</p></body>

                <div class=\"columns\">
                                   <div class=\"column col-4 col-md-6 col-sm-12\">
                      <a href=\"#\">                      <div class=\"feature-icon\">
                         <i class=\"fa fa-fw fa fa-star-o\"></i>
                                                     <h6>Header for Icon with Link</h6>
                                               </div>
                      </a>                      <div class=\"feature-content\">
                                                  <p>This is a text that says something about this feature. Click the header</p>
                                               </div>
                   </div>
                                   <div class=\"column col-4 col-md-6 col-sm-12\">
                                            <div class=\"feature-icon\">
                         <i class=\"fa fa-fw fa fa-font\"></i>
                                                     <h6>No Text</h6>
                                               </div>
                                            <div class=\"feature-content\">
                                               </div>
                   </div>
                                   <div class=\"column col-4 col-md-6 col-sm-12\">
                                            <div class=\"feature-icon\">
                         <i class=\"fa fa-fw fa fa-bold\"></i>
                                               </div>
                                            <div class=\"feature-content\">
                                                  <p>No Title</p>
                                               </div>
                   </div>
                                </div>
            </div>
        </section>
</section>
";
    }

    public function getTemplateName()
    {
        return "@Page:C:/xampp/htdocs/grav/grav-skeleton-hadron+admin1/user/pages/03.examples/02.modular/05._features";
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
        return new Source("", "@Page:C:/xampp/htdocs/grav/grav-skeleton-hadron+admin1/user/pages/03.examples/02.modular/05._features", "");
    }
}
