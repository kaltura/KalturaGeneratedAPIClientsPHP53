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
// Copyright (C) 2006-2016  Kaltura Inc.
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
class PlaybackSource extends \Kaltura\Client\ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaPlaybackSource';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->deliveryProfileId))
			$this->deliveryProfileId = (string)$xml->deliveryProfileId;
		if(count($xml->format))
			$this->format = (string)$xml->format;
		if(count($xml->priority))
			$this->priority = (string)$xml->priority;
		if(count($xml->protocols))
		{
			if(empty($xml->protocols))
				$this->protocols = array();
			else
				$this->protocols = \Kaltura\Client\ParseUtils::unmarshalArray($xml->protocols, "KalturaString");
		}
		if(count($xml->flavors))
		{
			if(empty($xml->flavors))
				$this->flavors = array();
			else
				$this->flavors = \Kaltura\Client\ParseUtils::unmarshalArray($xml->flavors, "KalturaString");
		}
		if(count($xml->url))
			$this->url = (string)$xml->url;
		if(count($xml->drm))
		{
			if(empty($xml->drm))
				$this->drm = array();
			else
				$this->drm = \Kaltura\Client\ParseUtils::unmarshalArray($xml->drm, "KalturaDrmEntryPlayingPluginData");
		}
	}
	/**
	 * 
	 * @var string
	 */
	public $deliveryProfileId = null;

	/**
	 * 
	 * @var string
	 */
	public $format = null;

	/**
	 * 
	 * @var string
	 */
	public $priority = null;

	/**
	 * 
	 * @var array<KalturaString>
	 */
	public $protocols;

	/**
	 * 
	 * @var array<KalturaString>
	 */
	public $flavors;

	/**
	 * 
	 * @var string
	 */
	public $url = null;

	/**
	 * 
	 * @var array<KalturaDrmEntryPlayingPluginData>
	 */
	public $drm;

}
