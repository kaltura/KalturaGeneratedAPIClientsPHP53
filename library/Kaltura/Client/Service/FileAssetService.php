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
 * Manage file assets
 * @package Kaltura
 * @subpackage Client
 */
class FileAssetService extends \Kaltura\Client\ServiceBase
{
	function __construct(\Kaltura\Client\Client $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Add new file asset
	 * 
	 * @return \Kaltura\Client\Type\FileAsset
	 */
	function add(\Kaltura\Client\Type\FileAsset $fileAsset)
	{
		$kparams = array();
		$this->client->addParam($kparams, "fileAsset", $fileAsset->toParams());
		$this->client->queueServiceActionCall("fileasset", "add", "KalturaFileAsset", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaFileAsset");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\FileAsset");
		return $resultObject;
	}

	/**
	 * Delete file asset by id
	 * 
	 */
	function delete($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("fileasset", "delete", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
	}

	/**
	 * Get file asset by id
	 * 
	 * @return \Kaltura\Client\Type\FileAsset
	 */
	function get($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("fileasset", "get", "KalturaFileAsset", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaFileAsset");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\FileAsset");
		return $resultObject;
	}

	/**
	 * List file assets by filter and pager
	 * 
	 * @return \Kaltura\Client\Type\FileAssetListResponse
	 */
	function listAction(\Kaltura\Client\Type\FileAssetFilter $filter, \Kaltura\Client\Type\FilterPager $pager = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("fileasset", "list", "KalturaFileAssetListResponse", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaFileAssetListResponse");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\FileAssetListResponse");
		return $resultObject;
	}

	/**
	 * Serve file asset by id
	 * 
	 * @return file
	 */
	function serve($id)
	{
		if ($this->client->isMultiRequest())
			throw $this->client->getClientException("Action is not supported as part of multi-request.", ClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall('fileasset', 'serve', null, $kparams);
		$resultObject = $this->client->getServeUrl();
		return $resultObject;
	}

	/**
	 * Set content of file asset
	 * 
	 * @return \Kaltura\Client\Type\FileAsset
	 */
	function setContent($id, \Kaltura\Client\Type\ContentResource $contentResource)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "contentResource", $contentResource->toParams());
		$this->client->queueServiceActionCall("fileasset", "setContent", "KalturaFileAsset", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaFileAsset");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\FileAsset");
		return $resultObject;
	}

	/**
	 * Update file asset by id
	 * 
	 * @return \Kaltura\Client\Type\FileAsset
	 */
	function update($id, \Kaltura\Client\Type\FileAsset $fileAsset)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "fileAsset", $fileAsset->toParams());
		$this->client->queueServiceActionCall("fileasset", "update", "KalturaFileAsset", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaFileAsset");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\FileAsset");
		return $resultObject;
	}
}
