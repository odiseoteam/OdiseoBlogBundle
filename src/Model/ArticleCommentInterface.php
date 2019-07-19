<?php

declare(strict_types=1);

namespace Odiseo\BlogBundle\Model;

use Sylius\Component\Resource\Model\ResourceInterface;
use Sylius\Component\Resource\Model\ToggleableInterface;
use Sylius\Component\Resource\Model\TimestampableInterface;

/**
 * @author Diego D'amico <diego@odiseo.com.ar>
 */
interface ArticleCommentInterface extends ResourceInterface, ToggleableInterface, TimestampableInterface
{
    /**
     * @return string|null
     */
    public function getComment(): ?string;

    /**
     * @param string|null $comment
     */
    public function setComment(?string $comment): void;

    /**
     * @return string|null
     */
    public function getName(): ?string;

    /**
     * @param string|null $name
     */
    public function setName(?string $name): void;

    /**
     * @return string|null
     */
    public function getEmail(): ?string;

    /**
     * @param string|null $email
     */
    public function setEmail(?string $email): void;

    /**
     * @return ArticleInterface|null
     */
    public function getArticle(): ?ArticleInterface;

    /**
     * @param ArticleInterface|null $article
     */
    public function setArticle(?ArticleInterface $article): void;

    /**
     * @return array|iterable
     */
    public function getChildren(): iterable;

    /**
     * @return array|iterable
     */
    public function getEnabledChildren(): iterable;

    /**
     * @param ArticleCommentInterface $comment
     * @return bool
     */
    public function hasChildren(ArticleCommentInterface $comment): bool;

    /**
     * @param ArticleCommentInterface $comment
     */
    public function addChildren(ArticleCommentInterface $comment): void;

    /**
     * @param ArticleCommentInterface $comment
     */
    public function removeChildren(ArticleCommentInterface $comment): void;

    /**
     * @return ArticleCommentInterface|null
     */
    public function getParent(): ?ArticleCommentInterface;

    /**
     * @param ArticleCommentInterface|null $parent
     */
    public function setParent(?ArticleCommentInterface $parent): void;
}
