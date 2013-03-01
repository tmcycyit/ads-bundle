<?php

namespace Yit\AdsBundle\Twig\Extension;

use Symfony\Component\Routing\RouteCollection;

class AdsExtension extends \Twig_Extension
{

  /**
   *
   * @var \Doctrine\ORM\EntityManager
   */
  protected $em;

  public function setEntityManager(\Doctrine\ORM\EntityManager $em = null)
  {
    $this->em = $em;
  }

  public function __construct()
  {
    
  }

  /**
   * {@inheritdoc}
   */
  public function getFunctions()
  {
    return array(
        'ad_show' => new \Twig_Function_Method($this, 'ad', array('is_safe' => array('html'))),
    );
  }

  public function ad($domain, $position)
  {
    $ad = $this->em->getRepository('YitAdsBundle:Ads')->findOneBy(array('domain' => $domain, 'position' => $position));

    if ($ad)
    {
      return $ad->getContents()->getContent();
    }

    return '';
  }

  public function getName()
  {
    return 'ads';
  }

}
