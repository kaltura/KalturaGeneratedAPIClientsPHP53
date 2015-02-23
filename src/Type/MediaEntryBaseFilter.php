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
// Copyright (C) 2006-2011  Kaltura Inc.
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
abstract class MediaEntryBaseFilter extends \Kaltura\Client\Type\PlayableEntryFilter
{
	public function getKalturaObjectType()
	{
		return 'KalturaMediaEntryBaseFilter';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->mediaTypeEqual))
			$this->mediaTypeEqual = (int)$xml->mediaTypeEqual;
		$this->mediaTypeIn = (string)$xml->mediaTypeIn;
		$this->sourceTypeEqual = (string)$xml->sourceTypeEqual;
		$this->sourceTypeNotEqual = (string)$xml->sourceTypeNotEqual;
		$this->sourceTypeIn = (string)$xml->sourceTypeIn;
		$this->sourceTypeNotIn = (string)$xml->sourceTypeNotIn;
		if(count($xml->mediaDateGreaterThanOrEqual))
			$this->mediaDateGreaterThanOrEqual = (int)$xml->mediaDateGreaterThanOrEqual;
		if(count($xml->mediaDateLessThanOrEqual))
			$this->mediaDateLessThanOrEqual = (int)$xml->mediaDateLessThanOrEqual;
		$this->flavorParamsIdsMatchOr = (string)$xml->flavorParamsIdsMatchOr;
		$this->flavorParamsIdsMatchAnd = (string)$xml->flavorParamsIdsMatchAnd;
	}
	/**
	 * 
	 * @var \Kaltura\Client\Enum\MediaType
	 */
	public $mediaTypeEqual = null;

	/**
	 * 
	 * @var string
	 */
	public $mediaTypeIn = null;

	/**
	 * 
	 * @var \Kaltura\Client\Enum\SourceType
	 */
	public $sourceTypeEqual = null;

	/**
	 * 
	 * @var \Kaltura\Client\Enum\SourceType
	 */
	public $sourceTypeNotEqual = null;

	/**
	 * 
	 * @var string
	 */
	public $sourceTypeIn = null;

	/**
	 * 
	 * @var string
	 */
	public $sourceTypeNotIn = null;

	/**
	 * 
	 * @var int
	 */
	public $mediaDateGreaterThanOrEqual = null;

	/**
	 * 
	 * @var int
	 */
	public $mediaDateLessThanOrEqual = null;

	/**
	 * 
	 * @var string
	 */
	public $flavorParamsIdsMatchOr = null;

	/**
	 * 
	 * @var string
	 */
	public $flavorParamsIdsMatchAnd = null;

}
