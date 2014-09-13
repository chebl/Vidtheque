<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Gallerie\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Pagerfanta\Pagerfanta;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Pagerfanta\Adapter\ArrayAdapter;
use Gallerie\AdminBundle\Entity\PhotoMedia;
use Gallerie\AdminBundle\Form\PhotoMediaType;
use Gallerie\AdminBundle\Entity\VideoMedia;
use Gallerie\AdminBundle\Form\VideoMediaType;
use Gallerie\AdminBundle\Entity\AnimationMedia;
use Gallerie\AdminBundle\Form\AnimationMediaType;
use Gallerie\AdminBundle\Entity\Parametre;
use Gallerie\AdminBundle\Form\ParametreType;
use Gallerie\AdminBundle\Entity\SousParametre;
use Gallerie\AdminBundle\Form\TestType;
use Gallerie\AdminBundle\Entity\Test;
use Gallerie\AdminBundle\Form\SousParametreType;
use Doctrine\ORM\Mapping as ORM;

class AdminController extends Controller
{
    
    /***Gestion des Photos****/
    
    public function listAction($page,$v)
    {
        
         $adapter = new ArrayAdapter($this->getDoctrine()->getRepository('GallerieAdminBundle:PhotoMedia')->findAll());
   $pager = new Pagerfanta($adapter);

            $pager->setMaxPerPage(8); 
              if( !$page ) {

                $page = 1;  }

            try {

                $pager->setCurrentPage($page);

            } catch (NotValidCurrentPageException $e) {

                throw new NotFoundHttpException();

            }
        
            
             $adapter1 = new ArrayAdapter($this->getDoctrine()->getRepository('GallerieAdminBundle:VideoMedia')->findAll());
   $pager1 = new Pagerfanta($adapter1);

            $pager1->setMaxPerPage(8); 
              if( !$page ) {

                $page = 1;  }

            try {

                $pager1->setCurrentPage($page);

            } catch (NotValidCurrentPageException $e) {

                throw new NotFoundHttpException();

            }
        
          $adapter2 = new ArrayAdapter($this->getDoctrine()->getRepository('GallerieAdminBundle:AnimationMedia')->findAll());
   $pager2 = new Pagerfanta($adapter2);

            $pager2->setMaxPerPage(8); 
              if( !$page ) {

                $page = 1;  }

            try {

                $pager2->setCurrentPage($page);

            } catch (NotValidCurrentPageException $e) {

                throw new NotFoundHttpException();

            }
        
              $adapter3 = new ArrayAdapter($this->getDoctrine()->getRepository('GallerieAdminBundle:Parametre')->findAll());
   $pager3 = new Pagerfanta($adapter3);

            $pager3->setMaxPerPage(8); 
              if( !$page ) {

                $page = 1;  }

            try {

                $pager3->setCurrentPage($page);

            } catch (NotValidCurrentPageException $e) {

                throw new NotFoundHttpException();

            }
        
            $adapter4 = new ArrayAdapter($this->getDoctrine()->getRepository('GallerieAdminBundle:SousParametre')->findAll());
   $pager4 = new Pagerfanta($adapter4);

            $pager4->setMaxPerPage(8); 
              if( !$page ) {

                $page = 1;  }

            try {

                $pager4->setCurrentPage($page);

            } catch (NotValidCurrentPageException $e) {

                throw new NotFoundHttpException();

            }
            
        return $this->render('GallerieAdminBundle:Admin:dashboard.html.twig',array('pagerphoto'=>$pager,'pagervideo'=>$pager1,'pageranimation'=>$pager2,'pagerparam'=>$pager3,'pagersousparam'=>$pager4,'v'=>$v));
    }
    
