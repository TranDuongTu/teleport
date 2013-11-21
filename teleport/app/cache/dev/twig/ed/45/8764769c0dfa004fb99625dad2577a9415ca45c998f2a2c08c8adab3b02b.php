<?php

/* TeleportPortalBundle::test.html.twig */
class __TwigTemplate_ed458764769c0dfa004fb99625dad2577a9415ca45c998f2a2c08c8adab3b02b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
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
        echo "
    <input id=\"f_id\" type=\"text\" name=\"flight_id\"/>
    <input type=\"button\" id=\"submit\" value=\"Query\" onclick=\"f()\"/>

    <div id=\"content\">

    </div>

";
    }

    // line 14
    public function block_javascripts($context, array $blocks = array())
    {
        // line 15
        echo "    <script>
        function f() {
            var f_id = document.getElementById('f_id').value;

            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (xmlhttp.readyState==4 && xmlhttp.status==200)
                {
                    document.getElementById('content').innerHTML=xmlhttp.responseText;
                }
            }

            xmlhttp.open(\"get\", \"app_dev.php/flights/view/\" + f_id, true);
            xmlhttp.send();
        }
    </script>
";
    }

    public function getTemplateName()
    {
        return "TeleportPortalBundle::test.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 15,  44 => 14,  32 => 4,  29 => 3,);
    }
}
