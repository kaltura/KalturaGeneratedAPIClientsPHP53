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
class SeriesRecording extends \Kaltura\Client\ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaSeriesRecording';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->id))
			$this->id = (string)$xml->id;
		if(count($xml->epgId))
			$this->epgId = (string)$xml->epgId;
		if(count($xml->channelId))
			$this->channelId = (string)$xml->channelId;
		if(count($xml->seriesId))
			$this->seriesId = (string)$xml->seriesId;
		if(count($xml->seasonNumber))
			$this->seasonNumber = (int)$xml->seasonNumber;
		if(count($xml->type))
			$this->type = (string)$xml->type;
		if(count($xml->createDate))
			$this->createDate = (string)$xml->createDate;
		if(count($xml->updateDate))
			$this->updateDate = (string)$xml->updateDate;
		if(count($xml->excludedSeasons))
		{
			if(empty($xml->excludedSeasons))
				$this->excludedSeasons = array();
			else
				$this->excludedSeasons = \Kaltura\Client\ParseUtils::unmarshalArray($xml->excludedSeasons, "KalturaIntegerValue");
		}
	}
	/**
	 * Kaltura unique ID representing the series recording identifier
	 * @var int
	 * @readonly
	 */
	public $id = null;

	/**
	 * Kaltura EpgId
	 * @var int
	 */
	public $epgId = null;

	/**
	 * Kaltura ChannelId
	 * @var int
	 */
	public $channelId = null;

	/**
	 * Kaltura SeriesId
	 * @var string
	 */
	public $seriesId = null;

	/**
	 * Kaltura SeasonNumber
	 * @var int
	 */
	public $seasonNumber = null;

	/**
	 * Recording Type: single/series/season
	 * @var \Kaltura\Client\Enum\RecordingType
	 */
	public $type = null;

	/**
	 * Specifies when was the series recording created. Date and time represented as epoch.
	 * @var int
	 * @readonly
	 */
	public $createDate = null;

	/**
	 * Specifies when was the series recording last updated. Date and time represented as epoch.
	 * @var int
	 * @readonly
	 */
	public $updateDate = null;

	/**
	 * List of the season numbers to exclude.
	 * @var array<KalturaIntegerValue>
	 * @readonly
	 */
	public $excludedSeasons;

}