    public function editphotoAction($id) {
        
      
        $parametre= $this->getDoctrine()->getRepository('GallerieAdminBundle:Parametre')->findAll();
         $sousparametre= $this->getDoctrine()->getRepository('GallerieAdminBundle:SousParametre')->findAll();
      $restsousparametre= new SousParametre();
       $entity= $this->getDoctrine()->getRepository('GallerieAdminBundle:PhotoMedia')->find($id); 
        
       $sousparametres=$entity->getSousparametres();
      foreach( $sousparametre as $elementsousparametre)
      {
       $test=$sousparametres->contains($elementsousparametre);
       if(!$test)     
       $restsousparametre=$entity->addSousparametre($elementsousparametre);
           
       } 
      $form  = $this->createForm(new PhotoMediaType(), $entity); 
      return $this->render('GallerieAdminBundle:Photo:editphoto.html.twig',array('form'=> $form->createView(),'id'=>$id,'parametre'=>$parametre,'sousparametres'=>$sousparametres,'restsousparametre'=>$restsousparametre));
        
       
         
        
    }
    public function updatephotoAction() {
           $request = $this->get('request');
       
         $em = $this->getDoctrine()->getManager();
         $id=$request->request->get('id');
        $entity= $this->getDoctrine()->getRepository('GallerieAdminBundle:PhotoMedia')->find($id); 
         
      $form  = $this->createForm(new PhotoMediaType(), $entity); 
          if ($request->getMethod() == 'POST') {
          $entity->removeAllSousparametre();
              $nb=$_POST['nbparam'];
           
              for($i=0;$i<$nb;$i++) {
                
             $sousparams=$this->getDoctrine()->getRepository('GallerieAdminBundle:SousParametre')->find($_POST['l'.$i]);
            
             $entity->addSousparametre($sousparams); 
                
            }
             $form->bind($request); 
            //$categorie=$request->request->get('categorie');
                    $entity->setDatemodif(new \DateTime());
                    
            if($form->isValid()) {
    
               $entity->upload($form->get('file')->getData());
               
              // $entity->setcategorie($categorie);
                  $em->persist($entity);
           
                $em->flush();
            $url = $this->get('router')->generate('gallerie_admin_homepage');
                    $response = new RedirectResponse($url);
                    return $response; 
            }
   
     
    
        }
    
         
         
    }
    
    public function addphotoAction() {
        
        
        
        
        $em = $this->getDoctrine()->getManager();
      $parametre= $this->getDoctrine()->getRepository('GallerieAdminBundle:Parametre')->findAll();
      $sousparametres=$this->getDoctrine()->getRepository('GallerieAdminBundle:SousParametre')->findAll();
       $entity = new PhotoMedia();
   
      
        $formphoto   = $this->createForm(new PhotoMediaType(), $entity);
     $request = $this->get('request');
        if ($request->getMethod() == 'POST') {
            $nb=$_POST['nbparam'];
            for($i=0;$i<$nb;$i++) {
                
             $sousparams=$this->getDoctrine()->getRepository('GallerieAdminBundle:SousParametre')->find($_POST['l'.$i]);
              
             $entity->addSousparametre($sousparams); 
                
            }
            
               $formphoto->bind($request); 
            //$categorie=$request->request->get('categorie');
                    $entity->setDateinsertion(new \DateTime());
                  
            if($formphoto->isValid()) {
    
               $entity->upload();
               
              // $entity->setcategorie($categorie);
              $em->persist($entity);
                $em->flush();
            $url = $this->get('router')->generate('gallerie_admin_homepage');
                    $response = new RedirectResponse($url);
                    return $response; 
            }
   
     
    
        }
    return $this->render('GallerieAdminBundle:Photo:addphoto.html.twig',array('form'=> $formphoto->createView(),'parametre'=>$parametre,'sousparametres'=>$sousparametres));
    
}


public function deletephotoAction($id) {
    
   // if('POST'===$request->getMethod()) {
       
         $em = $this->getDoctrine()->getManager();
           
           $entity = $this->getDoctrine()->getRepository('GallerieAdminBundle:PhotoMedia')->find($id);  
    
           $em->remove($entity);
            $em->flush();
		
  $url = $this->get('router')->generate('gallerie_admin_homepage');
                    $response = new RedirectResponse($url);
                    return $response; 
}


 /***Gestion des photos****/
    
    public function listvideoAction($page)
    {
        
         $adapter = new ArrayAdapter($this->getDoctrine()->getRepository('GallerieAdminBundle:VideoMedia')->findAll());
   $pager = new Pagerfanta($adapter);

            $pager->setMaxPerPage(8); 
              if( !$page ) {

                $page = 1;  }

            try {

                $pager->setCurrentPage($page);

            } catch (NotValidCurrentPageException $e) {

                throw new NotFoundHttpException();

            }
        
        
        
        
        return $this->render('GallerieAdminBundle:Admin:dashboard.html.twig',array('pager'=>$pager));
    }
    
