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
namespace Kaltura\Client\Plugin\ContentDistribution\Service;

/**
 * Entry Distribution service
 * @package Kaltura
 * @subpackage Client
 */
class EntryDistributionService extends \Kaltura\Client\ServiceBase
{
	function __construct(\Kaltura\Client\Client $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Add new Entry Distribution
	 * 
	 * @return \Kaltura\Client\Plugin\ContentDistribution\Type\EntryDistribution
	 */
	function add(\Kaltura\Client\Plugin\ContentDistribution\Type\EntryDistribution $entryDistribution)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryDistribution", $entryDistribution->toParams());
		$this->client->queueServiceActionCall("contentdistribution_entrydistribution", "add", "KalturaEntryDistribution", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaEntryDistribution");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Plugin\\ContentDistribution\\Type\\EntryDistribution");
		return $resultObject;
	}

	/**
	 * Delete Entry Distribution by id
	 * 
	 */
	function delete($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("contentdistribution_entrydistribution", "delete", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
	}

	/**
	 * Get Entry Distribution by id
	 * 
	 * @return \Kaltura\Client\Plugin\ContentDistribution\Type\EntryDistribution
	 */
	function get($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("contentdistribution_entrydistribution", "get", "KalturaEntryDistribution", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaEntryDistribution");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Plugin\\ContentDistribution\\Type\\EntryDistribution");
		return $resultObject;
	}

	/**
	 * List all distribution providers
	 * 
	 * @return \Kaltura\Client\Plugin\ContentDistribution\Type\EntryDistributionListResponse
	 */
	function listAction(\Kaltura\Client\Plugin\ContentDistribution\Type\EntryDistributionFilter $filter = null, \Kaltura\Client\Type\FilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("contentdistribution_entrydistribution", "list", "KalturaEntryDistributionListResponse", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaEntryDistributionListResponse");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Plugin\\ContentDistribution\\Type\\EntryDistributionListResponse");
		return $resultObject;
	}

	/**
	 * Retries last submit action
	 * 
	 * @return \Kaltura\Client\Plugin\ContentDistribution\Type\EntryDistribution
	 */
	function retrySubmit($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("contentdistribution_entrydistribution", "retrySubmit", "KalturaEntryDistribution", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaEntryDistribution");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Plugin\\ContentDistribution\\Type\\EntryDistribution");
		return $resultObject;
	}

	/**
	 * Serves entry distribution returned data
	 * 
	 * @return file
	 */
	function serveReturnedData($id, $actionType)
	{
		if ($this->client->isMultiRequest())
			throw $this->client->getClientException("Action is not supported as part of multi-request.", ClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "actionType", $actionType);
		$this->client->queueServiceActionCall('contentdistribution_entrydistribution', 'serveReturnedData', null, $kparams);
		$resultObject = $this->client->getServeUrl();
		return $resultObject;
	}

	/**
	 * Serves entry distribution sent data
	 * 
	 * @return file
	 */
	function serveSentData($id, $actionType)
	{
		if ($this->client->isMultiRequest())
			throw $this->client->getClientException("Action is not supported as part of multi-request.", ClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "actionType", $actionType);
		$this->client->queueServiceActionCall('contentdistribution_entrydistribution', 'serveSentData', null, $kparams);
		$resultObject = $this->client->getServeUrl();
		return $resultObject;
	}

	/**
	 * Submits Entry Distribution to the remote destination
	 * 
	 * @return \Kaltura\Client\Plugin\ContentDistribution\Type\EntryDistribution
	 */
	function submitAdd($id, $submitWhenReady = false)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "submitWhenReady", $submitWhenReady);
		$this->client->queueServiceActionCall("contentdistribution_entrydistribution", "submitAdd", "KalturaEntryDistribution", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaEntryDistribution");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Plugin\\ContentDistribution\\Type\\EntryDistribution");
		return $resultObject;
	}

	/**
	 * Deletes Entry Distribution from the remote destination
	 * 
	 * @return \Kaltura\Client\Plugin\ContentDistribution\Type\EntryDistribution
	 */
	function submitDelete($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("contentdistribution_entrydistribution", "submitDelete", "KalturaEntryDistribution", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaEntryDistribution");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Plugin\\ContentDistribution\\Type\\EntryDistribution");
		return $resultObject;
	}

	/**
	 * Submits Entry Distribution report request
	 * 
	 * @return \Kaltura\Client\Plugin\ContentDistribution\Type\EntryDistribution
	 */
	function submitFetchReport($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("contentdistribution_entrydistribution", "submitFetchReport", "KalturaEntryDistribution", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaEntryDistribution");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Plugin\\ContentDistribution\\Type\\EntryDistribution");
		return $resultObject;
	}

	/**
	 * Submits Entry Distribution changes to the remote destination
	 * 
	 * @return \Kaltura\Client\Plugin\ContentDistribution\Type\EntryDistribution
	 */
	function submitUpdate($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("contentdistribution_entrydistribution", "submitUpdate", "KalturaEntryDistribution", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaEntryDistribution");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Plugin\\ContentDistribution\\Type\\EntryDistribution");
		return $resultObject;
	}

	/**
	 * Update Entry Distribution by id
	 * 
	 * @return \Kaltura\Client\Plugin\ContentDistribution\Type\EntryDistribution
	 */
	function update($id, \Kaltura\Client\Plugin\ContentDistribution\Type\EntryDistribution $entryDistribution)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "entryDistribution", $entryDistribution->toParams());
		$this->client->queueServiceActionCall("contentdistribution_entrydistribution", "update", "KalturaEntryDistribution", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaEntryDistribution");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Plugin\\ContentDistribution\\Type\\EntryDistribution");
		return $resultObject;
	}

	/**
	 * Validates Entry Distribution by id for submission
	 * 
	 * @return \Kaltura\Client\Plugin\ContentDistribution\Type\EntryDistribution
	 */
	function validate($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("contentdistribution_entrydistribution", "validate", "KalturaEntryDistribution", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaEntryDistribution");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Plugin\\ContentDistribution\\Type\\EntryDistribution");
		return $resultObject;
	}
}
