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
// Copyright (C) 2006-2020  Kaltura Inc.
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
namespace Kaltura\Client\Plugin\Interactivity\Service;

/**
 * @package Kaltura
 * @subpackage Client
 */
class VolatileInteractivityService extends \Kaltura\Client\ServiceBase
{
	function __construct(\Kaltura\Client\Client $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * add a volatile interactivity object
	 * 
	 * @return \Kaltura\Client\Plugin\Interactivity\Type\VolatileInteractivity
	 */
	function add($entryId, \Kaltura\Client\Plugin\Interactivity\Type\VolatileInteractivity $kalturaVolatileInteractivity)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->addParam($kparams, "kalturaVolatileInteractivity", $kalturaVolatileInteractivity->toParams());
		$this->client->queueServiceActionCall("interactivity_volatileinteractivity", "add", "KalturaVolatileInteractivity", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaVolatileInteractivity");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Plugin\\Interactivity\\Type\\VolatileInteractivity");
		return $resultObject;
	}

	/**
	 * Delete a volatile interactivity object by entry id
	 * 
	 */
	function delete($entryId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->queueServiceActionCall("interactivity_volatileinteractivity", "delete", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
	}

	/**
	 * Retrieve a volatile interactivity object by entry id
	 * 
	 * @return \Kaltura\Client\Plugin\Interactivity\Type\VolatileInteractivity
	 */
	function get($entryId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->queueServiceActionCall("interactivity_volatileinteractivity", "get", "KalturaVolatileInteractivity", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaVolatileInteractivity");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Plugin\\Interactivity\\Type\\VolatileInteractivity");
		return $resultObject;
	}

	/**
	 * Update a volatile interactivity object
	 * 
	 * @return \Kaltura\Client\Plugin\Interactivity\Type\VolatileInteractivity
	 */
	function update($entryId, $version, \Kaltura\Client\Plugin\Interactivity\Type\VolatileInteractivity $kalturaVolatileInteractivity)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->addParam($kparams, "version", $version);
		$this->client->addParam($kparams, "kalturaVolatileInteractivity", $kalturaVolatileInteractivity->toParams());
		$this->client->queueServiceActionCall("interactivity_volatileinteractivity", "update", "KalturaVolatileInteractivity", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaVolatileInteractivity");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Plugin\\Interactivity\\Type\\VolatileInteractivity");
		return $resultObject;
	}
}
