<?php

namespace AppBundle\Form\Transformers;

use AppBundle\Entity\Tag;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Form\DataTransformerInterface;
use Symfony\Component\Form\Exception\TransformationFailedException;

class TagsTransformer implements DataTransformerInterface
{

    /**
     * @var ObjectManager
     */
    private $manager;

    public function __construct(ObjectManager $manager)
    {
        $this->manager = $manager;
    }

    public function transform($value)
    {
        return implode(', ', $value);
    }

    public function reverseTransform($value)
    {
        $tagNames = array_filter(array_unique(array_map('strtolower', array_map('trim', explode(',', $value)))));

        $oldTags = $this->manager->getRepository('AppBundle:Tag')->findBy([
            'name' => $tagNames
        ]);

        $newTags = array_diff($tagNames, $oldTags);

        foreach ($newTags as $newTag) {
            $tag = new Tag();
            $tag->setName($newTag);
            $oldTags[] = $tag;
        }

        return $oldTags;
    }
}