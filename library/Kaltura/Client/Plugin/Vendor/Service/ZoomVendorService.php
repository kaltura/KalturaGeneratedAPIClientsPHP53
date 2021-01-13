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
// Copyright (C) 2006-2021  Kaltura Inc.
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
class ZoomVendorService extends \Kaltura\Client\ServiceBase
{
	function __construct(\Kaltura\Client\Client $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * 
	 * @return string
	 */
	function deAuthorization()
	{
		$kparams = array();
		$this->client->queueServiceActionCall("vendor_zoomvendor", "deAuthorization", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = (String)\Kaltura\Client\ParseUtils::unmarshalSimpleType($resultXmlObject->result);
		return $resultObject;
	}

	/**
	 * 
	 */
	function fetchRegistrationPage($tokensData, $iv)
	{
		$kparams = array();
		$this->client->addParam($kparams, "tokensData", $tokensData);
		$this->client->addParam($kparams, "iv", $iv);
		$this->client->queueServiceActionCall("vendor_zoomvendor", "fetchRegistrationPage", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
	}

	/**
	 * Retrieve zoom integration setting object by partner id
	 * 
	 * @return \Kaltura\Client\Plugin\Vendor\Type\ZoomIntegrationSetting
	 */
	function get($partnerId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "partnerId", $partnerId);
		$this->client->queueServiceActionCall("vendor_zoomvendor", "get", "KalturaZoomIntegrationSetting", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaZoomIntegrationSetting");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Plugin\\Vendor\\Type\\ZoomIntegrationSetting");
		return $resultObject;
	}

	/**
	 * 
	 * @return string
	 */
	function oauthValidation()
	{
		$kparams = array();
		$this->client->queueServiceActionCall("vendor_zoomvendor", "oauthValidation", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = (String)\Kaltura\Client\ParseUtils::unmarshalSimpleType($resultXmlObject->result);
		return $resultObject;
	}

	/**
	 * 
	 */
	function recordingComplete()
	{
		$kparams = array();
		$this->client->queueServiceActionCall("vendor_zoomvendor", "recordingComplete", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
	}

	/**
	 * 
	 * @return string
	 */
	function submitRegistration($accountId, \Kaltura\Client\Plugin\Vendor\Type\ZoomIntegrationSetting $integrationSetting)
	{
		$kparams = array();
		$this->client->addParam($kparams, "accountId", $accountId);
		$this->client->addParam($kparams, "integrationSetting", $integrationSetting->toParams());
		$this->client->queueServiceActionCall("vendor_zoomvendor", "submitRegistration", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = (String)\Kaltura\Client\ParseUtils::unmarshalSimpleType($resultXmlObject->result);
		return $resultObject;
	}
}
