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
class BatchJobType
{
	const PARSE_CAPTION_ASSET = "captionSearch.parseCaptionAsset";
	const DISTRIBUTION_DELETE = "contentDistribution.DistributionDelete";
	const CONVERT = "0";
	const DISTRIBUTION_DISABLE = "contentDistribution.DistributionDisable";
	const DISTRIBUTION_ENABLE = "contentDistribution.DistributionEnable";
	const DISTRIBUTION_FETCH_REPORT = "contentDistribution.DistributionFetchReport";
	const DISTRIBUTION_SUBMIT = "contentDistribution.DistributionSubmit";
	const DISTRIBUTION_SYNC = "contentDistribution.DistributionSync";
	const DISTRIBUTION_UPDATE = "contentDistribution.DistributionUpdate";
	const DROP_FOLDER_CONTENT_PROCESSOR = "dropFolder.DropFolderContentProcessor";
	const DROP_FOLDER_WATCHER = "dropFolder.DropFolderWatcher";
	const EVENT_NOTIFICATION_HANDLER = "eventNotification.EventNotificationHandler";
	const SCHEDULED_TASK = "scheduledTask.ScheduledTask";
	const INDEX_TAGS = "tagSearch.IndexTagsByPrivacyContext";
	const TAG_RESOLVE = "tagSearch.TagResolve";
	const VIRUS_SCAN = "virusScan.VirusScan";
	const WIDEVINE_REPOSITORY_SYNC = "widevine.WidevineRepositorySync";
	const IMPORT = "1";
	const DELETE = "2";
	const FLATTEN = "3";
	const BULKUPLOAD = "4";
	const DVDCREATOR = "5";
	const DOWNLOAD = "6";
	const OOCONVERT = "7";
	const CONVERT_PROFILE = "10";
	const POSTCONVERT = "11";
	const EXTRACT_MEDIA = "14";
	const MAIL = "15";
	const NOTIFICATION = "16";
	const CLEANUP = "17";
	const SCHEDULER_HELPER = "18";
	const BULKDOWNLOAD = "19";
	const DB_CLEANUP = "20";
	const PROVISION_PROVIDE = "21";
	const CONVERT_COLLECTION = "22";
	const STORAGE_EXPORT = "23";
	const PROVISION_DELETE = "24";
	const STORAGE_DELETE = "25";
	const EMAIL_INGESTION = "26";
	const METADATA_IMPORT = "27";
	const METADATA_TRANSFORM = "28";
	const FILESYNC_IMPORT = "29";
	const CAPTURE_THUMB = "30";
	const DELETE_FILE = "31";
	const INDEX = "32";
	const MOVE_CATEGORY_ENTRIES = "33";
	const COPY = "34";
	const CONCAT = "35";
	const CONVERT_LIVE_SEGMENT = "36";
	const COPY_PARTNER = "37";
	const VALIDATE_LIVE_MEDIA_SERVERS = "38";
	const SYNC_CATEGORY_PRIVACY_CONTEXT = "39";
	const LIVE_REPORT_EXPORT = "40";
}

