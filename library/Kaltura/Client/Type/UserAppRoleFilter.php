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
class UserAppRoleFilter extends \Kaltura\Client\Type\UserAppRoleBaseFilter
{
	public function getKalturaObjectType()
	{
		return 'KalturaUserAppRoleFilter';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->userIdEqual))
			$this->userIdEqual = (string)$xml->userIdEqual;
		if(count($xml->userIdIn))
			$this->userIdIn = (string)$xml->userIdIn;
		if(count($xml->userStatusEqual))
			$this->userStatusEqual = (int)$xml->userStatusEqual;
		if(count($xml->userStatusIn))
			$this->userStatusIn = (string)$xml->userStatusIn;
	}
	/**
	 * The User Id to search for
	 * @var string
	 */
	public $userIdEqual = null;

	/**
	 * Users Ids csv list
	 * @var string
	 */
	public $userIdIn = null;

	/**
	 * User Status
	 * @var \Kaltura\Client\Enum\UserStatus
	 */
	public $userStatusEqual = null;

	/**
	 * User Status csv list (0 = Blocked | 1 = Active)
	 * @var string
	 */
	public $userStatusIn = null;

}
