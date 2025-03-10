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
namespace Kaltura\Client\Plugin\SearchHistory\Type;

/**
 * @package Kaltura
 * @subpackage Client
 */
class ESearchHistoryFilter extends \Kaltura\Client\Plugin\ElasticSearch\Type\ESearchBaseFilter
{
	public function getKalturaObjectType()
	{
		return 'KalturaESearchHistoryFilter';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->searchTermStartsWith))
			$this->searchTermStartsWith = (string)$xml->searchTermStartsWith;
		if(count($xml->searchedObjectIn))
			$this->searchedObjectIn = (string)$xml->searchedObjectIn;
		if(count($xml->timestampRange) && !empty($xml->timestampRange))
			$this->timestampRange = \Kaltura\Client\ParseUtils::unmarshalObject($xml->timestampRange, "KalturaESearchRange");
		if(count($xml->aggregation) && !empty($xml->aggregation))
			$this->aggregation = \Kaltura\Client\ParseUtils::unmarshalObject($xml->aggregation, "KalturaESearchHistoryAggregationItem");
	}
	/**
	 * 
	 * @var string
	 */
	public $searchTermStartsWith = null;

	/**
	 * 
	 * @var string
	 */
	public $searchedObjectIn = null;

	/**
	 * 
	 * @var \Kaltura\Client\Plugin\ElasticSearch\Type\ESearchRange
	 */
	public $timestampRange;

	/**
	 * 
	 * @var \Kaltura\Client\Plugin\SearchHistory\Type\ESearchHistoryAggregationItem
	 */
	public $aggregation;

}
