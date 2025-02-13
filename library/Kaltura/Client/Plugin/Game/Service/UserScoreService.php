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
namespace Kaltura\Client\Plugin\Game\Service;

/**
 * @package Kaltura
 * @subpackage Client
 */
class UserScoreService extends \Kaltura\Client\ServiceBase
{
	function __construct(\Kaltura\Client\Client $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * 
	 * @return \Kaltura\Client\Plugin\Game\Type\UserScorePropertiesResponse
	 */
	function delete($gameObjectId, $gameObjectType, $userId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "gameObjectId", $gameObjectId);
		$this->client->addParam($kparams, "gameObjectType", $gameObjectType);
		$this->client->addParam($kparams, "userId", $userId);
		$this->client->queueServiceActionCall("game_userscore", "delete", "KalturaUserScorePropertiesResponse", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaUserScorePropertiesResponse");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Plugin\\Game\\Type\\UserScorePropertiesResponse");
		return $resultObject;
	}

	/**
	 * 
	 * @return \Kaltura\Client\Plugin\Game\Type\UserScorePropertiesResponse
	 */
	function listAction(\Kaltura\Client\Plugin\Game\Type\UserScorePropertiesFilter $filter, \Kaltura\Client\Type\FilterPager $pager = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("game_userscore", "list", "KalturaUserScorePropertiesResponse", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaUserScorePropertiesResponse");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Plugin\\Game\\Type\\UserScorePropertiesResponse");
		return $resultObject;
	}

	/**
	 * 
	 * @return \Kaltura\Client\Plugin\Game\Type\UserScorePropertiesResponse
	 */
	function update($gameObjectId, $gameObjectType, $userId, $score)
	{
		$kparams = array();
		$this->client->addParam($kparams, "gameObjectId", $gameObjectId);
		$this->client->addParam($kparams, "gameObjectType", $gameObjectType);
		$this->client->addParam($kparams, "userId", $userId);
		$this->client->addParam($kparams, "score", $score);
		$this->client->queueServiceActionCall("game_userscore", "update", "KalturaUserScorePropertiesResponse", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaUserScorePropertiesResponse");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Plugin\\Game\\Type\\UserScorePropertiesResponse");
		return $resultObject;
	}
}
