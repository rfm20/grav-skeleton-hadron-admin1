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

/* embedlycard.html.twig */
class __TwigTemplate_2eb4e3eb2a9ec6a555ebf90af70dacf3aa3a1b1a2c2fba5b99d61612527d1e79 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 2
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "published", [])) {
            // line 3
            if (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", [], "any", false, true), "display_page_title", [], "any", true, true) &&  !array_key_exists("displaypagetitle", $context))) {
                // line 4
                $context["displaypagetitle"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "display_page_title", []);
            }
            // line 6
            if (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", [], "any", false, true), "display_embedly_card_title", [], "any", true, true) &&  !array_key_exists("displaycontenttitle", $context))) {
                // line 7
                $context["displaycontenttitle"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "display_embedly_card_title", []);
            }
            // line 9
            if (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", [], "any", false, true), "display_page_title_link", [], "any", true, true) &&  !array_key_exists("displaypagetitlelink", $context))) {
                // line 10
                $context["displaypagetitlelink"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "display_page_title_link", []);
            }
            // line 12
            $this->displayBlock('content', $context, $blocks);
        }
    }

    public function block_content($context, array $blocks = [])
    {
        // line 13
        echo "<div class=\"embedly-card-wrapper\">
<p>
";
        // line 15
        echo $this->getAttribute(($context["page"] ?? null), "content", []);
        echo "
";
        // line 16
        if (array_key_exists("displaypagetitle", $context)) {
            // line 17
            if (($context["displaypagetitle"] ?? null)) {
                // line 18
                if (($context["displaypagetitlelink"] ?? null)) {
                    // line 19
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "embedly_card_url", []), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "title", []), "html", null, true);
                    echo "</a><br>
";
                } else {
                    // line 21
                    echo "<strong>";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "title", []), "html", null, true);
                    echo "</strong><br>
";
                }
            }
        }
        // line 25
        echo "<a class=\"embedly-card\" data-card-controls=\"0\" data-card-align=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "embedly_card_alignment", []), "html", null, true);
        echo "\" href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "embedly_card_url", []), "html", null, true);
        echo "\" >";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "embedly_card_title", []), "html", null, true);
        echo "</a>
<script async src=\"//cdn.embedly.com/widgets/platform.js\" charset=\"UTF-8\"></script>
</p>
</div>
";
    }

    public function getTemplateName()
    {
        return "embedlycard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 25,  77 => 21,  69 => 19,  67 => 18,  65 => 17,  63 => 16,  59 => 15,  55 => 13,  48 => 12,  45 => 10,  43 => 9,  40 => 7,  38 => 6,  35 => 4,  33 => 3,  31 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "embedlycard.html.twig", "C:\\xampp\\htdocs\\grav\\grav-skeleton-hadron+admin1\\user\\themes\\hadron\\templates\\embedlycard.html.twig");
    }
}
