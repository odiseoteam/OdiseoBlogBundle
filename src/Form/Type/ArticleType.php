<?php

namespace Odiseo\BlogBundle\Form\Type;

use Odiseo\BlogBundle\Model\ArticleCategory;
use Sylius\Bundle\ResourceBundle\Form\EventSubscriber\AddCodeFormSubscriber;
use Sylius\Bundle\ResourceBundle\Form\Type\AbstractResourceType;
use Sylius\Bundle\ResourceBundle\Form\Type\ResourceTranslationsType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\FormBuilderInterface;

/**
 * @author Diego D'amico <diego@odiseo.com.ar>
 */
final class ArticleType extends AbstractResourceType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->addEventSubscriber(new AddCodeFormSubscriber(null, [
                'label' => 'odiseo_blog.form.article.code',
            ]))
            ->add('enabled', CheckboxType::class, [
                'label' => 'odiseo_blog.form.article.enabled',
                'required' => true,
            ])
            ->add('translations', ResourceTranslationsType::class, [
                'entry_type' => ArticleTranslationType::class,
                'label'    => 'odiseo_blog.form.article.translations',
            ])
            ->add('categories', EntityType::class, [
                'class' => ArticleCategory::class,
                'multiple' => true,
                'expanded' => true,
                'label'    => 'odiseo_blog.form.article.categories',
                'required' => false,
            ])
            ->add('images', CollectionType::class, [
                'entry_type' => ArticleImageType::class,
                'allow_add' => true,
                'allow_delete' => true,
                'by_reference' => false,
                'label' => 'odiseo_blog.form.article.images',
                'block_name' => 'entry',
                'required' => false,
            ])
        ;
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'odiseo_blog_article';
    }
}
