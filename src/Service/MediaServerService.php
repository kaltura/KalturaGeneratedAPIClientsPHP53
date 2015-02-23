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
 * Manage media servers
 *  
 * @package Kaltura
 * @subpackage Client
 */
class MediaServerService extends \Kaltura\Client\ServiceBase
{
	function __construct(\Kaltura\Client\Client $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Get media server by hostname
	 * 	 
	 * 
	 * @return \Kaltura\Client\Type\MediaServer
	 */
	function get($hostname)
	{
		$kparams = array();
		$this->client->addParam($kparams, "hostname", $hostname);
		$this->client->queueServiceActionCall("mediaserver", "get", "KalturaMediaServer", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		\Kaltura\Client\ParseUtils::checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaMediaServer");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\MediaServer");
		return $resultObject;
	}

	/**
	 * Update media server status
	 * 	 
	 * 
	 * @return \Kaltura\Client\Type\MediaServer
	 */
	function reportStatus($hostname, \Kaltura\Client\Type\MediaServerStatus $mediaServerStatus)
	{
		$kparams = array();
		$this->client->addParam($kparams, "hostname", $hostname);
		$this->client->addParam($kparams, "mediaServerStatus", $mediaServerStatus->toParams());
		$this->client->queueServiceActionCall("mediaserver", "reportStatus", "KalturaMediaServer", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		\Kaltura\Client\ParseUtils::checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaMediaServer");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\MediaServer");
		return $resultObject;
	}
}
