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
class BatchJob extends \Kaltura\Client\ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaBatchJob';
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
		if(count($xml->createdAt))
			$this->createdAt = (int)$xml->createdAt;
		if(count($xml->updatedAt))
			$this->updatedAt = (int)$xml->updatedAt;
		if(count($xml->deletedAt))
			$this->deletedAt = (int)$xml->deletedAt;
		if(count($xml->lockExpiration))
			$this->lockExpiration = (int)$xml->lockExpiration;
		if(count($xml->executionAttempts))
			$this->executionAttempts = (int)$xml->executionAttempts;
		if(count($xml->lockVersion))
			$this->lockVersion = (int)$xml->lockVersion;
		if(count($xml->entryId))
			$this->entryId = (string)$xml->entryId;
		if(count($xml->entryName))
			$this->entryName = (string)$xml->entryName;
		if(count($xml->jobType))
			$this->jobType = (string)$xml->jobType;
		if(count($xml->jobSubType))
			$this->jobSubType = (int)$xml->jobSubType;
		if(count($xml->data) && !empty($xml->data))
			$this->data = \Kaltura\Client\ParseUtils::unmarshalObject($xml->data, "KalturaJobData");
		if(count($xml->status))
			$this->status = (int)$xml->status;
		if(count($xml->abort))
			$this->abort = (int)$xml->abort;
		if(count($xml->checkAgainTimeout))
			$this->checkAgainTimeout = (int)$xml->checkAgainTimeout;
		if(count($xml->message))
			$this->message = (string)$xml->message;
		if(count($xml->description))
			$this->description = (string)$xml->description;
		if(count($xml->priority))
			$this->priority = (int)$xml->priority;
		if(count($xml->history))
		{
			if(empty($xml->history))
				$this->history = array();
			else
				$this->history = \Kaltura\Client\ParseUtils::unmarshalArray($xml->history, "KalturaBatchHistoryData");
		}
		if(count($xml->bulkJobId))
			$this->bulkJobId = (int)$xml->bulkJobId;
		if(count($xml->batchVersion))
			$this->batchVersion = (int)$xml->batchVersion;
		if(count($xml->parentJobId))
			$this->parentJobId = (int)$xml->parentJobId;
		if(count($xml->rootJobId))
			$this->rootJobId = (int)$xml->rootJobId;
		if(count($xml->queueTime))
			$this->queueTime = (int)$xml->queueTime;
		if(count($xml->finishTime))
			$this->finishTime = (int)$xml->finishTime;
		if(count($xml->errType))
			$this->errType = (int)$xml->errType;
		if(count($xml->errNumber))
			$this->errNumber = (int)$xml->errNumber;
		if(count($xml->estimatedEffort))
			$this->estimatedEffort = (int)$xml->estimatedEffort;
		if(count($xml->urgency))
			$this->urgency = (int)$xml->urgency;
		if(count($xml->schedulerId))
			$this->schedulerId = (int)$xml->schedulerId;
		if(count($xml->workerId))
			$this->workerId = (int)$xml->workerId;
		if(count($xml->batchIndex))
			$this->batchIndex = (int)$xml->batchIndex;
		if(count($xml->lastSchedulerId))
			$this->lastSchedulerId = (int)$xml->lastSchedulerId;
		if(count($xml->lastWorkerId))
			$this->lastWorkerId = (int)$xml->lastWorkerId;
		if(count($xml->dc))
			$this->dc = (int)$xml->dc;
		if(count($xml->jobObjectId))
			$this->jobObjectId = (string)$xml->jobObjectId;
		if(count($xml->jobObjectType))
			$this->jobObjectType = (int)$xml->jobObjectType;
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
	public $deletedAt = null;

	/**
	 * 
	 * @var int
	 * @readonly
	 */
	public $lockExpiration = null;

	/**
	 * 
	 * @var int
	 * @readonly
	 */
	public $executionAttempts = null;

	/**
	 * 
	 * @var int
	 * @readonly
	 */
	public $lockVersion = null;

	/**
	 * 
	 * @var string
	 */
	public $entryId = null;

	/**
	 * 
	 * @var string
	 */
	public $entryName = null;

	/**
	 * 
	 * @var \Kaltura\Client\Enum\BatchJobType
	 * @readonly
	 */
	public $jobType = null;

	/**
	 * 
	 * @var int
	 */
	public $jobSubType = null;

	/**
	 * 
	 * @var \Kaltura\Client\Type\JobData
	 */
	public $data;

	/**
	 * 
	 * @var \Kaltura\Client\Enum\BatchJobStatus
	 */
	public $status = null;

	/**
	 * 
	 * @var int
	 */
	public $abort = null;

	/**
	 * 
	 * @var int
	 */
	public $checkAgainTimeout = null;

	/**
	 * 
	 * @var string
	 */
	public $message = null;

	/**
	 * 
	 * @var string
	 */
	public $description = null;

	/**
	 * 
	 * @var int
	 */
	public $priority = null;

	/**
	 * 
	 * @var array<KalturaBatchHistoryData>
	 */
	public $history;

	/**
	 * The id of the bulk upload job that initiated this job
	 * @var int
	 */
	public $bulkJobId = null;

	/**
	 * 
	 * @var int
	 */
	public $batchVersion = null;

	/**
	 * When one job creates another - the parent should set this parentJobId to be its own id.
	 * @var int
	 */
	public $parentJobId = null;

	/**
	 * The id of the root parent job
	 * @var int
	 */
	public $rootJobId = null;

	/**
	 * The time that the job was pulled from the queue
	 * @var int
	 */
	public $queueTime = null;

	/**
	 * The time that the job was finished or closed as failed
	 * @var int
	 */
	public $finishTime = null;

	/**
	 * 
	 * @var \Kaltura\Client\Enum\BatchJobErrorTypes
	 */
	public $errType = null;

	/**
	 * 
	 * @var int
	 */
	public $errNumber = null;

	/**
	 * 
	 * @var int
	 */
	public $estimatedEffort = null;

	/**
	 * 
	 * @var int
	 */
	public $urgency = null;

	/**
	 * 
	 * @var int
	 */
	public $schedulerId = null;

	/**
	 * 
	 * @var int
	 */
	public $workerId = null;

	/**
	 * 
	 * @var int
	 */
	public $batchIndex = null;

	/**
	 * 
	 * @var int
	 */
	public $lastSchedulerId = null;

	/**
	 * 
	 * @var int
	 */
	public $lastWorkerId = null;

	/**
	 * 
	 * @var int
	 */
	public $dc = null;

	/**
	 * 
	 * @var string
	 */
	public $jobObjectId = null;

	/**
	 * 
	 * @var int
	 */
	public $jobObjectType = null;

}
