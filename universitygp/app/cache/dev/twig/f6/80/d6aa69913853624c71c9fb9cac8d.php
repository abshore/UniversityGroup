<?php

/* GestionEmploisBundle:AffectationPlan:new.html.twig */
class __TwigTemplate_f680d6aa69913853624c71c9fb9cac8d extends Twig_Template
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


<form action=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("affectationplan_create");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
;
        echo ">
    <div class=\"panel-body\">
        <div class=\"form-group\">
            ";
        // line 10
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
        \$('#gestion_emploisbundle_affectationplantype_classe').change(function() {
            var classe = \$('#gestion_emploisbundle_affectationplantype_classe').val();
            \$.post(\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("affectationplan_getmatiere");
        echo "\", {
                classe: classe
            }, function(data) {
                \$('#gestion_emploisbundle_affectationplantype_matiere').empty();
                \$('#gestion_emploisbundle_affectationplantype_matiere').append(data.matieres);
                \$('#gestion_emploisbundle_affectationplantype_groupe').empty();
                \$('#gestion_emploisbundle_affectationplantype_groupe').append(data.groupes);
            },
                    \"json\"
                    );
        });

        \$('#btn').click(function() {

            var classe = \$('#gestion_emploisbundle_affectationplantype_classe').val();
            var matiere = \$('#gestion_emploisbundle_affectationplantype_matiere').val();
            var groupe = \$('#gestion_emploisbundle_affectationplantype_groupe').val();
            var prof = \$('#gestion_emploisbundle_affectationplantype_prof').val();
            //alert(chapitres);
            \$.post(\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("affectationplan_ajouterAffectation");
        echo "\", {
                classe: classe,
                matiere: matiere,
                groupe: groupe,
                prof: prof
            }, function(data) {
                alert(data.msg);
                \$('#Affectation').dialog('close');
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
        return "GestionEmploisBundle:AffectationPlan:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 42,  63 => 23,  47 => 10,  38 => 7,  32 => 4,  28 => 3,  24 => 2,  19 => 1,);
    }
}
