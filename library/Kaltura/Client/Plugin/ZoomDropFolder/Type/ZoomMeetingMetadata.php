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
namespace Kaltura\Client\Plugin\ZoomDropFolder\Type;

/**
 * @package Kaltura
 * @subpackage Client
 */
class ZoomMeetingMetadata extends \Kaltura\Client\ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaZoomMeetingMetadata';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->uuid))
			$this->uuid = (string)$xml->uuid;
		if(count($xml->meetingId))
			$this->meetingId = (string)$xml->meetingId;
		if(count($xml->accountId))
			$this->accountId = (string)$xml->accountId;
		if(count($xml->hostId))
			$this->hostId = (string)$xml->hostId;
		if(count($xml->topic))
			$this->topic = (string)$xml->topic;
		if(count($xml->meetingStartTime))
			$this->meetingStartTime = (string)$xml->meetingStartTime;
		if(count($xml->type))
			$this->type = (int)$xml->type;
	}
	/**
	 * 
	 * @var string
	 */
	public $uuid = null;

	/**
	 * 
	 * @var string
	 */
	public $meetingId = null;

	/**
	 * 
	 * @var string
	 */
	public $accountId = null;

	/**
	 * 
	 * @var string
	 */
	public $hostId = null;

	/**
	 * 
	 * @var string
	 */
	public $topic = null;

	/**
	 * 
	 * @var string
	 */
	public $meetingStartTime = null;

	/**
	 * 
	 * @var \Kaltura\Client\Plugin\Vendor\Enum\RecordingType
	 */
	public $type = null;

}
