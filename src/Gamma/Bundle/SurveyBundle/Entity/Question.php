<?php

namespace Gamma\Bundle\SurveyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Gamma\Bundle\SurveyBundle\Entity\Question
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Question
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
     * @ORM\Column(name="text", type="string", length=2000)
     */
    private $text;

    /**
     * @var integer $id_questionnaire
     *
     * @ORM\Column(name="id_questionnaire", type="integer")
     */
    private $id_questionnaire;

    /**
     * @var integer $parent_id
     *
     * @ORM\Column(name="parent_id", type="integer")
     */
    private $parent_id;

    /**
     * @var integer $depend_id
     *
     * @ORM\Column(name="depend_id", type="integer")
     */
    private $depend_id;


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
     * Set parent_id
     *
     * @param integer $parentId
     */
    public function setParentId($parentId)
    {
        $this->parent_id = $parentId;
    }

    /**
     * Get parent_id
     *
     * @return integer 
     */
    public function getParentId()
    {
        return $this->parent_id;
    }

    /**
     * Set depend_id
     *
     * @param integer $dependId
     */
    public function setDependId($dependId)
    {
        $this->depend_id = $dependId;
    }

    /**
     * Get depend_id
     *
     * @return integer 
     */
    public function getDependId()
    {
        return $this->depend_id;
    }
}