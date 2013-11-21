<?php

/* SonataDoctrineMongoDBAdminBundle:CRUD:edit_mongo_many.html.twig */
class __TwigTemplate_bdbe05587d7d5bd4b28952a647e23a69c375994187e431b55de25293e293e3ac extends Twig_Template
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
        // line 11
        echo "
";
        // line 12
        if ($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "associationadmin")) {
            // line 13
            echo "    <div id=\"field_container_";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "\" class=\"field-container\">
        <span id=\"field_widget_";
            // line 14
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "\" >
            ";
            // line 15
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
            echo "
        </span>

        <span id=\"field_actions_";
            // line 18
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "\" class=\"field-actions\">
            ";
            // line 19
            if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "associationadmin"), "hasRoute", array(0 => "create"), "method") && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "associationadmin"), "isGranted", array(0 => "CREATE"), "method")) && (isset($context["btn_add"]) ? $context["btn_add"] : $this->getContext($context, "btn_add")))) {
                // line 20
                echo "                <a
                    href=\"";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "associationadmin"), "generateUrl", array(0 => "create"), "method"), "html", null, true);
                echo "\"
                    onclick=\"return start_field_dialog_form_add_";
                // line 22
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
                echo "(this);\"
                    class=\"btn sonata-ba-action\"
                    title=\"";
                // line 24
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["btn_add"]) ? $context["btn_add"] : $this->getContext($context, "btn_add")), array(), (isset($context["btn_catalogue"]) ? $context["btn_catalogue"] : $this->getContext($context, "btn_catalogue"))), "html", null, true);
                echo "\"
                    >
                    <i class=\"icon-plus\"></i>
                     ";
                // line 27
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["btn_add"]) ? $context["btn_add"] : $this->getContext($context, "btn_add")), array(), (isset($context["btn_catalogue"]) ? $context["btn_catalogue"] : $this->getContext($context, "btn_catalogue"))), "html", null, true);
                echo "
                </a>
            ";
            }
            // line 30
            echo "        </span>

        <div style=\"display: none\" id=\"field_dialog_";
            // line 32
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "\">
        </div>
    </div>

    ";
            // line 36
            $this->env->loadTemplate("SonataDoctrineMongoDBAdminBundle:CRUD:edit_mongo_association_script.html.twig")->display($context);
        }
    }

    public function getTemplateName()
    {
        return "SonataDoctrineMongoDBAdminBundle:CRUD:edit_mongo_many.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  399 => 158,  396 => 157,  394 => 156,  383 => 150,  377 => 147,  371 => 144,  366 => 142,  359 => 140,  357 => 139,  352 => 138,  345 => 135,  342 => 133,  335 => 129,  329 => 126,  325 => 125,  321 => 124,  308 => 118,  289 => 109,  276 => 102,  270 => 100,  267 => 98,  260 => 94,  237 => 85,  234 => 84,  218 => 77,  202 => 73,  188 => 68,  185 => 65,  170 => 61,  167 => 60,  148 => 53,  90 => 34,  84 => 33,  701 => 418,  692 => 412,  687 => 409,  685 => 405,  675 => 402,  670 => 400,  665 => 398,  661 => 396,  654 => 389,  650 => 388,  644 => 385,  640 => 384,  634 => 381,  624 => 374,  616 => 369,  606 => 362,  599 => 358,  592 => 354,  588 => 352,  586 => 349,  584 => 348,  578 => 345,  568 => 338,  561 => 334,  553 => 329,  549 => 327,  542 => 320,  537 => 318,  529 => 315,  525 => 314,  520 => 312,  515 => 310,  503 => 303,  497 => 300,  492 => 298,  485 => 293,  477 => 288,  467 => 281,  463 => 280,  456 => 275,  454 => 269,  450 => 268,  446 => 266,  433 => 258,  431 => 257,  426 => 255,  416 => 248,  410 => 245,  385 => 226,  363 => 210,  348 => 136,  336 => 189,  332 => 188,  327 => 186,  313 => 178,  299 => 174,  292 => 170,  284 => 167,  242 => 140,  232 => 83,  186 => 111,  127 => 45,  114 => 71,  104 => 67,  23 => 18,  263 => 104,  256 => 102,  249 => 89,  245 => 88,  239 => 86,  236 => 93,  225 => 89,  213 => 126,  207 => 83,  197 => 119,  191 => 69,  175 => 72,  160 => 68,  155 => 55,  152 => 92,  146 => 63,  137 => 60,  126 => 51,  100 => 40,  97 => 63,  77 => 28,  34 => 4,  53 => 23,  20 => 11,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 263,  437 => 147,  435 => 262,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 236,  393 => 126,  387 => 152,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 212,  365 => 111,  362 => 141,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 184,  314 => 99,  312 => 98,  309 => 97,  305 => 175,  298 => 91,  294 => 111,  285 => 89,  283 => 106,  278 => 86,  268 => 157,  264 => 84,  258 => 150,  252 => 80,  247 => 78,  241 => 95,  229 => 73,  220 => 70,  214 => 75,  177 => 63,  169 => 71,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 18,  273 => 101,  269 => 94,  254 => 91,  243 => 88,  240 => 86,  238 => 139,  235 => 74,  230 => 82,  227 => 80,  224 => 71,  221 => 78,  219 => 129,  217 => 87,  208 => 74,  204 => 72,  179 => 107,  159 => 61,  143 => 56,  135 => 81,  119 => 42,  102 => 39,  71 => 19,  67 => 27,  63 => 27,  59 => 14,  38 => 32,  94 => 38,  89 => 20,  85 => 25,  75 => 17,  68 => 22,  56 => 40,  87 => 25,  21 => 12,  26 => 13,  93 => 28,  88 => 60,  78 => 30,  46 => 7,  27 => 13,  44 => 19,  31 => 22,  28 => 3,  201 => 92,  196 => 71,  183 => 74,  171 => 102,  166 => 100,  163 => 69,  158 => 67,  156 => 93,  151 => 63,  142 => 50,  138 => 54,  136 => 48,  121 => 75,  117 => 41,  105 => 40,  91 => 27,  62 => 23,  49 => 20,  24 => 13,  25 => 12,  19 => 11,  79 => 18,  72 => 16,  69 => 30,  47 => 19,  40 => 19,  37 => 18,  22 => 12,  246 => 90,  157 => 56,  145 => 46,  139 => 49,  131 => 52,  123 => 50,  120 => 40,  115 => 43,  111 => 45,  108 => 36,  101 => 32,  98 => 31,  96 => 31,  83 => 25,  74 => 52,  66 => 15,  55 => 22,  52 => 22,  50 => 22,  43 => 19,  41 => 18,  35 => 5,  32 => 16,  29 => 14,  209 => 82,  203 => 122,  199 => 80,  193 => 70,  189 => 71,  187 => 75,  182 => 64,  176 => 64,  173 => 62,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 64,  147 => 90,  144 => 62,  141 => 61,  133 => 55,  130 => 46,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 69,  106 => 40,  103 => 32,  99 => 38,  95 => 37,  92 => 61,  86 => 33,  82 => 22,  80 => 36,  73 => 32,  64 => 26,  60 => 25,  57 => 24,  54 => 14,  51 => 38,  48 => 21,  45 => 20,  42 => 7,  39 => 18,  36 => 16,  33 => 15,  30 => 7,);
    }
}
