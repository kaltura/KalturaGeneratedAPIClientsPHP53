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
namespace Kaltura\Client\Plugin\FtpDistribution\Type;

/**
 * @package Kaltura
 * @subpackage Client
 */
class FtpDistributionProfile extends \Kaltura\Client\Plugin\ContentDistribution\Type\ConfigurableDistributionProfile
{
	public function getKalturaObjectType()
	{
		return 'KalturaFtpDistributionProfile';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->protocol))
			$this->protocol = (int)$xml->protocol;
		if(count($xml->host))
			$this->host = (string)$xml->host;
		if(count($xml->port))
			$this->port = (int)$xml->port;
		if(count($xml->basePath))
			$this->basePath = (string)$xml->basePath;
		if(count($xml->username))
			$this->username = (string)$xml->username;
		if(count($xml->password))
			$this->password = (string)$xml->password;
		if(count($xml->passphrase))
			$this->passphrase = (string)$xml->passphrase;
		if(count($xml->sftpPublicKey))
			$this->sftpPublicKey = (string)$xml->sftpPublicKey;
		if(count($xml->sftpPrivateKey))
			$this->sftpPrivateKey = (string)$xml->sftpPrivateKey;
		if(count($xml->disableMetadata))
		{
			if(!empty($xml->disableMetadata))
				$this->disableMetadata = true;
			else
				$this->disableMetadata = false;
		}
		if(count($xml->metadataXslt))
			$this->metadataXslt = (string)$xml->metadataXslt;
		if(count($xml->metadataFilenameXslt))
			$this->metadataFilenameXslt = (string)$xml->metadataFilenameXslt;
		if(count($xml->flavorAssetFilenameXslt))
			$this->flavorAssetFilenameXslt = (string)$xml->flavorAssetFilenameXslt;
		if(count($xml->thumbnailAssetFilenameXslt))
			$this->thumbnailAssetFilenameXslt = (string)$xml->thumbnailAssetFilenameXslt;
		if(count($xml->assetFilenameXslt))
			$this->assetFilenameXslt = (string)$xml->assetFilenameXslt;
		if(count($xml->asperaPublicKey))
			$this->asperaPublicKey = (string)$xml->asperaPublicKey;
		if(count($xml->asperaPrivateKey))
			$this->asperaPrivateKey = (string)$xml->asperaPrivateKey;
		if(count($xml->sendMetadataAfterAssets))
		{
			if(!empty($xml->sendMetadataAfterAssets))
				$this->sendMetadataAfterAssets = true;
			else
				$this->sendMetadataAfterAssets = false;
		}
	}
	/**
	 * 
	 * @var \Kaltura\Client\Plugin\ContentDistribution\Enum\DistributionProtocol
	 * @insertonly
	 */
	public $protocol = null;

	/**
	 * 
	 * @var string
	 */
	public $host = null;

	/**
	 * 
	 * @var int
	 */
	public $port = null;

	/**
	 * 
	 * @var string
	 */
	public $basePath = null;

	/**
	 * 
	 * @var string
	 */
	public $username = null;

	/**
	 * 
	 * @var string
	 */
	public $password = null;

	/**
	 * 
	 * @var string
	 */
	public $passphrase = null;

	/**
	 * 
	 * @var string
	 */
	public $sftpPublicKey = null;

	/**
	 * 
	 * @var string
	 */
	public $sftpPrivateKey = null;

	/**
	 * 
	 * @var bool
	 */
	public $disableMetadata = null;

	/**
	 * 
	 * @var string
	 */
	public $metadataXslt = null;

	/**
	 * 
	 * @var string
	 */
	public $metadataFilenameXslt = null;

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

	/**
	 * 
	 * @var string
	 */
	public $asperaPublicKey = null;

	/**
	 * 
	 * @var string
	 */
	public $asperaPrivateKey = null;

	/**
	 * 
	 * @var bool
	 */
	public $sendMetadataAfterAssets = null;

}
