<?php

namespace Odiseo\BlogBundle\Model;

use Sylius\Component\Resource\Model\ResourceInterface;
use Sylius\Component\Resource\Model\TranslationInterface;

/**
 * @author Diego D'amico <diego@odiseo.com.ar>
 */
interface ArticleCategoryTranslationInterface extends ResourceInterface, TranslationInterface
{
    /**
     * @return string
     */
    public function getSlug();

    /**
     * @param string $slug
     */
    public function setSlug($slug);

    /**
     * @return string
     */
    public function getTitle();

    /**
     * @param string $title
     */
    public function setTitle($title);
}
