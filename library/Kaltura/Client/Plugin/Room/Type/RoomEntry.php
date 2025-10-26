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
namespace Kaltura\Client\Plugin\Room\Type;

/**
 * @package Kaltura
 * @subpackage Client
 */
class RoomEntry extends \Kaltura\Client\Type\BaseEntry
{
	public function getKalturaObjectType()
	{
		return 'KalturaRoomEntry';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->roomType))
			$this->roomType = (int)$xml->roomType;
		if(count($xml->broadcastEntryId))
			$this->broadcastEntryId = (string)$xml->broadcastEntryId;
		if(count($xml->templateRoomEntryId))
			$this->templateRoomEntryId = (string)$xml->templateRoomEntryId;
		if(count($xml->recordedEntryId))
			$this->recordedEntryId = (string)$xml->recordedEntryId;
	}
	/**
	 * 
	 * @var \Kaltura\Client\Plugin\Room\Enum\RoomType
	 */
	public $roomType = null;

	/**
	 * The entryId of the broadcast that the room streaming to
	 * @var string
	 */
	public $broadcastEntryId = null;

	/**
	 * The entryId of the room where settings will be taken from
	 * @var string
	 */
	public $templateRoomEntryId = null;

	/**
	 * The entryId of the recording
	 * @var string
	 */
	public $recordedEntryId = null;

}
