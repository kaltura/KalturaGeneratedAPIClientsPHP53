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
 * Image details
 * @package Kaltura
 * @subpackage Client
 */
class MediaImage extends \Kaltura\Client\ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaMediaImage';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->ratio))
			$this->ratio = (string)$xml->ratio;
		if(count($xml->width))
			$this->width = (int)$xml->width;
		if(count($xml->height))
			$this->height = (int)$xml->height;
		if(count($xml->url))
			$this->url = (string)$xml->url;
		if(count($xml->version))
			$this->version = (int)$xml->version;
		if(count($xml->id))
			$this->id = (string)$xml->id;
		if(count($xml->isDefault))
		{
			if(!empty($xml->isDefault))
				$this->isDefault = true;
			else
				$this->isDefault = false;
		}
	}
	/**
	 * Image aspect ratio
	 * @var string
	 */
	public $ratio = null;

	/**
	 * Image width
	 * @var int
	 */
	public $width = null;

	/**
	 * Image height
	 * @var int
	 */
	public $height = null;

	/**
	 * Image URL
	 * @var string
	 */
	public $url = null;

	/**
	 * Image Version
	 * @var int
	 */
	public $version = null;

	/**
	 * Image ID
	 * @var string
	 * @readonly
	 */
	public $id = null;

	/**
	 * Determined whether image was taken from default configuration or not
	 * @var bool
	 */
	public $isDefault = null;

}
