<?php
namespace AppBundle\Managers;
// Centralize the database functions
use Doctrine\ORM\EntityManager;

class DataControlManager
{
    /**
     * doctrine.orm.default_entity_manager
     * @var DatabaseManager
     */
    private $em;
    private $repository;

    /**
     * SupportManager constructor.
     * @param EntityManager $em
     */
    function __construct($em)
    {
        $this->em = $em;
        $this->repository = $this->getRepository();
    }
    /**
     * @param $data
     * @return bool
     */
    public function comitData($data){
        $this->em->persist($data);
        $this->em->flush();
        return true;
    }

    /**
     * @param $data
     * @return mixed
     */
    public function comitDataId($data){
        $this->em->persist($data);
        $this->em->flush();
        return $data->getId();
    }


    /**
     * @param $serializedEntity
     * @return bool
     */
    public function mergeData($serializedEntity){
        $detachedEntity = unserialize($serializedEntity);
        $this->repository->merge($detachedEntity);
        $this->repository->flush();
        return true;
    }

    public function setRepository($em)
    {
        $this->repository= $em;
    }
    public function getRepository()
    {
        return $this->repository;
    }
}


