<?php

/* TeleportPortalBundle:DetailPage:flight_detail.html.twig */
class __TwigTemplate_5bbf2a044fd99b6769b7b987c90eae043e519f314dc0e736a8e15d2ecd87be87 extends Twig_Template
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
        echo "    Displaying detail for the flight name ";
        echo twig_escape_filter($this->env, (isset($context["flight"]) ? $context["flight"] : $this->getContext($context, "flight")), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "TeleportPortalBundle:DetailPage:flight_detail.html.twig";
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
