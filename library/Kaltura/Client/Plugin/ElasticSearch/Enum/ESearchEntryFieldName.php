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
// Copyright (C) 2006-2019  Kaltura Inc.
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
class ESearchEntryFieldName extends \Kaltura\Client\EnumBase
{
	const ACCESS_CONTROL_ID = "access_control_id";
	const ADMIN_TAGS = "admin_tags";
	const CAPTIONS_CONTENT = "captions_content";
	const CONVERSION_PROFILE_ID = "conversion_profile_id";
	const CREATED_AT = "created_at";
	const CREATOR_ID = "creator_kuser_id";
	const CREDIT = "credit";
	const DESCRIPTION = "description";
	const END_DATE = "end_date";
	const ENTITLED_USER_EDIT = "entitled_kusers_edit";
	const ENTITLED_USER_PUBLISH = "entitled_kusers_publish";
	const ENTITLED_USER_VIEW = "entitled_kusers_view";
	const ENTRY_TYPE = "entry_type";
	const EXTERNAL_SOURCE_TYPE = "external_source_type";
	const ID = "id";
	const IS_LIVE = "is_live";
	const IS_QUIZ = "is_quiz";
	const USER_ID = "kuser_id";
	const LENGTH_IN_MSECS = "length_in_msecs";
	const MEDIA_TYPE = "media_type";
	const MODERATION_STATUS = "moderation_status";
	const NAME = "name";
	const PARENT_ENTRY_ID = "parent_id";
	const PARTNER_SORT_VALUE = "partner_sort_value";
	const PUSH_PUBLISH = "push_publish";
	const RECORDED_ENTRY_ID = "recorded_entry_id";
	const REDIRECT_ENTRY_ID = "redirect_entry_id";
	const REFERENCE_ID = "reference_id";
	const ROOT_ID = "root_id";
	const SITE_URL = "site_url";
	const SOURCE_TYPE = "source_type";
	const START_DATE = "start_date";
	const TAGS = "tags";
	const TEMPLATE_ENTRY_ID = "template_entry_id";
	const UPDATED_AT = "updated_at";
	const USER_NAMES = "user_names";
}

