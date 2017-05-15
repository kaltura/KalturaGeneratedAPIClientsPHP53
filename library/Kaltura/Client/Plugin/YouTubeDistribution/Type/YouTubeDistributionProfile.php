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
class YouTubeDistributionProfile extends \Kaltura\Client\Plugin\ContentDistribution\Type\ConfigurableDistributionProfile
{
	public function getKalturaObjectType()
	{
		return 'KalturaYouTubeDistributionProfile';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->feedSpecVersion))
			$this->feedSpecVersion = (string)$xml->feedSpecVersion;
		if(count($xml->username))
			$this->username = (string)$xml->username;
		if(count($xml->notificationEmail))
			$this->notificationEmail = (string)$xml->notificationEmail;
		if(count($xml->sftpHost))
			$this->sftpHost = (string)$xml->sftpHost;
		if(count($xml->sftpPort))
			$this->sftpPort = (int)$xml->sftpPort;
		if(count($xml->sftpLogin))
			$this->sftpLogin = (string)$xml->sftpLogin;
		if(count($xml->sftpPublicKey))
			$this->sftpPublicKey = (string)$xml->sftpPublicKey;
		if(count($xml->sftpPrivateKey))
			$this->sftpPrivateKey = (string)$xml->sftpPrivateKey;
		if(count($xml->sftpBaseDir))
			$this->sftpBaseDir = (string)$xml->sftpBaseDir;
		if(count($xml->ownerName))
			$this->ownerName = (string)$xml->ownerName;
		if(count($xml->defaultCategory))
			$this->defaultCategory = (string)$xml->defaultCategory;
		if(count($xml->allowComments))
			$this->allowComments = (string)$xml->allowComments;
		if(count($xml->allowEmbedding))
			$this->allowEmbedding = (string)$xml->allowEmbedding;
		if(count($xml->allowRatings))
			$this->allowRatings = (string)$xml->allowRatings;
		if(count($xml->allowResponses))
			$this->allowResponses = (string)$xml->allowResponses;
		if(count($xml->commercialPolicy))
			$this->commercialPolicy = (string)$xml->commercialPolicy;
		if(count($xml->ugcPolicy))
			$this->ugcPolicy = (string)$xml->ugcPolicy;
		if(count($xml->target))
			$this->target = (string)$xml->target;
		if(count($xml->adServerPartnerId))
			$this->adServerPartnerId = (string)$xml->adServerPartnerId;
		if(count($xml->enableAdServer))
		{
			if(!empty($xml->enableAdServer))
				$this->enableAdServer = true;
			else
				$this->enableAdServer = false;
		}
		if(count($xml->allowPreRollAds))
		{
			if(!empty($xml->allowPreRollAds))
				$this->allowPreRollAds = true;
			else
				$this->allowPreRollAds = false;
		}
		if(count($xml->allowPostRollAds))
		{
			if(!empty($xml->allowPostRollAds))
				$this->allowPostRollAds = true;
			else
				$this->allowPostRollAds = false;
		}
		if(count($xml->strict))
			$this->strict = (string)$xml->strict;
		if(count($xml->overrideManualEdits))
			$this->overrideManualEdits = (string)$xml->overrideManualEdits;
		if(count($xml->urgentReference))
			$this->urgentReference = (string)$xml->urgentReference;
		if(count($xml->allowSyndication))
			$this->allowSyndication = (string)$xml->allowSyndication;
		if(count($xml->hideViewCount))
			$this->hideViewCount = (string)$xml->hideViewCount;
		if(count($xml->allowAdsenseForVideo))
			$this->allowAdsenseForVideo = (string)$xml->allowAdsenseForVideo;
		if(count($xml->allowInvideo))
			$this->allowInvideo = (string)$xml->allowInvideo;
		if(count($xml->allowMidRollAds))
		{
			if(!empty($xml->allowMidRollAds))
				$this->allowMidRollAds = true;
			else
				$this->allowMidRollAds = false;
		}
		if(count($xml->instreamStandard))
			$this->instreamStandard = (string)$xml->instreamStandard;
		if(count($xml->instreamTrueview))
			$this->instreamTrueview = (string)$xml->instreamTrueview;
		if(count($xml->claimType))
			$this->claimType = (string)$xml->claimType;
		if(count($xml->blockOutsideOwnership))
			$this->blockOutsideOwnership = (string)$xml->blockOutsideOwnership;
		if(count($xml->captionAutosync))
			$this->captionAutosync = (string)$xml->captionAutosync;
		if(count($xml->deleteReference))
		{
			if(!empty($xml->deleteReference))
				$this->deleteReference = true;
			else
				$this->deleteReference = false;
		}
		if(count($xml->releaseClaims))
		{
			if(!empty($xml->releaseClaims))
				$this->releaseClaims = true;
			else
				$this->releaseClaims = false;
		}
		if(count($xml->apiAuthorizeUrl))
			$this->apiAuthorizeUrl = (string)$xml->apiAuthorizeUrl;
	}
	/**
	 * 
	 * @var \Kaltura\Client\Plugin\YouTubeDistribution\Enum\YouTubeDistributionFeedSpecVersion
	 */
	public $feedSpecVersion = null;

	/**
	 * 
	 * @var string
	 */
	public $username = null;

	/**
	 * 
	 * @var string
	 */
	public $notificationEmail = null;

	/**
	 * 
	 * @var string
	 */
	public $sftpHost = null;

	/**
	 * 
	 * @var int
	 */
	public $sftpPort = null;

	/**
	 * 
	 * @var string
	 */
	public $sftpLogin = null;

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
	 * @var string
	 */
	public $sftpBaseDir = null;

	/**
	 * 
	 * @var string
	 */
	public $ownerName = null;

	/**
	 * 
	 * @var string
	 */
	public $defaultCategory = null;

	/**
	 * 
	 * @var string
	 */
	public $allowComments = null;

	/**
	 * 
	 * @var string
	 */
	public $allowEmbedding = null;

	/**
	 * 
	 * @var string
	 */
	public $allowRatings = null;

	/**
	 * 
	 * @var string
	 */
	public $allowResponses = null;

	/**
	 * 
	 * @var string
	 */
	public $commercialPolicy = null;

	/**
	 * 
	 * @var string
	 */
	public $ugcPolicy = null;

	/**
	 * 
	 * @var string
	 */
	public $target = null;

	/**
	 * 
	 * @var string
	 */
	public $adServerPartnerId = null;

	/**
	 * 
	 * @var bool
	 */
	public $enableAdServer = null;

	/**
	 * 
	 * @var bool
	 */
	public $allowPreRollAds = null;

	/**
	 * 
	 * @var bool
	 */
	public $allowPostRollAds = null;

	/**
	 * 
	 * @var string
	 */
	public $strict = null;

	/**
	 * 
	 * @var string
	 */
	public $overrideManualEdits = null;

	/**
	 * 
	 * @var string
	 */
	public $urgentReference = null;

	/**
	 * 
	 * @var string
	 */
	public $allowSyndication = null;

	/**
	 * 
	 * @var string
	 */
	public $hideViewCount = null;

	/**
	 * 
	 * @var string
	 */
	public $allowAdsenseForVideo = null;

	/**
	 * 
	 * @var string
	 */
	public $allowInvideo = null;

	/**
	 * 
	 * @var bool
	 */
	public $allowMidRollAds = null;

	/**
	 * 
	 * @var string
	 */
	public $instreamStandard = null;

	/**
	 * 
	 * @var string
	 */
	public $instreamTrueview = null;

	/**
	 * 
	 * @var string
	 */
	public $claimType = null;

	/**
	 * 
	 * @var string
	 */
	public $blockOutsideOwnership = null;

	/**
	 * 
	 * @var string
	 */
	public $captionAutosync = null;

	/**
	 * 
	 * @var bool
	 */
	public $deleteReference = null;

	/**
	 * 
	 * @var bool
	 */
	public $releaseClaims = null;

	/**
	 * 
	 * @var string
	 */
	public $apiAuthorizeUrl = null;

}
