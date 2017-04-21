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
abstract class BatchJobBaseFilter extends \Kaltura\Client\Type\Filter
{
	public function getKalturaObjectType()
	{
		return 'KalturaBatchJobBaseFilter';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->idEqual))
			$this->idEqual = (string)$xml->idEqual;
		if(count($xml->idGreaterThanOrEqual))
			$this->idGreaterThanOrEqual = (string)$xml->idGreaterThanOrEqual;
		if(count($xml->partnerIdEqual))
			$this->partnerIdEqual = (int)$xml->partnerIdEqual;
		if(count($xml->partnerIdIn))
			$this->partnerIdIn = (string)$xml->partnerIdIn;
		if(count($xml->partnerIdNotIn))
			$this->partnerIdNotIn = (string)$xml->partnerIdNotIn;
		if(count($xml->createdAtGreaterThanOrEqual))
			$this->createdAtGreaterThanOrEqual = (int)$xml->createdAtGreaterThanOrEqual;
		if(count($xml->createdAtLessThanOrEqual))
			$this->createdAtLessThanOrEqual = (int)$xml->createdAtLessThanOrEqual;
		if(count($xml->updatedAtGreaterThanOrEqual))
			$this->updatedAtGreaterThanOrEqual = (int)$xml->updatedAtGreaterThanOrEqual;
		if(count($xml->updatedAtLessThanOrEqual))
			$this->updatedAtLessThanOrEqual = (int)$xml->updatedAtLessThanOrEqual;
		if(count($xml->executionAttemptsGreaterThanOrEqual))
			$this->executionAttemptsGreaterThanOrEqual = (int)$xml->executionAttemptsGreaterThanOrEqual;
		if(count($xml->executionAttemptsLessThanOrEqual))
			$this->executionAttemptsLessThanOrEqual = (int)$xml->executionAttemptsLessThanOrEqual;
		if(count($xml->lockVersionGreaterThanOrEqual))
			$this->lockVersionGreaterThanOrEqual = (int)$xml->lockVersionGreaterThanOrEqual;
		if(count($xml->lockVersionLessThanOrEqual))
			$this->lockVersionLessThanOrEqual = (int)$xml->lockVersionLessThanOrEqual;
		if(count($xml->entryIdEqual))
			$this->entryIdEqual = (string)$xml->entryIdEqual;
		if(count($xml->jobTypeEqual))
			$this->jobTypeEqual = (string)$xml->jobTypeEqual;
		if(count($xml->jobTypeIn))
			$this->jobTypeIn = (string)$xml->jobTypeIn;
		if(count($xml->jobTypeNotIn))
			$this->jobTypeNotIn = (string)$xml->jobTypeNotIn;
		if(count($xml->jobSubTypeEqual))
			$this->jobSubTypeEqual = (int)$xml->jobSubTypeEqual;
		if(count($xml->jobSubTypeIn))
			$this->jobSubTypeIn = (string)$xml->jobSubTypeIn;
		if(count($xml->jobSubTypeNotIn))
			$this->jobSubTypeNotIn = (string)$xml->jobSubTypeNotIn;
		if(count($xml->statusEqual))
			$this->statusEqual = (int)$xml->statusEqual;
		if(count($xml->statusIn))
			$this->statusIn = (string)$xml->statusIn;
		if(count($xml->statusNotIn))
			$this->statusNotIn = (string)$xml->statusNotIn;
		if(count($xml->priorityGreaterThanOrEqual))
			$this->priorityGreaterThanOrEqual = (int)$xml->priorityGreaterThanOrEqual;
		if(count($xml->priorityLessThanOrEqual))
			$this->priorityLessThanOrEqual = (int)$xml->priorityLessThanOrEqual;
		if(count($xml->priorityEqual))
			$this->priorityEqual = (int)$xml->priorityEqual;
		if(count($xml->priorityIn))
			$this->priorityIn = (string)$xml->priorityIn;
		if(count($xml->priorityNotIn))
			$this->priorityNotIn = (string)$xml->priorityNotIn;
		if(count($xml->batchVersionGreaterThanOrEqual))
			$this->batchVersionGreaterThanOrEqual = (int)$xml->batchVersionGreaterThanOrEqual;
		if(count($xml->batchVersionLessThanOrEqual))
			$this->batchVersionLessThanOrEqual = (int)$xml->batchVersionLessThanOrEqual;
		if(count($xml->batchVersionEqual))
			$this->batchVersionEqual = (int)$xml->batchVersionEqual;
		if(count($xml->queueTimeGreaterThanOrEqual))
			$this->queueTimeGreaterThanOrEqual = (int)$xml->queueTimeGreaterThanOrEqual;
		if(count($xml->queueTimeLessThanOrEqual))
			$this->queueTimeLessThanOrEqual = (int)$xml->queueTimeLessThanOrEqual;
		if(count($xml->finishTimeGreaterThanOrEqual))
			$this->finishTimeGreaterThanOrEqual = (int)$xml->finishTimeGreaterThanOrEqual;
		if(count($xml->finishTimeLessThanOrEqual))
			$this->finishTimeLessThanOrEqual = (int)$xml->finishTimeLessThanOrEqual;
		if(count($xml->errTypeEqual))
			$this->errTypeEqual = (int)$xml->errTypeEqual;
		if(count($xml->errTypeIn))
			$this->errTypeIn = (string)$xml->errTypeIn;
		if(count($xml->errTypeNotIn))
			$this->errTypeNotIn = (string)$xml->errTypeNotIn;
		if(count($xml->errNumberEqual))
			$this->errNumberEqual = (int)$xml->errNumberEqual;
		if(count($xml->errNumberIn))
			$this->errNumberIn = (string)$xml->errNumberIn;
		if(count($xml->errNumberNotIn))
			$this->errNumberNotIn = (string)$xml->errNumberNotIn;
		if(count($xml->estimatedEffortLessThan))
			$this->estimatedEffortLessThan = (int)$xml->estimatedEffortLessThan;
		if(count($xml->estimatedEffortGreaterThan))
			$this->estimatedEffortGreaterThan = (int)$xml->estimatedEffortGreaterThan;
		if(count($xml->urgencyLessThanOrEqual))
			$this->urgencyLessThanOrEqual = (int)$xml->urgencyLessThanOrEqual;
		if(count($xml->urgencyGreaterThanOrEqual))
			$this->urgencyGreaterThanOrEqual = (int)$xml->urgencyGreaterThanOrEqual;
	}
	/**
	 * 
	 * @var int
	 */
	public $idEqual = null;

	/**
	 * 
	 * @var int
	 */
	public $idGreaterThanOrEqual = null;

	/**
	 * 
	 * @var int
	 */
	public $partnerIdEqual = null;

	/**
	 * 
	 * @var string
	 */
	public $partnerIdIn = null;

	/**
	 * 
	 * @var string
	 */
	public $partnerIdNotIn = null;

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
	public $executionAttemptsGreaterThanOrEqual = null;

	/**
	 * 
	 * @var int
	 */
	public $executionAttemptsLessThanOrEqual = null;

	/**
	 * 
	 * @var int
	 */
	public $lockVersionGreaterThanOrEqual = null;

	/**
	 * 
	 * @var int
	 */
	public $lockVersionLessThanOrEqual = null;

	/**
	 * 
	 * @var string
	 */
	public $entryIdEqual = null;

	/**
	 * 
	 * @var \Kaltura\Client\Enum\BatchJobType
	 */
	public $jobTypeEqual = null;

	/**
	 * 
	 * @var string
	 */
	public $jobTypeIn = null;

	/**
	 * 
	 * @var string
	 */
	public $jobTypeNotIn = null;

	/**
	 * 
	 * @var int
	 */
	public $jobSubTypeEqual = null;

	/**
	 * 
	 * @var string
	 */
	public $jobSubTypeIn = null;

	/**
	 * 
	 * @var string
	 */
	public $jobSubTypeNotIn = null;

	/**
	 * 
	 * @var \Kaltura\Client\Enum\BatchJobStatus
	 */
	public $statusEqual = null;

	/**
	 * 
	 * @var string
	 */
	public $statusIn = null;

	/**
	 * 
	 * @var string
	 */
	public $statusNotIn = null;

	/**
	 * 
	 * @var int
	 */
	public $priorityGreaterThanOrEqual = null;

	/**
	 * 
	 * @var int
	 */
	public $priorityLessThanOrEqual = null;

	/**
	 * 
	 * @var int
	 */
	public $priorityEqual = null;

	/**
	 * 
	 * @var string
	 */
	public $priorityIn = null;

	/**
	 * 
	 * @var string
	 */
	public $priorityNotIn = null;

	/**
	 * 
	 * @var int
	 */
	public $batchVersionGreaterThanOrEqual = null;

	/**
	 * 
	 * @var int
	 */
	public $batchVersionLessThanOrEqual = null;

	/**
	 * 
	 * @var int
	 */
	public $batchVersionEqual = null;

	/**
	 * 
	 * @var int
	 */
	public $queueTimeGreaterThanOrEqual = null;

	/**
	 * 
	 * @var int
	 */
	public $queueTimeLessThanOrEqual = null;

	/**
	 * 
	 * @var int
	 */
	public $finishTimeGreaterThanOrEqual = null;

	/**
	 * 
	 * @var int
	 */
	public $finishTimeLessThanOrEqual = null;

	/**
	 * 
	 * @var \Kaltura\Client\Enum\BatchJobErrorTypes
	 */
	public $errTypeEqual = null;

	/**
	 * 
	 * @var string
	 */
	public $errTypeIn = null;

	/**
	 * 
	 * @var string
	 */
	public $errTypeNotIn = null;

	/**
	 * 
	 * @var int
	 */
	public $errNumberEqual = null;

	/**
	 * 
	 * @var string
	 */
	public $errNumberIn = null;

	/**
	 * 
	 * @var string
	 */
	public $errNumberNotIn = null;

	/**
	 * 
	 * @var int
	 */
	public $estimatedEffortLessThan = null;

	/**
	 * 
	 * @var int
	 */
	public $estimatedEffortGreaterThan = null;

	/**
	 * 
	 * @var int
	 */
	public $urgencyLessThanOrEqual = null;

	/**
	 * 
	 * @var int
	 */
	public $urgencyGreaterThanOrEqual = null;

}
