<?php

/* GestionUserBundle:Etudiant:editperso.html.twig */
class __TwigTemplate_f0e14778d032a9a75cabbf545a97edd7 extends Twig_Template
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
        // line 6
        echo "<form style=\"width: 80%; margin-left: 10%;margin-top: 100px;\"  class=\"form-horizontal\" action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("etudiant_updateperso", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'enctype');
;
        echo ">
        <input type=\"hidden\" name=\"_method\" value=\"PUT\" />
      
<div class=\"form-group\">
            <label class=\"col-lg-2 control-label\" for=\"inputEmail\">";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "email"), 'label');
        echo "</label>
            <div class=\"col-lg-5\"> ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "email"), 'widget', array("attr" => array("class" => "form-control")));
        echo " </div>
        </div>

<div class=\"form-group\">
            <label class=\"col-lg-2 control-label\" for=\"inputEmail\">";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "plainPassword"), 'label');
        echo "</label>
            <div class=\"col-lg-5\"> ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "plainPassword"), 'widget', array("attr" => array("class" => "form-control")));
        echo " </div>
        </div>

   <div class=\"form-group\">
            <label class=\"col-lg-2 control-label\" for=\"inputEmail\">";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nom"), 'label');
        echo "</label>
            <div class=\"col-lg-5\"> ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nom"), 'widget', array("attr" => array("class" => "form-control")));
        echo " </div>
        </div>
<div class=\"form-group\">
            <label class=\"col-lg-2 control-label\" for=\"inputEmail\">";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "prenom"), 'label');
        echo "</label>
            <div class=\"col-lg-5\"> ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "prenom"), 'widget', array("attr" => array("class" => "form-control")));
        echo " </div>
        </div>
<div class=\"form-group\">
            <label class=\"col-lg-2 control-label\" for=\"inputEmail\">";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "tel"), 'label');
        echo "</label>
            <div class=\"col-lg-5\"> ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "tel"), 'widget', array("attr" => array("class" => "form-control")));
        echo " </div>
        </div>
<div class=\"form-group\">
            <label class=\"col-lg-2 control-label\" for=\"inputEmail\">";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "mobile"), 'label');
        echo "</label>
            <div class=\"col-lg-5\"> ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "mobile"), 'widget', array("attr" => array("class" => "form-control")));
        echo " </div>
        </div>
<div class=\"form-group\">
            <label class=\"col-lg-2 control-label\" for=\"inputEmail\">";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "presentation"), 'label');
        echo "</label>
            <div class=\"col-lg-5\"> ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "presentation"), 'widget', array("attr" => array("class" => "form-control")));
        echo " </div>
        </div>
  ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'rest');
        echo "

        <p>
            <button class=\"btn btn-success\" type=\"submit\">Edit</button>
        </p>
    
    </form>

        <ul class=\"record_actions\">
    
      
   
</ul>
";
    }

    public function getTemplateName()
    {
        return "GestionUserBundle:Etudiant:editperso.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 39,  108 => 37,  104 => 36,  98 => 33,  94 => 32,  88 => 29,  84 => 28,  78 => 25,  74 => 24,  68 => 21,  64 => 20,  57 => 16,  53 => 15,  46 => 11,  42 => 10,  31 => 6,  28 => 3,);
    }
}
