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
 * Channel details
 * @package Kaltura
 * @subpackage Client
 */
class Channel extends \Kaltura\Client\Type\BaseChannel
{
	public function getKalturaObjectType()
	{
		return 'KalturaChannel';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->description))
			$this->description = (string)$xml->description;
		if(count($xml->images))
		{
			if(empty($xml->images))
				$this->images = array();
			else
				$this->images = \Kaltura\Client\ParseUtils::unmarshalArray($xml->images, "KalturaMediaImage");
		}
		if(count($xml->assetTypes))
		{
			if(empty($xml->assetTypes))
				$this->assetTypes = array();
			else
				$this->assetTypes = \Kaltura\Client\ParseUtils::unmarshalArray($xml->assetTypes, "KalturaIntegerValue");
		}
		if(count($xml->filterExpression))
			$this->filterExpression = (string)$xml->filterExpression;
		if(count($xml->isActive))
		{
			if(!empty($xml->isActive))
				$this->isActive = true;
			else
				$this->isActive = false;
		}
		if(count($xml->order))
			$this->order = (string)$xml->order;
	}
	/**
	 * Cannel description
	 * @var string
	 */
	public $description = null;

	/**
	 * Channel images
	 * @var array<KalturaMediaImage>
	 */
	public $images;

	/**
	 * Asset types in the channel.
	 *             -26 is EPG
	 * @var array<KalturaIntegerValue>
	 */
	public $assetTypes;

	/**
	 * Filter expression
	 * @var string
	 */
	public $filterExpression = null;

	/**
	 * active status
	 * @var bool
	 */
	public $isActive = null;

	/**
	 * Channel order
	 * @var \Kaltura\Client\Enum\AssetOrderBy
	 */
	public $order = null;

}
