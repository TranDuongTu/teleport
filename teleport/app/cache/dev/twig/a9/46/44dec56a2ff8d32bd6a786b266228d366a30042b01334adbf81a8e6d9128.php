<?php

/* WebProfilerBundle:Router:panel.html.twig */
class __TwigTemplate_a94644dec56a2ff8d32bd6a786b266228d366a30042b01334adbf81a8e6d9128 extends Twig_Template
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
        echo "<h2>Routing for \"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "pathinfo"), "html", null, true);
        echo "\"</h2>

<ul>
    <li>
        <strong>Route:&nbsp;</strong>
        ";
        // line 6
        if ($this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "route")) {
            // line 7
            echo "            ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "route"), "html", null, true);
            echo "
        ";
        } else {
            // line 9
            echo "            <em>No matching route</em>
        ";
        }
        // line 11
        echo "    </li>
    <li>
        <strong>Route parameters:&nbsp;</strong>
        ";
        // line 14
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "routeParams"))) {
            // line 15
            echo "            ";
            $this->env->loadTemplate("@WebProfiler/Profiler/table.html.twig")->display(array("data" => $this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "routeParams"), "class" => "inline"));
            // line 16
            echo "        ";
        } else {
            // line 17
            echo "            <em>No parameters</em>
        ";
        }
        // line 19
        echo "    </li>
    ";
        // line 20
        if ($this->getAttribute((isset($context["router"]) ? $context["router"] : $this->getContext($context, "router")), "redirect")) {
            // line 21
            echo "    <li>
        <strong>Redirecting to:&nbsp;</strong> \"";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["router"]) ? $context["router"] : $this->getContext($context, "router")), "targetUrl"), "html", null, true);
            echo "\" ";
            if ($this->getAttribute((isset($context["router"]) ? $context["router"] : $this->getContext($context, "router")), "targetRoute")) {
                echo "(route: \"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["router"]) ? $context["router"] : $this->getContext($context, "router")), "targetRoute"), "html", null, true);
                echo "\")";
            }
            // line 23
            echo "    <li>
    ";
        }
        // line 25
        echo "    <li>
        <strong>Route matching logs</strong>
        <table class=\"routing inline\">
            <tr>
                <th>Route name</th>
                <th>Pattern</th>
                <th>Log</th>
            </tr>
            ";
        // line 33
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["traces"]) ? $context["traces"] : $this->getContext($context, "traces")));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 34
            echo "                <tr class=\"";
            echo (((1 == $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "level"))) ? ("almost") : ((((2 == $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "level"))) ? ("matches") : (""))));
            echo "\">
                    <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "name"), "html", null, true);
            echo "</td>
                    <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "path"), "html", null, true);
            echo "</td>
                    <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "log"), "html", null, true);
            echo "</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "        </table>
        <em><small>Note: The above matching is based on the configuration for the current router which might differ from
        the configuration used while routing this request.</small></em>
    </li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Router:panel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  356 => 328,  806 => 488,  803 => 487,  792 => 485,  788 => 484,  784 => 482,  771 => 481,  745 => 476,  742 => 475,  706 => 472,  694 => 468,  682 => 465,  678 => 464,  673 => 462,  630 => 455,  625 => 453,  621 => 452,  565 => 414,  527 => 409,  389 => 160,  378 => 157,  334 => 141,  331 => 140,  328 => 139,  290 => 119,  222 => 83,  353 => 149,  318 => 111,  306 => 107,  255 => 101,  231 => 83,  212 => 78,  439 => 195,  429 => 188,  422 => 184,  408 => 176,  351 => 120,  323 => 128,  303 => 106,  248 => 97,  134 => 39,  804 => 266,  801 => 265,  796 => 260,  789 => 256,  783 => 253,  779 => 251,  777 => 250,  774 => 249,  768 => 247,  766 => 246,  763 => 245,  757 => 243,  755 => 242,  752 => 241,  746 => 239,  744 => 238,  741 => 237,  735 => 235,  733 => 234,  730 => 233,  727 => 232,  723 => 473,  717 => 186,  708 => 183,  703 => 182,  698 => 469,  695 => 180,  690 => 467,  683 => 272,  676 => 262,  674 => 232,  667 => 230,  658 => 226,  656 => 461,  651 => 222,  645 => 460,  642 => 218,  637 => 216,  632 => 213,  626 => 211,  623 => 210,  620 => 209,  600 => 206,  595 => 203,  589 => 201,  581 => 199,  579 => 198,  576 => 197,  573 => 196,  555 => 195,  552 => 194,  550 => 193,  546 => 191,  544 => 190,  521 => 163,  509 => 159,  499 => 155,  496 => 154,  490 => 153,  479 => 149,  471 => 147,  468 => 146,  464 => 145,  459 => 143,  448 => 139,  438 => 137,  432 => 135,  420 => 132,  417 => 130,  401 => 172,  390 => 124,  375 => 168,  373 => 156,  354 => 119,  316 => 74,  281 => 114,  210 => 77,  165 => 83,  557 => 177,  545 => 173,  540 => 188,  534 => 177,  532 => 168,  526 => 164,  517 => 161,  513 => 160,  504 => 158,  500 => 157,  495 => 155,  488 => 153,  470 => 135,  460 => 132,  449 => 198,  441 => 196,  419 => 98,  415 => 180,  395 => 84,  392 => 83,  386 => 159,  382 => 93,  380 => 158,  369 => 157,  333 => 112,  300 => 105,  275 => 105,  226 => 84,  205 => 59,  172 => 57,  370 => 100,  367 => 155,  346 => 92,  343 => 146,  330 => 87,  320 => 127,  310 => 81,  304 => 79,  302 => 125,  296 => 121,  293 => 120,  287 => 64,  271 => 58,  265 => 105,  262 => 98,  257 => 61,  216 => 79,  192 => 55,  180 => 104,  174 => 65,  12 => 34,  150 => 55,  70 => 26,  113 => 40,  713 => 214,  707 => 211,  704 => 210,  702 => 470,  696 => 206,  686 => 466,  681 => 265,  669 => 201,  666 => 200,  663 => 199,  655 => 194,  652 => 193,  635 => 191,  618 => 451,  613 => 188,  608 => 187,  605 => 186,  602 => 449,  596 => 181,  590 => 178,  585 => 177,  551 => 174,  547 => 411,  539 => 171,  536 => 170,  533 => 169,  530 => 410,  528 => 167,  516 => 161,  512 => 160,  510 => 158,  507 => 159,  505 => 156,  502 => 155,  498 => 134,  486 => 130,  483 => 129,  473 => 150,  465 => 147,  462 => 202,  451 => 140,  428 => 136,  425 => 135,  414 => 127,  403 => 121,  400 => 120,  388 => 107,  361 => 152,  358 => 151,  349 => 103,  347 => 115,  339 => 316,  326 => 138,  324 => 113,  319 => 90,  311 => 89,  307 => 128,  297 => 276,  291 => 102,  286 => 112,  274 => 110,  272 => 76,  250 => 67,  233 => 87,  228 => 59,  223 => 66,  200 => 72,  279 => 132,  253 => 100,  244 => 136,  198 => 22,  195 => 93,  344 => 318,  340 => 145,  338 => 135,  315 => 131,  295 => 275,  288 => 118,  282 => 80,  280 => 79,  277 => 59,  259 => 103,  215 => 32,  190 => 76,  184 => 63,  178 => 59,  153 => 77,  129 => 56,  124 => 43,  118 => 49,  58 => 18,  76 => 28,  81 => 23,  194 => 68,  181 => 65,  161 => 63,  110 => 22,  65 => 22,  399 => 158,  396 => 157,  394 => 168,  383 => 150,  377 => 82,  371 => 156,  366 => 156,  359 => 140,  357 => 123,  352 => 121,  345 => 147,  342 => 317,  335 => 134,  329 => 131,  325 => 129,  321 => 135,  308 => 118,  289 => 113,  276 => 111,  270 => 102,  267 => 101,  260 => 62,  237 => 85,  234 => 84,  218 => 77,  202 => 77,  188 => 90,  185 => 74,  170 => 84,  167 => 60,  148 => 44,  90 => 37,  84 => 27,  701 => 418,  692 => 412,  687 => 178,  685 => 405,  675 => 463,  670 => 231,  665 => 398,  661 => 227,  654 => 389,  650 => 388,  644 => 385,  640 => 217,  634 => 381,  624 => 374,  616 => 450,  606 => 208,  599 => 358,  592 => 179,  588 => 352,  586 => 349,  584 => 348,  578 => 345,  568 => 179,  561 => 334,  553 => 176,  549 => 327,  542 => 172,  537 => 178,  529 => 315,  525 => 408,  520 => 406,  515 => 404,  503 => 156,  497 => 300,  492 => 132,  485 => 150,  477 => 150,  467 => 134,  463 => 133,  456 => 142,  454 => 141,  450 => 268,  446 => 197,  433 => 258,  431 => 189,  426 => 134,  416 => 248,  410 => 129,  385 => 226,  363 => 153,  348 => 140,  336 => 113,  332 => 116,  327 => 114,  313 => 73,  299 => 174,  292 => 87,  284 => 167,  242 => 118,  232 => 88,  186 => 54,  127 => 35,  114 => 89,  104 => 37,  23 => 13,  263 => 95,  256 => 96,  249 => 50,  245 => 49,  239 => 117,  236 => 63,  225 => 89,  213 => 78,  207 => 75,  197 => 69,  191 => 67,  175 => 58,  160 => 48,  155 => 47,  152 => 46,  146 => 34,  137 => 47,  126 => 55,  100 => 36,  97 => 41,  77 => 25,  34 => 5,  53 => 17,  20 => 1,  480 => 151,  474 => 149,  469 => 158,  461 => 155,  457 => 131,  453 => 199,  444 => 149,  440 => 263,  437 => 147,  435 => 136,  430 => 103,  427 => 143,  423 => 133,  413 => 134,  409 => 124,  407 => 128,  402 => 130,  398 => 126,  393 => 125,  387 => 164,  384 => 116,  381 => 122,  379 => 119,  374 => 81,  368 => 212,  365 => 111,  362 => 141,  360 => 109,  355 => 150,  341 => 118,  337 => 103,  322 => 184,  314 => 99,  312 => 130,  309 => 129,  305 => 70,  298 => 120,  294 => 111,  285 => 81,  283 => 115,  278 => 98,  268 => 73,  264 => 72,  258 => 94,  252 => 68,  247 => 66,  241 => 93,  229 => 87,  220 => 81,  214 => 61,  177 => 119,  169 => 51,  140 => 58,  132 => 57,  128 => 47,  107 => 44,  61 => 23,  273 => 130,  269 => 107,  254 => 60,  243 => 92,  240 => 86,  238 => 64,  235 => 89,  230 => 82,  227 => 86,  224 => 81,  221 => 106,  219 => 33,  217 => 87,  208 => 76,  204 => 28,  179 => 171,  159 => 49,  143 => 51,  135 => 62,  119 => 40,  102 => 33,  71 => 23,  67 => 22,  63 => 21,  59 => 22,  38 => 6,  94 => 21,  89 => 30,  85 => 23,  75 => 28,  68 => 12,  56 => 16,  87 => 33,  21 => 2,  26 => 3,  93 => 38,  88 => 25,  78 => 18,  46 => 14,  27 => 7,  44 => 11,  31 => 8,  28 => 6,  201 => 57,  196 => 92,  183 => 74,  171 => 81,  166 => 54,  163 => 82,  158 => 80,  156 => 62,  151 => 59,  142 => 42,  138 => 94,  136 => 71,  121 => 50,  117 => 39,  105 => 25,  91 => 34,  62 => 21,  49 => 14,  24 => 2,  25 => 35,  19 => 1,  79 => 29,  72 => 27,  69 => 26,  47 => 15,  40 => 11,  37 => 7,  22 => 2,  246 => 96,  157 => 47,  145 => 74,  139 => 49,  131 => 45,  123 => 61,  120 => 31,  115 => 47,  111 => 47,  108 => 47,  101 => 43,  98 => 34,  96 => 35,  83 => 30,  74 => 27,  66 => 25,  55 => 38,  52 => 12,  50 => 16,  43 => 12,  41 => 19,  35 => 5,  32 => 6,  29 => 3,  209 => 24,  203 => 73,  199 => 93,  193 => 92,  189 => 66,  187 => 75,  182 => 87,  176 => 86,  173 => 85,  168 => 61,  164 => 54,  162 => 59,  154 => 60,  149 => 62,  147 => 75,  144 => 42,  141 => 73,  133 => 49,  130 => 46,  125 => 42,  122 => 41,  116 => 57,  112 => 36,  109 => 52,  106 => 51,  103 => 38,  99 => 23,  95 => 39,  92 => 28,  86 => 33,  82 => 19,  80 => 29,  73 => 23,  64 => 24,  60 => 20,  57 => 19,  54 => 19,  51 => 37,  48 => 16,  45 => 14,  42 => 8,  39 => 10,  36 => 9,  33 => 6,  30 => 7,);
    }
}
