<?php

declare(strict_types=1);

use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Config\Loader\LoaderInterface;

final class AppKernel extends Kernel
{
    /**
     * {@inheritdoc}
     */
    public function registerBundles(): array
    {
        $preResourceBundles = [
            new \Odiseo\BlogBundle\OdiseoBlogBundle(),
        ];

        $bundles = [
            new \Sylius\Bundle\ResourceBundle\SyliusResourceBundle()
        ];

        return array_merge($preResourceBundles, parent::registerBundles(), $bundles);
    }

    /**
     * {@inheritdoc}
     */
    public function registerContainerConfiguration(LoaderInterface $loader): void
    {
        $loader->load($this->getProjectDir() . '/app/config/config_' . $this->environment . '.yml');
    }

    public function getProjectDir(): string
    {
        return dirname(__DIR__);
    }
}
