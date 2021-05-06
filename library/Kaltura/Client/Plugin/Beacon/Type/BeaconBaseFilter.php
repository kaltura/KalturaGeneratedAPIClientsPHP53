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
abstract class BeaconBaseFilter extends \Kaltura\Client\Type\Filter
{
	public function getKalturaObjectType()
	{
		return 'KalturaBeaconBaseFilter';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->updatedAtGreaterThanOrEqual))
			$this->updatedAtGreaterThanOrEqual = (int)$xml->updatedAtGreaterThanOrEqual;
		if(count($xml->updatedAtLessThanOrEqual))
			$this->updatedAtLessThanOrEqual = (int)$xml->updatedAtLessThanOrEqual;
		if(count($xml->relatedObjectTypeIn))
			$this->relatedObjectTypeIn = (string)$xml->relatedObjectTypeIn;
		if(count($xml->relatedObjectTypeEqual))
			$this->relatedObjectTypeEqual = (string)$xml->relatedObjectTypeEqual;
		if(count($xml->eventTypeIn))
			$this->eventTypeIn = (string)$xml->eventTypeIn;
		if(count($xml->objectIdIn))
			$this->objectIdIn = (string)$xml->objectIdIn;
	}
	/**
	 * 
	 * @var int
	 */
	public $updatedAtGreaterThanOrEqual = null;

	/**
	 * 
	 * @var int
	 */
	public $updatedAtLessThanOrEqual = null;

	/**
	 * 
	 * @var string
	 */
	public $relatedObjectTypeIn = null;

	/**
	 * 
	 * @var \Kaltura\Client\Plugin\Beacon\Enum\BeaconObjectTypes
	 */
	public $relatedObjectTypeEqual = null;

	/**
	 * 
	 * @var string
	 */
	public $eventTypeIn = null;

	/**
	 * 
	 * @var string
	 */
	public $objectIdIn = null;

}
