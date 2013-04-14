<?php

/* SonataAdminBundle::ajax_layout.html.twig */
class __TwigTemplate_a4db2106e96b8afa26e47f713e241d2d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'preview' => array($this, 'block_preview'),
            'form' => array($this, 'block_form'),
            'list' => array($this, 'block_list'),
            'show' => array($this, 'block_show'),
            'list_filters' => array($this, 'block_list_filters'),
            'list_table' => array($this, 'block_list_table'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('content', $context, $blocks);
    }

    public function block_content($context, array $blocks = array())
    {
        // line 13
        echo "    ";
        $this->displayBlock('preview', $context, $blocks);
        // line 14
        echo "    ";
        $this->displayBlock('form', $context, $blocks);
        // line 15
        echo "    ";
        $this->displayBlock('list', $context, $blocks);
        // line 16
        echo "    ";
        $this->displayBlock('show', $context, $blocks);
        // line 17
        echo "
    <div class=\"sonata-ba-filter\">
        ";
        // line 19
        $this->displayBlock('list_filters', $context, $blocks);
        // line 20
        echo "    </div>
    <div class=\"sonata-ba-list\">
        ";
        // line 22
        $this->displayBlock('list_table', $context, $blocks);
        // line 23
        echo "    </div>
";
    }

    // line 13
    public function block_preview($context, array $blocks = array())
    {
    }

    // line 14
    public function block_form($context, array $blocks = array())
    {
    }

    // line 15
    public function block_list($context, array $blocks = array())
    {
    }

    // line 16
    public function block_show($context, array $blocks = array())
    {
    }

    // line 19
    public function block_list_filters($context, array $blocks = array())
    {
    }

    // line 22
    public function block_list_table($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle::ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  69 => 14,  173 => 70,  164 => 67,  156 => 65,  148 => 63,  137 => 60,  97 => 39,  86 => 33,  77 => 28,  40 => 19,  20 => 11,  23 => 3,  49 => 11,  146 => 39,  140 => 33,  125 => 27,  117 => 47,  113 => 24,  110 => 23,  99 => 18,  53 => 20,  301 => 100,  295 => 96,  292 => 95,  289 => 94,  287 => 93,  282 => 90,  276 => 86,  273 => 85,  270 => 84,  268 => 83,  263 => 80,  249 => 79,  245 => 77,  230 => 75,  222 => 73,  220 => 72,  215 => 70,  211 => 69,  204 => 66,  198 => 63,  185 => 61,  183 => 60,  177 => 58,  160 => 66,  112 => 42,  82 => 17,  65 => 6,  38 => 14,  144 => 62,  141 => 61,  135 => 47,  126 => 51,  109 => 44,  103 => 30,  67 => 25,  61 => 18,  47 => 17,  105 => 24,  93 => 20,  76 => 15,  72 => 14,  68 => 22,  27 => 13,  91 => 40,  84 => 19,  94 => 38,  88 => 27,  79 => 16,  59 => 23,  21 => 2,  44 => 16,  31 => 3,  28 => 3,  225 => 96,  216 => 90,  212 => 88,  205 => 84,  201 => 83,  196 => 80,  194 => 62,  191 => 78,  189 => 77,  186 => 76,  180 => 72,  172 => 67,  159 => 61,  154 => 44,  147 => 55,  132 => 31,  127 => 49,  121 => 26,  118 => 44,  114 => 42,  104 => 21,  100 => 40,  78 => 25,  75 => 23,  71 => 19,  58 => 18,  34 => 4,  26 => 11,  24 => 6,  25 => 12,  19 => 1,  70 => 22,  63 => 24,  46 => 15,  22 => 1,  163 => 63,  155 => 58,  152 => 64,  149 => 51,  145 => 46,  139 => 50,  131 => 42,  123 => 50,  120 => 46,  115 => 39,  106 => 35,  101 => 36,  96 => 17,  83 => 18,  80 => 29,  74 => 15,  66 => 19,  55 => 15,  52 => 20,  50 => 22,  43 => 8,  41 => 15,  37 => 18,  35 => 13,  32 => 16,  29 => 12,  184 => 70,  178 => 71,  171 => 62,  165 => 58,  162 => 57,  157 => 56,  153 => 54,  151 => 43,  143 => 54,  138 => 51,  136 => 50,  133 => 43,  130 => 47,  122 => 44,  119 => 36,  116 => 35,  111 => 45,  108 => 22,  102 => 41,  98 => 22,  95 => 34,  92 => 29,  89 => 22,  85 => 24,  81 => 40,  73 => 23,  64 => 13,  60 => 23,  57 => 22,  54 => 14,  51 => 19,  48 => 11,  45 => 8,  42 => 7,  39 => 6,  36 => 17,  33 => 6,  30 => 1,);
    }
}
