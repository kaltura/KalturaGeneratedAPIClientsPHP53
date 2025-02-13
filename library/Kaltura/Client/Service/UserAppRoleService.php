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
namespace Kaltura\Client\Service;

/**
 * Manage application based roles for user
 * @package Kaltura
 * @subpackage Client
 */
class UserAppRoleService extends \Kaltura\Client\ServiceBase
{
	function __construct(\Kaltura\Client\Client $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Assign an application role for a user
	 * 
	 * @return \Kaltura\Client\Type\UserAppRole
	 */
	function add(\Kaltura\Client\Type\UserAppRole $userAppRole)
	{
		$kparams = array();
		$this->client->addParam($kparams, "userAppRole", $userAppRole->toParams());
		$this->client->queueServiceActionCall("userapprole", "add", "KalturaUserAppRole", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaUserAppRole");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\UserAppRole");
		return $resultObject;
	}

	/**
	 * Delete an application role for a user and app guid
	 * 
	 * @return bool
	 */
	function delete($userId, $appGuid)
	{
		$kparams = array();
		$this->client->addParam($kparams, "userId", $userId);
		$this->client->addParam($kparams, "appGuid", $appGuid);
		$this->client->queueServiceActionCall("userapprole", "delete", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = (bool)\Kaltura\Client\ParseUtils::unmarshalSimpleType($resultXmlObject->result);
		return $resultObject;
	}

	/**
	 * Get an application role for a user and app guid
	 * 
	 * @return \Kaltura\Client\Type\UserAppRole
	 */
	function get($userId, $appGuid)
	{
		$kparams = array();
		$this->client->addParam($kparams, "userId", $userId);
		$this->client->addParam($kparams, "appGuid", $appGuid);
		$this->client->queueServiceActionCall("userapprole", "get", "KalturaUserAppRole", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaUserAppRole");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\UserAppRole");
		return $resultObject;
	}

	/**
	 * List an application roles by filter and pager
	 * 
	 * @return \Kaltura\Client\Type\UserAppRoleListResponse
	 */
	function listAction(\Kaltura\Client\Type\UserAppRoleFilter $filter = null, \Kaltura\Client\Type\FilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("userapprole", "list", "KalturaUserAppRoleListResponse", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaUserAppRoleListResponse");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\UserAppRoleListResponse");
		return $resultObject;
	}

	/**
	 * Update an application role for a user
	 * 
	 * @return \Kaltura\Client\Type\UserAppRole
	 */
	function update($userId, $appGuid, \Kaltura\Client\Type\UserAppRole $userAppRole)
	{
		$kparams = array();
		$this->client->addParam($kparams, "userId", $userId);
		$this->client->addParam($kparams, "appGuid", $appGuid);
		$this->client->addParam($kparams, "userAppRole", $userAppRole->toParams());
		$this->client->queueServiceActionCall("userapprole", "update", "KalturaUserAppRole", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaUserAppRole");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\UserAppRole");
		return $resultObject;
	}
}
