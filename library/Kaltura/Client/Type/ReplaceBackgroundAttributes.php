<?php
// ===================================================================================================
//                           _  __     _ _
//                          | |/ /__ _| | |_ _  _ _ _ __ _
//                          | ' </ _` | |  _| || | '_/ _` |
//                          |_|\_\__,_|_|\__|\_,_|_| \__,_|
//
// This file is part of the Kaltura Collaborative Media Suite which allows users
// to do with audio, video, and animation what Wiki platforms allow them to do with
// text.
//
// Copyright (C) 2006-2023  Kaltura Inc.
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
 * @package Kaltura
 * @subpackage Client
 */
class ReplaceBackgroundAttributes extends \Kaltura\Client\Type\MediaCompositionAttributes
{
	public function getKalturaObjectType()
	{
		return 'KalturaReplaceBackgroundAttributes';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->resource) && !empty($xml->resource))
			$this->resource = \Kaltura\Client\ParseUtils::unmarshalObject($xml->resource, "KalturaContentResource");
		if(count($xml->backgroundColorCode))
			$this->backgroundColorCode = (string)$xml->backgroundColorCode;
		if(count($xml->foregroundScalePercentage))
			$this->foregroundScalePercentage = (float)$xml->foregroundScalePercentage;
		if(count($xml->foregroundPositionPercentage) && !empty($xml->foregroundPositionPercentage))
			$this->foregroundPositionPercentage = \Kaltura\Client\ParseUtils::unmarshalObject($xml->foregroundPositionPercentage, "KalturaPosition");
		if(count($xml->audioAttributes) && !empty($xml->audioAttributes))
			$this->audioAttributes = \Kaltura\Client\ParseUtils::unmarshalObject($xml->audioAttributes, "KalturaAudioAttributes");
	}
	/**
	 * Only KalturaEntryResource, KalturaAssetResource and KalturaDocumentImagesResource are supported
	 * @var \Kaltura\Client\Type\ContentResource
	 */
	public $resource;

	/**
	 * 
	 * @var string
	 */
	public $backgroundColorCode = null;

	/**
	 * 
	 * @var float
	 */
	public $foregroundScalePercentage = null;

	/**
	 * 
	 * @var \Kaltura\Client\Type\Position
	 */
	public $foregroundPositionPercentage;

	/**
	 * 
	 * @var \Kaltura\Client\Type\AudioAttributes
	 */
	public $audioAttributes;

}
