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
namespace Kaltura\Client\Plugin\BusinessProcessNotification\Service;

/**
 * Business-process case service lets you get information about processes
 * @package Kaltura
 * @subpackage Client
 */
class BusinessProcessCaseService extends \Kaltura\Client\ServiceBase
{
	function __construct(\Kaltura\Client\Client $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Abort business-process case
	 * 
	 */
	function abort($objectType, $objectId, $businessProcessStartNotificationTemplateId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "objectType", $objectType);
		$this->client->addParam($kparams, "objectId", $objectId);
		$this->client->addParam($kparams, "businessProcessStartNotificationTemplateId", $businessProcessStartNotificationTemplateId);
		$this->client->queueServiceActionCall("businessprocessnotification_businessprocesscase", "abort", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
	}

	/**
	 * list business-process cases
	 * 
	 * @return array
	 */
	function listAction($objectType, $objectId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "objectType", $objectType);
		$this->client->addParam($kparams, "objectId", $objectId);
		$this->client->queueServiceActionCall("businessprocessnotification_businessprocesscase", "list", "KalturaBusinessProcessCase", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalArray($resultXmlObject->result, "KalturaBusinessProcessCase");
		$this->client->validateObjectType($resultObject, "array");
		return $resultObject;
	}

	/**
	 * Server business-process case diagram
	 * 
	 * @return file
	 */
	function serveDiagram($objectType, $objectId, $businessProcessStartNotificationTemplateId)
	{
		if ($this->client->isMultiRequest())
			throw $this->client->getClientException("Action is not supported as part of multi-request.", ClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "objectType", $objectType);
		$this->client->addParam($kparams, "objectId", $objectId);
		$this->client->addParam($kparams, "businessProcessStartNotificationTemplateId", $businessProcessStartNotificationTemplateId);
		$this->client->queueServiceActionCall('businessprocessnotification_businessprocesscase', 'serveDiagram', null, $kparams);
		$resultObject = $this->client->getServeUrl();
		return $resultObject;
	}
}
