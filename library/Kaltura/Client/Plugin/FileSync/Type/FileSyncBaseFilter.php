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
namespace Kaltura\Client\Plugin\FileSync\Type;

/**
 * @package Kaltura
 * @subpackage Client
 */
abstract class FileSyncBaseFilter extends \Kaltura\Client\Type\Filter
{
	public function getKalturaObjectType()
	{
		return 'KalturaFileSyncBaseFilter';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->partnerIdEqual))
			$this->partnerIdEqual = (int)$xml->partnerIdEqual;
		if(count($xml->fileObjectTypeEqual))
			$this->fileObjectTypeEqual = (string)$xml->fileObjectTypeEqual;
		if(count($xml->fileObjectTypeIn))
			$this->fileObjectTypeIn = (string)$xml->fileObjectTypeIn;
		if(count($xml->objectIdEqual))
			$this->objectIdEqual = (string)$xml->objectIdEqual;
		if(count($xml->objectIdIn))
			$this->objectIdIn = (string)$xml->objectIdIn;
		if(count($xml->versionEqual))
			$this->versionEqual = (string)$xml->versionEqual;
		if(count($xml->versionIn))
			$this->versionIn = (string)$xml->versionIn;
		if(count($xml->objectSubTypeEqual))
			$this->objectSubTypeEqual = (int)$xml->objectSubTypeEqual;
		if(count($xml->objectSubTypeIn))
			$this->objectSubTypeIn = (string)$xml->objectSubTypeIn;
		if(count($xml->dcEqual))
			$this->dcEqual = (string)$xml->dcEqual;
		if(count($xml->dcIn))
			$this->dcIn = (string)$xml->dcIn;
		if(count($xml->originalEqual))
			$this->originalEqual = (int)$xml->originalEqual;
		if(count($xml->createdAtGreaterThanOrEqual))
			$this->createdAtGreaterThanOrEqual = (int)$xml->createdAtGreaterThanOrEqual;
		if(count($xml->createdAtLessThanOrEqual))
			$this->createdAtLessThanOrEqual = (int)$xml->createdAtLessThanOrEqual;
		if(count($xml->updatedAtGreaterThanOrEqual))
			$this->updatedAtGreaterThanOrEqual = (int)$xml->updatedAtGreaterThanOrEqual;
		if(count($xml->updatedAtLessThanOrEqual))
			$this->updatedAtLessThanOrEqual = (int)$xml->updatedAtLessThanOrEqual;
		if(count($xml->readyAtGreaterThanOrEqual))
			$this->readyAtGreaterThanOrEqual = (int)$xml->readyAtGreaterThanOrEqual;
		if(count($xml->readyAtLessThanOrEqual))
			$this->readyAtLessThanOrEqual = (int)$xml->readyAtLessThanOrEqual;
		if(count($xml->syncTimeGreaterThanOrEqual))
			$this->syncTimeGreaterThanOrEqual = (int)$xml->syncTimeGreaterThanOrEqual;
		if(count($xml->syncTimeLessThanOrEqual))
			$this->syncTimeLessThanOrEqual = (int)$xml->syncTimeLessThanOrEqual;
		if(count($xml->statusEqual))
			$this->statusEqual = (int)$xml->statusEqual;
		if(count($xml->statusIn))
			$this->statusIn = (string)$xml->statusIn;
		if(count($xml->fileTypeEqual))
			$this->fileTypeEqual = (int)$xml->fileTypeEqual;
		if(count($xml->fileTypeIn))
			$this->fileTypeIn = (string)$xml->fileTypeIn;
		if(count($xml->linkedIdEqual))
			$this->linkedIdEqual = (int)$xml->linkedIdEqual;
		if(count($xml->linkCountGreaterThanOrEqual))
			$this->linkCountGreaterThanOrEqual = (int)$xml->linkCountGreaterThanOrEqual;
		if(count($xml->linkCountLessThanOrEqual))
			$this->linkCountLessThanOrEqual = (int)$xml->linkCountLessThanOrEqual;
		if(count($xml->fileSizeGreaterThanOrEqual))
			$this->fileSizeGreaterThanOrEqual = (float)$xml->fileSizeGreaterThanOrEqual;
		if(count($xml->fileSizeLessThanOrEqual))
			$this->fileSizeLessThanOrEqual = (float)$xml->fileSizeLessThanOrEqual;
	}
	/**
	 * 
	 * @var int
	 */
	public $partnerIdEqual = null;

	/**
	 * 
	 * @var \Kaltura\Client\Enum\FileSyncObjectType
	 */
	public $fileObjectTypeEqual = null;

	/**
	 * 
	 * @var string
	 */
	public $fileObjectTypeIn = null;

	/**
	 * 
	 * @var string
	 */
	public $objectIdEqual = null;

	/**
	 * 
	 * @var string
	 */
	public $objectIdIn = null;

	/**
	 * 
	 * @var string
	 */
	public $versionEqual = null;

	/**
	 * 
	 * @var string
	 */
	public $versionIn = null;

	/**
	 * 
	 * @var int
	 */
	public $objectSubTypeEqual = null;

	/**
	 * 
	 * @var string
	 */
	public $objectSubTypeIn = null;

	/**
	 * 
	 * @var string
	 */
	public $dcEqual = null;

	/**
	 * 
	 * @var string
	 */
	public $dcIn = null;

	/**
	 * 
	 * @var int
	 */
	public $originalEqual = null;

	/**
	 * 
	 * @var int
	 */
	public $createdAtGreaterThanOrEqual = null;

	/**
	 * 
	 * @var int
	 */
	public $createdAtLessThanOrEqual = null;

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
	 * @var int
	 */
	public $readyAtGreaterThanOrEqual = null;

	/**
	 * 
	 * @var int
	 */
	public $readyAtLessThanOrEqual = null;

	/**
	 * 
	 * @var int
	 */
	public $syncTimeGreaterThanOrEqual = null;

	/**
	 * 
	 * @var int
	 */
	public $syncTimeLessThanOrEqual = null;

	/**
	 * 
	 * @var \Kaltura\Client\Plugin\FileSync\Enum\FileSyncStatus
	 */
	public $statusEqual = null;

	/**
	 * 
	 * @var string
	 */
	public $statusIn = null;

	/**
	 * 
	 * @var \Kaltura\Client\Plugin\FileSync\Enum\FileSyncType
	 */
	public $fileTypeEqual = null;

	/**
	 * 
	 * @var string
	 */
	public $fileTypeIn = null;

	/**
	 * 
	 * @var int
	 */
	public $linkedIdEqual = null;

	/**
	 * 
	 * @var int
	 */
	public $linkCountGreaterThanOrEqual = null;

	/**
	 * 
	 * @var int
	 */
	public $linkCountLessThanOrEqual = null;

	/**
	 * 
	 * @var float
	 */
	public $fileSizeGreaterThanOrEqual = null;

	/**
	 * 
	 * @var float
	 */
	public $fileSizeLessThanOrEqual = null;

}
