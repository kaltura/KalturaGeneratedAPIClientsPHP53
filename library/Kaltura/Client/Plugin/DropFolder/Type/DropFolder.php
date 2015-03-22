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
// Copyright (C) 2006-2015  Kaltura Inc.
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
namespace Kaltura\Client\Plugin\DropFolder\Type;

/**
 * @package Kaltura
 * @subpackage Client
 */
class DropFolder extends \Kaltura\Client\ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaDropFolder';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->id))
			$this->id = (int)$xml->id;
		if(count($xml->partnerId))
			$this->partnerId = (int)$xml->partnerId;
		$this->name = (string)$xml->name;
		$this->description = (string)$xml->description;
		$this->type = (string)$xml->type;
		if(count($xml->status))
			$this->status = (int)$xml->status;
		if(count($xml->conversionProfileId))
			$this->conversionProfileId = (int)$xml->conversionProfileId;
		if(count($xml->dc))
			$this->dc = (int)$xml->dc;
		$this->path = (string)$xml->path;
		if(count($xml->fileSizeCheckInterval))
			$this->fileSizeCheckInterval = (int)$xml->fileSizeCheckInterval;
		if(count($xml->fileDeletePolicy))
			$this->fileDeletePolicy = (int)$xml->fileDeletePolicy;
		if(count($xml->autoFileDeleteDays))
			$this->autoFileDeleteDays = (int)$xml->autoFileDeleteDays;
		$this->fileHandlerType = (string)$xml->fileHandlerType;
		$this->fileNamePatterns = (string)$xml->fileNamePatterns;
		if(!empty($xml->fileHandlerConfig))
			$this->fileHandlerConfig = \Kaltura\Client\ParseUtils::unmarshalObject($xml->fileHandlerConfig, "KalturaDropFolderFileHandlerConfig");
		$this->tags = (string)$xml->tags;
		$this->errorCode = (string)$xml->errorCode;
		$this->errorDescription = (string)$xml->errorDescription;
		$this->ignoreFileNamePatterns = (string)$xml->ignoreFileNamePatterns;
		if(count($xml->createdAt))
			$this->createdAt = (int)$xml->createdAt;
		if(count($xml->updatedAt))
			$this->updatedAt = (int)$xml->updatedAt;
		if(count($xml->lastAccessedAt))
			$this->lastAccessedAt = (int)$xml->lastAccessedAt;
		if(!empty($xml->incremental))
			$this->incremental = true;
		if(count($xml->lastFileTimestamp))
			$this->lastFileTimestamp = (int)$xml->lastFileTimestamp;
		if(count($xml->metadataProfileId))
			$this->metadataProfileId = (int)$xml->metadataProfileId;
		$this->categoriesMetadataFieldName = (string)$xml->categoriesMetadataFieldName;
		if(!empty($xml->enforceEntitlement))
			$this->enforceEntitlement = true;
		if(!empty($xml->shouldValidateKS))
			$this->shouldValidateKS = true;
	}
	/**
	 * 
	 * @var int
	 * @readonly
	 */
	public $id = null;

	/**
	 * 
	 * @var int
	 * @insertonly
	 */
	public $partnerId = null;

	/**
	 * 
	 * @var string
	 */
	public $name = null;

	/**
	 * 
	 * @var string
	 */
	public $description = null;

	/**
	 * 
	 * @var \Kaltura\Client\Plugin\DropFolder\Enum\DropFolderType
	 */
	public $type = null;

	/**
	 * 
	 * @var \Kaltura\Client\Plugin\DropFolder\Enum\DropFolderStatus
	 */
	public $status = null;

	/**
	 * 
	 * @var int
	 */
	public $conversionProfileId = null;

	/**
	 * 
	 * @var int
	 */
	public $dc = null;

	/**
	 * 
	 * @var string
	 */
	public $path = null;

	/**
	 * The ammount of time, in seconds, that should pass so that a file with no change in size we'll be treated as "finished uploading to folder"
	 * 	 
	 * @var int
	 */
	public $fileSizeCheckInterval = null;

	/**
	 * 
	 * @var \Kaltura\Client\Plugin\DropFolder\Enum\DropFolderFileDeletePolicy
	 */
	public $fileDeletePolicy = null;

	/**
	 * 
	 * @var int
	 */
	public $autoFileDeleteDays = null;

	/**
	 * 
	 * @var \Kaltura\Client\Plugin\DropFolder\Enum\DropFolderFileHandlerType
	 */
	public $fileHandlerType = null;

	/**
	 * 
	 * @var string
	 */
	public $fileNamePatterns = null;

	/**
	 * 
	 * @var \Kaltura\Client\Plugin\DropFolder\Type\DropFolderFileHandlerConfig
	 */
	public $fileHandlerConfig;

	/**
	 * 
	 * @var string
	 */
	public $tags = null;

	/**
	 * 
	 * @var \Kaltura\Client\Plugin\DropFolder\Enum\DropFolderErrorCode
	 */
	public $errorCode = null;

	/**
	 * 
	 * @var string
	 */
	public $errorDescription = null;

	/**
	 * 
	 * @var string
	 */
	public $ignoreFileNamePatterns = null;

	/**
	 * 
	 * @var int
	 * @readonly
	 */
	public $createdAt = null;

	/**
	 * 
	 * @var int
	 * @readonly
	 */
	public $updatedAt = null;

	/**
	 * 
	 * @var int
	 */
	public $lastAccessedAt = null;

	/**
	 * 
	 * @var bool
	 */
	public $incremental = null;

	/**
	 * 
	 * @var int
	 */
	public $lastFileTimestamp = null;

	/**
	 * 
	 * @var int
	 */
	public $metadataProfileId = null;

	/**
	 * 
	 * @var string
	 */
	public $categoriesMetadataFieldName = null;

	/**
	 * 
	 * @var bool
	 */
	public $enforceEntitlement = null;

	/**
	 * 
	 * @var bool
	 */
	public $shouldValidateKS = null;

}
