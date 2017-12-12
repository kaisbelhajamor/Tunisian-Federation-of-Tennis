<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
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
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/js/35a8e64')) {
            // _assetic_35a8e64
            if ($pathinfo === '/js/35a8e64.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '35a8e64',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_35a8e64',);
            }

            // _assetic_35a8e64_0
            if ($pathinfo === '/js/35a8e64_comments_1.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '35a8e64',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_35a8e64_0',);
            }

        }

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

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
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

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // ftt_gestion_actualite_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ftt_gestion_actualite_homepage')), array (  '_controller' => 'Ftt\\GestionActualiteBundle\\Controller\\DefaultController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/a')) {
            if (0 === strpos($pathinfo, '/admin/actualite')) {
                // ftt_gestion_actualite_admin_list
                if (rtrim($pathinfo, '/') === '/admin/actualite') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'ftt_gestion_actualite_admin_list');
                    }

                    return array (  '_controller' => 'Ftt\\GestionActualiteBundle\\Controller\\ActualiteController::listActualiteAction',  '_route' => 'ftt_gestion_actualite_admin_list',);
                }

                // ftt_gestion_actualite_admin_delete
                if (0 === strpos($pathinfo, '/admin/actualite/delete') && preg_match('#^/admin/actualite/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ftt_gestion_actualite_admin_delete')), array (  '_controller' => 'Ftt\\GestionActualiteBundle\\Controller\\ActualiteController::deleteActualiteAction',));
                }

                // ftt_gestion_actualite_admin_update
                if (0 === strpos($pathinfo, '/admin/actualite/update') && preg_match('#^/admin/actualite/update/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ftt_gestion_actualite_admin_update')), array (  '_controller' => 'Ftt\\GestionActualiteBundle\\Controller\\ActualiteController::updateActualiteAction',));
                }

                // ftt_gestion_actualite_admin_ajouter
                if ($pathinfo === '/admin/actualite/add') {
                    return array (  '_controller' => 'Ftt\\GestionActualiteBundle\\Controller\\ActualiteController::addActualiteAction',  '_route' => 'ftt_gestion_actualite_admin_ajouter',);
                }

                // ftt_gestion_actualite_admin_show
                if (0 === strpos($pathinfo, '/admin/actualite/show') && preg_match('#^/admin/actualite/show/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ftt_gestion_actualite_admin_show')), array (  '_controller' => 'Ftt\\GestionActualiteBundle\\Controller\\ActualiteController::showAdminActualiteAction',));
                }

            }

            if (0 === strpos($pathinfo, '/actualite')) {
                // ftt_gestion_actualite_national_front_list
                if ($pathinfo === '/actualite/national') {
                    return array (  '_controller' => 'Ftt\\GestionActualiteBundle\\Controller\\ActualiteController::listFrontActualiteNatAction',  '_route' => 'ftt_gestion_actualite_national_front_list',);
                }

                // ftt_gestion_actualite_international_front_list
                if ($pathinfo === '/actualite/international') {
                    return array (  '_controller' => 'Ftt\\GestionActualiteBundle\\Controller\\ActualiteController::listFrontActualiteInternatAction',  '_route' => 'ftt_gestion_actualite_international_front_list',);
                }

                // ftt_gestion_actualite_front_show
                if (0 === strpos($pathinfo, '/actualite/show') && preg_match('#^/actualite/show/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ftt_gestion_actualite_front_show')), array (  '_controller' => 'Ftt\\GestionActualiteBundle\\Controller\\ActualiteController::showFrontActualiteAction',));
                }

            }

            if (0 === strpos($pathinfo, '/admin/newsletter')) {
                // ftt_backoffice_newsletter_list_mail
                if ($pathinfo === '/admin/newsletter/list') {
                    return array (  '_controller' => 'Ftt\\NewsletterBundle\\Controller\\NewsletterController::listAction',  '_route' => 'ftt_backoffice_newsletter_list_mail',);
                }

                // ftt_backoffice_newsletter_delete_mail
                if (0 === strpos($pathinfo, '/admin/newsletter/delete') && preg_match('#^/admin/newsletter/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ftt_backoffice_newsletter_delete_mail')), array (  '_controller' => 'Ftt\\NewsletterBundle\\Controller\\NewsletterController::deleteAction',));
                }

                // ftt_backoffice_newsletter_add_newsletter
                if ($pathinfo === '/admin/newsletter/add') {
                    return array (  '_controller' => 'Ftt\\NewsletterBundle\\Controller\\NewsletterController::addNewsletterMailAction',  '_route' => 'ftt_backoffice_newsletter_add_newsletter',);
                }

                // ftt_backoffice_newsletter_show_newsletter_content
                if (0 === strpos($pathinfo, '/admin/newsletter/showNewsContent') && preg_match('#^/admin/newsletter/showNewsContent/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ftt_backoffice_newsletter_show_newsletter_content')), array (  '_controller' => 'Ftt\\NewsletterBundle\\Controller\\NewsletterController::showContentNewsletterAction',));
                }

                // ftt_backoffice_newsletter_list_newsletter_content
                if ($pathinfo === '/admin/newsletter/listNewsContent') {
                    return array (  '_controller' => 'Ftt\\NewsletterBundle\\Controller\\NewsletterController::listContentNewsletterAction',  '_route' => 'ftt_backoffice_newsletter_list_newsletter_content',);
                }

                // ftt_backoffice_newsletter_delete_newsletter_content
                if (0 === strpos($pathinfo, '/admin/newsletter/deleteNewsContent') && preg_match('#^/admin/newsletter/deleteNewsContent/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ftt_backoffice_newsletter_delete_newsletter_content')), array (  '_controller' => 'Ftt\\NewsletterBundle\\Controller\\NewsletterController::deleteContentNewsletterAction',));
                }

            }

        }

        // ftt_front_newsletter_show_newsletter_content
        if (0 === strpos($pathinfo, '/showNewsContent') && preg_match('#^/showNewsContent/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ftt_front_newsletter_show_newsletter_content')), array (  '_controller' => 'Ftt\\NewsletterBundle\\Controller\\NewsletterController::showContentNewsletterAction',));
        }

        if (0 === strpos($pathinfo, '/admin/user')) {
            // user
            if (rtrim($pathinfo, '/') === '/admin/user') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'user');
                }

                return array (  '_controller' => 'Ftt\\UserBundle\\Controller\\UserController::indexAction',  '_route' => 'user',);
            }

            // user_show
            if (preg_match('#^/admin/user/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_show')), array (  '_controller' => 'Ftt\\UserBundle\\Controller\\UserController::showAction',));
            }

            // user_new
            if ($pathinfo === '/admin/user/new') {
                return array (  '_controller' => 'Ftt\\UserBundle\\Controller\\UserController::newAction',  '_route' => 'user_new',);
            }

            // user_create
            if ($pathinfo === '/admin/user/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_user_create;
                }

                return array (  '_controller' => 'Ftt\\UserBundle\\Controller\\UserController::createAction',  '_route' => 'user_create',);
            }
            not_user_create:

            // user_edit
            if (preg_match('#^/admin/user/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_edit')), array (  '_controller' => 'Ftt\\UserBundle\\Controller\\UserController::editAction',));
            }

            // user_update
            if (preg_match('#^/admin/user/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_user_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_update')), array (  '_controller' => 'Ftt\\UserBundle\\Controller\\UserController::updateAction',));
            }
            not_user_update:

            // user_delete
            if (preg_match('#^/admin/user/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_delete')), array (  '_controller' => 'Ftt\\UserBundle\\Controller\\UserController::deleteAction',));
            }

            // user_block
            if (preg_match('#^/admin/user/(?P<id>[^/]++)/block$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_block')), array (  '_controller' => 'Ftt\\UserBundle\\Controller\\UserController::blockUserAction',));
            }

            // user_activate
            if (preg_match('#^/admin/user/(?P<id>[^/]++)/activate$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_activate')), array (  '_controller' => 'Ftt\\UserBundle\\Controller\\UserController::activateUserAction',));
            }

            // user_search
            if ($pathinfo === '/admin/user/search') {
                return array (  '_controller' => 'Ftt\\UserBundle\\Controller\\UserController::SearchAction',  '_route' => 'user_search',);
            }

        }

        // frontoffice_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'frontoffice_homepage');
            }

            return array (  '_controller' => 'Ftt\\FrontOfficeBundle\\Controller\\SiteController::indexAction',  '_route' => 'frontoffice_homepage',);
        }

        // contact_homepage
        if ($pathinfo === '/contact') {
            return array (  '_controller' => 'Ftt\\FrontOfficeBundle\\Controller\\SiteController::ContactAction',  '_route' => 'contact_homepage',);
        }

        // liste_formation
        if ($pathinfo === '/listeformation') {
            return array (  '_controller' => 'Ftt\\FrontOfficeBundle\\Controller\\FormationController::listeAction',  '_route' => 'liste_formation',);
        }

        // inscrire_formation
        if ($pathinfo === '/inscrire') {
            return array (  '_controller' => 'Ftt\\FrontOfficeBundle\\Controller\\InscrirFormationController::inscrirAction',  '_route' => 'inscrire_formation',);
        }

        // club_list
        if ($pathinfo === '/formation/liste') {
            return array (  '_controller' => 'Ftt\\FrontOfficeBundle\\Controller\\ClubController::listeAction',  '_route' => 'club_list',);
        }

        // classement_list
        if ($pathinfo === '/joueur/classement') {
            return array (  '_controller' => 'Ftt\\FrontOfficeBundle\\Controller\\ClassementController::classementAction',  '_route' => 'classement_list',);
        }

        // match_intern
        if ($pathinfo === '/affintern') {
            return array (  '_controller' => 'Ftt\\FrontOfficeBundle\\Controller\\MatchsController::matchinternAction',  '_route' => 'match_intern',);
        }

        // reser_tick
        if ($pathinfo === '/reserv') {
            return array (  '_controller' => 'Ftt\\FrontOfficeBundle\\Controller\\MatchsController::reservAction',  '_route' => 'reser_tick',);
        }

        // findMatchs
        if (0 === strpos($pathinfo, '/findMatch') && preg_match('#^/findMatch/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'findMatchs')), array (  '_controller' => 'Ftt\\FrontOfficeBundle\\Controller\\MatchsController::findMatchsAction',));
        }

        // ReservTick
        if (0 === strpos($pathinfo, '/ReservTick') && preg_match('#^/ReservTick/(?P<m>[^/]++)/(?P<d>[^/]++)/(?P<id>[^/]++)/(?P<pd>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ReservTick')), array (  '_controller' => 'Ftt\\FrontOfficeBundle\\Controller\\ReservController::ReservTickAction',));
        }

        if (0 === strpos($pathinfo, '/liste')) {
            // match_list
            if ($pathinfo === '/listematch') {
                return array (  '_controller' => 'Ftt\\FrontOfficeBundle\\Controller\\MatchsController::matchlistAction',  '_route' => 'match_list',);
            }

            // terrain_list
            if ($pathinfo === '/listeterrain') {
                return array (  '_controller' => 'Ftt\\FrontOfficeBundle\\Controller\\MatchsController::terrainlistAction',  '_route' => 'terrain_list',);
            }

        }

        // decrem
        if (0 === strpos($pathinfo, '/dec') && preg_match('#^/dec/(?P<id>[^/]++)/(?P<pd>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'decrem')), array (  '_controller' => 'Ftt\\FrontOfficeBundle\\Controller\\TicketController::decrementeAction',));
        }

        // aff_res
        if (0 === strpos($pathinfo, '/aff_res') && preg_match('#^/aff_res/(?P<log>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'aff_res')), array (  '_controller' => 'Ftt\\FrontOfficeBundle\\Controller\\ReservController::showrAction',));
        }

        // best_player
        if ($pathinfo === '/bestplayer') {
            return array (  '_controller' => 'Ftt\\FrontOfficeBundle\\Controller\\ClassementController::bestplayerAction',  '_route' => 'best_player',);
        }

        if (0 === strpos($pathinfo, '/resultatMedical')) {
            // add_resutltat_medical
            if ($pathinfo === '/resultatMedical/add') {
                return array (  '_controller' => 'Ftt\\FrontOfficeBundle\\Controller\\ResultatMedicalController::AjouterResultatMedicalAction',  '_route' => 'add_resutltat_medical',);
            }

            if (0 === strpos($pathinfo, '/resultatMedical/liste')) {
                // list_resutltat_medical_ajoute
                if ($pathinfo === '/resultatMedical/liste') {
                    return array (  '_controller' => 'Ftt\\FrontOfficeBundle\\Controller\\ResultatMedicalController::ResultatsMedicalsDeChaqueMedecinAction',  '_route' => 'list_resutltat_medical_ajoute',);
                }

                // list_resutltat_medical_pdf
                if ($pathinfo === '/resultatMedical/liste/pdf') {
                    return array (  '_controller' => 'Ftt\\FrontOfficeBundle\\Controller\\PDFController::generateAction',  '_route' => 'list_resutltat_medical_pdf',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/admin')) {
            // ftt_backoffice_homepage
            if (rtrim($pathinfo, '/') === '/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'ftt_backoffice_homepage');
                }

                return array (  '_controller' => 'Ftt\\BackofficeBundle\\Controller\\AdminController::indexAction',  '_route' => 'ftt_backoffice_homepage',);
            }

            if (0 === strpos($pathinfo, '/admin/me')) {
                if (0 === strpos($pathinfo, '/admin/messages')) {
                    // ftt_backoffice_messages_list
                    if ($pathinfo === '/admin/messages') {
                        return array (  '_controller' => 'Ftt\\BackofficeBundle\\Controller\\MessagesController::listAction',  '_route' => 'ftt_backoffice_messages_list',);
                    }

                    // ftt_backoffice_messages_delete
                    if (0 === strpos($pathinfo, '/admin/messages/delete') && preg_match('#^/admin/messages/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ftt_backoffice_messages_delete')), array (  '_controller' => 'Ftt\\BackofficeBundle\\Controller\\MessagesController::deleteAction',));
                    }

                    // ftt_backoffice_messages_show
                    if (0 === strpos($pathinfo, '/admin/messages/show') && preg_match('#^/admin/messages/show/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ftt_backoffice_messages_show')), array (  '_controller' => 'Ftt\\BackofficeBundle\\Controller\\MessagesController::showAction',));
                    }

                }

                if (0 === strpos($pathinfo, '/admin/medecin')) {
                    // ftt_backoffice_medecin_list
                    if ($pathinfo === '/admin/medecin') {
                        return array (  '_controller' => 'Ftt\\BackofficeBundle\\Controller\\MedecinController::listMedecinAction',  '_route' => 'ftt_backoffice_medecin_list',);
                    }

                    // ftt_backoffice_medecin_add
                    if ($pathinfo === '/admin/medecin/add') {
                        return array (  '_controller' => 'Ftt\\BackofficeBundle\\Controller\\MedecinController::addMedecinAction',  '_route' => 'ftt_backoffice_medecin_add',);
                    }

                    // ftt_backoffice_medecin_update
                    if (0 === strpos($pathinfo, '/admin/medecin/update') && preg_match('#^/admin/medecin/update/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ftt_backoffice_medecin_update')), array (  '_controller' => 'Ftt\\BackofficeBundle\\Controller\\MedecinController::updateMedecinAction',));
                    }

                    // ftt_backoffice_medecin_delete
                    if (0 === strpos($pathinfo, '/admin/medecin/delete') && preg_match('#^/admin/medecin/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ftt_backoffice_medecin_delete')), array (  '_controller' => 'Ftt\\BackofficeBundle\\Controller\\MedecinController::deleteMedecinAction',));
                    }

                    // ftt_backoffice_medecin_show
                    if (0 === strpos($pathinfo, '/admin/medecin/show') && preg_match('#^/admin/medecin/show/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ftt_backoffice_medecin_show')), array (  '_controller' => 'Ftt\\BackofficeBundle\\Controller\\MedecinController::showMedecinAction',));
                    }

                }

            }

            if (0 === strpos($pathinfo, '/admin/terrain')) {
                // terrain
                if (rtrim($pathinfo, '/') === '/admin/terrain') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'terrain');
                    }

                    return array (  '_controller' => 'Ftt\\BackofficeBundle\\Controller\\TerrainController::indexAction',  '_route' => 'terrain',);
                }

                // terrain_show
                if (preg_match('#^/admin/terrain/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'terrain_show')), array (  '_controller' => 'Ftt\\BackofficeBundle\\Controller\\TerrainController::showAction',));
                }

                // terrain_new
                if ($pathinfo === '/admin/terrain/new') {
                    return array (  '_controller' => 'Ftt\\BackofficeBundle\\Controller\\TerrainController::newAction',  '_route' => 'terrain_new',);
                }

                // terrain_create
                if ($pathinfo === '/admin/terrain/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_terrain_create;
                    }

                    return array (  '_controller' => 'Ftt\\BackofficeBundle\\Controller\\TerrainController::createAction',  '_route' => 'terrain_create',);
                }
                not_terrain_create:

                // terrain_edit
                if (preg_match('#^/admin/terrain/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'terrain_edit')), array (  '_controller' => 'Ftt\\BackofficeBundle\\Controller\\TerrainController::editAction',));
                }

                // terrain_update
                if (preg_match('#^/admin/terrain/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_terrain_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'terrain_update')), array (  '_controller' => 'Ftt\\BackofficeBundle\\Controller\\TerrainController::updateAction',));
                }
                not_terrain_update:

                // terrain_delete
                if (preg_match('#^/admin/terrain/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_terrain_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'terrain_delete')), array (  '_controller' => 'Ftt\\BackofficeBundle\\Controller\\TerrainController::deleteAction',));
                }
                not_terrain_delete:

                // terrain_delete2
                if ($pathinfo === '/admin/terrain/delete') {
                    return array (  '_controller' => 'Ftt\\BackofficeBundle\\Controller\\TerrainController::delete2Action',  '_route' => 'terrain_delete2',);
                }

            }

            if (0 === strpos($pathinfo, '/admin/matchs')) {
                // matchs
                if (rtrim($pathinfo, '/') === '/admin/matchs') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'matchs');
                    }

                    return array (  '_controller' => 'Ftt\\BackofficeBundle\\Controller\\MatchsController::indexAction',  '_route' => 'matchs',);
                }

                // matchs_show
                if (preg_match('#^/admin/matchs/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'matchs_show')), array (  '_controller' => 'Ftt\\BackofficeBundle\\Controller\\MatchsController::showAction',));
                }

                // matchs_new
                if ($pathinfo === '/admin/matchs/new') {
                    return array (  '_controller' => 'Ftt\\BackofficeBundle\\Controller\\MatchsController::newAction',  '_route' => 'matchs_new',);
                }

                // matchs_create
                if ($pathinfo === '/admin/matchs/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_matchs_create;
                    }

                    return array (  '_controller' => 'Ftt\\BackofficeBundle\\Controller\\MatchsController::createAction',  '_route' => 'matchs_create',);
                }
                not_matchs_create:

                // matchs_edit
                if (preg_match('#^/admin/matchs/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'matchs_edit')), array (  '_controller' => 'Ftt\\BackofficeBundle\\Controller\\MatchsController::editAction',));
                }

                // matchs_update
                if (preg_match('#^/admin/matchs/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_matchs_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'matchs_update')), array (  '_controller' => 'Ftt\\BackofficeBundle\\Controller\\MatchsController::updateAction',));
                }
                not_matchs_update:

                // matchs_delete
                if (preg_match('#^/admin/matchs/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_matchs_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'matchs_delete')), array (  '_controller' => 'Ftt\\BackofficeBundle\\Controller\\MatchsController::deleteAction',));
                }
                not_matchs_delete:

                // matchs_delete2
                if ($pathinfo === '/admin/matchs/delete') {
                    return array (  '_controller' => 'Ftt\\BackofficeBundle\\Controller\\MatchsController::delete2Action',  '_route' => 'matchs_delete2',);
                }

            }

            if (0 === strpos($pathinfo, '/admin/formation')) {
                // formation
                if (rtrim($pathinfo, '/') === '/admin/formation') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'formation');
                    }

                    return array (  '_controller' => 'Ftt\\BackofficeBundle\\Controller\\FormationController::indexAction',  '_route' => 'formation',);
                }

                // formation_new
                if ($pathinfo === '/admin/formation/new') {
                    return array (  '_controller' => 'Ftt\\BackofficeBundle\\Controller\\FormationController::newAction',  '_route' => 'formation_new',);
                }

                // formation_create
                if ($pathinfo === '/admin/formation/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_formation_create;
                    }

                    return array (  '_controller' => 'Ftt\\BackofficeBundle\\Controller\\FormationController::createAction',  '_route' => 'formation_create',);
                }
                not_formation_create:

                // formation_edit
                if (preg_match('#^/admin/formation/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'formation_edit')), array (  '_controller' => 'Ftt\\BackofficeBundle\\Controller\\FormationController::editAction',));
                }

                // formation_update
                if (preg_match('#^/admin/formation/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_formation_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'formation_update')), array (  '_controller' => 'Ftt\\BackofficeBundle\\Controller\\FormationController::updateAction',));
                }
                not_formation_update:

                // formation_delete
                if (preg_match('#^/admin/formation/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_formation_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'formation_delete')), array (  '_controller' => 'Ftt\\BackofficeBundle\\Controller\\FormationController::deleteAction',));
                }
                not_formation_delete:

                // formation_delete2
                if ($pathinfo === '/admin/formation/delete') {
                    return array (  '_controller' => 'Ftt\\BackofficeBundle\\Controller\\FormationController::delete2Action',  '_route' => 'formation_delete2',);
                }

            }

            if (0 === strpos($pathinfo, '/admin/club')) {
                // club
                if (rtrim($pathinfo, '/') === '/admin/club') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'club');
                    }

                    return array (  '_controller' => 'Ftt\\BackofficeBundle\\Controller\\ClubController::indexAction',  '_route' => 'club',);
                }

                // club_show
                if (preg_match('#^/admin/club/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'club_show')), array (  '_controller' => 'Ftt\\BackofficeBundle\\Controller\\ClubController::showAction',));
                }

                // club_new
                if ($pathinfo === '/admin/club/new') {
                    return array (  '_controller' => 'Ftt\\BackofficeBundle\\Controller\\ClubController::newAction',  '_route' => 'club_new',);
                }

                // club_create
                if ($pathinfo === '/admin/club/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_club_create;
                    }

                    return array (  '_controller' => 'Ftt\\BackofficeBundle\\Controller\\ClubController::createAction',  '_route' => 'club_create',);
                }
                not_club_create:

                // club_edit
                if (preg_match('#^/admin/club/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'club_edit')), array (  '_controller' => 'Ftt\\BackofficeBundle\\Controller\\ClubController::editAction',));
                }

                // club_update
                if (preg_match('#^/admin/club/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_club_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'club_update')), array (  '_controller' => 'Ftt\\BackofficeBundle\\Controller\\ClubController::updateAction',));
                }
                not_club_update:

                // club_delete
                if (preg_match('#^/admin/club/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_club_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'club_delete')), array (  '_controller' => 'Ftt\\BackofficeBundle\\Controller\\ClubController::deleteAction',));
                }
                not_club_delete:

                // club_delete2
                if ($pathinfo === '/admin/club/delete') {
                    return array (  '_controller' => 'Ftt\\BackofficeBundle\\Controller\\ClubController::delete2Action',  '_route' => 'club_delete2',);
                }

            }

            if (0 === strpos($pathinfo, '/admin/joueur')) {
                if (0 === strpos($pathinfo, '/admin/joueur/a')) {
                    // afficher_joueur
                    if ($pathinfo === '/admin/joueur/afficherJoueur') {
                        return array (  '_controller' => 'Ftt\\BackofficeBundle\\Controller\\GestionJoueurController::afficherJoueurAction',  '_route' => 'afficher_joueur',);
                    }

                    // ajout_joueur
                    if ($pathinfo === '/admin/joueur/ajouterjoueur') {
                        return array (  '_controller' => 'Ftt\\BackofficeBundle\\Controller\\GestionJoueurController::ajouterJoueurAction',  '_route' => 'ajout_joueur',);
                    }

                }

                // modifier_joueur
                if ($pathinfo === '/admin/joueur/modifierjoueur') {
                    return array (  '_controller' => 'Ftt\\BackofficeBundle\\Controller\\GestionJoueurController::modifierJoueurAction',  '_route' => 'modifier_joueur',);
                }

                // supprimer_joueur
                if ($pathinfo === '/admin/joueur/supprimerjoueur') {
                    return array (  '_controller' => 'Ftt\\BackofficeBundle\\Controller\\GestionJoueurController::supprimerJoueurAction',  '_route' => 'supprimer_joueur',);
                }

                // joueur_list
                if ($pathinfo === '/admin/joueur/liste') {
                    return array (  '_controller' => 'Ftt\\BackofficeBundle\\Controller\\GestionJoueurController::listeAction',  '_route' => 'joueur_list',);
                }

            }

            // inscription_liste
            if ($pathinfo === '/admin/liste_insc') {
                return array (  '_controller' => 'Ftt\\BackofficeBundle\\Controller\\InscritFormationListController::indexAction',  '_route' => 'inscription_liste',);
            }

            // confirmer_formation
            if ($pathinfo === '/admin/confirmer_formation') {
                return array (  '_controller' => 'Ftt\\BackofficeBundle\\Controller\\InscritFormationListController::confirmerAction',  '_route' => 'confirmer_formation',);
            }

            // statistique
            if ($pathinfo === '/admin/stat') {
                return array (  '_controller' => 'Ftt\\BackofficeBundle\\Controller\\TicketController::statistiqueAction',  '_route' => 'statistique',);
            }

            if (0 === strpos($pathinfo, '/admin/paris')) {
                // paris_affich
                if (rtrim($pathinfo, '/') === '/admin/paris') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'paris_affich');
                    }

                    return array (  '_controller' => 'Ftt\\BackofficeBundle\\Controller\\ParisController::indexAction',  '_route' => 'paris_affich',);
                }

                // paris_show
                if (preg_match('#^/admin/paris/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'paris_show')), array (  '_controller' => 'Ftt\\BackofficeBundle\\Controller\\ParisController::showAction',));
                }

                // paris_new
                if ($pathinfo === '/admin/paris/new') {
                    return array (  '_controller' => 'Ftt\\BackofficeBundle\\Controller\\ParisController::newAction',  '_route' => 'paris_new',);
                }

                // paris_create
                if ($pathinfo === '/admin/paris/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_paris_create;
                    }

                    return array (  '_controller' => 'Ftt\\BackofficeBundle\\Controller\\ParisController::createAction',  '_route' => 'paris_create',);
                }
                not_paris_create:

                // paris_del
                if (preg_match('#^/admin/paris/(?P<id>[^/]++)/del$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'paris_del')), array (  '_controller' => 'Ftt\\BackofficeBundle\\Controller\\ParisController::deletePAction',));
                }

                // paris_edit
                if (preg_match('#^/admin/paris/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'paris_edit')), array (  '_controller' => 'Ftt\\BackofficeBundle\\Controller\\ParisController::editAction',));
                }

                // paris_update
                if (preg_match('#^/admin/paris/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_paris_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'paris_update')), array (  '_controller' => 'Ftt\\BackofficeBundle\\Controller\\ParisController::updateAction',));
                }
                not_paris_update:

                // paris_delete
                if (preg_match('#^/admin/paris/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_paris_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'paris_delete')), array (  '_controller' => 'Ftt\\BackofficeBundle\\Controller\\ParisController::deleteAction',));
                }
                not_paris_delete:

            }

            if (0 === strpos($pathinfo, '/admin/ticket')) {
                // ticket_affich
                if (rtrim($pathinfo, '/') === '/admin/ticket') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'ticket_affich');
                    }

                    return array (  '_controller' => 'Ftt\\BackofficeBundle\\Controller\\TicketController::indexAction',  '_route' => 'ticket_affich',);
                }

                // ticket_show
                if (preg_match('#^/admin/ticket/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ticket_show')), array (  '_controller' => 'Ftt\\BackofficeBundle\\Controller\\TicketController::showAction',));
                }

                // ticket_new
                if ($pathinfo === '/admin/ticket/new') {
                    return array (  '_controller' => 'Ftt\\BackofficeBundle\\Controller\\TicketController::newAction',  '_route' => 'ticket_new',);
                }

                // ticket_create
                if ($pathinfo === '/admin/ticket/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_ticket_create;
                    }

                    return array (  '_controller' => 'Ftt\\BackofficeBundle\\Controller\\TicketController::createAction',  '_route' => 'ticket_create',);
                }
                not_ticket_create:

                // ticket_del
                if (preg_match('#^/admin/ticket/(?P<id>[^/]++)/del$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ticket_del')), array (  '_controller' => 'Ftt\\BackofficeBundle\\Controller\\TicketController::deleteTickAction',));
                }

                // ticket_edit
                if (preg_match('#^/admin/ticket/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ticket_edit')), array (  '_controller' => 'Ftt\\BackofficeBundle\\Controller\\TicketController::editAction',));
                }

                // ticket_update
                if (preg_match('#^/admin/ticket/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_ticket_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ticket_update')), array (  '_controller' => 'Ftt\\BackofficeBundle\\Controller\\TicketController::updateAction',));
                }
                not_ticket_update:

                // ticket_delete
                if (preg_match('#^/admin/ticket/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_ticket_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ticket_delete')), array (  '_controller' => 'Ftt\\BackofficeBundle\\Controller\\TicketController::deleteAction',));
                }
                not_ticket_delete:

            }

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_security_login;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }
                not_fos_user_security_login:

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
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_security_logout;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }
            not_fos_user_security_logout:

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
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_profile_edit;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }
            not_fos_user_profile_edit:

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_registration_register;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'Ftt\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }
                not_fos_user_registration_register:

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'Ftt\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'Ftt\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'Ftt\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
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

        if (0 === strpos($pathinfo, '/api/threads')) {
            // fos_comment_new_threads
            if (0 === strpos($pathinfo, '/api/threads/new') && preg_match('#^/api/threads/new(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_comment_new_threads;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_comment_new_threads')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::newThreadsAction',  '_format' => 'html',));
            }
            not_fos_comment_new_threads:

            // fos_comment_edit_thread_commentable
            if (preg_match('#^/api/threads/(?P<id>[^/]++)/commentable/edit(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_comment_edit_thread_commentable;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_comment_edit_thread_commentable')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::editThreadCommentableAction',  '_format' => 'html',));
            }
            not_fos_comment_edit_thread_commentable:

            // fos_comment_new_thread_comments
            if (preg_match('#^/api/threads/(?P<id>[^/]++)/comments/new(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_comment_new_thread_comments;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_comment_new_thread_comments')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::newThreadCommentsAction',  '_format' => 'html',));
            }
            not_fos_comment_new_thread_comments:

            // fos_comment_remove_thread_comment
            if (preg_match('#^/api/threads/(?P<id>[^/]++)/comments/(?P<commentId>[^/]++)/remove(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_comment_remove_thread_comment;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_comment_remove_thread_comment')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::removeThreadCommentAction',  '_format' => 'html',));
            }
            not_fos_comment_remove_thread_comment:

            // fos_comment_edit_thread_comment
            if (preg_match('#^/api/threads/(?P<id>[^/]++)/comments/(?P<commentId>[^/]++)/edit(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_comment_edit_thread_comment;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_comment_edit_thread_comment')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::editThreadCommentAction',  '_format' => 'html',));
            }
            not_fos_comment_edit_thread_comment:

            // fos_comment_new_thread_comment_votes
            if (preg_match('#^/api/threads/(?P<id>[^/]++)/comments/(?P<commentId>[^/]++)/votes/new(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_comment_new_thread_comment_votes;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_comment_new_thread_comment_votes')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::newThreadCommentVotesAction',  '_format' => 'html',));
            }
            not_fos_comment_new_thread_comment_votes:

            // fos_comment_get_thread
            if (preg_match('#^/api/threads/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_comment_get_thread;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_comment_get_thread')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::getThreadAction',  '_format' => 'html',));
            }
            not_fos_comment_get_thread:

            // fos_comment_get_threads
            if (preg_match('#^/api/threads(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_comment_get_threads;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_comment_get_threads')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::getThreadsActions',  '_format' => 'html',));
            }
            not_fos_comment_get_threads:

            // fos_comment_post_threads
            if (preg_match('#^/api/threads(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_fos_comment_post_threads;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_comment_post_threads')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::postThreadsAction',  '_format' => 'html',));
            }
            not_fos_comment_post_threads:

            // fos_comment_patch_thread_commentable
            if (preg_match('#^/api/threads/(?P<id>[^/]++)/commentable(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PATCH') {
                    $allow[] = 'PATCH';
                    goto not_fos_comment_patch_thread_commentable;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_comment_patch_thread_commentable')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::patchThreadCommentableAction',  '_format' => 'html',));
            }
            not_fos_comment_patch_thread_commentable:

            // fos_comment_get_thread_comment
            if (preg_match('#^/api/threads/(?P<id>[^/]++)/comments/(?P<commentId>[^/\\.]++)(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_comment_get_thread_comment;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_comment_get_thread_comment')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::getThreadCommentAction',  '_format' => 'html',));
            }
            not_fos_comment_get_thread_comment:

            // fos_comment_patch_thread_comment_state
            if (preg_match('#^/api/threads/(?P<id>[^/]++)/comments/(?P<commentId>[^/]++)/state(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PATCH') {
                    $allow[] = 'PATCH';
                    goto not_fos_comment_patch_thread_comment_state;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_comment_patch_thread_comment_state')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::patchThreadCommentStateAction',  '_format' => 'html',));
            }
            not_fos_comment_patch_thread_comment_state:

            // fos_comment_put_thread_comments
            if (preg_match('#^/api/threads/(?P<id>[^/]++)/comments/(?P<commentId>[^/\\.]++)(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_fos_comment_put_thread_comments;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_comment_put_thread_comments')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::putThreadCommentsAction',  '_format' => 'html',));
            }
            not_fos_comment_put_thread_comments:

            // fos_comment_get_thread_comments
            if (preg_match('#^/api/threads/(?P<id>[^/]++)/comments(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_comment_get_thread_comments;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_comment_get_thread_comments')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::getThreadCommentsAction',  '_format' => 'html',));
            }
            not_fos_comment_get_thread_comments:

            // fos_comment_post_thread_comments
            if (preg_match('#^/api/threads/(?P<id>[^/]++)/comments(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_fos_comment_post_thread_comments;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_comment_post_thread_comments')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::postThreadCommentsAction',  '_format' => 'html',));
            }
            not_fos_comment_post_thread_comments:

            // fos_comment_get_thread_comment_votes
            if (preg_match('#^/api/threads/(?P<id>[^/]++)/comments/(?P<commentId>[^/]++)/votes(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_comment_get_thread_comment_votes;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_comment_get_thread_comment_votes')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::getThreadCommentVotesAction',  '_format' => 'html',));
            }
            not_fos_comment_get_thread_comment_votes:

            // fos_comment_post_thread_comment_votes
            if (preg_match('#^/api/threads/(?P<id>[^/]++)/comments/(?P<commentId>[^/]++)/votes(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_fos_comment_post_thread_comment_votes;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_comment_post_thread_comment_votes')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::postThreadCommentVotesAction',  '_format' => 'html',));
            }
            not_fos_comment_post_thread_comment_votes:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
