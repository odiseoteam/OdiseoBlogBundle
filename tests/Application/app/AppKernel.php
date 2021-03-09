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
            new \Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
            new \Symfony\Bundle\TwigBundle\TwigBundle(),
            new \Symfony\Bundle\SecurityBundle\SecurityBundle(),
            new \Symfony\Bundle\MonologBundle\MonologBundle(),
            new \Symfony\Bundle\WebServerBundle\WebServerBundle(), // allows to run build in web server. Not recommended for prod environment
            new \Doctrine\Bundle\DoctrineBundle\DoctrineBundle(),
            new \Doctrine\Bundle\MigrationsBundle\DoctrineMigrationsBundle(),
            new \winzou\Bundle\StateMachineBundle\winzouStateMachineBundle(),
            new \JMS\SerializerBundle\JMSSerializerBundle(),
            new \Bazinga\Bundle\HateoasBundle\BazingaHateoasBundle(),
            new \Stof\DoctrineExtensionsBundle\StofDoctrineExtensionsBundle(),
            new \FOS\RestBundle\FOSRestBundle(),
            new \Knp\Bundle\GaufretteBundle\KnpGaufretteBundle(),
            new \Sylius\Bundle\ResourceBundle\SyliusResourceBundle(),
            new \Sylius\Bundle\GridBundle\SyliusGridBundle(),
        ];

        return array_merge($preResourceBundles, $bundles);
    }

    /**
     * {@inheritdoc}
     */
    public function registerContainerConfiguration(LoaderInterface $loader): void
    {
        $loader->load($this->getProjectDir() . '/app/config/config_' . $this->environment . '.yml');
    }

    /**
     * {@inheritdoc}
     */
    public function getCacheDir(): string
    {
        return dirname($this->getRootDir()) . '/var/cache/' . $this->getEnvironment();
    }

    /**
     * {@inheritdoc}
     */
    public function getLogDir(): string
    {
        return dirname($this->getRootDir()) . '/var/logs';
    }

    public function getProjectDir(): string
    {
        return dirname(__DIR__);
    }
}
