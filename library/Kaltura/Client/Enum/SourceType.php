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
// Copyright (C) 2006-2023  Kaltura Inc.
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
class SourceType extends \Kaltura\Client\EnumBase
{
	const FILE = "1";
	const WEBCAM = "2";
	const URL = "5";
	const SEARCH_PROVIDER = "6";
	const AKAMAI_LIVE = "29";
	const MANUAL_LIVE_STREAM = "30";
	const AKAMAI_UNIVERSAL_LIVE = "31";
	const LIVE_STREAM = "32";
	const LIVE_CHANNEL = "33";
	const RECORDED_LIVE = "34";
	const CLIP = "35";
	const KALTURA_RECORDED_LIVE = "36";
	const LECTURE_CAPTURE = "37";
	const LIVE_STREAM_ONTEXTDATA_CAPTIONS = "42";
	const LIMELIGHT_LIVE = "limeLight.LIVE_STREAM";
	const VELOCIX_LIVE = "velocix.VELOCIX_LIVE";
}

