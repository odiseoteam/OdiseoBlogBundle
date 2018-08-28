<?php

namespace spec\Odiseo\BlogBundle\Form\Type;

use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Odiseo\BlogBundle\Model\ArticleTranslation;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Sylius\Bundle\ResourceBundle\Form\Type\AbstractResourceType;
use Sylius\Component\Registry\ServiceRegistryInterface;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormFactoryInterface;

/**
 * @author Diego D'amico <diego@odiseo.com.ar>
 */
final class ArticleTranslationTypeSpec extends ObjectBehavior
{
    function let(ServiceRegistryInterface $rendererRegistry, ServiceRegistryInterface $dataFetcherRegistry)
    {
        $this->beConstructedWith(ArticleTranslation::class, ['odiseo'], $rendererRegistry, $dataFetcherRegistry);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Odiseo\BlogBundle\Form\Type\ArticleTranslationType');
    }

    function it_should_be_abstract_resource_type_object()
    {
        $this->shouldHaveType(AbstractResourceType::class);
    }

    function it_build_form_with_proper_fields(
        FormBuilderInterface $builder,
        FormFactoryInterface $factory
    ) {
        $builder->getFormFactory()->willReturn($factory);

        $builder->add('slug', TextType::class, Argument::any())->shouldBeCalled()->willReturn($builder);
        $builder->add('title', TextType::class, Argument::any())->shouldBeCalled()->willReturn($builder);
        $builder->add('content', CKEditorType::class, Argument::any())->shouldBeCalled()->willReturn($builder);
        $builder->add('metaKeywords', TextType::class, Argument::any())->shouldBeCalled()->willReturn($builder);
        $builder->add('metaDescription', TextType::class, Argument::any())->shouldBeCalled()->willReturn($builder);

        $this->buildForm($builder, []);
    }

    function it_has_block_prefix()
    {
        $this->getBlockPrefix()->shouldReturn('odiseo_blog_article_translation');
    }
}
