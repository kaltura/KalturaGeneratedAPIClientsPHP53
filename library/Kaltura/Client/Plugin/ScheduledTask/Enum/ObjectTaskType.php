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
namespace Kaltura\Client\Plugin\ScheduledTask\Enum;

/**
 * @package Kaltura
 * @subpackage Client
 */
class ObjectTaskType extends \Kaltura\Client\EnumBase
{
	const DISTRIBUTE = "scheduledTaskContentDistribution.Distribute";
	const DISPATCH_EVENT_NOTIFICATION = "scheduledTaskEventNotification.DispatchEventNotification";
	const EXECUTE_METADATA_XSLT = "scheduledTaskMetadata.ExecuteMetadataXslt";
	const DELETE_ENTRY = "1";
	const MODIFY_CATEGORIES = "2";
	const DELETE_ENTRY_FLAVORS = "3";
	const CONVERT_ENTRY_FLAVORS = "4";
	const DELETE_LOCAL_CONTENT = "5";
	const STORAGE_EXPORT = "6";
	const MODIFY_ENTRY = "7";
	const MAIL_NOTIFICATION = "8";
}

