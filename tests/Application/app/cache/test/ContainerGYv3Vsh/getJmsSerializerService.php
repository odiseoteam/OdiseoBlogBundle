<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'jms_serializer' shared service.

$this->services['jms_serializer'] = $instance = new \JMS\Serializer\Serializer(($this->privates['jms_serializer.metadata_factory'] ?? $this->load('getJmsSerializer_MetadataFactoryService.php')), ($this->services['fos_rest.serializer.jms_handler_registry'] ?? $this->load('getFosRest_Serializer_JmsHandlerRegistryService.php')), ($this->privates['jms_serializer.unserialize_object_constructor'] ?? $this->privates['jms_serializer.unserialize_object_constructor'] = new \JMS\Serializer\Construction\UnserializeObjectConstructor()), new \PhpCollection\Map(array('json' => ($this->services['jms_serializer.json_serialization_visitor'] ?? $this->load('getJmsSerializer_JsonSerializationVisitorService.php')), 'xml' => ($this->services['jms_serializer.xml_serialization_visitor'] ?? $this->load('getJmsSerializer_XmlSerializationVisitorService.php')), 'yml' => ($this->services['jms_serializer.yaml_serialization_visitor'] ?? $this->load('getJmsSerializer_YamlSerializationVisitorService.php')))), new \PhpCollection\Map(array('json' => ($this->services['jms_serializer.json_deserialization_visitor'] ?? $this->load('getJmsSerializer_JsonDeserializationVisitorService.php')), 'xml' => ($this->services['jms_serializer.xml_deserialization_visitor'] ?? $this->load('getJmsSerializer_XmlDeserializationVisitorService.php')))), ($this->privates['jms_serializer.event_dispatcher'] ?? $this->load('getJmsSerializer_EventDispatcherService.php')), NULL, ($this->privates['jms_serializer.expression_evaluator'] ?? $this->load('getJmsSerializer_ExpressionEvaluatorService.php')));

$instance->setSerializationContextFactory(($this->services['jms_serializer.serialization_context_factory'] ?? $this->services['jms_serializer.serialization_context_factory'] = new \JMS\SerializerBundle\ContextFactory\ConfiguredContextFactory()));
$instance->setDeserializationContextFactory(($this->services['jms_serializer.deserialization_context_factory'] ?? $this->services['jms_serializer.deserialization_context_factory'] = new \JMS\SerializerBundle\ContextFactory\ConfiguredContextFactory()));

return $instance;
