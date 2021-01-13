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
// Copyright (C) 2006-2021  Kaltura Inc.
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
class ESearchCategoryFieldName extends \Kaltura\Client\EnumBase
{
	const CONTRIBUTION_POLICY = "contribution_policy";
	const CREATED_AT = "created_at";
	const DEPTH = "depth";
	const DESCRIPTION = "description";
	const DIRECT_ENTRIES_COUNT = "direct_entries_count";
	const DIRECT_SUB_CATEGORIES_COUNT = "direct_sub_categories_count";
	const DISPLAY_IN_SEARCH = "display_in_search";
	const ENTRIES_COUNT = "entries_count";
	const FULL_IDS = "full_ids";
	const FULL_NAME = "full_name";
	const ID = "id";
	const INHERITANCE_TYPE = "inheritance_type";
	const INHERITED_PARENT_ID = "inherited_parent_id";
	const MEMBERS_COUNT = "members_count";
	const MODERATION = "moderation";
	const NAME = "name";
	const PARENT_ID = "parent_id";
	const PENDING_ENTRIES_COUNT = "pending_entries_count";
	const PENDING_MEMBERS_COUNT = "pending_members_count";
	const PRIVACY = "privacy";
	const PRIVACY_CONTEXT = "privacy_context";
	const PRIVACY_CONTEXTS = "privacy_contexts";
	const REFERENCE_ID = "reference_id";
	const TAGS = "tags";
	const UPDATED_AT = "updated_at";
	const USER_ID = "user_id";
}

