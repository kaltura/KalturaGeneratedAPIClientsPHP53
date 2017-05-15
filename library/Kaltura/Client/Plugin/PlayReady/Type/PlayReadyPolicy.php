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
class PlayReadyPolicy extends \Kaltura\Client\Plugin\Drm\Type\DrmPolicy
{
	public function getKalturaObjectType()
	{
		return 'KalturaPlayReadyPolicy';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->gracePeriod))
			$this->gracePeriod = (int)$xml->gracePeriod;
		if(count($xml->licenseRemovalPolicy))
			$this->licenseRemovalPolicy = (int)$xml->licenseRemovalPolicy;
		if(count($xml->licenseRemovalDuration))
			$this->licenseRemovalDuration = (int)$xml->licenseRemovalDuration;
		if(count($xml->minSecurityLevel))
			$this->minSecurityLevel = (int)$xml->minSecurityLevel;
		if(count($xml->rights))
		{
			if(empty($xml->rights))
				$this->rights = array();
			else
				$this->rights = \Kaltura\Client\ParseUtils::unmarshalArray($xml->rights, "KalturaPlayReadyRight");
		}
	}
	/**
	 * 
	 * @var int
	 */
	public $gracePeriod = null;

	/**
	 * 
	 * @var \Kaltura\Client\Plugin\PlayReady\Enum\PlayReadyLicenseRemovalPolicy
	 */
	public $licenseRemovalPolicy = null;

	/**
	 * 
	 * @var int
	 */
	public $licenseRemovalDuration = null;

	/**
	 * 
	 * @var \Kaltura\Client\Plugin\PlayReady\Enum\PlayReadyMinimumLicenseSecurityLevel
	 */
	public $minSecurityLevel = null;

	/**
	 * 
	 * @var array<KalturaPlayReadyRight>
	 */
	public $rights;

}
