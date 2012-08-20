<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_b37698b1323dd548ca3e46ad4e75e0bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TwigBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "exception"), "message"), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, $this->getContext($context, "status_code"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getContext($context, "status_text"), "html", null, true);
        echo ")
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        $this->env->loadTemplate("TwigBundle:Exception:exception.html.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 8,  169 => 63,  166 => 62,  164 => 61,  161 => 60,  157 => 49,  154 => 48,  147 => 9,  144 => 8,  138 => 6,  131 => 65,  129 => 60,  117 => 50,  115 => 48,  111 => 46,  106 => 44,  100 => 41,  95 => 40,  93 => 39,  88 => 37,  84 => 36,  77 => 34,  71 => 32,  63 => 30,  43 => 17,  35 => 11,  33 => 8,  21 => 1,  83 => 24,  80 => 35,  75 => 27,  73 => 23,  70 => 22,  61 => 29,  56 => 27,  52 => 17,  41 => 7,  38 => 7,  31 => 4,  28 => 6,  45 => 11,  40 => 8,  37 => 7,  30 => 4,  27 => 3,);
    }
}
