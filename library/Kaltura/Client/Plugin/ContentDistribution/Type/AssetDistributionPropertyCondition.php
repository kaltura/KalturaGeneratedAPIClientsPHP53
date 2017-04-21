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
namespace Kaltura\Client\Plugin\ContentDistribution\Type;

/**
 * Defines the condition to match a property and value on core asset object (or one if its inherited objects)
 * @package Kaltura
 * @subpackage Client
 */
class AssetDistributionPropertyCondition extends \Kaltura\Client\Plugin\ContentDistribution\Type\AssetDistributionCondition
{
	public function getKalturaObjectType()
	{
		return 'KalturaAssetDistributionPropertyCondition';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->propertyName))
			$this->propertyName = (string)$xml->propertyName;
		if(count($xml->propertyValue))
			$this->propertyValue = (string)$xml->propertyValue;
	}
	/**
	 * The property name to look for, this will match to a getter on the asset object.
	 * 	 Should be camelCase naming convention (defining "myPropertyName" will look for getMyPropertyName())
	 * @var string
	 */
	public $propertyName = null;

	/**
	 * The value to compare
	 * @var string
	 */
	public $propertyValue = null;

}
