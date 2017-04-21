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
 * PermissionItem service lets you create and manage permission items
 * @package Kaltura
 * @subpackage Client
 */
class PermissionItemService extends \Kaltura\Client\ServiceBase
{
	function __construct(\Kaltura\Client\Client $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Adds a new permission item object to the account.
	 * 	 This action is available only to Kaltura system administrators.
	 * 
	 * @return \Kaltura\Client\Type\PermissionItem
	 */
	function add(\Kaltura\Client\Type\PermissionItem $permissionItem)
	{
		$kparams = array();
		$this->client->addParam($kparams, "permissionItem", $permissionItem->toParams());
		$this->client->queueServiceActionCall("permissionitem", "add", "KalturaPermissionItem", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaPermissionItem");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\PermissionItem");
		return $resultObject;
	}

	/**
	 * Deletes an existing permission item object.
	 * 	 This action is available only to Kaltura system administrators.
	 * 
	 * @return \Kaltura\Client\Type\PermissionItem
	 */
	function delete($permissionItemId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "permissionItemId", $permissionItemId);
		$this->client->queueServiceActionCall("permissionitem", "delete", "KalturaPermissionItem", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaPermissionItem");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\PermissionItem");
		return $resultObject;
	}

	/**
	 * Retrieves a permission item object using its ID.
	 * 
	 * @return \Kaltura\Client\Type\PermissionItem
	 */
	function get($permissionItemId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "permissionItemId", $permissionItemId);
		$this->client->queueServiceActionCall("permissionitem", "get", "KalturaPermissionItem", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaPermissionItem");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\PermissionItem");
		return $resultObject;
	}

	/**
	 * Lists permission item objects that are associated with an account.
	 * 
	 * @return \Kaltura\Client\Type\PermissionItemListResponse
	 */
	function listAction(\Kaltura\Client\Type\PermissionItemFilter $filter = null, \Kaltura\Client\Type\FilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("permissionitem", "list", "KalturaPermissionItemListResponse", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaPermissionItemListResponse");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\PermissionItemListResponse");
		return $resultObject;
	}

	/**
	 * Updates an existing permission item object.
	 * 	 This action is available only to Kaltura system administrators.
	 * 
	 * @return \Kaltura\Client\Type\PermissionItem
	 */
	function update($permissionItemId, \Kaltura\Client\Type\PermissionItem $permissionItem)
	{
		$kparams = array();
		$this->client->addParam($kparams, "permissionItemId", $permissionItemId);
		$this->client->addParam($kparams, "permissionItem", $permissionItem->toParams());
		$this->client->queueServiceActionCall("permissionitem", "update", "KalturaPermissionItem", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaPermissionItem");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\PermissionItem");
		return $resultObject;
	}
}
