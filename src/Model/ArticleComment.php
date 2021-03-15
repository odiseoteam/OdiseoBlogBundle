<?php

declare(strict_types=1);

namespace Odiseo\BlogBundle\Model;

use DateTime;
use Doctrine\Common\Collections\ArrayCollection;
use Sylius\Component\Resource\Model\TimestampableTrait;
use Sylius\Component\Resource\Model\ToggleableTrait;

/**
 * @author Diego D'amico <diego@odiseo.com.ar>
 */
class ArticleComment implements ArticleCommentInterface
{
    use TimestampableTrait;
    use ToggleableTrait;

    /** @var integer */
    protected $id;

    /** @var string|null */
    protected $comment;

    /** @var string|null */
    protected $name;

    /** @var string|null */
    protected $email;

    /** @var ArticleInterface|null */
    protected $article;

    /** @var ArrayCollection|ArticleCommentInterface[]  */
    protected $children;

    /** @var ArticleCommentInterface|null */
    protected $parent;

    public function __construct()
    {
        $this->enabled = false;
        $this->children = new ArrayCollection();
        $this->createdAt = new DateTime();
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
    public function getComment(): ?string
    {
        return $this->comment;
    }

    /**
     * {@inheritdoc}
     */
    public function setComment(?string $comment): void
    {
        $this->comment = $comment;
    }

    /**
     * {@inheritdoc}
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * {@inheritdoc}
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    /**
     * {@inheritdoc}
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * {@inheritdoc}
     */
    public function setEmail(?string $email): void
    {
        $this->email = $email;
    }

    /**
     * {@inheritdoc}
     */
    public function getArticle(): ?ArticleInterface
    {
        return $this->article;
    }

    /**
     * {@inheritdoc}
     */
    public function setArticle(?ArticleInterface $article): void
    {
        $this->article = $article;
    }

    /**
     * {@inheritdoc}
     */
    public function getChildren(): iterable
    {
        return $this->children;
    }

    /**
     * {@inheritdoc}
     */
    public function getEnabledChildren(): iterable
    {
        return $this->children->filter(function(ArticleCommentInterface $comment) {
            return $comment->isEnabled();
        });
    }

    /**
     * {@inheritdoc}
     */
    public function hasChildren(ArticleCommentInterface $comment): bool
    {
        return $this->children->contains($comment);
    }

    /**
     * {@inheritdoc}
     */
    public function addChildren(ArticleCommentInterface $comment): void
    {
        if (!$this->hasChildren($comment)) {
            $comment->setParent($this);
            $this->children->add($comment);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function removeChildren(ArticleCommentInterface $comment): void
    {
        if ($this->hasChildren($comment)) {
            $this->children->removeElement($comment);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getParent(): ?ArticleCommentInterface
    {
        return $this->parent;
    }

    /**
     * {@inheritdoc}
     */
    public function setParent(?ArticleCommentInterface $parent): void
    {
        $this->parent = $parent;
    }
}
