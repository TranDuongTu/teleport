<?php

/* SonataAdminBundle:Pager:base_links.html.twig */
class __TwigTemplate_b647d6a94f6b671cc7dd138b8e3c3569a60acc5267393cede1a118cda049a5bb extends Twig_Template
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
<tr>
    <td colspan=\"";
        // line 13
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "list"), "elements")), "html", null, true);
        echo "\">
        <div class=\"pagination pagination-centered\">
            <ul>
                ";
        // line 16
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid"), "pager"), "page") > 2)) {
            // line 17
            echo "                    <li><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "modelmanager"), "paginationparameters", array(0 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid"), 1 => 1), "method")), "method"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_first_pager", array(), "SonataAdminBundle"), "html", null, true);
            echo "\">&laquo;</a></li>
                ";
        }
        // line 19
        echo "
                ";
        // line 20
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid"), "pager"), "page") != $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid"), "pager"), "previouspage"))) {
            // line 21
            echo "                    <li><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "modelmanager"), "paginationparameters", array(0 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid"), 1 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid"), "pager"), "previouspage")), "method")), "method"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_previous_pager", array(), "SonataAdminBundle"), "html", null, true);
            echo "\">&lsaquo;</a></li>
                ";
        }
        // line 23
        echo "
                ";
        // line 25
        echo "                ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid"), "pager"), "getLinks", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 26
            echo "                    ";
            if (((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) == $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid"), "pager"), "page"))) {
                // line 27
                echo "                        <li class=\"active\"><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "modelmanager"), "paginationparameters", array(0 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid"), 1 => (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page"))), "method")), "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "html", null, true);
                echo "</a></li>
                    ";
            } else {
                // line 29
                echo "                        <li><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "modelmanager"), "paginationparameters", array(0 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid"), 1 => (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page"))), "method")), "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "html", null, true);
                echo "</a></li>
                    ";
            }
            // line 31
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "
                ";
        // line 33
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid"), "pager"), "page") != $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid"), "pager"), "nextpage"))) {
            // line 34
            echo "                    <li><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "modelmanager"), "paginationparameters", array(0 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid"), 1 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid"), "pager"), "nextpage")), "method")), "method"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_next_pager", array(), "SonataAdminBundle"), "html", null, true);
            echo "\">&rsaquo;</a></li>
                ";
        }
        // line 36
        echo "
                ";
        // line 37
        if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid"), "pager"), "page") != $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid"), "pager"), "lastpage")) && ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid"), "pager"), "lastpage") != $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid"), "pager"), "nextpage")))) {
            // line 38
            echo "                    <li><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "modelmanager"), "paginationparameters", array(0 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid"), 1 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid"), "pager"), "lastpage")), "method")), "method"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_last_pager", array(), "SonataAdminBundle"), "html", null, true);
            echo "\">&raquo;</a></li>
                ";
        }
        // line 40
        echo "            </ul>
        </div>
    </td>
