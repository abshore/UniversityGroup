<?php

/* GestionUserBundle:Formation:new.html.twig */
class __TwigTemplate_64185ea374f65f7bf02b9721844080d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "

";
        // line 3
        $this->displayBlock('body', $context, $blocks);
    }

    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<h1>Formation creation</h1>

    <form action=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("formation_create", array("idcursus" => (isset($context["idcursus"]) ? $context["idcursus"] : $this->getContext($context, "idcursus")))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
;
        echo ">
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <p>
            <button type=\"submit\">Create</button>
        </p>
    </form>

        <ul class=\"record_actions\">
    
</ul>
";
    }

    public function getTemplateName()
    {
        return "GestionUserBundle:Formation:new.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  41 => 7,  34 => 6,  30 => 4,  24 => 3,  20 => 1,);
    }
}
