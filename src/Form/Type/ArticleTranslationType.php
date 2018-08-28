<?php

namespace Odiseo\BlogBundle\Form\Type;

use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Sylius\Bundle\ResourceBundle\Form\Type\AbstractResourceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

/**
 * @author Diego D'amico <diego@odiseo.com.ar>
 */
class ArticleTranslationType extends AbstractResourceType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('slug', TextType::class, [
                'label' => 'odiseo_blog.form.article.slug',
                'required' => true,
            ])
            ->add('title', TextType::class, [
                'label' => 'odiseo_blog.form.article.title',
                'required' => true,
            ])
            ->add('content', CKEditorType::class, [
                'label' => 'odiseo_blog.form.article.content',
                'required' => true,
            ])
            ->add('metaKeywords', TextType::class, [
                'label' => 'odiseo_blog.form.article.metaKeywords',
                'required' => false,
            ])
            ->add('metaDescription', TextType::class, [
                'label' => 'odiseo_blog.form.article.metaDescription',
                'required' => false,
            ])
        ;
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'odiseo_blog_article_translation';
    }
}
