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
 * Household details
 * @package Kaltura
 * @subpackage Client
 */
class Household extends \Kaltura\Client\ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaHousehold';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->id))
			$this->id = (string)$xml->id;
		if(count($xml->name))
			$this->name = (string)$xml->name;
		if(count($xml->description))
			$this->description = (string)$xml->description;
		if(count($xml->externalId))
			$this->externalId = (string)$xml->externalId;
		if(count($xml->householdLimitationsId))
			$this->householdLimitationsId = (int)$xml->householdLimitationsId;
		if(count($xml->devicesLimit))
			$this->devicesLimit = (int)$xml->devicesLimit;
		if(count($xml->usersLimit))
			$this->usersLimit = (int)$xml->usersLimit;
		if(count($xml->concurrentLimit))
			$this->concurrentLimit = (int)$xml->concurrentLimit;
		if(count($xml->regionId))
			$this->regionId = (int)$xml->regionId;
		if(count($xml->state))
			$this->state = (string)$xml->state;
		if(count($xml->isFrequencyEnabled))
		{
			if(!empty($xml->isFrequencyEnabled))
				$this->isFrequencyEnabled = true;
			else
				$this->isFrequencyEnabled = false;
		}
		if(count($xml->frequencyNextDeviceAction))
			$this->frequencyNextDeviceAction = (string)$xml->frequencyNextDeviceAction;
		if(count($xml->frequencyNextUserAction))
			$this->frequencyNextUserAction = (string)$xml->frequencyNextUserAction;
		if(count($xml->restriction))
			$this->restriction = (string)$xml->restriction;
	}
	/**
	 * Household identifier
	 * @var int
	 * @readonly
	 */
	public $id = null;

	/**
	 * Household name
	 * @var string
	 */
	public $name = null;

	/**
	 * Household description
	 * @var string
	 */
	public $description = null;

	/**
	 * Household external identifier
	 * @var string
	 */
	public $externalId = null;

	/**
	 * Household limitation module identifier
	 * @var int
	 */
	public $householdLimitationsId = null;

	/**
	 * The max number of the devices that can be added to the household
	 * @var int
	 */
	public $devicesLimit = null;

	/**
	 * The max number of the users that can be added to the household
	 * @var int
	 */
	public $usersLimit = null;

	/**
	 * The max number of concurrent streams in the household
	 * @var int
	 */
	public $concurrentLimit = null;

	/**
	 * The households region identifier
	 * @var int
	 */
	public $regionId = null;

	/**
	 * Household state
	 * @var \Kaltura\Client\Enum\HouseholdState
	 * @readonly
	 */
	public $state = null;

	/**
	 * Is household frequency enabled
	 * @var bool
	 */
	public $isFrequencyEnabled = null;

	/**
	 * The next time a device is allowed to be removed from the household (epoch)
	 * @var int
	 */
	public $frequencyNextDeviceAction = null;

	/**
	 * The next time a user is allowed to be removed from the household (epoch)
	 * @var int
	 */
	public $frequencyNextUserAction = null;

	/**
	 * Household restriction
	 * @var \Kaltura\Client\Enum\HouseholdRestriction
	 */
	public $restriction = null;

}
