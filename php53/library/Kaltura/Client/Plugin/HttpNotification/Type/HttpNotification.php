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
// Copyright (C) 2006-2015  Kaltura Inc.
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
namespace Kaltura\Client\Plugin\HttpNotification\Type;

/**
 * Wrapper for sent notifications 
 *  
 * @package Kaltura
 * @subpackage Client
 */
class HttpNotification extends \Kaltura\Client\ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaHttpNotification';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(!empty($xml->object))
			$this->object = \Kaltura\Client\ParseUtils::unmarshalObject($xml->object, "KalturaObjectBase");
		$this->eventObjectType = (string)$xml->eventObjectType;
		if(count($xml->eventNotificationJobId))
			$this->eventNotificationJobId = (int)$xml->eventNotificationJobId;
		if(count($xml->templateId))
			$this->templateId = (int)$xml->templateId;
		$this->templateName = (string)$xml->templateName;
		$this->templateSystemName = (string)$xml->templateSystemName;
		$this->eventType = (string)$xml->eventType;
	}
	/**
	 * Object that triggered the notification
	 * 	 
	 * @var \Kaltura\Client\Type\KalturaObjectBase
	 */
	public $object;

	/**
	 * Object type that triggered the notification
	 * 	 
	 * @var \Kaltura\Client\Plugin\EventNotification\Enum\EventNotificationEventObjectType
	 */
	public $eventObjectType = null;

	/**
	 * ID of the batch job that execute the notification
	 * 	 
	 * @var int
	 */
	public $eventNotificationJobId = null;

	/**
	 * ID of the template that triggered the notification
	 * 	 
	 * @var int
	 */
	public $templateId = null;

	/**
	 * Name of the template that triggered the notification
	 * 	 
	 * @var string
	 */
	public $templateName = null;

	/**
	 * System name of the template that triggered the notification
	 * 	 
	 * @var string
	 */
	public $templateSystemName = null;

	/**
	 * Ecent type that triggered the notification
	 * 	 
	 * @var \Kaltura\Client\Plugin\EventNotification\Enum\EventNotificationEventType
	 */
	public $eventType = null;

}
