<?php
 
namespace Gallerie\AdminBundle\Entity;
 
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\UploadedFile;

 
/**
 * Gallerie\MediaBundle\Entity\Image
 * @ORM\Entity
 * @ORM\Table(name="photo")
 */
class Image
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
     * @var string $path
     *
     * @ORM\Column(name="path", type="string", length=255)
     */
    private $path;
 
   
   /**
     *
     * @ORM\ManyToOne(targetEntity="Gallerie\AdminBundle\Entity\Test",inversedBy="files")
     */
    private $album;
 
 
     
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
     * Set album
     *
     * @param \Gallerie\AdminBundle\Entity\Test $album
     * @return Image
     */
    public function setAlbum(\Gallerie\AdminBundle\Entity\Test $album = null)
    {
        $this->album = $album;
    
        return $this;
    }

    /**
     * Get album
     *
     * @return \Gallerie\AdminBundle\Entity\Test 
     */
    public function getAlbum()
    {
        return $this->album;
    }
}