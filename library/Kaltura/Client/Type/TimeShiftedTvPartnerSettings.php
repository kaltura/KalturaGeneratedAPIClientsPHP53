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
class TimeShiftedTvPartnerSettings extends \Kaltura\Client\ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaTimeShiftedTvPartnerSettings';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->catchUpEnabled))
		{
			if(!empty($xml->catchUpEnabled))
				$this->catchUpEnabled = true;
			else
				$this->catchUpEnabled = false;
		}
		if(count($xml->cdvrEnabled))
		{
			if(!empty($xml->cdvrEnabled))
				$this->cdvrEnabled = true;
			else
				$this->cdvrEnabled = false;
		}
		if(count($xml->startOverEnabled))
		{
			if(!empty($xml->startOverEnabled))
				$this->startOverEnabled = true;
			else
				$this->startOverEnabled = false;
		}
		if(count($xml->trickPlayEnabled))
		{
			if(!empty($xml->trickPlayEnabled))
				$this->trickPlayEnabled = true;
			else
				$this->trickPlayEnabled = false;
		}
		if(count($xml->recordingScheduleWindowEnabled))
		{
			if(!empty($xml->recordingScheduleWindowEnabled))
				$this->recordingScheduleWindowEnabled = true;
			else
				$this->recordingScheduleWindowEnabled = false;
		}
		if(count($xml->protectionEnabled))
		{
			if(!empty($xml->protectionEnabled))
				$this->protectionEnabled = true;
			else
				$this->protectionEnabled = false;
		}
		if(count($xml->catchUpBufferLength))
			$this->catchUpBufferLength = (string)$xml->catchUpBufferLength;
		if(count($xml->trickPlayBufferLength))
			$this->trickPlayBufferLength = (string)$xml->trickPlayBufferLength;
		if(count($xml->recordingScheduleWindow))
			$this->recordingScheduleWindow = (string)$xml->recordingScheduleWindow;
		if(count($xml->paddingBeforeProgramStarts))
			$this->paddingBeforeProgramStarts = (string)$xml->paddingBeforeProgramStarts;
		if(count($xml->paddingAfterProgramEnds))
			$this->paddingAfterProgramEnds = (string)$xml->paddingAfterProgramEnds;
		if(count($xml->protectionPeriod))
			$this->protectionPeriod = (int)$xml->protectionPeriod;
		if(count($xml->protectionQuotaPercentage))
			$this->protectionQuotaPercentage = (int)$xml->protectionQuotaPercentage;
		if(count($xml->recordingLifetimePeriod))
			$this->recordingLifetimePeriod = (int)$xml->recordingLifetimePeriod;
		if(count($xml->cleanupNoticePeroid))
			$this->cleanupNoticePeroid = (int)$xml->cleanupNoticePeroid;
		if(count($xml->seriesRecordingEnabled))
		{
			if(!empty($xml->seriesRecordingEnabled))
				$this->seriesRecordingEnabled = true;
			else
				$this->seriesRecordingEnabled = false;
		}
		if(count($xml->nonEntitledChannelPlaybackEnabled))
		{
			if(!empty($xml->nonEntitledChannelPlaybackEnabled))
				$this->nonEntitledChannelPlaybackEnabled = true;
			else
				$this->nonEntitledChannelPlaybackEnabled = false;
		}
		if(count($xml->nonExistingChannelPlaybackEnabled))
		{
			if(!empty($xml->nonExistingChannelPlaybackEnabled))
				$this->nonExistingChannelPlaybackEnabled = true;
			else
				$this->nonExistingChannelPlaybackEnabled = false;
		}
	}
	/**
	 * Is catch-up enabled
	 * @var bool
	 */
	public $catchUpEnabled = null;

	/**
	 * Is c-dvr enabled
	 * @var bool
	 */
	public $cdvrEnabled = null;

	/**
	 * Is start-over enabled
	 * @var bool
	 */
	public $startOverEnabled = null;

	/**
	 * Is trick-play enabled
	 * @var bool
	 */
	public $trickPlayEnabled = null;

	/**
	 * Is recording schedule window enabled
	 * @var bool
	 */
	public $recordingScheduleWindowEnabled = null;

	/**
	 * Is recording protection enabled
	 * @var bool
	 */
	public $protectionEnabled = null;

	/**
	 * Catch-up buffer length
	 * @var int
	 */
	public $catchUpBufferLength = null;

	/**
	 * Trick play buffer length
	 * @var int
	 */
	public $trickPlayBufferLength = null;

	/**
	 * Recording schedule window. Indicates how long (in minutes) after the program starts it is allowed to schedule the recording
	 * @var int
	 */
	public $recordingScheduleWindow = null;

	/**
	 * Indicates how long (in seconds) before the program starts the recording will begin
	 * @var int
	 */
	public $paddingBeforeProgramStarts = null;

	/**
	 * Indicates how long (in seconds) after the program ends the recording will end
	 * @var int
	 */
	public $paddingAfterProgramEnds = null;

	/**
	 * Specify the time in days that a recording should be protected. Start time begins at protection request.
	 * @var int
	 */
	public $protectionPeriod = null;

	/**
	 * Indicates how many percent of the quota can be used for protection
	 * @var int
	 */
	public $protectionQuotaPercentage = null;

	/**
	 * Specify the time in days that a recording should be kept for user. Start time begins with the program end date.
	 * @var int
	 */
	public $recordingLifetimePeriod = null;

	/**
	 * The time in days before the recording lifetime is due from which the client should be able to warn user about deletion.
	 * @var int
	 */
	public $cleanupNoticePeroid = null;

	/**
	 * Is recording of series enabled
	 * @var bool
	 */
	public $seriesRecordingEnabled = null;

	/**
	 * Is recording playback for non-entitled channel enables
	 * @var bool
	 */
	public $nonEntitledChannelPlaybackEnabled = null;

	/**
	 * Is recording playback for non-existing channel enables
	 * @var bool
	 */
	public $nonExistingChannelPlaybackEnabled = null;

}
