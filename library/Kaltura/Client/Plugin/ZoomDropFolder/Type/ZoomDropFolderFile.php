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
namespace Kaltura\Client\Plugin\ZoomDropFolder\Type;

/**
 * @package Kaltura
 * @subpackage Client
 */
class ZoomDropFolderFile extends \Kaltura\Client\Plugin\DropFolder\Type\DropFolderFile
{
	public function getKalturaObjectType()
	{
		return 'KalturaZoomDropFolderFile';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->meetingMetadata) && !empty($xml->meetingMetadata))
			$this->meetingMetadata = \Kaltura\Client\ParseUtils::unmarshalObject($xml->meetingMetadata, "KalturaZoomMeetingMetadata");
		if(count($xml->recordingFile) && !empty($xml->recordingFile))
			$this->recordingFile = \Kaltura\Client\ParseUtils::unmarshalObject($xml->recordingFile, "KalturaZoomRecordingFile");
		if(count($xml->parentEntryId))
			$this->parentEntryId = (string)$xml->parentEntryId;
		if(count($xml->isParentEntry))
		{
			if(!empty($xml->isParentEntry) && $xml->isParentEntry != 'false')
				$this->isParentEntry = true;
			else
				$this->isParentEntry = false;
		}
	}
	/**
	 * 
	 * @var \Kaltura\Client\Plugin\ZoomDropFolder\Type\ZoomMeetingMetadata
	 */
	public $meetingMetadata;

	/**
	 * 
	 * @var \Kaltura\Client\Plugin\ZoomDropFolder\Type\ZoomRecordingFile
	 */
	public $recordingFile;

	/**
	 * 
	 * @var string
	 */
	public $parentEntryId = null;

	/**
	 * 
	 * @var bool
	 */
	public $isParentEntry = null;

}
