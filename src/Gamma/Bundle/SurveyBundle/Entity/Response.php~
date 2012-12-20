<?php

namespace Gamma\Bundle\SurveyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Gamma\Bundle\SurveyBundle\Entity\Response
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Response
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
     * @var string $text
     *
     * @ORM\Column(name="text", type="string", length=255)
     */
    private $text;

    /**
     * @var integer $id_question
     *
     * @ORM\Column(name="id_question", type="integer")
     */
    private $id_question;

    /**
     * @var string $kind
     *
     * @ORM\Column(name="kind", type="string", length=255)
     */
    private $kind;


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
     * Set text
     *
     * @param string $text
     */
    public function setText($text)
    {
        $this->text = $text;
    }

    /**
     * Get text
     *
     * @return string 
     */
    public function getText()
    {
        return $this->text;
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
     * Set kind
     *
     * @param string $kind
     */
    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    /**
     * Get kind
     *
     * @return string 
     */
    public function getKind()
    {
        return $this->kind;
    }
}