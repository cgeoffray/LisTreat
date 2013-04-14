<?php

/* ListreatMainBundle:Shop:list.html.twig */
class __TwigTemplate_da37c5a54e4b461af4e925e82a8f6fee extends Twig_Template
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
        echo "Shops List";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<br/>
<h1>Shops List</h1>

<div id=\"item-list\">
    ";
        // line 10
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["shops"]) ? $context["shops"] : $this->getContext($context, "shops")));
        foreach ($context['_seq'] as $context["_key"] => $context["shop"]) {
            // line 11
            echo "        <div class=\"shop-list\">
            <div>
                <h3>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["shop"]) ? $context["shop"] : $this->getContext($context, "shop")), "name"), "html", null, true);
            echo "</h3>
                <p>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["shop"]) ? $context["shop"] : $this->getContext($context, "shop")), "description"), "html", null, true);
            echo "</p>
            </div>
            <div>
                <a href=";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("shops_display", array("shop" => $this->getAttribute((isset($context["shop"]) ? $context["shop"] : $this->getContext($context, "shop")), "id"))), "html", null, true);
            echo ">Entrer</a> <br/>
                <a href=";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("shops_update", array("shop" => $this->getAttribute((isset($context["shop"]) ? $context["shop"] : $this->getContext($context, "shop")), "id"))), "html", null, true);
            echo ">Éditer</a>
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['shop'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 22
        echo "</div>

<br/><br/>
<h1>Users:</h1>

<div id=\"user-list\">
    ";
        // line 28
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 29
            echo "        <div class=\"shop-list\">
            <div>
                <h3>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username"), "html", null, true);
            echo "</h3>
                <p>email: ";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email"), "html", null, true);
            echo "</p>
            </div>
            <div>
                <a href=\"#\" id=\"friendship\" onclick=\"friend(";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "id"), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id"), "html", null, true);
            echo ");\" class=\"friendship\">Add to friends</a>
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 39
        echo "</div>

<br/><br/>
<h1>Friends:</h1>

<div id=\"user-list\">
    ";
        // line 45
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["friends"]) ? $context["friends"] : $this->getContext($context, "friends")));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 46
            echo "        <div class=\"shop-list\">
            <div>
                <h3>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "friend"), "username"), "html", null, true);
            echo "</h3>
                <p>email: ";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "friend"), "email"), "html", null, true);
            echo "</p>
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 53
        echo "</div>

";
    }

    // line 57
    public function block_javascripts($context, array $blocks = array())
    {
        // line 58
        echo "            <script src=";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webprofiler/js/jquery-1.9.1.js"), "html", null, true);
        echo "></script>
            <script src=";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webprofiler/js/jquery-ui-1.10.2.custom.min.js"), "html", null, true);
        echo "></script>
            
            <script type=\"text/javascript\">
                function friend (user, friend) {
                    var serviceURL = \"http://localhost:8888/LTCoaching/web/app_dev.php/api/\";
                    \$.ajax({
                        type: \"POST\",
                        url: serviceURL + \"friend/\" + user + \"/\" + friend,
                        data: \"\",
                        success: function(data) {
                            alert(data);
                            \$('#friend').text('Friend');
                            \$('#follow').attr('onclick', '');
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
        return "ListreatMainBundle:Shop:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 59,  154 => 58,  151 => 57,  145 => 53,  135 => 49,  131 => 48,  127 => 46,  123 => 45,  115 => 39,  103 => 35,  97 => 32,  93 => 31,  89 => 29,  85 => 28,  77 => 22,  67 => 18,  63 => 17,  57 => 14,  53 => 13,  49 => 11,  45 => 10,  39 => 6,  36 => 5,  30 => 3,);
    }
}
