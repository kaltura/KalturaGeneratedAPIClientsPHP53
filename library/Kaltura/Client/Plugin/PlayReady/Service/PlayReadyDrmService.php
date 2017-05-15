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
namespace Kaltura\Client\Plugin\PlayReady\Service;

/**
 * @package Kaltura
 * @subpackage Client
 */
class PlayReadyDrmService extends \Kaltura\Client\ServiceBase
{
	function __construct(\Kaltura\Client\Client $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Generate key id and content key for PlayReady encryption
	 * 
	 * @return \Kaltura\Client\Plugin\PlayReady\Type\PlayReadyContentKey
	 */
	function generateKey()
	{
		$kparams = array();
		$this->client->queueServiceActionCall("playready_playreadydrm", "generateKey", "KalturaPlayReadyContentKey", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaPlayReadyContentKey");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Plugin\\PlayReady\\Type\\PlayReadyContentKey");
		return $resultObject;
	}

	/**
	 * Get content keys for input key ids
	 * 
	 * @return array
	 */
	function getContentKeys($keyIds)
	{
		$kparams = array();
		$this->client->addParam($kparams, "keyIds", $keyIds);
		$this->client->queueServiceActionCall("playready_playreadydrm", "getContentKeys", "KalturaPlayReadyContentKey", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalArray($resultXmlObject->result, "KalturaPlayReadyContentKey");
		$this->client->validateObjectType($resultObject, "array");
		return $resultObject;
	}

	/**
	 * Get content key and key id for the given entry
	 * 
	 * @return \Kaltura\Client\Plugin\PlayReady\Type\PlayReadyContentKey
	 */
	function getEntryContentKey($entryId, $createIfMissing = false)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->addParam($kparams, "createIfMissing", $createIfMissing);
		$this->client->queueServiceActionCall("playready_playreadydrm", "getEntryContentKey", "KalturaPlayReadyContentKey", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaPlayReadyContentKey");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Plugin\\PlayReady\\Type\\PlayReadyContentKey");
		return $resultObject;
	}

	/**
	 * Get Play Ready policy and dates for license creation
	 * 
	 * @return \Kaltura\Client\Plugin\PlayReady\Type\PlayReadyLicenseDetails
	 */
	function getLicenseDetails($keyId, $deviceId, $deviceType, $entryId = null, $referrer = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "keyId", $keyId);
		$this->client->addParam($kparams, "deviceId", $deviceId);
		$this->client->addParam($kparams, "deviceType", $deviceType);
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->addParam($kparams, "referrer", $referrer);
		$this->client->queueServiceActionCall("playready_playreadydrm", "getLicenseDetails", "KalturaPlayReadyLicenseDetails", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaPlayReadyLicenseDetails");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Plugin\\PlayReady\\Type\\PlayReadyLicenseDetails");
		return $resultObject;
	}
}
