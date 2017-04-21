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
class StorageProfile extends \Kaltura\Client\ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaStorageProfile';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->id))
			$this->id = (int)$xml->id;
		if(count($xml->createdAt))
			$this->createdAt = (int)$xml->createdAt;
		if(count($xml->updatedAt))
			$this->updatedAt = (int)$xml->updatedAt;
		if(count($xml->partnerId))
			$this->partnerId = (int)$xml->partnerId;
		if(count($xml->name))
			$this->name = (string)$xml->name;
		if(count($xml->systemName))
			$this->systemName = (string)$xml->systemName;
		if(count($xml->desciption))
			$this->desciption = (string)$xml->desciption;
		if(count($xml->status))
			$this->status = (int)$xml->status;
		if(count($xml->protocol))
			$this->protocol = (string)$xml->protocol;
		if(count($xml->storageUrl))
			$this->storageUrl = (string)$xml->storageUrl;
		if(count($xml->storageBaseDir))
			$this->storageBaseDir = (string)$xml->storageBaseDir;
		if(count($xml->storageUsername))
			$this->storageUsername = (string)$xml->storageUsername;
		if(count($xml->storagePassword))
			$this->storagePassword = (string)$xml->storagePassword;
		if(count($xml->storageFtpPassiveMode))
		{
			if(!empty($xml->storageFtpPassiveMode))
				$this->storageFtpPassiveMode = true;
			else
				$this->storageFtpPassiveMode = false;
		}
		if(count($xml->minFileSize))
			$this->minFileSize = (int)$xml->minFileSize;
		if(count($xml->maxFileSize))
			$this->maxFileSize = (int)$xml->maxFileSize;
		if(count($xml->flavorParamsIds))
			$this->flavorParamsIds = (string)$xml->flavorParamsIds;
		if(count($xml->maxConcurrentConnections))
			$this->maxConcurrentConnections = (int)$xml->maxConcurrentConnections;
		if(count($xml->pathManagerClass))
			$this->pathManagerClass = (string)$xml->pathManagerClass;
		if(count($xml->pathManagerParams))
		{
			if(empty($xml->pathManagerParams))
				$this->pathManagerParams = array();
			else
				$this->pathManagerParams = \Kaltura\Client\ParseUtils::unmarshalArray($xml->pathManagerParams, "KalturaKeyValue");
		}
		if(count($xml->trigger))
			$this->trigger = (int)$xml->trigger;
		if(count($xml->deliveryPriority))
			$this->deliveryPriority = (int)$xml->deliveryPriority;
		if(count($xml->deliveryStatus))
			$this->deliveryStatus = (int)$xml->deliveryStatus;
		if(count($xml->readyBehavior))
			$this->readyBehavior = (int)$xml->readyBehavior;
		if(count($xml->allowAutoDelete))
			$this->allowAutoDelete = (int)$xml->allowAutoDelete;
		if(count($xml->createFileLink))
		{
			if(!empty($xml->createFileLink))
				$this->createFileLink = true;
			else
				$this->createFileLink = false;
		}
		if(count($xml->rules))
		{
			if(empty($xml->rules))
				$this->rules = array();
			else
				$this->rules = \Kaltura\Client\ParseUtils::unmarshalArray($xml->rules, "KalturaRule");
		}
		if(count($xml->deliveryProfileIds))
		{
			if(empty($xml->deliveryProfileIds))
				$this->deliveryProfileIds = array();
			else
				$this->deliveryProfileIds = \Kaltura\Client\ParseUtils::unmarshalArray($xml->deliveryProfileIds, "KalturaKeyValue");
		}
		if(count($xml->privateKey))
			$this->privateKey = (string)$xml->privateKey;
		if(count($xml->publicKey))
			$this->publicKey = (string)$xml->publicKey;
		if(count($xml->passPhrase))
			$this->passPhrase = (string)$xml->passPhrase;
		if(count($xml->shouldExportThumbs))
		{
			if(!empty($xml->shouldExportThumbs))
				$this->shouldExportThumbs = true;
			else
				$this->shouldExportThumbs = false;
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
	public $systemName = null;

	/**
	 * 
	 * @var string
	 */
	public $desciption = null;

	/**
	 * 
	 * @var \Kaltura\Client\Enum\StorageProfileStatus
	 */
	public $status = null;

	/**
	 * 
	 * @var \Kaltura\Client\Enum\StorageProfileProtocol
	 */
	public $protocol = null;

	/**
	 * 
	 * @var string
	 */
	public $storageUrl = null;

	/**
	 * 
	 * @var string
	 */
	public $storageBaseDir = null;

	/**
	 * 
	 * @var string
	 */
	public $storageUsername = null;

	/**
	 * 
	 * @var string
	 */
	public $storagePassword = null;

	/**
	 * 
	 * @var bool
	 */
	public $storageFtpPassiveMode = null;

	/**
	 * 
	 * @var int
	 */
	public $minFileSize = null;

	/**
	 * 
	 * @var int
	 */
	public $maxFileSize = null;

	/**
	 * 
	 * @var string
	 */
	public $flavorParamsIds = null;

	/**
	 * 
	 * @var int
	 */
	public $maxConcurrentConnections = null;

	/**
	 * 
	 * @var string
	 */
	public $pathManagerClass = null;

	/**
	 * 
	 * @var array<KalturaKeyValue>
	 */
	public $pathManagerParams;

	/**
	 * No need to create enum for temp field
	 * @var int
	 */
	public $trigger = null;

	/**
	 * Delivery Priority
	 * @var int
	 */
	public $deliveryPriority = null;

	/**
	 * 
	 * @var \Kaltura\Client\Enum\StorageProfileDeliveryStatus
	 */
	public $deliveryStatus = null;

	/**
	 * 
	 * @var \Kaltura\Client\Enum\StorageProfileReadyBehavior
	 */
	public $readyBehavior = null;

	/**
	 * Flag sugnifying that the storage exported content should be deleted when soure entry is deleted
	 * @var int
	 */
	public $allowAutoDelete = null;

	/**
	 * Indicates to the local file transfer manager to create a link to the file instead of copying it
	 * @var bool
	 */
	public $createFileLink = null;

	/**
	 * Holds storage profile export rules
	 * @var array<KalturaRule>
	 */
	public $rules;

	/**
	 * Delivery profile ids
	 * @var array<KalturaKeyValue>
	 */
	public $deliveryProfileIds;

	/**
	 * 
	 * @var string
	 */
	public $privateKey = null;

	/**
	 * 
	 * @var string
	 */
	public $publicKey = null;

	/**
	 * 
	 * @var string
	 */
	public $passPhrase = null;

	/**
	 * 
	 * @var bool
	 */
	public $shouldExportThumbs = null;

}
