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
namespace Kaltura\Client\Plugin\Drm\Enum;

/**
 * @package Kaltura
 * @subpackage Client
 */
class DrmKeyManagementPolicy extends \Kaltura\Client\EnumBase
{
	const UNKNOWN = 0;
	const CLEAR = 1;
	const SHARED_KEY = 2;
	const ALL_VIDEO = 3;
	const SD_HD = 4;
	const SD_HD_UHD = 5;
	const SD_HD_UHD1_UHD2 = 6;
	const SD_HD1_HD2_UHD1_UHD2 = 7;
	const SD_HD1_HD2_UHD = 8;
	const SDHD1_HD2_UHD = 9;
	const SDHD1_HD2_UHD1_UHD2 = 10;
}

