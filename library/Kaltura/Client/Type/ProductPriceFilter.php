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
class ProductPriceFilter extends \Kaltura\Client\Type\Filter
{
	public function getKalturaObjectType()
	{
		return 'KalturaProductPriceFilter';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->subscriptionIdIn))
			$this->subscriptionIdIn = (string)$xml->subscriptionIdIn;
		if(count($xml->fileIdIn))
			$this->fileIdIn = (string)$xml->fileIdIn;
		if(count($xml->isLowest))
		{
			if(!empty($xml->isLowest))
				$this->isLowest = true;
			else
				$this->isLowest = false;
		}
		if(count($xml->couponCodeEqual))
			$this->couponCodeEqual = (string)$xml->couponCodeEqual;
	}
	/**
	 * Comma separated subscriptions identifiers
	 * @var string
	 */
	public $subscriptionIdIn = null;

	/**
	 * Comma separated media files identifiers
	 * @var string
	 */
	public $fileIdIn = null;

	/**
	 * A flag that indicates if only the lowest price of an item should return
	 * @var bool
	 */
	public $isLowest = null;

	/**
	 * Discount coupon code
	 * @var string
	 */
	public $couponCodeEqual = null;

}
