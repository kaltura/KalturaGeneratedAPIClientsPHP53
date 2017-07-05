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
class SeriesRecordingService extends \Kaltura\Client\ServiceBase
{
	function __construct(\Kaltura\Client\Client $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Issue a record request for a complete season or series
	 * 
	 * @return \Kaltura\Client\Type\SeriesRecording
	 */
	function add(\Kaltura\Client\Type\SeriesRecording $recording)
	{
		if ($this->client->isMultiRequest())
			throw $this->client->getClientException("Action is not supported as part of multi-request.", ClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "recording", $recording->toParams());
		$this->client->queueServiceActionCall("seriesrecording", "add", "KalturaSeriesRecording", $kparams);
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaSeriesRecording");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\SeriesRecording");
		return $resultObject;
	}

	/**
	 * Cancel a previously requested series recording. Cancel series recording can be called for recording in status Scheduled or Recording Only
	 * 
	 * @return \Kaltura\Client\Type\SeriesRecording
	 */
	function cancel($id)
	{
		if ($this->client->isMultiRequest())
			throw $this->client->getClientException("Action is not supported as part of multi-request.", ClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("seriesrecording", "cancel", "KalturaSeriesRecording", $kparams);
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaSeriesRecording");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\SeriesRecording");
		return $resultObject;
	}

	/**
	 * Cancel EPG recording that was recorded as part of series
	 * 
	 * @return \Kaltura\Client\Type\SeriesRecording
	 */
	function cancelByEpgId($id, $epgId)
	{
		if ($this->client->isMultiRequest())
			throw $this->client->getClientException("Action is not supported as part of multi-request.", ClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "epgId", $epgId);
		$this->client->queueServiceActionCall("seriesrecording", "cancelByEpgId", "KalturaSeriesRecording", $kparams);
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaSeriesRecording");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\SeriesRecording");
		return $resultObject;
	}

	/**
	 * Cancel Season recording epgs that was recorded as part of series
	 * 
	 * @return \Kaltura\Client\Type\SeriesRecording
	 */
	function cancelBySeasonNumber($id, $seasonNumber)
	{
		if ($this->client->isMultiRequest())
			throw $this->client->getClientException("Action is not supported as part of multi-request.", ClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "seasonNumber", $seasonNumber);
		$this->client->queueServiceActionCall("seriesrecording", "cancelBySeasonNumber", "KalturaSeriesRecording", $kparams);
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaSeriesRecording");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\SeriesRecording");
		return $resultObject;
	}

	/**
	 * Delete series recording(s). Delete series recording can be called recordings in any status
	 * 
	 * @return \Kaltura\Client\Type\SeriesRecording
	 */
	function delete($id)
	{
		if ($this->client->isMultiRequest())
			throw $this->client->getClientException("Action is not supported as part of multi-request.", ClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("seriesrecording", "delete", "KalturaSeriesRecording", $kparams);
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaSeriesRecording");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\SeriesRecording");
		return $resultObject;
	}

	/**
	 * Delete Season recording epgs that was recorded as part of series
	 * 
	 * @return \Kaltura\Client\Type\SeriesRecording
	 */
	function deleteBySeasonNumber($id, $seasonNumber)
	{
		if ($this->client->isMultiRequest())
			throw $this->client->getClientException("Action is not supported as part of multi-request.", ClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "seasonNumber", $seasonNumber);
		$this->client->queueServiceActionCall("seriesrecording", "deleteBySeasonNumber", "KalturaSeriesRecording", $kparams);
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaSeriesRecording");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\SeriesRecording");
		return $resultObject;
	}

	/**
	 * Return a list of series recordings for the household with optional filter by status and KSQL.
	 * 
	 * @return \Kaltura\Client\Type\SeriesRecordingListResponse
	 */
	function listAction(\Kaltura\Client\Type\SeriesRecordingFilter $filter = null)
	{
		if ($this->client->isMultiRequest())
			throw $this->client->getClientException("Action is not supported as part of multi-request.", ClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		$this->client->queueServiceActionCall("seriesrecording", "list", "KalturaSeriesRecordingListResponse", $kparams);
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaSeriesRecordingListResponse");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\SeriesRecordingListResponse");
		return $resultObject;
	}
}
