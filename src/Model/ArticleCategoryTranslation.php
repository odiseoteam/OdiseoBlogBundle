<?php

namespace Odiseo\BlogBundle\Model;

use Sylius\Component\Resource\Model\AbstractTranslation;

/**
 * @author Diego D'amico <diego@odiseo.com.ar>
 */
class ArticleCategoryTranslation extends AbstractTranslation implements ArticleCategoryTranslationInterface
{
    /**
     * @var mixed
     */
    protected $id;

    /**
     * @var string
     */
    protected $slug;

    /**
     * @var string
     */
    protected $title;
    
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * {@inheritdoc}
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * {@inheritdoc}
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;
    }

    /**
     * {@inheritdoc}
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * {@inheritdoc}
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }
}
