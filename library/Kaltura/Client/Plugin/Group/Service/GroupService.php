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
// Copyright (C) 2006-2021  Kaltura Inc.
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
namespace Kaltura\Client\Plugin\Group\Service;

/**
 * @package Kaltura
 * @subpackage Client
 */
class GroupService extends \Kaltura\Client\ServiceBase
{
	function __construct(\Kaltura\Client\Client $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Adds a new group (user of type group).
	 * 
	 * @return \Kaltura\Client\Plugin\Group\Type\Group
	 */
	function add(\Kaltura\Client\Plugin\Group\Type\Group $group)
	{
		$kparams = array();
		$this->client->addParam($kparams, "group", $group->toParams());
		$this->client->queueServiceActionCall("group_group", "add", "KalturaGroup", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaGroup");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Plugin\\Group\\Type\\Group");
		return $resultObject;
	}

	/**
	 * clone the group (groupId), and set group id with the neeGroupName.
	 * 
	 * @return \Kaltura\Client\Plugin\Group\Type\Group
	 */
	function cloneAction($originalGroupId, $newGroupId, $newGroupName = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "originalGroupId", $originalGroupId);
		$this->client->addParam($kparams, "newGroupId", $newGroupId);
		$this->client->addParam($kparams, "newGroupName", $newGroupName);
		$this->client->queueServiceActionCall("group_group", "clone", "KalturaGroup", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaGroup");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Plugin\\Group\\Type\\Group");
		return $resultObject;
	}

	/**
	 * Delete group by ID
	 * 
	 * @return \Kaltura\Client\Plugin\Group\Type\Group
	 */
	function delete($groupId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "groupId", $groupId);
		$this->client->queueServiceActionCall("group_group", "delete", "KalturaGroup", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaGroup");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Plugin\\Group\\Type\\Group");
		return $resultObject;
	}

	/**
	 * Retrieves a group object for a specified group ID.
	 * 
	 * @return \Kaltura\Client\Plugin\Group\Type\Group
	 */
	function get($groupId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "groupId", $groupId);
		$this->client->queueServiceActionCall("group_group", "get", "KalturaGroup", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaGroup");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Plugin\\Group\\Type\\Group");
		return $resultObject;
	}

	/**
	 * Lists group  objects that are associated with an account.
	 * 	 Blocked users are listed unless you use a filter to exclude them.
	 * 	 Deleted users are not listed unless you use a filter to include them.
	 * 
	 * @return \Kaltura\Client\Plugin\Group\Type\GroupListResponse
	 */
	function listAction(\Kaltura\Client\Plugin\Group\Type\GroupFilter $filter = null, \Kaltura\Client\Type\FilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("group_group", "list", "KalturaGroupListResponse", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaGroupListResponse");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Plugin\\Group\\Type\\GroupListResponse");
		return $resultObject;
	}

	/**
	 * Update group by ID
	 * 
	 * @return \Kaltura\Client\Plugin\Group\Type\Group
	 */
	function update($groupId, \Kaltura\Client\Plugin\Group\Type\Group $group)
	{
		$kparams = array();
		$this->client->addParam($kparams, "groupId", $groupId);
		$this->client->addParam($kparams, "group", $group->toParams());
		$this->client->queueServiceActionCall("group_group", "update", "KalturaGroup", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaGroup");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Plugin\\Group\\Type\\Group");
		return $resultObject;
	}
}
