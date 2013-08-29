<?php

/* GestionUserBundle:Etudiant:index.html.twig */
class __TwigTemplate_a02a64d6434adcc50162b530b37ff24f extends Twig_Template
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
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/jquery-ui.css"), "html", null, true);
        echo "\" />
<div style=\"width: 80%; margin-left: 10%;margin-top: 50px;\" class=\"panel panel-primary\">
  <div class=\"panel-heading\">
    <h3 class=\"panel-title\">Moteur de recherche</h3>
  </div>
  <div class=\"panel-body\">
    <form  class=\"form-inline\" role=\"form\" action=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("etudiant_username");
        echo "\" method=\"post\">
        <div class=\"form-group\">
          <input type=\"text\" class=\"form-control\" name=\"username\" placeholder=\"Search\">
          
 </div>
            <div class=\"col-lg-3\"> 
            <select name=\"recherche\" class=\"form-control\">
                <option value=\"username\">Username</option>
                <option value=\"nom\">Nom</option>
                <option value=\"prenom\">Prenom</option>
                <option value=\"email\">Email</option>
                
</select>
</div>
            <button class=\"btn btn-default\" type=\"submit\">Chercher</button>
        </form>
  </div>
</div>


    <table class=\"table table-bordered table-striped table-condensed table-hover\" style=\"width: 80%; margin-left: 10%;margin-top: 100px;\">
         <thead>
            <tr>
                <th>Username</th>
                <th>Email</th>
                <th>Enabled</th>
                <th>Locked</th>
                <th>Expired</th>
                <th>Expiresat</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Photo</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 46
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 47
            echo "            <tr>
                <td><a href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("etudiant_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "username"), "html", null, true);
            echo "</a></td>
               <td>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "email"), "html", null, true);
            echo "</td>
                <td>";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "enabled"), "html", null, true);
            echo "</td>
                <td>";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "locked"), "html", null, true);
            echo "</td>
                <td>";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "expired"), "html", null, true);
            echo "</td>
                <td>";
            // line 53
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "expiresAt")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "expiresAt"), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
               <td>";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nom"), "html", null, true);
            echo "</td>
                <td>";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "prenom"), "html", null, true);
            echo "</td>
                 <td>  <img src=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(((("upload/" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id")) . "/") . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "image"))), "html", null, true);
            echo "\" alt=\"pas de photo\" height=\"50\" width=\"50\" />
 </td>
            <td>
                <ul>
                 
                        <a class=\"btn btn-primary\"  href=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("etudiant_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">show</a>
                    
                        <a class=\"btn btn-success\"  href=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("etudiant_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">edit</a>
                  
                        <a id=\"addcv\" class=\"addcv btn btn-success\" url=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cursus_new", array("iduser" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\" href=\"#\">Créer CV</a>
                  
                </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "        </tbody>
    </table>

        <ul>
    
            <a class=\"btn btn-primary\" href=\"";
        // line 76
        echo $this->env->getExtension('routing')->getPath("etudiant_registration");
        echo "\">
                Add etudiant
            </a>
       
    </ul>
<div id=\"Cv\" style=\"display: none;\"></div>


    ";
        // line 86
        echo "   
 <script src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-1.9.1.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-ui.js"), "html", null, true);
        echo "\"></script>
             
       
<script type=\"text/javascript\">
                                \$('a.addcv').click(function() {
                                    var url = \$(this).attr('url');
                                    \$(\"#Cv\").load(url, function() {
                                        \$(this).dialog({
                                            height: 'auto',
                                            width: 'auto',
                                            modal: true,
                                            title: 'Ajouter Experience',
                                            position: 'center',
                                            overlay: {
                                                backgroundColor: '#000',
                                                opacity: 0.5
                                            },
                                            close: function() {

                                               
                                                \$(this).dialog('close');
                                            }

                                        });
                                    });
                                });

                                \$('a.modifSalle').click(function() {
                                    var url = \$(this).attr('url');
                                    \$(\"#Cv\").load(url, function() {
                                        \$(this).dialog({
                                            height: 'auto',
                                            width: 'auto',
                                            modal: true,
                                            title: 'Modifier Salle',
                                            position: 'center',
                                            overlay: {
                                                backgroundColor: '#000',
                                                opacity: 0.5
                                            },
                                            close: function() {

                                               
                                                \$(this).dialog('close');
                                            }

                                        });
                                    });
                                });



        </script>

    ";
    }

    public function getTemplateName()
    {
        return "GestionUserBundle:Etudiant:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 88,  174 => 87,  171 => 86,  160 => 76,  153 => 71,  141 => 65,  136 => 63,  131 => 61,  123 => 56,  119 => 55,  115 => 54,  109 => 53,  105 => 52,  101 => 51,  97 => 50,  93 => 49,  87 => 48,  84 => 47,  80 => 46,  41 => 10,  31 => 4,  28 => 3,);
    }
}
