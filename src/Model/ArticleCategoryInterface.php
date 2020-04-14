<?php

namespace Odiseo\BlogBundle\Model;

use Doctrine\Common\Collections\Collection;
use Sylius\Component\Resource\Model\CodeAwareInterface;
use Sylius\Component\Resource\Model\ResourceInterface;
use Sylius\Component\Resource\Model\TimestampableInterface;
use Sylius\Component\Resource\Model\ToggleableInterface;
use Sylius\Component\Resource\Model\TranslatableInterface;
use Sylius\Component\Resource\Model\TranslationInterface;

/**
 * @author Diego D'amico <diego@odiseo.com.ar>
 */
interface ArticleCategoryInterface extends
    ResourceInterface,
    CodeAwareInterface,
    TimestampableInterface,
    ToggleableInterface,
    TranslatableInterface
{
    /**
     * @param string $slug
     */
    public function setSlug(string $slug): void;

    /**
     * @return string
     */
    public function getSlug();

    /**
     * @param string $title
     */
    public function setTitle(string $title): void;

    /**
     * @return string
     */
    public function getTitle();

    /**
     * @param ArticleInterface $article
     */
    public function addArticle(ArticleInterface $article);

    /**
     * @param ArticleInterface $article
     */
    public function removeArticle(ArticleInterface $article);

    /**
     * @param ArticleInterface $article
     */
    public function hasArticle(ArticleInterface $article);

    /**
     * @return Collection|ArticleInterface
     */
    public function getArticles();

    /**
     * @param string|null $locale
     *
     * @return ArticleCategoryTranslationInterface
     */
    public function getTranslation(?string $locale = null): TranslationInterface;
}
