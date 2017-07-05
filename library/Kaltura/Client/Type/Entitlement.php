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
 * Entitlement
 * @package Kaltura
 * @subpackage Client
 */
class Entitlement extends \Kaltura\Client\ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaEntitlement';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->type))
			$this->type = (string)$xml->type;
		if(count($xml->entitlementId))
			$this->entitlementId = (string)$xml->entitlementId;
		if(count($xml->currentUses))
			$this->currentUses = (int)$xml->currentUses;
		if(count($xml->endDate))
			$this->endDate = (string)$xml->endDate;
		if(count($xml->currentDate))
			$this->currentDate = (string)$xml->currentDate;
		if(count($xml->lastViewDate))
			$this->lastViewDate = (string)$xml->lastViewDate;
		if(count($xml->purchaseDate))
			$this->purchaseDate = (string)$xml->purchaseDate;
		if(count($xml->purchaseId))
			$this->purchaseId = (int)$xml->purchaseId;
		if(count($xml->paymentMethod))
			$this->paymentMethod = (string)$xml->paymentMethod;
		if(count($xml->deviceUdid))
			$this->deviceUdid = (string)$xml->deviceUdid;
		if(count($xml->deviceName))
			$this->deviceName = (string)$xml->deviceName;
		if(count($xml->isCancelationWindowEnabled))
		{
			if(!empty($xml->isCancelationWindowEnabled))
				$this->isCancelationWindowEnabled = true;
			else
				$this->isCancelationWindowEnabled = false;
		}
		if(count($xml->maxUses))
			$this->maxUses = (int)$xml->maxUses;
		if(count($xml->nextRenewalDate))
			$this->nextRenewalDate = (string)$xml->nextRenewalDate;
		if(count($xml->isRenewableForPurchase))
		{
			if(!empty($xml->isRenewableForPurchase))
				$this->isRenewableForPurchase = true;
			else
				$this->isRenewableForPurchase = false;
		}
		if(count($xml->isRenewable))
		{
			if(!empty($xml->isRenewable))
				$this->isRenewable = true;
			else
				$this->isRenewable = false;
		}
		if(count($xml->mediaFileId))
			$this->mediaFileId = (int)$xml->mediaFileId;
		if(count($xml->mediaId))
			$this->mediaId = (int)$xml->mediaId;
		if(count($xml->isInGracePeriod))
		{
			if(!empty($xml->isInGracePeriod))
				$this->isInGracePeriod = true;
			else
				$this->isInGracePeriod = false;
		}
	}
	/**
	 * Entitlement type
	 * @var \Kaltura\Client\Enum\TransactionType
	 * @readonly
	 */
	public $type = null;

	/**
	 * Entitlement identifier
	 * @var string
	 * @readonly
	 */
	public $entitlementId = null;

	/**
	 * The current number of uses
	 * @var int
	 * @readonly
	 */
	public $currentUses = null;

	/**
	 * The end date of the entitlement
	 * @var int
	 * @readonly
	 */
	public $endDate = null;

	/**
	 * Current date
	 * @var int
	 * @readonly
	 */
	public $currentDate = null;

	/**
	 * The last date the item was viewed
	 * @var int
	 * @readonly
	 */
	public $lastViewDate = null;

	/**
	 * Purchase date
	 * @var int
	 * @readonly
	 */
	public $purchaseDate = null;

	/**
	 * Purchase identifier (for subscriptions and collections only)
	 * @var int
	 * @readonly
	 */
	public $purchaseId = null;

	/**
	 * Payment Method
	 * @var \Kaltura\Client\Enum\PaymentMethodType
	 * @readonly
	 */
	public $paymentMethod = null;

	/**
	 * The UDID of the device from which the purchase was made
	 * @var string
	 * @readonly
	 */
	public $deviceUdid = null;

	/**
	 * The name of the device from which the purchase was made
	 * @var string
	 * @readonly
	 */
	public $deviceName = null;

	/**
	 * Indicates whether a cancelation window period is enabled
	 * @var bool
	 * @readonly
	 */
	public $isCancelationWindowEnabled = null;

	/**
	 * The maximum number of uses available for this item (only for subscription and PPV)
	 * @var int
	 * @readonly
	 */
	public $maxUses = null;

	/**
	 * The date of the next renewal (only for subscription)
	 * @var int
	 * @readonly
	 */
	public $nextRenewalDate = null;

	/**
	 * Indicates whether the subscription is renewable in this purchase (only for subscription)
	 * @var bool
	 * @readonly
	 */
	public $isRenewableForPurchase = null;

	/**
	 * Indicates whether a subscription is renewable (only for subscription)
	 * @var bool
	 * @readonly
	 */
	public $isRenewable = null;

	/**
	 * Media file identifier (only for PPV)
	 * @var int
	 * @readonly
	 */
	public $mediaFileId = null;

	/**
	 * Media identifier (only for PPV)
	 * @var int
	 * @readonly
	 */
	public $mediaId = null;

	/**
	 * Indicates whether the user is currently in his grace period entitlement
	 * @var bool
	 * @readonly
	 */
	public $isInGracePeriod = null;

}
