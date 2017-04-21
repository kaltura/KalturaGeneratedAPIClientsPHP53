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
namespace Kaltura\Client\Plugin\Schedule\Type;

/**
 * @package Kaltura
 * @subpackage Client
 */
class ScheduleEventRecurrence extends \Kaltura\Client\ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaScheduleEventRecurrence';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->name))
			$this->name = (string)$xml->name;
		if(count($xml->frequency))
			$this->frequency = (string)$xml->frequency;
		if(count($xml->until))
			$this->until = (int)$xml->until;
		if(count($xml->timeZone))
			$this->timeZone = (string)$xml->timeZone;
		if(count($xml->count))
			$this->count = (int)$xml->count;
		if(count($xml->interval))
			$this->interval = (int)$xml->interval;
		if(count($xml->bySecond))
			$this->bySecond = (string)$xml->bySecond;
		if(count($xml->byMinute))
			$this->byMinute = (string)$xml->byMinute;
		if(count($xml->byHour))
			$this->byHour = (string)$xml->byHour;
		if(count($xml->byDay))
			$this->byDay = (string)$xml->byDay;
		if(count($xml->byMonthDay))
			$this->byMonthDay = (string)$xml->byMonthDay;
		if(count($xml->byYearDay))
			$this->byYearDay = (string)$xml->byYearDay;
		if(count($xml->byWeekNumber))
			$this->byWeekNumber = (string)$xml->byWeekNumber;
		if(count($xml->byMonth))
			$this->byMonth = (string)$xml->byMonth;
		if(count($xml->byOffset))
			$this->byOffset = (string)$xml->byOffset;
		if(count($xml->weekStartDay))
			$this->weekStartDay = (string)$xml->weekStartDay;
	}
	/**
	 * 
	 * @var string
	 */
	public $name = null;

	/**
	 * 
	 * @var \Kaltura\Client\Plugin\Schedule\Enum\ScheduleEventRecurrenceFrequency
	 */
	public $frequency = null;

	/**
	 * 
	 * @var int
	 */
	public $until = null;

	/**
	 * TimeZone String
	 * @var string
	 */
	public $timeZone = null;

	/**
	 * 
	 * @var int
	 */
	public $count = null;

	/**
	 * 
	 * @var int
	 */
	public $interval = null;

	/**
	 * Comma separated numbers between 0 to 59
	 * @var string
	 */
	public $bySecond = null;

	/**
	 * Comma separated numbers between 0 to 59
	 * @var string
	 */
	public $byMinute = null;

	/**
	 * Comma separated numbers between 0 to 23
	 * @var string
	 */
	public $byHour = null;

	/**
	 * Comma separated of KalturaScheduleEventRecurrenceDay
	 * 	 Each byDay value can also be preceded by a positive (+n) or negative (-n) integer.
	 * 	 If present, this indicates the nth occurrence of the specific day within the MONTHLY or YEARLY RRULE.
	 * 	 For example, within a MONTHLY rule, +1MO (or simply 1MO) represents the first Monday within the month, whereas -1MO represents the last Monday of the month.
	 * 	 If an integer modifier is not present, it means all days of this type within the specified frequency.
	 * 	 For example, within a MONTHLY rule, MO represents all Mondays within the month.
	 * @var string
	 */
	public $byDay = null;

	/**
	 * Comma separated of numbers between -31 to 31, excluding 0.
	 * 	 For example, -10 represents the tenth to the last day of the month.
	 * @var string
	 */
	public $byMonthDay = null;

	/**
	 * Comma separated of numbers between -366 to 366, excluding 0.
	 * 	 For example, -1 represents the last day of the year (December 31st) and -306 represents the 306th to the last day of the year (March 1st).
	 * @var string
	 */
	public $byYearDay = null;

	/**
	 * Comma separated of numbers between -53 to 53, excluding 0.
	 * 	 This corresponds to weeks according to week numbering.
	 * 	 A week is defined as a seven day period, starting on the day of the week defined to be the week start.
	 * 	 Week number one of the calendar year is the first week which contains at least four (4) days in that calendar year.
	 * 	 This rule part is only valid for YEARLY frequency.
	 * 	 For example, 3 represents the third week of the year.
	 * @var string
	 */
	public $byWeekNumber = null;

	/**
	 * Comma separated numbers between 1 to 12
	 * @var string
	 */
	public $byMonth = null;

	/**
	 * Comma separated of numbers between -366 to 366, excluding 0.
	 * 	 Corresponds to the nth occurrence within the set of events specified by the rule.
	 * 	 It must only be used in conjunction with another byrule part.
	 * 	 For example "the last work day of the month" could be represented as: frequency=MONTHLY;byDay=MO,TU,WE,TH,FR;byOffset=-1
	 * 	 Each byOffset value can include a positive (+n) or negative (-n) integer.
	 * 	 If present, this indicates the nth occurrence of the specific occurrence within the set of events specified by the rule.
	 * @var string
	 */
	public $byOffset = null;

	/**
	 * 
	 * @var \Kaltura\Client\Plugin\Schedule\Enum\ScheduleEventRecurrenceDay
	 */
	public $weekStartDay = null;

}
