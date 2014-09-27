<?php

namespace Relibros\LibroBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('LibroBundle:Default:index.html.twig', array('name' => $name));
    }
}
