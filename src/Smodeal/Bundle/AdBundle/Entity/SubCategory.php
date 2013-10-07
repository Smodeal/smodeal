<?php

namespace Smodeal\Bundle\AdBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SubCategory
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Smodeal\AdBundle\Entity\SubCategoryRepository")
 */
class SubCategory
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="record", type="datetime")
     */
    private $record;

    /**
     * @var boolean
     *
     * @ORM\Column(name="status", type="boolean")
     */
    private $status;

    /**
     * @var integer
     *
     * @ORM\Column(name="ordored", type="integer")
     */
    private $ordored;


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
     * @return SubCategory
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
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

    /**
     * Set description
     *
     * @param string $description
     * @return SubCategory
     */
    public function setDescription($description)
    {
        $this->description = $description;
    
        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set record
     *
     * @param \DateTime $record
     * @return SubCategory
     */
    public function setRecord($record)
    {
        $this->record = $record;
    
        return $this;
    }

    /**
     * Get record
     *
     * @return \DateTime 
     */
    public function getRecord()
    {
        return $this->record;
    }

    /**
     * Set status
     *
     * @param boolean $status
     * @return SubCategory
     */
    public function setStatus($status)
    {
        $this->status = $status;
    
        return $this;
    }

    /**
     * Get status
     *
     * @return boolean 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set ordored
     *
     * @param integer $ordored
     * @return SubCategory
     */
    public function setOrdored($ordored)
    {
        $this->ordored = $ordored;
    
        return $this;
    }

    /**
     * Get ordored
     *
     * @return integer 
     */
    public function getOrdored()
    {
        return $this->ordored;
    }
}
