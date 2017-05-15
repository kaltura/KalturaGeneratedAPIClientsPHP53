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
namespace Kaltura\Client\Plugin\ComcastMrssDistribution\Type;

/**
 * @package Kaltura
 * @subpackage Client
 */
class ComcastMrssDistributionProfile extends \Kaltura\Client\Plugin\ContentDistribution\Type\ConfigurableDistributionProfile
{
	public function getKalturaObjectType()
	{
		return 'KalturaComcastMrssDistributionProfile';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->metadataProfileId))
			$this->metadataProfileId = (int)$xml->metadataProfileId;
		if(count($xml->feedUrl))
			$this->feedUrl = (string)$xml->feedUrl;
		if(count($xml->feedTitle))
			$this->feedTitle = (string)$xml->feedTitle;
		if(count($xml->feedLink))
			$this->feedLink = (string)$xml->feedLink;
		if(count($xml->feedDescription))
			$this->feedDescription = (string)$xml->feedDescription;
		if(count($xml->feedLastBuildDate))
			$this->feedLastBuildDate = (string)$xml->feedLastBuildDate;
		if(count($xml->itemLink))
			$this->itemLink = (string)$xml->itemLink;
		if(count($xml->cPlatformTvSeries))
		{
			if(empty($xml->cPlatformTvSeries))
				$this->cPlatformTvSeries = array();
			else
				$this->cPlatformTvSeries = \Kaltura\Client\ParseUtils::unmarshalArray($xml->cPlatformTvSeries, "KalturaKeyValue");
		}
		if(count($xml->cPlatformTvSeriesField))
			$this->cPlatformTvSeriesField = (string)$xml->cPlatformTvSeriesField;
		if(count($xml->shouldIncludeCuePoints))
		{
			if(!empty($xml->shouldIncludeCuePoints))
				$this->shouldIncludeCuePoints = true;
			else
				$this->shouldIncludeCuePoints = false;
		}
		if(count($xml->shouldIncludeCaptions))
		{
			if(!empty($xml->shouldIncludeCaptions))
				$this->shouldIncludeCaptions = true;
			else
				$this->shouldIncludeCaptions = false;
		}
		if(count($xml->shouldAddThumbExtension))
		{
			if(!empty($xml->shouldAddThumbExtension))
				$this->shouldAddThumbExtension = true;
			else
				$this->shouldAddThumbExtension = false;
		}
	}
	/**
	 * 
	 * @var int
	 */
	public $metadataProfileId = null;

	/**
	 * 
	 * @var string
	 * @readonly
	 */
	public $feedUrl = null;

	/**
	 * 
	 * @var string
	 */
	public $feedTitle = null;

	/**
	 * 
	 * @var string
	 */
	public $feedLink = null;

	/**
	 * 
	 * @var string
	 */
	public $feedDescription = null;

	/**
	 * 
	 * @var string
	 */
	public $feedLastBuildDate = null;

	/**
	 * 
	 * @var string
	 */
	public $itemLink = null;

	/**
	 * 
	 * @var array<KalturaKeyValue>
	 */
	public $cPlatformTvSeries;

	/**
	 * 
	 * @var string
	 */
	public $cPlatformTvSeriesField = null;

	/**
	 * 
	 * @var bool
	 */
	public $shouldIncludeCuePoints = null;

	/**
	 * 
	 * @var bool
	 */
	public $shouldIncludeCaptions = null;

	/**
	 * 
	 * @var bool
	 */
	public $shouldAddThumbExtension = null;

}
