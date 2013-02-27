<?php

namespace Secretery\Entity\Proxy\__CG__\Secretery\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class Note extends \Secretery\Entity\Note implements \Doctrine\ORM\Proxy\Proxy
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

    
    public function setId($id)
    {
        $this->__load();
        return parent::setId($id);
    }

    public function setTitle($title)
    {
        $this->__load();
        return parent::setTitle($title);
    }

    public function setContent($content)
    {
        $this->__load();
        return parent::setContent($content);
    }

    public function setPrivate($private)
    {
        $this->__load();
        return parent::setPrivate($private);
    }

    public function setGroup($group)
    {
        $this->__load();
        return parent::setGroup($group);
    }

    public function addUser2Note(\Secretery\Entity\User2Note $user2note)
    {
        $this->__load();
        return parent::addUser2Note($user2note);
    }

    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int) $this->_identifier["id"];
        }
        $this->__load();
        return parent::getId();
    }

    public function getTitle()
    {
        $this->__load();
        return parent::getTitle();
    }

    public function getContent()
    {
        $this->__load();
        return parent::getContent();
    }

    public function getPrivate()
    {
        $this->__load();
        return parent::getPrivate();
    }

    public function getGroup()
    {
        $this->__load();
        return parent::getGroup();
    }

    public function getDateCreated()
    {
        $this->__load();
        return parent::getDateCreated();
    }

    public function getDateUpdated()
    {
        $this->__load();
        return parent::getDateUpdated();
    }

    public function getUser2Note()
    {
        $this->__load();
        return parent::getUser2Note();
    }

    public function populate(array $data)
    {
        $this->__load();
        return parent::populate($data);
    }

    public function toArray()
    {
        $this->__load();
        return parent::toArray();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'title', 'content', 'private', 'dateCreated', 'dateUpdated', 'group', 'user2note');
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