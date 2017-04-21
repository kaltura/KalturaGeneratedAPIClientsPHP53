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
namespace Kaltura\Client\Plugin\HttpNotification\Type;

/**
 * Evaluates PHP statement, depends on the execution context
 * @package Kaltura
 * @subpackage Client
 */
class HttpNotificationObjectData extends \Kaltura\Client\Plugin\HttpNotification\Type\HttpNotificationData
{
	public function getKalturaObjectType()
	{
		return 'KalturaHttpNotificationObjectData';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->apiObjectType))
			$this->apiObjectType = (string)$xml->apiObjectType;
		if(count($xml->format))
			$this->format = (int)$xml->format;
		if(count($xml->ignoreNull))
		{
			if(!empty($xml->ignoreNull))
				$this->ignoreNull = true;
			else
				$this->ignoreNull = false;
		}
		if(count($xml->code))
			$this->code = (string)$xml->code;
	}
	/**
	 * Kaltura API object type
	 * @var string
	 */
	public $apiObjectType = null;

	/**
	 * Data format
	 * @var \Kaltura\Client\Enum\ResponseType
	 */
	public $format = null;

	/**
	 * Ignore null attributes during serialization
	 * @var bool
	 */
	public $ignoreNull = null;

	/**
	 * PHP code
	 * @var string
	 */
	public $code = null;

}
