<?php

namespace Gallerie\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SousParametre
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class SousParametre
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
     *
     * @ORM\ManyToOne(targetEntity="Gallerie\AdminBundle\Entity\Parametre",inversedBy="sousparametres")
     */
    private $parametre;

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
     * @return SousParametre
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
     * Set parametre
     *
     * @param \Gallerie\AdminBundle\Entity\Parametre $parametre
     * @return SousParametre
     */
    public function setParametre(\Gallerie\AdminBundle\Entity\Parametre $parametre = null)
    {
        $this->parametre = $parametre;
    
        return $this;
    }

    /**
     * Get parametre
     *
     * @return \Gallerie\AdminBundle\Entity\Parametre 
     */
    public function getParametre()
    {
        return $this->parametre;
    }
     public function __toString()
    {
      return $this->getName();
    }
}