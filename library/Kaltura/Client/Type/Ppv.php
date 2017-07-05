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
 * PPV details
 * @package Kaltura
 * @subpackage Client
 */
class Ppv extends \Kaltura\Client\ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaPpv';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->id))
			$this->id = (string)$xml->id;
		if(count($xml->name))
			$this->name = (string)$xml->name;
		if(count($xml->price) && !empty($xml->price))
			$this->price = \Kaltura\Client\ParseUtils::unmarshalObject($xml->price, "KalturaPriceDetails");
		if(count($xml->fileTypes))
		{
			if(empty($xml->fileTypes))
				$this->fileTypes = array();
			else
				$this->fileTypes = \Kaltura\Client\ParseUtils::unmarshalArray($xml->fileTypes, "KalturaIntegerValue");
		}
		if(count($xml->discountModules) && !empty($xml->discountModules))
			$this->discountModules = \Kaltura\Client\ParseUtils::unmarshalObject($xml->discountModules, "KalturaDiscountModule");
		if(count($xml->couponsGroup) && !empty($xml->couponsGroup))
			$this->couponsGroup = \Kaltura\Client\ParseUtils::unmarshalObject($xml->couponsGroup, "KalturaCouponsGroup");
		if(count($xml->descriptions))
		{
			if(empty($xml->descriptions))
				$this->descriptions = array();
			else
				$this->descriptions = \Kaltura\Client\ParseUtils::unmarshalArray($xml->descriptions, "KalturaTranslationToken");
		}
		if(count($xml->productCode))
			$this->productCode = (string)$xml->productCode;
		if(count($xml->isSubscriptionOnly))
		{
			if(!empty($xml->isSubscriptionOnly))
				$this->isSubscriptionOnly = true;
			else
				$this->isSubscriptionOnly = false;
		}
		if(count($xml->firstDeviceLimitation))
		{
			if(!empty($xml->firstDeviceLimitation))
				$this->firstDeviceLimitation = true;
			else
				$this->firstDeviceLimitation = false;
		}
		if(count($xml->usageModule) && !empty($xml->usageModule))
			$this->usageModule = \Kaltura\Client\ParseUtils::unmarshalObject($xml->usageModule, "KalturaUsageModule");
	}
	/**
	 * PPV identifier
	 * @var string
	 */
	public $id = null;

	/**
	 * the name for the ppv
	 * @var string
	 */
	public $name = null;

	/**
	 * The price of the ppv
	 * @var \Kaltura\Client\Type\PriceDetails
	 */
	public $price;

	/**
	 * A list of file types identifiers that are supported in this ppv
	 * @var array<KalturaIntegerValue>
	 */
	public $fileTypes;

	/**
	 * The internal discount module for the ppv
	 * @var \Kaltura\Client\Type\DiscountModule
	 */
	public $discountModules;

	/**
	 * Coupons group for the ppv
	 * @var \Kaltura\Client\Type\CouponsGroup
	 */
	public $couponsGroup;

	/**
	 * A list of the descriptions of the ppv on different languages (language code and translation)
	 * @var array<KalturaTranslationToken>
	 */
	public $descriptions;

	/**
	 * Product code for the ppv
	 * @var string
	 */
	public $productCode = null;

	/**
	 * Indicates whether or not this ppv can be purchased standalone or only as part of a subscription
	 * @var bool
	 */
	public $isSubscriptionOnly = null;

	/**
	 * Indicates whether or not this ppv can be consumed only on the first device
	 * @var bool
	 */
	public $firstDeviceLimitation = null;

	/**
	 * PPV usage module
	 * @var \Kaltura\Client\Type\UsageModule
	 */
	public $usageModule;

}
