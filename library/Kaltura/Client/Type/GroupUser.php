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
class GroupUser extends \Kaltura\Client\ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaGroupUser';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->id))
			$this->id = (string)$xml->id;
		if(count($xml->userId))
			$this->userId = (string)$xml->userId;
		if(count($xml->groupId))
			$this->groupId = (string)$xml->groupId;
		if(count($xml->status))
			$this->status = (int)$xml->status;
		if(count($xml->partnerId))
			$this->partnerId = (int)$xml->partnerId;
		if(count($xml->createdAt))
			$this->createdAt = (int)$xml->createdAt;
		if(count($xml->updatedAt))
			$this->updatedAt = (int)$xml->updatedAt;
		if(count($xml->creationMode))
			$this->creationMode = (int)$xml->creationMode;
		if(count($xml->userRole))
			$this->userRole = (int)$xml->userRole;
		if(count($xml->groupType))
			$this->groupType = (int)$xml->groupType;
	}
	/**
	 * 
	 * @var string
	 * @readonly
	 */
	public $id = null;

	/**
	 * 
	 * @var string
	 * @insertonly
	 */
	public $userId = null;

	/**
	 * 
	 * @var string
	 * @insertonly
	 */
	public $groupId = null;

	/**
	 * 
	 * @var \Kaltura\Client\Enum\GroupUserStatus
	 * @readonly
	 */
	public $status = null;

	/**
	 * 
	 * @var int
	 * @readonly
	 */
	public $partnerId = null;

	/**
	 * Creation date as Unix timestamp (In seconds)
	 * @var int
	 * @readonly
	 */
	public $createdAt = null;

	/**
	 * Last update date as Unix timestamp (In seconds)
	 * @var int
	 * @readonly
	 */
	public $updatedAt = null;

	/**
	 * 
	 * @var \Kaltura\Client\Enum\GroupUserCreationMode
	 * @insertonly
	 */
	public $creationMode = null;

	/**
	 * 
	 * @var \Kaltura\Client\Enum\GroupUserRole
	 */
	public $userRole = null;

	/**
	 * 
	 * @var \Kaltura\Client\Enum\GroupType
	 * @readonly
	 */
	public $groupType = null;

}
