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
namespace Kaltura\Client\Plugin\YoutubeApiDistribution\Type;

/**
 * @package Kaltura
 * @subpackage Client
 */
class YoutubeApiDistributionProfile extends \Kaltura\Client\Plugin\ContentDistribution\Type\ConfigurableDistributionProfile
{
	public function getKalturaObjectType()
	{
		return 'KalturaYoutubeApiDistributionProfile';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->username))
			$this->username = (string)$xml->username;
		if(count($xml->defaultCategory))
			$this->defaultCategory = (int)$xml->defaultCategory;
		if(count($xml->allowComments))
			$this->allowComments = (string)$xml->allowComments;
		if(count($xml->allowEmbedding))
			$this->allowEmbedding = (string)$xml->allowEmbedding;
		if(count($xml->allowRatings))
			$this->allowRatings = (string)$xml->allowRatings;
		if(count($xml->allowResponses))
			$this->allowResponses = (string)$xml->allowResponses;
		if(count($xml->apiAuthorizeUrl))
			$this->apiAuthorizeUrl = (string)$xml->apiAuthorizeUrl;
		if(count($xml->googleClientId))
			$this->googleClientId = (string)$xml->googleClientId;
		if(count($xml->googleClientSecret))
			$this->googleClientSecret = (string)$xml->googleClientSecret;
		if(count($xml->googleTokenData))
			$this->googleTokenData = (string)$xml->googleTokenData;
		if(count($xml->assumeSuccess))
		{
			if(!empty($xml->assumeSuccess))
				$this->assumeSuccess = true;
			else
				$this->assumeSuccess = false;
		}
		if(count($xml->privacyStatus))
			$this->privacyStatus = (string)$xml->privacyStatus;
	}
	/**
	 * 
	 * @var string
	 */
	public $username = null;

	/**
	 * 
	 * @var int
	 */
	public $defaultCategory = null;

	/**
	 * 
	 * @var string
	 */
	public $allowComments = null;

	/**
	 * 
	 * @var string
	 */
	public $allowEmbedding = null;

	/**
	 * 
	 * @var string
	 */
	public $allowRatings = null;

	/**
	 * 
	 * @var string
	 */
	public $allowResponses = null;

	/**
	 * 
	 * @var string
	 */
	public $apiAuthorizeUrl = null;

	/**
	 * 
	 * @var string
	 */
	public $googleClientId = null;

	/**
	 * 
	 * @var string
	 */
	public $googleClientSecret = null;

	/**
	 * 
	 * @var string
	 */
	public $googleTokenData = null;

	/**
	 * 
	 * @var bool
	 */
	public $assumeSuccess = null;

	/**
	 * 
	 * @var string
	 */
	public $privacyStatus = null;

}
