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
namespace Kaltura\Client\Plugin\DexterIntegration\Type;

/**
 * @package Kaltura
 * @subpackage Client
 */
class DexterIntegrationJobProviderData extends \Kaltura\Client\Plugin\Integration\Type\IntegrationJobProviderData
{
	public function getKalturaObjectType()
	{
		return 'KalturaDexterIntegrationJobProviderData';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->metadataProfileId))
			$this->metadataProfileId = (int)$xml->metadataProfileId;
		if(count($xml->transcriptAssetId))
			$this->transcriptAssetId = (string)$xml->transcriptAssetId;
		if(count($xml->entryId))
			$this->entryId = (string)$xml->entryId;
		if(count($xml->voicebaseApiKey))
			$this->voicebaseApiKey = (string)$xml->voicebaseApiKey;
		if(count($xml->voicebaseApiPassword))
			$this->voicebaseApiPassword = (string)$xml->voicebaseApiPassword;
	}
	/**
	 * ID of the metadata profile for the extracted term metadata
	 * @var int
	 */
	public $metadataProfileId = null;

	/**
	 * ID of the transcript asset
	 * @var string
	 */
	public $transcriptAssetId = null;

	/**
	 * ID of the entry
	 * @var string
	 */
	public $entryId = null;

	/**
	 * Voicebase API key to fetch transcript tokens
	 * @var string
	 */
	public $voicebaseApiKey = null;

	/**
	 * Voicebase API password to fetch transcript tokens
	 * @var string
	 */
	public $voicebaseApiPassword = null;

}
