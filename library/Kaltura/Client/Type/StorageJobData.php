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
class StorageJobData extends \Kaltura\Client\Type\JobData
{
	public function getKalturaObjectType()
	{
		return 'KalturaStorageJobData';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->serverUrl))
			$this->serverUrl = (string)$xml->serverUrl;
		if(count($xml->serverUsername))
			$this->serverUsername = (string)$xml->serverUsername;
		if(count($xml->serverPassword))
			$this->serverPassword = (string)$xml->serverPassword;
		if(count($xml->serverPrivateKey))
			$this->serverPrivateKey = (string)$xml->serverPrivateKey;
		if(count($xml->serverPublicKey))
			$this->serverPublicKey = (string)$xml->serverPublicKey;
		if(count($xml->serverPassPhrase))
			$this->serverPassPhrase = (string)$xml->serverPassPhrase;
		if(count($xml->ftpPassiveMode))
		{
			if(!empty($xml->ftpPassiveMode))
				$this->ftpPassiveMode = true;
			else
				$this->ftpPassiveMode = false;
		}
		if(count($xml->srcFileSyncLocalPath))
			$this->srcFileSyncLocalPath = (string)$xml->srcFileSyncLocalPath;
		if(count($xml->srcFileSyncId))
			$this->srcFileSyncId = (string)$xml->srcFileSyncId;
		if(count($xml->destFileSyncStoredPath))
			$this->destFileSyncStoredPath = (string)$xml->destFileSyncStoredPath;
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
	public $serverUsername = null;

	/**
	 * 
	 * @var string
	 */
	public $serverPassword = null;

	/**
	 * 
	 * @var string
	 */
	public $serverPrivateKey = null;

	/**
	 * 
	 * @var string
	 */
	public $serverPublicKey = null;

	/**
	 * 
	 * @var string
	 */
	public $serverPassPhrase = null;

	/**
	 * 
	 * @var bool
	 */
	public $ftpPassiveMode = null;

	/**
	 * 
	 * @var string
	 */
	public $srcFileSyncLocalPath = null;

	/**
	 * 
	 * @var string
	 */
	public $srcFileSyncId = null;

	/**
	 * 
	 * @var string
	 */
	public $destFileSyncStoredPath = null;

}
