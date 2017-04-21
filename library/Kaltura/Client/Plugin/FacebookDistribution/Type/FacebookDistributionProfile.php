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
namespace Kaltura\Client\Plugin\FacebookDistribution\Type;

/**
 * @package Kaltura
 * @subpackage Client
 */
class FacebookDistributionProfile extends \Kaltura\Client\Plugin\ContentDistribution\Type\ConfigurableDistributionProfile
{
	public function getKalturaObjectType()
	{
		return 'KalturaFacebookDistributionProfile';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->apiAuthorizeUrl))
			$this->apiAuthorizeUrl = (string)$xml->apiAuthorizeUrl;
		if(count($xml->pageId))
			$this->pageId = (string)$xml->pageId;
		if(count($xml->pageAccessToken))
			$this->pageAccessToken = (string)$xml->pageAccessToken;
		if(count($xml->userAccessToken))
			$this->userAccessToken = (string)$xml->userAccessToken;
		if(count($xml->state))
			$this->state = (string)$xml->state;
		if(count($xml->permissions))
			$this->permissions = (string)$xml->permissions;
		if(count($xml->reRequestPermissions))
			$this->reRequestPermissions = (int)$xml->reRequestPermissions;
	}
	/**
	 * 
	 * @var string
	 */
	public $apiAuthorizeUrl = null;

	/**
	 * 
	 * @var string
	 */
	public $pageId = null;

	/**
	 * 
	 * @var string
	 */
	public $pageAccessToken = null;

	/**
	 * 
	 * @var string
	 */
	public $userAccessToken = null;

	/**
	 * 
	 * @var string
	 */
	public $state = null;

	/**
	 * 
	 * @var string
	 */
	public $permissions = null;

	/**
	 * 
	 * @var int
	 */
	public $reRequestPermissions = null;

}
