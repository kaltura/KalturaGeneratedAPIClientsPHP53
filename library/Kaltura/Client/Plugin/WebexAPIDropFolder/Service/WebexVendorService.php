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
namespace Kaltura\Client\Plugin\WebexAPIDropFolder\Service;

/**
 * @package Kaltura
 * @subpackage Client
 */
class WebexVendorService extends \Kaltura\Client\ServiceBase
{
	function __construct(\Kaltura\Client\Client $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * 
	 */
	function fetchRegistrationPage($tokensData, $iv)
	{
		$kparams = array();
		$this->client->addParam($kparams, "tokensData", $tokensData);
		$this->client->addParam($kparams, "iv", $iv);
		$this->client->queueServiceActionCall("webexapidropfolder_webexvendor", "fetchRegistrationPage", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
	}

	/**
	 * List KalturaWebexAPIIntegrationSetting objects
	 * 
	 * @return \Kaltura\Client\Plugin\WebexAPIDropFolder\Type\WebexAPIIntegrationSettingResponse
	 */
	function listAction(\Kaltura\Client\Type\FilterPager $pager = null)
	{
		$kparams = array();
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("webexapidropfolder_webexvendor", "list", "KalturaWebexAPIIntegrationSettingResponse", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaWebexAPIIntegrationSettingResponse");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Plugin\\WebexAPIDropFolder\\Type\\WebexAPIIntegrationSettingResponse");
		return $resultObject;
	}

	/**
	 * 
	 * @return string
	 */
	function oauthValidation()
	{
		$kparams = array();
		$this->client->queueServiceActionCall("webexapidropfolder_webexvendor", "oauthValidation", null, $kparams);
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
	function preOauthValidation()
	{
		$kparams = array();
		$this->client->queueServiceActionCall("webexapidropfolder_webexvendor", "preOauthValidation", null, $kparams);
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
	function submitRegistration($accountId, \Kaltura\Client\Plugin\WebexAPIDropFolder\Type\WebexAPIIntegrationSetting $integrationSetting)
	{
		$kparams = array();
		$this->client->addParam($kparams, "accountId", $accountId);
		$this->client->addParam($kparams, "integrationSetting", $integrationSetting->toParams());
		$this->client->queueServiceActionCall("webexapidropfolder_webexvendor", "submitRegistration", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = (String)\Kaltura\Client\ParseUtils::unmarshalSimpleType($resultXmlObject->result);
		return $resultObject;
	}
}
