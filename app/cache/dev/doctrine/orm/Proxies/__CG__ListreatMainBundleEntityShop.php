<?php

namespace Proxies\__CG__\Listreat\MainBundle\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class Shop extends \Listreat\MainBundle\Entity\Shop implements \Doctrine\ORM\Proxy\Proxy
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

    
    public function __toString()
    {
        $this->__load();
        return parent::__toString();
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

    public function addItem(\Listreat\MainBundle\Entity\Item $item)
    {
        $this->__load();
        return parent::addItem($item);
    }

    public function removeItem(\Listreat\MainBundle\Entity\Item $item)
    {
        $this->__load();
        return parent::removeItem($item);
    }

    public function getItems()
    {
        $this->__load();
        return parent::getItems();
    }

    public function setCreator(\Listreat\UserBundle\Entity\User $creator = NULL)
    {
        $this->__load();
        return parent::setCreator($creator);
    }

    public function getCreator()
    {
        $this->__load();
        return parent::getCreator();
    }

    public function asMobileObject()
    {
        $this->__load();
        return parent::asMobileObject();
    }

    public function addFollower(\Listreat\MainBundle\Entity\Follow $followers)
    {
        $this->__load();
        return parent::addFollower($followers);
    }

    public function removeFollower(\Listreat\MainBundle\Entity\Follow $followers)
    {
        $this->__load();
        return parent::removeFollower($followers);
    }

    public function getFollowers()
    {
        $this->__load();
        return parent::getFollowers();
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


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'name', 'description', 'keywords', 'items', 'creator', 'followers');
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
            foreach ($class->reflFields as $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->_entityPersister, $this->_identifier);
        }
        
    }
}