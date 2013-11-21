<?php

/* SonataAdminBundle:Form:silex_form_div_layout.html.twig */
class __TwigTemplate_2ba5ef175ea9d0d5b58fb6e7416a027538fc4f34f19e8240a6ed068776fe65d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'choice_widget' => array($this, 'block_choice_widget'),
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'form_label' => array($this, 'block_form_label'),
            'form_row' => array($this, 'block_form_row'),
            'form_errors' => array($this, 'block_form_errors'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
";
        // line 3
        $this->displayBlock('choice_widget', $context, $blocks);
        // line 34
        echo "
";
        // line 35
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 41
        echo "
";
        // line 43
        echo "
";
        // line 44
        $this->displayBlock('form_label', $context, $blocks);
        // line 64
        echo "
";
        // line 66
        echo "
";
        // line 67
        $this->displayBlock('form_row', $context, $blocks);
        // line 78
        echo "
";
        // line 80
        echo "
";
        // line 81
        $this->displayBlock('form_errors', $context, $blocks);
    }

    // line 3
    public function block_choice_widget($context, array $blocks = array())
    {
        // line 4
        ob_start();
        // line 5
        echo "    ";
        if ((isset($context["expanded"]) ? $context["expanded"] : $this->getContext($context, "expanded"))) {
            // line 6
            echo "        <ul ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo " class=\"inputs-list\">
        ";
            // line 7
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 8
                echo "            <li>
                ";
                // line 9
                ob_start();
                // line 10
                echo "                    ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), 'widget');
                echo "
                ";
                $context["form_widget_content"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 12
                echo "                ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), 'label', array("in_list_checkbox" => true, "widget" => (isset($context["form_widget_content"]) ? $context["form_widget_content"] : $this->getContext($context, "form_widget_content"))));
                echo "
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "        </ul>
    ";
        } else {
            // line 17
            echo "    <select ";
            $this->displayBlock("widget_attributes", $context, $blocks);
            if ((isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) {
                echo " multiple=\"multiple\"";
            }
            echo ">
        ";
            // line 18
            if ((!(null === (isset($context["empty_value"]) ? $context["empty_value"] : $this->getContext($context, "empty_value"))))) {
                // line 19
                echo "            <option value=\"\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["empty_value"]) ? $context["empty_value"] : $this->getContext($context, "empty_value")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
                echo "</option>
        ";
            }
            // line 21
            echo "        ";
            if ((twig_length_filter($this->env, (isset($context["preferred_choices"]) ? $context["preferred_choices"] : $this->getContext($context, "preferred_choices"))) > 0)) {
                // line 22
                echo "            ";
                $context["options"] = (isset($context["preferred_choices"]) ? $context["preferred_choices"] : $this->getContext($context, "preferred_choices"));
                // line 23
                echo "            ";
                $this->displayBlock("choice_widget_options", $context, $blocks);
                echo "
            ";
                // line 24
                if (((twig_length_filter($this->env, (isset($context["choices"]) ? $context["choices"] : $this->getContext($context, "choices"))) > 0) && (!(null === (isset($context["separator"]) ? $context["separator"] : $this->getContext($context, "separator")))))) {
                    // line 25
                    echo "                <option disabled=\"disabled\">";
                    echo twig_escape_filter($this->env, (isset($context["separator"]) ? $context["separator"] : $this->getContext($context, "separator")), "html", null, true);
                    echo "</option>
            ";
                }
                // line 27
                echo "        ";
            }
            // line 28
            echo "        ";
            $context["options"] = (isset($context["choices"]) ? $context["choices"] : $this->getContext($context, "choices"));
            // line 29
            echo "        ";
            $this->displayBlock("choice_widget_options", $context, $blocks);
            echo "
    </select>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 35
    public function block_form_widget_simple($context, array $blocks = array())
    {
        // line 36
        ob_start();
        // line 37
        echo "    ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "text")) : ("text"));
        // line 38
        echo "    <input type=\"";
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
        echo "\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " value=\"";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo "\" />
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 44
    public function block_form_label($context, array $blocks = array())
    {
        // line 45
        ob_start();
        // line 46
        echo "    ";
        if ((!(isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound")))) {
            // line 47
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("for" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
            // line 48
            echo "    ";
        }
        // line 49
        echo "    ";
        if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
            // line 50
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => ((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class"), "")) : ("")) . " required")));
            // line 51
            echo "    ";
        }
        // line 52
        echo "    ";
        if (((array_key_exists("in_list_checkbox", $context) && (isset($context["in_list_checkbox"]) ? $context["in_list_checkbox"] : $this->getContext($context, "in_list_checkbox"))) && array_key_exists("widget", $context))) {
            // line 53
            echo "        <label";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, (isset($context["attrname"]) ? $context["attrname"] : $this->getContext($context, "attrname")), "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, (isset($context["attrvalue"]) ? $context["attrvalue"] : $this->getContext($context, "attrvalue")), "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">
            ";
            // line 54
            echo (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget"));
            echo "
            <span>
                ";
            // line 56
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
            echo "
            </span>
        </label>
    ";
        } else {
            // line 60
            echo "        <label";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, (isset($context["attrname"]) ? $context["attrname"] : $this->getContext($context, "attrname")), "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, (isset($context["attrvalue"]) ? $context["attrvalue"] : $this->getContext($context, "attrvalue")), "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
            echo "</label>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 67
    public function block_form_row($context, array $blocks = array())
    {
        // line 68
        ob_start();
        // line 69
        echo "    <div class=\"control-group ";
        echo (((0 < twig_length_filter($this->env, $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors')))) ? ("error") : (""));
        echo " \">
        ";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
        <div class=\"controls\">
            ";
        // line 72
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 81
    public function block_form_errors($context, array $blocks = array())
    {
        // line 82
        ob_start();
        // line 83
        echo "    ";
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 84
            echo "        ";
            if (((!$this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent")) || twig_in_filter("repeated", $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars"), "block_prefixes", array(), "array")))) {
                // line 85
                echo "            <div class=\"control-group error\">
        ";
            }
            // line 87
            echo "        <span class=\"help-inline\">
            ";
            // line 88
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 89
                echo "                ";
                if ($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "first")) {
                    // line 90
                    echo "                    ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageTemplate"), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageParameters"), "validators"), "html", null, true);
                    echo "
                ";
                }
                // line 92
                echo "            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 93
            echo "        </span>
        ";
            // line 94
            if (((!$this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent")) || twig_in_filter("repeated", $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars"), "block_prefixes", array(), "array")))) {
                // line 95
                echo "            </div>
        ";
            }
            // line 97
            echo "    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Form:silex_form_div_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  344 => 97,  340 => 95,  338 => 94,  315 => 90,  295 => 88,  288 => 85,  282 => 83,  280 => 82,  277 => 81,  259 => 70,  215 => 54,  190 => 50,  184 => 48,  178 => 46,  153 => 35,  129 => 24,  124 => 23,  118 => 21,  58 => 24,  76 => 20,  81 => 63,  194 => 88,  181 => 47,  161 => 38,  110 => 18,  65 => 5,  399 => 158,  396 => 157,  394 => 156,  383 => 150,  377 => 147,  371 => 144,  366 => 142,  359 => 140,  357 => 139,  352 => 138,  345 => 135,  342 => 133,  335 => 93,  329 => 126,  325 => 125,  321 => 92,  308 => 118,  289 => 109,  276 => 102,  270 => 100,  267 => 98,  260 => 94,  237 => 85,  234 => 84,  218 => 77,  202 => 73,  188 => 68,  185 => 65,  170 => 61,  167 => 60,  148 => 64,  90 => 34,  84 => 39,  701 => 418,  692 => 412,  687 => 409,  685 => 405,  675 => 402,  670 => 400,  665 => 398,  661 => 396,  654 => 389,  650 => 388,  644 => 385,  640 => 384,  634 => 381,  624 => 374,  616 => 369,  606 => 362,  599 => 358,  592 => 354,  588 => 352,  586 => 349,  584 => 348,  578 => 345,  568 => 338,  561 => 334,  553 => 329,  549 => 327,  542 => 320,  537 => 318,  529 => 315,  525 => 314,  520 => 312,  515 => 310,  503 => 303,  497 => 300,  492 => 298,  485 => 293,  477 => 288,  467 => 281,  463 => 280,  456 => 275,  454 => 269,  450 => 268,  446 => 266,  433 => 258,  431 => 257,  426 => 255,  416 => 248,  410 => 245,  385 => 226,  363 => 210,  348 => 136,  336 => 189,  332 => 188,  327 => 186,  313 => 178,  299 => 174,  292 => 87,  284 => 167,  242 => 140,  232 => 83,  186 => 83,  127 => 56,  114 => 23,  104 => 67,  23 => 18,  263 => 104,  256 => 102,  249 => 67,  245 => 88,  239 => 86,  236 => 93,  225 => 89,  213 => 126,  207 => 83,  197 => 119,  191 => 69,  175 => 77,  160 => 68,  155 => 55,  152 => 92,  146 => 63,  137 => 27,  126 => 51,  100 => 22,  97 => 63,  77 => 8,  34 => 41,  53 => 80,  20 => 11,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 263,  437 => 147,  435 => 262,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 236,  393 => 126,  387 => 152,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 212,  365 => 111,  362 => 141,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 184,  314 => 99,  312 => 89,  309 => 97,  305 => 175,  298 => 91,  294 => 111,  285 => 84,  283 => 106,  278 => 86,  268 => 73,  264 => 72,  258 => 150,  252 => 68,  247 => 78,  241 => 95,  229 => 73,  220 => 56,  214 => 75,  177 => 63,  169 => 74,  140 => 28,  132 => 58,  128 => 49,  107 => 36,  61 => 18,  273 => 101,  269 => 94,  254 => 69,  243 => 88,  240 => 86,  238 => 139,  235 => 74,  230 => 82,  227 => 60,  224 => 71,  221 => 78,  219 => 129,  217 => 87,  208 => 74,  204 => 72,  179 => 107,  159 => 70,  143 => 29,  135 => 81,  119 => 42,  102 => 17,  71 => 56,  67 => 55,  63 => 4,  59 => 18,  38 => 32,  94 => 21,  89 => 40,  85 => 25,  75 => 28,  68 => 6,  56 => 81,  87 => 25,  21 => 11,  26 => 14,  93 => 28,  88 => 12,  78 => 36,  46 => 35,  27 => 3,  44 => 20,  31 => 16,  28 => 13,  201 => 92,  196 => 52,  183 => 74,  171 => 102,  166 => 100,  163 => 69,  158 => 37,  156 => 36,  151 => 63,  142 => 61,  138 => 54,  136 => 48,  121 => 22,  117 => 41,  105 => 76,  91 => 27,  62 => 29,  49 => 21,  24 => 2,  25 => 12,  19 => 11,  79 => 18,  72 => 27,  69 => 30,  47 => 19,  40 => 44,  37 => 43,  22 => 12,  246 => 90,  157 => 56,  145 => 46,  139 => 49,  131 => 25,  123 => 50,  120 => 40,  115 => 50,  111 => 45,  108 => 36,  101 => 32,  98 => 15,  96 => 72,  83 => 25,  74 => 34,  66 => 15,  55 => 23,  52 => 21,  50 => 78,  43 => 19,  41 => 19,  35 => 17,  32 => 35,  29 => 34,  209 => 82,  203 => 122,  199 => 53,  193 => 51,  189 => 71,  187 => 49,  182 => 64,  176 => 45,  173 => 44,  168 => 72,  164 => 72,  162 => 57,  154 => 67,  149 => 64,  147 => 90,  144 => 62,  141 => 61,  133 => 55,  130 => 57,  125 => 44,  122 => 43,  116 => 41,  112 => 19,  109 => 69,  106 => 40,  103 => 46,  99 => 38,  95 => 43,  92 => 61,  86 => 33,  82 => 10,  80 => 9,  73 => 7,  64 => 26,  60 => 3,  57 => 22,  54 => 14,  51 => 38,  48 => 67,  45 => 66,  42 => 64,  39 => 18,  36 => 18,  33 => 15,  30 => 15,);
    }
}
