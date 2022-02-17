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
namespace Kaltura\Client\Plugin\Sso\Service;

/**
 * @package Kaltura
 * @subpackage Client
 */
class SsoService extends \Kaltura\Client\ServiceBase
{
	function __construct(\Kaltura\Client\Client $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Adds a new sso configuration.
	 * 
	 * @return \Kaltura\Client\Plugin\Sso\Type\Sso
	 */
	function add(\Kaltura\Client\Plugin\Sso\Type\Sso $sso)
	{
		$kparams = array();
		$this->client->addParam($kparams, "sso", $sso->toParams());
		$this->client->queueServiceActionCall("sso_sso", "add", "KalturaSso", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaSso");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Plugin\\Sso\\Type\\Sso");
		return $resultObject;
	}

	/**
	 * Delete sso by ID
	 * 
	 * @return \Kaltura\Client\Plugin\Sso\Type\Sso
	 */
	function delete($ssoId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "ssoId", $ssoId);
		$this->client->queueServiceActionCall("sso_sso", "delete", "KalturaSso", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaSso");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Plugin\\Sso\\Type\\Sso");
		return $resultObject;
	}

	/**
	 * Retrieves sso object
	 * 
	 * @return \Kaltura\Client\Plugin\Sso\Type\Sso
	 */
	function get($ssoId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "ssoId", $ssoId);
		$this->client->queueServiceActionCall("sso_sso", "get", "KalturaSso", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaSso");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Plugin\\Sso\\Type\\Sso");
		return $resultObject;
	}

	/**
	 * Lists sso objects that are associated with an account.
	 * 
	 * @return \Kaltura\Client\Plugin\Sso\Type\SsoListResponse
	 */
	function listAction(\Kaltura\Client\Plugin\Sso\Type\SsoFilter $filter = null, \Kaltura\Client\Type\FilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("sso_sso", "list", "KalturaSsoListResponse", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaSsoListResponse");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Plugin\\Sso\\Type\\SsoListResponse");
		return $resultObject;
	}

	/**
	 * Login with SSO, getting redirect url according to application type and partner Id
	 * 	 or according to application type and domain
	 * 
	 * @return string
	 */
	function login($userId, $applicationType, $partnerId = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "userId", $userId);
		$this->client->addParam($kparams, "applicationType", $applicationType);
		$this->client->addParam($kparams, "partnerId", $partnerId);
		$this->client->queueServiceActionCall("sso_sso", "login", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = (String)\Kaltura\Client\ParseUtils::unmarshalSimpleType($resultXmlObject->result);
		return $resultObject;
	}

	/**
	 * Update sso by ID
	 * 
	 * @return \Kaltura\Client\Plugin\Sso\Type\Sso
	 */
	function update($ssoId, \Kaltura\Client\Plugin\Sso\Type\Sso $sso)
	{
		$kparams = array();
		$this->client->addParam($kparams, "ssoId", $ssoId);
		$this->client->addParam($kparams, "sso", $sso->toParams());
		$this->client->queueServiceActionCall("sso_sso", "update", "KalturaSso", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaSso");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Plugin\\Sso\\Type\\Sso");
		return $resultObject;
	}
}
