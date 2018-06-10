<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
        $request = $this->request ?: $this->createRequest($pathinfo);
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        // homepage
        if (preg_match('#^/(?P<page>\\d+)?$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'homepage')), array (  'page' => 1,  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',));
        }

        // addpost
        if ('/add' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::addAction',  '_route' => 'addpost',);
        }

        // viewpost
        if (0 === strpos($pathinfo, '/post') && preg_match('#^/post/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'viewpost')), array (  '_controller' => 'AppBundle\\Controller\\DefaultController::viewAction',));
        }

        // search
        if ('/search' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::searchAction',  '_route' => 'search',);
        }

        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
