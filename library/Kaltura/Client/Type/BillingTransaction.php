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
 * Billing Transaction
 * @package Kaltura
 * @subpackage Client
 */
class BillingTransaction extends \Kaltura\Client\ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaBillingTransaction';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->recieptCode))
			$this->recieptCode = (string)$xml->recieptCode;
		if(count($xml->purchasedItemName))
			$this->purchasedItemName = (string)$xml->purchasedItemName;
		if(count($xml->purchasedItemCode))
			$this->purchasedItemCode = (string)$xml->purchasedItemCode;
		if(count($xml->itemType))
			$this->itemType = (string)$xml->itemType;
		if(count($xml->billingAction))
			$this->billingAction = (string)$xml->billingAction;
		if(count($xml->price) && !empty($xml->price))
			$this->price = \Kaltura\Client\ParseUtils::unmarshalObject($xml->price, "KalturaPrice");
		if(count($xml->actionDate))
			$this->actionDate = (string)$xml->actionDate;
		if(count($xml->startDate))
			$this->startDate = (string)$xml->startDate;
		if(count($xml->endDate))
			$this->endDate = (string)$xml->endDate;
		if(count($xml->paymentMethod))
			$this->paymentMethod = (string)$xml->paymentMethod;
		if(count($xml->paymentMethodExtraDetails))
			$this->paymentMethodExtraDetails = (string)$xml->paymentMethodExtraDetails;
		if(count($xml->isRecurring))
		{
			if(!empty($xml->isRecurring))
				$this->isRecurring = true;
			else
				$this->isRecurring = false;
		}
		if(count($xml->billingProviderRef))
			$this->billingProviderRef = (int)$xml->billingProviderRef;
		if(count($xml->purchaseId))
			$this->purchaseId = (int)$xml->purchaseId;
		if(count($xml->remarks))
			$this->remarks = (string)$xml->remarks;
	}
	/**
	 * Reciept Code
	 * @var string
	 * @readonly
	 */
	public $recieptCode = null;

	/**
	 * Purchased Item Name
	 * @var string
	 * @readonly
	 */
	public $purchasedItemName = null;

	/**
	 * Purchased Item Code
	 * @var string
	 * @readonly
	 */
	public $purchasedItemCode = null;

	/**
	 * Item Type
	 * @var \Kaltura\Client\Enum\BillingItemsType
	 * @readonly
	 */
	public $itemType = null;

	/**
	 * Billing Action
	 * @var \Kaltura\Client\Enum\BillingAction
	 * @readonly
	 */
	public $billingAction = null;

	/**
	 * price
	 * @var \Kaltura\Client\Type\Price
	 * @readonly
	 */
	public $price;

	/**
	 * Action Date
	 * @var int
	 * @readonly
	 */
	public $actionDate = null;

	/**
	 * Start Date
	 * @var int
	 * @readonly
	 */
	public $startDate = null;

	/**
	 * End Date
	 * @var int
	 * @readonly
	 */
	public $endDate = null;

	/**
	 * Payment Method
	 * @var \Kaltura\Client\Enum\PaymentMethodType
	 * @readonly
	 */
	public $paymentMethod = null;

	/**
	 * Payment Method Extra Details
	 * @var string
	 * @readonly
	 */
	public $paymentMethodExtraDetails = null;

	/**
	 * Is Recurring
	 * @var bool
	 * @readonly
	 */
	public $isRecurring = null;

	/**
	 * Billing Provider Ref
	 * @var int
	 * @readonly
	 */
	public $billingProviderRef = null;

	/**
	 * Purchase ID
	 * @var int
	 * @readonly
	 */
	public $purchaseId = null;

	/**
	 * Remarks
	 * @var string
	 * @readonly
	 */
	public $remarks = null;

}
