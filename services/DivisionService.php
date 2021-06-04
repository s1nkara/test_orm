<?php
namespace app\services;
require 'entities/DivisionEntity.php';
use Doctrine\ORM\EntityManager;
use app\entities\DivisionEntity;

class DivisionService
{
    public $entityManager;
    public $divisionsRepository;
    public function __construct(EntityManager $entityManager)
    {
        //    echo json_encode($divisions->getName());
        $this->entityManager = $entityManager;
        $this->divisionsRepository = $entityManager->getRepository(DivisionEntity::class);
    }

    public function getAll() {
        $this->divisionsRepository->find(1);
    }

}