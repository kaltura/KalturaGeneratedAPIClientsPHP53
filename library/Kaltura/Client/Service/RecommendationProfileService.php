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
 * @package Kaltura
 * @subpackage Client
 */
class RecommendationProfileService extends \Kaltura\Client\ServiceBase
{
	function __construct(\Kaltura\Client\Client $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Insert new recommendation engine for partner
	 * 
	 * @return \Kaltura\Client\Type\RecommendationProfile
	 */
	function add(\Kaltura\Client\Type\RecommendationProfile $recommendationEngine)
	{
		if ($this->client->isMultiRequest())
			throw $this->client->getClientException("Action is not supported as part of multi-request.", ClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "recommendationEngine", $recommendationEngine->toParams());
		$this->client->queueServiceActionCall("recommendationprofile", "add", "KalturaRecommendationProfile", $kparams);
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaRecommendationProfile");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\RecommendationProfile");
		return $resultObject;
	}

	/**
	 * Delete recommendation engine by recommendation engine id
	 * 
	 * @return bool
	 */
	function delete($id)
	{
		if ($this->client->isMultiRequest())
			throw $this->client->getClientException("Action is not supported as part of multi-request.", ClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("recommendationprofile", "delete", null, $kparams);
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = (bool)\Kaltura\Client\ParseUtils::unmarshalSimpleType($resultXmlObject->result);
		return $resultObject;
	}

	/**
	 * Generate recommendation engine  shared secret
	 * 
	 * @return \Kaltura\Client\Type\RecommendationProfile
	 */
	function generateSharedSecret($recommendationEngineId)
	{
		if ($this->client->isMultiRequest())
			throw $this->client->getClientException("Action is not supported as part of multi-request.", ClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "recommendationEngineId", $recommendationEngineId);
		$this->client->queueServiceActionCall("recommendationprofile", "generateSharedSecret", "KalturaRecommendationProfile", $kparams);
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaRecommendationProfile");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\RecommendationProfile");
		return $resultObject;
	}

	/**
	 * Returns all recommendation engines for partner
	 * 
	 * @return \Kaltura\Client\Type\RecommendationProfileListResponse
	 */
	function listAction()
	{
		if ($this->client->isMultiRequest())
			throw $this->client->getClientException("Action is not supported as part of multi-request.", ClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->queueServiceActionCall("recommendationprofile", "list", "KalturaRecommendationProfileListResponse", $kparams);
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaRecommendationProfileListResponse");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\RecommendationProfileListResponse");
		return $resultObject;
	}

	/**
	 * Update recommendation engine details
	 * 
	 * @return \Kaltura\Client\Type\RecommendationProfile
	 */
	function update($recommendationEngineId, \Kaltura\Client\Type\RecommendationProfile $recommendationEngine)
	{
		if ($this->client->isMultiRequest())
			throw $this->client->getClientException("Action is not supported as part of multi-request.", ClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "recommendationEngineId", $recommendationEngineId);
		$this->client->addParam($kparams, "recommendationEngine", $recommendationEngine->toParams());
		$this->client->queueServiceActionCall("recommendationprofile", "update", "KalturaRecommendationProfile", $kparams);
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaRecommendationProfile");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\RecommendationProfile");
		return $resultObject;
	}
}
