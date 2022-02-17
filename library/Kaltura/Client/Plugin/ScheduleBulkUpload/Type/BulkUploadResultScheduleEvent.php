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
// Copyright (C) 2006-2022  Kaltura Inc.
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
namespace Kaltura\Client\Plugin\ScheduleBulkUpload\Type;

/**
 * @package Kaltura
 * @subpackage Client
 */
class BulkUploadResultScheduleEvent extends \Kaltura\Client\Type\BulkUploadResult
{
	public function getKalturaObjectType()
	{
		return 'KalturaBulkUploadResultScheduleEvent';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->referenceId))
			$this->referenceId = (string)$xml->referenceId;
		if(count($xml->templateEntryId))
			$this->templateEntryId = (string)$xml->templateEntryId;
		if(count($xml->eventType))
			$this->eventType = (int)$xml->eventType;
		if(count($xml->title))
			$this->title = (string)$xml->title;
		if(count($xml->description))
			$this->description = (string)$xml->description;
		if(count($xml->tags))
			$this->tags = (string)$xml->tags;
		if(count($xml->categoryIds))
			$this->categoryIds = (string)$xml->categoryIds;
		if(count($xml->resourceId))
			$this->resourceId = (string)$xml->resourceId;
		if(count($xml->startTime))
			$this->startTime = (int)$xml->startTime;
		if(count($xml->duration))
			$this->duration = (int)$xml->duration;
		if(count($xml->endTime))
			$this->endTime = (int)$xml->endTime;
		if(count($xml->recurrence))
			$this->recurrence = (string)$xml->recurrence;
		if(count($xml->coEditors))
			$this->coEditors = (string)$xml->coEditors;
		if(count($xml->coPublishers))
			$this->coPublishers = (string)$xml->coPublishers;
		if(count($xml->eventOrganizerId))
			$this->eventOrganizerId = (string)$xml->eventOrganizerId;
		if(count($xml->contentOwnerId))
			$this->contentOwnerId = (string)$xml->contentOwnerId;
		if(count($xml->templateEntryType))
			$this->templateEntryType = (string)$xml->templateEntryType;
	}
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

	/**
	 * 
	 * @var int
	 */
	public $eventType = null;

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
	public $categoryIds = null;

	/**
	 * ID of the resource specified for the new event.
	 * @var string
	 */
	public $resourceId = null;

	/**
	 * 
	 * @var int
	 */
	public $startTime = null;

	/**
	 * 
	 * @var int
	 */
	public $duration = null;

	/**
	 * 
	 * @var int
	 */
	public $endTime = null;

	/**
	 * 
	 * @var string
	 */
	public $recurrence = null;

	/**
	 * 
	 * @var string
	 */
	public $coEditors = null;

	/**
	 * 
	 * @var string
	 */
	public $coPublishers = null;

	/**
	 * 
	 * @var string
	 */
	public $eventOrganizerId = null;

	/**
	 * 
	 * @var string
	 */
	public $contentOwnerId = null;

	/**
	 * 
	 * @var string
	 */
	public $templateEntryType = null;

}
