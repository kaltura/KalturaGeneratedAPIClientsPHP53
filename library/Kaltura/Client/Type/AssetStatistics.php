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
namespace Kaltura\Client\Type;

/**
 * Asset statistics
 * @package Kaltura
 * @subpackage Client
 */
class AssetStatistics extends \Kaltura\Client\ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaAssetStatistics';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->assetId))
			$this->assetId = (int)$xml->assetId;
		if(count($xml->likes))
			$this->likes = (int)$xml->likes;
		if(count($xml->views))
			$this->views = (int)$xml->views;
		if(count($xml->ratingCount))
			$this->ratingCount = (int)$xml->ratingCount;
		if(count($xml->rating))
			$this->rating = (float)$xml->rating;
		if(count($xml->buzzScore) && !empty($xml->buzzScore))
			$this->buzzScore = \Kaltura\Client\ParseUtils::unmarshalObject($xml->buzzScore, "KalturaBuzzScore");
	}
	/**
	 * Unique identifier for the asset
	 * @var int
	 */
	public $assetId = null;

	/**
	 * Total number of likes for this asset
	 * @var int
	 */
	public $likes = null;

	/**
	 * Total number of views for this asset
	 * @var int
	 */
	public $views = null;

	/**
	 * Number of people that rated the asset
	 * @var int
	 */
	public $ratingCount = null;

	/**
	 * Average rating for the asset
	 * @var float
	 */
	public $rating = null;

	/**
	 * Buzz score
	 * @var \Kaltura\Client\Type\BuzzScore
	 */
	public $buzzScore;

}
