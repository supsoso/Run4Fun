<?php

/* WebProfilerBundle:Profiler:toolbar_js.html.twig */
class __TwigTemplate_e035e78dfa38ec682762064f9e389d4f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div id=\"sfwdt";
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "\" style=\"display: none\"></div>
<script type=\"text/javascript\">/*<![CDATA[*/
    (function () {
        var wdt, xhr;
        wdt = document.getElementById('sfwdt";
        // line 5
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "');
        if (window.XMLHttpRequest) {
            xhr = new XMLHttpRequest();
        } else {
            xhr = new ActiveXObject('Microsoft.XMLHTTP');
        }
        xhr.open('GET', '";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_wdt", array("token" => $this->getContext($context, "token"))), "html", null, true);
        echo "', true);
        xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
        xhr.onreadystatechange = function(state) {
            if (4 === xhr.readyState && 200 === xhr.status && -1 !== xhr.responseText.indexOf('sf-toolbarreset')) {
                wdt.innerHTML = xhr.responseText;
                wdt.style.display = 'block';
            }
        };
        xhr.send('');
    })();
/*]]>*/</script>
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_js.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 11,  25 => 5,  44 => 8,  48 => 10,  46 => 9,  41 => 7,  24 => 3,  20 => 2,  17 => 1,  69 => 12,  64 => 11,  60 => 7,  57 => 6,  51 => 5,  45 => 13,  33 => 5,  31 => 6,  21 => 1,  176 => 49,  173 => 48,  168 => 65,  159 => 62,  154 => 61,  150 => 60,  138 => 50,  136 => 48,  132 => 46,  127 => 44,  119 => 41,  114 => 40,  112 => 39,  107 => 37,  103 => 36,  99 => 35,  96 => 34,  90 => 32,  82 => 30,  80 => 29,  75 => 27,  62 => 17,  56 => 13,  53 => 12,  42 => 12,  39 => 7,  32 => 4,  29 => 4,  49 => 14,  47 => 9,  40 => 11,  37 => 6,  30 => 4,  27 => 4,);
    }
}
