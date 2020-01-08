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
// Copyright (C) 2006-2020  Kaltura Inc.
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
namespace Kaltura\Client\Plugin\Reach\Service;

/**
 * Entry Vendor Task Service
 * @package Kaltura
 * @subpackage Client
 */
class EntryVendorTaskService extends \Kaltura\Client\ServiceBase
{
	function __construct(\Kaltura\Client\Client $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Cancel entry task. will only occur for task in PENDING or PENDING_MODERATION status
	 * 
	 * @return \Kaltura\Client\Plugin\Reach\Type\EntryVendorTask
	 */
	function abort($id, $abortReason = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "abortReason", $abortReason);
		$this->client->queueServiceActionCall("reach_entryvendortask", "abort", "KalturaEntryVendorTask", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaEntryVendorTask");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Plugin\\Reach\\Type\\EntryVendorTask");
		return $resultObject;
	}

	/**
	 * Allows you to add a entry vendor task
	 * 
	 * @return \Kaltura\Client\Plugin\Reach\Type\EntryVendorTask
	 */
	function add(\Kaltura\Client\Plugin\Reach\Type\EntryVendorTask $entryVendorTask)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryVendorTask", $entryVendorTask->toParams());
		$this->client->queueServiceActionCall("reach_entryvendortask", "add", "KalturaEntryVendorTask", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaEntryVendorTask");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Plugin\\Reach\\Type\\EntryVendorTask");
		return $resultObject;
	}

	/**
	 * Approve entry vendor task for execution.
	 * 
	 * @return \Kaltura\Client\Plugin\Reach\Type\EntryVendorTask
	 */
	function approve($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("reach_entryvendortask", "approve", "KalturaEntryVendorTask", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaEntryVendorTask");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Plugin\\Reach\\Type\\EntryVendorTask");
		return $resultObject;
	}

	/**
	 * add batch job that sends an email with a link to download an updated CSV that contains list of users
	 * 
	 * @return string
	 */
	function exportToCsv(\Kaltura\Client\Plugin\Reach\Type\EntryVendorTaskFilter $filter)
	{
		$kparams = array();
		$this->client->addParam($kparams, "filter", $filter->toParams());
		$this->client->queueServiceActionCall("reach_entryvendortask", "exportToCsv", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = (String)\Kaltura\Client\ParseUtils::unmarshalSimpleType($resultXmlObject->result);
		return $resultObject;
	}

	/**
	 * Extend access key in case the existing one has expired.
	 * 
	 * @return \Kaltura\Client\Plugin\Reach\Type\EntryVendorTask
	 */
	function extendAccessKey($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("reach_entryvendortask", "extendAccessKey", "KalturaEntryVendorTask", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaEntryVendorTask");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Plugin\\Reach\\Type\\EntryVendorTask");
		return $resultObject;
	}

	/**
	 * Retrieve specific entry vendor task by id
	 * 
	 * @return \Kaltura\Client\Plugin\Reach\Type\EntryVendorTask
	 */
	function get($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("reach_entryvendortask", "get", "KalturaEntryVendorTask", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaEntryVendorTask");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Plugin\\Reach\\Type\\EntryVendorTask");
		return $resultObject;
	}

	/**
	 * get KalturaEntryVendorTask objects for specific vendor partner
	 * 
	 * @return \Kaltura\Client\Plugin\Reach\Type\EntryVendorTaskListResponse
	 */
	function getJobs(\Kaltura\Client\Plugin\Reach\Type\EntryVendorTaskFilter $filter = null, \Kaltura\Client\Type\FilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("reach_entryvendortask", "getJobs", "KalturaEntryVendorTaskListResponse", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaEntryVendorTaskListResponse");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Plugin\\Reach\\Type\\EntryVendorTaskListResponse");
		return $resultObject;
	}

	/**
	 * List KalturaEntryVendorTask objects
	 * 
	 * @return \Kaltura\Client\Plugin\Reach\Type\EntryVendorTaskListResponse
	 */
	function listAction(\Kaltura\Client\Plugin\Reach\Type\EntryVendorTaskFilter $filter = null, \Kaltura\Client\Type\FilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("reach_entryvendortask", "list", "KalturaEntryVendorTaskListResponse", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaEntryVendorTaskListResponse");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Plugin\\Reach\\Type\\EntryVendorTaskListResponse");
		return $resultObject;
	}

	/**
	 * Reject entry vendor task for execution.
	 * 
	 * @return \Kaltura\Client\Plugin\Reach\Type\EntryVendorTask
	 */
	function reject($id, $rejectReason = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "rejectReason", $rejectReason);
		$this->client->queueServiceActionCall("reach_entryvendortask", "reject", "KalturaEntryVendorTask", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaEntryVendorTask");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Plugin\\Reach\\Type\\EntryVendorTask");
		return $resultObject;
	}

	/**
	 * Will serve a requested csv
	 * 
	 * @return string
	 */
	function serveCsv($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("reach_entryvendortask", "serveCsv", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = (String)\Kaltura\Client\ParseUtils::unmarshalSimpleType($resultXmlObject->result);
		return $resultObject;
	}

	/**
	 * Update entry vendor task. Only the properties that were set will be updated.
	 * 
	 * @return \Kaltura\Client\Plugin\Reach\Type\EntryVendorTask
	 */
	function update($id, \Kaltura\Client\Plugin\Reach\Type\EntryVendorTask $entryVendorTask)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "entryVendorTask", $entryVendorTask->toParams());
		$this->client->queueServiceActionCall("reach_entryvendortask", "update", "KalturaEntryVendorTask", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaEntryVendorTask");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Plugin\\Reach\\Type\\EntryVendorTask");
		return $resultObject;
	}

	/**
	 * Update entry vendor task. Only the properties that were set will be updated.
	 * 
	 * @return \Kaltura\Client\Plugin\Reach\Type\EntryVendorTask
	 */
	function updateJob($id, \Kaltura\Client\Plugin\Reach\Type\EntryVendorTask $entryVendorTask)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "entryVendorTask", $entryVendorTask->toParams());
		$this->client->queueServiceActionCall("reach_entryvendortask", "updateJob", "KalturaEntryVendorTask", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaEntryVendorTask");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Plugin\\Reach\\Type\\EntryVendorTask");
		return $resultObject;
	}
}
