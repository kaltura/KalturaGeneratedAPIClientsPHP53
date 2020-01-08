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
// Copyright (C) 2006-2020  Kaltura Inc.
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
namespace Kaltura\Client\Plugin\Reach\Type;

/**
 * @package Kaltura
 * @subpackage Client
 */
class EntryVendorTask extends \Kaltura\Client\ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaEntryVendorTask';
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
		if(count($xml->vendorPartnerId))
			$this->vendorPartnerId = (int)$xml->vendorPartnerId;
		if(count($xml->createdAt))
			$this->createdAt = (int)$xml->createdAt;
		if(count($xml->updatedAt))
			$this->updatedAt = (int)$xml->updatedAt;
		if(count($xml->queueTime))
			$this->queueTime = (int)$xml->queueTime;
		if(count($xml->finishTime))
			$this->finishTime = (int)$xml->finishTime;
		if(count($xml->entryId))
			$this->entryId = (string)$xml->entryId;
		if(count($xml->status))
			$this->status = (int)$xml->status;
		if(count($xml->reachProfileId))
			$this->reachProfileId = (int)$xml->reachProfileId;
		if(count($xml->catalogItemId))
			$this->catalogItemId = (int)$xml->catalogItemId;
		if(count($xml->price))
			$this->price = (float)$xml->price;
		if(count($xml->userId))
			$this->userId = (string)$xml->userId;
		if(count($xml->moderatingUser))
			$this->moderatingUser = (string)$xml->moderatingUser;
		if(count($xml->errDescription))
			$this->errDescription = (string)$xml->errDescription;
		if(count($xml->accessKey))
			$this->accessKey = (string)$xml->accessKey;
		if(count($xml->version))
			$this->version = (string)$xml->version;
		if(count($xml->notes))
			$this->notes = (string)$xml->notes;
		if(count($xml->dictionary))
			$this->dictionary = (string)$xml->dictionary;
		if(count($xml->context))
			$this->context = (string)$xml->context;
		if(count($xml->accuracy))
			$this->accuracy = (int)$xml->accuracy;
		if(count($xml->outputObjectId))
			$this->outputObjectId = (string)$xml->outputObjectId;
		if(count($xml->partnerData))
			$this->partnerData = (string)$xml->partnerData;
		if(count($xml->creationMode))
			$this->creationMode = (int)$xml->creationMode;
		if(count($xml->taskJobData) && !empty($xml->taskJobData))
			$this->taskJobData = \Kaltura\Client\ParseUtils::unmarshalObject($xml->taskJobData, "KalturaVendorTaskData");
		if(count($xml->expectedFinishTime))
			$this->expectedFinishTime = (int)$xml->expectedFinishTime;
		if(count($xml->serviceType))
			$this->serviceType = (int)$xml->serviceType;
		if(count($xml->serviceFeature))
			$this->serviceFeature = (int)$xml->serviceFeature;
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
	 * @var int
	 * @readonly
	 */
	public $vendorPartnerId = null;

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
	public $queueTime = null;

	/**
	 * 
	 * @var int
	 * @readonly
	 */
	public $finishTime = null;

	/**
	 * 
	 * @var string
	 * @insertonly
	 */
	public $entryId = null;

	/**
	 * 
	 * @var \Kaltura\Client\Plugin\Reach\Enum\EntryVendorTaskStatus
	 */
	public $status = null;

	/**
	 * The profile id from which this task base config is taken from
	 * @var int
	 * @insertonly
	 */
	public $reachProfileId = null;

	/**
	 * The catalog item Id containing the task description
	 * @var int
	 * @insertonly
	 */
	public $catalogItemId = null;

	/**
	 * The charged price to execute this task
	 * @var float
	 * @readonly
	 */
	public $price = null;

	/**
	 * The ID of the user who created this task
	 * @var string
	 * @readonly
	 */
	public $userId = null;

	/**
	 * The user ID that approved this task for execution (in case moderation is requested)
	 * @var string
	 * @readonly
	 */
	public $moderatingUser = null;

	/**
	 * Err description provided by provider in case job execution has failed
	 * @var string
	 */
	public $errDescription = null;

	/**
	 * Access key generated by Kaltura to allow vendors to ingest the end result to the destination
	 * @var string
	 * @readonly
	 */
	public $accessKey = null;

	/**
	 * Vendor generated by Kaltura representing the entry vendor task version correlated to the entry version
	 * @var string
	 * @readonly
	 */
	public $version = null;

	/**
	 * User generated notes that should be taken into account by the vendor while executing the task
	 * @var string
	 */
	public $notes = null;

	/**
	 * 
	 * @var string
	 * @readonly
	 */
	public $dictionary = null;

	/**
	 * Task context
	 * @var string
	 */
	public $context = null;

	/**
	 * Task result accuracy percentage
	 * @var int
	 */
	public $accuracy = null;

	/**
	 * Task main object generated by executing the task
	 * @var string
	 */
	public $outputObjectId = null;

	/**
	 * Json object containing extra task data required by the requester
	 * @var string
	 */
	public $partnerData = null;

	/**
	 * Task creation mode
	 * @var \Kaltura\Client\Plugin\Reach\Enum\EntryVendorTaskCreationMode
	 * @readonly
	 */
	public $creationMode = null;

	/**
	 * 
	 * @var \Kaltura\Client\Plugin\Reach\Type\VendorTaskData
	 */
	public $taskJobData;

	/**
	 * 
	 * @var int
	 * @readonly
	 */
	public $expectedFinishTime = null;

	/**
	 * 
	 * @var \Kaltura\Client\Plugin\Reach\Enum\VendorServiceType
	 * @readonly
	 */
	public $serviceType = null;

	/**
	 * 
	 * @var \Kaltura\Client\Plugin\Reach\Enum\VendorServiceFeature
	 * @readonly
	 */
	public $serviceFeature = null;

}
