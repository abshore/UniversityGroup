<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                if (0 === strpos($pathinfo, '/_profiler/i')) {
                    // _profiler_info
                    if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                    }

                    // _profiler_import
                    if ($pathinfo === '/_profiler/import') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:importAction',  '_route' => '_profiler_import',);
                    }

                }

                // _profiler_export
                if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]++)\\.txt$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_export')), array (  '_controller' => 'web_profiler.controller.profiler:exportAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

        // gestion_emplois_homepage
        if ($pathinfo === '/gestemploi') {
            return array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\DefaultController::indexAction',  '_route' => 'gestion_emplois_homepage',);
        }

        if (0 === strpos($pathinfo, '/matiere')) {
            // matiere
            if (rtrim($pathinfo, '/') === '/matiere') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'matiere');
                }

                return array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\MatiereController::indexAction',  '_route' => 'matiere',);
            }

            // matiere_show
            if (preg_match('#^/matiere/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'matiere_show')), array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\MatiereController::showAction',));
            }

            // matiere_new
            if ($pathinfo === '/matiere/new') {
                return array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\MatiereController::newAction',  '_route' => 'matiere_new',);
            }

            // matiere_create
            if ($pathinfo === '/matiere/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_matiere_create;
                }

                return array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\MatiereController::createAction',  '_route' => 'matiere_create',);
            }
            not_matiere_create:

            // matiere_edit
            if (preg_match('#^/matiere/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'matiere_edit')), array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\MatiereController::editAction',));
            }

            // matiere_update
            if (preg_match('#^/matiere/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_matiere_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'matiere_update')), array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\MatiereController::updateAction',));
            }
            not_matiere_update:

            // matiere_delete
            if (preg_match('#^/matiere/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'matiere_delete')), array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\MatiereController::deleteAction',));
            }

        }

        if (0 === strpos($pathinfo, '/p')) {
            if (0 === strpos($pathinfo, '/panier')) {
                // panier
                if (rtrim($pathinfo, '/') === '/panier') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'panier');
                    }

                    return array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\PanierController::indexAction',  '_route' => 'panier',);
                }

                // panier_show
                if (preg_match('#^/panier/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'panier_show')), array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\PanierController::showAction',));
                }

                // panier_new
                if ($pathinfo === '/panier/formAjoutPanier') {
                    return array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\PanierController::formAjoutPanierAction',  '_route' => 'panier_new',);
                }

                // panier_create
                if ($pathinfo === '/panier/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_panier_create;
                    }

                    return array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\PanierController::createAction',  '_route' => 'panier_create',);
                }
                not_panier_create:

                // panier_edit
                if (preg_match('#^/panier/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'panier_edit')), array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\PanierController::editAction',));
                }

                // panier_update
                if (preg_match('#^/panier/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_panier_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'panier_update')), array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\PanierController::updateAction',));
                }
                not_panier_update:

                // panier_delete
                if (preg_match('#^/panier/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_panier_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'panier_delete')), array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\PanierController::deleteAction',));
                }
                not_panier_delete:

                // panier_ajout
                if ($pathinfo === '/panier/ajouterPanier') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_panier_ajout;
                    }

                    return array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\PanierController::ajouterPanierAction',  '_route' => 'panier_ajout',);
                }
                not_panier_ajout:

                // get_matierepanier
                if ($pathinfo === '/panier/getMatiere') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_get_matierepanier;
                    }

                    return array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\PanierController::getMatiereAction',  '_route' => 'get_matierepanier',);
                }
                not_get_matierepanier:

            }

            if (0 === strpos($pathinfo, '/profilclasse')) {
                // profilclasse
                if (rtrim($pathinfo, '/') === '/profilclasse') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'profilclasse');
                    }

                    return array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\ProfilClasseController::indexAction',  '_route' => 'profilclasse',);
                }

                // profilclasse_show
                if (preg_match('#^/profilclasse/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'profilclasse_show')), array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\ProfilClasseController::showAction',));
                }

                // profilclasse_new
                if ($pathinfo === '/profilclasse/new') {
                    return array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\ProfilClasseController::newAction',  '_route' => 'profilclasse_new',);
                }

                // profilclasse_create
                if ($pathinfo === '/profilclasse/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_profilclasse_create;
                    }

                    return array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\ProfilClasseController::createAction',  '_route' => 'profilclasse_create',);
                }
                not_profilclasse_create:

                // profilclasse_edit
                if (preg_match('#^/profilclasse/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'profilclasse_edit')), array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\ProfilClasseController::editAction',));
                }

                // profilclasse_update
                if (preg_match('#^/profilclasse/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_profilclasse_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'profilclasse_update')), array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\ProfilClasseController::updateAction',));
                }
                not_profilclasse_update:

                // profilclasse_delete
                if (preg_match('#^/profilclasse/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'profilclasse_delete')), array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\ProfilClasseController::deleteAction',));
                }

            }

        }

        if (0 === strpos($pathinfo, '/classe')) {
            // classe
            if (rtrim($pathinfo, '/') === '/classe') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'classe');
                }

                return array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\ClasseController::indexAction',  '_route' => 'classe',);
            }

            // classe_show
            if (preg_match('#^/classe/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'classe_show')), array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\ClasseController::showAction',));
            }

            // classe_new
            if ($pathinfo === '/classe/new') {
                return array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\ClasseController::newAction',  '_route' => 'classe_new',);
            }

            // classe_create
            if ($pathinfo === '/classe/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_classe_create;
                }

                return array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\ClasseController::createAction',  '_route' => 'classe_create',);
            }
            not_classe_create:

            // classe_edit
            if (preg_match('#^/classe/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'classe_edit')), array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\ClasseController::editAction',));
            }

            // classe_update
            if (preg_match('#^/classe/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_classe_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'classe_update')), array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\ClasseController::updateAction',));
            }
            not_classe_update:

            // classe_delete
            if (preg_match('#^/classe/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'classe_delete')), array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\ClasseController::deleteAction',));
            }

            // classe_getniveau
            if ($pathinfo === '/classe/getNiveau') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_classe_getniveau;
                }

                return array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\ClasseController::getNiveauAction',  '_route' => 'classe_getniveau',);
            }
            not_classe_getniveau:

            // classe_ajouterclasse
            if ($pathinfo === '/classe/ajouterClasse') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_classe_ajouterclasse;
                }

                return array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\ClasseController::ajouterClasseAction',  '_route' => 'classe_ajouterclasse',);
            }
            not_classe_ajouterclasse:

            // classe_getNiveauModif
            if (preg_match('#^/classe/(?P<id>[^/]++)/getNiveauModif$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_classe_getNiveauModif;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'classe_getNiveauModif')), array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\ClasseController::getNiveauModifAction',));
            }
            not_classe_getNiveauModif:

            // classe_modifierclasse
            if (preg_match('#^/classe/(?P<id>[^/]++)/modifierClasse$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_classe_modifierclasse;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'classe_modifierclasse')), array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\ClasseController::modifierClasseAction',));
            }
            not_classe_modifierclasse:

        }

        if (0 === strpos($pathinfo, '/formatione')) {
            // formationE
            if (rtrim($pathinfo, '/') === '/formatione') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'formationE');
                }

                return array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\FormationController::indexAction',  '_route' => 'formationE',);
            }

            // formationE_show
            if (preg_match('#^/formatione/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'formationE_show')), array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\FormationController::showAction',));
            }

            // formationE_new
            if ($pathinfo === '/formatione/new') {
                return array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\FormationController::newAction',  '_route' => 'formationE_new',);
            }

            // formationE_create
            if ($pathinfo === '/formatione/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_formationE_create;
                }

                return array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\FormationController::createAction',  '_route' => 'formationE_create',);
            }
            not_formationE_create:

            // formationE_edit
            if (preg_match('#^/formatione/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'formationE_edit')), array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\FormationController::editAction',));
            }

            // formationE_update
            if (preg_match('#^/formatione/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_formationE_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'formationE_update')), array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\FormationController::updateAction',));
            }
            not_formationE_update:

            // formationE_delete
            if (preg_match('#^/formatione/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'formationE_delete')), array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\FormationController::deleteAction',));
            }

        }

        if (0 === strpos($pathinfo, '/diplome')) {
            // diplome
            if (rtrim($pathinfo, '/') === '/diplome') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'diplome');
                }

                return array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\DiplomeController::indexAction',  '_route' => 'diplome',);
            }

            // diplome_show
            if (preg_match('#^/diplome/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'diplome_show')), array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\DiplomeController::showAction',));
            }

            // diplome_new
            if ($pathinfo === '/diplome/new') {
                return array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\DiplomeController::newAction',  '_route' => 'diplome_new',);
            }

            // diplome_create
            if ($pathinfo === '/diplome/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_diplome_create;
                }

                return array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\DiplomeController::createAction',  '_route' => 'diplome_create',);
            }
            not_diplome_create:

            // diplome_edit
            if (preg_match('#^/diplome/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'diplome_edit')), array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\DiplomeController::editAction',));
            }

            // diplome_update
            if (preg_match('#^/diplome/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_diplome_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'diplome_update')), array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\DiplomeController::updateAction',));
            }
            not_diplome_update:

            // diplome_delete
            if (preg_match('#^/diplome/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'diplome_delete')), array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\DiplomeController::deleteAction',));
            }

        }

        if (0 === strpos($pathinfo, '/planetude')) {
            // planetude
            if (rtrim($pathinfo, '/') === '/planetude') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'planetude');
                }

                return array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\PlanEtudeController::indexAction',  '_route' => 'planetude',);
            }

            // planetude_show
            if (preg_match('#^/planetude/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'planetude_show')), array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\PlanEtudeController::showAction',));
            }

            // planetude_new
            if ($pathinfo === '/planetude/new') {
                return array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\PlanEtudeController::newAction',  '_route' => 'planetude_new',);
            }

            // planetude_create
            if ($pathinfo === '/planetude/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_planetude_create;
                }

                return array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\PlanEtudeController::createAction',  '_route' => 'planetude_create',);
            }
            not_planetude_create:

            // planetude_edit
            if (preg_match('#^/planetude/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'planetude_edit')), array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\PlanEtudeController::editAction',));
            }

            // planetude_update
            if (preg_match('#^/planetude/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_planetude_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'planetude_update')), array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\PlanEtudeController::updateAction',));
            }
            not_planetude_update:

            // planetude_delete
            if (preg_match('#^/planetude/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'planetude_delete')), array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\PlanEtudeController::deleteAction',));
            }

            // planetude_getniveau
            if ($pathinfo === '/planetude/getNiveau') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_planetude_getniveau;
                }

                return array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\PlanEtudeController::getNiveauAction',  '_route' => 'planetude_getniveau',);
            }
            not_planetude_getniveau:

            // planetude_ajouterplan
            if ($pathinfo === '/planetude/ajouterPlan') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_planetude_ajouterplan;
                }

                return array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\PlanEtudeController::ajouterPlanAction',  '_route' => 'planetude_ajouterplan',);
            }
            not_planetude_ajouterplan:

            // planetude_getNiveauModif
            if (preg_match('#^/planetude/(?P<id>[^/]++)/getNiveauModif$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_planetude_getNiveauModif;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'planetude_getNiveauModif')), array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\PlanEtudeController::getNiveauModifAction',));
            }
            not_planetude_getNiveauModif:

            // planetude_modifierplan
            if (preg_match('#^/planetude/(?P<id>[^/]++)/modifierPlan$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_planetude_modifierplan;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'planetude_modifierplan')), array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\PlanEtudeController::modifierPlanAction',));
            }
            not_planetude_modifierplan:

        }

        if (0 === strpos($pathinfo, '/affectationplan')) {
            // affectationplan
            if (rtrim($pathinfo, '/') === '/affectationplan') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'affectationplan');
                }

                return array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\AffectationPlanController::indexAction',  '_route' => 'affectationplan',);
            }

            // affectationplan_show
            if (preg_match('#^/affectationplan/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'affectationplan_show')), array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\AffectationPlanController::showAction',));
            }

            // affectationplan_new
            if ($pathinfo === '/affectationplan/new') {
                return array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\AffectationPlanController::newAction',  '_route' => 'affectationplan_new',);
            }

            // affectationplan_create
            if ($pathinfo === '/affectationplan/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_affectationplan_create;
                }

                return array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\AffectationPlanController::createAction',  '_route' => 'affectationplan_create',);
            }
            not_affectationplan_create:

            // affectationplan_edit
            if (preg_match('#^/affectationplan/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'affectationplan_edit')), array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\AffectationPlanController::editAction',));
            }

            // affectationplan_update
            if (preg_match('#^/affectationplan/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_affectationplan_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'affectationplan_update')), array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\AffectationPlanController::updateAction',));
            }
            not_affectationplan_update:

            // affectationplan_delete
            if (preg_match('#^/affectationplan/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'affectationplan_delete')), array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\AffectationPlanController::deleteAction',));
            }

            // affectationplan_getmatiere
            if ($pathinfo === '/affectationplan/getMatiere') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_affectationplan_getmatiere;
                }

                return array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\AffectationPlanController::getMatiereAction',  '_route' => 'affectationplan_getmatiere',);
            }
            not_affectationplan_getmatiere:

            // affectationplan_ajouterAffectation
            if ($pathinfo === '/affectationplan/ajouterAffectation') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_affectationplan_ajouterAffectation;
                }

                return array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\AffectationPlanController::ajouterAffectationAction',  '_route' => 'affectationplan_ajouterAffectation',);
            }
            not_affectationplan_ajouterAffectation:

            // affectation_getgroupemodif
            if (preg_match('#^/affectationplan/(?P<id>[^/]++)/getGroupeModif$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_affectation_getgroupemodif;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'affectation_getgroupemodif')), array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\AffectationPlanController::getGroupeModifAction',));
            }
            not_affectation_getgroupemodif:

            // affectation_modifieraffectation
            if (preg_match('#^/affectationplan/(?P<id>[^/]++)/modifierAffectation$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_affectation_modifieraffectation;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'affectation_modifieraffectation')), array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\AffectationPlanController::modifierAffectaionAction',));
            }
            not_affectation_modifieraffectation:

        }

        if (0 === strpos($pathinfo, '/salle')) {
            // salle
            if (rtrim($pathinfo, '/') === '/salle') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'salle');
                }

                return array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\SalleController::indexAction',  '_route' => 'salle',);
            }

            // salle_show
            if (preg_match('#^/salle/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'salle_show')), array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\SalleController::showAction',));
            }

            // salle_new
            if ($pathinfo === '/salle/new') {
                return array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\SalleController::newAction',  '_route' => 'salle_new',);
            }

            // salle_create
            if ($pathinfo === '/salle/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_salle_create;
                }

                return array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\SalleController::createAction',  '_route' => 'salle_create',);
            }
            not_salle_create:

            // salle_edit
            if (preg_match('#^/salle/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'salle_edit')), array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\SalleController::editAction',));
            }

            // salle_update
            if (preg_match('#^/salle/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_salle_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'salle_update')), array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\SalleController::updateAction',));
            }
            not_salle_update:

            // salle_delete
            if (preg_match('#^/salle/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'salle_delete')), array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\SalleController::deleteAction',));
            }

        }

        if (0 === strpos($pathinfo, '/emploi')) {
            // emploi
            if (rtrim($pathinfo, '/') === '/emploi') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'emploi');
                }

                return array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\EmploiController::indexAction',  '_route' => 'emploi',);
            }

            // emploi_show
            if (preg_match('#^/emploi/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'emploi_show')), array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\EmploiController::showAction',));
            }

            // emploi_new
            if ($pathinfo === '/emploi/new') {
                return array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\EmploiController::newAction',  '_route' => 'emploi_new',);
            }

            // emploi_create
            if ($pathinfo === '/emploi/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_emploi_create;
                }

                return array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\EmploiController::createAction',  '_route' => 'emploi_create',);
            }
            not_emploi_create:

            // emploi_edit
            if (preg_match('#^/emploi/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'emploi_edit')), array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\EmploiController::editAction',));
            }

            // emploi_update
            if (preg_match('#^/emploi/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_emploi_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'emploi_update')), array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\EmploiController::updateAction',));
            }
            not_emploi_update:

            // emploi_delete
            if (preg_match('#^/emploi/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'emploi_delete')), array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\EmploiController::deleteAction',));
            }

            // emploi_getmatiere
            if ($pathinfo === '/emploi/getMatiere') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_emploi_getmatiere;
                }

                return array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\EmploiController::getMatiereAction',  '_route' => 'emploi_getmatiere',);
            }
            not_emploi_getmatiere:

            // emploi_ajouterSeance
            if ($pathinfo === '/emploi/ajouterSeance') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_emploi_ajouterSeance;
                }

                return array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\EmploiController::ajouterSeanceAction',  '_route' => 'emploi_ajouterSeance',);
            }
            not_emploi_ajouterSeance:

            // emploi_modifierSeance
            if (preg_match('#^/emploi/(?P<id>[^/]++)/modifierSeance$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_emploi_modifierSeance;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'emploi_modifierSeance')), array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\EmploiController::modifierSeanceAction',));
            }
            not_emploi_modifierSeance:

            // emploi_voirEmplois
            if ($pathinfo === '/emploi/voirEmplois') {
                return array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\EmploiController::voirEmploisAction',  '_route' => 'emploi_voirEmplois',);
            }

            // emploi_emploiClasse
            if ($pathinfo === '/emploi/emploiClasse') {
                return array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\EmploiController::emploiClasseAction',  '_route' => 'emploi_emploiClasse',);
            }

        }

        // gestion_user_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'gestion_user_homepage')), array (  '_controller' => 'Gestion\\UserBundle\\Controller\\DefaultController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/etudiant')) {
            // etudiant
            if (rtrim($pathinfo, '/') === '/etudiant') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'etudiant');
                }

                return array (  '_controller' => 'Gestion\\UserBundle\\Controller\\EtudiantController::indexAction',  '_route' => 'etudiant',);
            }

            // etudiant_username
            if ($pathinfo === '/etudiant/etudiantusername') {
                return array (  '_controller' => 'Gestion\\UserBundle\\Controller\\EtudiantController::usernameAction',  '_route' => 'etudiant_username',);
            }

            // etudiant_show
            if (preg_match('#^/etudiant/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'etudiant_show')), array (  '_controller' => 'Gestion\\UserBundle\\Controller\\EtudiantController::showAction',));
            }

            if (0 === strpos($pathinfo, '/etudiant/editp')) {
                // etudiant_editperso
                if ($pathinfo === '/etudiant/editperso') {
                    return array (  '_controller' => 'Gestion\\UserBundle\\Controller\\EtudiantController::editpersoAction',  '_route' => 'etudiant_editperso',);
                }

                // etudiant_editpwd
                if ($pathinfo === '/etudiant/editpwd') {
                    return array (  '_controller' => 'Gestion\\UserBundle\\Controller\\EtudiantController::editpwdAction',  '_route' => 'etudiant_editpwd',);
                }

            }

            if (0 === strpos($pathinfo, '/etudiant/updatep')) {
                // etudiant_updatepwd
                if ($pathinfo === '/etudiant/updatepwd') {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_etudiant_updatepwd;
                    }

                    return array (  '_controller' => 'Gestion\\UserBundle\\Controller\\EtudiantController::updatepwdAction',  '_route' => 'etudiant_updatepwd',);
                }
                not_etudiant_updatepwd:

                // etudiant_updateperso
                if ($pathinfo === '/etudiant/updateperso') {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_etudiant_updateperso;
                    }

                    return array (  '_controller' => 'Gestion\\UserBundle\\Controller\\EtudiantController::updatepersoAction',  '_route' => 'etudiant_updateperso',);
                }
                not_etudiant_updateperso:

            }

            // etudiant_new
            if ($pathinfo === '/etudiant/new') {
                return array (  '_controller' => 'Gestion\\UserBundle\\Controller\\EtudiantController::newAction',  '_route' => 'etudiant_new',);
            }

            // etudiant_create
            if ($pathinfo === '/etudiant/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_etudiant_create;
                }

                return array (  '_controller' => 'Gestion\\UserBundle\\Controller\\EtudiantController::createAction',  '_route' => 'etudiant_create',);
            }
            not_etudiant_create:

            // etudiant_edit
            if (preg_match('#^/etudiant/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'etudiant_edit')), array (  '_controller' => 'Gestion\\UserBundle\\Controller\\EtudiantController::editAction',));
            }

            // etudiant_update
            if (preg_match('#^/etudiant/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_etudiant_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'etudiant_update')), array (  '_controller' => 'Gestion\\UserBundle\\Controller\\EtudiantController::updateAction',));
            }
            not_etudiant_update:

            // etudiant_delete
            if (preg_match('#^/etudiant/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_etudiant_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'etudiant_delete')), array (  '_controller' => 'Gestion\\UserBundle\\Controller\\EtudiantController::deleteAction',));
            }
            not_etudiant_delete:

        }

        if (0 === strpos($pathinfo, '/prof')) {
            // prof
            if (rtrim($pathinfo, '/') === '/prof') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'prof');
                }

                return array (  '_controller' => 'Gestion\\UserBundle\\Controller\\ProfController::indexAction',  '_route' => 'prof',);
            }

            // prof_username
            if ($pathinfo === '/prof/profusername') {
                return array (  '_controller' => 'Gestion\\UserBundle\\Controller\\ProfController::usernameAction',  '_route' => 'prof_username',);
            }

            // prof_show
            if (preg_match('#^/prof/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'prof_show')), array (  '_controller' => 'Gestion\\UserBundle\\Controller\\ProfController::showAction',));
            }

            // prof_new
            if ($pathinfo === '/prof/new') {
                return array (  '_controller' => 'Gestion\\UserBundle\\Controller\\ProfController::newAction',  '_route' => 'prof_new',);
            }

            // prof_editpwd
            if ($pathinfo === '/prof/editpwd') {
                return array (  '_controller' => 'Gestion\\UserBundle\\Controller\\ProfController::editpwdAction',  '_route' => 'prof_editpwd',);
            }

            // prof_updatepwd
            if ($pathinfo === '/prof/updatepwd') {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_prof_updatepwd;
                }

                return array (  '_controller' => 'Gestion\\UserBundle\\Controller\\ProfController::updatepwdAction',  '_route' => 'prof_updatepwd',);
            }
            not_prof_updatepwd:

            // prof_editperso
            if ($pathinfo === '/prof/editperso') {
                return array (  '_controller' => 'Gestion\\UserBundle\\Controller\\ProfController::editpersoAction',  '_route' => 'prof_editperso',);
            }

            // prof_updateperso
            if ($pathinfo === '/prof/updateperso') {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_prof_updateperso;
                }

                return array (  '_controller' => 'Gestion\\UserBundle\\Controller\\ProfController::updatepersoAction',  '_route' => 'prof_updateperso',);
            }
            not_prof_updateperso:

            // prof_create
            if ($pathinfo === '/prof/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_prof_create;
                }

                return array (  '_controller' => 'Gestion\\UserBundle\\Controller\\ProfController::createAction',  '_route' => 'prof_create',);
            }
            not_prof_create:

            // prof_edit
            if (preg_match('#^/prof/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'prof_edit')), array (  '_controller' => 'Gestion\\UserBundle\\Controller\\ProfController::editAction',));
            }

            // prof_update
            if (preg_match('#^/prof/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_prof_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'prof_update')), array (  '_controller' => 'Gestion\\UserBundle\\Controller\\ProfController::updateAction',));
            }
            not_prof_update:

            // prof_delete
            if (preg_match('#^/prof/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_prof_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'prof_delete')), array (  '_controller' => 'Gestion\\UserBundle\\Controller\\ProfController::deleteAction',));
            }
            not_prof_delete:

        }

        if (0 === strpos($pathinfo, '/admin')) {
            // admin
            if (rtrim($pathinfo, '/') === '/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'admin');
                }

                return array (  '_controller' => 'Gestion\\UserBundle\\Controller\\AdminController::indexAction',  '_route' => 'admin',);
            }

            if (0 === strpos($pathinfo, '/admin/user')) {
                // user
                if ($pathinfo === '/admin/user') {
                    return array (  '_controller' => 'Gestion\\UserBundle\\Controller\\AdminController::indexuserAction',  '_route' => 'user',);
                }

                // username
                if ($pathinfo === '/admin/username') {
                    return array (  '_controller' => 'Gestion\\UserBundle\\Controller\\AdminController::usernameAction',  '_route' => 'username',);
                }

            }

            // admin_show
            if (preg_match('#^/admin/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_show')), array (  '_controller' => 'Gestion\\UserBundle\\Controller\\AdminController::showAction',));
            }

            // admin_new
            if ($pathinfo === '/admin/new') {
                return array (  '_controller' => 'Gestion\\UserBundle\\Controller\\AdminController::newAction',  '_route' => 'admin_new',);
            }

            // admin_create
            if ($pathinfo === '/admin/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_admin_create;
                }

                return array (  '_controller' => 'Gestion\\UserBundle\\Controller\\AdminController::createAction',  '_route' => 'admin_create',);
            }
            not_admin_create:

            // admin_edit
            if (preg_match('#^/admin/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_edit')), array (  '_controller' => 'Gestion\\UserBundle\\Controller\\AdminController::editAction',));
            }

            // admin_editperso
            if ($pathinfo === '/admin/editperso') {
                return array (  '_controller' => 'Gestion\\UserBundle\\Controller\\AdminController::editpersoAction',  '_route' => 'admin_editperso',);
            }

            // admin_updateperso
            if ($pathinfo === '/admin/updateperso') {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_admin_updateperso;
                }

                return array (  '_controller' => 'Gestion\\UserBundle\\Controller\\AdminController::updatepersoAction',  '_route' => 'admin_updateperso',);
            }
            not_admin_updateperso:

            // admin_update
            if (preg_match('#^/admin/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_admin_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_update')), array (  '_controller' => 'Gestion\\UserBundle\\Controller\\AdminController::updateAction',));
            }
            not_admin_update:

            // admin_delete
            if (preg_match('#^/admin/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_admin_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_delete')), array (  '_controller' => 'Gestion\\UserBundle\\Controller\\AdminController::deleteAction',));
            }
            not_admin_delete:

        }

        if (0 === strpos($pathinfo, '/register')) {
            // etudiant_registration
            if ($pathinfo === '/register/etudiant') {
                return array (  '_controller' => 'Gestion\\UserBundle\\Controller\\RegistrationEtudiantController::registerAction',  '_route' => 'etudiant_registration',);
            }

            // prof_registration
            if ($pathinfo === '/register/prof') {
                return array (  '_controller' => 'Gestion\\UserBundle\\Controller\\RegistrationProfController::registerAction',  '_route' => 'prof_registration',);
            }

            // admin_registration
            if ($pathinfo === '/register/admin') {
                return array (  '_controller' => 'Gestion\\UserBundle\\Controller\\RegistrationAdminController::registerAction',  '_route' => 'admin_registration',);
            }

        }

        // tableau_board
        if ($pathinfo === '/TableauBoard') {
            return array (  '_controller' => 'Gestion\\UserBundle\\Controller\\DefaultController::DashboardAction',  '_route' => 'tableau_board',);
        }

        if (0 === strpos($pathinfo, '/formation')) {
            // formation
            if (preg_match('#^/formation/(?P<idcursus>[^/]++)/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'formation');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'formation')), array (  '_controller' => 'Gestion\\UserBundle\\Controller\\FormationController::indexAction',));
            }

            // formation_show
            if (preg_match('#^/formation/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'formation_show')), array (  '_controller' => 'Gestion\\UserBundle\\Controller\\FormationController::showAction',));
            }

            // formation_new
            if (0 === strpos($pathinfo, '/formation/new') && preg_match('#^/formation/new/(?P<idcursus>[^/]++)/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'formation_new');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'formation_new')), array (  '_controller' => 'Gestion\\UserBundle\\Controller\\FormationController::newAction',));
            }

            // formation_create
            if (0 === strpos($pathinfo, '/formation/create') && preg_match('#^/formation/create/(?P<idcursus>[^/]++)/$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_formation_create;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'formation_create')), array (  '_controller' => 'Gestion\\UserBundle\\Controller\\FormationController::createAction',));
            }
            not_formation_create:

            // formation_edit
            if (preg_match('#^/formation/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'formation_edit')), array (  '_controller' => 'Gestion\\UserBundle\\Controller\\FormationController::editAction',));
            }

            // formation_update
            if (preg_match('#^/formation/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_formation_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'formation_update')), array (  '_controller' => 'Gestion\\UserBundle\\Controller\\FormationController::updateAction',));
            }
            not_formation_update:

            // formation_delete
            if (preg_match('#^/formation/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_formation_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'formation_delete')), array (  '_controller' => 'Gestion\\UserBundle\\Controller\\FormationController::deleteAction',));
            }
            not_formation_delete:

        }

        if (0 === strpos($pathinfo, '/experience')) {
            // experience
            if (preg_match('#^/experience/(?P<idcursus>[^/]++)/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'experience');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'experience')), array (  '_controller' => 'Gestion\\UserBundle\\Controller\\ExperienceController::indexAction',));
            }

            // experience_show
            if (preg_match('#^/experience/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'experience_show')), array (  '_controller' => 'Gestion\\UserBundle\\Controller\\ExperienceController::showAction',));
            }

            // experience_new
            if (0 === strpos($pathinfo, '/experience/new') && preg_match('#^/experience/new/(?P<idcursus>[^/]++)/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'experience_new');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'experience_new')), array (  '_controller' => 'Gestion\\UserBundle\\Controller\\ExperienceController::newAction',));
            }

            // experience_create
            if (0 === strpos($pathinfo, '/experience/create') && preg_match('#^/experience/create/(?P<idcursus>[^/]++)/$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_experience_create;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'experience_create')), array (  '_controller' => 'Gestion\\UserBundle\\Controller\\ExperienceController::createAction',));
            }
            not_experience_create:

            // experience_edit
            if (preg_match('#^/experience/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'experience_edit')), array (  '_controller' => 'Gestion\\UserBundle\\Controller\\ExperienceController::editAction',));
            }

            // experience_update
            if (preg_match('#^/experience/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_experience_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'experience_update')), array (  '_controller' => 'Gestion\\UserBundle\\Controller\\ExperienceController::updateAction',));
            }
            not_experience_update:

            // experience_delete
            if (preg_match('#^/experience/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_experience_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'experience_delete')), array (  '_controller' => 'Gestion\\UserBundle\\Controller\\ExperienceController::deleteAction',));
            }
            not_experience_delete:

        }

        if (0 === strpos($pathinfo, '/langue')) {
            // langue
            if (preg_match('#^/langue/(?P<idcursus>[^/]++)/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'langue');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'langue')), array (  '_controller' => 'Gestion\\UserBundle\\Controller\\LangueController::indexAction',));
            }

            // langue_show
            if (preg_match('#^/langue/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'langue_show')), array (  '_controller' => 'Gestion\\UserBundle\\Controller\\LangueController::showAction',));
            }

            // langue_new
            if (0 === strpos($pathinfo, '/langue/new') && preg_match('#^/langue/new/(?P<idcursus>[^/]++)/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'langue_new');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'langue_new')), array (  '_controller' => 'Gestion\\UserBundle\\Controller\\LangueController::newAction',));
            }

            // langue_create
            if (0 === strpos($pathinfo, '/langue/create') && preg_match('#^/langue/create/(?P<idcursus>[^/]++)/$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_langue_create;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'langue_create')), array (  '_controller' => 'Gestion\\UserBundle\\Controller\\LangueController::createAction',));
            }
            not_langue_create:

            // langue_edit
            if (preg_match('#^/langue/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'langue_edit')), array (  '_controller' => 'Gestion\\UserBundle\\Controller\\LangueController::editAction',));
            }

            // langue_update
            if (preg_match('#^/langue/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_langue_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'langue_update')), array (  '_controller' => 'Gestion\\UserBundle\\Controller\\LangueController::updateAction',));
            }
            not_langue_update:

            // langue_delete
            if (preg_match('#^/langue/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_langue_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'langue_delete')), array (  '_controller' => 'Gestion\\UserBundle\\Controller\\LangueController::deleteAction',));
            }
            not_langue_delete:

        }

        if (0 === strpos($pathinfo, '/cursus')) {
            // cursus
            if (rtrim($pathinfo, '/') === '/cursus') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'cursus');
                }

                return array (  '_controller' => 'Gestion\\UserBundle\\Controller\\CursusController::indexAction',  '_route' => 'cursus',);
            }

            // cursususer
            if ($pathinfo === '/cursus/cursususer') {
                return array (  '_controller' => 'Gestion\\UserBundle\\Controller\\CursusController::indexuserAction',  '_route' => 'cursususer',);
            }

            // cursus_show
            if (preg_match('#^/cursus/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cursus_show')), array (  '_controller' => 'Gestion\\UserBundle\\Controller\\CursusController::showAction',));
            }

            // cursus_showuser
            if (preg_match('#^/cursus/(?P<id>[^/]++)/showuser$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cursus_showuser')), array (  '_controller' => 'Gestion\\UserBundle\\Controller\\CursusController::showuserAction',));
            }

            if (0 === strpos($pathinfo, '/cursus/new')) {
                // cursus_new
                if (preg_match('#^/cursus/new/(?P<iduser>[^/]++)/?$#s', $pathinfo, $matches)) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'cursus_new');
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'cursus_new')), array (  '_controller' => 'Gestion\\UserBundle\\Controller\\CursusController::newAction',));
                }

                // cursus_newuser
                if (0 === strpos($pathinfo, '/cursus/newuser') && preg_match('#^/cursus/newuser/(?P<iduser>[^/]++)/?$#s', $pathinfo, $matches)) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'cursus_newuser');
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'cursus_newuser')), array (  '_controller' => 'Gestion\\UserBundle\\Controller\\CursusController::newuserAction',));
                }

            }

            if (0 === strpos($pathinfo, '/cursus/create')) {
                // cursus_createuser
                if (0 === strpos($pathinfo, '/cursus/createuser') && preg_match('#^/cursus/createuser/(?P<iduser>[^/]++)/$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_cursus_createuser;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'cursus_createuser')), array (  '_controller' => 'Gestion\\UserBundle\\Controller\\CursusController::createuserAction',));
                }
                not_cursus_createuser:

                // cursus_create
                if (preg_match('#^/cursus/create/(?P<iduser>[^/]++)/$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_cursus_create;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'cursus_create')), array (  '_controller' => 'Gestion\\UserBundle\\Controller\\CursusController::createAction',));
                }
                not_cursus_create:

            }

            // cursus_edit
            if (preg_match('#^/cursus/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cursus_edit')), array (  '_controller' => 'Gestion\\UserBundle\\Controller\\CursusController::editAction',));
            }

            // layout_cursus
            if (preg_match('#^/cursus/(?P<id>[^/]++)/layout$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'layout_cursus')), array (  '_controller' => 'Gestion\\UserBundle\\Controller\\CursusController::layoutAction',));
            }

            // cursus_edituser
            if (preg_match('#^/cursus/(?P<id>[^/]++)/edituser$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cursus_edituser')), array (  '_controller' => 'Gestion\\UserBundle\\Controller\\CursusController::edituserAction',));
            }

            // cursus_updateuser
            if (preg_match('#^/cursus/(?P<id>[^/]++)/updateuser$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_cursus_updateuser;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cursus_updateuser')), array (  '_controller' => 'Gestion\\UserBundle\\Controller\\CursusController::updateuserAction',));
            }
            not_cursus_updateuser:

            // cursus_update
            if (preg_match('#^/cursus/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_cursus_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cursus_update')), array (  '_controller' => 'Gestion\\UserBundle\\Controller\\CursusController::updateAction',));
            }
            not_cursus_update:

            // cursus_delete
            if (preg_match('#^/cursus/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_cursus_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cursus_delete')), array (  '_controller' => 'Gestion\\UserBundle\\Controller\\CursusController::deleteAction',));
            }
            not_cursus_delete:

            // cursus_deleteuser
            if (preg_match('#^/cursus/(?P<id>[^/]++)/deleteuser$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_cursus_deleteuser;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cursus_deleteuser')), array (  '_controller' => 'Gestion\\UserBundle\\Controller\\CursusController::deleteuserAction',));
            }
            not_cursus_deleteuser:

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        if (0 === strpos($pathinfo, '/communication')) {
            // user_communication_homepage
            if (0 === strpos($pathinfo, '/communication/hello') && preg_match('#^/communication/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_communication_homepage')), array (  '_controller' => 'User\\CommunicationBundle\\Controller\\DefaultController::indexAction',));
            }

            // accueil
            if ($pathinfo === '/communication/accueil') {
                return array (  '_controller' => 'User\\CommunicationBundle\\Controller\\MessageController::accueilAction',  '_route' => 'accueil',);
            }

            // nouveau_message
            if ($pathinfo === '/communication/nouveau') {
                return array (  '_controller' => 'User\\CommunicationBundle\\Controller\\MessageController::indexAction',  '_route' => 'nouveau_message',);
            }

            // voir_msg
            if ($pathinfo === '/communication/message') {
                return array (  '_controller' => 'User\\CommunicationBundle\\Controller\\MessageController::voirAction',  '_route' => 'voir_msg',);
            }

            if (0 === strpos($pathinfo, '/communication/d')) {
                // detail_msg
                if (0 === strpos($pathinfo, '/communication/detail') && preg_match('#^/communication/detail(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'detail_msg')), array (  '_controller' => 'User\\CommunicationBundle\\Controller\\MessageController::detailAction',  'id' => 1,));
                }

                // download
                if (0 === strpos($pathinfo, '/communication/download') && preg_match('#^/communication/download(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'download')), array (  '_controller' => 'User\\CommunicationBundle\\Controller\\MessageController::detailAction',  'id' => 1,));
                }

                // delete_msg
                if (0 === strpos($pathinfo, '/communication/delete') && preg_match('#^/communication/delete(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_msg')), array (  '_controller' => 'User\\CommunicationBundle\\Controller\\MessageController::deleteAction',  'id' => 1,));
                }

            }

            // msg_envoi
            if ($pathinfo === '/communication/envoi') {
                return array (  '_controller' => 'User\\CommunicationBundle\\Controller\\MessageController::msgenvoiAction',  '_route' => 'msg_envoi',);
            }

            // chat_home
            if (rtrim($pathinfo, '/') === '/communication/chat') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'chat_home');
                }

                return array (  '_controller' => 'User\\CommunicationBundle\\Controller\\ChatController::indexAction',  '_route' => 'chat_home',);
            }

            // chat_add
            if ($pathinfo === '/communication/add') {
                return array (  '_controller' => 'User\\CommunicationBundle\\Controller\\ChatController::addAction',  '_route' => 'chat_add',);
            }

            if (0 === strpos($pathinfo, '/communication/m')) {
                if (0 === strpos($pathinfo, '/communication/mail')) {
                    // chat_amail
                    if ($pathinfo === '/communication/mail') {
                        return array (  '_controller' => 'User\\CommunicationBundle\\Controller\\ChatController::envoimailAction',  '_route' => 'chat_amail',);
                    }

                    // detail_mail
                    if (0 === strpos($pathinfo, '/communication/mail/detail') && preg_match('#^/communication/mail/detail/(?P<id>[^/]++)/(?P<num>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'detail_mail')), array (  '_controller' => 'User\\CommunicationBundle\\Controller\\ChatController::detailmailAction',));
                    }

                }

                if (0 === strpos($pathinfo, '/communication/message')) {
                    // reponse_msg
                    if (preg_match('#^/communication/message/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'reponse_msg')), array (  '_controller' => 'User\\CommunicationBundle\\Controller\\MessageController::reponseAction',));
                    }

                    // detail_envoi
                    if (0 === strpos($pathinfo, '/communication/messageenvoi') && preg_match('#^/communication/messageenvoi/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'detail_envoi')), array (  '_controller' => 'User\\CommunicationBundle\\Controller\\MessageController::detailenvoiAction',));
                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/question_reponse')) {
            if (0 === strpos($pathinfo, '/question_reponse/notification')) {
                // question_reponse_question_reponse_homepage
                if ($pathinfo === '/question_reponse/notification/questions') {
                    return array (  '_controller' => 'Question\\Reponse\\QuestionReponseBundle\\Controller\\QuestionController::indexAction',  '_route' => 'question_reponse_question_reponse_homepage',);
                }

                // reponse_homepage
                if ($pathinfo === '/question_reponse/notification/reponse') {
                    return array (  '_controller' => 'Question\\Reponse\\QuestionReponseBundle\\Controller\\ReponseController::indexAction',  '_route' => 'reponse_homepage',);
                }

                if (0 === strpos($pathinfo, '/question_reponse/notification/question')) {
                    // ajout_question
                    if ($pathinfo === '/question_reponse/notification/question') {
                        return array (  '_controller' => 'Question\\Reponse\\QuestionReponseBundle\\Controller\\QuestionController::createAction',  '_route' => 'ajout_question',);
                    }

                    if (0 === strpos($pathinfo, '/question_reponse/notification/question/de')) {
                        // delete_question
                        if (0 === strpos($pathinfo, '/question_reponse/notification/question/delete') && preg_match('#^/question_reponse/notification/question/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_question')), array (  '_controller' => 'Question\\Reponse\\QuestionReponseBundle\\Controller\\QuestionController::deleteAction',));
                        }

                        // detail_question
                        if (0 === strpos($pathinfo, '/question_reponse/notification/question/detail') && preg_match('#^/question_reponse/notification/question/detail/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'detail_question')), array (  '_controller' => 'Question\\Reponse\\QuestionReponseBundle\\Controller\\QuestionController::detailAction',));
                        }

                    }

                }

            }

            // reponse_question
            if (0 === strpos($pathinfo, '/question_reponse/reponse') && preg_match('#^/question_reponse/reponse/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'reponse_question')), array (  '_controller' => 'Question\\Reponse\\QuestionReponseBundle\\Controller\\ReponseController::createAction',));
            }

            if (0 === strpos($pathinfo, '/question_reponse/notification/reponse/de')) {
                // delete_reponse
                if (0 === strpos($pathinfo, '/question_reponse/notification/reponse/delete') && preg_match('#^/question_reponse/notification/reponse/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_reponse')), array (  '_controller' => 'Question\\Reponse\\QuestionReponseBundle\\Controller\\ReponseController::deleteAction',));
                }

                // detail_reponse
                if (0 === strpos($pathinfo, '/question_reponse/notification/reponse/detail') && preg_match('#^/question_reponse/notification/reponse/detail/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'detail_reponse')), array (  '_controller' => 'Question\\Reponse\\QuestionReponseBundle\\Controller\\ReponseController::detailAction',));
                }

            }

            if (0 === strpos($pathinfo, '/question_reponse/re')) {
                // moteur_di_recherche
                if ($pathinfo === '/question_reponse/recherche') {
                    return array (  '_controller' => 'Question\\Reponse\\QuestionReponseBundle\\Controller\\QuestionController::rechercheAction',  '_route' => 'moteur_di_recherche',);
                }

                if (0 === strpos($pathinfo, '/question_reponse/resultat')) {
                    // resultat
                    if (preg_match('#^/question_reponse/resultat/(?P<search>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'resultat')), array (  '_controller' => 'Question\\Reponse\\QuestionReponseBundle\\Controller\\QuestionController::resultatAction',));
                    }

                    // detail_recherche
                    if (0 === strpos($pathinfo, '/question_reponse/resultat/detail') && preg_match('#^/question_reponse/resultat/detail/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'detail_recherche')), array (  '_controller' => 'Question\\Reponse\\QuestionReponseBundle\\Controller\\QuestionController::detailrechercheAction',));
                    }

                }

            }

        }

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }

            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',  '_route' => '_welcome',);
        }

        if (0 === strpos($pathinfo, '/demo')) {
            if (0 === strpos($pathinfo, '/demo/secured')) {
                if (0 === strpos($pathinfo, '/demo/secured/log')) {
                    if (0 === strpos($pathinfo, '/demo/secured/login')) {
                        // _demo_login
                        if ($pathinfo === '/demo/secured/login') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  '_route' => '_demo_login',);
                        }

                        // _security_check
                        if ($pathinfo === '/demo/secured/login_check') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_security_check',);
                        }

                    }

                    // _demo_logout
                    if ($pathinfo === '/demo/secured/logout') {
                        return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_demo_logout',);
                    }

                }

                if (0 === strpos($pathinfo, '/demo/secured/hello')) {
                    // acme_demo_secured_hello
                    if ($pathinfo === '/demo/secured/hello') {
                        return array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  '_route' => 'acme_demo_secured_hello',);
                    }

                    // _demo_secured_hello
                    if (preg_match('#^/demo/secured/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',));
                    }

                    // _demo_secured_hello_admin
                    if (0 === strpos($pathinfo, '/demo/secured/hello/admin') && preg_match('#^/demo/secured/hello/admin/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello_admin')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',));
                    }

                }

            }

            // _demo
            if (rtrim($pathinfo, '/') === '/demo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_demo');
                }

                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  '_route' => '_demo',);
            }

            // _demo_hello
            if (0 === strpos($pathinfo, '/demo/hello') && preg_match('#^/demo/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',));
            }

            // _demo_contact
            if ($pathinfo === '/demo/contact') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  '_route' => '_demo_contact',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
