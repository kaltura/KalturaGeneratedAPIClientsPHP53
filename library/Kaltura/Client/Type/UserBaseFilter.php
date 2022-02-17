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
namespace Kaltura\Client\Type;

/**
 * @package Kaltura
 * @subpackage Client
 */
abstract class UserBaseFilter extends \Kaltura\Client\Type\BaseUserFilter
{
	public function getKalturaObjectType()
	{
		return 'KalturaUserBaseFilter';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->typeEqual))
			$this->typeEqual = (int)$xml->typeEqual;
		if(count($xml->typeIn))
			$this->typeIn = (string)$xml->typeIn;
		if(count($xml->isAdminEqual))
			$this->isAdminEqual = (int)$xml->isAdminEqual;
		if(count($xml->firstNameStartsWith))
			$this->firstNameStartsWith = (string)$xml->firstNameStartsWith;
		if(count($xml->lastNameStartsWith))
			$this->lastNameStartsWith = (string)$xml->lastNameStartsWith;
	}
	/**
	 * 
	 * @var \Kaltura\Client\Enum\UserType
	 */
	public $typeEqual = null;

	/**
	 * 
	 * @var string
	 */
	public $typeIn = null;

	/**
	 * 
	 * @var \Kaltura\Client\Enum\NullableBoolean
	 */
	public $isAdminEqual = null;

	/**
	 * 
	 * @var string
	 */
	public $firstNameStartsWith = null;

	/**
	 * 
	 * @var string
	 */
	public $lastNameStartsWith = null;

}
