<?php

namespace Yit\AdsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * Yit\AdsBundle\Entity\Ads
 * @ORM\Entity
 * @ORM\Table(name="ads", 
 *        uniqueConstraints={@ORM\UniqueConstraint(name="search_ad_by_domain_and_position", columns={"domain", "position"})}
 *    )
 */
class Ads
{

  /**
   * @ORM\Column(name="id", type="integer")
   * @ORM\Id
   * @ORM\GeneratedValue(strategy="AUTO")
   */
  protected $id;

  /**
   * @var string domain
   * 
   * @ORM\Column(type="string", length=50, nullable=false)
   */
  private $domain = '';

  /**
   * @var string position
   * 
   * @ORM\Column(type="string", length=50, nullable=false)
   */
  private $position;

  /**
   * 
   * @ORM\ManyToOne(targetEntity="Content", cascade={"persist"})
   */
  protected $contents;

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
   * Set domain
   *
   * @param string $domain
   * @return Ads
   */
  public function setDomain($domain)
  {
    $this->domain = $domain;

    return $this;
  }

  /**
   * Get domain
   *
   * @return string 
   */
  public function getDomain()
  {
    return $this->domain;
  }

  /**
   * Set position
   *
   * @param string $position
   * @return Ads
   */
  public function setPosition($position)
  {
    $this->position = $position;

    return $this;
  }

  /**
   * Get position
   *
   * @return string 
   */
  public function getPosition()
  {
    return $this->position;
  }

  /**
   * 
   * @return type
   */
  public function __toString()
  {
    return $this->domain;
  }


    /**
     * Set contents
     *
     * @param \Yit\AdsBundle\Entity\Content $contents
     * @return Ads
     */
    public function setContents(\Yit\AdsBundle\Entity\Content $contents = null)
    {
        $this->contents = $contents;
    
        return $this;
    }

    /**
     * Get contents
     *
     * @return \Yit\AdsBundle\Entity\Content 
     */
    public function getContents()
    {
        return $this->contents;
    }
}
