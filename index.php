<?php
namespace app;
require_once "vendor/autoload.php";
//require 'entities/DivisionEntity.php';

use app\entities\DivisionEntity;
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

$paths = array(__DIR__."/entities");
$isDevMode = true;
$proxyDir = null;
$proxyDir = null;
$useSimpleAnnotationReader = false;
$dbParams = array(
    'driver'   => 'pdo_pgsql',
    'user'     => 'sinkara',
    'password' => '1234',
    'dbname'   => 'university',
);
$config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode, $proxyDir, $proxyDir, $useSimpleAnnotationReader);
$config->addEntityNamespace('DivisionEntity', 'app\entities');
$entityManager = EntityManager::create($dbParams, $config);