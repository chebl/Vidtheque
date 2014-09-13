<?php

namespace Gallerie\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('GallerieAdminBundle:Default:index.html.twig', array('name' => $name));
    }
}
