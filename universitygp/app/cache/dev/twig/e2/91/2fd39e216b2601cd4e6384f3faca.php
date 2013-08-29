<?php

/* ::base.html.twig */
class __TwigTemplate_e2912fd39e216b2601cd4e6384f3faca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    <title> ";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "  </head>
  <body>
       <div class=\"container\">
      <nav class=\"navbar navbar-default\" role=\"navigation\">
 
 <div class=\"navbar-header\">
    
    <a class=\"navbar-brand\" href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("tableau_board");
        echo "\">Dashboard</a>
  </div>


  <div class=\"collapse navbar-collapse navbar-ex1-collapse\">
    <ul class=\"nav navbar-nav\">
 ";
        // line 27
        if ($this->env->getExtension('security')->isGranted("ROLE_PROF")) {
            // line 28
            echo " <li><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(((("upload/" . $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "id")) . "/") . $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "image"))), "html", null, true);
            echo "\" alt=\"pas de photo\" height=\"50\" width=\"50\" /></li>
";
        }
        // line 30
        echo " ";
        if ($this->env->getExtension('security')->isGranted("ROLE_ETUDIANT")) {
            // line 31
            echo " <li><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(((("upload/" . $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "id")) . "/") . $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "image"))), "html", null, true);
            echo "\" alt=\"pas de photo\" height=\"50\" width=\"50\" /></li>
";
        }
        // line 33
        echo "<li><a href=\"";
        echo $this->env->getExtension('routing')->getPath("accueil");
        echo "\" >
                    Mailing <b class=\"glyphicon glyphicon-comment\"></b>
                </a></li>
                ";
        // line 36
        if (($this->env->getExtension('security')->isGranted("ROLE_ETUDIANT") || $this->env->getExtension('security')->isGranted("ROLE_PROF"))) {
            // line 37
            echo "                ";
            if ($this->env->getExtension('security')->isGranted("ROLE_ETUDIANT")) {
                // line 38
                echo "                 <li><a href=\"";
                echo $this->env->getExtension('routing')->getPath("ajout_question");
                echo "\" >
                         Ajouter Question <span class=\"glyphicon glyphicon-plus-sign\"></span>
                     </a></li>
                     ";
            }
            // line 42
            echo "                     <li>";
            if ($this->env->getExtension('security')->isGranted("ROLE_PROF")) {
                echo "<a href=\"";
                echo $this->env->getExtension('routing')->getPath("question_reponse_question_reponse_homepage");
                echo "\" >";
            } else {
                echo "<a href=\"";
                echo $this->env->getExtension('routing')->getPath("reponse_homepage");
                echo "\" >";
            }
            // line 43
            echo "                    notifications ";
            if ($this->env->getExtension('security')->isGranted("ROLE_PROF")) {
                if (($this->getAttribute((isset($context["nbrenotif"]) ? $context["nbrenotif"] : $this->getContext($context, "nbrenotif")), "count") != 0)) {
                    echo "<span class=\"badge\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["nbrenotif"]) ? $context["nbrenotif"] : $this->getContext($context, "nbrenotif")), "count"), "html", null, true);
                    echo " </span>";
                } else {
                    echo "<b class=\"glyphicon glyphicon-bell\"></b>";
                }
            } else {
                if (($this->getAttribute((isset($context["nbrereponse"]) ? $context["nbrereponse"] : $this->getContext($context, "nbrereponse")), "count") != 0)) {
                    echo "<span class=\"badge\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["nbrereponse"]) ? $context["nbrereponse"] : $this->getContext($context, "nbrereponse")), "count"), "html", null, true);
                    echo " </span>";
                } else {
                    echo "<b class=\"glyphicon glyphicon-bell\"></b>";
                }
            }
            // line 44
            echo "                </a></li>
                ";
        }
        // line 46
        echo "  ";
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 47
            echo "   <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("cursus");
            echo "\">Gestion CV</a></li>
   <li class=\"dropdown\">
                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-delay=\"1000\" data-close-others=\"false\">
                    Gérer Users<b class=\"caret\"></b>
                </a>

                <ul class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"dropdownMenu\">
                         <li><a tabindex=\"-1\" href=\"";
            // line 54
            echo $this->env->getExtension('routing')->getPath("etudiant");
            echo "\">Etudiants</a></li>
                        <li class=\"divider\"></li>
                                
                        <li><a tabindex=\"-1\" href=\"";
            // line 57
            echo $this->env->getExtension('routing')->getPath("prof");
            echo "\">Profs</a></li>
                        <li class=\"divider\"></li>

                           <li><a tabindex=\"-1\" href=\"";
            // line 60
            echo $this->env->getExtension('routing')->getPath("admin");
            echo "\">Admins</a></li>
                     
                </ul>
                </li>
 <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-delay=\"1000\" data-close-others=\"false\">
                                Gestion emplois du temps<b class=\"caret\"></b>
                            </a>

                            <ul class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"dropdownMenu\">
                                <li><a tabindex=\"-1\" href=\"";
            // line 70
            echo $this->env->getExtension('routing')->getPath("gestion_emplois_homepage");
            echo "\">Plan d'etude</a></li>
                                <li class=\"divider\"></li>

                                <li><a tabindex=\"-1\" href=\"#\">Emploi du temps</a></li>

                            </ul>
                        </li>


 ";
        }
        // line 80
        echo "  
                            ";
        // line 81
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 82
            echo "           
            <li class=\"dropdown\">
                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-delay=\"1000\" data-close-others=\"false\">
                    Bienvenue ";
            // line 85
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "username"), "html", null, true);
            echo "<b class=\"caret\"></b>
                </a>

                <ul class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"dropdownMenu\">
                     ";
            // line 90
            echo "
                        
                        
                       
                          <li><a tabindex=\"-1\" href=\"";
            // line 94
            echo $this->env->getExtension('routing')->getPath("tableau_board");
            echo "\">Tableau de Board</a></li>
                        <li class=\"divider\"></li>
                                 ";
            // line 96
            if ($this->env->getExtension('security')->isGranted("ROLE_ETUDIANT")) {
                echo "  
                        <li><a tabindex=\"-1\" href=\"";
                // line 97
                echo $this->env->getExtension('routing')->getPath("etudiant_editperso");
                echo "\">Modifier mon profil</a></li>
                        <li class=\"divider\"></li>
                         ";
            }
            // line 100
            echo "                   ";
            if ($this->env->getExtension('security')->isGranted("ROLE_ETUDIANT")) {
                echo " 
                   <li><a tabindex=\"-1\"  id=\"addcv\" class=\"addcv\" url=\"";
                // line 101
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cursus_newuser", array("iduser" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "id"))), "html", null, true);
                echo "\" href=\"#\">Créer CV</a></li>
                      <li class=\"divider\"></li>                   
                      ";
            }
            // line 104
            echo "                   ";
            if ($this->env->getExtension('security')->isGranted("ROLE_PROF")) {
                echo " 
                   <li><a tabindex=\"-1\"  id=\"addcv\" class=\"addcv\" url=\"";
                // line 105
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cursus_newuser", array("iduser" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "id"))), "html", null, true);
                echo "\" href=\"#\">Créer CV</a></li>
                      <li class=\"divider\"></li>                   
                      ";
            }
            // line 108
            echo "                                  ";
            if ($this->env->getExtension('security')->isGranted("ROLE_PROF")) {
                echo "  
                        <li><a tabindex=\"-1\" href=\"";
                // line 109
                echo $this->env->getExtension('routing')->getPath("prof_editperso");
                echo "\">Modifier mon profil</a></li>
                        <li class=\"divider\"></li>
                         ";
            }
            // line 112
            echo "                                  ";
            if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
                echo "  
                        <li><a tabindex=\"-1\" href=\"";
                // line 113
                echo $this->env->getExtension('routing')->getPath("admin_editperso");
                echo "\">Modifier mon profil</a></li>
                        <li class=\"divider\"></li>
                         ";
            }
            // line 116
            echo "        
 

 <li><a href=\"";
            // line 119
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">Déconnexion</a></li>
                    </ul>
                </li>

             ";
            // line 126
            echo "                            ";
        } else {
            // line 127
            echo "                <li>       
                        ";
            // line 129
            echo "                     ";
            // line 130
            echo "                         ";
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("FOSUserBundle:Security:Login"));
            echo "
                            ";
        }
        // line 132
        echo "                    </li> 


                <li><a href=\"";
        // line 135
        echo $this->env->getExtension('routing')->getPath("moteur_di_recherche");
        echo "\" >
                    Search <b class=\"glyphicon glyphicon-search\"></b>
                </a></li>


                      </ul>


