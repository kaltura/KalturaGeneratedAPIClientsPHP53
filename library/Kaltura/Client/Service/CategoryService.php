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
 * Add & Manage Categories
 * @package Kaltura
 * @subpackage Client
 */
class CategoryService extends \Kaltura\Client\ServiceBase
{
	function __construct(\Kaltura\Client\Client $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Add new Category
	 * 
	 * @return \Kaltura\Client\Type\Category
	 */
	function add(\Kaltura\Client\Type\Category $category)
	{
		$kparams = array();
		$this->client->addParam($kparams, "category", $category->toParams());
		$this->client->queueServiceActionCall("category", "add", "KalturaCategory", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaCategory");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\Category");
		return $resultObject;
	}

	/**
	 * 
	 * @return \Kaltura\Client\Type\BulkUpload
	 */
	function addFromBulkUpload($fileData, \Kaltura\Client\Type\BulkUploadJobData $bulkUploadData = null, \Kaltura\Client\Type\BulkUploadCategoryData $bulkUploadCategoryData = null)
	{
		$kparams = array();
		$kfiles = array();
		$this->client->addParam($kfiles, "fileData", $fileData);
		if ($bulkUploadData !== null)
			$this->client->addParam($kparams, "bulkUploadData", $bulkUploadData->toParams());
		if ($bulkUploadCategoryData !== null)
			$this->client->addParam($kparams, "bulkUploadCategoryData", $bulkUploadCategoryData->toParams());
		$this->client->queueServiceActionCall("category", "addFromBulkUpload", "KalturaBulkUpload", $kparams, $kfiles);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaBulkUpload");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\BulkUpload");
		return $resultObject;
	}

	/**
	 * Delete a Category
	 * 
	 */
	function delete($id, $moveEntriesToParentCategory = 1)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "moveEntriesToParentCategory", $moveEntriesToParentCategory);
		$this->client->queueServiceActionCall("category", "delete", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
	}

	/**
	 * Get Category by id
	 * 
	 * @return \Kaltura\Client\Type\Category
	 */
	function get($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("category", "get", "KalturaCategory", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaCategory");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\Category");
		return $resultObject;
	}

	/**
	 * Index Category by id
	 * 
	 * @return int
	 */
	function index($id, $shouldUpdate = true)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "shouldUpdate", $shouldUpdate);
		$this->client->queueServiceActionCall("category", "index", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = (int)\Kaltura\Client\ParseUtils::unmarshalSimpleType($resultXmlObject->result);
		return $resultObject;
	}

	/**
	 * List all categories
	 * 
	 * @return \Kaltura\Client\Type\CategoryListResponse
	 */
	function listAction(\Kaltura\Client\Type\CategoryFilter $filter = null, \Kaltura\Client\Type\FilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("category", "list", "KalturaCategoryListResponse", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaCategoryListResponse");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\CategoryListResponse");
		return $resultObject;
	}

	/**
	 * Move categories that belong to the same parent category to a target categroy - enabled only for ks with disable entitlement
	 * 
	 * @return \Kaltura\Client\Type\CategoryListResponse
	 */
	function move($categoryIds, $targetCategoryParentId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "categoryIds", $categoryIds);
		$this->client->addParam($kparams, "targetCategoryParentId", $targetCategoryParentId);
		$this->client->queueServiceActionCall("category", "move", "KalturaCategoryListResponse", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaCategoryListResponse");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\CategoryListResponse");
		return $resultObject;
	}

	/**
	 * Unlock categories
	 * 
	 */
	function unlockCategories()
	{
		$kparams = array();
		$this->client->queueServiceActionCall("category", "unlockCategories", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
	}

	/**
	 * Update Category
	 * 
	 * @return \Kaltura\Client\Type\Category
	 */
	function update($id, \Kaltura\Client\Type\Category $category)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "category", $category->toParams());
		$this->client->queueServiceActionCall("category", "update", "KalturaCategory", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaCategory");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\Category");
		return $resultObject;
	}
}
