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
// Copyright (C) 2006-2021  Kaltura Inc.
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
class NotificationJobData extends \Kaltura\Client\Type\JobData
{
	public function getKalturaObjectType()
	{
		return 'KalturaNotificationJobData';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->userId))
			$this->userId = (string)$xml->userId;
		if(count($xml->type))
			$this->type = (int)$xml->type;
		if(count($xml->typeAsString))
			$this->typeAsString = (string)$xml->typeAsString;
		if(count($xml->objectId))
			$this->objectId = (string)$xml->objectId;
		if(count($xml->status))
			$this->status = (int)$xml->status;
		if(count($xml->data))
			$this->data = (string)$xml->data;
		if(count($xml->numberOfAttempts))
			$this->numberOfAttempts = (int)$xml->numberOfAttempts;
		if(count($xml->notificationResult))
			$this->notificationResult = (string)$xml->notificationResult;
		if(count($xml->objType))
			$this->objType = (int)$xml->objType;
	}
	/**
	 * 
	 * @var string
	 */
	public $userId = null;

	/**
	 * 
	 * @var \Kaltura\Client\Enum\NotificationType
	 */
	public $type = null;

	/**
	 * 
	 * @var string
	 */
	public $typeAsString = null;

	/**
	 * 
	 * @var string
	 */
	public $objectId = null;

	/**
	 * 
	 * @var \Kaltura\Client\Enum\NotificationStatus
	 */
	public $status = null;

	/**
	 * 
	 * @var string
	 */
	public $data = null;

	/**
	 * 
	 * @var int
	 */
	public $numberOfAttempts = null;

	/**
	 * 
	 * @var string
	 */
	public $notificationResult = null;

	/**
	 * 
	 * @var \Kaltura\Client\Enum\NotificationObjectType
	 */
	public $objType = null;

}
