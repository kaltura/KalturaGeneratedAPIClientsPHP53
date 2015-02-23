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
// Copyright (C) 2006-2011  Kaltura Inc.
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
namespace Kaltura\Client\Plugin\VirusScan\Type;

/**
 * @package Kaltura
 * @subpackage Client
 */
class VirusScanProfile extends \Kaltura\Client\ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaVirusScanProfile';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->id))
			$this->id = (int)$xml->id;
		if(count($xml->createdAt))
			$this->createdAt = (int)$xml->createdAt;
		if(count($xml->updatedAt))
			$this->updatedAt = (int)$xml->updatedAt;
		if(count($xml->partnerId))
			$this->partnerId = (int)$xml->partnerId;
		$this->name = (string)$xml->name;
		if(count($xml->status))
			$this->status = (int)$xml->status;
		$this->engineType = (string)$xml->engineType;
		if(!empty($xml->entryFilter))
			$this->entryFilter = \Kaltura\Client\ParseUtils::unmarshalObject($xml->entryFilter, "KalturaBaseEntryFilter");
		if(count($xml->actionIfInfected))
			$this->actionIfInfected = (int)$xml->actionIfInfected;
	}
	/**
	 * 
	 * @var int
	 * @readonly
	 */
	public $id = null;

	/**
	 * 
	 * @var int
	 * @readonly
	 */
	public $createdAt = null;

	/**
	 * 
	 * @var int
	 * @readonly
	 */
	public $updatedAt = null;

	/**
	 * 
	 * @var int
	 * @readonly
	 */
	public $partnerId = null;

	/**
	 * 
	 * @var string
	 */
	public $name = null;

	/**
	 * 
	 * @var \Kaltura\Client\Plugin\VirusScan\Enum\VirusScanProfileStatus
	 */
	public $status = null;

	/**
	 * 
	 * @var \Kaltura\Client\Plugin\VirusScan\Enum\VirusScanEngineType
	 */
	public $engineType = null;

	/**
	 * 
	 * @var \Kaltura\Client\Type\BaseEntryFilter
	 */
	public $entryFilter;

	/**
	 * 
	 * @var \Kaltura\Client\Plugin\VirusScan\Enum\VirusFoundAction
	 */
	public $actionIfInfected = null;

}
