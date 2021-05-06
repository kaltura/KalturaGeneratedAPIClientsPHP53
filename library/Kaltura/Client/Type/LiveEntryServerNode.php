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
class LiveEntryServerNode extends \Kaltura\Client\Type\EntryServerNode
{
	public function getKalturaObjectType()
	{
		return 'KalturaLiveEntryServerNode';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->streams))
		{
			if(empty($xml->streams))
				$this->streams = array();
			else
				$this->streams = \Kaltura\Client\ParseUtils::unmarshalArray($xml->streams, "KalturaLiveStreamParams");
		}
		if(count($xml->recordingInfo))
		{
			if(empty($xml->recordingInfo))
				$this->recordingInfo = array();
			else
				$this->recordingInfo = \Kaltura\Client\ParseUtils::unmarshalArray($xml->recordingInfo, "KalturaLiveEntryServerNodeRecordingInfo");
		}
		if(count($xml->isPlayableUser))
		{
			if(!empty($xml->isPlayableUser) && $xml->isPlayableUser != 'false')
				$this->isPlayableUser = true;
			else
				$this->isPlayableUser = false;
		}
		if(count($xml->viewMode))
			$this->viewMode = (int)$xml->viewMode;
	}
	/**
	 * parameters of the stream we got
	 * @var array<KalturaLiveStreamParams>
	 */
	public $streams;

	/**
	 * 
	 * @var array<KalturaLiveEntryServerNodeRecordingInfo>
	 */
	public $recordingInfo;

	/**
	 * 
	 * @var bool
	 */
	public $isPlayableUser = null;

	/**
	 * 
	 * @var \Kaltura\Client\Enum\ViewMode
	 */
	public $viewMode = null;

}
