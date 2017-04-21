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
namespace Kaltura\Client\Plugin\ThumbCuePoint\Type;

/**
 * @package Kaltura
 * @subpackage Client
 */
class ThumbCuePoint extends \Kaltura\Client\Plugin\CuePoint\Type\CuePoint
{
	public function getKalturaObjectType()
	{
		return 'KalturaThumbCuePoint';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->assetId))
			$this->assetId = (string)$xml->assetId;
		if(count($xml->description))
			$this->description = (string)$xml->description;
		if(count($xml->title))
			$this->title = (string)$xml->title;
		if(count($xml->subType))
			$this->subType = (int)$xml->subType;
	}
	/**
	 * 
	 * @var string
	 */
	public $assetId = null;

	/**
	 * 
	 * @var string
	 */
	public $description = null;

	/**
	 * 
	 * @var string
	 */
	public $title = null;

	/**
	 * The sub type of the ThumbCuePoint
	 * @var \Kaltura\Client\Plugin\CuePoint\Enum\ThumbCuePointSubType
	 */
	public $subType = null;

}
