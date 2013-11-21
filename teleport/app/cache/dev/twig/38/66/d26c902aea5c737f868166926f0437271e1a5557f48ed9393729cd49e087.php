<?php

/* SonataDoctrineMongoDBAdminBundle:CRUD:edit_mongo_one_association_script.html.twig */
class __TwigTemplate_3866d26c902aea5c737f868166926f0437271e1a5557f48ed9393729cd49e087 extends Twig_Template
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
        // line 18
        echo "
";
        // line 20
        echo "
<!-- edit one association -->

<script type=\"text/javascript\">

    // handle the add link
    var field_add_";
        // line 26
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo " = function(event) {

        event.preventDefault();
        event.stopPropagation();

        var form = jQuery(this).closest('form');

        // the ajax post
        jQuery(form).ajaxSubmit({
            url: '";
        // line 35
        echo $this->env->getExtension('routing')->getUrl("sonata_admin_append_form_element", (array("code" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin"), "root"), "code"), "elementId" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "subclass" => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin"), "getActiveSubclassCode", array(), "method"), "objectId" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin"), "root"), "id", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin"), "root"), "subject")), "method"), "uniqid" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin"), "root"), "uniqid")) + $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "getOption", array(0 => "link_parameters", 1 => array()), "method")));
        // line 41
        echo "',
            type: \"POST\",
            dataType: 'html',
            data: { _xml_http_request: true },
            success: function(html) {
                if (!html.length) {
                    return;
                }

                jQuery('#field_container_";
        // line 50
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "').replaceWith(html); // replace the html
                if(jQuery('input[type=\"file\"]', form).length > 0) {
                    jQuery(form).attr('enctype', 'multipart/form-data');
                    jQuery(form).attr('encoding', 'multipart/form-data');
                }
                jQuery('#sonata-ba-field-container-";
        // line 55
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "').trigger('sonata.add_element');
                jQuery('#field_container_";
        // line 56
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "').trigger('sonata.add_element');
            }
        });

        return false;
    };

    var field_widget_";
        // line 63
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo " = false;

    // this function initialize the popup
    // this can be only done this way has popup can be cascaded
    function start_field_retrieve_";
        // line 67
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "(link) {

        link.onclick = null;

        // initialize component
        field_widget_";
        // line 72
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo " = jQuery(\"#field_widget_";
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "\");

        // add the jQuery event to the a element
        jQuery(link)
                .click(field_add_";
        // line 76
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ")
                .trigger('click')
        ;

        return false;
    }
</script>

<!-- / edit one association -->

