<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($rawPathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
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

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // register
        if ('/register' === $pathinfo) {
            return array (  '_controller' => 'EsqueletoBundle\\Controller\\DefaultController::registerAction',  '_route' => 'register',);
        }

        // ranking
        if ('/ranking' === $pathinfo) {
            return array (  '_controller' => 'EsqueletoBundle\\Controller\\DefaultController::rankingAction',  '_route' => 'ranking',);
        }

        // home
        if ('/home' === $pathinfo) {
            return array (  '_controller' => 'EsqueletoBundle\\Controller\\DefaultController::indexAction',  '_route' => 'home',);
        }

        // admin
        if ('/admin' === $pathinfo) {
            return array (  '_controller' => 'EsqueletoBundle\\Controller\\DefaultController::adminAction',  '_route' => 'admin',);
        }

        // cards
        if ('/cards' === $pathinfo) {
            return array (  '_controller' => 'EsqueletoBundle\\Controller\\DefaultController::cardsAction',  '_route' => 'cards',);
        }

        // borja_cervezas_buscarcerveza
        if (0 === strpos($pathinfo, '/cervezas') && preg_match('#^/cervezas/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'borja_cervezas_buscarcerveza')), array (  '_controller' => 'BorjaBundle\\Controller\\CervezasController::buscarCervezaAction',));
        }

        // paco_index
        if ('/paco' === $trimmedPathinfo) {
            if ('GET' !== $canonicalMethod) {
                $allow[] = 'GET';
                goto not_paco_index;
            }

            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($rawPathinfo.'/', 'paco_index');
            }

            return array (  '_controller' => 'EsqueletoBundle\\Controller\\LoginController::indexAction',  '_route' => 'paco_index',);
        }
        not_paco_index:

        if (0 === strpos($pathinfo, '/paco/crud')) {
            // paco_show
            if (preg_match('#^/paco/crud/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_paco_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'paco_show')), array (  '_controller' => 'EsqueletoBundle\\Controller\\LoginController::showAction',));
            }
            not_paco_show:

            // paco_edit
            if (preg_match('#^/paco/crud/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_paco_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'paco_edit')), array (  '_controller' => 'EsqueletoBundle\\Controller\\LoginController::editAction',));
            }
            not_paco_edit:

            // paco_delete
            if (preg_match('#^/paco/crud/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('DELETE' !== $canonicalMethod) {
                    $allow[] = 'DELETE';
                    goto not_paco_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'paco_delete')), array (  '_controller' => 'EsqueletoBundle\\Controller\\LoginController::deleteAction',));
            }
            not_paco_delete:

        }

        elseif (0 === strpos($pathinfo, '/usuario')) {
            // usuario_index
            if ('/usuario' === $trimmedPathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_usuario_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($rawPathinfo.'/', 'usuario_index');
                }

                return array (  '_controller' => 'EsqueletoBundle\\Controller\\UsuarioController::indexAction',  '_route' => 'usuario_index',);
            }
            not_usuario_index:

            // usuarios
            if ('/usuario/usuarios' === $pathinfo) {
                return array (  '_controller' => 'EsqueletoBundle\\Controller\\UsuarioController::usuariosAction',  '_route' => 'usuarios',);
            }

            // login
            if ('/usuario/login' === $pathinfo) {
                return array (  '_controller' => 'EsqueletoBundle\\Controller\\UsuarioController::loginAction',  '_route' => 'login',);
            }

            // logout
            if ('/usuario/logout' === $pathinfo) {
                return array (  '_controller' => 'EsqueletoBundle\\Controller\\UsuarioController::logout',  '_route' => 'logout',);
            }

            if (0 === strpos($pathinfo, '/usuario/crud')) {
                // usuario_new
                if ('/usuario/crud/new' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_usuario_new;
                    }

                    return array (  '_controller' => 'EsqueletoBundle\\Controller\\UsuarioController::newAction',  '_route' => 'usuario_new',);
                }
                not_usuario_new:

                // usuario_show
                if (preg_match('#^/usuario/crud/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_usuario_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuario_show')), array (  '_controller' => 'EsqueletoBundle\\Controller\\UsuarioController::showAction',));
                }
                not_usuario_show:

                // usuario_edit
                if (preg_match('#^/usuario/crud/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_usuario_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuario_edit')), array (  '_controller' => 'EsqueletoBundle\\Controller\\UsuarioController::editAction',));
                }
                not_usuario_edit:

                // usuario_delete
                if (preg_match('#^/usuario/crud/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('DELETE' !== $canonicalMethod) {
                        $allow[] = 'DELETE';
                        goto not_usuario_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuario_delete')), array (  '_controller' => 'EsqueletoBundle\\Controller\\UsuarioController::deleteAction',));
                }
                not_usuario_delete:

            }

        }

        // borja_default_index
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($rawPathinfo.'/', 'borja_default_index');
            }

            return array (  '_controller' => 'BorjaBundle\\Controller\\DefaultController::indexAction',  '_route' => 'borja_default_index',);
        }

        // homepage
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($rawPathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
