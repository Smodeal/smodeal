<?php

namespace Smodeal\Bundle\AdBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ad
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Smodeal\AdBundle\Entity\AdRepository")
 */
class Ad {

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
   * @ORM\Column(name="title", type="string", length=255)
   */
  private $title;

  /**
   * @var float
   *
   * @ORM\Column(name="price", type="decimal")
   */
  private $price;

  /**
   * @var string
   *
   * @ORM\Column(name="description", type="text")
   */
  private $description;

  /**
   * @var string
   *
   * @ORM\Column(name="slug", type="string", length=255)
   */
  private $slug;

  /**
   * @var integer
   *
   * @ORM\Column(name="subcategory", type="integer")
   */
  private $subcategory;

  /**
   * @var integer
   *
   * @ORM\Column(name="adress", type="bigint")
   */
  private $adress;

  /**
   * @var integer
   *
   * @ORM\Column(name="status", type="integer")
   */
  private $status;

  /**
   * @var boolean
   *
   * @ORM\Column(name="urgent", type="boolean")
   */
  private $urgent;

  /**
   * @var boolean
   *
   * @ORM\Column(name="locked", type="boolean")
   */
  private $locked;

  /**
   * @var \DateTime
   *
   * @ORM\Column(name="record", type="datetime")
   */
  private $record;

  /**
   * @var \DateTime
   *
   * @ORM\Column(name="published", type="datetime")
   */
  private $published;

  /**
   * @var \DateTime
   *
   * @ORM\Column(name="edit", type="datetime")
   */
  private $edit;

  /**
   * @var integer
   *
   * @ORM\Column(name="user", type="bigint")
   */
  private $user;

  public function __construct() {
    $this->$record = new \Datetime(); // Par défaut, la date de l'article est la date d'aujourd'hui
  }

  /**
   * Get id
   *
   * @return integer 
   */
  public function getId() {
    return $this->id;
  }

  /**
   * Set title
   *
   * @param string $title
   * @return Ad
   */
  public function setTitle($title) {
    $this->title = $title;

    return $this;
  }

  /**
   * Get title
   *
   * @return string 
   */
  public function getTitle() {
    return $this->title;
  }

  /**
   * Set price
   *
   * @param float $price
   * @return Ad
   */
  public function setPrice($price) {
    $this->price = $price;

    return $this;
  }

  /**
   * Get price
   *
   * @return float 
   */
  public function getPrice() {
    return $this->price;
  }

  /**
   * Set description
   *
   * @param string $description
   * @return Ad
   */
  public function setDescription($description) {
    $this->description = $description;

    return $this;
  }

  /**
   * Get description
   *
   * @return string 
   */
  public function getDescription() {
    return $this->description;
  }

  /**
   * Set slug
   *
   * @param string $slug
   * @return Ad
   */
  public function setSlug($slug) {
    $this->slug = $slug;

    return $this;
  }

  /**
   * Get slug
   *
   * @return string 
   */
  public function getSlug() {
    return $this->slug;
  }

  /**
   * Set subcategory
   *
   * @param integer $subcategory
   * @return Ad
   */
  public function setSubcategory($subcategory) {
    $this->subcategory = $subcategory;

    return $this;
  }

  /**
   * Get subcategory
   *
   * @return integer 
   */
  public function getSubcategory() {
    return $this->subcategory;
  }

  /**
   * Set adress
   *
   * @param integer $adress
   * @return Ad
   */
  public function setAdress($adress) {
    $this->adress = $adress;

    return $this;
  }

  /**
   * Get adress
   *
   * @return integer 
   */
  public function getAdress() {
    return $this->adress;
  }

  /**
   * Set status
   *
   * @param integer $status
   * @return Ad
   */
  public function setStatus($status) {
    $this->status = $status;

    return $this;
  }

  /**
   * Get status
   *
   * @return integer 
   */
  public function getStatus() {
    return $this->status;
  }

  /**
   * Set urgent
   *
   * @param boolean $urgent
   * @return Ad
   */
  public function setUrgent($urgent) {
    $this->urgent = $urgent;

    return $this;
  }

  /**
   * Get urgent
   *
   * @return boolean 
   */
  public function getUrgent() {
    return $this->urgent;
  }

  /**
   * Set locked
   *
   * @param boolean $locked
   * @return Ad
   */
  public function setLocked($locked) {
    $this->locked = $locked;

    return $this;
  }

  /**
   * Get locked
   *
   * @return boolean 
   */
  public function getLocked() {
    return $this->locked;
  }

  /**
   * Set record
   *
   * @param \DateTime $record
   * @return Ad
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
   * Set published
   *
   * @param \DateTime $published
   * @return Ad
   */
  public function setPublished($published) {
    $this->published = $published;

    return $this;
  }

  /**
   * Get published
   *
   * @return \DateTime 
   */
  public function getPublished() {
    return $this->published;
  }

  /**
   * Set edit
   *
   * @param \DateTime $edit
   * @return Ad
   */
  public function setEdit($edit) {
    $this->edit = $edit;

    return $this;
  }

  /**
   * Get edit
   *
   * @return \DateTime 
   */
  public function getEdit() {
    return $this->edit;
  }

  /**
   * Set user
   *
   * @param integer $user
   * @return Ad
   */
  public function setUser($user) {
    $this->user = $user;

    return $this;
  }

  /**
   * Get user
   *
   * @return integer 
   */
  public function getUser() {
    return $this->user;
  }

}
