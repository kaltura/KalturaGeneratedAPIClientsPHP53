<?php
// ===================================================================================================
//                           _  __     _ _
//                          | |/ /__ _| | |_ _  _ _ _ __ _
//                          | ' </ _` | |  _| || | '_/ _` |
//                          |_|\_\__,_|_|\__|\_,_|_| \__,_|
//
// This file is part of the Kaltura Collaborative Media Suite which allows users
// to do with audio, video, and animation what Wiki platforms allow them to do with
// text.
//
// Copyright (C) 2006-2023  Kaltura Inc.
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
namespace Kaltura\Client\Plugin\ElasticSearch\Type;

/**
 * @package Kaltura
 * @subpackage Client
 */
abstract class ESearchParams extends \Kaltura\Client\ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaESearchParams';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->objectStatuses))
			$this->objectStatuses = (string)$xml->objectStatuses;
		if(count($xml->objectId))
			$this->objectId = (string)$xml->objectId;
		if(count($xml->orderBy) && !empty($xml->orderBy))
			$this->orderBy = \Kaltura\Client\ParseUtils::unmarshalObject($xml->orderBy, "KalturaESearchOrderBy");
		if(count($xml->ignoreSynonym))
		{
			if(!empty($xml->ignoreSynonym) && $xml->ignoreSynonym != 'false')
				$this->ignoreSynonym = true;
			else
				$this->ignoreSynonym = false;
		}
		if(count($xml->objectIds))
			$this->objectIds = (string)$xml->objectIds;
		if(count($xml->objectIdsNotIn))
			$this->objectIdsNotIn = (int)$xml->objectIdsNotIn;
	}
	/**
	 * 
	 * @var string
	 */
	public $objectStatuses = null;

	/**
	 * 
	 * @var string
	 */
	public $objectId = null;

	/**
	 * 
	 * @var \Kaltura\Client\Plugin\ElasticSearch\Type\ESearchOrderBy
	 */
	public $orderBy;

	/**
	 * 
	 * @var bool
	 */
	public $ignoreSynonym = null;

	/**
	 * 
	 * @var string
	 */
	public $objectIds = null;

	/**
	 * 
	 * @var \Kaltura\Client\Enum\NullableBoolean
	 */
	public $objectIdsNotIn = null;

}
