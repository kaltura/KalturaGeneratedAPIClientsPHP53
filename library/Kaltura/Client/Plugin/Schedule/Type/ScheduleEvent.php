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
namespace Kaltura\Client\Plugin\Schedule\Type;

/**
 * @package Kaltura
 * @subpackage Client
 */
abstract class ScheduleEvent extends \Kaltura\Client\ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaScheduleEvent';
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
		if(count($xml->parentId))
			$this->parentId = (int)$xml->parentId;
		if(count($xml->summary))
			$this->summary = (string)$xml->summary;
		if(count($xml->description))
			$this->description = (string)$xml->description;
		if(count($xml->status))
			$this->status = (int)$xml->status;
		if(count($xml->startDate))
			$this->startDate = (int)$xml->startDate;
		if(count($xml->endDate))
			$this->endDate = (int)$xml->endDate;
		if(count($xml->referenceId))
			$this->referenceId = (string)$xml->referenceId;
		if(count($xml->classificationType))
			$this->classificationType = (int)$xml->classificationType;
		if(count($xml->geoLatitude))
			$this->geoLatitude = (float)$xml->geoLatitude;
		if(count($xml->geoLongitude))
			$this->geoLongitude = (float)$xml->geoLongitude;
		if(count($xml->location))
			$this->location = (string)$xml->location;
		if(count($xml->organizer))
			$this->organizer = (string)$xml->organizer;
		if(count($xml->ownerId))
			$this->ownerId = (string)$xml->ownerId;
		if(count($xml->priority))
			$this->priority = (int)$xml->priority;
		if(count($xml->sequence))
			$this->sequence = (int)$xml->sequence;
		if(count($xml->recurrenceType))
			$this->recurrenceType = (int)$xml->recurrenceType;
		if(count($xml->duration))
			$this->duration = (int)$xml->duration;
		if(count($xml->contact))
			$this->contact = (string)$xml->contact;
		if(count($xml->comment))
			$this->comment = (string)$xml->comment;
		if(count($xml->tags))
			$this->tags = (string)$xml->tags;
		if(count($xml->createdAt))
			$this->createdAt = (int)$xml->createdAt;
		if(count($xml->updatedAt))
			$this->updatedAt = (int)$xml->updatedAt;
		if(count($xml->recurrence) && !empty($xml->recurrence))
			$this->recurrence = \Kaltura\Client\ParseUtils::unmarshalObject($xml->recurrence, "KalturaScheduleEventRecurrence");
	}
	/**
	 * Auto-generated unique identifier
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
	public $parentId = null;

	/**
	 * Defines a short summary or subject for the event
	 * @var string
	 */
	public $summary = null;

	/**
	 * 
	 * @var string
	 */
	public $description = null;

	/**
	 * 
	 * @var \Kaltura\Client\Plugin\Schedule\Enum\ScheduleEventStatus
	 * @readonly
	 */
	public $status = null;

	/**
	 * 
	 * @var int
	 */
	public $startDate = null;

	/**
	 * 
	 * @var int
	 */
	public $endDate = null;

	/**
	 * 
	 * @var string
	 */
	public $referenceId = null;

	/**
	 * 
	 * @var \Kaltura\Client\Plugin\Schedule\Enum\ScheduleEventClassificationType
	 */
	public $classificationType = null;

	/**
	 * Specifies the global position for the activity
	 * @var float
	 */
	public $geoLatitude = null;

	/**
	 * Specifies the global position for the activity
	 * @var float
	 */
	public $geoLongitude = null;

	/**
	 * Defines the intended venue for the activity
	 * @var string
	 */
	public $location = null;

	/**
	 * 
	 * @var string
	 */
	public $organizer = null;

	/**
	 * 
	 * @var string
	 */
	public $ownerId = null;

	/**
	 * The value for the priority field.
	 * @var int
	 */
	public $priority = null;

	/**
	 * Defines the revision sequence number.
	 * @var int
	 */
	public $sequence = null;

	/**
	 * 
	 * @var \Kaltura\Client\Plugin\Schedule\Enum\ScheduleEventRecurrenceType
	 */
	public $recurrenceType = null;

	/**
	 * Duration in seconds
	 * @var int
	 */
	public $duration = null;

	/**
	 * Used to represent contact information or alternately a reference to contact information.
	 * @var string
	 */
	public $contact = null;

	/**
	 * Specifies non-processing information intended to provide a comment to the calendar user.
	 * @var string
	 */
	public $comment = null;

	/**
	 * 
	 * @var string
	 */
	public $tags = null;

	/**
	 * Creation date as Unix timestamp (In seconds)
	 * @var int
	 * @readonly
	 */
	public $createdAt = null;

	/**
	 * Last update as Unix timestamp (In seconds)
	 * @var int
	 * @readonly
	 */
	public $updatedAt = null;

	/**
	 * 
	 * @var \Kaltura\Client\Plugin\Schedule\Type\ScheduleEventRecurrence
	 */
	public $recurrence;

}
