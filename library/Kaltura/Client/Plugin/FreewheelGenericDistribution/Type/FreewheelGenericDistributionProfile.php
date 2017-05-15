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
namespace Kaltura\Client\Plugin\FreewheelGenericDistribution\Type;

/**
 * @package Kaltura
 * @subpackage Client
 */
class FreewheelGenericDistributionProfile extends \Kaltura\Client\Plugin\ContentDistribution\Type\ConfigurableDistributionProfile
{
	public function getKalturaObjectType()
	{
		return 'KalturaFreewheelGenericDistributionProfile';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->apikey))
			$this->apikey = (string)$xml->apikey;
		if(count($xml->email))
			$this->email = (string)$xml->email;
		if(count($xml->sftpPass))
			$this->sftpPass = (string)$xml->sftpPass;
		if(count($xml->sftpLogin))
			$this->sftpLogin = (string)$xml->sftpLogin;
		if(count($xml->contentOwner))
			$this->contentOwner = (string)$xml->contentOwner;
		if(count($xml->upstreamVideoId))
			$this->upstreamVideoId = (string)$xml->upstreamVideoId;
		if(count($xml->upstreamNetworkName))
			$this->upstreamNetworkName = (string)$xml->upstreamNetworkName;
		if(count($xml->upstreamNetworkId))
			$this->upstreamNetworkId = (string)$xml->upstreamNetworkId;
		if(count($xml->categoryId))
			$this->categoryId = (string)$xml->categoryId;
		if(count($xml->replaceGroup))
		{
			if(!empty($xml->replaceGroup))
				$this->replaceGroup = true;
			else
				$this->replaceGroup = false;
		}
		if(count($xml->replaceAirDates))
		{
			if(!empty($xml->replaceAirDates))
				$this->replaceAirDates = true;
			else
				$this->replaceAirDates = false;
		}
	}
	/**
	 * 
	 * @var string
	 */
	public $apikey = null;

	/**
	 * 
	 * @var string
	 */
	public $email = null;

	/**
	 * 
	 * @var string
	 */
	public $sftpPass = null;

	/**
	 * 
	 * @var string
	 */
	public $sftpLogin = null;

	/**
	 * 
	 * @var string
	 */
	public $contentOwner = null;

	/**
	 * 
	 * @var string
	 */
	public $upstreamVideoId = null;

	/**
	 * 
	 * @var string
	 */
	public $upstreamNetworkName = null;

	/**
	 * 
	 * @var string
	 */
	public $upstreamNetworkId = null;

	/**
	 * 
	 * @var string
	 */
	public $categoryId = null;

	/**
	 * 
	 * @var bool
	 */
	public $replaceGroup = null;

	/**
	 * 
	 * @var bool
	 */
	public $replaceAirDates = null;

}
