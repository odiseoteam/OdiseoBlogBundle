<?php

namespace Odiseo\BlogBundle\Doctrine\ORM;

use Doctrine\Common\Collections\Collection;
use Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository;

/**
 * @author Diego D'amico <diego@odiseo.com.ar>
 */
class ArticleCategoryRepository extends EntityRepository implements ArticleCategoryRepositoryInterface
{
    /**
     * @inheritdoc
     */
    public function findEnabled(): Collection
    {
        return $this->createQueryBuilder('o')
            ->addSelect('translation')
            ->innerJoin('o.translations', 'translation')
            ->andWhere('o.enabled = :enabled')
            ->setParameter('enabled', true)
            ->getQuery()
            ->getResult()
        ;
    }
}
