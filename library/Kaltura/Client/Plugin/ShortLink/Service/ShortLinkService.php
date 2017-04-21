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
namespace Kaltura\Client\Plugin\ShortLink\Service;

/**
 * Short link service
 * @package Kaltura
 * @subpackage Client
 */
class ShortLinkService extends \Kaltura\Client\ServiceBase
{
	function __construct(\Kaltura\Client\Client $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Allows you to add a short link object
	 * 
	 * @return \Kaltura\Client\Plugin\ShortLink\Type\ShortLink
	 */
	function add(\Kaltura\Client\Plugin\ShortLink\Type\ShortLink $shortLink)
	{
		$kparams = array();
		$this->client->addParam($kparams, "shortLink", $shortLink->toParams());
		$this->client->queueServiceActionCall("shortlink_shortlink", "add", "KalturaShortLink", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaShortLink");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Plugin\\ShortLink\\Type\\ShortLink");
		return $resultObject;
	}

	/**
	 * Mark the short link as deleted
	 * 
	 * @return \Kaltura\Client\Plugin\ShortLink\Type\ShortLink
	 */
	function delete($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("shortlink_shortlink", "delete", "KalturaShortLink", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaShortLink");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Plugin\\ShortLink\\Type\\ShortLink");
		return $resultObject;
	}

	/**
	 * Retrieve an short link object by id
	 * 
	 * @return \Kaltura\Client\Plugin\ShortLink\Type\ShortLink
	 */
	function get($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("shortlink_shortlink", "get", "KalturaShortLink", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaShortLink");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Plugin\\ShortLink\\Type\\ShortLink");
		return $resultObject;
	}

	/**
	 * Serves short link
	 * 
	 * @return file
	 */
	function gotoAction($id, $proxy = false)
	{
		if ($this->client->isMultiRequest())
			throw $this->client->getClientException("Action is not supported as part of multi-request.", ClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "proxy", $proxy);
		$this->client->queueServiceActionCall('shortlink_shortlink', 'goto', null, $kparams);
		$resultObject = $this->client->getServeUrl();
		return $resultObject;
	}

	/**
	 * List short link objects by filter and pager
	 * 
	 * @return \Kaltura\Client\Plugin\ShortLink\Type\ShortLinkListResponse
	 */
	function listAction(\Kaltura\Client\Plugin\ShortLink\Type\ShortLinkFilter $filter = null, \Kaltura\Client\Type\FilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("shortlink_shortlink", "list", "KalturaShortLinkListResponse", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaShortLinkListResponse");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Plugin\\ShortLink\\Type\\ShortLinkListResponse");
		return $resultObject;
	}

	/**
	 * Update exisitng short link
	 * 
	 * @return \Kaltura\Client\Plugin\ShortLink\Type\ShortLink
	 */
	function update($id, \Kaltura\Client\Plugin\ShortLink\Type\ShortLink $shortLink)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "shortLink", $shortLink->toParams());
		$this->client->queueServiceActionCall("shortlink_shortlink", "update", "KalturaShortLink", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaShortLink");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Plugin\\ShortLink\\Type\\ShortLink");
		return $resultObject;
	}
}
