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
 * DropFolderFile service lets you create and manage drop folder files
 * @package Kaltura
 * @subpackage Client
 */
class DropFolderFileService extends \Kaltura\Client\ServiceBase
{
	function __construct(\Kaltura\Client\Client $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Allows you to add a new KalturaDropFolderFile object
	 * 
	 * @return \Kaltura\Client\Plugin\DropFolder\Type\DropFolderFile
	 */
	function add(\Kaltura\Client\Plugin\DropFolder\Type\DropFolderFile $dropFolderFile)
	{
		$kparams = array();
		$this->client->addParam($kparams, "dropFolderFile", $dropFolderFile->toParams());
		$this->client->queueServiceActionCall("dropfolder_dropfolderfile", "add", "KalturaDropFolderFile", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaDropFolderFile");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Plugin\\DropFolder\\Type\\DropFolderFile");
		return $resultObject;
	}

	/**
	 * Mark the KalturaDropFolderFile object as deleted
	 * 
	 * @return \Kaltura\Client\Plugin\DropFolder\Type\DropFolderFile
	 */
	function delete($dropFolderFileId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "dropFolderFileId", $dropFolderFileId);
		$this->client->queueServiceActionCall("dropfolder_dropfolderfile", "delete", "KalturaDropFolderFile", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaDropFolderFile");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Plugin\\DropFolder\\Type\\DropFolderFile");
		return $resultObject;
	}

	/**
	 * Retrieve a KalturaDropFolderFile object by ID
	 * 
	 * @return \Kaltura\Client\Plugin\DropFolder\Type\DropFolderFile
	 */
	function get($dropFolderFileId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "dropFolderFileId", $dropFolderFileId);
		$this->client->queueServiceActionCall("dropfolder_dropfolderfile", "get", "KalturaDropFolderFile", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaDropFolderFile");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Plugin\\DropFolder\\Type\\DropFolderFile");
		return $resultObject;
	}

	/**
	 * Set the KalturaDropFolderFile status to ignore (KalturaDropFolderFileStatus::IGNORE)
	 * 
	 * @return \Kaltura\Client\Plugin\DropFolder\Type\DropFolderFile
	 */
	function ignore($dropFolderFileId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "dropFolderFileId", $dropFolderFileId);
		$this->client->queueServiceActionCall("dropfolder_dropfolderfile", "ignore", "KalturaDropFolderFile", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaDropFolderFile");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Plugin\\DropFolder\\Type\\DropFolderFile");
		return $resultObject;
	}

	/**
	 * List KalturaDropFolderFile objects
	 * 
	 * @return \Kaltura\Client\Plugin\DropFolder\Type\DropFolderFileListResponse
	 */
	function listAction(\Kaltura\Client\Plugin\DropFolder\Type\DropFolderFileFilter $filter = null, \Kaltura\Client\Type\FilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("dropfolder_dropfolderfile", "list", "KalturaDropFolderFileListResponse", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaDropFolderFileListResponse");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Plugin\\DropFolder\\Type\\DropFolderFileListResponse");
		return $resultObject;
	}

	/**
	 * Update an existing KalturaDropFolderFile object
	 * 
	 * @return \Kaltura\Client\Plugin\DropFolder\Type\DropFolderFile
	 */
	function update($dropFolderFileId, \Kaltura\Client\Plugin\DropFolder\Type\DropFolderFile $dropFolderFile)
	{
		$kparams = array();
		$this->client->addParam($kparams, "dropFolderFileId", $dropFolderFileId);
		$this->client->addParam($kparams, "dropFolderFile", $dropFolderFile->toParams());
		$this->client->queueServiceActionCall("dropfolder_dropfolderfile", "update", "KalturaDropFolderFile", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaDropFolderFile");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Plugin\\DropFolder\\Type\\DropFolderFile");
		return $resultObject;
	}

	/**
	 * Update status of KalturaDropFolderFile
	 * 
	 * @return \Kaltura\Client\Plugin\DropFolder\Type\DropFolderFile
	 */
	function updateStatus($dropFolderFileId, $status)
	{
		$kparams = array();
		$this->client->addParam($kparams, "dropFolderFileId", $dropFolderFileId);
		$this->client->addParam($kparams, "status", $status);
		$this->client->queueServiceActionCall("dropfolder_dropfolderfile", "updateStatus", "KalturaDropFolderFile", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaDropFolderFile");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Plugin\\DropFolder\\Type\\DropFolderFile");
		return $resultObject;
	}
}
