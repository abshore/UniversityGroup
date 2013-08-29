<?php

namespace Proxies\__CG__\Gestion\EmploisBundle\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class Diplome extends \Gestion\EmploisBundle\Entity\Diplome implements \Doctrine\ORM\Proxy\Proxy
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

    public function setTitre($titre)
    {
        $this->__load();
        return parent::setTitre($titre);
    }

    public function getTitre()
    {
        $this->__load();
        return parent::getTitre();
    }

    public function setPeriode($periode)
    {
        $this->__load();
        return parent::setPeriode($periode);
    }

    public function getPeriode()
    {
        $this->__load();
        return parent::getPeriode();
    }

    public function __toString()
    {
        $this->__load();
        return parent::__toString();
    }

    public function setNiveau($niveau)
    {
        $this->__load();
        return parent::setNiveau($niveau);
    }

    public function getNiveau()
    {
        $this->__load();
        return parent::getNiveau();
    }

    public function addClasse(\Gestion\EmploisBundle\Entity\Classe $classes)
    {
        $this->__load();
        return parent::addClasse($classes);
    }

    public function removeClasse(\Gestion\EmploisBundle\Entity\Classe $classes)
    {
        $this->__load();
        return parent::removeClasse($classes);
    }

    public function getClasses()
    {
        $this->__load();
        return parent::getClasses();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'titre', 'periode', 'niveau', 'classes');
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