<?php

/* GestionEmploisBundle:Emploi:Emploi.html.twig */
class __TwigTemplate_9adf3a4a6ef8e626a4c89c29bd7ff9c0 extends Twig_Template
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
        // line 18
        echo "<form id=\"form\" method=\"POST\" action=\"";
        echo $this->env->getExtension('routing')->getPath("emploi_emploiClasse");
        echo "\">
<select id=\"classes\" name=\"classe\" url=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("emploi_emploiClasse");
        echo "\">
    <option id=\"\"></option>
    ";
        // line 21
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")));
        foreach ($context['_seq'] as $context["_key"] => $context["classe"]) {
            // line 22
            echo "    <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classe"]) ? $context["classe"] : $this->getContext($context, "classe")), "id"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classe"]) ? $context["classe"] : $this->getContext($context, "classe")), "code"), "html", null, true);
            echo "</option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['classe'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "</select>
        <button type=\"submit\">envoyer</button>
</form>

<iframe id=\"iframe\" onload=\"emploi();\" style=\"width: 100%; height: 500px;\" frameborder=\"no\"></iframe>
<div id=\"emploi\" style=\"display: none\"></div>
<script src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-1.9.1.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-ui.js"), "html", null, true);
        echo "\"></script>
 <script type=\"text/javascript\">
     function emploi(){
         \$('#classes').change(function() {
             var classe=\$(this).val();
             \$.post(\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("emploi_emploiClasse");
        echo "\",
                       { classe: classe
                       },function(){
                 
             });
                //\$('#iframe').attr('src', \$(this).attr('url'));
        });
     }
        

        
        </script>";
    }

    public function getTemplateName()
    {
        return "GestionEmploisBundle:Emploi:Emploi.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 36,  56 => 31,  52 => 30,  44 => 24,  33 => 22,  29 => 21,  24 => 19,  19 => 18,);
    }
}
