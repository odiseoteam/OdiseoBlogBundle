<?php

declare(strict_types=1);

namespace Odiseo\BlogBundle\EventListener;

use Odiseo\BlogBundle\Model\ArticleInterface;
use Odiseo\BlogBundle\Model\ImageInterface;
use Odiseo\BlogBundle\Uploader\ImageUploaderInterface;
use Sylius\Bundle\ResourceBundle\Event\ResourceControllerEvent;
use Webmozart\Assert\Assert;

final class ArticleImageUploadListener
{
    /** @var ImageUploaderInterface */
    private $uploader;

    public function __construct(ImageUploaderInterface $uploader)
    {
        $this->uploader = $uploader;
    }

    public function uploadImages(ResourceControllerEvent $event): void
    {
        $article = $event->getSubject();

        Assert::isInstanceOf($article, ArticleInterface::class);

        $images = $article->getImages();

        /** @var ImageInterface $image */
        foreach ($images as $image) {
            if (null !== $image && true === $image->hasFile()) {
                $this->uploader->upload($image);
            }
        }
    }
}
