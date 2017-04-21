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
class LiveToVodJobData extends \Kaltura\Client\Type\JobData
{
	public function getKalturaObjectType()
	{
		return 'KalturaLiveToVodJobData';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->vodEntryId))
			$this->vodEntryId = (string)$xml->vodEntryId;
		if(count($xml->liveEntryId))
			$this->liveEntryId = (string)$xml->liveEntryId;
		if(count($xml->totalVodDuration))
			$this->totalVodDuration = (float)$xml->totalVodDuration;
		if(count($xml->lastSegmentDuration))
			$this->lastSegmentDuration = (float)$xml->lastSegmentDuration;
		if(count($xml->amfArray))
			$this->amfArray = (string)$xml->amfArray;
		if(count($xml->lastCuePointSyncTime))
			$this->lastCuePointSyncTime = (int)$xml->lastCuePointSyncTime;
		if(count($xml->lastSegmentDrift))
			$this->lastSegmentDrift = (int)$xml->lastSegmentDrift;
	}
	/**
	 * $vod Entry Id
	 * @var string
	 */
	public $vodEntryId = null;

	/**
	 * live Entry Id
	 * @var string
	 */
	public $liveEntryId = null;

	/**
	 * total VOD Duration
	 * @var float
	 */
	public $totalVodDuration = null;

	/**
	 * last Segment Duration
	 * @var float
	 */
	public $lastSegmentDuration = null;

	/**
	 * amf Array File Path
	 * @var string
	 */
	public $amfArray = null;

	/**
	 * last live to vod sync time
	 * @var int
	 */
	public $lastCuePointSyncTime = null;

	/**
	 * last segment drift
	 * @var int
	 */
	public $lastSegmentDrift = null;

}
