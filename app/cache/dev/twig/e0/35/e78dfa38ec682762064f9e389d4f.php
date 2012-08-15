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
        return array (  34 => 11,  25 => 5,  17 => 1,  165 => 60,  162 => 59,  160 => 58,  157 => 57,  153 => 46,  150 => 45,  143 => 9,  140 => 8,  134 => 6,  127 => 62,  125 => 57,  113 => 47,  111 => 45,  107 => 43,  100 => 41,  95 => 40,  93 => 39,  88 => 37,  84 => 36,  77 => 34,  71 => 32,  63 => 30,  33 => 8,  21 => 1,  83 => 24,  80 => 35,  75 => 27,  70 => 22,  41 => 8,  31 => 4,  28 => 6,  96 => 33,  91 => 32,  87 => 31,  81 => 28,  73 => 23,  68 => 21,  61 => 29,  56 => 27,  52 => 17,  47 => 12,  43 => 17,  38 => 7,  35 => 11,  30 => 4,  27 => 3,);
    }
}
