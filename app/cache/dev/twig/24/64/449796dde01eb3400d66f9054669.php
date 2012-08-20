<?php

/* TwigBundle:Exception:logs.html.twig */
class __TwigTemplate_2464449796dde01eb3400d66f9054669 extends Twig_Template
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
        echo "<ol class=\"traces logs\">
    ";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "logs"));
        foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
            // line 3
            echo "        <li";
            if (twig_in_filter($this->getAttribute($this->getContext($context, "log"), "priorityName"), array(0 => "EMERG", 1 => "ERR", 2 => "CRIT", 3 => "ALERT", 4 => "ERROR", 5 => "CRITICAL"))) {
                echo " class=\"error\"";
            }
            echo ">
            ";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "log"), "message"), "html", null, true);
            echo "
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 7
        echo "</ol>
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:logs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 20,  72 => 16,  64 => 15,  55 => 14,  53 => 13,  42 => 10,  34 => 7,  23 => 4,  104 => 24,  97 => 22,  82 => 19,  78 => 17,  67 => 12,  49 => 12,  25 => 4,  22 => 3,  20 => 2,  224 => 96,  215 => 90,  211 => 88,  204 => 84,  200 => 83,  195 => 80,  193 => 79,  190 => 78,  188 => 77,  185 => 76,  179 => 72,  177 => 71,  171 => 67,  162 => 63,  158 => 61,  156 => 60,  153 => 59,  146 => 55,  142 => 54,  137 => 51,  135 => 50,  126 => 46,  120 => 45,  113 => 43,  103 => 36,  99 => 34,  94 => 31,  74 => 27,  62 => 24,  59 => 23,  47 => 19,  39 => 9,  32 => 11,  17 => 1,  92 => 20,  86 => 6,  79 => 40,  57 => 9,  46 => 14,  29 => 5,  24 => 3,  19 => 2,  44 => 11,  169 => 63,  166 => 62,  164 => 61,  161 => 60,  157 => 49,  154 => 48,  147 => 9,  144 => 8,  138 => 6,  131 => 48,  129 => 47,  117 => 44,  115 => 48,  111 => 46,  106 => 44,  100 => 41,  95 => 21,  93 => 39,  88 => 19,  84 => 36,  77 => 28,  71 => 14,  63 => 30,  43 => 17,  35 => 11,  33 => 7,  21 => 1,  83 => 24,  80 => 35,  75 => 16,  73 => 23,  70 => 26,  61 => 29,  56 => 27,  52 => 17,  41 => 7,  38 => 6,  31 => 4,  28 => 6,  45 => 11,  40 => 7,  37 => 8,  30 => 4,  27 => 3,);
    }
}
