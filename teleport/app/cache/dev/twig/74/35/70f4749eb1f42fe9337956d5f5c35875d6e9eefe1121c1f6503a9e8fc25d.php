<?php

/* SonataAdminBundle:CRUD:list__action_edit.html.twig */
class __TwigTemplate_743570f4749eb1f42fe9337956d5f5c35875d6e9eefe1121c1f6503a9e8fc25d extends Twig_Template
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
        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "EDIT", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "edit"), "method"))) {
            // line 13
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "edit", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
            echo "\" class=\"btn edit_link btn-small\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action_edit", array(), "SonataAdminBundle"), "html", null, true);
            echo "\">
        <i class=\"icon-edit\"></i>
        ";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action_edit", array(), "SonataAdminBundle"), "html", null, true);
            echo "
    </a>
";
        }
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list__action_edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  557 => 177,  545 => 173,  540 => 171,  534 => 169,  532 => 168,  526 => 164,  517 => 161,  513 => 160,  504 => 158,  500 => 157,  495 => 155,  488 => 153,  470 => 135,  460 => 132,  449 => 123,  441 => 105,  419 => 98,  415 => 97,  395 => 84,  392 => 83,  386 => 95,  382 => 93,  380 => 83,  369 => 136,  333 => 117,  300 => 113,  275 => 77,  226 => 67,  205 => 59,  172 => 52,  370 => 100,  367 => 131,  346 => 92,  343 => 91,  330 => 87,  320 => 84,  310 => 81,  304 => 79,  302 => 114,  296 => 111,  293 => 75,  287 => 72,  271 => 66,  265 => 64,  262 => 63,  257 => 61,  216 => 25,  192 => 55,  180 => 104,  174 => 53,  12 => 34,  150 => 58,  70 => 29,  113 => 48,  713 => 214,  707 => 211,  704 => 210,  702 => 209,  696 => 206,  686 => 205,  681 => 203,  669 => 201,  666 => 200,  663 => 199,  655 => 194,  652 => 193,  635 => 191,  618 => 190,  613 => 188,  608 => 187,  605 => 186,  602 => 185,  596 => 181,  590 => 178,  585 => 177,  551 => 174,  547 => 173,  539 => 171,  536 => 170,  533 => 169,  530 => 168,  528 => 167,  516 => 161,  512 => 159,  510 => 158,  507 => 159,  505 => 156,  502 => 155,  498 => 134,  486 => 130,  483 => 129,  473 => 150,  465 => 147,  462 => 146,  451 => 141,  428 => 136,  425 => 135,  414 => 127,  403 => 121,  400 => 120,  388 => 107,  361 => 127,  358 => 106,  349 => 103,  347 => 118,  339 => 100,  326 => 93,  324 => 116,  319 => 90,  311 => 89,  307 => 115,  297 => 84,  291 => 109,  286 => 80,  274 => 77,  272 => 76,  250 => 67,  233 => 62,  228 => 59,  223 => 66,  200 => 55,  279 => 132,  253 => 122,  244 => 119,  198 => 94,  195 => 93,  344 => 97,  340 => 90,  338 => 94,  315 => 83,  295 => 88,  288 => 108,  282 => 80,  280 => 79,  277 => 68,  259 => 124,  215 => 102,  190 => 50,  184 => 47,  178 => 45,  153 => 48,  129 => 49,  124 => 43,  118 => 46,  58 => 25,  76 => 34,  81 => 33,  194 => 88,  181 => 47,  161 => 78,  110 => 36,  65 => 29,  399 => 158,  396 => 157,  394 => 118,  383 => 150,  377 => 82,  371 => 113,  366 => 142,  359 => 140,  357 => 125,  352 => 121,  345 => 135,  342 => 101,  335 => 93,  329 => 95,  325 => 125,  321 => 91,  308 => 118,  289 => 81,  276 => 102,  270 => 129,  267 => 128,  260 => 62,  237 => 85,  234 => 84,  218 => 77,  202 => 73,  188 => 21,  185 => 20,  170 => 61,  167 => 60,  148 => 44,  90 => 36,  84 => 34,  701 => 418,  692 => 412,  687 => 409,  685 => 405,  675 => 402,  670 => 400,  665 => 398,  661 => 396,  654 => 389,  650 => 388,  644 => 385,  640 => 384,  634 => 381,  624 => 374,  616 => 369,  606 => 362,  599 => 358,  592 => 179,  588 => 352,  586 => 349,  584 => 348,  578 => 345,  568 => 179,  561 => 334,  553 => 176,  549 => 327,  542 => 172,  537 => 318,  529 => 315,  525 => 166,  520 => 312,  515 => 310,  503 => 303,  497 => 300,  492 => 132,  485 => 293,  477 => 150,  467 => 134,  463 => 133,  456 => 143,  454 => 269,  450 => 268,  446 => 122,  433 => 258,  431 => 257,  426 => 102,  416 => 248,  410 => 96,  385 => 226,  363 => 210,  348 => 136,  336 => 99,  332 => 88,  327 => 86,  313 => 82,  299 => 174,  292 => 87,  284 => 167,  242 => 118,  232 => 83,  186 => 54,  127 => 34,  114 => 44,  104 => 42,  23 => 11,  263 => 71,  256 => 102,  249 => 70,  245 => 88,  239 => 117,  236 => 63,  225 => 89,  213 => 126,  207 => 83,  197 => 56,  191 => 50,  175 => 43,  160 => 48,  155 => 75,  152 => 63,  146 => 34,  137 => 47,  126 => 48,  100 => 43,  97 => 41,  77 => 34,  34 => 17,  53 => 18,  20 => 11,  480 => 151,  474 => 149,  469 => 158,  461 => 155,  457 => 131,  453 => 124,  444 => 149,  440 => 263,  437 => 147,  435 => 262,  430 => 103,  427 => 143,  423 => 128,  413 => 134,  409 => 124,  407 => 95,  402 => 130,  398 => 119,  393 => 126,  387 => 152,  384 => 116,  381 => 120,  379 => 119,  374 => 81,  368 => 212,  365 => 111,  362 => 141,  360 => 109,  355 => 122,  341 => 105,  337 => 103,  322 => 184,  314 => 99,  312 => 89,  309 => 97,  305 => 175,  298 => 91,  294 => 111,  285 => 81,  283 => 70,  278 => 86,  268 => 73,  264 => 72,  258 => 150,  252 => 68,  247 => 66,  241 => 31,  229 => 73,  220 => 65,  214 => 61,  177 => 63,  169 => 51,  140 => 41,  132 => 44,  128 => 44,  107 => 46,  61 => 26,  273 => 130,  269 => 75,  254 => 60,  243 => 68,  240 => 86,  238 => 64,  235 => 114,  230 => 82,  227 => 109,  224 => 71,  221 => 106,  219 => 129,  217 => 87,  208 => 60,  204 => 72,  179 => 72,  159 => 49,  143 => 48,  135 => 48,  119 => 31,  102 => 43,  71 => 32,  67 => 19,  63 => 29,  59 => 29,  38 => 19,  94 => 40,  89 => 17,  85 => 37,  75 => 31,  68 => 26,  56 => 25,  87 => 35,  21 => 11,  26 => 14,  93 => 40,  88 => 38,  78 => 32,  46 => 22,  27 => 14,  44 => 21,  31 => 16,  28 => 14,  201 => 57,  196 => 52,  183 => 74,  171 => 81,  166 => 50,  163 => 49,  158 => 37,  156 => 36,  151 => 45,  142 => 42,  138 => 54,  136 => 39,  121 => 42,  117 => 45,  105 => 44,  91 => 39,  62 => 30,  49 => 17,  24 => 13,  25 => 13,  19 => 11,  79 => 34,  72 => 30,  69 => 31,  47 => 23,  40 => 19,  37 => 20,  22 => 12,  246 => 69,  157 => 47,  145 => 43,  139 => 59,  131 => 45,  123 => 47,  120 => 46,  115 => 40,  111 => 43,  108 => 45,  101 => 39,  98 => 42,  96 => 37,  83 => 36,  74 => 33,  66 => 30,  55 => 24,  52 => 23,  50 => 23,  43 => 21,  41 => 20,  35 => 20,  32 => 15,  29 => 15,  209 => 24,  203 => 56,  199 => 53,  193 => 92,  189 => 71,  187 => 49,  182 => 86,  176 => 102,  173 => 71,  168 => 72,  164 => 54,  162 => 57,  154 => 46,  149 => 62,  147 => 46,  144 => 45,  141 => 61,  133 => 51,  130 => 35,  125 => 40,  122 => 43,  116 => 30,  112 => 47,  109 => 45,  106 => 35,  103 => 44,  99 => 42,  95 => 19,  92 => 39,  86 => 37,  82 => 36,  80 => 35,  73 => 27,  64 => 27,  60 => 28,  57 => 27,  54 => 25,  51 => 24,  48 => 22,  45 => 21,  42 => 20,  39 => 18,  36 => 18,  33 => 17,  30 => 15,);
    }
}
