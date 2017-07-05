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
 * Device details
 * @package Kaltura
 * @subpackage Client
 */
class HouseholdDevice extends \Kaltura\Client\ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaHouseholdDevice';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->householdId))
			$this->householdId = (int)$xml->householdId;
		if(count($xml->udid))
			$this->udid = (string)$xml->udid;
		if(count($xml->name))
			$this->name = (string)$xml->name;
		if(count($xml->brand))
			$this->brand = (string)$xml->brand;
		if(count($xml->brandId))
			$this->brandId = (int)$xml->brandId;
		if(count($xml->activatedOn))
			$this->activatedOn = (string)$xml->activatedOn;
		if(count($xml->status))
			$this->status = (string)$xml->status;
	}
	/**
	 * Household identifier
	 * @var int
	 */
	public $householdId = null;

	/**
	 * Device UDID
	 * @var string
	 */
	public $udid = null;

	/**
	 * Device name
	 * @var string
	 */
	public $name = null;

	/**
	 * Device brand name
	 * @var string
	 */
	public $brand = null;

	/**
	 * Device brand identifier
	 * @var int
	 */
	public $brandId = null;

	/**
	 * Device activation date (epoch)
	 * @var int
	 */
	public $activatedOn = null;

	/**
	 * Device state
	 * @var \Kaltura\Client\Enum\DeviceStatus
	 * @readonly
	 */
	public $status = null;

}
