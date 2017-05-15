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
namespace Kaltura\Client\Plugin\PlayReady\Type;

/**
 * @package Kaltura
 * @subpackage Client
 */
class PlayReadyPlayRight extends \Kaltura\Client\Plugin\PlayReady\Type\PlayReadyRight
{
	public function getKalturaObjectType()
	{
		return 'KalturaPlayReadyPlayRight';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->analogVideoOPL))
			$this->analogVideoOPL = (int)$xml->analogVideoOPL;
		if(count($xml->analogVideoOutputProtectionList))
		{
			if(empty($xml->analogVideoOutputProtectionList))
				$this->analogVideoOutputProtectionList = array();
			else
				$this->analogVideoOutputProtectionList = \Kaltura\Client\ParseUtils::unmarshalArray($xml->analogVideoOutputProtectionList, "KalturaPlayReadyAnalogVideoOPIdHolder");
		}
		if(count($xml->compressedDigitalAudioOPL))
			$this->compressedDigitalAudioOPL = (int)$xml->compressedDigitalAudioOPL;
		if(count($xml->compressedDigitalVideoOPL))
			$this->compressedDigitalVideoOPL = (int)$xml->compressedDigitalVideoOPL;
		if(count($xml->digitalAudioOutputProtectionList))
		{
			if(empty($xml->digitalAudioOutputProtectionList))
				$this->digitalAudioOutputProtectionList = array();
			else
				$this->digitalAudioOutputProtectionList = \Kaltura\Client\ParseUtils::unmarshalArray($xml->digitalAudioOutputProtectionList, "KalturaPlayReadyDigitalAudioOPIdHolder");
		}
		if(count($xml->uncompressedDigitalAudioOPL))
			$this->uncompressedDigitalAudioOPL = (int)$xml->uncompressedDigitalAudioOPL;
		if(count($xml->uncompressedDigitalVideoOPL))
			$this->uncompressedDigitalVideoOPL = (int)$xml->uncompressedDigitalVideoOPL;
		if(count($xml->firstPlayExpiration))
			$this->firstPlayExpiration = (int)$xml->firstPlayExpiration;
		if(count($xml->playEnablers))
		{
			if(empty($xml->playEnablers))
				$this->playEnablers = array();
			else
				$this->playEnablers = \Kaltura\Client\ParseUtils::unmarshalArray($xml->playEnablers, "KalturaPlayReadyPlayEnablerHolder");
		}
	}
	/**
	 * 
	 * @var \Kaltura\Client\Plugin\PlayReady\Enum\PlayReadyAnalogVideoOPL
	 */
	public $analogVideoOPL = null;

	/**
	 * 
	 * @var array<KalturaPlayReadyAnalogVideoOPIdHolder>
	 */
	public $analogVideoOutputProtectionList;

	/**
	 * 
	 * @var \Kaltura\Client\Plugin\PlayReady\Enum\PlayReadyDigitalAudioOPL
	 */
	public $compressedDigitalAudioOPL = null;

	/**
	 * 
	 * @var \Kaltura\Client\Plugin\PlayReady\Enum\PlayReadyCompressedDigitalVideoOPL
	 */
	public $compressedDigitalVideoOPL = null;

	/**
	 * 
	 * @var array<KalturaPlayReadyDigitalAudioOPIdHolder>
	 */
	public $digitalAudioOutputProtectionList;

	/**
	 * 
	 * @var \Kaltura\Client\Plugin\PlayReady\Enum\PlayReadyDigitalAudioOPL
	 */
	public $uncompressedDigitalAudioOPL = null;

	/**
	 * 
	 * @var \Kaltura\Client\Plugin\PlayReady\Enum\PlayReadyUncompressedDigitalVideoOPL
	 */
	public $uncompressedDigitalVideoOPL = null;

	/**
	 * 
	 * @var int
	 */
	public $firstPlayExpiration = null;

	/**
	 * 
	 * @var array<KalturaPlayReadyPlayEnablerHolder>
	 */
	public $playEnablers;

}
