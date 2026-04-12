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
class OverlayAttributes extends \Kaltura\Client\Type\MediaCompositionAttributes
{
	public function getKalturaObjectType()
	{
		return 'KalturaOverlayAttributes';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->resource) && !empty($xml->resource))
			$this->resource = \Kaltura\Client\ParseUtils::unmarshalObject($xml->resource, "KalturaContentResource");
		if(count($xml->resourceMediaCompositionAttributesArray))
		{
			if(empty($xml->resourceMediaCompositionAttributesArray))
				$this->resourceMediaCompositionAttributesArray = array();
			else
				$this->resourceMediaCompositionAttributesArray = \Kaltura\Client\ParseUtils::unmarshalArray($xml->resourceMediaCompositionAttributesArray, "KalturaMediaCompositionAttributes");
		}
		if(count($xml->marginsPercentage))
			$this->marginsPercentage = (float)$xml->marginsPercentage;
		if(count($xml->overlayScalePercentage))
			$this->overlayScalePercentage = (float)$xml->overlayScalePercentage;
		if(count($xml->overlayPlacement))
			$this->overlayPlacement = (int)$xml->overlayPlacement;
		if(count($xml->overlayShape))
			$this->overlayShape = (int)$xml->overlayShape;
		if(count($xml->audioAttributes) && !empty($xml->audioAttributes))
			$this->audioAttributes = \Kaltura\Client\ParseUtils::unmarshalObject($xml->audioAttributes, "KalturaAudioAttributes");
	}
	/**
	 * Only KalturaEntryResource and KalturaAssetResource are supported
	 * @var \Kaltura\Client\Type\ContentResource
	 */
	public $resource;

	/**
	 * Only KalturaReplaceBackgroundAttributes is supported
	 * @var array<KalturaMediaCompositionAttributes>
	 */
	public $resourceMediaCompositionAttributesArray;

	/**
	 * 
	 * @var float
	 */
	public $marginsPercentage = null;

	/**
	 * 
	 * @var float
	 */
	public $overlayScalePercentage = null;

	/**
	 * 
	 * @var \Kaltura\Client\Enum\MediaCompositionAlignment
	 */
	public $overlayPlacement = null;

	/**
	 * 
	 * @var \Kaltura\Client\Enum\OverlayShape
	 */
	public $overlayShape = null;

	/**
	 * 
	 * @var \Kaltura\Client\Type\AudioAttributes
	 */
	public $audioAttributes;

}
