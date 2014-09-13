<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Gallerie\MediaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Pagerfanta\Pagerfanta;
use Pagerfanta\Adapter\ArrayAdapter;

class MediaController extends Controller
{
    public function indexAction($page)
    {
        
      $parametre= $this->getDoctrine()->getRepository('GallerieAdminBundle:Parametre')->findAll();
        
         $adapter = new ArrayAdapter($this->getDoctrine()->getRepository('GallerieAdminBundle:PhotoMedia')->findAll());
   $pager = new Pagerfanta($adapter);

            $pager->setMaxPerPage(12); 
              if( !$page ) {

                $page = 1;  }

            try {

                $pager->setCurrentPage($page);

            } catch (NotValidCurrentPageException $e) {

                throw new NotFoundHttpException();

            }
        $type=0;
        
        
        
        return $this->render('GallerieMediaBundle:gallerie:media.html.twig',array('pager'=>$pager,'parametre'=>$parametre,'type'=> $type));
    }
    
    
    
    public function listbyparamAction($page) {
        
        
        
         // $parametre= $this->getDoctrine()->getRepository('GallerieAdminBundle:Parametre')->findAll();
          $request = $this->get('request');
          if ($request->getMethod() == 'POST') {
          //  $nb=$_POST['nbparam'];
         
            switch($_POST['typemedia']) 
            { 
                
                case 'p': {
                
            $type=0;
             
                 if(isset($_POST['sousparametre'])) {
                     
              $entity=$this->getDoctrine()->getRepository('GallerieAdminBundle:PhotoMedia')->createQueryBuilder('t')
                       ->join('t.sousparametres', 'u', 'WITH', 'u.id = :id')
                       ->setParameter('id',$request->request->get('sousparametre'))
                       ->getQuery()
                  ->getResult();
                 }
                 else {
                     
                     $entity=$this->getDoctrine()->getRepository('GallerieAdminBundle:PhotoMedia')->findAll();
                 }
            break;
                }
case 'v': {
           $type=1;     
            
            if(isset($_POST['sousparametre'])) {
                 
              $entity=$this->getDoctrine()->getRepository('GallerieAdminBundle:VideoMedia')->createQueryBuilder('t')
                       ->join('t.sousparametres', 'u', 'WITH', 'u.id = :id')
                       ->setParameter('id',$request->request->get('sousparametre'))
                       ->getQuery()
                  ->getResult();}
         else {
                     
                     $entity=$this->getDoctrine()->getRepository('GallerieAdminBundle:VideoMedia')->findAll();
                 }
            break;
                }                
                case 'a': {
                
            $type=2;
             
               if(isset($_POST['sousparametre'])) {
              $entity=$this->getDoctrine()->getRepository('GallerieAdminBundle:AnimationMedia')->createQueryBuilder('t')
                       ->join('t.sousparametres', 'u', 'WITH', 'u.id = :id')
                       ->setParameter('id',$request->request->get('sousparametre'))
                       ->getQuery()
                  ->getResult();
                  }
                   else {
                     
                     $entity=$this->getDoctrine()->getRepository('GallerieAdminBundle:AnimationMedia')->findAll();
                 }
                  
            break;
                }
                
            default :break;
            }
               
            $adapter = new ArrayAdapter($entity);   
              $pager = new Pagerfanta($adapter);

            $pager->setMaxPerPage(12); 
              if( !$page ) {

                $page = 1;  }

            try {

                $pager->setCurrentPage($page);

            } catch (NotValidCurrentPageException $e) {

                throw new NotFoundHttpException();

            }
         
}
        

  
     $parametre= $this->getDoctrine()->getRepository('GallerieAdminBundle:Parametre')->findAll();
     return $this->render('GallerieMediaBundle:gallerie:media.html.twig',array('pager'=> $pager,'parametre'=>$parametre,'type'=>$type));

    }
    
  public function getsidebarAction() {
    
    $lastimage=$this->getDoctrine()->getRepository('GallerieAdminBundle:PhotoMedia')->createQueryBuilder('b')
                   ->select('b')
                   ->addOrderBy('b.dateinsertion', 'DESC')
                  ->setMaxResults(2)
                  ->getQuery()
                  ->getResult();
     $lastvideos=$this->getDoctrine()->getRepository('GallerieAdminBundle:VideoMedia')->createQueryBuilder('b')
                   ->select('b')
                   ->addOrderBy('b.dateinsertion', 'DESC')
                  ->setMaxResults(2)
                  ->getQuery()
                  ->getResult();
  $lastanimations=$this->getDoctrine()->getRepository('GallerieAdminBundle:AnimationMedia')->createQueryBuilder('b')
                   ->select('b')
                   ->addOrderBy('b.dateinsertion', 'DESC')
                  ->setMaxResults(2)
                  ->getQuery()
                  ->getResult();
        
    
 return $this->render('GallerieMediaBundle:gallerie:sidebar.html.twig',array('lastvideos'=>$lastvideos,'lastanimations'=>$lastanimations,'lastphotos'=>$lastimage));
    
}

    
    
}
?>
