<?php

namespace Gestion\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Entity\User as BaseUser;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="user")
 * @ORM\InheritanceType("JOINED")
 * @ORM\DiscriminatorColumn(name="type", type="string")
 * @ORM\DiscriminatorMap({"etudiant" = "Etudiant", "prof" = "Prof" , "admin"="Admin"})
 *
 */
abstract class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
     /**
     * @var integer
     *
     * @ORM\Column(name="new", type="integer",nullable=true)
     */
    protected $new;
    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }
     /**
     * @ORM\OneToMany(targetEntity="Cursus", mappedBy="user",cascade={"all"})
     * 
     */
     protected $cursus;
     
    
   
   

    /**
     * Set new
     *
     * @param integer $new
     * @return User
     */
    public function setNew($new)
    {
        $this->new = $new;
    
        return $this;
    }

    /**
     * Get new
     *
     * @return integer 
     */
    public function getNew()
    {
        return $this->new;
    }

   
}