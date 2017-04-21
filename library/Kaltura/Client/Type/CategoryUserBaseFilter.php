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
abstract class CategoryUserBaseFilter extends \Kaltura\Client\Type\RelatedFilter
{
	public function getKalturaObjectType()
	{
		return 'KalturaCategoryUserBaseFilter';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->categoryIdEqual))
			$this->categoryIdEqual = (int)$xml->categoryIdEqual;
		if(count($xml->categoryIdIn))
			$this->categoryIdIn = (string)$xml->categoryIdIn;
		if(count($xml->userIdEqual))
			$this->userIdEqual = (string)$xml->userIdEqual;
		if(count($xml->userIdIn))
			$this->userIdIn = (string)$xml->userIdIn;
		if(count($xml->permissionLevelEqual))
			$this->permissionLevelEqual = (int)$xml->permissionLevelEqual;
		if(count($xml->permissionLevelIn))
			$this->permissionLevelIn = (string)$xml->permissionLevelIn;
		if(count($xml->statusEqual))
			$this->statusEqual = (int)$xml->statusEqual;
		if(count($xml->statusIn))
			$this->statusIn = (string)$xml->statusIn;
		if(count($xml->createdAtGreaterThanOrEqual))
			$this->createdAtGreaterThanOrEqual = (int)$xml->createdAtGreaterThanOrEqual;
		if(count($xml->createdAtLessThanOrEqual))
			$this->createdAtLessThanOrEqual = (int)$xml->createdAtLessThanOrEqual;
		if(count($xml->updatedAtGreaterThanOrEqual))
			$this->updatedAtGreaterThanOrEqual = (int)$xml->updatedAtGreaterThanOrEqual;
		if(count($xml->updatedAtLessThanOrEqual))
			$this->updatedAtLessThanOrEqual = (int)$xml->updatedAtLessThanOrEqual;
		if(count($xml->updateMethodEqual))
			$this->updateMethodEqual = (int)$xml->updateMethodEqual;
		if(count($xml->updateMethodIn))
			$this->updateMethodIn = (string)$xml->updateMethodIn;
		if(count($xml->categoryFullIdsStartsWith))
			$this->categoryFullIdsStartsWith = (string)$xml->categoryFullIdsStartsWith;
		if(count($xml->categoryFullIdsEqual))
			$this->categoryFullIdsEqual = (string)$xml->categoryFullIdsEqual;
		if(count($xml->permissionNamesMatchAnd))
			$this->permissionNamesMatchAnd = (string)$xml->permissionNamesMatchAnd;
		if(count($xml->permissionNamesMatchOr))
			$this->permissionNamesMatchOr = (string)$xml->permissionNamesMatchOr;
		if(count($xml->permissionNamesNotContains))
			$this->permissionNamesNotContains = (string)$xml->permissionNamesNotContains;
	}
	/**
	 * 
	 * @var int
	 */
	public $categoryIdEqual = null;

	/**
	 * 
	 * @var string
	 */
	public $categoryIdIn = null;

	/**
	 * 
	 * @var string
	 */
	public $userIdEqual = null;

	/**
	 * 
	 * @var string
	 */
	public $userIdIn = null;

	/**
	 * 
	 * @var \Kaltura\Client\Enum\CategoryUserPermissionLevel
	 */
	public $permissionLevelEqual = null;

	/**
	 * 
	 * @var string
	 */
	public $permissionLevelIn = null;

	/**
	 * 
	 * @var \Kaltura\Client\Enum\CategoryUserStatus
	 */
	public $statusEqual = null;

	/**
	 * 
	 * @var string
	 */
	public $statusIn = null;

	/**
	 * 
	 * @var int
	 */
	public $createdAtGreaterThanOrEqual = null;

	/**
	 * 
	 * @var int
	 */
	public $createdAtLessThanOrEqual = null;

	/**
	 * 
	 * @var int
	 */
	public $updatedAtGreaterThanOrEqual = null;

	/**
	 * 
	 * @var int
	 */
	public $updatedAtLessThanOrEqual = null;

	/**
	 * 
	 * @var \Kaltura\Client\Enum\UpdateMethodType
	 */
	public $updateMethodEqual = null;

	/**
	 * 
	 * @var string
	 */
	public $updateMethodIn = null;

	/**
	 * 
	 * @var string
	 */
	public $categoryFullIdsStartsWith = null;

	/**
	 * 
	 * @var string
	 */
	public $categoryFullIdsEqual = null;

	/**
	 * 
	 * @var string
	 */
	public $permissionNamesMatchAnd = null;

	/**
	 * 
	 * @var string
	 */
	public $permissionNamesMatchOr = null;

	/**
	 * 
	 * @var string
	 */
	public $permissionNamesNotContains = null;

}
