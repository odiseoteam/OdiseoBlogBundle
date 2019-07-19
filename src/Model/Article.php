<?php

namespace Odiseo\BlogBundle\Model;

use DateTime;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Sylius\Component\Resource\Model\ArchivableTrait;
use Sylius\Component\Resource\Model\TimestampableTrait;
use Sylius\Component\Resource\Model\ToggleableTrait;
use Sylius\Component\Resource\Model\TranslatableTrait;
use Sylius\Component\Resource\Model\TranslationInterface;

/**
 * @author Diego D'amico <diego@odiseo.com.ar>
 */
class Article implements ArticleInterface
{
    use TimestampableTrait;
    use ToggleableTrait;
    use ArchivableTrait;

    use TranslatableTrait {
        __construct as private initializeTranslationsCollection;
        getTranslation as private doGetTranslation;
    }

    /** @var mixed */
    protected $id;

    /** @var string|null */
    protected $code;

    /** @var Collection|ArticleCategoryInterface[] */
    protected $categories;

    /** @var Collection|ImageInterface[] */
    protected $images;

    /** @var Collection|ArticleCommentInterface[] */
    protected $comments;

    public function __construct()
    {
        $this->initializeTranslationsCollection();
        $this->categories = new ArrayCollection();
        $this->images = new ArrayCollection();
        $this->comments = new ArrayCollection();
        $this->createdAt = new DateTime();
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
    public function getContent()
    {
        return $this->getTranslation()->getContent();
    }

    /**
     * {@inheritdoc}
     */
    public function getMetaKeywords()
    {
        return $this->getTranslation()->getMetaKeywords();
    }

    /**
     * {@inheritdoc}
     */
    public function getMetaDescription()
    {
        return $this->getTranslation()->getMetaDescription();
    }

    /**
     * {@inheritdoc}
     */
    public function addCategory(ArticleCategoryInterface $category)
    {
        if (!$this->hasCategory($category)) {
            $category->addArticle($this);
            $this->categories->add($category);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function removeCategory(ArticleCategoryInterface $category)
    {
        if ($this->hasCategory($category)) {
            $this->categories->removeElement($category);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function hasCategory(ArticleCategoryInterface $category)
    {
        return $this->categories->contains($category);
    }

    /**
     * {@inheritdoc}
     */
    public function getCategories()
    {
        return $this->categories;
    }

    /**
     * {@inheritdoc}
     */
    public function getImages(): Collection
    {
        return $this->images;
    }

    /**
     * {@inheritdoc}
     */
    public function getImagesByType(string $type): Collection
    {
        return $this->images->filter(function (ImageInterface $image) use ($type): bool {
            return $type === $image->getType();
        });
    }

    /**
     * {@inheritdoc}
     */
    public function hasImages(): bool
    {
        return !$this->images->isEmpty();
    }

    /**
     * {@inheritdoc}
     */
    public function hasImage(ImageInterface $image): bool
    {
        return $this->images->contains($image);
    }

    /**
     * {@inheritdoc}
     */
    public function addImage(ImageInterface $image): void
    {
        $image->setOwner($this);
        $this->images->add($image);
    }

    /**
     * {@inheritdoc}
     */
    public function removeImage(ImageInterface $image): void
    {
        if ($this->hasImage($image)) {
            $image->setOwner(null);
            $this->images->removeElement($image);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getComments(): Collection
    {
        return $this->comments;
    }

    /**
     * {@inheritdoc}
     */
    public function getEnabledComments(): Collection
    {
        return $this->comments->filter(function(ArticleCommentInterface $comment) {
            return $comment->isEnabled() && !$comment->getParent();
        });
    }

    /**
     * {@inheritdoc}
     */
    public function setComments(Collection $comments): void
    {
        $this->comments = $comments;
    }

    /**
     * {@inheritdoc}
     */
    public function hasComment(ArticleCommentInterface $comment): bool
    {
        return $this->comments->contains($comment);
    }

    /**
     * {@inheritdoc}
     */
    public function addComment(ArticleCommentInterface $comment): void
    {
        if (!$this->hasComment($comment)) {
            $this->comments->add($comment);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function removeComment(ArticleCommentInterface $comment): void
    {
        if ($this->hasComment($comment)) {
            $this->comments->removeElement($comment);
        }
    }

    /**
     * {@inheritdoc}
     * @return ArticleTranslation
     */
    public function getTranslation(?string $locale = null): TranslationInterface
    {
        /** @var ArticleTranslation $translation */
        $translation = $this->doGetTranslation($locale);

        return $translation;
    }

    /**
     * {@inheritdoc}
     */
    protected function createTranslation(): ArticleTranslation
    {
        return new ArticleTranslation();
    }
}
