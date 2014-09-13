<?php

namespace Gallerie\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * Test
 *
 * @ORM\Table()
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks
 */
class Test
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
  
    public $files = array();
 /**
     * @var array $images
     *
     * @ORM\Column(name="images", type="array",nullable=true)
     */
 protected $images;    
   
  

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateinsertion", type="datetime")
     */
    private $dateinsertion;
      /**
     * @var integer
     *
     * @ORM\Column(name="insertingkey", type="integer")
     */
  private $insertingKey; 
    
    
  public function __construct()
    {
      
        $this->dateinsertion = new \DateTime();
      
    }
    
      public function getImagesWithAbsolutePath()
    {
        if (!empty($this->images)) {
            $images = array();
            foreach ($this->images as $image) {
                $images[$image] = $this->getUploadRootDir() . '/' . $image;
            }
 
            return $images;
        }
 
        return null;
    }
 
    public function getImagesWithRelativePath()
    {
        if (!empty($this->images)) {
            $images = array();
            foreach ($this->images as $image) {
                $images[$image] = '/' . $this->getUploadDir() . '/' . $image;
            }
 
            return $images;
        }
 
        return null;
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
    
      /**
      * @ORM\PrePersist()
     * @ORM\PreUpdate()
     */
public function preUpload()
{
    if (!empty($this->files)) {
       var_dump($this->files);
        
        foreach ($this->files as $file) {
            $this->setInsertingKey(3);
             $imageName = uniqid('entity_') . '_' . date('Y-m-d_H:i') .  '.' . $file->guessExtension();
           
            if ($this->images === null) {
                 
                $this->images = new ArrayCollection();
                
            }
            $this->images->add($imageName);
        }
        
    } 
      
 
   
}
 
    /**
     * @ORM\PostPersist()
     * @ORM\PostUpdate()
     */
    public function upload()
    {
        
        if (empty($this->files)) {
            return ;
        }
 // $this->setInsertingKey(3);
        foreach ($this->files as $key => $file) {
            $file->move($this->getUploadRootDir(), $this->images[ $key ]);
        }
        return $this->files;
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
     * Set images
     *
     * @param array $images
     * @return Test
     */
    public function setImages($images)
    {
        $this->images = $images;
    
        return $this;
    }

    /**
     * Get images
     *
     * @return array 
     */
    public function getImages()
    {
        return $this->images;
    }

    /**
     * Set dateinsertion
     *
     * @param \DateTime $dateinsertion
     * @return Test
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
     * Set insertingKey
     *
     * @param integer $insertingKey
     * @return Test
     */
    public function setInsertingKey($insertingKey)
    {
        $this->insertingKey = $insertingKey;
    
        return $this;
    }

    /**
     * Get insertingKey
     *
     * @return integer 
     */
    public function getInsertingKey()
    {
        return $this->insertingKey;
    }
}