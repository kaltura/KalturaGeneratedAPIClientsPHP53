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
namespace Kaltura\Client\Type;

/**
 * @package Kaltura
 * @subpackage Client
 */
class Recording extends \Kaltura\Client\ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaRecording';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->id))
			$this->id = (string)$xml->id;
		if(count($xml->status))
			$this->status = (string)$xml->status;
		if(count($xml->assetId))
			$this->assetId = (string)$xml->assetId;
		if(count($xml->type))
			$this->type = (string)$xml->type;
		if(count($xml->viewableUntilDate))
			$this->viewableUntilDate = (string)$xml->viewableUntilDate;
		if(count($xml->isProtected))
		{
			if(!empty($xml->isProtected))
				$this->isProtected = true;
			else
				$this->isProtected = false;
		}
		if(count($xml->createDate))
			$this->createDate = (string)$xml->createDate;
		if(count($xml->updateDate))
			$this->updateDate = (string)$xml->updateDate;
	}
	/**
	 * Kaltura unique ID representing the recording identifier
	 * @var int
	 * @readonly
	 */
	public $id = null;

	/**
	 * Recording state: scheduled/recording/recorded/canceled/failed/does_not_exists/deleted
	 * @var \Kaltura\Client\Enum\RecordingStatus
	 * @readonly
	 */
	public $status = null;

	/**
	 * Kaltura unique ID representing the program identifier
	 * @var int
	 */
	public $assetId = null;

	/**
	 * Recording Type: single/season/series
	 * @var \Kaltura\Client\Enum\RecordingType
	 * @readonly
	 */
	public $type = null;

	/**
	 * Specifies until when the recording is available for viewing. Date and time represented as epoch.
	 * @var int
	 * @readonly
	 */
	public $viewableUntilDate = null;

	/**
	 * Specifies whether or not the recording is protected
	 * @var bool
	 * @readonly
	 */
	public $isProtected = null;

	/**
	 * Specifies when was the recording created. Date and time represented as epoch.
	 * @var int
	 * @readonly
	 */
	public $createDate = null;

	/**
	 * Specifies when was the recording last updated. Date and time represented as epoch.
	 * @var int
	 * @readonly
	 */
	public $updateDate = null;

}
