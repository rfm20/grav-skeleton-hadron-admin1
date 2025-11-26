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

/* h5p.html.twig */
class __TwigTemplate_a436045d4d245c99d97f724264f196d44fcaafed4b4081bb554372b3430e9436 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("partials/base.html.twig", "h5p.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        // line 4
        echo "    <section id=\"body-wrapper\" class=\"section cards\">
        <section class=\"container ";
        // line 5
        echo twig_escape_filter($this->env, ($context["grid_size"] ?? null), "html", null, true);
        echo "\">

            ";
        // line 7
        if (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", [], "any", false, true), "display_page_title", [], "any", true, true) &&  !array_key_exists("displaypagetitle", $context))) {
            // line 8
            echo "                ";
            $context["displaypagetitle"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "display_page_title", []);
            // line 9
            echo "            ";
        }
        // line 10
        echo "            ";
        if (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", [], "any", false, true), "display_h5p_content_title", [], "any", true, true) &&  !array_key_exists("displaycontenttitle", $context))) {
            // line 11
            echo "                ";
            $context["displaycontenttitle"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "display_h5p_content_title", []);
            // line 12
            echo "            ";
        }
        // line 13
        echo "            ";
        $this->displayBlock('content', $context, $blocks);
        // line 47
        echo "
        </section>
    </section>
";
    }

    // line 13
    public function block_content($context, array $blocks = [])
    {
        // line 14
        echo "                <div class=\"h5p-content-wrapper\">
                    <p>
                        ";
        // line 16
        echo $this->getAttribute(($context["page"] ?? null), "content", []);
        echo "
                        ";
        // line 17
        if (array_key_exists("displaypagetitle", $context)) {
            // line 18
            echo "                            ";
            if (($context["displaypagetitle"] ?? null)) {
                // line 19
                echo "                                <strong>";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "title", []), "html", null, true);
                echo "</strong><br>
                            ";
            }
            // line 21
            echo "                        ";
        }
        // line 22
        echo "                        ";
        if (array_key_exists("displaycontenttitle", $context)) {
            // line 23
            echo "                            ";
            if (($context["displaycontenttitle"] ?? null)) {
                // line 24
                echo "                                ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "h5p_content_title_title", []), "html", null, true);
                echo "
                            ";
            }
            // line 26
            echo "                        ";
        }
        // line 27
        echo "                        ";
        $context["h5pcontentid"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "h5p_content_id", []);
        // line 28
        echo "                        ";
        if ($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->containsFilter(($context["h5pcontentid"] ?? null), "http")) {
            // line 29
            echo "                            ";
            $context["h5pcontenturl"] = ($context["h5pcontentid"] ?? null);
            // line 30
            echo "                        ";
        } else {
            // line 31
            echo "                            ";
            if ($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "h5pembedrootpath")) {
                // line 32
                echo "                                ";
                $context["h5pembedrootpath"] = $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "h5pembedrootpath");
                // line 33
                echo "                            ";
            } else {
                // line 34
                echo "                                ";
                $context["h5pembedrootpath"] = "https://h5p.org/h5p/embed/";
                // line 35
                echo "                            ";
            }
            // line 36
            echo "                            ";
            if ($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->containsFilter(($context["h5pembedrootpath"] ?? null), "h5p.com")) {
                // line 37
                echo "                                ";
                $context["h5pcontenturl"] = ((($context["h5pembedrootpath"] ?? null) . ($context["h5pcontentid"] ?? null)) . "/embed");
                // line 38
                echo "                            ";
            } else {
                // line 39
                echo "                                ";
                $context["h5pcontenturl"] = (($context["h5pembedrootpath"] ?? null) . ($context["h5pcontentid"] ?? null));
                // line 40
                echo "                            ";
            }
            // line 41
            echo "                        ";
        }
        // line 42
        echo "                        <iframe src=\"";
        echo twig_escape_filter($this->env, ($context["h5pcontenturl"] ?? null), "html", null, true);
        echo "\" width=\"400\" height=\"300\" frameborder=\"0\" allowfullscreen=\"allowfullscreen\"></iframe>
                        <script src=\"https://h5p.org/sites/all/modules/h5p/library/js/h5p-resizer.js\" charset=\"UTF-8\"></script>
                    </p>
                </div>
            ";
    }

    public function getTemplateName()
    {
        return "h5p.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 42,  160 => 41,  157 => 40,  154 => 39,  151 => 38,  148 => 37,  145 => 36,  142 => 35,  139 => 34,  136 => 33,  133 => 32,  130 => 31,  127 => 30,  124 => 29,  121 => 28,  118 => 27,  115 => 26,  109 => 24,  106 => 23,  103 => 22,  100 => 21,  94 => 19,  91 => 18,  89 => 17,  85 => 16,  81 => 14,  78 => 13,  71 => 47,  68 => 13,  65 => 12,  62 => 11,  59 => 10,  56 => 9,  53 => 8,  51 => 7,  46 => 5,  43 => 4,  40 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "h5p.html.twig", "C:\\xampp\\htdocs\\grav\\grav-skeleton-hadron+admin1\\user\\themes\\hadron\\templates\\h5p.html.twig");
    }
}
