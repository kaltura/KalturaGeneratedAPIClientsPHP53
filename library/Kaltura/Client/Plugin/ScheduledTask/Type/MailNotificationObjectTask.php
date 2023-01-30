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
namespace Kaltura\Client\Plugin\ScheduledTask\Type;

/**
 * @package Kaltura
 * @subpackage Client
 */
class MailNotificationObjectTask extends \Kaltura\Client\Plugin\ScheduledTask\Type\ObjectTask
{
	public function getKalturaObjectType()
	{
		return 'KalturaMailNotificationObjectTask';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->mailTo))
			$this->mailTo = (string)$xml->mailTo;
		if(count($xml->sender))
			$this->sender = (string)$xml->sender;
		if(count($xml->subject))
			$this->subject = (string)$xml->subject;
		if(count($xml->message))
			$this->message = (string)$xml->message;
		if(count($xml->footer))
			$this->footer = (string)$xml->footer;
		if(count($xml->link))
			$this->link = (string)$xml->link;
		if(count($xml->sendToUsers))
		{
			if(!empty($xml->sendToUsers) && $xml->sendToUsers != 'false')
				$this->sendToUsers = true;
			else
				$this->sendToUsers = false;
		}
	}
	/**
	 * The mail to send the notification to
	 * @var string
	 */
	public $mailTo = null;

	/**
	 * The sender in the mail
	 * @var string
	 */
	public $sender = null;

	/**
	 * The subject of the entry
	 * @var string
	 */
	public $subject = null;

	/**
	 * The message to send in the notification mail
	 * @var string
	 */
	public $message = null;

	/**
	 * The footer of the message to send in the notification mail
	 * @var string
	 */
	public $footer = null;

	/**
	 * The basic link for the KMC site
	 * @var string
	 */
	public $link = null;

	/**
	 * Send the mail to each user
	 * @var bool
	 */
	public $sendToUsers = null;

}
