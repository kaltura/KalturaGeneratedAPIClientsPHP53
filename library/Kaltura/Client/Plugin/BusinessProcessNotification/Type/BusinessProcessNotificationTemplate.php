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
namespace Kaltura\Client\Plugin\BusinessProcessNotification\Type;

/**
 * @package Kaltura
 * @subpackage Client
 */
abstract class BusinessProcessNotificationTemplate extends \Kaltura\Client\Plugin\EventNotification\Type\EventNotificationTemplate
{
	public function getKalturaObjectType()
	{
		return 'KalturaBusinessProcessNotificationTemplate';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->serverId))
			$this->serverId = (int)$xml->serverId;
		if(count($xml->processId))
			$this->processId = (string)$xml->processId;
		if(count($xml->mainObjectCode))
			$this->mainObjectCode = (string)$xml->mainObjectCode;
	}
	/**
	 * Define the integrated BPM server id
	 * @var int
	 */
	public $serverId = null;

	/**
	 * Define the integrated BPM process id
	 * @var string
	 */
	public $processId = null;

	/**
	 * Code to load the main triggering object
	 * @var string
	 */
	public $mainObjectCode = null;

}
