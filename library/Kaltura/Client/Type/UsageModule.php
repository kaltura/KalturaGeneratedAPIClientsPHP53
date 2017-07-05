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
 * Pricing usage module
 * @package Kaltura
 * @subpackage Client
 */
class UsageModule extends \Kaltura\Client\ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaUsageModule';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->id))
			$this->id = (string)$xml->id;
		if(count($xml->name))
			$this->name = (string)$xml->name;
		if(count($xml->maxViewsNumber))
			$this->maxViewsNumber = (int)$xml->maxViewsNumber;
		if(count($xml->viewLifeCycle))
			$this->viewLifeCycle = (int)$xml->viewLifeCycle;
		if(count($xml->fullLifeCycle))
			$this->fullLifeCycle = (int)$xml->fullLifeCycle;
		if(count($xml->couponId))
			$this->couponId = (int)$xml->couponId;
		if(count($xml->waiverPeriod))
			$this->waiverPeriod = (int)$xml->waiverPeriod;
		if(count($xml->isWaiverEnabled))
		{
			if(!empty($xml->isWaiverEnabled))
				$this->isWaiverEnabled = true;
			else
				$this->isWaiverEnabled = false;
		}
		if(count($xml->isOfflinePlayback))
		{
			if(!empty($xml->isOfflinePlayback))
				$this->isOfflinePlayback = true;
			else
				$this->isOfflinePlayback = false;
		}
	}
	/**
	 * Usage module identifier
	 * @var int
	 * @readonly
	 */
	public $id = null;

	/**
	 * Usage module name
	 * @var string
	 */
	public $name = null;

	/**
	 * The maximum number of times an item in this usage module can be viewed
	 * @var int
	 */
	public $maxViewsNumber = null;

	/**
	 * The amount time an item is available for viewing since a user started watching the item
	 * @var int
	 */
	public $viewLifeCycle = null;

	/**
	 * The amount time an item is available for viewing
	 * @var int
	 */
	public $fullLifeCycle = null;

	/**
	 * Identifies a specific coupon linked to this object
	 * @var int
	 */
	public $couponId = null;

	/**
	 * Time period during which the end user can waive his rights to cancel a purchase. When the time period is passed, the purchase can no longer be cancelled
	 * @var int
	 */
	public $waiverPeriod = null;

	/**
	 * Indicates whether or not the end user has the right to waive his rights to cancel a purchase
	 * @var bool
	 */
	public $isWaiverEnabled = null;

	/**
	 * Indicates that usage is targeted for offline playback
	 * @var bool
	 */
	public $isOfflinePlayback = null;

}
