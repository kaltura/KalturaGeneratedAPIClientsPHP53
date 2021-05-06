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
class UserEntryFilter extends \Kaltura\Client\Type\UserEntryBaseFilter
{
	public function getKalturaObjectType()
	{
		return 'KalturaUserEntryFilter';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->userIdEqualCurrent))
			$this->userIdEqualCurrent = (int)$xml->userIdEqualCurrent;
		if(count($xml->isAnonymous))
			$this->isAnonymous = (int)$xml->isAnonymous;
		if(count($xml->privacyContextEqual))
			$this->privacyContextEqual = (string)$xml->privacyContextEqual;
		if(count($xml->privacyContextIn))
			$this->privacyContextIn = (string)$xml->privacyContextIn;
		if(count($xml->partnerId))
			$this->partnerId = (int)$xml->partnerId;
	}
	/**
	 * 
	 * @var \Kaltura\Client\Enum\NullableBoolean
	 */
	public $userIdEqualCurrent = null;

	/**
	 * 
	 * @var \Kaltura\Client\Enum\NullableBoolean
	 */
	public $isAnonymous = null;

	/**
	 * 
	 * @var string
	 */
	public $privacyContextEqual = null;

	/**
	 * 
	 * @var string
	 */
	public $privacyContextIn = null;

	/**
	 * 
	 * @var int
	 */
	public $partnerId = null;

}
