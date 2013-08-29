<?php

/* UserCommunicationBundle:Message:voir.html.twig */
class __TwigTemplate_e61f271ec17c155877647ca7752d89ef extends Twig_Template
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
        echo "<h3>Messages reçus :</h3>

";
        // line 5
        if (((isset($context["list"]) ? $context["list"] : $this->getContext($context, "list")) == null)) {
            // line 6
            echo "<div class=\"alert alert-info\">boite de reception vide</div>
";
        } else {
            // line 8
            echo "
<table class=\"table table-condensed\">

";
            // line 12
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
                // line 13
                echo "<tr ";
                if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index") % 2 == 1)) {
                    echo " style=\"background-color: #dfdfdf;font: 14px/24px sans-serif;\"";
                }
                echo ">
  <td ><a href=\"";
                // line 14
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("delete_msg", array("id" => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "id"))), "html", null, true);
                echo "\"><i class=\"glyphicon glyphicon-trash\"></i></a>";
                if (($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "msglu") == 0)) {
                    echo "<td style=\"font-weight: bold;text-decoration: blink; font-size: medium;\">";
                } else {
                    echo "<td>";
                }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "user"), "username"), "html", null, true);
                echo "</td></td>";
                if (($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "msglu") == 0)) {
                    echo "<td style=\"font-weight: bold;text-decoration: blink; font-size: medium;\">";
                } else {
                    echo "<td>";
                }
                echo "<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("detail_msg", array("id" => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "id"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "subject"), "html", null, true);
                echo "</a></td>";
                if (($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "msglu") == 0)) {
                    echo "<td style=\"font-weight: bold;text-decoration: blink; font-size: medium;\">";
                } else {
                    echo "<td>";
                }
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "datemsg"), "F jS \\a\\t g:ia", "Europe/Paris"), "html", null, true);
                echo "</td>
</tr>
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
            // line 17
            echo "</table>
";
            // line 19
            echo "<div class=\"navigation\">
    ";
            // line 20
            echo $this->env->getExtension('knp_pagination')->render((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
            echo "
</div>
\t";
        }
        // line 23
        echo "
";
    }

    public function getTemplateName()
    {
        return "UserCommunicationBundle:Message:voir.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 23,  117 => 20,  114 => 19,  111 => 17,  70 => 14,  63 => 13,  46 => 12,  41 => 8,  37 => 6,  35 => 5,  31 => 3,  28 => 2,);
    }
}
