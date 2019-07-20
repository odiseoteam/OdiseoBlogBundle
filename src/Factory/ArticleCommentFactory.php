<?php

namespace Odiseo\BlogBundle\Factory;

use Exception;
use Odiseo\BlogBundle\Doctrine\ORM\ArticleRepositoryInterface;
use Odiseo\BlogBundle\Model\ArticleCommentInterface;
use Odiseo\BlogBundle\Model\ArticleInterface;

final class ArticleCommentFactory implements ArticleCommentFactoryInterface
{
    /** @var string */
    private $className;

    /** @var ArticleRepositoryInterface */
    private $articleRepository;

    public function __construct(string $className, ArticleRepositoryInterface $articleRepository)
    {
        $this->className = $className;
        $this->articleRepository = $articleRepository;
    }

    /**
     * {@inheritdoc}
     */
    public function createNew()
    {
        return new $this->className();
    }

    /**
     * {@inheritdoc}
     */
    public function createNewWithArticle(string $id): ArticleCommentInterface
    {
        /** @var ArticleInterface $article */
        $article = $this->articleRepository->find($id);

        if (!$article instanceof ArticleInterface) {
            throw new Exception();
        }

        /** @var ArticleCommentInterface $articleComment */
        $articleComment = $this->createNew();
        $articleComment->setArticle($article);

        return $articleComment;
    }
}
