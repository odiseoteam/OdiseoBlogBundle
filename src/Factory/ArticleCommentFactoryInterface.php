<?php

namespace Odiseo\BlogBundle\Factory;

use Exception;
use Odiseo\BlogBundle\Model\ArticleCommentInterface;
use Sylius\Component\Resource\Factory\FactoryInterface;

interface ArticleCommentFactoryInterface extends FactoryInterface
{
    /**
     * @param string $id
     * @return ArticleCommentInterface
     * @throws Exception
     */
    public function createNewWithArticle(string $id): ArticleCommentInterface;
}
