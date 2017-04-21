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
abstract class EntryScheduleEventBaseFilter extends \Kaltura\Client\Plugin\Schedule\Type\ScheduleEventFilter
{
	public function getKalturaObjectType()
	{
		return 'KalturaEntryScheduleEventBaseFilter';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->templateEntryIdEqual))
			$this->templateEntryIdEqual = (string)$xml->templateEntryIdEqual;
		if(count($xml->entryIdsLike))
			$this->entryIdsLike = (string)$xml->entryIdsLike;
		if(count($xml->entryIdsMultiLikeOr))
			$this->entryIdsMultiLikeOr = (string)$xml->entryIdsMultiLikeOr;
		if(count($xml->entryIdsMultiLikeAnd))
			$this->entryIdsMultiLikeAnd = (string)$xml->entryIdsMultiLikeAnd;
		if(count($xml->categoryIdsLike))
			$this->categoryIdsLike = (string)$xml->categoryIdsLike;
		if(count($xml->categoryIdsMultiLikeOr))
			$this->categoryIdsMultiLikeOr = (string)$xml->categoryIdsMultiLikeOr;
		if(count($xml->categoryIdsMultiLikeAnd))
			$this->categoryIdsMultiLikeAnd = (string)$xml->categoryIdsMultiLikeAnd;
	}
	/**
	 * 
	 * @var string
	 */
	public $templateEntryIdEqual = null;

	/**
	 * 
	 * @var string
	 */
	public $entryIdsLike = null;

	/**
	 * 
	 * @var string
	 */
	public $entryIdsMultiLikeOr = null;

	/**
	 * 
	 * @var string
	 */
	public $entryIdsMultiLikeAnd = null;

	/**
	 * 
	 * @var string
	 */
	public $categoryIdsLike = null;

	/**
	 * 
	 * @var string
	 */
	public $categoryIdsMultiLikeOr = null;

	/**
	 * 
	 * @var string
	 */
	public $categoryIdsMultiLikeAnd = null;

}
