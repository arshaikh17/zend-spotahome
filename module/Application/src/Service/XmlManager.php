<?php

/**
 * This class handles the fetching and parsing of xml data.
 */

namespace Application\Service;

use Application\Entity\Advert;

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
	
		/**
	 * This method maps data to entity model and returns collection
	 * @return Application\Entity\Advert[] $adverts
	 */
	public function mapEntities ($xmlAdverts) {
		
		$adverts						 =	[];
		
		foreach ($xmlAdverts as $xmlAdvert) {
			
			$advert						 =	new Advert();
			
			$advert->setID((int) $xmlAdvert->id);
			$advert->setTitle((string) $xmlAdvert->title);
			$advert->setUrl((string) $xmlAdvert->url);
			$advert->setPicture((string) $xmlAdvert->pictures->picture[0]->picture_title);
			$advert->setCity((string) $xmlAdvert->city);
			$adverts[]					 =	$advert;
			
		}
		
		return $adverts;
		
	}
	
}