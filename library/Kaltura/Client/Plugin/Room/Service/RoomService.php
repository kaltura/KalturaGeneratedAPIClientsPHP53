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
namespace Kaltura\Client\Plugin\Room\Service;

/**
 * @package Kaltura
 * @subpackage Client
 */
class RoomService extends \Kaltura\Client\ServiceBase
{
	function __construct(\Kaltura\Client\Client $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * 
	 * @return \Kaltura\Client\Plugin\Room\Type\RoomEntry
	 */
	function add(\Kaltura\Client\Plugin\Room\Type\RoomEntry $entry)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entry", $entry->toParams());
		$this->client->queueServiceActionCall("room_room", "add", "KalturaRoomEntry", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaRoomEntry");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Plugin\\Room\\Type\\RoomEntry");
		return $resultObject;
	}

	/**
	 * 
	 * @return \Kaltura\Client\Type\MediaEntry
	 */
	function attachRecordedEntry($roomEntryId, $mediaEntryId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "roomEntryId", $roomEntryId);
		$this->client->addParam($kparams, "mediaEntryId", $mediaEntryId);
		$this->client->queueServiceActionCall("room_room", "attachRecordedEntry", "KalturaMediaEntry", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaMediaEntry");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\MediaEntry");
		return $resultObject;
	}

	/**
	 * 
	 */
	function delete($roomId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "roomId", $roomId);
		$this->client->queueServiceActionCall("room_room", "delete", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
	}

	/**
	 * 
	 * @return \Kaltura\Client\Plugin\Room\Type\RoomEntry
	 */
	function get($roomId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "roomId", $roomId);
		$this->client->queueServiceActionCall("room_room", "get", "KalturaRoomEntry", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaRoomEntry");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Plugin\\Room\\Type\\RoomEntry");
		return $resultObject;
	}

	/**
	 * 
	 * @return \Kaltura\Client\Plugin\Room\Type\RoomEntryListResponse
	 */
	function listAction(\Kaltura\Client\Plugin\Room\Type\RoomEntryFilter $filter = null, \Kaltura\Client\Type\FilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("room_room", "list", "KalturaRoomEntryListResponse", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaRoomEntryListResponse");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Plugin\\Room\\Type\\RoomEntryListResponse");
		return $resultObject;
	}

	/**
	 * 
	 * @return \Kaltura\Client\Plugin\Room\Type\RoomEntry
	 */
	function update($roomId, \Kaltura\Client\Plugin\Room\Type\RoomEntry $room)
	{
		$kparams = array();
		$this->client->addParam($kparams, "roomId", $roomId);
		$this->client->addParam($kparams, "room", $room->toParams());
		$this->client->queueServiceActionCall("room_room", "update", "KalturaRoomEntry", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaRoomEntry");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Plugin\\Room\\Type\\RoomEntry");
		return $resultObject;
	}
}
