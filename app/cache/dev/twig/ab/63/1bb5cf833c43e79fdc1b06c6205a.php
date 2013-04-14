<?php

/* ListreatMainBundle:Item:update.html.twig */
class __TwigTemplate_ab631bb5cf833c43e79fdc1b06c6205a extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "title"), "html", null, true);
        echo " - edit";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<br/>
<h2>Edit ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "title"), "html", null, true);
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

";
    }

    // line 18
    public function block_javascripts($context, array $blocks = array())
    {
        // line 19
        echo "            <script src=";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webprofiler/js/jquery-1.9.1.js"), "html", null, true);
        echo "></script>
            <script src=";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webprofiler/js/jquery-ui-1.10.2.custom.min.js"), "html", null, true);
        echo "></script>
            
            <script type=\"text/javascript\">
            \$(document).ready(function() {
              
              // On récupère la balise <div> en question qui contient l'attribut « data-prototype » qui nous intéresse.
              var \$container = \$('div#listreat_mainbundle_itemtype_images');

              // On ajoute un lien pour ajouter une nouvelle catégorie
              var \$lienAjout = \$('<a href=\"#\" id=\"ajout_item\" class=\"btn\">Add an image</a><br/>');
              \$container.append(\$lienAjout);

              // On ajoute un nouveau champ à chaque clic sur le lien d'ajout.
              \$lienAjout.click(function(e) {
                ajouterCategorie(\$container);
                e.preventDefault(); // évite qu'un # apparaisse dans l'URL
                return false;
              });

              // On définit un compteur unique pour nommer les champs qu'on va ajouter dynamiquement
              var index = \$container.find(':input').length;
              
              // On ajoute un premier champ directement s'il n'en existe pas déjà un (cas d'un nouvel article par exemple).
              if (index == 0) {
                ajouterCategorie(\$container);
              } else {
                // Pour chaque catégorie déjà existante, on ajoute un lien de suppression
                  //var i = 0;
                  \$container.children('div').each(function() {
                  //var id = \$('#listreat_mainbundle_shoptype_items_'+i+'_id').val();
                  ajouterLienSuppression(\$(this));
                  //i++;
                });
              }

              // La fonction qui ajoute un formulaire Categorie
              function ajouterCategorie(\$container) {
                // Dans le contenu de l'attribut « data-prototype », on remplace :
                // - le texte \"__name__label__\" qu'il contient par le label du champ
                // - le texte \"__name__\" qu'il contient par le numéro du champ
                var \$prototype = \$(\$container.attr('data-prototype').replace(/__name__label__/g, 'Image n°' + (index+1))
                                                                    .replace(/__name__/g, index));

                // On ajoute au prototype un lien pour pouvoir supprimer la catégorie
                ajouterLienSuppression(\$prototype);

                // On ajoute le prototype modifié à la fin de la balise <div>
                \$container.append(\$prototype);

                // Enfin, on incrémente le compteur pour que le prochain ajout se fasse avec un autre numéro
                index++;
              }

              // La fonction qui ajoute un lien de suppression d'une catégorie
              function ajouterLienSuppression(\$prototype) {
                // Création du lien
                \$lienSuppression = \$('<a href=\"#\" class=\"btn btn-danger\">Delete</a>');

                // Ajout du lien
                \$prototype.append(\$lienSuppression);

                // Ajout du listener sur le clic du lien
                \$lienSuppression.click(function(e) {
                  
                  /*if (id) {
                    var serviceURL = \"http://localhost:8888/LTCoaching/web/app_dev.php/api/\";
                    \$.ajax({
                      type: \"POST\",
                      url: serviceURL + \"items/delete/\" + id,
                      data: \"\",
                      success: function(data) {
                          alert(data);
                      }
                    });
                  }*/
                  \$prototype.remove();
                  e.preventDefault(); // évite qu'un # apparaisse dans l'URL
                  return false;
                });
              }
            });
            </script>
";
    }

    public function getTemplateName()
    {
        return "ListreatMainBundle:Item:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 20,  66 => 19,  63 => 18,  53 => 11,  49 => 10,  43 => 7,  40 => 6,  37 => 5,  30 => 3,);
    }
}
