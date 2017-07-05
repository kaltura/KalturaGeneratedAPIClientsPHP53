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
 * Price plan
 * @package Kaltura
 * @subpackage Client
 */
class PricePlan extends \Kaltura\Client\Type\UsageModule
{
	public function getKalturaObjectType()
	{
		return 'KalturaPricePlan';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->isRenewable))
		{
			if(!empty($xml->isRenewable))
				$this->isRenewable = true;
			else
				$this->isRenewable = false;
		}
		if(count($xml->renewalsNumber))
			$this->renewalsNumber = (int)$xml->renewalsNumber;
		if(count($xml->priceId))
			$this->priceId = (int)$xml->priceId;
		if(count($xml->discountId))
			$this->discountId = (string)$xml->discountId;
	}
	/**
	 * Denotes whether or not this object can be renewed
	 * @var bool
	 */
	public $isRenewable = null;

	/**
	 * Defines the number of times the module will be renewed (for the life_cycle period)
	 * @var int
	 */
	public $renewalsNumber = null;

	/**
	 * Unique identifier associated with this object&#39;s price
	 * @var int
	 */
	public $priceId = null;

	/**
	 * The discount module identifier of the price plan
	 * @var int
	 */
	public $discountId = null;

}
