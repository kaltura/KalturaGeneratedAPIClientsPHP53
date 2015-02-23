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
// Copyright (C) 2006-2011  Kaltura Inc.
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
class ConditionType
{
	const ABC_WATERMARK = "abcScreenersWatermarkAccessControl.abcWatermark";
	const EVENT_NOTIFICATION_FIELD = "eventNotification.BooleanField";
	const EVENT_NOTIFICATION_OBJECT_CHANGED = "eventNotification.ObjectChanged";
	const METADATA_FIELD_CHANGED = "metadata.FieldChanged";
	const METADATA_FIELD_COMPARE = "metadata.FieldCompare";
	const METADATA_FIELD_MATCH = "metadata.FieldMatch";
	const AUTHENTICATED = "1";
	const COUNTRY = "2";
	const IP_ADDRESS = "3";
	const SITE = "4";
	const USER_AGENT = "5";
	const FIELD_MATCH = "6";
	const FIELD_COMPARE = "7";
	const ASSET_PROPERTIES_COMPARE = "8";
	const USER_ROLE = "9";
	const GEO_DISTANCE = "10";
}

