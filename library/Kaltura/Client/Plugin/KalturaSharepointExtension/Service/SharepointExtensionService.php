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
// Copyright (C) 2006-2023  Kaltura Inc.
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
namespace Kaltura\Client\Plugin\KalturaSharepointExtension\Service;

/**
 * Kaltura Sharepoint Extension Service
 * @package Kaltura
 * @subpackage Client
 */
class SharepointExtensionService extends \Kaltura\Client\ServiceBase
{
	function __construct(\Kaltura\Client\Client $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Is this Kaltura-Sharepoint-Server-Plugin supports minimum version of $major.$minor.$build (which is required by the extension)
	 * 
	 * @return bool
	 */
	function isVersionSupported($serverMajor, $serverMinor, $serverBuild)
	{
		$kparams = array();
		$this->client->addParam($kparams, "serverMajor", $serverMajor);
		$this->client->addParam($kparams, "serverMinor", $serverMinor);
		$this->client->addParam($kparams, "serverBuild", $serverBuild);
		$this->client->queueServiceActionCall("kalturasharepointextension_sharepointextension", "isVersionSupported", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = (bool)\Kaltura\Client\ParseUtils::unmarshalSimpleType($resultXmlObject->result);
		return $resultObject;
	}

	/**
	 * list uiconfs for sharepoint extension
	 * 
	 * @return \Kaltura\Client\Type\UiConfListResponse
	 */
	function listUiconfs()
	{
		$kparams = array();
		$this->client->queueServiceActionCall("kalturasharepointextension_sharepointextension", "listUiconfs", "KalturaUiConfListResponse", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaUiConfListResponse");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\UiConfListResponse");
		return $resultObject;
	}
}
