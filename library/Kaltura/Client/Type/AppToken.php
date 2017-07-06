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
 * Application token
 * @package Kaltura
 * @subpackage Client
 */
class AppToken extends \Kaltura\Client\ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaAppToken';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->id))
			$this->id = (string)$xml->id;
		if(count($xml->expiry))
			$this->expiry = (int)$xml->expiry;
		if(count($xml->partnerId))
			$this->partnerId = (int)$xml->partnerId;
		if(count($xml->sessionDuration))
			$this->sessionDuration = (int)$xml->sessionDuration;
		if(count($xml->hashType))
			$this->hashType = (string)$xml->hashType;
		if(count($xml->sessionPrivileges))
			$this->sessionPrivileges = (string)$xml->sessionPrivileges;
		if(count($xml->sessionType))
			$this->sessionType = (int)$xml->sessionType;
		if(count($xml->status))
			$this->status = (int)$xml->status;
		if(count($xml->token))
			$this->token = (string)$xml->token;
		if(count($xml->sessionUserId))
			$this->sessionUserId = (string)$xml->sessionUserId;
	}
	/**
	 * The id of the application token
	 * @var string
	 * @readonly
	 */
	public $id = null;

	/**
	 * Expiry time of current token (unix timestamp in seconds)
	 * @var int
	 */
	public $expiry = null;

	/**
	 * Partner identifier
	 * @var int
	 */
	public $partnerId = null;

	/**
	 * Expiry duration of KS (Kaltura Session) that created using the current token (in seconds)
	 * @var int
	 */
	public $sessionDuration = null;

	/**
	 * The hash type of the token
	 * @var \Kaltura\Client\Enum\AppTokenHashType
	 */
	public $hashType = null;

	/**
	 * Comma separated privileges to be applied on KS (Kaltura Session) that created using the current token
	 * @var string
	 */
	public $sessionPrivileges = null;

	/**
	 * Type of KS (Kaltura Session) that created using the current token
	 * @var \Kaltura\Client\Enum\SessionType
	 */
	public $sessionType = null;

	/**
	 * Application token status
	 * @var \Kaltura\Client\Enum\AppTokenStatus
	 * @readonly
	 */
	public $status = null;

	/**
	 * The application token
	 * @var string
	 */
	public $token = null;

	/**
	 * User id of KS (Kaltura Session) that created using the current token
	 * @var string
	 */
	public $sessionUserId = null;

}
