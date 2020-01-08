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
// Copyright (C) 2006-2020  Kaltura Inc.
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
class BaseUser extends \Kaltura\Client\ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaBaseUser';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->id))
			$this->id = (string)$xml->id;
		if(count($xml->partnerId))
			$this->partnerId = (int)$xml->partnerId;
		if(count($xml->screenName))
			$this->screenName = (string)$xml->screenName;
		if(count($xml->fullName))
			$this->fullName = (string)$xml->fullName;
		if(count($xml->email))
			$this->email = (string)$xml->email;
		if(count($xml->country))
			$this->country = (string)$xml->country;
		if(count($xml->state))
			$this->state = (string)$xml->state;
		if(count($xml->city))
			$this->city = (string)$xml->city;
		if(count($xml->zip))
			$this->zip = (string)$xml->zip;
		if(count($xml->thumbnailUrl))
			$this->thumbnailUrl = (string)$xml->thumbnailUrl;
		if(count($xml->description))
			$this->description = (string)$xml->description;
		if(count($xml->tags))
			$this->tags = (string)$xml->tags;
		if(count($xml->adminTags))
			$this->adminTags = (string)$xml->adminTags;
		if(count($xml->status))
			$this->status = (int)$xml->status;
		if(count($xml->createdAt))
			$this->createdAt = (int)$xml->createdAt;
		if(count($xml->updatedAt))
			$this->updatedAt = (int)$xml->updatedAt;
		if(count($xml->partnerData))
			$this->partnerData = (string)$xml->partnerData;
		if(count($xml->indexedPartnerDataInt))
			$this->indexedPartnerDataInt = (int)$xml->indexedPartnerDataInt;
		if(count($xml->indexedPartnerDataString))
			$this->indexedPartnerDataString = (string)$xml->indexedPartnerDataString;
		if(count($xml->storageSize))
			$this->storageSize = (int)$xml->storageSize;
		if(count($xml->language))
			$this->language = (string)$xml->language;
		if(count($xml->lastLoginTime))
			$this->lastLoginTime = (int)$xml->lastLoginTime;
		if(count($xml->statusUpdatedAt))
			$this->statusUpdatedAt = (int)$xml->statusUpdatedAt;
		if(count($xml->deletedAt))
			$this->deletedAt = (int)$xml->deletedAt;
		if(count($xml->allowedPartnerIds))
			$this->allowedPartnerIds = (string)$xml->allowedPartnerIds;
		if(count($xml->allowedPartnerPackages))
			$this->allowedPartnerPackages = (string)$xml->allowedPartnerPackages;
		if(count($xml->userMode))
			$this->userMode = (int)$xml->userMode;
	}
	/**
	 * 
	 * @var string
	 */
	public $id = null;

	/**
	 * 
	 * @var int
	 * @readonly
	 */
	public $partnerId = null;

	/**
	 * 
	 * @var string
	 */
	public $screenName = null;

	/**
	 * 
	 * @var string
	 */
	public $fullName = null;

	/**
	 * 
	 * @var string
	 */
	public $email = null;

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
	 * @var string
	 */
	public $thumbnailUrl = null;

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
	 * Admin tags can be updated only by using an admin session
	 * @var string
	 */
	public $adminTags = null;

	/**
	 * 
	 * @var \Kaltura\Client\Enum\UserStatus
	 */
	public $status = null;

	/**
	 * Creation date as Unix timestamp (In seconds)
	 * @var int
	 * @readonly
	 */
	public $createdAt = null;

	/**
	 * Last update date as Unix timestamp (In seconds)
	 * @var int
	 * @readonly
	 */
	public $updatedAt = null;

	/**
	 * Can be used to store various partner related data as a string
	 * @var string
	 */
	public $partnerData = null;

	/**
	 * 
	 * @var int
	 */
	public $indexedPartnerDataInt = null;

	/**
	 * 
	 * @var string
	 */
	public $indexedPartnerDataString = null;

	/**
	 * 
	 * @var int
	 * @readonly
	 */
	public $storageSize = null;

	/**
	 * 
	 * @var \Kaltura\Client\Enum\LanguageCode
	 */
	public $language = null;

	/**
	 * 
	 * @var int
	 * @readonly
	 */
	public $lastLoginTime = null;

	/**
	 * 
	 * @var int
	 * @readonly
	 */
	public $statusUpdatedAt = null;

	/**
	 * 
	 * @var int
	 * @readonly
	 */
	public $deletedAt = null;

	/**
	 * 
	 * @var string
	 */
	public $allowedPartnerIds = null;

	/**
	 * 
	 * @var string
	 */
	public $allowedPartnerPackages = null;

	/**
	 * 
	 * @var \Kaltura\Client\Enum\UserMode
	 */
	public $userMode = null;

}
