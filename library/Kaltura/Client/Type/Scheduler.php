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
class Scheduler extends \Kaltura\Client\ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaScheduler';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->id))
			$this->id = (int)$xml->id;
		if(count($xml->configuredId))
			$this->configuredId = (int)$xml->configuredId;
		if(count($xml->name))
			$this->name = (string)$xml->name;
		if(count($xml->host))
			$this->host = (string)$xml->host;
		if(count($xml->statuses))
		{
			if(empty($xml->statuses))
				$this->statuses = array();
			else
				$this->statuses = \Kaltura\Client\ParseUtils::unmarshalArray($xml->statuses, "KalturaSchedulerStatus");
		}
		if(count($xml->configs))
		{
			if(empty($xml->configs))
				$this->configs = array();
			else
				$this->configs = \Kaltura\Client\ParseUtils::unmarshalArray($xml->configs, "KalturaSchedulerConfig");
		}
		if(count($xml->workers))
		{
			if(empty($xml->workers))
				$this->workers = array();
			else
				$this->workers = \Kaltura\Client\ParseUtils::unmarshalArray($xml->workers, "KalturaSchedulerWorker");
		}
		if(count($xml->createdAt))
			$this->createdAt = (int)$xml->createdAt;
		if(count($xml->lastStatus))
			$this->lastStatus = (int)$xml->lastStatus;
		if(count($xml->lastStatusStr))
			$this->lastStatusStr = (string)$xml->lastStatusStr;
	}
	/**
	 * The id of the Scheduler
	 * @var int
	 * @readonly
	 */
	public $id = null;

	/**
	 * The id as configured in the batch config
	 * @var int
	 */
	public $configuredId = null;

	/**
	 * The scheduler name
	 * @var string
	 */
	public $name = null;

	/**
	 * The host name
	 * @var string
	 */
	public $host = null;

	/**
	 * Array of the last statuses
	 * @var array<KalturaSchedulerStatus>
	 * @readonly
	 */
	public $statuses;

	/**
	 * Array of the last configs
	 * @var array<KalturaSchedulerConfig>
	 * @readonly
	 */
	public $configs;

	/**
	 * Array of the workers
	 * @var array<KalturaSchedulerWorker>
	 * @readonly
	 */
	public $workers;

	/**
	 * creation time
	 * @var int
	 * @readonly
	 */
	public $createdAt = null;

	/**
	 * last status time
	 * @var int
	 * @readonly
	 */
	public $lastStatus = null;

	/**
	 * last status formated
	 * @var string
	 * @readonly
	 */
	public $lastStatusStr = null;

}
