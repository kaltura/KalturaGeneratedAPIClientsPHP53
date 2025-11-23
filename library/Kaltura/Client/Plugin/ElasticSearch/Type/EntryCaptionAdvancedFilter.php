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
namespace Kaltura\Client\Plugin\ElasticSearch\Type;

/**
 * @package Kaltura
 * @subpackage Client
 */
class EntryCaptionAdvancedFilter extends \Kaltura\Client\Type\SearchItem
{
	public function getKalturaObjectType()
	{
		return 'KalturaEntryCaptionAdvancedFilter';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->hasCaption))
			$this->hasCaption = (int)$xml->hasCaption;
		if(count($xml->language))
			$this->language = (string)$xml->language;
		if(count($xml->accuracyGreaterThanOrEqual))
			$this->accuracyGreaterThanOrEqual = (int)$xml->accuracyGreaterThanOrEqual;
		if(count($xml->accuracyLessThanOrEqual))
			$this->accuracyLessThanOrEqual = (int)$xml->accuracyLessThanOrEqual;
		if(count($xml->accuracyGreaterThan))
			$this->accuracyGreaterThan = (int)$xml->accuracyGreaterThan;
		if(count($xml->accuracyLessThan))
			$this->accuracyLessThan = (int)$xml->accuracyLessThan;
		if(count($xml->usage))
			$this->usage = (string)$xml->usage;
	}
	/**
	 * 
	 * @var \Kaltura\Client\Enum\NullableBoolean
	 */
	public $hasCaption = null;

	/**
	 * 
	 * @var \Kaltura\Client\Enum\Language
	 */
	public $language = null;

	/**
	 * 
	 * @var int
	 */
	public $accuracyGreaterThanOrEqual = null;

	/**
	 * 
	 * @var int
	 */
	public $accuracyLessThanOrEqual = null;

	/**
	 * 
	 * @var int
	 */
	public $accuracyGreaterThan = null;

	/**
	 * 
	 * @var int
	 */
	public $accuracyLessThan = null;

	/**
	 * 
	 * @var \Kaltura\Client\Plugin\Caption\Enum\CaptionAssetUsage
	 */
	public $usage = null;

}
