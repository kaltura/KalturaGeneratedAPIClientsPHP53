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
 * Media file details
 * @package Kaltura
 * @subpackage Client
 */
class MediaFile extends \Kaltura\Client\ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaMediaFile';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->assetId))
			$this->assetId = (int)$xml->assetId;
		if(count($xml->id))
			$this->id = (int)$xml->id;
		if(count($xml->type))
			$this->type = (string)$xml->type;
		if(count($xml->url))
			$this->url = (string)$xml->url;
		if(count($xml->duration))
			$this->duration = (string)$xml->duration;
		if(count($xml->externalId))
			$this->externalId = (string)$xml->externalId;
	}
	/**
	 * Unique identifier for the asset
	 * @var int
	 */
	public $assetId = null;

	/**
	 * File unique identifier
	 * @var int
	 * @readonly
	 */
	public $id = null;

	/**
	 * Device types as defined in the system
	 * @var string
	 */
	public $type = null;

	/**
	 * URL of the media file to be played
	 * @var string
	 */
	public $url = null;

	/**
	 * Duration of the media file
	 * @var int
	 */
	public $duration = null;

	/**
	 * External identifier for the media file
	 * @var string
	 */
	public $externalId = null;

}
