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
namespace Kaltura\Client\Plugin\MetroPcsDistribution\Type;

/**
 * @package Kaltura
 * @subpackage Client
 */
class MetroPcsDistributionProfile extends \Kaltura\Client\Plugin\ContentDistribution\Type\ConfigurableDistributionProfile
{
	public function getKalturaObjectType()
	{
		return 'KalturaMetroPcsDistributionProfile';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->ftpHost))
			$this->ftpHost = (string)$xml->ftpHost;
		if(count($xml->ftpLogin))
			$this->ftpLogin = (string)$xml->ftpLogin;
		if(count($xml->ftpPass))
			$this->ftpPass = (string)$xml->ftpPass;
		if(count($xml->ftpPath))
			$this->ftpPath = (string)$xml->ftpPath;
		if(count($xml->providerName))
			$this->providerName = (string)$xml->providerName;
		if(count($xml->providerId))
			$this->providerId = (string)$xml->providerId;
		if(count($xml->copyright))
			$this->copyright = (string)$xml->copyright;
		if(count($xml->entitlements))
			$this->entitlements = (string)$xml->entitlements;
		if(count($xml->rating))
			$this->rating = (string)$xml->rating;
		if(count($xml->itemType))
			$this->itemType = (string)$xml->itemType;
	}
	/**
	 * 
	 * @var string
	 */
	public $ftpHost = null;

	/**
	 * 
	 * @var string
	 */
	public $ftpLogin = null;

	/**
	 * 
	 * @var string
	 */
	public $ftpPass = null;

	/**
	 * 
	 * @var string
	 */
	public $ftpPath = null;

	/**
	 * 
	 * @var string
	 */
	public $providerName = null;

	/**
	 * 
	 * @var string
	 */
	public $providerId = null;

	/**
	 * 
	 * @var string
	 */
	public $copyright = null;

	/**
	 * 
	 * @var string
	 */
	public $entitlements = null;

	/**
	 * 
	 * @var string
	 */
	public $rating = null;

	/**
	 * 
	 * @var string
	 */
	public $itemType = null;

}
