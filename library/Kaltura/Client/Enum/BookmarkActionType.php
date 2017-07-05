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
class BookmarkActionType extends \Kaltura\Client\EnumBase
{
	const HIT = "HIT";
	const PLAY = "PLAY";
	const STOP = "STOP";
	const PAUSE = "PAUSE";
	const FIRST_PLAY = "FIRST_PLAY";
	const SWOOSH = "SWOOSH";
	const FULL_SCREEN = "FULL_SCREEN";
	const SEND_TO_FRIEND = "SEND_TO_FRIEND";
	const LOAD = "LOAD";
	const FULL_SCREEN_EXIT = "FULL_SCREEN_EXIT";
	const FINISH = "FINISH";
	const ERROR = "ERROR";
	const BITRATE_CHANGE = "BITRATE_CHANGE";
	const NONE = "NONE";
}

