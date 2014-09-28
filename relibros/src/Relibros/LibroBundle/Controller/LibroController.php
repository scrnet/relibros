<?php

namespace Relibros\LibroBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LibroController extends Controller
{
    public function indexAction()
    { 
	$em = $this->getDoctrine()->getManager();
	$libros = $em->getRepository('LibroBundle:Libro')->findAll();
	
        return $this->render('LibroBundle:Libro:index.html.twig', array('libros'=> $libros));
    }
    
    public function editarAction($id){
	$peticion = $this->getRequest();
	$em = $this->getDoctrine()->getManager();
	$curso = $em->getRepository('LibroBundle:Libro')->find($id);
	
	if(!$curso){
	    throw $this->createNotFoundException('No existe el libro.');
	}
	$formulario = $this->createForm(new LibroType(),$curso);
	
	if ($peticion->getMethod() == 'POST'){
	    $formulario->bind($peticion);
	    
	    if($formulario->isValid()){		
		$em->persist($curso);
		$em->flush();
		
		$etapa = $curso->getEtapa();
		return $this->redirect($this->generateUrl('backend_categoria1_ver', array('id' => $categoria1->getID())));
	    }
	}
	
	return $this->render('LibroBundle:Libro:editar.html.twig',array('formulario'=> $formulario->createView(),'categoria2'=>$curso));
    }
    
    public function borrarAction($id){
	$em = $this->getDoctrine()->getManager();
	$curso = $em->getRepository('LibroBundle:Libro')->find($id);
	
	if(!$curso){
	    throw $this->createNotFoundException('No existe ese Libro');
	}
        
        $etapa = $curso->getEtapa();
        
	//COMPROBAMOS QUE NO HAY SUBCATEGORIAS
	try{
	    $em->remove($curso);
	    $em->flush();
	 }
	 catch (\Doctrine\DBAL\DBALException $e) {
	    $this->get('session')->setFlash('error', 'Existen libros en la subcategoria, eliminelos primero!');
	  
	    return $this->redirect($this->generateUrl('backend_categoria1_ver', array('id' => $categoria1->getID())));
	 }
	
	return $this->redirect($this->generateUrl('backend_categoria1_ver', array('id' => $categoria1->getID())));
    }
    
    public function crearAction($id){
	$peticion = $this->getREquest();
	
	$curso = new Libro();
	$formulario = $this->createForm(new LibroType(),$curso);
	
	if ($peticion->getMethod() == 'POST'){
	    $formulario->bind($peticion);
	    
	    if($formulario->isValid()){
		$em = $this->getDOctrine()->getManager();
		$etapa = $em->getRepository('LibroBundle:Etapa')->find($id);
		$curso->setEtapa($etapa);
		$em->persist($curso);
		
		$em->flush();
		
		return $this->redirect($this->generateUrl('backend_categoria1_ver', array('id' => $categoria1->getID())));
	    }
	}
	
	return $this->render('LibroBundle:Libro:crear.html.twig', array('formulario'=>$formulario->createView(),'categoria1'=>$id));
	
    }
}
