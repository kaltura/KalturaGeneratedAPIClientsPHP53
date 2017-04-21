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
namespace Kaltura\Client\Plugin\Wowza\Type;

/**
 * @package Kaltura
 * @subpackage Client
 */
class WowzaMediaServerNode extends \Kaltura\Client\Type\MediaServerNode
{
	public function getKalturaObjectType()
	{
		return 'KalturaWowzaMediaServerNode';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->appPrefix))
			$this->appPrefix = (string)$xml->appPrefix;
		if(count($xml->transcoder))
			$this->transcoder = (string)$xml->transcoder;
		if(count($xml->GPUID))
			$this->GPUID = (int)$xml->GPUID;
		if(count($xml->liveServicePort))
			$this->liveServicePort = (int)$xml->liveServicePort;
		if(count($xml->liveServiceProtocol))
			$this->liveServiceProtocol = (string)$xml->liveServiceProtocol;
		if(count($xml->liveServiceInternalDomain))
			$this->liveServiceInternalDomain = (string)$xml->liveServiceInternalDomain;
	}
	/**
	 * Wowza Media server app prefix
	 * @var string
	 */
	public $appPrefix = null;

	/**
	 * Wowza Media server transcoder configuration overide
	 * @var string
	 */
	public $transcoder = null;

	/**
	 * Wowza Media server GPU index id
	 * @var int
	 */
	public $GPUID = null;

	/**
	 * Live service port
	 * @var int
	 */
	public $liveServicePort = null;

	/**
	 * Live service protocol
	 * @var string
	 */
	public $liveServiceProtocol = null;

	/**
	 * Wowza media server live service internal domain
	 * @var string
	 */
	public $liveServiceInternalDomain = null;

}
