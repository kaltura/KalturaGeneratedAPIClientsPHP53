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
namespace Kaltura\Client\Plugin\Game\Type;

/**
 * @package Kaltura
 * @subpackage Client
 */
class UserScorePropertiesFilter extends \Kaltura\Client\Plugin\Game\Type\UserScorePropertiesBaseFilter
{
	public function getKalturaObjectType()
	{
		return 'KalturaUserScorePropertiesFilter';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->gameObjectId))
			$this->gameObjectId = (string)$xml->gameObjectId;
		if(count($xml->gameObjectType))
			$this->gameObjectType = (string)$xml->gameObjectType;
		if(count($xml->userIdEqual))
			$this->userIdEqual = (string)$xml->userIdEqual;
		if(count($xml->placesAboveUser))
			$this->placesAboveUser = (int)$xml->placesAboveUser;
		if(count($xml->placesBelowUser))
			$this->placesBelowUser = (int)$xml->placesBelowUser;
	}
	/**
	 * 
	 * @var string
	 */
	public $gameObjectId = null;

	/**
	 * 
	 * @var \Kaltura\Client\Plugin\Game\Enum\GameObjectType
	 */
	public $gameObjectType = null;

	/**
	 * 
	 * @var string
	 */
	public $userIdEqual = null;

	/**
	 * 
	 * @var int
	 */
	public $placesAboveUser = null;

	/**
	 * 
	 * @var int
	 */
	public $placesBelowUser = null;

}
