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
// Copyright (C) 2006-2011  Kaltura Inc.
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
 * Manage access control profiles
 *  
 * @package Kaltura
 * @subpackage Client
 */
class AccessControlProfileService extends \Kaltura\Client\ServiceBase
{
	function __construct(\Kaltura\Client\Client $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Add new access control profile
	 * 	 
	 * 
	 * @return \Kaltura\Client\Type\AccessControlProfile
	 */
	function add(\Kaltura\Client\Type\AccessControlProfile $accessControlProfile)
	{
		$kparams = array();
		$this->client->addParam($kparams, "accessControlProfile", $accessControlProfile->toParams());
		$this->client->queueServiceActionCall("accesscontrolprofile", "add", "KalturaAccessControlProfile", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		\Kaltura\Client\ParseUtils::checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaAccessControlProfile");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\AccessControlProfile");
		return $resultObject;
	}

	/**
	 * Get access control profile by id
	 * 	 
	 * 
	 * @return \Kaltura\Client\Type\AccessControlProfile
	 */
	function get($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("accesscontrolprofile", "get", "KalturaAccessControlProfile", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		\Kaltura\Client\ParseUtils::checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaAccessControlProfile");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\AccessControlProfile");
		return $resultObject;
	}

	/**
	 * Update access control profile by id
	 * 	 
	 * 
	 * @return \Kaltura\Client\Type\AccessControlProfile
	 */
	function update($id, \Kaltura\Client\Type\AccessControlProfile $accessControlProfile)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "accessControlProfile", $accessControlProfile->toParams());
		$this->client->queueServiceActionCall("accesscontrolprofile", "update", "KalturaAccessControlProfile", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		\Kaltura\Client\ParseUtils::checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaAccessControlProfile");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\AccessControlProfile");
		return $resultObject;
	}

	/**
	 * Delete access control profile by id
	 * 	 
	 * 
	 * @return
	 */
	function delete($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("accesscontrolprofile", "delete", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		\Kaltura\Client\ParseUtils::checkIfError($resultXmlObject->result);
	}

	/**
	 * List access control profiles by filter and pager
	 * 	 
	 * 
	 * @return \Kaltura\Client\Type\AccessControlProfileListResponse
	 */
	function listAction(\Kaltura\Client\Type\AccessControlProfileFilter $filter = null, \Kaltura\Client\Type\FilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("accesscontrolprofile", "list", "KalturaAccessControlProfileListResponse", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		\Kaltura\Client\ParseUtils::checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaAccessControlProfileListResponse");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\AccessControlProfileListResponse");
		return $resultObject;
	}
}
