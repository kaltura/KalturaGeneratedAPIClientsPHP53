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
class ResponseProfileCacheRecalculateOptions extends \Kaltura\Client\ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaResponseProfileCacheRecalculateOptions';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->limit))
			$this->limit = (int)$xml->limit;
		if(count($xml->cachedObjectType))
			$this->cachedObjectType = (string)$xml->cachedObjectType;
		if(count($xml->objectId))
			$this->objectId = (string)$xml->objectId;
		if(count($xml->startObjectKey))
			$this->startObjectKey = (string)$xml->startObjectKey;
		if(count($xml->endObjectKey))
			$this->endObjectKey = (string)$xml->endObjectKey;
		if(count($xml->jobCreatedAt))
			$this->jobCreatedAt = (int)$xml->jobCreatedAt;
		if(count($xml->isFirstLoop))
		{
			if(!empty($xml->isFirstLoop))
				$this->isFirstLoop = true;
			else
				$this->isFirstLoop = false;
		}
	}
	/**
	 * Maximum number of keys to recalculate
	 * @var int
	 */
	public $limit = null;

	/**
	 * Class name
	 * @var string
	 */
	public $cachedObjectType = null;

	/**
	 * 
	 * @var string
	 */
	public $objectId = null;

	/**
	 * 
	 * @var string
	 */
	public $startObjectKey = null;

	/**
	 * 
	 * @var string
	 */
	public $endObjectKey = null;

	/**
	 * 
	 * @var int
	 */
	public $jobCreatedAt = null;

	/**
	 * 
	 * @var bool
	 */
	public $isFirstLoop = null;

}
