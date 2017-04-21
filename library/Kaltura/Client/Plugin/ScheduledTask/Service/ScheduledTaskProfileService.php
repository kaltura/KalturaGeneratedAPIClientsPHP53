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
namespace Kaltura\Client\Plugin\ScheduledTask\Service;

/**
 * Schedule task service lets you create and manage scheduled task profiles
 * @package Kaltura
 * @subpackage Client
 */
class ScheduledTaskProfileService extends \Kaltura\Client\ServiceBase
{
	function __construct(\Kaltura\Client\Client $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Add a new scheduled task profile
	 * 
	 * @return \Kaltura\Client\Plugin\ScheduledTask\Type\ScheduledTaskProfile
	 */
	function add(\Kaltura\Client\Plugin\ScheduledTask\Type\ScheduledTaskProfile $scheduledTaskProfile)
	{
		$kparams = array();
		$this->client->addParam($kparams, "scheduledTaskProfile", $scheduledTaskProfile->toParams());
		$this->client->queueServiceActionCall("scheduledtask_scheduledtaskprofile", "add", "KalturaScheduledTaskProfile", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaScheduledTaskProfile");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Plugin\\ScheduledTask\\Type\\ScheduledTaskProfile");
		return $resultObject;
	}

	/**
	 * Delete a scheduled task profile
	 * 
	 */
	function delete($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("scheduledtask_scheduledtaskprofile", "delete", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
	}

	/**
	 * Retrieve a scheduled task profile by id
	 * 
	 * @return \Kaltura\Client\Plugin\ScheduledTask\Type\ScheduledTaskProfile
	 */
	function get($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("scheduledtask_scheduledtaskprofile", "get", "KalturaScheduledTaskProfile", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaScheduledTaskProfile");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Plugin\\ScheduledTask\\Type\\ScheduledTaskProfile");
		return $resultObject;
	}

	/**
	 * 
	 * @return \Kaltura\Client\Type\ObjectListResponse
	 */
	function getDryRunResults($requestId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "requestId", $requestId);
		$this->client->queueServiceActionCall("scheduledtask_scheduledtaskprofile", "getDryRunResults", "KalturaObjectListResponse", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaObjectListResponse");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\ObjectListResponse");
		return $resultObject;
	}

	/**
	 * List scheduled task profiles
	 * 
	 * @return \Kaltura\Client\Plugin\ScheduledTask\Type\ScheduledTaskProfileListResponse
	 */
	function listAction(\Kaltura\Client\Plugin\ScheduledTask\Type\ScheduledTaskProfileFilter $filter = null, \Kaltura\Client\Type\FilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("scheduledtask_scheduledtaskprofile", "list", "KalturaScheduledTaskProfileListResponse", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaScheduledTaskProfileListResponse");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Plugin\\ScheduledTask\\Type\\ScheduledTaskProfileListResponse");
		return $resultObject;
	}

	/**
	 * 
	 * @return int
	 */
	function requestDryRun($scheduledTaskProfileId, $maxResults = 500)
	{
		$kparams = array();
		$this->client->addParam($kparams, "scheduledTaskProfileId", $scheduledTaskProfileId);
		$this->client->addParam($kparams, "maxResults", $maxResults);
		$this->client->queueServiceActionCall("scheduledtask_scheduledtaskprofile", "requestDryRun", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = (int)\Kaltura\Client\ParseUtils::unmarshalSimpleType($resultXmlObject->result);
		return $resultObject;
	}

	/**
	 * Update an existing scheduled task profile
	 * 
	 * @return \Kaltura\Client\Plugin\ScheduledTask\Type\ScheduledTaskProfile
	 */
	function update($id, \Kaltura\Client\Plugin\ScheduledTask\Type\ScheduledTaskProfile $scheduledTaskProfile)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "scheduledTaskProfile", $scheduledTaskProfile->toParams());
		$this->client->queueServiceActionCall("scheduledtask_scheduledtaskprofile", "update", "KalturaScheduledTaskProfile", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaScheduledTaskProfile");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Plugin\\ScheduledTask\\Type\\ScheduledTaskProfile");
		return $resultObject;
	}
}
