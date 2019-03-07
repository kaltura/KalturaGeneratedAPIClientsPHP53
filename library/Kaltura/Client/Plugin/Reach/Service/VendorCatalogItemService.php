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
namespace Kaltura\Client\Plugin\Reach\Service;

/**
 * Vendor Catalog Item Service
 * @package Kaltura
 * @subpackage Client
 */
class VendorCatalogItemService extends \Kaltura\Client\ServiceBase
{
	function __construct(\Kaltura\Client\Client $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Allows you to add an service catalog item
	 * 
	 * @return \Kaltura\Client\Plugin\Reach\Type\VendorCatalogItem
	 */
	function add(\Kaltura\Client\Plugin\Reach\Type\VendorCatalogItem $vendorCatalogItem)
	{
		$kparams = array();
		$this->client->addParam($kparams, "vendorCatalogItem", $vendorCatalogItem->toParams());
		$this->client->queueServiceActionCall("reach_vendorcatalogitem", "add", "KalturaVendorCatalogItem", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaVendorCatalogItem");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Plugin\\Reach\\Type\\VendorCatalogItem");
		return $resultObject;
	}

	/**
	 * Delete vedor catalog item object
	 * 
	 */
	function delete($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("reach_vendorcatalogitem", "delete", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
	}

	/**
	 * Retrieve specific catalog item by id
	 * 
	 * @return \Kaltura\Client\Plugin\Reach\Type\VendorCatalogItem
	 */
	function get($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("reach_vendorcatalogitem", "get", "KalturaVendorCatalogItem", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaVendorCatalogItem");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Plugin\\Reach\\Type\\VendorCatalogItem");
		return $resultObject;
	}

	/**
	 * List KalturaVendorCatalogItem objects
	 * 
	 * @return \Kaltura\Client\Plugin\Reach\Type\VendorCatalogItemListResponse
	 */
	function listAction(\Kaltura\Client\Plugin\Reach\Type\VendorCatalogItemFilter $filter = null, \Kaltura\Client\Type\FilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("reach_vendorcatalogitem", "list", "KalturaVendorCatalogItemListResponse", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaVendorCatalogItemListResponse");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Plugin\\Reach\\Type\\VendorCatalogItemListResponse");
		return $resultObject;
	}

	/**
	 * Update an existing vedor catalog item object
	 * 
	 * @return \Kaltura\Client\Plugin\Reach\Type\VendorCatalogItem
	 */
	function update($id, \Kaltura\Client\Plugin\Reach\Type\VendorCatalogItem $vendorCatalogItem)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "vendorCatalogItem", $vendorCatalogItem->toParams());
		$this->client->queueServiceActionCall("reach_vendorcatalogitem", "update", "KalturaVendorCatalogItem", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaVendorCatalogItem");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Plugin\\Reach\\Type\\VendorCatalogItem");
		return $resultObject;
	}

	/**
	 * Update vendor catalog item status by id
	 * 
	 * @return \Kaltura\Client\Plugin\Reach\Type\VendorCatalogItem
	 */
	function updateStatus($id, $status)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "status", $status);
		$this->client->queueServiceActionCall("reach_vendorcatalogitem", "updateStatus", "KalturaVendorCatalogItem", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaVendorCatalogItem");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Plugin\\Reach\\Type\\VendorCatalogItem");
		return $resultObject;
	}
}
