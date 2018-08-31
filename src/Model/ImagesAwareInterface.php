<?php

declare(strict_types=1);

namespace Odiseo\BlogBundle\Model;

use Doctrine\Common\Collections\Collection;

interface ImagesAwareInterface
{
    /**
     * @return Collection|ImageInterface[]
     */
    public function getImages(): Collection;

    /**
     * @param string $type
     *
     * @return Collection|ImageInterface[]
     */
    public function getImagesByType(string $type): Collection;

    /**
     * @return bool
     */
    public function hasImages(): bool;

    /**
     * @param ImageInterface $image
     *
     * @return bool
     */
    public function hasImage(ImageInterface $image): bool;

    /**
     * @param ImageInterface $image
     */
    public function addImage(ImageInterface $image): void;

    /**
     * @param ImageInterface $image
     */
    public function removeImage(ImageInterface $image): void;
}
