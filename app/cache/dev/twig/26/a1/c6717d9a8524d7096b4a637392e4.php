<?php

/* ListreatMainBundle:Shop:update.html.twig */
class __TwigTemplate_26a1c6717d9a8524d7096b4a637392e4 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["shop"]) ? $context["shop"] : $this->getContext($context, "shop")), "name"), "html", null, true);
        echo " - edit";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<br/>
<h2>Edit ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["shop"]) ? $context["shop"] : $this->getContext($context, "shop")), "name"), "html", null, true);
        echo ":</h2><br/>

<div class=\"well\">
  <form method=\"post\" ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
    ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <input type=\"submit\" class=\"btn btn-primary\" />
  </form>
</div>

<br/>
<a href=";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("items_create", array("shop" => $this->getAttribute((isset($context["shop"]) ? $context["shop"] : $this->getContext($context, "shop")), "id"))), "html", null, true);
        echo ">New product</a>
<br/>

<div id=\"item-list\">
    ";
        // line 21
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : $this->getContext($context, "items")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 22
            echo "    <div class=\"shop-list\">
        <div>
            <h4>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "title"), "html", null, true);
            echo "</h4>
            <p>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "description"), "html", null, true);
            echo "</p>
        </div>
        <div>
            <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "link"), "html", null, true);
            echo "\">Buy it</a> <br/>
            <a href=";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("items_update", array("item" => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "id"))), "html", null, true);
            echo ">Edit</a>
        </div>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 33
        echo "</div>


";
    }

    public function getTemplateName()
    {
        return "ListreatMainBundle:Shop:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 33,  90 => 29,  86 => 28,  80 => 25,  76 => 24,  72 => 22,  68 => 21,  61 => 17,  52 => 11,  48 => 10,  42 => 7,  39 => 6,  36 => 5,  29 => 3,);
    }
}
