<?php

namespace Ftt\BackofficeBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * ContactRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class parisRepository extends EntityRepository
{

    public function findJoueur1(){
        $query = $this->getEntityManager()
            ->createQuery("SELECT j FROM 'Ftt\BackofficeBundle\Entity\Matchs' m ,'Ftt\BackofficeBundle\Entity\Joueur' j where j.id=m.joueur1");
        return $query->getResult();

    }
}
