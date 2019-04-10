<?php

/**
 * This class handles the fetching and parsing of xml data.
 */

namespace Application\Service;

class XmlManager {
	
	CONST URL							 =	"http://feeds.spotahome.com/trovit-Ireland.xml";
	
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
		
		$success						 =	true;
		$data							 =	file_get_contents(self::URL);
		
		if ($data === FALSE) $success	 =	false;
		
		return [
			"success"					 =>	$success,
			"data"						 =>	simplexml_load_string($data)
		];
		
	}
	
}