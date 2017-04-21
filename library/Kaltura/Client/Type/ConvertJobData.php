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
class ConvertJobData extends \Kaltura\Client\Type\ConvartableJobData
{
	public function getKalturaObjectType()
	{
		return 'KalturaConvertJobData';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->destFileSyncLocalPath))
			$this->destFileSyncLocalPath = (string)$xml->destFileSyncLocalPath;
		if(count($xml->destFileSyncRemoteUrl))
			$this->destFileSyncRemoteUrl = (string)$xml->destFileSyncRemoteUrl;
		if(count($xml->logFileSyncLocalPath))
			$this->logFileSyncLocalPath = (string)$xml->logFileSyncLocalPath;
		if(count($xml->logFileSyncRemoteUrl))
			$this->logFileSyncRemoteUrl = (string)$xml->logFileSyncRemoteUrl;
		if(count($xml->flavorAssetId))
			$this->flavorAssetId = (string)$xml->flavorAssetId;
		if(count($xml->remoteMediaId))
			$this->remoteMediaId = (string)$xml->remoteMediaId;
		if(count($xml->customData))
			$this->customData = (string)$xml->customData;
		if(count($xml->extraDestFileSyncs))
		{
			if(empty($xml->extraDestFileSyncs))
				$this->extraDestFileSyncs = array();
			else
				$this->extraDestFileSyncs = \Kaltura\Client\ParseUtils::unmarshalArray($xml->extraDestFileSyncs, "KalturaDestFileSyncDescriptor");
		}
		if(count($xml->engineMessage))
			$this->engineMessage = (string)$xml->engineMessage;
	}
	/**
	 * 
	 * @var string
	 */
	public $destFileSyncLocalPath = null;

	/**
	 * 
	 * @var string
	 */
	public $destFileSyncRemoteUrl = null;

	/**
	 * 
	 * @var string
	 */
	public $logFileSyncLocalPath = null;

	/**
	 * 
	 * @var string
	 */
	public $logFileSyncRemoteUrl = null;

	/**
	 * 
	 * @var string
	 */
	public $flavorAssetId = null;

	/**
	 * 
	 * @var string
	 */
	public $remoteMediaId = null;

	/**
	 * 
	 * @var string
	 */
	public $customData = null;

	/**
	 * 
	 * @var array<KalturaDestFileSyncDescriptor>
	 */
	public $extraDestFileSyncs;

	/**
	 * 
	 * @var string
	 */
	public $engineMessage = null;

}
