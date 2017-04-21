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
class CEError extends \Kaltura\Client\ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaCEError';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->id))
			$this->id = (string)$xml->id;
		if(count($xml->partnerId))
			$this->partnerId = (int)$xml->partnerId;
		if(count($xml->browser))
			$this->browser = (string)$xml->browser;
		if(count($xml->serverIp))
			$this->serverIp = (string)$xml->serverIp;
		if(count($xml->serverOs))
			$this->serverOs = (string)$xml->serverOs;
		if(count($xml->phpVersion))
			$this->phpVersion = (string)$xml->phpVersion;
		if(count($xml->ceAdminEmail))
			$this->ceAdminEmail = (string)$xml->ceAdminEmail;
		if(count($xml->type))
			$this->type = (string)$xml->type;
		if(count($xml->description))
			$this->description = (string)$xml->description;
		if(count($xml->data))
			$this->data = (string)$xml->data;
	}
	/**
	 * 
	 * @var string
	 * @readonly
	 */
	public $id = null;

	/**
	 * 
	 * @var int
	 */
	public $partnerId = null;

	/**
	 * 
	 * @var string
	 */
	public $browser = null;

	/**
	 * 
	 * @var string
	 */
	public $serverIp = null;

	/**
	 * 
	 * @var string
	 */
	public $serverOs = null;

	/**
	 * 
	 * @var string
	 */
	public $phpVersion = null;

	/**
	 * 
	 * @var string
	 */
	public $ceAdminEmail = null;

	/**
	 * 
	 * @var string
	 */
	public $type = null;

	/**
	 * 
	 * @var string
	 */
	public $description = null;

	/**
	 * 
	 * @var string
	 */
	public $data = null;

}
