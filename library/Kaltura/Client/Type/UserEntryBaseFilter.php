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
abstract class UserEntryBaseFilter extends \Kaltura\Client\Type\RelatedFilter
{
	public function getKalturaObjectType()
	{
		return 'KalturaUserEntryBaseFilter';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->idEqual))
			$this->idEqual = (int)$xml->idEqual;
		if(count($xml->idIn))
			$this->idIn = (string)$xml->idIn;
		if(count($xml->idNotIn))
			$this->idNotIn = (string)$xml->idNotIn;
		if(count($xml->entryIdEqual))
			$this->entryIdEqual = (string)$xml->entryIdEqual;
		if(count($xml->entryIdIn))
			$this->entryIdIn = (string)$xml->entryIdIn;
		if(count($xml->entryIdNotIn))
			$this->entryIdNotIn = (string)$xml->entryIdNotIn;
		if(count($xml->userIdEqual))
			$this->userIdEqual = (string)$xml->userIdEqual;
		if(count($xml->userIdIn))
			$this->userIdIn = (string)$xml->userIdIn;
		if(count($xml->userIdNotIn))
			$this->userIdNotIn = (string)$xml->userIdNotIn;
		if(count($xml->statusEqual))
			$this->statusEqual = (string)$xml->statusEqual;
		if(count($xml->createdAtLessThanOrEqual))
			$this->createdAtLessThanOrEqual = (int)$xml->createdAtLessThanOrEqual;
		if(count($xml->createdAtGreaterThanOrEqual))
			$this->createdAtGreaterThanOrEqual = (int)$xml->createdAtGreaterThanOrEqual;
		if(count($xml->updatedAtLessThanOrEqual))
			$this->updatedAtLessThanOrEqual = (int)$xml->updatedAtLessThanOrEqual;
		if(count($xml->updatedAtGreaterThanOrEqual))
			$this->updatedAtGreaterThanOrEqual = (int)$xml->updatedAtGreaterThanOrEqual;
		if(count($xml->typeEqual))
			$this->typeEqual = (string)$xml->typeEqual;
		if(count($xml->extendedStatusEqual))
			$this->extendedStatusEqual = (string)$xml->extendedStatusEqual;
		if(count($xml->extendedStatusIn))
			$this->extendedStatusIn = (string)$xml->extendedStatusIn;
		if(count($xml->extendedStatusNotIn))
			$this->extendedStatusNotIn = (string)$xml->extendedStatusNotIn;
	}
	/**
	 * 
	 * @var int
	 */
	public $idEqual = null;

	/**
	 * 
	 * @var string
	 */
	public $idIn = null;

	/**
	 * 
	 * @var string
	 */
	public $idNotIn = null;

	/**
	 * 
	 * @var string
	 */
	public $entryIdEqual = null;

	/**
	 * 
	 * @var string
	 */
	public $entryIdIn = null;

	/**
	 * 
	 * @var string
	 */
	public $entryIdNotIn = null;

	/**
	 * 
	 * @var string
	 */
	public $userIdEqual = null;

	/**
	 * 
	 * @var string
	 */
	public $userIdIn = null;

	/**
	 * 
	 * @var string
	 */
	public $userIdNotIn = null;

	/**
	 * 
	 * @var \Kaltura\Client\Enum\UserEntryStatus
	 */
	public $statusEqual = null;

	/**
	 * 
	 * @var int
	 */
	public $createdAtLessThanOrEqual = null;

	/**
	 * 
	 * @var int
	 */
	public $createdAtGreaterThanOrEqual = null;

	/**
	 * 
	 * @var int
	 */
	public $updatedAtLessThanOrEqual = null;

	/**
	 * 
	 * @var int
	 */
	public $updatedAtGreaterThanOrEqual = null;

	/**
	 * 
	 * @var \Kaltura\Client\Enum\UserEntryType
	 */
	public $typeEqual = null;

	/**
	 * 
	 * @var \Kaltura\Client\Enum\UserEntryExtendedStatus
	 */
	public $extendedStatusEqual = null;

	/**
	 * 
	 * @var string
	 */
	public $extendedStatusIn = null;

	/**
	 * 
	 * @var string
	 */
	public $extendedStatusNotIn = null;

}
