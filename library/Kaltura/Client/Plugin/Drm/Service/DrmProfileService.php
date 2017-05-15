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
namespace Kaltura\Client\Plugin\Drm\Service;

/**
 * @package Kaltura
 * @subpackage Client
 */
class DrmProfileService extends \Kaltura\Client\ServiceBase
{
	function __construct(\Kaltura\Client\Client $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Allows you to add a new DrmProfile object
	 * 
	 * @return \Kaltura\Client\Plugin\Drm\Type\DrmProfile
	 */
	function add(\Kaltura\Client\Plugin\Drm\Type\DrmProfile $drmProfile)
	{
		$kparams = array();
		$this->client->addParam($kparams, "drmProfile", $drmProfile->toParams());
		$this->client->queueServiceActionCall("drm_drmprofile", "add", "KalturaDrmProfile", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaDrmProfile");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Plugin\\Drm\\Type\\DrmProfile");
		return $resultObject;
	}

	/**
	 * Mark the KalturaDrmProfile object as deleted
	 * 
	 * @return \Kaltura\Client\Plugin\Drm\Type\DrmProfile
	 */
	function delete($drmProfileId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "drmProfileId", $drmProfileId);
		$this->client->queueServiceActionCall("drm_drmprofile", "delete", "KalturaDrmProfile", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaDrmProfile");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Plugin\\Drm\\Type\\DrmProfile");
		return $resultObject;
	}

	/**
	 * Retrieve a KalturaDrmProfile object by ID
	 * 
	 * @return \Kaltura\Client\Plugin\Drm\Type\DrmProfile
	 */
	function get($drmProfileId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "drmProfileId", $drmProfileId);
		$this->client->queueServiceActionCall("drm_drmprofile", "get", "KalturaDrmProfile", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaDrmProfile");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Plugin\\Drm\\Type\\DrmProfile");
		return $resultObject;
	}

	/**
	 * Retrieve a KalturaDrmProfile object by provider, if no specific profile defined return default profile
	 * 
	 * @return \Kaltura\Client\Plugin\Drm\Type\DrmProfile
	 */
	function getByProvider($provider)
	{
		$kparams = array();
		$this->client->addParam($kparams, "provider", $provider);
		$this->client->queueServiceActionCall("drm_drmprofile", "getByProvider", "KalturaDrmProfile", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaDrmProfile");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Plugin\\Drm\\Type\\DrmProfile");
		return $resultObject;
	}

	/**
	 * List KalturaDrmProfile objects
	 * 
	 * @return \Kaltura\Client\Plugin\Drm\Type\DrmProfileListResponse
	 */
	function listAction(\Kaltura\Client\Plugin\Drm\Type\DrmProfileFilter $filter = null, \Kaltura\Client\Type\FilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("drm_drmprofile", "list", "KalturaDrmProfileListResponse", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaDrmProfileListResponse");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Plugin\\Drm\\Type\\DrmProfileListResponse");
		return $resultObject;
	}

	/**
	 * Update an existing KalturaDrmProfile object
	 * 
	 * @return \Kaltura\Client\Plugin\Drm\Type\DrmProfile
	 */
	function update($drmProfileId, \Kaltura\Client\Plugin\Drm\Type\DrmProfile $drmProfile)
	{
		$kparams = array();
		$this->client->addParam($kparams, "drmProfileId", $drmProfileId);
		$this->client->addParam($kparams, "drmProfile", $drmProfile->toParams());
		$this->client->queueServiceActionCall("drm_drmprofile", "update", "KalturaDrmProfile", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaDrmProfile");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Plugin\\Drm\\Type\\DrmProfile");
		return $resultObject;
	}
}
