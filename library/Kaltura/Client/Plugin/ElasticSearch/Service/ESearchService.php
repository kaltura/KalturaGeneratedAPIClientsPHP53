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
namespace Kaltura\Client\Plugin\ElasticSearch\Service;

/**
 * @package Kaltura
 * @subpackage Client
 */
class ESearchService extends \Kaltura\Client\ServiceBase
{
	function __construct(\Kaltura\Client\Client $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * 
	 * @return array
	 */
	function getAllowedSearchTypes(\Kaltura\Client\Plugin\ElasticSearch\Type\ESearchItem $searchItem)
	{
		$kparams = array();
		$this->client->addParam($kparams, "searchItem", $searchItem->toParams());
		$this->client->queueServiceActionCall("elasticsearch_esearch", "getAllowedSearchTypes", "KalturaKeyValue", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalArray($resultXmlObject->result, "KalturaKeyValue");
		$this->client->validateObjectType($resultObject, "array");
		return $resultObject;
	}

	/**
	 * 
	 * @return \Kaltura\Client\Plugin\ElasticSearch\Type\ESearchResponse
	 */
	function searchCategory(\Kaltura\Client\Plugin\ElasticSearch\Type\ESearchObject $searchParams, \Kaltura\Client\Type\Pager $pager = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "searchParams", $searchParams->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("elasticsearch_esearch", "searchCategory", "KalturaESearchResponse", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaESearchResponse");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Plugin\\ElasticSearch\\Type\\ESearchResponse");
		return $resultObject;
	}

	/**
	 * 
	 * @return \Kaltura\Client\Plugin\ElasticSearch\Type\ESearchResponse
	 */
	function searchEntry(\Kaltura\Client\Plugin\ElasticSearch\Type\ESearchObject $searchParams, \Kaltura\Client\Type\Pager $pager = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "searchParams", $searchParams->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("elasticsearch_esearch", "searchEntry", "KalturaESearchResponse", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaESearchResponse");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Plugin\\ElasticSearch\\Type\\ESearchResponse");
		return $resultObject;
	}

	/**
	 * 
	 * @return \Kaltura\Client\Plugin\ElasticSearch\Type\ESearchResponse
	 */
	function searchUser(\Kaltura\Client\Plugin\ElasticSearch\Type\ESearchObject $searchParams, \Kaltura\Client\Type\Pager $pager = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "searchParams", $searchParams->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("elasticsearch_esearch", "searchUser", "KalturaESearchResponse", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaESearchResponse");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Plugin\\ElasticSearch\\Type\\ESearchResponse");
		return $resultObject;
	}
}
