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
 * UiConf service lets you create and manage your UIConfs for the various flash components
 *  This service is used by the KMC-ApplicationStudio
 * @package Kaltura
 * @subpackage Client
 */
class UiConfService extends \Kaltura\Client\ServiceBase
{
	function __construct(\Kaltura\Client\Client $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * UIConf Add action allows you to add a UIConf to Kaltura DB
	 * 
	 * @return \Kaltura\Client\Type\UiConf
	 */
	function add(\Kaltura\Client\Type\UiConf $uiConf)
	{
		$kparams = array();
		$this->client->addParam($kparams, "uiConf", $uiConf->toParams());
		$this->client->queueServiceActionCall("uiconf", "add", "KalturaUiConf", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaUiConf");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\UiConf");
		return $resultObject;
	}

	/**
	 * Clone an existing UIConf
	 * 
	 * @return \Kaltura\Client\Type\UiConf
	 */
	function cloneAction($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("uiconf", "clone", "KalturaUiConf", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaUiConf");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\UiConf");
		return $resultObject;
	}

	/**
	 * Delete an existing UIConf
	 * 
	 */
	function delete($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("uiconf", "delete", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
	}

	/**
	 * Retrieve a UIConf by id
	 * 
	 * @return \Kaltura\Client\Type\UiConf
	 */
	function get($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("uiconf", "get", "KalturaUiConf", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaUiConf");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\UiConf");
		return $resultObject;
	}

	/**
	 * Retrieve a list of all available versions by object type
	 * 
	 * @return array
	 */
	function getAvailableTypes()
	{
		$kparams = array();
		$this->client->queueServiceActionCall("uiconf", "getAvailableTypes", "KalturaUiConfTypeInfo", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalArray($resultXmlObject->result, "KalturaUiConfTypeInfo");
		$this->client->validateObjectType($resultObject, "array");
		return $resultObject;
	}

	/**
	 * Retrieve a list of available UIConfs
	 * 
	 * @return \Kaltura\Client\Type\UiConfListResponse
	 */
	function listAction(\Kaltura\Client\Type\UiConfFilter $filter = null, \Kaltura\Client\Type\FilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("uiconf", "list", "KalturaUiConfListResponse", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaUiConfListResponse");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\UiConfListResponse");
		return $resultObject;
	}

	/**
	 * retrieve a list of available template UIConfs
	 * 
	 * @return \Kaltura\Client\Type\UiConfListResponse
	 */
	function listTemplates(\Kaltura\Client\Type\UiConfFilter $filter = null, \Kaltura\Client\Type\FilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("uiconf", "listTemplates", "KalturaUiConfListResponse", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaUiConfListResponse");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\UiConfListResponse");
		return $resultObject;
	}

	/**
	 * Update an existing UIConf
	 * 
	 * @return \Kaltura\Client\Type\UiConf
	 */
	function update($id, \Kaltura\Client\Type\UiConf $uiConf)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "uiConf", $uiConf->toParams());
		$this->client->queueServiceActionCall("uiconf", "update", "KalturaUiConf", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaUiConf");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\UiConf");
		return $resultObject;
	}
}
