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
 * @package Kaltura
 * @subpackage Client
 */
class LiveStats extends \Kaltura\Client\ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaLiveStats';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->audience))
			$this->audience = (int)$xml->audience;
		if(count($xml->dvrAudience))
			$this->dvrAudience = (int)$xml->dvrAudience;
		if(count($xml->avgBitrate))
			$this->avgBitrate = (float)$xml->avgBitrate;
		if(count($xml->bufferTime))
			$this->bufferTime = (int)$xml->bufferTime;
		if(count($xml->plays))
			$this->plays = (int)$xml->plays;
		if(count($xml->secondsViewed))
			$this->secondsViewed = (int)$xml->secondsViewed;
		if(count($xml->startEvent))
			$this->startEvent = (string)$xml->startEvent;
		if(count($xml->timestamp))
			$this->timestamp = (int)$xml->timestamp;
	}
	/**
	 * 
	 * @var int
	 */
	public $audience = null;

	/**
	 * 
	 * @var int
	 */
	public $dvrAudience = null;

	/**
	 * 
	 * @var float
	 */
	public $avgBitrate = null;

	/**
	 * 
	 * @var int
	 */
	public $bufferTime = null;

	/**
	 * 
	 * @var int
	 */
	public $plays = null;

	/**
	 * 
	 * @var int
	 */
	public $secondsViewed = null;

	/**
	 * 
	 * @var int
	 */
	public $startEvent = null;

	/**
	 * 
	 * @var int
	 */
	public $timestamp = null;

}
