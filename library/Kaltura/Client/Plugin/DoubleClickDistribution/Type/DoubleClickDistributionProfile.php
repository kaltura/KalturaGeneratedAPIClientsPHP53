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
namespace Kaltura\Client\Plugin\DoubleClickDistribution\Type;

/**
 * @package Kaltura
 * @subpackage Client
 */
class DoubleClickDistributionProfile extends \Kaltura\Client\Plugin\ContentDistribution\Type\ConfigurableDistributionProfile
{
	public function getKalturaObjectType()
	{
		return 'KalturaDoubleClickDistributionProfile';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->channelTitle))
			$this->channelTitle = (string)$xml->channelTitle;
		if(count($xml->channelLink))
			$this->channelLink = (string)$xml->channelLink;
		if(count($xml->channelDescription))
			$this->channelDescription = (string)$xml->channelDescription;
		if(count($xml->feedUrl))
			$this->feedUrl = (string)$xml->feedUrl;
		if(count($xml->cuePointsProvider))
			$this->cuePointsProvider = (string)$xml->cuePointsProvider;
		if(count($xml->itemsPerPage))
			$this->itemsPerPage = (string)$xml->itemsPerPage;
		if(count($xml->ignoreSchedulingInFeed))
		{
			if(!empty($xml->ignoreSchedulingInFeed))
				$this->ignoreSchedulingInFeed = true;
			else
				$this->ignoreSchedulingInFeed = false;
		}
	}
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
	 * @readonly
	 */
	public $feedUrl = null;

	/**
	 * 
	 * @var string
	 */
	public $cuePointsProvider = null;

	/**
	 * 
	 * @var string
	 */
	public $itemsPerPage = null;

	/**
	 * 
	 * @var bool
	 */
	public $ignoreSchedulingInFeed = null;

}
