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
namespace Kaltura\Client\Plugin\Integration\Type;

/**
 * @package Kaltura
 * @subpackage Client
 */
class IntegrationJobData extends \Kaltura\Client\Type\JobData
{
	public function getKalturaObjectType()
	{
		return 'KalturaIntegrationJobData';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->callbackNotificationUrl))
			$this->callbackNotificationUrl = (string)$xml->callbackNotificationUrl;
		if(count($xml->providerType))
			$this->providerType = (string)$xml->providerType;
		if(count($xml->providerData) && !empty($xml->providerData))
			$this->providerData = \Kaltura\Client\ParseUtils::unmarshalObject($xml->providerData, "KalturaIntegrationJobProviderData");
		if(count($xml->triggerType))
			$this->triggerType = (string)$xml->triggerType;
		if(count($xml->triggerData) && !empty($xml->triggerData))
			$this->triggerData = \Kaltura\Client\ParseUtils::unmarshalObject($xml->triggerData, "KalturaIntegrationJobTriggerData");
	}
	/**
	 * 
	 * @var string
	 * @readonly
	 */
	public $callbackNotificationUrl = null;

	/**
	 * 
	 * @var \Kaltura\Client\Plugin\Integration\Enum\IntegrationProviderType
	 */
	public $providerType = null;

	/**
	 * Additional data that relevant for the provider only
	 * @var \Kaltura\Client\Plugin\Integration\Type\IntegrationJobProviderData
	 */
	public $providerData;

	/**
	 * 
	 * @var \Kaltura\Client\Plugin\Integration\Enum\IntegrationTriggerType
	 */
	public $triggerType = null;

	/**
	 * Additional data that relevant for the trigger only
	 * @var \Kaltura\Client\Plugin\Integration\Type\IntegrationJobTriggerData
	 */
	public $triggerData;

}
