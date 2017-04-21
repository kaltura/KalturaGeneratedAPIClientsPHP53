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
 * Manage application authentication tokens
 * @package Kaltura
 * @subpackage Client
 */
class AppTokenService extends \Kaltura\Client\ServiceBase
{
	function __construct(\Kaltura\Client\Client $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Add new application authentication token
	 * 
	 * @return \Kaltura\Client\Type\AppToken
	 */
	function add(\Kaltura\Client\Type\AppToken $appToken)
	{
		$kparams = array();
		$this->client->addParam($kparams, "appToken", $appToken->toParams());
		$this->client->queueServiceActionCall("apptoken", "add", "KalturaAppToken", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaAppToken");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\AppToken");
		return $resultObject;
	}

	/**
	 * Delete application authentication token by id
	 * 
	 */
	function delete($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("apptoken", "delete", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
	}

	/**
	 * Get application authentication token by id
	 * 
	 * @return \Kaltura\Client\Type\AppToken
	 */
	function get($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("apptoken", "get", "KalturaAppToken", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaAppToken");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\AppToken");
		return $resultObject;
	}

	/**
	 * List application authentication tokens by filter and pager
	 * 
	 * @return \Kaltura\Client\Type\AppTokenListResponse
	 */
	function listAction(\Kaltura\Client\Type\AppTokenFilter $filter = null, \Kaltura\Client\Type\FilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("apptoken", "list", "KalturaAppTokenListResponse", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaAppTokenListResponse");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\AppTokenListResponse");
		return $resultObject;
	}

	/**
	 * Starts a new KS (kaltura Session) based on application authentication token id
	 * 
	 * @return \Kaltura\Client\Type\SessionInfo
	 */
	function startSession($id, $tokenHash, $userId = null, $type = null, $expiry = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "tokenHash", $tokenHash);
		$this->client->addParam($kparams, "userId", $userId);
		$this->client->addParam($kparams, "type", $type);
		$this->client->addParam($kparams, "expiry", $expiry);
		$this->client->queueServiceActionCall("apptoken", "startSession", "KalturaSessionInfo", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaSessionInfo");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\SessionInfo");
		return $resultObject;
	}

	/**
	 * Update application authentication token by id
	 * 
	 * @return \Kaltura\Client\Type\AppToken
	 */
	function update($id, \Kaltura\Client\Type\AppToken $appToken)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "appToken", $appToken->toParams());
		$this->client->queueServiceActionCall("apptoken", "update", "KalturaAppToken", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaAppToken");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\AppToken");
		return $resultObject;
	}
}
