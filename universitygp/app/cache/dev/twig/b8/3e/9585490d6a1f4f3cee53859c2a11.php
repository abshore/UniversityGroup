<?php

/* UserCommunicationBundle:Message:detail.html.twig */
class __TwigTemplate_b83e9585490d6a1f4f3cee53859c2a11 extends Twig_Template
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

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "<h1>Détail: </h1>
<form action=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("reponse_msg", array("id" => $this->getAttribute((isset($context["list"]) ? $context["list"] : $this->getContext($context, "list")), "id"))), "html", null, true);
        echo "\">
 <table class=\"table table-bordered\">
     <tr><td>From :</td><td>";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["list"]) ? $context["list"] : $this->getContext($context, "list")), "user"), "username"), "html", null, true);
        echo "</td></tr>
   <tr><td>subject :</td><td>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["list"]) ? $context["list"] : $this->getContext($context, "list")), "subject"), "html", null, true);
        echo "</td></tr>
   <tr><td></td><td>";
        // line 8
        echo $this->getAttribute((isset($context["list"]) ? $context["list"] : $this->getContext($context, "list")), "corps");
        echo "</td></tr></tr>
  ";
        // line 9
        if (($this->getAttribute((isset($context["list"]) ? $context["list"] : $this->getContext($context, "list")), "pieceJointe") != null)) {
            echo "<tr> <td></td><td> <a href=\"http://localhost/UniversityGroup/universitygroup/web/uploads/documents/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["list"]) ? $context["list"] : $this->getContext($context, "list")), "filename"), "html", null, true);
            echo "\"> <span class=\"glyphicon glyphicon-paperclip\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["list"]) ? $context["list"] : $this->getContext($context, "list")), "filename"), "html", null, true);
            echo "</span> </a></td></tr>";
        }
        // line 10
        echo "    </table> 
<input type=\"submit\" class=\"btn btn-primary\" value=\"repondre\"/>
</form>\t
<p></p>
<a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("accueil");
        echo "\">Accueil</a>
";
    }

    public function getTemplateName()
    {
        return "UserCommunicationBundle:Message:detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 14,  59 => 10,  51 => 9,  47 => 8,  43 => 7,  39 => 6,  34 => 4,  31 => 3,  28 => 2,);
    }
}