</tr>
";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Pager:base_links.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  557 => 177,  545 => 173,  540 => 171,  534 => 169,  532 => 168,  526 => 164,  517 => 161,  513 => 160,  504 => 158,  500 => 157,  495 => 155,  488 => 153,  470 => 135,  460 => 132,  449 => 123,  441 => 105,  419 => 98,  415 => 97,  395 => 84,  392 => 83,  386 => 95,  382 => 93,  380 => 83,  369 => 136,  333 => 117,  300 => 113,  275 => 77,  226 => 67,  205 => 59,  172 => 52,  370 => 100,  367 => 131,  346 => 92,  343 => 91,  330 => 87,  320 => 84,  310 => 81,  304 => 79,  302 => 114,  296 => 111,  293 => 75,  287 => 72,  271 => 66,  265 => 64,  262 => 63,  257 => 61,  216 => 25,  192 => 55,  180 => 104,  174 => 53,  12 => 34,  150 => 58,  70 => 29,  113 => 46,  713 => 214,  707 => 211,  704 => 210,  702 => 209,  696 => 206,  686 => 205,  681 => 203,  669 => 201,  666 => 200,  663 => 199,  655 => 194,  652 => 193,  635 => 191,  618 => 190,  613 => 188,  608 => 187,  605 => 186,  602 => 185,  596 => 181,  590 => 178,  585 => 177,  551 => 174,  547 => 173,  539 => 171,  536 => 170,  533 => 169,  530 => 168,  528 => 167,  516 => 161,  512 => 159,  510 => 158,  507 => 159,  505 => 156,  502 => 155,  498 => 134,  486 => 130,  483 => 129,  473 => 150,  465 => 147,  462 => 146,  451 => 141,  428 => 136,  425 => 135,  414 => 127,  403 => 121,  400 => 120,  388 => 107,  361 => 127,  358 => 106,  349 => 103,  347 => 118,  339 => 100,  326 => 93,  324 => 116,  319 => 90,  311 => 89,  307 => 115,  297 => 84,  291 => 109,  286 => 80,  274 => 77,  272 => 76,  250 => 67,  233 => 62,  228 => 59,  223 => 66,  200 => 55,  279 => 132,  253 => 122,  244 => 119,  198 => 94,  195 => 93,  344 => 97,  340 => 90,  338 => 94,  315 => 83,  295 => 88,  288 => 108,  282 => 80,  280 => 79,  277 => 68,  259 => 124,  215 => 102,  190 => 50,  184 => 47,  178 => 45,  153 => 48,  129 => 56,  124 => 43,  118 => 49,  58 => 25,  76 => 33,  81 => 33,  194 => 88,  181 => 47,  161 => 78,  110 => 45,  65 => 29,  399 => 158,  396 => 157,  394 => 118,  383 => 150,  377 => 82,  371 => 113,  366 => 142,  359 => 140,  357 => 125,  352 => 121,  345 => 135,  342 => 101,  335 => 93,  329 => 95,  325 => 125,  321 => 91,  308 => 118,  289 => 81,  276 => 102,  270 => 129,  267 => 128,  260 => 62,  237 => 85,  234 => 84,  218 => 77,  202 => 73,  188 => 21,  185 => 20,  170 => 61,  167 => 60,  148 => 44,  90 => 34,  84 => 34,  701 => 418,  692 => 412,  687 => 409,  685 => 405,  675 => 402,  670 => 400,  665 => 398,  661 => 396,  654 => 389,  650 => 388,  644 => 385,  640 => 384,  634 => 381,  624 => 374,  616 => 369,  606 => 362,  599 => 358,  592 => 179,  588 => 352,  586 => 349,  584 => 348,  578 => 345,  568 => 179,  561 => 334,  553 => 176,  549 => 327,  542 => 172,  537 => 318,  529 => 315,  525 => 166,  520 => 312,  515 => 310,  503 => 303,  497 => 300,  492 => 132,  485 => 293,  477 => 150,  467 => 134,  463 => 133,  456 => 143,  454 => 269,  450 => 268,  446 => 122,  433 => 258,  431 => 257,  426 => 102,  416 => 248,  410 => 96,  385 => 226,  363 => 210,  348 => 136,  336 => 99,  332 => 88,  327 => 86,  313 => 82,  299 => 174,  292 => 87,  284 => 167,  242 => 118,  232 => 83,  186 => 54,  127 => 34,  114 => 50,  104 => 43,  23 => 13,  263 => 71,  256 => 102,  249 => 70,  245 => 88,  239 => 117,  236 => 63,  225 => 89,  213 => 126,  207 => 83,  197 => 56,  191 => 50,  175 => 43,  160 => 48,  155 => 75,  152 => 63,  146 => 34,  137 => 47,  126 => 55,  100 => 43,  97 => 41,  77 => 30,  34 => 15,  53 => 24,  20 => 11,  480 => 151,  474 => 149,  469 => 158,  461 => 155,  457 => 131,  453 => 124,  444 => 149,  440 => 263,  437 => 147,  435 => 262,  430 => 103,  427 => 143,  423 => 128,  413 => 134,  409 => 124,  407 => 95,  402 => 130,  398 => 119,  393 => 126,  387 => 152,  384 => 116,  381 => 120,  379 => 119,  374 => 81,  368 => 212,  365 => 111,  362 => 141,  360 => 109,  355 => 122,  341 => 105,  337 => 103,  322 => 184,  314 => 99,  312 => 89,  309 => 97,  305 => 175,  298 => 91,  294 => 111,  285 => 81,  283 => 70,  278 => 86,  268 => 73,  264 => 72,  258 => 150,  252 => 68,  247 => 66,  241 => 31,  229 => 73,  220 => 65,  214 => 61,  177 => 63,  169 => 51,  140 => 41,  132 => 57,  128 => 47,  107 => 44,  61 => 26,  273 => 130,  269 => 75,  254 => 60,  243 => 68,  240 => 86,  238 => 64,  235 => 114,  230 => 82,  227 => 109,  224 => 71,  221 => 106,  219 => 129,  217 => 87,  208 => 60,  204 => 72,  179 => 72,  159 => 49,  143 => 48,  135 => 48,  119 => 44,  102 => 43,  71 => 29,  67 => 19,  63 => 27,  59 => 27,  38 => 7,  94 => 40,  89 => 34,  85 => 32,  75 => 31,  68 => 30,  56 => 25,  87 => 35,  21 => 11,  26 => 14,  93 => 39,  88 => 33,  78 => 36,  46 => 19,  27 => 14,  44 => 21,  31 => 17,  28 => 14,  201 => 57,  196 => 52,  183 => 74,  171 => 81,  166 => 50,  163 => 49,  158 => 37,  156 => 36,  151 => 45,  142 => 42,  138 => 54,  136 => 39,  121 => 51,  117 => 45,  105 => 44,  91 => 39,  62 => 28,  49 => 20,  24 => 3,  25 => 13,  19 => 11,  79 => 31,  72 => 30,  69 => 33,  47 => 20,  40 => 19,  37 => 16,  22 => 2,  246 => 69,  157 => 47,  145 => 53,  139 => 51,  131 => 48,  123 => 47,  120 => 46,  115 => 47,  111 => 40,  108 => 45,  101 => 37,  98 => 36,  96 => 40,  83 => 32,  74 => 29,  66 => 26,  55 => 25,  52 => 23,  50 => 21,  43 => 20,  41 => 20,  35 => 20,  32 => 5,  29 => 16,  209 => 24,  203 => 56,  199 => 53,  193 => 92,  189 => 71,  187 => 49,  182 => 86,  176 => 102,  173 => 71,  168 => 72,  164 => 54,  162 => 57,  154 => 46,  149 => 62,  147 => 46,  144 => 45,  141 => 61,  133 => 49,  130 => 35,  125 => 46,  122 => 45,  116 => 43,  112 => 47,  109 => 45,  106 => 35,  103 => 38,  99 => 41,  95 => 19,  92 => 35,  86 => 33,  82 => 35,  80 => 31,  73 => 32,  64 => 27,  60 => 26,  57 => 23,  54 => 22,  51 => 23,  48 => 22,  45 => 21,  42 => 20,  39 => 19,  36 => 17,  33 => 16,  30 => 15,);
    }
}