";
    }

    public function getTemplateName()
    {
        return "SonataDoctrineMongoDBAdminBundle:CRUD:edit_mongo_one_association_script.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 63,  194 => 88,  181 => 80,  161 => 71,  110 => 48,  65 => 30,  399 => 158,  396 => 157,  394 => 156,  383 => 150,  377 => 147,  371 => 144,  366 => 142,  359 => 140,  357 => 139,  352 => 138,  345 => 135,  342 => 133,  335 => 129,  329 => 126,  325 => 125,  321 => 124,  308 => 118,  289 => 109,  276 => 102,  270 => 100,  267 => 98,  260 => 94,  237 => 85,  234 => 84,  218 => 77,  202 => 73,  188 => 68,  185 => 65,  170 => 61,  167 => 60,  148 => 64,  90 => 34,  84 => 39,  701 => 418,  692 => 412,  687 => 409,  685 => 405,  675 => 402,  670 => 400,  665 => 398,  661 => 396,  654 => 389,  650 => 388,  644 => 385,  640 => 384,  634 => 381,  624 => 374,  616 => 369,  606 => 362,  599 => 358,  592 => 354,  588 => 352,  586 => 349,  584 => 348,  578 => 345,  568 => 338,  561 => 334,  553 => 329,  549 => 327,  542 => 320,  537 => 318,  529 => 315,  525 => 314,  520 => 312,  515 => 310,  503 => 303,  497 => 300,  492 => 298,  485 => 293,  477 => 288,  467 => 281,  463 => 280,  456 => 275,  454 => 269,  450 => 268,  446 => 266,  433 => 258,  431 => 257,  426 => 255,  416 => 248,  410 => 245,  385 => 226,  363 => 210,  348 => 136,  336 => 189,  332 => 188,  327 => 186,  313 => 178,  299 => 174,  292 => 170,  284 => 167,  242 => 140,  232 => 83,  186 => 83,  127 => 56,  114 => 71,  104 => 67,  23 => 18,  263 => 104,  256 => 102,  249 => 89,  245 => 88,  239 => 86,  236 => 93,  225 => 89,  213 => 126,  207 => 83,  197 => 119,  191 => 69,  175 => 77,  160 => 68,  155 => 55,  152 => 92,  146 => 63,  137 => 59,  126 => 51,  100 => 40,  97 => 63,  77 => 28,  34 => 26,  53 => 23,  20 => 11,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 263,  437 => 147,  435 => 262,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 236,  393 => 126,  387 => 152,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 212,  365 => 111,  362 => 141,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 184,  314 => 99,  312 => 98,  309 => 97,  305 => 175,  298 => 91,  294 => 111,  285 => 89,  283 => 106,  278 => 86,  268 => 157,  264 => 84,  258 => 150,  252 => 80,  247 => 78,  241 => 95,  229 => 73,  220 => 70,  214 => 75,  177 => 63,  169 => 74,  140 => 55,  132 => 58,  128 => 49,  107 => 36,  61 => 18,  273 => 101,  269 => 94,  254 => 91,  243 => 88,  240 => 86,  238 => 139,  235 => 74,  230 => 82,  227 => 80,  224 => 71,  221 => 78,  219 => 129,  217 => 87,  208 => 74,  204 => 72,  179 => 107,  159 => 70,  143 => 56,  135 => 81,  119 => 42,  102 => 39,  71 => 56,  67 => 55,  63 => 27,  59 => 50,  38 => 32,  94 => 38,  89 => 40,  85 => 25,  75 => 17,  68 => 31,  56 => 40,  87 => 25,  21 => 12,  26 => 20,  93 => 28,  88 => 67,  78 => 36,  46 => 35,  27 => 13,  44 => 19,  31 => 22,  28 => 3,  201 => 92,  196 => 71,  183 => 74,  171 => 102,  166 => 100,  163 => 69,  158 => 67,  156 => 93,  151 => 63,  142 => 61,  138 => 54,  136 => 48,  121 => 53,  117 => 41,  105 => 76,  91 => 27,  62 => 29,  49 => 20,  24 => 13,  25 => 12,  19 => 11,  79 => 18,  72 => 16,  69 => 30,  47 => 19,  40 => 19,  37 => 18,  22 => 12,  246 => 90,  157 => 56,  145 => 46,  139 => 49,  131 => 52,  123 => 50,  120 => 40,  115 => 50,  111 => 45,  108 => 36,  101 => 32,  98 => 44,  96 => 72,  83 => 25,  74 => 34,  66 => 15,  55 => 22,  52 => 21,  50 => 20,  43 => 19,  41 => 18,  35 => 16,  32 => 16,  29 => 14,  209 => 82,  203 => 122,  199 => 80,  193 => 70,  189 => 71,  187 => 75,  182 => 64,  176 => 64,  173 => 62,  168 => 72,  164 => 72,  162 => 57,  154 => 67,  149 => 64,  147 => 90,  144 => 62,  141 => 61,  133 => 55,  130 => 57,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 69,  106 => 40,  103 => 46,  99 => 38,  95 => 43,  92 => 61,  86 => 33,  82 => 22,  80 => 36,  73 => 32,  64 => 26,  60 => 25,  57 => 22,  54 => 14,  51 => 38,  48 => 41,  45 => 19,  42 => 7,  39 => 18,  36 => 16,  33 => 15,  30 => 15,);
    }
}
