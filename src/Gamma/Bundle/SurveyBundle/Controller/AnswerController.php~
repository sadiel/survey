<?php

namespace Gamma\Bundle\SurveyBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use Gamma\Bundle\SurveyBundle\Entity\Answer;

use Nelmio\ApiDocBundle\Annotation\ApiDoc;

class AnswerController extends Controller
{
    
    /**
     * @ApiDoc(
     *  resource=true,
     *  description="Show all answers"
     * )
     */
    public function allAction()
    {
        $answers = $this->getDoctrine()
            ->getRepository('GammaSurveyBundle:Answer')
            ->findAll();
        
        $serializer = $this->container->get('serializer');
        $reports = $serializer->serialize($answers, 'json');
        return new Response($reports);  
    }
    
    /**
     * @ApiDoc(
     *  resource=true,
     *  description="Get an answer",
     *  filters={
     *      {"name"="a-filter", "dataType"="integer"},
     *      {"name"="another-filter", "dataType"="string", "pattern"="(foo|bar) ASC|DESC"}
     *  },
     *  output="Gamma\Bundle\SurveyBundle\Entity\Answer"
     * )
     */
    public function getAction($id)
    {   
        $answer = $this->getDoctrine()
            ->getRepository('GammaSurveyBundle:Answer')
            ->find($id);         

        if (!$answer) {
            throw $this->createNotFoundException(
                'No answer found for id '.$id
            );
        }
        
        $serializer = $this->container->get('serializer');
        $reports = $serializer->serialize($answer, 'json');
        return new Response($reports);    
    }
    
    /**
     * @ApiDoc(
     *  resource=true,     
     *  description="Create a new Answer",
     *  input="Your\Namespace\Form\Type\YourType",
     *  output="Your\Namespace\Class"
     * )
     */
    public function newAction(Request $request)
    {
        
        $newAnswer = $request->request->get('answer');

        $answerModel = new Answer();
        
        //$answer->fromArray($newAnswer);
        
        $answerModel->setIdQuestionnaire($newAnswer['id_questionnaire']);
        $answerModel->setIdQuestion($newAnswer['id_question']);
        $answerModel->setIdResponse($newAnswer['id_response']);
        $answerModel->setValue($newAnswer['value']);
        $answerModel->setIdUser($newAnswer['id_user']);

        
        $em = $this->getDoctrine()->getEntityManager();
        $em->persist($answerModel); 
        $em->flush();
        
        return new Response('Created answer id '.$answerModel->getId());        
    }
}
