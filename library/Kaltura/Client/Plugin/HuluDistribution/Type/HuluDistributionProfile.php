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
namespace Kaltura\Client\Plugin\HuluDistribution\Type;

/**
 * @package Kaltura
 * @subpackage Client
 */
class HuluDistributionProfile extends \Kaltura\Client\Plugin\ContentDistribution\Type\ConfigurableDistributionProfile
{
	public function getKalturaObjectType()
	{
		return 'KalturaHuluDistributionProfile';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->sftpHost))
			$this->sftpHost = (string)$xml->sftpHost;
		if(count($xml->sftpLogin))
			$this->sftpLogin = (string)$xml->sftpLogin;
		if(count($xml->sftpPass))
			$this->sftpPass = (string)$xml->sftpPass;
		if(count($xml->seriesChannel))
			$this->seriesChannel = (string)$xml->seriesChannel;
		if(count($xml->seriesPrimaryCategory))
			$this->seriesPrimaryCategory = (string)$xml->seriesPrimaryCategory;
		if(count($xml->seriesAdditionalCategories))
		{
			if(empty($xml->seriesAdditionalCategories))
				$this->seriesAdditionalCategories = array();
			else
				$this->seriesAdditionalCategories = \Kaltura\Client\ParseUtils::unmarshalArray($xml->seriesAdditionalCategories, "KalturaString");
		}
		if(count($xml->seasonNumber))
			$this->seasonNumber = (string)$xml->seasonNumber;
		if(count($xml->seasonSynopsis))
			$this->seasonSynopsis = (string)$xml->seasonSynopsis;
		if(count($xml->seasonTuneInInformation))
			$this->seasonTuneInInformation = (string)$xml->seasonTuneInInformation;
		if(count($xml->videoMediaType))
			$this->videoMediaType = (string)$xml->videoMediaType;
		if(count($xml->disableEpisodeNumberCustomValidation))
		{
			if(!empty($xml->disableEpisodeNumberCustomValidation))
				$this->disableEpisodeNumberCustomValidation = true;
			else
				$this->disableEpisodeNumberCustomValidation = false;
		}
		if(count($xml->protocol))
			$this->protocol = (int)$xml->protocol;
		if(count($xml->asperaHost))
			$this->asperaHost = (string)$xml->asperaHost;
		if(count($xml->asperaLogin))
			$this->asperaLogin = (string)$xml->asperaLogin;
		if(count($xml->asperaPass))
			$this->asperaPass = (string)$xml->asperaPass;
		if(count($xml->port))
			$this->port = (int)$xml->port;
		if(count($xml->passphrase))
			$this->passphrase = (string)$xml->passphrase;
		if(count($xml->asperaPublicKey))
			$this->asperaPublicKey = (string)$xml->asperaPublicKey;
		if(count($xml->asperaPrivateKey))
			$this->asperaPrivateKey = (string)$xml->asperaPrivateKey;
	}
	/**
	 * 
	 * @var string
	 */
	public $sftpHost = null;

	/**
	 * 
	 * @var string
	 */
	public $sftpLogin = null;

	/**
	 * 
	 * @var string
	 */
	public $sftpPass = null;

	/**
	 * 
	 * @var string
	 */
	public $seriesChannel = null;

	/**
	 * 
	 * @var string
	 */
	public $seriesPrimaryCategory = null;

	/**
	 * 
	 * @var array<KalturaString>
	 */
	public $seriesAdditionalCategories;

	/**
	 * 
	 * @var string
	 */
	public $seasonNumber = null;

	/**
	 * 
	 * @var string
	 */
	public $seasonSynopsis = null;

	/**
	 * 
	 * @var string
	 */
	public $seasonTuneInInformation = null;

	/**
	 * 
	 * @var string
	 */
	public $videoMediaType = null;

	/**
	 * 
	 * @var bool
	 */
	public $disableEpisodeNumberCustomValidation = null;

	/**
	 * 
	 * @var \Kaltura\Client\Plugin\ContentDistribution\Enum\DistributionProtocol
	 */
	public $protocol = null;

	/**
	 * 
	 * @var string
	 */
	public $asperaHost = null;

	/**
	 * 
	 * @var string
	 */
	public $asperaLogin = null;

	/**
	 * 
	 * @var string
	 */
	public $asperaPass = null;

	/**
	 * 
	 * @var int
	 */
	public $port = null;

	/**
	 * 
	 * @var string
	 */
	public $passphrase = null;

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

}
