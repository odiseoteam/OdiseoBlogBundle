<?php

namespace Odiseo\BlogBundle\Form\Type;

use Sylius\Bundle\ResourceBundle\Form\Type\AbstractResourceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

/**
 * @author Diego D'amico <diego@odiseo.com.ar>
 */
final class ArticleCategoryTranslationType extends AbstractResourceType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('slug', TextType::class, [
                'label' => 'odiseo_blog.form.article_category.slug',
                'required' => true,
            ])
            ->add('title', TextType::class, [
                'label' => 'odiseo_blog.form.article_category.title',
                'required' => true,
            ])
        ;
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'odiseo_blog_article_category_translation';
    }
}
