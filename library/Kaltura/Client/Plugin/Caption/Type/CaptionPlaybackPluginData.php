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
// Copyright (C) 2006-2022  Kaltura Inc.
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
namespace Kaltura\Client\Plugin\Caption\Type;

/**
 * @package Kaltura
 * @subpackage Client
 */
class CaptionPlaybackPluginData extends \Kaltura\Client\ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaCaptionPlaybackPluginData';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->label))
			$this->label = (string)$xml->label;
		if(count($xml->format))
			$this->format = (string)$xml->format;
		if(count($xml->language))
			$this->language = (string)$xml->language;
		if(count($xml->webVttUrl))
			$this->webVttUrl = (string)$xml->webVttUrl;
		if(count($xml->url))
			$this->url = (string)$xml->url;
		if(count($xml->isDefault))
		{
			if(!empty($xml->isDefault) && $xml->isDefault != 'false')
				$this->isDefault = true;
			else
				$this->isDefault = false;
		}
		if(count($xml->languageCode))
			$this->languageCode = (string)$xml->languageCode;
	}
	/**
	 * 
	 * @var string
	 */
	public $label = null;

	/**
	 * 
	 * @var string
	 */
	public $format = null;

	/**
	 * 
	 * @var string
	 */
	public $language = null;

	/**
	 * 
	 * @var string
	 */
	public $webVttUrl = null;

	/**
	 * 
	 * @var string
	 */
	public $url = null;

	/**
	 * 
	 * @var bool
	 */
	public $isDefault = null;

	/**
	 * 
	 * @var string
	 */
	public $languageCode = null;

}
