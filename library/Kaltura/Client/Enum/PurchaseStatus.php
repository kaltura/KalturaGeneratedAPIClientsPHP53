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
namespace Kaltura\Client\Enum;

/**
 * @package Kaltura
 * @subpackage Client
 */
class PurchaseStatus extends \Kaltura\Client\EnumBase
{
	const PPV_PURCHASED = "ppv_purchased";
	const FREE = "free";
	const FOR_PURCHASE_SUBSCRIPTION_ONLY = "for_purchase_subscription_only";
	const SUBSCRIPTION_PURCHASED = "subscription_purchased";
	const FOR_PURCHASE = "for_purchase";
	const SUBSCRIPTION_PURCHASED_WRONG_CURRENCY = "subscription_purchased_wrong_currency";
	const PRE_PAID_PURCHASED = "pre_paid_purchased";
	const GEO_COMMERCE_BLOCKED = "geo_commerce_blocked";
	const ENTITLED_TO_PREVIEW_MODULE = "entitled_to_preview_module";
	const FIRST_DEVICE_LIMITATION = "first_device_limitation";
	const COLLECTION_PURCHASED = "collection_purchased";
	const USER_SUSPENDED = "user_suspended";
	const NOT_FOR_PURCHASE = "not_for_purchase";
}

