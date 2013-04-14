<?php

/* SonataAdminBundle:CRUD:base_edit_form.html.twig */
class __TwigTemplate_ef0132c163928c5cb3815cdeeedce467 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form' => array($this, 'block_form'),
            'sonata_pre_fieldsets' => array($this, 'block_sonata_pre_fieldsets'),
            'sonata_post_fieldsets' => array($this, 'block_sonata_post_fieldsets'),
            'formactions' => array($this, 'block_formactions'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('form', $context, $blocks);
    }

    public function block_form($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        $context["url"] = (($this->getAttribute($this->getContext($context, "admin"), "id", array(0 => $this->getContext($context, "object")), "method")) ? ("edit") : ("create"));
        // line 3
        echo "
    ";
        // line 4
        if ((!$this->getAttribute($this->getContext($context, "admin"), "hasRoute", array(0 => $this->getContext($context, "url")), "method"))) {
            // line 5
            echo "        <div>
            ";
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("form_not_available", array(), "SonataAdminBundle"), "html", null, true);
            echo "
        </div>
    ";
        } else {
            // line 9
            echo "        <form class=\"form-horizontal\" action=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateUrl", array(0 => $this->getContext($context, "url"), 1 => array("id" => $this->getAttribute($this->getContext($context, "admin"), "id", array(0 => $this->getContext($context, "object")), "method"), "uniqid" => $this->getAttribute($this->getContext($context, "admin"), "uniqid"), "subclass" => $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "get", array(0 => "subclass"), "method"))), "method"), "html", null, true);
            echo "\" ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
            echo " method=\"POST\">
            ";
            // line 10
            if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "form"), "vars"), "errors")) > 0)) {
                // line 11
                echo "                <div class=\"sonata-ba-form-error\">
                    ";
                // line 12
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'errors');
                echo "
                </div>
            ";
            }
            // line 15
            echo "
            ";
            // line 16
            $this->displayBlock('sonata_pre_fieldsets', $context, $blocks);
            // line 17
            echo "
            ";
            // line 18
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "admin"), "formgroups"));
            foreach ($context['_seq'] as $context["name"] => $context["form_group"]) {
                // line 19
                echo "                <fieldset ";
                if ($this->getAttribute($this->getContext($context, "form_group"), "collapsed")) {
                    echo "class=\"sonata-ba-fieldset-collapsed\"";
                }
                echo ">
                    <legend";
                // line 20
                if (($this->getAttribute($this->getContext($context, "form_group"), "description") != false)) {
                    echo " class=\"sonata-ba-fieldset-collapsed-description\"";
                }
                echo ">
                        ";
                // line 21
                if ($this->getAttribute($this->getContext($context, "form_group"), "collapsed")) {
                    // line 22
                    echo "                            <a href=\"\" class=\"sonata-ba-collapsed\" title=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_expand", array(), "SonataAdminBundle"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "name"), array(), $this->getAttribute($this->getContext($context, "admin"), "translationdomain")), "html", null, true);
                    echo "</a>
                        ";
                } else {
                    // line 24
                    echo "                            ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "name"), array(), $this->getAttribute($this->getContext($context, "admin"), "translationdomain")), "html", null, true);
                    echo "
                        ";
                }
                // line 26
                echo "                    </legend>

                    <div class=\"sonata-ba-collapsed-fields\">
                        ";
                // line 29
                if (($this->getAttribute($this->getContext($context, "form_group"), "description") != false)) {
                    // line 30
                    echo "                            <p>";
                    echo $this->getAttribute($this->getContext($context, "form_group"), "description");
                    echo "</p>
                        ";
                }
                // line 32
                echo "
                        ";
                // line 33
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "form_group"), "fields"));
                foreach ($context['_seq'] as $context["_key"] => $context["field_name"]) {
                    // line 34
                    echo "                            ";
                    if ($this->getAttribute($this->getAttribute($this->getContext($context, "admin", true), "formfielddescriptions", array(), "any", false, true), $this->getContext($context, "field_name"), array(), "array", true, true)) {
                        // line 35
                        echo "                                ";
                        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), $this->getContext($context, "field_name"), array(), "array"), 'row');
                        echo "
                            ";
                    }
                    // line 37
                    echo "                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_name'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 38
                echo "                    </div>
                </fieldset>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['form_group'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 41
            echo "
            ";
            // line 42
            $this->displayBlock('sonata_post_fieldsets', $context, $blocks);
            // line 43
            echo "
            ";
            // line 44
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'rest');
            echo "

            ";
            // line 46
            $this->displayBlock('formactions', $context, $blocks);
            // line 74
            echo "        </form>
    ";
        }
        // line 76
        echo "
