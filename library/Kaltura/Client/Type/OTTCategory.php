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
 * Category details
 * @package Kaltura
 * @subpackage Client
 */
class OTTCategory extends \Kaltura\Client\ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaOTTCategory';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->id))
			$this->id = (string)$xml->id;
		if(count($xml->name))
			$this->name = (string)$xml->name;
		if(count($xml->parentCategoryId))
			$this->parentCategoryId = (string)$xml->parentCategoryId;
		if(count($xml->childCategories))
		{
			if(empty($xml->childCategories))
				$this->childCategories = array();
			else
				$this->childCategories = \Kaltura\Client\ParseUtils::unmarshalArray($xml->childCategories, "KalturaOTTCategory");
		}
		if(count($xml->channels))
		{
			if(empty($xml->channels))
				$this->channels = array();
			else
				$this->channels = \Kaltura\Client\ParseUtils::unmarshalArray($xml->channels, "KalturaChannel");
		}
		if(count($xml->images))
		{
			if(empty($xml->images))
				$this->images = array();
			else
				$this->images = \Kaltura\Client\ParseUtils::unmarshalArray($xml->images, "KalturaMediaImage");
		}
	}
	/**
	 * Unique identifier for the category
	 * @var int
	 * @readonly
	 */
	public $id = null;

	/**
	 * Category name
	 * @var string
	 */
	public $name = null;

	/**
	 * Category parent identifier
	 * @var int
	 */
	public $parentCategoryId = null;

	/**
	 * Child categories
	 * @var array<KalturaOTTCategory>
	 */
	public $childCategories;

	/**
	 * Category channels
	 * @var array<KalturaChannel>
	 */
	public $channels;

	/**
	 * Category images
	 * @var array<KalturaMediaImage>
	 */
	public $images;

}
