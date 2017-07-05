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
class NotificationsPartnerSettings extends \Kaltura\Client\ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaNotificationsPartnerSettings';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->pushNotificationEnabled))
		{
			if(!empty($xml->pushNotificationEnabled))
				$this->pushNotificationEnabled = true;
			else
				$this->pushNotificationEnabled = false;
		}
		if(count($xml->pushSystemAnnouncementsEnabled))
		{
			if(!empty($xml->pushSystemAnnouncementsEnabled))
				$this->pushSystemAnnouncementsEnabled = true;
			else
				$this->pushSystemAnnouncementsEnabled = false;
		}
		if(count($xml->pushStartHour))
			$this->pushStartHour = (int)$xml->pushStartHour;
		if(count($xml->pushEndHour))
			$this->pushEndHour = (int)$xml->pushEndHour;
		if(count($xml->inboxEnabled))
		{
			if(!empty($xml->inboxEnabled))
				$this->inboxEnabled = true;
			else
				$this->inboxEnabled = false;
		}
		if(count($xml->messageTTLDays))
			$this->messageTTLDays = (int)$xml->messageTTLDays;
		if(count($xml->automaticIssueFollowNotification))
		{
			if(!empty($xml->automaticIssueFollowNotification))
				$this->automaticIssueFollowNotification = true;
			else
				$this->automaticIssueFollowNotification = false;
		}
		if(count($xml->topicExpirationDurationDays))
			$this->topicExpirationDurationDays = (int)$xml->topicExpirationDurationDays;
	}
	/**
	 * Push notification capability is enabled for the account
	 * @var bool
	 */
	public $pushNotificationEnabled = null;

	/**
	 * System announcement capability is enabled for the account
	 * @var bool
	 */
	public $pushSystemAnnouncementsEnabled = null;

	/**
	 * Window start time (UTC) for send automated push messages
	 * @var int
	 */
	public $pushStartHour = null;

	/**
	 * Window end time (UTC) for send automated push messages
	 * @var int
	 */
	public $pushEndHour = null;

	/**
	 * Inbox enabled
	 * @var bool
	 */
	public $inboxEnabled = null;

	/**
	 * Message TTL in days
	 * @var int
	 */
	public $messageTTLDays = null;

	/**
	 * Automatic issue follow notification
	 * @var bool
	 */
	public $automaticIssueFollowNotification = null;

	/**
	 * Topic expiration duration in days
	 * @var int
	 */
	public $topicExpirationDurationDays = null;

}
