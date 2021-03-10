<?php

namespace Odiseo\BlogBundle\Factory;

use Exception;
use Odiseo\BlogBundle\Model\ArticleCommentInterface;
use Sylius\Component\Resource\Factory\FactoryInterface;

interface ArticleCommentFactoryInterface extends FactoryInterface
{
    /**
     * @param string $articleId
     * @param string|null $commentId
     * @return ArticleCommentInterface
     * @throws Exception
     */
    public function createNewWithArticleOrComment(string $articleId, ?string $commentId): ArticleCommentInterface;
}
