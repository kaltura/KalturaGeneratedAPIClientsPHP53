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
class AttUverseDistributionProfile extends \Kaltura\Client\Plugin\ContentDistribution\Type\ConfigurableDistributionProfile
{
	public function getKalturaObjectType()
	{
		return 'KalturaAttUverseDistributionProfile';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->feedUrl))
			$this->feedUrl = (string)$xml->feedUrl;
		if(count($xml->ftpHost))
			$this->ftpHost = (string)$xml->ftpHost;
		if(count($xml->ftpUsername))
			$this->ftpUsername = (string)$xml->ftpUsername;
		if(count($xml->ftpPassword))
			$this->ftpPassword = (string)$xml->ftpPassword;
		if(count($xml->ftpPath))
			$this->ftpPath = (string)$xml->ftpPath;
		if(count($xml->channelTitle))
			$this->channelTitle = (string)$xml->channelTitle;
		if(count($xml->flavorAssetFilenameXslt))
			$this->flavorAssetFilenameXslt = (string)$xml->flavorAssetFilenameXslt;
		if(count($xml->thumbnailAssetFilenameXslt))
			$this->thumbnailAssetFilenameXslt = (string)$xml->thumbnailAssetFilenameXslt;
		if(count($xml->assetFilenameXslt))
			$this->assetFilenameXslt = (string)$xml->assetFilenameXslt;
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
	public $ftpHost = null;

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
	public $ftpPath = null;

	/**
	 * 
	 * @var string
	 */
	public $channelTitle = null;

	/**
	 * 
	 * @var string
	 */
	public $flavorAssetFilenameXslt = null;

	/**
	 * 
	 * @var string
	 */
	public $thumbnailAssetFilenameXslt = null;

	/**
	 * 
	 * @var string
	 */
	public $assetFilenameXslt = null;

}
