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
namespace Kaltura\Client\Plugin\RainFocusDistribution\Type;

/**
 * @package Kaltura
 * @subpackage Client
 */
class RainFocusDistributionProfile extends \Kaltura\Client\Plugin\ContentDistribution\Type\ConfigurableDistributionProfile
{
	public function getKalturaObjectType()
	{
		return 'KalturaRainFocusDistributionProfile';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->oauthTokenUrl))
			$this->oauthTokenUrl = (string)$xml->oauthTokenUrl;
		if(count($xml->videoPublishEndpointUrl))
			$this->videoPublishEndpointUrl = (string)$xml->videoPublishEndpointUrl;
		if(count($xml->oauthScope))
			$this->oauthScope = (string)$xml->oauthScope;
		if(count($xml->clientId))
			$this->clientId = (string)$xml->clientId;
		if(count($xml->clientSecretPrimary))
			$this->clientSecretPrimary = (string)$xml->clientSecretPrimary;
		if(count($xml->clientSecretSecondary))
			$this->clientSecretSecondary = (string)$xml->clientSecretSecondary;
		if(count($xml->activeSecret))
			$this->activeSecret = (string)$xml->activeSecret;
		if(count($xml->mediaType))
			$this->mediaType = (int)$xml->mediaType;
		if(count($xml->playerId))
			$this->playerId = (string)$xml->playerId;
		if(count($xml->metadataProfileId))
			$this->metadataProfileId = (string)$xml->metadataProfileId;
		if(count($xml->metadataFieldNames))
			$this->metadataFieldNames = (string)$xml->metadataFieldNames;
	}
	/**
	 * 
	 * @var string
	 */
	public $oauthTokenUrl = null;

	/**
	 * 
	 * @var string
	 */
	public $videoPublishEndpointUrl = null;

	/**
	 * 
	 * @var string
	 */
	public $oauthScope = null;

	/**
	 * 
	 * @var string
	 */
	public $clientId = null;

	/**
	 * 
	 * @var string
	 */
	public $clientSecretPrimary = null;

	/**
	 * 
	 * @var string
	 */
	public $clientSecretSecondary = null;

	/**
	 * 
	 * @var string
	 */
	public $activeSecret = null;

	/**
	 * 
	 * @var int
	 */
	public $mediaType = null;

	/**
	 * 
	 * @var string
	 */
	public $playerId = null;

	/**
	 * 
	 * @var string
	 */
	public $metadataProfileId = null;

	/**
	 * 
	 * @var string
	 */
	public $metadataFieldNames = null;

}
