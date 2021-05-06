<?php
// ===================================================================================================
//                           _  __     _ _
//                          | |/ /__ _| | |_ _  _ _ _ __ _
//                          | ' </ _` | |  _| || | '_/ _` |
//                          |_|\_\__,_|_|\__|\_,_|_| \__,_|
//
// This file is part of the Kaltura Collaborative Media Suite which allows users
// to do with audio, video, and animation what Wiki platforms allow them to do with
// text.
//
// Copyright (C) 2006-2021  Kaltura Inc.
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
class SchedulerConfig extends \Kaltura\Client\ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaSchedulerConfig';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->id))
			$this->id = (int)$xml->id;
		if(count($xml->createdBy))
			$this->createdBy = (string)$xml->createdBy;
		if(count($xml->updatedBy))
			$this->updatedBy = (string)$xml->updatedBy;
		if(count($xml->commandId))
			$this->commandId = (string)$xml->commandId;
		if(count($xml->commandStatus))
			$this->commandStatus = (string)$xml->commandStatus;
		if(count($xml->schedulerId))
			$this->schedulerId = (int)$xml->schedulerId;
		if(count($xml->schedulerConfiguredId))
			$this->schedulerConfiguredId = (int)$xml->schedulerConfiguredId;
		if(count($xml->schedulerName))
			$this->schedulerName = (string)$xml->schedulerName;
		if(count($xml->workerId))
			$this->workerId = (int)$xml->workerId;
		if(count($xml->workerConfiguredId))
			$this->workerConfiguredId = (int)$xml->workerConfiguredId;
		if(count($xml->workerName))
			$this->workerName = (string)$xml->workerName;
		if(count($xml->variable))
			$this->variable = (string)$xml->variable;
		if(count($xml->variablePart))
			$this->variablePart = (string)$xml->variablePart;
		if(count($xml->value))
			$this->value = (string)$xml->value;
	}
	/**
	 * The id of the Category
	 * @var int
	 * @readonly
	 */
	public $id = null;

	/**
	 * Creator name
	 * @var string
	 */
	public $createdBy = null;

	/**
	 * Updater name
	 * @var string
	 */
	public $updatedBy = null;

	/**
	 * Id of the control panel command that created this config item
	 * @var string
	 */
	public $commandId = null;

	/**
	 * The status of the control panel command
	 * @var string
	 */
	public $commandStatus = null;

	/**
	 * The id of the scheduler
	 * @var int
	 */
	public $schedulerId = null;

	/**
	 * The configured id of the scheduler
	 * @var int
	 */
	public $schedulerConfiguredId = null;

	/**
	 * The name of the scheduler
	 * @var string
	 */
	public $schedulerName = null;

	/**
	 * The id of the job worker
	 * @var int
	 */
	public $workerId = null;

	/**
	 * The configured id of the job worker
	 * @var int
	 */
	public $workerConfiguredId = null;

	/**
	 * The name of the job worker
	 * @var string
	 */
	public $workerName = null;

	/**
	 * The name of the variable
	 * @var string
	 */
	public $variable = null;

	/**
	 * The part of the variable
	 * @var string
	 */
	public $variablePart = null;

	/**
	 * The value of the variable
	 * @var string
	 */
	public $value = null;

}
