<?php

namespace spec\Odiseo\BlogBundle\Form\Type;

use Odiseo\BlogBundle\Model\ArticleCategory;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Sylius\Bundle\ResourceBundle\Form\EventSubscriber\AddCodeFormSubscriber;
use Sylius\Bundle\ResourceBundle\Form\Type\AbstractResourceType;
use Sylius\Bundle\ResourceBundle\Form\Type\ResourceTranslationsType;
use Sylius\Component\Registry\ServiceRegistryInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormFactoryInterface;

/**
 * @author Diego D'amico <diego@odiseo.com.ar>
 */
final class ArticleCategoryTypeSpec extends ObjectBehavior
{
    function let(ServiceRegistryInterface $rendererRegistry, ServiceRegistryInterface $dataFetcherRegistry)
    {
        $this->beConstructedWith(ArticleCategory::class, ['odiseo'], $rendererRegistry, $dataFetcherRegistry);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Odiseo\BlogBundle\Form\Type\ArticleCategoryType');
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

        $builder->add('enabled', CheckboxType::class, Argument::any())->shouldBeCalled()->willReturn($builder);
        $builder->add('translations', ResourceTranslationsType::class, Argument::any())->shouldBeCalled()->willReturn($builder);

        $builder
            ->addEventSubscriber(Argument::type(AddCodeFormSubscriber::class))
            ->shouldBeCalled()
            ->willReturn($builder)
        ;

        $this->buildForm($builder, []);
    }

    function it_has_block_prefix()
    {
        $this->getBlockPrefix()->shouldReturn('odiseo_blog_article_category');
    }
}
