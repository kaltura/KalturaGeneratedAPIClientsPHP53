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
namespace Kaltura\Client\Service;

/**
 * Manage the connection between Conversion Profiles and Asset Params
 *  
 * @package Kaltura
 * @subpackage Client
 */
class ConversionProfileAssetParamsService extends \Kaltura\Client\ServiceBase
{
	function __construct(\Kaltura\Client\Client $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Lists asset parmas of conversion profile by ID
	 * 	 
	 * 
	 * @return \Kaltura\Client\Type\ConversionProfileAssetParamsListResponse
	 */
	function listAction(\Kaltura\Client\Type\ConversionProfileAssetParamsFilter $filter = null, \Kaltura\Client\Type\FilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("conversionprofileassetparams", "list", "KalturaConversionProfileAssetParamsListResponse", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		\Kaltura\Client\ParseUtils::checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaConversionProfileAssetParamsListResponse");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\ConversionProfileAssetParamsListResponse");
		return $resultObject;
	}

	/**
	 * Update asset parmas of conversion profile by ID
	 * 	 
	 * 
	 * @return \Kaltura\Client\Type\ConversionProfileAssetParams
	 */
	function update($conversionProfileId, $assetParamsId, \Kaltura\Client\Type\ConversionProfileAssetParams $conversionProfileAssetParams)
	{
		$kparams = array();
		$this->client->addParam($kparams, "conversionProfileId", $conversionProfileId);
		$this->client->addParam($kparams, "assetParamsId", $assetParamsId);
		$this->client->addParam($kparams, "conversionProfileAssetParams", $conversionProfileAssetParams->toParams());
		$this->client->queueServiceActionCall("conversionprofileassetparams", "update", "KalturaConversionProfileAssetParams", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		\Kaltura\Client\ParseUtils::checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaConversionProfileAssetParams");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\ConversionProfileAssetParams");
		return $resultObject;
	}
}