</div>
</nav>

               
               
         
      
      </div>
      <div id=\"Cv\" style=\"display: none;\"></div>
          ";
        // line 152
        $this->displayBlock('body', $context, $blocks);
        // line 156
        echo "      
  ";
        // line 157
        $this->displayBlock('javascripts', $context, $blocks);
        // line 226
        echo "  </body>
</html>";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "ABSHORE";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "      <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\" />
    
 <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/jquery-ui.css"), "html", null, true);
        echo "\" type=\"text/css\" />
<link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/jquery.ptTimeSelect.css"), "html", null, true);
        echo "\" type=\"text/css\" />

<link rel=\"stylesheet\" href=\"http://jquery.bassistance.de/validate/demo/site-demos.css\">
    ";
    }

    // line 152
    public function block_body($context, array $blocks = array())
    {
        // line 153
        echo "        
      
          ";
    }

    // line 157
    public function block_javascripts($context, array $blocks = array())
    {
        // line 158
        echo "
<script src=\"http://code.jquery.com/jquery-1.9.1.min.js\"></script>
<script src=\"http://jquery.bassistance.de/validate/jquery.validate.js\"></script>
<script src=\"http://jquery.bassistance.de/validate/additional-methods.js\"></script>

    ";
        // line 165
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

 <script src=\"";
        // line 168
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-1.9.1.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-ui.js"), "html", null, true);
        echo "\"></script>
             
       
            <script type=\"text/javascript\">
                   \$(function() {
   \$( \".form-control.date\" ).datetimepicker();
   });

            </script>



    ";
        // line 183
        echo "   

             
            </script>
            
            <script type=\"text/javascript\" src=\"";
        // line 188
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/ckeditor.js"), "html", null, true);
        echo "\"></script> <script type=\"text/javascript\">

  </script>
       
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
</script>
             
          <script type=\"text/javascript\">
        \$.noConflict();
        </script>
        <script src=\"";
        // line 220
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-1.9.1.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 221
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-ui.js"), "html", null, true);
        echo "\"></script>
        
       
 
  ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  440 => 221,  436 => 220,  401 => 188,  394 => 183,  379 => 169,  375 => 168,  370 => 166,  367 => 165,  360 => 158,  357 => 157,  351 => 153,  348 => 152,  340 => 10,  336 => 9,  330 => 7,  327 => 6,  321 => 5,  316 => 226,  314 => 157,  311 => 156,  309 => 152,  289 => 135,  284 => 132,  278 => 130,  276 => 129,  273 => 127,  270 => 126,  263 => 119,  258 => 116,  252 => 113,  247 => 112,  241 => 109,  236 => 108,  230 => 105,  225 => 104,  219 => 101,  214 => 100,  208 => 97,  204 => 96,  199 => 94,  193 => 90,  186 => 85,  181 => 82,  179 => 81,  176 => 80,  163 => 70,  150 => 60,  138 => 54,  124 => 46,  120 => 44,  101 => 43,  90 => 42,  82 => 38,  79 => 37,  77 => 36,  70 => 33,  64 => 31,  61 => 30,  55 => 28,  53 => 27,  44 => 21,  35 => 14,  33 => 6,  29 => 5,  23 => 1,  156 => 79,  144 => 57,  139 => 71,  131 => 66,  127 => 47,  121 => 64,  117 => 63,  113 => 62,  109 => 61,  105 => 60,  99 => 59,  96 => 58,  92 => 57,  67 => 35,  38 => 9,  31 => 4,  28 => 3,);
    }
}
