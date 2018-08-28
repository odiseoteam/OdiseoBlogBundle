<?php

class JMSSerializerAdapter_a5dd94b extends \FOS\RestBundle\Serializer\JMSSerializerAdapter implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolder115b7 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer6e434 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties07a08 = [
        
    ];

    public function serialize($data, $format, \FOS\RestBundle\Context\Context $context)
    {
        $this->initializer6e434 && ($this->initializer6e434->__invoke($valueHolder115b7, $this, 'serialize', array('data' => $data, 'format' => $format, 'context' => $context), $this->initializer6e434) || 1) && $this->valueHolder115b7 = $valueHolder115b7;

        return $this->valueHolder115b7->serialize($data, $format, $context);
    }

    public function deserialize($data, $type, $format, \FOS\RestBundle\Context\Context $context)
    {
        $this->initializer6e434 && ($this->initializer6e434->__invoke($valueHolder115b7, $this, 'deserialize', array('data' => $data, 'type' => $type, 'format' => $format, 'context' => $context), $this->initializer6e434) || 1) && $this->valueHolder115b7 = $valueHolder115b7;

        return $this->valueHolder115b7->deserialize($data, $type, $format, $context);
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? $reflection = new \ReflectionClass(__CLASS__);
        $instance = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\FOS\RestBundle\Serializer\JMSSerializerAdapter $instance) {
            unset($instance->serializer, $instance->serializationContextFactory, $instance->deserializationContextFactory);
        }, $instance, 'FOS\\RestBundle\\Serializer\\JMSSerializerAdapter')->__invoke($instance);

        $instance->initializer6e434 = $initializer;

        return $instance;
    }

    public function __construct(\JMS\Serializer\SerializerInterface $serializer, ?\JMS\Serializer\ContextFactory\SerializationContextFactoryInterface $serializationContextFactory = null, ?\JMS\Serializer\ContextFactory\DeserializationContextFactoryInterface $deserializationContextFactory = null)
    {
        static $reflection;

        if (! $this->valueHolder115b7) {
            $reflection = $reflection ?: new \ReflectionClass('FOS\\RestBundle\\Serializer\\JMSSerializerAdapter');
            $this->valueHolder115b7 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\FOS\RestBundle\Serializer\JMSSerializerAdapter $instance) {
            unset($instance->serializer, $instance->serializationContextFactory, $instance->deserializationContextFactory);
        }, $this, 'FOS\\RestBundle\\Serializer\\JMSSerializerAdapter')->__invoke($this);

        }

        $this->valueHolder115b7->__construct($serializer, $serializationContextFactory, $deserializationContextFactory);
    }

    public function & __get($name)
    {
        $this->initializer6e434 && ($this->initializer6e434->__invoke($valueHolder115b7, $this, '__get', ['name' => $name], $this->initializer6e434) || 1) && $this->valueHolder115b7 = $valueHolder115b7;

        if (isset(self::$publicProperties07a08[$name])) {
            return $this->valueHolder115b7->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder115b7;

            $backtrace = debug_backtrace(false);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    get_parent_class($this),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
            return;
        }

        $targetObject = $this->valueHolder115b7;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer6e434 && ($this->initializer6e434->__invoke($valueHolder115b7, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer6e434) || 1) && $this->valueHolder115b7 = $valueHolder115b7;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder115b7;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolder115b7;
        $accessor = function & () use ($targetObject, $name, $value) {
            return $targetObject->$name = $value;
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer6e434 && ($this->initializer6e434->__invoke($valueHolder115b7, $this, '__isset', array('name' => $name), $this->initializer6e434) || 1) && $this->valueHolder115b7 = $valueHolder115b7;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder115b7;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder115b7;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer6e434 && ($this->initializer6e434->__invoke($valueHolder115b7, $this, '__unset', array('name' => $name), $this->initializer6e434) || 1) && $this->valueHolder115b7 = $valueHolder115b7;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder115b7;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder115b7;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __clone()
    {
        $this->initializer6e434 && ($this->initializer6e434->__invoke($valueHolder115b7, $this, '__clone', array(), $this->initializer6e434) || 1) && $this->valueHolder115b7 = $valueHolder115b7;

        $this->valueHolder115b7 = clone $this->valueHolder115b7;
    }

    public function __sleep()
    {
        $this->initializer6e434 && ($this->initializer6e434->__invoke($valueHolder115b7, $this, '__sleep', array(), $this->initializer6e434) || 1) && $this->valueHolder115b7 = $valueHolder115b7;

        return array('valueHolder115b7');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\FOS\RestBundle\Serializer\JMSSerializerAdapter $instance) {
            unset($instance->serializer, $instance->serializationContextFactory, $instance->deserializationContextFactory);
        }, $this, 'FOS\\RestBundle\\Serializer\\JMSSerializerAdapter')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer6e434 = $initializer;
    }

    public function getProxyInitializer()
    {
        return $this->initializer6e434;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer6e434 && ($this->initializer6e434->__invoke($valueHolder115b7, $this, 'initializeProxy', array(), $this->initializer6e434) || 1) && $this->valueHolder115b7 = $valueHolder115b7;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder115b7;
    }

    public function getWrappedValueHolderValue() : ?object
    {
        return $this->valueHolder115b7;
    }


}
