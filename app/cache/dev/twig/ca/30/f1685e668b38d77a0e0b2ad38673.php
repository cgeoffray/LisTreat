<?php

/* SonataAdminBundle:CRUD:list__batch.html.twig */
class __TwigTemplate_ca30f1685e668b38d77a0e0b2ad38673 extends Twig_Template
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
<td class=\"sonata-ba-list-field sonata-ba-list-field-batch\">
  <input type=\"checkbox\" name=\"idx[]\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\" />
</td>
";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list__batch.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 13,  19 => 11,  640 => 211,  635 => 209,  629 => 207,  627 => 206,  621 => 202,  612 => 199,  608 => 198,  604 => 197,  597 => 196,  593 => 195,  588 => 193,  581 => 191,  573 => 189,  570 => 188,  567 => 187,  562 => 136,  558 => 134,  549 => 131,  540 => 130,  536 => 129,  532 => 128,  526 => 127,  523 => 126,  521 => 125,  518 => 124,  516 => 123,  507 => 119,  504 => 118,  499 => 115,  485 => 114,  477 => 113,  474 => 112,  457 => 111,  452 => 110,  450 => 109,  445 => 107,  441 => 105,  430 => 103,  426 => 102,  419 => 98,  415 => 97,  410 => 96,  407 => 95,  395 => 84,  392 => 83,  388 => 138,  386 => 95,  382 => 93,  380 => 83,  377 => 82,  374 => 81,  370 => 177,  363 => 172,  355 => 170,  353 => 169,  350 => 168,  342 => 166,  340 => 165,  337 => 164,  331 => 163,  323 => 161,  315 => 159,  312 => 158,  307 => 157,  304 => 155,  296 => 153,  294 => 152,  291 => 151,  283 => 149,  281 => 148,  275 => 145,  272 => 144,  270 => 143,  265 => 140,  262 => 139,  259 => 81,  257 => 80,  252 => 78,  249 => 77,  246 => 76,  241 => 73,  234 => 71,  228 => 70,  222 => 68,  219 => 67,  217 => 66,  214 => 65,  210 => 64,  207 => 63,  203 => 62,  200 => 61,  197 => 60,  191 => 56,  185 => 55,  182 => 54,  178 => 52,  174 => 51,  169 => 50,  163 => 49,  151 => 48,  149 => 47,  146 => 46,  143 => 45,  140 => 44,  137 => 43,  134 => 42,  131 => 41,  128 => 40,  125 => 39,  122 => 38,  119 => 37,  117 => 36,  111 => 32,  108 => 31,  104 => 30,  100 => 28,  97 => 27,  89 => 182,  86 => 181,  81 => 178,  79 => 76,  76 => 75,  74 => 60,  71 => 59,  69 => 27,  63 => 25,  60 => 24,  57 => 23,  54 => 22,  48 => 20,  43 => 17,  41 => 16,  38 => 15,  35 => 14,);
    }
}
