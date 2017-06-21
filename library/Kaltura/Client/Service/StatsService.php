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
 * Stats Service
 * @package Kaltura
 * @subpackage Client
 */
class StatsService extends \Kaltura\Client\ServiceBase
{
	function __construct(\Kaltura\Client\Client $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Will write to the event log a single line representing the event
	 * 	 client version - will help interprete the line structure. different client versions might have slightly different data/data formats in the line
	 * event_id - number is the row number in yuval's excel
	 * datetime - same format as MySql's datetime - can change and should reflect the time zone
	 * session id - can be some big random number or guid
	 * partner id
	 * entry id
	 * unique viewer
	 * widget id
	 * ui_conf id
	 * uid - the puser id as set by the ppartner
	 * current point - in milliseconds
	 * duration - milliseconds
	 * user ip
	 * process duration - in milliseconds
	 * control id
	 * seek
	 * new point
	 * referrer
	 * 	
	 * 	
	 * 	 KalturaStatsEvent $event
	 * 
	 * @return bool
	 */
	function collect(\Kaltura\Client\Type\StatsEvent $event)
	{
		$kparams = array();
		$this->client->addParam($kparams, "event", $event->toParams());
		$this->client->queueServiceActionCall("stats", "collect", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = (bool)\Kaltura\Client\ParseUtils::unmarshalSimpleType($resultXmlObject->result);
		return $resultObject;
	}

	/**
	 * Will collect the kmcEvent sent form the KMC client
	 * 	 // this will actually be an empty function because all events will be sent using GET and will anyway be logged in the apache log
	 * 
	 */
	function kmcCollect(\Kaltura\Client\Type\StatsKmcEvent $kmcEvent)
	{
		$kparams = array();
		$this->client->addParam($kparams, "kmcEvent", $kmcEvent->toParams());
		$this->client->queueServiceActionCall("stats", "kmcCollect", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
	}

	/**
	 * Use this action to report device capabilities to the kaltura server.
	 * 
	 */
	function reportDeviceCapabilities($data)
	{
		$kparams = array();
		$this->client->addParam($kparams, "data", $data);
		$this->client->queueServiceActionCall("stats", "reportDeviceCapabilities", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
	}

	/**
	 * Use this action to report errors to the kaltura server.
	 * 
	 */
	function reportError($errorCode, $errorMessage)
	{
		$kparams = array();
		$this->client->addParam($kparams, "errorCode", $errorCode);
		$this->client->addParam($kparams, "errorMessage", $errorMessage);
		$this->client->queueServiceActionCall("stats", "reportError", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
	}

	/**
	 * 
	 * @return \Kaltura\Client\Type\CEError
	 */
	function reportKceError(\Kaltura\Client\Type\CEError $kalturaCEError)
	{
		$kparams = array();
		$this->client->addParam($kparams, "kalturaCEError", $kalturaCEError->toParams());
		$this->client->queueServiceActionCall("stats", "reportKceError", "KalturaCEError", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaCEError");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\CEError");
		return $resultObject;
	}
}
