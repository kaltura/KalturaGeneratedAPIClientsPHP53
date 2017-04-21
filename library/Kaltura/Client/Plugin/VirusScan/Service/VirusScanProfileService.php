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
namespace Kaltura\Client\Plugin\VirusScan\Service;

/**
 * Virus scan profile service
 * @package Kaltura
 * @subpackage Client
 */
class VirusScanProfileService extends \Kaltura\Client\ServiceBase
{
	function __construct(\Kaltura\Client\Client $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Allows you to add an virus scan profile object and virus scan profile content associated with Kaltura object
	 * 
	 * @return \Kaltura\Client\Plugin\VirusScan\Type\VirusScanProfile
	 */
	function add(\Kaltura\Client\Plugin\VirusScan\Type\VirusScanProfile $virusScanProfile)
	{
		$kparams = array();
		$this->client->addParam($kparams, "virusScanProfile", $virusScanProfile->toParams());
		$this->client->queueServiceActionCall("virusscan_virusscanprofile", "add", "KalturaVirusScanProfile", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaVirusScanProfile");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Plugin\\VirusScan\\Type\\VirusScanProfile");
		return $resultObject;
	}

	/**
	 * Mark the virus scan profile as deleted
	 * 
	 * @return \Kaltura\Client\Plugin\VirusScan\Type\VirusScanProfile
	 */
	function delete($virusScanProfileId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "virusScanProfileId", $virusScanProfileId);
		$this->client->queueServiceActionCall("virusscan_virusscanprofile", "delete", "KalturaVirusScanProfile", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaVirusScanProfile");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Plugin\\VirusScan\\Type\\VirusScanProfile");
		return $resultObject;
	}

	/**
	 * Retrieve an virus scan profile object by id
	 * 
	 * @return \Kaltura\Client\Plugin\VirusScan\Type\VirusScanProfile
	 */
	function get($virusScanProfileId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "virusScanProfileId", $virusScanProfileId);
		$this->client->queueServiceActionCall("virusscan_virusscanprofile", "get", "KalturaVirusScanProfile", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaVirusScanProfile");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Plugin\\VirusScan\\Type\\VirusScanProfile");
		return $resultObject;
	}

	/**
	 * List virus scan profile objects by filter and pager
	 * 
	 * @return \Kaltura\Client\Plugin\VirusScan\Type\VirusScanProfileListResponse
	 */
	function listAction(\Kaltura\Client\Plugin\VirusScan\Type\VirusScanProfileFilter $filter = null, \Kaltura\Client\Type\FilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("virusscan_virusscanprofile", "list", "KalturaVirusScanProfileListResponse", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaVirusScanProfileListResponse");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Plugin\\VirusScan\\Type\\VirusScanProfileListResponse");
		return $resultObject;
	}

	/**
	 * Scan flavor asset according to virus scan profile
	 * 
	 * @return int
	 */
	function scan($flavorAssetId, $virusScanProfileId = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "flavorAssetId", $flavorAssetId);
		$this->client->addParam($kparams, "virusScanProfileId", $virusScanProfileId);
		$this->client->queueServiceActionCall("virusscan_virusscanprofile", "scan", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = (int)\Kaltura\Client\ParseUtils::unmarshalSimpleType($resultXmlObject->result);
		return $resultObject;
	}

	/**
	 * Update exisitng virus scan profile, it is possible to update the virus scan profile id too
	 * 
	 * @return \Kaltura\Client\Plugin\VirusScan\Type\VirusScanProfile
	 */
	function update($virusScanProfileId, \Kaltura\Client\Plugin\VirusScan\Type\VirusScanProfile $virusScanProfile)
	{
		$kparams = array();
		$this->client->addParam($kparams, "virusScanProfileId", $virusScanProfileId);
		$this->client->addParam($kparams, "virusScanProfile", $virusScanProfile->toParams());
		$this->client->queueServiceActionCall("virusscan_virusscanprofile", "update", "KalturaVirusScanProfile", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaVirusScanProfile");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Plugin\\VirusScan\\Type\\VirusScanProfile");
		return $resultObject;
	}
}
