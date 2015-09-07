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
// Copyright (C) 2006-2015  Kaltura Inc.
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
namespace Kaltura\Client\Plugin\AdminConsole\Service;

/**
 * UiConf Admin service
 *  
 * @package Kaltura
 * @subpackage Client
 */
class UiConfAdminService extends \Kaltura\Client\ServiceBase
{
	function __construct(\Kaltura\Client\Client $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Adds new UIConf with no partner limitation
	 * 	 
	 * 
	 * @return \Kaltura\Client\Plugin\AdminConsole\Type\UiConfAdmin
	 */
	function add(\Kaltura\Client\Plugin\AdminConsole\Type\UiConfAdmin $uiConf)
	{
		$kparams = array();
		$this->client->addParam($kparams, "uiConf", $uiConf->toParams());
		$this->client->queueServiceActionCall("adminconsole_uiconfadmin", "add", "KalturaUiConfAdmin", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		\Kaltura\Client\ParseUtils::checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaUiConfAdmin");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Plugin\\AdminConsole\\Type\\UiConfAdmin");
		return $resultObject;
	}

	/**
	 * Update an existing UIConf with no partner limitation
	 * 	 
	 * 
	 * @return \Kaltura\Client\Plugin\AdminConsole\Type\UiConfAdmin
	 */
	function update($id, \Kaltura\Client\Plugin\AdminConsole\Type\UiConfAdmin $uiConf)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "uiConf", $uiConf->toParams());
		$this->client->queueServiceActionCall("adminconsole_uiconfadmin", "update", "KalturaUiConfAdmin", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		\Kaltura\Client\ParseUtils::checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaUiConfAdmin");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Plugin\\AdminConsole\\Type\\UiConfAdmin");
		return $resultObject;
	}

	/**
	 * Retrieve a UIConf by id with no partner limitation
	 * 	 
	 * 
	 * @return \Kaltura\Client\Plugin\AdminConsole\Type\UiConfAdmin
	 */
	function get($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("adminconsole_uiconfadmin", "get", "KalturaUiConfAdmin", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		\Kaltura\Client\ParseUtils::checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaUiConfAdmin");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Plugin\\AdminConsole\\Type\\UiConfAdmin");
		return $resultObject;
	}

	/**
	 * Delete an existing UIConf with no partner limitation
	 * 	 
	 * 
	 */
	function delete($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("adminconsole_uiconfadmin", "delete", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		\Kaltura\Client\ParseUtils::checkIfError($resultXmlObject->result);
	}

	/**
	 * Retrieve a list of available UIConfs  with no partner limitation
	 * 	 
	 * 
	 * @return \Kaltura\Client\Plugin\AdminConsole\Type\UiConfAdminListResponse
	 */
	function listAction(\Kaltura\Client\Type\UiConfFilter $filter = null, \Kaltura\Client\Type\FilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("adminconsole_uiconfadmin", "list", "KalturaUiConfAdminListResponse", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		\Kaltura\Client\ParseUtils::checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaUiConfAdminListResponse");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Plugin\\AdminConsole\\Type\\UiConfAdminListResponse");
		return $resultObject;
	}
}
