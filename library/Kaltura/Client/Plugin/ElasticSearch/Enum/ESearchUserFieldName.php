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
namespace Kaltura\Client\Plugin\ElasticSearch\Enum;

/**
 * @package Kaltura
 * @subpackage Client
 */
class ESearchUserFieldName extends \Kaltura\Client\EnumBase
{
	const USER_CREATED_AT = "created_at";
	const USER_EMAIL = "email";
	const USER_FIRST_NAME = "first_name";
	const USER_GROUP_IDS = "group_ids";
	const USER_TYPE = "kuser_type";
	const USER_LAST_NAME = "last_name";
	const USER_PERMISSION_NAMES = "permission_names";
	const USER_ROLE_IDS = "role_ids";
	const USER_SCREEN_NAME = "screen_name";
	const USER_TAGS = "tags";
	const USER_UPDATED_AT = "updated_at";
}

