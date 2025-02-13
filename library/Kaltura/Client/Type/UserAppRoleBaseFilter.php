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
abstract class UserAppRoleBaseFilter extends \Kaltura\Client\Type\RelatedFilter
{
	public function getKalturaObjectType()
	{
		return 'KalturaUserAppRoleBaseFilter';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->appGuidEqual))
			$this->appGuidEqual = (string)$xml->appGuidEqual;
		if(count($xml->appGuidIn))
			$this->appGuidIn = (string)$xml->appGuidIn;
		if(count($xml->userRoleIdEqual))
			$this->userRoleIdEqual = (string)$xml->userRoleIdEqual;
		if(count($xml->userRoleIdIn))
			$this->userRoleIdIn = (string)$xml->userRoleIdIn;
		if(count($xml->createdAtLessThanOrEqual))
			$this->createdAtLessThanOrEqual = (int)$xml->createdAtLessThanOrEqual;
		if(count($xml->createdAtGreaterThanOrEqual))
			$this->createdAtGreaterThanOrEqual = (int)$xml->createdAtGreaterThanOrEqual;
		if(count($xml->updatedAtLessThanOrEqual))
			$this->updatedAtLessThanOrEqual = (int)$xml->updatedAtLessThanOrEqual;
		if(count($xml->updatedAtGreaterThanOrEqual))
			$this->updatedAtGreaterThanOrEqual = (int)$xml->updatedAtGreaterThanOrEqual;
	}
	/**
	 * The app-registry id to search for
	 * @var string
	 */
	public $appGuidEqual = null;

	/**
	 * Apps-registries ids csv list
	 * @var string
	 */
	public $appGuidIn = null;

	/**
	 * The user-role id to search for
	 * @var string
	 */
	public $userRoleIdEqual = null;

	/**
	 * Users-roles ids csv list
	 * @var string
	 */
	public $userRoleIdIn = null;

	/**
	 * Unix timestamp
	 * @var int
	 */
	public $createdAtLessThanOrEqual = null;

	/**
	 * Unix timestamp
	 * @var int
	 */
	public $createdAtGreaterThanOrEqual = null;

	/**
	 * Unix timestamp
	 * @var int
	 */
	public $updatedAtLessThanOrEqual = null;

	/**
	 * Unix timestamp
	 * @var int
	 */
	public $updatedAtGreaterThanOrEqual = null;

}
