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
namespace Kaltura\Client\Service;

/**
 * @package Kaltura
 * @subpackage Client
 */
class PinService extends \Kaltura\Client\ServiceBase
{
	function __construct(\Kaltura\Client\Client $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Retrieve the parental or purchase PIN that applies for the household or user. Includes specification of where the PIN was defined at – account, household or user  level
	 * 
	 * @return \Kaltura\Client\Type\Pin
	 */
	function get($by, $type, $ruleId = null)
	{
		if ($this->client->isMultiRequest())
			throw $this->client->getClientException("Action is not supported as part of multi-request.", ClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "by", $by);
		$this->client->addParam($kparams, "type", $type);
		$this->client->addParam($kparams, "ruleId", $ruleId);
		$this->client->queueServiceActionCall("pin", "get", "KalturaPin", $kparams);
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaPin");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\Pin");
		return $resultObject;
	}

	/**
	 * Set the parental or purchase PIN that applies for the user or the household.
	 * 
	 * @return \Kaltura\Client\Type\Pin
	 */
	function update($by, $type, \Kaltura\Client\Type\Pin $pin, $ruleId = null)
	{
		if ($this->client->isMultiRequest())
			throw $this->client->getClientException("Action is not supported as part of multi-request.", ClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "by", $by);
		$this->client->addParam($kparams, "type", $type);
		$this->client->addParam($kparams, "pin", $pin->toParams());
		$this->client->addParam($kparams, "ruleId", $ruleId);
		$this->client->queueServiceActionCall("pin", "update", "KalturaPin", $kparams);
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaPin");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\Pin");
		return $resultObject;
	}

	/**
	 * Validate a purchase or parental PIN for a user.
	 * 
	 * @return bool
	 */
	function validate($pin, $type, $ruleId = null)
	{
		if ($this->client->isMultiRequest())
			throw $this->client->getClientException("Action is not supported as part of multi-request.", ClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "pin", $pin);
		$this->client->addParam($kparams, "type", $type);
		$this->client->addParam($kparams, "ruleId", $ruleId);
		$this->client->queueServiceActionCall("pin", "validate", null, $kparams);
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = (bool)\Kaltura\Client\ParseUtils::unmarshalSimpleType($resultXmlObject->result);
		return $resultObject;
	}
}
