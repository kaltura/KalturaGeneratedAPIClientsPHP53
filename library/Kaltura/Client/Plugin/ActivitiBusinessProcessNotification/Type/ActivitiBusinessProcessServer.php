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
namespace Kaltura\Client\Plugin\ActivitiBusinessProcessNotification\Type;

/**
 * @package Kaltura
 * @subpackage Client
 */
class ActivitiBusinessProcessServer extends \Kaltura\Client\Plugin\BusinessProcessNotification\Type\BusinessProcessServer
{
	public function getKalturaObjectType()
	{
		return 'KalturaActivitiBusinessProcessServer';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->host))
			$this->host = (string)$xml->host;
		if(count($xml->port))
			$this->port = (int)$xml->port;
		if(count($xml->protocol))
			$this->protocol = (string)$xml->protocol;
		if(count($xml->username))
			$this->username = (string)$xml->username;
		if(count($xml->password))
			$this->password = (string)$xml->password;
	}
	/**
	 * 
	 * @var string
	 */
	public $host = null;

	/**
	 * 
	 * @var int
	 */
	public $port = null;

	/**
	 * 
	 * @var \Kaltura\Client\Plugin\ActivitiBusinessProcessNotification\Enum\ActivitiBusinessProcessServerProtocol
	 */
	public $protocol = null;

	/**
	 * 
	 * @var string
	 */
	public $username = null;

	/**
	 * 
	 * @var string
	 */
	public $password = null;

}
