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
namespace Kaltura\Client\Plugin\Widevine\Type;

/**
 * @package Kaltura
 * @subpackage Client
 */
class WidevineProfile extends \Kaltura\Client\Plugin\Drm\Type\DrmProfile
{
	public function getKalturaObjectType()
	{
		return 'KalturaWidevineProfile';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->key))
			$this->key = (string)$xml->key;
		if(count($xml->iv))
			$this->iv = (string)$xml->iv;
		if(count($xml->owner))
			$this->owner = (string)$xml->owner;
		if(count($xml->portal))
			$this->portal = (string)$xml->portal;
		if(count($xml->maxGop))
			$this->maxGop = (int)$xml->maxGop;
		if(count($xml->regServerHost))
			$this->regServerHost = (string)$xml->regServerHost;
	}
	/**
	 * 
	 * @var string
	 */
	public $key = null;

	/**
	 * 
	 * @var string
	 */
	public $iv = null;

	/**
	 * 
	 * @var string
	 */
	public $owner = null;

	/**
	 * 
	 * @var string
	 */
	public $portal = null;

	/**
	 * 
	 * @var int
	 */
	public $maxGop = null;

	/**
	 * 
	 * @var string
	 */
	public $regServerHost = null;

}
