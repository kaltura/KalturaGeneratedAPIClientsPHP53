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
 * Media-asset info
 * @package Kaltura
 * @subpackage Client
 */
class MediaAsset extends \Kaltura\Client\Type\Asset
{
	public function getKalturaObjectType()
	{
		return 'KalturaMediaAsset';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->systemStartDate))
			$this->systemStartDate = (string)$xml->systemStartDate;
		if(count($xml->systemFinalDate))
			$this->systemFinalDate = (string)$xml->systemFinalDate;
		if(count($xml->externalIds))
			$this->externalIds = (string)$xml->externalIds;
		if(count($xml->catchUpBuffer))
			$this->catchUpBuffer = (string)$xml->catchUpBuffer;
		if(count($xml->trickPlayBuffer))
			$this->trickPlayBuffer = (string)$xml->trickPlayBuffer;
		if(count($xml->enableRecordingPlaybackNonEntitledChannel))
		{
			if(!empty($xml->enableRecordingPlaybackNonEntitledChannel))
				$this->enableRecordingPlaybackNonEntitledChannel = true;
			else
				$this->enableRecordingPlaybackNonEntitledChannel = false;
		}
		if(count($xml->enableRecordingPlaybackNonExistingChannel))
		{
			if(!empty($xml->enableRecordingPlaybackNonExistingChannel))
				$this->enableRecordingPlaybackNonExistingChannel = true;
			else
				$this->enableRecordingPlaybackNonExistingChannel = false;
		}
	}
	/**
	 * Date and time represented as epoch.
	 * @var int
	 */
	public $systemStartDate = null;

	/**
	 * Date and time represented as epoch.
	 * @var int
	 */
	public $systemFinalDate = null;

	/**
	 * External identifiers
	 * @var string
	 */
	public $externalIds = null;

	/**
	 * Catch-up buffer
	 * @var int
	 */
	public $catchUpBuffer = null;

	/**
	 * Trick-play buffer
	 * @var int
	 */
	public $trickPlayBuffer = null;

	/**
	 * Enable Recording playback for non entitled channel
	 * @var bool
	 * @readonly
	 */
	public $enableRecordingPlaybackNonEntitledChannel = null;

	/**
	 * Enable Recording playback for non existing channel
	 * @var bool
	 * @readonly
	 */
	public $enableRecordingPlaybackNonExistingChannel = null;

}
