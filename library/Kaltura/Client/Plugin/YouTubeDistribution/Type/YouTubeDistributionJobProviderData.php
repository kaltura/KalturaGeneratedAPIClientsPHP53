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
namespace Kaltura\Client\Plugin\YouTubeDistribution\Type;

/**
 * @package Kaltura
 * @subpackage Client
 */
class YouTubeDistributionJobProviderData extends \Kaltura\Client\Plugin\ContentDistribution\Type\ConfigurableDistributionJobProviderData
{
	public function getKalturaObjectType()
	{
		return 'KalturaYouTubeDistributionJobProviderData';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->videoAssetFilePath))
			$this->videoAssetFilePath = (string)$xml->videoAssetFilePath;
		if(count($xml->thumbAssetFilePath))
			$this->thumbAssetFilePath = (string)$xml->thumbAssetFilePath;
		if(count($xml->captionAssetIds))
			$this->captionAssetIds = (string)$xml->captionAssetIds;
		if(count($xml->sftpDirectory))
			$this->sftpDirectory = (string)$xml->sftpDirectory;
		if(count($xml->sftpMetadataFilename))
			$this->sftpMetadataFilename = (string)$xml->sftpMetadataFilename;
		if(count($xml->currentPlaylists))
			$this->currentPlaylists = (string)$xml->currentPlaylists;
		if(count($xml->newPlaylists))
			$this->newPlaylists = (string)$xml->newPlaylists;
		if(count($xml->submitXml))
			$this->submitXml = (string)$xml->submitXml;
		if(count($xml->updateXml))
			$this->updateXml = (string)$xml->updateXml;
		if(count($xml->deleteXml))
			$this->deleteXml = (string)$xml->deleteXml;
		if(count($xml->googleClientId))
			$this->googleClientId = (string)$xml->googleClientId;
		if(count($xml->googleClientSecret))
			$this->googleClientSecret = (string)$xml->googleClientSecret;
		if(count($xml->googleTokenData))
			$this->googleTokenData = (string)$xml->googleTokenData;
	}
	/**
	 * 
	 * @var string
	 */
	public $videoAssetFilePath = null;

	/**
	 * 
	 * @var string
	 */
	public $thumbAssetFilePath = null;

	/**
	 * 
	 * @var string
	 */
	public $captionAssetIds = null;

	/**
	 * 
	 * @var string
	 */
	public $sftpDirectory = null;

	/**
	 * 
	 * @var string
	 */
	public $sftpMetadataFilename = null;

	/**
	 * 
	 * @var string
	 */
	public $currentPlaylists = null;

	/**
	 * 
	 * @var string
	 */
	public $newPlaylists = null;

	/**
	 * 
	 * @var string
	 */
	public $submitXml = null;

	/**
	 * 
	 * @var string
	 */
	public $updateXml = null;

	/**
	 * 
	 * @var string
	 */
	public $deleteXml = null;

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

}
