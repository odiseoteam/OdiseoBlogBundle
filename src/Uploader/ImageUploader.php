<?php

declare(strict_types=1);

namespace Odiseo\BlogBundle\Uploader;

use Gaufrette\Filesystem;
use Odiseo\BlogBundle\Model\ImageInterface;
use Symfony\Component\HttpFoundation\File\File;
use Webmozart\Assert\Assert;

class ImageUploader implements ImageUploaderInterface
{
    /**
     * @var Filesystem
     */
    protected $filesystem;

    /**
     * @param Filesystem $filesystem
     */
    public function __construct(Filesystem $filesystem)
    {
        $this->filesystem = $filesystem;
    }

    /**
     * {@inheritdoc}
     */
    public function upload(ImageInterface $image): void
    {
        if (!$image->hasFile()) {
            return;
        }

        $file = $image->getFile();

        /** @var File $file */
        Assert::isInstanceOf($file, File::class);

        if (null !== $image->getPath() && $this->has($image->getPath())) {
            $this->remove($image->getPath());
        }

        do {
            $hash = bin2hex(random_bytes(16));
            $path = $this->expandPath($hash . '.' . $file->guessExtension());
        } while ($this->filesystem->has($path));

        $image->setPath($path);

        /** @var \SplFileInfo $file */
        $file = $image->getFile();
        /** @var string $fileContents */
        $fileContents = file_get_contents($file->getPathname());
        $this->filesystem->write(
            $image->getPath(),
            $fileContents
        );
    }

    /**
     * {@inheritdoc}
     */
    public function remove(string $path): bool
    {
        if ($this->filesystem->has($path)) {
            return $this->filesystem->delete($path);
        }

        return false;
    }

    /**
     * @param string $path
     *
     * @return string
     */
    private function expandPath(string $path): string
    {
        return sprintf(
            '%s/%s/%s',
            substr($path, 0, 2),
            substr($path, 2, 2),
            substr($path, 4)
        );
    }

    /**
     * @param string $path
     *
     * @return bool
     */
    private function has(string $path): bool
    {
        return $this->filesystem->has($path);
    }
}
