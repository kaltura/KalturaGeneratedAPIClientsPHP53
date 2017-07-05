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
 * User
 * @package Kaltura
 * @subpackage Client
 */
class OTTUser extends \Kaltura\Client\Type\BaseOTTUser
{
	public function getKalturaObjectType()
	{
		return 'KalturaOTTUser';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->householdId))
			$this->householdId = (int)$xml->householdId;
		if(count($xml->email))
			$this->email = (string)$xml->email;
		if(count($xml->address))
			$this->address = (string)$xml->address;
		if(count($xml->city))
			$this->city = (string)$xml->city;
		if(count($xml->country) && !empty($xml->country))
			$this->country = \Kaltura\Client\ParseUtils::unmarshalObject($xml->country, "KalturaCountry");
		if(count($xml->zip))
			$this->zip = (string)$xml->zip;
		if(count($xml->phone))
			$this->phone = (string)$xml->phone;
		if(count($xml->affiliateCode))
			$this->affiliateCode = (string)$xml->affiliateCode;
		if(count($xml->externalId))
			$this->externalId = (string)$xml->externalId;
		if(count($xml->userType) && !empty($xml->userType))
			$this->userType = \Kaltura\Client\ParseUtils::unmarshalObject($xml->userType, "KalturaOTTUserType");
		if(count($xml->dynamicData))
		{
			if(empty($xml->dynamicData))
				$this->dynamicData = array();
			else
				$this->dynamicData = \Kaltura\Client\ParseUtils::unmarshalMap($xml->dynamicData, "KalturaStringValue");
		}
		if(count($xml->isHouseholdMaster))
		{
			if(!empty($xml->isHouseholdMaster))
				$this->isHouseholdMaster = true;
			else
				$this->isHouseholdMaster = false;
		}
		if(count($xml->suspentionState))
			$this->suspentionState = (string)$xml->suspentionState;
		if(count($xml->userState))
			$this->userState = (string)$xml->userState;
	}
	/**
	 * Household identifier
	 * @var int
	 * @readonly
	 */
	public $householdId = null;

	/**
	 * Email
	 * @var string
	 */
	public $email = null;

	/**
	 * Address
	 * @var string
	 */
	public $address = null;

	/**
	 * City
	 * @var string
	 */
	public $city = null;

	/**
	 * Country
	 * @var \Kaltura\Client\Type\Country
	 */
	public $country;

	/**
	 * Zip code
	 * @var string
	 */
	public $zip = null;

	/**
	 * Phone
	 * @var string
	 */
	public $phone = null;

	/**
	 * Affiliate code
	 * @var string
	 */
	public $affiliateCode = null;

	/**
	 * External user identifier
	 * @var string
	 */
	public $externalId = null;

	/**
	 * User type
	 * @var \Kaltura\Client\Type\OTTUserType
	 */
	public $userType;

	/**
	 * Dynamic data
	 * @var array<string, KalturaStringValue>
	 */
	public $dynamicData;

	/**
	 * Is the user the household master
	 * @var bool
	 * @readonly
	 */
	public $isHouseholdMaster = null;

	/**
	 * Suspention state
	 * @var \Kaltura\Client\Enum\HouseholdSuspentionState
	 * @readonly
	 */
	public $suspentionState = null;

	/**
	 * User state
	 * @var \Kaltura\Client\Enum\UserState
	 * @readonly
	 */
	public $userState = null;

}
