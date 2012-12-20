<?php

namespace Gamma\Bundle\SurveyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Gamma\Bundle\SurveyBundle\Entity\Answer
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Answer
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var integer $id_questionnaire
     *
     * @ORM\Column(name="id_questionnaire", type="integer")
     */
    private $id_questionnaire;

    /**
     * @var integer $id_question
     *
     * @ORM\Column(name="id_question", type="integer")
     */
    private $id_question;

    /**
     * @var integer $id_response
     *
     * @ORM\Column(name="id_response", type="integer")
     */
    private $id_response;

    /**
     * @var string $value
     *
     * @ORM\Column(name="value", type="string", length=255)
     */
    private $value;

    /**
     * @var bigint $id_user
     *
     * @ORM\Column(name="id_user", type="bigint")
     */
    private $id_user;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set id_questionnaire
     *
     * @param integer $idQuestionnaire
     */
    public function setIdQuestionnaire($idQuestionnaire)
    {
        $this->id_questionnaire = $idQuestionnaire;
    }

    /**
     * Get id_questionnaire
     *
     * @return integer 
     */
    public function getIdQuestionnaire()
    {
        return $this->id_questionnaire;
    }

    /**
     * Set id_question
     *
     * @param integer $idQuestion
     */
    public function setIdQuestion($idQuestion)
    {
        $this->id_question = $idQuestion;
    }

    /**
     * Get id_question
     *
     * @return integer 
     */
    public function getIdQuestion()
    {
        return $this->id_question;
    }

    /**
     * Set id_response
     *
     * @param integer $idResponse
     */
    public function setIdResponse($idResponse)
    {
        $this->id_response = $idResponse;
    }

    /**
     * Get id_response
     *
     * @return integer 
     */
    public function getIdResponse()
    {
        return $this->id_response;
    }

    /**
     * Set value
     *
     * @param string $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }

    /**
     * Get value
     *
     * @return string 
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set id_user
     *
     * @param bigint $idUser
     */
    public function setIdUser($idUser)
    {
        $this->id_user = $idUser;
    }

    /**
     * Get id_user
     *
     * @return bigint 
     */
    public function getIdUser()
    {
        return $this->id_user;
    }
}