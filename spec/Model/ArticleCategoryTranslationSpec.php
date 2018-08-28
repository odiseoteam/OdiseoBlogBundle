<?php

namespace spec\Odiseo\BlogBundle\Model;

use Odiseo\BlogBundle\Model\ArticleCategoryTranslation;
use Odiseo\BlogBundle\Model\ArticleCategoryTranslationInterface;
use PhpSpec\ObjectBehavior;
use Sylius\Component\Resource\Model\ResourceInterface;
use Sylius\Component\Resource\Model\TranslationInterface;

/**
 * @author Diego D'amico <diego@odiseo.com.ar>
 */
class ArticleCategoryTranslationSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(ArticleCategoryTranslation::class);
    }

    function it_implements_article_category_translation_interface(): void
    {
        $this->shouldImplement(ArticleCategoryTranslationInterface::class);
    }

    function it_implements_resource_interface(): void
    {
        $this->shouldImplement(ResourceInterface::class);
    }

    function it_implements_translation_interface(): void
    {
        $this->shouldImplement(TranslationInterface::class);
    }

    function it_has_no_id_by_default(): void
    {
        $this->getId()->shouldReturn(null);
    }

    function it_has_no_title_by_default(): void
    {
        $this->getTitle()->shouldReturn(null);
    }

    function it_allows_access_via_properties(): void
    {
        $this->setTitle('Article');
        $this->getTitle()->shouldReturn('Article');
    }
}
