<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Image
 *
 * @ORM\Table(name="image")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ImageRepository")
 * @ORM\HasLifecycleCallbacks
 */
class Image
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="extension", type="string", length=255)
     */
    private $extension;

    /**
     * @var string
     *
     * @ORM\Column(name="alt", type="string", length=255)
     */
    private $alt;

    /**
     * @Assert\Image(
     *  mimeTypes={"image/png","image/jpg","image/jpeg","image/gif"},
     *  mimeTypesMessage="Seul les images valides sont acceptées"
     * )
     */
    private $file;

    private $tempFileName;

    public function setAttachment(UploadedFile $file)
    {
        $this->file = $file;
        if ($this->extension !== null) {
            $this->tempFileName = __DIR__ . '/../../../web/uploads/img/' . $this->id . '.' . $this->extension;
            $this->extension = null;
            $this->alt = null;
        }
    }

    public function getAttachment()
    {
        return $this->file;
    }

    /**
     * @ORM\PrePersist
     * @ORM\PreUpdate
     */
    public function preUpload()
    {
        $alt = $this->file->getClientOriginalName();
        $extension = $this->file->guessExtension();
        $this->setAlt($alt);
        $this->setExtension($extension);
    }

    /**
     * @ORM\PostPersist
     * @ORM\PostUpdate
     */
    public function postUpload()
    {
        if ($this->tempFileName !== null) {
            $oldFileName = $this->tempFileName;
            if (file_exists($oldFileName)) {
                unlink($oldFileName);
            }
        }
        $name = $this->id . '.' . $this->extension;
        $this->file->move(__DIR__ . '/../../../web/uploads/img/', $name);
    }

    /**
     * @ORM\PreRemove
     */
    public function preRemoveUpload()
    {
        $this->tempFileName = __DIR__ . '/../../../web/uploads/img/' . $this->id . '.' . $this->extension;
    }

    /**
     * @ORM\PostRemove
     */
    public function postRemoveUpload()
    {
        if (file_exists($this->tempFileName)) {
            $fileToDelete = $this->tempFileName;
            unlink($fileToDelete);
        }
    }

    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set extension.
     *
     * @param string $extension
     *
     * @return Image
     */
    public function setExtension($extension)
    {
        $this->extension = $extension;
        return $this;
    }

    /**
     * Get extension.
     *
     * @return string
     */
    public function getExtension()
    {
        return $this->extension;
    }

    /**
     * Set alt.
     *
     * @param string $alt
     *
     * @return Image
     */
    public function setAlt($alt)
    {
        $this->alt = $alt;

        return $this;
    }

    /**
     * Get alt.
     *
     * @return string
     */
    public function getAlt()
    {
        return $this->alt;
    }

}
