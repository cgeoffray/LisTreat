<?php

/* SonataBlockBundle:Block:block_base.html.twig */
class __TwigTemplate_54943a4ad7ef5d2da99d8a7ff53203bc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "<div id=\"cms-block-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "id"), "html", null, true);
        echo "\" class=\"cms-block cms-block-element\">
    ";
        // line 12
        $this->displayBlock('block', $context, $blocks);
        // line 13
        echo "</div>
";
    }

    // line 12
    public function block_block($context, array $blocks = array())
    {
        echo "EMPTY CONTENT";
    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 12,  27 => 13,  25 => 12,  20 => 11,  145 => 62,  139 => 61,  129 => 55,  121 => 52,  118 => 51,  115 => 50,  111 => 48,  100 => 45,  97 => 44,  93 => 43,  78 => 35,  70 => 32,  49 => 24,  36 => 16,  675 => 217,  672 => 216,  667 => 209,  661 => 206,  655 => 203,  652 => 202,  650 => 201,  647 => 200,  641 => 198,  639 => 197,  636 => 196,  630 => 194,  628 => 193,  625 => 192,  619 => 190,  617 => 189,  614 => 188,  608 => 186,  606 => 185,  603 => 184,  600 => 183,  595 => 156,  591 => 153,  585 => 152,  576 => 149,  571 => 148,  566 => 147,  563 => 146,  558 => 145,  555 => 144,  549 => 110,  545 => 109,  542 => 108,  534 => 105,  528 => 104,  520 => 102,  517 => 101,  513 => 100,  508 => 98,  505 => 97,  500 => 96,  497 => 95,  494 => 94,  488 => 93,  481 => 87,  475 => 86,  470 => 85,  467 => 84,  461 => 48,  457 => 47,  453 => 46,  448 => 44,  443 => 42,  439 => 41,  434 => 40,  431 => 39,  425 => 36,  421 => 35,  415 => 32,  411 => 31,  406 => 29,  403 => 28,  400 => 27,  393 => 221,  391 => 216,  384 => 211,  382 => 183,  378 => 182,  375 => 181,  369 => 178,  366 => 177,  364 => 176,  360 => 174,  355 => 171,  352 => 170,  338 => 169,  332 => 167,  329 => 166,  311 => 165,  305 => 163,  303 => 162,  299 => 160,  297 => 159,  293 => 157,  291 => 156,  287 => 154,  285 => 144,  282 => 143,  278 => 141,  272 => 139,  269 => 138,  266 => 137,  252 => 136,  246 => 134,  241 => 131,  235 => 129,  227 => 127,  225 => 126,  222 => 125,  219 => 124,  201 => 123,  198 => 122,  196 => 121,  193 => 120,  191 => 119,  184 => 114,  179 => 111,  176 => 110,  173 => 94,  171 => 93,  166 => 90,  164 => 84,  157 => 82,  155 => 81,  143 => 71,  137 => 69,  133 => 57,  130 => 66,  127 => 54,  110 => 63,  106 => 61,  103 => 60,  86 => 39,  83 => 58,  80 => 57,  74 => 55,  72 => 54,  67 => 31,  63 => 50,  61 => 39,  58 => 38,  56 => 26,  47 => 20,  45 => 19,  43 => 18,  41 => 19,  37 => 15,  35 => 14,  33 => 13,  31 => 15,  29 => 11,  88 => 40,  82 => 37,  76 => 34,  73 => 27,  69 => 26,  65 => 30,  59 => 27,  53 => 25,  50 => 20,  46 => 19,  42 => 17,  39 => 16,  34 => 15,  28 => 14,);
    }
}
