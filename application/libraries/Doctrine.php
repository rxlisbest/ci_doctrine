<?php 
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;
Class Doctrine{
	public $em = null;
	public function __construct(){
		require_once APPPATH."libraries/doctrine/autoload.php";
		$isDevMode = true;
		$config = Setup::createAnnotationMetadataConfiguration(array(APPPATH."models"), $isDevMode);
		$dbParams = array(
			'driver'=>'pdo_mysql',
			'user'=>'root',
			'password'=>'',
			'dbname'=>'test',
		);
		//$config = Setup::createAnnotationMetadataConfiguration(array(APPPATH."models"), $isDevMode);
		$this->em = $entityManager = EntityManager::create($dbParams, $config);
	}
}

