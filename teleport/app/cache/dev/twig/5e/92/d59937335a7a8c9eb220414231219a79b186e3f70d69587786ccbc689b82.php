<?php

/* SonataAdminBundle:CRUD:base_inline_edit_field.html.twig */
class __TwigTemplate_5e92d59937335a7a8c9eb220414231219a79b186e3f70d69587786ccbc689b82 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'label' => array($this, 'block_label'),
            'field' => array($this, 'block_field'),
            'errors' => array($this, 'block_errors'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "
<div id=\"sonata-ba-field-container-";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), "vars"), "id"), "html", null, true);
        echo "\" class=\"sonata-ba-field sonata-ba-field-";
        echo twig_escape_filter($this->env, (isset($context["edit"]) ? $context["edit"] : $this->getContext($context, "edit")), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, (isset($context["inline"]) ? $context["inline"] : $this->getContext($context, "inline")), "html", null, true);
        echo " ";
        if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), "vars"), "errors"))) {
            echo "sonata-ba-field-error";
        }
        echo "\">

    ";
        // line 14
        $this->displayBlock('label', $context, $blocks);
        // line 24
        echo "
    ";
        // line 25
        $this->displayBlock('field', $context, $blocks);
        // line 26
        echo "
    <div class=\"sonata-ba-field-error-messages\">
        ";
        // line 28
        $this->displayBlock('errors', $context, $blocks);
        // line 29
        echo "    </div>
