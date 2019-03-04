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
// Copyright (C) 2006-2019  Kaltura Inc.
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
namespace Kaltura\Client\Plugin\ConfMaps\Type;

/**
 * @package Kaltura
 * @subpackage Client
 */
class ConfMaps extends \Kaltura\Client\ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaConfMaps';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->name))
			$this->name = (string)$xml->name;
		if(count($xml->content))
			$this->content = (string)$xml->content;
		if(count($xml->isEditable))
		{
			if(!empty($xml->isEditable))
				$this->isEditable = true;
			else
				$this->isEditable = false;
		}
		if(count($xml->lastUpdate))
			$this->lastUpdate = (int)$xml->lastUpdate;
		if(count($xml->relatedHost))
			$this->relatedHost = (string)$xml->relatedHost;
		if(count($xml->version))
			$this->version = (int)$xml->version;
		if(count($xml->sourceLocation))
			$this->sourceLocation = (string)$xml->sourceLocation;
		if(count($xml->remarks))
			$this->remarks = (string)$xml->remarks;
		if(count($xml->status))
			$this->status = (int)$xml->status;
	}
	/**
	 * Name of the map
	 * @var string
	 * @insertonly
	 */
	public $name = null;

	/**
	 * Ini file content
	 * @var string
	 */
	public $content = null;

	/**
	 * IsEditable - true / false
	 * @var bool
	 * @readonly
	 */
	public $isEditable = null;

	/**
	 * Time of the last update
	 * @var int
	 * @readonly
	 */
	public $lastUpdate = null;

	/**
	 * Regex that represent the host/s that this map affect
	 * @var string
	 */
	public $relatedHost = null;

	/**
	 * 
	 * @var int
	 * @readonly
	 */
	public $version = null;

	/**
	 * 
	 * @var \Kaltura\Client\Enum\ConfMapsSourceLocation
	 * @insertonly
	 */
	public $sourceLocation = null;

	/**
	 * 
	 * @var string
	 * @insertonly
	 */
	public $remarks = null;

	/**
	 * map status
	 * @var \Kaltura\Client\Plugin\ConfMaps\Enum\ConfMapsStatus
	 */
	public $status = null;

}
