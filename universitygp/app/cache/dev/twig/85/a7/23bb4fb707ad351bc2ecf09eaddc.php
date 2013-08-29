<?php

/* UserCommunicationBundle:Message:msgenvoyes.html.twig */
class __TwigTemplate_85a723bb4fb707ad351bc2ecf09eaddc extends Twig_Template
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
        echo "<h3>Messages envoyés :</h3>

</br></br>
";
        // line 6
        if (((isset($context["list"]) ? $context["list"] : $this->getContext($context, "list")) == null)) {
            // line 7
            echo "<div class=\"alert alert-info\">boite d'envoi vide</div>

";
        } else {
            // line 10
            echo "
<table class=\"table table-condensed\">

";
            // line 14
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 15
                echo "<tr ";
                if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index") % 2 == 1)) {
                    echo " style=\"background-color: #dfdfdf;font: 14px/24px sans-serif;\"";
                }
                echo ">
    <td> <a href=\"";
                // line 16
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("delete_msg", array("id" => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "id"))), "html", null, true);
                echo "\"><i class=\"glyphicon glyphicon-trash\"></i></a><td>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "destination"), "html", null, true);
                echo "</td></td><td><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("detail_envoi", array("id" => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "id"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "subject"), "html", null, true);
                echo "</a></td><td>";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "datemsg")), "html", null, true);
                echo "</td></tr>
   
";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "</table>
";
            // line 21
            echo "<div class=\"navigation\">
    ";
            // line 22
            echo $this->env->getExtension('knp_pagination')->render((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
            echo "
</div>
\t";
        }
        // line 25
        echo "
";
    }

    public function getTemplateName()
    {
        return "UserCommunicationBundle:Message:msgenvoyes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 25,  103 => 22,  100 => 21,  97 => 19,  72 => 16,  65 => 15,  48 => 14,  43 => 10,  38 => 7,  36 => 6,  31 => 3,  28 => 2,);
    }
}
