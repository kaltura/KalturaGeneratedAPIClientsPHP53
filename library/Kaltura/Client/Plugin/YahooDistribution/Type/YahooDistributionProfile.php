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
namespace Kaltura\Client\Plugin\YahooDistribution\Type;

/**
 * @package Kaltura
 * @subpackage Client
 */
class YahooDistributionProfile extends \Kaltura\Client\Plugin\ContentDistribution\Type\ConfigurableDistributionProfile
{
	public function getKalturaObjectType()
	{
		return 'KalturaYahooDistributionProfile';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->ftpPath))
			$this->ftpPath = (string)$xml->ftpPath;
		if(count($xml->ftpUsername))
			$this->ftpUsername = (string)$xml->ftpUsername;
		if(count($xml->ftpPassword))
			$this->ftpPassword = (string)$xml->ftpPassword;
		if(count($xml->ftpHost))
			$this->ftpHost = (string)$xml->ftpHost;
		if(count($xml->contactTelephone))
			$this->contactTelephone = (string)$xml->contactTelephone;
		if(count($xml->contactEmail))
			$this->contactEmail = (string)$xml->contactEmail;
		if(count($xml->processFeed))
			$this->processFeed = (int)$xml->processFeed;
	}
	/**
	 * 
	 * @var string
	 */
	public $ftpPath = null;

	/**
	 * 
	 * @var string
	 */
	public $ftpUsername = null;

	/**
	 * 
	 * @var string
	 */
	public $ftpPassword = null;

	/**
	 * 
	 * @var string
	 */
	public $ftpHost = null;

	/**
	 * 
	 * @var string
	 */
	public $contactTelephone = null;

	/**
	 * 
	 * @var string
	 */
	public $contactEmail = null;

	/**
	 * 
	 * @var \Kaltura\Client\Plugin\YahooDistribution\Enum\YahooDistributionProcessFeedActionStatus
	 */
	public $processFeed = null;

}
