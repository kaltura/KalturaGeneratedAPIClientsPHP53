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
// Copyright (C) 2006-2021  Kaltura Inc.
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
class ESearchMetadataItemData extends \Kaltura\Client\Plugin\ElasticSearch\Type\ESearchItemData
{
	public function getKalturaObjectType()
	{
		return 'KalturaESearchMetadataItemData';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->xpath))
			$this->xpath = (string)$xml->xpath;
		if(count($xml->metadataProfileId))
			$this->metadataProfileId = (int)$xml->metadataProfileId;
		if(count($xml->metadataFieldId))
			$this->metadataFieldId = (int)$xml->metadataFieldId;
		if(count($xml->valueText))
			$this->valueText = (string)$xml->valueText;
		if(count($xml->valueInt))
			$this->valueInt = (int)$xml->valueInt;
	}
	/**
	 * 
	 * @var string
	 */
	public $xpath = null;

	/**
	 * 
	 * @var int
	 */
	public $metadataProfileId = null;

	/**
	 * 
	 * @var int
	 */
	public $metadataFieldId = null;

	/**
	 * 
	 * @var string
	 */
	public $valueText = null;

	/**
	 * 
	 * @var int
	 */
	public $valueInt = null;

}
