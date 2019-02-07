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
class ESearchEntryOrderByFieldName extends \Kaltura\Client\EnumBase
{
	const CREATED_AT = "created_at";
	const END_DATE = "end_date";
	const LAST_PLAYED_AT = "last_played_at";
	const NAME = "name";
	const PLAYS = "plays";
	const PLAYS_LAST_1_DAY = "plays_last_1_day";
	const PLAYS_LAST_30_DAYS = "plays_last_30_days";
	const PLAYS_LAST_7_DAYS = "plays_last_7_days";
	const START_DATE = "start_date";
	const UPDATED_AT = "updated_at";
	const VIEWS = "views";
	const VIEWS_LAST_1_DAY = "views_last_1_day";
	const VIEWS_LAST_30_DAYS = "views_last_30_days";
	const VIEWS_LAST_7_DAYS = "views_last_7_days";
	const VOTES = "votes";
}

