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
class ZoomRecordingFile extends \Kaltura\Client\ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaZoomRecordingFile';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->id))
			$this->id = (string)$xml->id;
		if(count($xml->recordingStart))
			$this->recordingStart = (string)$xml->recordingStart;
		if(count($xml->fileType))
			$this->fileType = (int)$xml->fileType;
		if(count($xml->downloadUrl))
			$this->downloadUrl = (string)$xml->downloadUrl;
		if(count($xml->fileExtension))
			$this->fileExtension = (string)$xml->fileExtension;
		if(count($xml->downloadToken))
			$this->downloadToken = (string)$xml->downloadToken;
	}
	/**
	 * 
	 * @var string
	 */
	public $id = null;

	/**
	 * 
	 * @var string
	 */
	public $recordingStart = null;

	/**
	 * 
	 * @var \Kaltura\Client\Plugin\Vendor\Enum\RecordingFileType
	 */
	public $fileType = null;

	/**
	 * 
	 * @var string
	 */
	public $downloadUrl = null;

	/**
	 * 
	 * @var string
	 */
	public $fileExtension = null;

	/**
	 * 
	 * @var string
	 */
	public $downloadToken = null;

}
