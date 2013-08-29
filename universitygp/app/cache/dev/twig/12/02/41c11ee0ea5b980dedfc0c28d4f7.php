<?php

/* UserCommunicationBundle:Message:accueil.html.twig */
class __TwigTemplate_120241c11ee0ea5b980dedfc0c28d4f7 extends Twig_Template
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
        echo "<br/><br/>
<ul class=\"nav nav-pills nav-stacked\">
  <li class=\"active\"><a href=\"#\"><i class=\"glyphicon glyphicon-home glyphicon glyphicon-white\"></i> Accueil</a></li>
  <li><a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("nouveau_message");
        echo "\"><i class=\"glyphicon glyphicon-pencil\"></i> Nouveau Message</a></li>
  <li><a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("voir_msg");
        echo "\">";
        if (((isset($context["count"]) ? $context["count"] : $this->getContext($context, "count")) == 0)) {
            echo "<i class=\"glyphicon glyphicon-folder-open\">";
        } else {
            echo "<i class=\"glyphicon glyphicon-envelope\">";
        }
        echo "</i> Boite de reception";
        if (((isset($context["count"]) ? $context["count"] : $this->getContext($context, "count")) != null)) {
            echo " <span class=\"badge\">";
            echo twig_escape_filter($this->env, (isset($context["count"]) ? $context["count"] : $this->getContext($context, "count")), "html", null, true);
            echo "</span> ";
        }
        echo "</a></li>
  <li><a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("msg_envoi");
        echo "\"><i class=\"glyphicon glyphicon-share\"></i> Messages envoyés</a></li>
  
</ul>



";
    }

    public function getTemplateName()
    {
        return "UserCommunicationBundle:Message:accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  40 => 7,  36 => 6,  31 => 3,  28 => 2,);
    }
}
