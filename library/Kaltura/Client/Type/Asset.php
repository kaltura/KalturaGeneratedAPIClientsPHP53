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
 * Asset info
 * @package Kaltura
 * @subpackage Client
 */
abstract class Asset extends \Kaltura\Client\Type\BaseAssetInfo
{
	public function getKalturaObjectType()
	{
		return 'KalturaAsset';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->metas))
		{
			if(empty($xml->metas))
				$this->metas = array();
			else
				$this->metas = \Kaltura\Client\ParseUtils::unmarshalMap($xml->metas, "KalturaValue");
		}
		if(count($xml->tags))
		{
			if(empty($xml->tags))
				$this->tags = array();
			else
				$this->tags = \Kaltura\Client\ParseUtils::unmarshalMap($xml->tags, "KalturaStringValueArray");
		}
		if(count($xml->startDate))
			$this->startDate = (string)$xml->startDate;
		if(count($xml->endDate))
			$this->endDate = (string)$xml->endDate;
		if(count($xml->enableCdvr))
		{
			if(!empty($xml->enableCdvr))
				$this->enableCdvr = true;
			else
				$this->enableCdvr = false;
		}
		if(count($xml->enableCatchUp))
		{
			if(!empty($xml->enableCatchUp))
				$this->enableCatchUp = true;
			else
				$this->enableCatchUp = false;
		}
		if(count($xml->enableStartOver))
		{
			if(!empty($xml->enableStartOver))
				$this->enableStartOver = true;
			else
				$this->enableStartOver = false;
		}
		if(count($xml->enableTrickPlay))
		{
			if(!empty($xml->enableTrickPlay))
				$this->enableTrickPlay = true;
			else
				$this->enableTrickPlay = false;
		}
	}
	/**
	 * Dynamic collection of key-value pairs according to the String Meta defined in the system
	 * @var array<string, KalturaValue>
	 */
	public $metas;

	/**
	 * Dynamic collection of key-value pairs according to the Tag Types defined in the system
	 * @var array<string, KalturaStringValueArray>
	 */
	public $tags;

	/**
	 * Date and time represented as epoch. For VOD – since when the asset is available in the catalog. For EPG/Linear – when the program is aired (can be in the future).
	 * @var int
	 */
	public $startDate = null;

	/**
	 * Date and time represented as epoch. For VOD – till when the asset be available in the catalog. For EPG/Linear – program end time and date
	 * @var int
	 */
	public $endDate = null;

	/**
	 * Enable cDVR
	 * @var bool
	 */
	public $enableCdvr = null;

	/**
	 * Enable catch-up
	 * @var bool
	 */
	public $enableCatchUp = null;

	/**
	 * Enable start over
	 * @var bool
	 */
	public $enableStartOver = null;

	/**
	 * Enable trick-play
	 * @var bool
	 */
	public $enableTrickPlay = null;

}
