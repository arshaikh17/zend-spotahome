<?php

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Application\Service\XmlManager;

class IndexController extends AbstractActionController {
	
	/**
	 * Displays index view.
	 */
	public function indexAction() {
		
		return new ViewModel();
		
	}
	
}
