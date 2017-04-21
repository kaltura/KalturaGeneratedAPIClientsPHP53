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
 * Media service lets you upload and manage media files (images / videos & audio)
 * @package Kaltura
 * @subpackage Client
 */
class MediaService extends \Kaltura\Client\ServiceBase
{
	function __construct(\Kaltura\Client\Client $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Add entry
	 * 
	 * @return \Kaltura\Client\Type\MediaEntry
	 */
	function add(\Kaltura\Client\Type\MediaEntry $entry)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entry", $entry->toParams());
		$this->client->queueServiceActionCall("media", "add", "KalturaMediaEntry", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaMediaEntry");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\MediaEntry");
		return $resultObject;
	}

	/**
	 * Add content to media entry which is not yet associated with content (therefore is in status NO_CONTENT).
	 *      If the requirement is to replace the entry's associated content, use action updateContent.
	 * 
	 * @return \Kaltura\Client\Type\MediaEntry
	 */
	function addContent($entryId, \Kaltura\Client\Type\Resource $resource = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		if ($resource !== null)
			$this->client->addParam($kparams, "resource", $resource->toParams());
		$this->client->queueServiceActionCall("media", "addContent", "KalturaMediaEntry", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaMediaEntry");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\MediaEntry");
		return $resultObject;
	}

