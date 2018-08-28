<?php

namespace spec\Odiseo\BlogBundle\Model;

use Odiseo\BlogBundle\Model\ArticleTranslation;
use Odiseo\BlogBundle\Model\ArticleTranslationInterface;
use PhpSpec\ObjectBehavior;
use Sylius\Component\Resource\Model\ResourceInterface;
use Sylius\Component\Resource\Model\TranslationInterface;

/**
 * @author Diego D'amico <diego@odiseo.com.ar>
 */
class ArticleTranslationSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(ArticleTranslation::class);
    }

    function it_implements_article_translation_interface(): void
    {
        $this->shouldImplement(ArticleTranslationInterface::class);
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

    function it_has_no_content_by_default(): void
    {
        $this->getContent()->shouldReturn(null);
    }

    function it_allows_access_via_properties(): void
    {
        $this->setTitle('Article');
        $this->getTitle()->shouldReturn('Article');

        $this->setContent('Article content');
        $this->getContent()->shouldReturn('Article content');

        $this->setMetaKeywords('Article meta keywords');
        $this->getMetaKeywords()->shouldReturn('Article meta keywords');

        $this->setMetaDescription('Article meta description');
        $this->getMetaDescription()->shouldReturn('Article meta description');
    }
}
