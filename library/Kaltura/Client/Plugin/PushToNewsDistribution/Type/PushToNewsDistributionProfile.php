<?php
// ===================================================================================================
//                           _  __     _ _
//                          | |/ /__ _| | |_ _  _ _ _ __ _
//                          | ' </ _` | |  _| || | '_/ _` |
//                          |_|\_\__,_|_|\__|\_,_|_| \__,_|
//
// This file is part of the Kaltura Collaborative Media Suite which allows users
// to do with audio, video, and animation what Wiki platforms allow them to do with
// text.
//
// Copyright (C) 2006-2023  Kaltura Inc.
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
namespace Kaltura\Client\Plugin\PushToNewsDistribution\Type;

/**
 * @package Kaltura
 * @subpackage Client
 */
class PushToNewsDistributionProfile extends \Kaltura\Client\Plugin\ContentDistribution\Type\ConfigurableDistributionProfile
{
	public function getKalturaObjectType()
	{
		return 'KalturaPushToNewsDistributionProfile';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->protocol))
			$this->protocol = (int)$xml->protocol;
		if(count($xml->host))
			$this->host = (string)$xml->host;
		if(count($xml->ips))
			$this->ips = (string)$xml->ips;
		if(count($xml->port))
			$this->port = (int)$xml->port;
		if(count($xml->basePath))
			$this->basePath = (string)$xml->basePath;
		if(count($xml->username))
			$this->username = (string)$xml->username;
		if(count($xml->password))
			$this->password = (string)$xml->password;
		if(count($xml->namedItem))
			$this->namedItem = (string)$xml->namedItem;
		if(count($xml->certificateKey))
			$this->certificateKey = (string)$xml->certificateKey;
		if(count($xml->bodyXslt))
			$this->bodyXslt = (string)$xml->bodyXslt;
		if(count($xml->recentNewsTimeInterval))
			$this->recentNewsTimeInterval = (int)$xml->recentNewsTimeInterval;
	}
	/**
	 * 
	 * @var \Kaltura\Client\Plugin\ContentDistribution\Enum\DistributionProtocol
	 * @insertonly
	 */
	public $protocol = null;

	/**
	 * 
	 * @var string
	 */
	public $host = null;

	/**
	 * 
	 * @var string
	 */
	public $ips = null;

	/**
	 * 
	 * @var int
	 */
	public $port = null;

	/**
	 * 
	 * @var string
	 */
	public $basePath = null;

	/**
	 * 
	 * @var string
	 */
	public $username = null;

	/**
	 * 
	 * @var string
	 */
	public $password = null;

	/**
	 * 
	 * @var string
	 */
	public $namedItem = null;

	/**
	 * 
	 * @var string
	 */
	public $certificateKey = null;

	/**
	 * 
	 * @var string
	 */
	public $bodyXslt = null;

	/**
	 * 
	 * @var int
	 */
	public $recentNewsTimeInterval = null;

}
