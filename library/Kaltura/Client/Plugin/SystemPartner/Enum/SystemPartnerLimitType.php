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
// Copyright (C) 2006-2015  Kaltura Inc.
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
namespace Kaltura\Client\Plugin\SystemPartner\Enum;

/**
 * @package Kaltura
 * @subpackage Client
 */
class SystemPartnerLimitType extends \Kaltura\Client\EnumBase
{
	const ACCESS_CONTROLS = "ACCESS_CONTROLS";
	const ADMIN_LOGIN_USERS = "ADMIN_LOGIN_USERS";
	const BULK_SIZE = "BULK_SIZE";
	const END_USERS = "END_USERS";
	const ENTRIES = "ENTRIES";
	const LIVE_STREAM_INPUTS = "LIVE_STREAM_INPUTS";
	const LIVE_STREAM_OUTPUTS = "LIVE_STREAM_OUTPUTS";
	const LOGIN_USERS = "LOGIN_USERS";
	const MONTHLY_BANDWIDTH = "MONTHLY_BANDWIDTH";
	const MONTHLY_STORAGE = "MONTHLY_STORAGE";
	const MONTHLY_STORAGE_AND_BANDWIDTH = "MONTHLY_STORAGE_AND_BANDWIDTH";
	const MONTHLY_STREAM_ENTRIES = "MONTHLY_STREAM_ENTRIES";
	const PUBLISHERS = "PUBLISHERS";
	const USER_LOGIN_ATTEMPTS = "USER_LOGIN_ATTEMPTS";
}

