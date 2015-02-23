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
class UserFilter extends \Kaltura\Client\Type\UserBaseFilter
{
	public function getKalturaObjectType()
	{
		return 'KalturaUserFilter';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		$this->idOrScreenNameStartsWith = (string)$xml->idOrScreenNameStartsWith;
		$this->idEqual = (string)$xml->idEqual;
		$this->idIn = (string)$xml->idIn;
		if(count($xml->loginEnabledEqual))
			$this->loginEnabledEqual = (int)$xml->loginEnabledEqual;
		$this->roleIdEqual = (string)$xml->roleIdEqual;
		$this->roleIdsEqual = (string)$xml->roleIdsEqual;
		$this->roleIdsIn = (string)$xml->roleIdsIn;
		$this->firstNameOrLastNameStartsWith = (string)$xml->firstNameOrLastNameStartsWith;
		$this->permissionNamesMultiLikeOr = (string)$xml->permissionNamesMultiLikeOr;
		$this->permissionNamesMultiLikeAnd = (string)$xml->permissionNamesMultiLikeAnd;
	}
	/**
	 * 
	 * @var string
	 */
	public $idOrScreenNameStartsWith = null;

	/**
	 * 
	 * @var string
	 */
	public $idEqual = null;

	/**
	 * 
	 * @var string
	 */
	public $idIn = null;

	/**
	 * 
	 * @var \Kaltura\Client\Enum\NullableBoolean
	 */
	public $loginEnabledEqual = null;

	/**
	 * 
	 * @var string
	 */
	public $roleIdEqual = null;

	/**
	 * 
	 * @var string
	 */
	public $roleIdsEqual = null;

	/**
	 * 
	 * @var string
	 */
	public $roleIdsIn = null;

	/**
	 * 
	 * @var string
	 */
	public $firstNameOrLastNameStartsWith = null;

	/**
	 * Permission names filter expression
	 * 	 
	 * @var string
	 */
	public $permissionNamesMultiLikeOr = null;

	/**
	 * Permission names filter expression
	 * 	 
	 * @var string
	 */
	public $permissionNamesMultiLikeAnd = null;

}
