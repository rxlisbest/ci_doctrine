<?php 
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;
Class Doctrine{
	public $em = null;
	public function __contruct(){
		require_once APPPATH."libraries/doctrine/autoload.php";
		$paths = array(APPPATH."models");
		$isDevMode = false;
		$dbParams = array(
			'driver'=>'pdo_mysql',
			'user'=>'test',
			'password'=>'123',
			'dbname'=>'test',
		);
		$config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode);
		$this->em = $entityManager = EntityManager::create($dbParams, $config);
	}
}

