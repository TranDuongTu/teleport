<?php

/* SonataAdminBundle:Button:create_button.html.twig */
class __TwigTemplate_d336d0a08d8d37fc04e674f442d2b620c827b4fb7d9cbec85845512f3e4baf75 extends Twig_Template
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
        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "create"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "CREATE"), "method"))) {
            // line 13
            echo "    ";
            if (twig_test_empty($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "subClasses"))) {
                // line 14
                echo "        <a class=\"btn sonata-action-element\" href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "create"), "method"), "html", null, true);
                echo "\">
            <i class=\"icon-plus\"></i>
            ";
                // line 16
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_action_create", array(), "SonataAdminBundle"), "html", null, true);
                echo "</a>
    ";
            } else {
                // line 18
                echo "        <span class=\"btn-group sonata-action-element\">
            <a class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                <i class=\"icon-plus\"></i>
                ";
                // line 21
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_action_create", array(), "SonataAdminBundle"), "html", null, true);
                echo "
                <span class=\"caret\"></span>
            </a>
            <ul class=\"dropdown-menu\">
                ";
                // line 25
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "subclasses")));
                foreach ($context['_seq'] as $context["_key"] => $context["subclass"]) {
                    // line 26
                    echo "                    <li>
                        <a href=\"";
                    // line 27
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "create", 1 => array("subclass" => (isset($context["subclass"]) ? $context["subclass"] : $this->getContext($context, "subclass")))), "method"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["subclass"]) ? $context["subclass"] : $this->getContext($context, "subclass")), array(), $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "translationdomain")), "html", null, true);
                    echo "</a>
                    </li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subclass'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 30
                echo "            </ul>
        </span>
    ";
            }
        }
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Button:create_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 42,  713 => 214,  707 => 211,  704 => 210,  702 => 209,  696 => 206,  686 => 205,  681 => 203,  669 => 201,  666 => 200,  663 => 199,  655 => 194,  652 => 193,  635 => 191,  618 => 190,  613 => 188,  608 => 187,  605 => 186,  602 => 185,  596 => 181,  590 => 178,  585 => 177,  551 => 174,  547 => 173,  539 => 171,  536 => 170,  533 => 169,  530 => 168,  528 => 167,  516 => 161,  512 => 159,  510 => 158,  507 => 157,  505 => 156,  502 => 155,  498 => 134,  486 => 130,  483 => 129,  473 => 150,  465 => 147,  462 => 146,  451 => 141,  428 => 136,  425 => 135,  414 => 127,  403 => 121,  400 => 120,  388 => 117,  361 => 107,  358 => 106,  349 => 103,  347 => 102,  339 => 100,  326 => 93,  324 => 92,  319 => 90,  311 => 89,  307 => 87,  297 => 84,  291 => 82,  286 => 80,  274 => 77,  272 => 76,  250 => 67,  233 => 62,  228 => 59,  223 => 58,  200 => 55,  279 => 132,  253 => 122,  244 => 119,  198 => 94,  195 => 93,  344 => 97,  340 => 95,  338 => 94,  315 => 90,  295 => 88,  288 => 85,  282 => 79,  280 => 82,  277 => 78,  259 => 124,  215 => 102,  190 => 50,  184 => 47,  178 => 45,  153 => 62,  129 => 24,  124 => 52,  118 => 28,  58 => 22,  76 => 32,  81 => 16,  194 => 88,  181 => 47,  161 => 78,  110 => 41,  65 => 26,  399 => 158,  396 => 157,  394 => 118,  383 => 150,  377 => 115,  371 => 113,  366 => 142,  359 => 140,  357 => 139,  352 => 138,  345 => 135,  342 => 101,  335 => 93,  329 => 95,  325 => 125,  321 => 91,  308 => 118,  289 => 81,  276 => 102,  270 => 129,  267 => 128,  260 => 94,  237 => 85,  234 => 84,  218 => 77,  202 => 73,  188 => 89,  185 => 65,  170 => 61,  167 => 60,  148 => 64,  90 => 18,  84 => 16,  701 => 418,  692 => 412,  687 => 409,  685 => 405,  675 => 402,  670 => 400,  665 => 398,  661 => 396,  654 => 389,  650 => 388,  644 => 385,  640 => 384,  634 => 381,  624 => 374,  616 => 369,  606 => 362,  599 => 358,  592 => 179,  588 => 352,  586 => 349,  584 => 348,  578 => 345,  568 => 175,  561 => 334,  553 => 329,  549 => 327,  542 => 172,  537 => 318,  529 => 315,  525 => 166,  520 => 312,  515 => 310,  503 => 303,  497 => 300,  492 => 132,  485 => 293,  477 => 288,  467 => 148,  463 => 280,  456 => 143,  454 => 269,  450 => 268,  446 => 139,  433 => 258,  431 => 257,  426 => 255,  416 => 248,  410 => 245,  385 => 226,  363 => 210,  348 => 136,  336 => 99,  332 => 97,  327 => 186,  313 => 178,  299 => 174,  292 => 87,  284 => 167,  242 => 118,  232 => 83,  186 => 83,  127 => 56,  114 => 23,  104 => 40,  23 => 18,  263 => 71,  256 => 102,  249 => 67,  245 => 88,  239 => 117,  236 => 63,  225 => 89,  213 => 126,  207 => 83,  197 => 54,  191 => 50,  175 => 43,  160 => 68,  155 => 75,  152 => 38,  146 => 34,  137 => 68,  126 => 45,  100 => 41,  97 => 63,  77 => 40,  34 => 18,  53 => 24,  20 => 11,  480 => 128,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 142,  444 => 149,  440 => 263,  437 => 147,  435 => 262,  430 => 137,  427 => 143,  423 => 128,  413 => 134,  409 => 124,  407 => 131,  402 => 130,  398 => 119,  393 => 126,  387 => 152,  384 => 116,  381 => 120,  379 => 119,  374 => 114,  368 => 212,  365 => 111,  362 => 141,  360 => 109,  355 => 105,  341 => 105,  337 => 103,  322 => 184,  314 => 99,  312 => 89,  309 => 97,  305 => 175,  298 => 91,  294 => 111,  285 => 84,  283 => 106,  278 => 86,  268 => 73,  264 => 72,  258 => 150,  252 => 68,  247 => 66,  241 => 95,  229 => 73,  220 => 56,  214 => 75,  177 => 63,  169 => 69,  140 => 28,  132 => 47,  128 => 49,  107 => 24,  61 => 27,  273 => 130,  269 => 75,  254 => 68,  243 => 65,  240 => 86,  238 => 64,  235 => 114,  230 => 82,  227 => 109,  224 => 71,  221 => 106,  219 => 129,  217 => 87,  208 => 57,  204 => 72,  179 => 72,  159 => 70,  143 => 29,  135 => 48,  119 => 42,  102 => 42,  71 => 29,  67 => 31,  63 => 34,  59 => 165,  38 => 18,  94 => 39,  89 => 37,  85 => 35,  75 => 33,  68 => 30,  56 => 21,  87 => 17,  21 => 11,  26 => 14,  93 => 28,  88 => 36,  78 => 31,  46 => 35,  27 => 14,  44 => 21,  31 => 16,  28 => 13,  201 => 92,  196 => 52,  183 => 74,  171 => 81,  166 => 80,  163 => 68,  158 => 37,  156 => 36,  151 => 61,  142 => 58,  138 => 54,  136 => 48,  121 => 51,  117 => 50,  105 => 76,  91 => 38,  62 => 25,  49 => 112,  24 => 13,  25 => 12,  19 => 11,  79 => 14,  72 => 199,  69 => 32,  47 => 21,  40 => 44,  37 => 54,  22 => 12,  246 => 90,  157 => 64,  145 => 59,  139 => 57,  131 => 25,  123 => 30,  120 => 60,  115 => 27,  111 => 52,  108 => 36,  101 => 22,  98 => 38,  96 => 19,  83 => 42,  74 => 34,  66 => 36,  55 => 25,  52 => 113,  50 => 25,  43 => 21,  41 => 20,  35 => 17,  32 => 13,  29 => 15,  209 => 99,  203 => 56,  199 => 53,  193 => 92,  189 => 71,  187 => 49,  182 => 86,  176 => 83,  173 => 71,  168 => 72,  164 => 79,  162 => 57,  154 => 67,  149 => 36,  147 => 90,  144 => 33,  141 => 61,  133 => 55,  130 => 57,  125 => 44,  122 => 43,  116 => 43,  112 => 47,  109 => 69,  106 => 44,  103 => 46,  99 => 49,  95 => 20,  92 => 19,  86 => 17,  82 => 33,  80 => 9,  73 => 7,  64 => 184,  60 => 24,  57 => 27,  54 => 26,  51 => 38,  48 => 67,  45 => 22,  42 => 16,  39 => 15,  36 => 19,  33 => 16,  30 => 15,);
    }
}
