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
namespace Kaltura\Client\Plugin\WebexAPIDropFolder\Type;

/**
 * @package Kaltura
 * @subpackage Client
 */
class WebexAPIIntegrationSetting extends \Kaltura\Client\Plugin\Vendor\Type\IntegrationSetting
{
	public function getKalturaObjectType()
	{
		return 'KalturaWebexAPIIntegrationSetting';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->webexCategory))
			$this->webexCategory = (string)$xml->webexCategory;
		if(count($xml->enableRecordingUpload))
			$this->enableRecordingUpload = (int)$xml->enableRecordingUpload;
		if(count($xml->enableTranscription))
			$this->enableTranscription = (int)$xml->enableTranscription;
		if(count($xml->userMatchingMode))
			$this->userMatchingMode = (int)$xml->userMatchingMode;
		if(count($xml->userPostfix))
			$this->userPostfix = (string)$xml->userPostfix;
		if(count($xml->webexAccountDescription))
			$this->webexAccountDescription = (string)$xml->webexAccountDescription;
		if(count($xml->groupParticipationType))
			$this->groupParticipationType = (int)$xml->groupParticipationType;
		if(count($xml->optOutGroupNames))
			$this->optOutGroupNames = (string)$xml->optOutGroupNames;
		if(count($xml->optInGroupNames))
			$this->optInGroupNames = (string)$xml->optInGroupNames;
		if(count($xml->siteUrl))
			$this->siteUrl = (string)$xml->siteUrl;
	}
	/**
	 * 
	 * @var string
	 */
	public $webexCategory = null;

	/**
	 * 
	 * @var \Kaltura\Client\Enum\NullableBoolean
	 */
	public $enableRecordingUpload = null;

	/**
	 * 
	 * @var \Kaltura\Client\Enum\NullableBoolean
	 */
	public $enableTranscription = null;

	/**
	 * 
	 * @var \Kaltura\Client\Plugin\WebexAPIDropFolder\Enum\WebexAPIUsersMatching
	 */
	public $userMatchingMode = null;

	/**
	 * 
	 * @var string
	 */
	public $userPostfix = null;

	/**
	 * 
	 * @var string
	 */
	public $webexAccountDescription = null;

	/**
	 * 
	 * @var \Kaltura\Client\Plugin\WebexAPIDropFolder\Enum\WebexAPIGroupParticipationType
	 */
	public $groupParticipationType = null;

	/**
	 * 
	 * @var string
	 */
	public $optOutGroupNames = null;

	/**
	 * 
	 * @var string
	 */
	public $optInGroupNames = null;

	/**
	 * 
	 * @var string
	 */
	public $siteUrl = null;

}
