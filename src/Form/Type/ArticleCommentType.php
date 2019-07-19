<?php

declare(strict_types=1);

namespace Odiseo\BlogBundle\Form\Type;

use Sylius\Bundle\ResourceBundle\Form\Type\AbstractResourceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Validator\Constraints;
use Symfony\Component\Form\FormBuilderInterface;

final class ArticleCommentType extends AbstractResourceType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class, [
                'required' => true,
                'label' => 'odiseo_blog.form.name',
            ])
            ->add('email', EmailType::class, [
                'required' => true,
                'constraints' => [
                    new Constraints\Email()
                ],
                'label' => 'odiseo_blog.form.email',
            ])
            ->add('comment', TextareaType::class, [
                'required' => true,
                'constraints' => array(
                    new Constraints\NotBlank()
                ),
                'label' => 'odiseo_blog.form.comment',
            ])
            ->add('enabled', CheckboxType::class, [
                'label' => 'odiseo_blog.form.enabled'
            ])
        ;
    }
    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix(): string
    {
        return 'odiseo_blog_article_comment';
    }
}
