<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'twig.cache_warmer' shared service.

return $this->privates['twig.cache_warmer'] = new \Symfony\Bundle\TwigBundle\CacheWarmer\TemplateCacheCacheWarmer(($this->privates['.service_locator.UEpceA5'] ?? $this->load('get_ServiceLocator_UEpceA5Service.php'))->withContext('twig.cache_warmer', $this), ($this->privates['templating.finder'] ?? $this->load('getTemplating_FinderService.php')), array(($this->targetDirs[5].'/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form') => NULL));
