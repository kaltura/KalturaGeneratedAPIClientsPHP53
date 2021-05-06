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
namespace Kaltura\Client\Type;

/**
 * @package Kaltura
 * @subpackage Client
 */
class LiveStreamDetails extends \Kaltura\Client\ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaLiveStreamDetails';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->primaryStreamStatus))
			$this->primaryStreamStatus = (int)$xml->primaryStreamStatus;
		if(count($xml->secondaryStreamStatus))
			$this->secondaryStreamStatus = (int)$xml->secondaryStreamStatus;
		if(count($xml->viewMode))
			$this->viewMode = (int)$xml->viewMode;
		if(count($xml->wasBroadcast))
		{
			if(!empty($xml->wasBroadcast) && $xml->wasBroadcast != 'false')
				$this->wasBroadcast = true;
			else
				$this->wasBroadcast = false;
		}
		if(count($xml->broadcastStatus))
			$this->broadcastStatus = (int)$xml->broadcastStatus;
	}
	/**
	 * The status of the primary stream
	 * @var \Kaltura\Client\Enum\EntryServerNodeStatus
	 */
	public $primaryStreamStatus = null;

	/**
	 * The status of the secondary stream
	 * @var \Kaltura\Client\Enum\EntryServerNodeStatus
	 */
	public $secondaryStreamStatus = null;

	/**
	 * 
	 * @var \Kaltura\Client\Enum\ViewMode
	 */
	public $viewMode = null;

	/**
	 * 
	 * @var bool
	 */
	public $wasBroadcast = null;

	/**
	 * 
	 * @var \Kaltura\Client\Enum\LiveStreamBroadcastStatus
	 */
	public $broadcastStatus = null;

}
