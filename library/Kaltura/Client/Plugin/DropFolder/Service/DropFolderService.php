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
namespace Kaltura\Client\Plugin\DropFolder\Service;

/**
 * DropFolder service lets you create and manage drop folders
 * @package Kaltura
 * @subpackage Client
 */
class DropFolderService extends \Kaltura\Client\ServiceBase
{
	function __construct(\Kaltura\Client\Client $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Allows you to add a new KalturaDropFolder object
	 * 
	 * @return \Kaltura\Client\Plugin\DropFolder\Type\DropFolder
	 */
	function add(\Kaltura\Client\Plugin\DropFolder\Type\DropFolder $dropFolder)
	{
		$kparams = array();
		$this->client->addParam($kparams, "dropFolder", $dropFolder->toParams());
		$this->client->queueServiceActionCall("dropfolder_dropfolder", "add", "KalturaDropFolder", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaDropFolder");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Plugin\\DropFolder\\Type\\DropFolder");
		return $resultObject;
	}

	/**
	 * Mark the KalturaDropFolder object as deleted
	 * 
	 * @return \Kaltura\Client\Plugin\DropFolder\Type\DropFolder
	 */
	function delete($dropFolderId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "dropFolderId", $dropFolderId);
		$this->client->queueServiceActionCall("dropfolder_dropfolder", "delete", "KalturaDropFolder", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaDropFolder");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Plugin\\DropFolder\\Type\\DropFolder");
		return $resultObject;
	}

	/**
	 * freeExclusive KalturaDropFolder object
	 * 
	 * @return \Kaltura\Client\Plugin\DropFolder\Type\DropFolder
	 */
	function freeExclusiveDropFolder($dropFolderId, $status, $errorCode = null, $errorDescription = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "dropFolderId", $dropFolderId);
		$this->client->addParam($kparams, "status", $status);
		$this->client->addParam($kparams, "errorCode", $errorCode);
		$this->client->addParam($kparams, "errorDescription", $errorDescription);
		$this->client->queueServiceActionCall("dropfolder_dropfolder", "freeExclusiveDropFolder", "KalturaDropFolder", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaDropFolder");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Plugin\\DropFolder\\Type\\DropFolder");
		return $resultObject;
	}

	/**
	 * Retrieve a KalturaDropFolder object by ID
	 * 
	 * @return \Kaltura\Client\Plugin\DropFolder\Type\DropFolder
	 */
	function get($dropFolderId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "dropFolderId", $dropFolderId);
		$this->client->queueServiceActionCall("dropfolder_dropfolder", "get", "KalturaDropFolder", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaDropFolder");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Plugin\\DropFolder\\Type\\DropFolder");
		return $resultObject;
	}

	/**
	 * getExclusive KalturaDropFolder object
	 * 
	 * @return \Kaltura\Client\Plugin\DropFolder\Type\DropFolder
	 */
	function getExclusiveDropFolder($tag, $maxTime)
	{
		$kparams = array();
		$this->client->addParam($kparams, "tag", $tag);
		$this->client->addParam($kparams, "maxTime", $maxTime);
		$this->client->queueServiceActionCall("dropfolder_dropfolder", "getExclusiveDropFolder", "KalturaDropFolder", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaDropFolder");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Plugin\\DropFolder\\Type\\DropFolder");
		return $resultObject;
	}

	/**
	 * List KalturaDropFolder objects
	 * 
	 * @return \Kaltura\Client\Plugin\DropFolder\Type\DropFolderListResponse
	 */
	function listAction(\Kaltura\Client\Plugin\DropFolder\Type\DropFolderFilter $filter = null, \Kaltura\Client\Type\FilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("dropfolder_dropfolder", "list", "KalturaDropFolderListResponse", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaDropFolderListResponse");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Plugin\\DropFolder\\Type\\DropFolderListResponse");
		return $resultObject;
	}

	/**
	 * Update an existing KalturaDropFolder object
	 * 
	 * @return \Kaltura\Client\Plugin\DropFolder\Type\DropFolder
	 */
	function update($dropFolderId, \Kaltura\Client\Plugin\DropFolder\Type\DropFolder $dropFolder)
	{
		$kparams = array();
		$this->client->addParam($kparams, "dropFolderId", $dropFolderId);
		$this->client->addParam($kparams, "dropFolder", $dropFolder->toParams());
		$this->client->queueServiceActionCall("dropfolder_dropfolder", "update", "KalturaDropFolder", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaDropFolder");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Plugin\\DropFolder\\Type\\DropFolder");
		return $resultObject;
	}
}
