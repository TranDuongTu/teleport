<?php

/* SonataAdminBundle:CRUD:base_history.html.twig */
class __TwigTemplate_077a5a808282f161f7ab8fcb49d02e2f6722531da7ca378db4f2a7488144e8bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        // line 15
        echo "    <div class=\"sonata-actions btn-group\">
        ";
        // line 16
        $this->env->loadTemplate("SonataAdminBundle:Button:edit_button.html.twig")->display($context);
        // line 17
        echo "        ";
        $this->env->loadTemplate("SonataAdminBundle:Button:acl_button.html.twig")->display($context);
        // line 18
        echo "        ";
        $this->env->loadTemplate("SonataAdminBundle:Button:show_button.html.twig")->display($context);
        // line 19
        echo "        ";
        $this->env->loadTemplate("SonataAdminBundle:Button:list_button.html.twig")->display($context);
        // line 20
        echo "    </div>
";
    }

    // line 23
    public function block_content($context, array $blocks = array())
    {
        // line 24
        echo "
    <div class=\"span5\">
        <table class=\"table\" id=\"revisions\">
            <thead>
                <tr>
                    <th>";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("td_revision", array(), "SonataAdminBundle"), "html", null, true);
        echo "</th>
                    <th>";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("td_timestamp", array(), "SonataAdminBundle"), "html", null, true);
        echo "</th>
                    <th>";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("td_username", array(), "SonataAdminBundle"), "html", null, true);
        echo "</th>
                    <th>";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("td_action", array(), "SonataAdminBundle"), "html", null, true);
        echo "</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 36
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["revisions"]) ? $context["revisions"] : $this->getContext($context, "revisions")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["revision"]) {
            // line 37
            echo "                    <tr>
                        <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["revision"]) ? $context["revision"] : $this->getContext($context, "revision")), "rev"), "html", null, true);
            echo "</td>
                        <td>";
            // line 39
            $template = $this->env->resolveTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "history_revision_timestamp"), "method"));
            $template->display($context);
            echo "</td>
                        <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["revision"]) ? $context["revision"] : $this->getContext($context, "revision")), "username"), "html", null, true);
            echo "</td>
                        <td><a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "history_view_revision", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), 2 => array("revision" => $this->getAttribute((isset($context["revision"]) ? $context["revision"] : $this->getContext($context, "revision")), "rev"))), "method"), "html", null, true);
            echo "\" class=\"revision-link\" rel=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["revision"]) ? $context["revision"] : $this->getContext($context, "revision")), "rev"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label_view_revision", array(), "SonataAdminBundle"), "html", null, true);
            echo "</a></td>
                    </tr>
                ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['revision'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "            </tbody>
        </table>
    </div>
    <div id=\"revision-detail\" class=\"span7 revision-detail\">

    </div>

    <script type=\"text/javascript\">
        jQuery(document).ready(function() {

            jQuery('a.revision-link').bind('click', function(event) {
                event.stopPropagation();
                event.preventDefault();

                jQuery('#revision-detail').html('');
                jQuery('table#revisions tbody tr').removeClass('current');
                jQuery(this).parent('').removeClass('current');

                jQuery.ajax({
                    url: jQuery(this).attr('href'),
                    dataType: 'html',
                    success: function(data) {
                        jQuery('#revision-detail').html(data);
                    }
                });

                return false;
            })
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_history.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  370 => 100,  367 => 99,  346 => 92,  343 => 91,  330 => 87,  320 => 84,  310 => 81,  304 => 79,  302 => 78,  296 => 76,  293 => 75,  287 => 72,  271 => 66,  265 => 64,  262 => 63,  257 => 61,  216 => 25,  192 => 23,  180 => 104,  174 => 60,  12 => 34,  150 => 58,  70 => 29,  113 => 39,  713 => 214,  707 => 211,  704 => 210,  702 => 209,  696 => 206,  686 => 205,  681 => 203,  669 => 201,  666 => 200,  663 => 199,  655 => 194,  652 => 193,  635 => 191,  618 => 190,  613 => 188,  608 => 187,  605 => 186,  602 => 185,  596 => 181,  590 => 178,  585 => 177,  551 => 174,  547 => 173,  539 => 171,  536 => 170,  533 => 169,  530 => 168,  528 => 167,  516 => 161,  512 => 159,  510 => 158,  507 => 157,  505 => 156,  502 => 155,  498 => 134,  486 => 130,  483 => 129,  473 => 150,  465 => 147,  462 => 146,  451 => 141,  428 => 136,  425 => 135,  414 => 127,  403 => 121,  400 => 120,  388 => 117,  361 => 97,  358 => 106,  349 => 103,  347 => 102,  339 => 100,  326 => 93,  324 => 92,  319 => 90,  311 => 89,  307 => 87,  297 => 84,  291 => 82,  286 => 80,  274 => 77,  272 => 76,  250 => 67,  233 => 62,  228 => 59,  223 => 27,  200 => 55,  279 => 132,  253 => 122,  244 => 119,  198 => 94,  195 => 93,  344 => 97,  340 => 90,  338 => 94,  315 => 83,  295 => 88,  288 => 85,  282 => 79,  280 => 69,  277 => 68,  259 => 124,  215 => 102,  190 => 50,  184 => 47,  178 => 45,  153 => 48,  129 => 42,  124 => 43,  118 => 46,  58 => 22,  76 => 32,  81 => 34,  194 => 88,  181 => 47,  161 => 78,  110 => 36,  65 => 15,  399 => 158,  396 => 157,  394 => 118,  383 => 150,  377 => 115,  371 => 113,  366 => 142,  359 => 140,  357 => 139,  352 => 94,  345 => 135,  342 => 101,  335 => 93,  329 => 95,  325 => 125,  321 => 91,  308 => 118,  289 => 81,  276 => 102,  270 => 129,  267 => 128,  260 => 62,  237 => 85,  234 => 84,  218 => 77,  202 => 73,  188 => 21,  185 => 20,  170 => 61,  167 => 60,  148 => 64,  90 => 18,  84 => 16,  701 => 418,  692 => 412,  687 => 409,  685 => 405,  675 => 402,  670 => 400,  665 => 398,  661 => 396,  654 => 389,  650 => 388,  644 => 385,  640 => 384,  634 => 381,  624 => 374,  616 => 369,  606 => 362,  599 => 358,  592 => 179,  588 => 352,  586 => 349,  584 => 348,  578 => 345,  568 => 175,  561 => 334,  553 => 329,  549 => 327,  542 => 172,  537 => 318,  529 => 315,  525 => 166,  520 => 312,  515 => 310,  503 => 303,  497 => 300,  492 => 132,  485 => 293,  477 => 288,  467 => 148,  463 => 280,  456 => 143,  454 => 269,  450 => 268,  446 => 139,  433 => 258,  431 => 257,  426 => 255,  416 => 248,  410 => 245,  385 => 226,  363 => 210,  348 => 136,  336 => 99,  332 => 88,  327 => 86,  313 => 82,  299 => 174,  292 => 87,  284 => 167,  242 => 118,  232 => 83,  186 => 83,  127 => 56,  114 => 23,  104 => 42,  23 => 1,  263 => 71,  256 => 102,  249 => 55,  245 => 88,  239 => 117,  236 => 63,  225 => 89,  213 => 126,  207 => 83,  197 => 54,  191 => 50,  175 => 43,  160 => 52,  155 => 75,  152 => 63,  146 => 34,  137 => 47,  126 => 55,  100 => 36,  97 => 37,  77 => 20,  34 => 16,  53 => 24,  20 => 1,  480 => 128,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 142,  444 => 149,  440 => 263,  437 => 147,  435 => 262,  430 => 137,  427 => 143,  423 => 128,  413 => 134,  409 => 124,  407 => 131,  402 => 130,  398 => 119,  393 => 126,  387 => 152,  384 => 116,  381 => 120,  379 => 119,  374 => 114,  368 => 212,  365 => 111,  362 => 141,  360 => 109,  355 => 95,  341 => 105,  337 => 103,  322 => 184,  314 => 99,  312 => 89,  309 => 97,  305 => 175,  298 => 91,  294 => 111,  285 => 84,  283 => 70,  278 => 86,  268 => 73,  264 => 72,  258 => 150,  252 => 68,  247 => 66,  241 => 31,  229 => 73,  220 => 56,  214 => 75,  177 => 63,  169 => 58,  140 => 53,  132 => 44,  128 => 44,  107 => 40,  61 => 28,  273 => 130,  269 => 75,  254 => 60,  243 => 65,  240 => 86,  238 => 64,  235 => 114,  230 => 82,  227 => 109,  224 => 71,  221 => 106,  219 => 129,  217 => 87,  208 => 57,  204 => 72,  179 => 72,  159 => 49,  143 => 48,  135 => 48,  119 => 39,  102 => 39,  71 => 32,  67 => 31,  63 => 30,  59 => 29,  38 => 18,  94 => 36,  89 => 37,  85 => 28,  75 => 31,  68 => 24,  56 => 12,  87 => 38,  21 => 11,  26 => 14,  93 => 28,  88 => 32,  78 => 36,  46 => 9,  27 => 14,  44 => 20,  31 => 23,  28 => 22,  201 => 92,  196 => 52,  183 => 74,  171 => 81,  166 => 57,  163 => 60,  158 => 37,  156 => 36,  151 => 61,  142 => 58,  138 => 54,  136 => 58,  121 => 42,  117 => 50,  105 => 76,  91 => 39,  62 => 25,  49 => 23,  24 => 13,  25 => 12,  19 => 11,  79 => 33,  72 => 30,  69 => 24,  47 => 19,  40 => 6,  37 => 24,  22 => 12,  246 => 54,  157 => 58,  145 => 56,  139 => 59,  131 => 45,  123 => 48,  120 => 48,  115 => 40,  111 => 41,  108 => 42,  101 => 40,  98 => 38,  96 => 19,  83 => 35,  74 => 19,  66 => 23,  55 => 18,  52 => 24,  50 => 23,  43 => 14,  41 => 19,  35 => 17,  32 => 3,  29 => 2,  209 => 24,  203 => 56,  199 => 53,  193 => 92,  189 => 71,  187 => 49,  182 => 86,  176 => 102,  173 => 71,  168 => 72,  164 => 54,  162 => 57,  154 => 67,  149 => 62,  147 => 46,  144 => 45,  141 => 61,  133 => 51,  130 => 57,  125 => 40,  122 => 43,  116 => 47,  112 => 47,  109 => 45,  106 => 35,  103 => 41,  99 => 49,  95 => 37,  92 => 19,  86 => 17,  82 => 36,  80 => 28,  73 => 7,  64 => 184,  60 => 13,  57 => 18,  54 => 26,  51 => 16,  48 => 15,  45 => 14,  42 => 19,  39 => 25,  36 => 17,  33 => 16,  30 => 15,);
    }
}
