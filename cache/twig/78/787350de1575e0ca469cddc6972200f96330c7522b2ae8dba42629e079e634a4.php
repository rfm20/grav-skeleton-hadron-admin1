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

/* sections.html.twig */
class __TwigTemplate_15770fb0b8f975014133ab9af6d0166e0d36a21a34cc98c959abe2645f84a07d extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
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
        // line 3
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "parent", [], "any", false, true), "parent", [], "any", false, true), "header", [], "any", false, true), "hide_next_prev_page_buttons", [], "any", true, true)) {
            // line 4
            $context["hide_next_prev_page_buttons"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "parent", []), "parent", []), "header", []), "hide_next_prev_page_buttons", []);
        } elseif ($this->getAttribute($this->getAttribute($this->getAttribute(        // line 5
($context["page"] ?? null), "parent", [], "any", false, true), "header", [], "any", false, true), "hide_next_prev_page_buttons", [], "any", true, true)) {
            // line 6
            $context["hide_next_prev_page_buttons"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "parent", []), "header", []), "hide_next_prev_page_buttons", []);
        }
        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "sections.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_content($context, array $blocks = [])
    {
        // line 10
        echo "
  ";
        // line 11
        $context["activetag"] = $this->getAttribute(($context["uri"] ?? null), "param", [0 => "filter"], "method");
        // line 12
        echo "
  <div class=\"columns\">

    <div id=\"sections-content\" class=\"column col-9 col-md-12\">

      ";
        // line 17
        if (( !$this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "hide_page_title", []) &&  !$this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", []), "param", [0 => "hidepagetitle"], "method"))) {
            // line 18
            echo "        <h3 class=\"sections-page-title-template\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "title", []), "html", null, true);
            echo "</h3>
      ";
        }
        // line 20
        echo "
      ";
        // line 21
        echo $this->getAttribute(($context["page"] ?? null), "content", []);
        echo "

      ";
        // line 23
        if ( !($context["hide_next_prev_page_buttons"] ?? null)) {
            // line 24
            echo "
        <p class=\"prev-next\">
          ";
            // line 26
            $context["siblings"] = $this->getAttribute(($context["page"] ?? null), "collection", [0 => ["items" => ["@page.children.visible" => $this->getAttribute($this->getAttribute(            // line 28
($context["page"] ?? null), "parent", []), "route", [])]]], "method");
            // line 31
            echo "          ";
            $context["children"] = $this->getAttribute(($context["page"] ?? null), "collection", [0 => ["items" => ["@page.children.visible" => $this->getAttribute(            // line 33
($context["page"] ?? null), "route", [])]]], "method");
            // line 36
            echo "
          ";
            // line 37
            if ( !($this->getAttribute(($context["page"] ?? null), "template", []) == "sections")) {
                // line 38
                echo "
            ";
                // line 39
                if ( !$this->getAttribute(($context["siblings"] ?? null), "isFirst", [0 => $this->getAttribute(($context["page"] ?? null), "path", [])], "method")) {
                    // line 40
                    echo "              ";
                    if ((twig_length_filter($this->env, ($context["children"] ?? null)) != 0)) {
                        // line 41
                        echo "                ";
                        if (twig_last($this->env, $this->getAttribute($this->getAttribute(($context["siblings"] ?? null), "nextSibling", [0 => $this->getAttribute(($context["page"] ?? null), "path", [])], "method"), "children", []))) {
                            // line 42
                            echo "                  <a class=\"btn btn-primary\" href=\"";
                            if (($context["activetag"] ?? null)) {
                                echo twig_escape_filter($this->env, (($this->getAttribute(twig_last($this->env, $this->getAttribute($this->getAttribute(($context["siblings"] ?? null), "nextSibling", [0 => $this->getAttribute(($context["page"] ?? null), "path", [])], "method"), "children", [])), "url", []) . "/filter:") . ($context["activetag"] ?? null)), "html", null, true);
                            } else {
                                echo twig_escape_filter($this->env, $this->getAttribute(twig_last($this->env, $this->getAttribute($this->getAttribute(($context["siblings"] ?? null), "nextSibling", [0 => $this->getAttribute(($context["page"] ?? null), "path", [])], "method"), "children", [])), "url", []), "html", null, true);
                            }
                            echo "\">
                    <i class=\"fa fa-chevron-left\"></i>
                    ";
                            // line 44
                            echo twig_escape_filter($this->env, $this->getAttribute(twig_last($this->env, $this->getAttribute($this->getAttribute(($context["siblings"] ?? null), "nextSibling", [0 => $this->getAttribute(($context["page"] ?? null), "path", [])], "method"), "children", [])), "menu", []), "html", null, true);
                            echo "
                  </a>
                ";
                        } else {
                            // line 47
                            echo "                  <a class=\"btn btn-primary\" href=\"";
                            if (($context["activetag"] ?? null)) {
                                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["siblings"] ?? null), "nextSibling", [0 => $this->getAttribute(($context["page"] ?? null), "path", [])], "method"), "url", []) . "/filter:") . ($context["activetag"] ?? null)), "html", null, true);
                            } else {
                                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["siblings"] ?? null), "nextSibling", [0 => $this->getAttribute(($context["page"] ?? null), "path", [])], "method"), "url", []), "html", null, true);
                            }
                            echo "\">
                    <i class=\"fa fa-chevron-left\"></i>
                    ";
                            // line 49
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["siblings"] ?? null), "nextSibling", [0 => $this->getAttribute(($context["page"] ?? null), "path", [])], "method"), "menu", []), "html", null, true);
                            echo "</a>
                ";
                        }
                        // line 51
                        echo "              ";
                    } else {
                        // line 52
                        echo "                ";
                        if ($this->getAttribute($this->getAttribute(($context["siblings"] ?? null), "nextSibling", [0 => $this->getAttribute(($context["page"] ?? null), "path", [])], "method"), "url", [])) {
                            // line 53
                            echo "                  <a class=\"btn btn-primary\" href=\"";
                            if (($context["activetag"] ?? null)) {
                                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["siblings"] ?? null), "nextSibling", [0 => $this->getAttribute(($context["page"] ?? null), "path", [])], "method"), "url", []) . "/filter:") . ($context["activetag"] ?? null)), "html", null, true);
                            } else {
                                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["siblings"] ?? null), "nextSibling", [0 => $this->getAttribute(($context["page"] ?? null), "path", [])], "method"), "url", []), "html", null, true);
                            }
                            echo "\">
                    <i class=\"fa fa-chevron-left\"></i>
                    ";
                            // line 55
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["siblings"] ?? null), "nextSibling", [0 => $this->getAttribute(($context["page"] ?? null), "path", [])], "method"), "menu", []), "html", null, true);
                            echo "</a>
                ";
                        }
                        // line 57
                        echo "              ";
                    }
                    // line 58
                    echo "            ";
                } else {
                    // line 59
                    echo "              ";
                    if ( !($this->getAttribute($this->getAttribute(($context["page"] ?? null), "parent", []), "template", []) == "sections")) {
                        // line 60
                        echo "                <a class=\"btn btn-primary\" href=\"";
                        if (($context["activetag"] ?? null)) {
                            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "parent", []), "url", []) . "/filter:") . ($context["activetag"] ?? null)), "html", null, true);
                        } else {
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "parent", []), "url", []), "html", null, true);
                        }
                        echo "\">
                  <i class=\"fa fa-chevron-left\"></i>
                  ";
                        // line 62
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "parent", []), "menu", []), "html", null, true);
                        echo "</a>
              ";
                    }
                    // line 64
                    echo "            ";
                }
                // line 65
                echo "
            ";
                // line 66
                if ( !$this->getAttribute(($context["siblings"] ?? null), "isLast", [0 => $this->getAttribute(($context["page"] ?? null), "path", [])], "method")) {
                    // line 67
                    echo "              ";
                    if ((twig_length_filter($this->env, ($context["children"] ?? null)) == 0)) {
                        // line 68
                        echo "                ";
                        if ($this->getAttribute($this->getAttribute(($context["siblings"] ?? null), "prevSibling", [0 => $this->getAttribute(($context["page"] ?? null), "path", [])], "method"), "url", [])) {
                            // line 69
                            echo "                  <a class=\"btn btn-primary\" href=\"";
                            if (($context["activetag"] ?? null)) {
                                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["siblings"] ?? null), "prevSibling", [0 => $this->getAttribute(($context["page"] ?? null), "path", [])], "method"), "url", []) . "/filter:") . ($context["activetag"] ?? null)), "html", null, true);
                            } else {
                                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["siblings"] ?? null), "prevSibling", [0 => $this->getAttribute(($context["page"] ?? null), "path", [])], "method"), "url", []), "html", null, true);
                            }
                            echo "\">";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["siblings"] ?? null), "prevSibling", [0 => $this->getAttribute(($context["page"] ?? null), "path", [])], "method"), "menu", []), "html", null, true);
                            echo "
                    <i class=\"fa fa-chevron-right\"></i>
                  </a>
                ";
                        }
                        // line 73
                        echo "              ";
                    } else {
                        // line 74
                        echo "                <a class=\"btn btn-primary\" href=\"";
                        if (($context["activetag"] ?? null)) {
                            echo twig_escape_filter($this->env, (($this->getAttribute(twig_first($this->env, $this->getAttribute(($context["page"] ?? null), "children", [])), "url", []) . "/filter:") . ($context["activetag"] ?? null)), "html", null, true);
                        } else {
                            echo twig_escape_filter($this->env, $this->getAttribute(twig_first($this->env, $this->getAttribute(($context["page"] ?? null), "children", [])), "url", []), "html", null, true);
                        }
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute(twig_first($this->env, $this->getAttribute(($context["page"] ?? null), "children", [])), "menu", []), "html", null, true);
                        echo "
                  <i class=\"fa fa-chevron-right\"></i>
                </a>
              ";
                    }
                    // line 78
                    echo "            ";
                } else {
                    // line 79
                    echo "              ";
                    if ( !($this->getAttribute($this->getAttribute(($context["page"] ?? null), "parent", []), "template", []) == "sections")) {
                        // line 80
                        echo "                ";
                        $context["siblings"] = $this->getAttribute(($context["page"] ?? null), "collection", [0 => ["items" => ["@page.children.visible" => $this->getAttribute($this->getAttribute($this->getAttribute(                        // line 82
($context["page"] ?? null), "parent", []), "parent", []), "route", [])]]], "method");
                        // line 85
                        echo "                ";
                        if ( !$this->getAttribute(($context["siblings"] ?? null), "isLast", [0 => $this->getAttribute($this->getAttribute(($context["page"] ?? null), "parent", []), "path", [])], "method")) {
                            // line 86
                            echo "                  <a class=\"btn btn-primary\" href=\"";
                            if (($context["activetag"] ?? null)) {
                                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["siblings"] ?? null), "prevSibling", [0 => $this->getAttribute($this->getAttribute(($context["page"] ?? null), "parent", []), "path", [])], "method"), "url", []) . "/filter:") . ($context["activetag"] ?? null)), "html", null, true);
                            } else {
                                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["siblings"] ?? null), "prevSibling", [0 => $this->getAttribute($this->getAttribute(($context["page"] ?? null), "parent", []), "path", [])], "method"), "url", []), "html", null, true);
                            }
                            echo "\">";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["siblings"] ?? null), "prevSibling", [0 => $this->getAttribute($this->getAttribute(($context["page"] ?? null), "parent", []), "path", [])], "method"), "menu", []), "html", null, true);
                            echo "
                    <i class=\"fa fa-chevron-right\"></i>
                  </a>
                ";
                        }
                        // line 90
                        echo "              ";
                    } else {
                        // line 91
                        echo "                ";
                        if (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "children", []), "count", []) != 0)) {
                            // line 92
                            echo "                  <a class=\"btn btn-primary\" href=\"";
                            if (($context["activetag"] ?? null)) {
                                echo twig_escape_filter($this->env, (($this->getAttribute(twig_first($this->env, $this->getAttribute(($context["page"] ?? null), "children", [])), "url", []) . "/filter:") . ($context["activetag"] ?? null)), "html", null, true);
                            } else {
                                echo twig_escape_filter($this->env, $this->getAttribute(twig_first($this->env, $this->getAttribute(($context["page"] ?? null), "children", [])), "url", []), "html", null, true);
                            }
                            echo "\">";
                            echo twig_escape_filter($this->env, $this->getAttribute(twig_first($this->env, $this->getAttribute(($context["page"] ?? null), "children", [])), "menu", []), "html", null, true);
                            echo "
                    <i class=\"fa fa-chevron-right\"></i>
                  </a>
                ";
                        }
                        // line 96
                        echo "              ";
                    }
                    // line 97
                    echo "            ";
                }
                // line 98
                echo "
          ";
            }
            // line 100
            echo "
        ";
        }
        // line 102
        echo "        </p>
      </div>

      <div id=\"sections-nav\" class=\"column col-3 col-md-12\">

        <ul class=\"nav\">

          ";
        // line 109
        $context["collection"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "collection", []), "visible", [], "method");
        // line 110
        echo "
          ";
        // line 111
        if (twig_test_empty(($context["collection"] ?? null))) {
            // line 112
            echo "            ";
            $context["collection"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "parent", []), "collection", []), "visible", [], "method");
            // line 113
            echo "            ";
            if (twig_test_empty(($context["collection"] ?? null))) {
                // line 114
                echo "              ";
                $context["collection"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "parent", []), "parent", []), "collection", []), "visible", [], "method");
                // line 115
                echo "            ";
            }
            // line 116
            echo "          ";
        }
        // line 117
        echo "
          ";
        // line 118
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["collection"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 119
            echo "
            ";
            // line 120
            $context["current_parent"] = (($this->getAttribute($context["p"], "active", [])) ? ("active") : (""));
            // line 123
            echo "            <li class=\"nav-item  ";
            echo twig_escape_filter($this->env, ($context["current_parent"] ?? null), "html", null, true);
            echo "\">
              <a href=\"";
            // line 124
            if (($context["activetag"] ?? null)) {
                echo twig_escape_filter($this->env, (($this->getAttribute($context["p"], "url", []) . "/filter:") . ($context["activetag"] ?? null)), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "url", []), "html", null, true);
            }
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "menu", []), "html", null, true);
            echo "</a>
            </li>

            ";
            // line 127
            if (($this->getAttribute($this->getAttribute($this->getAttribute($context["p"], "children", []), "visible", []), "count", []) != 0)) {
                // line 128
                echo "
              ";
                // line 129
                if (($this->getAttribute($context["p"], "active", []) || ($this->getAttribute($context["p"], "slug", []) == $this->getAttribute($this->getAttribute(($context["page"] ?? null), "parent", []), "slug", [])))) {
                    // line 130
                    echo "                <ul class=\"nav\">
                  ";
                    // line 131
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["p"], "children", []), "visible", []));
                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                        // line 132
                        echo "                    ";
                        $context["current_child"] = (($this->getAttribute($context["child"], "active", [])) ? ("active") : (""));
                        // line 135
                        echo "                    ";
                        if (($context["activetag"] ?? null)) {
                            // line 136
                            echo "                      ";
                            if (twig_in_filter(($context["activetag"] ?? null), $this->getAttribute($this->getAttribute($context["child"], "taxonomy", []), "filter", [], "array"))) {
                                // line 137
                                echo "                        <li class=\"nav-item ";
                                echo twig_escape_filter($this->env, ($context["current_child"] ?? null), "html", null, true);
                                echo "\">
                          <a href=\"";
                                // line 138
                                if (($context["activetag"] ?? null)) {
                                    echo twig_escape_filter($this->env, (($this->getAttribute($context["child"], "url", []) . "/filter:") . ($context["activetag"] ?? null)), "html", null, true);
                                } else {
                                    echo twig_escape_filter($this->env, $this->getAttribute($context["child"], "url", []), "html", null, true);
                                }
                                echo "\">";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["child"], "menu", []), "html", null, true);
                                echo "</a>
                        </li>
                      ";
                            }
                            // line 141
                            echo "                    ";
                        } else {
                            // line 142
                            echo "                      <li class=\"nav-item ";
                            echo twig_escape_filter($this->env, ($context["current_child"] ?? null), "html", null, true);
                            echo "\">
                        <a href=\"";
                            // line 143
                            if (($context["activetag"] ?? null)) {
                                echo twig_escape_filter($this->env, (($this->getAttribute($context["child"], "url", []) . "/filter:") . ($context["activetag"] ?? null)), "html", null, true);
                            } else {
                                echo twig_escape_filter($this->env, $this->getAttribute($context["child"], "url", []), "html", null, true);
                            }
                            echo "\">";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["child"], "menu", []), "html", null, true);
                            echo "</a>
                      </li>
                    ";
                        }
                        // line 146
                        echo "                  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 147
                    echo "                </ul>
              ";
                }
                // line 149
                echo "
            ";
            }
            // line 151
            echo "
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 153
        echo "
      </ul>

    </div>

  </div>

