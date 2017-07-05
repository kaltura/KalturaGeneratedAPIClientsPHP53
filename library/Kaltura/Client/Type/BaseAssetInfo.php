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
 * Slim asset info
 * @package Kaltura
 * @subpackage Client
 */
class BaseAssetInfo extends \Kaltura\Client\ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaBaseAssetInfo';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->id))
			$this->id = (string)$xml->id;
		if(count($xml->type))
			$this->type = (int)$xml->type;
		if(count($xml->name))
			$this->name = (string)$xml->name;
		if(count($xml->description))
			$this->description = (string)$xml->description;
		if(count($xml->images))
		{
			if(empty($xml->images))
				$this->images = array();
			else
				$this->images = \Kaltura\Client\ParseUtils::unmarshalArray($xml->images, "KalturaMediaImage");
		}
		if(count($xml->mediaFiles))
		{
			if(empty($xml->mediaFiles))
				$this->mediaFiles = array();
			else
				$this->mediaFiles = \Kaltura\Client\ParseUtils::unmarshalArray($xml->mediaFiles, "KalturaMediaFile");
		}
	}
	/**
	 * Unique identifier for the asset
	 * @var int
	 * @readonly
	 */
	public $id = null;

	/**
	 * Identifies the asset type (EPG, Movie, TV Series, etc). 
	 *             Possible values: 0 – EPG linear programs, or any asset type ID according to the asset types IDs defined in the system.
	 * @var int
	 */
	public $type = null;

	/**
	 * Asset name
	 * @var string
	 */
	public $name = null;

	/**
	 * Asset description
	 * @var string
	 */
	public $description = null;

	/**
	 * Collection of images details that can be used to represent this asset
	 * @var array<KalturaMediaImage>
	 */
	public $images;

	/**
	 * Files
	 * @var array<KalturaMediaFile>
	 */
	public $mediaFiles;

}
