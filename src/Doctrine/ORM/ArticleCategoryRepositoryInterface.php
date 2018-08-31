<?php

namespace Odiseo\BlogBundle\Doctrine\ORM;

use Doctrine\Common\Collections\Collection;
use Odiseo\BlogBundle\Model\ArticleCategoryInterface;
use Sylius\Component\Resource\Repository\RepositoryInterface;

/**
 * @author Diego D'amico <diego@odiseo.com.ar>
 */
interface ArticleCategoryRepositoryInterface extends RepositoryInterface
{
    /**
     * @return array|ArticleCategoryInterface[]
     */
    public function findEnabled(): array;
}
