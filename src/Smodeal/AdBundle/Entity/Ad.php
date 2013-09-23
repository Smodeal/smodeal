<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Ad
 * 
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="Smodeal\AdBundle\Entity\AdRepository")
 *
 * @author fahari
 */
class Ad {

  /**
   * @ORM\Column(name="id", type="integer")
   * @ORM\Id
   * @ORM\GeneratedValue(strategy="AUTO")
   */
  private $id;

  /**
   * @ORM\Column(name="title", type="string")
   */
  private $title;

  /**
   * @ORM\Column(name="title", type="string")
   */
  private $slug;

  /**
   * @ORM\Column(name="price", type="float")
   */
  private $price;

  /**
   * @ORM\Column(name="description", type="text")
   */
  private $description;

  /**
   * @ORM\Column(name="status", type="boolean")
   */
  private $status;

  /**
   * @ORM\Column(name="locked", type="boolean")
   */
  private $locked;

  /**
   * @ORM\Column(name="published", type="date")
   */
  private $published;

  /**
   * @ORM\Column(name="update", type="date")
   */
  private $update;

  /**
   * @ORM\Column(name="record", type="date")
   */
  private $record;

  public function __construct() {
    $this->$record = new \Datetime(); // Par défaut, la date de l'article est la date d'aujourd'hui
  }

}

?>
