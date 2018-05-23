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
// Copyright (C) 2006-2018  Kaltura Inc.
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
namespace Kaltura\Client\Plugin\Reach\Type;

/**
 * @package Kaltura
 * @subpackage Client
 */
class ReachProfile extends \Kaltura\Client\ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaReachProfile';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->id))
			$this->id = (int)$xml->id;
		if(count($xml->name))
			$this->name = (string)$xml->name;
		if(count($xml->partnerId))
			$this->partnerId = (int)$xml->partnerId;
		if(count($xml->createdAt))
			$this->createdAt = (int)$xml->createdAt;
		if(count($xml->updatedAt))
			$this->updatedAt = (int)$xml->updatedAt;
		if(count($xml->status))
			$this->status = (int)$xml->status;
		if(count($xml->profileType))
			$this->profileType = (int)$xml->profileType;
		if(count($xml->defaultSourceLanguage))
			$this->defaultSourceLanguage = (string)$xml->defaultSourceLanguage;
		if(count($xml->defaultOutputFormat))
			$this->defaultOutputFormat = (int)$xml->defaultOutputFormat;
		if(count($xml->enableMachineModeration))
			$this->enableMachineModeration = (int)$xml->enableMachineModeration;
		if(count($xml->enableHumanModeration))
			$this->enableHumanModeration = (int)$xml->enableHumanModeration;
		if(count($xml->autoDisplayMachineCaptionsOnPlayer))
			$this->autoDisplayMachineCaptionsOnPlayer = (int)$xml->autoDisplayMachineCaptionsOnPlayer;
		if(count($xml->autoDisplayHumanCaptionsOnPlayer))
			$this->autoDisplayHumanCaptionsOnPlayer = (int)$xml->autoDisplayHumanCaptionsOnPlayer;
		if(count($xml->enableMetadataExtraction))
			$this->enableMetadataExtraction = (int)$xml->enableMetadataExtraction;
		if(count($xml->enableSpeakerChangeIndication))
			$this->enableSpeakerChangeIndication = (int)$xml->enableSpeakerChangeIndication;
		if(count($xml->enableAudioTags))
			$this->enableAudioTags = (int)$xml->enableAudioTags;
		if(count($xml->enableProfanityRemoval))
			$this->enableProfanityRemoval = (int)$xml->enableProfanityRemoval;
		if(count($xml->maxCharactersPerCaptionLine))
			$this->maxCharactersPerCaptionLine = (int)$xml->maxCharactersPerCaptionLine;
		if(count($xml->contentDeletionPolicy))
			$this->contentDeletionPolicy = (int)$xml->contentDeletionPolicy;
		if(count($xml->rules))
		{
			if(empty($xml->rules))
				$this->rules = array();
			else
				$this->rules = \Kaltura\Client\ParseUtils::unmarshalArray($xml->rules, "KalturaRule");
		}
		if(count($xml->credit) && !empty($xml->credit))
			$this->credit = \Kaltura\Client\ParseUtils::unmarshalObject($xml->credit, "KalturaBaseVendorCredit");
		if(count($xml->usedCredit))
			$this->usedCredit = (int)$xml->usedCredit;
		if(count($xml->dictionaries))
		{
			if(empty($xml->dictionaries))
				$this->dictionaries = array();
			else
				$this->dictionaries = \Kaltura\Client\ParseUtils::unmarshalArray($xml->dictionaries, "KalturaDictionary");
		}
	}
	/**
	 * 
	 * @var int
	 * @readonly
	 */
	public $id = null;

	/**
	 * The name of the profile
	 * @var string
	 */
	public $name = null;

	/**
	 * 
	 * @var int
	 * @readonly
	 */
	public $partnerId = null;

	/**
	 * 
	 * @var int
	 * @readonly
	 */
	public $createdAt = null;

	/**
	 * 
	 * @var int
	 * @readonly
	 */
	public $updatedAt = null;

	/**
	 * 
	 * @var \Kaltura\Client\Plugin\Reach\Enum\ReachProfileStatus
	 * @readonly
	 */
	public $status = null;

	/**
	 * 
	 * @var \Kaltura\Client\Plugin\Reach\Enum\ReachProfileType
	 */
	public $profileType = null;

	/**
	 * 
	 * @var \Kaltura\Client\Plugin\Reach\Enum\CatalogItemLanguage
	 */
	public $defaultSourceLanguage = null;

	/**
	 * 
	 * @var \Kaltura\Client\Plugin\Reach\Enum\VendorCatalogItemOutputFormat
	 */
	public $defaultOutputFormat = null;

	/**
	 * 
	 * @var \Kaltura\Client\Enum\NullableBoolean
	 */
	public $enableMachineModeration = null;

	/**
	 * 
	 * @var \Kaltura\Client\Enum\NullableBoolean
	 */
	public $enableHumanModeration = null;

	/**
	 * 
	 * @var \Kaltura\Client\Enum\NullableBoolean
	 */
	public $autoDisplayMachineCaptionsOnPlayer = null;

	/**
	 * 
	 * @var \Kaltura\Client\Enum\NullableBoolean
	 */
	public $autoDisplayHumanCaptionsOnPlayer = null;

	/**
	 * 
	 * @var \Kaltura\Client\Enum\NullableBoolean
	 */
	public $enableMetadataExtraction = null;

	/**
	 * 
	 * @var \Kaltura\Client\Enum\NullableBoolean
	 */
	public $enableSpeakerChangeIndication = null;

	/**
	 * 
	 * @var \Kaltura\Client\Enum\NullableBoolean
	 */
	public $enableAudioTags = null;

	/**
	 * 
	 * @var \Kaltura\Client\Enum\NullableBoolean
	 */
	public $enableProfanityRemoval = null;

	/**
	 * 
	 * @var int
	 */
	public $maxCharactersPerCaptionLine = null;

	/**
	 * 
	 * @var \Kaltura\Client\Plugin\Reach\Enum\ReachProfileContentDeletionPolicy
	 */
	public $contentDeletionPolicy = null;

	/**
	 * 
	 * @var array<KalturaRule>
	 */
	public $rules;

	/**
	 * 
	 * @var \Kaltura\Client\Plugin\Reach\Type\BaseVendorCredit
	 */
	public $credit;

	/**
	 * 
	 * @var int
	 * @readonly
	 */
	public $usedCredit = null;

	/**
	 * 
	 * @var array<KalturaDictionary>
	 */
	public $dictionaries;

}
