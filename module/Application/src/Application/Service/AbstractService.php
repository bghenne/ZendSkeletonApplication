<?php 
namespace Application\Service;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityRepository;

/**
 * Service layer - Abstract class
 *
 * @package Application\Service
 * @author Bidoum
 *
 */
abstract class AbstractService
{
     
    /**
     * @var \Doctrine\ORM\EntityManager L'entity manager
     */
    private $em;

    /**
     * @var \Doctrine\ORM\EntityRepository Le repository
     */
    private $rep;
         
    /**
     * Constructeur
     * @param \Doctrine\ORM\EntityManager $em L'Entity manager
     * @param \Doctrine\ORM\EntityRepository $rep Le repository
     */
    public function __construct(EntityManager $em, EntityRepository $rep)
    {
        $this->em = $em;
        $this->rep = $rep;
    }
     
    /**
     * Obtient l'entity manager

     * @return \Doctrine\ORM\EntityManager
     */
    protected function getEm()
    {
        return $this->em;
    }
     
    /**
     * Obtient le repository
     
     * @return \Doctrine\ORM\EntityRepository
     */
    protected function getRep()
    {
        return $this->rep;
    }
     
}