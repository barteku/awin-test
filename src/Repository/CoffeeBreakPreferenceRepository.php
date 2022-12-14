<?php


namespace App\Repository;


use Doctrine\ORM\EntityRepository;


class CoffeeBreakPreferenceRepository extends EntityRepository
{

    public function getPreferencesForTodayForUser(int $userId){
        $alias = "cbp";
        $qb = $this->createQueryBuilder($alias)
            ->innerJoin(sprintf("%s.requestedBy", $alias), 'u')
            ->where(sprintf("%s.requestedDate BETWEEN :from AND :to", $alias))
            ->andWhere("u.id = :userId")
            ->setParameter("from", new \DateTime("today"))
            ->setParameter("to", new \DateTime("tomorrow"))
            ->setParameter("userId", $userId)
        ;

        return $qb->getQuery()->execute();

    }


    public function getPreferencesForTodayForTeam(string $team = 'developers'){
        $alias = "cbp";
        $qb = $this->createQueryBuilder($alias)
            ->innerJoin(sprintf("%s.requestedBy", $alias), 'u')
            ->innerJoin("u.team", 't')
            ->where("$alias.requestedDate BETWEEN :from AND :to")
            ->andWhere('t.name = :teamName')
            ->setParameter("from", new \DateTime("today"))
            ->setParameter("to", new \DateTime("tomorrow"))
            ->setParameter("teamName", $team)
        ;

        return $qb->getQuery()->execute();

    }


}
