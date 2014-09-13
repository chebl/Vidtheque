<?php

namespace Gallerie\MultiuploadBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Gallerie\MultiuploadBundle\Entity\Photo;
use Gallerie\MultiuploadBundle\Form\PhotoType;

class DefaultController extends Controller
{
    public function indexAction()
    {
         $request = $this->get('request');
          $entity = new Photo();
   
      
        $form   = $this->createForm(new PhotoType(), $entity);
        if ($request->getMethod() === "POST") {
        $form->bind($request);
        if ($form->isValid()) {
            $entity->upload();
            $this->persist( $entity);
           
            }

            return $this->render('GallerieMultiuploadBundle:Default:valid.html.twig', array('ok' => 'Upload okk'));
        }
         return $this->render('GallerieMultiuploadBundle:Default:index.html.twig', array('form' => $form->createView()));
    }
        
      
 
}
