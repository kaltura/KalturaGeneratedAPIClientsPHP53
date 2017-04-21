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
 * The ScheduleEventResource service enables you create and manage (update, delete, retrieve, etc.) the connections between recording events and the resources required for these events (cameras, capture devices, etc.).
 * @package Kaltura
 * @subpackage Client
 */
class ScheduleEventResourceService extends \Kaltura\Client\ServiceBase
{
	function __construct(\Kaltura\Client\Client $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Allows you to add a new KalturaScheduleEventResource object
	 * 
	 * @return \Kaltura\Client\Plugin\Schedule\Type\ScheduleEventResource
	 */
	function add(\Kaltura\Client\Plugin\Schedule\Type\ScheduleEventResource $scheduleEventResource)
	{
		$kparams = array();
		$this->client->addParam($kparams, "scheduleEventResource", $scheduleEventResource->toParams());
		$this->client->queueServiceActionCall("schedule_scheduleeventresource", "add", "KalturaScheduleEventResource", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaScheduleEventResource");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Plugin\\Schedule\\Type\\ScheduleEventResource");
		return $resultObject;
	}

	/**
	 * Mark the KalturaScheduleEventResource object as deleted
	 * 
	 */
	function delete($scheduleEventId, $scheduleResourceId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "scheduleEventId", $scheduleEventId);
		$this->client->addParam($kparams, "scheduleResourceId", $scheduleResourceId);
		$this->client->queueServiceActionCall("schedule_scheduleeventresource", "delete", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
	}

	/**
	 * Retrieve a KalturaScheduleEventResource object by ID
	 * 
	 * @return \Kaltura\Client\Plugin\Schedule\Type\ScheduleEventResource
	 */
	function get($scheduleEventId, $scheduleResourceId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "scheduleEventId", $scheduleEventId);
		$this->client->addParam($kparams, "scheduleResourceId", $scheduleResourceId);
		$this->client->queueServiceActionCall("schedule_scheduleeventresource", "get", "KalturaScheduleEventResource", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaScheduleEventResource");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Plugin\\Schedule\\Type\\ScheduleEventResource");
		return $resultObject;
	}

	/**
	 * List KalturaScheduleEventResource objects
	 * 
	 * @return \Kaltura\Client\Plugin\Schedule\Type\ScheduleEventResourceListResponse
	 */
	function listAction(\Kaltura\Client\Plugin\Schedule\Type\ScheduleEventResourceFilter $filter = null, \Kaltura\Client\Type\FilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("schedule_scheduleeventresource", "list", "KalturaScheduleEventResourceListResponse", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaScheduleEventResourceListResponse");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Plugin\\Schedule\\Type\\ScheduleEventResourceListResponse");
		return $resultObject;
	}

	/**
	 * Update an existing KalturaScheduleEventResource object
	 * 
	 * @return \Kaltura\Client\Plugin\Schedule\Type\ScheduleEventResource
	 */
	function update($scheduleEventId, $scheduleResourceId, \Kaltura\Client\Plugin\Schedule\Type\ScheduleEventResource $scheduleEventResource)
	{
		$kparams = array();
		$this->client->addParam($kparams, "scheduleEventId", $scheduleEventId);
		$this->client->addParam($kparams, "scheduleResourceId", $scheduleResourceId);
		$this->client->addParam($kparams, "scheduleEventResource", $scheduleEventResource->toParams());
		$this->client->queueServiceActionCall("schedule_scheduleeventresource", "update", "KalturaScheduleEventResource", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaScheduleEventResource");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Plugin\\Schedule\\Type\\ScheduleEventResource");
		return $resultObject;
	}
}
