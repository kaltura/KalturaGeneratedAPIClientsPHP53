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
namespace Kaltura\Client\Plugin\BulkUpload\Service;

/**
 * Bulk upload service is used to upload & manage bulk uploads
 *  
 * @package Kaltura
 * @subpackage Client
 */
class BulkService extends \Kaltura\Client\ServiceBase
{
	function __construct(\Kaltura\Client\Client $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Get bulk upload batch job by id
	 * 	 
	 * 
	 * @return \Kaltura\Client\Type\BulkUpload
	 */
	function get($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("bulkupload_bulk", "get", "KalturaBulkUpload", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		\Kaltura\Client\ParseUtils::checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaBulkUpload");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\BulkUpload");
		return $resultObject;
	}

	/**
	 * List bulk upload batch jobs
	 * 	 
	 * 
	 * @return \Kaltura\Client\Type\BulkUploadListResponse
	 */
	function listAction(\Kaltura\Client\Type\BulkUploadFilter $bulkUploadFilter = null, \Kaltura\Client\Type\FilterPager $pager = null)
	{
		$kparams = array();
		if ($bulkUploadFilter !== null)
			$this->client->addParam($kparams, "bulkUploadFilter", $bulkUploadFilter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("bulkupload_bulk", "list", "KalturaBulkUploadListResponse", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		\Kaltura\Client\ParseUtils::checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaBulkUploadListResponse");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\BulkUploadListResponse");
		return $resultObject;
	}

	/**
	 * serve action returns the original file.
	 * 	 
	 * 
	 * @return file
	 */
	function serve($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall('bulkupload_bulk', 'serve', null, $kparams);
		$resultObject = $this->client->getServeUrl();
		return $resultObject;
	}

	/**
	 * serveLog action returns the log file for the bulk-upload job.
	 * 	 
	 * 
	 * @return file
	 */
	function serveLog($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall('bulkupload_bulk', 'serveLog', null, $kparams);
		$resultObject = $this->client->getServeUrl();
		return $resultObject;
	}

	/**
	 * Aborts the bulk upload and all its child jobs
	 * 	 
	 * 
	 * @return \Kaltura\Client\Type\BulkUpload
	 */
	function abort($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("bulkupload_bulk", "abort", "KalturaBulkUpload", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		\Kaltura\Client\ParseUtils::checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaBulkUpload");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\BulkUpload");
		return $resultObject;
	}
}
