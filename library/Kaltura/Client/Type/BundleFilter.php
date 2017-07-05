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
class BundleFilter extends \Kaltura\Client\Type\AssetFilter
{
	public function getKalturaObjectType()
	{
		return 'KalturaBundleFilter';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->idEqual))
			$this->idEqual = (int)$xml->idEqual;
		if(count($xml->typeIn))
			$this->typeIn = (string)$xml->typeIn;
		if(count($xml->bundleTypeEqual))
			$this->bundleTypeEqual = (string)$xml->bundleTypeEqual;
	}
	/**
	 * Bundle Id.
	 * @var int
	 */
	public $idEqual = null;

	/**
	 * Comma separated list of asset types to search within. 
	 *             Possible values: 0 – EPG linear programs entries, any media type ID (according to media type IDs defined dynamically in the system).
	 *             If omitted – all types should be included.
	 * @var string
	 */
	public $typeIn = null;

	/**
	 * bundleType - possible values: Subscription or Collection
	 * @var \Kaltura\Client\Enum\BundleType
	 */
	public $bundleTypeEqual = null;

}
