<?php

namespace Gallerie\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Parametre
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Parametre
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
* @ORM\OneToMany(targetEntity="Gallerie\AdminBundle\Entity\SousParametre",
mappedBy="parametre")
    
    */
 private $sousparametres;

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
     * @return Parametre
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
     * Constructor
     */
    public function __construct()
    {
        $this->sousparametres = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add sousparametres
     *
     * @param \Gallerie\AdminBundle\Entity\SousParametre $sousparametres
     * @return Parametre
     */
    public function addSousparametre(\Gallerie\AdminBundle\Entity\SousParametre $sousparametres)
    {
        $this->sousparametres[] = $sousparametres;
    
        return $this;
    }

    /**
     * Remove sousparametres
     *
     * @param \Gallerie\AdminBundle\Entity\SousParametre $sousparametres
     */
    public function removeSousparametre(\Gallerie\AdminBundle\Entity\SousParametre $sousparametres)
    {
        $this->sousparametres->removeElement($sousparametres);
    }

    /**
     * Get sousparametres
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSousparametres()
    {
        return $this->sousparametres;
    }
    public function __toString()
    {
      return $this->getName();
    }
}