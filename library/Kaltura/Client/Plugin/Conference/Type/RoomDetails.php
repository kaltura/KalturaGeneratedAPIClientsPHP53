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
namespace Kaltura\Client\Plugin\Conference\Type;

/**
 * @package Kaltura
 * @subpackage Client
 */
class RoomDetails extends \Kaltura\Client\ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaRoomDetails';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->serverUrl))
			$this->serverUrl = (string)$xml->serverUrl;
		if(count($xml->entryId))
			$this->entryId = (string)$xml->entryId;
		if(count($xml->token))
			$this->token = (string)$xml->token;
		if(count($xml->expiry))
			$this->expiry = (int)$xml->expiry;
		if(count($xml->serverName))
			$this->serverName = (string)$xml->serverName;
	}
	/**
	 * 
	 * @var string
	 */
	public $serverUrl = null;

	/**
	 * 
	 * @var string
	 */
	public $entryId = null;

	/**
	 * 
	 * @var string
	 */
	public $token = null;

	/**
	 * 
	 * @var int
	 */
	public $expiry = null;

	/**
	 * 
	 * @var string
	 */
	public $serverName = null;

}
