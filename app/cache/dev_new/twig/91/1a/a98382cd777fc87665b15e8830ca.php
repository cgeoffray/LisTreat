<?php

/* SonataAdminBundle:Block:block_admin_list.html.twig */
class __TwigTemplate_911aa98382cd777fc87665b15e8830ca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SonataBlockBundle:Block:block_base.html.twig");

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataBlockBundle:Block:block_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        // line 15
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "groups"));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 16
            echo "        <table class=\"table table-bordered table-striped sonata-ba-list\">
            <thead>
                <tr>
                    <th colspan=\"3\">";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getContext($context, "group"), "label"), array(), $this->getAttribute($this->getContext($context, "group"), "label_catalogue")), "html", null, true);
            echo "</th>
                </tr>
            </thead>

            <tbody>
                ";
            // line 24
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "group"), "items"));
            foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                // line 25
                echo "                    ";
                if ((($this->getAttribute($this->getContext($context, "admin"), "hasroute", array(0 => "create"), "method") && $this->getAttribute($this->getContext($context, "admin"), "isGranted", array(0 => "CREATE"), "method")) || ($this->getAttribute($this->getContext($context, "admin"), "hasroute", array(0 => "list"), "method") && $this->getAttribute($this->getContext($context, "admin"), "isGranted", array(0 => "LIST"), "method")))) {
                    // line 26
                    echo "                        <tr>
                            <td class=\"sonata-ba-list-label\">";
                    // line 27
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getContext($context, "admin"), "label"), array(), $this->getAttribute($this->getContext($context, "admin"), "translationdomain")), "html", null, true);
                    echo "</td>
                            <td>
                                <div class=\"btn-group\">
                                    ";
                    // line 30
                    if (($this->getAttribute($this->getContext($context, "admin"), "hasroute", array(0 => "create"), "method") && $this->getAttribute($this->getContext($context, "admin"), "isGranted", array(0 => "CREATE"), "method"))) {
                        // line 31
                        echo "                                        ";
                        if (twig_test_empty($this->getAttribute($this->getContext($context, "admin"), "subClasses"))) {
                            // line 32
                            echo "                                            <a class=\"btn btn-small\" href=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateUrl", array(0 => "create"), "method"), "html", null, true);
                            echo "\">
                                                <i class=\"icon-plus\"></i>
                                                ";
                            // line 34
                            echo $this->env->getExtension('translator')->getTranslator()->trans("link_add", array(), "SonataAdminBundle");
                            // line 35
                            echo "                                            </a>
                                        ";
                        } else {
                            // line 37
                            echo "                                            <a class=\"btn btn-small dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                                <i class=\"icon-plus\"></i>
                                                ";
                            // line 39
                            echo $this->env->getExtension('translator')->getTranslator()->trans("link_add", array(), "SonataAdminBundle");
                            // line 40
                            echo "                                                <span class=\"caret\"></span>
                                            </a>
                                            <ul class=\"dropdown-menu\">
                                                ";
                            // line 43
                            $context['_parent'] = (array) $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter($this->getAttribute($this->getContext($context, "admin"), "subclasses")));
                            foreach ($context['_seq'] as $context["_key"] => $context["subclass"]) {
                                // line 44
                                echo "                                                <li>
                                                    <a href=\"";
                                // line 45
                                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateUrl", array(0 => "create", 1 => array("subclass" => $this->getContext($context, "subclass"))), "method"), "html", null, true);
                                echo "\">";
                                echo twig_escape_filter($this->env, $this->getContext($context, "subclass"), "html", null, true);
                                echo "</a>
                                                </li>
                                                ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subclass'], $context['_parent'], $context['loop']);
                            $context = array_merge($_parent, array_intersect_key($context, $_parent));
                            // line 48
                            echo "                                            </ul>
                                        ";
                        }
                        // line 50
                        echo "                                    ";
                    }
                    // line 51
                    echo "                                    ";
                    if (($this->getAttribute($this->getContext($context, "admin"), "hasroute", array(0 => "list"), "method") && $this->getAttribute($this->getContext($context, "admin"), "isGranted", array(0 => "LIST"), "method"))) {
                        // line 52
                        echo "                                        <a class=\"btn btn-small\" href=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateUrl", array(0 => "list"), "method"), "html", null, true);
                        echo "\">
                                            <i class=\"icon-list\"></i>
                                            ";
                        // line 54
                        echo $this->env->getExtension('translator')->getTranslator()->trans("link_list", array(), "SonataAdminBundle");
                        // line 55
                        echo "</a>
                                    ";
                    }
                    // line 57
                    echo "                                </div>
                            </td>
                        </tr>
                    ";
                }
                // line 61
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 62
            echo "            </tbody>
        </table>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Block:block_admin_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 55,  56 => 26,  69 => 14,  173 => 70,  164 => 67,  156 => 65,  148 => 63,  137 => 60,  97 => 44,  86 => 39,  77 => 28,  40 => 19,  20 => 11,  23 => 3,  49 => 24,  146 => 39,  140 => 33,  125 => 27,  117 => 47,  113 => 24,  110 => 23,  99 => 18,  53 => 25,  301 => 100,  295 => 96,  292 => 95,  289 => 94,  287 => 93,  282 => 90,  276 => 86,  273 => 85,  270 => 84,  268 => 83,  263 => 80,  249 => 79,  245 => 77,  230 => 75,  222 => 73,  220 => 72,  215 => 70,  211 => 69,  204 => 66,  198 => 63,  185 => 61,  183 => 60,  177 => 58,  160 => 66,  112 => 42,  82 => 37,  65 => 30,  38 => 14,  144 => 62,  141 => 61,  135 => 47,  126 => 51,  109 => 44,  103 => 30,  67 => 31,  61 => 18,  47 => 17,  105 => 24,  93 => 43,  76 => 34,  72 => 14,  68 => 22,  27 => 13,  91 => 40,  84 => 19,  94 => 38,  88 => 40,  79 => 16,  59 => 27,  21 => 2,  44 => 16,  31 => 15,  28 => 14,  225 => 96,  216 => 90,  212 => 88,  205 => 84,  201 => 83,  196 => 80,  194 => 62,  191 => 78,  189 => 77,  186 => 76,  180 => 72,  172 => 67,  159 => 61,  154 => 44,  147 => 55,  132 => 31,  127 => 54,  121 => 52,  118 => 51,  114 => 42,  104 => 21,  100 => 45,  78 => 35,  75 => 23,  71 => 19,  58 => 18,  34 => 4,  26 => 11,  24 => 6,  25 => 12,  19 => 1,  70 => 32,  63 => 24,  46 => 15,  22 => 1,  163 => 63,  155 => 58,  152 => 64,  149 => 51,  145 => 62,  139 => 61,  131 => 42,  123 => 50,  120 => 46,  115 => 50,  106 => 35,  101 => 36,  96 => 17,  83 => 18,  80 => 29,  74 => 15,  66 => 19,  55 => 15,  52 => 20,  50 => 22,  43 => 8,  41 => 19,  37 => 18,  35 => 13,  32 => 16,  29 => 12,  184 => 70,  178 => 71,  171 => 62,  165 => 58,  162 => 57,  157 => 56,  153 => 54,  151 => 43,  143 => 54,  138 => 51,  136 => 50,  133 => 57,  130 => 47,  122 => 44,  119 => 36,  116 => 35,  111 => 48,  108 => 22,  102 => 41,  98 => 22,  95 => 34,  92 => 29,  89 => 22,  85 => 24,  81 => 40,  73 => 23,  64 => 13,  60 => 23,  57 => 22,  54 => 14,  51 => 19,  48 => 11,  45 => 8,  42 => 7,  39 => 6,  36 => 16,  33 => 6,  30 => 1,);
    }
}
