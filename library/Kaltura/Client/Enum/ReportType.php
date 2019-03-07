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
namespace Kaltura\Client\Enum;

/**
 * @package Kaltura
 * @subpackage Client
 */
class ReportType extends \Kaltura\Client\EnumBase
{
	const QUIZ = "quiz.QUIZ";
	const QUIZ_AGGREGATE_BY_QUESTION = "quiz.QUIZ_AGGREGATE_BY_QUESTION";
	const QUIZ_USER_AGGREGATE_BY_QUESTION = "quiz.QUIZ_USER_AGGREGATE_BY_QUESTION";
	const QUIZ_USER_PERCENTAGE = "quiz.QUIZ_USER_PERCENTAGE";
	const TOP_CONTENT = "1";
	const CONTENT_DROPOFF = "2";
	const CONTENT_INTERACTIONS = "3";
	const MAP_OVERLAY = "4";
	const TOP_CONTRIBUTORS = "5";
	const TOP_SYNDICATION = "6";
	const CONTENT_CONTRIBUTIONS = "7";
	const USER_ENGAGEMENT = "11";
	const SPECIFIC_USER_ENGAGEMENT = "12";
	const USER_TOP_CONTENT = "13";
	const USER_CONTENT_DROPOFF = "14";
	const USER_CONTENT_INTERACTIONS = "15";
	const APPLICATIONS = "16";
	const USER_USAGE = "17";
	const SPECIFIC_USER_USAGE = "18";
	const VAR_USAGE = "19";
	const TOP_CREATORS = "20";
	const PLATFORMS = "21";
	const OPERATING_SYSTEM = "22";
	const BROWSERS = "23";
	const LIVE = "24";
	const TOP_PLAYBACK_CONTEXT = "25";
	const VPAAS_USAGE = "26";
	const ENTRY_USAGE = "27";
	const REACH_USAGE = "28";
	const TOP_CUSTOM_VAR1 = "29";
	const MAP_OVERLAY_CITY = "30";
	const OPERATING_SYSTEM_FAMILIES = "32";
	const BROWSERS_FAMILIES = "33";
	const USER_ENGAGEMENT_TIMELINE = "34";
	const UNIQUE_USERS_PLAY = "35";
	const MAP_OVERLAY_COUNTRY = "36";
	const MAP_OVERLAY_REGION = "37";
	const TOP_CONTENT_CREATOR = "38";
	const TOP_CONTENT_CONTRIBUTORS = "39";
	const APP_DOMAIN_UNIQUE_ACTIVE_USERS = "40";
	const TOP_SOURCES = "41";
	const VPAAS_USAGE_MULTI = "42";
	const CONTENT_REPORT_REASONS = "44";
	const PARTNER_USAGE = "201";
}

