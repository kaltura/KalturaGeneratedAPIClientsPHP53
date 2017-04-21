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
namespace Kaltura\Client\Plugin\ExternalMedia\Service;

/**
 * External media service lets you upload and manage embed codes and external playable content
 * @package Kaltura
 * @subpackage Client
 */
class ExternalMediaService extends \Kaltura\Client\ServiceBase
{
	function __construct(\Kaltura\Client\Client $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Add external media entry
	 * 
	 * @return \Kaltura\Client\Plugin\ExternalMedia\Type\ExternalMediaEntry
	 */
	function add(\Kaltura\Client\Plugin\ExternalMedia\Type\ExternalMediaEntry $entry)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entry", $entry->toParams());
		$this->client->queueServiceActionCall("externalmedia_externalmedia", "add", "KalturaExternalMediaEntry", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaExternalMediaEntry");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Plugin\\ExternalMedia\\Type\\ExternalMediaEntry");
		return $resultObject;
	}

	/**
	 * Count media entries by filter.
	 * 
	 * @return int
	 */
	function count(\Kaltura\Client\Plugin\ExternalMedia\Type\ExternalMediaEntryFilter $filter = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		$this->client->queueServiceActionCall("externalmedia_externalmedia", "count", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = (int)\Kaltura\Client\ParseUtils::unmarshalSimpleType($resultXmlObject->result);
		return $resultObject;
	}

	/**
	 * Delete a external media entry.
	 * 
	 */
	function delete($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("externalmedia_externalmedia", "delete", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
	}

	/**
	 * Get external media entry by ID.
	 * 
	 * @return \Kaltura\Client\Plugin\ExternalMedia\Type\ExternalMediaEntry
	 */
	function get($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("externalmedia_externalmedia", "get", "KalturaExternalMediaEntry", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaExternalMediaEntry");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Plugin\\ExternalMedia\\Type\\ExternalMediaEntry");
		return $resultObject;
	}

	/**
	 * List media entries by filter with paging support.
	 * 
	 * @return \Kaltura\Client\Plugin\ExternalMedia\Type\ExternalMediaEntryListResponse
	 */
	function listAction(\Kaltura\Client\Plugin\ExternalMedia\Type\ExternalMediaEntryFilter $filter = null, \Kaltura\Client\Type\FilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("externalmedia_externalmedia", "list", "KalturaExternalMediaEntryListResponse", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaExternalMediaEntryListResponse");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Plugin\\ExternalMedia\\Type\\ExternalMediaEntryListResponse");
		return $resultObject;
	}

	/**
	 * Update external media entry. Only the properties that were set will be updated.
	 * 
	 * @return \Kaltura\Client\Plugin\ExternalMedia\Type\ExternalMediaEntry
	 */
	function update($id, \Kaltura\Client\Plugin\ExternalMedia\Type\ExternalMediaEntry $entry)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "entry", $entry->toParams());
		$this->client->queueServiceActionCall("externalmedia_externalmedia", "update", "KalturaExternalMediaEntry", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaExternalMediaEntry");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Plugin\\ExternalMedia\\Type\\ExternalMediaEntry");
		return $resultObject;
	}
}
