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
class ScheduleEventFilter extends \Kaltura\Client\Plugin\Schedule\Type\ScheduleEventBaseFilter
{
	public function getKalturaObjectType()
	{
		return 'KalturaScheduleEventFilter';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->resourceIdsLike))
			$this->resourceIdsLike = (string)$xml->resourceIdsLike;
		if(count($xml->resourceIdsMultiLikeOr))
			$this->resourceIdsMultiLikeOr = (string)$xml->resourceIdsMultiLikeOr;
		if(count($xml->resourceIdsMultiLikeAnd))
			$this->resourceIdsMultiLikeAnd = (string)$xml->resourceIdsMultiLikeAnd;
		if(count($xml->parentResourceIdsLike))
			$this->parentResourceIdsLike = (string)$xml->parentResourceIdsLike;
		if(count($xml->parentResourceIdsMultiLikeOr))
			$this->parentResourceIdsMultiLikeOr = (string)$xml->parentResourceIdsMultiLikeOr;
		if(count($xml->parentResourceIdsMultiLikeAnd))
			$this->parentResourceIdsMultiLikeAnd = (string)$xml->parentResourceIdsMultiLikeAnd;
		if(count($xml->templateEntryCategoriesIdsMultiLikeAnd))
			$this->templateEntryCategoriesIdsMultiLikeAnd = (string)$xml->templateEntryCategoriesIdsMultiLikeAnd;
		if(count($xml->templateEntryCategoriesIdsMultiLikeOr))
			$this->templateEntryCategoriesIdsMultiLikeOr = (string)$xml->templateEntryCategoriesIdsMultiLikeOr;
		if(count($xml->resourceSystemNamesMultiLikeOr))
			$this->resourceSystemNamesMultiLikeOr = (string)$xml->resourceSystemNamesMultiLikeOr;
		if(count($xml->templateEntryCategoriesIdsLike))
			$this->templateEntryCategoriesIdsLike = (string)$xml->templateEntryCategoriesIdsLike;
		if(count($xml->resourceSystemNamesMultiLikeAnd))
			$this->resourceSystemNamesMultiLikeAnd = (string)$xml->resourceSystemNamesMultiLikeAnd;
		if(count($xml->resourceSystemNamesLike))
			$this->resourceSystemNamesLike = (string)$xml->resourceSystemNamesLike;
		if(count($xml->resourceIdEqual))
			$this->resourceIdEqual = (string)$xml->resourceIdEqual;
	}
	/**
	 * 
	 * @var string
	 */
	public $resourceIdsLike = null;

	/**
	 * 
	 * @var string
	 */
	public $resourceIdsMultiLikeOr = null;

	/**
	 * 
	 * @var string
	 */
	public $resourceIdsMultiLikeAnd = null;

	/**
	 * 
	 * @var string
	 */
	public $parentResourceIdsLike = null;

	/**
	 * 
	 * @var string
	 */
	public $parentResourceIdsMultiLikeOr = null;

	/**
	 * 
	 * @var string
	 */
	public $parentResourceIdsMultiLikeAnd = null;

	/**
	 * 
	 * @var string
	 */
	public $templateEntryCategoriesIdsMultiLikeAnd = null;

	/**
	 * 
	 * @var string
	 */
	public $templateEntryCategoriesIdsMultiLikeOr = null;

	/**
	 * 
	 * @var string
	 */
	public $resourceSystemNamesMultiLikeOr = null;

	/**
	 * 
	 * @var string
	 */
	public $templateEntryCategoriesIdsLike = null;

	/**
	 * 
	 * @var string
	 */
	public $resourceSystemNamesMultiLikeAnd = null;

	/**
	 * 
	 * @var string
	 */
	public $resourceSystemNamesLike = null;

	/**
	 * 
	 * @var string
	 */
	public $resourceIdEqual = null;

}
