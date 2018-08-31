<?php

declare(strict_types=1);

namespace Odiseo\BlogBundle\Form\Type;

final class ArticleImageType extends ImageType
{
    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix(): string
    {
        return 'odiseo_blog_article_image';
    }
}
