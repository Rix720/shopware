<?php

namespace Shopware\Proxies\__CG__\Shopware\Models\Shop;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class Locale extends \Shopware\Models\Shop\Locale implements \Doctrine\ORM\Proxy\Proxy
{
    private $_entityPersister;
    private $_identifier;
    public $__isInitialized__ = false;
    public function __construct($entityPersister, $identifier)
    {
        $this->_entityPersister = $entityPersister;
        $this->_identifier = $identifier;
    }
    /** @private */
    public function __load()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;

            if (method_exists($this, "__wakeup")) {
                // call this after __isInitialized__to avoid infinite recursion
                // but before loading to emulate what ClassMetadata::newInstance()
                // provides.
                $this->__wakeup();
            }

            if ($this->_entityPersister->load($this->_identifier, $this) === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            unset($this->_entityPersister, $this->_identifier);
        }
    }

    /** @private */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int) $this->_identifier["id"];
        }
        $this->__load();
        return parent::getId();
    }

    public function setLocale($locale)
    {
        $this->__load();
        return parent::setLocale($locale);
    }

    public function getLocale()
    {
        $this->__load();
        return parent::getLocale();
    }

    public function setLanguage($language)
    {
        $this->__load();
        return parent::setLanguage($language);
    }

    public function getLanguage()
    {
        $this->__load();
        return parent::getLanguage();
    }

    public function setTerritory($territory)
    {
        $this->__load();
        return parent::setTerritory($territory);
    }

    public function getTerritory()
    {
        $this->__load();
        return parent::getTerritory();
    }

    public function toString()
    {
        $this->__load();
        return parent::toString();
    }

    public function fromArray(array $array = array (
))
    {
        $this->__load();
        return parent::fromArray($array);
    }

    public function setOneToOne($data, $model, $property, $reference = NULL)
    {
        $this->__load();
        return parent::setOneToOne($data, $model, $property, $reference);
    }

    public function setOneToMany($data, $model, $property, $reference = NULL)
    {
        $this->__load();
        return parent::setOneToMany($data, $model, $property, $reference);
    }

    public function setManyToOne($data, $model, $property)
    {
        $this->__load();
        return parent::setManyToOne($data, $model, $property);
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'locale', 'language', 'territory');
    }

    public function __clone()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            $class = $this->_entityPersister->getClassMetadata();
            $original = $this->_entityPersister->load($this->_identifier);
            if ($original === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            foreach ($class->reflFields AS $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->_entityPersister, $this->_identifier);
        }
        
    }
}