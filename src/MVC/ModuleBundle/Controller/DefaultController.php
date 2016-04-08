<?php

namespace MVC\ModuleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('MVCModuleBundle:Default:index.html.twig', array('name' => $name));
    }
}
