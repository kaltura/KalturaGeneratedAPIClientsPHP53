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
namespace Kaltura\Client\Plugin\Schedule\Type;

/**
 * @package Kaltura
 * @subpackage Client
 */
class LiveStreamScheduleEvent extends \Kaltura\Client\Plugin\Schedule\Type\BaseLiveScheduleEvent
{
	public function getKalturaObjectType()
	{
		return 'KalturaLiveStreamScheduleEvent';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->sourceEntryId))
			$this->sourceEntryId = (string)$xml->sourceEntryId;
		if(count($xml->projectedAudience))
			$this->projectedAudience = (int)$xml->projectedAudience;
		if(count($xml->preStartTime))
			$this->preStartTime = (int)$xml->preStartTime;
		if(count($xml->postEndTime))
			$this->postEndTime = (int)$xml->postEndTime;
		if(count($xml->preStartEntryId))
			$this->preStartEntryId = (string)$xml->preStartEntryId;
		if(count($xml->postEndEntryId))
			$this->postEndEntryId = (string)$xml->postEndEntryId;
	}
	/**
	 * The entry ID of the source entry (for simulive)
	 * @var string
	 */
	public $sourceEntryId = null;

	/**
	 * Defines the expected audience.
	 * @var int
	 */
	public $projectedAudience = null;

	/**
	 * The time relative time before the startTime considered as preStart time
	 * @var int
	 */
	public $preStartTime = null;

	/**
	 * The time relative time before the endTime considered as postEnd time
	 * @var int
	 */
	public $postEndTime = null;

	/**
	 * The entry id of the pre start entry
	 * @var string
	 */
	public $preStartEntryId = null;

	/**
	 * The entry id of the post end entry
	 * @var string
	 */
	public $postEndEntryId = null;

}
