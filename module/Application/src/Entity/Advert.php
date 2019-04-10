<?php

/**
 * This class represents a single instance of data as Model.
 */

namespace Application\Entity;

class Advert {
	
	/**
	 * Advert ID
	 */
	private $id;
	
	/**
	 * Advert Title
	 */
	private $title;
	
	/**
	 * Advert Link
	 */
	private $url;
	
	/**
	 * Advert City
	 */
	private $city;
	
	/**
	 * Advert Picture
	 */
	private $picture;
	
	/**
	 * Gets the ID
	 */
	public function getID () {
		
		return $this->id;
		
	}
	
	/**
	 * Sets the ID
	 */
	public function setID ($id) {
		
		$this->id						 =	$id;
		
	}
	
	/**
	 * Gets the Title
	 */
	public function getTitle () {
		
		return $this->title;
		
	}
	
	/**
	 * Sets the Title
	 */
	public function setTitle ($title) {
		
		$this->title					 =	$title;
		
	}
	
	/**
	 * Gets the URL
	 */
	public function getUrl () {
		
		return $this->url;
		
	}
	
	/**
	 * Sets the URL
	 */
	public function setUrl ($url) {
		
		$this->url						 =	$url;
		
	}
	
	/**
	 * Gets the City
	 */
	public function getCity () {
		
		return $this->city;
		
	}
	
	/**
	 * Sets the City
	 */
	public function setCity ($city) {
		
		$this->city						 =	$city;
		
	}
	
	/**
	 * Gets the Picture
	 */
	public function getPicture () {
		
		return $this->picture;
		
	}
	
	/**
	 * Sets the Picture
	 */
	public function setPicture ($picture) {
		
		$this->picture					 =	$picture;
		
	}
	
	/**
	 * This method maps data to entity model and returns collection
	 * @return Application\Entity\Advert[] $adverts
	 */
	public function mapEntities ($xml) {
		
		return simplexml_load_string($this->getData());
		
	}
	
}