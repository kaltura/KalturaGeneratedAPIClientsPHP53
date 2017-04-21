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
namespace Kaltura\Client\Plugin\ContentDistribution\Type;

/**
 * @package Kaltura
 * @subpackage Client
 */
abstract class DistributionProvider extends \Kaltura\Client\ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaDistributionProvider';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->type))
			$this->type = (string)$xml->type;
		if(count($xml->name))
			$this->name = (string)$xml->name;
		if(count($xml->scheduleUpdateEnabled))
		{
			if(!empty($xml->scheduleUpdateEnabled))
				$this->scheduleUpdateEnabled = true;
			else
				$this->scheduleUpdateEnabled = false;
		}
		if(count($xml->availabilityUpdateEnabled))
		{
			if(!empty($xml->availabilityUpdateEnabled))
				$this->availabilityUpdateEnabled = true;
			else
				$this->availabilityUpdateEnabled = false;
		}
		if(count($xml->deleteInsteadUpdate))
		{
			if(!empty($xml->deleteInsteadUpdate))
				$this->deleteInsteadUpdate = true;
			else
				$this->deleteInsteadUpdate = false;
		}
		if(count($xml->intervalBeforeSunrise))
			$this->intervalBeforeSunrise = (int)$xml->intervalBeforeSunrise;
		if(count($xml->intervalBeforeSunset))
			$this->intervalBeforeSunset = (int)$xml->intervalBeforeSunset;
		if(count($xml->updateRequiredEntryFields))
			$this->updateRequiredEntryFields = (string)$xml->updateRequiredEntryFields;
		if(count($xml->updateRequiredMetadataXPaths))
			$this->updateRequiredMetadataXPaths = (string)$xml->updateRequiredMetadataXPaths;
	}
	/**
	 * 
	 * @var \Kaltura\Client\Plugin\ContentDistribution\Enum\DistributionProviderType
	 * @readonly
	 */
	public $type = null;

	/**
	 * 
	 * @var string
	 */
	public $name = null;

	/**
	 * 
	 * @var bool
	 */
	public $scheduleUpdateEnabled = null;

	/**
	 * 
	 * @var bool
	 */
	public $availabilityUpdateEnabled = null;

	/**
	 * 
	 * @var bool
	 */
	public $deleteInsteadUpdate = null;

	/**
	 * 
	 * @var int
	 */
	public $intervalBeforeSunrise = null;

	/**
	 * 
	 * @var int
	 */
	public $intervalBeforeSunset = null;

	/**
	 * 
	 * @var string
	 */
	public $updateRequiredEntryFields = null;

	/**
	 * 
	 * @var string
	 */
	public $updateRequiredMetadataXPaths = null;

}
