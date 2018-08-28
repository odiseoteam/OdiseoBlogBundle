<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'hateoas.links_factory' shared service.

return $this->privates['hateoas.links_factory'] = new \Hateoas\Factory\LinksFactory(($this->privates['hateoas.configuration.relations_repository'] ?? $this->load('getHateoas_Configuration_RelationsRepositoryService.php')), ($this->privates['hateoas.link_factory'] ?? $this->load('getHateoas_LinkFactoryService.php')), ($this->privates['hateoas.serializer.exclusion_manager'] ?? $this->load('getHateoas_Serializer_ExclusionManagerService.php')));
