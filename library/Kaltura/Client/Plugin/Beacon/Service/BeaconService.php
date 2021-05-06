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
namespace Kaltura\Client\Plugin\Beacon\Service;

/**
 * Sending beacons on objects
 * @package Kaltura
 * @subpackage Client
 */
class BeaconService extends \Kaltura\Client\ServiceBase
{
	function __construct(\Kaltura\Client\Client $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * 
	 * @return bool
	 */
	function add(\Kaltura\Client\Plugin\Beacon\Type\Beacon $beacon, $shouldLog = 0)
	{
		$kparams = array();
		$this->client->addParam($kparams, "beacon", $beacon->toParams());
		$this->client->addParam($kparams, "shouldLog", $shouldLog);
		$this->client->queueServiceActionCall("beacon_beacon", "add", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = (bool)\Kaltura\Client\ParseUtils::unmarshalSimpleType($resultXmlObject->result);
		return $resultObject;
	}

	/**
	 * 
	 * @return \Kaltura\Client\Plugin\Beacon\Type\BeaconListResponse
	 */
	function enhanceSearch(\Kaltura\Client\Plugin\Beacon\Type\BeaconEnhanceFilter $filter = null, \Kaltura\Client\Type\FilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("beacon_beacon", "enhanceSearch", "KalturaBeaconListResponse", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaBeaconListResponse");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Plugin\\Beacon\\Type\\BeaconListResponse");
		return $resultObject;
	}

	/**
	 * 
	 * @return \Kaltura\Client\Plugin\Beacon\Type\BeaconListResponse
	 */
	function listAction(\Kaltura\Client\Plugin\Beacon\Type\BeaconFilter $filter = null, \Kaltura\Client\Type\FilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("beacon_beacon", "list", "KalturaBeaconListResponse", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaBeaconListResponse");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Plugin\\Beacon\\Type\\BeaconListResponse");
		return $resultObject;
	}

	/**
	 * 
	 * @return \Kaltura\Client\Plugin\Beacon\Type\BeaconListResponse
	 */
	function searchScheduledResource(\Kaltura\Client\Plugin\Beacon\Type\BeaconSearchParams $searchParams, \Kaltura\Client\Type\Pager $pager = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "searchParams", $searchParams->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("beacon_beacon", "searchScheduledResource", "KalturaBeaconListResponse", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaBeaconListResponse");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Plugin\\Beacon\\Type\\BeaconListResponse");
		return $resultObject;
	}
}
