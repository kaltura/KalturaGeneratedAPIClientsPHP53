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
namespace Kaltura\Client\Plugin\Schedule\Type;

/**
 * @package Kaltura
 * @subpackage Client
 */
abstract class EntryScheduleEvent extends \Kaltura\Client\Plugin\Schedule\Type\ScheduleEvent
{
	public function getKalturaObjectType()
	{
		return 'KalturaEntryScheduleEvent';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->templateEntryId))
			$this->templateEntryId = (string)$xml->templateEntryId;
		if(count($xml->entryIds))
			$this->entryIds = (string)$xml->entryIds;
		if(count($xml->categoryIds))
			$this->categoryIds = (string)$xml->categoryIds;
	}
	/**
	 * Entry to be used as template during content ingestion
	 * @var string
	 */
	public $templateEntryId = null;

	/**
	 * Entries that associated with this event
	 * @var string
	 */
	public $entryIds = null;

	/**
	 * Categories that associated with this event
	 * @var string
	 */
	public $categoryIds = null;

}
