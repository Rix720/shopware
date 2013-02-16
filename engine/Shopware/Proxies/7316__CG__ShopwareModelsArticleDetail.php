<?php

namespace Shopware\Proxies\__CG__\Shopware\Models\Article;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class Detail extends \Shopware\Models\Article\Detail implements \Doctrine\ORM\Proxy\Proxy
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

    public function setNumber($number)
    {
        $this->__load();
        return parent::setNumber($number);
    }

    public function getNumber()
    {
        $this->__load();
        return parent::getNumber();
    }

    public function setSupplierNumber($supplierNumber)
    {
        $this->__load();
        return parent::setSupplierNumber($supplierNumber);
    }

    public function getSupplierNumber()
    {
        $this->__load();
        return parent::getSupplierNumber();
    }

    public function setKind($kind)
    {
        $this->__load();
        return parent::setKind($kind);
    }

    public function getKind()
    {
        $this->__load();
        return parent::getKind();
    }

    public function setAdditionalText($additionalText)
    {
        $this->__load();
        return parent::setAdditionalText($additionalText);
    }

    public function getAdditionalText()
    {
        $this->__load();
        return parent::getAdditionalText();
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

    public function setInStock($inStock)
    {
        $this->__load();
        return parent::setInStock($inStock);
    }

    public function getInStock()
    {
        $this->__load();
        return parent::getInStock();
    }

    public function setStockMin($stockMin)
    {
        $this->__load();
        return parent::setStockMin($stockMin);
    }

    public function getStockMin()
    {
        $this->__load();
        return parent::getStockMin();
    }

    public function setWeight($weight)
    {
        $this->__load();
        return parent::setWeight($weight);
    }

    public function getWeight()
    {
        $this->__load();
        return parent::getWeight();
    }

    public function setPosition($position)
    {
        $this->__load();
        return parent::setPosition($position);
    }

    public function getPosition()
    {
        $this->__load();
        return parent::getPosition();
    }

    public function getArticle()
    {
        $this->__load();
        return parent::getArticle();
    }

    public function setArticle(\Shopware\Models\Article\Article $article)
    {
        $this->__load();
        return parent::setArticle($article);
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

    public function getPrices()
    {
        $this->__load();
        return parent::getPrices();
    }

    public function setPrices($prices)
    {
        $this->__load();
        return parent::setPrices($prices);
    }

    public function getWidth()
    {
        $this->__load();
        return parent::getWidth();
    }

    public function setWidth($width)
    {
        $this->__load();
        return parent::setWidth($width);
    }

    public function getLen()
    {
        $this->__load();
        return parent::getLen();
    }

    public function setLen($length)
    {
        $this->__load();
        return parent::setLen($length);
    }

    public function getHeight()
    {
        $this->__load();
        return parent::getHeight();
    }

    public function setHeight($height)
    {
        $this->__load();
        return parent::setHeight($height);
    }

    public function getEan()
    {
        $this->__load();
        return parent::getEan();
    }

    public function setEan($ean)
    {
        $this->__load();
        return parent::setEan($ean);
    }

    public function setShippingTime($shippingTime)
    {
        $this->__load();
        return parent::setShippingTime($shippingTime);
    }

    public function getShippingTime()
    {
        $this->__load();
        return parent::getShippingTime();
    }

    public function setShippingFree($shippingFree)
    {
        $this->__load();
        return parent::setShippingFree($shippingFree);
    }

    public function getShippingFree()
    {
        $this->__load();
        return parent::getShippingFree();
    }

    public function setReleaseDate($releaseDate = NULL)
    {
        $this->__load();
        return parent::setReleaseDate($releaseDate);
    }

    public function getReleaseDate()
    {
        $this->__load();
        return parent::getReleaseDate();
    }

    public function setMinPurchase($minPurchase)
    {
        $this->__load();
        return parent::setMinPurchase($minPurchase);
    }

    public function getMinPurchase()
    {
        $this->__load();
        return parent::getMinPurchase();
    }

    public function setPurchaseSteps($purchaseSteps)
    {
        $this->__load();
        return parent::setPurchaseSteps($purchaseSteps);
    }

    public function getPurchaseSteps()
    {
        $this->__load();
        return parent::getPurchaseSteps();
    }

    public function setMaxPurchase($maxPurchase)
    {
        $this->__load();
        return parent::setMaxPurchase($maxPurchase);
    }

    public function getMaxPurchase()
    {
        $this->__load();
        return parent::getMaxPurchase();
    }

    public function setPurchaseUnit($purchaseUnit)
    {
        $this->__load();
        return parent::setPurchaseUnit($purchaseUnit);
    }

    public function getPurchaseUnit()
    {
        $this->__load();
        return parent::getPurchaseUnit();
    }

    public function setReferenceUnit($referenceUnit)
    {
        $this->__load();
        return parent::setReferenceUnit($referenceUnit);
    }

    public function getReferenceUnit()
    {
        $this->__load();
        return parent::getReferenceUnit();
    }

    public function setPackUnit($packUnit)
    {
        $this->__load();
        return parent::setPackUnit($packUnit);
    }

    public function getPackUnit()
    {
        $this->__load();
        return parent::getPackUnit();
    }

    public function getUnit()
    {
        $this->__load();
        return parent::getUnit();
    }

    public function setUnit($unit)
    {
        $this->__load();
        return parent::setUnit($unit);
    }

    public function getConfiguratorOptions()
    {
        $this->__load();
        return parent::getConfiguratorOptions();
    }

    public function setConfiguratorOptions($configuratorOptions)
    {
        $this->__load();
        return parent::setConfiguratorOptions($configuratorOptions);
    }

    public function setEsd($esd)
    {
        $this->__load();
        return parent::setEsd($esd);
    }

    public function getEsd()
    {
        $this->__load();
        return parent::getEsd();
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
        return array('__isInitialized__', 'id', 'articleId', 'unitId', 'number', 'supplierNumber', 'kind', 'additionalText', 'active', 'inStock', 'stockMin', 'weight', 'width', 'len', 'height', 'ean', 'position', 'minPurchase', 'purchaseSteps', 'maxPurchase', 'purchaseUnit', 'referenceUnit', 'packUnit', 'shippingFree', 'releaseDate', 'shippingTime', 'article', 'prices', 'attribute', 'unit', 'configuratorOptions', 'esd', 'notifications', 'images');
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