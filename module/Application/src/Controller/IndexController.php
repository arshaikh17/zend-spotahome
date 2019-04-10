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
	
	/**
	 * This method creates and returns a JSON object
	 * @param JsonModel $data
	 */
	public function downloadAction () {
		
		$request						 =	$this->getRequest();
		$rows							 =	$request->getPost()->toArray()["data"];
		
		$data							 =	[];
		
		foreach ($rows as $row) {
			
			//Regex to filter out attribute values.
			$picture					 =	[];
			preg_match('@src="([^"]+)"@' , $row[3], $picture);
			
			$link						 =	[];
			preg_match('@href="([^"]+)"@' , $row[4], $link);
			
			$data[]						 =	[
				"id"					 =>	$row[0],
				"title"					 =>	$row[1],
				"city"					 =>	$row[2],
				"picture"				 =>	array_pop($picture),
				"url"					 =>	array_pop($link)
			];
			
		}
		
		print_r(json_encode($data));exit();
		
	}
	
}
