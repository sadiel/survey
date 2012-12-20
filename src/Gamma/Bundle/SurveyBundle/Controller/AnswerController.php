<?php

namespace Gamma\Bundle\SurveyBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class AnswerController extends Controller
{
    
    /**
     * @Rest\View
     */ 
    public function allAction()
    {
        $answers = $this->getDoctrine()
            ->getRepository('GammaSurveyBundle:Answer')
            ->findAll();

        return new Response(json_encode(array('answers' => $answers)));
    }
    
    /**
     * @Rest\View
     */
    public function getAction($id)
    {   
        /*$answer = $this->getDoctrine()
            ->getRepository('GammaSurveyBundle:answer')
            ->find($id);

        if (!$answer) {
            throw $this->createNotFoundException(
                'No answer found for id '.$id
            );
        }*/

        $answer = array('test1' => 1, 'test2' => 2);

        return new Response(json_encode(array('answer' => $answer)));        
    }
    
    /**
     * @Rest\View
     */ 
    public function newAction(Request $request)
    {
        
        $answer = $request->request->get('answer');
        
        //echo $request->request->get('answer'); exit;
        
        /*$em = $this->getDoctrine()->getManager();
        $em->persist($answer); 
        $em->flush();*/
        
        return new Response(json_encode(array('answer' => $answer)));        
    }
}
