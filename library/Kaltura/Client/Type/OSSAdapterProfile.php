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
 * OSS Adapter
 * @package Kaltura
 * @subpackage Client
 */
class OSSAdapterProfile extends \Kaltura\Client\Type\OSSAdapterBaseProfile
{
	public function getKalturaObjectType()
	{
		return 'KalturaOSSAdapterProfile';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->isActive))
		{
			if(!empty($xml->isActive))
				$this->isActive = true;
			else
				$this->isActive = false;
		}
		if(count($xml->adapterUrl))
			$this->adapterUrl = (string)$xml->adapterUrl;
		if(count($xml->ossAdapterSettings))
		{
			if(empty($xml->ossAdapterSettings))
				$this->ossAdapterSettings = array();
			else
				$this->ossAdapterSettings = \Kaltura\Client\ParseUtils::unmarshalMap($xml->ossAdapterSettings, "KalturaStringValue");
		}
		if(count($xml->externalIdentifier))
			$this->externalIdentifier = (string)$xml->externalIdentifier;
		if(count($xml->sharedSecret))
			$this->sharedSecret = (string)$xml->sharedSecret;
	}
	/**
	 * OSS adapter active status
	 * @var bool
	 */
	public $isActive = null;

	/**
	 * OSS adapter adapter URL
	 * @var string
	 */
	public $adapterUrl = null;

	/**
	 * OSS adapter extra parameters
	 * @var array<string, KalturaStringValue>
	 */
	public $ossAdapterSettings;

	/**
	 * OSS adapter external identifier
	 * @var string
	 */
	public $externalIdentifier = null;

	/**
	 * Shared Secret
	 * @var string
	 * @readonly
	 */
	public $sharedSecret = null;

}
