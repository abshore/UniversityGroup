<?php

namespace Question\Reponse\QuestionReponseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Matiere
 *
 * @ORM\Table(name="MatiereTest")
 * @ORM\Entity(repositoryClass="Question\Reponse\QuestionReponseBundle\Entity\MatiereRepository")
 */
class Matiere
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=255)
     */
    private $code;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=255)
     */
    private $libelle;

    /**
     * @var string
     *
     * @ORM\Column(name="syllabsus", type="text")
     */
    private $Syllabsus;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set code
     *
     * @param string $code
     * @return Matiere
     */
    public function setCode($code)
    {
        $this->code = $code;
    
        return $this;
    }

    /**
     * Get code
     *
     * @return string 
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set libelle
     *
     * @param string $libelle
     * @return Matiere
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;
    
        return $this;
    }

    /**
     * Get libelle
     *
     * @return string 
     */
    public function getLibelle()
    {
        return $this->libelle;
    }
    
    public function __toString(){
        return $this->getLibelle();
    }

    /**
     * Set Syllabsus
     *
     * @param string $syllabsus
     * @return Matiere
     */
    public function setSyllabsus($syllabsus)
    {
        $this->Syllabsus = $syllabsus;
    
        return $this;
    }

    /**
     * Get Syllabsus
     *
     * @return string 
     */
    public function getSyllabsus()
    {
        return $this->Syllabsus;
    }
}