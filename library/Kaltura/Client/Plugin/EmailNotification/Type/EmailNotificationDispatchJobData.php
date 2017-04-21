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
namespace Kaltura\Client\Plugin\EmailNotification\Type;

/**
 * @package Kaltura
 * @subpackage Client
 */
class EmailNotificationDispatchJobData extends \Kaltura\Client\Plugin\EventNotification\Type\EventNotificationDispatchJobData
{
	public function getKalturaObjectType()
	{
		return 'KalturaEmailNotificationDispatchJobData';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->fromEmail))
			$this->fromEmail = (string)$xml->fromEmail;
		if(count($xml->fromName))
			$this->fromName = (string)$xml->fromName;
		if(count($xml->to) && !empty($xml->to))
			$this->to = \Kaltura\Client\ParseUtils::unmarshalObject($xml->to, "KalturaEmailNotificationRecipientJobData");
		if(count($xml->cc) && !empty($xml->cc))
			$this->cc = \Kaltura\Client\ParseUtils::unmarshalObject($xml->cc, "KalturaEmailNotificationRecipientJobData");
		if(count($xml->bcc) && !empty($xml->bcc))
			$this->bcc = \Kaltura\Client\ParseUtils::unmarshalObject($xml->bcc, "KalturaEmailNotificationRecipientJobData");
		if(count($xml->replyTo) && !empty($xml->replyTo))
			$this->replyTo = \Kaltura\Client\ParseUtils::unmarshalObject($xml->replyTo, "KalturaEmailNotificationRecipientJobData");
		if(count($xml->priority))
			$this->priority = (int)$xml->priority;
		if(count($xml->confirmReadingTo))
			$this->confirmReadingTo = (string)$xml->confirmReadingTo;
		if(count($xml->hostname))
			$this->hostname = (string)$xml->hostname;
		if(count($xml->messageID))
			$this->messageID = (string)$xml->messageID;
		if(count($xml->customHeaders))
		{
			if(empty($xml->customHeaders))
				$this->customHeaders = array();
			else
				$this->customHeaders = \Kaltura\Client\ParseUtils::unmarshalArray($xml->customHeaders, "KalturaKeyValue");
		}
	}
	/**
	 * Define the email sender email
	 * @var string
	 */
	public $fromEmail = null;

	/**
	 * Define the email sender name
	 * @var string
	 */
	public $fromName = null;

	/**
	 * Email recipient emails and names, key is mail address and value is the name
	 * @var \Kaltura\Client\Plugin\EmailNotification\Type\EmailNotificationRecipientJobData
	 */
	public $to;

	/**
	 * Email cc emails and names, key is mail address and value is the name
	 * @var \Kaltura\Client\Plugin\EmailNotification\Type\EmailNotificationRecipientJobData
	 */
	public $cc;

	/**
	 * Email bcc emails and names, key is mail address and value is the name
	 * @var \Kaltura\Client\Plugin\EmailNotification\Type\EmailNotificationRecipientJobData
	 */
	public $bcc;

	/**
	 * Email addresses that a replies should be sent to, key is mail address and value is the name
	 * @var \Kaltura\Client\Plugin\EmailNotification\Type\EmailNotificationRecipientJobData
	 */
	public $replyTo;

	/**
	 * Define the email priority
	 * @var \Kaltura\Client\Plugin\EmailNotification\Enum\EmailNotificationTemplatePriority
	 */
	public $priority = null;

	/**
	 * Email address that a reading confirmation will be sent to
	 * @var string
	 */
	public $confirmReadingTo = null;

	/**
	 * Hostname to use in Message-Id and Received headers and as default HELO string. 
	 * 	 If empty, the value returned by SERVER_NAME is used or 'localhost.localdomain'.
	 * @var string
	 */
	public $hostname = null;

	/**
	 * Sets the message ID to be used in the Message-Id header.
	 * 	 If empty, a unique id will be generated.
	 * @var string
	 */
	public $messageID = null;

	/**
	 * Adds a e-mail custom header
	 * @var array<KalturaKeyValue>
	 */
	public $customHeaders;

}
