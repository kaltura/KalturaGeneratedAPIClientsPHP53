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
namespace Kaltura\Client\Plugin\EventNotification\Enum;

/**
 * @package Kaltura
 * @subpackage Client
 */
class EventNotificationEventObjectType
{
	const AD_CUE_POINT = "adCuePointEventNotifications.AdCuePoint";
	const ANNOTATION = "annotationEventNotifications.Annotation";
	const CAPTION_ASSET = "captionAssetEventNotifications.CaptionAsset";
	const CODE_CUE_POINT = "codeCuePointEventNotifications.CodeCuePoint";
	const DISTRIBUTION_PROFILE = "contentDistributionEventNotifications.DistributionProfile";
	const ENTRY_DISTRIBUTION = "contentDistributionEventNotifications.EntryDistribution";
	const CUE_POINT = "cuePointEventNotifications.CuePoint";
	const METADATA = "metadataEventNotifications.Metadata";
	const ENTRY = "1";
	const CATEGORY = "2";
	const ASSET = "3";
	const FLAVORASSET = "4";
	const THUMBASSET = "5";
	const KUSER = "8";
	const ACCESSCONTROL = "9";
	const BATCHJOB = "10";
	const BULKUPLOADRESULT = "11";
	const CATEGORYKUSER = "12";
	const CONVERSIONPROFILE2 = "14";
	const FLAVORPARAMS = "15";
	const FLAVORPARAMSCONVERSIONPROFILE = "16";
	const FLAVORPARAMSOUTPUT = "17";
	const GENERICSYNDICATIONFEED = "18";
	const KUSERTOUSERROLE = "19";
	const PARTNER = "20";
	const PERMISSION = "21";
	const PERMISSIONITEM = "22";
	const PERMISSIONTOPERMISSIONITEM = "23";
	const SCHEDULER = "24";
	const SCHEDULERCONFIG = "25";
	const SCHEDULERSTATUS = "26";
	const SCHEDULERWORKER = "27";
	const STORAGEPROFILE = "28";
	const SYNDICATIONFEED = "29";
	const THUMBPARAMS = "31";
	const THUMBPARAMSOUTPUT = "32";
	const UPLOADTOKEN = "33";
	const USERLOGINDATA = "34";
	const USERROLE = "35";
	const WIDGET = "36";
	const CATEGORYENTRY = "37";
}

