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
namespace Kaltura\Client\Plugin\Quiz\Service;

/**
 * Allows user to handle quizzes
 * @package Kaltura
 * @subpackage Client
 */
class QuizService extends \Kaltura\Client\ServiceBase
{
	function __construct(\Kaltura\Client\Client $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Allows to add a quiz to an entry
	 * 
	 * @return \Kaltura\Client\Plugin\Quiz\Type\Quiz
	 */
	function add($entryId, \Kaltura\Client\Plugin\Quiz\Type\Quiz $quiz)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->addParam($kparams, "quiz", $quiz->toParams());
		$this->client->queueServiceActionCall("quiz_quiz", "add", "KalturaQuiz", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaQuiz");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Plugin\\Quiz\\Type\\Quiz");
		return $resultObject;
	}

	/**
	 * Allows to get a quiz
	 * 
	 * @return \Kaltura\Client\Plugin\Quiz\Type\Quiz
	 */
	function get($entryId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->queueServiceActionCall("quiz_quiz", "get", "KalturaQuiz", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaQuiz");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Plugin\\Quiz\\Type\\Quiz");
		return $resultObject;
	}

	/**
	 * sends a with an api request for pdf from quiz object
	 * 
	 * @return string
	 */
	function getUrl($entryId, $quizOutputType)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->addParam($kparams, "quizOutputType", $quizOutputType);
		$this->client->queueServiceActionCall("quiz_quiz", "getUrl", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = (String)\Kaltura\Client\ParseUtils::unmarshalSimpleType($resultXmlObject->result);
		return $resultObject;
	}

	/**
	 * List quiz objects by filter and pager
	 * 
	 * @return \Kaltura\Client\Plugin\Quiz\Type\QuizListResponse
	 */
	function listAction(\Kaltura\Client\Plugin\Quiz\Type\QuizFilter $filter = null, \Kaltura\Client\Type\FilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("quiz_quiz", "list", "KalturaQuizListResponse", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaQuizListResponse");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Plugin\\Quiz\\Type\\QuizListResponse");
		return $resultObject;
	}

	/**
	 * creates a pdf from quiz object
	 * 	 The Output type defines the file format in which the quiz will be generated
	 * 	 Currently only PDF files are supported
	 * 
	 * @return file
	 */
	function serve($entryId, $quizOutputType)
	{
		if ($this->client->isMultiRequest())
			throw $this->client->getClientException("Action is not supported as part of multi-request.", ClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->addParam($kparams, "quizOutputType", $quizOutputType);
		$this->client->queueServiceActionCall('quiz_quiz', 'serve', null, $kparams);
		$resultObject = $this->client->getServeUrl();
		return $resultObject;
	}

	/**
	 * Allows to update a quiz
	 * 
	 * @return \Kaltura\Client\Plugin\Quiz\Type\Quiz
	 */
	function update($entryId, \Kaltura\Client\Plugin\Quiz\Type\Quiz $quiz)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->addParam($kparams, "quiz", $quiz->toParams());
		$this->client->queueServiceActionCall("quiz_quiz", "update", "KalturaQuiz", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaQuiz");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Plugin\\Quiz\\Type\\Quiz");
		return $resultObject;
	}
}
