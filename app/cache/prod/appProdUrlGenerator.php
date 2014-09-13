<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    static private $declaredRoutes = array(
        'gallerie_admin_homepage' => array (  0 =>   array (    0 => 'page',    1 => 'v',  ),  1 =>   array (    '_controller' => 'Gallerie\\AdminBundle\\Controller\\AdminController::listAction',    'page' => 1,    'v' => 1,  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'v',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'page',    ),    2 =>     array (      0 => 'text',      1 => '/admin/dashboard',    ),  ),  4 =>   array (  ),),
        'videomanager' => array (  0 =>   array (    0 => 'page',  ),  1 =>   array (    '_controller' => 'Gallerie\\AdminBundle\\Controller\\AdminController::listvideoAction',    'page' => 1,  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'page',    ),    1 =>     array (      0 => 'text',      1 => '/admin/dashboard/listvideos',    ),  ),  4 =>   array (  ),),
        'editphoto' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Gallerie\\AdminBundle\\Controller\\AdminController::editphotoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/editphoto',    ),  ),  4 =>   array (  ),),
        'updatephoto' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Gallerie\\AdminBundle\\Controller\\AdminController::updatephotoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/updatephoto',    ),  ),  4 =>   array (  ),),
        'addphoto' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Gallerie\\AdminBundle\\Controller\\AdminController::addphotoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/addphoto',    ),  ),  4 =>   array (  ),),
        'deletephoto' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Gallerie\\AdminBundle\\Controller\\AdminController::deletephotoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/deletephoto',    ),  ),  4 =>   array (  ),),
        'editvideo' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Gallerie\\AdminBundle\\Controller\\AdminController::editvideoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/editvideo',    ),  ),  4 =>   array (  ),),
        'updatevideo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Gallerie\\AdminBundle\\Controller\\AdminController::updatevideoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/updatevideo',    ),  ),  4 =>   array (  ),),
        'addvideo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Gallerie\\AdminBundle\\Controller\\AdminController::addvideoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/addvideo',    ),  ),  4 =>   array (  ),),
        'deletevideo' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Gallerie\\AdminBundle\\Controller\\AdminController::deletevideoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/deletevideo',    ),  ),  4 =>   array (  ),),
        'editanimation' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Gallerie\\AdminBundle\\Controller\\AdminController::editanimationAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/editanimation',    ),  ),  4 =>   array (  ),),
        'updateanimation' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Gallerie\\AdminBundle\\Controller\\AdminController::updateanimationAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/updateanimation',    ),  ),  4 =>   array (  ),),
        'addanimation' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Gallerie\\AdminBundle\\Controller\\AdminController::addanimationAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/addanimation',    ),  ),  4 =>   array (  ),),
        'deleteanimation' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Gallerie\\AdminBundle\\Controller\\AdminController::deleteanimationAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/deleteanimation',    ),  ),  4 =>   array (  ),),
        'addparam' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Gallerie\\AdminBundle\\Controller\\AdminController::addparamAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/addparam',    ),  ),  4 =>   array (  ),),
        'editparam' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Gallerie\\AdminBundle\\Controller\\AdminController::editparamAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/editparam',    ),  ),  4 =>   array (  ),),
        'updateparam' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Gallerie\\AdminBundle\\Controller\\AdminController::updateparamAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/updateparam',    ),  ),  4 =>   array (  ),),
        'deleteparam' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Gallerie\\AdminBundle\\Controller\\AdminController::deleteparamAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/deleteparam',    ),  ),  4 =>   array (  ),),
        'sousparam' => array (  0 =>   array (    0 => 'id',    1 => 'page',  ),  1 =>   array (    '_controller' => 'Gallerie\\AdminBundle\\Controller\\AdminController::listsousparamAction',    'page' => 1,  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'page',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/sousparam',    ),  ),  4 =>   array (  ),),
        'addsousparam' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Gallerie\\AdminBundle\\Controller\\AdminController::addsousparamAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/addsousparam',    ),  ),  4 =>   array (  ),),
        'editsousparam' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Gallerie\\AdminBundle\\Controller\\AdminController::editsouparamAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/editsousparam',    ),  ),  4 =>   array (  ),),
        'updatesousparam' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Gallerie\\AdminBundle\\Controller\\AdminController::updatesousparamAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/updatesousparam',    ),  ),  4 =>   array (  ),),
        'deletesousparam' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Gallerie\\AdminBundle\\Controller\\AdminController::deletesousparamAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/deletesousparam',    ),  ),  4 =>   array (  ),),
        'addfiles' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Gallerie\\AdminBundle\\Controller\\AdminController::uploadfilesAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/uploadfiles',    ),  ),  4 =>   array (  ),),
        'gallerie_media_homepage' => array (  0 =>   array (    0 => 'page',  ),  1 =>   array (    '_controller' => 'Gallerie\\MediaBundle\\Controller\\MediaController::indexAction',    'page' => 1,  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'page',    ),    1 =>     array (      0 => 'text',      1 => '/home',    ),  ),  4 =>   array (  ),),
        'listbyparam' => array (  0 =>   array (    0 => 'page',  ),  1 =>   array (    '_controller' => 'Gallerie\\MediaBundle\\Controller\\MediaController::listbyparamAction',    'page' => 1,  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'page',    ),    1 =>     array (      0 => 'text',      1 => '/list',    ),  ),  4 =>   array (  ),),
        'gallerie_multiupload_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Gallerie\\MultiuploadBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/upload',    ),  ),  4 =>   array (  ),),
        '_uploader_upload_gallery' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'oneup_uploader.controller.gallery:upload',    '_format' => 'json',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_uploader/gallery/upload',    ),  ),  4 =>   array (  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens);
    }
}
