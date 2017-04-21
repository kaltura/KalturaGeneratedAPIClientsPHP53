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
 * Manage response profiles
 * @package Kaltura
 * @subpackage Client
 */
class ResponseProfileService extends \Kaltura\Client\ServiceBase
{
	function __construct(\Kaltura\Client\Client $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Add new response profile
	 * 
	 * @return \Kaltura\Client\Type\ResponseProfile
	 */
	function add(\Kaltura\Client\Type\ResponseProfile $addResponseProfile)
	{
		$kparams = array();
		$this->client->addParam($kparams, "addResponseProfile", $addResponseProfile->toParams());
		$this->client->queueServiceActionCall("responseprofile", "add", "KalturaResponseProfile", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaResponseProfile");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\ResponseProfile");
		return $resultObject;
	}

	/**
	 * Clone an existing response profile
	 * 
	 * @return \Kaltura\Client\Type\ResponseProfile
	 */
	function cloneAction($id, \Kaltura\Client\Type\ResponseProfile $profile)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "profile", $profile->toParams());
		$this->client->queueServiceActionCall("responseprofile", "clone", "KalturaResponseProfile", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaResponseProfile");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\ResponseProfile");
		return $resultObject;
	}

	/**
	 * Delete response profile by id
	 * 
	 */
	function delete($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("responseprofile", "delete", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
	}

	/**
	 * Get response profile by id
	 * 
	 * @return \Kaltura\Client\Type\ResponseProfile
	 */
	function get($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("responseprofile", "get", "KalturaResponseProfile", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaResponseProfile");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\ResponseProfile");
		return $resultObject;
	}

	/**
	 * List response profiles by filter and pager
	 * 
	 * @return \Kaltura\Client\Type\ResponseProfileListResponse
	 */
	function listAction(\Kaltura\Client\Type\ResponseProfileFilter $filter = null, \Kaltura\Client\Type\FilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("responseprofile", "list", "KalturaResponseProfileListResponse", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaResponseProfileListResponse");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\ResponseProfileListResponse");
		return $resultObject;
	}

	/**
	 * Recalculate response profile cached objects
	 * 
	 * @return \Kaltura\Client\Type\ResponseProfileCacheRecalculateResults
	 */
	function recalculate(\Kaltura\Client\Type\ResponseProfileCacheRecalculateOptions $options)
	{
		$kparams = array();
		$this->client->addParam($kparams, "options", $options->toParams());
		$this->client->queueServiceActionCall("responseprofile", "recalculate", "KalturaResponseProfileCacheRecalculateResults", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaResponseProfileCacheRecalculateResults");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\ResponseProfileCacheRecalculateResults");
		return $resultObject;
	}

	/**
	 * Update response profile by id
	 * 
	 * @return \Kaltura\Client\Type\ResponseProfile
	 */
	function update($id, \Kaltura\Client\Type\ResponseProfile $updateResponseProfile)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "updateResponseProfile", $updateResponseProfile->toParams());
		$this->client->queueServiceActionCall("responseprofile", "update", "KalturaResponseProfile", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaResponseProfile");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\ResponseProfile");
		return $resultObject;
	}

	/**
	 * Update response profile status by id
	 * 
	 * @return \Kaltura\Client\Type\ResponseProfile
	 */
	function updateStatus($id, $status)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "status", $status);
		$this->client->queueServiceActionCall("responseprofile", "updateStatus", "KalturaResponseProfile", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaResponseProfile");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\ResponseProfile");
		return $resultObject;
	}
}
