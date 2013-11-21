<?php

/* SonataDoctrineMongoDBAdminBundle:Form:form_admin_fields.html.twig */
class __TwigTemplate_533a407a37d56d64fa60ed8e4db4ca06e98c605e08be38dd76c63c2035c3d03e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SonataAdminBundle:Form:form_admin_fields.html.twig");

        $this->blocks = array(
            'sonata_admin_mongo_one_widget' => array($this, 'block_sonata_admin_mongo_one_widget'),
            'sonata_admin_mongo_many_widget' => array($this, 'block_sonata_admin_mongo_many_widget'),
            'sonata_admin_mongo_collection' => array($this, 'block_sonata_admin_mongo_collection'),
            'sonata_type_model_widget' => array($this, 'block_sonata_type_model_widget'),
            'sonata_type_model_list_widget' => array($this, 'block_sonata_type_model_list_widget'),
            'sonata_type_admin_widget' => array($this, 'block_sonata_type_admin_widget'),
            'sonata_type_collection_widget' => array($this, 'block_sonata_type_collection_widget'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Form:form_admin_fields.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 17
    public function block_sonata_admin_mongo_one_widget($context, array $blocks = array())
    {
        // line 18
        echo "    ";
        $this->env->loadTemplate("SonataDoctrineMongoDBAdminBundle:CRUD:edit_mongo_one.html.twig")->display($context);
    }

    // line 21
    public function block_sonata_admin_mongo_many_widget($context, array $blocks = array())
    {
        // line 22
        echo "    ";
        $this->env->loadTemplate("SonataDoctrineMongoDBAdminBundle:CRUD:edit_mongo_many.html.twig")->display($context);
    }

    // line 25
    public function block_sonata_admin_mongo_collection($context, array $blocks = array())
    {
        // line 26
        echo "    ";
        $this->env->loadTemplate("SonataDoctrineMongoDBAdminBundle:CRUD:edit_mongo_collection.html.twig")->display($context);
    }

    // line 29
    public function block_sonata_type_model_widget($context, array $blocks = array())
    {
        // line 30
        echo "    ";
        // line 34
        echo "
    ";
        // line 36
        echo "
    ";
        // line 37
        if (twig_test_empty($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"))) {
            // line 38
            echo "        ";
            $this->displayBlock("choice_widget", $context, $blocks);
            echo "
    ";
        } elseif (($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "mappingtype") == "one")) {
            // line 40
            echo "        ";
            $this->displayBlock("sonata_admin_mongo_one_widget", $context, $blocks);
            echo "
    ";
        } elseif (($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "mappingtype") == "many")) {
            // line 42
            echo "        ";
            $this->displayBlock("sonata_admin_mongo_many_widget", $context, $blocks);
            echo "
    ";
        } else {
            // line 44
            echo "        ";
            // line 45
            echo "        ";
            $this->displayBlock("choice_widget", $context, $blocks);
            echo "
    ";
        }
    }

    // line 49
    public function block_sonata_type_model_list_widget($context, array $blocks = array())
    {
        // line 50
        echo "    <div id=\"field_container_";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" class=\"field-container\">
        <span id=\"field_actions_";
        // line 51
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" class=\"field-actions\">
            <span id=\"field_widget_";
        // line 52
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" class=\"field-short-description\">
                ";
        // line 53
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "associationadmin"), "id", array(0 => $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "value")), "method")) {
            // line 54
            echo "                    ";
            echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('routing')->getUrl("sonata_admin_short_object_information", array("code" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "associationadmin"), "code"), "objectId" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "associationadmin"), "id", array(0 => $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "value")), "method"), "uniqid" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "associationadmin"), "uniqid"))), array());
            // line 60
            echo "                ";
        } elseif (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", array(), "any", false, true), "options", array(), "any", false, true), "placeholder", array(), "any", true, true) && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "options"), "placeholder"))) {
            // line 61
            echo "                    <span class=\"inner-field-short-description\">
                        ";
            // line 62
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "options"), "placeholder"), array(), "SonataAdminBundle"), "html", null, true);
            echo "
                    </span>
                ";
        }
        // line 65
        echo "            </span>

            <span class=\"btn-group\">
                ";
        // line 68
        if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "associationadmin"), "hasroute", array(0 => "list"), "method") && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "associationadmin"), "isGranted", array(0 => "LIST"), "method")) && (isset($context["btn_list"]) ? $context["btn_list"] : $this->getContext($context, "btn_list")))) {
            // line 69
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "associationadmin"), "generateUrl", array(0 => "list"), "method"), "html", null, true);
            echo "\"
                       onclick=\"return start_field_dialog_form_list_";
            // line 70
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "(this);\"
                       class=\"btn sonata-ba-action\"
                       title=\"";
            // line 72
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["btn_list"]) ? $context["btn_list"] : $this->getContext($context, "btn_list")), array(), (isset($context["btn_catalogue"]) ? $context["btn_catalogue"] : $this->getContext($context, "btn_catalogue"))), "html", null, true);
            echo "\"
                            >
                        <i class=\"icon-list\"></i>
                        ";
            // line 75
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["btn_list"]) ? $context["btn_list"] : $this->getContext($context, "btn_list")), array(), (isset($context["btn_catalogue"]) ? $context["btn_catalogue"] : $this->getContext($context, "btn_catalogue"))), "html", null, true);
            echo "
                    </a>
                ";
        }
        // line 78
        echo "
                ";
        // line 79
        if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "associationadmin"), "hasroute", array(0 => "create"), "method") && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "associationadmin"), "isGranted", array(0 => "CREATE"), "method")) && (isset($context["btn_add"]) ? $context["btn_add"] : $this->getContext($context, "btn_add")))) {
            // line 80
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "associationadmin"), "generateUrl", array(0 => "create"), "method"), "html", null, true);
            echo "\"
                       onclick=\"return start_field_dialog_form_add_";
            // line 81
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "(this);\"
                       class=\"btn sonata-ba-action\"
                       title=\"";
            // line 83
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["btn_add"]) ? $context["btn_add"] : $this->getContext($context, "btn_add")), array(), (isset($context["btn_catalogue"]) ? $context["btn_catalogue"] : $this->getContext($context, "btn_catalogue"))), "html", null, true);
            echo "\"
                            >
                        <i class=\"icon-plus\"></i>
                        ";
            // line 86
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["btn_add"]) ? $context["btn_add"] : $this->getContext($context, "btn_add")), array(), (isset($context["btn_catalogue"]) ? $context["btn_catalogue"] : $this->getContext($context, "btn_catalogue"))), "html", null, true);
            echo "
                    </a>
                ";
        }
        // line 89
        echo "            </span>

            <span class=\"btn-group\">
                ";
        // line 92
        if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "associationadmin"), "hasRoute", array(0 => "delete"), "method") && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "associationadmin"), "isGranted", array(0 => "DELETE"), "method")) && (isset($context["btn_delete"]) ? $context["btn_delete"] : $this->getContext($context, "btn_delete")))) {
            // line 93
            echo "                    <a href=\"\"
                       onclick=\"return remove_selected_element_";
            // line 94
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "(this);\"
                       class=\"btn sonata-ba-action\"
                       title=\"";
            // line 96
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["btn_delete"]) ? $context["btn_delete"] : $this->getContext($context, "btn_delete")), array(), (isset($context["btn_catalogue"]) ? $context["btn_catalogue"] : $this->getContext($context, "btn_catalogue"))), "html", null, true);
            echo "\"
                            >
                        <i class=\"icon-off\"></i>
                        ";
            // line 99
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["btn_delete"]) ? $context["btn_delete"] : $this->getContext($context, "btn_delete")), array(), (isset($context["btn_catalogue"]) ? $context["btn_catalogue"] : $this->getContext($context, "btn_catalogue"))), "html", null, true);
            echo "
                    </a>
                ";
        }
        // line 102
        echo "            </span>
        </span>

        <span style=\"display: none\" >
            ";
        // line 106
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        </span>

        <div class=\"container sonata-ba-modal sonata-ba-modal-edit-one-to-one\" style=\"display: none\" id=\"field_dialog_";
        // line 109
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\">

        </div>
    </div>

    ";
        // line 114
        $this->env->loadTemplate("SonataDoctrineMongoDBAdminBundle:CRUD:edit_mongo_association_script.html.twig")->display($context);
    }

    // line 117
    public function block_sonata_type_admin_widget($context, array $blocks = array())
    {
        // line 118
        echo "    ";
        // line 119
        echo "    ";
        if (($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "mappingtype") == "one")) {
            // line 120
            echo "        ";
            $this->displayBlock("sonata_admin_mongo_one_widget", $context, $blocks);
            echo "
    ";
        } elseif (($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "mappingtype") == "many")) {
            // line 122
            echo "        ";
            $this->displayBlock("sonata_admin_mongo_many_widget", $context, $blocks);
            echo "
    ";
        } else {
            // line 124
            echo "        INVALID MODE : ";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "
    ";
        }
    }

    // line 128
    public function block_sonata_type_collection_widget($context, array $blocks = array())
    {
        // line 129
        echo "    ";
        if (($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "mappingtype") == "many")) {
            // line 130
            echo "        ";
            $this->displayBlock("sonata_admin_mongo_collection", $context, $blocks);
            echo "
    ";
        } else {
            // line 132
            echo "        INVALID MODE : ";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo " - type : sonata_type_collection - mapping : ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "mappingtype"), "html", null, true);
            echo "
    ";
        }
    }

    public function getTemplateName()
    {
        return "SonataDoctrineMongoDBAdminBundle:Form:form_admin_fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  279 => 132,  253 => 122,  244 => 119,  198 => 94,  195 => 93,  344 => 97,  340 => 95,  338 => 94,  315 => 90,  295 => 88,  288 => 85,  282 => 83,  280 => 82,  277 => 81,  259 => 124,  215 => 102,  190 => 50,  184 => 48,  178 => 46,  153 => 35,  129 => 24,  124 => 23,  118 => 21,  58 => 29,  76 => 20,  81 => 63,  194 => 88,  181 => 47,  161 => 78,  110 => 18,  65 => 5,  399 => 158,  396 => 157,  394 => 156,  383 => 150,  377 => 147,  371 => 144,  366 => 142,  359 => 140,  357 => 139,  352 => 138,  345 => 135,  342 => 133,  335 => 93,  329 => 126,  325 => 125,  321 => 92,  308 => 118,  289 => 109,  276 => 102,  270 => 129,  267 => 128,  260 => 94,  237 => 85,  234 => 84,  218 => 77,  202 => 73,  188 => 89,  185 => 65,  170 => 61,  167 => 60,  148 => 64,  90 => 34,  84 => 39,  701 => 418,  692 => 412,  687 => 409,  685 => 405,  675 => 402,  670 => 400,  665 => 398,  661 => 396,  654 => 389,  650 => 388,  644 => 385,  640 => 384,  634 => 381,  624 => 374,  616 => 369,  606 => 362,  599 => 358,  592 => 354,  588 => 352,  586 => 349,  584 => 348,  578 => 345,  568 => 338,  561 => 334,  553 => 329,  549 => 327,  542 => 320,  537 => 318,  529 => 315,  525 => 314,  520 => 312,  515 => 310,  503 => 303,  497 => 300,  492 => 298,  485 => 293,  477 => 288,  467 => 281,  463 => 280,  456 => 275,  454 => 269,  450 => 268,  446 => 266,  433 => 258,  431 => 257,  426 => 255,  416 => 248,  410 => 245,  385 => 226,  363 => 210,  348 => 136,  336 => 189,  332 => 188,  327 => 186,  313 => 178,  299 => 174,  292 => 87,  284 => 167,  242 => 118,  232 => 83,  186 => 83,  127 => 56,  114 => 23,  104 => 67,  23 => 18,  263 => 104,  256 => 102,  249 => 67,  245 => 88,  239 => 117,  236 => 93,  225 => 89,  213 => 126,  207 => 83,  197 => 119,  191 => 69,  175 => 77,  160 => 68,  155 => 75,  152 => 92,  146 => 63,  137 => 68,  126 => 62,  100 => 22,  97 => 63,  77 => 40,  34 => 17,  53 => 26,  20 => 11,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 263,  437 => 147,  435 => 262,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 236,  393 => 126,  387 => 152,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 212,  365 => 111,  362 => 141,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 184,  314 => 99,  312 => 89,  309 => 97,  305 => 175,  298 => 91,  294 => 111,  285 => 84,  283 => 106,  278 => 86,  268 => 73,  264 => 72,  258 => 150,  252 => 68,  247 => 120,  241 => 95,  229 => 73,  220 => 56,  214 => 75,  177 => 63,  169 => 74,  140 => 28,  132 => 65,  128 => 49,  107 => 51,  61 => 30,  273 => 130,  269 => 94,  254 => 69,  243 => 88,  240 => 86,  238 => 139,  235 => 114,  230 => 82,  227 => 109,  224 => 71,  221 => 106,  219 => 129,  217 => 87,  208 => 74,  204 => 72,  179 => 107,  159 => 70,  143 => 29,  135 => 81,  119 => 42,  102 => 50,  71 => 38,  67 => 55,  63 => 34,  59 => 18,  38 => 32,  94 => 21,  89 => 44,  85 => 25,  75 => 28,  68 => 6,  56 => 81,  87 => 25,  21 => 11,  26 => 14,  93 => 28,  88 => 12,  78 => 36,  46 => 35,  27 => 3,  44 => 20,  31 => 16,  28 => 13,  201 => 92,  196 => 52,  183 => 74,  171 => 81,  166 => 80,  163 => 69,  158 => 37,  156 => 36,  151 => 63,  142 => 61,  138 => 54,  136 => 48,  121 => 22,  117 => 54,  105 => 76,  91 => 45,  62 => 29,  49 => 21,  24 => 2,  25 => 12,  19 => 11,  79 => 18,  72 => 27,  69 => 37,  47 => 19,  40 => 44,  37 => 18,  22 => 12,  246 => 90,  157 => 56,  145 => 46,  139 => 69,  131 => 25,  123 => 61,  120 => 60,  115 => 53,  111 => 52,  108 => 36,  101 => 32,  98 => 15,  96 => 72,  83 => 42,  74 => 34,  66 => 36,  55 => 23,  52 => 21,  50 => 25,  43 => 19,  41 => 19,  35 => 17,  32 => 35,  29 => 34,  209 => 99,  203 => 96,  199 => 53,  193 => 92,  189 => 71,  187 => 49,  182 => 86,  176 => 83,  173 => 44,  168 => 72,  164 => 79,  162 => 57,  154 => 67,  149 => 72,  147 => 90,  144 => 70,  141 => 61,  133 => 55,  130 => 57,  125 => 44,  122 => 43,  116 => 41,  112 => 19,  109 => 69,  106 => 40,  103 => 46,  99 => 49,  95 => 43,  92 => 61,  86 => 33,  82 => 10,  80 => 9,  73 => 7,  64 => 26,  60 => 3,  57 => 22,  54 => 14,  51 => 38,  48 => 67,  45 => 22,  42 => 21,  39 => 18,  36 => 18,  33 => 15,  30 => 15,);
    }
}
