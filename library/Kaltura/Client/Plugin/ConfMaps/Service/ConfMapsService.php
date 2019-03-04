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
// Copyright (C) 2006-2019  Kaltura Inc.
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
namespace Kaltura\Client\Plugin\ConfMaps\Service;

/**
 * @package Kaltura
 * @subpackage Client
 */
class ConfMapsService extends \Kaltura\Client\ServiceBase
{
	function __construct(\Kaltura\Client\Client $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Add configuration map
	 * 
	 * @return \Kaltura\Client\Plugin\ConfMaps\Type\ConfMaps
	 */
	function add(\Kaltura\Client\Plugin\ConfMaps\Type\ConfMaps $map)
	{
		$kparams = array();
		$this->client->addParam($kparams, "map", $map->toParams());
		$this->client->queueServiceActionCall("confmaps_confmaps", "add", "KalturaConfMaps", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaConfMaps");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Plugin\\ConfMaps\\Type\\ConfMaps");
		return $resultObject;
	}

	/**
	 * Get configuration map
	 * 
	 * @return \Kaltura\Client\Plugin\ConfMaps\Type\ConfMaps
	 */
	function get(\Kaltura\Client\Plugin\ConfMaps\Type\ConfMapsFilter $filter)
	{
		$kparams = array();
		$this->client->addParam($kparams, "filter", $filter->toParams());
		$this->client->queueServiceActionCall("confmaps_confmaps", "get", "KalturaConfMaps", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaConfMaps");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Plugin\\ConfMaps\\Type\\ConfMaps");
		return $resultObject;
	}

	/**
	 * List configuration maps names
	 * 
	 * @return array
	 */
	function getMapNames()
	{
		$kparams = array();
		$this->client->queueServiceActionCall("confmaps_confmaps", "getMapNames", "KalturaString", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalArray($resultXmlObject->result, "KalturaString");
		$this->client->validateObjectType($resultObject, "array");
		return $resultObject;
	}

	/**
	 * List configuration maps
	 * 
	 * @return \Kaltura\Client\Plugin\ConfMaps\Type\ConfMapsListResponse
	 */
	function listAction(\Kaltura\Client\Plugin\ConfMaps\Type\ConfMapsFilter $filter)
	{
		$kparams = array();
		$this->client->addParam($kparams, "filter", $filter->toParams());
		$this->client->queueServiceActionCall("confmaps_confmaps", "list", "KalturaConfMapsListResponse", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaConfMapsListResponse");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Plugin\\ConfMaps\\Type\\ConfMapsListResponse");
		return $resultObject;
	}

	/**
	 * Update configuration map
	 * 
	 * @return \Kaltura\Client\Plugin\ConfMaps\Type\ConfMaps
	 */
	function update(\Kaltura\Client\Plugin\ConfMaps\Type\ConfMaps $map)
	{
		$kparams = array();
		$this->client->addParam($kparams, "map", $map->toParams());
		$this->client->queueServiceActionCall("confmaps_confmaps", "update", "KalturaConfMaps", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaConfMaps");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Plugin\\ConfMaps\\Type\\ConfMaps");
		return $resultObject;
	}
}
