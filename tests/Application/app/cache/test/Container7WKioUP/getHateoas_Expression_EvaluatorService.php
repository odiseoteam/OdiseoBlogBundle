<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'hateoas.expression.evaluator' shared service.

$this->privates['hateoas.expression.evaluator'] = $instance = new \Bazinga\Bundle\HateoasBundle\Hateoas\Expression\LazyFunctionExpressionEvaluator(($this->privates['bazinga_hateoas.expression_language'] ?? $this->privates['bazinga_hateoas.expression_language'] = new \Bazinga\Bundle\HateoasBundle\ExpressionLanguage\ExpressionLanguage()), array(), $this);

$instance->setContextVariable('container', $this);
$instance->registerFunctionId('hateoas.expression.link');

return $instance;
