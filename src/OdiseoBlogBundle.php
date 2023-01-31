<?php

declare(strict_types=1);

namespace Odiseo\BlogBundle;

use Sylius\Bundle\ResourceBundle\AbstractResourceBundle;
use Sylius\Bundle\ResourceBundle\ResourceBundleInterface;
use Sylius\Bundle\ResourceBundle\SyliusResourceBundle;

/**
 * @author Diego D'amico <diego@odiseo.com.ar>
 */
final class OdiseoBlogBundle extends AbstractResourceBundle
{
    protected string $mappingFormat = ResourceBundleInterface::MAPPING_YAML;

    /**
     * {@inheritdoc}
     */
    public function getSupportedDrivers(): array
    {
        return [
            SyliusResourceBundle::DRIVER_DOCTRINE_ORM,
        ];
    }

    /**
     * {@inheritdoc}
     */
    protected function getModelNamespace(): ?string
    {
        return 'Odiseo\BlogBundle\Model';
    }
}
