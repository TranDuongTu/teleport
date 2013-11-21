<?php

/* SonataDoctrineMongoDBAdminBundle:CRUD:show_mongo_many.html.twig */
class __TwigTemplate_dfb5e6228617afbe0f11c66f147fd7bff97c31364cb6b376a9e6de8744a0fd2d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig");

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_field($context, array $blocks = array())
    {
        // line 16
        echo "    <ul class=\"sonata-ba-show-many-to-many\">
    ";
        // line 17
        if ((($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "hasassociationadmin") && $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin"), "hasRoute", array(0 => "edit"), "method")) && $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin"), "isGranted", array(0 => "edit"), "method"))) {
            // line 18
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")));
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 19
                echo "            <li>
                <a href=\"";
                // line 20
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin"), "generateObjectUrl", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options"), "route"), "name"), 1 => (isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), 2 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options"), "route"), "parameters")), "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('sonata_admin')->renderRelationElement((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), (isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description"))), "html", null, true);
                echo "</a>
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "    ";
        } else {
            // line 24
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")));
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 25
                echo "            <li>";
                echo twig_escape_filter($this->env, $this->env->getExtension('sonata_admin')->renderRelationElement((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), (isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description"))), "html", null, true);
                echo "</li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "    ";
        }
        // line 28
        echo "        </ul>
";
    }

    public function getTemplateName()
    {
        return "SonataDoctrineMongoDBAdminBundle:CRUD:show_mongo_many.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 24,  76 => 20,  81 => 63,  194 => 88,  181 => 80,  161 => 71,  110 => 48,  65 => 30,  399 => 158,  396 => 157,  394 => 156,  383 => 150,  377 => 147,  371 => 144,  366 => 142,  359 => 140,  357 => 139,  352 => 138,  345 => 135,  342 => 133,  335 => 129,  329 => 126,  325 => 125,  321 => 124,  308 => 118,  289 => 109,  276 => 102,  270 => 100,  267 => 98,  260 => 94,  237 => 85,  234 => 84,  218 => 77,  202 => 73,  188 => 68,  185 => 65,  170 => 61,  167 => 60,  148 => 64,  90 => 34,  84 => 39,  701 => 418,  692 => 412,  687 => 409,  685 => 405,  675 => 402,  670 => 400,  665 => 398,  661 => 396,  654 => 389,  650 => 388,  644 => 385,  640 => 384,  634 => 381,  624 => 374,  616 => 369,  606 => 362,  599 => 358,  592 => 354,  588 => 352,  586 => 349,  584 => 348,  578 => 345,  568 => 338,  561 => 334,  553 => 329,  549 => 327,  542 => 320,  537 => 318,  529 => 315,  525 => 314,  520 => 312,  515 => 310,  503 => 303,  497 => 300,  492 => 298,  485 => 293,  477 => 288,  467 => 281,  463 => 280,  456 => 275,  454 => 269,  450 => 268,  446 => 266,  433 => 258,  431 => 257,  426 => 255,  416 => 248,  410 => 245,  385 => 226,  363 => 210,  348 => 136,  336 => 189,  332 => 188,  327 => 186,  313 => 178,  299 => 174,  292 => 170,  284 => 167,  242 => 140,  232 => 83,  186 => 83,  127 => 56,  114 => 23,  104 => 67,  23 => 18,  263 => 104,  256 => 102,  249 => 89,  245 => 88,  239 => 86,  236 => 93,  225 => 89,  213 => 126,  207 => 83,  197 => 119,  191 => 69,  175 => 77,  160 => 68,  155 => 55,  152 => 92,  146 => 63,  137 => 59,  126 => 51,  100 => 22,  97 => 63,  77 => 28,  34 => 17,  53 => 23,  20 => 11,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 263,  437 => 147,  435 => 262,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 236,  393 => 126,  387 => 152,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 212,  365 => 111,  362 => 141,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 184,  314 => 99,  312 => 98,  309 => 97,  305 => 175,  298 => 91,  294 => 111,  285 => 89,  283 => 106,  278 => 86,  268 => 157,  264 => 84,  258 => 150,  252 => 80,  247 => 78,  241 => 95,  229 => 73,  220 => 70,  214 => 75,  177 => 63,  169 => 74,  140 => 55,  132 => 58,  128 => 49,  107 => 36,  61 => 18,  273 => 101,  269 => 94,  254 => 91,  243 => 88,  240 => 86,  238 => 139,  235 => 74,  230 => 82,  227 => 80,  224 => 71,  221 => 78,  219 => 129,  217 => 87,  208 => 74,  204 => 72,  179 => 107,  159 => 70,  143 => 56,  135 => 81,  119 => 42,  102 => 39,  71 => 56,  67 => 55,  63 => 25,  59 => 18,  38 => 32,  94 => 21,  89 => 40,  85 => 25,  75 => 28,  68 => 31,  56 => 40,  87 => 25,  21 => 12,  26 => 14,  93 => 28,  88 => 67,  78 => 36,  46 => 35,  27 => 13,  44 => 20,  31 => 16,  28 => 15,  201 => 92,  196 => 71,  183 => 74,  171 => 102,  166 => 100,  163 => 69,  158 => 67,  156 => 93,  151 => 63,  142 => 61,  138 => 54,  136 => 48,  121 => 53,  117 => 41,  105 => 76,  91 => 27,  62 => 29,  49 => 21,  24 => 13,  25 => 12,  19 => 11,  79 => 18,  72 => 27,  69 => 30,  47 => 19,  40 => 19,  37 => 18,  22 => 12,  246 => 90,  157 => 56,  145 => 46,  139 => 49,  131 => 52,  123 => 50,  120 => 40,  115 => 50,  111 => 45,  108 => 36,  101 => 32,  98 => 44,  96 => 72,  83 => 25,  74 => 34,  66 => 15,  55 => 23,  52 => 21,  50 => 17,  43 => 19,  41 => 19,  35 => 17,  32 => 16,  29 => 15,  209 => 82,  203 => 122,  199 => 80,  193 => 70,  189 => 71,  187 => 75,  182 => 64,  176 => 64,  173 => 62,  168 => 72,  164 => 72,  162 => 57,  154 => 67,  149 => 64,  147 => 90,  144 => 62,  141 => 61,  133 => 55,  130 => 57,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 69,  106 => 40,  103 => 46,  99 => 38,  95 => 43,  92 => 61,  86 => 33,  82 => 22,  80 => 36,  73 => 19,  64 => 26,  60 => 25,  57 => 22,  54 => 14,  51 => 38,  48 => 41,  45 => 19,  42 => 7,  39 => 18,  36 => 18,  33 => 15,  30 => 15,);
    }
}
