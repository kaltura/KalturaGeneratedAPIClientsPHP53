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
 * Kaltura Session
 * @package Kaltura
 * @subpackage Client
 */
class Session extends \Kaltura\Client\ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaSession';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->ks))
			$this->ks = (string)$xml->ks;
		if(count($xml->sessionType))
			$this->sessionType = (int)$xml->sessionType;
		if(count($xml->partnerId))
			$this->partnerId = (int)$xml->partnerId;
		if(count($xml->userId))
			$this->userId = (string)$xml->userId;
		if(count($xml->expiry))
			$this->expiry = (int)$xml->expiry;
		if(count($xml->privileges))
			$this->privileges = (string)$xml->privileges;
		if(count($xml->udid))
			$this->udid = (string)$xml->udid;
	}
	/**
	 * KS
	 * @var string
	 */
	public $ks = null;

	/**
	 * Session type
	 * @var \Kaltura\Client\Enum\SessionType
	 */
	public $sessionType = null;

	/**
	 * Partner identifier
	 * @var int
	 */
	public $partnerId = null;

	/**
	 * User identifier
	 * @var string
	 */
	public $userId = null;

	/**
	 * Expiry
	 * @var int
	 */
	public $expiry = null;

	/**
	 * Privileges
	 * @var string
	 */
	public $privileges = null;

	/**
	 * udid
	 * @var string
	 */
	public $udid = null;

}
