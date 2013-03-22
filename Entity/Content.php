<?php

namespace Yit\AdsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * Yit\AdsBundle\Entity\Ads
 * @ORM\Entity
 * @ORM\Table(name="ads_content")
 */
class Content
{

  /**
   * @ORM\Column(name="id", type="integer")
   * @ORM\Id
   * @ORM\GeneratedValue(strategy="AUTO")
   */
  protected $id;
  
  /**
   * @var text $title
   * 
   * @ORM\Column(type="text", length=200, nullable=true)
   */
  protected $title = '';

  /**
   * @var text $content
   * 
   * @ORM\Column(type="text", length=2000, nullable=true)
   */
  protected $content;

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
   * Set content
   *
   * @param string $content
   * @return Content
   */
  public function setContent($content)
  {
    $this->content = $content;

    return $this;
  }

  /**
   * Get content
   *
   * @return string 
   */
  public function getContent()
  {
    return $this->content;
  }

  /**
   * Set title
   *
   * @param string $title
   * @return Content
   */
  public function setTitle($title)
  {
    $this->title = $title;

    return $this;
  }

  /**
   * Get title
   *
   * @return string 
   */
  public function getTitle()
  {
    return $this->title;
  }
  
  /**
   * 
   * @return type
   */
  public function __toString()
  {
    return $this->title;
  }
}
