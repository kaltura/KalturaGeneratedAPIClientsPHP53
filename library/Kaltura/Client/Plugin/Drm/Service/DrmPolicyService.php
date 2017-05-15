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
class DrmPolicyService extends \Kaltura\Client\ServiceBase
{
	function __construct(\Kaltura\Client\Client $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Allows you to add a new DrmPolicy object
	 * 
	 * @return \Kaltura\Client\Plugin\Drm\Type\DrmPolicy
	 */
	function add(\Kaltura\Client\Plugin\Drm\Type\DrmPolicy $drmPolicy)
	{
		$kparams = array();
		$this->client->addParam($kparams, "drmPolicy", $drmPolicy->toParams());
		$this->client->queueServiceActionCall("drm_drmpolicy", "add", "KalturaDrmPolicy", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaDrmPolicy");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Plugin\\Drm\\Type\\DrmPolicy");
		return $resultObject;
	}

	/**
	 * Mark the KalturaDrmPolicy object as deleted
	 * 
	 * @return \Kaltura\Client\Plugin\Drm\Type\DrmPolicy
	 */
	function delete($drmPolicyId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "drmPolicyId", $drmPolicyId);
		$this->client->queueServiceActionCall("drm_drmpolicy", "delete", "KalturaDrmPolicy", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaDrmPolicy");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Plugin\\Drm\\Type\\DrmPolicy");
		return $resultObject;
	}

	/**
	 * Retrieve a KalturaDrmPolicy object by ID
	 * 
	 * @return \Kaltura\Client\Plugin\Drm\Type\DrmPolicy
	 */
	function get($drmPolicyId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "drmPolicyId", $drmPolicyId);
		$this->client->queueServiceActionCall("drm_drmpolicy", "get", "KalturaDrmPolicy", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaDrmPolicy");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Plugin\\Drm\\Type\\DrmPolicy");
		return $resultObject;
	}

	/**
	 * List KalturaDrmPolicy objects
	 * 
	 * @return \Kaltura\Client\Plugin\Drm\Type\DrmPolicyListResponse
	 */
	function listAction(\Kaltura\Client\Plugin\Drm\Type\DrmPolicyFilter $filter = null, \Kaltura\Client\Type\FilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("drm_drmpolicy", "list", "KalturaDrmPolicyListResponse", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaDrmPolicyListResponse");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Plugin\\Drm\\Type\\DrmPolicyListResponse");
		return $resultObject;
	}

	/**
	 * Update an existing KalturaDrmPolicy object
	 * 
	 * @return \Kaltura\Client\Plugin\Drm\Type\DrmPolicy
	 */
	function update($drmPolicyId, \Kaltura\Client\Plugin\Drm\Type\DrmPolicy $drmPolicy)
	{
		$kparams = array();
		$this->client->addParam($kparams, "drmPolicyId", $drmPolicyId);
		$this->client->addParam($kparams, "drmPolicy", $drmPolicy->toParams());
		$this->client->queueServiceActionCall("drm_drmpolicy", "update", "KalturaDrmPolicy", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaDrmPolicy");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Plugin\\Drm\\Type\\DrmPolicy");
		return $resultObject;
	}
}