    public function editvideoAction($id) {
        
      
         $parametre= $this->getDoctrine()->getRepository('GallerieAdminBundle:Parametre')->findAll();
         $sousparametre= $this->getDoctrine()->getRepository('GallerieAdminBundle:SousParametre')->findAll();
      $restsousparametre= new SousParametre();
       
       $entity= $this->getDoctrine()->getRepository('GallerieAdminBundle:VideoMedia')->find($id);
        $sousparametres=$entity->getSousparametres();
        foreach( $sousparametre as $elementsousparametre)
      {
       $test=$sousparametres->contains($elementsousparametre);
       if(!$test)     
       $restsousparametre=$entity->addSousparametre($elementsousparametre);
           
       } 
      $form  = $this->createForm(new VideoMediaType(), $entity); 
      return $this->render('GallerieAdminBundle:Video:editvideo.html.twig',array('form'=> $form->createView(),'id'=>$id,'parametre'=>$parametre,'sousparametres'=>$sousparametres,'restsousparametre'=>$restsousparametre));
        
       
         
        
    }
    public function updatevideoAction() {
           $request = $this->get('request');
       
         $em = $this->getDoctrine()->getManager();
         $id=$request->request->get('id');
        $entity= $this->getDoctrine()->getRepository('GallerieAdminBundle:VideoMedia')->find($id); 
        
      $form  = $this->createForm(new VideoMediaType(), $entity); 
          if ($request->getMethod() == 'POST') {
               $entity->removeAllSousparametre();
              $nb=$_POST['nbparam'];
           
              for($i=0;$i<$nb;$i++) {
                
             $sousparams=$this->getDoctrine()->getRepository('GallerieAdminBundle:SousParametre')->find($_POST['l'.$i]);
            
             $entity->addSousparametre($sousparams); 
                
            }
             $form->bind($request); 
            //$categorie=$request->request->get('categorie');
                    $entity->setDatemodif(new \DateTime());
                    
            if($form->isValid()) {
    
               $entity->upload($form->get('file')->getData());
               
              // $entity->setcategorie($categorie);
                   $em->persist($entity);
           
                $em->flush();
            $url = $this->get('router')->generate('gallerie_admin_homepage');
                    $response = new RedirectResponse($url);
                    return $response; 
            }
   
     
    
        }
    
         
         
    }
    
    public function addvideoAction() {
        
        
        
        
        $em = $this->getDoctrine()->getManager();
       
       $entity = new VideoMedia();
       $parametre= $this->getDoctrine()->getRepository('GallerieAdminBundle:Parametre')->findAll();
      $sousparametres=$this->getDoctrine()->getRepository('GallerieAdminBundle:SousParametre')->findAll();
       
        $formvideo   = $this->createForm(new VideoMediaType(), $entity);
     $request = $this->get('request');
        if ($request->getMethod() == 'POST') {
             $formvideo->bind($request); 
            //$categorie=$request->request->get('categorie');
                    $entity->setDateinsertion(new \DateTime());
            if($formvideo->isValid()) {
              $nb=$_POST['nbparam'];
            for($i=0;$i<$nb;$i++) {
                
             $sousparams=$this->getDoctrine()->getRepository('GallerieAdminBundle:SousParametre')->find($_POST['l'.$i]);
              
             $entity->addSousparametre($sousparams); 
                
            }
               $entity->upload($formvideo->get('file')->getData());
               
              // $entity->setcategorie($categorie);
               $em->persist($entity);
                $em->flush();
            $url = $this->get('router')->generate('gallerie_admin_homepage');
                    $response = new RedirectResponse($url);
                    return $response; 
            }
   
     
    
        }
    return $this->render('GallerieAdminBundle:Video:addvideo.html.twig',array('form'=> $formvideo->createView(),'parametre'=>$parametre,'sousparametres'=>$sousparametres));
    
}


public function deletevideoAction($id) {
    
   // if('POST'===$request->getMethod()) {
       
         $em = $this->getDoctrine()->getManager();
           
           $entity = $this->getDoctrine()->getRepository('GallerieAdminBundle:VideoMedia')->find($id);  
    
           $em->remove($entity);
            $em->flush();
		
  $url = $this->get('router')->generate('gallerie_admin_homepage');
                    $response = new RedirectResponse($url);
                    return $response; 
}





/***Gestion des animations****/
    
