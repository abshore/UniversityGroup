<?php

/* GestionUserBundle:Cursus:layout.html.twig */
class __TwigTemplate_9377d1bd758f458110f91350db591bc6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<div style=\"height:250px;width: 250px; margin-left: 10%;margin-top: 50px;\" class=\"panel panel-primary\">
  <div class=\"panel-heading\">
    <h3 class=\"panel-title\"> <img src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(((("upload/" . $this->getAttribute($this->getAttribute((isset($context["cursus"]) ? $context["cursus"] : $this->getContext($context, "cursus")), "user"), "id")) . "/") . $this->getAttribute($this->getAttribute((isset($context["cursus"]) ? $context["cursus"] : $this->getContext($context, "cursus")), "user"), "image"))), "html", null, true);
        echo "\" alt=\"pas de photo\" height=\"100\" width=\"100\" /></h3>
  </div>
  <div class=\"panel-body\">
<p class=\"text-primary \">Nom : ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["cursus"]) ? $context["cursus"] : $this->getContext($context, "cursus")), "user"), "nom"), "html", null, true);
        echo "</p>
<p class=\"text-primary \">Prenom : ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["cursus"]) ? $context["cursus"] : $this->getContext($context, "cursus")), "user"), "prenom"), "html", null, true);
        echo "</p>
<p class=\"text-primary \">Titre de CV : ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cursus"]) ? $context["cursus"] : $this->getContext($context, "cursus")), "nomcv"), "html", null, true);
        echo "</p>
 
 <p class=\"text-primary \"></p>

  
  
  
  </div>
</div>

  
      

<div class=\"tabbable\" style=\"width: auto; height: auto;width: 95%; margin-left: 5%;margin-top: 50px;\">
            <ul class=\"nav nav-tabs\">
                <li class=\"active\"><a href=\"#pane2\" data-toggle=\"tab\">Formations</a></li>
                <li><a href=\"#pane3\" data-toggle=\"tab\">Expériences</a></li>
                <li><a href=\"#pane4\" data-toggle=\"tab\">Langues</a></li>
            </ul>
            <div class=\"tab-content\">
               
                <div id=\"pane2\" class=\"tab-pane active\">
  <iframe src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("formation", array("idcursus" => (isset($context["idcursus"]) ? $context["idcursus"] : $this->getContext($context, "idcursus")))), "html", null, true);
        echo "\" style=\"width: 100%; height: 1000px;\" frameborder=\"no\"></iframe>            

           
 <br>
        </div>

                  
              
                <div id=\"pane3\" class=\"tab-pane\">
 <iframe src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("experience", array("idcursus" => (isset($context["idcursus"]) ? $context["idcursus"] : $this->getContext($context, "idcursus")))), "html", null, true);
        echo "\" style=\"width: 100%; height: 1000px;\" frameborder=\"no\"></iframe>            
  
                    <br>
                </div>
                <div id=\"pane4\" class=\"tab-pane\">
        <iframe src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("langue", array("idcursus" => (isset($context["idcursus"]) ? $context["idcursus"] : $this->getContext($context, "idcursus")))), "html", null, true);
        echo "\" style=\"width: 100%; height: 1000px;\" frameborder=\"no\"></iframe>            
  
                    <br>
                </div>
                   
            </div>
        </div>


<script src=\"http://code.jquery.com/jquery-1.8.2.min.js\"></script>


<script type=\"text/javascript\">
                   \$(function() {
   \$( \".form-control.da\" ).datepicker();
   });

            </script>
";
    }

    public function getTemplateName()
    {
        return "GestionUserBundle:Cursus:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 47,  86 => 42,  74 => 33,  49 => 11,  45 => 10,  41 => 9,  35 => 6,  31 => 4,  28 => 3,);
    }
}
