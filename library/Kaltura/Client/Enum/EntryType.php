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
class EntryType extends \Kaltura\Client\EnumBase
{
	const AUTOMATIC = "-1";
	const MEDIA_CLIP = "1";
	const MIX = "2";
	const PLAYLIST = "5";
	const DATA = "6";
	const LIVE_STREAM = "7";
	const LIVE_CHANNEL = "8";
	const DOCUMENT = "10";
	const CONFERENCE_ENTRY_SERVER = "conference.CONFERENCE_ENTRY_SERVER";
	const EXTERNAL_MEDIA = "externalMedia.externalMedia";
	const ROOM = "room.room";
	const SIP_ENTRY_SERVER = "sip.SIP_ENTRY_SERVER";
}

