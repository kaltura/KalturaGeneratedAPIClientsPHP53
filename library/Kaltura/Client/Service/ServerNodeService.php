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
 * Server Node service
 * @package Kaltura
 * @subpackage Client
 */
class ServerNodeService extends \Kaltura\Client\ServiceBase
{
	function __construct(\Kaltura\Client\Client $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Adds a server node to the Kaltura DB.
	 * 
	 * @return \Kaltura\Client\Type\ServerNode
	 */
	function add(\Kaltura\Client\Type\ServerNode $serverNode)
	{
		$kparams = array();
		$this->client->addParam($kparams, "serverNode", $serverNode->toParams());
		$this->client->queueServiceActionCall("servernode", "add", "KalturaServerNode", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaServerNode");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\ServerNode");
		return $resultObject;
	}

	/**
	 * delete server node by id
	 * 
	 */
	function delete($serverNodeId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "serverNodeId", $serverNodeId);
		$this->client->queueServiceActionCall("servernode", "delete", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
	}

	/**
	 * Disable server node by id
	 * 
	 * @return \Kaltura\Client\Type\ServerNode
	 */
	function disable($serverNodeId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "serverNodeId", $serverNodeId);
		$this->client->queueServiceActionCall("servernode", "disable", "KalturaServerNode", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaServerNode");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\ServerNode");
		return $resultObject;
	}

	/**
	 * Enable server node by id
	 * 
	 * @return \Kaltura\Client\Type\ServerNode
	 */
	function enable($serverNodeId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "serverNodeId", $serverNodeId);
		$this->client->queueServiceActionCall("servernode", "enable", "KalturaServerNode", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaServerNode");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\ServerNode");
		return $resultObject;
	}

	/**
	 * Get server node by id
	 * 
	 * @return \Kaltura\Client\Type\ServerNode
	 */
	function get($serverNodeId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "serverNodeId", $serverNodeId);
		$this->client->queueServiceActionCall("servernode", "get", "KalturaServerNode", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaServerNode");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\ServerNode");
		return $resultObject;
	}

	/**
	 * 
	 * @return \Kaltura\Client\Type\ServerNodeListResponse
	 */
	function listAction(\Kaltura\Client\Type\ServerNodeFilter $filter = null, \Kaltura\Client\Type\FilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("servernode", "list", "KalturaServerNodeListResponse", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaServerNodeListResponse");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\ServerNodeListResponse");
		return $resultObject;
	}

	/**
	 * Update server node status
	 * 
	 * @return \Kaltura\Client\Type\ServerNode
	 */
	function reportStatus($hostName, \Kaltura\Client\Type\ServerNode $serverNode = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "hostName", $hostName);
		if ($serverNode !== null)
			$this->client->addParam($kparams, "serverNode", $serverNode->toParams());
		$this->client->queueServiceActionCall("servernode", "reportStatus", "KalturaServerNode", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaServerNode");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\ServerNode");
		return $resultObject;
	}

	/**
	 * Update server node by id
	 * 
	 * @return \Kaltura\Client\Type\ServerNode
	 */
	function update($serverNodeId, \Kaltura\Client\Type\ServerNode $serverNode)
	{
		$kparams = array();
		$this->client->addParam($kparams, "serverNodeId", $serverNodeId);
		$this->client->addParam($kparams, "serverNode", $serverNode->toParams());
		$this->client->queueServiceActionCall("servernode", "update", "KalturaServerNode", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaServerNode");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\ServerNode");
		return $resultObject;
	}
}
