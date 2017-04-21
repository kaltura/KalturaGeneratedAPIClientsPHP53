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
namespace Kaltura\Client\Plugin\Voicebase\Type;

/**
 * @package Kaltura
 * @subpackage Client
 */
class VoicebaseJobProviderData extends \Kaltura\Client\Plugin\Integration\Type\IntegrationJobProviderData
{
	public function getKalturaObjectType()
	{
		return 'KalturaVoicebaseJobProviderData';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->entryId))
			$this->entryId = (string)$xml->entryId;
		if(count($xml->flavorAssetId))
			$this->flavorAssetId = (string)$xml->flavorAssetId;
		if(count($xml->transcriptId))
			$this->transcriptId = (string)$xml->transcriptId;
		if(count($xml->captionAssetFormats))
			$this->captionAssetFormats = (string)$xml->captionAssetFormats;
		if(count($xml->apiKey))
			$this->apiKey = (string)$xml->apiKey;
		if(count($xml->apiPassword))
			$this->apiPassword = (string)$xml->apiPassword;
		if(count($xml->spokenLanguage))
			$this->spokenLanguage = (string)$xml->spokenLanguage;
		if(count($xml->fileLocation))
			$this->fileLocation = (string)$xml->fileLocation;
		if(count($xml->replaceMediaContent))
		{
			if(!empty($xml->replaceMediaContent))
				$this->replaceMediaContent = true;
			else
				$this->replaceMediaContent = false;
		}
	}
	/**
	 * Entry ID
	 * @var string
	 */
	public $entryId = null;

	/**
	 * Flavor ID
	 * @var string
	 */
	public $flavorAssetId = null;

	/**
	 * input Transcript-asset ID
	 * @var string
	 */
	public $transcriptId = null;

	/**
	 * Caption formats
	 * @var string
	 */
	public $captionAssetFormats = null;

	/**
	 * Api key for service provider
	 * @var string
	 * @readonly
	 */
	public $apiKey = null;

	/**
	 * Api key for service provider
	 * @var string
	 * @readonly
	 */
	public $apiPassword = null;

	/**
	 * Transcript content language
	 * @var \Kaltura\Client\Enum\Language
	 */
	public $spokenLanguage = null;

	/**
	 * Transcript Content location
	 * @var string
	 * @readonly
	 */
	public $fileLocation = null;

	/**
	 * should replace remote media content
	 * @var bool
	 */
	public $replaceMediaContent = null;

}
