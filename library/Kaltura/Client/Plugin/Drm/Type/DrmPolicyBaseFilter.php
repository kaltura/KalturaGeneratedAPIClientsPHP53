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
namespace Kaltura\Client\Plugin\Drm\Type;

/**
 * @package Kaltura
 * @subpackage Client
 */
abstract class DrmPolicyBaseFilter extends \Kaltura\Client\Type\Filter
{
	public function getKalturaObjectType()
	{
		return 'KalturaDrmPolicyBaseFilter';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->partnerIdEqual))
			$this->partnerIdEqual = (int)$xml->partnerIdEqual;
		if(count($xml->partnerIdIn))
			$this->partnerIdIn = (string)$xml->partnerIdIn;
		if(count($xml->nameLike))
			$this->nameLike = (string)$xml->nameLike;
		if(count($xml->systemNameLike))
			$this->systemNameLike = (string)$xml->systemNameLike;
		if(count($xml->providerEqual))
			$this->providerEqual = (string)$xml->providerEqual;
		if(count($xml->providerIn))
			$this->providerIn = (string)$xml->providerIn;
		if(count($xml->statusEqual))
			$this->statusEqual = (int)$xml->statusEqual;
		if(count($xml->statusIn))
			$this->statusIn = (string)$xml->statusIn;
		if(count($xml->scenarioEqual))
			$this->scenarioEqual = (string)$xml->scenarioEqual;
		if(count($xml->scenarioIn))
			$this->scenarioIn = (string)$xml->scenarioIn;
	}
	/**
	 * 
	 * @var int
	 */
	public $partnerIdEqual = null;

	/**
	 * 
	 * @var string
	 */
	public $partnerIdIn = null;

	/**
	 * 
	 * @var string
	 */
	public $nameLike = null;

	/**
	 * 
	 * @var string
	 */
	public $systemNameLike = null;

	/**
	 * 
	 * @var \Kaltura\Client\Plugin\Drm\Enum\DrmProviderType
	 */
	public $providerEqual = null;

	/**
	 * 
	 * @var string
	 */
	public $providerIn = null;

	/**
	 * 
	 * @var \Kaltura\Client\Plugin\Drm\Enum\DrmPolicyStatus
	 */
	public $statusEqual = null;

	/**
	 * 
	 * @var string
	 */
	public $statusIn = null;

	/**
	 * 
	 * @var \Kaltura\Client\Plugin\Drm\Enum\DrmLicenseScenario
	 */
	public $scenarioEqual = null;

	/**
	 * 
	 * @var string
	 */
	public $scenarioIn = null;

}
