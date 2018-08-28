<?php

namespace spec\Odiseo\BlogBundle\Form\Type;

use Odiseo\BlogBundle\Model\Article;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Sylius\Bundle\ResourceBundle\Form\EventSubscriber\AddCodeFormSubscriber;
use Sylius\Bundle\ResourceBundle\Form\Type\AbstractResourceType;
use Sylius\Bundle\ResourceBundle\Form\Type\ResourceTranslationsType;
use Sylius\Component\Registry\ServiceRegistryInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormFactoryInterface;

/**
 * @author Diego D'amico <diego@odiseo.com.ar>
 */
final class ArticleTypeSpec extends ObjectBehavior
{
    function let(ServiceRegistryInterface $rendererRegistry, ServiceRegistryInterface $dataFetcherRegistry)
    {
        $this->beConstructedWith(Article::class, ['odiseo'], $rendererRegistry, $dataFetcherRegistry);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Odiseo\BlogBundle\Form\Type\ArticleType');
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

        /*$builder->add('title', TextType::class, Argument::any())->shouldBeCalled()->willReturn($builder);
        $builder->add('content', TextareaType::class, Argument::any())->shouldBeCalled()->willReturn($builder);*/
        $builder->add('enabled', CheckboxType::class, Argument::any())->shouldBeCalled()->willReturn($builder);
        $builder->add('translations', ResourceTranslationsType::class, Argument::any())->shouldBeCalled()->willReturn($builder);
        $builder->add('categories', EntityType::class, Argument::any())->shouldBeCalled()->willReturn($builder);

        $builder
            ->addEventSubscriber(Argument::type(AddCodeFormSubscriber::class))
            ->shouldBeCalled()
            ->willReturn($builder)
        ;

        $this->buildForm($builder, []);
    }

    function it_has_block_prefix()
    {
        $this->getBlockPrefix()->shouldReturn('odiseo_blog_article');
    }
}
