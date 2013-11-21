<?php

/* SonataAdminBundle:CRUD:base_list_field.html.twig */
class __TwigTemplate_07433e9f0530c983256d44492944c1616a02614e622c4574c56124629a83618d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "
<td class=\"sonata-ba-list-field sonata-ba-list-field-";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "type"), "html", null, true);
        echo "\" objectId=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\">
    ";
        // line 13
        if (((($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "identifier", array(), "any", true, true) && $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "route", array(), "any", true, true)) && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options"), "route"), "name") == "show")) ? ("VIEW") : (twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options"), "route"), "name")))), 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method")) && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options"), "route"), "name")), "method"))) {
            // line 19
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options"), "route"), "name"), 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), 2 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options"), "route"), "parameters")), "method"), "html", null, true);
            echo "\">";
            // line 20
            $this->displayBlock('field', $context, $blocks);
            // line 21
            echo "</a>
    ";
        } else {
            // line 23
            echo "        ";
            $this->displayBlock("field", $context, $blocks);
            echo "
    ";
        }
        // line 25
        echo "</td>
";
    }

    // line 20
    public function block_field($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_list_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  557 => 177,  545 => 173,  540 => 171,  534 => 169,  532 => 168,  526 => 164,  517 => 161,  513 => 160,  504 => 158,  500 => 157,  495 => 155,  488 => 153,  470 => 135,  460 => 132,  449 => 123,  441 => 105,  419 => 98,  415 => 97,  395 => 84,  392 => 83,  386 => 95,  382 => 93,  380 => 83,  369 => 136,  333 => 117,  300 => 113,  275 => 77,  226 => 67,  205 => 59,  172 => 52,  370 => 100,  367 => 131,  346 => 92,  343 => 91,  330 => 87,  320 => 84,  310 => 81,  304 => 79,  302 => 114,  296 => 111,  293 => 75,  287 => 72,  271 => 66,  265 => 64,  262 => 63,  257 => 61,  216 => 25,  192 => 55,  180 => 104,  174 => 53,  12 => 34,  150 => 58,  70 => 29,  113 => 39,  713 => 214,  707 => 211,  704 => 210,  702 => 209,  696 => 206,  686 => 205,  681 => 203,  669 => 201,  666 => 200,  663 => 199,  655 => 194,  652 => 193,  635 => 191,  618 => 190,  613 => 188,  608 => 187,  605 => 186,  602 => 185,  596 => 181,  590 => 178,  585 => 177,  551 => 174,  547 => 173,  539 => 171,  536 => 170,  533 => 169,  530 => 168,  528 => 167,  516 => 161,  512 => 159,  510 => 158,  507 => 159,  505 => 156,  502 => 155,  498 => 134,  486 => 130,  483 => 129,  473 => 150,  465 => 147,  462 => 146,  451 => 141,  428 => 136,  425 => 135,  414 => 127,  403 => 121,  400 => 120,  388 => 107,  361 => 127,  358 => 106,  349 => 103,  347 => 118,  339 => 100,  326 => 93,  324 => 116,  319 => 90,  311 => 89,  307 => 115,  297 => 84,  291 => 109,  286 => 80,  274 => 77,  272 => 76,  250 => 67,  233 => 62,  228 => 59,  223 => 66,  200 => 55,  279 => 132,  253 => 122,  244 => 119,  198 => 94,  195 => 93,  344 => 97,  340 => 90,  338 => 94,  315 => 83,  295 => 88,  288 => 108,  282 => 80,  280 => 79,  277 => 68,  259 => 124,  215 => 102,  190 => 50,  184 => 47,  178 => 45,  153 => 48,  129 => 42,  124 => 43,  118 => 46,  58 => 22,  76 => 32,  81 => 30,  194 => 88,  181 => 47,  161 => 78,  110 => 36,  65 => 25,  399 => 158,  396 => 157,  394 => 118,  383 => 150,  377 => 82,  371 => 113,  366 => 142,  359 => 140,  357 => 125,  352 => 121,  345 => 135,  342 => 101,  335 => 93,  329 => 95,  325 => 125,  321 => 91,  308 => 118,  289 => 81,  276 => 102,  270 => 129,  267 => 128,  260 => 62,  237 => 85,  234 => 84,  218 => 77,  202 => 73,  188 => 21,  185 => 20,  170 => 61,  167 => 60,  148 => 44,  90 => 18,  84 => 16,  701 => 418,  692 => 412,  687 => 409,  685 => 405,  675 => 402,  670 => 400,  665 => 398,  661 => 396,  654 => 389,  650 => 388,  644 => 385,  640 => 384,  634 => 381,  624 => 374,  616 => 369,  606 => 362,  599 => 358,  592 => 179,  588 => 352,  586 => 349,  584 => 348,  578 => 345,  568 => 179,  561 => 334,  553 => 176,  549 => 327,  542 => 172,  537 => 318,  529 => 315,  525 => 166,  520 => 312,  515 => 310,  503 => 303,  497 => 300,  492 => 132,  485 => 293,  477 => 150,  467 => 134,  463 => 133,  456 => 143,  454 => 269,  450 => 268,  446 => 122,  433 => 258,  431 => 257,  426 => 102,  416 => 248,  410 => 96,  385 => 226,  363 => 210,  348 => 136,  336 => 99,  332 => 88,  327 => 86,  313 => 82,  299 => 174,  292 => 87,  284 => 167,  242 => 118,  232 => 83,  186 => 54,  127 => 34,  114 => 23,  104 => 42,  23 => 12,  263 => 71,  256 => 102,  249 => 70,  245 => 88,  239 => 117,  236 => 63,  225 => 89,  213 => 126,  207 => 83,  197 => 56,  191 => 50,  175 => 43,  160 => 48,  155 => 75,  152 => 63,  146 => 34,  137 => 47,  126 => 55,  100 => 36,  97 => 37,  77 => 20,  34 => 16,  53 => 24,  20 => 11,  480 => 151,  474 => 149,  469 => 158,  461 => 155,  457 => 131,  453 => 124,  444 => 149,  440 => 263,  437 => 147,  435 => 262,  430 => 103,  427 => 143,  423 => 128,  413 => 134,  409 => 124,  407 => 95,  402 => 130,  398 => 119,  393 => 126,  387 => 152,  384 => 116,  381 => 120,  379 => 119,  374 => 81,  368 => 212,  365 => 111,  362 => 141,  360 => 109,  355 => 122,  341 => 105,  337 => 103,  322 => 184,  314 => 99,  312 => 89,  309 => 97,  305 => 175,  298 => 91,  294 => 111,  285 => 81,  283 => 70,  278 => 86,  268 => 73,  264 => 72,  258 => 150,  252 => 68,  247 => 66,  241 => 31,  229 => 73,  220 => 65,  214 => 61,  177 => 63,  169 => 51,  140 => 41,  132 => 44,  128 => 44,  107 => 40,  61 => 28,  273 => 130,  269 => 75,  254 => 60,  243 => 68,  240 => 86,  238 => 64,  235 => 114,  230 => 82,  227 => 109,  224 => 71,  221 => 106,  219 => 129,  217 => 87,  208 => 60,  204 => 72,  179 => 72,  159 => 49,  143 => 48,  135 => 48,  119 => 31,  102 => 142,  71 => 32,  67 => 31,  63 => 16,  59 => 23,  38 => 14,  94 => 36,  89 => 37,  85 => 28,  75 => 31,  68 => 26,  56 => 22,  87 => 38,  21 => 11,  26 => 14,  93 => 138,  88 => 74,  78 => 29,  46 => 9,  27 => 14,  44 => 20,  31 => 19,  28 => 22,  201 => 57,  196 => 52,  183 => 74,  171 => 81,  166 => 50,  163 => 49,  158 => 37,  156 => 36,  151 => 45,  142 => 42,  138 => 54,  136 => 39,  121 => 42,  117 => 50,  105 => 143,  91 => 75,  62 => 24,  49 => 28,  24 => 13,  25 => 12,  19 => 11,  79 => 33,  72 => 19,  69 => 24,  47 => 25,  40 => 15,  37 => 21,  22 => 11,  246 => 69,  157 => 47,  145 => 43,  139 => 59,  131 => 45,  123 => 33,  120 => 48,  115 => 40,  111 => 41,  108 => 144,  101 => 40,  98 => 140,  96 => 139,  83 => 64,  74 => 19,  66 => 17,  55 => 18,  52 => 20,  50 => 20,  43 => 16,  41 => 23,  35 => 20,  32 => 3,  29 => 13,  209 => 24,  203 => 56,  199 => 53,  193 => 92,  189 => 71,  187 => 49,  182 => 86,  176 => 102,  173 => 71,  168 => 72,  164 => 54,  162 => 57,  154 => 46,  149 => 62,  147 => 46,  144 => 45,  141 => 61,  133 => 51,  130 => 35,  125 => 40,  122 => 43,  116 => 30,  112 => 47,  109 => 45,  106 => 35,  103 => 41,  99 => 49,  95 => 37,  92 => 28,  86 => 65,  82 => 23,  80 => 28,  73 => 27,  64 => 184,  60 => 15,  57 => 14,  54 => 26,  51 => 29,  48 => 15,  45 => 17,  42 => 19,  39 => 25,  36 => 17,  33 => 16,  30 => 15,);
    }
}
