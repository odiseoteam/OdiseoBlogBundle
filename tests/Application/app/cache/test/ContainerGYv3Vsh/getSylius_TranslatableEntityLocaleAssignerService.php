<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.translatable_entity_locale_assigner' shared service.

return $this->services['sylius.translatable_entity_locale_assigner'] = new \Sylius\Component\Resource\Translation\TranslatableEntityLocaleAssigner(($this->services['sylius.translation_locale_provider.immutable'] ?? $this->services['sylius.translation_locale_provider.immutable'] = new \Sylius\Component\Resource\Translation\Provider\ImmutableTranslationLocaleProvider(array(0 => 'en_US'), 'en_US')));
