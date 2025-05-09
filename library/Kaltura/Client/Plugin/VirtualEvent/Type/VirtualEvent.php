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
namespace Kaltura\Client\Plugin\VirtualEvent\Type;

/**
 * @package Kaltura
 * @subpackage Client
 */
class VirtualEvent extends \Kaltura\Client\ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaVirtualEvent';
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
		if(count($xml->status))
			$this->status = (int)$xml->status;
		if(count($xml->tags))
			$this->tags = (string)$xml->tags;
		if(count($xml->attendeesGroupIds))
			$this->attendeesGroupIds = (string)$xml->attendeesGroupIds;
		if(count($xml->adminsGroupIds))
			$this->adminsGroupIds = (string)$xml->adminsGroupIds;
		if(count($xml->registrationScheduleEventId))
			$this->registrationScheduleEventId = (int)$xml->registrationScheduleEventId;
		if(count($xml->agendaScheduleEventId))
			$this->agendaScheduleEventId = (int)$xml->agendaScheduleEventId;
		if(count($xml->mainEventScheduleEventId))
			$this->mainEventScheduleEventId = (int)$xml->mainEventScheduleEventId;
		if(count($xml->createdAt))
			$this->createdAt = (int)$xml->createdAt;
		if(count($xml->updatedAt))
			$this->updatedAt = (int)$xml->updatedAt;
		if(count($xml->deletionDueDate))
			$this->deletionDueDate = (int)$xml->deletionDueDate;
		if(count($xml->registrationFormSchema))
			$this->registrationFormSchema = (string)$xml->registrationFormSchema;
		if(count($xml->eventUrl))
			$this->eventUrl = (string)$xml->eventUrl;
		if(count($xml->webhookRegistrationToken))
			$this->webhookRegistrationToken = (string)$xml->webhookRegistrationToken;
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
	public $description = null;

	/**
	 * 
	 * @var \Kaltura\Client\Plugin\VirtualEvent\Enum\VirtualEventStatus
	 * @readonly
	 */
	public $status = null;

	/**
	 * 
	 * @var string
	 */
	public $tags = null;

	/**
	 * 
	 * @var string
	 */
	public $attendeesGroupIds = null;

	/**
	 * 
	 * @var string
	 */
	public $adminsGroupIds = null;

	/**
	 * 
	 * @var int
	 */
	public $registrationScheduleEventId = null;

	/**
	 * 
	 * @var int
	 */
	public $agendaScheduleEventId = null;

	/**
	 * 
	 * @var int
	 */
	public $mainEventScheduleEventId = null;

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
	public $deletionDueDate = null;

	/**
	 * JSON-Schema of the Registration Form
	 * @var string
	 */
	public $registrationFormSchema = null;

	/**
	 * The Virtual Event Url
	 * @var string
	 */
	public $eventUrl = null;

	/**
	 * The Virtual Event WebHook registration token
	 * @var string
	 */
	public $webhookRegistrationToken = null;

}
