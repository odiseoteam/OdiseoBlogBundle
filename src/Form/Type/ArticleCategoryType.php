<?php

namespace Odiseo\BlogBundle\Form\Type;

use Sylius\Bundle\ResourceBundle\Form\EventSubscriber\AddCodeFormSubscriber;
use Sylius\Bundle\ResourceBundle\Form\Type\AbstractResourceType;
use Sylius\Bundle\ResourceBundle\Form\Type\ResourceTranslationsType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\FormBuilderInterface;

/**
 * @author Diego D'amico <diego@odiseo.com.ar>
 */
class ArticleCategoryType extends AbstractResourceType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->addEventSubscriber(new AddCodeFormSubscriber(null, [
                'label' => 'odiseo_blog.form.article_category.code',
            ]))
            ->add('enabled', CheckboxType::class, [
                'label' => 'odiseo_blog.form.article_category.enabled',
                'required' => true,
            ])
            ->add('translations', ResourceTranslationsType::class, [
                'entry_type' => ArticleCategoryTranslationType::class,
                'label'    => 'odiseo_blog.form.article_category.translations',
            ])
        ;
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'odiseo_blog_article_category';
    }
}
