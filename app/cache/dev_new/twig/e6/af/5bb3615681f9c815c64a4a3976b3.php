<?php

/* ListreatMainBundle:Profil:update.html.twig */
class __TwigTemplate_e6af5bb3615681f9c815c64a4a3976b3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "update ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "username"), "html", null, true);
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "
<div>
    ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "username"), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "ListreatMainBundle:Profil:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 11,  146 => 39,  140 => 33,  125 => 27,  117 => 25,  113 => 24,  110 => 23,  99 => 18,  53 => 47,  301 => 100,  295 => 96,  292 => 95,  289 => 94,  287 => 93,  282 => 90,  276 => 86,  273 => 85,  270 => 84,  268 => 83,  263 => 80,  249 => 79,  245 => 77,  230 => 75,  222 => 73,  220 => 72,  215 => 70,  211 => 69,  204 => 66,  198 => 63,  185 => 61,  183 => 60,  177 => 58,  160 => 57,  112 => 42,  82 => 17,  65 => 6,  38 => 6,  144 => 50,  141 => 51,  135 => 47,  126 => 45,  109 => 41,  103 => 34,  67 => 19,  61 => 16,  47 => 9,  105 => 24,  93 => 20,  76 => 15,  72 => 14,  68 => 7,  27 => 4,  91 => 40,  84 => 36,  94 => 39,  88 => 27,  79 => 16,  59 => 5,  21 => 2,  44 => 12,  31 => 5,  28 => 3,  225 => 96,  216 => 90,  212 => 88,  205 => 84,  201 => 83,  196 => 80,  194 => 62,  191 => 78,  189 => 77,  186 => 76,  180 => 72,  172 => 67,  159 => 61,  154 => 44,  147 => 55,  132 => 31,  127 => 49,  121 => 26,  118 => 44,  114 => 42,  104 => 21,  100 => 33,  78 => 24,  75 => 23,  71 => 19,  58 => 12,  34 => 5,  26 => 6,  24 => 3,  25 => 1,  19 => 1,  70 => 20,  63 => 24,  46 => 15,  22 => 2,  163 => 63,  155 => 58,  152 => 49,  149 => 51,  145 => 46,  139 => 50,  131 => 42,  123 => 47,  120 => 46,  115 => 39,  106 => 35,  101 => 36,  96 => 17,  83 => 18,  80 => 24,  74 => 16,  66 => 15,  55 => 15,  52 => 15,  50 => 10,  43 => 8,  41 => 7,  37 => 6,  35 => 6,  32 => 4,  29 => 3,  184 => 70,  178 => 71,  171 => 62,  165 => 58,  162 => 57,  157 => 56,  153 => 54,  151 => 43,  143 => 54,  138 => 51,  136 => 50,  133 => 43,  130 => 47,  122 => 44,  119 => 36,  116 => 35,  111 => 38,  108 => 22,  102 => 30,  98 => 22,  95 => 34,  92 => 28,  89 => 39,  85 => 24,  81 => 40,  73 => 19,  64 => 17,  60 => 23,  57 => 14,  54 => 10,  51 => 43,  48 => 42,  45 => 9,  42 => 7,  39 => 6,  36 => 5,  33 => 4,  30 => 7,);
    }
}
