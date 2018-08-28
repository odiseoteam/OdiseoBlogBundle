<?php

declare(strict_types=1);

namespace Odiseo\BlogBundle\DependencyInjection;

use Sylius\Bundle\ResourceBundle\DependencyInjection\Extension\AbstractResourceExtension;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;

/**
 * @author Diego D'amico <diego@odiseo.com.ar>
 */
final class OdiseoBlogExtension extends AbstractResourceExtension
{
    /**
     * {@inheritdoc}
     */
    public function load(array $config, ContainerBuilder $container): void
    {
        $config = $this->processConfiguration($this->getConfiguration([], $container), $config);
        $loader = new YamlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));

        $this->registerResources('odiseo_blog', $config['driver'], $config['resources'], $container);

        $configFiles = [
            'services.yml',
        ];

        foreach ($configFiles as $configFile) {
            $loader->load($configFile);
        }
    }
}
