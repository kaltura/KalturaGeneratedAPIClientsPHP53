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
namespace Kaltura\Client\Plugin\NdnDistribution\Type;

/**
 * @package Kaltura
 * @subpackage Client
 */
class NdnDistributionProfile extends \Kaltura\Client\Plugin\ContentDistribution\Type\ConfigurableDistributionProfile
{
	public function getKalturaObjectType()
	{
		return 'KalturaNdnDistributionProfile';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->feedUrl))
			$this->feedUrl = (string)$xml->feedUrl;
		if(count($xml->channelTitle))
			$this->channelTitle = (string)$xml->channelTitle;
		if(count($xml->channelLink))
			$this->channelLink = (string)$xml->channelLink;
		if(count($xml->channelDescription))
			$this->channelDescription = (string)$xml->channelDescription;
		if(count($xml->channelLanguage))
			$this->channelLanguage = (string)$xml->channelLanguage;
		if(count($xml->channelCopyright))
			$this->channelCopyright = (string)$xml->channelCopyright;
		if(count($xml->channelImageTitle))
			$this->channelImageTitle = (string)$xml->channelImageTitle;
		if(count($xml->channelImageUrl))
			$this->channelImageUrl = (string)$xml->channelImageUrl;
		if(count($xml->channelImageLink))
			$this->channelImageLink = (string)$xml->channelImageLink;
		if(count($xml->itemMediaRating))
			$this->itemMediaRating = (string)$xml->itemMediaRating;
	}
	/**
	 * 
	 * @var string
	 * @readonly
	 */
	public $feedUrl = null;

	/**
	 * 
	 * @var string
	 */
	public $channelTitle = null;

	/**
	 * 
	 * @var string
	 */
	public $channelLink = null;

	/**
	 * 
	 * @var string
	 */
	public $channelDescription = null;

	/**
	 * 
	 * @var string
	 */
	public $channelLanguage = null;

	/**
	 * 
	 * @var string
	 */
	public $channelCopyright = null;

	/**
	 * 
	 * @var string
	 */
	public $channelImageTitle = null;

	/**
	 * 
	 * @var string
	 */
	public $channelImageUrl = null;

	/**
	 * 
	 * @var string
	 */
	public $channelImageLink = null;

	/**
	 * 
	 * @var string
	 */
	public $itemMediaRating = null;

}
