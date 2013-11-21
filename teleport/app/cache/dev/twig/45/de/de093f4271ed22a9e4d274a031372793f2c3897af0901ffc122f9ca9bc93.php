<?php

/* TeleportPortalBundle:SearchResult:search_result.html.twig */
class __TwigTemplate_45dede093f4271ed22a9e4d274a031372793f2c3897af0901ffc122f9ca9bc93 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    Displaying flight from ";
        echo twig_escape_filter($this->env, (isset($context["from"]) ? $context["from"] : $this->getContext($context, "from")), "html", null, true);
        echo " to ";
        echo twig_escape_filter($this->env, (isset($context["to"]) ? $context["to"] : $this->getContext($context, "to")), "html", null, true);
        echo " on ";
        echo twig_escape_filter($this->env, (isset($context["time"]) ? $context["time"] : $this->getContext($context, "time")), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "TeleportPortalBundle:SearchResult:search_result.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,);
    }
}
