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
namespace Kaltura\Client\Plugin\Reach\Service;

/**
 * Reach Profile Service
 * @package Kaltura
 * @subpackage Client
 */
class ReachProfileService extends \Kaltura\Client\ServiceBase
{
	function __construct(\Kaltura\Client\Client $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Allows you to add a partner specific reach profile
	 * 
	 * @return \Kaltura\Client\Plugin\Reach\Type\ReachProfile
	 */
	function add(\Kaltura\Client\Plugin\Reach\Type\ReachProfile $reachProfile)
	{
		$kparams = array();
		$this->client->addParam($kparams, "reachProfile", $reachProfile->toParams());
		$this->client->queueServiceActionCall("reach_reachprofile", "add", "KalturaReachProfile", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaReachProfile");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Plugin\\Reach\\Type\\ReachProfile");
		return $resultObject;
	}

	/**
	 * Delete vednor profile by id
	 * 
	 */
	function delete($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("reach_reachprofile", "delete", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
	}

	/**
	 * Retrieve specific reach profile by id
	 * 
	 * @return \Kaltura\Client\Plugin\Reach\Type\ReachProfile
	 */
	function get($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("reach_reachprofile", "get", "KalturaReachProfile", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaReachProfile");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Plugin\\Reach\\Type\\ReachProfile");
		return $resultObject;
	}

	/**
	 * List KalturaReachProfile objects
	 * 
	 * @return \Kaltura\Client\Plugin\Reach\Type\ReachProfileListResponse
	 */
	function listAction(\Kaltura\Client\Plugin\Reach\Type\ReachProfileFilter $filter = null, \Kaltura\Client\Type\FilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("reach_reachprofile", "list", "KalturaReachProfileListResponse", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaReachProfileListResponse");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Plugin\\Reach\\Type\\ReachProfileListResponse");
		return $resultObject;
	}

	/**
	 * sync vednor profile credit
	 * 
	 * @return \Kaltura\Client\Plugin\Reach\Type\ReachProfile
	 */
	function syncCredit($reachProfileId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "reachProfileId", $reachProfileId);
		$this->client->queueServiceActionCall("reach_reachprofile", "syncCredit", "KalturaReachProfile", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaReachProfile");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Plugin\\Reach\\Type\\ReachProfile");
		return $resultObject;
	}

	/**
	 * Update an existing reach profile object
	 * 
	 * @return \Kaltura\Client\Plugin\Reach\Type\ReachProfile
	 */
	function update($id, \Kaltura\Client\Plugin\Reach\Type\ReachProfile $reachProfile)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "reachProfile", $reachProfile->toParams());
		$this->client->queueServiceActionCall("reach_reachprofile", "update", "KalturaReachProfile", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaReachProfile");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Plugin\\Reach\\Type\\ReachProfile");
		return $resultObject;
	}

	/**
	 * Update reach profile status by id
	 * 
	 * @return \Kaltura\Client\Plugin\Reach\Type\ReachProfile
	 */
	function updateStatus($id, $status)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "status", $status);
		$this->client->queueServiceActionCall("reach_reachprofile", "updateStatus", "KalturaReachProfile", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaReachProfile");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Plugin\\Reach\\Type\\ReachProfile");
		return $resultObject;
	}
}
