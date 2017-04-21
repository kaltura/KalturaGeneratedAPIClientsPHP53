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
 * delivery service is used to control delivery objects
 * @package Kaltura
 * @subpackage Client
 */
class DeliveryProfileService extends \Kaltura\Client\ServiceBase
{
	function __construct(\Kaltura\Client\Client $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Add new delivery.
	 * 
	 * @return \Kaltura\Client\Type\DeliveryProfile
	 */
	function add(\Kaltura\Client\Type\DeliveryProfile $delivery)
	{
		$kparams = array();
		$this->client->addParam($kparams, "delivery", $delivery->toParams());
		$this->client->queueServiceActionCall("deliveryprofile", "add", "KalturaDeliveryProfile", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaDeliveryProfile");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\DeliveryProfile");
		return $resultObject;
	}

	/**
	 * Add delivery based on existing delivery.
	 * 	Must provide valid sourceDeliveryId
	 * 
	 * @return \Kaltura\Client\Type\DeliveryProfile
	 */
	function cloneAction($deliveryId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "deliveryId", $deliveryId);
		$this->client->queueServiceActionCall("deliveryprofile", "clone", "KalturaDeliveryProfile", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaDeliveryProfile");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\DeliveryProfile");
		return $resultObject;
	}

	/**
	 * Get delivery by id
	 * 
	 * @return \Kaltura\Client\Type\DeliveryProfile
	 */
	function get($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("deliveryprofile", "get", "KalturaDeliveryProfile", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaDeliveryProfile");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\DeliveryProfile");
		return $resultObject;
	}

	/**
	 * Retrieve a list of available delivery depends on the filter given
	 * 
	 * @return \Kaltura\Client\Type\DeliveryProfileListResponse
	 */
	function listAction(\Kaltura\Client\Type\DeliveryProfileFilter $filter = null, \Kaltura\Client\Type\FilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("deliveryprofile", "list", "KalturaDeliveryProfileListResponse", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaDeliveryProfileListResponse");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\DeliveryProfileListResponse");
		return $resultObject;
	}

	/**
	 * Update exisiting delivery
	 * 
	 * @return \Kaltura\Client\Type\DeliveryProfile
	 */
	function update($id, \Kaltura\Client\Type\DeliveryProfile $delivery)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "delivery", $delivery->toParams());
		$this->client->queueServiceActionCall("deliveryprofile", "update", "KalturaDeliveryProfile", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaDeliveryProfile");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\DeliveryProfile");
		return $resultObject;
	}
}
