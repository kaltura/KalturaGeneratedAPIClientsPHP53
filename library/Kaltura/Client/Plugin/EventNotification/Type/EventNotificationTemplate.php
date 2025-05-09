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
// Copyright (C) 2006-2023  Kaltura Inc.
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
namespace Kaltura\Client\Plugin\EventNotification\Type;

/**
 * @package Kaltura
 * @subpackage Client
 */
class EventNotificationTemplate extends \Kaltura\Client\ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaEventNotificationTemplate';
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
		if(count($xml->systemName))
			$this->systemName = (string)$xml->systemName;
		if(count($xml->description))
			$this->description = (string)$xml->description;
		if(count($xml->type))
			$this->type = (string)$xml->type;
		if(count($xml->status))
			$this->status = (int)$xml->status;
		if(count($xml->createdAt))
			$this->createdAt = (int)$xml->createdAt;
		if(count($xml->updatedAt))
			$this->updatedAt = (int)$xml->updatedAt;
		if(count($xml->manualDispatchEnabled))
		{
			if(!empty($xml->manualDispatchEnabled) && $xml->manualDispatchEnabled != 'false')
				$this->manualDispatchEnabled = true;
			else
				$this->manualDispatchEnabled = false;
		}
		if(count($xml->automaticDispatchEnabled))
		{
			if(!empty($xml->automaticDispatchEnabled) && $xml->automaticDispatchEnabled != 'false')
				$this->automaticDispatchEnabled = true;
			else
				$this->automaticDispatchEnabled = false;
		}
		if(count($xml->eventType))
			$this->eventType = (string)$xml->eventType;
		if(count($xml->eventObjectType))
			$this->eventObjectType = (string)$xml->eventObjectType;
		if(count($xml->eventConditions))
		{
			if(empty($xml->eventConditions))
				$this->eventConditions = array();
			else
				$this->eventConditions = \Kaltura\Client\ParseUtils::unmarshalArray($xml->eventConditions, "KalturaCondition");
		}
		if(count($xml->contentParameters))
		{
			if(empty($xml->contentParameters))
				$this->contentParameters = array();
			else
				$this->contentParameters = \Kaltura\Client\ParseUtils::unmarshalArray($xml->contentParameters, "KalturaEventNotificationParameter");
		}
		if(count($xml->userParameters))
		{
			if(empty($xml->userParameters))
				$this->userParameters = array();
			else
				$this->userParameters = \Kaltura\Client\ParseUtils::unmarshalArray($xml->userParameters, "KalturaEventNotificationParameter");
		}
		if(count($xml->eventDelayedCondition))
			$this->eventDelayedCondition = (int)$xml->eventDelayedCondition;
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
	public $description = null;

	/**
	 * 
	 * @var \Kaltura\Client\Plugin\EventNotification\Enum\EventNotificationTemplateType
	 * @insertonly
	 */
	public $type = null;

	/**
	 * 
	 * @var \Kaltura\Client\Plugin\EventNotification\Enum\EventNotificationTemplateStatus
	 * @readonly
	 */
	public $status = null;

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
	 * Define that the template could be dispatched manually from the API
	 * @var bool
	 */
	public $manualDispatchEnabled = null;

	/**
	 * Define that the template could be dispatched automatically by the system
	 * @var bool
	 */
	public $automaticDispatchEnabled = null;

	/**
	 * Define the event that should trigger this notification
	 * @var \Kaltura\Client\Plugin\EventNotification\Enum\EventNotificationEventType
	 */
	public $eventType = null;

	/**
	 * Define the object that raised the event that should trigger this notification
	 * @var \Kaltura\Client\Plugin\EventNotification\Enum\EventNotificationEventObjectType
	 */
	public $eventObjectType = null;

	/**
	 * Define the conditions that cause this notification to be triggered
	 * @var array<KalturaCondition>
	 */
	public $eventConditions;

	/**
	 * Define the content dynamic parameters
	 * @var array<KalturaEventNotificationParameter>
	 */
	public $contentParameters;

	/**
	 * Define the content dynamic parameters
	 * @var array<KalturaEventNotificationParameter>
	 */
	public $userParameters;

	/**
	 * Event batch job will be delayed until specific condition criteria is met
	 * @var \Kaltura\Client\Plugin\EventNotification\Enum\EventNotificationDelayedCondition
	 */
	public $eventDelayedCondition = null;

}
