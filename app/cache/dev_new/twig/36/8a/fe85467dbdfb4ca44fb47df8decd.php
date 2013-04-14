<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_368afe85467dbdfb4ca44fb47df8decd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("FOSUserBundle::layout.html.twig");

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 4
        $this->env->loadTemplate("FOSUserBundle:Group:list_content.html.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 11,  146 => 39,  140 => 33,  125 => 27,  117 => 25,  113 => 24,  110 => 23,  99 => 18,  53 => 47,  301 => 100,  295 => 96,  292 => 95,  289 => 94,  287 => 93,  282 => 90,  276 => 86,  273 => 85,  270 => 84,  268 => 83,  263 => 80,  249 => 79,  245 => 77,  230 => 75,  222 => 73,  220 => 72,  215 => 70,  211 => 69,  204 => 66,  198 => 63,  185 => 61,  183 => 60,  177 => 58,  160 => 57,  112 => 42,  82 => 17,  65 => 6,  38 => 6,  144 => 50,  141 => 51,  135 => 47,  126 => 45,  109 => 41,  103 => 30,  67 => 19,  61 => 17,  47 => 9,  105 => 24,  93 => 20,  76 => 15,  72 => 14,  68 => 7,  27 => 4,  91 => 40,  84 => 28,  94 => 31,  88 => 27,  79 => 24,  59 => 5,  21 => 2,  44 => 12,  31 => 4,  28 => 3,  225 => 96,  216 => 90,  212 => 88,  205 => 84,  201 => 83,  196 => 80,  194 => 62,  191 => 78,  189 => 77,  186 => 76,  180 => 72,  172 => 67,  159 => 61,  154 => 44,  147 => 55,  132 => 31,  127 => 49,  121 => 26,  118 => 44,  114 => 42,  104 => 21,  100 => 29,  78 => 25,  75 => 23,  71 => 19,  58 => 18,  34 => 5,  26 => 2,  24 => 3,  25 => 1,  19 => 1,  70 => 22,  63 => 24,  46 => 15,  22 => 2,  163 => 63,  155 => 58,  152 => 49,  149 => 51,  145 => 46,  139 => 50,  131 => 42,  123 => 47,  120 => 46,  115 => 39,  106 => 35,  101 => 36,  96 => 17,  83 => 18,  80 => 24,  74 => 23,  66 => 19,  55 => 15,  52 => 14,  50 => 10,  43 => 8,  41 => 13,  37 => 6,  35 => 10,  32 => 8,  29 => 7,  184 => 70,  178 => 71,  171 => 62,  165 => 58,  162 => 57,  157 => 56,  153 => 54,  151 => 43,  143 => 54,  138 => 51,  136 => 50,  133 => 43,  130 => 47,  122 => 44,  119 => 36,  116 => 35,  111 => 38,  108 => 22,  102 => 30,  98 => 22,  95 => 34,  92 => 29,  89 => 39,  85 => 24,  81 => 40,  73 => 23,  64 => 17,  60 => 23,  57 => 16,  54 => 10,  51 => 43,  48 => 13,  45 => 12,  42 => 10,  39 => 9,  36 => 5,  33 => 7,  30 => 7,);
    }
}
