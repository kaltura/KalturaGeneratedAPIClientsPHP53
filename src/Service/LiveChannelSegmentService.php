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
 * Manage live channel segments
 *  
 * @package Kaltura
 * @subpackage Client
 */
class LiveChannelSegmentService extends \Kaltura\Client\ServiceBase
{
	function __construct(\Kaltura\Client\Client $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Add new live channel segment
	 * 	 
	 * 
	 * @return \Kaltura\Client\Type\LiveChannelSegment
	 */
	function add(\Kaltura\Client\Type\LiveChannelSegment $liveChannelSegment)
	{
		$kparams = array();
		$this->client->addParam($kparams, "liveChannelSegment", $liveChannelSegment->toParams());
		$this->client->queueServiceActionCall("livechannelsegment", "add", "KalturaLiveChannelSegment", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		\Kaltura\Client\ParseUtils::checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaLiveChannelSegment");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\LiveChannelSegment");
		return $resultObject;
	}

	/**
	 * Get live channel segment by id
	 * 	 
	 * 
	 * @return \Kaltura\Client\Type\LiveChannelSegment
	 */
	function get($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("livechannelsegment", "get", "KalturaLiveChannelSegment", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		\Kaltura\Client\ParseUtils::checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaLiveChannelSegment");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\LiveChannelSegment");
		return $resultObject;
	}

	/**
	 * Update live channel segment by id
	 * 	 
	 * 
	 * @return \Kaltura\Client\Type\LiveChannelSegment
	 */
	function update($id, \Kaltura\Client\Type\LiveChannelSegment $liveChannelSegment)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "liveChannelSegment", $liveChannelSegment->toParams());
		$this->client->queueServiceActionCall("livechannelsegment", "update", "KalturaLiveChannelSegment", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		\Kaltura\Client\ParseUtils::checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaLiveChannelSegment");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\LiveChannelSegment");
		return $resultObject;
	}

	/**
	 * Delete live channel segment by id
	 * 	 
	 * 
	 * @return
	 */
	function delete($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("livechannelsegment", "delete", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		\Kaltura\Client\ParseUtils::checkIfError($resultXmlObject->result);
	}

	/**
	 * List live channel segments by filter and pager
	 * 	 
	 * 
	 * @return \Kaltura\Client\Type\LiveChannelSegmentListResponse
	 */
	function listAction(\Kaltura\Client\Type\LiveChannelSegmentFilter $filter = null, \Kaltura\Client\Type\FilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("livechannelsegment", "list", "KalturaLiveChannelSegmentListResponse", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		\Kaltura\Client\ParseUtils::checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaLiveChannelSegmentListResponse");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\LiveChannelSegmentListResponse");
		return $resultObject;
	}
}
