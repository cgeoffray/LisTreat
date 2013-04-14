<?php

/* ::layout.html.twig */
class __TwigTemplate_4b2cafe261a0ab3f227fd3e153cfd9d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    
    
    <body>
        ";
        // line 15
        $this->displayBlock('body', $context, $blocks);
        // line 44
        echo "            
        ";
        // line 45
        $this->displayBlock('javascripts', $context, $blocks);
        // line 49
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "LisTreat";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webprofiler/css/profiler.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
            <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webprofiler/css/theme/jquery-custom.min.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
        ";
    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        // line 16
        echo "            <header>
            ";
        // line 17
        $this->displayBlock('header', $context, $blocks);
        // line 38
        echo "            </header>
            
            <div class=\"mainContainer\">
            ";
        // line 41
        $this->displayBlock('content', $context, $blocks);
        // line 42
        echo "            </div>
        ";
    }

    // line 17
    public function block_header($context, array $blocks = array())
    {
        // line 18
        echo "                <nav>
                    <div class=\"navigation\">
                        <div class=\"titre-listreat\">LisTreat</div>
                        <div><a href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("shops_list"), "html", null, true);
        echo "\">List</a></div>
                        <div><a href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("myshops"), "html", null, true);
        echo "\">My Shops</a></div>
                        <div><a href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("shops_create"), "html", null, true);
        echo "\">New Shop</a></div>
                        ";
        // line 24
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 25
            echo "                        <div class=\"login\">
                            <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("profil", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "id"))), "html", null, true);
            echo "\">
                                ";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "username"), "html", null, true);
            echo "
                            </a> - <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_security_logout"), "html", null, true);
            echo "\">
                                    ";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                            </a>
                        </div>
                        ";
        } else {
            // line 33
            echo "                        <div class=\"login\"><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_security_login"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></div>
                        ";
        }
        // line 35
        echo "                    </div>
                </nav>
            ";
    }

    // line 41
    public function block_content($context, array $blocks = array())
    {
    }

    // line 45
    public function block_javascripts($context, array $blocks = array())
    {
        // line 46
        echo "            <script src=";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webprofiler/js/jquery-1.9.1.js"), "html", null, true);
        echo "></script>
            <script src=";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webprofiler/js/jquery-ui-1.10.2.custom.min.js"), "html", null, true);
        echo "></script>
        ";
    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 47,  165 => 46,  162 => 45,  157 => 41,  151 => 35,  143 => 33,  136 => 29,  132 => 28,  128 => 27,  124 => 26,  121 => 25,  119 => 24,  115 => 23,  111 => 22,  107 => 21,  102 => 18,  99 => 17,  94 => 42,  92 => 41,  87 => 38,  85 => 17,  82 => 16,  79 => 15,  73 => 8,  68 => 7,  65 => 6,  59 => 5,  53 => 49,  51 => 45,  48 => 44,  46 => 15,  37 => 10,  35 => 6,  31 => 5,  25 => 1,);
    }
}
