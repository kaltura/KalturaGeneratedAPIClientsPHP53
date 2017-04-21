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
class FileSync extends \Kaltura\Client\ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaFileSync';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->id))
			$this->id = (string)$xml->id;
		if(count($xml->partnerId))
			$this->partnerId = (int)$xml->partnerId;
		if(count($xml->fileObjectType))
			$this->fileObjectType = (string)$xml->fileObjectType;
		if(count($xml->objectId))
			$this->objectId = (string)$xml->objectId;
		if(count($xml->version))
			$this->version = (string)$xml->version;
		if(count($xml->objectSubType))
			$this->objectSubType = (int)$xml->objectSubType;
		if(count($xml->dc))
			$this->dc = (string)$xml->dc;
		if(count($xml->original))
			$this->original = (int)$xml->original;
		if(count($xml->createdAt))
			$this->createdAt = (int)$xml->createdAt;
		if(count($xml->updatedAt))
			$this->updatedAt = (int)$xml->updatedAt;
		if(count($xml->readyAt))
			$this->readyAt = (int)$xml->readyAt;
		if(count($xml->syncTime))
			$this->syncTime = (int)$xml->syncTime;
		if(count($xml->status))
			$this->status = (int)$xml->status;
		if(count($xml->fileType))
			$this->fileType = (int)$xml->fileType;
		if(count($xml->linkedId))
			$this->linkedId = (int)$xml->linkedId;
		if(count($xml->linkCount))
			$this->linkCount = (int)$xml->linkCount;
		if(count($xml->fileRoot))
			$this->fileRoot = (string)$xml->fileRoot;
		if(count($xml->filePath))
			$this->filePath = (string)$xml->filePath;
		if(count($xml->fileSize))
			$this->fileSize = (float)$xml->fileSize;
		if(count($xml->fileUrl))
			$this->fileUrl = (string)$xml->fileUrl;
		if(count($xml->fileContent))
			$this->fileContent = (string)$xml->fileContent;
		if(count($xml->fileDiscSize))
			$this->fileDiscSize = (float)$xml->fileDiscSize;
		if(count($xml->isCurrentDc))
		{
			if(!empty($xml->isCurrentDc))
				$this->isCurrentDc = true;
			else
				$this->isCurrentDc = false;
		}
		if(count($xml->isDir))
		{
			if(!empty($xml->isDir))
				$this->isDir = true;
			else
				$this->isDir = false;
		}
		if(count($xml->originalId))
			$this->originalId = (int)$xml->originalId;
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
	 * @readonly
	 */
	public $partnerId = null;

	/**
	 * 
	 * @var \Kaltura\Client\Enum\FileSyncObjectType
	 * @readonly
	 */
	public $fileObjectType = null;

	/**
	 * 
	 * @var string
	 * @readonly
	 */
	public $objectId = null;

	/**
	 * 
	 * @var string
	 * @readonly
	 */
	public $version = null;

	/**
	 * 
	 * @var int
	 * @readonly
	 */
	public $objectSubType = null;

	/**
	 * 
	 * @var string
	 * @readonly
	 */
	public $dc = null;

	/**
	 * 
	 * @var int
	 * @readonly
	 */
	public $original = null;

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
	 * @readonly
	 */
	public $readyAt = null;

	/**
	 * 
	 * @var int
	 * @readonly
	 */
	public $syncTime = null;

	/**
	 * 
	 * @var \Kaltura\Client\Plugin\FileSync\Enum\FileSyncStatus
	 */
	public $status = null;

	/**
	 * 
	 * @var \Kaltura\Client\Plugin\FileSync\Enum\FileSyncType
	 * @readonly
	 */
	public $fileType = null;

	/**
	 * 
	 * @var int
	 * @readonly
	 */
	public $linkedId = null;

	/**
	 * 
	 * @var int
	 * @readonly
	 */
	public $linkCount = null;

	/**
	 * 
	 * @var string
	 */
	public $fileRoot = null;

	/**
	 * 
	 * @var string
	 */
	public $filePath = null;

	/**
	 * 
	 * @var float
	 * @readonly
	 */
	public $fileSize = null;

	/**
	 * 
	 * @var string
	 * @readonly
	 */
	public $fileUrl = null;

	/**
	 * 
	 * @var string
	 * @readonly
	 */
	public $fileContent = null;

	/**
	 * 
	 * @var float
	 * @readonly
	 */
	public $fileDiscSize = null;

	/**
	 * 
	 * @var bool
	 * @readonly
	 */
	public $isCurrentDc = null;

	/**
	 * 
	 * @var bool
	 * @readonly
	 */
	public $isDir = null;

	/**
	 * 
	 * @var int
	 * @readonly
	 */
	public $originalId = null;

}
