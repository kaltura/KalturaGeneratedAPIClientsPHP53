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
namespace Kaltura\Client\Type;

/**
 * @package Kaltura
 * @subpackage Client
 */
class DeliveryProfileVodPackagerHls extends \Kaltura\Client\Type\DeliveryProfileVodPackagerPlayServer
{
	public function getKalturaObjectType()
	{
		return 'KalturaDeliveryProfileVodPackagerHls';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->allowFairplayOffline))
		{
			if(!empty($xml->allowFairplayOffline) && $xml->allowFairplayOffline != 'false')
				$this->allowFairplayOffline = true;
			else
				$this->allowFairplayOffline = false;
		}
		if(count($xml->supportFmp4))
		{
			if(!empty($xml->supportFmp4) && $xml->supportFmp4 != 'false')
				$this->supportFmp4 = true;
			else
				$this->supportFmp4 = false;
		}
	}
	/**
	 * 
	 * @var bool
	 */
	public $allowFairplayOffline = null;

	/**
	 * 
	 * @var bool
	 */
	public $supportFmp4 = null;

}
