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
 * CDN Adapter
 * @package Kaltura
 * @subpackage Client
 */
class CDNAdapterProfile extends \Kaltura\Client\ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaCDNAdapterProfile';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->id))
			$this->id = (int)$xml->id;
		if(count($xml->name))
			$this->name = (string)$xml->name;
		if(count($xml->isActive))
		{
			if(!empty($xml->isActive))
				$this->isActive = true;
			else
				$this->isActive = false;
		}
		if(count($xml->adapterUrl))
			$this->adapterUrl = (string)$xml->adapterUrl;
		if(count($xml->baseUrl))
			$this->baseUrl = (string)$xml->baseUrl;
		if(count($xml->settings))
		{
			if(empty($xml->settings))
				$this->settings = array();
			else
				$this->settings = \Kaltura\Client\ParseUtils::unmarshalMap($xml->settings, "KalturaStringValue");
		}
		if(count($xml->systemName))
			$this->systemName = (string)$xml->systemName;
		if(count($xml->sharedSecret))
			$this->sharedSecret = (string)$xml->sharedSecret;
	}
	/**
	 * CDN adapter identifier
	 * @var int
	 * @readonly
	 */
	public $id = null;

	/**
	 * CDNR adapter name
	 * @var string
	 */
	public $name = null;

	/**
	 * CDN adapter active status
	 * @var bool
	 */
	public $isActive = null;

	/**
	 * CDN adapter URL
	 * @var string
	 */
	public $adapterUrl = null;

	/**
	 * CDN adapter base URL
	 * @var string
	 */
	public $baseUrl = null;

	/**
	 * CDN adapter settings
	 * @var array<string, KalturaStringValue>
	 */
	public $settings;

	/**
	 * CDN adapter alias
	 * @var string
	 */
	public $systemName = null;

	/**
	 * CDN shared secret
	 * @var string
	 * @readonly
	 */
	public $sharedSecret = null;

}
