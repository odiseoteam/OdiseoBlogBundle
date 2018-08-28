<?php

class GridHelper_dc9cf99 extends \Sylius\Bundle\GridBundle\Templating\Helper\GridHelper implements \ProxyManager\Proxy\VirtualProxyInterface
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

    public function renderGrid(\Sylius\Component\Grid\View\GridView $gridView, ?string $template = null)
    {
        $this->initializer6e434 && ($this->initializer6e434->__invoke($valueHolder115b7, $this, 'renderGrid', array('gridView' => $gridView, 'template' => $template), $this->initializer6e434) || 1) && $this->valueHolder115b7 = $valueHolder115b7;

        return $this->valueHolder115b7->renderGrid($gridView, $template);
    }

    public function renderField(\Sylius\Component\Grid\View\GridView $gridView, \Sylius\Component\Grid\Definition\Field $field, $data)
    {
        $this->initializer6e434 && ($this->initializer6e434->__invoke($valueHolder115b7, $this, 'renderField', array('gridView' => $gridView, 'field' => $field, 'data' => $data), $this->initializer6e434) || 1) && $this->valueHolder115b7 = $valueHolder115b7;

        return $this->valueHolder115b7->renderField($gridView, $field, $data);
    }

    public function renderAction(\Sylius\Component\Grid\View\GridView $gridView, \Sylius\Component\Grid\Definition\Action $action, $data = null)
    {
        $this->initializer6e434 && ($this->initializer6e434->__invoke($valueHolder115b7, $this, 'renderAction', array('gridView' => $gridView, 'action' => $action, 'data' => $data), $this->initializer6e434) || 1) && $this->valueHolder115b7 = $valueHolder115b7;

        return $this->valueHolder115b7->renderAction($gridView, $action, $data);
    }

    public function renderFilter(\Sylius\Component\Grid\View\GridView $gridView, \Sylius\Component\Grid\Definition\Filter $filter)
    {
        $this->initializer6e434 && ($this->initializer6e434->__invoke($valueHolder115b7, $this, 'renderFilter', array('gridView' => $gridView, 'filter' => $filter), $this->initializer6e434) || 1) && $this->valueHolder115b7 = $valueHolder115b7;

        return $this->valueHolder115b7->renderFilter($gridView, $filter);
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

        \Closure::bind(function (\Sylius\Bundle\GridBundle\Templating\Helper\GridHelper $instance) {
            unset($instance->gridRenderer);
        }, $instance, 'Sylius\\Bundle\\GridBundle\\Templating\\Helper\\GridHelper')->__invoke($instance);

        $instance->initializer6e434 = $initializer;

        return $instance;
    }

    public function __construct(\Sylius\Component\Grid\Renderer\GridRendererInterface $gridRenderer)
    {
        static $reflection;

        if (! $this->valueHolder115b7) {
            $reflection = $reflection ?: new \ReflectionClass('Sylius\\Bundle\\GridBundle\\Templating\\Helper\\GridHelper');
            $this->valueHolder115b7 = $reflection->newInstanceWithoutConstructor();
        unset($this->charset);

        \Closure::bind(function (\Sylius\Bundle\GridBundle\Templating\Helper\GridHelper $instance) {
            unset($instance->gridRenderer);
        }, $this, 'Sylius\\Bundle\\GridBundle\\Templating\\Helper\\GridHelper')->__invoke($this);

        }

        $this->valueHolder115b7->__construct($gridRenderer);
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

        \Closure::bind(function (\Sylius\Bundle\GridBundle\Templating\Helper\GridHelper $instance) {
            unset($instance->gridRenderer);
        }, $this, 'Sylius\\Bundle\\GridBundle\\Templating\\Helper\\GridHelper')->__invoke($this);
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
