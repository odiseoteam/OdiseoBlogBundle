<?php

class BulkActionGridHelper_d18a6a1 extends \Sylius\Bundle\GridBundle\Templating\Helper\BulkActionGridHelper implements \ProxyManager\Proxy\VirtualProxyInterface
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

    public function renderBulkAction(\Sylius\Component\Grid\View\GridView $gridView, \Sylius\Component\Grid\Definition\Action $bulkAction, $data = null) : string
    {
        $this->initializer6e434 && ($this->initializer6e434->__invoke($valueHolder115b7, $this, 'renderBulkAction', array('gridView' => $gridView, 'bulkAction' => $bulkAction, 'data' => $data), $this->initializer6e434) || 1) && $this->valueHolder115b7 = $valueHolder115b7;

        return $this->valueHolder115b7->renderBulkAction($gridView, $bulkAction, $data);
    }

    public function getName() : string
    {
        $this->initializer6e434 && ($this->initializer6e434->__invoke($valueHolder115b7, $this, 'getName', array(), $this->initializer6e434) || 1) && $this->valueHolder115b7 = $valueHolder115b7;

        return $this->valueHolder115b7->getName();
    }

    public function setCharset($charset)
    {
        $this->initializer6e434 && ($this->initializer6e434->__invoke($valueHolder115b7, $this, 'setCharset', array('charset' => $charset), $this->initializer6e434) || 1) && $this->valueHolder115b7 = $valueHolder115b7;

        return $this->valueHolder115b7->setCharset($charset);
    }

    public function getCharset()
    {
        $this->initializer6e434 && ($this->initializer6e434->__invoke($valueHolder115b7, $this, 'getCharset', array(), $this->initializer6e434) || 1) && $this->valueHolder115b7 = $valueHolder115b7;

        return $this->valueHolder115b7->getCharset();
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

        unset($instance->charset);

        \Closure::bind(function (\Sylius\Bundle\GridBundle\Templating\Helper\BulkActionGridHelper $instance) {
            unset($instance->bulkActionGridRenderer);
        }, $instance, 'Sylius\\Bundle\\GridBundle\\Templating\\Helper\\BulkActionGridHelper')->__invoke($instance);

        $instance->initializer6e434 = $initializer;

        return $instance;
    }

    public function __construct(\Sylius\Component\Grid\Renderer\BulkActionGridRendererInterface $bulkActionGridRenderer)
    {
        static $reflection;

        if (! $this->valueHolder115b7) {
            $reflection = $reflection ?: new \ReflectionClass('Sylius\\Bundle\\GridBundle\\Templating\\Helper\\BulkActionGridHelper');
            $this->valueHolder115b7 = $reflection->newInstanceWithoutConstructor();
        unset($this->charset);

        \Closure::bind(function (\Sylius\Bundle\GridBundle\Templating\Helper\BulkActionGridHelper $instance) {
            unset($instance->bulkActionGridRenderer);
        }, $this, 'Sylius\\Bundle\\GridBundle\\Templating\\Helper\\BulkActionGridHelper')->__invoke($this);

        }

        $this->valueHolder115b7->__construct($bulkActionGridRenderer);
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
        unset($this->charset);

        \Closure::bind(function (\Sylius\Bundle\GridBundle\Templating\Helper\BulkActionGridHelper $instance) {
            unset($instance->bulkActionGridRenderer);
        }, $this, 'Sylius\\Bundle\\GridBundle\\Templating\\Helper\\BulkActionGridHelper')->__invoke($this);
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