";
    }

    // line 16
    public function block_sonata_pre_fieldsets($context, array $blocks = array())
    {
    }

    // line 42
    public function block_sonata_post_fieldsets($context, array $blocks = array())
    {
    }

    // line 46
    public function block_formactions($context, array $blocks = array())
    {
        // line 47
        echo "                <div class=\"well form-actions\">
                    ";
        // line 48
        if ($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "isxmlhttprequest")) {
            // line 49
            echo "                        ";
            if ($this->getAttribute($this->getContext($context, "admin"), "id", array(0 => $this->getContext($context, "object")), "method")) {
                // line 50
                echo "                            <input type=\"submit\" class=\"btn btn-primary\" name=\"btn_update\" value=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_update", array(), "SonataAdminBundle"), "html", null, true);
                echo "\"/>
                        ";
            } else {
                // line 52
                echo "                            <input type=\"submit\" class=\"btn\" name=\"btn_create\" value=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_create", array(), "SonataAdminBundle"), "html", null, true);
                echo "\"/>
                        ";
            }
            // line 54
            echo "                    ";
        } else {
            // line 55
            echo "                        ";
            if ($this->getAttribute($this->getContext($context, "admin"), "supportsPreviewMode")) {
                // line 56
                echo "                            <input class=\"btn btn-info persist-preview\" name=\"btn_preview\" type=\"submit\" value=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_preview", array(), "SonataAdminBundle"), "html", null, true);
                echo "\"/>
                        ";
            }
            // line 58
            echo "                        ";
            if ($this->getAttribute($this->getContext($context, "admin"), "id", array(0 => $this->getContext($context, "object")), "method")) {
                // line 59
                echo "                            <input type=\"submit\" class=\"btn btn-primary\" name=\"btn_update_and_edit\" value=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_update_and_edit_again", array(), "SonataAdminBundle"), "html", null, true);
                echo "\"/>
                            <input type=\"submit\" class=\"btn\" name=\"btn_update_and_list\" value=\"";
                // line 60
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_update_and_return_to_list", array(), "SonataAdminBundle"), "html", null, true);
                echo "\"/>

                            ";
                // line 62
                if (($this->getAttribute($this->getContext($context, "admin"), "hasroute", array(0 => "delete"), "method") && $this->getAttribute($this->getContext($context, "admin"), "isGranted", array(0 => "DELETE", 1 => $this->getContext($context, "object")), "method"))) {
                    // line 63
                    echo "                                ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("delete_or", array(), "SonataAdminBundle"), "html", null, true);
                    echo "
                                <a class=\"btn btn-danger\" href=\"";
                    // line 64
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateObjectUrl", array(0 => "delete", 1 => $this->getContext($context, "object")), "method"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_delete", array(), "SonataAdminBundle"), "html", null, true);
                    echo "</a>
                            ";
                }
                // line 66
                echo "                        ";
            } else {
                // line 67
                echo "                            <input class=\"btn btn-primary\" type=\"submit\" name=\"btn_create_and_edit\" value=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_create_and_edit_again", array(), "SonataAdminBundle"), "html", null, true);
                echo "\"/>
                            <input type=\"submit\" class=\"btn\" name=\"btn_create_and_list\" value=\"";
                // line 68
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_create_and_return_to_list", array(), "SonataAdminBundle"), "html", null, true);
                echo "\"/>
                            <input class=\"btn\" type=\"submit\" name=\"btn_create_and_create\" value=\"";
                // line 69
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_create_and_create_a_new_one", array(), "SonataAdminBundle"), "html", null, true);
                echo "\"/>
                        ";
            }
            // line 71
            echo "                    ";
        }
        // line 72
        echo "                </div>
            ";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_edit_form.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  264 => 72,  261 => 71,  256 => 69,  252 => 68,  247 => 67,  244 => 66,  237 => 64,  232 => 63,  217 => 58,  208 => 55,  199 => 52,  193 => 50,  190 => 49,  188 => 48,  182 => 46,  167 => 76,  161 => 46,  134 => 37,  128 => 35,  124 => 47,  12 => 45,  129 => 55,  56 => 24,  69 => 17,  173 => 70,  164 => 67,  156 => 44,  148 => 41,  137 => 60,  97 => 44,  86 => 39,  77 => 27,  40 => 6,  20 => 1,  23 => 1,  49 => 16,  146 => 39,  140 => 38,  125 => 34,  117 => 47,  113 => 40,  110 => 29,  99 => 24,  53 => 10,  301 => 100,  295 => 96,  292 => 95,  289 => 94,  287 => 93,  282 => 90,  276 => 86,  273 => 85,  270 => 84,  268 => 83,  263 => 80,  249 => 79,  245 => 77,  230 => 62,  222 => 73,  220 => 59,  215 => 70,  211 => 56,  204 => 66,  198 => 63,  185 => 47,  183 => 60,  177 => 42,  160 => 66,  112 => 30,  82 => 29,  65 => 24,  38 => 18,  144 => 62,  141 => 61,  135 => 47,  126 => 51,  109 => 44,  103 => 30,  67 => 16,  61 => 26,  47 => 21,  105 => 26,  93 => 43,  76 => 19,  72 => 18,  68 => 30,  27 => 14,  91 => 22,  84 => 19,  94 => 38,  88 => 31,  79 => 16,  59 => 23,  21 => 2,  44 => 16,  31 => 15,  28 => 14,  225 => 60,  216 => 90,  212 => 88,  205 => 54,  201 => 83,  196 => 80,  194 => 62,  191 => 78,  189 => 77,  186 => 76,  180 => 72,  172 => 16,  159 => 61,  154 => 44,  147 => 55,  132 => 31,  127 => 48,  121 => 33,  118 => 32,  114 => 42,  104 => 21,  100 => 45,  78 => 35,  75 => 23,  71 => 25,  58 => 12,  34 => 16,  26 => 11,  24 => 13,  25 => 12,  19 => 11,  70 => 32,  63 => 22,  46 => 9,  22 => 12,  163 => 74,  155 => 58,  152 => 64,  149 => 51,  145 => 62,  139 => 61,  131 => 42,  123 => 50,  120 => 46,  115 => 50,  106 => 35,  101 => 36,  96 => 34,  83 => 20,  80 => 29,  74 => 31,  66 => 23,  55 => 11,  52 => 20,  50 => 22,  43 => 14,  41 => 19,  37 => 5,  35 => 4,  32 => 3,  29 => 2,  184 => 70,  178 => 71,  171 => 62,  165 => 58,  162 => 57,  157 => 56,  153 => 43,  151 => 42,  143 => 54,  138 => 51,  136 => 50,  133 => 57,  130 => 47,  122 => 44,  119 => 36,  116 => 35,  111 => 48,  108 => 38,  102 => 36,  98 => 22,  95 => 34,  92 => 29,  89 => 21,  85 => 30,  81 => 40,  73 => 27,  64 => 15,  60 => 23,  57 => 27,  54 => 26,  51 => 19,  48 => 11,  45 => 8,  42 => 19,  39 => 16,  36 => 17,  33 => 16,  30 => 1,);
    }
}
