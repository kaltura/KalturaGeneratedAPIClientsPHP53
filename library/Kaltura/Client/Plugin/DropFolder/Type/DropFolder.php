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
		if(count($xml->name))
			$this->name = (string)$xml->name;
		if(count($xml->description))
			$this->description = (string)$xml->description;
		if(count($xml->type))
			$this->type = (string)$xml->type;
		if(count($xml->status))
			$this->status = (int)$xml->status;
		if(count($xml->conversionProfileId))
			$this->conversionProfileId = (int)$xml->conversionProfileId;
		if(count($xml->dc))
			$this->dc = (int)$xml->dc;
		if(count($xml->path))
			$this->path = (string)$xml->path;
		if(count($xml->fileSizeCheckInterval))
			$this->fileSizeCheckInterval = (int)$xml->fileSizeCheckInterval;
		if(count($xml->fileDeletePolicy))
			$this->fileDeletePolicy = (int)$xml->fileDeletePolicy;
		if(count($xml->autoFileDeleteDays))
			$this->autoFileDeleteDays = (int)$xml->autoFileDeleteDays;
		if(count($xml->fileHandlerType))
			$this->fileHandlerType = (string)$xml->fileHandlerType;
		if(count($xml->fileNamePatterns))
			$this->fileNamePatterns = (string)$xml->fileNamePatterns;
		if(count($xml->fileHandlerConfig) && !empty($xml->fileHandlerConfig))
			$this->fileHandlerConfig = \Kaltura\Client\ParseUtils::unmarshalObject($xml->fileHandlerConfig, "KalturaDropFolderFileHandlerConfig");
		if(count($xml->tags))
			$this->tags = (string)$xml->tags;
		if(count($xml->errorCode))
			$this->errorCode = (string)$xml->errorCode;
		if(count($xml->errorDescription))
			$this->errorDescription = (string)$xml->errorDescription;
		if(count($xml->ignoreFileNamePatterns))
			$this->ignoreFileNamePatterns = (string)$xml->ignoreFileNamePatterns;
		if(count($xml->createdAt))
			$this->createdAt = (int)$xml->createdAt;
		if(count($xml->updatedAt))
			$this->updatedAt = (int)$xml->updatedAt;
		if(count($xml->lastAccessedAt))
			$this->lastAccessedAt = (int)$xml->lastAccessedAt;
		if(count($xml->incremental))
		{
			if(!empty($xml->incremental))
				$this->incremental = true;
			else
				$this->incremental = false;
		}
		if(count($xml->lastFileTimestamp))
			$this->lastFileTimestamp = (int)$xml->lastFileTimestamp;
		if(count($xml->metadataProfileId))
			$this->metadataProfileId = (int)$xml->metadataProfileId;
		if(count($xml->categoriesMetadataFieldName))
			$this->categoriesMetadataFieldName = (string)$xml->categoriesMetadataFieldName;
		if(count($xml->enforceEntitlement))
		{
			if(!empty($xml->enforceEntitlement))
				$this->enforceEntitlement = true;
			else
				$this->enforceEntitlement = false;
		}
		if(count($xml->shouldValidateKS))
		{
			if(!empty($xml->shouldValidateKS))
				$this->shouldValidateKS = true;
			else
				$this->shouldValidateKS = false;
		}
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
