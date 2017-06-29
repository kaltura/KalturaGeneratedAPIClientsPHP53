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
namespace Kaltura\Client\Plugin\Poll\Service;

/**
 * Poll service
 *  The poll service works against the cache entirely no DB instance should be used here
 * @package Kaltura
 * @subpackage Client
 */
class PollService extends \Kaltura\Client\ServiceBase
{
	function __construct(\Kaltura\Client\Client $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Add Action
	 * 
	 * @return string
	 */
	function add($pollType = "SINGLE_ANONYMOUS")
	{
		$kparams = array();
		$this->client->addParam($kparams, "pollType", $pollType);
		$this->client->queueServiceActionCall("poll_poll", "add", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = (String)\Kaltura\Client\ParseUtils::unmarshalSimpleType($resultXmlObject->result);
		return $resultObject;
	}

	/**
	 * Vote Action
	 * 
	 * @return string
	 */
	function getVote($pollId, $userId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "pollId", $pollId);
		$this->client->addParam($kparams, "userId", $userId);
		$this->client->queueServiceActionCall("poll_poll", "getVote", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = (String)\Kaltura\Client\ParseUtils::unmarshalSimpleType($resultXmlObject->result);
		return $resultObject;
	}

	/**
	 * Get Votes Action
	 * 
	 * @return string
	 */
	function getVotes($pollId, $answerIds)
	{
		$kparams = array();
		$this->client->addParam($kparams, "pollId", $pollId);
		$this->client->addParam($kparams, "answerIds", $answerIds);
		$this->client->queueServiceActionCall("poll_poll", "getVotes", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = (String)\Kaltura\Client\ParseUtils::unmarshalSimpleType($resultXmlObject->result);
		return $resultObject;
	}

	/**
	 * Get resetVotes Action
	 * 
	 */
	function resetVotes($pollId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "pollId", $pollId);
		$this->client->queueServiceActionCall("poll_poll", "resetVotes", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
	}

	/**
	 * Vote Action
	 * 
	 * @return string
	 */
	function vote($pollId, $userId, $answerIds)
	{
		$kparams = array();
		$this->client->addParam($kparams, "pollId", $pollId);
		$this->client->addParam($kparams, "userId", $userId);
		$this->client->addParam($kparams, "answerIds", $answerIds);
		$this->client->queueServiceActionCall("poll_poll", "vote", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = (String)\Kaltura\Client\ParseUtils::unmarshalSimpleType($resultXmlObject->result);
		return $resultObject;
	}
}
