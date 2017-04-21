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
namespace Kaltura\Client\Plugin\CaptionSearch\Service;

/**
 * Search caption asset items
 * @package Kaltura
 * @subpackage Client
 */
class CaptionAssetItemService extends \Kaltura\Client\ServiceBase
{
	function __construct(\Kaltura\Client\Client $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Search caption asset items by filter, pager and free text
	 * 
	 * @return \Kaltura\Client\Plugin\CaptionSearch\Type\CaptionAssetItemListResponse
	 */
	function search(\Kaltura\Client\Type\BaseEntryFilter $entryFilter = null, \Kaltura\Client\Plugin\CaptionSearch\Type\CaptionAssetItemFilter $captionAssetItemFilter = null, \Kaltura\Client\Type\FilterPager $captionAssetItemPager = null)
	{
		$kparams = array();
		if ($entryFilter !== null)
			$this->client->addParam($kparams, "entryFilter", $entryFilter->toParams());
		if ($captionAssetItemFilter !== null)
			$this->client->addParam($kparams, "captionAssetItemFilter", $captionAssetItemFilter->toParams());
		if ($captionAssetItemPager !== null)
			$this->client->addParam($kparams, "captionAssetItemPager", $captionAssetItemPager->toParams());
		$this->client->queueServiceActionCall("captionsearch_captionassetitem", "search", "KalturaCaptionAssetItemListResponse", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaCaptionAssetItemListResponse");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Plugin\\CaptionSearch\\Type\\CaptionAssetItemListResponse");
		return $resultObject;
	}

	/**
	 * Search caption asset items by filter, pager and free text
	 * 
	 * @return \Kaltura\Client\Type\BaseEntryListResponse
	 */
	function searchEntries(\Kaltura\Client\Type\BaseEntryFilter $entryFilter = null, \Kaltura\Client\Plugin\CaptionSearch\Type\CaptionAssetItemFilter $captionAssetItemFilter = null, \Kaltura\Client\Type\FilterPager $captionAssetItemPager = null)
	{
		$kparams = array();
		if ($entryFilter !== null)
			$this->client->addParam($kparams, "entryFilter", $entryFilter->toParams());
		if ($captionAssetItemFilter !== null)
			$this->client->addParam($kparams, "captionAssetItemFilter", $captionAssetItemFilter->toParams());
		if ($captionAssetItemPager !== null)
			$this->client->addParam($kparams, "captionAssetItemPager", $captionAssetItemPager->toParams());
		$this->client->queueServiceActionCall("captionsearch_captionassetitem", "searchEntries", "KalturaBaseEntryListResponse", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaBaseEntryListResponse");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\BaseEntryListResponse");
		return $resultObject;
	}
}
