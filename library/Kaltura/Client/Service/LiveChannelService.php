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
namespace Kaltura\Client\Service;

/**
 * Live Channel service lets you manage live channels
 * @package Kaltura
 * @subpackage Client
 */
class LiveChannelService extends \Kaltura\Client\ServiceBase
{
	function __construct(\Kaltura\Client\Client $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Adds new live channel.
	 * 
	 * @return \Kaltura\Client\Type\LiveChannel
	 */
	function add(\Kaltura\Client\Type\LiveChannel $liveChannel)
	{
		$kparams = array();
		$this->client->addParam($kparams, "liveChannel", $liveChannel->toParams());
		$this->client->queueServiceActionCall("livechannel", "add", "KalturaLiveChannel", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaLiveChannel");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\LiveChannel");
		return $resultObject;
	}

	/**
	 * Append recorded video to live entry
	 * 
	 * @return \Kaltura\Client\Type\LiveEntry
	 */
	function appendRecording($entryId, $assetId, $mediaServerIndex, \Kaltura\Client\Type\DataCenterContentResource $resource, $duration, $isLastChunk = false)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->addParam($kparams, "assetId", $assetId);
		$this->client->addParam($kparams, "mediaServerIndex", $mediaServerIndex);
		$this->client->addParam($kparams, "resource", $resource->toParams());
		$this->client->addParam($kparams, "duration", $duration);
		$this->client->addParam($kparams, "isLastChunk", $isLastChunk);
		$this->client->queueServiceActionCall("livechannel", "appendRecording", "KalturaLiveEntry", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaLiveEntry");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\LiveEntry");
		return $resultObject;
	}

	/**
	 * Delete a live channel.
	 * 
	 */
	function delete($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("livechannel", "delete", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
	}

	/**
	 * Get live channel by ID.
	 * 
	 * @return \Kaltura\Client\Type\LiveChannel
	 */
	function get($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("livechannel", "get", "KalturaLiveChannel", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaLiveChannel");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\LiveChannel");
		return $resultObject;
	}

	/**
	 * Delivering the status of a live channel (on-air/offline)
	 * 
	 * @return bool
	 */
	function isLive($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("livechannel", "isLive", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = (bool)\Kaltura\Client\ParseUtils::unmarshalSimpleType($resultXmlObject->result);
		return $resultObject;
	}

	/**
	 * List live channels by filter with paging support.
	 * 
	 * @return \Kaltura\Client\Type\LiveChannelListResponse
	 */
	function listAction(\Kaltura\Client\Type\LiveChannelFilter $filter = null, \Kaltura\Client\Type\FilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("livechannel", "list", "KalturaLiveChannelListResponse", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaLiveChannelListResponse");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\LiveChannelListResponse");
		return $resultObject;
	}

	/**
	 * Register media server to live entry
	 * 
	 * @return \Kaltura\Client\Type\LiveEntry
	 */
	function registerMediaServer($entryId, $hostname, $mediaServerIndex, $applicationName = null, $liveEntryStatus = 1)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->addParam($kparams, "hostname", $hostname);
		$this->client->addParam($kparams, "mediaServerIndex", $mediaServerIndex);
		$this->client->addParam($kparams, "applicationName", $applicationName);
		$this->client->addParam($kparams, "liveEntryStatus", $liveEntryStatus);
		$this->client->queueServiceActionCall("livechannel", "registerMediaServer", "KalturaLiveEntry", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaLiveEntry");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\LiveEntry");
		return $resultObject;
	}

	/**
	 * Sey recorded video to live entry
	 * 
	 * @return \Kaltura\Client\Type\LiveEntry
	 */
	function setRecordedContent($entryId, $mediaServerIndex, \Kaltura\Client\Type\DataCenterContentResource $resource, $duration, $recordedEntryId = null, $flavorParamsId = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->addParam($kparams, "mediaServerIndex", $mediaServerIndex);
		$this->client->addParam($kparams, "resource", $resource->toParams());
		$this->client->addParam($kparams, "duration", $duration);
		$this->client->addParam($kparams, "recordedEntryId", $recordedEntryId);
		$this->client->addParam($kparams, "flavorParamsId", $flavorParamsId);
		$this->client->queueServiceActionCall("livechannel", "setRecordedContent", "KalturaLiveEntry", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaLiveEntry");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\LiveEntry");
		return $resultObject;
	}

	/**
	 * Unregister media server from live entry
	 * 
	 * @return \Kaltura\Client\Type\LiveEntry
	 */
	function unregisterMediaServer($entryId, $hostname, $mediaServerIndex)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->addParam($kparams, "hostname", $hostname);
		$this->client->addParam($kparams, "mediaServerIndex", $mediaServerIndex);
		$this->client->queueServiceActionCall("livechannel", "unregisterMediaServer", "KalturaLiveEntry", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaLiveEntry");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\LiveEntry");
		return $resultObject;
	}

	/**
	 * Update live channel. Only the properties that were set will be updated.
	 * 
	 * @return \Kaltura\Client\Type\LiveChannel
	 */
	function update($id, \Kaltura\Client\Type\LiveChannel $liveChannel)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "liveChannel", $liveChannel->toParams());
		$this->client->queueServiceActionCall("livechannel", "update", "KalturaLiveChannel", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaLiveChannel");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\LiveChannel");
		return $resultObject;
	}

	/**
	 * Validates all registered media servers
	 * 
	 */
	function validateRegisteredMediaServers($entryId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->queueServiceActionCall("livechannel", "validateRegisteredMediaServers", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
	}
}
