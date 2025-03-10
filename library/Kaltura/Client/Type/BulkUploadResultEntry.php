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
namespace Kaltura\Client\Type;

/**
 * @package Kaltura
 * @subpackage Client
 */
class BulkUploadResultEntry extends \Kaltura\Client\Type\BulkUploadResult
{
	public function getKalturaObjectType()
	{
		return 'KalturaBulkUploadResultEntry';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->entryId))
			$this->entryId = (string)$xml->entryId;
		if(count($xml->title))
			$this->title = (string)$xml->title;
		if(count($xml->description))
			$this->description = (string)$xml->description;
		if(count($xml->tags))
			$this->tags = (string)$xml->tags;
		if(count($xml->url))
			$this->url = (string)$xml->url;
		if(count($xml->contentType))
			$this->contentType = (string)$xml->contentType;
		if(count($xml->conversionProfileId))
			$this->conversionProfileId = (int)$xml->conversionProfileId;
		if(count($xml->accessControlProfileId))
			$this->accessControlProfileId = (int)$xml->accessControlProfileId;
		if(count($xml->category))
			$this->category = (string)$xml->category;
		if(count($xml->scheduleStartDate))
			$this->scheduleStartDate = (int)$xml->scheduleStartDate;
		if(count($xml->scheduleEndDate))
			$this->scheduleEndDate = (int)$xml->scheduleEndDate;
		if(count($xml->entryStatus))
			$this->entryStatus = (int)$xml->entryStatus;
		if(count($xml->thumbnailUrl))
			$this->thumbnailUrl = (string)$xml->thumbnailUrl;
		if(count($xml->thumbnailSaved))
		{
			if(!empty($xml->thumbnailSaved) && $xml->thumbnailSaved != 'false')
				$this->thumbnailSaved = true;
			else
				$this->thumbnailSaved = false;
		}
		if(count($xml->sshPrivateKey))
			$this->sshPrivateKey = (string)$xml->sshPrivateKey;
		if(count($xml->sshPublicKey))
			$this->sshPublicKey = (string)$xml->sshPublicKey;
		if(count($xml->sshKeyPassphrase))
			$this->sshKeyPassphrase = (string)$xml->sshKeyPassphrase;
		if(count($xml->creatorId))
			$this->creatorId = (string)$xml->creatorId;
		if(count($xml->entitledUsersEdit))
			$this->entitledUsersEdit = (string)$xml->entitledUsersEdit;
		if(count($xml->entitledUsersPublish))
			$this->entitledUsersPublish = (string)$xml->entitledUsersPublish;
		if(count($xml->entitledUsersView))
			$this->entitledUsersView = (string)$xml->entitledUsersView;
		if(count($xml->ownerId))
			$this->ownerId = (string)$xml->ownerId;
		if(count($xml->referenceId))
			$this->referenceId = (string)$xml->referenceId;
		if(count($xml->templateEntryId))
			$this->templateEntryId = (string)$xml->templateEntryId;
	}
	/**
	 * 
	 * @var string
	 */
	public $entryId = null;

	/**
	 * 
	 * @var string
	 */
	public $title = null;

	/**
	 * 
	 * @var string
	 */
	public $description = null;

	/**
	 * 
	 * @var string
	 */
	public $tags = null;

	/**
	 * 
	 * @var string
	 */
	public $url = null;

	/**
	 * 
	 * @var string
	 */
	public $contentType = null;

	/**
	 * 
	 * @var int
	 */
	public $conversionProfileId = null;

	/**
	 * 
	 * @var int
	 */
	public $accessControlProfileId = null;

	/**
	 * 
	 * @var string
	 */
	public $category = null;

	/**
	 * 
	 * @var int
	 */
	public $scheduleStartDate = null;

	/**
	 * 
	 * @var int
	 */
	public $scheduleEndDate = null;

	/**
	 * 
	 * @var int
	 */
	public $entryStatus = null;

	/**
	 * 
	 * @var string
	 */
	public $thumbnailUrl = null;

	/**
	 * 
	 * @var bool
	 */
	public $thumbnailSaved = null;

	/**
	 * 
	 * @var string
	 */
	public $sshPrivateKey = null;

	/**
	 * 
	 * @var string
	 */
	public $sshPublicKey = null;

	/**
	 * 
	 * @var string
	 */
	public $sshKeyPassphrase = null;

	/**
	 * 
	 * @var string
	 */
	public $creatorId = null;

	/**
	 * 
	 * @var string
	 */
	public $entitledUsersEdit = null;

	/**
	 * 
	 * @var string
	 */
	public $entitledUsersPublish = null;

	/**
	 * 
	 * @var string
	 */
	public $entitledUsersView = null;

	/**
	 * 
	 * @var string
	 */
	public $ownerId = null;

	/**
	 * 
	 * @var string
	 */
	public $referenceId = null;

	/**
	 * 
	 * @var string
	 */
	public $templateEntryId = null;

}
