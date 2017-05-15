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
namespace Kaltura\Client\Plugin\CrossKalturaDistribution\Type;

/**
 * @package Kaltura
 * @subpackage Client
 */
class CrossKalturaDistributionProfile extends \Kaltura\Client\Plugin\ContentDistribution\Type\ConfigurableDistributionProfile
{
	public function getKalturaObjectType()
	{
		return 'KalturaCrossKalturaDistributionProfile';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->targetServiceUrl))
			$this->targetServiceUrl = (string)$xml->targetServiceUrl;
		if(count($xml->targetAccountId))
			$this->targetAccountId = (int)$xml->targetAccountId;
		if(count($xml->targetLoginId))
			$this->targetLoginId = (string)$xml->targetLoginId;
		if(count($xml->targetLoginPassword))
			$this->targetLoginPassword = (string)$xml->targetLoginPassword;
		if(count($xml->metadataXslt))
			$this->metadataXslt = (string)$xml->metadataXslt;
		if(count($xml->metadataXpathsTriggerUpdate))
		{
			if(empty($xml->metadataXpathsTriggerUpdate))
				$this->metadataXpathsTriggerUpdate = array();
			else
				$this->metadataXpathsTriggerUpdate = \Kaltura\Client\ParseUtils::unmarshalArray($xml->metadataXpathsTriggerUpdate, "KalturaStringValue");
		}
		if(count($xml->distributeCaptions))
		{
			if(!empty($xml->distributeCaptions))
				$this->distributeCaptions = true;
			else
				$this->distributeCaptions = false;
		}
		if(count($xml->distributeCuePoints))
		{
			if(!empty($xml->distributeCuePoints))
				$this->distributeCuePoints = true;
			else
				$this->distributeCuePoints = false;
		}
		if(count($xml->distributeRemoteFlavorAssetContent))
		{
			if(!empty($xml->distributeRemoteFlavorAssetContent))
				$this->distributeRemoteFlavorAssetContent = true;
			else
				$this->distributeRemoteFlavorAssetContent = false;
		}
		if(count($xml->distributeRemoteThumbAssetContent))
		{
			if(!empty($xml->distributeRemoteThumbAssetContent))
				$this->distributeRemoteThumbAssetContent = true;
			else
				$this->distributeRemoteThumbAssetContent = false;
		}
		if(count($xml->distributeRemoteCaptionAssetContent))
		{
			if(!empty($xml->distributeRemoteCaptionAssetContent))
				$this->distributeRemoteCaptionAssetContent = true;
			else
				$this->distributeRemoteCaptionAssetContent = false;
		}
		if(count($xml->mapAccessControlProfileIds))
		{
			if(empty($xml->mapAccessControlProfileIds))
				$this->mapAccessControlProfileIds = array();
			else
				$this->mapAccessControlProfileIds = \Kaltura\Client\ParseUtils::unmarshalArray($xml->mapAccessControlProfileIds, "KalturaKeyValue");
		}
		if(count($xml->mapConversionProfileIds))
		{
			if(empty($xml->mapConversionProfileIds))
				$this->mapConversionProfileIds = array();
			else
				$this->mapConversionProfileIds = \Kaltura\Client\ParseUtils::unmarshalArray($xml->mapConversionProfileIds, "KalturaKeyValue");
		}
		if(count($xml->mapMetadataProfileIds))
		{
			if(empty($xml->mapMetadataProfileIds))
				$this->mapMetadataProfileIds = array();
			else
				$this->mapMetadataProfileIds = \Kaltura\Client\ParseUtils::unmarshalArray($xml->mapMetadataProfileIds, "KalturaKeyValue");
		}
		if(count($xml->mapStorageProfileIds))
		{
			if(empty($xml->mapStorageProfileIds))
				$this->mapStorageProfileIds = array();
			else
				$this->mapStorageProfileIds = \Kaltura\Client\ParseUtils::unmarshalArray($xml->mapStorageProfileIds, "KalturaKeyValue");
		}
		if(count($xml->mapFlavorParamsIds))
		{
			if(empty($xml->mapFlavorParamsIds))
				$this->mapFlavorParamsIds = array();
			else
				$this->mapFlavorParamsIds = \Kaltura\Client\ParseUtils::unmarshalArray($xml->mapFlavorParamsIds, "KalturaKeyValue");
		}
		if(count($xml->mapThumbParamsIds))
		{
			if(empty($xml->mapThumbParamsIds))
				$this->mapThumbParamsIds = array();
			else
				$this->mapThumbParamsIds = \Kaltura\Client\ParseUtils::unmarshalArray($xml->mapThumbParamsIds, "KalturaKeyValue");
		}
		if(count($xml->mapCaptionParamsIds))
		{
			if(empty($xml->mapCaptionParamsIds))
				$this->mapCaptionParamsIds = array();
			else
				$this->mapCaptionParamsIds = \Kaltura\Client\ParseUtils::unmarshalArray($xml->mapCaptionParamsIds, "KalturaKeyValue");
		}
	}
	/**
	 * 
	 * @var string
	 */
	public $targetServiceUrl = null;

	/**
	 * 
	 * @var int
	 */
	public $targetAccountId = null;

	/**
	 * 
	 * @var string
	 */
	public $targetLoginId = null;

	/**
	 * 
	 * @var string
	 */
	public $targetLoginPassword = null;

	/**
	 * 
	 * @var string
	 */
	public $metadataXslt = null;

	/**
	 * 
	 * @var array<KalturaStringValue>
	 */
	public $metadataXpathsTriggerUpdate;

	/**
	 * 
	 * @var bool
	 */
	public $distributeCaptions = null;

	/**
	 * 
	 * @var bool
	 */
	public $distributeCuePoints = null;

	/**
	 * 
	 * @var bool
	 */
	public $distributeRemoteFlavorAssetContent = null;

	/**
	 * 
	 * @var bool
	 */
	public $distributeRemoteThumbAssetContent = null;

	/**
	 * 
	 * @var bool
	 */
	public $distributeRemoteCaptionAssetContent = null;

	/**
	 * 
	 * @var array<KalturaKeyValue>
	 */
	public $mapAccessControlProfileIds;

	/**
	 * 
	 * @var array<KalturaKeyValue>
	 */
	public $mapConversionProfileIds;

	/**
	 * 
	 * @var array<KalturaKeyValue>
	 */
	public $mapMetadataProfileIds;

	/**
	 * 
	 * @var array<KalturaKeyValue>
	 */
	public $mapStorageProfileIds;

	/**
	 * 
	 * @var array<KalturaKeyValue>
	 */
	public $mapFlavorParamsIds;

	/**
	 * 
	 * @var array<KalturaKeyValue>
	 */
	public $mapThumbParamsIds;

	/**
	 * 
	 * @var array<KalturaKeyValue>
	 */
	public $mapCaptionParamsIds;

}
