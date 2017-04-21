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
namespace Kaltura\Client\Plugin\AdCuePoint\Type;

/**
 * @package Kaltura
 * @subpackage Client
 */
class AdCuePoint extends \Kaltura\Client\Plugin\CuePoint\Type\CuePoint
{
	public function getKalturaObjectType()
	{
		return 'KalturaAdCuePoint';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->protocolType))
			$this->protocolType = (string)$xml->protocolType;
		if(count($xml->sourceUrl))
			$this->sourceUrl = (string)$xml->sourceUrl;
		if(count($xml->adType))
			$this->adType = (string)$xml->adType;
		if(count($xml->title))
			$this->title = (string)$xml->title;
		if(count($xml->endTime))
			$this->endTime = (int)$xml->endTime;
		if(count($xml->duration))
			$this->duration = (int)$xml->duration;
	}
	/**
	 * 
	 * @var \Kaltura\Client\Plugin\AdCuePoint\Enum\AdProtocolType
	 * @insertonly
	 */
	public $protocolType = null;

	/**
	 * 
	 * @var string
	 */
	public $sourceUrl = null;

	/**
	 * 
	 * @var \Kaltura\Client\Plugin\AdCuePoint\Enum\AdType
	 */
	public $adType = null;

	/**
	 * 
	 * @var string
	 */
	public $title = null;

	/**
	 * 
	 * @var int
	 */
	public $endTime = null;

	/**
	 * Duration in milliseconds
	 * @var int
	 */
	public $duration = null;

}
