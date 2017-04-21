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
namespace Kaltura\Client\Enum;

/**
 * @package Kaltura
 * @subpackage Client
 */
class DeliveryProfileType extends \Kaltura\Client\EnumBase
{
	const EDGE_CAST_HTTP = "edgeCast.EDGE_CAST_HTTP";
	const EDGE_CAST_RTMP = "edgeCast.EDGE_CAST_RTMP";
	const KONTIKI_HTTP = "kontiki.KONTIKI_HTTP";
	const VELOCIX_HDS = "velocix.VELOCIX_HDS";
	const VELOCIX_HLS = "velocix.VELOCIX_HLS";
	const APPLE_HTTP = "1";
	const HDS = "3";
	const HTTP = "4";
	const RTMP = "5";
	const RTSP = "6";
	const SILVER_LIGHT = "7";
	const AKAMAI_HLS_DIRECT = "10";
	const AKAMAI_HLS_MANIFEST = "11";
	const AKAMAI_HD = "12";
	const AKAMAI_HDS = "13";
	const AKAMAI_HTTP = "14";
	const AKAMAI_RTMP = "15";
	const AKAMAI_RTSP = "16";
	const AKAMAI_SS = "17";
	const GENERIC_HLS = "21";
	const GENERIC_HDS = "23";
	const GENERIC_HTTP = "24";
	const GENERIC_HLS_MANIFEST = "25";
	const GENERIC_HDS_MANIFEST = "26";
	const GENERIC_SS = "27";
	const GENERIC_RTMP = "28";
	const LEVEL3_HLS = "31";
	const LEVEL3_HTTP = "34";
	const LEVEL3_RTMP = "35";
	const LIMELIGHT_HTTP = "44";
	const LIMELIGHT_RTMP = "45";
	const LOCAL_PATH_APPLE_HTTP = "51";
	const LOCAL_PATH_HDS = "53";
	const LOCAL_PATH_HTTP = "54";
	const LOCAL_PATH_RTMP = "55";
	const VOD_PACKAGER_HLS = "61";
	const VOD_PACKAGER_HDS = "63";
	const VOD_PACKAGER_MSS = "67";
	const VOD_PACKAGER_DASH = "68";
	const LIVE_HLS = "1001";
	const LIVE_HDS = "1002";
	const LIVE_DASH = "1003";
	const LIVE_RTMP = "1005";
	const LIVE_HLS_TO_MULTICAST = "1006";
	const LIVE_PACKAGER_HLS = "1007";
	const LIVE_PACKAGER_HDS = "1008";
	const LIVE_PACKAGER_DASH = "1009";
	const LIVE_PACKAGER_MSS = "1010";
	const LIVE_AKAMAI_HDS = "1013";
}

