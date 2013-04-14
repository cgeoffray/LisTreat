<?php

/* SonataAdminBundle:CRUD:base_inline_edit_field.html.twig */
class __TwigTemplate_5cbcca2c8141f26d591bd19dab52e6db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'label' => array($this, 'block_label'),
            'field' => array($this, 'block_field'),
            'errors' => array($this, 'block_errors'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "
<div id=\"sonata-ba-field-container-";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "field_element"), "vars"), "id"), "html", null, true);
        echo "\" class=\"sonata-ba-field sonata-ba-field-";
        echo twig_escape_filter($this->env, $this->getContext($context, "edit"), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, $this->getContext($context, "inline"), "html", null, true);
        echo " ";
        if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "field_element"), "vars"), "errors"))) {
            echo "sonata-ba-field-error";
        }
        echo "\">

    ";
        // line 14
        $this->displayBlock('label', $context, $blocks);
        // line 24
        echo "
    ";
        // line 25
        $this->displayBlock('field', $context, $blocks);
        // line 26
        echo "
    <div class=\"sonata-ba-field-error-messages\">
        ";
        // line 28
        $this->displayBlock('errors', $context, $blocks);
        // line 29
        echo "    </div>
</div>
";
    }

    // line 14
    public function block_label($context, array $blocks = array())
    {
        // line 15
        echo "        ";
        if (($this->getContext($context, "inline") == "natural")) {
            // line 16
            echo "            ";
            if ($this->getAttribute($this->getAttribute($this->getContext($context, "field_description", true), "options", array(), "any", false, true), "name", array(), "any", true, true)) {
                // line 17
                echo "                ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "field_element"), 'label', (twig_test_empty($_label_ = $this->getAttribute($this->getAttribute($this->getContext($context, "field_description"), "options"), "name")) ? array() : array("label" => $_label_)));
                echo "
            ";
            } else {
                // line 19
                echo "                ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "field_element"), 'label');
                echo "
            ";
            }
            // line 21
            echo "            <br />
        ";
        }
        // line 23
        echo "    ";
    }

    // line 25
    public function block_field($context, array $blocks = array())
    {
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "field_element"), 'widget');
    }

    // line 28
    public function block_errors($context, array $blocks = array())
    {
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "field_element"), 'errors');
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_inline_edit_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  264 => 72,  261 => 71,  256 => 69,  252 => 68,  247 => 67,  244 => 66,  237 => 64,  232 => 63,  217 => 58,  208 => 55,  199 => 52,  193 => 50,  190 => 49,  188 => 48,  182 => 46,  167 => 76,  161 => 46,  134 => 37,  128 => 35,  124 => 47,  12 => 45,  129 => 55,  56 => 24,  69 => 29,  173 => 70,  164 => 67,  156 => 44,  148 => 41,  137 => 60,  97 => 42,  86 => 25,  77 => 27,  40 => 24,  20 => 1,  23 => 1,  49 => 28,  146 => 39,  140 => 55,  125 => 34,  117 => 47,  113 => 40,  110 => 29,  99 => 24,  53 => 10,  301 => 100,  295 => 96,  292 => 95,  289 => 94,  287 => 93,  282 => 90,  276 => 86,  273 => 85,  270 => 84,  268 => 83,  263 => 80,  249 => 79,  245 => 77,  230 => 62,  222 => 73,  220 => 59,  215 => 70,  211 => 56,  204 => 66,  198 => 63,  185 => 47,  183 => 60,  177 => 42,  160 => 66,  112 => 48,  82 => 23,  65 => 24,  38 => 14,  144 => 62,  141 => 61,  135 => 47,  126 => 51,  109 => 44,  103 => 30,  67 => 16,  61 => 26,  47 => 21,  105 => 26,  93 => 41,  76 => 19,  72 => 19,  68 => 24,  27 => 14,  91 => 22,  84 => 19,  94 => 38,  88 => 31,  79 => 34,  59 => 23,  21 => 11,  44 => 16,  31 => 23,  28 => 22,  225 => 60,  216 => 90,  212 => 88,  205 => 54,  201 => 83,  196 => 80,  194 => 62,  191 => 78,  189 => 77,  186 => 76,  180 => 72,  172 => 16,  159 => 61,  154 => 44,  147 => 55,  132 => 31,  127 => 52,  121 => 33,  118 => 32,  114 => 42,  104 => 21,  100 => 45,  78 => 21,  75 => 23,  71 => 25,  58 => 12,  34 => 16,  26 => 14,  24 => 13,  25 => 12,  19 => 11,  70 => 32,  63 => 16,  46 => 21,  22 => 11,  163 => 74,  155 => 58,  152 => 64,  149 => 51,  145 => 62,  139 => 61,  131 => 42,  123 => 51,  120 => 46,  115 => 49,  106 => 35,  101 => 43,  96 => 34,  83 => 20,  80 => 29,  74 => 31,  66 => 17,  55 => 24,  52 => 20,  50 => 22,  43 => 25,  41 => 19,  37 => 24,  35 => 17,  32 => 3,  29 => 2,  184 => 70,  178 => 71,  171 => 62,  165 => 58,  162 => 57,  157 => 56,  153 => 43,  151 => 42,  143 => 54,  138 => 51,  136 => 50,  133 => 57,  130 => 47,  122 => 44,  119 => 50,  116 => 35,  111 => 48,  108 => 47,  102 => 36,  98 => 22,  95 => 34,  92 => 28,  89 => 40,  85 => 30,  81 => 40,  73 => 27,  64 => 15,  60 => 15,  57 => 14,  54 => 26,  51 => 29,  48 => 15,  45 => 26,  42 => 19,  39 => 25,  36 => 17,  33 => 16,  30 => 15,);
    }
}
