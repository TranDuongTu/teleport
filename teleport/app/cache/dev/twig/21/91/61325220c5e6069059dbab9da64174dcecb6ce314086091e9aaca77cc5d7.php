<?php

/* AcmeDemoBundle:Secured:helloadmin.html.twig */
class __TwigTemplate_219161325220c5e6069059dbab9da64174dcecb6ce314086091e9aaca77cc5d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle:Secured:layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle:Secured:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 9
        $context["code"] = $this->env->getExtension('demo')->getCode($this);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, ("Hello " . (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    <h1 class=\"title\">Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo " secured for Admins only!</h1>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Secured:helloadmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  804 => 266,  801 => 265,  796 => 260,  789 => 256,  783 => 253,  779 => 251,  777 => 250,  774 => 249,  768 => 247,  766 => 246,  763 => 245,  757 => 243,  755 => 242,  752 => 241,  746 => 239,  744 => 238,  741 => 237,  735 => 235,  733 => 234,  730 => 233,  727 => 232,  723 => 187,  717 => 186,  708 => 183,  703 => 182,  698 => 181,  695 => 180,  690 => 179,  683 => 272,  676 => 262,  674 => 232,  667 => 230,  658 => 226,  656 => 225,  651 => 222,  645 => 219,  642 => 218,  637 => 216,  632 => 213,  626 => 211,  623 => 210,  620 => 209,  600 => 206,  595 => 203,  589 => 201,  581 => 199,  579 => 198,  576 => 197,  573 => 196,  555 => 195,  552 => 194,  550 => 193,  546 => 191,  544 => 190,  521 => 163,  509 => 159,  499 => 155,  496 => 154,  490 => 153,  479 => 149,  471 => 147,  468 => 146,  464 => 145,  459 => 143,  448 => 139,  438 => 137,  432 => 135,  420 => 132,  417 => 130,  401 => 127,  390 => 124,  375 => 168,  373 => 159,  354 => 119,  316 => 74,  281 => 61,  210 => 30,  165 => 110,  557 => 177,  545 => 173,  540 => 188,  534 => 177,  532 => 168,  526 => 164,  517 => 161,  513 => 160,  504 => 158,  500 => 157,  495 => 155,  488 => 153,  470 => 135,  460 => 132,  449 => 123,  441 => 138,  419 => 98,  415 => 97,  395 => 84,  392 => 83,  386 => 95,  382 => 93,  380 => 83,  369 => 157,  333 => 112,  300 => 68,  275 => 77,  226 => 36,  205 => 59,  172 => 112,  370 => 100,  367 => 131,  346 => 92,  343 => 91,  330 => 87,  320 => 75,  310 => 81,  304 => 79,  302 => 114,  296 => 111,  293 => 75,  287 => 64,  271 => 58,  265 => 64,  262 => 63,  257 => 61,  216 => 25,  192 => 55,  180 => 104,  174 => 118,  12 => 34,  150 => 58,  70 => 29,  113 => 46,  713 => 214,  707 => 211,  704 => 210,  702 => 209,  696 => 206,  686 => 205,  681 => 265,  669 => 201,  666 => 200,  663 => 199,  655 => 194,  652 => 193,  635 => 191,  618 => 190,  613 => 188,  608 => 187,  605 => 186,  602 => 185,  596 => 181,  590 => 178,  585 => 177,  551 => 174,  547 => 173,  539 => 171,  536 => 170,  533 => 169,  530 => 167,  528 => 167,  516 => 161,  512 => 160,  510 => 158,  507 => 159,  505 => 156,  502 => 155,  498 => 134,  486 => 130,  483 => 129,  473 => 150,  465 => 147,  462 => 146,  451 => 140,  428 => 136,  425 => 135,  414 => 127,  403 => 121,  400 => 120,  388 => 107,  361 => 122,  358 => 106,  349 => 103,  347 => 115,  339 => 100,  326 => 76,  324 => 116,  319 => 90,  311 => 89,  307 => 71,  297 => 84,  291 => 65,  286 => 80,  274 => 77,  272 => 76,  250 => 67,  233 => 62,  228 => 59,  223 => 66,  200 => 55,  279 => 132,  253 => 122,  244 => 119,  198 => 22,  195 => 93,  344 => 97,  340 => 90,  338 => 94,  315 => 83,  295 => 66,  288 => 108,  282 => 80,  280 => 79,  277 => 59,  259 => 55,  215 => 32,  190 => 50,  184 => 47,  178 => 45,  153 => 48,  129 => 56,  124 => 43,  118 => 91,  58 => 19,  76 => 17,  81 => 26,  194 => 88,  181 => 47,  161 => 78,  110 => 22,  65 => 29,  399 => 158,  396 => 157,  394 => 118,  383 => 150,  377 => 82,  371 => 113,  366 => 156,  359 => 140,  357 => 120,  352 => 121,  345 => 135,  342 => 101,  335 => 93,  329 => 95,  325 => 125,  321 => 91,  308 => 118,  289 => 81,  276 => 102,  270 => 129,  267 => 128,  260 => 62,  237 => 85,  234 => 84,  218 => 77,  202 => 73,  188 => 21,  185 => 20,  170 => 61,  167 => 60,  148 => 44,  90 => 32,  84 => 29,  701 => 418,  692 => 412,  687 => 178,  685 => 405,  675 => 402,  670 => 231,  665 => 398,  661 => 227,  654 => 389,  650 => 388,  644 => 385,  640 => 217,  634 => 381,  624 => 374,  616 => 369,  606 => 208,  599 => 358,  592 => 179,  588 => 352,  586 => 349,  584 => 348,  578 => 345,  568 => 179,  561 => 334,  553 => 176,  549 => 327,  542 => 172,  537 => 178,  529 => 315,  525 => 166,  520 => 312,  515 => 161,  503 => 156,  497 => 300,  492 => 132,  485 => 150,  477 => 150,  467 => 134,  463 => 133,  456 => 142,  454 => 141,  450 => 268,  446 => 122,  433 => 258,  431 => 257,  426 => 134,  416 => 248,  410 => 129,  385 => 226,  363 => 123,  348 => 136,  336 => 113,  332 => 88,  327 => 86,  313 => 73,  299 => 174,  292 => 87,  284 => 167,  242 => 118,  232 => 83,  186 => 54,  127 => 28,  114 => 89,  104 => 43,  23 => 13,  263 => 57,  256 => 54,  249 => 50,  245 => 49,  239 => 117,  236 => 63,  225 => 89,  213 => 126,  207 => 29,  197 => 56,  191 => 273,  175 => 43,  160 => 48,  155 => 75,  152 => 63,  146 => 34,  137 => 47,  126 => 55,  100 => 43,  97 => 41,  77 => 25,  34 => 12,  53 => 11,  20 => 11,  480 => 151,  474 => 149,  469 => 158,  461 => 155,  457 => 131,  453 => 124,  444 => 149,  440 => 263,  437 => 147,  435 => 136,  430 => 103,  427 => 143,  423 => 133,  413 => 134,  409 => 124,  407 => 128,  402 => 130,  398 => 126,  393 => 125,  387 => 123,  384 => 116,  381 => 122,  379 => 119,  374 => 81,  368 => 212,  365 => 111,  362 => 141,  360 => 109,  355 => 122,  341 => 114,  337 => 103,  322 => 184,  314 => 99,  312 => 89,  309 => 97,  305 => 70,  298 => 91,  294 => 111,  285 => 81,  283 => 70,  278 => 86,  268 => 73,  264 => 72,  258 => 150,  252 => 68,  247 => 66,  241 => 47,  229 => 73,  220 => 65,  214 => 61,  177 => 119,  169 => 51,  140 => 41,  132 => 57,  128 => 47,  107 => 44,  61 => 12,  273 => 130,  269 => 75,  254 => 60,  243 => 68,  240 => 86,  238 => 64,  235 => 114,  230 => 82,  227 => 109,  224 => 35,  221 => 106,  219 => 33,  217 => 87,  208 => 60,  204 => 28,  179 => 171,  159 => 49,  143 => 48,  135 => 93,  119 => 44,  102 => 17,  71 => 78,  67 => 19,  63 => 22,  59 => 13,  38 => 6,  94 => 34,  89 => 34,  85 => 32,  75 => 80,  68 => 30,  56 => 11,  87 => 35,  21 => 11,  26 => 9,  93 => 39,  88 => 31,  78 => 26,  46 => 8,  27 => 16,  44 => 17,  31 => 3,  28 => 3,  201 => 57,  196 => 52,  183 => 74,  171 => 81,  166 => 50,  163 => 109,  158 => 37,  156 => 36,  151 => 99,  142 => 42,  138 => 94,  136 => 39,  121 => 51,  117 => 19,  105 => 18,  91 => 86,  62 => 28,  49 => 10,  24 => 3,  25 => 12,  19 => 11,  79 => 31,  72 => 30,  69 => 54,  47 => 8,  40 => 6,  37 => 5,  22 => 11,  246 => 69,  157 => 47,  145 => 97,  139 => 51,  131 => 48,  123 => 47,  120 => 20,  115 => 47,  111 => 88,  108 => 19,  101 => 37,  98 => 36,  96 => 40,  83 => 32,  74 => 29,  66 => 53,  55 => 22,  52 => 10,  50 => 20,  43 => 7,  41 => 5,  35 => 5,  32 => 11,  29 => 3,  209 => 24,  203 => 56,  199 => 53,  193 => 92,  189 => 177,  187 => 49,  182 => 172,  176 => 102,  173 => 71,  168 => 72,  164 => 54,  162 => 57,  154 => 46,  149 => 62,  147 => 46,  144 => 45,  141 => 95,  133 => 49,  130 => 35,  125 => 46,  122 => 45,  116 => 43,  112 => 47,  109 => 45,  106 => 35,  103 => 38,  99 => 30,  95 => 19,  92 => 35,  86 => 33,  82 => 28,  80 => 82,  73 => 16,  64 => 13,  60 => 26,  57 => 12,  54 => 22,  51 => 23,  48 => 9,  45 => 8,  42 => 7,  39 => 12,  36 => 5,  33 => 3,  30 => 3,);
    }
}
