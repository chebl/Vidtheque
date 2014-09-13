<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/admin')) {
            if (0 === strpos($pathinfo, '/admin/dashboard')) {
                // gallerie_admin_homepage
                if (preg_match('#^/admin/dashboard(?:/(?P<page>[^/]++)(?:/(?P<v>[^/]++))?)?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'gallerie_admin_homepage')), array (  '_controller' => 'Gallerie\\AdminBundle\\Controller\\AdminController::listAction',  'page' => 1,  'v' => 1,));
                }

                // videomanager
                if (0 === strpos($pathinfo, '/admin/dashboard/listvideos') && preg_match('#^/admin/dashboard/listvideos(?:/(?P<page>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'videomanager')), array (  '_controller' => 'Gallerie\\AdminBundle\\Controller\\AdminController::listvideoAction',  'page' => 1,));
                }

            }

            // editphoto
            if (0 === strpos($pathinfo, '/admin/editphoto') && preg_match('#^/admin/editphoto/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'editphoto')), array (  '_controller' => 'Gallerie\\AdminBundle\\Controller\\AdminController::editphotoAction',));
            }

            // updatephoto
            if ($pathinfo === '/admin/updatephoto') {
                return array (  '_controller' => 'Gallerie\\AdminBundle\\Controller\\AdminController::updatephotoAction',  '_route' => 'updatephoto',);
            }

            // addphoto
            if ($pathinfo === '/admin/addphoto') {
                return array (  '_controller' => 'Gallerie\\AdminBundle\\Controller\\AdminController::addphotoAction',  '_route' => 'addphoto',);
            }

            // deletephoto
            if (0 === strpos($pathinfo, '/admin/deletephoto') && preg_match('#^/admin/deletephoto/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'deletephoto')), array (  '_controller' => 'Gallerie\\AdminBundle\\Controller\\AdminController::deletephotoAction',));
            }

            // editvideo
            if (0 === strpos($pathinfo, '/admin/editvideo') && preg_match('#^/admin/editvideo/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'editvideo')), array (  '_controller' => 'Gallerie\\AdminBundle\\Controller\\AdminController::editvideoAction',));
            }

            // updatevideo
            if ($pathinfo === '/admin/updatevideo') {
                return array (  '_controller' => 'Gallerie\\AdminBundle\\Controller\\AdminController::updatevideoAction',  '_route' => 'updatevideo',);
            }

            // addvideo
            if ($pathinfo === '/admin/addvideo') {
                return array (  '_controller' => 'Gallerie\\AdminBundle\\Controller\\AdminController::addvideoAction',  '_route' => 'addvideo',);
            }

            // deletevideo
            if (0 === strpos($pathinfo, '/admin/deletevideo') && preg_match('#^/admin/deletevideo/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'deletevideo')), array (  '_controller' => 'Gallerie\\AdminBundle\\Controller\\AdminController::deletevideoAction',));
            }

            // editanimation
            if (0 === strpos($pathinfo, '/admin/editanimation') && preg_match('#^/admin/editanimation/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'editanimation')), array (  '_controller' => 'Gallerie\\AdminBundle\\Controller\\AdminController::editanimationAction',));
            }

            // updateanimation
            if ($pathinfo === '/admin/updateanimation') {
                return array (  '_controller' => 'Gallerie\\AdminBundle\\Controller\\AdminController::updateanimationAction',  '_route' => 'updateanimation',);
            }

            // addanimation
            if ($pathinfo === '/admin/addanimation') {
                return array (  '_controller' => 'Gallerie\\AdminBundle\\Controller\\AdminController::addanimationAction',  '_route' => 'addanimation',);
            }

            // deleteanimation
            if (0 === strpos($pathinfo, '/admin/deleteanimation') && preg_match('#^/admin/deleteanimation/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'deleteanimation')), array (  '_controller' => 'Gallerie\\AdminBundle\\Controller\\AdminController::deleteanimationAction',));
            }

            // addparam
            if ($pathinfo === '/admin/addparam') {
                return array (  '_controller' => 'Gallerie\\AdminBundle\\Controller\\AdminController::addparamAction',  '_route' => 'addparam',);
            }

            // editparam
            if (0 === strpos($pathinfo, '/admin/editparam') && preg_match('#^/admin/editparam/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'editparam')), array (  '_controller' => 'Gallerie\\AdminBundle\\Controller\\AdminController::editparamAction',));
            }

            // updateparam
            if ($pathinfo === '/admin/updateparam') {
                return array (  '_controller' => 'Gallerie\\AdminBundle\\Controller\\AdminController::updateparamAction',  '_route' => 'updateparam',);
            }

            // deleteparam
            if (0 === strpos($pathinfo, '/admin/deleteparam') && preg_match('#^/admin/deleteparam/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'deleteparam')), array (  '_controller' => 'Gallerie\\AdminBundle\\Controller\\AdminController::deleteparamAction',));
            }

            // sousparam
            if (0 === strpos($pathinfo, '/admin/sousparam') && preg_match('#^/admin/sousparam/(?P<id>[^/]++)(?:/(?P<page>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sousparam')), array (  '_controller' => 'Gallerie\\AdminBundle\\Controller\\AdminController::listsousparamAction',  'page' => 1,));
            }

            // addsousparam
            if ($pathinfo === '/admin/addsousparam') {
                return array (  '_controller' => 'Gallerie\\AdminBundle\\Controller\\AdminController::addsousparamAction',  '_route' => 'addsousparam',);
            }

            // editsousparam
            if (0 === strpos($pathinfo, '/admin/editsousparam') && preg_match('#^/admin/editsousparam/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'editsousparam')), array (  '_controller' => 'Gallerie\\AdminBundle\\Controller\\AdminController::editsouparamAction',));
            }

            // updatesousparam
            if ($pathinfo === '/admin/updatesousparam') {
                return array (  '_controller' => 'Gallerie\\AdminBundle\\Controller\\AdminController::updatesousparamAction',  '_route' => 'updatesousparam',);
            }

            // deletesousparam
            if (0 === strpos($pathinfo, '/admin/deletesousparam') && preg_match('#^/admin/deletesousparam/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'deletesousparam')), array (  '_controller' => 'Gallerie\\AdminBundle\\Controller\\AdminController::deletesousparamAction',));
            }

            // addfiles
            if ($pathinfo === '/admin/uploadfiles') {
                return array (  '_controller' => 'Gallerie\\AdminBundle\\Controller\\AdminController::uploadfilesAction',  '_route' => 'addfiles',);
            }

        }

        // gallerie_media_homepage
        if (0 === strpos($pathinfo, '/home') && preg_match('#^/home(?:/(?P<page>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'gallerie_media_homepage')), array (  '_controller' => 'Gallerie\\MediaBundle\\Controller\\MediaController::indexAction',  'page' => 1,));
        }

        // listbyparam
        if (0 === strpos($pathinfo, '/list') && preg_match('#^/list(?:/(?P<page>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'listbyparam')), array (  '_controller' => 'Gallerie\\MediaBundle\\Controller\\MediaController::listbyparamAction',  'page' => 1,));
        }

        // gallerie_multiupload_homepage
        if ($pathinfo === '/upload') {
            return array (  '_controller' => 'Gallerie\\MultiuploadBundle\\Controller\\DefaultController::indexAction',  '_route' => 'gallerie_multiupload_homepage',);
        }

        // _uploader_upload_gallery
        if ($pathinfo === '/_uploader/gallery/upload') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not__uploader_upload_gallery;
            }

            return array (  '_controller' => 'oneup_uploader.controller.gallery:upload',  '_format' => 'json',  '_route' => '_uploader_upload_gallery',);
        }
        not__uploader_upload_gallery:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
