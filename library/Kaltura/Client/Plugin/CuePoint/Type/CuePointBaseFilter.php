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
namespace Kaltura\Client\Plugin\CuePoint\Type;

/**
 * @package Kaltura
 * @subpackage Client
 */
abstract class CuePointBaseFilter extends \Kaltura\Client\Type\RelatedFilter
{
	public function getKalturaObjectType()
	{
		return 'KalturaCuePointBaseFilter';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->idEqual))
			$this->idEqual = (string)$xml->idEqual;
		if(count($xml->idIn))
			$this->idIn = (string)$xml->idIn;
		if(count($xml->cuePointTypeEqual))
			$this->cuePointTypeEqual = (string)$xml->cuePointTypeEqual;
		if(count($xml->cuePointTypeIn))
			$this->cuePointTypeIn = (string)$xml->cuePointTypeIn;
		if(count($xml->statusEqual))
			$this->statusEqual = (int)$xml->statusEqual;
		if(count($xml->statusIn))
			$this->statusIn = (string)$xml->statusIn;
		if(count($xml->entryIdEqual))
			$this->entryIdEqual = (string)$xml->entryIdEqual;
		if(count($xml->entryIdIn))
			$this->entryIdIn = (string)$xml->entryIdIn;
		if(count($xml->createdAtGreaterThanOrEqual))
			$this->createdAtGreaterThanOrEqual = (int)$xml->createdAtGreaterThanOrEqual;
		if(count($xml->createdAtLessThanOrEqual))
			$this->createdAtLessThanOrEqual = (int)$xml->createdAtLessThanOrEqual;
		if(count($xml->updatedAtGreaterThanOrEqual))
			$this->updatedAtGreaterThanOrEqual = (int)$xml->updatedAtGreaterThanOrEqual;
		if(count($xml->updatedAtLessThanOrEqual))
			$this->updatedAtLessThanOrEqual = (int)$xml->updatedAtLessThanOrEqual;
		if(count($xml->triggeredAtGreaterThanOrEqual))
			$this->triggeredAtGreaterThanOrEqual = (int)$xml->triggeredAtGreaterThanOrEqual;
		if(count($xml->triggeredAtLessThanOrEqual))
			$this->triggeredAtLessThanOrEqual = (int)$xml->triggeredAtLessThanOrEqual;
		if(count($xml->tagsLike))
			$this->tagsLike = (string)$xml->tagsLike;
		if(count($xml->tagsMultiLikeOr))
			$this->tagsMultiLikeOr = (string)$xml->tagsMultiLikeOr;
		if(count($xml->tagsMultiLikeAnd))
			$this->tagsMultiLikeAnd = (string)$xml->tagsMultiLikeAnd;
		if(count($xml->startTimeGreaterThanOrEqual))
			$this->startTimeGreaterThanOrEqual = (int)$xml->startTimeGreaterThanOrEqual;
		if(count($xml->startTimeLessThanOrEqual))
			$this->startTimeLessThanOrEqual = (int)$xml->startTimeLessThanOrEqual;
		if(count($xml->userIdEqual))
			$this->userIdEqual = (string)$xml->userIdEqual;
		if(count($xml->userIdIn))
			$this->userIdIn = (string)$xml->userIdIn;
		if(count($xml->partnerSortValueEqual))
			$this->partnerSortValueEqual = (int)$xml->partnerSortValueEqual;
		if(count($xml->partnerSortValueIn))
			$this->partnerSortValueIn = (string)$xml->partnerSortValueIn;
		if(count($xml->partnerSortValueGreaterThanOrEqual))
			$this->partnerSortValueGreaterThanOrEqual = (int)$xml->partnerSortValueGreaterThanOrEqual;
		if(count($xml->partnerSortValueLessThanOrEqual))
			$this->partnerSortValueLessThanOrEqual = (int)$xml->partnerSortValueLessThanOrEqual;
		if(count($xml->forceStopEqual))
			$this->forceStopEqual = (int)$xml->forceStopEqual;
		if(count($xml->systemNameEqual))
			$this->systemNameEqual = (string)$xml->systemNameEqual;
		if(count($xml->systemNameIn))
			$this->systemNameIn = (string)$xml->systemNameIn;
	}
	/**
	 * 
	 * @var string
	 */
	public $idEqual = null;

	/**
	 * 
	 * @var string
	 */
	public $idIn = null;

	/**
	 * 
	 * @var \Kaltura\Client\Plugin\CuePoint\Enum\CuePointType
	 */
	public $cuePointTypeEqual = null;

	/**
	 * 
	 * @var string
	 */
	public $cuePointTypeIn = null;

	/**
	 * 
	 * @var \Kaltura\Client\Plugin\CuePoint\Enum\CuePointStatus
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
	public $entryIdEqual = null;

	/**
	 * 
	 * @var string
	 */
	public $entryIdIn = null;

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
	public $triggeredAtGreaterThanOrEqual = null;

	/**
	 * 
	 * @var int
	 */
	public $triggeredAtLessThanOrEqual = null;

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
	public $startTimeGreaterThanOrEqual = null;

	/**
	 * 
	 * @var int
	 */
	public $startTimeLessThanOrEqual = null;

	/**
	 * 
	 * @var string
	 */
	public $userIdEqual = null;

	/**
	 * 
	 * @var string
	 */
	public $userIdIn = null;

	/**
	 * 
	 * @var int
	 */
	public $partnerSortValueEqual = null;

	/**
	 * 
	 * @var string
	 */
	public $partnerSortValueIn = null;

	/**
	 * 
	 * @var int
	 */
	public $partnerSortValueGreaterThanOrEqual = null;

	/**
	 * 
	 * @var int
	 */
	public $partnerSortValueLessThanOrEqual = null;

	/**
	 * 
	 * @var \Kaltura\Client\Enum\NullableBoolean
	 */
	public $forceStopEqual = null;

	/**
	 * 
	 * @var string
	 */
	public $systemNameEqual = null;

	/**
	 * 
	 * @var string
	 */
	public $systemNameIn = null;

}
