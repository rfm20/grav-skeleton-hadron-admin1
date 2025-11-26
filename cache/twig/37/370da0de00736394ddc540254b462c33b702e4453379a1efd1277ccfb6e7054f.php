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

/* partials/snipcart_base.html.twig */
class __TwigTemplate_456ffb1146b17f4335b2eb1209f7c11b687ada8c47c511cc9031fd3894e3f7fc extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'javascripts' => [$this, 'block_javascripts'],
            'header_extra' => [$this, 'block_header_extra'],
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
        $context["snipcart_config_js"] = (((((((((("
    window.SnipcartSettings = {
        loadStrategy: 'on-user-interaction',
        publicApiKey: '" . $this->getAttribute($this->getAttribute(        // line 6
($context["header"] ?? null), "snipcart", []), "api_key", [])) . "',
        version: '") . $this->getAttribute($this->getAttribute(        // line 7
($context["header"] ?? null), "snipcart", []), "version", [])) . "',
        loadCSS: ") . $this->getAttribute($this->getAttribute(        // line 8
($context["header"] ?? null), "snipcart", []), "built_in_css", [])) . ",
        currency: '") . $this->getAttribute($this->getAttribute(        // line 9
($context["header"] ?? null), "snipcart", []), "default_currency", [])) . "',
        modalStyle: '") . $this->getAttribute($this->getAttribute(        // line 10
($context["header"] ?? null), "snipcart", []), "modal_style", [])) . "',
    };
");
        // line 13
        $context["snipcart_source_js"] = "(function(){var c,d;(d=(c=window.SnipcartSettings).version)||(c.version='3.0');var s,S;(S=(s=window.SnipcartSettings).timeoutDuration)!=null||(s.timeoutDuration=2750);var l,p;(p=(l=window.SnipcartSettings).domain)!=null||(l.domain='cdn.snipcart.com');var w,u;(u=(w=window.SnipcartSettings).protocol)!=null||(w.protocol='https');var m,g;(g=(m=window.SnipcartSettings).loadCSS)!=null||(m.loadCSS=!0);var y=window.SnipcartSettings.version.includes('v3.0.0-ci')||window.SnipcartSettings.version!='3.0'&&window.SnipcartSettings.version.localeCompare('3.4.0',void 0,{numeric:!0,sensitivity:'base'})===-1,f=['focus','mouseover','touchmove','scroll','keydown'];window.LoadSnipcart=o;document.readyState==='loading'?document.addEventListener('DOMContentLoaded',r):r();function r(){window.SnipcartSettings.loadStrategy?window.SnipcartSettings.loadStrategy==='on-user-interaction'&&(f.forEach(function(t){return document.addEventListener(t,o)}),setTimeout(o,window.SnipcartSettings.timeoutDuration)):o()}var a=!1;function o(){if(a)return;a=!0;let t=document.getElementsByTagName('head')[0],n=document.querySelector('#snipcart'),i=document.querySelector(\"src[src^='\".concat(window.SnipcartSettings.protocol,'://').concat(window.SnipcartSettings.domain,\"'][src\$='snipcart.js']\")),e=document.querySelector(\"link[href^='\".concat(window.SnipcartSettings.protocol,'://').concat(window.SnipcartSettings.domain,\"'][href\$='snipcart.css']\"));n||(n=document.createElement('div'),n.id='snipcart',n.setAttribute('hidden','true'),document.body.appendChild(n)),h(n),i||(i=document.createElement('script'),i.src=''.concat(window.SnipcartSettings.protocol,'://').concat(window.SnipcartSettings.domain,'/themes/v').concat(window.SnipcartSettings.version,'/default/snipcart.js'),i.async=!0,t.appendChild(i)),!e&&window.SnipcartSettings.loadCSS&&(e=document.createElement('link'),e.rel='stylesheet',e.type='text/css',e.href=''.concat(window.SnipcartSettings.protocol,'://').concat(window.SnipcartSettings.domain,'/themes/v').concat(window.SnipcartSettings.version,'/default/snipcart.css'),t.prepend(e)),f.forEach(function(v){return document.removeEventListener(v,o)})}function h(t){!y||(t.dataset.apiKey=window.SnipcartSettings.publicApiKey,window.SnipcartSettings.addProductBehavior&&(t.dataset.configAddProductBehavior=window.SnipcartSettings.addProductBehavior),window.SnipcartSettings.modalStyle&&(t.dataset.configModalStyle=window.SnipcartSettings.modalStyle),window.SnipcartSettings.currency&&(t.dataset.currency=window.SnipcartSettings.currency),window.SnipcartSettings.templatesUrl&&(t.dataset.templatesUrl=window.SnipcartSettings.templatesUrl))}})();";
        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "partials/snipcart_base.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_javascripts($context, array $blocks = [])
    {
        // line 16
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
        // line 17
        $this->getAttribute(($context["assets"] ?? null), "addInlineJs", [0 => (($context["snipcart_config_js"] ?? null) . ($context["snipcart_source_js"] ?? null)), 1 => ["group" => "bottom", "loading" => "defer"]], "method");
    }

    // line 20
    public function block_header_extra($context, array $blocks = [])
    {
        // line 21
        echo "    ";
        $this->loadTemplate("partials/snipcart_cart.html.twig", "partials/snipcart_base.html.twig", 21)->display($context);
    }

    // line 24
    public function block_content($context, array $blocks = [])
    {
        // line 25
        echo "    ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "breadcrumbs", []), "enabled", [])) {
            // line 26
            echo "        ";
            $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = null;
            try {
                $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 =                 $this->loadTemplate("partials/breadcrumbs.html.twig", "partials/snipcart_base.html.twig", 26);
            } catch (LoaderError $e) {
                // ignore missing template
            }
            if ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) {
                $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4->display($context);
            }
            // line 27
            echo "    ";
        }
    }

    public function getTemplateName()
    {
        return "partials/snipcart_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 27,  86 => 26,  83 => 25,  80 => 24,  75 => 21,  72 => 20,  68 => 17,  63 => 16,  60 => 15,  55 => 1,  53 => 13,  49 => 10,  47 => 9,  45 => 8,  43 => 7,  41 => 6,  37 => 3,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "partials/snipcart_base.html.twig", "C:\\xampp\\htdocs\\grav\\grav-skeleton-hadron+admin1\\user\\plugins\\snipcart\\templates\\partials\\snipcart_base.html.twig");
    }
}
