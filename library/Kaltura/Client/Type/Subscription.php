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
 * Subscription details
 * @package Kaltura
 * @subpackage Client
 */
class Subscription extends \Kaltura\Client\ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaSubscription';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->id))
			$this->id = (string)$xml->id;
		if(count($xml->channels))
		{
			if(empty($xml->channels))
				$this->channels = array();
			else
				$this->channels = \Kaltura\Client\ParseUtils::unmarshalArray($xml->channels, "KalturaBaseChannel");
		}
		if(count($xml->startDate))
			$this->startDate = (string)$xml->startDate;
		if(count($xml->endDate))
			$this->endDate = (string)$xml->endDate;
		if(count($xml->fileTypes))
		{
			if(empty($xml->fileTypes))
				$this->fileTypes = array();
			else
				$this->fileTypes = \Kaltura\Client\ParseUtils::unmarshalArray($xml->fileTypes, "KalturaIntegerValue");
		}
		if(count($xml->isRenewable))
		{
			if(!empty($xml->isRenewable))
				$this->isRenewable = true;
			else
				$this->isRenewable = false;
		}
		if(count($xml->renewalsNumber))
			$this->renewalsNumber = (int)$xml->renewalsNumber;
		if(count($xml->isInfiniteRenewal))
		{
			if(!empty($xml->isInfiniteRenewal))
				$this->isInfiniteRenewal = true;
			else
				$this->isInfiniteRenewal = false;
		}
		if(count($xml->price) && !empty($xml->price))
			$this->price = \Kaltura\Client\ParseUtils::unmarshalObject($xml->price, "KalturaPriceDetails");
		if(count($xml->discountModule) && !empty($xml->discountModule))
			$this->discountModule = \Kaltura\Client\ParseUtils::unmarshalObject($xml->discountModule, "KalturaDiscountModule");
		if(count($xml->couponsGroup) && !empty($xml->couponsGroup))
			$this->couponsGroup = \Kaltura\Client\ParseUtils::unmarshalObject($xml->couponsGroup, "KalturaCouponsGroup");
		if(count($xml->names))
		{
			if(empty($xml->names))
				$this->names = array();
			else
				$this->names = \Kaltura\Client\ParseUtils::unmarshalArray($xml->names, "KalturaTranslationToken");
		}
		if(count($xml->descriptions))
		{
			if(empty($xml->descriptions))
				$this->descriptions = array();
			else
				$this->descriptions = \Kaltura\Client\ParseUtils::unmarshalArray($xml->descriptions, "KalturaTranslationToken");
		}
		if(count($xml->mediaId))
			$this->mediaId = (int)$xml->mediaId;
		if(count($xml->prorityInOrder))
			$this->prorityInOrder = (string)$xml->prorityInOrder;
		if(count($xml->productCode))
			$this->productCode = (string)$xml->productCode;
		if(count($xml->pricePlans))
		{
			if(empty($xml->pricePlans))
				$this->pricePlans = array();
			else
				$this->pricePlans = \Kaltura\Client\ParseUtils::unmarshalArray($xml->pricePlans, "KalturaPricePlan");
		}
		if(count($xml->previewModule) && !empty($xml->previewModule))
			$this->previewModule = \Kaltura\Client\ParseUtils::unmarshalObject($xml->previewModule, "KalturaPreviewModule");
		if(count($xml->householdLimitationsId))
			$this->householdLimitationsId = (int)$xml->householdLimitationsId;
		if(count($xml->gracePeriodMinutes))
			$this->gracePeriodMinutes = (int)$xml->gracePeriodMinutes;
		if(count($xml->premiumServices))
		{
			if(empty($xml->premiumServices))
				$this->premiumServices = array();
			else
				$this->premiumServices = \Kaltura\Client\ParseUtils::unmarshalArray($xml->premiumServices, "KalturaPremiumService");
		}
		if(count($xml->maxViewsNumber))
			$this->maxViewsNumber = (int)$xml->maxViewsNumber;
		if(count($xml->viewLifeCycle))
			$this->viewLifeCycle = (int)$xml->viewLifeCycle;
		if(count($xml->waiverPeriod))
			$this->waiverPeriod = (int)$xml->waiverPeriod;
		if(count($xml->isWaiverEnabled))
		{
			if(!empty($xml->isWaiverEnabled))
				$this->isWaiverEnabled = true;
			else
				$this->isWaiverEnabled = false;
		}
		if(count($xml->userTypes))
		{
			if(empty($xml->userTypes))
				$this->userTypes = array();
			else
				$this->userTypes = \Kaltura\Client\ParseUtils::unmarshalArray($xml->userTypes, "KalturaOTTUserType");
		}
	}
	/**
	 * Subscription identifier
	 * @var string
	 */
	public $id = null;

	/**
	 * A list of channels associated with this subscription
	 * @var array<KalturaBaseChannel>
	 */
	public $channels;

	/**
	 * The first date the subscription is available for purchasing
	 * @var int
	 */
	public $startDate = null;

	/**
	 * The last date the subscription is available for purchasing
	 * @var int
	 */
	public $endDate = null;

	/**
	 * A list of file types identifiers that are supported in this subscription
	 * @var array<KalturaIntegerValue>
	 */
	public $fileTypes;

	/**
	 * Denotes whether or not this subscription can be renewed
	 * @var bool
	 */
	public $isRenewable = null;

	/**
	 * Defines the number of times this subscription will be renewed
	 * @var int
	 */
	public $renewalsNumber = null;

	/**
	 * Indicates whether the subscription will renew forever
	 * @var bool
	 */
	public $isInfiniteRenewal = null;

	/**
	 * The price of the subscription
	 * @var \Kaltura\Client\Type\PriceDetails
	 */
	public $price;

	/**
	 * The internal discount module for the subscription
	 * @var \Kaltura\Client\Type\DiscountModule
	 */
	public $discountModule;

	/**
	 * Coupons group for the subscription
	 * @var \Kaltura\Client\Type\CouponsGroup
	 */
	public $couponsGroup;

	/**
	 * A list of the name of the subscription on different languages (language code and translation)
	 * @var array<KalturaTranslationToken>
	 */
	public $names;

	/**
	 * A list of the descriptions of the subscriptions on different languages (language code and translation)
	 * @var array<KalturaTranslationToken>
	 */
	public $descriptions;

	/**
	 * Identifier of the media associated with the subscription
	 * @var int
	 */
	public $mediaId = null;

	/**
	 * Subscription order (when returned in methods that retrieve subscriptions)
	 * @var int
	 */
	public $prorityInOrder = null;

	/**
	 * Product code for the subscription
	 * @var string
	 */
	public $productCode = null;

	/**
	 * Subscription price plans
	 * @var array<KalturaPricePlan>
	 */
	public $pricePlans;

	/**
	 * Subscription preview module
	 * @var \Kaltura\Client\Type\PreviewModule
	 */
	public $previewModule;

	/**
	 * The household limitation module identifier associated with this subscription
	 * @var int
	 */
	public $householdLimitationsId = null;

	/**
	 * The subscription grace period in minutes
	 * @var int
	 */
	public $gracePeriodMinutes = null;

	/**
	 * List of premium services included in the subscription
	 * @var array<KalturaPremiumService>
	 */
	public $premiumServices;

	/**
	 * The maximum number of times an item in this usage module can be viewed
	 * @var int
	 */
	public $maxViewsNumber = null;

	/**
	 * The amount time an item is available for viewing since a user started watching the item
	 * @var int
	 */
	public $viewLifeCycle = null;

	/**
	 * Time period during which the end user can waive his rights to cancel a purchase. When the time period is passed, the purchase can no longer be cancelled
	 * @var int
	 */
	public $waiverPeriod = null;

	/**
	 * Indicates whether or not the end user has the right to waive his rights to cancel a purchase
	 * @var bool
	 */
	public $isWaiverEnabled = null;

	/**
	 * List of permitted user types for the subscription
	 * @var array<KalturaOTTUserType>
	 */
	public $userTypes;

}