    public function listanimationAction($page)
    {
        
         $adapter = new ArrayAdapter($this->getDoctrine()->getRepository('GallerieAdminBundle:AnimationMedia')->findAll());
   $pager = new Pagerfanta($adapter);

            $pager->setMaxPerPage(8); 
              if( !$page ) {

                $page = 1;  }

            try {

                $pager->setCurrentPage($page);

            } catch (NotValidCurrentPageException $e) {

                throw new NotFoundHttpException();

            }
        
        
        
        
        return $this->render('GallerieAdminBundle:Admin:dashboard.html.twig',array('pager'=>$pager));
    }
    
    public function editanimationAction($id) {
        
      
        $parametre= $this->getDoctrine()->getRepository('GallerieAdminBundle:Parametre')->findAll();
         $sousparametre= $this->getDoctrine()->getRepository('GallerieAdminBundle:SousParametre')->findAll();
      $restsousparametre= new SousParametre();
       
       $entity= $this->getDoctrine()->getRepository('GallerieAdminBundle:AnimationMedia')->find($id); 
         $sousparametres=$entity->getSousparametres();
        foreach( $sousparametre as $elementsousparametre)
      {
       $test=$sousparametres->contains($elementsousparametre);
       if(!$test)     
       $restsousparametre=$entity->addSousparametre($elementsousparametre);
           
       } 
      $form  = $this->createForm(new AnimationMediaType(), $entity); 
      return $this->render('GallerieAdminBundle:Animation:editanimation.html.twig',array('form'=> $form->createView(),'id'=>$id,'parametre'=>$parametre,'sousparametres'=>$sousparametres,'restsousparametre'=>$restsousparametre));
        
       
         
        
    }
    public function updateanimationAction() {
           $request = $this->get('request');
       
         $em = $this->getDoctrine()->getManager();
         $id=$request->request->get('id');
        $entity= $this->getDoctrine()->getRepository('GallerieAdminBundle:AnimationMedia')->find($id); 
        
      $form  = $this->createForm(new AnimationMediaType(), $entity); 
          if ($request->getMethod() == 'POST') {
               $entity->removeAllSousparametre();
              $nb=$_POST['nbparam'];
           
              for($i=0;$i<$nb;$i++) {
                
             $sousparams=$this->getDoctrine()->getRepository('GallerieAdminBundle:SousParametre')->find($_POST['l'.$i]);
            
             $entity->addSousparametre($sousparams); 
                
            }
             $form->bind($request); 
            //$categorie=$request->request->get('categorie');
                    $entity->setDatemodif(new \DateTime());
                    
            if($form->isValid()) {
    
               $entity->upload($form->get('file')->getData());
               
              // $entity->setcategorie($categorie);
                   $em->persist($entity);
           
                $em->flush();
            $url = $this->get('router')->generate('gallerie_admin_homepage');
                    $response = new RedirectResponse($url);
                    return $response; 
            }
   
     
    
        }
    
         
         
    }
    
