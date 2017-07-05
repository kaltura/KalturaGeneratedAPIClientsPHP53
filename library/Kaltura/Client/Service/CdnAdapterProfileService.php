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
class CdnAdapterProfileService extends \Kaltura\Client\ServiceBase
{
	function __construct(\Kaltura\Client\Client $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Insert new CDN adapter for partner
	 * 
	 * @return \Kaltura\Client\Type\CDNAdapterProfile
	 */
	function add(\Kaltura\Client\Type\CDNAdapterProfile $adapter)
	{
		if ($this->client->isMultiRequest())
			throw $this->client->getClientException("Action is not supported as part of multi-request.", ClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "adapter", $adapter->toParams());
		$this->client->queueServiceActionCall("cdnadapterprofile", "add", "KalturaCDNAdapterProfile", $kparams);
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaCDNAdapterProfile");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\CDNAdapterProfile");
		return $resultObject;
	}

	/**
	 * Delete CDN adapter by CDN adapter id
	 * 
	 * @return bool
	 */
	function delete($adapterId)
	{
		if ($this->client->isMultiRequest())
			throw $this->client->getClientException("Action is not supported as part of multi-request.", ClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "adapterId", $adapterId);
		$this->client->queueServiceActionCall("cdnadapterprofile", "delete", null, $kparams);
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = (bool)\Kaltura\Client\ParseUtils::unmarshalSimpleType($resultXmlObject->result);
		return $resultObject;
	}

	/**
	 * Generate CDN adapter shared secret
	 * 
	 * @return \Kaltura\Client\Type\CDNAdapterProfile
	 */
	function generateSharedSecret($adapterId)
	{
		if ($this->client->isMultiRequest())
			throw $this->client->getClientException("Action is not supported as part of multi-request.", ClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "adapterId", $adapterId);
		$this->client->queueServiceActionCall("cdnadapterprofile", "generateSharedSecret", "KalturaCDNAdapterProfile", $kparams);
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaCDNAdapterProfile");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\CDNAdapterProfile");
		return $resultObject;
	}

	/**
	 * Returns all CDN adapters for partner
	 * 
	 * @return \Kaltura\Client\Type\CDNAdapterProfileListResponse
	 */
	function listAction()
	{
		if ($this->client->isMultiRequest())
			throw $this->client->getClientException("Action is not supported as part of multi-request.", ClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->queueServiceActionCall("cdnadapterprofile", "list", "KalturaCDNAdapterProfileListResponse", $kparams);
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaCDNAdapterProfileListResponse");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\CDNAdapterProfileListResponse");
		return $resultObject;
	}

	/**
	 * Update CDN adapter details
	 * 
	 * @return \Kaltura\Client\Type\CDNAdapterProfile
	 */
	function update($adapterId, \Kaltura\Client\Type\CDNAdapterProfile $adapter)
	{
		if ($this->client->isMultiRequest())
			throw $this->client->getClientException("Action is not supported as part of multi-request.", ClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "adapterId", $adapterId);
		$this->client->addParam($kparams, "adapter", $adapter->toParams());
		$this->client->queueServiceActionCall("cdnadapterprofile", "update", "KalturaCDNAdapterProfile", $kparams);
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaCDNAdapterProfile");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\CDNAdapterProfile");
		return $resultObject;
	}
}
