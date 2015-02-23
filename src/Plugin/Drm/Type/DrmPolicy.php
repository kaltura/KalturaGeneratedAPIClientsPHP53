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
// Copyright (C) 2006-2011  Kaltura Inc.
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
namespace Kaltura\Client\Plugin\Drm\Type;

/**
 * @package Kaltura
 * @subpackage Client
 */
class DrmPolicy extends \Kaltura\Client\ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaDrmPolicy';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->id))
			$this->id = (int)$xml->id;
		if(count($xml->partnerId))
			$this->partnerId = (int)$xml->partnerId;
		$this->name = (string)$xml->name;
		$this->systemName = (string)$xml->systemName;
		$this->description = (string)$xml->description;
		$this->provider = (string)$xml->provider;
		if(count($xml->status))
			$this->status = (int)$xml->status;
		$this->scenario = (string)$xml->scenario;
		$this->licenseType = (string)$xml->licenseType;
		if(count($xml->licenseExpirationPolicy))
			$this->licenseExpirationPolicy = (int)$xml->licenseExpirationPolicy;
		if(count($xml->duration))
			$this->duration = (int)$xml->duration;
		if(count($xml->createdAt))
			$this->createdAt = (int)$xml->createdAt;
		if(count($xml->updatedAt))
			$this->updatedAt = (int)$xml->updatedAt;
	}
	/**
	 * 
	 * @var int
	 * @readonly
	 */
	public $id = null;

	/**
	 * 
	 * @var int
	 * @insertonly
	 */
	public $partnerId = null;

	/**
	 * 
	 * @var string
	 */
	public $name = null;

	/**
	 * 
	 * @var string
	 */
	public $systemName = null;

	/**
	 * 
	 * @var string
	 */
	public $description = null;

	/**
	 * 
	 * @var \Kaltura\Client\Plugin\Drm\Enum\DrmProviderType
	 */
	public $provider = null;

	/**
	 * 
	 * @var \Kaltura\Client\Plugin\Drm\Enum\DrmPolicyStatus
	 */
	public $status = null;

	/**
	 * 
	 * @var \Kaltura\Client\Plugin\Drm\Enum\DrmLicenseScenario
	 */
	public $scenario = null;

	/**
	 * 
	 * @var \Kaltura\Client\Plugin\Drm\Enum\DrmLicenseType
	 */
	public $licenseType = null;

	/**
	 * 
	 * @var \Kaltura\Client\Plugin\Drm\Enum\DrmLicenseExpirationPolicy
	 */
	public $licenseExpirationPolicy = null;

	/**
	 * Duration in days the license is effective
	 * 	 
	 * @var int
	 */
	public $duration = null;

	/**
	 * 
	 * @var int
	 * @readonly
	 */
	public $createdAt = null;

	/**
	 * 
	 * @var int
	 * @readonly
	 */
	public $updatedAt = null;

}