    public function addanimationAction() {
        
        
        
        
        $em = $this->getDoctrine()->getManager();
       
       $entity = new AnimationMedia();
       $parametre= $this->getDoctrine()->getRepository('GallerieAdminBundle:Parametre')->findAll();
      $sousparametres=$this->getDoctrine()->getRepository('GallerieAdminBundle:SousParametre')->findAll();
       
        $form   = $this->createForm(new AnimationMediaType(), $entity);
     $request = $this->get('request');
        if ($request->getMethod() == 'POST') {
            $nb=$_POST['nbparam'];
            for($i=0;$i<$nb;$i++) {
                
             $sousparams=$this->getDoctrine()->getRepository('GallerieAdminBundle:SousParametre')->find($_POST['l'.$i]);
              
             $entity->addSousparametre($sousparams); 
                
            }
             $form->bind($request); 
            //$categorie=$request->request->get('categorie');
                    $entity->setDateinsertion(new \DateTime());
            if($form->isValid()) {
    
               $entity->upload($form->get('file')->getData());
               
              // $entity->setcategorie($categorie);
               $em->persist($entity);
                $em->flush();
            $url = $this->get('router')->generate('gallerie_admin_homepage');
                    $response = new RedirectResponse($url);
                    return $response; 
            }
   
     
    
        }
    return $this->render('GallerieAdminBundle:Animation:addanimation.html.twig',array('form'=> $form->createView(),'parametre'=>$parametre,'sousparametres'=>$sousparametres));
    
}


public function deleteanimationAction($id) {
    
   // if('POST'===$request->getMethod()) {
       
         $em = $this->getDoctrine()->getManager();
           
           $entity = $this->getDoctrine()->getRepository('GallerieAdminBundle:AnimationMedia')->find($id);  
    
           $em->remove($entity);
            $em->flush();
		
  $url = $this->get('router')->generate('gallerie_admin_homepage');
                    $response = new RedirectResponse($url);
                    return $response; 
}





/***Gestion des parametres****/
    
    public function listparamAction($page)
    {
        
         $adapter = new ArrayAdapter($this->getDoctrine()->getRepository('GallerieAdminBundle:Parametre')->findAll());
   $pager = new Pagerfanta($adapter);

            $pager->setMaxPerPage(8); 
              if( !$page ) {

                $page = 1;  }

            try {

                $pager->setCurrentPage($page);

            } catch (NotValidCurrentPageException $e) {

                throw new NotFoundHttpException();

            }
        
        
        
        
        return $this->render('GallerieAdminBundle:Admin:dashboard.html.twig',array('pager'=>$pager));
    }
    
    public function editparamAction($id) {
        
      
       
       
       $entity= $this->getDoctrine()->getRepository('GallerieAdminBundle:Parametre')->find($id); 
        
      $form  = $this->createForm(new ParametreType(), $entity); 
      return $this->render('GallerieAdminBundle:Filtre:editparam.html.twig',array('form'=> $form->createView(),'id'=>$id));
        
       
         
        
    }
    public function updateparamAction() {
           $request = $this->get('request');
       
         $em = $this->getDoctrine()->getManager();
         $id=$request->request->get('id');
        $entity= $this->getDoctrine()->getRepository('GallerieAdminBundle:Parametre')->find($id); 
        
      $form  = $this->createForm(new ParametreType(), $entity); 
          if ($request->getMethod() == 'POST') {
             $form->bind($request); 
            //$categorie=$request->request->get('categorie');
                   
                    
            if($form->isValid()) {
    
              
               
              // $entity->setcategorie($categorie);
                   $em->persist($entity);
           
                $em->flush();
            $url = $this->get('router')->generate('gallerie_admin_homepage');
                    $response = new RedirectResponse($url);
                    return $response; 
            }
   
     
    
        }
    
         
         
    }
    
    public function addparamAction() {
        
        
        
        
        $em = $this->getDoctrine()->getManager();
       
       $entity = new Parametre();
      
        $sousparam = new SousParametre();
          $sousparam->setName("Non Classé");
          
        $form   = $this->createForm(new ParametreType(), $entity);
       $request = $this->get('request');
        if ($request->getMethod() == 'POST') {
             $form->bind($request);
             $sousparam->setParametre($entity);
            //$categorie=$request->request->get('categorie');
                   
            if($form->isValid()) {
    
               
              // $entity->setcategorie($categorie);
               $em->persist($entity);
               $em->persist($sousparam);
                $em->flush();
            $url = $this->get('router')->generate('gallerie_admin_homepage');
                    $response = new RedirectResponse($url);
                    return $response; 
            }
   
     
    
        }
    return $this->render('GallerieAdminBundle:Filtre:addparam.html.twig',array('form'=> $form->createView()));
    
}


public function deleteparamAction($id) {
    
   // if('POST'===$request->getMethod()) {
       
         $em = $this->getDoctrine()->getManager();
           
           $entity = $this->getDoctrine()->getRepository('GallerieAdminBundle:Parametre')->find($id);  
    
           $em->remove($entity);
            $em->flush();
		
  $url = $this->get('router')->generate('gallerie_admin_homepage');
                    $response = new RedirectResponse($url);
                    return $response; 
}


/***Gestion des Sous parametres****/

public function listsousparamAction($id,$page) {
    
    
         $adapter = new ArrayAdapter($this->getDoctrine()->getRepository('GallerieAdminBundle:SousParametre')->findby(array('parametre'=>$id)));
   $parametre=$this->getDoctrine()->getRepository('GallerieAdminBundle:Parametre')->find($id);
         $pager = new Pagerfanta($adapter);

            $pager->setMaxPerPage(8); 
              if( !$page ) {

                $page = 1;  }

            try {

                $pager->setCurrentPage($page);

            } catch (NotValidCurrentPageException $e) {

                throw new NotFoundHttpException();

            } 
            
           return $this->render('GallerieAdminBundle:SousParametre:list.html.twig',array('parametre'=>$parametre,'pager'=>$pager));
    
    
    
}


