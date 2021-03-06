<?php
 
namespace Gallerie\AdminBundle\Entity;
 
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\UploadedFile;

 
/**
 * Gallerie\MediaBundle\Entity\PhotoMedia
 * @ORM\Entity
 * @ORM\Table(name="photomedia")
 * HasLifecycleCallbacks
 */
class PhotoMedia
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
     * @Assert\File(
     *     maxSize = "500M",
     *     mimeTypes = {"image/jpeg", "image/png", "image/gif"},
     *     mimeTypesMessage = "ce format d'image est inconnu",
     *     uploadIniSizeErrorMessage = "uploaded file is larger than the upload_max_filesize PHP.ini setting",
     *     uploadFormSizeErrorMessage = "uploaded file is larger than allowed by the HTML file input field",
     *     uploadErrorMessage = "uploaded file could not be uploaded for some unknown reason",
     *     maxSizeMessage = "fichier trop volumineux"
     * )
     */
    public $file;
 
    /**
     * @var string $libelle
     *
     * @ORM\Column(name="libelle", type="string", length=255)
     * @Assert\NotBlank
     * @Assert\Length(min="3", minMessage="La libelle doit contenir au moins {{ min }} caractères.")
     */
    private $libelle;
 
    /**
     * @var string $path
     *
     * @ORM\Column(name="path", type="string", length=255)
     */
    private $path;
 
    /**
     * @var text $description
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;
 
    /**
     * @var datetime $dateinsertion
     *
     * @ORM\Column(name="dateinsertion", type="datetime")
     */
    private $dateinsertion;
      /**
     * @var datetime $datemodif
     *
     * @ORM\Column(name="datemodification", type="datetime",nullable=true)
     */
    private $datemodif;
    
    /**
   * @ORM\ManyToMany(targetEntity="Gallerie\AdminBundle\Entity\SousParametre", cascade={"persist"})
   */
    private $sousparametres;
    
    
    public function __construct()
    {
        $this->dateinsertion = new \DateTime();
    }
     
     
    //les 4 fonctions suivantes sont pour le upload
    public function getAbsolutePath()
    {
        return null === $this->path ? null : $this->getUploadRootDir().'/'.$this->path;
    }
     
    public function getWebPath()
    {
        return null === $this->path ? null : $this->getUploadDir().'/'.$this->path;
    }
     
    protected function getUploadRootDir()
    {
        // the absolute directory path where uploaded documents should be saved
        return __DIR__.'/../../../../web/bundles/galleriemedia/'.$this->getUploadDir();
    }
     
    protected function getUploadDir()
    {
        // get rid of the __DIR__ so it doesn't screw when displaying uploaded doc/image in the view.
        return 'uploads/images';
    }
     
    // **** les 3 fonctions suivantes servent à gérer le callback et l'upload de file
    /**
     * @ORM\PrePersist()
     * @ORM\PreUpdate()
     */
    public function preUpload()
    {
        var_dump($this->file);
         
        if (null !== $this->file) {
            // do whatever you want to generate a unique name
            $this->path = uniqid().'.'.$this->file->guessExtension();
        }
    }
     
    /**
     * @ORM\PostPersist()
     * @ORM\PostUpdate()
     */
    public function upload()
    {
        if (null === $this->file) {
            return;
        }
          
        // ** on peut mettre ça si on veut faire que le nom corresponde au nom de l'image original
        //$this->setName($this->file->getClientOriginalName());
     
        // if there is an error when moving the file, an exception will
        // be automatically thrown by move(). This will properly prevent
        // the entity from being persisted to the database on error
        //$this->file->move($this->getUploadRootDir(), $this->path);
     $this->file->move($this->getUploadRootDir(), $this->file->getClientOriginalName());
     $this->path = $this->file->getClientOriginalName(); 
     $this->file = null;
    }
     
    /**
     * @ORM\PostRemove()
     */
    public function removeUpload()
    {
        if ($file = $this->getAbsolutePath()) {
            unlink($file);
        }
    }
 

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
     * Set libelle
     *
     * @param string $libelle
     * @return PhotoMedia
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;
    
        return $this;
    }

    /**
     * Get libelle
     *
     * @return string 
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set path
     *
     * @param string $path
     * @return PhotoMedia
     */
    public function setPath($path)
    {
        $this->path = $path;
    
        return $this;
    }

    /**
     * Get path
     *
     * @return string 
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return PhotoMedia
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
     * Set dateinsertion
     *
     * @param \DateTime $dateinsertion
     * @return PhotoMedia
     */
    public function setDateinsertion($dateinsertion)
    {
        $this->dateinsertion = $dateinsertion;
    
        return $this;
    }

    /**
     * Get dateinsertion
     *
     * @return \DateTime 
     */
    public function getDateinsertion()
    {
        return $this->dateinsertion;
    }

    /**
     * Set datemodif
     *
     * @param \DateTime $datemodif
     * @return PhotoMedia
     */
    public function setDatemodif($datemodif)
    {
        $this->datemodif = $datemodif;
    
        return $this;
    }

    /**
     * Get datemodif
     *
     * @return \DateTime 
     */
    public function getDatemodif()
    {
        return $this->datemodif;
    }

    /**
     * Add sousparametres
     *
     * @param \Gallerie\AdminBundle\Entity\SousParametre $sousparametres
     * @return PhotoMedia
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
     * RemoveAll sousparametres
     */
    public function removeAllSousparametre()
    {
        $this->sousparametres->clear();
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
}