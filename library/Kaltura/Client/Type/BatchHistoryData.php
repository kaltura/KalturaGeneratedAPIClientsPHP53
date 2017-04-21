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
 * @package Kaltura
 * @subpackage Client
 */
class BatchHistoryData extends \Kaltura\Client\ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaBatchHistoryData';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->schedulerId))
			$this->schedulerId = (int)$xml->schedulerId;
		if(count($xml->workerId))
			$this->workerId = (int)$xml->workerId;
		if(count($xml->batchIndex))
			$this->batchIndex = (int)$xml->batchIndex;
		if(count($xml->timeStamp))
			$this->timeStamp = (int)$xml->timeStamp;
		if(count($xml->message))
			$this->message = (string)$xml->message;
		if(count($xml->errType))
			$this->errType = (int)$xml->errType;
		if(count($xml->errNumber))
			$this->errNumber = (int)$xml->errNumber;
		if(count($xml->hostName))
			$this->hostName = (string)$xml->hostName;
		if(count($xml->sessionId))
			$this->sessionId = (string)$xml->sessionId;
	}
	/**
	 * 
	 * @var int
	 */
	public $schedulerId = null;

	/**
	 * 
	 * @var int
	 */
	public $workerId = null;

	/**
	 * 
	 * @var int
	 */
	public $batchIndex = null;

	/**
	 * 
	 * @var int
	 */
	public $timeStamp = null;

	/**
	 * 
	 * @var string
	 */
	public $message = null;

	/**
	 * 
	 * @var int
	 */
	public $errType = null;

	/**
	 * 
	 * @var int
	 */
	public $errNumber = null;

	/**
	 * 
	 * @var string
	 */
	public $hostName = null;

	/**
	 * 
	 * @var string
	 */
	public $sessionId = null;

}
