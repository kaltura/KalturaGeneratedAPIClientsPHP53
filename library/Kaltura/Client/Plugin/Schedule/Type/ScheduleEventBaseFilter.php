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
abstract class ScheduleEventBaseFilter extends \Kaltura\Client\Type\RelatedFilter
{
	public function getKalturaObjectType()
	{
		return 'KalturaScheduleEventBaseFilter';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->idEqual))
			$this->idEqual = (int)$xml->idEqual;
		if(count($xml->idIn))
			$this->idIn = (string)$xml->idIn;
		if(count($xml->idNotIn))
			$this->idNotIn = (string)$xml->idNotIn;
		if(count($xml->parentIdEqual))
			$this->parentIdEqual = (int)$xml->parentIdEqual;
		if(count($xml->parentIdIn))
			$this->parentIdIn = (string)$xml->parentIdIn;
		if(count($xml->parentIdNotIn))
			$this->parentIdNotIn = (string)$xml->parentIdNotIn;
		if(count($xml->statusEqual))
			$this->statusEqual = (int)$xml->statusEqual;
		if(count($xml->statusIn))
			$this->statusIn = (string)$xml->statusIn;
		if(count($xml->startDateGreaterThanOrEqual))
			$this->startDateGreaterThanOrEqual = (int)$xml->startDateGreaterThanOrEqual;
		if(count($xml->startDateLessThanOrEqual))
			$this->startDateLessThanOrEqual = (int)$xml->startDateLessThanOrEqual;
		if(count($xml->endDateGreaterThanOrEqual))
			$this->endDateGreaterThanOrEqual = (int)$xml->endDateGreaterThanOrEqual;
		if(count($xml->endDateLessThanOrEqual))
			$this->endDateLessThanOrEqual = (int)$xml->endDateLessThanOrEqual;
		if(count($xml->referenceIdEqual))
			$this->referenceIdEqual = (string)$xml->referenceIdEqual;
		if(count($xml->referenceIdIn))
			$this->referenceIdIn = (string)$xml->referenceIdIn;
		if(count($xml->ownerIdEqual))
			$this->ownerIdEqual = (string)$xml->ownerIdEqual;
		if(count($xml->ownerIdIn))
			$this->ownerIdIn = (string)$xml->ownerIdIn;
		if(count($xml->priorityEqual))
			$this->priorityEqual = (int)$xml->priorityEqual;
		if(count($xml->priorityIn))
			$this->priorityIn = (string)$xml->priorityIn;
		if(count($xml->priorityGreaterThanOrEqual))
			$this->priorityGreaterThanOrEqual = (int)$xml->priorityGreaterThanOrEqual;
		if(count($xml->priorityLessThanOrEqual))
			$this->priorityLessThanOrEqual = (int)$xml->priorityLessThanOrEqual;
		if(count($xml->recurrenceTypeEqual))
			$this->recurrenceTypeEqual = (int)$xml->recurrenceTypeEqual;
		if(count($xml->recurrenceTypeIn))
			$this->recurrenceTypeIn = (string)$xml->recurrenceTypeIn;
		if(count($xml->tagsLike))
			$this->tagsLike = (string)$xml->tagsLike;
		if(count($xml->tagsMultiLikeOr))
			$this->tagsMultiLikeOr = (string)$xml->tagsMultiLikeOr;
		if(count($xml->tagsMultiLikeAnd))
			$this->tagsMultiLikeAnd = (string)$xml->tagsMultiLikeAnd;
		if(count($xml->createdAtGreaterThanOrEqual))
			$this->createdAtGreaterThanOrEqual = (int)$xml->createdAtGreaterThanOrEqual;
		if(count($xml->createdAtLessThanOrEqual))
			$this->createdAtLessThanOrEqual = (int)$xml->createdAtLessThanOrEqual;
		if(count($xml->updatedAtGreaterThanOrEqual))
			$this->updatedAtGreaterThanOrEqual = (int)$xml->updatedAtGreaterThanOrEqual;
		if(count($xml->updatedAtLessThanOrEqual))
			$this->updatedAtLessThanOrEqual = (int)$xml->updatedAtLessThanOrEqual;
	}
	/**
	 * 
	 * @var int
	 */
	public $idEqual = null;

	/**
	 * 
	 * @var string
	 */
	public $idIn = null;

	/**
	 * 
	 * @var string
	 */
	public $idNotIn = null;

	/**
	 * 
	 * @var int
	 */
	public $parentIdEqual = null;

	/**
	 * 
	 * @var string
	 */
	public $parentIdIn = null;

	/**
	 * 
	 * @var string
	 */
	public $parentIdNotIn = null;

	/**
	 * 
	 * @var \Kaltura\Client\Plugin\Schedule\Enum\ScheduleEventStatus
	 */
	public $statusEqual = null;

	/**
	 * 
	 * @var string
	 */
	public $statusIn = null;

	/**
	 * 
	 * @var int
	 */
	public $startDateGreaterThanOrEqual = null;

	/**
	 * 
	 * @var int
	 */
	public $startDateLessThanOrEqual = null;

	/**
	 * 
	 * @var int
	 */
	public $endDateGreaterThanOrEqual = null;

	/**
	 * 
	 * @var int
	 */
	public $endDateLessThanOrEqual = null;

	/**
	 * 
	 * @var string
	 */
	public $referenceIdEqual = null;

	/**
	 * 
	 * @var string
	 */
	public $referenceIdIn = null;

	/**
	 * 
	 * @var string
	 */
	public $ownerIdEqual = null;

	/**
	 * 
	 * @var string
	 */
	public $ownerIdIn = null;

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
	 * @var \Kaltura\Client\Plugin\Schedule\Enum\ScheduleEventRecurrenceType
	 */
	public $recurrenceTypeEqual = null;

	/**
	 * 
	 * @var string
	 */
	public $recurrenceTypeIn = null;

	/**
	 * 
	 * @var string
	 */
	public $tagsLike = null;

	/**
	 * 
	 * @var string
	 */
	public $tagsMultiLikeOr = null;

	/**
	 * 
	 * @var string
	 */
	public $tagsMultiLikeAnd = null;

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

}