	/**
	 * Adds new media entry by importing an HTTP or FTP URL.
	 * 	 The entry will be queued for import and then for conversion.
	 * 	 This action should be exposed only to the batches
	 * 
	 * @return \Kaltura\Client\Type\MediaEntry
	 */
	function addFromBulk(\Kaltura\Client\Type\MediaEntry $mediaEntry, $url, $bulkUploadId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "mediaEntry", $mediaEntry->toParams());
		$this->client->addParam($kparams, "url", $url);
		$this->client->addParam($kparams, "bulkUploadId", $bulkUploadId);
		$this->client->queueServiceActionCall("media", "addFromBulk", "KalturaMediaEntry", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaMediaEntry");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\MediaEntry");
		return $resultObject;
	}

	/**
	 * Copy entry into new entry
	 * 
	 * @return \Kaltura\Client\Type\MediaEntry
	 */
	function addFromEntry($sourceEntryId, \Kaltura\Client\Type\MediaEntry $mediaEntry = null, $sourceFlavorParamsId = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "sourceEntryId", $sourceEntryId);
		if ($mediaEntry !== null)
			$this->client->addParam($kparams, "mediaEntry", $mediaEntry->toParams());
		$this->client->addParam($kparams, "sourceFlavorParamsId", $sourceFlavorParamsId);
		$this->client->queueServiceActionCall("media", "addFromEntry", "KalturaMediaEntry", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaMediaEntry");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\MediaEntry");
		return $resultObject;
	}

	/**
	 * Copy flavor asset into new entry
	 * 
	 * @return \Kaltura\Client\Type\MediaEntry
	 */
	function addFromFlavorAsset($sourceFlavorAssetId, \Kaltura\Client\Type\MediaEntry $mediaEntry = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "sourceFlavorAssetId", $sourceFlavorAssetId);
		if ($mediaEntry !== null)
			$this->client->addParam($kparams, "mediaEntry", $mediaEntry->toParams());
		$this->client->queueServiceActionCall("media", "addFromFlavorAsset", "KalturaMediaEntry", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaMediaEntry");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\MediaEntry");
		return $resultObject;
	}

	/**
	 * Add new entry after the file was recored on the server and the token id exists
	 * 
	 * @return \Kaltura\Client\Type\MediaEntry
	 */
	function addFromRecordedWebcam(\Kaltura\Client\Type\MediaEntry $mediaEntry, $webcamTokenId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "mediaEntry", $mediaEntry->toParams());
		$this->client->addParam($kparams, "webcamTokenId", $webcamTokenId);
		$this->client->queueServiceActionCall("media", "addFromRecordedWebcam", "KalturaMediaEntry", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaMediaEntry");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\MediaEntry");
		return $resultObject;
	}

	/**
	 * Adds new media entry by importing the media file from a search provider.
	 * 	 This action should be used with the search service result.
	 * 
	 * @return \Kaltura\Client\Type\MediaEntry
	 */
	function addFromSearchResult(\Kaltura\Client\Type\MediaEntry $mediaEntry = null, \Kaltura\Client\Type\SearchResult $searchResult = null)
	{
		$kparams = array();
		if ($mediaEntry !== null)
			$this->client->addParam($kparams, "mediaEntry", $mediaEntry->toParams());
		if ($searchResult !== null)
			$this->client->addParam($kparams, "searchResult", $searchResult->toParams());
		$this->client->queueServiceActionCall("media", "addFromSearchResult", "KalturaMediaEntry", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaMediaEntry");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\MediaEntry");
		return $resultObject;
	}

	/**
	 * Add new entry after the specific media file was uploaded and the upload token id exists
	 * 
	 * @return \Kaltura\Client\Type\MediaEntry
	 */
	function addFromUploadedFile(\Kaltura\Client\Type\MediaEntry $mediaEntry, $uploadTokenId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "mediaEntry", $mediaEntry->toParams());
		$this->client->addParam($kparams, "uploadTokenId", $uploadTokenId);
		$this->client->queueServiceActionCall("media", "addFromUploadedFile", "KalturaMediaEntry", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaMediaEntry");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\MediaEntry");
		return $resultObject;
	}

	/**
	 * Adds new media entry by importing an HTTP or FTP URL.
	 * 	 The entry will be queued for import and then for conversion.
	 * 
	 * @return \Kaltura\Client\Type\MediaEntry
	 */
	function addFromUrl(\Kaltura\Client\Type\MediaEntry $mediaEntry, $url)
	{
		$kparams = array();
		$this->client->addParam($kparams, "mediaEntry", $mediaEntry->toParams());
		$this->client->addParam($kparams, "url", $url);
		$this->client->queueServiceActionCall("media", "addFromUrl", "KalturaMediaEntry", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaMediaEntry");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\MediaEntry");
		return $resultObject;
	}

	/**
	 * Anonymously rank a media entry, no validation is done on duplicate rankings
	 * 
	 */
	function anonymousRank($entryId, $rank)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->addParam($kparams, "rank", $rank);
		$this->client->queueServiceActionCall("media", "anonymousRank", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
	}

	/**
	 * Approve the media entry and mark the pending flags (if any) as moderated (this will make the entry playable)
	 * 
	 */
	function approve($entryId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->queueServiceActionCall("media", "approve", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
	}

	/**
	 * Approves media replacement
	 * 
	 * @return \Kaltura\Client\Type\MediaEntry
	 */
	function approveReplace($entryId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->queueServiceActionCall("media", "approveReplace", "KalturaMediaEntry", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaMediaEntry");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\MediaEntry");
		return $resultObject;
	}

	/**
	 * Add new bulk upload batch job
	 * 	 Conversion profile id can be specified in the API or in the CSV file, the one in the CSV file will be stronger.
	 * 	 If no conversion profile was specified, partner's default will be used
	 * 
	 * @return \Kaltura\Client\Type\BulkUpload
	 */
	function bulkUploadAdd($fileData, \Kaltura\Client\Type\BulkUploadJobData $bulkUploadData = null, \Kaltura\Client\Type\BulkUploadEntryData $bulkUploadEntryData = null)
	{
		$kparams = array();
		$kfiles = array();
		$this->client->addParam($kfiles, "fileData", $fileData);
		if ($bulkUploadData !== null)
			$this->client->addParam($kparams, "bulkUploadData", $bulkUploadData->toParams());
		if ($bulkUploadEntryData !== null)
			$this->client->addParam($kparams, "bulkUploadEntryData", $bulkUploadEntryData->toParams());
		$this->client->queueServiceActionCall("media", "bulkUploadAdd", "KalturaBulkUpload", $kparams, $kfiles);
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
	 * Cancels media replacement
	 * 
	 * @return \Kaltura\Client\Type\MediaEntry
	 */
	function cancelReplace($entryId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->queueServiceActionCall("media", "cancelReplace", "KalturaMediaEntry", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaMediaEntry");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\MediaEntry");
		return $resultObject;
	}

	/**
	 * Convert entry
	 * 
	 * @return bigint
	 */
	function convert($entryId, $conversionProfileId = null, array $dynamicConversionAttributes = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->addParam($kparams, "conversionProfileId", $conversionProfileId);
		if ($dynamicConversionAttributes !== null)
			foreach($dynamicConversionAttributes as $index => $obj)
			{
				$this->client->addParam($kparams, "dynamicConversionAttributes:$index", $obj->toParams());
			}
		$this->client->queueServiceActionCall("media", "convert", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = (String)\Kaltura\Client\ParseUtils::unmarshalSimpleType($resultXmlObject->result);
		return $resultObject;
	}

	/**
	 * Count media entries by filter.
	 * 
	 * @return int
	 */
	function count(\Kaltura\Client\Type\MediaEntryFilter $filter = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		$this->client->queueServiceActionCall("media", "count", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = (int)\Kaltura\Client\ParseUtils::unmarshalSimpleType($resultXmlObject->result);
		return $resultObject;
	}

	/**
	 * Delete a media entry.
	 * 
	 */
	function delete($entryId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->queueServiceActionCall("media", "delete", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
	}

	/**
	 * Flag inappropriate media entry for moderation
	 * 
	 */
	function flag(\Kaltura\Client\Type\ModerationFlag $moderationFlag)
	{
		$kparams = array();
		$this->client->addParam($kparams, "moderationFlag", $moderationFlag->toParams());
		$this->client->queueServiceActionCall("media", "flag", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
	}

	/**
	 * Get media entry by ID.
	 * 
	 * @return \Kaltura\Client\Type\MediaEntry
	 */
	function get($entryId, $version = -1)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->addParam($kparams, "version", $version);
		$this->client->queueServiceActionCall("media", "get", "KalturaMediaEntry", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaMediaEntry");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\MediaEntry");
		return $resultObject;
	}

	/**
	 * Get MRSS by entry id
	 *      XML will return as an escaped string
	 * 
	 * @return string
	 */
	function getMrss($entryId, array $extendingItemsArray = null, $features = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		if ($extendingItemsArray !== null)
			foreach($extendingItemsArray as $index => $obj)
			{
				$this->client->addParam($kparams, "extendingItemsArray:$index", $obj->toParams());
			}
		$this->client->addParam($kparams, "features", $features);
		$this->client->queueServiceActionCall("media", "getMrss", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = (String)\Kaltura\Client\ParseUtils::unmarshalSimpleType($resultXmlObject->result);
		return $resultObject;
	}

	/**
	 * List media entries by filter with paging support.
	 * 
	 * @return \Kaltura\Client\Type\MediaListResponse
	 */
	function listAction(\Kaltura\Client\Type\MediaEntryFilter $filter = null, \Kaltura\Client\Type\FilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("media", "list", "KalturaMediaListResponse", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaMediaListResponse");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\MediaListResponse");
		return $resultObject;
	}

	/**
	 * List all pending flags for the media entry
	 * 
	 * @return \Kaltura\Client\Type\ModerationFlagListResponse
	 */
	function listFlags($entryId, \Kaltura\Client\Type\FilterPager $pager = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("media", "listFlags", "KalturaModerationFlagListResponse", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaModerationFlagListResponse");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\ModerationFlagListResponse");
		return $resultObject;
	}

	/**
	 * Reject the media entry and mark the pending flags (if any) as moderated (this will make the entry non playable)
	 * 
	 */
	function reject($entryId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->queueServiceActionCall("media", "reject", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
	}

	/**
	 * Request a new conversion job, this can be used to convert the media entry to a different format
	 * 
	 * @return int
	 */
	function requestConversion($entryId, $fileFormat)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->addParam($kparams, "fileFormat", $fileFormat);
		$this->client->queueServiceActionCall("media", "requestConversion", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = (int)\Kaltura\Client\ParseUtils::unmarshalSimpleType($resultXmlObject->result);
		return $resultObject;
	}

	/**
	 * Update media entry. Only the properties that were set will be updated.
	 * 
	 * @return \Kaltura\Client\Type\MediaEntry
	 */
	function update($entryId, \Kaltura\Client\Type\MediaEntry $mediaEntry)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->addParam($kparams, "mediaEntry", $mediaEntry->toParams());
		$this->client->queueServiceActionCall("media", "update", "KalturaMediaEntry", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaMediaEntry");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\MediaEntry");
		return $resultObject;
	}

	/**
	 * Replace content associated with the media entry.
	 * 
	 * @return \Kaltura\Client\Type\MediaEntry
	 */
	function updateContent($entryId, \Kaltura\Client\Type\Resource $resource, $conversionProfileId = null, \Kaltura\Client\Type\EntryReplacementOptions $advancedOptions = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->addParam($kparams, "resource", $resource->toParams());
		$this->client->addParam($kparams, "conversionProfileId", $conversionProfileId);
		if ($advancedOptions !== null)
			$this->client->addParam($kparams, "advancedOptions", $advancedOptions->toParams());
		$this->client->queueServiceActionCall("media", "updateContent", "KalturaMediaEntry", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaMediaEntry");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\MediaEntry");
		return $resultObject;
	}

	/**
	 * Update media entry thumbnail by a specified time offset (In seconds)
	 * 	 If flavor params id not specified, source flavor will be used by default
	 * 
	 * @return \Kaltura\Client\Type\MediaEntry
	 */
	function updateThumbnail($entryId, $timeOffset, $flavorParamsId = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->addParam($kparams, "timeOffset", $timeOffset);
		$this->client->addParam($kparams, "flavorParamsId", $flavorParamsId);
		$this->client->queueServiceActionCall("media", "updateThumbnail", "KalturaMediaEntry", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaMediaEntry");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\MediaEntry");
		return $resultObject;
	}

	/**
	 * Update media entry thumbnail from a different entry by a specified time offset (In seconds)
	 * 	 If flavor params id not specified, source flavor will be used by default
	 * 
	 * @return \Kaltura\Client\Type\MediaEntry
	 */
	function updateThumbnailFromSourceEntry($entryId, $sourceEntryId, $timeOffset, $flavorParamsId = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->addParam($kparams, "sourceEntryId", $sourceEntryId);
		$this->client->addParam($kparams, "timeOffset", $timeOffset);
		$this->client->addParam($kparams, "flavorParamsId", $flavorParamsId);
		$this->client->queueServiceActionCall("media", "updateThumbnailFromSourceEntry", "KalturaMediaEntry", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaMediaEntry");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\MediaEntry");
		return $resultObject;
	}

	/**
	 * Update entry thumbnail using url
	 * 
	 * @return \Kaltura\Client\Type\BaseEntry
	 */
	function updateThumbnailFromUrl($entryId, $url)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->addParam($kparams, "url", $url);
		$this->client->queueServiceActionCall("media", "updateThumbnailFromUrl", "KalturaBaseEntry", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaBaseEntry");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\BaseEntry");
		return $resultObject;
	}

	/**
	 * Update media entry thumbnail using a raw jpeg file
	 * 
	 * @return \Kaltura\Client\Type\MediaEntry
	 */
	function updateThumbnailJpeg($entryId, $fileData)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$kfiles = array();
		$this->client->addParam($kfiles, "fileData", $fileData);
		$this->client->queueServiceActionCall("media", "updateThumbnailJpeg", "KalturaMediaEntry", $kparams, $kfiles);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaMediaEntry");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\MediaEntry");
		return $resultObject;
	}

	/**
	 * Upload a media file to Kaltura, then the file can be used to create a media entry.
	 * 
	 * @return string
	 */
	function upload($fileData)
	{
		$kparams = array();
		$kfiles = array();
		$this->client->addParam($kfiles, "fileData", $fileData);
		$this->client->queueServiceActionCall("media", "upload", null, $kparams, $kfiles);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = (String)\Kaltura\Client\ParseUtils::unmarshalSimpleType($resultXmlObject->result);
		return $resultObject;
	}
}
