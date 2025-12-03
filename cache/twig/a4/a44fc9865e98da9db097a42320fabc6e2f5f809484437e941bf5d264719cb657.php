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

/* partials/blog-list-item.html.twig */
class __TwigTemplate_8f7c5953cae84e96c59d333f2d81c0ebff00af3960fce8e4b7596968fab37b4d extends \Twig\Template
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
        if (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "hide_from_post_list", []) != true)) {
            // line 2
            echo "  <div class=\"card\">
      ";
            // line 4
            echo "      ";
            if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "header_image_file", [])) {
                // line 5
                echo "        ";
                $context["image"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "header_image_file", []), [], "array");
                // line 6
                echo "      ";
            } else {
                // line 7
                echo "        ";
                $context["image"] = twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", []));
                // line 8
                echo "      ";
            }
            // line 9
            echo "      ";
            if ((($context["image"] ?? null) && ( !$this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", [], "any", false, true), "header_image", [], "any", true, true) || $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "header_image", [])))) {
                // line 10
                echo "      <div class=\"card-image\">

        ";
                // line 13
                echo "          ";
                $context["image_alt_text"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "header_image_alt_text", []);
                // line 14
                echo "          ";
                if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "header_image_credit", [])) {
                    // line 15
                    echo "            ";
                    $context["image_credit"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "header_image_credit", []);
                    // line 16
                    echo "            ";
                    $context["image_creditlink"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "header_image_creditlink", []);
                    // line 17
                    echo "          ";
                } elseif ($this->getAttribute($this->getAttribute(($context["header_image_media"] ?? null), "meta", []), "header_image_credit", [])) {
                    // line 18
                    echo "            ";
                    $context["image_credit"] = $this->getAttribute($this->getAttribute(($context["header_image_media"] ?? null), "meta", []), "header_image_credit", []);
                    // line 19
                    echo "            ";
                    $context["image_creditlink"] = $this->getAttribute($this->getAttribute(($context["header_image_media"] ?? null), "meta", []), "header_image_creditlink", []);
                    // line 20
                    echo "            ";
                    $context["image_alt_text"] = $this->getAttribute($this->getAttribute(($context["header_image_media"] ?? null), "meta", []), "header_image_alt_text", []);
                    // line 21
                    echo "          ";
                }
                // line 22
                echo "          ";
                if (($context["image_credit"] ?? null)) {
                    // line 23
                    echo "            <div class=\"image-credit-wrapper\"><span class=\"image-credit\">
              ";
                    // line 24
                    if (($context["image_creditlink"] ?? null)) {
                        // line 25
                        echo "                Image: <a class=\"newwindow external-link\" href=\"";
                        echo twig_escape_filter($this->env, ($context["image_creditlink"] ?? null), "html", null, true);
                        echo "\">
                ";
                        // line 26
                        echo twig_escape_filter($this->env, ($context["image_credit"] ?? null), "html", null, true);
                        echo "</a></span>
                <a href=\"";
                        // line 27
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "url", []), "html", null, true);
                        echo "\"><img src=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["image"] ?? null), "cropZoom", [0 => 1400, 1 => 400], "method"), "url", []), "html", null, true);
                        echo "\" alt=\"";
                        echo twig_escape_filter($this->env, ($context["image_alt_text"] ?? null), "html", null, true);
                        echo "\"></a>
              ";
                    } else {
                        // line 29
                        echo "                Image: ";
                        echo twig_escape_filter($this->env, ($context["image_credit"] ?? null), "html", null, true);
                        echo "</span>
                <a href=\"";
                        // line 30
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "url", []), "html", null, true);
                        echo "\"><img src=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["image"] ?? null), "cropZoom", [0 => 1400, 1 => 400], "method"), "url", []), "html", null, true);
                        echo "\" alt=\"";
                        echo twig_escape_filter($this->env, ($context["image_alt_text"] ?? null), "html", null, true);
                        echo "\"></a>
              ";
                    }
                    // line 32
                    echo "            </div>
          ";
                } else {
                    // line 34
                    echo "            <a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "url", []), "html", null, true);
                    echo "\"><img src=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["image"] ?? null), "cropZoom", [0 => 1400, 1 => 400], "method"), "url", []), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, ($context["image_alt_text"] ?? null), "html", null, true);
                    echo "\"></a>
          ";
                }
                // line 36
                echo "
      </div>
      ";
            }
            // line 39
            echo "      <div class=\"card-header\">
          <div class=\"card-subtitle text-gray\">
              ";
            // line 41
            $this->loadTemplate("partials/blog/date.html.twig", "partials/blog-list-item.html.twig", 41)->display($context);
            // line 42
            echo "              ";
            if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "readingtime", []), "enabled", [])) {
                // line 43
                echo "                <span class=\"blogitem__readingtime\">";
                $this->loadTemplate("partials/blog/readingtime.html.twig", "partials/blog-list-item.html.twig", 43)->display($context);
                echo "</span>
              ";
            }
            // line 45
            echo "      </div>
          <div class=\"card-title\">
          ";
            // line 47
            $this->loadTemplate("partials/blog/title.html.twig", "partials/blog-list-item.html.twig", 47)->display(twig_array_merge($context, ["title_level" => "h5"]));
            // line 48
            echo "          </div>
      </div>
      <div class=\"card-body\">
          ";
            // line 51
            if (($this->getAttribute(($context["page"] ?? null), "summary", []) != $this->getAttribute(($context["page"] ?? null), "content", []))) {
                // line 52
                echo "              ";
                // line 53
                echo "              ";
                echo strip_tags($this->getAttribute(($context["page"] ?? null), "summary", []));
                echo "
              ";
                // line 54
                if (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "continue_link", []) === true)) {
                    // line 55
                    echo "                <a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "url", []), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "title", []), "html", null, true);
                    echo "\" class=\"btn btn-primary\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "THEME_QUARK.BLOG.ITEM.CONTINUE_READING"), "html", null, true);
                    echo "</a>
              ";
                }
                // line 57
                echo "          ";
            } else {
                // line 58
                echo "              ";
                echo $this->getAttribute(($context["page"] ?? null), "content", []);
                echo "
          ";
            }
            // line 60
            echo "      </div>
      <div class=\"card-footer\">
          ";
            // line 62
            $this->loadTemplate("partials/blog/taxonomy.html.twig", "partials/blog-list-item.html.twig", 62)->display($context);
            // line 63
            echo "      </div>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "partials/blog-list-item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 63,  203 => 62,  199 => 60,  193 => 58,  190 => 57,  180 => 55,  178 => 54,  173 => 53,  171 => 52,  169 => 51,  164 => 48,  162 => 47,  158 => 45,  152 => 43,  149 => 42,  147 => 41,  143 => 39,  138 => 36,  128 => 34,  124 => 32,  115 => 30,  110 => 29,  101 => 27,  97 => 26,  92 => 25,  90 => 24,  87 => 23,  84 => 22,  81 => 21,  78 => 20,  75 => 19,  72 => 18,  69 => 17,  66 => 16,  63 => 15,  60 => 14,  57 => 13,  53 => 10,  50 => 9,  47 => 8,  44 => 7,  41 => 6,  38 => 5,  35 => 4,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "partials/blog-list-item.html.twig", "C:\\xampp\\htdocs\\grav\\grav-skeleton-hadron+admin1\\user\\themes\\hadron\\templates\\partials\\blog-list-item.html.twig");
    }
}
