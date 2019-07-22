<?php

namespace Odiseo\BlogBundle\Factory;

use Exception;
use Odiseo\BlogBundle\Doctrine\ORM\ArticleRepositoryInterface;
use Odiseo\BlogBundle\Model\ArticleCommentInterface;
use Odiseo\BlogBundle\Model\ArticleInterface;
use Sylius\Component\Resource\Repository\RepositoryInterface;

final class ArticleCommentFactory implements ArticleCommentFactoryInterface
{
    /** @var string */
    private $className;

    /** @var ArticleRepositoryInterface */
    private $articleRepository;

    /** @var RepositoryInterface */
    private $articleCommentRepository;

    public function __construct(
        string $className,
        ArticleRepositoryInterface $articleRepository,
        RepositoryInterface $articleCommentRepository
    )
    {
        $this->className = $className;
        $this->articleRepository = $articleRepository;
        $this->articleCommentRepository = $articleCommentRepository;
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
    public function createNewWithArticleOrComment(string $articleId, string $commentId = null): ArticleCommentInterface
    {
        /** @var ArticleCommentInterface $articleComment */
        $articleComment = $this->createNew();

        if ($commentId) {
            /** @var ArticleCommentInterface $comment */
            $comment = $this->articleCommentRepository->find($commentId);
            if ($comment) {
                $articleComment->setParent($comment);
            }
        } else {
            /** @var ArticleInterface $article */
            $article = $this->articleRepository->find($articleId);

            if (!$article instanceof ArticleInterface) {
                throw new Exception();
            }

            $articleComment->setArticle($article);
        }

        return $articleComment;
    }
}
