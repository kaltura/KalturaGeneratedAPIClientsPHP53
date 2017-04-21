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
 * The ScheduleResource service enables you to create and manage (update, delete, retrieve, etc.) the resources required for scheduled events (cameras, capture devices, etc.).
 * @package Kaltura
 * @subpackage Client
 */
class ScheduleResourceService extends \Kaltura\Client\ServiceBase
{
	function __construct(\Kaltura\Client\Client $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Allows you to add a new KalturaScheduleResource object
	 * 
	 * @return \Kaltura\Client\Plugin\Schedule\Type\ScheduleResource
	 */
	function add(\Kaltura\Client\Plugin\Schedule\Type\ScheduleResource $scheduleResource)
	{
		$kparams = array();
		$this->client->addParam($kparams, "scheduleResource", $scheduleResource->toParams());
		$this->client->queueServiceActionCall("schedule_scheduleresource", "add", "KalturaScheduleResource", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaScheduleResource");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Plugin\\Schedule\\Type\\ScheduleResource");
		return $resultObject;
	}

	/**
	 * Add new bulk upload batch job
	 * 
	 * @return \Kaltura\Client\Type\BulkUpload
	 */
	function addFromBulkUpload($fileData, \Kaltura\Client\Plugin\BulkUploadCsv\Type\BulkUploadCsvJobData $bulkUploadData = null)
	{
		$kparams = array();
		$kfiles = array();
		$this->client->addParam($kfiles, "fileData", $fileData);
		if ($bulkUploadData !== null)
			$this->client->addParam($kparams, "bulkUploadData", $bulkUploadData->toParams());
		$this->client->queueServiceActionCall("schedule_scheduleresource", "addFromBulkUpload", "KalturaBulkUpload", $kparams, $kfiles);
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
	 * Mark the KalturaScheduleResource object as deleted
	 * 
	 * @return \Kaltura\Client\Plugin\Schedule\Type\ScheduleResource
	 */
	function delete($scheduleResourceId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "scheduleResourceId", $scheduleResourceId);
		$this->client->queueServiceActionCall("schedule_scheduleresource", "delete", "KalturaScheduleResource", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaScheduleResource");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Plugin\\Schedule\\Type\\ScheduleResource");
		return $resultObject;
	}

	/**
	 * Retrieve a KalturaScheduleResource object by ID
	 * 
	 * @return \Kaltura\Client\Plugin\Schedule\Type\ScheduleResource
	 */
	function get($scheduleResourceId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "scheduleResourceId", $scheduleResourceId);
		$this->client->queueServiceActionCall("schedule_scheduleresource", "get", "KalturaScheduleResource", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaScheduleResource");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Plugin\\Schedule\\Type\\ScheduleResource");
		return $resultObject;
	}

	/**
	 * List KalturaScheduleResource objects
	 * 
	 * @return \Kaltura\Client\Plugin\Schedule\Type\ScheduleResourceListResponse
	 */
	function listAction(\Kaltura\Client\Plugin\Schedule\Type\ScheduleResourceFilter $filter = null, \Kaltura\Client\Type\FilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("schedule_scheduleresource", "list", "KalturaScheduleResourceListResponse", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaScheduleResourceListResponse");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Plugin\\Schedule\\Type\\ScheduleResourceListResponse");
		return $resultObject;
	}

	/**
	 * Update an existing KalturaScheduleResource object
	 * 
	 * @return \Kaltura\Client\Plugin\Schedule\Type\ScheduleResource
	 */
	function update($scheduleResourceId, \Kaltura\Client\Plugin\Schedule\Type\ScheduleResource $scheduleResource)
	{
		$kparams = array();
		$this->client->addParam($kparams, "scheduleResourceId", $scheduleResourceId);
		$this->client->addParam($kparams, "scheduleResource", $scheduleResource->toParams());
		$this->client->queueServiceActionCall("schedule_scheduleresource", "update", "KalturaScheduleResource", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaScheduleResource");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Plugin\\Schedule\\Type\\ScheduleResource");
		return $resultObject;
	}
}
