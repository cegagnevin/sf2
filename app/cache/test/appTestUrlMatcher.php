<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appTestUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appTestUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        }

        if (0 === strpos($pathinfo, '/locations')) {
            // licweb_location.location_getlocations
            if ($pathinfo === '/locations') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_licweb_locationlocation_getlocations;
                }

                return array (  '_controller' => 'Licweb\\LocationBundle\\Controller\\LocationController::getLocationsAction',  '_route' => 'licweb_location.location_getlocations',);
            }
            not_licweb_locationlocation_getlocations:

            // licweb_location.location_getlocation
            if (preg_match('#^/locations/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_licweb_locationlocation_getlocation;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'licweb_location.location_getlocation')), array (  '_controller' => 'Licweb\\LocationBundle\\Controller\\LocationController::getLocationAction',));
            }
            not_licweb_locationlocation_getlocation:

            // licweb_location.location_addlocation
            if ($pathinfo === '/locations') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_licweb_locationlocation_addlocation;
                }

                return array (  '_controller' => 'Licweb\\LocationBundle\\Controller\\LocationController::addLocationAction',  '_route' => 'licweb_location.location_addlocation',);
            }
            not_licweb_locationlocation_addlocation:

            // licweb_location.location_updatelocation
            if (preg_match('#^/locations/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_licweb_locationlocation_updatelocation;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'licweb_location.location_updatelocation')), array (  '_controller' => 'Licweb\\LocationBundle\\Controller\\LocationController::updateLocationAction',));
            }
            not_licweb_locationlocation_updatelocation:

            // licweb_location.location_deletelocation
            if (preg_match('#^/locations/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_licweb_locationlocation_deletelocation;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'licweb_location.location_deletelocation')), array (  '_controller' => 'Licweb\\LocationBundle\\Controller\\LocationController::deleteLocationAction',));
            }
            not_licweb_locationlocation_deletelocation:

            // licweb_location.comment_addcomment
            if (preg_match('#^/locations/(?P<id>[^/]++)/comments$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_licweb_locationcomment_addcomment;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'licweb_location.comment_addcomment')), array (  '_controller' => 'Licweb\\LocationBundle\\Controller\\CommentController::addCommentAction',));
            }
            not_licweb_locationcomment_addcomment:

        }

        // licweb_location.location_setlocale
        if (0 === strpos($pathinfo, '/translations') && preg_match('#^/translations/(?P<locale>[^/]++)$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'PUT') {
                $allow[] = 'PUT';
                goto not_licweb_locationlocation_setlocale;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'licweb_location.location_setlocale')), array (  '_controller' => 'LicwebLocationBundle:Locations:setLocale',));
        }
        not_licweb_locationlocation_setlocale:

        // nelmio_api_doc_index
        if (rtrim($pathinfo, '/') === '/api/doc') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_nelmio_api_doc_index;
            }

            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'nelmio_api_doc_index');
            }

            return array (  '_controller' => 'Nelmio\\ApiDocBundle\\Controller\\ApiDocController::indexAction',  '_route' => 'nelmio_api_doc_index',);
        }
        not_nelmio_api_doc_index:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
