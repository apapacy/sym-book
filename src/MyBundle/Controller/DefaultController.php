<?php

namespace MyBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/admin")
     */
    public function indexAction()
    {
        return $this->render('MyBundle:Default:index.html.twig');
    }

    /**
     * @Route("/about/{name}", name="aboutpage")
     */
     public function aboutAction($name)
     {
          return $this->render('AppBundle:about:index.html.twig', array('name' =>
            $name));
     }
}
