<?php

/**
 * This class handles the fetching and parsing of xml data.
 */

namespace Application\Service;

class XmlManager {
	
	CONST URL							 =	"http://feeds.spotahome.com/trovit-Ireland.xml";
	
	/**
	 * Variable for storing url contents
	 */
	private $data;
	
	/**
	 * Constructor
	 */
	public function __construct() {
		
	}
	
	/**
	 * This method fetches data from url
	  * @return Boolean $success
	 */
	public function fetchData () {
		
		$success						 =	false;
		$data							 =	file_get_contents(self::URL);
		 
		if ($data !== FALSE) {
			
			$success					 =	true;
			
			$this->setData($data);
			
		}
		
		return $success;
		
	}
	
	/**
	 * This method sets the data
	 * @param $data
	 */
	public function setData ($data) {
		
		$this->data						 =	$data;
		
	}
	
	/**
	 * This method gets the data
	 * @return $data
	 */
	public function getData () {
		
		return $data;
		
	}
	
}