<?php

/* GestionEmploisBundle:Classe:new.html.twig */
class __TwigTemplate_546c76f484c5b0ff91c259398bff4317 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap-theme.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
<link href=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
<link href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/jquery-ui.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
<script src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

<form class=\"form-horizontal\" action=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("classe_create");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
;
        echo ">
    <div class=\"panel-body\">
        <div class=\"form-group\">
            ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
            </div>
        </div>
        <div class=\"panel-footer\" style=\"text-align: right\">
            <p>
                <input type=\"button\" id=\"btn\" class=\"btn btn-info btn-xs\" value=\"Ajouter\"/>
            </p></div>
    </form>


    
    <script type=\"text/javascript\">
        \$('#gestion_emploisbundle_classetype_diplome').change(function() {
            var diplome = \$('#gestion_emploisbundle_classetype_diplome').val();
            \$.post(\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("classe_getniveau");
        echo "\", {
                diplome: diplome
            }, function(data) {
                \$('#gestion_emploisbundle_classetype_niveau').empty();
                \$('#gestion_emploisbundle_classetype_niveau').append(data.niveaux);
            },
                    \"json\"
                    );
        });

        \$('#btn').click(function() {

            var formation = \$('#gestion_emploisbundle_classetype_formation').val();
            var diplome = \$('#gestion_emploisbundle_classetype_diplome').val();
            var niveau = \$('#gestion_emploisbundle_classetype_niveau').val();
            var code = \$('#gestion_emploisbundle_classetype_code').val();
            var nbGroupe = \$('#gestion_emploisbundle_classetype_nbGroupe').val();
            //alert(chapitres);
            \$.post(\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("classe_ajouterclasse");
        echo "\", {
                formation: formation,
                diplome: diplome,
                niveau: niveau,
                code: code,
                nbGroupe: nbGroupe
            }, function(data) {
                alert(data.msg);
                \$('#Classe').dialog('close');
                self.location.reload();
            },
                    \"json\"
                    );

        });
        </script>
";
    }

    public function getTemplateName()
    {
        return "GestionEmploisBundle:Classe:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 41,  63 => 23,  46 => 9,  37 => 6,  32 => 4,  28 => 3,  24 => 2,  19 => 1,);
    }
}
