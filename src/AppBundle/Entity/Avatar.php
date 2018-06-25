<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Image
 *
 * @ORM\Table(name="avatar")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AvatarRepository")
 * @ORM\HasLifecycleCallbacks
 */
class Avatar implements \Serializable
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
            $this->tempFileName = __DIR__ . '/../../../web/uploads/avatar/' . $this->id . '.' . $this->extension;
            $this->extension = null;
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
        $extension = $this->file->guessExtension();
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
        $this->file->move(__DIR__ . '/../../../web/uploads/avatar/', $name);
    }

    /**
     * @ORM\PreRemove
     */
    public function preRemoveUpload()
    {
        $this->tempFileName = __DIR__ . '/../../../web/uploads/avatar/' . $this->id . '.' . $this->extension;
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
     * @return Avatar
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

    public function __toString()
    {
        return $this->id . '.' . $this->extension;
    }

    /**
     * String representation of object
     * @link http://php.net/manual/en/serializable.serialize.php
     * @return string the string representation of the object or null
     * @since 5.1.0
     */
    public function serialize()
    {
        //
    }

    /**
     * Constructs the object
     * @link http://php.net/manual/en/serializable.unserialize.php
     * @param string $serialized <p>
     * The string representation of the object.
     * </p>
     * @return void
     * @since 5.1.0
     */
    public function unserialize($serialized)
    {
        //
    }
}
