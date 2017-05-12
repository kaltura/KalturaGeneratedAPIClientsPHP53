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
 * Live Stream service lets you manage live stream entries
 * @package Kaltura
 * @subpackage Client
 */
class LiveStreamService extends \Kaltura\Client\ServiceBase
{
	function __construct(\Kaltura\Client\Client $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Adds new live stream entry.
	 * 	 The entry will be queued for provision.
	 * 
	 * @return \Kaltura\Client\Type\LiveStreamEntry
	 */
	function add(\Kaltura\Client\Type\LiveStreamEntry $liveStreamEntry, $sourceType = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "liveStreamEntry", $liveStreamEntry->toParams());
		$this->client->addParam($kparams, "sourceType", $sourceType);
		$this->client->queueServiceActionCall("livestream", "add", "KalturaLiveStreamEntry", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaLiveStreamEntry");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\LiveStreamEntry");
		return $resultObject;
	}

	/**
	 * Add new pushPublish configuration to entry
	 * 
	 * @return \Kaltura\Client\Type\LiveStreamEntry
	 */
	function addLiveStreamPushPublishConfiguration($entryId, $protocol, $url = null, \Kaltura\Client\Type\LiveStreamConfiguration $liveStreamConfiguration = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->addParam($kparams, "protocol", $protocol);
		$this->client->addParam($kparams, "url", $url);
		if ($liveStreamConfiguration !== null)
			$this->client->addParam($kparams, "liveStreamConfiguration", $liveStreamConfiguration->toParams());
		$this->client->queueServiceActionCall("livestream", "addLiveStreamPushPublishConfiguration", "KalturaLiveStreamEntry", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaLiveStreamEntry");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\LiveStreamEntry");
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
		$this->client->queueServiceActionCall("livestream", "appendRecording", "KalturaLiveEntry", $kparams);
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
	 * Authenticate live-stream entry against stream token and partner limitations
	 * 
	 * @return \Kaltura\Client\Type\LiveStreamEntry
	 */
	function authenticate($entryId, $token, $hostname = null, $mediaServerIndex = null, $applicationName = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->addParam($kparams, "token", $token);
		$this->client->addParam($kparams, "hostname", $hostname);
		$this->client->addParam($kparams, "mediaServerIndex", $mediaServerIndex);
		$this->client->addParam($kparams, "applicationName", $applicationName);
		$this->client->queueServiceActionCall("livestream", "authenticate", "KalturaLiveStreamEntry", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaLiveStreamEntry");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\LiveStreamEntry");
		return $resultObject;
	}

	/**
	 * Creates perioding metadata sync-point events on a live stream
	 * 
	 */
	function createPeriodicSyncPoints($entryId, $interval, $duration)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->addParam($kparams, "interval", $interval);
		$this->client->addParam($kparams, "duration", $duration);
		$this->client->queueServiceActionCall("livestream", "createPeriodicSyncPoints", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
	}

	/**
	 * Delete a live stream entry.
	 * 
	 */
	function delete($entryId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->queueServiceActionCall("livestream", "delete", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
	}

	/**
	 * Get live stream entry by ID.
	 * 
	 * @return \Kaltura\Client\Type\LiveStreamEntry
	 */
	function get($entryId, $version = -1)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->addParam($kparams, "version", $version);
		$this->client->queueServiceActionCall("livestream", "get", "KalturaLiveStreamEntry", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaLiveStreamEntry");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\LiveStreamEntry");
		return $resultObject;
	}

	/**
	 * Delivering the status of a live stream (on-air/offline) if it is possible
	 * 
	 * @return bool
	 */
	function isLive($id, $protocol)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "protocol", $protocol);
		$this->client->queueServiceActionCall("livestream", "isLive", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = (bool)\Kaltura\Client\ParseUtils::unmarshalSimpleType($resultXmlObject->result);
		return $resultObject;
	}

	/**
	 * List live stream entries by filter with paging support.
	 * 
	 * @return \Kaltura\Client\Type\LiveStreamListResponse
	 */
	function listAction(\Kaltura\Client\Type\LiveStreamEntryFilter $filter = null, \Kaltura\Client\Type\FilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("livestream", "list", "KalturaLiveStreamListResponse", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaLiveStreamListResponse");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\LiveStreamListResponse");
		return $resultObject;
	}

	/**
	 * Regenerate new secure token for liveStream
	 * 
	 */
	function regenerateStreamToken($entryId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->queueServiceActionCall("livestream", "regenerateStreamToken", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
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
		$this->client->queueServiceActionCall("livestream", "registerMediaServer", "KalturaLiveEntry", $kparams);
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
	 * Remove push publish configuration from entry
	 * 
	 * @return \Kaltura\Client\Type\LiveStreamEntry
	 */
	function removeLiveStreamPushPublishConfiguration($entryId, $protocol)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->addParam($kparams, "protocol", $protocol);
		$this->client->queueServiceActionCall("livestream", "removeLiveStreamPushPublishConfiguration", "KalturaLiveStreamEntry", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaLiveStreamEntry");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\LiveStreamEntry");
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
		$this->client->queueServiceActionCall("livestream", "setRecordedContent", "KalturaLiveEntry", $kparams);
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
		$this->client->queueServiceActionCall("livestream", "unregisterMediaServer", "KalturaLiveEntry", $kparams);
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
	 * Update live stream entry. Only the properties that were set will be updated.
	 * 
	 * @return \Kaltura\Client\Type\LiveStreamEntry
	 */
	function update($entryId, \Kaltura\Client\Type\LiveStreamEntry $liveStreamEntry)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->addParam($kparams, "liveStreamEntry", $liveStreamEntry->toParams());
		$this->client->queueServiceActionCall("livestream", "update", "KalturaLiveStreamEntry", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaLiveStreamEntry");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\LiveStreamEntry");
		return $resultObject;
	}

	/**
	 * Update entry thumbnail using url
	 * 
	 * @return \Kaltura\Client\Type\LiveStreamEntry
	 */
	function updateOfflineThumbnailFromUrl($entryId, $url)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->addParam($kparams, "url", $url);
		$this->client->queueServiceActionCall("livestream", "updateOfflineThumbnailFromUrl", "KalturaLiveStreamEntry", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaLiveStreamEntry");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\LiveStreamEntry");
		return $resultObject;
	}

	/**
	 * Update live stream entry thumbnail using a raw jpeg file
	 * 
	 * @return \Kaltura\Client\Type\LiveStreamEntry
	 */
	function updateOfflineThumbnailJpeg($entryId, $fileData)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$kfiles = array();
		$this->client->addParam($kfiles, "fileData", $fileData);
		$this->client->queueServiceActionCall("livestream", "updateOfflineThumbnailJpeg", "KalturaLiveStreamEntry", $kparams, $kfiles);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaLiveStreamEntry");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\LiveStreamEntry");
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
		$this->client->queueServiceActionCall("livestream", "validateRegisteredMediaServers", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
	}
}
