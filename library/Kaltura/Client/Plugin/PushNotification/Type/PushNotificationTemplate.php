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
namespace Kaltura\Client\Plugin\PushNotification\Type;

/**
 * @package Kaltura
 * @subpackage Client
 */
class PushNotificationTemplate extends \Kaltura\Client\Plugin\EventNotification\Type\EventNotificationTemplate
{
	public function getKalturaObjectType()
	{
		return 'KalturaPushNotificationTemplate';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->queueNameParameters))
		{
			if(empty($xml->queueNameParameters))
				$this->queueNameParameters = array();
			else
				$this->queueNameParameters = \Kaltura\Client\ParseUtils::unmarshalArray($xml->queueNameParameters, "KalturaPushEventNotificationParameter");
		}
		if(count($xml->queueKeyParameters))
		{
			if(empty($xml->queueKeyParameters))
				$this->queueKeyParameters = array();
			else
				$this->queueKeyParameters = \Kaltura\Client\ParseUtils::unmarshalArray($xml->queueKeyParameters, "KalturaPushEventNotificationParameter");
		}
		if(count($xml->apiObjectType))
			$this->apiObjectType = (string)$xml->apiObjectType;
		if(count($xml->objectFormat))
			$this->objectFormat = (int)$xml->objectFormat;
		if(count($xml->responseProfileId))
			$this->responseProfileId = (int)$xml->responseProfileId;
	}
	/**
	 * Define the content dynamic parameters
	 * @var array<KalturaPushEventNotificationParameter>
	 */
	public $queueNameParameters;

	/**
	 * Define the content dynamic parameters
	 * @var array<KalturaPushEventNotificationParameter>
	 */
	public $queueKeyParameters;

	/**
	 * Kaltura API object type
	 * @var string
	 */
	public $apiObjectType = null;

	/**
	 * Kaltura Object format
	 * @var \Kaltura\Client\Enum\ResponseType
	 */
	public $objectFormat = null;

	/**
	 * Kaltura response-profile id
	 * @var int
	 */
	public $responseProfileId = null;

}
