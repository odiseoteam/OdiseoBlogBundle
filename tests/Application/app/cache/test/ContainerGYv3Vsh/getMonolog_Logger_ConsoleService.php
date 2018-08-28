<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'monolog.logger.console' shared service.

$this->privates['monolog.logger.console'] = $instance = new \Symfony\Bridge\Monolog\Logger('console');

$instance->pushHandler(($this->privates['monolog.handler.firephp'] ?? $this->getMonolog_Handler_FirephpService()));
$instance->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));

return $instance;
