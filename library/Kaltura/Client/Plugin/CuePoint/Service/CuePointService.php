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
namespace Kaltura\Client\Plugin\CuePoint\Service;

/**
 * Cue Point service
 * @package Kaltura
 * @subpackage Client
 */
class CuePointService extends \Kaltura\Client\ServiceBase
{
	function __construct(\Kaltura\Client\Client $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Allows you to add an cue point object associated with an entry
	 * 
	 * @return \Kaltura\Client\Plugin\CuePoint\Type\CuePoint
	 */
	function add(\Kaltura\Client\Plugin\CuePoint\Type\CuePoint $cuePoint)
	{
		$kparams = array();
		$this->client->addParam($kparams, "cuePoint", $cuePoint->toParams());
		$this->client->queueServiceActionCall("cuepoint_cuepoint", "add", "KalturaCuePoint", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaCuePoint");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Plugin\\CuePoint\\Type\\CuePoint");
		return $resultObject;
	}

	/**
	 * Allows you to add multiple cue points objects by uploading XML that contains multiple cue point definitions
	 * 
	 * @return \Kaltura\Client\Plugin\CuePoint\Type\CuePointListResponse
	 */
	function addFromBulk($fileData)
	{
		$kparams = array();
		$kfiles = array();
		$this->client->addParam($kfiles, "fileData", $fileData);
		$this->client->queueServiceActionCall("cuepoint_cuepoint", "addFromBulk", "KalturaCuePointListResponse", $kparams, $kfiles);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaCuePointListResponse");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Plugin\\CuePoint\\Type\\CuePointListResponse");
		return $resultObject;
	}

	/**
	 * Clone cuePoint with id to given entry
	 * 
	 * @return \Kaltura\Client\Plugin\CuePoint\Type\CuePoint
	 */
	function cloneAction($id, $entryId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->queueServiceActionCall("cuepoint_cuepoint", "clone", "KalturaCuePoint", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaCuePoint");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Plugin\\CuePoint\\Type\\CuePoint");
		return $resultObject;
	}

	/**
	 * count cue point objects by filter
	 * 
	 * @return int
	 */
	function count(\Kaltura\Client\Plugin\CuePoint\Type\CuePointFilter $filter = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		$this->client->queueServiceActionCall("cuepoint_cuepoint", "count", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = (int)\Kaltura\Client\ParseUtils::unmarshalSimpleType($resultXmlObject->result);
		return $resultObject;
	}

	/**
	 * delete cue point by id, and delete all children cue points
	 * 
	 */
	function delete($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("cuepoint_cuepoint", "delete", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
	}

	/**
	 * Retrieve an CuePoint object by id
	 * 
	 * @return \Kaltura\Client\Plugin\CuePoint\Type\CuePoint
	 */
	function get($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("cuepoint_cuepoint", "get", "KalturaCuePoint", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaCuePoint");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Plugin\\CuePoint\\Type\\CuePoint");
		return $resultObject;
	}

	/**
	 * List cue point objects by filter and pager
	 * 
	 * @return \Kaltura\Client\Plugin\CuePoint\Type\CuePointListResponse
	 */
	function listAction(\Kaltura\Client\Plugin\CuePoint\Type\CuePointFilter $filter = null, \Kaltura\Client\Type\FilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("cuepoint_cuepoint", "list", "KalturaCuePointListResponse", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaCuePointListResponse");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Plugin\\CuePoint\\Type\\CuePointListResponse");
		return $resultObject;
	}

	/**
	 * Download multiple cue points objects as XML definitions
	 * 
	 * @return file
	 */
	function serveBulk(\Kaltura\Client\Plugin\CuePoint\Type\CuePointFilter $filter = null, \Kaltura\Client\Type\FilterPager $pager = null)
	{
		if ($this->client->isMultiRequest())
			throw $this->client->getClientException("Action is not supported as part of multi-request.", ClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall('cuepoint_cuepoint', 'serveBulk', null, $kparams);
		$resultObject = $this->client->getServeUrl();
		return $resultObject;
	}

	/**
	 * Update cue point by id
	 * 
	 * @return \Kaltura\Client\Plugin\CuePoint\Type\CuePoint
	 */
	function update($id, \Kaltura\Client\Plugin\CuePoint\Type\CuePoint $cuePoint)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "cuePoint", $cuePoint->toParams());
		$this->client->queueServiceActionCall("cuepoint_cuepoint", "update", "KalturaCuePoint", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaCuePoint");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Plugin\\CuePoint\\Type\\CuePoint");
		return $resultObject;
	}

	/**
	 * Update cuePoint status by id
	 * 
	 */
	function updateStatus($id, $status)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "status", $status);
		$this->client->queueServiceActionCall("cuepoint_cuepoint", "updateStatus", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
	}
}
