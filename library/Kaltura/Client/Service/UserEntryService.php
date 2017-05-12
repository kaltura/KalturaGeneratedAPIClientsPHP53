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
class UserEntryService extends \Kaltura\Client\ServiceBase
{
	function __construct(\Kaltura\Client\Client $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Adds a user_entry to the Kaltura DB.
	 * 
	 * @return \Kaltura\Client\Type\UserEntry
	 */
	function add(\Kaltura\Client\Type\UserEntry $userEntry)
	{
		$kparams = array();
		$this->client->addParam($kparams, "userEntry", $userEntry->toParams());
		$this->client->queueServiceActionCall("userentry", "add", "KalturaUserEntry", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaUserEntry");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\UserEntry");
		return $resultObject;
	}

	/**
	 * 
	 * @return int
	 */
	function bulkDelete(\Kaltura\Client\Type\UserEntryFilter $filter)
	{
		$kparams = array();
		$this->client->addParam($kparams, "filter", $filter->toParams());
		$this->client->queueServiceActionCall("userentry", "bulkDelete", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = (int)\Kaltura\Client\ParseUtils::unmarshalSimpleType($resultXmlObject->result);
		return $resultObject;
	}

	/**
	 * 
	 * @return \Kaltura\Client\Type\UserEntry
	 */
	function delete($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("userentry", "delete", "KalturaUserEntry", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaUserEntry");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\UserEntry");
		return $resultObject;
	}

	/**
	 * 
	 * @return \Kaltura\Client\Type\UserEntry
	 */
	function get($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("userentry", "get", "KalturaUserEntry", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaUserEntry");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\UserEntry");
		return $resultObject;
	}

	/**
	 * 
	 * @return \Kaltura\Client\Type\UserEntryListResponse
	 */
	function listAction(\Kaltura\Client\Type\UserEntryFilter $filter, \Kaltura\Client\Type\FilterPager $pager = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("userentry", "list", "KalturaUserEntryListResponse", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaUserEntryListResponse");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\UserEntryListResponse");
		return $resultObject;
	}

	/**
	 * Submits the quiz so that it's status will be submitted and calculates the score for the quiz
	 * 
	 * @return \Kaltura\Client\Type\QuizUserEntry
	 */
	function submitQuiz($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("userentry", "submitQuiz", "KalturaQuizUserEntry", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaQuizUserEntry");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\QuizUserEntry");
		return $resultObject;
	}

	/**
	 * 
	 */
	function update($id, \Kaltura\Client\Type\UserEntry $userEntry)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "userEntry", $userEntry->toParams());
		$this->client->queueServiceActionCall("userentry", "update", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
	}
}
