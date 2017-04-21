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
namespace Kaltura\Client\Plugin\Cielo24\Type;

/**
 * @package Kaltura
 * @subpackage Client
 */
class Cielo24JobProviderData extends \Kaltura\Client\Plugin\Integration\Type\IntegrationJobProviderData
{
	public function getKalturaObjectType()
	{
		return 'KalturaCielo24JobProviderData';
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
		if(count($xml->captionAssetFormats))
			$this->captionAssetFormats = (string)$xml->captionAssetFormats;
		if(count($xml->priority))
			$this->priority = (string)$xml->priority;
		if(count($xml->fidelity))
			$this->fidelity = (string)$xml->fidelity;
		if(count($xml->username))
			$this->username = (string)$xml->username;
		if(count($xml->password))
			$this->password = (string)$xml->password;
		if(count($xml->baseUrl))
			$this->baseUrl = (string)$xml->baseUrl;
		if(count($xml->spokenLanguage))
			$this->spokenLanguage = (string)$xml->spokenLanguage;
		if(count($xml->replaceMediaContent))
		{
			if(!empty($xml->replaceMediaContent))
				$this->replaceMediaContent = true;
			else
				$this->replaceMediaContent = false;
		}
		if(count($xml->additionalParameters))
			$this->additionalParameters = (string)$xml->additionalParameters;
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
	 * Caption formats
	 * @var string
	 */
	public $captionAssetFormats = null;

	/**
	 * 
	 * @var \Kaltura\Client\Plugin\Cielo24\Enum\Cielo24Priority
	 */
	public $priority = null;

	/**
	 * 
	 * @var \Kaltura\Client\Plugin\Cielo24\Enum\Cielo24Fidelity
	 */
	public $fidelity = null;

	/**
	 * Api key for service provider
	 * @var string
	 * @readonly
	 */
	public $username = null;

	/**
	 * Api key for service provider
	 * @var string
	 * @readonly
	 */
	public $password = null;

	/**
	 * Base url for service provider
	 * @var string
	 * @readonly
	 */
	public $baseUrl = null;

	/**
	 * Transcript content language
	 * @var \Kaltura\Client\Enum\Language
	 */
	public $spokenLanguage = null;

	/**
	 * should replace remote media content
	 * @var bool
	 */
	public $replaceMediaContent = null;

	/**
	 * additional parameters to send to Cielo24
	 * @var string
	 */
	public $additionalParameters = null;

}
