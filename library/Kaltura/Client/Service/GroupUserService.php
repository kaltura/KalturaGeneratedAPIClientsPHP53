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
// Copyright (C) 2006-2022  Kaltura Inc.
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
 * Add & Manage GroupUser
 * @package Kaltura
 * @subpackage Client
 */
class GroupUserService extends \Kaltura\Client\ServiceBase
{
	function __construct(\Kaltura\Client\Client $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Add new GroupUser
	 * 
	 * @return \Kaltura\Client\Type\GroupUser
	 */
	function add(\Kaltura\Client\Type\GroupUser $groupUser)
	{
		$kparams = array();
		$this->client->addParam($kparams, "groupUser", $groupUser->toParams());
		$this->client->queueServiceActionCall("groupuser", "add", "KalturaGroupUser", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaGroupUser");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\GroupUser");
		return $resultObject;
	}

	/**
	 * delete by userId and groupId
	 * 
	 */
	function delete($userId, $groupId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "userId", $userId);
		$this->client->addParam($kparams, "groupId", $groupId);
		$this->client->queueServiceActionCall("groupuser", "delete", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
	}

	/**
	 * List all GroupUsers
	 * 
	 * @return \Kaltura\Client\Type\GroupUserListResponse
	 */
	function listAction(\Kaltura\Client\Type\GroupUserFilter $filter = null, \Kaltura\Client\Type\FilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("groupuser", "list", "KalturaGroupUserListResponse", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaGroupUserListResponse");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\GroupUserListResponse");
		return $resultObject;
	}

	/**
	 * sync by userId and groupIds
	 * 
	 * @return \Kaltura\Client\Type\BulkUpload
	 */
	function sync($userId, $groupIds = null, $removeFromExistingGroups = true, $createNewGroups = true)
	{
		$kparams = array();
		$this->client->addParam($kparams, "userId", $userId);
		$this->client->addParam($kparams, "groupIds", $groupIds);
		$this->client->addParam($kparams, "removeFromExistingGroups", $removeFromExistingGroups);
		$this->client->addParam($kparams, "createNewGroups", $createNewGroups);
		$this->client->queueServiceActionCall("groupuser", "sync", "KalturaBulkUpload", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaBulkUpload");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\BulkUpload");
		return $resultObject;
	}

	/**
	 * update GroupUser
	 * 
	 * @return \Kaltura\Client\Type\GroupUser
	 */
	function update($groupUserId, \Kaltura\Client\Type\GroupUser $groupUser)
	{
		$kparams = array();
		$this->client->addParam($kparams, "groupUserId", $groupUserId);
		$this->client->addParam($kparams, "groupUser", $groupUser->toParams());
		$this->client->queueServiceActionCall("groupuser", "update", "KalturaGroupUser", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaGroupUser");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\GroupUser");
		return $resultObject;
	}
}
