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
namespace Kaltura\Client\Plugin\ContentDistribution\Type;

/**
 * @package Kaltura
 * @subpackage Client
 */
class DistributionJobData extends \Kaltura\Client\Type\JobData
{
	public function getKalturaObjectType()
	{
		return 'KalturaDistributionJobData';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->distributionProfileId))
			$this->distributionProfileId = (int)$xml->distributionProfileId;
		if(count($xml->distributionProfile) && !empty($xml->distributionProfile))
			$this->distributionProfile = \Kaltura\Client\ParseUtils::unmarshalObject($xml->distributionProfile, "KalturaDistributionProfile");
		if(count($xml->entryDistributionId))
			$this->entryDistributionId = (int)$xml->entryDistributionId;
		if(count($xml->entryDistribution) && !empty($xml->entryDistribution))
			$this->entryDistribution = \Kaltura\Client\ParseUtils::unmarshalObject($xml->entryDistribution, "KalturaEntryDistribution");
		if(count($xml->remoteId))
			$this->remoteId = (string)$xml->remoteId;
		if(count($xml->providerType))
			$this->providerType = (string)$xml->providerType;
		if(count($xml->providerData) && !empty($xml->providerData))
			$this->providerData = \Kaltura\Client\ParseUtils::unmarshalObject($xml->providerData, "KalturaDistributionJobProviderData");
		if(count($xml->results))
			$this->results = (string)$xml->results;
		if(count($xml->sentData))
			$this->sentData = (string)$xml->sentData;
		if(count($xml->mediaFiles))
		{
			if(empty($xml->mediaFiles))
				$this->mediaFiles = array();
			else
				$this->mediaFiles = \Kaltura\Client\ParseUtils::unmarshalArray($xml->mediaFiles, "KalturaDistributionRemoteMediaFile");
		}
	}
	/**
	 * 
	 * @var int
	 */
	public $distributionProfileId = null;

	/**
	 * 
	 * @var \Kaltura\Client\Plugin\ContentDistribution\Type\DistributionProfile
	 */
	public $distributionProfile;

	/**
	 * 
	 * @var int
	 */
	public $entryDistributionId = null;

	/**
	 * 
	 * @var \Kaltura\Client\Plugin\ContentDistribution\Type\EntryDistribution
	 */
	public $entryDistribution;

	/**
	 * Id of the media in the remote system
	 * @var string
	 */
	public $remoteId = null;

	/**
	 * 
	 * @var \Kaltura\Client\Plugin\ContentDistribution\Enum\DistributionProviderType
	 */
	public $providerType = null;

	/**
	 * Additional data that relevant for the provider only
	 * @var \Kaltura\Client\Plugin\ContentDistribution\Type\DistributionJobProviderData
	 */
	public $providerData;

	/**
	 * The results as returned from the remote destination
	 * @var string
	 */
	public $results = null;

	/**
	 * The data as sent to the remote destination
	 * @var string
	 */
	public $sentData = null;

	/**
	 * Stores array of media files that submitted to the destination site
	 * 	 Could be used later for media update
	 * @var array<KalturaDistributionRemoteMediaFile>
	 */
	public $mediaFiles;

}
