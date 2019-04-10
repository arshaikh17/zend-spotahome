<?php

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Application\Service\XmlManager;

class IndexController extends AbstractActionController {
	
	private $xmlManager;
	
	/**
	 * Construction
	 */
	public function __construct () {
		
		$this->xmlManager				 =	new XmlManager();
		
	}
	
	/**
	 * Displays index view.
	 */
	public function indexAction() {
		
		$adverts						 =	[];
		$data							 =	$this->xmlManager->fetchData();
		
		if ($data["success"]) $adverts	 =	$this->xmlManager->mapEntities($data["data"]->ad);
		
		return [
			"adverts"					 =>	$adverts
		];
		
	}
	
}
