<?php

/* r4fUserBundle:User:index.html.twig */
class __TwigTemplate_4f3b285dbf92710d63827bd942654fd2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("r4fUserBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'r4fUser_body' => array($this, 'block_r4fUser_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "r4fUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "\tAccueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_r4fUser_body($context, array $blocks = array())
    {
        // line 8
        echo "
\t<h2>HomePage</h2>

\t\t<img src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/1_Index.png"), "html", null, true);
        echo "\"/> 


";
    }

    public function getTemplateName()
    {
        return "r4fUserBundle:User:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 11,  40 => 8,  37 => 7,  30 => 4,  27 => 3,);
    }
}
