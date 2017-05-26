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
namespace Kaltura\Client\Plugin\Schedule\Service;

/**
 * The ScheduleEvent service enables you to create and manage (update, delete, retrieve, etc.) scheduled recording events.
 * @package Kaltura
 * @subpackage Client
 */
class ScheduleEventService extends \Kaltura\Client\ServiceBase
{
	function __construct(\Kaltura\Client\Client $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Allows you to add a new KalturaScheduleEvent object
	 * 
	 * @return \Kaltura\Client\Plugin\Schedule\Type\ScheduleEvent
	 */
	function add(\Kaltura\Client\Plugin\Schedule\Type\ScheduleEvent $scheduleEvent)
	{
		$kparams = array();
		$this->client->addParam($kparams, "scheduleEvent", $scheduleEvent->toParams());
		$this->client->queueServiceActionCall("schedule_scheduleevent", "add", "KalturaScheduleEvent", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaScheduleEvent");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Plugin\\Schedule\\Type\\ScheduleEvent");
		return $resultObject;
	}

	/**
	 * Add new bulk upload batch job
	 * 
	 * @return \Kaltura\Client\Type\BulkUpload
	 */
	function addFromBulkUpload($fileData, \Kaltura\Client\Plugin\ScheduleBulkUpload\Type\BulkUploadICalJobData $bulkUploadData = null)
	{
		$kparams = array();
		$kfiles = array();
		$this->client->addParam($kfiles, "fileData", $fileData);
		if ($bulkUploadData !== null)
			$this->client->addParam($kparams, "bulkUploadData", $bulkUploadData->toParams());
		$this->client->queueServiceActionCall("schedule_scheduleevent", "addFromBulkUpload", "KalturaBulkUpload", $kparams, $kfiles);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaBulkUpload");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\BulkUpload");
		return $resultObject;
	}

	/**
	 * Mark the KalturaScheduleEvent object as cancelled
	 * 
	 * @return \Kaltura\Client\Plugin\Schedule\Type\ScheduleEvent
	 */
	function cancel($scheduleEventId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "scheduleEventId", $scheduleEventId);
		$this->client->queueServiceActionCall("schedule_scheduleevent", "cancel", "KalturaScheduleEvent", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaScheduleEvent");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Plugin\\Schedule\\Type\\ScheduleEvent");
		return $resultObject;
	}

	/**
	 * Mark the KalturaScheduleEvent object as deleted
	 * 
	 * @return \Kaltura\Client\Plugin\Schedule\Type\ScheduleEvent
	 */
	function delete($scheduleEventId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "scheduleEventId", $scheduleEventId);
		$this->client->queueServiceActionCall("schedule_scheduleevent", "delete", "KalturaScheduleEvent", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaScheduleEvent");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Plugin\\Schedule\\Type\\ScheduleEvent");
		return $resultObject;
	}

	/**
	 * Retrieve a KalturaScheduleEvent object by ID
	 * 
	 * @return \Kaltura\Client\Plugin\Schedule\Type\ScheduleEvent
	 */
	function get($scheduleEventId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "scheduleEventId", $scheduleEventId);
		$this->client->queueServiceActionCall("schedule_scheduleevent", "get", "KalturaScheduleEvent", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaScheduleEvent");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Plugin\\Schedule\\Type\\ScheduleEvent");
		return $resultObject;
	}

	/**
	 * List conflicting events for resourcesIds by event's dates
	 * 
	 * @return \Kaltura\Client\Plugin\Schedule\Type\ScheduleEventListResponse
	 */
	function getConflicts($resourceIds, \Kaltura\Client\Plugin\Schedule\Type\ScheduleEvent $scheduleEvent, $scheduleEventIdToIgnore = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "resourceIds", $resourceIds);
		$this->client->addParam($kparams, "scheduleEvent", $scheduleEvent->toParams());
		$this->client->addParam($kparams, "scheduleEventIdToIgnore", $scheduleEventIdToIgnore);
		$this->client->queueServiceActionCall("schedule_scheduleevent", "getConflicts", "KalturaScheduleEventListResponse", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaScheduleEventListResponse");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Plugin\\Schedule\\Type\\ScheduleEventListResponse");
		return $resultObject;
	}

	/**
	 * List KalturaScheduleEvent objects
	 * 
	 * @return \Kaltura\Client\Plugin\Schedule\Type\ScheduleEventListResponse
	 */
	function listAction(\Kaltura\Client\Plugin\Schedule\Type\ScheduleEventFilter $filter = null, \Kaltura\Client\Type\FilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("schedule_scheduleevent", "list", "KalturaScheduleEventListResponse", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaScheduleEventListResponse");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Plugin\\Schedule\\Type\\ScheduleEventListResponse");
		return $resultObject;
	}

	/**
	 * Update an existing KalturaScheduleEvent object
	 * 
	 * @return \Kaltura\Client\Plugin\Schedule\Type\ScheduleEvent
	 */
	function update($scheduleEventId, \Kaltura\Client\Plugin\Schedule\Type\ScheduleEvent $scheduleEvent)
	{
		$kparams = array();
		$this->client->addParam($kparams, "scheduleEventId", $scheduleEventId);
		$this->client->addParam($kparams, "scheduleEvent", $scheduleEvent->toParams());
		$this->client->queueServiceActionCall("schedule_scheduleevent", "update", "KalturaScheduleEvent", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaScheduleEvent");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Plugin\\Schedule\\Type\\ScheduleEvent");
		return $resultObject;
	}
}
