<?php

namespace Smodeal\AdBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Department
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Smodeal\AdBundle\Entity\DepartmentRepository")
 */
class Department {

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
   * @var smallint
   *
   * @ORM\Column(name="priority", type="smallint")
   */
  private $priority;

  /**
   * Get id
   *
   * @return integer 
   */
  public function getId() {
    return $this->id;
  }

  /**
   * Set name
   *
   * @param string $name
   * @return Department
   */
  public function setName($name) {
    $this->name = $name;

    return $this;
  }

  /**
   * Get name
   *
   * @return string 
   */
  public function getName() {
    return $this->name;
  }

  /**
   * Set record
   *
   * @param \DateTime $record
   * @return Department
   */
  public function setRecord($record) {
    $this->record = $record;

    return $this;
  }

  /**
   * Get record
   *
   * @return \DateTime 
   */
  public function getRecord() {
    return $this->record;
  }

  /**
   * Set status
   *
   * @param boolean $status
   * @return Department
   */
  public function setStatus($status) {
    $this->status = $status;

    return $this;
  }

  /**
   * Get status
   *
   * @return boolean 
   */
  public function getStatus() {
    return $this->status;
  }

}