";
    }

    public function getTemplateName()
    {
        return "sections.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  432 => 153,  425 => 151,  421 => 149,  417 => 147,  411 => 146,  399 => 143,  394 => 142,  391 => 141,  379 => 138,  374 => 137,  371 => 136,  368 => 135,  365 => 132,  361 => 131,  358 => 130,  356 => 129,  353 => 128,  351 => 127,  339 => 124,  334 => 123,  332 => 120,  329 => 119,  325 => 118,  322 => 117,  319 => 116,  316 => 115,  313 => 114,  310 => 113,  307 => 112,  305 => 111,  302 => 110,  300 => 109,  291 => 102,  287 => 100,  283 => 98,  280 => 97,  277 => 96,  263 => 92,  260 => 91,  257 => 90,  243 => 86,  240 => 85,  238 => 82,  236 => 80,  233 => 79,  230 => 78,  216 => 74,  213 => 73,  199 => 69,  196 => 68,  193 => 67,  191 => 66,  188 => 65,  185 => 64,  180 => 62,  170 => 60,  167 => 59,  164 => 58,  161 => 57,  156 => 55,  146 => 53,  143 => 52,  140 => 51,  135 => 49,  125 => 47,  119 => 44,  109 => 42,  106 => 41,  103 => 40,  101 => 39,  98 => 38,  96 => 37,  93 => 36,  91 => 33,  89 => 31,  87 => 28,  86 => 26,  82 => 24,  80 => 23,  75 => 21,  72 => 20,  66 => 18,  64 => 17,  57 => 12,  55 => 11,  52 => 10,  49 => 9,  44 => 1,  41 => 6,  39 => 5,  37 => 4,  35 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "sections.html.twig", "C:\\xampp\\htdocs\\grav\\grav-skeleton-hadron+admin1\\user\\themes\\hadron\\templates\\sections.html.twig");
    }
}
