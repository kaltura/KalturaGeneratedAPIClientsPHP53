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
// Copyright (C) 2006-2022  Kaltura Inc.
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
namespace Kaltura\Client\Plugin\Vendor\Type;

/**
 * @package Kaltura
 * @subpackage Client
 */
class ZoomIntegrationSetting extends \Kaltura\Client\Plugin\Vendor\Type\IntegrationSetting
{
	public function getKalturaObjectType()
	{
		return 'KalturaZoomIntegrationSetting';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->zoomCategory))
			$this->zoomCategory = (string)$xml->zoomCategory;
		if(count($xml->enableRecordingUpload))
			$this->enableRecordingUpload = (int)$xml->enableRecordingUpload;
		if(count($xml->zoomUserMatchingMode))
			$this->zoomUserMatchingMode = (int)$xml->zoomUserMatchingMode;
		if(count($xml->zoomUserPostfix))
			$this->zoomUserPostfix = (string)$xml->zoomUserPostfix;
		if(count($xml->zoomWebinarCategory))
			$this->zoomWebinarCategory = (string)$xml->zoomWebinarCategory;
		if(count($xml->enableWebinarUploads))
			$this->enableWebinarUploads = (int)$xml->enableWebinarUploads;
		if(count($xml->jwtToken))
			$this->jwtToken = (string)$xml->jwtToken;
		if(count($xml->enableZoomTranscription))
			$this->enableZoomTranscription = (int)$xml->enableZoomTranscription;
		if(count($xml->zoomAccountDescription))
			$this->zoomAccountDescription = (string)$xml->zoomAccountDescription;
		if(count($xml->optOutGroupNames))
			$this->optOutGroupNames = (string)$xml->optOutGroupNames;
		if(count($xml->optInGroupNames))
			$this->optInGroupNames = (string)$xml->optInGroupNames;
		if(count($xml->groupParticipationType))
			$this->groupParticipationType = (int)$xml->groupParticipationType;
	}
	/**
	 * 
	 * @var string
	 */
	public $zoomCategory = null;

	/**
	 * 
	 * @var \Kaltura\Client\Enum\NullableBoolean
	 */
	public $enableRecordingUpload = null;

	/**
	 * 
	 * @var \Kaltura\Client\Plugin\Vendor\Enum\ZoomUsersMatching
	 */
	public $zoomUserMatchingMode = null;

	/**
	 * 
	 * @var string
	 */
	public $zoomUserPostfix = null;

	/**
	 * 
	 * @var string
	 */
	public $zoomWebinarCategory = null;

	/**
	 * 
	 * @var \Kaltura\Client\Enum\NullableBoolean
	 */
	public $enableWebinarUploads = null;

	/**
	 * 
	 * @var string
	 */
	public $jwtToken = null;

	/**
	 * 
	 * @var \Kaltura\Client\Enum\NullableBoolean
	 */
	public $enableZoomTranscription = null;

	/**
	 * 
	 * @var string
	 */
	public $zoomAccountDescription = null;

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
	 * @var \Kaltura\Client\Enum\ZoomGroupParticipationType
	 */
	public $groupParticipationType = null;

}
