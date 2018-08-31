<?php

declare(strict_types=1);

namespace Odiseo\BlogBundle\Uploader;

use Odiseo\BlogBundle\Model\ImageInterface;

interface ImageUploaderInterface
{
    /**
     * @param ImageInterface $image
     */
    public function upload(ImageInterface $image): void;

    /**
     * @param string $path
     *
     * @return bool
     */
    public function remove(string $path): bool;
}
