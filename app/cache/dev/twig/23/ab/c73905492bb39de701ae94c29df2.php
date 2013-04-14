<?php

/* ListreatMainBundle:Shop:myshops.html.twig */
class __TwigTemplate_23abc73905492bb39de701ae94c29df2 extends Twig_Template
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
        echo "Shops List";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<br/>
<h1>Shops created:</h1>

<div id=\"item-list\">
    ";
        // line 10
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["created"]) ? $context["created"] : $this->getContext($context, "created")));
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
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("shops_update", array("shop" => $this->getAttribute((isset($context["shop"]) ? $context["shop"] : $this->getContext($context, "shop")), "id"))), "html", null, true);
            echo ">Éditer</a>
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['shop'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 21
        echo "</div>

<br/><br/>
<h1>Shops followed:</h1>

<div id=\"item-list\">
    ";
        // line 27
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["followed"]) ? $context["followed"] : $this->getContext($context, "followed")));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 28
            echo "        <div class=\"shop-list\">
            <div>
                <h3>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "shop"), "name"), "html", null, true);
            echo "</h3>
                <p>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "shop"), "description"), "html", null, true);
            echo "</p>
            </div>
            <div>
                <a href=";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("shops_display", array("shop" => $this->getAttribute($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "shop"), "id"))), "html", null, true);
            echo ">Entrer</a>
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 38
        echo "</div>

";
    }

    public function getTemplateName()
    {
        return "ListreatMainBundle:Shop:myshops.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 38,  98 => 34,  92 => 31,  88 => 30,  84 => 28,  80 => 27,  72 => 21,  62 => 17,  56 => 14,  52 => 13,  48 => 11,  44 => 10,  38 => 6,  35 => 5,  29 => 3,);
    }
}