    public function editsouparamAction($id) {
        
      
       
       
       $entity= $this->getDoctrine()->getRepository('GallerieAdminBundle:SousParametre')->find($id); 
        
      $form  = $this->createForm(new SousParametreType(), $entity); 
      return $this->render('GallerieAdminBundle:SousParametre:edit.html.twig',array('form'=> $form->createView(),'id'=>$id));
        
       
         
        
    }
    public function updatesousparamAction() {
           $request = $this->get('request');
       
         $em = $this->getDoctrine()->getManager();
         $id=$request->request->get('id');
        $entity= $this->getDoctrine()->getRepository('GallerieAdminBundle:SousParametre')->find($id); 
        
      $form  = $this->createForm(new SousParametreType(), $entity); 
          if ($request->getMethod() == 'POST') {
             $form->bind($request); 
            //$categorie=$request->request->get('categorie');
                   
                    
            if($form->isValid()) {
    
              
               
              // $entity->setcategorie($categorie);
                   $em->persist($entity);
           
                $em->flush();
            $url = $this->get('router')->generate('gallerie_admin_homepage');
                    $response = new RedirectResponse($url);
                    return $response; 
            }
   
     
    
        }
    
         
         
    }
    
    public function addsousparamAction() {
        
        
        
        
        $em = $this->getDoctrine()->getManager();
       
       $entity = new SousParametre();
      
       
        $form   = $this->createForm(new SousParametreType(), $entity);
       $request = $this->get('request');
        if ($request->getMethod() == 'POST') {
             $form->bind($request); 
            //$categorie=$request->request->get('categorie');
                   
            if($form->isValid()) {
    
               
              // $entity->setcategorie($categorie);
               $em->persist($entity);
                $em->flush();
            $url = $this->get('router')->generate('gallerie_admin_homepage');
                    $response = new RedirectResponse($url);
                    return $response; 
            }
   
     
    
        }
    return $this->render('GallerieAdminBundle:SousParametre:add.html.twig',array('form'=> $form->createView()));
    
}


public function deletesousparamAction($id) {
    
   // if('POST'===$request->getMethod()) {
       
         $em = $this->getDoctrine()->getManager();
           
           $entity = $this->getDoctrine()->getRepository('GallerieAdminBundle:SousParametre')->find($id);  
    
           $em->remove($entity);
            $em->flush();
		
  $url = $this->get('router')->generate('gallerie_admin_homepage');
                    $response = new RedirectResponse($url);
                    return $response; 
}


public function uploadfilesAction() {
     $em = $this->getDoctrine()->getManager();
  
          $entity = new Test();
   
      
        $form= $this->createForm(new TestType(), $entity);
           $request = $this->get('request');
        if ($request->getMethod() === "POST") {
        $form->bind($request);
        if ($form->isValid()) {
          $entity->upload();
          $em ->persist($entity);
            $em->flush();
            return $this->render('GallerieAdminBundle:Photo:valid.html.twig', array('ok' => 'Upload okk'));
          

        } 
        }
         return $this->render('GallerieAdminBundle:Photo:upload.html.twig', array('form' => $form->createView()));
    }
        
    
    


}
?>
