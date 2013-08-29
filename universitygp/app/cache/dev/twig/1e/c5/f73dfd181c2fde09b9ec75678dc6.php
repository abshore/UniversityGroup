<?php

/* GestionEmploisBundle:Emploi:EmploiClasse.html.twig */
class __TwigTemplate_1ec5f73dfd181c2fde09b9ec75678dc6 extends Twig_Template
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
        echo twig_escape_filter($this->env, (isset($context["classe"]) ? $context["classe"] : $this->getContext($context, "classe")), "html", null, true);
        echo "
<h1>";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["year"]) ? $context["year"] : $this->getContext($context, "year")), "html", null, true);
        echo "</h1>
<table>
</table>
<table border=\"1\">
    <tr>
        ";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["jours"]) ? $context["jours"] : $this->getContext($context, "jours")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 8
            echo "            <td colspan=\"4\">";
            echo twig_escape_filter($this->env, (isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "html", null, true);
            echo "</td>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "        </tr>
        ";
        // line 11
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["un"]) ? $context["un"] : $this->getContext($context, "un")));
        foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
            // line 12
            echo "        <tr>
        ";
            // line 13
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["dates"]) ? $context["dates"] : $this->getContext($context, "dates")));
            foreach ($context['_seq'] as $context["_key"] => $context["ite"]) {
                // line 14
                echo "                ";
                $context["cmp"] = 0;
                // line 15
                echo "                    ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["seances"]) ? $context["seances"] : $this->getContext($context, "seances")));
                foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
                    // line 16
                    echo "                        ";
                    if ((twig_date_format_filter($this->env, $this->getAttribute((isset($context["s"]) ? $context["s"] : $this->getContext($context, "s")), "Jour"), "l d/m/Y") == (isset($context["ite"]) ? $context["ite"] : $this->getContext($context, "ite")))) {
                        // line 17
                        echo "                        ";
                        $context["cmp"] = ((isset($context["cmp"]) ? $context["cmp"] : $this->getContext($context, "cmp")) + 1);
                        // line 18
                        echo "                        ";
                    }
                    // line 19
                    echo "                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo " 
                ";
                // line 20
                if (((isset($context["cmp"]) ? $context["cmp"] : $this->getContext($context, "cmp")) != 0)) {
                    // line 21
                    echo "                ";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["seances"]) ? $context["seances"] : $this->getContext($context, "seances")));
                    foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
                        // line 22
                        echo "                ";
                        if (($this->getAttribute((isset($context["s"]) ? $context["s"] : $this->getContext($context, "s")), "matiere") == (isset($context["un"]) ? $context["un"] : $this->getContext($context, "un")))) {
                            // line 23
                            echo "                <td>";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["s"]) ? $context["s"] : $this->getContext($context, "s")), "matiere"), "html", null, true);
                            echo "</td><td>";
                            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["s"]) ? $context["s"] : $this->getContext($context, "s")), "heureDeb"), "H:i"), "html", null, true);
                            echo "</td><td>";
                            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["s"]) ? $context["s"] : $this->getContext($context, "s")), "heureFin"), "H:i"), "html", null, true);
                            echo "</td><td>";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["s"]) ? $context["s"] : $this->getContext($context, "s")), "salle"), "html", null, true);
                            echo "</td>
                ";
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 25
                    echo "                
                ";
                } else {
                    // line 27
                    echo "                <td></td><td></td><td></td><td></td>
                ";
                }
                // line 29
                echo "
            
                   ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ite'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "       

            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['u'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        </table>";
    }

    public function getTemplateName()
    {
        return "GestionEmploisBundle:Emploi:EmploiClasse.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 35,  125 => 31,  117 => 29,  113 => 27,  109 => 25,  93 => 23,  90 => 22,  85 => 21,  83 => 20,  75 => 19,  72 => 18,  69 => 17,  66 => 16,  61 => 15,  58 => 14,  54 => 13,  51 => 12,  47 => 11,  44 => 10,  35 => 8,  31 => 7,  23 => 2,  19 => 1,);
    }
}
