<?php

namespace Gestion\EmploisBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * MatiereRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class MatiereRepository extends EntityRepository
{
    public function matiereLibre(){
        $stmt = $this->getEntityManager()
                ->getConnection()
                ->prepare('SELECT
            *
        FROM
            matiere 
        WHERE
           id NOT IN
            (SELECT matiere_id 
            FROM PANIER_MATIERE  
             )

                      ');
        
        $stmt->execute();
        return $stmt->fetchAll();
    }
}
