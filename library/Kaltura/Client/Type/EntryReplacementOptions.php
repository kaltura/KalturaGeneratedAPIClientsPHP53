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
 * Advanced configuration for entry replacement process
 * @package Kaltura
 * @subpackage Client
 */
class EntryReplacementOptions extends \Kaltura\Client\ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaEntryReplacementOptions';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->keepManualThumbnails))
			$this->keepManualThumbnails = (int)$xml->keepManualThumbnails;
		if(count($xml->pluginOptionItems))
		{
			if(empty($xml->pluginOptionItems))
				$this->pluginOptionItems = array();
			else
				$this->pluginOptionItems = \Kaltura\Client\ParseUtils::unmarshalArray($xml->pluginOptionItems, "KalturaPluginReplacementOptionsItem");
		}
	}
	/**
	 * If true manually created thumbnails will not be deleted on entry replacement
	 * @var int
	 */
	public $keepManualThumbnails = null;

	/**
	 * Array of plugin replacement options
	 * @var array<KalturaPluginReplacementOptionsItem>
	 */
	public $pluginOptionItems;

}
