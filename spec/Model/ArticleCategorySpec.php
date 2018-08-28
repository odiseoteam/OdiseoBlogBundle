<?php

namespace spec\Odiseo\BlogBundle\Model;

use Odiseo\BlogBundle\Model\ArticleCategory;
use Odiseo\BlogBundle\Model\ArticleCategoryInterface;
use PhpSpec\ObjectBehavior;
use Sylius\Component\Resource\Model\CodeAwareInterface;
use Sylius\Component\Resource\Model\ResourceInterface;
use Sylius\Component\Resource\Model\TimestampableInterface;
use Sylius\Component\Resource\Model\TranslatableInterface;

/**
 * @author Diego D'amico <diego@odiseo.com.ar>
 */
class ArticleCategorySpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(ArticleCategory::class);
    }

    function it_implements_article_category_interface(): void
    {
        $this->shouldImplement(ArticleCategoryInterface::class);
    }

    function it_implements_resource_interface(): void
    {
        $this->shouldImplement(ResourceInterface::class);
    }

    function it_implements_code_aware_interface(): void
    {
        $this->shouldImplement(CodeAwareInterface::class);
    }

    function it_implements_timestamplable_interface(): void
    {
        $this->shouldImplement(TimestampableInterface::class);
    }

    function it_implements_translatable_interface(): void
    {
        $this->shouldImplement(TranslatableInterface::class);
    }

    function it_has_no_id_by_default(): void
    {
        $this->getId()->shouldReturn(null);
    }

    function it_has_no_code_by_default(): void
    {
        $this->getCode()->shouldReturn(null);
    }

    function it_is_timestampable(): void
    {
        $dateTime = new \DateTime();
        $this->setCreatedAt($dateTime);
        $this->getCreatedAt()->shouldReturn($dateTime);
        $this->setUpdatedAt($dateTime);
        $this->getUpdatedAt()->shouldReturn($dateTime);
    }

    function it_allows_access_via_properties(): void
    {
        $this->setCode('article');
        $this->getCode()->shouldReturn('article');
    }
}
