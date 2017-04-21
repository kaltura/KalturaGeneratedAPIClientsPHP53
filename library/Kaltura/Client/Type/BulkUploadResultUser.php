<?php
// ===================================================================================================
//                           _  __     _ _
//                          | |/ /__ _| | |_ _  _ _ _ __ _
//                          | ' </ _` | |  _| || | '_/ _` |
//                          |_|\_\__,_|_|\__|\_,_|_| \__,_|
//
// This file is part of the Kaltura Collaborative Media Suite which allows users
// to do with audio, video, and animation what Wiki platfroms allow them to do with
// text.
//
// Copyright (C) 2006-2017  Kaltura Inc.
//
// This program is free software: you can redistribute it and/or modify
// it under the terms of the GNU Affero General Public License as
// published by the Free Software Foundation, either version 3 of the
// License, or (at your option) any later version.
//
// This program is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU Affero General Public License for more details.
//
// You should have received a copy of the GNU Affero General Public License
// along with this program.  If not, see <http://www.gnu.org/licenses/>.
//
// @ignore
// ===================================================================================================

/**
 * @namespace
 */
namespace Kaltura\Client\Type;

/**
 * @package Kaltura
 * @subpackage Client
 */
class BulkUploadResultUser extends \Kaltura\Client\Type\BulkUploadResult
{
	public function getKalturaObjectType()
	{
		return 'KalturaBulkUploadResultUser';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->userId))
			$this->userId = (string)$xml->userId;
		if(count($xml->screenName))
			$this->screenName = (string)$xml->screenName;
		if(count($xml->email))
			$this->email = (string)$xml->email;
		if(count($xml->description))
			$this->description = (string)$xml->description;
		if(count($xml->tags))
			$this->tags = (string)$xml->tags;
		if(count($xml->dateOfBirth))
			$this->dateOfBirth = (int)$xml->dateOfBirth;
		if(count($xml->country))
			$this->country = (string)$xml->country;
		if(count($xml->state))
			$this->state = (string)$xml->state;
		if(count($xml->city))
			$this->city = (string)$xml->city;
		if(count($xml->zip))
			$this->zip = (string)$xml->zip;
		if(count($xml->gender))
			$this->gender = (int)$xml->gender;
		if(count($xml->firstName))
			$this->firstName = (string)$xml->firstName;
		if(count($xml->lastName))
			$this->lastName = (string)$xml->lastName;
		if(count($xml->group))
			$this->group = (string)$xml->group;
	}
	/**
	 * 
	 * @var string
	 */
	public $userId = null;

	/**
	 * 
	 * @var string
	 */
	public $screenName = null;

	/**
	 * 
	 * @var string
	 */
	public $email = null;

	/**
	 * 
	 * @var string
	 */
	public $description = null;

	/**
	 * 
	 * @var string
	 */
	public $tags = null;

	/**
	 * 
	 * @var int
	 */
	public $dateOfBirth = null;

	/**
	 * 
	 * @var string
	 */
	public $country = null;

	/**
	 * 
	 * @var string
	 */
	public $state = null;

	/**
	 * 
	 * @var string
	 */
	public $city = null;

	/**
	 * 
	 * @var string
	 */
	public $zip = null;

	/**
	 * 
	 * @var int
	 */
	public $gender = null;

	/**
	 * 
	 * @var string
	 */
	public $firstName = null;

	/**
	 * 
	 * @var string
	 */
	public $lastName = null;

	/**
	 * 
	 * @var string
	 */
	public $group = null;

}
