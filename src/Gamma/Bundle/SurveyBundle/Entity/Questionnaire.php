<?php

namespace Gamma\Bundle\SurveyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;


/**
 * Gamma\Bundle\SurveyBundle\Entity\Questionnaire
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Questionnaire
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
     * @var string $name
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @ORM\OneToMany(targetEntity="Question", mappedBy="questionnaire")
     */
    protected $questions;

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
     * Set name
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }
    
    public function __construct()
    {
        $this->questions = new ArrayCollection();
    }

    /**
     * Add questions
     *
     * @param Gamma\Bundle\SurveyBundle\Entity\Question $questions
     */
    public function addQuestion(\Gamma\Bundle\SurveyBundle\Entity\Question $questions)
    {
        $this->questions[] = $questions;
    }

    /**
     * Get questions
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getQuestions()
    {
        return $this->questions;
    }
}