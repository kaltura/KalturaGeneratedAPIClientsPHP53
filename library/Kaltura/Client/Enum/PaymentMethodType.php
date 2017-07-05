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
class PaymentMethodType extends \Kaltura\Client\EnumBase
{
	const UNKNOWN = "unknown";
	const CREDIT_CARD = "credit_card";
	const SMS = "sms";
	const PAY_PAL = "pay_pal";
	const DEBIT_CARD = "debit_card";
	const IDEAL = "ideal";
	const INCASO = "incaso";
	const GIFT = "gift";
	const VISA = "visa";
	const MASTER_CARD = "master_card";
	const IN_APP = "in_app";
	const M1 = "m1";
	const CHANGE_SUBSCRIPTION = "change_subscription";
	const OFFLINE = "offline";
}

