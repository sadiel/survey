<?php

namespace Gamma\Bundle\SurveyBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction($name)
    {
        return $this->render('GammaSurveyBundle:Default:index.html.twig', array('name' => $name));
    }
}
