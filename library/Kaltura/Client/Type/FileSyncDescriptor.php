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
class FileSyncDescriptor extends \Kaltura\Client\ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaFileSyncDescriptor';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->fileSyncLocalPath))
			$this->fileSyncLocalPath = (string)$xml->fileSyncLocalPath;
		if(count($xml->fileSyncRemoteUrl))
			$this->fileSyncRemoteUrl = (string)$xml->fileSyncRemoteUrl;
		if(count($xml->fileSyncObjectSubType))
			$this->fileSyncObjectSubType = (int)$xml->fileSyncObjectSubType;
	}
	/**
	 * 
	 * @var string
	 */
	public $fileSyncLocalPath = null;

	/**
	 * The translated path as used by the scheduler
	 * @var string
	 */
	public $fileSyncRemoteUrl = null;

	/**
	 * 
	 * @var int
	 */
	public $fileSyncObjectSubType = null;

}
