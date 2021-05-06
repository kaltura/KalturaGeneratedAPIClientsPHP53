<?php
// ===================================================================================================
//                           _  __     _ _
//                          | |/ /__ _| | |_ _  _ _ _ __ _
//                          | ' </ _` | |  _| || | '_/ _` |
//                          |_|\_\__,_|_|\__|\_,_|_| \__,_|
//
// This file is part of the Kaltura Collaborative Media Suite which allows users
// to do with audio, video, and animation what Wiki platforms allow them to do with
// text.
//
// Copyright (C) 2006-2021  Kaltura Inc.
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
namespace Kaltura\Client\Plugin\Beacon\Type;

/**
 * @package Kaltura
 * @subpackage Client
 */
class Beacon extends \Kaltura\Client\ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaBeacon';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->id))
			$this->id = (string)$xml->id;
		if(count($xml->indexType))
			$this->indexType = (string)$xml->indexType;
		if(count($xml->updatedAt))
			$this->updatedAt = (int)$xml->updatedAt;
		if(count($xml->relatedObjectType))
			$this->relatedObjectType = (string)$xml->relatedObjectType;
		if(count($xml->eventType))
			$this->eventType = (string)$xml->eventType;
		if(count($xml->objectId))
			$this->objectId = (string)$xml->objectId;
		if(count($xml->privateData))
			$this->privateData = (string)$xml->privateData;
		if(count($xml->rawData))
			$this->rawData = (string)$xml->rawData;
	}
	/**
	 * Beacon id
	 * @var string
	 * @readonly
	 */
	public $id = null;

	/**
	 * Beacon indexType
	 * @var string
	 * @readonly
	 */
	public $indexType = null;

	/**
	 * Beacon update date as Unix timestamp (In seconds)
	 * @var int
	 * @readonly
	 */
	public $updatedAt = null;

	/**
	 * The object which this beacon belongs to
	 * @var \Kaltura\Client\Plugin\Beacon\Enum\BeaconObjectTypes
	 */
	public $relatedObjectType = null;

	/**
	 * 
	 * @var string
	 */
	public $eventType = null;

	/**
	 * 
	 * @var string
	 */
	public $objectId = null;

	/**
	 * 
	 * @var string
	 */
	public $privateData = null;

	/**
	 * 
	 * @var string
	 */
	public $rawData = null;

}
