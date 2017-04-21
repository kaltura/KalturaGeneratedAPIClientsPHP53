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
namespace Kaltura\Client\Plugin\DropFolder\Type;

/**
 * @package Kaltura
 * @subpackage Client
 */
abstract class SshDropFolder extends \Kaltura\Client\Plugin\DropFolder\Type\RemoteDropFolder
{
	public function getKalturaObjectType()
	{
		return 'KalturaSshDropFolder';
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
		if(count($xml->username))
			$this->username = (string)$xml->username;
		if(count($xml->password))
			$this->password = (string)$xml->password;
		if(count($xml->privateKey))
			$this->privateKey = (string)$xml->privateKey;
		if(count($xml->publicKey))
			$this->publicKey = (string)$xml->publicKey;
		if(count($xml->passPhrase))
			$this->passPhrase = (string)$xml->passPhrase;
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
	 * @var string
	 */
	public $username = null;

	/**
	 * 
	 * @var string
	 */
	public $password = null;

	/**
	 * 
	 * @var string
	 */
	public $privateKey = null;

	/**
	 * 
	 * @var string
	 */
	public $publicKey = null;

	/**
	 * 
	 * @var string
	 */
	public $passPhrase = null;

}