</div>
";
    }

    // line 14
    public function block_label($context, array $blocks = array())
    {
        // line 15
        echo "        ";
        if (((isset($context["inline"]) ? $context["inline"] : $this->getContext($context, "inline")) == "natural")) {
            // line 16
            echo "            ";
            if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "name", array(), "any", true, true)) {
                // line 17
                echo "                ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'label', (twig_test_empty($_label_ = $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options"), "name")) ? array() : array("label" => $_label_)));
                echo "
            ";
            } else {
                // line 19
                echo "                ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'label');
                echo "
            ";
            }
            // line 21
            echo "            <br />
        ";
        }
        // line 23
        echo "    ";
    }

    // line 25
    public function block_field($context, array $blocks = array())
    {
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget');
    }

    // line 28
    public function block_errors($context, array $blocks = array())
    {
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'errors');
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_inline_edit_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  370 => 100,  367 => 99,  346 => 92,  343 => 91,  330 => 87,  320 => 84,  310 => 81,  304 => 79,  302 => 78,  296 => 76,  293 => 75,  287 => 72,  271 => 66,  265 => 64,  262 => 63,  257 => 61,  216 => 25,  192 => 23,  180 => 104,  174 => 60,  12 => 34,  150 => 58,  70 => 29,  113 => 39,  713 => 214,  707 => 211,  704 => 210,  702 => 209,  696 => 206,  686 => 205,  681 => 203,  669 => 201,  666 => 200,  663 => 199,  655 => 194,  652 => 193,  635 => 191,  618 => 190,  613 => 188,  608 => 187,  605 => 186,  602 => 185,  596 => 181,  590 => 178,  585 => 177,  551 => 174,  547 => 173,  539 => 171,  536 => 170,  533 => 169,  530 => 168,  528 => 167,  516 => 161,  512 => 159,  510 => 158,  507 => 157,  505 => 156,  502 => 155,  498 => 134,  486 => 130,  483 => 129,  473 => 150,  465 => 147,  462 => 146,  451 => 141,  428 => 136,  425 => 135,  414 => 127,  403 => 121,  400 => 120,  388 => 117,  361 => 97,  358 => 106,  349 => 103,  347 => 102,  339 => 100,  326 => 93,  324 => 92,  319 => 90,  311 => 89,  307 => 87,  297 => 84,  291 => 82,  286 => 80,  274 => 77,  272 => 76,  250 => 67,  233 => 62,  228 => 59,  223 => 27,  200 => 55,  279 => 132,  253 => 122,  244 => 119,  198 => 94,  195 => 93,  344 => 97,  340 => 90,  338 => 94,  315 => 83,  295 => 88,  288 => 85,  282 => 79,  280 => 69,  277 => 68,  259 => 124,  215 => 102,  190 => 50,  184 => 47,  178 => 45,  153 => 48,  129 => 42,  124 => 43,  118 => 46,  58 => 22,  76 => 32,  81 => 34,  194 => 88,  181 => 47,  161 => 78,  110 => 36,  65 => 15,  399 => 158,  396 => 157,  394 => 118,  383 => 150,  377 => 115,  371 => 113,  366 => 142,  359 => 140,  357 => 139,  352 => 94,  345 => 135,  342 => 101,  335 => 93,  329 => 95,  325 => 125,  321 => 91,  308 => 118,  289 => 81,  276 => 102,  270 => 129,  267 => 128,  260 => 62,  237 => 85,  234 => 84,  218 => 77,  202 => 73,  188 => 21,  185 => 20,  170 => 61,  167 => 60,  148 => 64,  90 => 18,  84 => 16,  701 => 418,  692 => 412,  687 => 409,  685 => 405,  675 => 402,  670 => 400,  665 => 398,  661 => 396,  654 => 389,  650 => 388,  644 => 385,  640 => 384,  634 => 381,  624 => 374,  616 => 369,  606 => 362,  599 => 358,  592 => 179,  588 => 352,  586 => 349,  584 => 348,  578 => 345,  568 => 175,  561 => 334,  553 => 329,  549 => 327,  542 => 172,  537 => 318,  529 => 315,  525 => 166,  520 => 312,  515 => 310,  503 => 303,  497 => 300,  492 => 132,  485 => 293,  477 => 288,  467 => 148,  463 => 280,  456 => 143,  454 => 269,  450 => 268,  446 => 139,  433 => 258,  431 => 257,  426 => 255,  416 => 248,  410 => 245,  385 => 226,  363 => 210,  348 => 136,  336 => 99,  332 => 88,  327 => 86,  313 => 82,  299 => 174,  292 => 87,  284 => 167,  242 => 118,  232 => 83,  186 => 83,  127 => 56,  114 => 23,  104 => 42,  23 => 1,  263 => 71,  256 => 102,  249 => 55,  245 => 88,  239 => 117,  236 => 63,  225 => 89,  213 => 126,  207 => 83,  197 => 54,  191 => 50,  175 => 43,  160 => 52,  155 => 75,  152 => 63,  146 => 34,  137 => 47,  126 => 55,  100 => 36,  97 => 37,  77 => 20,  34 => 16,  53 => 24,  20 => 1,  480 => 128,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 142,  444 => 149,  440 => 263,  437 => 147,  435 => 262,  430 => 137,  427 => 143,  423 => 128,  413 => 134,  409 => 124,  407 => 131,  402 => 130,  398 => 119,  393 => 126,  387 => 152,  384 => 116,  381 => 120,  379 => 119,  374 => 114,  368 => 212,  365 => 111,  362 => 141,  360 => 109,  355 => 95,  341 => 105,  337 => 103,  322 => 184,  314 => 99,  312 => 89,  309 => 97,  305 => 175,  298 => 91,  294 => 111,  285 => 84,  283 => 70,  278 => 86,  268 => 73,  264 => 72,  258 => 150,  252 => 68,  247 => 66,  241 => 31,  229 => 73,  220 => 56,  214 => 75,  177 => 63,  169 => 58,  140 => 53,  132 => 44,  128 => 44,  107 => 40,  61 => 28,  273 => 130,  269 => 75,  254 => 60,  243 => 65,  240 => 86,  238 => 64,  235 => 114,  230 => 82,  227 => 109,  224 => 71,  221 => 106,  219 => 129,  217 => 87,  208 => 57,  204 => 72,  179 => 72,  159 => 49,  143 => 48,  135 => 48,  119 => 39,  102 => 39,  71 => 32,  67 => 31,  63 => 16,  59 => 29,  38 => 14,  94 => 36,  89 => 37,  85 => 28,  75 => 31,  68 => 24,  56 => 12,  87 => 38,  21 => 11,  26 => 14,  93 => 28,  88 => 32,  78 => 21,  46 => 9,  27 => 14,  44 => 20,  31 => 23,  28 => 22,  201 => 92,  196 => 52,  183 => 74,  171 => 81,  166 => 57,  163 => 60,  158 => 37,  156 => 36,  151 => 61,  142 => 58,  138 => 54,  136 => 58,  121 => 42,  117 => 50,  105 => 76,  91 => 39,  62 => 25,  49 => 28,  24 => 13,  25 => 12,  19 => 11,  79 => 33,  72 => 19,  69 => 24,  47 => 19,  40 => 24,  37 => 24,  22 => 11,  246 => 54,  157 => 58,  145 => 56,  139 => 59,  131 => 45,  123 => 48,  120 => 48,  115 => 40,  111 => 41,  108 => 42,  101 => 40,  98 => 38,  96 => 19,  83 => 35,  74 => 19,  66 => 17,  55 => 18,  52 => 24,  50 => 23,  43 => 25,  41 => 19,  35 => 17,  32 => 3,  29 => 2,  209 => 24,  203 => 56,  199 => 53,  193 => 92,  189 => 71,  187 => 49,  182 => 86,  176 => 102,  173 => 71,  168 => 72,  164 => 54,  162 => 57,  154 => 67,  149 => 62,  147 => 46,  144 => 45,  141 => 61,  133 => 51,  130 => 57,  125 => 40,  122 => 43,  116 => 47,  112 => 47,  109 => 45,  106 => 35,  103 => 41,  99 => 49,  95 => 37,  92 => 28,  86 => 25,  82 => 23,  80 => 28,  73 => 7,  64 => 184,  60 => 15,  57 => 14,  54 => 26,  51 => 29,  48 => 15,  45 => 26,  42 => 19,  39 => 25,  36 => 17,  33 => 16,  30 => 15,);
    }
}
