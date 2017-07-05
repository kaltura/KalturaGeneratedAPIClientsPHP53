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
 * An item of user asset list
 * @package Kaltura
 * @subpackage Client
 */
class UserAssetsListItem extends \Kaltura\Client\ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaUserAssetsListItem';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->id))
			$this->id = (string)$xml->id;
		if(count($xml->orderIndex))
			$this->orderIndex = (int)$xml->orderIndex;
		if(count($xml->type))
			$this->type = (string)$xml->type;
		if(count($xml->userId))
			$this->userId = (string)$xml->userId;
		if(count($xml->listType))
			$this->listType = (string)$xml->listType;
	}
	/**
	 * Asset identifier
	 * @var string
	 */
	public $id = null;

	/**
	 * The order index of the asset in the list
	 * @var int
	 */
	public $orderIndex = null;

	/**
	 * The type of the asset
	 * @var \Kaltura\Client\Enum\UserAssetsListItemType
	 */
	public $type = null;

	/**
	 * The identifier of the user who added the item to the list
	 * @var string
	 * @readonly
	 */
	public $userId = null;

	/**
	 * The type of the list
	 * @var \Kaltura\Client\Enum\UserAssetsListType
	 */
	public $listType = null;

}
