<?php
// ===================================================================================================
//                           _  __     _ _
//                          | |/ /__ _| | |_ _  _ _ _ __ _
//                          | ' </ _` | |  _| || | '_/ _` |
//                          |_|\_\__,_|_|\__|\_,_|_| \__,_|
//
// This file is part of the Kaltura Collaborative Media Suite which allows users
// to do with audio, video, and animation what Wiki platforms allow them to do with
// text.
//
// Copyright (C) 2006-2023  Kaltura Inc.
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
namespace Kaltura\Client\Plugin\Vendor\Service;

/**
 * @package Kaltura
 * @subpackage Client
 */
class VendorIntegrationService extends \Kaltura\Client\ServiceBase
{
	function __construct(\Kaltura\Client\Client $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Add new integration setting object
	 * 
	 * @return \Kaltura\Client\Plugin\Vendor\Type\IntegrationSetting
	 */
	function add(\Kaltura\Client\Plugin\Vendor\Type\IntegrationSetting $integration, $remoteId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "integration", $integration->toParams());
		$this->client->addParam($kparams, "remoteId", $remoteId);
		$this->client->queueServiceActionCall("vendor_vendorintegration", "add", "KalturaIntegrationSetting", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaIntegrationSetting");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Plugin\\Vendor\\Type\\IntegrationSetting");
		return $resultObject;
	}

	/**
	 * Delete integration object by ID
	 * 
	 * @return \Kaltura\Client\Plugin\Vendor\Type\IntegrationSetting
	 */
	function delete($integrationId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "integrationId", $integrationId);
		$this->client->queueServiceActionCall("vendor_vendorintegration", "delete", "KalturaIntegrationSetting", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaIntegrationSetting");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Plugin\\Vendor\\Type\\IntegrationSetting");
		return $resultObject;
	}

	/**
	 * Retrieve integration setting object by ID
	 * 
	 * @return \Kaltura\Client\Plugin\Vendor\Type\IntegrationSetting
	 */
	function get($integrationId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "integrationId", $integrationId);
		$this->client->queueServiceActionCall("vendor_vendorintegration", "get", "KalturaIntegrationSetting", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaIntegrationSetting");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Plugin\\Vendor\\Type\\IntegrationSetting");
		return $resultObject;
	}

	/**
	 * Update an existing vedor catalog item object
	 * 
	 * @return \Kaltura\Client\Plugin\Vendor\Type\IntegrationSetting
	 */
	function update($id, \Kaltura\Client\Plugin\Vendor\Type\IntegrationSetting $integrationSetting)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "integrationSetting", $integrationSetting->toParams());
		$this->client->queueServiceActionCall("vendor_vendorintegration", "update", "KalturaIntegrationSetting", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaIntegrationSetting");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Plugin\\Vendor\\Type\\IntegrationSetting");
		return $resultObject;
	}

	/**
	 * Update vendor catalog item status by id
	 * 
	 * @return \Kaltura\Client\Plugin\Vendor\Type\IntegrationSetting
	 */
	function updateStatus($id, $status)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "status", $status);
		$this->client->queueServiceActionCall("vendor_vendorintegration", "updateStatus", "KalturaIntegrationSetting", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaIntegrationSetting");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Plugin\\Vendor\\Type\\IntegrationSetting");
		return $resultObject;
	}
}
