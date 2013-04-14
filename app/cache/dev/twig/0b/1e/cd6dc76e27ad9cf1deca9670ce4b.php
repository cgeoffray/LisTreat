<?php

/* ListreatMainBundle:Shop:show.html.twig */
class __TwigTemplate_0b1ecd6dc76e27ad9cf1deca9670ce4b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["shop"]) ? $context["shop"] : $this->getContext($context, "shop")), "name"), "html", null, true);
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<br/>
<div>
    <h2>";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["shop"]) ? $context["shop"] : $this->getContext($context, "shop")), "name"), "html", null, true);
        echo "</h2>
    <p>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["shop"]) ? $context["shop"] : $this->getContext($context, "shop")), "description"), "html", null, true);
        echo "</p>
</div>
<div>
    ";
        // line 12
        if (((isset($context["followed"]) ? $context["followed"] : $this->getContext($context, "followed")) == false)) {
            // line 13
            echo "    <a href=\"#\" id=\"follow\" onclick=\"follow(";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "id"), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["shop"]) ? $context["shop"] : $this->getContext($context, "shop")), "id"), "html", null, true);
            echo ");\" class=\"follow\">Follow</a>
    ";
        } else {
            // line 15
            echo "    <a href=\"#\" id=\"follow\" onclick=\"unfollow(";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "id"), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["shop"]) ? $context["shop"] : $this->getContext($context, "shop")), "id"), "html", null, true);
            echo ");\" class=\"follow\">Unfollow</a>
    ";
        }
        // line 17
        echo "</div>
<br/>

<h4>Products:</h4>

<div id=\"item-list\">
    ";
        // line 23
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : $this->getContext($context, "items")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 24
            echo "        <div class=\"item-list\">
            <div>
                <h3>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "title"), "html", null, true);
            echo "</h3>
                <p>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "description"), "html", null, true);
            echo "</p>
            </div>
            <div>
                <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "link"), "html", null, true);
            echo "\" class=\"link\">Buy it</a>
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 34
        echo "</div>

";
    }

    // line 38
    public function block_javascripts($context, array $blocks = array())
    {
        // line 39
        echo "            <script src=";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webprofiler/js/jquery-1.9.1.js"), "html", null, true);
        echo "></script>
            <script src=";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webprofiler/js/jquery-ui-1.10.2.custom.min.js"), "html", null, true);
        echo "></script>
            
            <script type=\"text/javascript\">
                function follow (user, shop) {
                    var serviceURL = \"http://localhost:8888/LTCoaching/web/app_dev.php/api/\";
                    \$.ajax({
                        type: \"POST\",
                        url: serviceURL + \"follow/\" + user + \"/\" + shop,
                        data: \"\",
                        success: function(data) {
                            alert(data);
                            \$('#follow').text('Unfollow');
                            \$('#follow').attr('onclick', 'unfollow(";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "id"), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["shop"]) ? $context["shop"] : $this->getContext($context, "shop")), "id"), "html", null, true);
        echo ");');
                        }
                    });
                    e.preventDefault(); // évite qu'un # apparaisse dans l'URL
                    return false;
                }
                
                function unfollow (user, shop) {
                    var serviceURL = \"http://localhost:8888/LTCoaching/web/app_dev.php/api/\";
                    \$.ajax({
                        type: \"POST\",
                        url: serviceURL + \"unfollow/\" + user + \"/\" + shop,
                        data: \"\",
                        success: function(data) {
                            alert(data);
                            \$('#follow').text('Follow');
                            \$('#follow').attr('onclick', 'follow(";
        // line 68
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "id"), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["shop"]) ? $context["shop"] : $this->getContext($context, "shop")), "id"), "html", null, true);
        echo ");');
                        }
                    });
                    e.preventDefault(); // évite qu'un # apparaisse dans l'URL
                    return false;
                }
            </script>
";
    }

    public function getTemplateName()
    {
        return "ListreatMainBundle:Shop:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 68,  136 => 52,  121 => 40,  116 => 39,  113 => 38,  107 => 34,  97 => 30,  91 => 27,  87 => 26,  83 => 24,  79 => 23,  71 => 17,  63 => 15,  55 => 13,  53 => 12,  47 => 9,  43 => 8,  39 => 6,  36 => 5,  30 => 3,);
    }
}
