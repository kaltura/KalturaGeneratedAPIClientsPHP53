<?php
// ===================================================================================================
//                           _  __     _ _
//                          | |/ /__ _| | |_ _  _ _ _ __ _
//                          | ' </ _` | |  _| || | '_/ _` |
//                          |_|\_\__,_|_|\__|\_,_|_| \__,_|
//
// This file is part of the Kaltura Collaborative Media Suite which allows users
// to do with audio, video, and animation what Wiki platforms allow them to do with
// text.
//
// Copyright (C) 2006-2023  Kaltura Inc.
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
namespace Kaltura\Client\Plugin\EventNotification\Enum;

/**
 * @package Kaltura
 * @subpackage Client
 */
class EventNotificationEventType extends \Kaltura\Client\EnumBase
{
	const BATCH_JOB_STATUS = "1";
	const OBJECT_ADDED = "2";
	const OBJECT_CHANGED = "3";
	const OBJECT_COPIED = "4";
	const OBJECT_CREATED = "5";
	const OBJECT_DATA_CHANGED = "6";
	const OBJECT_DELETED = "7";
	const OBJECT_ERASED = "8";
	const OBJECT_READY_FOR_REPLACMENT = "9";
	const OBJECT_SAVED = "10";
	const OBJECT_UPDATED = "11";
	const OBJECT_REPLACED = "12";
	const OBJECT_READY_FOR_INDEX = "13";
	const INTEGRATION_JOB_CLOSED = "integrationEventNotifications.INTEGRATION_JOB_CLOSED";
}

