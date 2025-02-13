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
namespace Kaltura\Client\Plugin\AttUverseDistribution\Type;

/**
 * @package Kaltura
 * @subpackage Client
 */
class AttUverseDistributionJobProviderData extends \Kaltura\Client\Plugin\ContentDistribution\Type\ConfigurableDistributionJobProviderData
{
	public function getKalturaObjectType()
	{
		return 'KalturaAttUverseDistributionJobProviderData';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->filesForDistribution))
		{
			if(empty($xml->filesForDistribution))
				$this->filesForDistribution = array();
			else
				$this->filesForDistribution = \Kaltura\Client\ParseUtils::unmarshalArray($xml->filesForDistribution, "KalturaAttUverseDistributionFile");
		}
		if(count($xml->remoteAssetFileUrls))
			$this->remoteAssetFileUrls = (string)$xml->remoteAssetFileUrls;
		if(count($xml->remoteThumbnailFileUrls))
			$this->remoteThumbnailFileUrls = (string)$xml->remoteThumbnailFileUrls;
		if(count($xml->remoteCaptionFileUrls))
			$this->remoteCaptionFileUrls = (string)$xml->remoteCaptionFileUrls;
	}
	/**
	 * 
	 * @var array<KalturaAttUverseDistributionFile>
	 */
	public $filesForDistribution;

	/**
	 * The remote URL of the video asset that was distributed
	 * @var string
	 */
	public $remoteAssetFileUrls = null;

	/**
	 * The remote URL of the thumbnail asset that was distributed
	 * @var string
	 */
	public $remoteThumbnailFileUrls = null;

	/**
	 * The remote URL of the caption asset that was distributed
	 * @var string
	 */
	public $remoteCaptionFileUrls = null;

}
