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
namespace Kaltura\Client\Plugin\VirtualEvent\Service;

/**
 * @package Kaltura
 * @subpackage Client
 */
class VirtualEventService extends \Kaltura\Client\ServiceBase
{
	function __construct(\Kaltura\Client\Client $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Add a new virtual event
	 * 
	 * @return \Kaltura\Client\Plugin\VirtualEvent\Type\VirtualEvent
	 */
	function add(\Kaltura\Client\Plugin\VirtualEvent\Type\VirtualEvent $virtualEvent)
	{
		$kparams = array();
		$this->client->addParam($kparams, "virtualEvent", $virtualEvent->toParams());
		$this->client->queueServiceActionCall("virtualevent_virtualevent", "add", "KalturaVirtualEvent", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaVirtualEvent");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Plugin\\VirtualEvent\\Type\\VirtualEvent");
		return $resultObject;
	}

	/**
	 * Delete a virtual event
	 * 
	 */
	function delete($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("virtualevent_virtualevent", "delete", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
	}

	/**
	 * Retrieve a virtual event by id
	 * 
	 * @return \Kaltura\Client\Plugin\VirtualEvent\Type\VirtualEvent
	 */
	function get($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("virtualevent_virtualevent", "get", "KalturaVirtualEvent", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaVirtualEvent");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Plugin\\VirtualEvent\\Type\\VirtualEvent");
		return $resultObject;
	}

	/**
	 * List virtual events
	 * 
	 * @return \Kaltura\Client\Plugin\VirtualEvent\Type\VirtualEventListResponse
	 */
	function listAction(\Kaltura\Client\Plugin\VirtualEvent\Type\VirtualEventFilter $filter = null, \Kaltura\Client\Type\FilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("virtualevent_virtualevent", "list", "KalturaVirtualEventListResponse", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaVirtualEventListResponse");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Plugin\\VirtualEvent\\Type\\VirtualEventListResponse");
		return $resultObject;
	}

	/**
	 * Update an existing virtual event
	 * 
	 * @return \Kaltura\Client\Plugin\VirtualEvent\Type\VirtualEvent
	 */
	function update($id, \Kaltura\Client\Plugin\VirtualEvent\Type\VirtualEvent $virtualEvent)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "virtualEvent", $virtualEvent->toParams());
		$this->client->queueServiceActionCall("virtualevent_virtualevent", "update", "KalturaVirtualEvent", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaVirtualEvent");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Plugin\\VirtualEvent\\Type\\VirtualEvent");
		return $resultObject;
	}
}
