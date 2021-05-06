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
// Copyright (C) 2006-2021  Kaltura Inc.
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
namespace Kaltura\Client\Plugin\AdminConsole\Type;

/**
 * @package Kaltura
 * @subpackage Client
 */
class TrackEntry extends \Kaltura\Client\ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaTrackEntry';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->id))
			$this->id = (int)$xml->id;
		if(count($xml->trackEventType))
			$this->trackEventType = (int)$xml->trackEventType;
		if(count($xml->psVersion))
			$this->psVersion = (string)$xml->psVersion;
		if(count($xml->context))
			$this->context = (string)$xml->context;
		if(count($xml->partnerId))
			$this->partnerId = (int)$xml->partnerId;
		if(count($xml->entryId))
			$this->entryId = (string)$xml->entryId;
		if(count($xml->hostName))
			$this->hostName = (string)$xml->hostName;
		if(count($xml->userId))
			$this->userId = (string)$xml->userId;
		if(count($xml->changedProperties))
			$this->changedProperties = (string)$xml->changedProperties;
		if(count($xml->paramStr1))
			$this->paramStr1 = (string)$xml->paramStr1;
		if(count($xml->paramStr2))
			$this->paramStr2 = (string)$xml->paramStr2;
		if(count($xml->paramStr3))
			$this->paramStr3 = (string)$xml->paramStr3;
		if(count($xml->ks))
			$this->ks = (string)$xml->ks;
		if(count($xml->description))
			$this->description = (string)$xml->description;
		if(count($xml->createdAt))
			$this->createdAt = (int)$xml->createdAt;
		if(count($xml->updatedAt))
			$this->updatedAt = (int)$xml->updatedAt;
		if(count($xml->userIp))
			$this->userIp = (string)$xml->userIp;
		if(count($xml->sessionId))
			$this->sessionId = (int)$xml->sessionId;
	}
	/**
	 * 
	 * @var int
	 */
	public $id = null;

	/**
	 * 
	 * @var \Kaltura\Client\Plugin\AdminConsole\Enum\TrackEntryEventType
	 */
	public $trackEventType = null;

	/**
	 * 
	 * @var string
	 */
	public $psVersion = null;

	/**
	 * 
	 * @var string
	 */
	public $context = null;

	/**
	 * 
	 * @var int
	 */
	public $partnerId = null;

	/**
	 * 
	 * @var string
	 */
	public $entryId = null;

	/**
	 * 
	 * @var string
	 */
	public $hostName = null;

	/**
	 * 
	 * @var string
	 */
	public $userId = null;

	/**
	 * 
	 * @var string
	 */
	public $changedProperties = null;

	/**
	 * 
	 * @var string
	 */
	public $paramStr1 = null;

	/**
	 * 
	 * @var string
	 */
	public $paramStr2 = null;

	/**
	 * 
	 * @var string
	 */
	public $paramStr3 = null;

	/**
	 * 
	 * @var string
	 */
	public $ks = null;

	/**
	 * 
	 * @var string
	 */
	public $description = null;

	/**
	 * 
	 * @var int
	 */
	public $createdAt = null;

	/**
	 * 
	 * @var int
	 */
	public $updatedAt = null;

	/**
	 * 
	 * @var string
	 */
	public $userIp = null;

	/**
	 * 
	 * @var int
	 */
	public $sessionId = null;

}
