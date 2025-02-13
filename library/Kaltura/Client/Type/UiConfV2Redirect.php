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
class UiConfV2Redirect extends \Kaltura\Client\ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaUiConfV2Redirect';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->v7id))
			$this->v7id = (int)$xml->v7id;
		if(count($xml->isApproved))
		{
			if(!empty($xml->isApproved) && $xml->isApproved != 'false')
				$this->isApproved = true;
			else
				$this->isApproved = false;
		}
		if(count($xml->translatePlugins))
		{
			if(!empty($xml->translatePlugins) && $xml->translatePlugins != 'false')
				$this->translatePlugins = true;
			else
				$this->translatePlugins = false;
		}
	}
	/**
	 * 
	 * @var int
	 */
	public $v7id = null;

	/**
	 * 
	 * @var bool
	 */
	public $isApproved = null;

	/**
	 * 
	 * @var bool
	 */
	public $translatePlugins = null;

}
