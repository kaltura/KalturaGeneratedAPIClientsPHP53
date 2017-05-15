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
namespace Kaltura\Client\Plugin\PlayReady\Enum;

/**
 * @package Kaltura
 * @subpackage Client
 */
class PlayReadyAnalogVideoOPId extends \Kaltura\Client\EnumBase
{
	const EXPLICIT_ANALOG_TV = "2098DE8D-7DDD-4BAB-96C6-32EBB6FABEA3";
	const BEST_EFFORT_EXPLICIT_ANALOG_TV = "225CD36F-F132-49EF-BA8C-C91EA28E4369";
	const IMAGE_CONSTRAINT_VIDEO = "811C5110-46C8-4C6E-8163-C0482A15D47E";
	const AGC_AND_COLOR_STRIPE = "C3FD11C6-F8B7-4D20-B008-1DB17D61F2DA";
	const IMAGE_CONSTRAINT_MONITOR = "D783A191-E083-4BAF-B2DA-E69F910B3772";
}

