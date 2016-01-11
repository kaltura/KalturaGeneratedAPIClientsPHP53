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
// Copyright (C) 2006-2015  Kaltura Inc.
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
namespace Kaltura\Client\Plugin\AdminConsole\Service;

/**
 * Entry Admin service
 *  
 * @package Kaltura
 * @subpackage Client
 */
class EntryAdminService extends \Kaltura\Client\ServiceBase
{
	function __construct(\Kaltura\Client\Client $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Get base entry by ID with no filters.
	 * 	 
	 * 
	 * @return \Kaltura\Client\Type\BaseEntry
	 */
	function get($entryId, $version = -1)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->addParam($kparams, "version", $version);
		$this->client->queueServiceActionCall("adminconsole_entryadmin", "get", "KalturaBaseEntry", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		\Kaltura\Client\ParseUtils::checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaBaseEntry");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\BaseEntry");
		return $resultObject;
	}

	/**
	 * Get base entry by flavor ID with no filters.
	 * 	 
	 * 
	 * @return \Kaltura\Client\Type\BaseEntry
	 */
	function getByFlavorId($flavorId, $version = -1)
	{
		$kparams = array();
		$this->client->addParam($kparams, "flavorId", $flavorId);
		$this->client->addParam($kparams, "version", $version);
		$this->client->queueServiceActionCall("adminconsole_entryadmin", "getByFlavorId", "KalturaBaseEntry", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		\Kaltura\Client\ParseUtils::checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaBaseEntry");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\BaseEntry");
		return $resultObject;
	}

	/**
	 * Get base entry by ID with no filters.
	 * 	 
	 * 
	 * @return \Kaltura\Client\Plugin\AdminConsole\Type\TrackEntryListResponse
	 */
	function getTracks($entryId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->queueServiceActionCall("adminconsole_entryadmin", "getTracks", "KalturaTrackEntryListResponse", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		\Kaltura\Client\ParseUtils::checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaTrackEntryListResponse");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Plugin\\AdminConsole\\Type\\TrackEntryListResponse");
		return $resultObject;
	}

	/**
	 * Restore deleted entry.
	 * 	 
	 * 
	 * @return \Kaltura\Client\Type\BaseEntry
	 */
	function restoreDeletedEntry($entryId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->queueServiceActionCall("adminconsole_entryadmin", "restoreDeletedEntry", "KalturaBaseEntry", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		\Kaltura\Client\ParseUtils::checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaBaseEntry");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\BaseEntry");
		return $resultObject;
	}
}
