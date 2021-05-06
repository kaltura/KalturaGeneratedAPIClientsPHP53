<?php
// ===================================================================================================
//                           _  __     _ _
//                          | |/ /__ _| | |_ _  _ _ _ __ _
//                          | ' </ _` | |  _| || | '_/ _` |
//                          |_|\_\__,_|_|\__|\_,_|_| \__,_|
//
// This file is part of the Kaltura Collaborative Media Suite which allows users
// to do with audio, video, and animation what Wiki platforms allow them to do with
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
namespace Kaltura\Client\Plugin\ContentDistribution\Enum;

/**
 * @package Kaltura
 * @subpackage Client
 */
class DistributionProviderType extends \Kaltura\Client\EnumBase
{
	const AVN = "avnDistribution.AVN";
	const COMCAST_MRSS = "comcastMrssDistribution.COMCAST_MRSS";
	const CROSS_KALTURA = "crossKalturaDistribution.CROSS_KALTURA";
	const DAILYMOTION = "dailymotionDistribution.DAILYMOTION";
	const DOUBLECLICK = "doubleClickDistribution.DOUBLECLICK";
	const FACEBOOK = "facebookDistribution.FACEBOOK";
	const FREEWHEEL = "freewheelDistribution.FREEWHEEL";
	const FREEWHEEL_GENERIC = "freewheelGenericDistribution.FREEWHEEL_GENERIC";
	const FTP = "ftpDistribution.FTP";
	const FTP_SCHEDULED = "ftpDistribution.FTP_SCHEDULED";
	const HULU = "huluDistribution.HULU";
	const IDETIC = "ideticDistribution.IDETIC";
	const METRO_PCS = "metroPcsDistribution.METRO_PCS";
	const MSN = "msnDistribution.MSN";
	const PODCAST = "podcastDistribution.PODCAST";
	const QUICKPLAY = "quickPlayDistribution.QUICKPLAY";
	const UNICORN = "unicornDistribution.UNICORN";
	const YAHOO = "yahooDistribution.YAHOO";
	const YOUTUBE = "youTubeDistribution.YOUTUBE";
	const YOUTUBE_API = "youtubeApiDistribution.YOUTUBE_API";
	const GENERIC = "1";
	const SYNDICATION = "2";
}

