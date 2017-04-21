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
namespace Kaltura\Client\Type;

/**
 * @package Kaltura
 * @subpackage Client
 */
class EntryContextDataResult extends \Kaltura\Client\Type\ContextDataResult
{
	public function getKalturaObjectType()
	{
		return 'KalturaEntryContextDataResult';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->isSiteRestricted))
		{
			if(!empty($xml->isSiteRestricted))
				$this->isSiteRestricted = true;
			else
				$this->isSiteRestricted = false;
		}
		if(count($xml->isCountryRestricted))
		{
			if(!empty($xml->isCountryRestricted))
				$this->isCountryRestricted = true;
			else
				$this->isCountryRestricted = false;
		}
		if(count($xml->isSessionRestricted))
		{
			if(!empty($xml->isSessionRestricted))
				$this->isSessionRestricted = true;
			else
				$this->isSessionRestricted = false;
		}
		if(count($xml->isIpAddressRestricted))
		{
			if(!empty($xml->isIpAddressRestricted))
				$this->isIpAddressRestricted = true;
			else
				$this->isIpAddressRestricted = false;
		}
		if(count($xml->isUserAgentRestricted))
		{
			if(!empty($xml->isUserAgentRestricted))
				$this->isUserAgentRestricted = true;
			else
				$this->isUserAgentRestricted = false;
		}
		if(count($xml->previewLength))
			$this->previewLength = (int)$xml->previewLength;
		if(count($xml->isScheduledNow))
		{
			if(!empty($xml->isScheduledNow))
				$this->isScheduledNow = true;
			else
				$this->isScheduledNow = false;
		}
		if(count($xml->isAdmin))
		{
			if(!empty($xml->isAdmin))
				$this->isAdmin = true;
			else
				$this->isAdmin = false;
		}
		if(count($xml->streamerType))
			$this->streamerType = (string)$xml->streamerType;
		if(count($xml->mediaProtocol))
			$this->mediaProtocol = (string)$xml->mediaProtocol;
		if(count($xml->storageProfilesXML))
			$this->storageProfilesXML = (string)$xml->storageProfilesXML;
		if(count($xml->accessControlMessages))
		{
			if(empty($xml->accessControlMessages))
				$this->accessControlMessages = array();
			else
				$this->accessControlMessages = \Kaltura\Client\ParseUtils::unmarshalArray($xml->accessControlMessages, "KalturaString");
		}
		if(count($xml->accessControlActions))
		{
			if(empty($xml->accessControlActions))
				$this->accessControlActions = array();
			else
				$this->accessControlActions = \Kaltura\Client\ParseUtils::unmarshalArray($xml->accessControlActions, "KalturaRuleAction");
		}
		if(count($xml->flavorAssets))
		{
			if(empty($xml->flavorAssets))
				$this->flavorAssets = array();
			else
				$this->flavorAssets = \Kaltura\Client\ParseUtils::unmarshalArray($xml->flavorAssets, "KalturaFlavorAsset");
		}
		if(count($xml->msDuration))
			$this->msDuration = (int)$xml->msDuration;
		if(count($xml->pluginData))
		{
			if(empty($xml->pluginData))
				$this->pluginData = array();
			else
				$this->pluginData = \Kaltura\Client\ParseUtils::unmarshalMap($xml->pluginData, "KalturaPluginData");
		}
	}
	/**
	 * 
	 * @var bool
	 */
	public $isSiteRestricted = null;

	/**
	 * 
	 * @var bool
	 */
	public $isCountryRestricted = null;

	/**
	 * 
	 * @var bool
	 */
	public $isSessionRestricted = null;

	/**
	 * 
	 * @var bool
	 */
	public $isIpAddressRestricted = null;

	/**
	 * 
	 * @var bool
	 */
	public $isUserAgentRestricted = null;

	/**
	 * 
	 * @var int
	 */
	public $previewLength = null;

	/**
	 * 
	 * @var bool
	 */
	public $isScheduledNow = null;

	/**
	 * 
	 * @var bool
	 */
	public $isAdmin = null;

	/**
	 * http/rtmp/hdnetwork
	 * @var string
	 */
	public $streamerType = null;

	/**
	 * http/https, rtmp/rtmpe
	 * @var string
	 */
	public $mediaProtocol = null;

	/**
	 * 
	 * @var string
	 */
	public $storageProfilesXML = null;

	/**
	 * Array of messages as received from the access control rules that invalidated
	 * @var array<KalturaString>
	 */
	public $accessControlMessages;

	/**
	 * Array of actions as received from the access control rules that invalidated
	 * @var array<KalturaRuleAction>
	 */
	public $accessControlActions;

	/**
	 * Array of allowed flavor assets according to access control limitations and requested tags
	 * @var array<KalturaFlavorAsset>
	 */
	public $flavorAssets;

	/**
	 * The duration of the entry in milliseconds
	 * @var int
	 */
	public $msDuration = null;

	/**
	 * Array of allowed flavor assets according to access control limitations and requested tags
	 * @var array<string, KalturaPluginData>
	 */
	public $pluginData;

}
