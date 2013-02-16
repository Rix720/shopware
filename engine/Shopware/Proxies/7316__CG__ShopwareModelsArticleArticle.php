<?php

namespace Shopware\Proxies\__CG__\Shopware\Models\Article;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class Article extends \Shopware\Models\Article\Article implements \Doctrine\ORM\Proxy\Proxy
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

    public function setName($name)
    {
        $this->__load();
        return parent::setName($name);
    }

    public function getName()
    {
        $this->__load();
        return parent::getName();
    }

    public function setDescription($description)
    {
        $this->__load();
        return parent::setDescription($description);
    }

    public function getDescription()
    {
        $this->__load();
        return parent::getDescription();
    }

    public function setDescriptionLong($descriptionLong)
    {
        $this->__load();
        return parent::setDescriptionLong($descriptionLong);
    }

    public function getDescriptionLong()
    {
        $this->__load();
        return parent::getDescriptionLong();
    }

    public function setAdded($added = 'now')
    {
        $this->__load();
        return parent::setAdded($added);
    }

    public function getAdded()
    {
        $this->__load();
        return parent::getAdded();
    }

    public function setActive($active)
    {
        $this->__load();
        return parent::setActive($active);
    }

    public function getActive()
    {
        $this->__load();
        return parent::getActive();
    }

    public function setPseudoSales($pseudoSales)
    {
        $this->__load();
        return parent::setPseudoSales($pseudoSales);
    }

    public function getPseudoSales()
    {
        $this->__load();
        return parent::getPseudoSales();
    }

    public function setHighlight($highlight)
    {
        $this->__load();
        return parent::setHighlight($highlight);
    }

    public function getHighlight()
    {
        $this->__load();
        return parent::getHighlight();
    }

    public function setKeywords($keywords)
    {
        $this->__load();
        return parent::setKeywords($keywords);
    }

    public function getKeywords()
    {
        $this->__load();
        return parent::getKeywords();
    }

    public function setChanged($changed = 'now')
    {
        $this->__load();
        return parent::setChanged($changed);
    }

    public function getChanged()
    {
        $this->__load();
        return parent::getChanged();
    }

    public function setPriceGroupActive($priceGroupActive)
    {
        $this->__load();
        return parent::setPriceGroupActive($priceGroupActive);
    }

    public function getPriceGroupActive()
    {
        $this->__load();
        return parent::getPriceGroupActive();
    }

    public function setLastStock($lastStock)
    {
        $this->__load();
        return parent::setLastStock($lastStock);
    }

    public function getLastStock()
    {
        $this->__load();
        return parent::getLastStock();
    }

    public function setNotification($notification)
    {
        $this->__load();
        return parent::setNotification($notification);
    }

    public function getNotification()
    {
        $this->__load();
        return parent::getNotification();
    }

    public function setTemplate($template)
    {
        $this->__load();
        return parent::setTemplate($template);
    }

    public function getTemplate()
    {
        $this->__load();
        return parent::getTemplate();
    }

    public function setMode($mode)
    {
        $this->__load();
        return parent::setMode($mode);
    }

    public function getMode()
    {
        $this->__load();
        return parent::getMode();
    }

    public function getCategories()
    {
        $this->__load();
        return parent::getCategories();
    }

    public function setCategories($categories)
    {
        $this->__load();
        return parent::setCategories($categories);
    }

    public function getCustomerGroups()
    {
        $this->__load();
        return parent::getCustomerGroups();
    }

    public function setCustomerGroups($propertyGroups)
    {
        $this->__load();
        return parent::setCustomerGroups($propertyGroups);
    }

    public function getPropertyGroup()
    {
        $this->__load();
        return parent::getPropertyGroup();
    }

    public function setPropertyGroup($propertyGroup)
    {
        $this->__load();
        return parent::setPropertyGroup($propertyGroup);
    }

    public function getRelated()
    {
        $this->__load();
        return parent::getRelated();
    }

    public function getSimilar()
    {
        $this->__load();
        return parent::getSimilar();
    }

    public function setRelated($related)
    {
        $this->__load();
        return parent::setRelated($related);
    }

    public function setSimilar($similar)
    {
        $this->__load();
        return parent::setSimilar($similar);
    }

    public function getTax()
    {
        $this->__load();
        return parent::getTax();
    }

    public function setTax($tax)
    {
        $this->__load();
        return parent::setTax($tax);
    }

    public function getImages()
    {
        $this->__load();
        return parent::getImages();
    }

    public function setImages($images)
    {
        $this->__load();
        return parent::setImages($images);
    }

    public function getDownloads()
    {
        $this->__load();
        return parent::getDownloads();
    }

    public function setDownloads($downloads)
    {
        $this->__load();
        return parent::setDownloads($downloads);
    }

    public function getLinks()
    {
        $this->__load();
        return parent::getLinks();
    }

    public function setLinks($links)
    {
        $this->__load();
        return parent::setLinks($links);
    }

    public function getSupplier()
    {
        $this->__load();
        return parent::getSupplier();
    }

    public function setSupplier($supplier)
    {
        $this->__load();
        return parent::setSupplier($supplier);
    }

    public function getDetails()
    {
        $this->__load();
        return parent::getDetails();
    }

    public function setDetails($details)
    {
        $this->__load();
        return parent::setDetails($details);
    }

    public function getMainDetail()
    {
        $this->__load();
        return parent::getMainDetail();
    }

    public function setMainDetail($mainDetail)
    {
        $this->__load();
        return parent::setMainDetail($mainDetail);
    }

    public function getPriceGroup()
    {
        $this->__load();
        return parent::getPriceGroup();
    }

    public function setPriceGroup($priceGroup)
    {
        $this->__load();
        return parent::setPriceGroup($priceGroup);
    }

    public function getVotes()
    {
        $this->__load();
        return parent::getVotes();
    }

    public function setVotes($votes)
    {
        $this->__load();
        return parent::setVotes($votes);
    }

    public function getAttribute()
    {
        $this->__load();
        return parent::getAttribute();
    }

    public function setAttribute($attribute)
    {
        $this->__load();
        return parent::setAttribute($attribute);
    }

    public function getCrossBundleLook()
    {
        $this->__load();
        return parent::getCrossBundleLook();
    }

    public function setCrossBundleLook($crossBundleLook)
    {
        $this->__load();
        return parent::setCrossBundleLook($crossBundleLook);
    }

    public function getAvailableFrom()
    {
        $this->__load();
        return parent::getAvailableFrom();
    }

    public function setAvailableFrom($availableFrom)
    {
        $this->__load();
        return parent::setAvailableFrom($availableFrom);
    }

    public function getAvailableTo()
    {
        $this->__load();
        return parent::getAvailableTo();
    }

    public function setAvailableTo($availableTo)
    {
        $this->__load();
        return parent::setAvailableTo($availableTo);
    }

    public function getConfiguratorSet()
    {
        $this->__load();
        return parent::getConfiguratorSet();
    }

    public function setConfiguratorSet($configuratorSet)
    {
        $this->__load();
        return parent::setConfiguratorSet($configuratorSet);
    }

    public function getPropertyValues()
    {
        $this->__load();
        return parent::getPropertyValues();
    }

    public function setPropertyValues($propertyValues)
    {
        $this->__load();
        return parent::setPropertyValues($propertyValues);
    }

    public function getConfiguratorTemplate()
    {
        $this->__load();
        return parent::getConfiguratorTemplate();
    }

    public function setConfiguratorTemplate($configuratorTemplate)
    {
        $this->__load();
        return parent::setConfiguratorTemplate($configuratorTemplate);
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
        return array('__isInitialized__', 'id', 'mainDetailId', 'supplierId', 'taxId', 'priceGroupId', 'filterGroupId', 'configuratorSetId', 'name', 'description', 'descriptionLong', 'added', 'active', 'pseudoSales', 'highlight', 'keywords', 'changed', 'priceGroupActive', 'lastStock', 'crossBundleLook', 'notification', 'template', 'mode', 'availableFrom', 'availableTo', 'tax', 'categories', 'customerGroups', 'propertyGroup', 'related', 'similar', 'supplier', 'details', 'mainDetail', 'links', 'downloads', 'images', 'priceGroup', 'votes', 'attribute', 'configuratorSet', 'propertyValues', 'configuratorTemplate', 'esds');
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