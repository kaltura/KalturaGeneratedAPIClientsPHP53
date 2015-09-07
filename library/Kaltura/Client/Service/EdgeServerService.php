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
namespace Kaltura\Client\Service;

/**
 * Edge Server service
 *  
 * @package Kaltura
 * @subpackage Client
 */
class EdgeServerService extends \Kaltura\Client\ServiceBase
{
	function __construct(\Kaltura\Client\Client $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Adds a edge server to the Kaltura DB.
	 * 	 
	 * 
	 * @return \Kaltura\Client\Type\EdgeServer
	 */
	function add(\Kaltura\Client\Type\EdgeServer $edgeServer)
	{
		$kparams = array();
		$this->client->addParam($kparams, "edgeServer", $edgeServer->toParams());
		$this->client->queueServiceActionCall("edgeserver", "add", "KalturaEdgeServer", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		\Kaltura\Client\ParseUtils::checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaEdgeServer");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\EdgeServer");
		return $resultObject;
	}

	/**
	 * Get edge server by id
	 * 	 
	 * 
	 * @return \Kaltura\Client\Type\EdgeServer
	 */
	function get($edgeServerId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "edgeServerId", $edgeServerId);
		$this->client->queueServiceActionCall("edgeserver", "get", "KalturaEdgeServer", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		\Kaltura\Client\ParseUtils::checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaEdgeServer");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\EdgeServer");
		return $resultObject;
	}

	/**
	 * Update edge server by id 
	 * 	 
	 * 
	 * @return \Kaltura\Client\Type\EdgeServer
	 */
	function update($edgeServerId, \Kaltura\Client\Type\EdgeServer $edgeServer)
	{
		$kparams = array();
		$this->client->addParam($kparams, "edgeServerId", $edgeServerId);
		$this->client->addParam($kparams, "edgeServer", $edgeServer->toParams());
		$this->client->queueServiceActionCall("edgeserver", "update", "KalturaEdgeServer", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		\Kaltura\Client\ParseUtils::checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaEdgeServer");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\EdgeServer");
		return $resultObject;
	}

	/**
	 * delete edge server by id
	 * 	 
	 * 
	 */
	function delete($edgeServerId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "edgeServerId", $edgeServerId);
		$this->client->queueServiceActionCall("edgeserver", "delete", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		\Kaltura\Client\ParseUtils::checkIfError($resultXmlObject->result);
	}

	/**
	 * 
	 * @return \Kaltura\Client\Type\EdgeServerListResponse
	 */
	function listAction(\Kaltura\Client\Type\EdgeServerFilter $filter = null, \Kaltura\Client\Type\FilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("edgeserver", "list", "KalturaEdgeServerListResponse", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		\Kaltura\Client\ParseUtils::checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaEdgeServerListResponse");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\EdgeServerListResponse");
		return $resultObject;
	}
}
