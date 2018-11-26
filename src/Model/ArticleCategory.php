<?php

namespace Odiseo\BlogBundle\Model;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Sylius\Component\Resource\Model\TimestampableTrait;
use Sylius\Component\Resource\Model\ToggleableTrait;
use Sylius\Component\Resource\Model\TranslatableTrait;
use Sylius\Component\Resource\Model\TranslationInterface;

/**
 * @author Diego D'amico <diego@odiseo.com.ar>
 */
class ArticleCategory implements ArticleCategoryInterface
{
    use TimestampableTrait;
    use ToggleableTrait;

    use TranslatableTrait {
        __construct as private initializeTranslationsCollection;
        getTranslation as private doGetTranslation;
    }

    /**
     * @var mixed
     */
    protected $id;

    /**
     * @var string|null
     */
    protected $code;

    /**
     * @var Collection|ArticleInterface[]
     */
    protected $articles;

    public function __construct()
    {
        $this->initializeTranslationsCollection();
        $this->articles = new ArrayCollection();
        $this->createdAt = new \DateTime();
        $this->enabled = true;
    }

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
    public function getCode(): ?string
    {
        return $this->code;
    }

    /**
     * {@inheritdoc}
     */
    public function setCode(?string $code): void
    {
        $this->code = $code;
    }

    /**
     * {@inheritdoc}
     */
    public function getSlug()
    {
        return $this->getTranslation()->getSlug();
    }

    /**
     * {@inheritdoc}
     */
    public function getTitle()
    {
        return $this->getTranslation()->getTitle();
    }

    /**
     * {@inheritdoc}
     */
    public function addArticle(ArticleInterface $article)
    {
        if (!$this->hasArticle($article)) {
            $this->articles->add($article);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function removeArticle(ArticleInterface $article)
    {
        if ($this->hasArticle($article)) {
            $this->articles->removeElement($article);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function hasArticle(ArticleInterface $article)
    {
        return $this->articles->contains($article);
    }

    /**
     * {@inheritdoc}
     */
    public function getArticles()
    {
        return $this->articles;
    }

    /**
     * {@inheritdoc}
     */
    public function getTranslation(?string $locale = null): TranslationInterface
    {
        /** @var ArticleCategoryTranslationInterface $translation */
        $translation = $this->doGetTranslation($locale);

        return $translation;
    }

    /**
     * {@inheritdoc}
     */
    protected function createTranslation(): ArticleCategoryTranslation
    {
        return new ArticleCategoryTranslation();
    }

    public function __toString()
    {
        return empty($this->getId) ? '' : $this->getTitle();
    }
}
