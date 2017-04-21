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
class EmailIngestionProfile extends \Kaltura\Client\ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaEmailIngestionProfile';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->id))
			$this->id = (int)$xml->id;
		if(count($xml->name))
			$this->name = (string)$xml->name;
		if(count($xml->description))
			$this->description = (string)$xml->description;
		if(count($xml->emailAddress))
			$this->emailAddress = (string)$xml->emailAddress;
		if(count($xml->mailboxId))
			$this->mailboxId = (string)$xml->mailboxId;
		if(count($xml->partnerId))
			$this->partnerId = (int)$xml->partnerId;
		if(count($xml->conversionProfile2Id))
			$this->conversionProfile2Id = (int)$xml->conversionProfile2Id;
		if(count($xml->moderationStatus))
			$this->moderationStatus = (int)$xml->moderationStatus;
		if(count($xml->status))
			$this->status = (int)$xml->status;
		if(count($xml->createdAt))
			$this->createdAt = (string)$xml->createdAt;
		if(count($xml->defaultCategory))
			$this->defaultCategory = (string)$xml->defaultCategory;
		if(count($xml->defaultUserId))
			$this->defaultUserId = (string)$xml->defaultUserId;
		if(count($xml->defaultTags))
			$this->defaultTags = (string)$xml->defaultTags;
		if(count($xml->defaultAdminTags))
			$this->defaultAdminTags = (string)$xml->defaultAdminTags;
		if(count($xml->maxAttachmentSizeKbytes))
			$this->maxAttachmentSizeKbytes = (int)$xml->maxAttachmentSizeKbytes;
		if(count($xml->maxAttachmentsPerMail))
			$this->maxAttachmentsPerMail = (int)$xml->maxAttachmentsPerMail;
	}
	/**
	 * 
	 * @var int
	 * @readonly
	 */
	public $id = null;

	/**
	 * 
	 * @var string
	 */
	public $name = null;

	/**
	 * 
	 * @var string
	 */
	public $description = null;

	/**
	 * 
	 * @var string
	 */
	public $emailAddress = null;

	/**
	 * 
	 * @var string
	 */
	public $mailboxId = null;

	/**
	 * 
	 * @var int
	 * @readonly
	 */
	public $partnerId = null;

	/**
	 * 
	 * @var int
	 */
	public $conversionProfile2Id = null;

	/**
	 * 
	 * @var \Kaltura\Client\Enum\EntryModerationStatus
	 */
	public $moderationStatus = null;

	/**
	 * 
	 * @var \Kaltura\Client\Enum\EmailIngestionProfileStatus
	 * @readonly
	 */
	public $status = null;

	/**
	 * 
	 * @var string
	 * @readonly
	 */
	public $createdAt = null;

	/**
	 * 
	 * @var string
	 */
	public $defaultCategory = null;

	/**
	 * 
	 * @var string
	 */
	public $defaultUserId = null;

	/**
	 * 
	 * @var string
	 */
	public $defaultTags = null;

	/**
	 * 
	 * @var string
	 */
	public $defaultAdminTags = null;

	/**
	 * 
	 * @var int
	 */
	public $maxAttachmentSizeKbytes = null;

	/**
	 * 
	 * @var int
	 */
	public $maxAttachmentsPerMail = null;

}
