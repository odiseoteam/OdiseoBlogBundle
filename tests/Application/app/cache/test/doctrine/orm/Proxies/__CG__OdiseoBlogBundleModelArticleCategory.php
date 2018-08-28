<?php

namespace Proxies\__CG__\Odiseo\BlogBundle\Model;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class ArticleCategory extends \Odiseo\BlogBundle\Model\ArticleCategory implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', 'id', 'code', 'articles', 'createdAt', 'updatedAt', 'enabled', 'translations', 'translationsCache', 'currentLocale', 'currentTranslation', 'fallbackLocale'];
        }

        return ['__isInitialized__', 'id', 'code', 'articles', 'createdAt', 'updatedAt', 'enabled', 'translations', 'translationsCache', 'currentLocale', 'currentTranslation', 'fallbackLocale'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (ArticleCategory $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function getCode(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCode', []);

        return parent::getCode();
    }

    /**
     * {@inheritDoc}
     */
    public function setCode(?string $code): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCode', [$code]);

        parent::setCode($code);
    }

    /**
     * {@inheritDoc}
     */
    public function getSlug()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSlug', []);

        return parent::getSlug();
    }

    /**
     * {@inheritDoc}
     */
    public function getTitle()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTitle', []);

        return parent::getTitle();
    }

    /**
     * {@inheritDoc}
     */
    public function addArticle(\Odiseo\BlogBundle\Model\ArticleInterface $article)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addArticle', [$article]);

        return parent::addArticle($article);
    }

    /**
     * {@inheritDoc}
     */
    public function removeArticle(\Odiseo\BlogBundle\Model\ArticleInterface $article)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeArticle', [$article]);

        return parent::removeArticle($article);
    }

    /**
     * {@inheritDoc}
     */
    public function hasArticle(\Odiseo\BlogBundle\Model\ArticleInterface $article)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'hasArticle', [$article]);

        return parent::hasArticle($article);
    }

    /**
     * {@inheritDoc}
     */
    public function getArticles()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getArticles', []);

        return parent::getArticles();
    }

    /**
     * {@inheritDoc}
     */
    public function getTranslation(string $locale = NULL): \Sylius\Component\Resource\Model\TranslationInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTranslation', [$locale]);

        return parent::getTranslation($locale);
    }

    /**
     * {@inheritDoc}
     */
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', []);

        return parent::__toString();
    }

    /**
     * {@inheritDoc}
     */
    public function getCreatedAt(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreatedAt', []);

        return parent::getCreatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreatedAt(?\DateTimeInterface $createdAt): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreatedAt', [$createdAt]);

        parent::setCreatedAt($createdAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getUpdatedAt(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUpdatedAt', []);

        return parent::getUpdatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setUpdatedAt(?\DateTimeInterface $updatedAt): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpdatedAt', [$updatedAt]);

        parent::setUpdatedAt($updatedAt);
    }

    /**
     * {@inheritDoc}
     */
    public function isEnabled(): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isEnabled', []);

        return parent::isEnabled();
    }

    /**
     * {@inheritDoc}
     */
    public function setEnabled(?bool $enabled): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEnabled', [$enabled]);

        parent::setEnabled($enabled);
    }

    /**
     * {@inheritDoc}
     */
    public function enable(): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'enable', []);

        parent::enable();
    }

    /**
     * {@inheritDoc}
     */
    public function disable(): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'disable', []);

        parent::disable();
    }

    /**
     * {@inheritDoc}
     */
    public function getTranslations(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTranslations', []);

        return parent::getTranslations();
    }

    /**
     * {@inheritDoc}
     */
    public function hasTranslation(\Sylius\Component\Resource\Model\TranslationInterface $translation): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'hasTranslation', [$translation]);

        return parent::hasTranslation($translation);
    }

    /**
     * {@inheritDoc}
     */
    public function addTranslation(\Sylius\Component\Resource\Model\TranslationInterface $translation): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addTranslation', [$translation]);

        parent::addTranslation($translation);
    }

    /**
     * {@inheritDoc}
     */
    public function removeTranslation(\Sylius\Component\Resource\Model\TranslationInterface $translation): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeTranslation', [$translation]);

        parent::removeTranslation($translation);
    }

    /**
     * {@inheritDoc}
     */
    public function setCurrentLocale(string $currentLocale): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCurrentLocale', [$currentLocale]);

        parent::setCurrentLocale($currentLocale);
    }

    /**
     * {@inheritDoc}
     */
    public function setFallbackLocale(string $fallbackLocale): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFallbackLocale', [$fallbackLocale]);

        parent::setFallbackLocale($fallbackLocale);
    }

}
